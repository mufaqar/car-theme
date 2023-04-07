<?php get_header(); ?>

<section class="contact-us">
      <h2 class="sub-heading"><?php the_title()?></h2>
      <p>One-Stop Platform for Exceptional Automotive Solutions</p>
   </section>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">      
        <div class="entry">
           <?php if ( has_post_thumbnail() ) { ?>
    		    <div class="featured-image">
					<?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
    		    </div>
			<?php } ?>	
			<?php the_content(); ?>
			
        </div>
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>