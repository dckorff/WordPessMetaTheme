<?php // index.php - Default file that used used when nothing more specific is called for ?>
<?php get_header(); ?>


<h1>hello from index.php</h1>
<?php

	if(have_posts()){

		?>
		<div class="post-list">
		<?php

		while(have_posts()){
			the_post();
			?>
			<div class="post">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p><?php the_content(); ?></p>
			</div>
			<?php
		}
		?>
		</div>
		<?php
	}
	else{
		print("No content :(");
	}

?>


<?php get_footer(); ?>