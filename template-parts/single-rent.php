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
        $down_payment = $vehicle_price*30/100;
        $payment_24 = number_format(($vehicle_price-$down_payment)/24,2, '.', '');

        
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
                <div class="slider slider-nav car-thumbnail">
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
            <form action="<?php echo home_url('/leasing-request'); ?>" method="GET">
                <h3><?php the_title()?></h3>
                <h5>€ <?php echo $vehicle_price; ?></h5>
                <input type="hidden" id="v_id" name="v_id" value="<?php echo get_the_ID();?>" />
                <input type="hidden" id="v_price" name="v_price" value="<?php echo $vehicle_price?>" />
                <input type="hidden" id="v_downpay" name="v_downpay" value="<?php echo $down_payment?>" />
                <div class="d-flex _border align-items-center gap-2 mt-3">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/icons/pin_2.svg" alt="pin" width="21"
                        height="21">
                    <span class="pin"><?php echo $vehicle_location; ?>..</span>
                </div>
                <h6 class="price">€ <span id="pro_price"><?php echo $payment_24; ?></span> per month</h6>
                <p class="vat"> per month excl. VAT</p>
                <div class="info">
                    <div class="d-md-flex justify-content-between">
                        <button>More rent price details</button>
                        <p>
                            <span>Only available as a long term rent</span>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/info.svg" alt="">
                        </p>
                    </div>
                    <div class="d-flex justify-content-between mt-3 mb-2">
                        <p>Down payment:</p>
                        <p>€ <?php echo $down_payment?></p>
                    </div>
                    <div class="d-flex justify-content-between mt-3 mb-3">
                        <p>Contract term:</p>
                        <p>mileage per year</p>
                    </div>
                    <div class="vform d-flex gap-2">
                        <div>
                            <select class="select" id="type" name="type">
                                <option value="24">24 Month</option>
                                <option value="36">36 Month</option>
                            </select>
                        </div>
                        <div>
                            <select class="select" id="miles" name="miles">
                                <option value="15000">15,000 km</option>
                                <option value="30000">30,000 km</option>
                                <option value="45000">45,000 km</option>
                                <option value="60000">60,000 km</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex mt-3 justify-content-between mt-1 ">
                        <p class="gard"><img src="<?php bloginfo('template_directory'); ?>/assets/icons/gard.svg"
                                alt="gard" />
                            <span>Insurance</span>
                        <p>
                        <p>Monthly insurance included in price</p>
                    </div>
                    <input type="submit" class="mt-2 requestButton" value="Request Long Term Rental" />
                </div>
            </form>
        </div>
    </div>
</section>
<?php get_template_part( 'partials/single', 'common' ); ?>

<script>
const typeSelect = document.getElementById("type");
typeSelect.onchange = function() {
    const selected_type = typeSelect.value;
    //const pro_Price = null;
    // const pro_Price =  document.getElementById("pro_Price");
    const v_price = document.getElementById("v_price").value;
    const v_downpay = document.getElementById("v_downpay").value;
    let rent_price = (v_price - v_downpay) / selected_type;

    const pro_Price = document.getElementById("pro_price");
    pro_Price.innerHTML = rent_price.toFixed(2);



}
</script>