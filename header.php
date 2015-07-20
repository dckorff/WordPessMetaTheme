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

		<!-- Settings -> Tagline -->
		<h2><?php bloginfo('description'); ?></h2>

	</header>

	<body <?php body_class(); ?> >
		<div>
			I'm the header
		</div>