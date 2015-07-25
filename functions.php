<?php

// functions.php - Special file in the theme which WP will load automatically.

// Define a function to get the uri of the styles.css file
function getStyles(){

	wp_enqueue_style('style', get_stylesheet_uri());

}

// Add the styles.css file to the page
add_action('wp_enqueue_scripts', 'getStyles');


// Relates the theme_location "header" and "footer" with friendly names "Header Menu" and "Footer Menu" as nav menus
// These theme_locations/navigation menus are related to menus from Admin -> Menus -> Manage Locations Tab
register_nav_menus( array( 
	'header' => __('Header Menu'),
	'footer' => __('Footer Menu')
	));

