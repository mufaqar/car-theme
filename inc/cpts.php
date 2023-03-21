<?php
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
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "vehicle", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "vehicle", $args );
}

add_action( 'init', 'cptui_register_my_cpts_vehicle' );


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
		"hierarchical" => false,
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

function cptui_register_my_taxes_brand() {

	/**
	 * Taxonomy: Brands.
	 */

	$labels = [
		"name" => esc_html__( "Brands", "twentytwentytwo" ),
		"singular_name" => esc_html__( "Brand", "twentytwentytwo" ),
	];

	
	$args = [
		"label" => esc_html__( "Brands", "twentytwentytwo" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
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
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "brand", [ "vehicle" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_brand' );
