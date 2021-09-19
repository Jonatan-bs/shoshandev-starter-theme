<?php
/**
 * The template for displaying any single post.
 *
 */

get_header(); // This fxn gets the header.php file and renders it ?>
	<div class="container-sm">
		<div id="content" role="main" class="span8 offset2">

			<?php if ( have_posts() ) : 
			// Do we have any posts in the databse that match our query?
			?>

				<?php while ( have_posts() ) : the_post(); 
				// If we have a post to show, start a loop that will display it
				?>
					<article class="post">
						<div class="container lg:max-w-screen-lg">
							<h1 class="title"><?php the_title(); // Display the title of the page ?></h1>
							<?php the_post_thumbnail() ?>
							<div class="mb-5">
								<small>
									<div class="-mb-1"><?php echo get_the_category_list(); // Display the categories this post belongs to, as links ?></div>
									<div><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); // Display the tags this post has, as links separated by spaces and pipes ?></div>
									<?php the_time('m.d.Y'); // Display the time it was published ?>
								</small><!--/post-meta -->
							</div>
						</div>
						<?php get_template_part( "template-parts/content", "page") ?>
						<?php wp_link_pages(); // This will display pagination links, if applicable to the page ?>
					</article>

				<?php endwhile; // OK, let's stop the post loop once we've displayed it ?>
				
				<?php
					// If comments are open or we have at least one comment, load up the default comment template provided by Wordpress
					if ( comments_open()){ ?>
						<div class="container lg:max-w-screen-lg">
						<?php comments_template(); ?>
					<?php }
				?>


			<?php else : endif;?>

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
