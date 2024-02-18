<?php get_header(); ?>	
	<section class="contact-us">
   	   <h2 class="sub-heading"><?php echo get_the_archive_title() ?></h2>
    </section>
	<?php if (have_posts()) : ?>
	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
	
	<section class="container row mx-auto search">
	<?php get_sidebar(); ?>
	<div class="col-md-9 listing">
			<?php while (have_posts()) : the_post(); ?>
				<!-- <div <?php post_class() ?>>
					<h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
					
				</div> -->
				<?php get_template_part( 'template-parts/vehicle', 'card' ); ?>
			<?php endwhile; ?>
			<?php if (function_exists("pagination")) {
				//pagination($additional_loop->max_num_pages);
			} ?>			
			<?php else : ?>
				<h2><?php _e('Nothing Found','text_domain'); ?></h2>
			<?php endif; ?>
	</section>

<?php get_footer(); ?>
