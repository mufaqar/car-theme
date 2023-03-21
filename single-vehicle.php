<?php get_header(); ?>


<header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-main d-flex justify-content-between">
        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/icons/logo.svg" alt="logo" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse justify-content-center navbar-collapse" id="navbarNav">
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

  <section class="slug">
    <div class="container mx-auto main-section-wrapper">
      <div>
        <div class="main">
          <div class="slider slider-for">
            <div><img src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png" alt="car" /></div>
            <div><img src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png" alt="car" /></div>
            <div><img src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png" alt="car" /></div>
            <div><img src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png" alt="car" /></div>
            <div><img src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png" alt="car" /></div>
          </div>
          <div class="slider slider-nav">
            <div><img src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png" alt="car" /></div>
            <div><img src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png" alt="car" /></div>
            <div><img src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png" alt="car" /></div>
            <div><img src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png" alt="car" /></div>
            <div><img src="<?php bloginfo('template_directory'); ?>/assets/images/leasing-car.png" alt="car" /></div>
          </div>
        </div>
      </div>
      <div class="detail-content">
        <h3>Skoda Fabia</h3>
        <h5>ACTIVE #CLIMATE #LED #LANE KEEPING</h5>
        <div class="d-flex _border align-items-center gap-2 mt-3">
          <img src="<?php bloginfo('template_directory'); ?>/assets/icons/pin_2.svg" alt="pin" width="21" height="21">
          <span class="pin">DE 63165 Mühlheim..</span>
        </div>
        <h6 class="price">€ 128.99 per month</h6>
        <p class="vat">€ 108.39 per month excl. VAT</p>
        <div class="info">
          <div class="d-md-flex justify-content-between">
            <button>More leasing details</button>
            <p>
              <span>Only available as a lease</span>
              <img src="<?php bloginfo('template_directory'); ?>/assets/icons/info.svg" alt="">
            </p>
          </div>
          <div class="d-flex justify-content-between mt-3 mb-2">
            <p>Down payment:</p>
            <p>€ 12</p>
          </div>
          <div class="d-flex justify-content-between mt-3 mb-3">
            <p>Contract term:</p>
            <p>mileage per year</p>
          </div>
          <form class="d-flex gap-2">
            <div>
              <select class="select">
                <option>36 Monate</option>
                <option>36 Monate</option>
              </select>
            </div>
            <div>
              <select class="select">
                <option>15.000 km</option>
                <option>15.000 km</option>
              </select>
            </div>
          </form>
          <div class="d-flex mt-3 justify-content-between mt-1 ">
            <p class="gard"><img src="<?php bloginfo('template_directory'); ?>/assets/icons/gard.svg" alt="gard" /> <span>Insurance</span>
            <p>
            <p>from €6.85 monthly assure</p>
          </div>
          <a href="#">
            <div class="mt-2 requestButton">Request leasing</div>
          </a>
          <div class="brand">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/brand.png" alt="brand" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- features  -->
  <section class="features">
    <div class="freature_wrapper container mx-auto">
      <div class="d-flex feature align-items-center gap-2">
        <figure>
          <img src="<?php bloginfo('template_directory'); ?>/assets/icons/kms.svg" alt="">
        </figure>
        <div class="content">
          <h6>Kms driven</h6>
          <p>27,000 km</p>
        </div>
      </div>
      <div class="d-flex feature align-items-center gap-2">
        <figure>
          <img src="<?php bloginfo('template_directory'); ?>/assets/icons/kms.svg" alt="">
        </figure>
        <div class="content">
          <h6>Kms driven</h6>
          <p>27,000 km</p>
        </div>
      </div>
      <div class="d-flex feature align-items-center gap-2">
        <figure>
          <img src="<?php bloginfo('template_directory'); ?>/assets/icons/kms.svg" alt="">
        </figure>
        <div class="content">
          <h6>Kms driven</h6>
          <p>27,000 km</p>
        </div>
      </div>
      <div class="d-flex feature align-items-center gap-2">
        <figure>
          <img src="<?php bloginfo('template_directory'); ?>/assets/icons/kms.svg" alt="">
        </figure>
        <div class="content">
          <h6>Kms driven</h6>
          <p>27,000 km</p>
        </div>
      </div>
      <div class="d-flex feature align-items-center gap-2">
        <figure>
          <img src="<?php bloginfo('template_directory'); ?>/assets/icons/kms.svg" alt="">
        </figure>
        <div class="content">
          <h6>Kms driven</h6>
          <p>27,000 km</p>
        </div>
      </div>
      <div class="d-flex feature align-items-center gap-2">
        <figure>
          <img src="<?php bloginfo('template_directory'); ?>/assets/icons/kms.svg" alt="">
        </figure>
        <div class="content">
          <h6>Kms driven</h6>
          <p>27,000 km</p>
        </div>
      </div>
      <div class="d-flex feature align-items-center gap-2">
        <figure>
          <img src="<?php bloginfo('template_directory'); ?>/assets/icons/kms.svg" alt="">
        </figure>
        <div class="content">
          <h6>Kms driven</h6>
          <p>27,000 km</p>
        </div>
      </div>
      <div class="d-flex feature align-items-center gap-2">
        <figure>
          <img src="<?php bloginfo('template_directory'); ?>/assets/icons/kms.svg" alt="">
        </figure>
        <div class="content">
          <h6>Kms driven</h6>
          <p>27,000 km</p>
        </div>
      </div>
      <div class="d-flex feature align-items-center gap-2">
        <figure>
          <img src="<?php bloginfo('template_directory'); ?>/assets/icons/kms.svg" alt="">
        </figure>
        <div class="content">
          <h6>Kms driven</h6>
          <p>27,000 km</p>
        </div>
      </div>
      <div class="d-flex feature align-items-center gap-2">
        <figure>
          <img src="<?php bloginfo('template_directory'); ?>/assets/icons/kms.svg" alt="">
        </figure>
        <div class="content">
          <h6>Kms driven</h6>
          <p>27,000 km</p>
        </div>
      </div>
      <div class="d-flex feature align-items-center gap-2">
        <figure>
          <img src="<?php bloginfo('template_directory'); ?>/assets/icons/kms.svg" alt="">
        </figure>
        <div class="content">
          <h6>Kms driven</h6>
          <p>27,000 km</p>
        </div>
      </div>

    </div>
  </section>

  <!-- Highlights section -->
  <section class="highlights">
    <div class="container mx-auto">
      <h2 class="sub-heading">Highlights</h2>
      <div class="highlights_wrapper">
        <ul>
          <li>
            <p>Registered In</p>
            <p>N/A</p>
          </li>
          <li>
            <p>Assembly</p>
            <p>Local</p>
          </li>
          <li>
            <p>Body Type</p>
            <p>Sedan</p>
          </li>
          <li>
            <p>Ref #</p>
            <p>7226369</p>
          </li>
        </ul>
        <ul>
          <li>
            <p>Engine Capacity</p>
            <p>1500 cc</p>
          </li>
          <li>
            <p>Interior color</p>
            <p>Other interior color</p>
          </li>
          <li>
            <p>Interior material</p>
            <p>Cloth interior</p>
          </li>
          <li>
            <p>Seats</p>
            <p>5</p>
          </li>
        </ul>
        <ul>
          <li>
            <p>VIN</p>
            <p>not published</p>
          </li>
          <li>
            <p>Emission class</p>
            <p>Euro 6d</p>
          </li>
          <li>
            <p>Make</p>
            <p>Suzuki</p>
          </li>
          <li>
            <p>Model</p>
            <p>Vitara</p>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Car features section  -->
  <section class="car-features">
    <div class="container mx-auto">
      <h2 class="sub-heading">Car features</h2>
      <div class="car-feature-wrapper">
        <ul>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>ABS</span>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>Alloy Rims</span>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>Front Speakers</span>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>Navigation System</span>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>Power Steering</span>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>USB and Auxillary Cable</span>
          </li>
        </ul>
        <ul>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>ABS</span>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>Alloy Rims</span>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>Front Speakers</span>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>Navigation System</span>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>Power Steering</span>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>USB and Auxillary Cable</span>
          </li>
        </ul>
        <ul>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>ABS</span>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>Alloy Rims</span>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>Front Speakers</span>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>Navigation System</span>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>Power Steering</span>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>USB and Auxillary Cable</span>
          </li>
        </ul>
        <ul>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>ABS</span>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>Alloy Rims</span>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>Front Speakers</span>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>Navigation System</span>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>Power Steering</span>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>USB and Auxillary Cable</span>
          </li>
        </ul>
        <ul>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>ABS</span>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>Alloy Rims</span>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>Front Speakers</span>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>Navigation System</span>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>Power Steering</span>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/abs.svg" alt="logo" />
            <span>USB and Auxillary Cable</span>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Leasing prices -->
  <section class="leasing-price container mx-auto">
      <div class="left">
        <h2 class="sub-heading">Leasing prices</h2>
        <p>Exclusive leasing offer from Autohaus Christian Ertl AG</p>
        <h3>Benefits of leasing at a glance :</h3>
        <ul>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/tick.svg" alt="tick"/>
            <span>Inexpensive: leasing pays off. </span>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/tick.svg" alt="tick"/>
            <span>Individual: According to your wishes. </span>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/tick.svg" alt="tick"/>
            <span>Safe: plan in advance </span>
          </li>
        </ul>
        <p class="address">Loan brokerage by ALD AutoLeasing D GmbH, Nedderfeld 95, 22529 Hamburg<br/> The information also corresponds to the 2/3 example according to § 6a Para. 3 PAngV.</p>
      </div>
      <div class="right">
        <div>
          <h3>One-time costs</h3>
          <ul>
            <li>
              <p>Engine Capacity</p>
              <p>1500 cc</p>
            </li>
            <li>
              <p>Interior color</p>
              <p>Other interior color</p>
            </li>
            <li>
              <p>Interior material</p>
              <p>Cloth interior</p>
            </li>
            <li>
              <p>Seats</p>
              <p>5</p>
            </li>
          </ul>
        </div>
         <div>
          <h3>One-time costs</h3>
          <ul>
            <li>
              <p>Engine Capacity</p>
              <p>1500 cc</p>
            </li>
            <li>
              <p>Interior color</p>
              <p>Other interior color</p>
            </li>
            <li>
              <p>Interior material</p>
              <p>Cloth interior</p>
            </li>
            <li>
              <p>Seats</p>
              <p>5</p>
            </li>
          </ul>
        </div>
        <div>
          <h3>One-time costs</h3>
          <ul>
            <li>
              <p>Engine Capacity</p>
              <p>1500 cc</p>
            </li>
            <li>
              <p>Interior color</p>
              <p>Other interior color</p>
            </li>
            <li>
              <p>Interior material</p>
              <p>Cloth interior</p>
            </li>
            <li>
              <p>Seats</p>
              <p>5</p>
            </li>
          </ul>
        </div>
        <div>
          <h3>One-time costs</h3>
          <ul>
            <li>
              <p>Engine Capacity</p>
              <p>1500 cc</p>
            </li>
            <li>
              <p>Interior color</p>
              <p>Other interior color</p>
            </li>
            <li>
              <p>Interior material</p>
              <p>Cloth interior</p>
            </li>
            <li>
              <p>Seats</p>
              <p>5</p>
            </li>
          </ul>
        </div>
      </div>
  </section>



  <!-- call to action  -->
  <section class="call-to-action">
    <h2 class="main-heding">Your next car is waiting for you here...</h2>
    <div class="call_button mt-5 d-flex justify-content-center mx-auto
          <a href="#">
            <div class=" button">
      <img src="<?php bloginfo('template_directory'); ?>/assets/icons/env.svg" alt="env" width="28" height="28" />
      <span>INFO@001CARS.COM</span>
    </div>
    </a>
    <a href="" #>
      <div class="button btn-dark">
        <img src="<?php bloginfo('template_directory'); ?>/assets/icons/phone.svg" alt="env" width="27" height="28" />
        <span>+420 246 034 700</span>
      </div>
    </a>
    </div>
  </section>

  <!-- footer section -->
  <footer>
    <div class="container">
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
            <input value="" placeholder="Location">
            <img src="<?php bloginfo('template_directory'); ?>/assets/icons/pin.svg" alt="pin" />
          </div>
          <div class="social mt-5">
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/icons/fb.svg" alt="facebook" /></a>
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/icons/in.svg" alt="instagram" /></a>
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/icons/tw.svg" alt="twitter" /></a>
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/icons/yt.svg" alt="youtube" /></a>
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
    </div>
  </footer>


<?php get_footer(); ?>