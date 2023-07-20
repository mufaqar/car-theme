<?php  /*  Template Name:  Leasing-Request   */
   get_header(); 
   $v_id = $_REQUEST['v_id'];
   $v_price = $_REQUEST['v_price'];
   $v_downpay = $_REQUEST['v_downpay'];
   $v_miles = $_REQUEST['miles'];
   ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
<section class="contact-us">
    <h2 class="sub-heading"><?php the_title()?> </h2>
    <p>Sign up for Vehicle Listing</p>
   
</section>
<section class="contact-us-form">
    <div class="form" style="padding:0px">
        <div class="row">
            <div class="col">
                <section class="dash_content">
                    <div class="container-fluid" id="grad1">
                        <div class="row justify-content-center mt-0">
                            <div class="col-lg-12 text-center p-0  mb-2">
                                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                                    <h2><strong>Lease your Vehicle Today</strong></h2>
                                    <div class="row">
                                        <div class="col-md-12 mx-0">                                           

                                            <form class="vehicle_form" id="vehicle_form" action="#"
                                                enctype="multipart/form-data">
                                                <input type="text" value="<?php echo $v_id ?>" id="v_id" name="v_id"  />
                                                <input type="text" value="<?php echo $v_price ?>" id="v_price" name="v_price"  />
                                                <input type="text" value="<?php echo $v_downpay ?>" id="v_downpay" name="v_downpay"  />
                                                <input type="text" value="<?php echo $v_miles ?>" id="v_miles" name="v_miles"  />
                                                <!-- progressbar -->
                                                <ul id="progressbar">
                                                    <li class="active" id="account"><strong>Bio</strong></li>
                                                    <li id="personal"><strong>Certifications</strong></li>
                                                    <li id="payment"><strong>Payment</strong></li>

                                                </ul>
                                                <!-- fieldsets -->
                                                <fieldset>
                                                    <div class="form-card">
                                                        <input type="text" value="" id="name" name="name"
                                                            placeholder="Your Name" required />
                                                        <input type="text" value="" id="location" name="location"
                                                            placeholder="Location" />
                                                        <input type="text" value="" id="mobile" name="mobile"
                                                            placeholder="Mobile No" />

                                                    </div>
                                                    <input type="button" id="" name="next" class="next action-button"
                                                        value="Next Step" />
                                                </fieldset>
                                                <fieldset>
                                                    <div class="form-card">
                                                        <div class="col-md-12 mb-3">
                                                            <div class="upload_file">
                                                                <div class="upload_icon"><i
                                                                        class="fa-solid fa-camera"></i>
                                                                </div>
                                                                <input type="file" name="file" id="file"
                                                                    class="dropify">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="button" name="previous"
                                                        class="previous action-button-previous" value="Previous" />
                                                    <input type="button" name="next" class="next action-button"
                                                        value="Next Step" />

                                                </fieldset>
                                                <fieldset>
                                                    <div class="form-card">
                                                        <input type="text" value="" id="card_title" name="card_title"
                                                            placeholder="Title" />
                                                        <input type="text" value="" id="card_no" name="card_no"
                                                            placeholder="Card Info" />
                                                        <input type="text" value="" id="card_csv" name="card_csv"
                                                            placeholder="CSV" />
                                                        <input type="text" value="" id="card_expiry"  name="card_expiry" placeholder="Exprity Date" />
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
                                                                <h5>You Add Successfully Added</h5>
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
        // Vehicle info
        var v_id = jQuery('#v_id').val();
        var v_price = jQuery('#v_price').val();
        var v_downpay = jQuery('#v_downpay').val();
        var v_miles = jQuery('#v_miles').val();
        // Buyer Info 
        var buy_name = jQuery('#buy_name').val();
        var buy_location = jQuery('#buy_location').val();
        var buy_mobile = jQuery('#buy_mobile').val();
        // Card Details
        var card_title = jQuery('#card_title').val();
        var card_no = jQuery('#card_no').val();
        var card_csv = jQuery('#card_csv').val();
        var card_expiry = jQuery('#card_expiry').val();
       
        var uid = jQuery('#uid').val();

	    // Certification Details
        var file_data = jQuery('#file').prop('files')[0];
        file_data = jQuery('#file').prop('files')[0];

        form_data = new FormData();
        form_data.append('action', 'req_lease');
        form_data.append('v_id', v_id);
        form_data.append('v_price', v_price);
        form_data.append('v_miles', v_miles);
       

        form_data.append('buy_name', buy_name);
        form_data.append('buy_location', buy_location);
        form_data.append('buy_mobile', buy_mobile);

        form_data.append('card_title', card_title);
        form_data.append('card_no', card_no);
        form_data.append('card_csv', card_csv);
        form_data.append('uid', uid);
       


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
                alert(data.message);
            }
        });
    });


});
</script>