<?php

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/writing-your-first-block-type/
 */

function sst_featured_products_init() {
    wp_register_script( 'sst-featured-products-js', get_template_directory_uri() . '/blocks/featured-products/build/index.js', array( 'wp-server-side-render','wp-block-editor', 'wp-blocks', 'wp-element', 'wp-i18n', 'wp-polyfill' ));
    
    register_block_type( __DIR__,
        array(
            'editor_script'   => 'sst-featured-products-js',
            'render_callback' => 'sst_featured_products_dynamic_render_callback',
        ) 
	);
}
add_action( 'init', 'sst_featured_products_init' );

function sst_featured_products_dynamic_render_callback( $attributes, $content ) {
    ob_start();
    include __DIR__ . "/template.php";
    return ob_get_clean();
}