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

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header class="bg-black text-white mb-16">
	<div  class="container py-5 flex justify-between items-center">

		<div>
			<h1 class="flex items-center text-2xl">
				<div class="w-16">	
					<?php 
					the_custom_logo(); 
					?>
				</div>
				<div class="site-title ml-5">
					
					<a class="text-white" href="<?php echo esc_url( home_url( '/' ) ); // Link to the home page ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); // Title it with the blog name ?>" rel="home">
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
