<?php get_header(); ?>

<?php if (have_posts()):while (have_posts()):	the_post();
  
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

        <?php get_template_part( 'template-parts/single', 'leasing' ); ?>

    </div>
</section>

<?php endwhile; endif; ?>



<?php get_footer(); ?>