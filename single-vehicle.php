<?php get_header(); 
    if (have_posts()):while (have_posts()):	the_post();
        if ( has_term( 'rental', 'vehicle_type' ) ) {
            get_template_part( 'template-parts/single', 'rent' );
        } else {
        get_template_part( 'template-parts/single', 'leasing' );
        }
    endwhile; endif; 
    get_footer(); ?>