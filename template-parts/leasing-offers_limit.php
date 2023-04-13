 <!-- Long Term Rental offers  -->
 <section class="ml-8-per">
      <div class="__slider">
        <div
          class="slider-header d-flex flex-wrap mb-5 justify-content-between" >
          <h2>Long Term Rental offers available immediately</h2>
          <div class="slider-btn lou100">
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
        <div class="full-slider leasing-offer-under-hundred" id="wrapper">          
             <?php get_template_part( 'partials/vehicle', 'slider' ); ?>
        </div>
      </div>
    </section>
