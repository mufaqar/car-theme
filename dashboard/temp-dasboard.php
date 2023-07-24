<?php  /*  Template Name:  Dash-AddVehicle  */
   get_header();   $uid = get_current_user_id(); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
<section class="contact-us">
    <h2 class="sub-heading"><?php the_title()?> </h2>
    <p>Add your Vehicle Today</p>
</section>
<section class="contact-us-form">
    <div class="form" style="padding:0px">
        <div class="row">
            <div class="col-3">
                <nav class="sidebar">
                    <?php get_template_part( 'partials/side', 'menu' ); ?>
                </nav>
            </div>
            <div class="col">
                <section class="dash_content">
                    <div class="container-fluid" id="grad1">
                        <div class="row justify-content-center mt-0">
                            <div class="col-lg-12 text-center p-0  mb-2">
                                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                                    <h2><strong>Add your Vehicle</strong></h2>
                                    <div class="row">
                                        <div class="col-md-12 mx-0">

                                            <form class="vehicle_form" id="vehicle_form" action="#"
                                                enctype="multipart/form-data">
                                                <!-- progressbar -->
                                                <ul id="progressbar">
                                                    <li class="active" id="account"><strong>Step 1</strong></li>
                                                    <li id="personal"><strong>Step 2</strong></li>
                                                    <li id="payment"><strong>Step 3</strong></li>

                                                </ul>
                                                <!-- fieldsets -->
                                                <fieldset>
                                                    <div class="form-card">
                                                        <input type="hidden" value="<?php echo $uid ?>" id="uid" name="uid"  />
                                                        <input type="text" value="" id="name" name="name"
                                                            placeholder="Vehicle Name" required />
                                                        <input type="text" value="" id="location" name="location"
                                                            placeholder="Location" />
                                                        <input type="text" value="" id="price" name="price"
                                                            placeholder="Price" />
                                                        <input type="text" value="" id="registered_in"
                                                            name="registered_in" placeholder="Registered In" />
                                                        <input type="text" value="" id="engine_capacity"
                                                            name="engine_capacity" placeholder="Engine Capacity" />
                                                        <input type="text" value="" id="assembly" name="assembly"
                                                            placeholder="Assembly" />
                                                        <input type="text" value="" id="interior_color"
                                                            name="interior_color" placeholder="Interior color" />
                                                        <input type="text" value="" id="interior_material"
                                                            name="interior_material" placeholder="Interior material" />
                                                    </div>
                                                    <input type="button" id="" name="next" class="next action-button"
                                                        value="Next Step" />
                                                </fieldset>
                                                <fieldset>
                                                    <div class="form-card">
                                                        <input type="text" value="" id="ref_no" name="ref_no"
                                                            placeholder="Ref #" />
                                                        <input type="text" value="" id="seats" name="seats"
                                                            placeholder="Seats" />
                                                        <input type="text" value="" id="model" name="model"
                                                            placeholder="Model" />
                                                        <input type="text" value="" id="emission_class"
                                                            name="emission_class" placeholder="Emission class" />
                                                        <input type="text" value="" id="mileage" name="mileage"
                                                            placeholder="Mileage" />
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <label class="pay">Brand *</label>
                                                            </div>
                                                            <div class="col-9">
                                                                <select class="list-dt" id="brand" name="brand">
                                                                    <option>Select Brand</option>
                                                                    <?php
                                                                     $terms_brands = get_terms( array('taxonomy' => 'brand',  'hide_empty' => false ) );
                                                                     if ( ! empty( $terms_brands ) && ! is_wp_error( $terms_brands ) ) {                  
                                                                           foreach ( $terms_brands as $terms_brand ) {  ?>
                                                                    <option value="<?php echo $terms_brand->term_id ?>">
                                                                        <?php echo $terms_brand->name ?></option>
                                                                    <?php } } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <label class="pay">Body Type *</label>
                                                            </div>
                                                            <div class="col-9">
                                                                <select class="list-dt" id="body_type" name="body_type">
                                                                    <option>Select Body Type</option>
                                                                    <?php
                                                                     $terms_body_types = get_terms( array('taxonomy' => 'body_type',  'hide_empty' => false ) );
                                                                     if ( ! empty( $terms_body_types ) && ! is_wp_error( $terms_body_types ) ) {                  
                                                                           foreach ( $terms_body_types as $terms_body_type ) {  ?>
                                                                    <option
                                                                        value="<?php echo $terms_body_type->term_id ?>">
                                                                        <?php echo $terms_body_type->name ?>
                                                                    </option>
                                                                    <?php } } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <label class="pay">Color *</label>
                                                            </div>
                                                            <div class="col-9">
                                                                <select class="list-dt" id="color" name="color">
                                                                    <option>Select Color</option>
                                                                    <?php
                                                                     $terms_colors = get_terms( array('taxonomy' => 'color',  'hide_empty' => false ) );
                                                                     if ( ! empty( $terms_colors ) && ! is_wp_error( $terms_colors ) ) {                  
                                                                           foreach ( $terms_colors as $terms_color ) {  ?>
                                                                    <option value="<?php echo $terms_color->term_id ?>">
                                                                        <?php echo $terms_color->name ?></option>
                                                                    <?php } } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <label class="pay">Engine Type</label>
                                                            </div>
                                                            <div class="col-9">
                                                                <select class="list-dt" id="engine_type"
                                                                    name="engine_type">
                                                                    <option>Select Engine Type</option>
                                                                    <?php
                                                                     $terms_engine_types = get_terms( array('taxonomy' => 'engine_type',  'hide_empty' => false ) );
                                                                     if ( ! empty( $terms_engine_types ) && ! is_wp_error( $terms_engine_types ) ) {                  
                                                                           foreach ( $terms_engine_types as $terms_engine_type ) {  ?>
                                                                    <option
                                                                        value="<?php echo $terms_engine_type->term_id ?>">
                                                                        <?php echo $terms_engine_type->name ?>
                                                                    </option>
                                                                    <?php } } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <label class="pay">Transmission</label>
                                                            </div>
                                                            <div class="col-9">
                                                                <select class="list-dt" id="transmission"
                                                                    name="transmission">
                                                                    <option> Select Transmission</option>
                                                                    <?php
                                                                     $terms_transmissions = get_terms( array('taxonomy' => 'transmission',  'hide_empty' => false ) );
                                                                     if ( ! empty( $terms_transmissions ) && ! is_wp_error( $terms_transmissions ) ) {                  
                                                                           foreach ( $terms_transmissions as $terms_transmission ) {  ?>
                                                                    <option
                                                                        value="<?php echo $terms_transmission->term_id ?>">
                                                                        <?php echo $terms_transmission->name ?>
                                                                    </option>
                                                                    <?php } } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <label class="pay">Type</label>
                                                            </div>
                                                            <div class="col-9">
                                                                <select class="list-dt" id="vehicle_type"
                                                                    name="vehicle_type">
                                                                    <option> Select Type</option>
                                                                    <?php
                                                                     $terms_vehicle_types = get_terms( array('taxonomy' => 'vehicle_type',  'hide_empty' => false ) );
                                                                     if ( ! empty( $terms_vehicle_types ) && ! is_wp_error( $terms_vehicle_types ) ) {                  
                                                                           foreach ( $terms_vehicle_types as $terms_vehicle_type ) {  ?>
                                                                    <option
                                                                        value="<?php echo $terms_vehicle_type->term_id ?>">
                                                                        <?php echo $terms_vehicle_type->name ?>
                                                                    </option>
                                                                    <?php } } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="button" name="previous"
                                                        class="previous action-button-previous" value="Previous" />
                                                    <input type="button" name="next" class="next action-button"
                                                        value="Next Step" />
                                                </fieldset>
                                                <fieldset>
                                                    <div class="col-md-12 mb-3">
                                                        <div class="upload_file">
                                                            <div class="upload_icon"><i class="fa-solid fa-camera"></i>
                                                            </div>
                                                            <input type="file" name="file" id="file" class="dropify">
                                                        </div>
                                                    </div>
                                                    <input type="button" name="previous"
                                                        class="previous action-button-previous" value="Previous" />
                                                    <input type="submit" name="make_payment" class="next action-button"
                                                        value="Confirm" />
                                                </fieldset>
                                                <fieldset>
                                                    <div class="form-card">
                                                        <h2 class="fs-title text-center">Success !</h2>
                                                        <br><br>
                                                        <div class="row justify-content-center">
                                                            <div class="col-3">
                                                                <img src="https://img.icons8.com/color/96/000000/ok--v2.png"
                                                                    class="fit-image">
                                                            </div>
                                                        </div>
                                                        <br><br>
                                                        <div class="row justify-content-center">
                                                            <div class="col-7 text-center">
                                                                <h5>You Vehicle Added Successfully</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
</section>

<section class="hideme zindex-modal overlay hide">
    <div class="popup">
        <div class="popup_wrapper">
            <div
                class="order_confirm d-flex position-relative justify-content-center flex-column align-items-center p-4">
                <a href="<?php bloginfo('url'); ?>"><img
                        src="<?php bloginfo('template_directory'); ?>/assets/icons/logo.svg" alt="logo" /></a>

                <div class="step_wrapper d-flex justify-content-center flex-column align-items-center text-center">
                    <div class="content mt-5">
                        <div class="right"><img src="<?php bloginfo('template_directory');?>/reources/images/img 3.png"
                                alt=""></div>
                        <h1 class="finished">Finished!</h1>
                        <h2 class="mb-5 mt-5">Your Vehicle Added Sucessfully !</h2>
                    </div>
                </div>

            </div>
            <img src="<?php bloginfo('template_directory');?>/reources//images/red cross.png" alt="" class="_cross">
        </div>
    </div>
</section>

<?php get_footer(); ?>
<script>
$(document).ready(function() {

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;

    $(".next").click(function() {

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({
                    'opacity': opacity
                });
            },
            duration: 600
        });
    });

    $(".previous").click(function() {
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({
                    'opacity': opacity
                });
            },
            duration: 600
        });
    });

    $('.radio-group .radio').click(function() {
        $(this).parent().find('.radio').removeClass('selected');
        $(this).addClass('selected');
    });

    $(".submit").click(function() {
        return false;
    })

});
</script>

<script type="text/javascript">
jQuery(document).ready(function($) {
    $('._cross').click(function() {

        $(".hideme").css("display", "none");
    });

    $("#vehicle_form").submit(function(e) {
        e.preventDefault();
        var name = jQuery('#name').val();
        var location = jQuery('#location').val();
        var price = jQuery('#price').val();
        var registered_in = jQuery('#registered_in').val();
        var engine_capacity = jQuery('#engine_capacity').val();
        var assembly = jQuery('#assembly').val();
        var interior_color = jQuery('#interior_color').val();
        var interior_material = jQuery('#interior_material').val();
        var ref_no = jQuery('#ref_no').val();
        var seats = jQuery('#seats').val();
        var emission_class = jQuery('#emission_class').val();
        var model = jQuery('#model').val();
        var mileage = jQuery('#mileage').val();
        var brand = jQuery('#brand').val();
        var body_type = jQuery('#body_type').val();
        var color = jQuery('#color').val();
        var engine_type = jQuery('#engine_type').val();
        var transmission = jQuery('#transmission').val();
        var vehicle_type = jQuery('#vehicle_type').val();
        var uid = jQuery('#uid').val();
        var file_data = jQuery('#file').prop('files')[0];
        file_data = jQuery('#file').prop('files')[0];
        form_data = new FormData();
        form_data.append('action', 'add_vehicle');
        form_data.append('name', name);
        form_data.append('location', location);
        form_data.append('price', price);
        form_data.append('registered_in', registered_in);
        form_data.append('engine_capacity', engine_capacity);
        form_data.append('assembly', assembly);
        form_data.append('interior_color', interior_color);
        form_data.append('interior_material', interior_material);
        form_data.append('ref_no', ref_no);
        form_data.append('emission_class', emission_class);
        form_data.append('model', model);
        form_data.append('mileage', mileage);
        form_data.append('seats', seats);

        form_data.append('brand', brand);
        form_data.append('body_type', body_type);
        form_data.append('color', color);
        form_data.append('engine_type', engine_type);
        form_data.append('transmission', transmission);
        form_data.append('vehicle_type', vehicle_type);
        form_data.append('uid', uid);
        alert(vehicle_type);


        $.ajax({
            url: "<?php echo admin_url('admin-ajax.php'); ?>",
            type: 'POST',
            contentType: false,
            processData: false,
            data: form_data,
            beforeSend: function() {
                $("#loader").show();
            },
            complete: function() {
                $("#spinner-div").hide();
            },
            success: function(data) {
                if (data.code == 0) {
                    alert(data.message);
                } else {
                    $(".sucess_message").css("display", "flex");

                }
            }
        });
    });


});
</script>