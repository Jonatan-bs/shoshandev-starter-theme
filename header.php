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

<header class="bg-primary text-white mb-16">
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
		

	
		<nav class="header-nav hidden md:block">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'flex gap-5', 'add_anchor_class'  => 'text-white' ) ); // Display the user-defined menu in Appearance > Menus ?>
		</nav><!-- .site-navigation .main-navigation -->

		<img id="menu-burger" class="md:hidden" src="<?= get_template_directory_uri()?>/assets/src/img/menu_icon.svg"/>
	</div>
	<nav id="toggle-nav" class=" bg-black fixed top-0 h-full pt-32 px-20 z-50 ">
		<img id="menu-close" src="<?= get_template_directory_uri()?>/assets/src/img/close.svg"/>
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'flex flex-col items-center text-3xl gap-5', 'add_anchor_class'  => 'text-white' ) ); // Display the user-defined menu in Appearance > Menus ?>
	</nav>
</header><!-- #masthead .site-header -->

<main><!-- start the page containter -->
