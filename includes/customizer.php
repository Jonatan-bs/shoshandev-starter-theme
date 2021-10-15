<?php
function numag_remove_sections( $wp_customize ) {
    $wp_customize->remove_control('custom_logo');

	// $wp_customize->remove_section('header_image');
	// $wp_customize->remove_panel('nav_menus');
	// $wp_customize->remove_panel('widgets');
	// $wp_customize->remove_section('custom_css');	
	// $wp_customize->remove_section('colors');
	// $wp_customize->remove_section('background_image');
	// $wp_customize->remove_section('static_front_page');	 
	// $wp_customize->remove_section('title_tagline');	
}
add_action( 'customize_register', 'numag_remove_sections');