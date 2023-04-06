<aside class="col-md-3 filter-sidebar">
    <h4>basic spacific & location
    <form class="row" method="GET" action="<?php echo home_url('search-listing'); ?>">
        <label>Brand</label>
        <select class="form-select" name="brand" id="brand"  onchange="this.form.submit()">
          <option value="">Select Brand</option>         
             <?php
                    $terms_brands = get_terms( array('taxonomy' => 'brand',  'hide_empty' => false ) );
                    if ( ! empty( $terms_brands ) && ! is_wp_error( $terms_brands ) ) {                  
                        foreach ( $terms_brands as $terms_brand ) {  ?> 
                      <option value="<?php echo $terms_brand->slug ?> "><?php echo $terms_brand->name ?> </option>                   
            <?php } } ?> 
        </select>
        <label>Body Type</label>
        <select class="form-select" name="body_type" id="body_type"  onchange="this.form.submit()">
           <option value="">Select Body Type</option>  
          <?php
                    $terms_body_types = get_terms( array('taxonomy' => 'body_type',  'hide_empty' => false ) );
                    if ( ! empty( $terms_body_types ) && ! is_wp_error( $terms_body_types ) ) {                  
                        foreach ( $terms_body_types as $terms_body_type ) {  ?> 
                      <option value="<?php echo $terms_body_type->slug ?> "><?php echo $terms_body_type->name ?> </option>                   
            <?php } } ?> 
        </select>
        <label>Variant</label>
        <input class="form-control form-control-lg submit_on_enter" name="variant" id="variant" type="text" placeholder="e.g. Plus, GTI" >
        <label>body shape</label>
        <select class="form-select" name="body_shape" id="body_shape"  onchange="this.form.submit()">
          <option value="">Select Body Type</option> 
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
        <label>Fuel type</label>
        <select class="form-select" >
          <option selected>Open this select menu</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>

        <label>First registration</label>
        <div class="d-flex gap-1">
          <select class="form-select" >
            <option selected>From</option>
             <?php for ($x = 2010; $x <= 2023; $x++) {
                echo "<option value='1'> $x </option>";
                }
                ?>


          </select>
          <select class="form-select" >
            <option selected>To</option>
            <?php for ($x = 2010; $x <= 2023; $x++) {
                echo "<option value='1'> $x </option>";
                }
                ?>
          </select>
        </div>
        <label>Price</label>
        <div class="d-flex gap-1">
          <select class="form-select" >
            <option selected>From</option>
            <option value="1">$ 2500</option>
            <option value="2">$ 3000</option>
            <option value="3">$ 4000</option>
          </select>
          <select class="form-select" >
            <option selected>To</option>
            <option value="1">$ 2500</option>
            <option value="2">$ 3000</option>
            <option value="3">$ 4000</option>
          </select>
        </div>
        <label>City/zip code</label>
        <input class="form-control form-control-lg" type="text" placeholder="City/zip code"
          aria-label=".form-control-lg example">
        <label>Mileage</label>
        <div class="d-flex gap-1">
          <select class="form-select" >
            <option selected>From</option>
            <option value="1">2500</option>
            <option value="2">3000</option>
            <option value="3">4000</option>
          </select>
          <select class="form-select" >
            <option selected>To</option>
            <option value="1">2500</option>
            <option value="2">3000</option>
            <option value="3">4000</option>
          </select>
        </div>
        <label>Gear</label>
        <select class="form-select" >
          <option selected>Open this select menu</option>
          <option value="1">Manual</option>
          <option value="2">Automatic</option>
          <option value="3">Semi Automatic</option>
        </select>
        <label>Vehicle condition</label>
        <div class="checkbox">
          <input class="form-check-input" type="checkbox" value="" id="new">
          <label class="form-check-label" for="new">
            New
          </label>
        </div>
        <div class="checkbox">
          <input class="form-check-input" type="checkbox" value="" id="used">
          <label class="form-check-label" for="used">
            Used
          </label>
        </div>
        <div class="checkbox">
          <input class="form-check-input" type="checkbox" value="" id="pre-reg">
          <label class="form-check-label" for="pre-reg">
            Pre Registor
          </label>
        </div>

      </form>
  </aside>

