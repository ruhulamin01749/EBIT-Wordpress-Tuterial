<?php get_header(); ?>
	<?php 
		if(have_posts()){
			the_post();
		}
	?>
<?php get_footer(); ?>