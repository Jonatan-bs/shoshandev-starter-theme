<?php /* Template Name: All Posts */ ?>

<?php
get_header(); // This fxn gets the header.php file and renders it ?>
	<div id="primary">
		<div class="container" role="main">
            
			<?php get_template_part( "template-parts/content" , "posts" ) ?>

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>