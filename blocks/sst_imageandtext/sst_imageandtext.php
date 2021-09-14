<?php

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/writing-your-first-block-type/
 */

function sst_imageandtext_init() {
    wp_register_script( 'sst-imageandtext-js', get_template_directory_uri() . '/blocks/sst_imageandtext/build/index.js', array( 'wp-server-side-render','wp-block-editor', 'wp-blocks', 'wp-element', 'wp-i18n', 'wp-polyfill' ));
    wp_register_style( 'sst-imageandtext-editor-style', get_template_directory_uri() . '/blocks/sst_imageandtext/build/index.css');
    wp_register_style( 'sst-imageandtext-style', get_template_directory_uri() . '/blocks/sst_imageandtext/build/style-index.css');
    
    register_block_type( __DIR__,
        array(
            'editor_script'   => 'sst-imageandtext-js',
            'editor_style'    => 'sst-imageandtext-editor-style',
            'style'           => 'sst-imageandtext-style',
            'render_callback' => 'sst_imageandtext_dynamic_render_callback',
        ) 
	);
}
add_action( 'init', 'sst_imageandtext_init' );

function sst_imageandtext_dynamic_render_callback( $attributes, $content ) {
    ob_start();
    include __DIR__ . "/template.php";
    return ob_get_clean();
}