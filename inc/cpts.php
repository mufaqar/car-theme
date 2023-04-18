<?php


function cptui_register_my_cpts_faq() {

	/**
	 * Post Type: faqs.
	 */

	$labels = [
		"name" => esc_html__( "FAQs", "twentytwentytwo" ),
		"singular_name" => esc_html__( "FAQ", "twentytwentytwo" ),
	];

	$args = [
		"label" => esc_html__( "faqs", "twentytwentytwo" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"can_export" => false,
		"rewrite" => [ "slug" => "faq", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "faq", $args );
}

add_action( 'init', 'cptui_register_my_cpts_faq' );







function cptui_register_my_cpts_vehicle() {

	/**
	 * Post Type: Vehicles.
	 */

	$labels = [
		"name" => esc_html__( "Vehicles", "twentytwentytwo" ),
		"singular_name" => esc_html__( "Vehicle", "twentytwentytwo" ),
	];

	$args = [
		"label" => esc_html__( "Vehicles", "twentytwentytwo" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"can_export" => false,
		"rewrite" => [ "slug" => "vehicle", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "vehicle", $args );
}

add_action( 'init', 'cptui_register_my_cpts_vehicle' );



function cptui_register_my_taxes_vehicle_type() {

	/**
	 * Taxonomy: Types.
	 */

	$labels = [
		"name" => esc_html__( "Types", "twentynineteen" ),
		"singular_name" => esc_html__( "Type", "twentynineteen" ),
	];

	
	$args = [
		"label" => esc_html__( "Types", "twentynineteen" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'vehicle_type', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "vehicle_type",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "vehicle_type", [ "vehicle" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_vehicle_type' );



function cptui_register_my_taxes_brand() {

	/**
	 * Taxonomy: brand.
	 */

	$labels = [
		"name" => esc_html__( "Brands", "twentytwentytwo" ),
		"singular_name" => esc_html__( "Brand", "twentytwentytwo" ),
	];

	
	$args = [
		"label" => esc_html__( "brand", "twentytwentytwo" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'brand', 'with_front' => true,  'hierarchical' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "brand",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "brand", [ "vehicle" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_brand' );


function cptui_register_my_taxes_body_type() {

	/**
	 * Taxonomy: Body Types.
	 */

	$labels = [
		"name" => esc_html__( "Body Types", "twentytwentytwo" ),
		"singular_name" => esc_html__( "Body Type", "twentytwentytwo" ),
	];

	
	$args = [
		"label" => esc_html__( "Body Types", "twentytwentytwo" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'body_type', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "body_type",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "body_type", [ "vehicle" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_body_type' );



function cptui_register_my_taxes_features() {

	/**
	 * Taxonomy: Features.
	 */

	$labels = [
		"name" => esc_html__( "Features", "twentytwentytwo" ),
		"singular_name" => esc_html__( "Feature", "twentytwentytwo" ),
	];

	
	$args = [
		"label" => esc_html__( "Features", "twentytwentytwo" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'features', 'with_front' => true,  'hierarchical' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "features",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "features", [ "vehicle" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_features' );


function cptui_register_my_taxes_color() {

	/**
	 * Taxonomy: Color.
	 */

	$labels = [
		"name" => esc_html__( "Color", "twentynineteen" ),
		"singular_name" => esc_html__( "Color", "twentynineteen" ),
	];

	
	$args = [
		"label" => esc_html__( "Color", "twentynineteen" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'color', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "color",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "color", [ "vehicle" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_color' );

function cptui_register_my_taxes_engine_type() {

	/**
	 * Taxonomy:              Engine Type.
	 */

	$labels = [
		"name" => esc_html__( "             Engine Type", "twentynineteen" ),
		"singular_name" => esc_html__( "Engine Type", "twentynineteen" ),
	];

	
	$args = [
		"label" => esc_html__( "             Engine Type", "twentynineteen" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'engine_type', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "engine_type",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "engine_type", [ "vehicle" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_engine_type' );

function cptui_register_my_taxes_transmission() {

	/**
	 * Taxonomy: Transmission.
	 */

	$labels = [
		"name" => esc_html__( "Transmission", "twentynineteen" ),
		"singular_name" => esc_html__( "Transmission", "twentynineteen" ),
	];

	
	$args = [
		"label" => esc_html__( "Transmission", "twentynineteen" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'transmission', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "transmission",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "transmission", [ "vehicle" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_transmission' );



function cptui_register_my_cpts_orders() {

	/**
	 * Post Type: Orders.
	 */

	$labels = [
		"name" => __( "Orders", "twentytwentytwo" ),
		"singular_name" => __( "Order", "twentytwentytwo" ),
	];

	$args = [
		"label" => __( "Orders", "twentytwentytwo" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "orders", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor" ],
		"show_in_graphql" => false,
	];

	register_post_type( "orders", $args );
}

add_action( 'init', 'cptui_register_my_cpts_orders' );
