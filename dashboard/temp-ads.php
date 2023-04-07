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
      <p>Sign up for lsting</p>
   </section>

   <section class="contact-us-form">
   <div class="form" style="padding:0px">

   <div class="row">
  <div class="col-3"><nav class="sidebar">
        
 <?php get_template_part( 'partials/side', 'menu' ); ?>

    </nav></div>
  <div class="col"> <section class="dash_content">

  <section class="dash_content">

        <h2>My Ads</h2>
        <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                    </tr>
                </tbody>
        </table>
    </section>
        
    </section></div>
  
</div>

   

   

 
      
   </section>

<style>



</style>


   <?php get_footer(); ?>
   <script>

$(document).ready(function(){
    
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    
    $(".next").click(function(){
        
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        
        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        
        //show the next fieldset
        next_fs.show(); 
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
    
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({'opacity': opacity});
            }, 
            duration: 600
        });
    });
    
    $(".previous").click(function(){
        
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        
        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        
        //show the previous fieldset
        previous_fs.show();
    
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
    
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
            }, 
            duration: 600
        });
    });
    
    $('.radio-group .radio').click(function(){
        $(this).parent().find('.radio').removeClass('selected');
        $(this).addClass('selected');
    });
    
    $(".submit").click(function(){
        return false;
    })
        
    });
   </script>