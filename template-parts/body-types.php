<section class="ml-8-per car-type">
      <div class="__slider mb-4">
        <div class="slider-header d-flex flex-wrap mb-5 justify-content-between">
          <h2>Body Types</h2>         
          <div class="slider-btn">
            <button class="prev bodyTypes">
              <div>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/left-arrow-dark.svg" width="12" />
              </div>
            </button>
            <button class="next bodyTypes">
              <div>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/right-arrow-dark.svg" width="12" />
              </div>
            </button>
          </div>
        </div>
        <div class="car-type-slider body-types-slider-wrapper" id="wrapper">
              <?php
                    $terms = get_terms( array('taxonomy' => 'body_type',  'hide_empty' => false ) );
                    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {                  
                        foreach ( $terms as $term ) {
                        $feature_icon =  get_field('feature_icon2', $term);
                    ?>                    

                      <div class="slider-card-wrapper">
                            <div class="slider-card">
                                <figure class=" p-4">
                                  <img
                                  src="<?php echo $feature_icon ?>"
                                  alt="car"
                                  style="width: 100%"
                                />  
                                </figur>
                            </div>
                            <p class="mt-1"><?php echo $term->name ?> </p>
                      </div>
                    <?php   }   } 
               ?> 
        </div>
      </div>
    </section>