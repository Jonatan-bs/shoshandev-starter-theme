<?php
/**
 * Enqueue Styles and Scripts
*/

function enqueue_scripts()  { 

	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/assets/build/css/main.css');
    // wp_enqueue_script( 'main.js', get_template_directory_uri() . '/assets/build/js/main.js', array(), 1.0, true );
  
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' ); // Register this fxn and allow Wordpress to call it automatcally in the header

/**
 *  Set the maximum allowed width for any content in the theme
*/
if ( ! isset( $content_width ) ) $content_width = 900;

/**
 * Add post thumbnail/featured image support
*/
add_theme_support( 'post-thumbnails' );
register_nav_menus( 
	array(
		'primary'	=>	__( 'Header', 'shoshandevstartertheme'), // Register the Primary menu
	)
);

/**
 * Add logo custom support
*/

function shoshandevstartertheme_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 150,
        'flex-height'          => false,
        'flex-width'           => false,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => false, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'shoshandevstartertheme_custom_logo_setup' );

/**
 * Gutenberg Setup
 */

function gutenberg_setup(){
    add_theme_support("align-wide");
    add_theme_support( 'editor-styles' ); // if you don't add this line, your stylesheet won't be added
	add_editor_style( 'assets/build/css/gutenberg.css' );
}

add_action( 'after_setup_theme', 'gutenberg_setup' );

/**
 * setup TGMPA for requiring plugins to theme
 */

require_once(get_template_directory() . '/includes/tgmpa/tgmpa-configuration.php');
