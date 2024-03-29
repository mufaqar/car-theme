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
                    <h6>Pre-qualify with no impact </h6>
                    <!-- slider -->
                    <div class="d-flex main-slider-wrapper item-center">
                        <button class="prev">
                            <div><img src="<?php bloginfo('template_directory'); ?>/assets/icons/left-arrow.svg" />
                            </div>
                        </button>
                        <div class="main-slider" id="wrapper">
                            <?php get_all_body_type(); ?>
                        </div>
                        <button class="next">
                            <div><img src="<?php bloginfo('template_directory'); ?>/assets/icons/right-arrow.svg" />
                            </div>
                        </button>
                    </div>
                </div>
                <div class="col-md-3 mt-5">
                    
                    <a class="more-search d-block submit button border border-0 text-capitalize" href="<?php echo home_url('/search-listing'); ?>">more search </a>
                </div>
            </div>
            
        </div>
    </div>
</main>
<!-- leasing  / -->
<?php //get_template_part( 'template-parts/parts', 'leasing' ); ?>
<!-- leasing  Under 100 0 / -->

<?php get_template_part( 'template-parts/home', 'gallery' ); ?>
<?php get_template_part( 'template-parts/parts', 'rent' ); ?>
<!-- banner  / -->
<section class="home-banner">
    <div class="container  mx-auto row wrapper items-center">
        <div class="col-lg-6">
            <h2 class="mb-5">Long Term Rental Cars available in Short time</h2>

            <div>
                <h6>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/icons/banner-list-ico.svg" alt="icon" />
                    <span>Customized to your needs</span>
                </h6>
                <p>Flexible conditions and great rates.</p>
            </div>
            <div>
                <h6>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/icons/banner-list-ico.svg" alt="icon" />
                    <span>Whether you're an individual, freelancer or entrepreneur</span>
                </h6>
                <p>We've thought of everything - whether you're renting for yourself or for a company.</p>
            </div>
            <div>
                <h6>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/icons/banner-list-ico.svg" alt="Online" />
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