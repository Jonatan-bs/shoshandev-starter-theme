<?php
/**
 * The template for displaying any blog posts.
 *
 */

get_header(); // This fxn gets the header.php file and renders it ?>
    <h1 class="title text-center">Søge resultater</h1>
    <div class="container-sm">
        <?php get_search_form(); ?>
    </div>
    <?php if ( have_posts() ) : 
        // Do we have any posts/pages in the databse that match our query?
        ?>
            <div class="container mt-20" role="main">
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
            </div><!-- #content .site-content -->
        <?php else: ?>
            <div class="container-sm">
                <p class="404 text-center mt-20"><?php _e('No posts', 'shoshandevstartertheme'); ?></p>
            </div>
        <?php endif; ?>

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>