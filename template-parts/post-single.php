<article class="post">
    <a href="<?php the_permalink(); ?>" title="Link to <?php the_title_attribute(); ?>">
        <div class="aspect-w-16 aspect-h-11 mb-2 bg-grey">
            <?php the_post_thumbnail('' , array('class' => ' object-cover object-center')) ?>
        </div>
        <p class="w-full text-center text-grey-3 text-sm mb-2"><?php echo get_the_date();?></p>

        <h2 class="text-lg font-normal my-0 text-center">
            <?php the_title(); ?>
        </h2>
    </a>
</article>
