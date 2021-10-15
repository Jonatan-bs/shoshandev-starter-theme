
<?php 
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'order' => 'DESC'
    );
    $query = new WP_Query( $args );
?>

<div class="sst_posts_grid">

    <div class="loadmoretarget grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
        <?php
            if ( $query->have_posts() ) {  while ( $query->have_posts() ) { $query->the_post();
                get_template_part("template-parts/partial", "post-card");
            }} else { 
        ?>
        <p class="404"><?php __('No posts', 'shoshandevstartertheme') ?></p>
        <?php } ?>
    </div>
    
    <?php 
        if (  $query->max_num_pages > 1){
        ?>
            <div class="sst_loadmore_wrapper flex justify-center mt-24">
                <div                 
                    class="sst_loadmore_button sst_button m-auto"
                    data-post-type = "post"
                    data-posts-loaded="6" 
                    data-posts-per-load="6" 
                    data-posts-order="DESC" 
                    data-posts-count="<?php echo $query->found_posts; ?>" 
                >
                    More posts
                </div>
            </div>
        <?php
        }
    ?>
</div>