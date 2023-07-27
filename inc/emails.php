<?php


	// Send email to Agent
	function sendmail_agent($agent_email,$post_id) {		
		$admin = 'lp@001cars.com';
		$subject = '001 Cars | Vehicle Listing Notification ';
		$body  = "<h1>Congrgralations your add sucessfully submited</h1> ";
		$body  .= "<p><img src='https://001cars.com/wp-content/uploads/2023/07/logo.png' width='320px'></img></p><hr/> ";
		$body  .= "<p><strong> You Vehicle Listed Sucessfully once admin approve it it wil be display on the website. </strong>  </p> ";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: info@001cars.com" . "\r\n" ;			
		mail( $admin, $subject, $body, $headers );
		
	}

	// Send Admint Notification 

	function sendmail_admin($agent_email,$post_id) {	
		$admin = 'lp@001cars.com,mufaqar@gmail.com';
		$subject = '001 Cars | Admin Notification ';
		$body  = "<h1>New Ads added on website , Please approve it</h1> ";
		$body  .= "<p><img src='https://001cars.com/wp-content/uploads/2023/07/logo.png' width='320px'></img></p><hr/> ";
		$body  .= "<p><strong> Agent: </strong> $agent_email </p> ";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: info@001cars.com" . "\r\n" . "CC: $agent_email";	
		wp_mail( $admin, $subject, $body, $headers );
	}

	

	

	// Agent Activation Email 

	// function activation_mail($to,$activation_link) {
	// 	$subject = 'Budget Computer & Kiwi Mobiles | User Account Activation';	
	// 	$headers = "MIME-Version: 1.0" . "\r\n";
    //     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    //     $headers .= "From: info@001cars.com" . "\r\n" . "CC: mufaqar@gmail.com";
	// 	$body   = "<p><img src='https://001cars.com/wp-content/themes/car-theme/assets/icons/logo.svg' width='320px'></img></p><hr/> ";
	// 	$body  .= "<p><strong> Account Activation Link: </strong><a href='$activation_link' >Activate your Account</a> </p> ";
	// 	$body  .= "<p><strong> DID:   </strong> 09 9508717 </p> ";
	// 	$body  .= "<p><strong> Email:   </strong>budgetcomputer@kiwimobiles.co.nz</p> ";
	// 	wp_mail( $to, $subject, $body, $headers );
	// }

		// Reset Password Email 

	// function send_reset_password($username,$password) {
	// 	$subject = 'Budget Computer & Kiwi Mobiles | User Account Activation';	
	// 	$headers = "MIME-Version: 1.0" . "\r\n";
    //     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    //     $headers .= "From: info@001cars.com" . "\r\n" . "CC: mufaqar@gmail.com";
	// 	$body   = "<p><img src='https://001cars.com/wp-content/themes/car-theme/assets/icons/logo.svg' width='320px'></img></p><hr/> ";
	// 	$body  .= "<p><strong> Username : </strong>$username </p> ";
	// 	$body  .= "<p><strong> Password : </strong>$password </p> ";
	// 	wp_mail( $to, $subject, $body, $headers );
	// }


