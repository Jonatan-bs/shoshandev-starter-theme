<?php
/**
 * Enqueue Styles and Scripts
*/

function enqueue_scripts()  { 
    wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/assets/build/frontend/main.css');
    wp_enqueue_script( 'main.js', get_template_directory_uri() . '/assets/build/frontend/main.js', array(), 1.0, true );
    
    wp_localize_script( 'main.js', 'sst_params', array(
		'ajaxurl' => admin_url( 'admin-ajax.php' ), // WordPress AJAX
	) ); 
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' ); // Register this fxn and allow Wordpress to call it automatcally in the header
