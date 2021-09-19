
<?php 

    $is_backend = defined('REST_REQUEST') && true === REST_REQUEST && 'edit' === filter_input( INPUT_GET, 'context', FILTER_SANITIZE_STRING );    
    $posts_amount = $attributes['postsAmount'];
    $post_type = $attributes['postType'];
    $cols = $attributes['cols'];;
    $posts_per_load = $attributes['postsPerLoad'];
    $order = $attributes['order'];
    $loadmore = $attributes['loadmore'];     
?>

<?php 
    $args = array(
        'post_type' => $post_type,
        'posts_per_page' => $posts_amount,
        'order' => $order
    );
    $query = new WP_Query( $args );
?>

<div class="wp-block-sst-posts" >

    <div class="loadmoretarget grid <?php echo 'cols-'. $cols?>">
        <?php
            if ( $query->have_posts() ) {  while ( $query->have_posts() ) { $query->the_post();
                include __DIR__ . "/template-parts/single-post.php";
            }} else { 
        ?>
        <p class="404"><?php __('No posts', 'shoshandevstartertheme') ?></p>
        <?php } ?>
    </div>
    
    <?php 
        if (  $query->max_num_pages > 1 && $loadmore){
        ?>
            <div class="sst_loadmore_wrapper">
                <div                 
                    class="sst_loadmore_button sst_button m-auto"
                    data-post-type = "<?php echo $post_type; ?>"
                    data-posts-loaded="<?php echo $posts_amount; ?>" 
                    data-posts-per-load="<?php echo $posts_per_load; ?>" 
                    data-posts-order="<?php echo $order; ?>" 
                    data-posts-count="<?php echo $query->found_posts; ?>" 
                >
                    More posts
                </div>
            </div>
        <?php
        }
    ?>
</div>



