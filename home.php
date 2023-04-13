<?php  /*  Template Name:  Home */

get_header(); ?>

    <main>
      <div class="_content">
        <h1>Love Your Car Guarantee</h1>
        <h6>
        One-Stop Platform for Exceptional Automotive Solutions
        </h6>
      </div>
      <!-- filter  -->
      <div class="filter">
        <div class="container mx-auto">
          <div class="row">
            <div class="col-md-9">
              <h6>Pre-qualify with no impact to your credit</h6>              
              <!-- slider -->
              <div class="d-flex main-slider-wrapper item-center">
                <button class="prev">
                  <div><img src="<?php bloginfo('template_directory'); ?>/assets/icons/left-arrow.svg" /></div>
                </button>
                 <div class="main-slider" id="wrapper">
                    <?php get_all_body_type(); ?>
                  </div>
                <button class="next">
                  <div><img src="<?php bloginfo('template_directory'); ?>/assets/icons/right-arrow.svg" /></div>
                </button>
              </div>
            </div>
            <div class="col-md-3">
              <h6 class="text-center">Est. vehcle price</h6>
              <h2 class="main-heding mt-4 mb-4 text-center">
                $<span>20,780</span>
              </h2>
            </div>
          </div>
          <form class="row" method="POST" action="<?php echo home_url('search-listing'); ?>">
            <div class="col-md-9">
              <div class="input">
                <label class="d-block">Monthly Downpayment</label>
                <input
                  type="text"
                  name="monthly-down-payment"
                  id=""
                  placeholder="$400"
                />
              </div>
              <div class="input">
                <label class="d-block">Down Payment</label>
                <input
                  type="text"
                  name="monthly-down-payment"
                  id=""
                  placeholder="$2000"
                />
              </div>
              <div class="input">
                <label class="d-block">Credit Score</label>
                <input
                  type="text"
                  name="monthly-down-payment"
                  id=""
                  placeholder="Good"
                />
              </div>
              <div class="input">
                <label class="d-block">Category</label>
                <input
                  type="text"
                  name="monthly-down-payment"
                  id=""
                  placeholder="Leasing"
                />
              </div>
            </div>
            <div class="col-md-3 d-flex flex-column">
              <input
                type="submit"
                class="d-block submit button border border-0 text-capitalize"
                value="get pre-Qualified"
              />
              <button class="more-search">more search option</button>
            </div>
          </form>
        </div>
      </div>
    </main>
    <!-- leasing  / -->
    <?php get_template_part( 'template-parts/leasing', 'offers' ); ?>
    <!-- leasing  Under 100 / -->
    <?php get_template_part( 'template-parts/leasing', 'offers_limit' ); ?>

   
    <!-- banner  / -->
    <section class="home-banner">
      <div class="container  mx-auto row wrapper items-center">
        <div class="col-lg-6">
            <h2 class="mb-5">Long Term Rental Cars available in a few minutes</h2>
            <div>
              <h6>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/banner-list-ico.svg" alt="icon"/>
                <span>Non-binding preapproval</span>
              </h6>
              <p>Get your credit limit within 15 minutes. Then you're ready to pick your car.</p>
            </div>
            <div>
              <h6>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/banner-list-ico.svg" alt="icon"/>
                <span>Customized to your needs</span>
              </h6>
              <p>Flexible conditions and great rates.</p>
            </div>
            <div>
              <h6>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/banner-list-ico.svg" alt="icon"/>
               <span>Whether you're an individual, freelancer or entrepreneur</span>
              </h6>
              <p>We've thought of everything - whether you're buying for yourself or for a company.</p>
            </div>
            <div>
             <h6>
              <img src="<?php bloginfo('template_directory'); ?>/assets/icons/banner-list-ico.svg" alt="icon"/>
              <span>Online and transparent</span>
             </h6>
          <p>From the comfort of your home, without any hidden fine print or dirty tricks.</p>
            </div>

        </div>
        <figure class="col-lg-6 d-flex justify-content-center mt-5 mt-lg-0">
          <img class="img" src="<?php bloginfo('template_directory'); ?>/assets/icons/banner-img.svg" alt="img">
        </figure>
      </div>
    </section>

    <!-- Body Types -->  

    <?php get_template_part( 'template-parts/body', 'types' ); ?>

    <!-- Popular brands -->

    <?php get_template_part( 'template-parts/brands', 'types' ); ?>
    

    <!-- Latest News -->

    <?php get_template_part( 'template-parts/blog', 'posts' ); ?>
   


  

<?php get_footer(); ?>