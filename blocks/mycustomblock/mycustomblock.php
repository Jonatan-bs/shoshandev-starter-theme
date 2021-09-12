<?php
/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/writing-your-first-block-type/
 */

function sst_mycustomblock_init() {
    wp_register_script( 'sst-mycustomblock-js', get_template_directory_uri() . '/blocks/mycustomblock/build/index.js', array( 'wp-block-editor', 'wp-blocks', 'wp-element', 'wp-i18n', 'wp-polyfill' ));
    wp_register_style( 'sst-mycustomblock-editor-style', get_template_directory_uri() . '/blocks/mycustomblock/build/index.css');
    wp_register_style( 'sst-mycustomblock-style', get_template_directory_uri() . '/blocks/mycustomblock/build/style-index.css');
    
    register_block_type( __DIR__,
        array(
            'editor_script'   => 'sst-mycustomblock-js',
            'editor_style'    => 'sst-mycustomblock-editor-style',
            'style'           => 'sst-mycustomblock-style',
            'render_callback' => 'sst_mycustomblock_dynamic_render_callback',
        ) 
	);
}
add_action( 'init', 'sst_mycustomblock_init' );

function sst_mycustomblock_dynamic_render_callback( $attributes, $content, $aaa ) {
    
    return sprintf(
        <<<HTML
            <p class="wp-block-sst-mycustomblock %s"> Heyoooooo </p>
        HTML    
    , $alignClass[$attributes['align']]
    );
}