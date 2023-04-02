<?php /*  Template Name:  Search */

get_header(); ?>

<section class="search_header container mx-auto">
  <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/icons/logo.svg"
      alt="logo" /></a>
</section>

 <section class="container row mx-auto search">
      <?php get_sidebar()?>
      <div class="col-md-9 listing">
          <?php get_template_part( 'template-parts/vehicle', 'card' ); ?>
      </div>
 </section>

<?php get_footer(); ?>