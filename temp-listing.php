<?php
/*  Template Name:  Product Listing */

get_header(); ?>


<section class="contact-us listing_banner">
  <h2 class="sub-heading">
    <?php the_title() ?>
  </h2>
  <p>One-Stop Platform for Exceptional Automotive Solutions</p>
</section>

<section class="container mx-auto listing_page_wrapper">

  <?php query_posts(
    array(
      'post_type' => 'vehicle',
      'posts_per_page' => -1,
      'order' => 'desc',
      'vehicle_type' => 'rental'

    )
  );
  if (have_posts()):
    while (have_posts()):
      the_post();
      $price = get_post_meta(get_the_ID(), 'vehicle_price', true);
      $location = get_post_meta(get_the_ID(), 'vehicle_location', true);
      $mileage = get_post_meta(get_the_ID(), 'vehicle_mileage', true);
      $register = get_post_meta(get_the_ID(), 'vehicle_register', true);
      ?>
      <div class="slider-card-wrapper">
        <div class="slider-card">
        <a href="<?php the_permalink()?>">
              <?php if ( has_post_thumbnail() ) {
									the_post_thumbnail('vehicle-thumbnail');
								} else { ?>
							<img src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png"  alt="car"   style="width: 100%"  />
							<?php } ?></a>
          <div class="card-body">
          <h4 class="heading">  <a href="<?php the_permalink()?>"><?php the_title()?>... </a></h4>
            <div class="properties">
              <div>
                <p>
                  <svg id="Group_3663" data-name="Group 3663" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="21" height="21.011" viewBox="0 0 21 21.011">
                    <defs>
                      <clipPath id="clip-path">
                        <rect id="Rectangle_3069" data-name="Rectangle 3069" width="21" height="21.011" fill="#606060" />
                      </clipPath>
                    </defs>
                    <g id="Group_3662" data-name="Group 3662" clip-path="url(#clip-path)">
                      <path id="Path_1338" data-name="Path 1338"
                        d="M9.842,0h1.313c.053.011.1.026.158.034.539.084,1.086.133,1.616.255a10.481,10.481,0,0,1,7.911,8.4c.064.383.107.769.159,1.154v1.313a1.025,1.025,0,0,0-.031.118c-.07.486-.111.978-.213,1.458A10.5,10.5,0,1,1,8.689.159C9.071.094,9.458.052,9.842,0m9.844,10.495a9.188,9.188,0,1,0-9.193,9.194,9.2,9.2,0,0,0,9.193-9.194"
                        transform="translate(0)" fill="#606060" />
                      <path id="Path_1339" data-name="Path 1339"
                        d="M139.985,73.247c0-.236,0-.468,0-.7a.656.656,0,1,1,1.311.007c0,.225,0,.451,0,.69.065.021.127.043.19.062a2.965,2.965,0,0,1,2.1,2.738.659.659,0,1,1-1.312.045,1.64,1.64,0,1,0-1.617,1.688,2.858,2.858,0,0,1,2.678,1.774,2.942,2.942,0,0,1-1.842,4l-.2.062c0,.237,0,.468,0,.7a.656.656,0,1,1-1.311-.009c0-.225,0-.451,0-.66a7.692,7.692,0,0,1-.859-.4,2.875,2.875,0,0,1-1.434-2.434.657.657,0,0,1,.64-.745.664.664,0,0,1,.67.7,1.64,1.64,0,1,0,1.616-1.686,2.951,2.951,0,0,1-.795-5.787c.052-.014.1-.034.162-.055"
                        transform="translate(-130.142 -67.931)" fill="#606060" />
                    </g>
                  </svg>
                  <span>Price:</span>
                </p>
                <p class="text-end">€ <?php echo $price; ?>,- per month</p>
              </div>
              <div>
                <p>
                  <svg id="Group_3665" data-name="Group 3665" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="21" height="18.408" viewBox="0 0 21 18.408">
                    <defs>
                      <clipPath id="clip-path">
                        <rect id="Rectangle_3070" data-name="Rectangle 3070" width="21" height="18.408" fill="#606060"
                          stroke="#606060" stroke-width="0.3" />
                      </clipPath>
                    </defs>
                    <g id="Group_3664" data-name="Group 3664" clip-path="url(#clip-path)">
                      <path id="Path_1340" data-name="Path 1340"
                        d="M10.933.9V1.974q0,.438,0,.875c0,.4-.149.6-.439.6s-.428-.2-.428-.59q0-.854,0-1.708V.907a9.588,9.588,0,0,0-5.74,2.231L5.7,4.507c.081.08.164.159.237.246a.423.423,0,0,1-.02.6.43.43,0,0,1-.6,0c-.285-.268-.558-.55-.834-.827-.261-.262-.52-.526-.8-.805A9.645,9.645,0,0,0,.882,10.068H3.63a1.884,1.884,0,0,1,.213,0,.423.423,0,0,1,.383.436.412.412,0,0,1-.4.422c-.177.011-.356,0-.534,0H.607c-.487,0-.621-.132-.606-.627A10.327,10.327,0,0,1,2.784,3.4,10.31,10.31,0,0,1,9.185.088,10.523,10.523,0,0,1,20.041,6.131,10.645,10.645,0,0,1,21,10.364c.008.422-.14.572-.556.572q-1.591,0-3.182,0a.436.436,0,1,1-.01-.866c.868,0,1.737,0,2.605,0h.258A9.653,9.653,0,0,0,17.31,3.72c-.3.3-.579.589-.864.877q-.331.334-.665.664c-.249.247-.519.277-.708.081s-.164-.444.1-.706q.664-.665,1.33-1.328a1.953,1.953,0,0,1,.2-.149A9.631,9.631,0,0,0,10.933.9"
                        transform="translate(0.001 0)" fill="#606060" stroke="#606060" stroke-width="0.3" />
                      <path id="Path_1341" data-name="Path 1341"
                        d="M10.584,233.821q-4.954,0-9.907,0a1,1,0,0,1-.314-.037.4.4,0,0,1-.282-.429.4.4,0,0,1,.334-.391,1.329,1.329,0,0,1,.275-.022H20.462c.4,0,.609.153.612.437s-.214.444-.6.444H10.584"
                        transform="translate(-0.075 -219.651)" fill="#606060" stroke="#606060" stroke-width="0.3" />
                      <path id="Path_1342" data-name="Path 1342"
                        d="M120.766,136.737a1.383,1.383,0,0,1-1.387-1.5.212.212,0,0,0-.138-.243q-1.016-.565-2.029-1.136a.436.436,0,0,1-.257-.527.431.431,0,0,1,.651-.252c.506.275,1.006.561,1.509.843.062.035.126.067.185.107a.72.72,0,0,0,.921.062,1.258,1.258,0,0,1,1.512.256,1.392,1.392,0,0,1-.966,2.394m.514-1.382a.516.516,0,1,0-.52.512.521.521,0,0,0,.52-.512"
                        transform="translate(-110.265 -125.422)" fill="#606060" stroke="#606060" stroke-width="0.3" />
                      <path id="Path_1343" data-name="Path 1343"
                        d="M180.181,272.184c.022.676.044,1.352.067,2.032h-.7V271.3c.021,0,.043,0,.064,0,.262,0,.524,0,.786,0a.081.081,0,0,1,.094.067q.3.943.6,1.884c.007.02.014.041.028.081l.649-2.027h.924v2.918h-.7l.067-2.031-.012,0c-.008.022-.017.044-.024.066q-.323.952-.645,1.9c-.017.05-.037.071-.093.069-.109-.005-.219,0-.329,0a.077.077,0,0,1-.09-.063q-.307-.908-.617-1.815l-.056-.162-.013,0"
                        transform="translate(-169.304 -255.816)" fill="#606060" stroke="#606060" stroke-width="0.3" />
                      <path id="Path_1344" data-name="Path 1344"
                        d="M133.435,271.35h.7v1.261l.013,0c.014-.019.028-.037.041-.056q.4-.583.793-1.165a.1.1,0,0,1,.059-.043c.275,0,.55,0,.839,0-.021.029-.033.048-.047.066-.3.392-.6.784-.9,1.173a.086.086,0,0,0,0,.116q.454.745.9,1.492c.014.022.026.045.044.078h-.074c-.231,0-.461,0-.692,0a.1.1,0,0,1-.1-.062c-.182-.324-.367-.646-.551-.968l-.036-.061c-.092.1-.182.2-.269.3a.121.121,0,0,0-.019.074c0,.213,0,.425,0,.638v.075h-.7Z"
                        transform="translate(-125.823 -255.867)" fill="#606060" stroke="#606060" stroke-width="0.3" />
                    </g>
                  </svg>
                  <span>Distance:</span>
                </p>
                <p class="text-end"><?php echo $mileage; ?>, <?php echo $register; ?></p>
              </div>
            </div>

            <div class="card-footer">
            <a href="<?php the_permalink()?>">
                    <button href="<?php the_permalink()?>" class="button">Long Term Rental</button>
                  </a>
              <a href="#">
                <button href="#" class="button">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-2 h-2">
                    <path fill-rule="evenodd"
                      d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                      clip-rule="evenodd" />
                  </svg>
                  <span><?php echo $location ?></span>
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile;
    wp_reset_query();
  else: ?>
    <h2>
      <?php _e('Nothing Found', 'lbt_translate'); ?>
    </h2>
  <?php endif; ?>

</section>
<?php get_footer(); ?>