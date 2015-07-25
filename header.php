<?php // header.php - Included in the index.php file by calling get_header(); ?>

<! DOCTYPE html>
<html><!-- closed in footer.php -->
	
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name') ?></title>
		<?php 
			// hook for other header code than can be injected here by wp
			wp_head(); 
		?>
	</head>

	<header>
		
		<!-- Set bloginfo('name') in admin screen from Settings -> Site Title -->
		<h1><?php bloginfo('name'); ?></h1>

		<!-- Set from Admin -> Settings -> Tagline -->
		<h2><?php bloginfo('description'); ?></h2>


		<nav>

			<!-- This will display one link for each of the Pages associated with the "Header Menu Links" menu (Admin -> Appearance -> Menus)  -->
			<!-- "header" is defined and related to the menu "Header Menu Links" in the functions.php file in the register_nav_menus() function -->
			<?php wp_nav_menu( array( 'theme_location' => 'header' ) ); ?>
		</nav>
	

	</header>

	<body <?php body_class(); ?> >
		<div>
			I'm the header
		</div>