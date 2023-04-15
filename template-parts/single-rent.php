    <?php
        $vehicle_location =  get_post_meta( get_the_ID(), 'vehicle_location', true );
        $vehicle_price =  get_post_meta( get_the_ID(), 'vehicle_price', true );   
        $vehicle_mileage =  get_post_meta( get_the_ID(), 'vehicle_mileage', true ); 
        $vehicle_register =  get_post_meta( get_the_ID(), 'vehicle_register', true );
        $vehicle_engine_capacity =  get_post_meta( get_the_ID(), 'vehicle_engine_capacity', true );
        $vehicle_assembly =  get_post_meta( get_the_ID(), 'vehicle_assembly', true );
        $vehicle_interior_color =  get_post_meta( get_the_ID(), 'vehicle_interior_color', true );
        $vehicle_interior_material =  get_post_meta( get_the_ID(), 'vehicle_interior_material', true );
        $vehicle_ref_no =  get_post_meta( get_the_ID(), 'vehicle_ref_no', true );
        $vehicle_seats =  get_post_meta( get_the_ID(), 'vehicle_seats', true );
        $vehicle_vin =  get_post_meta( get_the_ID(), 'vehicle_vin', true );
        $vehicle_emission_class =  get_post_meta( get_the_ID(), 'vehicle_emission_class', true );
        $vehicle_model =  get_post_meta( get_the_ID(), 'vehicle_model', true );
        $vehicle_mileage =  get_post_meta( get_the_ID(), 'vehicle_mileage', true );
        
    ?>
    <section class="slug">
        <div class="container mx-auto main-section-wrapper">
            <div>
                <div class="main">
                    <?php 
                $images = get_field('vehicle_gallery');
                if( $images ): ?>
                    <div class="slider slider-for">
                        <?php foreach( $images as $image ): 
                      //  print "<pre>";
                      //  print_r($image); 
                      ?>
                        <div> <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" /></div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                    <?php 
                $images = get_field('vehicle_gallery');
                if( $images ): ?>
                    <div class="slider slider-nav">
                        <?php foreach( $images as $image ): 
                      //  print "<pre>";
                      //  print_r($image); ?>
                        <div> <img src="<?php echo esc_url($image['sizes']['vehicle-thumbnail']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" /></div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="detail-content">
                <h3><?php the_title()?></h3>
                <h5>€ <?php echo $vehicle_price; ?></h5>
                <div class="d-flex _border align-items-center gap-2 mt-3">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/icons/pin_2.svg" alt="pin" width="21"
                        height="21">
                    <span class="pin"><?php echo $vehicle_location; ?>..</span>
                </div>
                <h6 class="price">€ <?php echo $vehicle_price; ?> per month</h6>
                <p class="vat">€ <?php echo $vehicle_price; ?> per month excl. VAT</p>
                <div class="info">
                    <div class="d-md-flex justify-content-between">
                        <button>More leasing details</button>
                        <p>
                            <span>Only available as a lease</span>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/info.svg" alt="">
                        </p>
                    </div>
                    <div class="d-flex justify-content-between mt-3 mb-2">
                        <p>Down payment:</p>
                        <p>€ 12</p>
                    </div>
                    <div class="d-flex justify-content-between mt-3 mb-3">
                        <p>Contract term:</p>
                        <p>mileage per year</p>
                    </div>
                    <form class="d-flex gap-2">
                        <div>
                            <select class="select">
                                <option>36 Monate</option>
                                <option>36 Monate</option>
                            </select>
                        </div>
                        <div>
                            <select class="select">
                                <option>15.000 km</option>
                                <option>15.000 km</option>
                            </select>
                        </div>
                    </form>
                    <div class="d-flex mt-3 justify-content-between mt-1 ">
                        <p class="gard"><img src="<?php bloginfo('template_directory'); ?>/assets/icons/gard.svg"
                                alt="gard" />
                            <span>Insurance</span>
                        <p>
                        <p>from €6.85 monthly assure</p>
                    </div>
                    <a href="#">
                        <div class="mt-2 requestButton">Request leasing</div>
                    </a>
                    <div class="brand">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/brand.png" alt="brand" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part( 'partials/single', 'common' ); ?>