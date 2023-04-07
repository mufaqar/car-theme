<?php
include get_template_directory() . '/inc/cpts.php';
include get_template_directory() . '/inc/cf.php';
include get_template_directory() . '/inc/wp-bootstrap-navlist-walker.php';



    // get all body type icon 1
    function get_all_body_type () {
                $terms = get_terms( array(
                    'taxonomy' => 'body_type',
                    'hide_empty' => false,
                ) );
                  if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {                  
                      foreach ( $terms as $term ) {
                       $feature_icon =  get_field('feature_icon', $term);
                          ?>
                            <div class="item_wrapper">
                                <div class="item">
                                <img src="<?php echo $feature_icon ?>" alt="suv" />
                                <span><?php echo $term->name ?> </span>
                                </div>
                            </div>  
                          <?php
                      }                  
                  }
    }


       // get all body type icon 1
       function get_features_type () {
        $terms = get_terms( array(
            'taxonomy' => 'features',
            'hide_empty' => false,
        ) );
          if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {                  
              foreach ( $terms as $term ) {
            
               $feature_icon =  get_field('feature_icon', $term);
                  ?>
                    <li>
                        <img src="<?php echo $feature_icon ?>" alt="suv" />
                        <span><?php echo $term->name ?> </span>
                        
                       
              </li>  
                  <?php

              }     
                      
          }
}

$result = add_role(
    'agent', // Role slug
    'Agent', // Role display name
    array(
       'read' => true, // Allow role to read content
       'level_0' => true // Allow role to create posts
    )
 );








