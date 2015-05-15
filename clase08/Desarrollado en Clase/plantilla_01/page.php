<?php
	get_header();
?>


<h2>Estoy usando la plantilla page.php</h2>


<!-- Inicio del contenido -->

	<?php
		if ( have_posts() ) : 
			while ( have_posts() ) : the_post();
	?>

	<h1>

	<?php
		the_title();
	?>

	</h1>


	<article>


	<?php 
		the_content();
	?>

	</article>



<!-- Fin del contenido -->

    <?php 

			endwhile;
		endif;
	?>



<?php
	get_footer();
?>