<aside class="col-md-4 col-lg-3" >
    <h4>Choose Options</h4>
    <form class="row" method="GET" action="<?php echo home_url('search-listing'); ?>">
        <label>Brand</label>
        <select class="form-select" name="brand" id="brand" onchange="this.form.submit()">
            <option value="">Select Brand</option>
            <?php
                   
                    $terms_brands = get_terms( array('taxonomy' => 'brand',  'hide_empty' => false ) );
                    if ( ! empty( $terms_brands ) && ! is_wp_error( $terms_brands ) ) {                  
                        foreach ( $terms_brands as $terms_brand ) {  ?>
            <option value="<?php echo $terms_brand->slug ?>" <?php if (!empty($brand)) { echo $terms_brand->slug == $brand ? "selected" : ""; }?>><?php echo $terms_brand->name ?>
                (<?php echo $terms_brand->count ?>) </option>
            <?php } } ?>
        </select>
        <label>Body Type</label>
        <select class="form-select" name="body_type" id="body_type" onchange="this.form.submit()">
            <option value="">Select Body Type</option>
            <?php
                    $terms_body_types = get_terms( array('taxonomy' => 'body_type',  'hide_empty' => false ) );
                    if ( ! empty( $terms_body_types ) && ! is_wp_error( $terms_body_types ) ) {                  
                        foreach ( $terms_body_types as $terms_body_type ) {  ?>
            <option value="<?php echo $terms_body_type->slug ?>" <?php if (!empty($body_type)) { echo $terms_body_type->slug  == $body_type ? "selected" : ""; }?>><?php echo $terms_body_type->name ?>
                (<?php echo $terms_body_type->count ?>) </option>
            <?php } } ?>
        </select>
        <label>Variant</label>
        <input class="form-control form-control-lg submit_on_enter" name="variant" id="variant" type="text"
            placeholder="e.g. Plus, GTI">

        <label>Engine Type</label>
        <select class="form-select" name="engine_type" onchange="this.form.submit()">
            <option value="">Select Engine Type</option>
            <?php
                    $terms_engine_types = get_terms( array('taxonomy' => 'engine_type',  'hide_empty' => false ) );
                    if ( ! empty( $terms_engine_types ) && ! is_wp_error( $terms_engine_types ) ) {                  
                        foreach ( $terms_engine_types as $terms_engine_type ) {  ?>
            <option value="<?php echo $terms_engine_type->slug ?>" <?php if (!empty($engine_type)) {  echo $terms_engine_type->slug  == $engine_type ? "selected" : "";} ?>><?php echo $terms_engine_type->name ?>
                (<?php echo $terms_engine_type->count ?>) </option>
            <?php } } ?>
        </select>

        <label>Transmission</label>
        <select class="form-select" name="transmission" onchange="this.form.submit()">
            <option value="">Select Transmission</option>
            <?php
                    $terms_transmissions = get_terms( array('taxonomy' => 'transmission',  'hide_empty' => false ) );
                    if ( ! empty( $terms_transmissions ) && ! is_wp_error( $terms_transmissions ) ) {                  
                        foreach ( $terms_transmissions as $terms_transmission ) {  ?>
            <option value="<?php echo $terms_transmission->slug ?>" <?php if (!empty($transmission)) { echo $terms_transmission->slug  == $transmission ? "selected" : ""; }?>><?php echo $terms_transmission->name ?>
                (<?php echo $terms_transmission->count ?>) </option>
            <?php } } ?>
        </select>

        <label>First Registration</label>
        <div class="d-flex gap-1">
            <select class="form-select" name="engine_reg" onchange="this.form.submit()">
                <option value="">From</option>
                <?php for ($x = 2000; $x <= 2023; $x++) {
                echo "<option value='1'> $x </option>";
                }
                ?>


            </select>
            <select class="form-select">
                <option selected>To</option>
                <?php for ($x = 2010; $x <= 2023; $x++) {
                echo "<option value='1'> $x </option>";
                }
                ?>
            </select>
        </div>
        <label>Price</label>
        <div class="d-flex gap-1">
            <select class="form-select">
                <option selected>From</option>
                <option value="1">$ 2500</option>
                <option value="2">$ 3000</option>
                <option value="3">$ 4000</option>
            </select>
            <select class="form-select">
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
            <select class="form-select">
                <option selected>From</option>
                <option value="1">2500</option>
                <option value="2">3000</option>
                <option value="3">4000</option>
            </select>
            <select class="form-select">
                <option selected>To</option>
                <option value="1">2500</option>
                <option value="2">3000</option>
                <option value="3">4000</option>
            </select>
        </div>
        <label>Color</label>
        <select class="form-select" name="color" onchange="this.form.submit()">
            <option value="">Select Color</option>
            <?php
                    $terms_colors = get_terms( array('taxonomy' => 'color',  'hide_empty' => false ) );
                    if ( ! empty( $terms_colors ) && ! is_wp_error( $terms_colors ) ) {                  
                        foreach ( $terms_colors as $terms_color ) {  ?>
            <option value="<?php echo $terms_color->slug ?> " <?php if (!empty($color)) {  echo $terms_color->slug  == $color ? "selected" : ""; }?>><?php echo $terms_color->name ?>
                (<?php echo $terms_color->count ?>) </option>
            <?php } } ?>
        </select>
        <label>Vehicle Condition</label>
        <?php
                    $terms_vehicle_types = get_terms( array('taxonomy' => 'vehicle_type',  'hide_empty' => false ) );
                    if ( ! empty( $terms_vehicle_types ) && ! is_wp_error( $terms_vehicle_types ) ) {                  
                        foreach ( $terms_vehicle_types as $terms_vehicle_type ) {  ?>
        <div class="checkbox">
            <input class="form-check-input" type="checkbox" value="<?php echo $terms_vehicle_type->slug ?>"
                id="<?php echo $terms_vehicle_type->slug ?>">
            <label class="form-check-label" for="<?php echo $terms_vehicle_type->slug ?>">
                <?php echo $terms_vehicle_type->name ?> (<?php echo $terms_vehicle_type->count ?>)
            </label>
        </div>
        <?php } } ?>
    </form>
</aside>