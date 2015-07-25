		<!-- footer.php - Included in the index.php file by calling get_footer(); -->

		<div>I'm the footer</div>
		<footer>
			<nav>
				<!-- "footer" is defined and related to the menu "Footer Menu" in the functions.php file in the register_nav_menus() function -->
				<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
			</nav>
			<p> <?php bloginfo('name'); ?> - &copy; <?php echo( date('Y') ) ?> </p>	
		</footer>

		<?php 
			// hook for other footer code than can be injected here by wp
			// (particularly the admin toolbar js gets injected here)
			wp_footer(); 
		?>
	</body>
</html>