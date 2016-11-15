<?php
// Menu registration
register_nav_menus(
		array(
			'main-menu' => 'Main menu',
			'footer-menu' => 'Footer menu'
		)
	);
/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
*/
add_theme_support( 'html5', array(
	'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
// Enable support for Post Thumbnails
	add_theme_support( 'post-thumbnails' );

// Enable Logo image
	add_theme_support( 'custom-header' );
// Add custom image sizes
	add_image_size( 'boss_photo', 380, 260, true );





// Add styles and scripts
function ba_display_styles_and_scripts() {

	wp_enqueue_style( 'display-style', get_template_directory_uri() . '/css/style.css');

	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-2.2.3.min.js', null, null, true);

	wp_enqueue_script('slick-slider', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), null, true);

	wp_enqueue_script('swipebox', get_template_directory_uri() . '/js/jquery.swipebox.min.js', array('jquery'), null, true);

	wp_enqueue_script('isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), null, true);

	wp_enqueue_script('google-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCD1QhrBGPRyJOOAhFOuO2X3s2UKAgJY_o' , null, null, true);

	wp_enqueue_script('google-map', get_template_directory_uri() . '/js/map.js', array('google-api'), null, true);

	wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery', 'google-api'), null, true);

};
add_action('wp_enqueue_scripts', 'ba_display_styles_and_scripts');

// Enable ACF Options Page
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' => 'Options',
		'menu_title' => 'Options',
		'menu_slug' => 'options',
		'capability' => 'edit_posts',
		'parent_slug' => '',
		'position' => '',
		'icon_url' => 'dashicons-welcome-write-blog'
	));
	acf_add_options_sub_page(array(
		'page_title' => 'Header',
		'menu_title' => 'Header',
		'menu_slug' => 'header',
		'capability' => 'edit_posts',
		'parent_slug' => 'options',
		'position' => false,
		'icon_url' => false
	));
	acf_add_options_sub_page(array(
		'page_title' => 'Footer',
		'menu_title' => 'Footer',
		'menu_slug' => 'footer',
		'capability' => 'edit_posts',
		'parent_slug' => 'options',
		'position' => false,
		'icon_url' => false
	));

}

// Registering Google API key
function my_acf_init() {

	acf_update_setting('google_api_key', 'AIzaSyCD1QhrBGPRyJOOAhFOuO2X3s2UKAgJY_o');
}

add_action('acf/init', 'my_acf_init');
