<?php
add_action('wp_ajax_add_vehicle', 'add_vehicle', 0);
add_action('wp_ajax_nopriv_add_vehicle', 'add_vehicle');

function add_vehicle()
{
	global $wpdb;
	$name = $_POST['name'];
	$location = $_POST['location'];
	$price = $_POST['price'];
	$registered_in = $_POST['registered_in'];
	$engine_capacity = $_POST['engine_capacity'];
	$assembly = $_POST['assembly'];
	$interior_color = $_POST['interior_color'];
	$interior_material = $_POST['interior_material'];
	$ref_no = $_POST['ref_no'];
	$seats = $_POST['seats'];
	$emission_class = $_POST['emission_class'];
	$model = $_POST['model'];
	$mileage = $_POST['mileage'];
	$brand = $_POST['brand'];
	$body_type = $_POST['body_type'];
	$color = $_POST['color'];
	$engine_type = $_POST['engine_type'];
	$transmission = $_POST['transmission'];
	$vehicle_type = $_POST['vehicle_type'];
	$uid = $_POST['uid'];
	$file_name = $_FILES["file"]["name"];
	$file_url        = $_FILES["file"]["tmp_name"]; 
	$post = array(
		'post_title'    => $name,
		'post_status'   => 'publish',
		'post_content'   => $name,
		'post_type'     => 'vehicle',
		'meta_input'   => array(
			'location' => $location,
			'price' => $price,
			'registered_in' => $registered_in,
			'engine_capacity' => $engine_capacity,
			'assembly' => $assembly,
			'interior_color' => $interior_color,
			'interior_material' => $interior_material,
			'ref_no' => $ref_no,
			'seats' => $seats,
			'emission_class' => $emission_class,
			'model' => $model,
			'mileage' => $mileage,			
			'order_uid' => $uid,
		),
		'tax_input'    => array(
			'brand' => array($brand),			
			'body_type' => array($body_type),
			'color' => array($color),
			'engine_type' => array($engine_type),
			'transmission' => array($transmission),
			'vehicle_type' => array($vehicle_type)
		),

	);
		$inserted_post_id = wp_insert_post($post);
		//$user = get_user_by( 'id', $uid );
		//$agent_email = $user->user_email;
		//sendmail($agent_email,"New Ticket Created by $agent_email ", $inserted_post_id);

	    $image_url        = $file_url; // Define the image URL here
		$image_name       = $file_name;
		$upload_dir       = wp_upload_dir(); // Set upload folder
		$image_data       = file_get_contents($image_url); // Get image data
		$unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); // Generate unique name
		$filename         = basename( $unique_file_name ); // Create image file name
		if( wp_mkdir_p( $upload_dir['path'] ) ) {
			$file = $upload_dir['path'] . '/' . $filename;
		} else {
			$file = $upload_dir['basedir'] . '/' . $filename;
		}
		file_put_contents( $file, $image_data );
		$wp_filetype = wp_check_filetype( $filename, null );
		$attachment = array(
			'post_mime_type' => $wp_filetype['type'],
			'post_title'     => sanitize_file_name( $filename ),
			'post_content'   => '',
			'post_status'    => 'inherit'
		);



	if (!is_wp_error($inserted_post_id)) {	

		// Create the attachment
		$attach_id = wp_insert_attachment( $attachment, $file, $inserted_post_id );
		 require_once(ABSPATH . 'wp-admin/includes/image.php');
		 $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
		wp_update_attachment_metadata( $attach_id, $attach_data );
		set_post_thumbnail( $inserted_post_id, $attach_id );
		echo wp_send_json(array('code' => 200, 'message' => __('Vehicle Created Sucessfully')));
		die();
	} else {
		echo wp_send_json(array('code' => 0, 'message' => __('Error Occured please fill up form carefully.')));
		die();
	}

	die;
}


add_action('wp_ajax_req_lease', 'req_lease', 0);
add_action('wp_ajax_nopriv_req_lease', 'req_lease');

function req_lease()
{
	global $wpdb;

	// Vehicle info
	$v_id = $_POST['v_id'];
	$v_price = $_POST['v_price'];
	$v_downpay = $_POST['v_downpay'];
	$v_miles = $_POST['v_miles'];
	// Buyer Info  
	$buy_name = $_POST['buy_name'];
	$buy_location = $_POST['buy_location'];
	$buy_mobile = $_POST['buy_mobile'];
	// Certification Details
	$file_name = $_FILES["file"]["name"];
	$file_url        = $_FILES["file"]["tmp_name"]; 
	// Card Details
	$card_title = $_POST['card_title'];
	$card_no = $_POST['card_no'];
	$card_csv = $_POST['card_csv'];
	$card_expiry = $_POST['card_expiry'];
		
	$uid = $_POST['uid'];

	$title = get_the_title($v_id);
	
	$post = array(
		'post_title'    => $title,
		'post_status'   => 'publish',
		'post_content'   => $name,
		'post_type'     => 'orders',
		'meta_input'   => array(
			'location' => $buy_location,
			'price' => $v_price,
			'downpayment' => $v_downpay,
			'milestone' => $v_miles,			
			'order_uid' => $uid,
			'card_title' => $card_title,
			'card_no' => $card_no,
			'card_csv' => $card_csv,
			'card_expiry' => $card_expiry
		),
		'tax_input'    => array(
			'type' => '36'		
		),

	);
		$inserted_post_id = wp_insert_post($post);
		//$user = get_user_by( 'id', $uid );
		//$agent_email = $user->user_email;
		//sendmail($agent_email,"New Ticket Created by $agent_email ", $inserted_post_id);

	    $image_url        = $file_url; // Define the image URL here
		$image_name       = $file_name;
		$upload_dir       = wp_upload_dir(); // Set upload folder
		$image_data       = file_get_contents($image_url); // Get image data
		$unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); // Generate unique name
		$filename         = basename( $unique_file_name ); // Create image file name
		if( wp_mkdir_p( $upload_dir['path'] ) ) {
			$file = $upload_dir['path'] . '/' . $filename;
		} else {
			$file = $upload_dir['basedir'] . '/' . $filename;
		}
		file_put_contents( $file, $image_data );
		$wp_filetype = wp_check_filetype( $filename, null );
		$attachment = array(
			'post_mime_type' => $wp_filetype['type'],
			'post_title'     => sanitize_file_name( $filename ),
			'post_content'   => '',
			'post_status'    => 'inherit'
		);



	if (!is_wp_error($inserted_post_id)) {	

		// Create the attachment
		$attach_id = wp_insert_attachment( $attachment, $file, $inserted_post_id );
		 require_once(ABSPATH . 'wp-admin/includes/image.php');
		 $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
		wp_update_attachment_metadata( $attach_id, $attach_data );
		set_post_thumbnail( $inserted_post_id, $attach_id );
		echo wp_send_json(array('code' => 200, 'message' => __('Leasing Request Sucessfully Created')));
		die();
	} else {
		echo wp_send_json(array('code' => 0, 'message' => __('Error Occured please fill up Leasing form carefully.')));
		die();
	}

	die;
}


