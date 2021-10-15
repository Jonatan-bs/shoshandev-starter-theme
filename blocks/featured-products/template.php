<?php    
    $posts_amount = 3;
    $post_type = 'product';
    $order = 'DESC';
    $is_backend = defined('REST_REQUEST') && true === REST_REQUEST && 'edit' === filter_input( INPUT_GET, 'context', FILTER_SANITIZE_STRING );
?>

<?php 
    $args = array(
        'post_type' => $post_type,
        'posts_per_page' => $posts_amount,
        'order' => $order
    );
    $query = new WP_Query( $args );
?>

<div class="wp-block-sst-featured-products" style="<?php echo $is_backend? 'pointer-events: none' : '';?>" >
    
    <?php
        if ( $query->have_posts() ) {  while ( $query->have_posts() ) { $query->the_post();
            // include "./woocommerce/content-product.php";
            include(locate_template('/woocommerce/content-product.php'));
            // wc_get_template_part( 'content', 'product' );
        }} else { 
    ?>
    <p class="404"><?php __('No posts', 'shoshandevstartertheme') ?></p>
    <?php } ?>
    
    
</div>



