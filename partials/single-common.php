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
<!-- features  -->
<section class="features">
    <div class="freature_wrapper container mx-auto">
        <div class="d-flex feature align-items-center gap-2">
            <figure>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/kms.svg" alt="">
            </figure>
            <div class="content">
                <h6>Kms driven</h6>
                <p><?php echo $vehicle_mileage ?></p>
            </div>
        </div>
        <div class="d-flex feature align-items-center gap-2">
            <figure>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/in.svg" alt="">
            </figure>
            <div class="content">
                <h6>Register</h6>
                <p><?php echo $vehicle_register ?></p>
            </div>
        </div>
        <div class="d-flex feature align-items-center gap-2">
            <figure>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/meter.svg" alt="">
            </figure>
            <div class="content">
                <h6>Vin</h6>
                <p><?php echo $vehicle_vin ?></p>
            </div>
        </div>
        <div class="d-flex feature align-items-center gap-2">
            <figure>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/kms.svg" alt="">
            </figure>
            <div class="content">
                <h6>Seats</h6>
                <p><?php echo $vehicle_seats ?></p>
            </div>
        </div>
        <div class="d-flex feature align-items-center gap-2">
            <figure>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="">
            </figure>
            <div class="content">
                <h6>Assembly </h6>
                <p><?php echo $vehicle_assembly ?></p>
            </div>
        </div>
        <div class="d-flex feature align-items-center gap-2">
            <figure>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/pin_2.svg" alt="">
            </figure>
            <div class="content">
                <h6>Emission Class</h6>
                <p><?php echo $vehicle_emission_class ?></p>
            </div>
        </div>
        <div class="d-flex feature align-items-center gap-2">
            <figure>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/meter.svg" alt="">
            </figure>
            <div class="content">
                <h6>Interior Color</h6>
                <p><?php echo $vehicle_interior_color?></p>
            </div>
        </div>
        <div class="d-flex feature align-items-center gap-2">
            <figure>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/dollar.svg" alt="">
            </figure>
            <div class="content">
                <h6>Interior Material</h6>
                <p><?php echo $vehicle_interior_material?></p>
            </div>
        </div>
        <div class="d-flex feature align-items-center gap-2">
            <figure>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/env.svg" alt="">
            </figure>
            <div class="content">
                <h6>Interior Color</h6>
                <p><?php echo $vehicle_interior_color?></p>
            </div>
        </div>
        <div class="d-flex feature align-items-center gap-2">
            <figure>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/gard.svg" alt="">
            </figure>
            <div class="content">
                <h6>Fuel</h6>
                <p>Hybrid</p>
            </div>
        </div>
       

    </div>
</section>

<!-- Highlights section -->
<section class="highlights">
    <div class="container mx-auto">
        <h2 class="sub-heading">Highlights</h2>
        <div class="highlights_wrapper">
            <ul>
                <li>
                    <p>Registered In</p>
                    <p><?php echo $vehicle_register; ?></p>
                </li>
                <li>
                    <p>Assembly</p>
                    <p><?php echo $vehicle_assembly; ?></p>
                </li>
                <li>
                    <p>Body Type</p>
                    <p>Sedan</p>
                </li>
                <li>
                    <p>Ref #</p>
                    <p><?php echo $vehicle_ref_no; ?></p>
                </li>
            </ul>
            <ul>
                <li>
                    <p>Engine Capacity</p>
                    <p><?php echo $vehicle_engine_capacity; ?></p>
                </li>
                <li>
                    <p>Interior color</p>
                    <p><?php echo $vehicle_interior_color; ?></p>
                </li>
                <li>
                    <p>Interior material</p>
                    <p><?php echo $vehicle_interior_material; ?></p>
                </li>
                <li>
                    <p>Seats</p>
                    <p><?php echo $vehicle_seats; ?></p>
                </li>
            </ul>
            <ul>
                <li>
                    <p>VIN</p>
                    <p><?php echo $vehicle_vin; ?></p>
                </li>
                <li>
                    <p>Emission class</p>
                    <p><?php echo $vehicle_emission_class; ?></p>
                </li>
                <li>
                    <p>Make</p>
                    <p>Suzuki</p>
                </li>
                <li>
                    <p>Model</p>
                    <p><?php echo $vehicle_model; ?></p>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Car features section  -->
<section class="car-features">
    <div class="container mx-auto">
        <h2 class="sub-heading">Car features</h2>
        <div class="">
            <ul class="car-feature-wrapper ">
                <?php  get_features_type();          ?>
            </ul>
        </div>
    </div>
</section>

<?php   if (! has_term( 'rental', 'vehicle_type' ) ) { ?>

<!-- Leasing prices -->
<!-- <section class="leasing-price container mx-auto">
    <div class="left">
        <h2 class="sub-heading">Leasing prices</h2>
        <p>Exclusive leasing offer from Autohaus Christian Ertl AG</p>
        <h3>Benefits of leasing at a glance :</h3>
        <ul>
            <li>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/tick.svg" alt="tick" />
                <span>Inexpensive: leasing pays off. </span>
            </li>
            <li>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/tick.svg" alt="tick" />
                <span>Individual: According to your wishes. </span>
            </li>
            <li>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/tick.svg" alt="tick" />
                <span>Safe: plan in advance </span>
            </li>
        </ul>
        <p class="address">Loan brokerage by ALD AutoLeasing D GmbH, Nedderfeld 95, 22529 Hamburg<br /> The information
            also corresponds to the 2/3 example according to § 6a Para. 3 PAngV.</p>
    </div>
    <div class="right">
        <div>
            <h3>One-time costs</h3>
            <ul>
                <li>
                    <p>Engine Capacity</p>
                    <p>1500 cc</p>
                </li>
                <li>
                    <p>Interior color</p>
                    <p>Other interior color</p>
                </li>
                <li>
                    <p>Interior material</p>
                    <p>Cloth interior</p>
                </li>
                <li>
                    <p>Seats</p>
                    <p>5</p>
                </li>
            </ul>
        </div>
        <div>
            <h3>One-time costs</h3>
            <ul>
                <li>
                    <p>Engine Capacity</p>
                    <p>1500 cc</p>
                </li>
                <li>
                    <p>Interior color</p>
                    <p>Other interior color</p>
                </li>
                <li>
                    <p>Interior material</p>
                    <p>Cloth interior</p>
                </li>
                <li>
                    <p>Seats</p>
                    <p>5</p>
                </li>
            </ul>
        </div>
        <div>
            <h3>One-time costs</h3>
            <ul>
                <li>
                    <p>Engine Capacity</p>
                    <p>1500 cc</p>
                </li>
                <li>
                    <p>Interior color</p>
                    <p>Other interior color</p>
                </li>
                <li>
                    <p>Interior material</p>
                    <p>Cloth interior</p>
                </li>
                <li>
                    <p>Seats</p>
                    <p>5</p>
                </li>
            </ul>
        </div>
        <div>
            <h3>One-time costs</h3>
            <ul>
                <li>
                    <p>Engine Capacity</p>
                    <p>1500 cc</p>
                </li>
                <li>
                    <p>Interior color</p>
                    <p>Other interior color</p>
                </li>
                <li>
                    <p>Interior material</p>
                    <p>Cloth interior</p>
                </li>
                <li>
                    <p>Seats</p>
                    <p>5</p>
                </li>
            </ul>
        </div>
    </div>
</section> -->

<?php } ?>