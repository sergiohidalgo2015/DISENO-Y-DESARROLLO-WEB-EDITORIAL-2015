<?php 
	get_header();
?>


	<h1>
		<?php bloginfo("description"); ?>
	</h1>

	////////////////////////
	//INICIO DEL LOOP
	////////////////////////
	<?php
		if ( have_posts() ) : 
			while ( have_posts() ) : the_post();
	?>

		<h1> <?php the_title(); ?></h1>

		<p><a href="<?php the_permalink(); ?>">link</a></p>




		<article>
			<?php 
				  		the_content("Leer más");

		    ?>
	    </article>
    <?php 

			endwhile;
		endif;
	?>
	////////////////////////
	//FIN DEL LOOP
	////////////////////////




<?php 
	get_footer();
?>
