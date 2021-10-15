<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>

</main><!-- / end page container, begun in the header -->

<footer>
		<div class="container grid md:grid-cols-2 grid-cols-1">
			<div class="left">
				<div class="logo">	
					<?php // the_custom_logo(); ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); // Link to the home page ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); // Title it with the blog name ?>" rel="home">
						<img src="<?= get_template_directory_uri()?>/assets/src/img/BOTIGA.svg" alt="<?php bloginfo( 'name' );?>"/>
					</a>
				</div>
				<p>Give your customers insight into your product collection.</p>
			</div>
			<div class="right">
				<nav class="footer-nav">
					<div>
						<h2 class="title">Quick Links</h2>
						<?php wp_nav_menu( array( 'theme_location' => 'footer-quick-links' ) ); ?>
					</div>
					<div>
						<h2 class="title">About</h2>
						<?php wp_nav_menu( array( 'theme_location' => 'footer-about' ) ); ?>
					</div>
				</nav>
			</div>
		</div>
		
</footer><!-- #colophon .site-footer -->

<?php wp_footer(); 
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
// Removing this fxn call will disable all kinds of plugins. 
// Move it if you like, but keep it around.
?>

</body>
</html>
