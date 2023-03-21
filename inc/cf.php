
<?php
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
		),
		array (
			'key' => 'vehicle_interior_color',
			'label' => 'Interior color',
			'name' => 'Interior color',
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
			'name' => 'Interior material',
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
			'name' => 'Ref #',
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
			'name' => 'Seats',
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
			'name' => 'VIN',
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
			'name' => 'Emission class',
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
			'name' => 'Model',
			'type' => 'text',
			'default_value' => 'Vitara',
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'key' => 'vehicle_gallery',
			'label' => 'Vehicle Images',
			'name' => 'Vehicle Images',
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
));

endif;