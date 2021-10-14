<?php

/**
 * Gutenberg Setup
 */

function gutenberg_setup(){
    add_theme_support("align-wide");
    add_theme_support( 'editor-styles' );
	add_editor_style( get_template_directory_uri() . '/assets/build/gutenberg/main.css' );
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

add_filter( 'block_categories_all', 'sst_block_categories', 10, 2 );

/**
 * Add Gutenberg Blocks
 */
require_once(get_template_directory() . '/blocks/index.php');

/**
 * Add div wrapper to Gutenberg Blocks 
 * For easier width styling
 */

function sst_wrap_alignment( $block_content, $block ) {
    
	if ( isset( $block['attrs']['align'] ) && in_array( $block['attrs']['align'], array( 'wide', 'full' ) ) ) {
		$block_content = sprintf(
			'<div class="%1$s">%2$s</div>',
			'align-wrap align-wrap-' . esc_attr( $block['attrs']['align'] ),
			$block_content
		);
	} elseif (true) {
        
    };
	return $block_content;
}

add_filter( 'render_block', 'sst_wrap_alignment', 10, 2 );

/**
 * Add fonts to editor
 */
function sst_block_styles() {
    wp_enqueue_style( 'sst-editor-font', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap');
}
add_action( 'enqueue_block_editor_assets', 'sst_block_styles' );