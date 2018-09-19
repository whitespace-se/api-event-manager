<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_589497ca3741e',
    'title' => __('Basic Guide Settings', 'event-manager'),
    'fields' => array(
        0 => array(
            'key' => 'field_58949857fc7b0',
            'label' => __('General', 'event-manager'),
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'left',
            'endpoint' => 0,
        ),
        1 => array(
            'key' => 'field_5a2946555fd0e',
            'label' => __('Guide tagline', 'event-manager'),
            'name' => 'guide_tagline',
            'type' => 'text',
            'instructions' => __('Short tagline that descibes what this is about', 'event-manager'),
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => __('E.g: Swedish contemporary glassware', 'event-manager'),
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        2 => array(
            'key' => 'field_5a2946e05fd0f',
            'label' => __('Date start', 'event-manager'),
            'name' => 'guide_date_start',
            'type' => 'date_picker',
            'instructions' => __('This field is strictly informative', 'event-manager'),
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '50',
                'class' => '',
                'id' => '',
            ),
            'display_format' => 'Y-m-d',
            'return_format' => 'Y-m-d',
            'first_day' => 1,
        ),
        3 => array(
            'key' => 'field_5a2947095fd10',
            'label' => __('Date end', 'event-manager'),
            'name' => 'guide_date_end',
            'type' => 'date_picker',
            'instructions' => __('This field is strictly informative', 'event-manager'),
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '50',
                'class' => '',
                'id' => '',
            ),
            'display_format' => 'Y-m-d',
            'return_format' => 'Y-m-d',
            'first_day' => 1,
        ),
        4 => array(
            'key' => 'field_58949813a052c',
            'label' => __('Description', 'event-manager'),
            'name' => 'guide_description',
            'type' => 'wysiwyg',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'tabs' => 'all',
            'toolbar' => 'basic',
            'media_upload' => 0,
            'delay' => 0,
        ),
        5 => array(
            'key' => 'field_58cbfb6e8d677',
            'label' => __('Location', 'event-manager'),
            'name' => 'guide_location',
            'type' => 'post_object',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'post_type' => array(
                0 => 'location',
            ),
            'taxonomy' => array(
            ),
            'allow_null' => 0,
            'multiple' => 0,
            'return_format' => 'id',
            'ui' => 1,
        ),
        6 => array(
            'key' => 'field_58d4e9a227c41',
            'label' => __('For kids', 'event-manager'),
            'name' => 'guide_kids',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => 0,
            'message' => __('This guide is har target group "kids".', 'event-manager'),
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        7 => array(
            'key' => 'field_5894987dfc7b1',
            'label' => __('Images (guide)', 'event-manager'),
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'left',
            'endpoint' => 0,
        ),
        8 => array(
            'key' => 'field_589dc93cde2d7',
            'label' => __('Guide images', 'event-manager'),
            'name' => 'guide_images',
            'type' => 'gallery',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => 'secondary-panel',
                'id' => '',
            ),
            'min' => '',
            'max' => 10,
            'insert' => 'append',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => 'jpg,jpeg,png',
        ),
        9 => array(
            'key' => 'field_5899a94bff0ec',
            'label' => __('Content objects', 'event-manager'),
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'top',
            'endpoint' => 0,
        ),
        10 => array(
            'key' => 'field_5899cc4b59d94',
            'label' => __('Content (paintings, art, flowers etc.)', 'event-manager'),
            'name' => 'guide_content_objects',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'min' => 0,
            'max' => 500,
            'layout' => 'block',
            'button_label' => __('Add new object', 'event-manager'),
            'collapsed' => 'field_5899aab938d3d',
            'sub_fields' => array(
                0 => array(
                    'key' => 'field_589db03e16e51',
                    'label' => __('General', 'event-manager'),
                    'name' => '',
                    'type' => 'tab',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'placement' => 'top',
                    'endpoint' => 0,
                ),
                1 => array(
                    'key' => 'field_5899aab938d3d',
                    'label' => __('Object title', 'event-manager'),
                    'name' => 'guide_object_title',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '75',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => __('The title of the object', 'event-manager'),
                    'prepend' => '',
                    'append' => '',
                ),
                2 => array(
                    'key' => 'field_589dcc1a7deb3',
                    'label' => __('Exhibition ID', 'event-manager'),
                    'name' => 'guide_object_id',
                    'type' => 'number',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '25',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'min' => 1,
                    'max' => 999,
                    'step' => 1,
                    'placeholder' => '',
                    'prepend' => __('#', 'event-manager'),
                    'append' => '',
                ),
                3 => array(
                    'key' => 'field_5899aae338d3e',
                    'label' => __('Object description', 'event-manager'),
                    'name' => 'guide_object_description',
                    'type' => 'wysiwyg',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'tabs' => 'all',
                    'toolbar' => 'basic',
                    'media_upload' => 1,
                    'default_value' => '',
                    'delay' => 0,
                ),
                4 => array(
                    'key' => 'field_589db05816e52',
                    'label' => __('Media', 'event-manager'),
                    'name' => '',
                    'type' => 'tab',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'placement' => 'top',
                    'endpoint' => 0,
                ),
                5 => array(
                    'key' => 'field_5899ab0338d3f',
                    'label' => __('Object image', 'event-manager'),
                    'name' => 'guide_object_image',
                    'type' => 'gallery',
                    'instructions' => __('Multiple images in jpg or png format of the object.', 'event-manager'),
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '100',
                        'class' => '',
                        'id' => '',
                    ),
                    'library' => 'all',
                    'min' => '',
                    'max' => 10,
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => 'jpg,jpeg,png',
                    'insert' => 'append',
                ),
                6 => array(
                    'key' => 'field_5899ab2c38d40',
                    'label' => __('Object audio', 'event-manager'),
                    'name' => 'guide_object_audio',
                    'type' => 'file',
                    'instructions' => __('An audiofile describing the object. This should be fairly compressed. Preferred format of the audio is AAC+ V2.', 'event-manager'),
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'array',
                    'library' => 'uploadedTo',
                    'min_size' => '',
                    'max_size' => 50,
                    'mime_types' => 'm4a,aac,mp3',
                ),
                7 => array(
                    'key' => 'field_5899ac03acc12',
                    'label' => __('Object video', 'event-manager'),
                    'name' => 'guide_object_video',
                    'type' => 'file',
                    'instructions' => __('An videofile describing the object. This should be fairly compressed. Preferred container of the video is MP4.', 'event-manager'),
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'array',
                    'library' => 'uploadedTo',
                    'min_size' => '',
                    'max_size' => 50,
                    'mime_types' => 'mp4',
                ),
                8 => array(
                    'key' => 'field_589db08d16e53',
                    'label' => __('Länkar', 'event-manager'),
                    'name' => '',
                    'type' => 'tab',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'placement' => 'top',
                    'endpoint' => 0,
                ),
                9 => array(
                    'key' => 'field_5899e5c8a583c',
                    'label' => __('Links & Resources', 'event-manager'),
                    'name' => 'guide_object_links',
                    'type' => 'repeater',
                    'instructions' => __('Add links related to the object. This can be a website or a published file (on the web) containing further information about the object.', 'event-manager'),
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => 'secondary-panel',
                        'id' => '',
                    ),
                    'min' => 0,
                    'max' => 20,
                    'layout' => 'block',
                    'button_label' => __('Add new link', 'event-manager'),
                    'collapsed' => 'field_5899e5e1a583d',
                    'sub_fields' => array(
                        0 => array(
                            'key' => 'field_5899e5e1a583d',
                            'label' => __('Linkname', 'event-manager'),
                            'name' => 'guide_object_link_title',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '50',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'maxlength' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                        ),
                        1 => array(
                            'key' => 'field_5899e64fa583e',
                            'label' => __('Web adress', 'event-manager'),
                            'name' => 'guide_object_link_url',
                            'type' => 'url',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '50',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                        ),
                    ),
                ),
                10 => array(
                    'key' => 'field_589db114078de',
                    'label' => __('Beacons', 'event-manager'),
                    'name' => '',
                    'type' => 'tab',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        0 => array(
                            0 => array(
                                'field' => 'field_58949a8f0c4cd',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'placement' => 'top',
                    'endpoint' => 0,
                ),
                11 => array(
                    'key' => 'field_589db29081803',
                    'label' => __('Object beacon ID', 'event-manager'),
                    'name' => 'guide_object_beacon_id',
                    'type' => 'text',
                    'instructions' => __('A unique id for a specific    bluetooth beacon.', 'event-manager'),
                    'required' => 1,
                    'conditional_logic' => array(
                        0 => array(
                            0 => array(
                                'field' => 'field_58949a8f0c4cd',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '60',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                ),
                12 => array(
                    'key' => 'field_589dc6da3611c',
                    'label' => __('Beacon trigger distance', 'event-manager'),
                    'name' => 'guide_object_beacon_distance',
                    'type' => 'number',
                    'instructions' => __('Distance that the beacon should be triggered at.', 'event-manager'),
                    'required' => 1,
                    'conditional_logic' => array(
                        0 => array(
                            0 => array(
                                'field' => 'field_58949a8f0c4cd',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '40',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 5,
                    'min' => 1,
                    'max' => 70,
                    'step' => 1,
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => __('meters', 'event-manager'),
                ),
                13 => array(
                    'key' => 'field_58a5c081f4193',
                    'label' => __('Visibility', 'event-manager'),
                    'name' => '',
                    'type' => 'tab',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'placement' => 'top',
                    'endpoint' => 0,
                ),
                14 => array(
                    'key' => 'field_58a5c098f4194',
                    'label' => __('Object visibility', 'event-manager'),
                    'name' => 'guide_object_active',
                    'type' => 'true_false',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 0,
                    'message' => __('Yes, show this object', 'event-manager'),
                    'ui' => 0,
                    'ui_on_text' => __('Show', 'event-manager'),
                    'ui_off_text' => __('Hide', 'event-manager'),
                ),
                15 => array(
                    'key' => 'field_58ad84a12d5ac',
                    'label' => __('Unique ID', 'event-manager'),
                    'name' => 'guide_object_uid',
                    'type' => 'unique_id',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                ),
            ),
        ),
        11 => array(
            'key' => 'field_58ab0c6354b09',
            'label' => __('Beacons', 'event-manager'),
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'top',
            'endpoint' => 0,
        ),
        12 => array(
            'key' => 'field_58ac5c65cdffe',
            'label' => __('Beacon namespace', 'event-manager'),
            'name' => 'guide_beacon_namespace',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
        ),
        13 => array(
            'key' => 'field_58ab0b4454b08',
            'label' => __('Beacon groups', 'event-manager'),
            'name' => 'guide_beacon',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'min' => 0,
            'max' => 0,
            'layout' => 'table',
            'button_label' => __('Lägg till grupp', 'event-manager'),
            'collapsed' => 'field_58ab0cf054b0b',
            'sub_fields' => array(
                0 => array(
                    'key' => 'field_58ab0c9554b0a',
                    'label' => __('Plats', 'event-manager'),
                    'name' => 'location',
                    'type' => 'post_object',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '37',
                        'class' => '',
                        'id' => '',
                    ),
                    'post_type' => array(
                        0 => 'location',
                    ),
                    'taxonomy' => array(
                    ),
                    'allow_null' => 0,
                    'multiple' => 0,
                    'return_format' => 'id',
                    'ui' => 1,
                ),
                1 => array(
                    'key' => '44182',
                    'label' => '',
                    'name' => '',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                ),
                2 => array(
                    'key' => 'field_58ac54a64bb06',
                    'label' => __('Beacon ID', 'event-manager'),
                    'name' => 'beacon',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '20',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                ),
                3 => array(
                    'key' => 'field_58d4e9dcfd6e8',
                    'label' => __('Beacon distance', 'event-manager'),
                    'name' => 'distance',
                    'type' => 'number',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '20',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 5,
                    'min' => 1,
                    'max' => 50,
                    'step' => 1,
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => __('meters', 'event-manager'),
                ),
            ),
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'guide',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'field',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => 'Manage main guide object details.',
));
}