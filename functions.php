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
 * Add theme support
 */
function shoshandevstartertheme_theme_support() {
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
add_action( 'after_setup_theme', 'shoshandevstartertheme_theme_support' );

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
 * Add Custom block category
 */

function sst_block_categories( $categories ) {
    return array_merge(
        array(
            array(
                'slug' => 'sst', // The slug of our new category
                'title' => __( 'Shoshan Dev', 'shoshandevstartertheme' ), // The name of our new category
            ),
        ),
        $categories
    );
}

add_filter( 'block_categories', 'sst_block_categories', 10, 2 );

/**
 * Add Gutenberg Blocks
 */
require_once(get_template_directory() . '/blocks/mycustomblock/mycustomblock.php');

/**
 * Add Gutenberg Blocks
 */
add_filter( 'render_block', 'wrap_table_block', 10, 2 );
function wrap_table_block( $block_content, $block ) {

    if($block['blockName'] === "core/column") return $block_content;

    $alignClass = $block['attrs']['align'] ? ' align' . $block['attrs']['align'] : '';

    $block_content = '<div class="blockWrapper'. $alignClass .'">' . $block_content . '</div>';
  

    return $block_content;
}

/**
 * Register sidebar
 */
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'frontpage',
        'before_widget' => '<div class="widgetizedArea">',
        'after_widget' => '</div>',
    )
);
/**
 * Add classes on nav links
 */
function sst_menu_add_class( $attrs, $item, $args ) {
    if(isset($args->add_anchor_class)) {
        $attrs['class'] = $args->add_anchor_class;
    }
    return $attrs;
}
add_filter( 'nav_menu_link_attributes', 'sst_menu_add_class', 10, 3 );