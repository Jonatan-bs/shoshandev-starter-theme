<?php
/**
 * The template for displaying any single post.
 *
 */

get_header(); // This fxn gets the header.php file and renders it ?>
			<?php if ( have_posts() ) : 
			// Do we have any posts in the databse that match our query?
			?>

				<?php while ( have_posts() ) : the_post(); 
				// If we have a post to show, start a loop that will display it
				?>
					<div class="product">
						<!-- <div class="container-sm pt-10">
							<h1 class="text-3xl clean m-0 mb-10 text-center"><?php the_title(); // Display the title of the page ?></h1>
						</div> -->
						<div class="container-sm">
							<?php the_content(); ?>
						</div>
						
						<?php wp_link_pages(); // This will display pagination links, if applicable to the page ?>
					</div>

				<?php endwhile; // OK, let's stop the post loop once we've displayed it ?>

			<?php else : endif;?>

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
