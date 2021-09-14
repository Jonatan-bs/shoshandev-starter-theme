<?php
get_header(); // This fxn gets the header.php file and renders it ?>
	<div class="container" role="main">
		<?php 
			get_template_part('template-parts/articles');
		?>

	</div>
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>