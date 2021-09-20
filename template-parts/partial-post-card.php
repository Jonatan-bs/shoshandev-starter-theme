<div class="post-card">
    <a href="<?php the_permalink(); ?>" title="Link to <?php the_title_attribute(); ?>">
        
        <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('medium', ['class' => 'thumbnail']);
        } else { ?>
            <!-- <img src="" alt="<?php the_title(); ?>" class="thumbnail"/> -->
            <div class="thumbnail"></div>
        <?php } ?>

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