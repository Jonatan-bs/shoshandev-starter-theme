<?php
get_header(); // This fxn gets the header.php file and renders it ?>
	<div class="container" role="main">

		<?php 
			if( have_posts()){
				while(have_posts()){
					the_post();
					get_template_part( "template-parts/content", "page");

				}
			}
		?>



	</div>
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>