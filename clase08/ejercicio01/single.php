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




		<article>
			<?php 
				  		the_content();

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
