<?php
 /*  Template Name:  Blog Page */

get_header(); ?>


<section class="ml-8-per">
      <div class="__slider">
        <div
          class="slider-header d-flex flex-wrap mb-5 justify-content-between"
        >
          <h2>Latest News</h2>
          <div class="slider-btn latestNews">
            <button class="prev">
              <div>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/left-arrow-dark.svg" width="12" />
              </div>
            </button>
            <button class="next">
              <div>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/right-arrow-dark.svg" width="12" />
              </div>
            </button>
          </div>
        </div>
        <div class="full-slider latest-news-wrapper" id="wrapper">

            <?php global $paged;
                query_posts(array(
                'posts_per_page' => -1,
                'paged' => $paged
                )); 
            ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       
                <div class="slider-card-wrapper" <?php post_class() ?> id="post-<?php the_ID(); ?>">
                    <div class="slider-card">
                        <a href="<?php the_permalink()?>">
                            <?php if ( has_post_thumbnail() ) {
									the_post_thumbnail('vehicle-thumbnail');
								} else { ?>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png" alt="car"
                                style="width: 100%" />
                            <?php } ?></a>
                        <div class="card-body">
                            <div class="properties">
                                <div>
                                    <p>
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/icons/calender.svg"
                                            alt="cal" />
                                        <span class="mt-1"> <?php the_time(get_option('date_format')); ?> </span>
                                    </p>
                                </div>
                            </div>
                            <h4 class="heading"> <a href="<?php the_permalink()?>"><?php the_title()?></a></h4>

                            <div class="card-footer">
                                <a href="<?php the_permalink()?>">
                                    <button href="<?php the_permalink()?>" class="button">Read More</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
          
           
        <?php endwhile; ?>    
       
        <?php else : ?>
        <p class="noposts"><?php _e('To add Blog Posts, go to Admin Panel > Posts > Add New','author_ts'); ?></p>
        <?php endif; ?>
       
        </div>
      </div>
    </section>
        <?php get_footer(); ?>