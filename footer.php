       
       

  <?php if (! is_page_template( 'temp-contact.php' ) ) { ?>     
            <!-- call to action  -->
            <section class="call-to-action">
                <h2 class="main-heding">Your next car is waiting for you here...</h2>
                <div class="call_button mt-5 d-flex justify-content-center mx-auto">
                <a href="#">
                    <div class="button">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/icons/env.svg" alt="env" width="28" height="28"/>
                    <span>INFO@001CARS.COM</span>
                    </div>
                </a>
                <a href="#">
                    <div class="button btn-dark">
                    <img src="<?php bloginfo('template_directory'); ?>//assets/icons/phone.svg" alt="env" width="27" height="28"/>
                    <span>+420 246 034 700</span>
                    </div>
                </a>
                </div>
            </section> 
    <?php } ?>   

    <!-- footer section -->
    <footer class="container">
      <section class="footer_nav row">
        <div class="col-md-2">
          <h3>SUPPORT</h3>
          <?php wp_nav_menu( array( 'theme_location' => 'footer-1','fallback_cb'=> 'fallbackmenu1' ) ); ?>
        </div>
        <div class="col-md-2">
          <h3>SERVICE</h3>
          <?php wp_nav_menu( array( 'theme_location' => 'footer-2','fallback_cb'=> 'fallbackmenu1' ) ); ?>
        </div>
        <div class="col-md-4">
          <h3>DEALER</h3>
          <?php wp_nav_menu( array( 'theme_location' => 'footer-3','fallback_cb'=> 'fallbackmenu1' ) ); ?>
        </div>
        <div class="col-md-3">
          <h3>STAY IN CONTACT</h3>
          <div class="input mt-5">
            <input value ="" placeholder="Location">
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/pin.svg" alt="pin"/>
          </div>
          <div class="social mt-5">
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/icons/fb.svg" alt="facebook"/></a>
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/icons/in.svg" alt="instagram"/></a>
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/icons/tw.svg" alt="twitter"/></a>
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/icons/yt.svg" alt="youtube"/></a>
          </div>
        </div>
      </section>
      <section class="copyright d-flex justify-content-between">
        <p>Copyrights © 2023 All Rights Reserved by Mufaqar</p>
        
        <?php wp_nav_menu( array( 'theme_location' => 'footer-4','menu_class'=> 'extra-links d-flex',      'container'         => 'false' ) ); ?>
      </section>
    </footer>
    <?php wp_footer(); ?>
    </body>
    </html>