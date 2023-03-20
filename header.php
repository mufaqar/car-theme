<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
		<title>
			<?php
				/*
				 * Print the <title> tag based on what is being viewed.
				 */
				global $page, $paged, $post;
			
				wp_title( '|', true, 'right' );
			
				// Add the blog name.
				bloginfo( 'name' );
			
				// Add the blog description for the home/front page.
				$site_description = get_bloginfo( 'description', 'display' );
				if ( $site_description && ( is_home() || is_front_page() ) )
					echo " | $site_description";
			
				// Add a page number if necessary:
				if ( $paged >= 2 || $page >= 2 )
					echo ' | ' . sprintf( __( 'Page %s', 'wpv' ), max( $paged, $page ) );
            ?>
	</title>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	
	
	  <!-- bootstrap -->
	  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/styles/bootstrap.min.css" />
    <!-- slickSlider  -->
    <link
      href="<?php bloginfo('template_directory'); ?>/assets/slick/slick.css" 
      rel="stylesheet"
    />
    <link
      href="<?php bloginfo('template_directory'); ?>/assets/slick/slick-theme.css"
      rel="stylesheet"
    />

	 <!-- <link rel="stylesheet" href="style.css" /> -->
	 <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/output/style.css" />
	
	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>


	<?php wp_head(); ?>
</head>
<body <?php //body_class(); ?>>
