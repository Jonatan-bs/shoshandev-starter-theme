<?php
// Remove default styles
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

// Show product title
function sst_show_single_product_title() {

    add_filter( 'woocommerce_show_page_title', '__return_true', 1 );
    add_filter( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 6 );
}

add_action( 'init', 'sst_show_single_product_title' );


