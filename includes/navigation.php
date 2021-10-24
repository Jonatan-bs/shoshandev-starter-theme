<?php
function sst_add_navs() {
    register_nav_menus( 
        array(
            'primary'	=>	__( 'Header left', 'shoshandevstartertheme'), // Register the Primary menu
            'primary-mobile'	=>	__( 'Mobile', 'shoshandevstartertheme'), // Register the Primary menu
            'secondary'	=>	__( 'Header right', 'shoshandevstartertheme'), // Register the Primary menu
            'footer-quick-links'	=>	__( 'Footer - Quick Links', 'shoshandevstartertheme'), // Register the Primary menu
            'footer-about'	=>	__( 'Footer - About', 'shoshandevstartertheme'), // Register the Primary menu
        )
    );
}
add_action( 'after_setup_theme', 'sst_add_navs' );

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