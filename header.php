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
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header>

	<nav class="primary-nav">
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	</nav>


	<h1 class="brandWrapper">
		<div class="logo">	
			<?php // the_custom_logo(); ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); // Link to the home page ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); // Title it with the blog name ?>" rel="home">
				<img src="<?= get_template_directory_uri()?>/assets/src/img/BOTIGA.svg" alt="<?php bloginfo( 'name' );?>"/>
			</a>
		</div>
	</h1>

	<div class="secondary-nav">
		<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
	</div>
	
	<img id="menu-burger" src="<?= get_template_directory_uri()?>/assets/src/img/menu_icon.svg"/>
		

	

	<nav id="toggle-nav">
		<img id="menu-close" src="<?= get_template_directory_uri()?>/assets/src/img/close.svg"/>
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'link_after' => '<div class="arrow"></div>'  ) ); // Display the user-defined menu in Appearance > Menus ?>
	</nav>
</header><!-- #masthead .site-header -->

<main><!-- start the page containter -->
