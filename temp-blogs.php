<?php
/*  Template Name:  Blogs Listing */

get_header(); ?>


<section class="contact-us listing_banner">
  <h2 class="sub-heading">
    <?php the_title() ?>
  </h2>
  <p>One-Stop Platform for Exceptional Automotive Solutions</p>
</section>

<section class="container mx-auto listing_page_wrapper">

    <?php query_posts(
      array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'order' => 'desc'

      )
    );
    if (have_posts()):
      while (have_posts()):
        the_post(); ?>
        <div class="slider-card-wrapper">
          <div class="slider-card">
            <a href="<?php the_permalink() ?>">
              <?php if (has_post_thumbnail()) {
                the_post_thumbnail('vehicle-thumbnail');
              } else { ?>
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png" alt="car"
                  style="width: 100%" />
              <?php } ?></a>
            <div class="card-body">
              <div class="properties">
                <div>
                  <p>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/icons/calender.svg" alt="cal" />
                    <span class="mt-1">
                      <?php the_time(get_option('date_format')); ?>
                    </span>
                  </p>
                </div>
              </div>
              <h4 class="heading"> <a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>

              <div class="card-footer">
                <a href="<?php the_permalink() ?>">
                  <button href="<?php the_permalink() ?>" class="button">Read More</button>
                </a>
              </div>
            </div>
          </div>
        </div>

      <?php endwhile;
      wp_reset_query();
    else: ?>
      <h2>
        <?php _e('Nothing Found', 'lbt_translate'); ?>
      </h2>
    <?php endif; ?>

</section>
<?php get_footer(); ?>