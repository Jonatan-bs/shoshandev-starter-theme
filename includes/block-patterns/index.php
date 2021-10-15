<?php
include_once( get_stylesheet_directory() . "/includes/block-patterns/frontpage_hero.php");
include_once( get_stylesheet_directory() . "/includes/block-patterns/featured-products.php");
include_once( get_stylesheet_directory() . "/includes/block-patterns/highligted-section.php");
include_once( get_stylesheet_directory() . "/includes/block-patterns/featured-categories.php");

register_block_pattern_category(
    'sst-frontpage',
    array( 'label' => __( 'sst-frontpage', 'starter-theme' ) )
);