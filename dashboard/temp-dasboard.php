<?php  /*  Template Name:  Dashboard  */

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
        

        <div class="menu-bar">
            

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Overview</span>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Listing</span>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">My Orders</span>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">My Ads</span>
                    </a>
                </li>

                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Settings</span>
                    </a>
                </li>

                

            </div>
        </div>

    </nav></div>
  <div class="col"> <section class="dash_content">

  <!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-lg-12 text-center p-0  mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>Add your Vehicle</strong></h2>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Step 1</strong></li>
                                <li id="personal"><strong>Step 2</strong></li>
                                <li id="payment"><strong>Step 3</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul>
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                               
                                    <input type="text" name="name" placeholder="Vehicle Name"/>
                                    <input type="text" name="uname" placeholder="Location"/>
                                    <input type="text" name="pwd" placeholder="Price"/>
                                    <input type="text" name="cpwd" placeholder="Registered In"/>
                                    <input type="text" name="name" placeholder="Vehicle Name"/>
                                    <input type="text" name="uname" placeholder="Engine Capacity"/>
                                    <input type="text" name="pwd" placeholder="Assembly"/>
                                    <input type="text" name="cpwd" placeholder="Interior color"/>
                                    <input type="text" name="name" placeholder="Interior material"/>
                                  


                                </div>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">

                                   
                                    <input type="text" name="uname" placeholder="Ref #"/>
                                    <input type="text" name="pwd" placeholder="Seats"/>
                                    <input type="text" name="cpwd" placeholder="Model"/>
                                    <input type="text" name="name" placeholder="Emission class"/>
                                    <input type="text" name="uname" placeholder="Mileage"/>


                                    <div class="row">
                                        <div class="col-3">
                                            <label class="pay">Brand *</label>
                                        </div>
                                        <div class="col-9">
                                            <select class="list-dt" id="month" name="expmonth">
                                                <option selected>Audi</option>
                                                <option>BM@</option>
                                            </select>                                           
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <label class="pay">Body Type *</label>
                                        </div>
                                        <div class="col-9">
                                            <select class="list-dt" id="month" name="expmonth">
                                                <option selected>Audi</option>
                                                <option>BM@</option>
                                            </select>                                           
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <label class="pay">Color *</label>
                                        </div>
                                        <div class="col-9">
                                            <select class="list-dt" id="month" name="expmonth">
                                                <option selected>Audi</option>
                                                <option>BM@</option>
                                            </select>                                           
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-3">
                                            <label class="pay">Engine Type</label>
                                        </div>
                                        <div class="col-9">
                                            <select class="list-dt" id="month" name="expmonth">
                                                <option selected>Audi</option>
                                                <option>BM@</option>
                                            </select>                                           
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <label class="pay">Transmission</label>
                                        </div>
                                        <div class="col-9">
                                            <select class="list-dt" id="month" name="expmonth">
                                                <option selected>Audi</option>
                                                <option>BM@</option>
                                            </select>                                           
                                        </div>
                                    </div>
                                
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Other Information</h2>
                                  
                                    <label class="pay">Card Holder Name*</label>
                                    <input type="file" class="form-control" id="customFile" />
                                   
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="make_payment" class="next action-button" value="Confirm"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3">
                                            <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
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