<?php

namespace HbgEventImporter\Api;

/**
 * Adding meta fields to location post type
 */

class LocationFields extends Fields
{
    private $postType = 'location';

    public function __construct()
    {
        add_action('rest_api_init', array($this, 'registerRestFields'));
    }

    /**
     * Register rest fields to consumer api
     * @return  void
     * @version 0.3.2 creating consumer accessable meta values.
     */
    public static function registerRestFields()
    {
        //Street adress
        register_rest_field($this->postType,
            'street_address',
            array(
                'get_callback' => array($this, 'stringGetCallBack'),
                'update_callback' => array($this, 'stringUpdateCallBack'),
                'schema' => array(
                    'description' => 'Field containing string value with street adress.',
                    'type' => 'string',
                    'context' => array('view', 'edit', 'embed')
                )
            )
        );

        //Postal code
        register_rest_field($this->postType,
            'postal_code',
            array(
                'get_callback' => array($this, 'stringGetCallBack'),
                'update_callback' => array($this, 'stringUpdateCallBack'),
                'schema' => array(
                    'description' => 'Field containing string value with postal code.',
                    'type' => 'string',
                    'context' => array('view', 'edit', 'embed')
                )
            )
        );

         //Street adress
        register_rest_field($this->postType,
            'city',
            array(
                'get_callback' => array($this, 'stringGetCallBack'),
                'update_callback' => array($this, 'stringUpdateCallBack'),
                'schema' => array(
                    'description' => 'Field containing string value with city.',
                    'type' => 'string',
                    'context' => array('view', 'edit', 'embed')
                )
            )
        );

        //Municipality
        register_rest_field($this->postType,
            'municipality',
            array(
                'get_callback' => array($this, 'stringGetCallBack'),
                'update_callback' => array($this, 'stringUpdateCallBack'),
                'schema' => array(
                    'description' => 'Field containing string value with municipality.',
                    'type' => 'string',
                    'context' => array('view', 'edit', 'embed')
                )
            )
        );

        //Country
        register_rest_field($this->postType,
            'country',
            array(
                'get_callback' => array($this, 'stringGetCallBack'),
                'update_callback' => array($this, 'stringUpdateCallBack'),
                'schema' => array(
                    'description' => 'Field containing string value with country.',
                    'type' => 'string',
                    'context' => array('view', 'edit', 'embed')
                )
            )
        );

        //Latitude
        register_rest_field($this->postType,
            'latitude',
            array(
                'get_callback' => array($this, 'stringGetCallBack'),
                'update_callback' => array($this, 'stringUpdateCallBack'),
                'schema' => array(
                    'description' => 'Field containing string value with coordinates.',
                    'type' => 'string',
                    'context' => array('view', 'edit', 'embed')
                )
            )
        );

        //Latitude
        register_rest_field($this->postType,
            'longitude',
            array(
                'get_callback' => array($this, 'stringGetCallBack'),
                'update_callback' => array($this, 'stringUpdateCallBack'),
                'schema' => array(
                    'description' => 'Field containing string value with coordinates.',
                    'type' => 'string',
                    'context' => array('view', 'edit', 'embed')
                )
            )
        );

        //Formatted address
        register_rest_field($this->postType,
            'formatted_address',
            array(
                'get_callback' => array($this, 'stringGetCallBack'),
                'update_callback' => array($this, 'stringUpdateCallBack'),
                'schema' => array(
                    'description' => 'Field containing string value with formatted address.',
                    'type' => 'string',
                    'context' => array('view', 'edit', 'embed')
                )
            )
        );

        //Open hours
        register_rest_field($this->postType,
            'oph_exceptions',
            array(
                'get_callback' => array($this, 'objectGetCallBack'),
                'update_callback' => array($this, 'objectUpdateCallBack'),
                'schema' => array(
                    'description' => 'Field containing object with open hour exceptions.',
                    'type' => 'object',
                    'context' => array('view', 'edit')
                )
            )
        );

        register_rest_field($this->postType,
            'open_hours_mon',
            array(
                'get_callback' => array($this, 'stringGetCallBack'),
                'update_callback' => array($this, 'stringUpdateCallBack'),
                'schema' => array(
                    'description' => 'Field containing object with open hours.',
                    'type' => 'string',
                    'context' => array('view', 'edit')
                )
            )
        );

        register_rest_field($this->postType,
            'open_hours_tue',
            array(
                'get_callback' => array($this, 'stringGetCallBack'),
                'update_callback' => array($this, 'stringUpdateCallBack'),
                'schema' => array(
                    'description' => 'Field containing object with open hours.',
                    'type' => 'string',
                    'context' => array('view', 'edit')
                )
            )
        );

        register_rest_field($this->postType,
            'open_hours_wed',
            array(
                'get_callback' => array($this, 'stringGetCallBack'),
                'update_callback' => array($this, 'stringUpdateCallBack'),
                'schema' => array(
                    'description' => 'Field containing object with open hours.',
                    'type' => 'string',
                    'context' => array('view', 'edit')
                )
            )
        );

        register_rest_field($this->postType,
            'open_hours_thu',
            array(
                'get_callback' => array($this, 'stringGetCallBack'),
                'update_callback' => array($this, 'stringUpdateCallBack'),
                'schema' => array(
                    'description' => 'Field containing object with open hours.',
                    'type' => 'string',
                    'context' => array('view', 'edit')
                )
            )
        );

        register_rest_field($this->postType,
            'open_hours_fri',
            array(
                'get_callback' => array($this, 'stringGetCallBack'),
                'update_callback' => array($this, 'stringUpdateCallBack'),
                'schema' => array(
                    'description' => 'Field containing object with open hours.',
                    'type' => 'string',
                    'context' => array('view', 'edit')
                )
            )
        );

        register_rest_field($this->postType,
            'open_hours_sat',
            array(
                'get_callback' => array($this, 'stringGetCallBack'),
                'update_callback' => array($this, 'stringUpdateCallBack'),
                'schema' => array(
                    'description' => 'Field containing object with open hours.',
                    'type' => 'string',
                    'context' => array('view', 'edit')
                )
            )
        );

        register_rest_field($this->postType,
            'open_hours_sun',
            array(
                'get_callback' => array($this, 'stringGetCallBack'),
                'update_callback' => array($this, 'stringUpdateCallBack'),
                'schema' => array(
                    'description' => 'Field containing object with open hours.',
                    'type' => 'string',
                    'context' => array('view', 'edit')
                )
            )
        );

        // Gallery
        register_rest_field($this->postType,
            'gallery',
            array(
                'get_callback' => array($this, 'objectGetCallBack'),
                'update_callback' => array($this, 'objectUpdateCallBack'),
                'schema' => array(
                    'description' => 'Field containing object with gallery.',
                    'type' => 'object',
                    'context' => array('view', 'edit')
                )
            )
        );
    }
}
