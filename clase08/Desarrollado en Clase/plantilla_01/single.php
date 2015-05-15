<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<!-- Inicio del contenido -->

	<?php
		if ( have_posts() ) : 
			while ( have_posts() ) : the_post();
	?>



	<?php 
		the_content();
	?>



<!-- Fin del contenido -->

    <?php 

			endwhile;
		endif;
	?>



</body>
</html>