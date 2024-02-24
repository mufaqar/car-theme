<?php  /*  Template Name:  Dashboard-Ads  */

get_header(); ?>
<?php
if(isset($_POST['register'])){
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $userdata = array(
      'user_login' => $username,
      'user_email' => $email,
      'user_pass' => $password,
      'role' => 'custom_role' // Your custom role slug
   );
   $user_id = wp_insert_user( $userdata );
   if( ! is_wp_error( $user_id ) ) {
      echo 'Registration complete. Please check your email to activate your account.';
   }
}
?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

<section class="contact-us">
    <h2 class="sub-heading"><?php the_title()?> </h2>
    <p>Sign up for Vehicle Listing</p>
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

                    <section class="dash_content">
                        <div class="form">
                            <div class="gap-4">
                                <h2>My Listing</h2>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Vehicle Name</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php query_posts(array(
                                                'post_type' => 'vehicle',
                                                'posts_per_page' => -1,
                                                'order' => 'desc',
                                               'post_status' => 'any'                                             
                                            )); 
                                            $a = 0;
                                            if (have_posts()) :  while (have_posts()) : the_post();  $a++;?>
                                        <tr>
                                            <th scope="row"><?php echo $a ?></th>
                                            <td><?php the_title()?></td>
                                            <td><?php echo get_post_meta( get_the_ID(), 'vehicle_location', true ); ?>
                                            <td><?php echo get_post_meta( get_the_ID(), 'vehicle_price', true ); ?></td>
                                            <td><?php echo get_post_status ( get_the_ID() ); ?>
                                            </td>
                                            </td>
                                        </tr>
                                        <tr>


                                            <?php endwhile; wp_reset_query(); else : ?>
                                            <h2><?php _e('Nothing Found','lbt_translate'); ?></h2>
                                            <?php endif; ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>

                </section>
            </div>

        </div>







</section>

<style>



</style>


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
