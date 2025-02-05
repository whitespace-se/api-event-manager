<?php

namespace HbgEventImporter;

use \HbgEventImporter\Helper\DataCleaner as DataCleaner;

class Event extends \HbgEventImporter\Entity\PostManager
{
    public $post_type = 'event';

    /**
     * Stuff to do before save
     * @return void
     */
    public function beforeSave()
    {
        // Format price
        $this->price_adult = DataCleaner::price($this->price_adult);
        $this->price_children = DataCleaner::price($this->price_children);

        // Format phone number
        $this->booking_phone = DataCleaner::phoneNumber($this->booking_phone);

        // Clean strings
        $this->post_title = DataCleaner::string($this->post_title);
        $this->post_content = DataCleaner::string($this->post_content);
        $this->_event_manager_uid = DataCleaner::string($this->_event_manager_uid);
        $this->status = DataCleaner::string($this->status);
        $this->event_link = DataCleaner::string($this->event_link);
        $this->booking_link = DataCleaner::string($this->booking_link);
        $this->age_restriction = DataCleaner::string($this->age_restriction);
        $this->price_information = DataCleaner::string($this->price_information);
    }

    /**
     * Do after save
     * @return bool ,used if post got removed or not
     */
    public function afterSave()
    {
        $this->saveCategories();
        $this->mapCategories();
        $this->saveGroups();
        $this->saveOccasions();
        $this->saveTags();
        $this->saveOrganizer();
        $this->saveTicketTypes();
        $this->saveTicketRetailers();

        return true;
    }

    /**
     * Saves categories to imported categories taxonomy
     * @return void
     */
    public function saveCategories()
    {
        wp_set_object_terms($this->ID, $this->categories, 'imported_categories', false);
    }

    /**
     * Maps the imported categories with the categories of the event post type
     * @return void
     */
    public function mapCategories()
    {
        $matches = array();
        $importCategories = array_map('trim', $this->categories);
        $postCategories = get_categories(array('taxonomy' => 'event_categories', 'hide_empty' => false));

        foreach ($postCategories as $postCategory) {
            $mapTheseCategories = get_field('event_categories_map', 'event_categories_' . $postCategory->term_id);

            if (is_array($mapTheseCategories) && !is_wp_error($mapTheseCategories)) {
                foreach ($mapTheseCategories as $map) {
                    if (!is_wp_error($map) && in_array(html_entity_decode($map->name), $importCategories)) {
                        $matches[] = $postCategory->term_id;
                    }
                }
            }
        }

        wp_set_object_terms($this->ID, $matches, 'event_categories', false);
    }

    /**
     * Saves publishing groups as user_groups taxonomy terms
     * @return void
     */
    public function saveGroups()
    {
        wp_set_object_terms($this->ID, $this->user_groups, 'user_groups', false);
    }

    /**
     * Saves hashtags from content as event_tags
     * @return void
     */
    public function saveTags()
    {
        DataCleaner::hashtags($this->ID, 'event_tags');
    }

    /**
     * Saves Organizers to the organizers repeater
     * @return void
     */
    public function saveOrganizer()
    {
        update_field('field_5922a161ab32f', $this->organizer, $this->ID);
    }

    /**
     * Saves occasions to the occasions repeater
     * @return void
     */
    public function saveOccasions()
    {
        global $wpdb;

        $occasionError = false;
        $dbOccasions = $wpdb->prefix . "occasions";

        // Delete event occasions if this is the first occurance in the loop
        if (!$this->occurred) {
            $wpdb->delete($dbOccasions, array('event' => $this->ID), array('%d'));
        }

        // Save new occasions to occasion table
        foreach ($this->occasions as $o) {
            $locationMode = isset($o['location_mode']) && !empty($o['location_mode']) ? $o['location_mode'] : null;
            $location = isset($o['location']) && !empty($o['location']) ? $o['location'] : null;
            $bookingLink = isset( $o[ 'booking_link' ] ) && !empty( $o[ 'booking_link' ] ) ? $o[ 'booking_link' ] : null;

            $occasionError = $this->extractEventOccasion($o['start_date'], $o['end_date'], $o['door_time'], $locationMode, $location, $bookingLink);
        }

        // Save new list of occasion to meta
        $query = $wpdb->prepare("SELECT timestamp_start, timestamp_end, timestamp_door, location_mode, location, booking_link FROM $dbOccasions WHERE event = %d", $this->ID);
        $getOccasions = $wpdb->get_results($query, ARRAY_A);
        $newOccasions = array();
        foreach ($getOccasions as $occasion) {
            $newOccasions[] = array(
                'start_date' => date('Y-m-d H:i:s', $occasion['timestamp_start']),
                'end_date' => date('Y-m-d H:i:s', $occasion['timestamp_end']),
                'door_time' => date('Y-m-d H:i:s', $occasion['timestamp_door']),
                'location_mode' => isset($occasion['location_mode']) && !empty($occasion['location_mode']) ? $occasion['location_mode'] : null,
                'location' => isset($occasion['location']) && !empty($occasion['location']) ? $occasion['location'] : null,
                'booking_link' => isset($occasion['booking_link']) && !empty($occasion['booking_link']) ? $occasion['booking_link'] : null,
            );
        }

        update_field('field_5761106783967', $newOccasions, $this->ID);
        delete_post_meta($this->ID, 'occurred');

        // Use this to say something is wrong with occasions and someone need to look over the data
        return $occasionError;
    }

    public function extractEventOccasion($startDate, $endDate, $doorTime, $locationMode, $location, $bookingLink)
    {
        global $wpdb;

        $dbOccasions = $wpdb->prefix . "occasions";
        $eventId = $this->ID;

        $timestampStart = strtotime($startDate);
        $timestampEnd = strtotime($endDate);
        $timestampDoor = (!empty($doorTime)) ? strtotime($doorTime) : null;

        if ($timestampStart <= 0 || $timestampEnd <= 0 || $timestampStart == false || $timestampEnd == false) {
            return false;
        }

        // We do not need to get all fields, they are just for debugging
        $testQuery = $wpdb->prepare("SELECT * FROM $dbOccasions WHERE event = %d AND timestamp_start = %d AND timestamp_end = %d", $eventId, $timestampStart, $timestampEnd);
        $existing = $wpdb->get_results($testQuery);

        $resultString = '';
        if (empty($existing)) {
            $wpdb->insert(
                $dbOccasions,
                array(
                    'event' => $eventId,
                    'timestamp_start' => $timestampStart,
                    'timestamp_end' => $timestampEnd,
                    'timestamp_door' => $timestampDoor,
                    'location_mode' => $locationMode,
                    'location' => $location,
                    'booking_link' => $bookingLink,
                )
            );

            $resultString .= "New event occasions inserted with event id: " . $eventId . ', and timestamp_start: ' . $timestampStart . ", timestamp_end: " . $timestampEnd . "\n";
        } else {
            $resultString .= "Already exists! Event: " . $existing[0]->event . ', timestamp: ' . $existing[0]->timestamp_start . ", timestamp_end: " . $existing[0]->timestamp_end . "\n";
        }

        return true;
    }

    /**
     * Save Additional ticket types with ACF
     */
    public function saveTicketTypes()
    {
        if (isset($this->additional_ticket_types)) {
            update_field('field_5ae2e55f94974', $this->additional_ticket_types, $this->ID);
        }
    }

    /**
     * Save Additional ticket retailers with ACF
     */
    public function saveTicketRetailers()
    {
        if (isset($this->additional_ticket_types)) {
            update_field('field_5ae320279d7e0', $this->additional_ticket_retailers, $this->ID);
        }
    }
}
