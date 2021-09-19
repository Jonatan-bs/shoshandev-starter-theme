<?php /* Template Name: All Posts */ ?>

<?php
get_header(); // This fxn gets the header.php file and renders it ?>
	<div id="primary">
		<div id="content" role="main">
            
			<?php if ( have_posts() ) : 
			// Do we have any posts/pages in the databse that match our query?
			?>

				<?php while ( have_posts() ) : the_post(); 
				// If we have a page to show, start a loop that will display it
				?>

					<article class="post">
                    <div class="gutenberg-content">
                        <?php the_content(); ?>
                    </div>						
                    <?php wp_link_pages(); // This will display pagination links, if applicable to the page ?>
					</article>

				<?php endwhile; // OK, let's stop the page loop once we've displayed it ?>

			<?php endif; // OK, I think that takes care of both scenarios (having a page or not having a page to show) ?>

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>