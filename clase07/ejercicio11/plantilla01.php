<?php
    /*
     Template Name: Plantilla 01
     */

	get_header();
?>


	<h1>
		<?php bloginfo("description"); ?>
	</h1>

	<img src="<?php print RUTA_IMAGENES; ?>/banner.jpg" />

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

<?php 
	get_footer();
?>
