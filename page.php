<?php

// This is what will be displayed when a Page is selected (not the home page index.php)

get_header();

?>

			<div class="post">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p><?php the_content(); ?></p>
			</div>

<?php

get_footer();

?>
