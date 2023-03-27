<?php  /*  Template Name:  FAQ */

get_header(); ?>


    <section class="faq_header">
      <h2 class="sub-heading">Frequently Asked Questions</h2>
      <p>Have you can find frequently asked questions We help you to find the answer</p>
      <div>
        <input type="text" placeholder="Search your problem or questions">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 25px">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
        </svg>
      </div>
    </section>

    <!-- faqs  -->
    <section class="container mx-auto faq">

      <div class="accordion accordion-flush" id="accordionFlushExample">
        


        <?php query_posts(array(
            'post_type' => 'faq',
            'posts_per_page' => -1,
            'order' => 'desc'
            
              )); 

              $i= 1 ;
          if (have_posts()) :  while (have_posts()) : the_post(); ?>

                          <div class="accordion-item">
                            <h2 class="accordion-header" id="<?php echo $i?>">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?php echo $i?>" aria-expanded="false" aria-controls="flush-collapse-<?php echo $i?>">
                              <?php the_title()?>
                              </button>
                            </h2>
                            <div id="flush-collapse-<?php echo $i?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $i?>" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body"> <?php the_content()?></div>
                            </div>
                          </div>
              

              <?php $i++; endwhile; wp_reset_query(); else : ?>
            <h2><?php _e('Nothing Found','lbt_translate'); ?></h2>
                <?php endif; ?> 
	


      </div>

    </section>



  

    <?php get_footer(); ?>