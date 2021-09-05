<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); // show the blog name, from settings ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header class="bg-black text-white">
	<div  class="container mx-auto py-5 flex justify-between items-center">

		<div>
			<h1 class="flex items-center">
				<div class="w-16">	
					<?php 
					the_custom_logo(); 
					?>
				</div>
				<div class="site-title ml-5">
					
					<a href="<?php echo esc_url( home_url( '/' ) ); // Link to the home page ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); // Title it with the blog name ?>" rel="home">
						<?php bloginfo( 'name' );?>
					</a>
				</div>
			</h1>
		</div>
		

	
		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'flex gap-5' ) ); // Display the user-defined menu in Appearance > Menus ?>
		</nav><!-- .site-navigation .main-navigation -->
	</div>
		
</header><!-- #masthead .site-header -->

<main><!-- start the page containter -->
