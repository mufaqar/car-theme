<?php  /*  Template Name:  Test */

get_header(); ?>

<?php


	function sendmail_test($user_email) {
		$admin = 'mufaqar@gmail.com';
		$subject = '001 Cars | Admin Notification ';
		$body  = "<h1>New Ads added on website </h1> ";
		$body  .= "<p><img src='https://001cars.com/wp-content/themes/car-theme/assets/icons/logo.svg' width='320px'></img></p><hr/> ";
		$body  .= "<p><strong> Email Address: </strong> $user_email </p> ";
		$headers[] = 'From: mufaqar@gmail.com" . "\r\n';
		$headers[] = 'Cc: mufaqar2@gmail.com';	
		$headers[] = "Content-Type: text/html; charset=UTF-8\r\n";
		wp_mail( $admin, $subject, $body, $headers );
        echo "Email sent Sucessfully";
	}

    
    sendmail_test('mufaqar@gmail.com')

    ?>


<?php get_footer(); ?>