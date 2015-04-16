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

		  		the_content();

			endwhile;
		endif;
	?>

<?php 
	get_footer();
?>
