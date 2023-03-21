<?php


include get_template_directory() . '/inc/cpts.php';


if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array (
        'key' => 'vehicle_group',
        'title' => 'Vehicle Info',
        'fields' => array (
            array (
                'key' => 'vehicle_location',
                'label' => 'Location',
                'name' => 'Location',
                'type' => 'text',
                'default_value' => 'DE 63165 Mühlheim..',
                'wrapper' => array (
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
            ),
            array (
                'key' => 'vehicle_price',
                'label' => 'Price',
                'name' => 'price',
                'type' => 'text',
                'default_value' => 'DE 63165 Mühlheim..',
                'wrapper' => array (
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
            ),
            array (
                'key' => 'vehicle_register',
                'label' => 'Registered In',
                'name' => 'Registered In',
                'type' => 'text',
                'default_value' => '2016',
                'wrapper' => array (
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
            ),
            array (
                'key' => 'vehicle_engine_capacity',
                'label' => 'Engine Capacity',
                'name' => 'Engine Capacity',
                'type' => 'text',
                'default_value' => '1500 cc',
                'wrapper' => array (
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
            ),
            array (
                'key' => 'vehicle_assembly',
                'label' => 'Assembly',
                'name' => 'Assembly',
                'type' => 'text',
                'default_value' => 'Local',
                'wrapper' => array (
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
            )
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'vehicle',
                ),
            ),
        ),
    ));
    
    endif;