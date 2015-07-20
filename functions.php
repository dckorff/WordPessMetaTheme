<?php

// functions.php - Special file in the theme which WP will load automatically.

// Define a function to get the uri of the styles.css file
function getStyles(){

	wp_enqueue_style('style', get_stylesheet_uri());

}

// Add the styles.css file to the page
add_action('wp_enqueue_scripts', 'getStyles');