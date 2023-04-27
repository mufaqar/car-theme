<?php  /*  Template Name:  Signup */

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
      echo 'Registration completed. Please check your email to activate your account.';
   }
}
?>

<form method="post">
    <label for="username">Username</label>
    <input type="text" name="username" required>
    <label for="email">Email</label>
    <input type="email" name="email" required>
    <label for="password">Password</label>
    <input type="password" name="password" required>
    <button type="submit" name="register">Register</button>
</form>


<section class="contact-us">
    <h2 class="sub-heading">Signup </h2>
    <p>Sign up for listing Vehicle</p>
</section>

<section class="contact-us-form">
    <form class="form">
        <div class="d-flex gap-4">
            <div class="mb-3 _input">
                <label for="exampleFormControlInput1" class="form-label">Your name*</label>
                <input type="text" class="" id="exampleFormControlInput1" placeholder="Julia William">
            </div>
            <div class="mb-3 _input">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="" id="exampleFormControlInput1" placeholder="you@example.com">
            </div>
        </div>

        <div class="d-flex gap-4 mt-3">
            <div class="mb-3 _input">
                <label for="exampleFormControlInput1" class="form-label">Car Model</label>
                <input type="text" class="" id="exampleFormControlInput1" placeholder="Car Model">
            </div>
            <div class="mb-3 _input">
                <label for="exampleFormControlInput1" class="form-label">Address</label>
                <select class="" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>

        <div class="mb-3 mt-4">
            <label for="exampleFormControlTextarea1" class="form-label">Your message*</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"
                placeholder="Type your message…."></textarea>
        </div>
        <p>
            By submitting this form you agree to our terms and conditions and our Privacy Policy which explains how we
            may collect, use and disclose your personal information including to third parties.
        </p>
        <input type="button" value="Contact sales" class="submit_button">
    </form>
</section>

<section class="contact-us-footer">
    <div class="contact-card container mx-auto">
        <div>
            <figure>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/message.svg" alt="logo" />
            </figure>
            <h3>Email us</h3>
            <p>Email us for general queries, including marketing and partnership opportunities.</p>
            <a href="mailto://hello@helpcenter.com">hello@helpcenter.com</a>
        </div>
        <div>
            <figure>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/mobile.svg" alt="logo" />
            </figure>
            <h3>Call us</h3>
            <p>Call us to speak to a member of our team. We are always happy to help.</p>
            <a href="#">+92 333 4753 749</a>
        </div>
        <div>
            <figure>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/support.svg" alt="logo" />
            </figure>
            <h3>Support</h3>
            <p>Check out helpful resources, FAQs and developer tools.</p>
            <a href="#" class="button">Support Center</a>
        </div>
    </div>
</section>



<?php get_footer(); ?>