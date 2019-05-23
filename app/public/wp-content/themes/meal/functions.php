<?php

require_once get_theme_file_path('/lib/csf/cs-framework.php'); 
require_once get_theme_file_path('/inc/metaboxes/section.php');
require_once get_theme_file_path('/inc/metaboxes/page.php');
require_once get_theme_file_path('/inc/metaboxes/section-banner.php');
require_once get_theme_file_path('/inc/metaboxes/section-featured.php');
require_once get_theme_file_path('/inc/metaboxes/section-gallery.php');
require_once get_theme_file_path('/inc/metaboxes/section-chef.php');


define( 'CS_ACTIVE_FRAMEWORK',   false  ); // default true
define( 'CS_ACTIVE_METABOX',     true ); // default true
define( 'CS_ACTIVE_TAXONOMY',    false ); // default true
define( 'CS_ACTIVE_SHORTCODE',   false ); // default true
define( 'CS_ACTIVE_CUSTOMIZE',   false ); // default true 


function meal_theme_setup(){
	load_theme_textdomain( 'meal', get_template_directory().'/languages' );
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('automatic-feed-links');

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	/**
	 * Add support for core custom logo.
	 *
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 190,
			'width'       => 190,
			'flex-width'  => false,
			'flex-height' => false,
		)
	);
}

add_action( 'after_setup_theme','meal_theme_setup' );



// Assets
function meal_assets(){
	//CSS assets
	wp_enqueue_style('fonts-css','//fonts.googleapis.com/css?family=Playfair+Display:300,400,700,800|Open+Sans:300,400,700',null,'1.0');
	wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/assets/css/bootstrap.css',null,'1.0');
	wp_enqueue_style('animate-css',get_template_directory_uri().'/assets/css/animate.css',null,'1.0');
	wp_enqueue_style('owl.carousel-css',get_template_directory_uri().'/assets/css/owl.carousel.min.css',null,'1.0');
	wp_enqueue_style('magnific-popup-css',get_template_directory_uri().'/assets/css/magnific-popup.css',null,'1.0');
	wp_enqueue_style('aos-css',get_template_directory_uri().'/assets/css/aos.css',null,'1.0');
	wp_enqueue_style('bootstrap-datepicker-css',get_template_directory_uri().'/assets/css/bootstrap-datepicker.css',null,'1.0');
	wp_enqueue_style('jquery.timepicker-css',get_template_directory_uri().'/assets/css/jquery.timepicker.css',null,'1.0');
	wp_enqueue_style('ionicons-css',get_theme_file_uri().'/assets/fonts/ionicons/css/ionicons.min.css',null,'1.0');
	wp_enqueue_style('fontawesome-css',get_theme_file_uri().'/assets/fonts/fontawesome/css/font-awesome.min.css',null,'1.0');
	wp_enqueue_style('flaticon-css',get_theme_file_uri().'/assets/fonts/flaticon/font/flaticon.css',null,'1.0');

	// wp_enqueue_script("meal-bootstrapcdn-css","//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css",null,'1.11.1');

	wp_enqueue_style('meal-style-css',get_template_directory_uri().'/assets/css/style.css',null,'1.0');
	wp_enqueue_style('meal-portfioio-css',get_template_directory_uri().'/assets/css/portfioio.css',null,'1.0');
	wp_enqueue_style('meal-style',get_stylesheet_uri());



	//JS enqueue assets
    wp_enqueue_script("popper-js",get_theme_file_uri("/assets/js/popper.min.js"),array('jquery'),'1.0',true);
    wp_enqueue_script("bootstrap-js",get_theme_file_uri("/assets/js/bootstrap.min.js"),array('jquery'),'1.0',true);
    wp_enqueue_script("owl.carousel-js",get_theme_file_uri("/assets/js/owl.carousel.min.js"),array('jquery'),'1.0',true);
    wp_enqueue_script("jquery.waypoints-js",get_theme_file_uri("/assets/js/jquery.waypoints.min.js"),array('jquery'),'1.0',true);

    wp_enqueue_script("jquery.magnific-popup-js",get_theme_file_uri("/assets/js/jquery.magnific-popup.min.js"),array('jquery'),'1.3',true);
    wp_enqueue_script("bootstrap-datepicker-js",get_theme_file_uri("/assets/js/bootstrap-datepicker.js"),array('jquery'),'1.0',true);
    wp_enqueue_script("jquery-timepicker-js",get_theme_file_uri("/assets/js/jquery.timepicker.min.js"),array('jquery'),'1.0',true);
    wp_enqueue_script("jquery-stellar-js",get_theme_file_uri("/assets/js/jquery.stellar.min.js"),array('jquery'),array('jquery'),'1.0',true);
    wp_enqueue_script("jquery-easing-js",get_theme_file_uri("/assets/js/jquery.easing.1.3.js"),array('jquery'),'1.3',true);
    wp_enqueue_script("aos-js",get_theme_file_uri("/assets/js/aos.js"),array('jquery'),array('jquery'),'1.0',true);

    wp_enqueue_script("isotope-js",'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js');
    // Google map
    wp_enqueue_script("google-map-js",'//maps.googleapis.com/maps/api/js?key=AIzaSyDPUMolq8BwAX00VnlQQy2ko-D6JEOGIz0',null,'1.0',true);
    
    wp_enqueue_script("magnific-popup-options-js",get_theme_file_uri("/assets/js/magnific-popup-options.js"),array('jquery'),'1.0',true);


    
    /*wp_enqueue_script("meal-bootstrapcdn-js","//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js",array('jquery','jquery-1.11.1'),null,'1.11.1',true);
    wp_enqueue_script("meal-jquery-js","//code.jquery.com/jquery-1.11.1.min.js",null,'1.11.1',true);*/


    wp_enqueue_script("meal-portfolio-js",get_theme_file_uri("/assets/js/portfolio.js"),array('jquery'),'1.0',true);
    wp_enqueue_script("meal-main-js",get_theme_file_uri("/assets/js/main.js"),array('jquery'),'1.0',true);
}
add_action('wp_enqueue_scripts','meal_assets');


/*Google Api key
==== AIzaSyCpQvmRnDaLqPs9nn3o7p3dPts7FBp5HMA ====*/



function meal_codestar_init() {
	CSFramework_Metabox::instance(array());
}
add_action('init', 'meal_codestar_init');


function get_recipe_category($recipe_id){
	$terms = wp_get_post_terms( $recipe_id,'category' );
	if ($terms) {
		$first_term = array_shift($terms);
		return $first_term->name;
	}
	return 'Food';
}

