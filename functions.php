<?php
/**
 * Enqueue Styles and Scripts
*/
include_once(get_stylesheet_directory() . "/includes/styles-and-scripts.php");

/**
 * Theme Setup
 */
include_once(get_stylesheet_directory() . "/includes/theme.php");

/**
 * Gutenberg Setup
 */
include_once(get_stylesheet_directory() . "/includes/gutenberg.php");

/**
 * Add classes on nav links
 */
include_once(get_stylesheet_directory() . "/includes/navigation.php");

/**
 * excerpt length and [...]
 */
include_once( get_stylesheet_directory() . "/includes/excerpt.php");

// Add callback function for load more button
include_once( get_stylesheet_directory() . "/includes/ajax/load-more-posts.php");

/**
 * Allow svg uploads
 */
include_once( get_stylesheet_directory() . "/includes/customizer.php");

/**
 * Add block templates
 */
include_once( get_stylesheet_directory() . "/includes/block-patterns/index.php");
/**
 * Woocommerce
 */
include_once( get_stylesheet_directory() . "/includes/woocommerce.php");


