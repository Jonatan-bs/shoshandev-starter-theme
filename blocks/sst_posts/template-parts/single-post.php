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