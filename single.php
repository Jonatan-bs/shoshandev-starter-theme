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
					<article class="post">
						<div class="container-sm pt-10">
							<p class="w-full text-center text-grey-3 text-sm mb-2"><?php echo get_the_date();?></p>
							<h1 class="title clean m-0 mb-10 text-center"><?php the_title(); // Display the title of the page ?></h1>
						</div>
						<?php if(has_post_thumbnail()){ ?>
							<div class="container">
								<div class="aspect-w-16 aspect-h-5 mt-8 mb-10 bg-grey">
									<?php the_post_thumbnail('' , array('class' => ' object-cover object-center')) ?>
								</div>
							</div>
						<?php } ?>
						<?php get_template_part( "template-parts/content", "page") ?>
						<?php wp_link_pages(); // This will display pagination links, if applicable to the page ?>
					</article>

				<?php endwhile; // OK, let's stop the post loop once we've displayed it ?>
				
				<?php
					// If comments are open or we have at least one comment, load up the default comment template provided by Wordpress
					if ( comments_open()){ ?>
						<div class="comments container-sm mt-20">
							<div class="p-10 bg-grey">
								<?php comments_template(); ?>
							</div>
						</div>
					<?php }
				?>


			<?php else : endif;?>

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
