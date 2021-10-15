<?php
/**
 * The template for displaying any blog posts.
 *
 */

get_header(); // This fxn gets the header.php file and renders it ?>
    <h1 class="title text-center"><?php  single_post_title() ?></h1>
    <div class="container" role="main">
        <?php if ( have_posts() ) : 
        // Do we have any posts/pages in the databse that match our query?
        ?>
            <div class="grid-cols-3 gap-10 grid">
                <?php while ( have_posts() ) : the_post(); 
                // If we have a page to show, start a loop that will display it
                ?>
                    <div class=" mb-8">
                        <?php get_template_part( "/template-parts/post", "single") ?>
                    </div>

                <?php endwhile; // OK, let's stop the page loop once we've displayed it ?>
            </div>
            <?php paginationWordPress()?>
        <?php endif; ?>

    </div><!-- #content .site-content -->
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>