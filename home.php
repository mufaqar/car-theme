<?php get_header(); ?>
<header>
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/icons/logo.svg" alt="logo" /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse justify-content-center navbar-collapse"
            id="navbarNav"
          >
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Buy</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">sell</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">flexiable purchase model</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">decision support</a>
              </li>
            </ul>
          </div>
          <div class="d-flex align-items-center text-uppercase logins_section">
            <div class="button mx-4"><a href="#">Registor</a></div>
            <div class="d-flex align-items-center header_dropdown">
              <span>Build Your Own</span>
              <img src="<?php bloginfo('template_directory'); ?>/assets/icons/arrow_down.svg" alt="arrow Down" />
            </div>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <div class="_content">
        <h1>Love Your Car Guarantee</h1>
        <h6>
          No impact on your credit scoreOnly takes minutes Personalized, real
          rates
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
                  <div class="item_wrapper">
                    <div class="item">
                      <img src="<?php bloginfo('template_directory'); ?>/assets//icons/cars/suv.svg" alt="suv" />
                      <span>Suv</span>
                    </div>
                  </div>
                  <div class="item_wrapper">
                    <div class="item">
                      <img src="<?php bloginfo('template_directory'); ?>/assets//icons/cars/suv.svg" alt="suv" />
                      <span>Suv</span>
                    </div>
                  </div>
                  <div class="item_wrapper">
                    <div class="item">
                      <img src="<?php bloginfo('template_directory'); ?>/assets//icons/cars/suv.svg" alt="suv" />
                      <span>Suv</span>
                    </div>
                  </div>
                  <div class="item_wrapper">
                    <div class="item">
                      <img src="<?php bloginfo('template_directory'); ?>/assets//icons/cars/suv.svg" alt="suv" />
                      <span>Suv</span>
                    </div>
                  </div>
                  <div class="item_wrapper">
                    <div class="item">
                      <img src="<?php bloginfo('template_directory'); ?>/assets//icons/cars/suv.svg" alt="suv" />
                      <span>Suv</span>
                    </div>
                  </div>
                  <div class="item_wrapper">
                    <div class="item">
                      <img src="<?php bloginfo('template_directory'); ?>/assets//icons/cars/suv.svg" alt="suv" />
                      <span>Suv</span>
                    </div>
                  </div>
                  <div class="item_wrapper">
                    <div class="item">
                      <img src="<?php bloginfo('template_directory'); ?>/assets//icons/cars/suv.svg" alt="suv" />
                      <span>Suv</span>
                    </div>
                  </div>
                  <div class="item_wrapper">
                    <div class="item">
                      <img src="<?php bloginfo('template_directory'); ?>/assets//icons/cars/suv.svg" alt="suv" />
                      <span>Suv</span>
                    </div>
                  </div>
                  <div class="item_wrapper">
                    <div class="item">
                      <img src="<?php bloginfo('template_directory'); ?>/assets//icons/cars/suv.svg" alt="suv" />
                      <span>Suv</span>
                    </div>
                  </div>
                  <div class="item_wrapper">
                    <div class="item">
                      <img src="<?php bloginfo('template_directory'); ?>/assets//icons/cars/suv.svg" alt="suv" />
                      <span>Suv</span>
                    </div>
                  </div>
                  <div class="item_wrapper">
                    <div class="item">
                      <img src="<?php bloginfo('template_directory'); ?>/assets//icons/cars/suv.svg" alt="suv" />
                      <span>Suv</span>
                    </div>
                  </div>
                  <div class="item_wrapper">
                    <div class="item">
                      <img src="<?php bloginfo('template_directory'); ?>/assets//icons/cars/suv.svg" alt="suv" />
                      <span>Suv</span>
                    </div>
                  </div>
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

          <form class="row">
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
                type="button"
                class="d-block submit button border border-0 text-capitalize"
                value="get pre-Qualified"
              />
              <button class="more-search">more search option</button>
            </div>
          </form>
        </div>
      </div>
    </main>

    <!-- Leasing offers available immediately -->
    <section class="ml-8-per">
      <div class="__slider">
        <div
          class="slider-header d-flex flex-wrap mb-5 justify-content-between"
        >
          <h2>Leasing offers available immediately</h2>
          <div class="slider-btn loBtn">
            <button class="prev">
              <div>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/left-arrow-dark.svg" width="12" />
              </div>
            </button>
            <button class="next">
              <div>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/right-arrow-dark.svg" width="12" />
              </div>
            </button>
          </div>
        </div>
        <div class="full-slider leasing-offer" id="wrapper">
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png"
                alt="car"
                style="width: 100%"
              />
              <div class="card-body">
                <h4 class="heading">Audi Q5 Sportback S line 50 TDI Lo...</h4>
                <div class="properties">
                  <div>
                    <p>
                      <svg
                        id="Group_3663"
                        data-name="Group 3663"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="21.011"
                        viewBox="0 0 21 21.011"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3069"
                              data-name="Rectangle 3069"
                              width="21"
                              height="21.011"
                              fill="#606060"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3662"
                          data-name="Group 3662"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1338"
                            data-name="Path 1338"
                            d="M9.842,0h1.313c.053.011.1.026.158.034.539.084,1.086.133,1.616.255a10.481,10.481,0,0,1,7.911,8.4c.064.383.107.769.159,1.154v1.313a1.025,1.025,0,0,0-.031.118c-.07.486-.111.978-.213,1.458A10.5,10.5,0,1,1,8.689.159C9.071.094,9.458.052,9.842,0m9.844,10.495a9.188,9.188,0,1,0-9.193,9.194,9.2,9.2,0,0,0,9.193-9.194"
                            transform="translate(0)"
                            fill="#606060"
                          />
                          <path
                            id="Path_1339"
                            data-name="Path 1339"
                            d="M139.985,73.247c0-.236,0-.468,0-.7a.656.656,0,1,1,1.311.007c0,.225,0,.451,0,.69.065.021.127.043.19.062a2.965,2.965,0,0,1,2.1,2.738.659.659,0,1,1-1.312.045,1.64,1.64,0,1,0-1.617,1.688,2.858,2.858,0,0,1,2.678,1.774,2.942,2.942,0,0,1-1.842,4l-.2.062c0,.237,0,.468,0,.7a.656.656,0,1,1-1.311-.009c0-.225,0-.451,0-.66a7.692,7.692,0,0,1-.859-.4,2.875,2.875,0,0,1-1.434-2.434.657.657,0,0,1,.64-.745.664.664,0,0,1,.67.7,1.64,1.64,0,1,0,1.616-1.686,2.951,2.951,0,0,1-.795-5.787c.052-.014.1-.034.162-.055"
                            transform="translate(-130.142 -67.931)"
                            fill="#606060"
                          />
                        </g>
                      </svg>
                      <span>Price:</span>
                    </p>
                    <p class="text-end">€ 610,- per month</p>
                  </div>
                  <div>
                    <p>
                      <svg
                        id="Group_3665"
                        data-name="Group 3665"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="18.408"
                        viewBox="0 0 21 18.408"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3070"
                              data-name="Rectangle 3070"
                              width="21"
                              height="18.408"
                              fill="#606060"
                              stroke="#606060"
                              stroke-width="0.3"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3664"
                          data-name="Group 3664"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1340"
                            data-name="Path 1340"
                            d="M10.933.9V1.974q0,.438,0,.875c0,.4-.149.6-.439.6s-.428-.2-.428-.59q0-.854,0-1.708V.907a9.588,9.588,0,0,0-5.74,2.231L5.7,4.507c.081.08.164.159.237.246a.423.423,0,0,1-.02.6.43.43,0,0,1-.6,0c-.285-.268-.558-.55-.834-.827-.261-.262-.52-.526-.8-.805A9.645,9.645,0,0,0,.882,10.068H3.63a1.884,1.884,0,0,1,.213,0,.423.423,0,0,1,.383.436.412.412,0,0,1-.4.422c-.177.011-.356,0-.534,0H.607c-.487,0-.621-.132-.606-.627A10.327,10.327,0,0,1,2.784,3.4,10.31,10.31,0,0,1,9.185.088,10.523,10.523,0,0,1,20.041,6.131,10.645,10.645,0,0,1,21,10.364c.008.422-.14.572-.556.572q-1.591,0-3.182,0a.436.436,0,1,1-.01-.866c.868,0,1.737,0,2.605,0h.258A9.653,9.653,0,0,0,17.31,3.72c-.3.3-.579.589-.864.877q-.331.334-.665.664c-.249.247-.519.277-.708.081s-.164-.444.1-.706q.664-.665,1.33-1.328a1.953,1.953,0,0,1,.2-.149A9.631,9.631,0,0,0,10.933.9"
                            transform="translate(0.001 0)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1341"
                            data-name="Path 1341"
                            d="M10.584,233.821q-4.954,0-9.907,0a1,1,0,0,1-.314-.037.4.4,0,0,1-.282-.429.4.4,0,0,1,.334-.391,1.329,1.329,0,0,1,.275-.022H20.462c.4,0,.609.153.612.437s-.214.444-.6.444H10.584"
                            transform="translate(-0.075 -219.651)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1342"
                            data-name="Path 1342"
                            d="M120.766,136.737a1.383,1.383,0,0,1-1.387-1.5.212.212,0,0,0-.138-.243q-1.016-.565-2.029-1.136a.436.436,0,0,1-.257-.527.431.431,0,0,1,.651-.252c.506.275,1.006.561,1.509.843.062.035.126.067.185.107a.72.72,0,0,0,.921.062,1.258,1.258,0,0,1,1.512.256,1.392,1.392,0,0,1-.966,2.394m.514-1.382a.516.516,0,1,0-.52.512.521.521,0,0,0,.52-.512"
                            transform="translate(-110.265 -125.422)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1343"
                            data-name="Path 1343"
                            d="M180.181,272.184c.022.676.044,1.352.067,2.032h-.7V271.3c.021,0,.043,0,.064,0,.262,0,.524,0,.786,0a.081.081,0,0,1,.094.067q.3.943.6,1.884c.007.02.014.041.028.081l.649-2.027h.924v2.918h-.7l.067-2.031-.012,0c-.008.022-.017.044-.024.066q-.323.952-.645,1.9c-.017.05-.037.071-.093.069-.109-.005-.219,0-.329,0a.077.077,0,0,1-.09-.063q-.307-.908-.617-1.815l-.056-.162-.013,0"
                            transform="translate(-169.304 -255.816)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1344"
                            data-name="Path 1344"
                            d="M133.435,271.35h.7v1.261l.013,0c.014-.019.028-.037.041-.056q.4-.583.793-1.165a.1.1,0,0,1,.059-.043c.275,0,.55,0,.839,0-.021.029-.033.048-.047.066-.3.392-.6.784-.9,1.173a.086.086,0,0,0,0,.116q.454.745.9,1.492c.014.022.026.045.044.078h-.074c-.231,0-.461,0-.692,0a.1.1,0,0,1-.1-.062c-.182-.324-.367-.646-.551-.968l-.036-.061c-.092.1-.182.2-.269.3a.121.121,0,0,0-.019.074c0,.213,0,.425,0,.638v.075h-.7Z"
                            transform="translate(-125.823 -255.867)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                        </g>
                      </svg>
                      <span>Distance:</span>
                    </p>
                    <p class="text-end">€ 10,000 km, 48 months</p>
                  </div>
                </div>

                <div class="card-footer">
                  <a href="#">
                    <button href="#" class="button">Leasing Privately</button>
                  </a>
                  <a href="#">
                    <button href="#" class="button">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="w-2 h-2"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      <span>DE 63165 Mühlheim..</span>
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png"
                alt="car"
                style="width: 100%"
              />
              <div class="card-body">
                <h4 class="heading">Audi Q5 Sportback S line 50 TDI Lo...</h4>
                <div class="properties">
                  <div>
                    <p>
                      <svg
                        id="Group_3663"
                        data-name="Group 3663"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="21.011"
                        viewBox="0 0 21 21.011"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3069"
                              data-name="Rectangle 3069"
                              width="21"
                              height="21.011"
                              fill="#606060"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3662"
                          data-name="Group 3662"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1338"
                            data-name="Path 1338"
                            d="M9.842,0h1.313c.053.011.1.026.158.034.539.084,1.086.133,1.616.255a10.481,10.481,0,0,1,7.911,8.4c.064.383.107.769.159,1.154v1.313a1.025,1.025,0,0,0-.031.118c-.07.486-.111.978-.213,1.458A10.5,10.5,0,1,1,8.689.159C9.071.094,9.458.052,9.842,0m9.844,10.495a9.188,9.188,0,1,0-9.193,9.194,9.2,9.2,0,0,0,9.193-9.194"
                            transform="translate(0)"
                            fill="#606060"
                          />
                          <path
                            id="Path_1339"
                            data-name="Path 1339"
                            d="M139.985,73.247c0-.236,0-.468,0-.7a.656.656,0,1,1,1.311.007c0,.225,0,.451,0,.69.065.021.127.043.19.062a2.965,2.965,0,0,1,2.1,2.738.659.659,0,1,1-1.312.045,1.64,1.64,0,1,0-1.617,1.688,2.858,2.858,0,0,1,2.678,1.774,2.942,2.942,0,0,1-1.842,4l-.2.062c0,.237,0,.468,0,.7a.656.656,0,1,1-1.311-.009c0-.225,0-.451,0-.66a7.692,7.692,0,0,1-.859-.4,2.875,2.875,0,0,1-1.434-2.434.657.657,0,0,1,.64-.745.664.664,0,0,1,.67.7,1.64,1.64,0,1,0,1.616-1.686,2.951,2.951,0,0,1-.795-5.787c.052-.014.1-.034.162-.055"
                            transform="translate(-130.142 -67.931)"
                            fill="#606060"
                          />
                        </g>
                      </svg>
                      <span>Price:</span>
                    </p>
                    <p class="text-end">€ 610,- per month</p>
                  </div>
                  <div>
                    <p>
                      <svg
                        id="Group_3665"
                        data-name="Group 3665"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="18.408"
                        viewBox="0 0 21 18.408"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3070"
                              data-name="Rectangle 3070"
                              width="21"
                              height="18.408"
                              fill="#606060"
                              stroke="#606060"
                              stroke-width="0.3"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3664"
                          data-name="Group 3664"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1340"
                            data-name="Path 1340"
                            d="M10.933.9V1.974q0,.438,0,.875c0,.4-.149.6-.439.6s-.428-.2-.428-.59q0-.854,0-1.708V.907a9.588,9.588,0,0,0-5.74,2.231L5.7,4.507c.081.08.164.159.237.246a.423.423,0,0,1-.02.6.43.43,0,0,1-.6,0c-.285-.268-.558-.55-.834-.827-.261-.262-.52-.526-.8-.805A9.645,9.645,0,0,0,.882,10.068H3.63a1.884,1.884,0,0,1,.213,0,.423.423,0,0,1,.383.436.412.412,0,0,1-.4.422c-.177.011-.356,0-.534,0H.607c-.487,0-.621-.132-.606-.627A10.327,10.327,0,0,1,2.784,3.4,10.31,10.31,0,0,1,9.185.088,10.523,10.523,0,0,1,20.041,6.131,10.645,10.645,0,0,1,21,10.364c.008.422-.14.572-.556.572q-1.591,0-3.182,0a.436.436,0,1,1-.01-.866c.868,0,1.737,0,2.605,0h.258A9.653,9.653,0,0,0,17.31,3.72c-.3.3-.579.589-.864.877q-.331.334-.665.664c-.249.247-.519.277-.708.081s-.164-.444.1-.706q.664-.665,1.33-1.328a1.953,1.953,0,0,1,.2-.149A9.631,9.631,0,0,0,10.933.9"
                            transform="translate(0.001 0)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1341"
                            data-name="Path 1341"
                            d="M10.584,233.821q-4.954,0-9.907,0a1,1,0,0,1-.314-.037.4.4,0,0,1-.282-.429.4.4,0,0,1,.334-.391,1.329,1.329,0,0,1,.275-.022H20.462c.4,0,.609.153.612.437s-.214.444-.6.444H10.584"
                            transform="translate(-0.075 -219.651)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1342"
                            data-name="Path 1342"
                            d="M120.766,136.737a1.383,1.383,0,0,1-1.387-1.5.212.212,0,0,0-.138-.243q-1.016-.565-2.029-1.136a.436.436,0,0,1-.257-.527.431.431,0,0,1,.651-.252c.506.275,1.006.561,1.509.843.062.035.126.067.185.107a.72.72,0,0,0,.921.062,1.258,1.258,0,0,1,1.512.256,1.392,1.392,0,0,1-.966,2.394m.514-1.382a.516.516,0,1,0-.52.512.521.521,0,0,0,.52-.512"
                            transform="translate(-110.265 -125.422)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1343"
                            data-name="Path 1343"
                            d="M180.181,272.184c.022.676.044,1.352.067,2.032h-.7V271.3c.021,0,.043,0,.064,0,.262,0,.524,0,.786,0a.081.081,0,0,1,.094.067q.3.943.6,1.884c.007.02.014.041.028.081l.649-2.027h.924v2.918h-.7l.067-2.031-.012,0c-.008.022-.017.044-.024.066q-.323.952-.645,1.9c-.017.05-.037.071-.093.069-.109-.005-.219,0-.329,0a.077.077,0,0,1-.09-.063q-.307-.908-.617-1.815l-.056-.162-.013,0"
                            transform="translate(-169.304 -255.816)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1344"
                            data-name="Path 1344"
                            d="M133.435,271.35h.7v1.261l.013,0c.014-.019.028-.037.041-.056q.4-.583.793-1.165a.1.1,0,0,1,.059-.043c.275,0,.55,0,.839,0-.021.029-.033.048-.047.066-.3.392-.6.784-.9,1.173a.086.086,0,0,0,0,.116q.454.745.9,1.492c.014.022.026.045.044.078h-.074c-.231,0-.461,0-.692,0a.1.1,0,0,1-.1-.062c-.182-.324-.367-.646-.551-.968l-.036-.061c-.092.1-.182.2-.269.3a.121.121,0,0,0-.019.074c0,.213,0,.425,0,.638v.075h-.7Z"
                            transform="translate(-125.823 -255.867)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                        </g>
                      </svg>
                      <span>Distance:</span>
                    </p>
                    <p class="text-end">€ 10,000 km, 48 months</p>
                  </div>
                </div>

                <div class="card-footer">
                  <a href="#">
                    <button href="#" class="button">Leasing Privately</button>
                  </a>
                  <a href="#">
                    <button href="#" class="button">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="w-2 h-2"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      <span>DE 63165 Mühlheim..</span>
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png"
                alt="car"
                style="width: 100%"
              />
              <div class="card-body">
                <h4 class="heading">Audi Q5 Sportback S line 50 TDI Lo...</h4>
                <div class="properties">
                  <div>
                    <p>
                      <svg
                        id="Group_3663"
                        data-name="Group 3663"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="21.011"
                        viewBox="0 0 21 21.011"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3069"
                              data-name="Rectangle 3069"
                              width="21"
                              height="21.011"
                              fill="#606060"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3662"
                          data-name="Group 3662"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1338"
                            data-name="Path 1338"
                            d="M9.842,0h1.313c.053.011.1.026.158.034.539.084,1.086.133,1.616.255a10.481,10.481,0,0,1,7.911,8.4c.064.383.107.769.159,1.154v1.313a1.025,1.025,0,0,0-.031.118c-.07.486-.111.978-.213,1.458A10.5,10.5,0,1,1,8.689.159C9.071.094,9.458.052,9.842,0m9.844,10.495a9.188,9.188,0,1,0-9.193,9.194,9.2,9.2,0,0,0,9.193-9.194"
                            transform="translate(0)"
                            fill="#606060"
                          />
                          <path
                            id="Path_1339"
                            data-name="Path 1339"
                            d="M139.985,73.247c0-.236,0-.468,0-.7a.656.656,0,1,1,1.311.007c0,.225,0,.451,0,.69.065.021.127.043.19.062a2.965,2.965,0,0,1,2.1,2.738.659.659,0,1,1-1.312.045,1.64,1.64,0,1,0-1.617,1.688,2.858,2.858,0,0,1,2.678,1.774,2.942,2.942,0,0,1-1.842,4l-.2.062c0,.237,0,.468,0,.7a.656.656,0,1,1-1.311-.009c0-.225,0-.451,0-.66a7.692,7.692,0,0,1-.859-.4,2.875,2.875,0,0,1-1.434-2.434.657.657,0,0,1,.64-.745.664.664,0,0,1,.67.7,1.64,1.64,0,1,0,1.616-1.686,2.951,2.951,0,0,1-.795-5.787c.052-.014.1-.034.162-.055"
                            transform="translate(-130.142 -67.931)"
                            fill="#606060"
                          />
                        </g>
                      </svg>
                      <span>Price:</span>
                    </p>
                    <p class="text-end">€ 610,- per month</p>
                  </div>
                  <div>
                    <p>
                      <svg
                        id="Group_3665"
                        data-name="Group 3665"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="18.408"
                        viewBox="0 0 21 18.408"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3070"
                              data-name="Rectangle 3070"
                              width="21"
                              height="18.408"
                              fill="#606060"
                              stroke="#606060"
                              stroke-width="0.3"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3664"
                          data-name="Group 3664"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1340"
                            data-name="Path 1340"
                            d="M10.933.9V1.974q0,.438,0,.875c0,.4-.149.6-.439.6s-.428-.2-.428-.59q0-.854,0-1.708V.907a9.588,9.588,0,0,0-5.74,2.231L5.7,4.507c.081.08.164.159.237.246a.423.423,0,0,1-.02.6.43.43,0,0,1-.6,0c-.285-.268-.558-.55-.834-.827-.261-.262-.52-.526-.8-.805A9.645,9.645,0,0,0,.882,10.068H3.63a1.884,1.884,0,0,1,.213,0,.423.423,0,0,1,.383.436.412.412,0,0,1-.4.422c-.177.011-.356,0-.534,0H.607c-.487,0-.621-.132-.606-.627A10.327,10.327,0,0,1,2.784,3.4,10.31,10.31,0,0,1,9.185.088,10.523,10.523,0,0,1,20.041,6.131,10.645,10.645,0,0,1,21,10.364c.008.422-.14.572-.556.572q-1.591,0-3.182,0a.436.436,0,1,1-.01-.866c.868,0,1.737,0,2.605,0h.258A9.653,9.653,0,0,0,17.31,3.72c-.3.3-.579.589-.864.877q-.331.334-.665.664c-.249.247-.519.277-.708.081s-.164-.444.1-.706q.664-.665,1.33-1.328a1.953,1.953,0,0,1,.2-.149A9.631,9.631,0,0,0,10.933.9"
                            transform="translate(0.001 0)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1341"
                            data-name="Path 1341"
                            d="M10.584,233.821q-4.954,0-9.907,0a1,1,0,0,1-.314-.037.4.4,0,0,1-.282-.429.4.4,0,0,1,.334-.391,1.329,1.329,0,0,1,.275-.022H20.462c.4,0,.609.153.612.437s-.214.444-.6.444H10.584"
                            transform="translate(-0.075 -219.651)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1342"
                            data-name="Path 1342"
                            d="M120.766,136.737a1.383,1.383,0,0,1-1.387-1.5.212.212,0,0,0-.138-.243q-1.016-.565-2.029-1.136a.436.436,0,0,1-.257-.527.431.431,0,0,1,.651-.252c.506.275,1.006.561,1.509.843.062.035.126.067.185.107a.72.72,0,0,0,.921.062,1.258,1.258,0,0,1,1.512.256,1.392,1.392,0,0,1-.966,2.394m.514-1.382a.516.516,0,1,0-.52.512.521.521,0,0,0,.52-.512"
                            transform="translate(-110.265 -125.422)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1343"
                            data-name="Path 1343"
                            d="M180.181,272.184c.022.676.044,1.352.067,2.032h-.7V271.3c.021,0,.043,0,.064,0,.262,0,.524,0,.786,0a.081.081,0,0,1,.094.067q.3.943.6,1.884c.007.02.014.041.028.081l.649-2.027h.924v2.918h-.7l.067-2.031-.012,0c-.008.022-.017.044-.024.066q-.323.952-.645,1.9c-.017.05-.037.071-.093.069-.109-.005-.219,0-.329,0a.077.077,0,0,1-.09-.063q-.307-.908-.617-1.815l-.056-.162-.013,0"
                            transform="translate(-169.304 -255.816)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1344"
                            data-name="Path 1344"
                            d="M133.435,271.35h.7v1.261l.013,0c.014-.019.028-.037.041-.056q.4-.583.793-1.165a.1.1,0,0,1,.059-.043c.275,0,.55,0,.839,0-.021.029-.033.048-.047.066-.3.392-.6.784-.9,1.173a.086.086,0,0,0,0,.116q.454.745.9,1.492c.014.022.026.045.044.078h-.074c-.231,0-.461,0-.692,0a.1.1,0,0,1-.1-.062c-.182-.324-.367-.646-.551-.968l-.036-.061c-.092.1-.182.2-.269.3a.121.121,0,0,0-.019.074c0,.213,0,.425,0,.638v.075h-.7Z"
                            transform="translate(-125.823 -255.867)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                        </g>
                      </svg>
                      <span>Distance:</span>
                    </p>
                    <p class="text-end">€ 10,000 km, 48 months</p>
                  </div>
                </div>

                <div class="card-footer">
                  <a href="#">
                    <button href="#" class="button">Leasing Privately</button>
                  </a>
                  <a href="#">
                    <button href="#" class="button">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="w-2 h-2"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      <span>DE 63165 Mühlheim..</span>
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png"
                alt="car"
                style="width: 100%"
              />
              <div class="card-body">
                <h4 class="heading">Audi Q5 Sportback S line 50 TDI Lo...</h4>
                <div class="properties">
                  <div>
                    <p>
                      <svg
                        id="Group_3663"
                        data-name="Group 3663"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="21.011"
                        viewBox="0 0 21 21.011"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3069"
                              data-name="Rectangle 3069"
                              width="21"
                              height="21.011"
                              fill="#606060"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3662"
                          data-name="Group 3662"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1338"
                            data-name="Path 1338"
                            d="M9.842,0h1.313c.053.011.1.026.158.034.539.084,1.086.133,1.616.255a10.481,10.481,0,0,1,7.911,8.4c.064.383.107.769.159,1.154v1.313a1.025,1.025,0,0,0-.031.118c-.07.486-.111.978-.213,1.458A10.5,10.5,0,1,1,8.689.159C9.071.094,9.458.052,9.842,0m9.844,10.495a9.188,9.188,0,1,0-9.193,9.194,9.2,9.2,0,0,0,9.193-9.194"
                            transform="translate(0)"
                            fill="#606060"
                          />
                          <path
                            id="Path_1339"
                            data-name="Path 1339"
                            d="M139.985,73.247c0-.236,0-.468,0-.7a.656.656,0,1,1,1.311.007c0,.225,0,.451,0,.69.065.021.127.043.19.062a2.965,2.965,0,0,1,2.1,2.738.659.659,0,1,1-1.312.045,1.64,1.64,0,1,0-1.617,1.688,2.858,2.858,0,0,1,2.678,1.774,2.942,2.942,0,0,1-1.842,4l-.2.062c0,.237,0,.468,0,.7a.656.656,0,1,1-1.311-.009c0-.225,0-.451,0-.66a7.692,7.692,0,0,1-.859-.4,2.875,2.875,0,0,1-1.434-2.434.657.657,0,0,1,.64-.745.664.664,0,0,1,.67.7,1.64,1.64,0,1,0,1.616-1.686,2.951,2.951,0,0,1-.795-5.787c.052-.014.1-.034.162-.055"
                            transform="translate(-130.142 -67.931)"
                            fill="#606060"
                          />
                        </g>
                      </svg>
                      <span>Price:</span>
                    </p>
                    <p class="text-end">€ 610,- per month</p>
                  </div>
                  <div>
                    <p>
                      <svg
                        id="Group_3665"
                        data-name="Group 3665"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="18.408"
                        viewBox="0 0 21 18.408"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3070"
                              data-name="Rectangle 3070"
                              width="21"
                              height="18.408"
                              fill="#606060"
                              stroke="#606060"
                              stroke-width="0.3"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3664"
                          data-name="Group 3664"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1340"
                            data-name="Path 1340"
                            d="M10.933.9V1.974q0,.438,0,.875c0,.4-.149.6-.439.6s-.428-.2-.428-.59q0-.854,0-1.708V.907a9.588,9.588,0,0,0-5.74,2.231L5.7,4.507c.081.08.164.159.237.246a.423.423,0,0,1-.02.6.43.43,0,0,1-.6,0c-.285-.268-.558-.55-.834-.827-.261-.262-.52-.526-.8-.805A9.645,9.645,0,0,0,.882,10.068H3.63a1.884,1.884,0,0,1,.213,0,.423.423,0,0,1,.383.436.412.412,0,0,1-.4.422c-.177.011-.356,0-.534,0H.607c-.487,0-.621-.132-.606-.627A10.327,10.327,0,0,1,2.784,3.4,10.31,10.31,0,0,1,9.185.088,10.523,10.523,0,0,1,20.041,6.131,10.645,10.645,0,0,1,21,10.364c.008.422-.14.572-.556.572q-1.591,0-3.182,0a.436.436,0,1,1-.01-.866c.868,0,1.737,0,2.605,0h.258A9.653,9.653,0,0,0,17.31,3.72c-.3.3-.579.589-.864.877q-.331.334-.665.664c-.249.247-.519.277-.708.081s-.164-.444.1-.706q.664-.665,1.33-1.328a1.953,1.953,0,0,1,.2-.149A9.631,9.631,0,0,0,10.933.9"
                            transform="translate(0.001 0)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1341"
                            data-name="Path 1341"
                            d="M10.584,233.821q-4.954,0-9.907,0a1,1,0,0,1-.314-.037.4.4,0,0,1-.282-.429.4.4,0,0,1,.334-.391,1.329,1.329,0,0,1,.275-.022H20.462c.4,0,.609.153.612.437s-.214.444-.6.444H10.584"
                            transform="translate(-0.075 -219.651)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1342"
                            data-name="Path 1342"
                            d="M120.766,136.737a1.383,1.383,0,0,1-1.387-1.5.212.212,0,0,0-.138-.243q-1.016-.565-2.029-1.136a.436.436,0,0,1-.257-.527.431.431,0,0,1,.651-.252c.506.275,1.006.561,1.509.843.062.035.126.067.185.107a.72.72,0,0,0,.921.062,1.258,1.258,0,0,1,1.512.256,1.392,1.392,0,0,1-.966,2.394m.514-1.382a.516.516,0,1,0-.52.512.521.521,0,0,0,.52-.512"
                            transform="translate(-110.265 -125.422)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1343"
                            data-name="Path 1343"
                            d="M180.181,272.184c.022.676.044,1.352.067,2.032h-.7V271.3c.021,0,.043,0,.064,0,.262,0,.524,0,.786,0a.081.081,0,0,1,.094.067q.3.943.6,1.884c.007.02.014.041.028.081l.649-2.027h.924v2.918h-.7l.067-2.031-.012,0c-.008.022-.017.044-.024.066q-.323.952-.645,1.9c-.017.05-.037.071-.093.069-.109-.005-.219,0-.329,0a.077.077,0,0,1-.09-.063q-.307-.908-.617-1.815l-.056-.162-.013,0"
                            transform="translate(-169.304 -255.816)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1344"
                            data-name="Path 1344"
                            d="M133.435,271.35h.7v1.261l.013,0c.014-.019.028-.037.041-.056q.4-.583.793-1.165a.1.1,0,0,1,.059-.043c.275,0,.55,0,.839,0-.021.029-.033.048-.047.066-.3.392-.6.784-.9,1.173a.086.086,0,0,0,0,.116q.454.745.9,1.492c.014.022.026.045.044.078h-.074c-.231,0-.461,0-.692,0a.1.1,0,0,1-.1-.062c-.182-.324-.367-.646-.551-.968l-.036-.061c-.092.1-.182.2-.269.3a.121.121,0,0,0-.019.074c0,.213,0,.425,0,.638v.075h-.7Z"
                            transform="translate(-125.823 -255.867)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                        </g>
                      </svg>
                      <span>Distance:</span>
                    </p>
                    <p class="text-end">€ 10,000 km, 48 months</p>
                  </div>
                </div>

                <div class="card-footer">
                  <a href="#">
                    <button href="#" class="button">Leasing Privately</button>
                  </a>
                  <a href="#">
                    <button href="#" class="button">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="w-2 h-2"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      <span>DE 63165 Mühlheim..</span>
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png"
                alt="car"
                style="width: 100%"
              />
              <div class="card-body">
                <h4 class="heading">Audi Q5 Sportback S line 50 TDI Lo...</h4>
                <div class="properties">
                  <div>
                    <p>
                      <svg
                        id="Group_3663"
                        data-name="Group 3663"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="21.011"
                        viewBox="0 0 21 21.011"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3069"
                              data-name="Rectangle 3069"
                              width="21"
                              height="21.011"
                              fill="#606060"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3662"
                          data-name="Group 3662"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1338"
                            data-name="Path 1338"
                            d="M9.842,0h1.313c.053.011.1.026.158.034.539.084,1.086.133,1.616.255a10.481,10.481,0,0,1,7.911,8.4c.064.383.107.769.159,1.154v1.313a1.025,1.025,0,0,0-.031.118c-.07.486-.111.978-.213,1.458A10.5,10.5,0,1,1,8.689.159C9.071.094,9.458.052,9.842,0m9.844,10.495a9.188,9.188,0,1,0-9.193,9.194,9.2,9.2,0,0,0,9.193-9.194"
                            transform="translate(0)"
                            fill="#606060"
                          />
                          <path
                            id="Path_1339"
                            data-name="Path 1339"
                            d="M139.985,73.247c0-.236,0-.468,0-.7a.656.656,0,1,1,1.311.007c0,.225,0,.451,0,.69.065.021.127.043.19.062a2.965,2.965,0,0,1,2.1,2.738.659.659,0,1,1-1.312.045,1.64,1.64,0,1,0-1.617,1.688,2.858,2.858,0,0,1,2.678,1.774,2.942,2.942,0,0,1-1.842,4l-.2.062c0,.237,0,.468,0,.7a.656.656,0,1,1-1.311-.009c0-.225,0-.451,0-.66a7.692,7.692,0,0,1-.859-.4,2.875,2.875,0,0,1-1.434-2.434.657.657,0,0,1,.64-.745.664.664,0,0,1,.67.7,1.64,1.64,0,1,0,1.616-1.686,2.951,2.951,0,0,1-.795-5.787c.052-.014.1-.034.162-.055"
                            transform="translate(-130.142 -67.931)"
                            fill="#606060"
                          />
                        </g>
                      </svg>
                      <span>Price:</span>
                    </p>
                    <p class="text-end">€ 610,- per month</p>
                  </div>
                  <div>
                    <p>
                      <svg
                        id="Group_3665"
                        data-name="Group 3665"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="18.408"
                        viewBox="0 0 21 18.408"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3070"
                              data-name="Rectangle 3070"
                              width="21"
                              height="18.408"
                              fill="#606060"
                              stroke="#606060"
                              stroke-width="0.3"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3664"
                          data-name="Group 3664"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1340"
                            data-name="Path 1340"
                            d="M10.933.9V1.974q0,.438,0,.875c0,.4-.149.6-.439.6s-.428-.2-.428-.59q0-.854,0-1.708V.907a9.588,9.588,0,0,0-5.74,2.231L5.7,4.507c.081.08.164.159.237.246a.423.423,0,0,1-.02.6.43.43,0,0,1-.6,0c-.285-.268-.558-.55-.834-.827-.261-.262-.52-.526-.8-.805A9.645,9.645,0,0,0,.882,10.068H3.63a1.884,1.884,0,0,1,.213,0,.423.423,0,0,1,.383.436.412.412,0,0,1-.4.422c-.177.011-.356,0-.534,0H.607c-.487,0-.621-.132-.606-.627A10.327,10.327,0,0,1,2.784,3.4,10.31,10.31,0,0,1,9.185.088,10.523,10.523,0,0,1,20.041,6.131,10.645,10.645,0,0,1,21,10.364c.008.422-.14.572-.556.572q-1.591,0-3.182,0a.436.436,0,1,1-.01-.866c.868,0,1.737,0,2.605,0h.258A9.653,9.653,0,0,0,17.31,3.72c-.3.3-.579.589-.864.877q-.331.334-.665.664c-.249.247-.519.277-.708.081s-.164-.444.1-.706q.664-.665,1.33-1.328a1.953,1.953,0,0,1,.2-.149A9.631,9.631,0,0,0,10.933.9"
                            transform="translate(0.001 0)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1341"
                            data-name="Path 1341"
                            d="M10.584,233.821q-4.954,0-9.907,0a1,1,0,0,1-.314-.037.4.4,0,0,1-.282-.429.4.4,0,0,1,.334-.391,1.329,1.329,0,0,1,.275-.022H20.462c.4,0,.609.153.612.437s-.214.444-.6.444H10.584"
                            transform="translate(-0.075 -219.651)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1342"
                            data-name="Path 1342"
                            d="M120.766,136.737a1.383,1.383,0,0,1-1.387-1.5.212.212,0,0,0-.138-.243q-1.016-.565-2.029-1.136a.436.436,0,0,1-.257-.527.431.431,0,0,1,.651-.252c.506.275,1.006.561,1.509.843.062.035.126.067.185.107a.72.72,0,0,0,.921.062,1.258,1.258,0,0,1,1.512.256,1.392,1.392,0,0,1-.966,2.394m.514-1.382a.516.516,0,1,0-.52.512.521.521,0,0,0,.52-.512"
                            transform="translate(-110.265 -125.422)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1343"
                            data-name="Path 1343"
                            d="M180.181,272.184c.022.676.044,1.352.067,2.032h-.7V271.3c.021,0,.043,0,.064,0,.262,0,.524,0,.786,0a.081.081,0,0,1,.094.067q.3.943.6,1.884c.007.02.014.041.028.081l.649-2.027h.924v2.918h-.7l.067-2.031-.012,0c-.008.022-.017.044-.024.066q-.323.952-.645,1.9c-.017.05-.037.071-.093.069-.109-.005-.219,0-.329,0a.077.077,0,0,1-.09-.063q-.307-.908-.617-1.815l-.056-.162-.013,0"
                            transform="translate(-169.304 -255.816)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1344"
                            data-name="Path 1344"
                            d="M133.435,271.35h.7v1.261l.013,0c.014-.019.028-.037.041-.056q.4-.583.793-1.165a.1.1,0,0,1,.059-.043c.275,0,.55,0,.839,0-.021.029-.033.048-.047.066-.3.392-.6.784-.9,1.173a.086.086,0,0,0,0,.116q.454.745.9,1.492c.014.022.026.045.044.078h-.074c-.231,0-.461,0-.692,0a.1.1,0,0,1-.1-.062c-.182-.324-.367-.646-.551-.968l-.036-.061c-.092.1-.182.2-.269.3a.121.121,0,0,0-.019.074c0,.213,0,.425,0,.638v.075h-.7Z"
                            transform="translate(-125.823 -255.867)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                        </g>
                      </svg>
                      <span>Distance:</span>
                    </p>
                    <p class="text-end">€ 10,000 km, 48 months</p>
                  </div>
                </div>

                <div class="card-footer">
                  <a href="#">
                    <button href="#" class="button">Leasing Privately</button>
                  </a>
                  <a href="#">
                    <button href="#" class="button">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="w-2 h-2"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      <span>DE 63165 Mühlheim..</span>
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png"
                alt="car"
                style="width: 100%"
              />
              <div class="card-body">
                <h4 class="heading">Audi Q5 Sportback S line 50 TDI Lo...</h4>
                <div class="properties">
                  <div>
                    <p>
                      <svg
                        id="Group_3663"
                        data-name="Group 3663"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="21.011"
                        viewBox="0 0 21 21.011"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3069"
                              data-name="Rectangle 3069"
                              width="21"
                              height="21.011"
                              fill="#606060"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3662"
                          data-name="Group 3662"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1338"
                            data-name="Path 1338"
                            d="M9.842,0h1.313c.053.011.1.026.158.034.539.084,1.086.133,1.616.255a10.481,10.481,0,0,1,7.911,8.4c.064.383.107.769.159,1.154v1.313a1.025,1.025,0,0,0-.031.118c-.07.486-.111.978-.213,1.458A10.5,10.5,0,1,1,8.689.159C9.071.094,9.458.052,9.842,0m9.844,10.495a9.188,9.188,0,1,0-9.193,9.194,9.2,9.2,0,0,0,9.193-9.194"
                            transform="translate(0)"
                            fill="#606060"
                          />
                          <path
                            id="Path_1339"
                            data-name="Path 1339"
                            d="M139.985,73.247c0-.236,0-.468,0-.7a.656.656,0,1,1,1.311.007c0,.225,0,.451,0,.69.065.021.127.043.19.062a2.965,2.965,0,0,1,2.1,2.738.659.659,0,1,1-1.312.045,1.64,1.64,0,1,0-1.617,1.688,2.858,2.858,0,0,1,2.678,1.774,2.942,2.942,0,0,1-1.842,4l-.2.062c0,.237,0,.468,0,.7a.656.656,0,1,1-1.311-.009c0-.225,0-.451,0-.66a7.692,7.692,0,0,1-.859-.4,2.875,2.875,0,0,1-1.434-2.434.657.657,0,0,1,.64-.745.664.664,0,0,1,.67.7,1.64,1.64,0,1,0,1.616-1.686,2.951,2.951,0,0,1-.795-5.787c.052-.014.1-.034.162-.055"
                            transform="translate(-130.142 -67.931)"
                            fill="#606060"
                          />
                        </g>
                      </svg>
                      <span>Price:</span>
                    </p>
                    <p class="text-end">€ 610,- per month</p>
                  </div>
                  <div>
                    <p>
                      <svg
                        id="Group_3665"
                        data-name="Group 3665"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="18.408"
                        viewBox="0 0 21 18.408"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3070"
                              data-name="Rectangle 3070"
                              width="21"
                              height="18.408"
                              fill="#606060"
                              stroke="#606060"
                              stroke-width="0.3"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3664"
                          data-name="Group 3664"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1340"
                            data-name="Path 1340"
                            d="M10.933.9V1.974q0,.438,0,.875c0,.4-.149.6-.439.6s-.428-.2-.428-.59q0-.854,0-1.708V.907a9.588,9.588,0,0,0-5.74,2.231L5.7,4.507c.081.08.164.159.237.246a.423.423,0,0,1-.02.6.43.43,0,0,1-.6,0c-.285-.268-.558-.55-.834-.827-.261-.262-.52-.526-.8-.805A9.645,9.645,0,0,0,.882,10.068H3.63a1.884,1.884,0,0,1,.213,0,.423.423,0,0,1,.383.436.412.412,0,0,1-.4.422c-.177.011-.356,0-.534,0H.607c-.487,0-.621-.132-.606-.627A10.327,10.327,0,0,1,2.784,3.4,10.31,10.31,0,0,1,9.185.088,10.523,10.523,0,0,1,20.041,6.131,10.645,10.645,0,0,1,21,10.364c.008.422-.14.572-.556.572q-1.591,0-3.182,0a.436.436,0,1,1-.01-.866c.868,0,1.737,0,2.605,0h.258A9.653,9.653,0,0,0,17.31,3.72c-.3.3-.579.589-.864.877q-.331.334-.665.664c-.249.247-.519.277-.708.081s-.164-.444.1-.706q.664-.665,1.33-1.328a1.953,1.953,0,0,1,.2-.149A9.631,9.631,0,0,0,10.933.9"
                            transform="translate(0.001 0)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1341"
                            data-name="Path 1341"
                            d="M10.584,233.821q-4.954,0-9.907,0a1,1,0,0,1-.314-.037.4.4,0,0,1-.282-.429.4.4,0,0,1,.334-.391,1.329,1.329,0,0,1,.275-.022H20.462c.4,0,.609.153.612.437s-.214.444-.6.444H10.584"
                            transform="translate(-0.075 -219.651)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1342"
                            data-name="Path 1342"
                            d="M120.766,136.737a1.383,1.383,0,0,1-1.387-1.5.212.212,0,0,0-.138-.243q-1.016-.565-2.029-1.136a.436.436,0,0,1-.257-.527.431.431,0,0,1,.651-.252c.506.275,1.006.561,1.509.843.062.035.126.067.185.107a.72.72,0,0,0,.921.062,1.258,1.258,0,0,1,1.512.256,1.392,1.392,0,0,1-.966,2.394m.514-1.382a.516.516,0,1,0-.52.512.521.521,0,0,0,.52-.512"
                            transform="translate(-110.265 -125.422)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1343"
                            data-name="Path 1343"
                            d="M180.181,272.184c.022.676.044,1.352.067,2.032h-.7V271.3c.021,0,.043,0,.064,0,.262,0,.524,0,.786,0a.081.081,0,0,1,.094.067q.3.943.6,1.884c.007.02.014.041.028.081l.649-2.027h.924v2.918h-.7l.067-2.031-.012,0c-.008.022-.017.044-.024.066q-.323.952-.645,1.9c-.017.05-.037.071-.093.069-.109-.005-.219,0-.329,0a.077.077,0,0,1-.09-.063q-.307-.908-.617-1.815l-.056-.162-.013,0"
                            transform="translate(-169.304 -255.816)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1344"
                            data-name="Path 1344"
                            d="M133.435,271.35h.7v1.261l.013,0c.014-.019.028-.037.041-.056q.4-.583.793-1.165a.1.1,0,0,1,.059-.043c.275,0,.55,0,.839,0-.021.029-.033.048-.047.066-.3.392-.6.784-.9,1.173a.086.086,0,0,0,0,.116q.454.745.9,1.492c.014.022.026.045.044.078h-.074c-.231,0-.461,0-.692,0a.1.1,0,0,1-.1-.062c-.182-.324-.367-.646-.551-.968l-.036-.061c-.092.1-.182.2-.269.3a.121.121,0,0,0-.019.074c0,.213,0,.425,0,.638v.075h-.7Z"
                            transform="translate(-125.823 -255.867)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                        </g>
                      </svg>
                      <span>Distance:</span>
                    </p>
                    <p class="text-end">€ 10,000 km, 48 months</p>
                  </div>
                </div>

                <div class="card-footer">
                  <a href="#">
                    <button href="#" class="button">Leasing Privately</button>
                  </a>
                  <a href="#">
                    <button href="#" class="button">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="w-2 h-2"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      <span>DE 63165 Mühlheim..</span>
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png"
                alt="car"
                style="width: 100%"
              />
              <div class="card-body">
                <h4 class="heading">Audi Q5 Sportback S line 50 TDI Lo...</h4>
                <div class="properties">
                  <div>
                    <p>
                      <svg
                        id="Group_3663"
                        data-name="Group 3663"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="21.011"
                        viewBox="0 0 21 21.011"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3069"
                              data-name="Rectangle 3069"
                              width="21"
                              height="21.011"
                              fill="#606060"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3662"
                          data-name="Group 3662"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1338"
                            data-name="Path 1338"
                            d="M9.842,0h1.313c.053.011.1.026.158.034.539.084,1.086.133,1.616.255a10.481,10.481,0,0,1,7.911,8.4c.064.383.107.769.159,1.154v1.313a1.025,1.025,0,0,0-.031.118c-.07.486-.111.978-.213,1.458A10.5,10.5,0,1,1,8.689.159C9.071.094,9.458.052,9.842,0m9.844,10.495a9.188,9.188,0,1,0-9.193,9.194,9.2,9.2,0,0,0,9.193-9.194"
                            transform="translate(0)"
                            fill="#606060"
                          />
                          <path
                            id="Path_1339"
                            data-name="Path 1339"
                            d="M139.985,73.247c0-.236,0-.468,0-.7a.656.656,0,1,1,1.311.007c0,.225,0,.451,0,.69.065.021.127.043.19.062a2.965,2.965,0,0,1,2.1,2.738.659.659,0,1,1-1.312.045,1.64,1.64,0,1,0-1.617,1.688,2.858,2.858,0,0,1,2.678,1.774,2.942,2.942,0,0,1-1.842,4l-.2.062c0,.237,0,.468,0,.7a.656.656,0,1,1-1.311-.009c0-.225,0-.451,0-.66a7.692,7.692,0,0,1-.859-.4,2.875,2.875,0,0,1-1.434-2.434.657.657,0,0,1,.64-.745.664.664,0,0,1,.67.7,1.64,1.64,0,1,0,1.616-1.686,2.951,2.951,0,0,1-.795-5.787c.052-.014.1-.034.162-.055"
                            transform="translate(-130.142 -67.931)"
                            fill="#606060"
                          />
                        </g>
                      </svg>
                      <span>Price:</span>
                    </p>
                    <p class="text-end">€ 610,- per month</p>
                  </div>
                  <div>
                    <p>
                      <svg
                        id="Group_3665"
                        data-name="Group 3665"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="18.408"
                        viewBox="0 0 21 18.408"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3070"
                              data-name="Rectangle 3070"
                              width="21"
                              height="18.408"
                              fill="#606060"
                              stroke="#606060"
                              stroke-width="0.3"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3664"
                          data-name="Group 3664"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1340"
                            data-name="Path 1340"
                            d="M10.933.9V1.974q0,.438,0,.875c0,.4-.149.6-.439.6s-.428-.2-.428-.59q0-.854,0-1.708V.907a9.588,9.588,0,0,0-5.74,2.231L5.7,4.507c.081.08.164.159.237.246a.423.423,0,0,1-.02.6.43.43,0,0,1-.6,0c-.285-.268-.558-.55-.834-.827-.261-.262-.52-.526-.8-.805A9.645,9.645,0,0,0,.882,10.068H3.63a1.884,1.884,0,0,1,.213,0,.423.423,0,0,1,.383.436.412.412,0,0,1-.4.422c-.177.011-.356,0-.534,0H.607c-.487,0-.621-.132-.606-.627A10.327,10.327,0,0,1,2.784,3.4,10.31,10.31,0,0,1,9.185.088,10.523,10.523,0,0,1,20.041,6.131,10.645,10.645,0,0,1,21,10.364c.008.422-.14.572-.556.572q-1.591,0-3.182,0a.436.436,0,1,1-.01-.866c.868,0,1.737,0,2.605,0h.258A9.653,9.653,0,0,0,17.31,3.72c-.3.3-.579.589-.864.877q-.331.334-.665.664c-.249.247-.519.277-.708.081s-.164-.444.1-.706q.664-.665,1.33-1.328a1.953,1.953,0,0,1,.2-.149A9.631,9.631,0,0,0,10.933.9"
                            transform="translate(0.001 0)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1341"
                            data-name="Path 1341"
                            d="M10.584,233.821q-4.954,0-9.907,0a1,1,0,0,1-.314-.037.4.4,0,0,1-.282-.429.4.4,0,0,1,.334-.391,1.329,1.329,0,0,1,.275-.022H20.462c.4,0,.609.153.612.437s-.214.444-.6.444H10.584"
                            transform="translate(-0.075 -219.651)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1342"
                            data-name="Path 1342"
                            d="M120.766,136.737a1.383,1.383,0,0,1-1.387-1.5.212.212,0,0,0-.138-.243q-1.016-.565-2.029-1.136a.436.436,0,0,1-.257-.527.431.431,0,0,1,.651-.252c.506.275,1.006.561,1.509.843.062.035.126.067.185.107a.72.72,0,0,0,.921.062,1.258,1.258,0,0,1,1.512.256,1.392,1.392,0,0,1-.966,2.394m.514-1.382a.516.516,0,1,0-.52.512.521.521,0,0,0,.52-.512"
                            transform="translate(-110.265 -125.422)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1343"
                            data-name="Path 1343"
                            d="M180.181,272.184c.022.676.044,1.352.067,2.032h-.7V271.3c.021,0,.043,0,.064,0,.262,0,.524,0,.786,0a.081.081,0,0,1,.094.067q.3.943.6,1.884c.007.02.014.041.028.081l.649-2.027h.924v2.918h-.7l.067-2.031-.012,0c-.008.022-.017.044-.024.066q-.323.952-.645,1.9c-.017.05-.037.071-.093.069-.109-.005-.219,0-.329,0a.077.077,0,0,1-.09-.063q-.307-.908-.617-1.815l-.056-.162-.013,0"
                            transform="translate(-169.304 -255.816)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1344"
                            data-name="Path 1344"
                            d="M133.435,271.35h.7v1.261l.013,0c.014-.019.028-.037.041-.056q.4-.583.793-1.165a.1.1,0,0,1,.059-.043c.275,0,.55,0,.839,0-.021.029-.033.048-.047.066-.3.392-.6.784-.9,1.173a.086.086,0,0,0,0,.116q.454.745.9,1.492c.014.022.026.045.044.078h-.074c-.231,0-.461,0-.692,0a.1.1,0,0,1-.1-.062c-.182-.324-.367-.646-.551-.968l-.036-.061c-.092.1-.182.2-.269.3a.121.121,0,0,0-.019.074c0,.213,0,.425,0,.638v.075h-.7Z"
                            transform="translate(-125.823 -255.867)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                        </g>
                      </svg>
                      <span>Distance:</span>
                    </p>
                    <p class="text-end">€ 10,000 km, 48 months</p>
                  </div>
                </div>

                <div class="card-footer">
                  <a href="#">
                    <button href="#" class="button">Leasing Privately</button>
                  </a>
                  <a href="#">
                    <button href="#" class="button">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="w-2 h-2"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      <span>DE 63165 Mühlheim..</span>
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png"
                alt="car"
                style="width: 100%"
              />
              <div class="card-body">
                <h4 class="heading">Audi Q5 Sportback S line 50 TDI Lo...</h4>
                <div class="properties">
                  <div>
                    <p>
                      <svg
                        id="Group_3663"
                        data-name="Group 3663"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="21.011"
                        viewBox="0 0 21 21.011"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3069"
                              data-name="Rectangle 3069"
                              width="21"
                              height="21.011"
                              fill="#606060"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3662"
                          data-name="Group 3662"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1338"
                            data-name="Path 1338"
                            d="M9.842,0h1.313c.053.011.1.026.158.034.539.084,1.086.133,1.616.255a10.481,10.481,0,0,1,7.911,8.4c.064.383.107.769.159,1.154v1.313a1.025,1.025,0,0,0-.031.118c-.07.486-.111.978-.213,1.458A10.5,10.5,0,1,1,8.689.159C9.071.094,9.458.052,9.842,0m9.844,10.495a9.188,9.188,0,1,0-9.193,9.194,9.2,9.2,0,0,0,9.193-9.194"
                            transform="translate(0)"
                            fill="#606060"
                          />
                          <path
                            id="Path_1339"
                            data-name="Path 1339"
                            d="M139.985,73.247c0-.236,0-.468,0-.7a.656.656,0,1,1,1.311.007c0,.225,0,.451,0,.69.065.021.127.043.19.062a2.965,2.965,0,0,1,2.1,2.738.659.659,0,1,1-1.312.045,1.64,1.64,0,1,0-1.617,1.688,2.858,2.858,0,0,1,2.678,1.774,2.942,2.942,0,0,1-1.842,4l-.2.062c0,.237,0,.468,0,.7a.656.656,0,1,1-1.311-.009c0-.225,0-.451,0-.66a7.692,7.692,0,0,1-.859-.4,2.875,2.875,0,0,1-1.434-2.434.657.657,0,0,1,.64-.745.664.664,0,0,1,.67.7,1.64,1.64,0,1,0,1.616-1.686,2.951,2.951,0,0,1-.795-5.787c.052-.014.1-.034.162-.055"
                            transform="translate(-130.142 -67.931)"
                            fill="#606060"
                          />
                        </g>
                      </svg>
                      <span>Price:</span>
                    </p>
                    <p class="text-end">€ 610,- per month</p>
                  </div>
                  <div>
                    <p>
                      <svg
                        id="Group_3665"
                        data-name="Group 3665"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="18.408"
                        viewBox="0 0 21 18.408"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3070"
                              data-name="Rectangle 3070"
                              width="21"
                              height="18.408"
                              fill="#606060"
                              stroke="#606060"
                              stroke-width="0.3"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3664"
                          data-name="Group 3664"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1340"
                            data-name="Path 1340"
                            d="M10.933.9V1.974q0,.438,0,.875c0,.4-.149.6-.439.6s-.428-.2-.428-.59q0-.854,0-1.708V.907a9.588,9.588,0,0,0-5.74,2.231L5.7,4.507c.081.08.164.159.237.246a.423.423,0,0,1-.02.6.43.43,0,0,1-.6,0c-.285-.268-.558-.55-.834-.827-.261-.262-.52-.526-.8-.805A9.645,9.645,0,0,0,.882,10.068H3.63a1.884,1.884,0,0,1,.213,0,.423.423,0,0,1,.383.436.412.412,0,0,1-.4.422c-.177.011-.356,0-.534,0H.607c-.487,0-.621-.132-.606-.627A10.327,10.327,0,0,1,2.784,3.4,10.31,10.31,0,0,1,9.185.088,10.523,10.523,0,0,1,20.041,6.131,10.645,10.645,0,0,1,21,10.364c.008.422-.14.572-.556.572q-1.591,0-3.182,0a.436.436,0,1,1-.01-.866c.868,0,1.737,0,2.605,0h.258A9.653,9.653,0,0,0,17.31,3.72c-.3.3-.579.589-.864.877q-.331.334-.665.664c-.249.247-.519.277-.708.081s-.164-.444.1-.706q.664-.665,1.33-1.328a1.953,1.953,0,0,1,.2-.149A9.631,9.631,0,0,0,10.933.9"
                            transform="translate(0.001 0)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1341"
                            data-name="Path 1341"
                            d="M10.584,233.821q-4.954,0-9.907,0a1,1,0,0,1-.314-.037.4.4,0,0,1-.282-.429.4.4,0,0,1,.334-.391,1.329,1.329,0,0,1,.275-.022H20.462c.4,0,.609.153.612.437s-.214.444-.6.444H10.584"
                            transform="translate(-0.075 -219.651)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1342"
                            data-name="Path 1342"
                            d="M120.766,136.737a1.383,1.383,0,0,1-1.387-1.5.212.212,0,0,0-.138-.243q-1.016-.565-2.029-1.136a.436.436,0,0,1-.257-.527.431.431,0,0,1,.651-.252c.506.275,1.006.561,1.509.843.062.035.126.067.185.107a.72.72,0,0,0,.921.062,1.258,1.258,0,0,1,1.512.256,1.392,1.392,0,0,1-.966,2.394m.514-1.382a.516.516,0,1,0-.52.512.521.521,0,0,0,.52-.512"
                            transform="translate(-110.265 -125.422)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1343"
                            data-name="Path 1343"
                            d="M180.181,272.184c.022.676.044,1.352.067,2.032h-.7V271.3c.021,0,.043,0,.064,0,.262,0,.524,0,.786,0a.081.081,0,0,1,.094.067q.3.943.6,1.884c.007.02.014.041.028.081l.649-2.027h.924v2.918h-.7l.067-2.031-.012,0c-.008.022-.017.044-.024.066q-.323.952-.645,1.9c-.017.05-.037.071-.093.069-.109-.005-.219,0-.329,0a.077.077,0,0,1-.09-.063q-.307-.908-.617-1.815l-.056-.162-.013,0"
                            transform="translate(-169.304 -255.816)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1344"
                            data-name="Path 1344"
                            d="M133.435,271.35h.7v1.261l.013,0c.014-.019.028-.037.041-.056q.4-.583.793-1.165a.1.1,0,0,1,.059-.043c.275,0,.55,0,.839,0-.021.029-.033.048-.047.066-.3.392-.6.784-.9,1.173a.086.086,0,0,0,0,.116q.454.745.9,1.492c.014.022.026.045.044.078h-.074c-.231,0-.461,0-.692,0a.1.1,0,0,1-.1-.062c-.182-.324-.367-.646-.551-.968l-.036-.061c-.092.1-.182.2-.269.3a.121.121,0,0,0-.019.074c0,.213,0,.425,0,.638v.075h-.7Z"
                            transform="translate(-125.823 -255.867)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                        </g>
                      </svg>
                      <span>Distance:</span>
                    </p>
                    <p class="text-end">€ 10,000 km, 48 months</p>
                  </div>
                </div>

                <div class="card-footer">
                  <a href="#">
                    <button href="#" class="button">Leasing Privately</button>
                  </a>
                  <a href="#">
                    <button href="#" class="button">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="w-2 h-2"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      <span>DE 63165 Mühlheim..</span>
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Leasing offers under €100 -->
    <section class="ml-8-per">
      <div class="__slider">
        <div
          class="slider-header d-flex flex-wrap mb-5 justify-content-between"
        >
          <h2>Leasing offers under €100</h2>
          <div class="slider-btn lou100">
            <button class="prev">
              <div>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/left-arrow-dark.svg" width="12" />
              </div>
            </button>
            <button class="next">
              <div>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/right-arrow-dark.svg" width="12" />
              </div>
            </button>
          </div>
        </div>
        <div class="full-slider leasing-offer-under-hundred" id="wrapper">
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png"
                alt="car"
                style="width: 100%"
              />
              <div class="card-body">
                <h4 class="heading">Audi Q5 Sportback S line 50 TDI Lo...</h4>
                <div class="properties">
                  <div>
                    <p>
                      <svg
                        id="Group_3663"
                        data-name="Group 3663"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="21.011"
                        viewBox="0 0 21 21.011"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3069"
                              data-name="Rectangle 3069"
                              width="21"
                              height="21.011"
                              fill="#606060"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3662"
                          data-name="Group 3662"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1338"
                            data-name="Path 1338"
                            d="M9.842,0h1.313c.053.011.1.026.158.034.539.084,1.086.133,1.616.255a10.481,10.481,0,0,1,7.911,8.4c.064.383.107.769.159,1.154v1.313a1.025,1.025,0,0,0-.031.118c-.07.486-.111.978-.213,1.458A10.5,10.5,0,1,1,8.689.159C9.071.094,9.458.052,9.842,0m9.844,10.495a9.188,9.188,0,1,0-9.193,9.194,9.2,9.2,0,0,0,9.193-9.194"
                            transform="translate(0)"
                            fill="#606060"
                          />
                          <path
                            id="Path_1339"
                            data-name="Path 1339"
                            d="M139.985,73.247c0-.236,0-.468,0-.7a.656.656,0,1,1,1.311.007c0,.225,0,.451,0,.69.065.021.127.043.19.062a2.965,2.965,0,0,1,2.1,2.738.659.659,0,1,1-1.312.045,1.64,1.64,0,1,0-1.617,1.688,2.858,2.858,0,0,1,2.678,1.774,2.942,2.942,0,0,1-1.842,4l-.2.062c0,.237,0,.468,0,.7a.656.656,0,1,1-1.311-.009c0-.225,0-.451,0-.66a7.692,7.692,0,0,1-.859-.4,2.875,2.875,0,0,1-1.434-2.434.657.657,0,0,1,.64-.745.664.664,0,0,1,.67.7,1.64,1.64,0,1,0,1.616-1.686,2.951,2.951,0,0,1-.795-5.787c.052-.014.1-.034.162-.055"
                            transform="translate(-130.142 -67.931)"
                            fill="#606060"
                          />
                        </g>
                      </svg>
                      <span>Price:</span>
                    </p>
                    <p class="text-end">€ 610,- per month</p>
                  </div>
                  <div>
                    <p>
                      <svg
                        id="Group_3665"
                        data-name="Group 3665"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="18.408"
                        viewBox="0 0 21 18.408"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3070"
                              data-name="Rectangle 3070"
                              width="21"
                              height="18.408"
                              fill="#606060"
                              stroke="#606060"
                              stroke-width="0.3"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3664"
                          data-name="Group 3664"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1340"
                            data-name="Path 1340"
                            d="M10.933.9V1.974q0,.438,0,.875c0,.4-.149.6-.439.6s-.428-.2-.428-.59q0-.854,0-1.708V.907a9.588,9.588,0,0,0-5.74,2.231L5.7,4.507c.081.08.164.159.237.246a.423.423,0,0,1-.02.6.43.43,0,0,1-.6,0c-.285-.268-.558-.55-.834-.827-.261-.262-.52-.526-.8-.805A9.645,9.645,0,0,0,.882,10.068H3.63a1.884,1.884,0,0,1,.213,0,.423.423,0,0,1,.383.436.412.412,0,0,1-.4.422c-.177.011-.356,0-.534,0H.607c-.487,0-.621-.132-.606-.627A10.327,10.327,0,0,1,2.784,3.4,10.31,10.31,0,0,1,9.185.088,10.523,10.523,0,0,1,20.041,6.131,10.645,10.645,0,0,1,21,10.364c.008.422-.14.572-.556.572q-1.591,0-3.182,0a.436.436,0,1,1-.01-.866c.868,0,1.737,0,2.605,0h.258A9.653,9.653,0,0,0,17.31,3.72c-.3.3-.579.589-.864.877q-.331.334-.665.664c-.249.247-.519.277-.708.081s-.164-.444.1-.706q.664-.665,1.33-1.328a1.953,1.953,0,0,1,.2-.149A9.631,9.631,0,0,0,10.933.9"
                            transform="translate(0.001 0)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1341"
                            data-name="Path 1341"
                            d="M10.584,233.821q-4.954,0-9.907,0a1,1,0,0,1-.314-.037.4.4,0,0,1-.282-.429.4.4,0,0,1,.334-.391,1.329,1.329,0,0,1,.275-.022H20.462c.4,0,.609.153.612.437s-.214.444-.6.444H10.584"
                            transform="translate(-0.075 -219.651)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1342"
                            data-name="Path 1342"
                            d="M120.766,136.737a1.383,1.383,0,0,1-1.387-1.5.212.212,0,0,0-.138-.243q-1.016-.565-2.029-1.136a.436.436,0,0,1-.257-.527.431.431,0,0,1,.651-.252c.506.275,1.006.561,1.509.843.062.035.126.067.185.107a.72.72,0,0,0,.921.062,1.258,1.258,0,0,1,1.512.256,1.392,1.392,0,0,1-.966,2.394m.514-1.382a.516.516,0,1,0-.52.512.521.521,0,0,0,.52-.512"
                            transform="translate(-110.265 -125.422)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1343"
                            data-name="Path 1343"
                            d="M180.181,272.184c.022.676.044,1.352.067,2.032h-.7V271.3c.021,0,.043,0,.064,0,.262,0,.524,0,.786,0a.081.081,0,0,1,.094.067q.3.943.6,1.884c.007.02.014.041.028.081l.649-2.027h.924v2.918h-.7l.067-2.031-.012,0c-.008.022-.017.044-.024.066q-.323.952-.645,1.9c-.017.05-.037.071-.093.069-.109-.005-.219,0-.329,0a.077.077,0,0,1-.09-.063q-.307-.908-.617-1.815l-.056-.162-.013,0"
                            transform="translate(-169.304 -255.816)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1344"
                            data-name="Path 1344"
                            d="M133.435,271.35h.7v1.261l.013,0c.014-.019.028-.037.041-.056q.4-.583.793-1.165a.1.1,0,0,1,.059-.043c.275,0,.55,0,.839,0-.021.029-.033.048-.047.066-.3.392-.6.784-.9,1.173a.086.086,0,0,0,0,.116q.454.745.9,1.492c.014.022.026.045.044.078h-.074c-.231,0-.461,0-.692,0a.1.1,0,0,1-.1-.062c-.182-.324-.367-.646-.551-.968l-.036-.061c-.092.1-.182.2-.269.3a.121.121,0,0,0-.019.074c0,.213,0,.425,0,.638v.075h-.7Z"
                            transform="translate(-125.823 -255.867)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                        </g>
                      </svg>
                      <span>Distance:</span>
                    </p>
                    <p class="text-end">€ 10,000 km, 48 months</p>
                  </div>
                </div>

                <div class="card-footer">
                  <a href="#">
                    <button href="#" class="button">Leasing Privately</button>
                  </a>
                  <a href="#">
                    <button href="#" class="button">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="w-2 h-2"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      <span>DE 63165 Mühlheim..</span>
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png"
                alt="car"
                style="width: 100%"
              />
              <div class="card-body">
                <h4 class="heading">Audi Q5 Sportback S line 50 TDI Lo...</h4>
                <div class="properties">
                  <div>
                    <p>
                      <svg
                        id="Group_3663"
                        data-name="Group 3663"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="21.011"
                        viewBox="0 0 21 21.011"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3069"
                              data-name="Rectangle 3069"
                              width="21"
                              height="21.011"
                              fill="#606060"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3662"
                          data-name="Group 3662"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1338"
                            data-name="Path 1338"
                            d="M9.842,0h1.313c.053.011.1.026.158.034.539.084,1.086.133,1.616.255a10.481,10.481,0,0,1,7.911,8.4c.064.383.107.769.159,1.154v1.313a1.025,1.025,0,0,0-.031.118c-.07.486-.111.978-.213,1.458A10.5,10.5,0,1,1,8.689.159C9.071.094,9.458.052,9.842,0m9.844,10.495a9.188,9.188,0,1,0-9.193,9.194,9.2,9.2,0,0,0,9.193-9.194"
                            transform="translate(0)"
                            fill="#606060"
                          />
                          <path
                            id="Path_1339"
                            data-name="Path 1339"
                            d="M139.985,73.247c0-.236,0-.468,0-.7a.656.656,0,1,1,1.311.007c0,.225,0,.451,0,.69.065.021.127.043.19.062a2.965,2.965,0,0,1,2.1,2.738.659.659,0,1,1-1.312.045,1.64,1.64,0,1,0-1.617,1.688,2.858,2.858,0,0,1,2.678,1.774,2.942,2.942,0,0,1-1.842,4l-.2.062c0,.237,0,.468,0,.7a.656.656,0,1,1-1.311-.009c0-.225,0-.451,0-.66a7.692,7.692,0,0,1-.859-.4,2.875,2.875,0,0,1-1.434-2.434.657.657,0,0,1,.64-.745.664.664,0,0,1,.67.7,1.64,1.64,0,1,0,1.616-1.686,2.951,2.951,0,0,1-.795-5.787c.052-.014.1-.034.162-.055"
                            transform="translate(-130.142 -67.931)"
                            fill="#606060"
                          />
                        </g>
                      </svg>
                      <span>Price:</span>
                    </p>
                    <p class="text-end">€ 610,- per month</p>
                  </div>
                  <div>
                    <p>
                      <svg
                        id="Group_3665"
                        data-name="Group 3665"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="18.408"
                        viewBox="0 0 21 18.408"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3070"
                              data-name="Rectangle 3070"
                              width="21"
                              height="18.408"
                              fill="#606060"
                              stroke="#606060"
                              stroke-width="0.3"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3664"
                          data-name="Group 3664"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1340"
                            data-name="Path 1340"
                            d="M10.933.9V1.974q0,.438,0,.875c0,.4-.149.6-.439.6s-.428-.2-.428-.59q0-.854,0-1.708V.907a9.588,9.588,0,0,0-5.74,2.231L5.7,4.507c.081.08.164.159.237.246a.423.423,0,0,1-.02.6.43.43,0,0,1-.6,0c-.285-.268-.558-.55-.834-.827-.261-.262-.52-.526-.8-.805A9.645,9.645,0,0,0,.882,10.068H3.63a1.884,1.884,0,0,1,.213,0,.423.423,0,0,1,.383.436.412.412,0,0,1-.4.422c-.177.011-.356,0-.534,0H.607c-.487,0-.621-.132-.606-.627A10.327,10.327,0,0,1,2.784,3.4,10.31,10.31,0,0,1,9.185.088,10.523,10.523,0,0,1,20.041,6.131,10.645,10.645,0,0,1,21,10.364c.008.422-.14.572-.556.572q-1.591,0-3.182,0a.436.436,0,1,1-.01-.866c.868,0,1.737,0,2.605,0h.258A9.653,9.653,0,0,0,17.31,3.72c-.3.3-.579.589-.864.877q-.331.334-.665.664c-.249.247-.519.277-.708.081s-.164-.444.1-.706q.664-.665,1.33-1.328a1.953,1.953,0,0,1,.2-.149A9.631,9.631,0,0,0,10.933.9"
                            transform="translate(0.001 0)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1341"
                            data-name="Path 1341"
                            d="M10.584,233.821q-4.954,0-9.907,0a1,1,0,0,1-.314-.037.4.4,0,0,1-.282-.429.4.4,0,0,1,.334-.391,1.329,1.329,0,0,1,.275-.022H20.462c.4,0,.609.153.612.437s-.214.444-.6.444H10.584"
                            transform="translate(-0.075 -219.651)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1342"
                            data-name="Path 1342"
                            d="M120.766,136.737a1.383,1.383,0,0,1-1.387-1.5.212.212,0,0,0-.138-.243q-1.016-.565-2.029-1.136a.436.436,0,0,1-.257-.527.431.431,0,0,1,.651-.252c.506.275,1.006.561,1.509.843.062.035.126.067.185.107a.72.72,0,0,0,.921.062,1.258,1.258,0,0,1,1.512.256,1.392,1.392,0,0,1-.966,2.394m.514-1.382a.516.516,0,1,0-.52.512.521.521,0,0,0,.52-.512"
                            transform="translate(-110.265 -125.422)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1343"
                            data-name="Path 1343"
                            d="M180.181,272.184c.022.676.044,1.352.067,2.032h-.7V271.3c.021,0,.043,0,.064,0,.262,0,.524,0,.786,0a.081.081,0,0,1,.094.067q.3.943.6,1.884c.007.02.014.041.028.081l.649-2.027h.924v2.918h-.7l.067-2.031-.012,0c-.008.022-.017.044-.024.066q-.323.952-.645,1.9c-.017.05-.037.071-.093.069-.109-.005-.219,0-.329,0a.077.077,0,0,1-.09-.063q-.307-.908-.617-1.815l-.056-.162-.013,0"
                            transform="translate(-169.304 -255.816)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1344"
                            data-name="Path 1344"
                            d="M133.435,271.35h.7v1.261l.013,0c.014-.019.028-.037.041-.056q.4-.583.793-1.165a.1.1,0,0,1,.059-.043c.275,0,.55,0,.839,0-.021.029-.033.048-.047.066-.3.392-.6.784-.9,1.173a.086.086,0,0,0,0,.116q.454.745.9,1.492c.014.022.026.045.044.078h-.074c-.231,0-.461,0-.692,0a.1.1,0,0,1-.1-.062c-.182-.324-.367-.646-.551-.968l-.036-.061c-.092.1-.182.2-.269.3a.121.121,0,0,0-.019.074c0,.213,0,.425,0,.638v.075h-.7Z"
                            transform="translate(-125.823 -255.867)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                        </g>
                      </svg>
                      <span>Distance:</span>
                    </p>
                    <p class="text-end">€ 10,000 km, 48 months</p>
                  </div>
                </div>

                <div class="card-footer">
                  <a href="#">
                    <button href="#" class="button">Leasing Privately</button>
                  </a>
                  <a href="#">
                    <button href="#" class="button">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="w-2 h-2"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      <span>DE 63165 Mühlheim..</span>
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png"
                alt="car"
                style="width: 100%"
              />
              <div class="card-body">
                <h4 class="heading">Audi Q5 Sportback S line 50 TDI Lo...</h4>
                <div class="properties">
                  <div>
                    <p>
                      <svg
                        id="Group_3663"
                        data-name="Group 3663"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="21.011"
                        viewBox="0 0 21 21.011"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3069"
                              data-name="Rectangle 3069"
                              width="21"
                              height="21.011"
                              fill="#606060"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3662"
                          data-name="Group 3662"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1338"
                            data-name="Path 1338"
                            d="M9.842,0h1.313c.053.011.1.026.158.034.539.084,1.086.133,1.616.255a10.481,10.481,0,0,1,7.911,8.4c.064.383.107.769.159,1.154v1.313a1.025,1.025,0,0,0-.031.118c-.07.486-.111.978-.213,1.458A10.5,10.5,0,1,1,8.689.159C9.071.094,9.458.052,9.842,0m9.844,10.495a9.188,9.188,0,1,0-9.193,9.194,9.2,9.2,0,0,0,9.193-9.194"
                            transform="translate(0)"
                            fill="#606060"
                          />
                          <path
                            id="Path_1339"
                            data-name="Path 1339"
                            d="M139.985,73.247c0-.236,0-.468,0-.7a.656.656,0,1,1,1.311.007c0,.225,0,.451,0,.69.065.021.127.043.19.062a2.965,2.965,0,0,1,2.1,2.738.659.659,0,1,1-1.312.045,1.64,1.64,0,1,0-1.617,1.688,2.858,2.858,0,0,1,2.678,1.774,2.942,2.942,0,0,1-1.842,4l-.2.062c0,.237,0,.468,0,.7a.656.656,0,1,1-1.311-.009c0-.225,0-.451,0-.66a7.692,7.692,0,0,1-.859-.4,2.875,2.875,0,0,1-1.434-2.434.657.657,0,0,1,.64-.745.664.664,0,0,1,.67.7,1.64,1.64,0,1,0,1.616-1.686,2.951,2.951,0,0,1-.795-5.787c.052-.014.1-.034.162-.055"
                            transform="translate(-130.142 -67.931)"
                            fill="#606060"
                          />
                        </g>
                      </svg>
                      <span>Price:</span>
                    </p>
                    <p class="text-end">€ 610,- per month</p>
                  </div>
                  <div>
                    <p>
                      <svg
                        id="Group_3665"
                        data-name="Group 3665"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="18.408"
                        viewBox="0 0 21 18.408"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3070"
                              data-name="Rectangle 3070"
                              width="21"
                              height="18.408"
                              fill="#606060"
                              stroke="#606060"
                              stroke-width="0.3"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3664"
                          data-name="Group 3664"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1340"
                            data-name="Path 1340"
                            d="M10.933.9V1.974q0,.438,0,.875c0,.4-.149.6-.439.6s-.428-.2-.428-.59q0-.854,0-1.708V.907a9.588,9.588,0,0,0-5.74,2.231L5.7,4.507c.081.08.164.159.237.246a.423.423,0,0,1-.02.6.43.43,0,0,1-.6,0c-.285-.268-.558-.55-.834-.827-.261-.262-.52-.526-.8-.805A9.645,9.645,0,0,0,.882,10.068H3.63a1.884,1.884,0,0,1,.213,0,.423.423,0,0,1,.383.436.412.412,0,0,1-.4.422c-.177.011-.356,0-.534,0H.607c-.487,0-.621-.132-.606-.627A10.327,10.327,0,0,1,2.784,3.4,10.31,10.31,0,0,1,9.185.088,10.523,10.523,0,0,1,20.041,6.131,10.645,10.645,0,0,1,21,10.364c.008.422-.14.572-.556.572q-1.591,0-3.182,0a.436.436,0,1,1-.01-.866c.868,0,1.737,0,2.605,0h.258A9.653,9.653,0,0,0,17.31,3.72c-.3.3-.579.589-.864.877q-.331.334-.665.664c-.249.247-.519.277-.708.081s-.164-.444.1-.706q.664-.665,1.33-1.328a1.953,1.953,0,0,1,.2-.149A9.631,9.631,0,0,0,10.933.9"
                            transform="translate(0.001 0)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1341"
                            data-name="Path 1341"
                            d="M10.584,233.821q-4.954,0-9.907,0a1,1,0,0,1-.314-.037.4.4,0,0,1-.282-.429.4.4,0,0,1,.334-.391,1.329,1.329,0,0,1,.275-.022H20.462c.4,0,.609.153.612.437s-.214.444-.6.444H10.584"
                            transform="translate(-0.075 -219.651)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1342"
                            data-name="Path 1342"
                            d="M120.766,136.737a1.383,1.383,0,0,1-1.387-1.5.212.212,0,0,0-.138-.243q-1.016-.565-2.029-1.136a.436.436,0,0,1-.257-.527.431.431,0,0,1,.651-.252c.506.275,1.006.561,1.509.843.062.035.126.067.185.107a.72.72,0,0,0,.921.062,1.258,1.258,0,0,1,1.512.256,1.392,1.392,0,0,1-.966,2.394m.514-1.382a.516.516,0,1,0-.52.512.521.521,0,0,0,.52-.512"
                            transform="translate(-110.265 -125.422)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1343"
                            data-name="Path 1343"
                            d="M180.181,272.184c.022.676.044,1.352.067,2.032h-.7V271.3c.021,0,.043,0,.064,0,.262,0,.524,0,.786,0a.081.081,0,0,1,.094.067q.3.943.6,1.884c.007.02.014.041.028.081l.649-2.027h.924v2.918h-.7l.067-2.031-.012,0c-.008.022-.017.044-.024.066q-.323.952-.645,1.9c-.017.05-.037.071-.093.069-.109-.005-.219,0-.329,0a.077.077,0,0,1-.09-.063q-.307-.908-.617-1.815l-.056-.162-.013,0"
                            transform="translate(-169.304 -255.816)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1344"
                            data-name="Path 1344"
                            d="M133.435,271.35h.7v1.261l.013,0c.014-.019.028-.037.041-.056q.4-.583.793-1.165a.1.1,0,0,1,.059-.043c.275,0,.55,0,.839,0-.021.029-.033.048-.047.066-.3.392-.6.784-.9,1.173a.086.086,0,0,0,0,.116q.454.745.9,1.492c.014.022.026.045.044.078h-.074c-.231,0-.461,0-.692,0a.1.1,0,0,1-.1-.062c-.182-.324-.367-.646-.551-.968l-.036-.061c-.092.1-.182.2-.269.3a.121.121,0,0,0-.019.074c0,.213,0,.425,0,.638v.075h-.7Z"
                            transform="translate(-125.823 -255.867)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                        </g>
                      </svg>
                      <span>Distance:</span>
                    </p>
                    <p class="text-end">€ 10,000 km, 48 months</p>
                  </div>
                </div>

                <div class="card-footer">
                  <a href="#">
                    <button href="#" class="button">Leasing Privately</button>
                  </a>
                  <a href="#">
                    <button href="#" class="button">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="w-2 h-2"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      <span>DE 63165 Mühlheim..</span>
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png"
                alt="car"
                style="width: 100%"
              />
              <div class="card-body">
                <h4 class="heading">Audi Q5 Sportback S line 50 TDI Lo...</h4>
                <div class="properties">
                  <div>
                    <p>
                      <svg
                        id="Group_3663"
                        data-name="Group 3663"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="21.011"
                        viewBox="0 0 21 21.011"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3069"
                              data-name="Rectangle 3069"
                              width="21"
                              height="21.011"
                              fill="#606060"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3662"
                          data-name="Group 3662"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1338"
                            data-name="Path 1338"
                            d="M9.842,0h1.313c.053.011.1.026.158.034.539.084,1.086.133,1.616.255a10.481,10.481,0,0,1,7.911,8.4c.064.383.107.769.159,1.154v1.313a1.025,1.025,0,0,0-.031.118c-.07.486-.111.978-.213,1.458A10.5,10.5,0,1,1,8.689.159C9.071.094,9.458.052,9.842,0m9.844,10.495a9.188,9.188,0,1,0-9.193,9.194,9.2,9.2,0,0,0,9.193-9.194"
                            transform="translate(0)"
                            fill="#606060"
                          />
                          <path
                            id="Path_1339"
                            data-name="Path 1339"
                            d="M139.985,73.247c0-.236,0-.468,0-.7a.656.656,0,1,1,1.311.007c0,.225,0,.451,0,.69.065.021.127.043.19.062a2.965,2.965,0,0,1,2.1,2.738.659.659,0,1,1-1.312.045,1.64,1.64,0,1,0-1.617,1.688,2.858,2.858,0,0,1,2.678,1.774,2.942,2.942,0,0,1-1.842,4l-.2.062c0,.237,0,.468,0,.7a.656.656,0,1,1-1.311-.009c0-.225,0-.451,0-.66a7.692,7.692,0,0,1-.859-.4,2.875,2.875,0,0,1-1.434-2.434.657.657,0,0,1,.64-.745.664.664,0,0,1,.67.7,1.64,1.64,0,1,0,1.616-1.686,2.951,2.951,0,0,1-.795-5.787c.052-.014.1-.034.162-.055"
                            transform="translate(-130.142 -67.931)"
                            fill="#606060"
                          />
                        </g>
                      </svg>
                      <span>Price:</span>
                    </p>
                    <p class="text-end">€ 610,- per month</p>
                  </div>
                  <div>
                    <p>
                      <svg
                        id="Group_3665"
                        data-name="Group 3665"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="18.408"
                        viewBox="0 0 21 18.408"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3070"
                              data-name="Rectangle 3070"
                              width="21"
                              height="18.408"
                              fill="#606060"
                              stroke="#606060"
                              stroke-width="0.3"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3664"
                          data-name="Group 3664"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1340"
                            data-name="Path 1340"
                            d="M10.933.9V1.974q0,.438,0,.875c0,.4-.149.6-.439.6s-.428-.2-.428-.59q0-.854,0-1.708V.907a9.588,9.588,0,0,0-5.74,2.231L5.7,4.507c.081.08.164.159.237.246a.423.423,0,0,1-.02.6.43.43,0,0,1-.6,0c-.285-.268-.558-.55-.834-.827-.261-.262-.52-.526-.8-.805A9.645,9.645,0,0,0,.882,10.068H3.63a1.884,1.884,0,0,1,.213,0,.423.423,0,0,1,.383.436.412.412,0,0,1-.4.422c-.177.011-.356,0-.534,0H.607c-.487,0-.621-.132-.606-.627A10.327,10.327,0,0,1,2.784,3.4,10.31,10.31,0,0,1,9.185.088,10.523,10.523,0,0,1,20.041,6.131,10.645,10.645,0,0,1,21,10.364c.008.422-.14.572-.556.572q-1.591,0-3.182,0a.436.436,0,1,1-.01-.866c.868,0,1.737,0,2.605,0h.258A9.653,9.653,0,0,0,17.31,3.72c-.3.3-.579.589-.864.877q-.331.334-.665.664c-.249.247-.519.277-.708.081s-.164-.444.1-.706q.664-.665,1.33-1.328a1.953,1.953,0,0,1,.2-.149A9.631,9.631,0,0,0,10.933.9"
                            transform="translate(0.001 0)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1341"
                            data-name="Path 1341"
                            d="M10.584,233.821q-4.954,0-9.907,0a1,1,0,0,1-.314-.037.4.4,0,0,1-.282-.429.4.4,0,0,1,.334-.391,1.329,1.329,0,0,1,.275-.022H20.462c.4,0,.609.153.612.437s-.214.444-.6.444H10.584"
                            transform="translate(-0.075 -219.651)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1342"
                            data-name="Path 1342"
                            d="M120.766,136.737a1.383,1.383,0,0,1-1.387-1.5.212.212,0,0,0-.138-.243q-1.016-.565-2.029-1.136a.436.436,0,0,1-.257-.527.431.431,0,0,1,.651-.252c.506.275,1.006.561,1.509.843.062.035.126.067.185.107a.72.72,0,0,0,.921.062,1.258,1.258,0,0,1,1.512.256,1.392,1.392,0,0,1-.966,2.394m.514-1.382a.516.516,0,1,0-.52.512.521.521,0,0,0,.52-.512"
                            transform="translate(-110.265 -125.422)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1343"
                            data-name="Path 1343"
                            d="M180.181,272.184c.022.676.044,1.352.067,2.032h-.7V271.3c.021,0,.043,0,.064,0,.262,0,.524,0,.786,0a.081.081,0,0,1,.094.067q.3.943.6,1.884c.007.02.014.041.028.081l.649-2.027h.924v2.918h-.7l.067-2.031-.012,0c-.008.022-.017.044-.024.066q-.323.952-.645,1.9c-.017.05-.037.071-.093.069-.109-.005-.219,0-.329,0a.077.077,0,0,1-.09-.063q-.307-.908-.617-1.815l-.056-.162-.013,0"
                            transform="translate(-169.304 -255.816)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1344"
                            data-name="Path 1344"
                            d="M133.435,271.35h.7v1.261l.013,0c.014-.019.028-.037.041-.056q.4-.583.793-1.165a.1.1,0,0,1,.059-.043c.275,0,.55,0,.839,0-.021.029-.033.048-.047.066-.3.392-.6.784-.9,1.173a.086.086,0,0,0,0,.116q.454.745.9,1.492c.014.022.026.045.044.078h-.074c-.231,0-.461,0-.692,0a.1.1,0,0,1-.1-.062c-.182-.324-.367-.646-.551-.968l-.036-.061c-.092.1-.182.2-.269.3a.121.121,0,0,0-.019.074c0,.213,0,.425,0,.638v.075h-.7Z"
                            transform="translate(-125.823 -255.867)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                        </g>
                      </svg>
                      <span>Distance:</span>
                    </p>
                    <p class="text-end">€ 10,000 km, 48 months</p>
                  </div>
                </div>

                <div class="card-footer">
                  <a href="#">
                    <button href="#" class="button">Leasing Privately</button>
                  </a>
                  <a href="#">
                    <button href="#" class="button">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="w-2 h-2"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      <span>DE 63165 Mühlheim..</span>
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png"
                alt="car"
                style="width: 100%"
              />
              <div class="card-body">
                <h4 class="heading">Audi Q5 Sportback S line 50 TDI Lo...</h4>
                <div class="properties">
                  <div>
                    <p>
                      <svg
                        id="Group_3663"
                        data-name="Group 3663"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="21.011"
                        viewBox="0 0 21 21.011"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3069"
                              data-name="Rectangle 3069"
                              width="21"
                              height="21.011"
                              fill="#606060"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3662"
                          data-name="Group 3662"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1338"
                            data-name="Path 1338"
                            d="M9.842,0h1.313c.053.011.1.026.158.034.539.084,1.086.133,1.616.255a10.481,10.481,0,0,1,7.911,8.4c.064.383.107.769.159,1.154v1.313a1.025,1.025,0,0,0-.031.118c-.07.486-.111.978-.213,1.458A10.5,10.5,0,1,1,8.689.159C9.071.094,9.458.052,9.842,0m9.844,10.495a9.188,9.188,0,1,0-9.193,9.194,9.2,9.2,0,0,0,9.193-9.194"
                            transform="translate(0)"
                            fill="#606060"
                          />
                          <path
                            id="Path_1339"
                            data-name="Path 1339"
                            d="M139.985,73.247c0-.236,0-.468,0-.7a.656.656,0,1,1,1.311.007c0,.225,0,.451,0,.69.065.021.127.043.19.062a2.965,2.965,0,0,1,2.1,2.738.659.659,0,1,1-1.312.045,1.64,1.64,0,1,0-1.617,1.688,2.858,2.858,0,0,1,2.678,1.774,2.942,2.942,0,0,1-1.842,4l-.2.062c0,.237,0,.468,0,.7a.656.656,0,1,1-1.311-.009c0-.225,0-.451,0-.66a7.692,7.692,0,0,1-.859-.4,2.875,2.875,0,0,1-1.434-2.434.657.657,0,0,1,.64-.745.664.664,0,0,1,.67.7,1.64,1.64,0,1,0,1.616-1.686,2.951,2.951,0,0,1-.795-5.787c.052-.014.1-.034.162-.055"
                            transform="translate(-130.142 -67.931)"
                            fill="#606060"
                          />
                        </g>
                      </svg>
                      <span>Price:</span>
                    </p>
                    <p class="text-end">€ 610,- per month</p>
                  </div>
                  <div>
                    <p>
                      <svg
                        id="Group_3665"
                        data-name="Group 3665"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="18.408"
                        viewBox="0 0 21 18.408"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3070"
                              data-name="Rectangle 3070"
                              width="21"
                              height="18.408"
                              fill="#606060"
                              stroke="#606060"
                              stroke-width="0.3"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3664"
                          data-name="Group 3664"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1340"
                            data-name="Path 1340"
                            d="M10.933.9V1.974q0,.438,0,.875c0,.4-.149.6-.439.6s-.428-.2-.428-.59q0-.854,0-1.708V.907a9.588,9.588,0,0,0-5.74,2.231L5.7,4.507c.081.08.164.159.237.246a.423.423,0,0,1-.02.6.43.43,0,0,1-.6,0c-.285-.268-.558-.55-.834-.827-.261-.262-.52-.526-.8-.805A9.645,9.645,0,0,0,.882,10.068H3.63a1.884,1.884,0,0,1,.213,0,.423.423,0,0,1,.383.436.412.412,0,0,1-.4.422c-.177.011-.356,0-.534,0H.607c-.487,0-.621-.132-.606-.627A10.327,10.327,0,0,1,2.784,3.4,10.31,10.31,0,0,1,9.185.088,10.523,10.523,0,0,1,20.041,6.131,10.645,10.645,0,0,1,21,10.364c.008.422-.14.572-.556.572q-1.591,0-3.182,0a.436.436,0,1,1-.01-.866c.868,0,1.737,0,2.605,0h.258A9.653,9.653,0,0,0,17.31,3.72c-.3.3-.579.589-.864.877q-.331.334-.665.664c-.249.247-.519.277-.708.081s-.164-.444.1-.706q.664-.665,1.33-1.328a1.953,1.953,0,0,1,.2-.149A9.631,9.631,0,0,0,10.933.9"
                            transform="translate(0.001 0)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1341"
                            data-name="Path 1341"
                            d="M10.584,233.821q-4.954,0-9.907,0a1,1,0,0,1-.314-.037.4.4,0,0,1-.282-.429.4.4,0,0,1,.334-.391,1.329,1.329,0,0,1,.275-.022H20.462c.4,0,.609.153.612.437s-.214.444-.6.444H10.584"
                            transform="translate(-0.075 -219.651)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1342"
                            data-name="Path 1342"
                            d="M120.766,136.737a1.383,1.383,0,0,1-1.387-1.5.212.212,0,0,0-.138-.243q-1.016-.565-2.029-1.136a.436.436,0,0,1-.257-.527.431.431,0,0,1,.651-.252c.506.275,1.006.561,1.509.843.062.035.126.067.185.107a.72.72,0,0,0,.921.062,1.258,1.258,0,0,1,1.512.256,1.392,1.392,0,0,1-.966,2.394m.514-1.382a.516.516,0,1,0-.52.512.521.521,0,0,0,.52-.512"
                            transform="translate(-110.265 -125.422)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1343"
                            data-name="Path 1343"
                            d="M180.181,272.184c.022.676.044,1.352.067,2.032h-.7V271.3c.021,0,.043,0,.064,0,.262,0,.524,0,.786,0a.081.081,0,0,1,.094.067q.3.943.6,1.884c.007.02.014.041.028.081l.649-2.027h.924v2.918h-.7l.067-2.031-.012,0c-.008.022-.017.044-.024.066q-.323.952-.645,1.9c-.017.05-.037.071-.093.069-.109-.005-.219,0-.329,0a.077.077,0,0,1-.09-.063q-.307-.908-.617-1.815l-.056-.162-.013,0"
                            transform="translate(-169.304 -255.816)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1344"
                            data-name="Path 1344"
                            d="M133.435,271.35h.7v1.261l.013,0c.014-.019.028-.037.041-.056q.4-.583.793-1.165a.1.1,0,0,1,.059-.043c.275,0,.55,0,.839,0-.021.029-.033.048-.047.066-.3.392-.6.784-.9,1.173a.086.086,0,0,0,0,.116q.454.745.9,1.492c.014.022.026.045.044.078h-.074c-.231,0-.461,0-.692,0a.1.1,0,0,1-.1-.062c-.182-.324-.367-.646-.551-.968l-.036-.061c-.092.1-.182.2-.269.3a.121.121,0,0,0-.019.074c0,.213,0,.425,0,.638v.075h-.7Z"
                            transform="translate(-125.823 -255.867)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                        </g>
                      </svg>
                      <span>Distance:</span>
                    </p>
                    <p class="text-end">€ 10,000 km, 48 months</p>
                  </div>
                </div>

                <div class="card-footer">
                  <a href="#">
                    <button href="#" class="button">Leasing Privately</button>
                  </a>
                  <a href="#">
                    <button href="#" class="button">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="w-2 h-2"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      <span>DE 63165 Mühlheim..</span>
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png"
                alt="car"
                style="width: 100%"
              />
              <div class="card-body">
                <h4 class="heading">Audi Q5 Sportback S line 50 TDI Lo...</h4>
                <div class="properties">
                  <div>
                    <p>
                      <svg
                        id="Group_3663"
                        data-name="Group 3663"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="21.011"
                        viewBox="0 0 21 21.011"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3069"
                              data-name="Rectangle 3069"
                              width="21"
                              height="21.011"
                              fill="#606060"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3662"
                          data-name="Group 3662"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1338"
                            data-name="Path 1338"
                            d="M9.842,0h1.313c.053.011.1.026.158.034.539.084,1.086.133,1.616.255a10.481,10.481,0,0,1,7.911,8.4c.064.383.107.769.159,1.154v1.313a1.025,1.025,0,0,0-.031.118c-.07.486-.111.978-.213,1.458A10.5,10.5,0,1,1,8.689.159C9.071.094,9.458.052,9.842,0m9.844,10.495a9.188,9.188,0,1,0-9.193,9.194,9.2,9.2,0,0,0,9.193-9.194"
                            transform="translate(0)"
                            fill="#606060"
                          />
                          <path
                            id="Path_1339"
                            data-name="Path 1339"
                            d="M139.985,73.247c0-.236,0-.468,0-.7a.656.656,0,1,1,1.311.007c0,.225,0,.451,0,.69.065.021.127.043.19.062a2.965,2.965,0,0,1,2.1,2.738.659.659,0,1,1-1.312.045,1.64,1.64,0,1,0-1.617,1.688,2.858,2.858,0,0,1,2.678,1.774,2.942,2.942,0,0,1-1.842,4l-.2.062c0,.237,0,.468,0,.7a.656.656,0,1,1-1.311-.009c0-.225,0-.451,0-.66a7.692,7.692,0,0,1-.859-.4,2.875,2.875,0,0,1-1.434-2.434.657.657,0,0,1,.64-.745.664.664,0,0,1,.67.7,1.64,1.64,0,1,0,1.616-1.686,2.951,2.951,0,0,1-.795-5.787c.052-.014.1-.034.162-.055"
                            transform="translate(-130.142 -67.931)"
                            fill="#606060"
                          />
                        </g>
                      </svg>
                      <span>Price:</span>
                    </p>
                    <p class="text-end">€ 610,- per month</p>
                  </div>
                  <div>
                    <p>
                      <svg
                        id="Group_3665"
                        data-name="Group 3665"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="18.408"
                        viewBox="0 0 21 18.408"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3070"
                              data-name="Rectangle 3070"
                              width="21"
                              height="18.408"
                              fill="#606060"
                              stroke="#606060"
                              stroke-width="0.3"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3664"
                          data-name="Group 3664"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1340"
                            data-name="Path 1340"
                            d="M10.933.9V1.974q0,.438,0,.875c0,.4-.149.6-.439.6s-.428-.2-.428-.59q0-.854,0-1.708V.907a9.588,9.588,0,0,0-5.74,2.231L5.7,4.507c.081.08.164.159.237.246a.423.423,0,0,1-.02.6.43.43,0,0,1-.6,0c-.285-.268-.558-.55-.834-.827-.261-.262-.52-.526-.8-.805A9.645,9.645,0,0,0,.882,10.068H3.63a1.884,1.884,0,0,1,.213,0,.423.423,0,0,1,.383.436.412.412,0,0,1-.4.422c-.177.011-.356,0-.534,0H.607c-.487,0-.621-.132-.606-.627A10.327,10.327,0,0,1,2.784,3.4,10.31,10.31,0,0,1,9.185.088,10.523,10.523,0,0,1,20.041,6.131,10.645,10.645,0,0,1,21,10.364c.008.422-.14.572-.556.572q-1.591,0-3.182,0a.436.436,0,1,1-.01-.866c.868,0,1.737,0,2.605,0h.258A9.653,9.653,0,0,0,17.31,3.72c-.3.3-.579.589-.864.877q-.331.334-.665.664c-.249.247-.519.277-.708.081s-.164-.444.1-.706q.664-.665,1.33-1.328a1.953,1.953,0,0,1,.2-.149A9.631,9.631,0,0,0,10.933.9"
                            transform="translate(0.001 0)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1341"
                            data-name="Path 1341"
                            d="M10.584,233.821q-4.954,0-9.907,0a1,1,0,0,1-.314-.037.4.4,0,0,1-.282-.429.4.4,0,0,1,.334-.391,1.329,1.329,0,0,1,.275-.022H20.462c.4,0,.609.153.612.437s-.214.444-.6.444H10.584"
                            transform="translate(-0.075 -219.651)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1342"
                            data-name="Path 1342"
                            d="M120.766,136.737a1.383,1.383,0,0,1-1.387-1.5.212.212,0,0,0-.138-.243q-1.016-.565-2.029-1.136a.436.436,0,0,1-.257-.527.431.431,0,0,1,.651-.252c.506.275,1.006.561,1.509.843.062.035.126.067.185.107a.72.72,0,0,0,.921.062,1.258,1.258,0,0,1,1.512.256,1.392,1.392,0,0,1-.966,2.394m.514-1.382a.516.516,0,1,0-.52.512.521.521,0,0,0,.52-.512"
                            transform="translate(-110.265 -125.422)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1343"
                            data-name="Path 1343"
                            d="M180.181,272.184c.022.676.044,1.352.067,2.032h-.7V271.3c.021,0,.043,0,.064,0,.262,0,.524,0,.786,0a.081.081,0,0,1,.094.067q.3.943.6,1.884c.007.02.014.041.028.081l.649-2.027h.924v2.918h-.7l.067-2.031-.012,0c-.008.022-.017.044-.024.066q-.323.952-.645,1.9c-.017.05-.037.071-.093.069-.109-.005-.219,0-.329,0a.077.077,0,0,1-.09-.063q-.307-.908-.617-1.815l-.056-.162-.013,0"
                            transform="translate(-169.304 -255.816)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1344"
                            data-name="Path 1344"
                            d="M133.435,271.35h.7v1.261l.013,0c.014-.019.028-.037.041-.056q.4-.583.793-1.165a.1.1,0,0,1,.059-.043c.275,0,.55,0,.839,0-.021.029-.033.048-.047.066-.3.392-.6.784-.9,1.173a.086.086,0,0,0,0,.116q.454.745.9,1.492c.014.022.026.045.044.078h-.074c-.231,0-.461,0-.692,0a.1.1,0,0,1-.1-.062c-.182-.324-.367-.646-.551-.968l-.036-.061c-.092.1-.182.2-.269.3a.121.121,0,0,0-.019.074c0,.213,0,.425,0,.638v.075h-.7Z"
                            transform="translate(-125.823 -255.867)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                        </g>
                      </svg>
                      <span>Distance:</span>
                    </p>
                    <p class="text-end">€ 10,000 km, 48 months</p>
                  </div>
                </div>

                <div class="card-footer">
                  <a href="#">
                    <button href="#" class="button">Leasing Privately</button>
                  </a>
                  <a href="#">
                    <button href="#" class="button">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="w-2 h-2"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      <span>DE 63165 Mühlheim..</span>
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png"
                alt="car"
                style="width: 100%"
              />
              <div class="card-body">
                <h4 class="heading">Audi Q5 Sportback S line 50 TDI Lo...</h4>
                <div class="properties">
                  <div>
                    <p>
                      <svg
                        id="Group_3663"
                        data-name="Group 3663"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="21.011"
                        viewBox="0 0 21 21.011"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3069"
                              data-name="Rectangle 3069"
                              width="21"
                              height="21.011"
                              fill="#606060"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3662"
                          data-name="Group 3662"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1338"
                            data-name="Path 1338"
                            d="M9.842,0h1.313c.053.011.1.026.158.034.539.084,1.086.133,1.616.255a10.481,10.481,0,0,1,7.911,8.4c.064.383.107.769.159,1.154v1.313a1.025,1.025,0,0,0-.031.118c-.07.486-.111.978-.213,1.458A10.5,10.5,0,1,1,8.689.159C9.071.094,9.458.052,9.842,0m9.844,10.495a9.188,9.188,0,1,0-9.193,9.194,9.2,9.2,0,0,0,9.193-9.194"
                            transform="translate(0)"
                            fill="#606060"
                          />
                          <path
                            id="Path_1339"
                            data-name="Path 1339"
                            d="M139.985,73.247c0-.236,0-.468,0-.7a.656.656,0,1,1,1.311.007c0,.225,0,.451,0,.69.065.021.127.043.19.062a2.965,2.965,0,0,1,2.1,2.738.659.659,0,1,1-1.312.045,1.64,1.64,0,1,0-1.617,1.688,2.858,2.858,0,0,1,2.678,1.774,2.942,2.942,0,0,1-1.842,4l-.2.062c0,.237,0,.468,0,.7a.656.656,0,1,1-1.311-.009c0-.225,0-.451,0-.66a7.692,7.692,0,0,1-.859-.4,2.875,2.875,0,0,1-1.434-2.434.657.657,0,0,1,.64-.745.664.664,0,0,1,.67.7,1.64,1.64,0,1,0,1.616-1.686,2.951,2.951,0,0,1-.795-5.787c.052-.014.1-.034.162-.055"
                            transform="translate(-130.142 -67.931)"
                            fill="#606060"
                          />
                        </g>
                      </svg>
                      <span>Price:</span>
                    </p>
                    <p class="text-end">€ 610,- per month</p>
                  </div>
                  <div>
                    <p>
                      <svg
                        id="Group_3665"
                        data-name="Group 3665"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="18.408"
                        viewBox="0 0 21 18.408"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3070"
                              data-name="Rectangle 3070"
                              width="21"
                              height="18.408"
                              fill="#606060"
                              stroke="#606060"
                              stroke-width="0.3"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3664"
                          data-name="Group 3664"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1340"
                            data-name="Path 1340"
                            d="M10.933.9V1.974q0,.438,0,.875c0,.4-.149.6-.439.6s-.428-.2-.428-.59q0-.854,0-1.708V.907a9.588,9.588,0,0,0-5.74,2.231L5.7,4.507c.081.08.164.159.237.246a.423.423,0,0,1-.02.6.43.43,0,0,1-.6,0c-.285-.268-.558-.55-.834-.827-.261-.262-.52-.526-.8-.805A9.645,9.645,0,0,0,.882,10.068H3.63a1.884,1.884,0,0,1,.213,0,.423.423,0,0,1,.383.436.412.412,0,0,1-.4.422c-.177.011-.356,0-.534,0H.607c-.487,0-.621-.132-.606-.627A10.327,10.327,0,0,1,2.784,3.4,10.31,10.31,0,0,1,9.185.088,10.523,10.523,0,0,1,20.041,6.131,10.645,10.645,0,0,1,21,10.364c.008.422-.14.572-.556.572q-1.591,0-3.182,0a.436.436,0,1,1-.01-.866c.868,0,1.737,0,2.605,0h.258A9.653,9.653,0,0,0,17.31,3.72c-.3.3-.579.589-.864.877q-.331.334-.665.664c-.249.247-.519.277-.708.081s-.164-.444.1-.706q.664-.665,1.33-1.328a1.953,1.953,0,0,1,.2-.149A9.631,9.631,0,0,0,10.933.9"
                            transform="translate(0.001 0)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1341"
                            data-name="Path 1341"
                            d="M10.584,233.821q-4.954,0-9.907,0a1,1,0,0,1-.314-.037.4.4,0,0,1-.282-.429.4.4,0,0,1,.334-.391,1.329,1.329,0,0,1,.275-.022H20.462c.4,0,.609.153.612.437s-.214.444-.6.444H10.584"
                            transform="translate(-0.075 -219.651)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1342"
                            data-name="Path 1342"
                            d="M120.766,136.737a1.383,1.383,0,0,1-1.387-1.5.212.212,0,0,0-.138-.243q-1.016-.565-2.029-1.136a.436.436,0,0,1-.257-.527.431.431,0,0,1,.651-.252c.506.275,1.006.561,1.509.843.062.035.126.067.185.107a.72.72,0,0,0,.921.062,1.258,1.258,0,0,1,1.512.256,1.392,1.392,0,0,1-.966,2.394m.514-1.382a.516.516,0,1,0-.52.512.521.521,0,0,0,.52-.512"
                            transform="translate(-110.265 -125.422)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1343"
                            data-name="Path 1343"
                            d="M180.181,272.184c.022.676.044,1.352.067,2.032h-.7V271.3c.021,0,.043,0,.064,0,.262,0,.524,0,.786,0a.081.081,0,0,1,.094.067q.3.943.6,1.884c.007.02.014.041.028.081l.649-2.027h.924v2.918h-.7l.067-2.031-.012,0c-.008.022-.017.044-.024.066q-.323.952-.645,1.9c-.017.05-.037.071-.093.069-.109-.005-.219,0-.329,0a.077.077,0,0,1-.09-.063q-.307-.908-.617-1.815l-.056-.162-.013,0"
                            transform="translate(-169.304 -255.816)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1344"
                            data-name="Path 1344"
                            d="M133.435,271.35h.7v1.261l.013,0c.014-.019.028-.037.041-.056q.4-.583.793-1.165a.1.1,0,0,1,.059-.043c.275,0,.55,0,.839,0-.021.029-.033.048-.047.066-.3.392-.6.784-.9,1.173a.086.086,0,0,0,0,.116q.454.745.9,1.492c.014.022.026.045.044.078h-.074c-.231,0-.461,0-.692,0a.1.1,0,0,1-.1-.062c-.182-.324-.367-.646-.551-.968l-.036-.061c-.092.1-.182.2-.269.3a.121.121,0,0,0-.019.074c0,.213,0,.425,0,.638v.075h-.7Z"
                            transform="translate(-125.823 -255.867)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                        </g>
                      </svg>
                      <span>Distance:</span>
                    </p>
                    <p class="text-end">€ 10,000 km, 48 months</p>
                  </div>
                </div>

                <div class="card-footer">
                  <a href="#">
                    <button href="#" class="button">Leasing Privately</button>
                  </a>
                  <a href="#">
                    <button href="#" class="button">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="w-2 h-2"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      <span>DE 63165 Mühlheim..</span>
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png"
                alt="car"
                style="width: 100%"
              />
              <div class="card-body">
                <h4 class="heading">Audi Q5 Sportback S line 50 TDI Lo...</h4>
                <div class="properties">
                  <div>
                    <p>
                      <svg
                        id="Group_3663"
                        data-name="Group 3663"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="21.011"
                        viewBox="0 0 21 21.011"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3069"
                              data-name="Rectangle 3069"
                              width="21"
                              height="21.011"
                              fill="#606060"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3662"
                          data-name="Group 3662"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1338"
                            data-name="Path 1338"
                            d="M9.842,0h1.313c.053.011.1.026.158.034.539.084,1.086.133,1.616.255a10.481,10.481,0,0,1,7.911,8.4c.064.383.107.769.159,1.154v1.313a1.025,1.025,0,0,0-.031.118c-.07.486-.111.978-.213,1.458A10.5,10.5,0,1,1,8.689.159C9.071.094,9.458.052,9.842,0m9.844,10.495a9.188,9.188,0,1,0-9.193,9.194,9.2,9.2,0,0,0,9.193-9.194"
                            transform="translate(0)"
                            fill="#606060"
                          />
                          <path
                            id="Path_1339"
                            data-name="Path 1339"
                            d="M139.985,73.247c0-.236,0-.468,0-.7a.656.656,0,1,1,1.311.007c0,.225,0,.451,0,.69.065.021.127.043.19.062a2.965,2.965,0,0,1,2.1,2.738.659.659,0,1,1-1.312.045,1.64,1.64,0,1,0-1.617,1.688,2.858,2.858,0,0,1,2.678,1.774,2.942,2.942,0,0,1-1.842,4l-.2.062c0,.237,0,.468,0,.7a.656.656,0,1,1-1.311-.009c0-.225,0-.451,0-.66a7.692,7.692,0,0,1-.859-.4,2.875,2.875,0,0,1-1.434-2.434.657.657,0,0,1,.64-.745.664.664,0,0,1,.67.7,1.64,1.64,0,1,0,1.616-1.686,2.951,2.951,0,0,1-.795-5.787c.052-.014.1-.034.162-.055"
                            transform="translate(-130.142 -67.931)"
                            fill="#606060"
                          />
                        </g>
                      </svg>
                      <span>Price:</span>
                    </p>
                    <p class="text-end">€ 610,- per month</p>
                  </div>
                  <div>
                    <p>
                      <svg
                        id="Group_3665"
                        data-name="Group 3665"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21"
                        height="18.408"
                        viewBox="0 0 21 18.408"
                      >
                        <defs>
                          <clipPath id="clip-path">
                            <rect
                              id="Rectangle_3070"
                              data-name="Rectangle 3070"
                              width="21"
                              height="18.408"
                              fill="#606060"
                              stroke="#606060"
                              stroke-width="0.3"
                            />
                          </clipPath>
                        </defs>
                        <g
                          id="Group_3664"
                          data-name="Group 3664"
                          clip-path="url(#clip-path)"
                        >
                          <path
                            id="Path_1340"
                            data-name="Path 1340"
                            d="M10.933.9V1.974q0,.438,0,.875c0,.4-.149.6-.439.6s-.428-.2-.428-.59q0-.854,0-1.708V.907a9.588,9.588,0,0,0-5.74,2.231L5.7,4.507c.081.08.164.159.237.246a.423.423,0,0,1-.02.6.43.43,0,0,1-.6,0c-.285-.268-.558-.55-.834-.827-.261-.262-.52-.526-.8-.805A9.645,9.645,0,0,0,.882,10.068H3.63a1.884,1.884,0,0,1,.213,0,.423.423,0,0,1,.383.436.412.412,0,0,1-.4.422c-.177.011-.356,0-.534,0H.607c-.487,0-.621-.132-.606-.627A10.327,10.327,0,0,1,2.784,3.4,10.31,10.31,0,0,1,9.185.088,10.523,10.523,0,0,1,20.041,6.131,10.645,10.645,0,0,1,21,10.364c.008.422-.14.572-.556.572q-1.591,0-3.182,0a.436.436,0,1,1-.01-.866c.868,0,1.737,0,2.605,0h.258A9.653,9.653,0,0,0,17.31,3.72c-.3.3-.579.589-.864.877q-.331.334-.665.664c-.249.247-.519.277-.708.081s-.164-.444.1-.706q.664-.665,1.33-1.328a1.953,1.953,0,0,1,.2-.149A9.631,9.631,0,0,0,10.933.9"
                            transform="translate(0.001 0)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1341"
                            data-name="Path 1341"
                            d="M10.584,233.821q-4.954,0-9.907,0a1,1,0,0,1-.314-.037.4.4,0,0,1-.282-.429.4.4,0,0,1,.334-.391,1.329,1.329,0,0,1,.275-.022H20.462c.4,0,.609.153.612.437s-.214.444-.6.444H10.584"
                            transform="translate(-0.075 -219.651)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1342"
                            data-name="Path 1342"
                            d="M120.766,136.737a1.383,1.383,0,0,1-1.387-1.5.212.212,0,0,0-.138-.243q-1.016-.565-2.029-1.136a.436.436,0,0,1-.257-.527.431.431,0,0,1,.651-.252c.506.275,1.006.561,1.509.843.062.035.126.067.185.107a.72.72,0,0,0,.921.062,1.258,1.258,0,0,1,1.512.256,1.392,1.392,0,0,1-.966,2.394m.514-1.382a.516.516,0,1,0-.52.512.521.521,0,0,0,.52-.512"
                            transform="translate(-110.265 -125.422)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1343"
                            data-name="Path 1343"
                            d="M180.181,272.184c.022.676.044,1.352.067,2.032h-.7V271.3c.021,0,.043,0,.064,0,.262,0,.524,0,.786,0a.081.081,0,0,1,.094.067q.3.943.6,1.884c.007.02.014.041.028.081l.649-2.027h.924v2.918h-.7l.067-2.031-.012,0c-.008.022-.017.044-.024.066q-.323.952-.645,1.9c-.017.05-.037.071-.093.069-.109-.005-.219,0-.329,0a.077.077,0,0,1-.09-.063q-.307-.908-.617-1.815l-.056-.162-.013,0"
                            transform="translate(-169.304 -255.816)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                          <path
                            id="Path_1344"
                            data-name="Path 1344"
                            d="M133.435,271.35h.7v1.261l.013,0c.014-.019.028-.037.041-.056q.4-.583.793-1.165a.1.1,0,0,1,.059-.043c.275,0,.55,0,.839,0-.021.029-.033.048-.047.066-.3.392-.6.784-.9,1.173a.086.086,0,0,0,0,.116q.454.745.9,1.492c.014.022.026.045.044.078h-.074c-.231,0-.461,0-.692,0a.1.1,0,0,1-.1-.062c-.182-.324-.367-.646-.551-.968l-.036-.061c-.092.1-.182.2-.269.3a.121.121,0,0,0-.019.074c0,.213,0,.425,0,.638v.075h-.7Z"
                            transform="translate(-125.823 -255.867)"
                            fill="#606060"
                            stroke="#606060"
                            stroke-width="0.3"
                          />
                        </g>
                      </svg>
                      <span>Distance:</span>
                    </p>
                    <p class="text-end">€ 10,000 km, 48 months</p>
                  </div>
                </div>

                <div class="card-footer">
                  <a href="#">
                    <button href="#" class="button">Leasing Privately</button>
                  </a>
                  <a href="#">
                    <button href="#" class="button">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="w-2 h-2"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      <span>DE 63165 Mühlheim..</span>
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- banner  / -->
    <section class="home-banner">
      <div class="container  mx-auto row wrapper items-center">
        <div class="col-lg-6">
            <h2 class="mb-5">Finance your car in few minutes</h2>
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
    <section class="ml-8-per car-type">
      <div class="__slider mb-4">
        <div
          class="slider-header d-flex flex-wrap mb-5 justify-content-between"
        >
          <h2>Body Types</h2>
          <div class="slider-btn">
            <button class="prev bodyTypes">
              <div>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/left-arrow-dark.svg" width="12" />
              </div>
            </button>
            <button class="next bodyTypes">
              <div>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/right-arrow-dark.svg" width="12" />
              </div>
            </button>
          </div>
        </div>
        <div class="car-type-slider body-types-slider-wrapper" id="wrapper">
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Popular brands -->
    <section class="ml-8-per car-type">
      <div class="__slider mt-5">
        <div
          class="slider-header d-flex flex-wrap mb-5 justify-content-between"
        >
          <h2>Popular Brands</h2>
          <div class="slider-btn">
            <button class="prev popularBrands">
              <div>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/left-arrow-dark.svg" width="12" />
              </div>
            </button>
            <button class="next popularBrands">
              <div>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/right-arrow-dark.svg" width="12" />
              </div>
            </button>
          </div>
        </div>
        <div class="car-type-slider popular-brands-slider-wrapper" id="wrapper">
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <figure class=" p-4">
                <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/car.png"
                alt="car"
                style="width: 100%"
              />  
              </figur>
            </div>
            <p class="mt-1">EV</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Latest News -->
    <section class="ml-8-per">
      <div class="__slider">
        <div
          class="slider-header d-flex flex-wrap mb-5 justify-content-between"
        >
          <h2>Latest News</h2>
          <div class="slider-btn latestNews">
            <button class="prev">
              <div>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/left-arrow-dark.svg" width="12" />
              </div>
            </button>
            <button class="next">
              <div>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/right-arrow-dark.svg" width="12" />
              </div>
            </button>
          </div>
        </div>
        <div class="full-slider latest-news-wrapper" id="wrapper">
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png"
                alt="car"
                style="width: 100%"
              />
              <div class="card-body">
                <div class="properties">
                  <div>
                    <p>
                      <img src="<?php bloginfo('template_directory'); ?>/assets/icons/calender.svg" alt="cal"/>
                      <span class="mt-1">29 Jan 2023</span>
                    </p>
                  </div>
                </div>
                <h4 class="heading">BMW M3 (E92) the modern classic</h4>

                <div class="card-footer">
                  <a href="#">
                    <button href="#" class="button">Read news</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png"
                alt="car"
                style="width: 100%"
              />
              <div class="card-body">
                <div class="properties">
                  <div>
                    <p>
                      <img src="<?php bloginfo('template_directory'); ?>/assets/icons/calender.svg" alt="cal"/>
                      <span class="mt-1">29 Jan 2023</span>
                    </p>
                  </div>
                </div>
                <h4 class="heading">BMW M3 (E92) the modern classic</h4>

                <div class="card-footer">
                  <a href="#">
                    <button href="#" class="button">Read news</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png"
                alt="car"
                style="width: 100%"
              />
              <div class="card-body">
                <div class="properties">
                  <div>
                    <p>
                      <img src="<?php bloginfo('template_directory'); ?>/assets/icons/calender.svg" alt="cal"/>
                      <span class="mt-1">29 Jan 2023</span>
                    </p>
                  </div>
                </div>
                <h4 class="heading">BMW M3 (E92) the modern classic</h4>

                <div class="card-footer">
                  <a href="#">
                    <button href="#" class="button">Read news</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png"
                alt="car"
                style="width: 100%"
              />
              <div class="card-body">
                <div class="properties">
                  <div>
                    <p>
                      <img src="<?php bloginfo('template_directory'); ?>/assets/icons/calender.svg" alt="cal"/>
                      <span class="mt-1">29 Jan 2023</span>
                    </p>
                  </div>
                </div>
                <h4 class="heading">BMW M3 (E92) the modern classic</h4>

                <div class="card-footer">
                  <a href="#">
                    <button href="#" class="button">Read news</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png"
                alt="car"
                style="width: 100%"
              />
              <div class="card-body">
                <div class="properties">
                  <div>
                    <p>
                      <img src="<?php bloginfo('template_directory'); ?>/assets/icons/calender.svg" alt="cal"/>
                      <span class="mt-1">29 Jan 2023</span>
                    </p>
                  </div>
                </div>
                <h4 class="heading">BMW M3 (E92) the modern classic</h4>

                <div class="card-footer">
                  <a href="#">
                    <button href="#" class="button">Read news</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-card-wrapper">
            <div class="slider-card">
              <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png"
                alt="car"
                style="width: 100%"
              />
              <div class="card-body">
                <div class="properties">
                  <div>
                    <p>
                      <img src="<?php bloginfo('template_directory'); ?>/assets/icons/calender.svg" alt="cal"/>
                      <span class="mt-1">29 Jan 2023</span>
                    </p>
                  </div>
                </div>
                <h4 class="heading">BMW M3 (E92) the modern classic</h4>

                <div class="card-footer">
                  <a href="#">
                    <button href="#" class="button">Read news</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- call to action  -->
    <section class="call-to-action">
        <h2 class="main-heding">Your next car is waiting for you here...</h2>
        <div class="call_button mt-5 d-flex justify-content-center mx-auto
          <a href="#">
            <div class="button">
              <img src="<?php bloginfo('template_directory'); ?>/assets/icons/env.svg" alt="env" width="28" height="28"/>
              <span>INFO@001CARS.COM</span>
            </div>
          </a>
          <a href="#">
            <div class="button btn-dark">
              <img src="<?php bloginfo('template_directory'); ?>/assets/icons/phone.svg" alt="env" width="27" height="28"/>
              <span>+420 246 034 700</span>
            </div>
          </a>
        </div>
    </section>

    <!-- footer section -->
    <footer class="container">
      <section class="footer_nav row">
        <div class="col-md-2">
          <h3>SUPPORT</h3>
          <ul>
            <li><a href="#">About 001</a></li>
            <li><a href="#">Press</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Advertising</a></li>
            <li><a href="#">Conditions</a></li>
          </ul>
        </div>
        <div class="col-md-2">
          <h3>SERVICE</h3>
          <ul>
            <li><a href="#">Help</a></li>
            <li><a href="#">Code</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Car Catalogue</a></li>
            <li><a href="#">car Subscription</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h3>DEALER</h3>
          <ul>
            <li><a href="#">Register</a></li>
            <li><a href="#">To Register</a></li>
            <li><a href="#">Advantages</a></li>
            <li><a href="#">Partner Info Portal</a></li>
            <li><a href="#">Conditions</a></li>
          </ul>
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
        <ul class="extra-links d-flex">
          <li><a href="#">Sitemap</a></li>
          <li><a href="#">Terms & Conditions </a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ul>
      </section>
    </footer>


  

<?php get_footer(); ?>