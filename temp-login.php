<?php  /*  Template Name:  Register */

get_header(); ?>

   
   <section class="contact-us">
      <h2 class="sub-heading">Register</h2>
      <p>If you need our help, have questions about how to use the platform or are experiencing technical difficulties, please do not hesitate to contact us.</p>
   </section>

   <section class="contact-us-form">
   <div class="form">
          <div class="d-flex gap-4">
   <?php
   

   wp_login_form();
   
   //echo do_shortcode('[nextend_social_login]'); ?>
   </div></div>
   </section>

   



   <?php get_footer(); ?>