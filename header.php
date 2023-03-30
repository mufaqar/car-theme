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

	
	 <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/output/style.css" />
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	
	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>


	<?php wp_head(); ?>


</head>
<body <?php body_class(); ?>>


<header>
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/icons/logo.svg" alt="logo" /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse justify-content-center navbar-collapse"
            id="navbarNav"
          >
            
			<?php wp_nav_menu( array(
					'menu'              => 'main',
					'theme_location'    => 'main',
					'depth'             => 2,
					'container'         => 'false',
					'menu_class'        => 'navbar-nav',
					'fallback_cb'       => 'wp_bootstrap_navlist_walker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
					) ); ?>

          </div>
          <div class="d-flex align-items-center text-uppercase logins_section">
            <div class="button mx-4"><a href="<?php echo home_url('register'); ?>">Register</a></div>
            <div class="d-flex align-items-center header_dropdown">
			        <a href="<?php echo home_url(); ?>"> <span>Build Your Own</span>
                   <img src="<?php bloginfo('template_directory'); ?>/assets/icons/arrow_down.svg" alt="arrow Down" />
			      	</a>
            </div>
          </div>
        </div>
      </nav>
    </header>
