	<?php

require_once get_theme_file_path('/lib/csf/cs-framework.php'); 
require_once get_theme_file_path('/inc/metaboxes/section.php');
require_once get_theme_file_path('/inc/metaboxes/recipe.php');
require_once get_theme_file_path('/inc/metaboxes/page.php');
require_once get_theme_file_path('/inc/metaboxes/section-banner.php');
require_once get_theme_file_path('/inc/metaboxes/section-featured.php');
require_once get_theme_file_path('/inc/metaboxes/section-gallery.php');
require_once get_theme_file_path('/inc/metaboxes/section-chef.php');
require_once get_theme_file_path('/inc/metaboxes/section-services.php');
require_once get_theme_file_path('/inc/metaboxes/taxomomy-featured.php');


define( 'CS_ACTIVE_FRAMEWORK',   false  ); // default true
define( 'CS_ACTIVE_METABOX',     true ); // default true
define( 'CS_ACTIVE_TAXONOMY',    true ); // default true
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
	// wp_enqueue_style('magnific-popup-css',get_template_directory_uri().'/assets/css/magnific-popup.css',null,'1.0');
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
    // wp_enqueue_script("jquery.magnific-popup-options-js",get_theme_file_uri("/assets/js/magnific-popup-options.js"),array('jquery'),'1.3',true);
    wp_enqueue_script("bootstrap-datepicker-js",get_theme_file_uri("/assets/js/bootstrap-datepicker.js"),array('jquery'),'1.0',true);
    wp_enqueue_script("jquery-timepicker-js",get_theme_file_uri("/assets/js/jquery.timepicker.min.js"),array('jquery'),'1.0',true);
    wp_enqueue_script("jquery-stellar-js",get_theme_file_uri("/assets/js/jquery.stellar.min.js"),array('jquery'),'1.0',true);
    wp_enqueue_script("jquery-easing-js",get_theme_file_uri("/assets/js/jquery.easing.1.3.js"),array('jquery'),'1.3',true);
    wp_enqueue_script("aos-js",get_theme_file_uri("/assets/js/aos.js"),array('jquery'),'1.0',true);

    // isotop internel file link
    wp_enqueue_script("isotope-js",get_theme_file_uri("/assets/js/isotope-3.0.6.pkgd.min.js"),array('jquery'),'1.0',true);
    /*isotop externel file link
    wp_enqueue_script("isotope-js",'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js',array('jquery'));*/

    // Google map
    wp_enqueue_script("google-map-js",'//maps.googleapis.com/maps/api/js?key=AIzaSyDPUMolq8BwAX00VnlQQy2ko-D6JEOGIz0',null,'1.0',true);
    
    wp_enqueue_script("magnific-popup-options-js",get_theme_file_uri("/assets/js/magnific-popup-options.js"),array('jquery'),'1.0',true);


    
    wp_enqueue_script("meal-bootstrapcdn-js","//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js",array('jquery'),null,'3.3.0',true);
    
    // wp_enqueue_script("meal-jquery-js","//code.jquery.com/jquery-1.11.1.min.js",null,'1.11.1',true);


    wp_enqueue_script("meal-portfolio-js",get_theme_file_uri("/assets/js/portfolio.js"),array('jquery'),'1.0',true);



    if (is_page_template( "page-templates/landing.php" )) {    
    	wp_enqueue_script("meal-reservation-js",get_theme_file_uri("/assets/js/reservation.js"),array('jquery'),'1.0',true);
    	$ajaxurl = admin_url("admin-ajax.php");
    	wp_localize_script("meal-reservation-js", "mealurl",array("ajaxurl" => $ajaxurl));
    }

    wp_enqueue_script("meal-main-js",get_theme_file_uri("/assets/js/main.js"),array('jquery'),'1.0',true);
}
add_action('wp_enqueue_scripts','meal_assets');


/*Google Api key
==== AIzaSyCpQvmRnDaLqPs9nn3o7p3dPts7FBp5HMA ====*/



function meal_codestar_init() {
	CSFramework_Metabox::instance(array());
	CSFramework_Taxonomy::instance(array());
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




// 2nd time write ajax related code
function meal_process_reservation(){

	if (check_ajax_referer('reservation', 'rn')) {
		$name = sanitize_text_field($_POST['name']);
		$email = sanitize_text_field($_POST['email']);
		$phone = sanitize_text_field($_POST['phone']);
		$persons = sanitize_text_field($_POST['persons']);
		$date = sanitize_text_field($_POST['date']);
		$time = sanitize_text_field($_POST['time']);

		$data = array(
			'name' => $name,
			'email' => $email,
			'phone' => $phone,
			'persons' => $persons,
			'date' => $date,
			'time' => $time,

		);

		$reservation_arguments = array(
			'post_type' => 'reservation',
			'post_author' => 1,
			'post_date' => date('Y-m-d H:i:s'),
			'post_status' => 'publish',
			'post_title' => sprintf('%s - Reservation for %s persons on %s - %s',$name,$persons,$date." : ".$time,$email),
			'meta_input' => $data
		);

		$reservations = new WP_Query(array(
			'post_type' => 'reservation',
			'post_status' => 'publish',
			'meta_query' => array(
				'relation' => 'AND',
				'email_check' => array(
					'key' => 'email',
					'value' => $email					
				),
				'date_check' => array(
					'key' => 'date',
					'value' => $date					
				),
				'time_check' => array(
					'key' => 'time',
					'value' => $time					
				)
			)
		));
		if ($reservations->found_posts>0) {
			echo 'Duplicate';
		}else {
			$wp_error = '';
			$reservation_id = wp_insert_post( $reservation_arguments,$wp_error );



			if (!$wp_error) {
				$_name = explode(" ",$name);
				$order_data = array(
					'first_name' => $_name[0],
					'last_name' => isset($_name[1])?$_name[1] : '',
					'email' => $email,
					'phone' => $phone,
				);
				$order = wc_create_order();
				$order->set_address($order_data);
				$order->add_product(wc_get_product(133),1);
				$order->set_customer_note($reservation_id);
				$order->calculate_totals();

				add_post_meta($reservation_id, 'order_id', $order->get_id());

				echo $order->get_checkout_payment_url();
			}
		}

	}else {
		echo 'Not allowed';
	}

	die();
}
add_action('wp_ajax_reservation','meal_process_reservation');
add_action('wp_ajax_nopriv_reservation','meal_process_reservation');


function meal_checkout_fields($fields){
	// remove biling fields
	unset($fields['billing']['billing_company']);
	unset($fields['billing']['billing_address_1']);
	unset($fields['billing']['billing_address_2']);
	unset($fields['billing']['billing_city']);
	unset($fields['billing']['billing_postcode']);
	unset($fields['billing']['billing_country']);
	unset($fields['billing']['billing_state']);



	// remove Shipping fields
	unset($fields['billing']['shipping_first_name']);
	unset($fields['billing']['shipping_last_name']);
	unset($fields['billing']['shipping_company']);
	unset($fields['billing']['shipping_address_1']);
	unset($fields['billing']['shipping_address_2']);
	unset($fields['billing']['shipping_city']);
	unset($fields['billing']['shipping_postcode']);
	unset($fields['billing']['shipping_country']);
	unset($fields['billing']['shipping_state']);

	// remove order comment fields
	unset($fields['billing']['order_comments']);

	return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'meal_checkout_fields' );

function meal_order_status_processing($order_id){
	$order = wc_get_order($order_id);
	$reservation_id = $order->get_customer_note();
	if ($reservation_id) {
		$reservation = get_post($reservation_id);
		wp_update_post(array(
			'ID' => $reservation_id,
			'post_title' => "[Paid] - ".$reservation->post_title
		));

		add_post_meta($reservation_id,'paid', 1);
	}
}
add_filter( 'woocommerce_order_status_processing','meal_order_status_processing');







