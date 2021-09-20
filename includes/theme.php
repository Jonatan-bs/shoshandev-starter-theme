
<?php
/**
 * Add theme support
 */
function sst_theme_support() {
    add_theme_support( 'title-tag' ); 

    /**
     * Add post thumbnail/featured image support
    */
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( 
        array(
            'primary'	=>	__( 'Header', 'shoshandevstartertheme'), // Register the Primary menu
        )
    );
}
add_action( 'after_setup_theme', 'sst_theme_support' );

/**
 * Add logo custom support
*/

function sst_custom_logo_setup() {
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

add_action( 'after_setup_theme', 'sst_custom_logo_setup' );


/**
 *  Set the maximum allowed width for any content in the theme
*/
if ( ! isset( $content_width ) ) $content_width = 900;