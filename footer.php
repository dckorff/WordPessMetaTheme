		<!-- footer.php - Included in the index.php file by calling get_footer(); -->

		<div>I'm the footer</div>
		<footer>
			<p> <?php bloginfo('name'); ?> - &copy; <?php echo( date('Y') ) ?> </p>	
		</footer>

		<?php 
			// hook for other footer code than can be injected here by wp
			// (particularly the admin toolbar js gets injected here)
			wp_footer(); 
		?>
	</body>
</html>