<?php 
  /**
 * 
 * Plugin Name: Meal Companior Plugin
 * Plugin URI:  
 * Description: Companior Plugin for Meal Theme 
 * Version:     1.0
 * Author:      
 * Author URI:  
 * License:     GPLv2 or later
 * License URI: 
 * Text Domain: meal-companion
 * Domain Path: /languages/
 */


function mealc_load_text_domain() {
	load_plugin_textdomain('meal-companion',false,dirname(__FILE__).'/languages');
}

add_action('plugins_loaded', 'mealc_load_text_domain');







// sections post type

function mealc_register_my_cpts_section() {

	/**
	 * Post Type: Section.
	 */

	$labels = array(
		"name" => __( "Section", "meal-companion" ),
		"singular_name" => __( "Sections", "meal-companion" ),
	);

	$args = array(
		"label" => __( "Section", "meal-companion" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => false,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "section", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 5,
		"menu_icon" => "dashicons-media-document",
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "section", $args );


	/**
	 * Post Type: Recipe.
	 */
	$labels = array(
		"name" => __( "Recipe", "meal-companion" ),
		"singular_name" => __( "Recipes", "meal-companion" ),
		"featured_image" => __( "Recipe Photo", "meal-companion" ),
	);

	$args = array(
		"label" => __( "Recipe", "meal-companion" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "recipe", "with_front" => false ),
		"query_var" => true,
		"menu_position" => 5,
		"menu_icon" => "dashicons-carrot",
		"supports" => array( "title", "editor", "thumbnail", "excerpt" ),
		"taxonomies" => array('category'),
	);

	register_post_type( "recipe", $args );



	/**
	 * Post Type: Reservation.
	 */

	$labels = array(
		"name" => __( "Reservation", "meal-companion" ),
		"singular_name" => __( "Reservations", "meal-companion" ),
	);

	$args = array(
		"label" => __( "Reservation", "meal-companion" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => false,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "reservation", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 5,
		"menu_icon" => "dashicons-media-document",
		"supports" => array( "title" ),
	);

	register_post_type( "reservation", $args );
}

add_action( 'init', 'mealc_register_my_cpts_section' );


function mealc_transient_demo(){
	// set_transient('hello',34);
	// set_transient('world',16,20);
}
add_action('init','mealc_transient_demo');





function meal_change_nav_menu($menus) {
	$string_to_replace = home_url("/")."section/";
	if (is_front_page()) {
		foreach ($menus as $menu) {
			$new_url = str_replace($string_to_replace,"#",$menu->url );
			if ($new_url != $menu->url) {
				$new_url = rtrim($new_url,"/");
			}

			$menu->url = $new_url;
		}

		
	}

	return $menus;
}
add_filter('wp_nav_menu_objects','meal_change_nav_menu');