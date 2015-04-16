<?php 
	get_header();
?>


	<h1>
		<?php bloginfo("description"); ?>
	</h1>


	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h1>
				<?php the_title(); ?>
			</h1>


			<?php endwhile; ?>

	<?php endif; ?>


<?php 
	get_footer();
?>
