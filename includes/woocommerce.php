<?php
// Remove default styles
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

// Show product title
function clean_commerce_child_custom_woo_fix() {

    add_filter( 'woocommerce_show_page_title', '__return_true', 1 );
    add_filter( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 6 );
}

add_action( 'init', 'clean_commerce_child_custom_woo_fix' );