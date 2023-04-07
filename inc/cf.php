<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'vehicle_group',
	'title' => 'Vehicle Info',
	'fields' => array (
		array (
			'key' => 'vehicle_location',
			'label' => 'Location',
			'name' => 'vehicle_location',
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
			'name' => 'vehicle_price',
			'type' => 'text',
			'default_value' => '610',
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'key' => 'vehicle_register',
			'label' => 'Registered In',
			'name' => 'vehicle_register',
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
			'name' => 'vehicle_engine_capacity',
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
			'name' => 'vehicle_assembly',
			'type' => 'text',
			'default_value' => 'Local',
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'key' => 'vehicle_interior_color',
			'label' => 'Interior color',
			'name' => 'vehicle_interior_color',
			'type' => 'text',
			'default_value' => 'Grey',
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'key' => 'vehicle_interior_material',
			'label' => 'Interior material',
			'name' => 'vehicle_interior_material',
			'type' => 'text',
			'default_value' => 'Cloth interior',
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'key' => 'vehicle_ref_no',
			'label' => 'Ref #',
			'name' => 'vehicle_ref_no',
			'type' => 'text',
			'default_value' => '7226369',
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'key' => 'vehicle_seats',
			'label' => 'Seats',
			'name' => 'vehicle_seats',
			'type' => 'text',
			'default_value' => '5',
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'key' => 'vehicle_vin',
			'label' => 'VIN',
			'name' => 'vehicle_vin',
			'type' => 'text',
			'default_value' => '5',
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'key' => 'vehicle_emission_class',
			'label' => 'Emission class',
			'name' => 'vehicle_emission_class',
			'type' => 'text',
			'default_value' => 'Euro 6d',
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'key' => 'vehicle_model',
			'label' => 'Model',
			'name' => 'vehicle_model',
			'type' => 'text',
			'default_value' => 'Vitara',
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'key' => 'vehicle_mileage',
			'label' => 'Mileage',
			'name' => 'vehicle_mileage',
			'type' => 'text',
			'default_value' => '133,042 km',
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'key' => 'vehicle_gallery',
			'label' => 'Vehicle Images',
			'name' => 'vehicle_gallery',
			'type' => 'gallery',
			'default_value' => 'Vitara',
			'wrapper' => array (
				'width' => '100',
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
)
);

endif;