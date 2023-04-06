<?php /*  Template Name:  Search */

get_header(); ?>

<section class="search_header container mx-auto">
  <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/icons/logo.svg"
      alt="logo" /></a>
</section>

 <section class="container row mx-auto search">
      <?php get_sidebar()?>
      <div class="col-md-9 listing">
         

<?php query_posts(array(
    'post_type' => 'vehicle',
    'posts_per_page' => 6,
          'order' => 'desc'
    
)); 
if (have_posts()) :  while (have_posts()) : the_post();    

          
          
          get_template_part( 'template-parts/vehicle', 'card' ); endwhile; wp_reset_query(); else : ?>
			<h2><?php _e('Nothing Found','lbt_translate'); ?></h2>
	        <?php endif; ?> 
      </div>
 </section>

<?php get_footer(); ?>