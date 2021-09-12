<?php

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/writing-your-first-block-type/
 */

function sst_button_init() {
    wp_register_script( 'sst-button-js', get_template_directory_uri() . '/blocks/sst_button/build/index.js', array( 'wp-server-side-render','wp-block-editor', 'wp-blocks', 'wp-element', 'wp-i18n', 'wp-polyfill' ));
    wp_register_style( 'sst-button-editor-style', get_template_directory_uri() . '/blocks/sst_button/build/index.css');
    wp_register_style( 'sst-button-style', get_template_directory_uri() . '/blocks/sst_button/build/style-index.css');
    
    register_block_type( __DIR__,
        array(
            'editor_script'   => 'sst-button-js',
            'editor_style'    => 'sst-button-editor-style',
            'style'           => 'sst-button-style',
            'render_callback' => 'sst_button_dynamic_render_callback',
        ) 
	);
}
add_action( 'init', 'sst_button_init' );

function sst_button_dynamic_render_callback( $attributes, $content ) {
    ob_start();
    include __DIR__ . "/template.php";
    return ob_get_clean();
}