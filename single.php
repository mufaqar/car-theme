<?php get_header(); ?>

<section class="blog-single container mx-auto mt-5 mb-5">
	<?php if (have_posts()):
		while (have_posts()):
			the_post(); ?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<section class="row">
					<div class="content col-md-8">
						<div class="">
							<h1 class="main-heading">
								<?php the_title(); ?>
							</h1>
							<?php include(TEMPLATEPATH . '/inc/meta.php'); ?>
							<div class="entry">
								<?php if (has_post_thumbnail()) { ?>
									<div class="featured-image">
										<?php the_post_thumbnail('single-post-thumbnail'); ?>
									</div>
								<?php } ?>
								<?php the_content(); ?>
								<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

								<div class="tags">
									<?php the_tags(__('Tags:', 'text_domain'), '', '.'); ?>
								</div>
							</div>
						</div>
						<?php edit_post_link(__('Edit', 'text_domain'), '', '.'); ?>
						<?php comments_template(); ?>
					</div>
					<aside class="col-md-4 blog_sidebar"> sidebar </aside>
				</section>
			</div>
		<?php endwhile; endif; ?>
</section>




<?php get_sidebar(); ?>
<?php get_footer(); ?>