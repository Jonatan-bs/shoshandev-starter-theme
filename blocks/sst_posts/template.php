
<?php 
    // $attributes, $content
    $is_backend = defined('REST_REQUEST') && true === REST_REQUEST && 'edit' === filter_input( INPUT_GET, 'context', FILTER_SANITIZE_STRING );    
?>


<div class="wp-block-sst-posts grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 ">

    <?php 
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3
    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) {  while ( $query->have_posts() ) { $query->the_post();
        ob_start(); ?>
            <div class="overflow-hidden" style="<?php echo $is_backend? 'pointer-events: none' : '';?>">
                <a href="<?php the_permalink(); ?>" title="Link to <?php the_title_attribute(); ?>">
                    <div class="aspect-w-16 aspect-h-9">
                        <?php the_post_thumbnail('' , array('class' => ' object-cover object-center')) ?>
                    </div>
                    <p class="text-4xl font-bold pt-5">
                        <?php the_title(); ?>
                    </p>
                </a>
                <small><?php the_date(); ?> by <?php the_author_posts_link(); ?></small>
                <p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
                <div class="entry">
                    <?php the_excerpt(''); ?>
                </div>
            </div>
        <?php echo ob_get_clean();
    }} else { ?>
         <p class="404"><?php __('No posts', 'shoshandevstartertheme') ?></p>
    <?php } ?>
    
</div>



