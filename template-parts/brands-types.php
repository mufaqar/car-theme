<section class="ml-8-per car-type">
      <div class="__slider mt-5">
        <div
          class="slider-header d-flex flex-wrap mb-5 justify-content-between"
        >
          <h2>Popular Brands</h2>
          <div class="slider-btn">
            <button class="prev popularBrands">
              <div>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/left-arrow-dark.svg" width="12" />
              </div>
            </button>
            <button class="next popularBrands">
              <div>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/right-arrow-dark.svg" width="12" />
              </div>
            </button>
          </div>
        </div>
        <div class="car-type-slider popular-brands-slider-wrapper home_brands" id="wrapper">

        <?php
                    $terms = get_terms( array('taxonomy' => 'brand',  'hide_empty' => false ) );
                    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {                  
                        foreach ( $terms as $term ) {
                        $feature_icon =  get_field('feature_icon', $term);
                        $term_link = get_term_link( $term );
                    ?>    
          <div class="slider-card-wrapper">
            <div class="slider-card _brand">
              <figure class="p-2">
              <a href="<?php echo $term_link ?>">
                <img
                src="<?php echo $feature_icon ?>"
                alt="car"
                style="height: 80px; width: 80px; object-fit: contain; margin: 0px auto;"   />  </a>
              </figur>
            </div>
            <p class="mt-1"><?php echo $term->name ?> (<?php echo $term->count ?>) </p>
          </div>
          <?php   }   } 
               ?> 
         
          
        </div>
      </div>
    </section>