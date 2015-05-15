<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo("name"); ?></title>
</head>
<body>

<?php 

	wp_nav_menu( 

		array(
			'menu' => 'principal', 
			'container'=> 'nav' 
			)


	); 

?>
