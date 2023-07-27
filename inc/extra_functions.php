<?php
include get_template_directory() . '/inc/cpts.php';
include get_template_directory() . '/inc/cf.php';
include get_template_directory() . '/inc/wp-bootstrap-navlist-walker.php';
include get_template_directory() . '/inc/ajax_request.php';
include get_template_directory() . '/inc/emails.php';

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

function add_tag_manager_role() {
    if (get_role('vehicle_agent') === null) {
        $role_name = 'vehicle_agent';
        $display_name = 'Vehicle Agent';
        $capabilities = array(
            'read' => true,      // You can adjust other capabilities as needed
            'manage_categories' => true, // Capability to manage taxonomies (categories)
            'edit_categories' => true,   // Capability to edit taxonomies (categories)
            'delete_categories' => true, // Capability to delete taxonomies (categories)
            'assign_categories' => true, // Capability to assign taxonomies (categories) to posts
            'manage_post_tags' => true,  // Capability to manage tags (terms)
            'edit_post_tags' => true,    // Capability to edit tags (terms)
            'delete_post_tags' => true,  // Capability to delete tags (terms)
            'assign_post_tags' => true,  // Capability to assign tags (terms) to posts
   
        );
        add_role($role_name, $display_name, $capabilities);
    }
}

// Hook the function to theme activation or plugin activation
add_action('after_setup_theme', 'add_tag_manager_role');





 

add_filter( 'manage_orders_posts_columns', 'set_custom_edit_orders_columns' );    
add_action( 'manage_orders_posts_custom_column' , 'custom_orders_column', 10, 2 );
function set_custom_edit_orders_columns($columns) {    
    unset( $columns['author'] );   
    $columns['order_type'] = 'Order Type';
    $columns['order_day'] = 'Order Day';
    $columns['order_week'] = 'Order Week';
    $columns['user_type'] = 'User Type';
    $columns['order_uid'] = 'Order By';
    $columns['order_total'] = 'Order Price';
    $columns['order_status'] = 'Payment Status';  
    return $columns;    
}

function custom_orders_column( $column, $post_id ) {   
    global $post;
    switch ( $column ) {
        case 'order_status' :
            if(get_field( "order_status", $post_id )) {
                echo get_field( "order_status", $post_id );
            } else {
                echo 0;
            }
        break;

        case 'order_type' :
            if(get_field( "order_type", $post_id )) {
                echo get_field( "order_type", $post_id ); 
              


            } else {
                echo 0;
            }
        break;
        
        case 'order_day' :
            if(get_field( "order_day", $post_id )) {
                echo get_field( "order_day", $post_id ); 
              



            } else {
                echo 0;
            }
        break;

        case 'order_week' :
            if(get_field( "order_week", $post_id )) {
                echo get_field( "order_week", $post_id ); 
              



            } else {
                echo 0;
            }
        break;
        case 'user_type' :
          if(get_field( "user_type", $post_id )) {            
             echo   get_field( "user_type", $post_id );
             
          } else {
              echo 0;
          }
      break; 
      break;  
        case 'order_total' :
          if(get_field( "order_total", $post_id )) {
              echo " NOK " .get_field( "order_total", $post_id );
          } else {
              echo 0;
          }
      break; 
      break;  
        case 'order_uid' :
          if(get_field( "order_uid", $post_id )) {           
              $uid =  get_field( "order_uid", $post_id );
              $the_user = get_user_by( 'id', $uid ); // 54 is a user ID
              echo $the_user->user_email;
          } else {
              echo 0;
          }
      break;    
    }   
}

function my_column_register_sortable( $columns ) {
     $columns['order_status'] = 'order_status';
    $columns['order_type'] = 'order_type';
    return $columns;
}

add_filter("manage_edit-orders_sortable_columns", "my_column_register_sortable" );








