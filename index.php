<?php
/**
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine 
 * doesn't know which template to use (e.g. 404 error)
 */

get_header(); // This fxn gets the header.php file and renders it ?>
	<div class="container" role="main">
		<?php 
			get_template_part('partials/articles');
		?>
	</div>
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>