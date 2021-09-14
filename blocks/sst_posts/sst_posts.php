<?php

/**
 * Enqueue frontend and editor JavaScript and CSS
 */
function sst_enqueue_scripts() {

    global $wp_query; 
    // Enqueue block editor Scripts
    wp_register_script( 'sst-loadmore', get_template_directory_uri() . '/blocks/sst_posts/inc/loadMore.js', array(), 1.0, true );

    wp_localize_script( 'sst-loadmore', 'sst_loadmore_params', array(
		'ajaxurl' => admin_url( 'admin-ajax.php' ), // WordPress AJAX
	) );
 
 	wp_enqueue_script( 'sst-loadmore' );
}

add_action( 'enqueue_block_assets', 'sst_enqueue_scripts' );
 

// Add callback function for load more button
function sst_loadmore_callback_handler() {

    $postType = $_POST['postType'];
    $postsLoaded = $_POST['postsLoaded']; // Posts loaded so far
    $postsPerLoad = $_POST['postsPerLoad']; // Posts to load on each request   
    $postsCount = $_POST['postsCount']; // Amount of posts in query
    $postsOrder = $_POST['postsOrder']; // Amount of posts in query

    header("Content-Type: text/html");

    // Return if theres no more posts
    if( $postsLoaded>=$postsCount ) wp_send_json_success("no more posts");
    
    $args = array(
        'post_type' => $postType,
        'posts_per_page' => $postsPerLoad,
        'offset' => $postsLoaded,
        'order' => $postsOrder
    );
    
    $query = new WP_Query( $args );
    
    ob_start();
    if ( $query->have_posts() ) {  while ( $query->have_posts() ) { $query->the_post();
        include __DIR__ . "/template-parts/single-post.php";
    }}
    
    $response = Array(
        'domObject' => ob_get_clean(),
        'postsLoaded' => $postsLoaded + $postsPerLoad
    );

    wp_send_json_success($response);

    die();
}

add_action( 'wp_ajax_sst_loadmore', 'sst_loadmore_callback_handler' );




/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/writing-your-first-block-type/
 */


function sst_posts_init() {
    wp_register_script( 'sst-posts-js', get_stylesheet_directory_uri() . '/blocks/sst_posts/build/index.js', array( 'wp-server-side-render','wp-block-editor', 'wp-blocks', 'wp-element', 'wp-i18n', 'wp-polyfill' ));
    wp_register_style( 'sst-posts-editor-style', get_stylesheet_directory_uri() . '/blocks/sst_posts/build/index.css');
    wp_register_style( 'sst-posts-style', get_stylesheet_directory_uri() . '/blocks/sst_posts/build/style-index.css');
    
    register_block_type( __DIR__,
        array(
            'editor_script'   => 'sst-posts-js',
            'editor_style'    => 'sst-posts-editor-style',
            'style'           => 'sst-posts-style',
            'render_callback' => 'sst_posts_dynamic_render_callback',
        ) 
	);
}
add_action( 'init', 'sst_posts_init' );

function sst_posts_dynamic_render_callback( $attributes, $content ) {
    ob_start();
    include __DIR__ . "/template.php";
    return ob_get_clean();
}