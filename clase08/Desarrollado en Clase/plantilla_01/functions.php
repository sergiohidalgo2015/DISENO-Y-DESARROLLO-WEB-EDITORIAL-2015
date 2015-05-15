<?php
	//Este código nos crea el soporte para menus
	add_theme_support("nav-menus");
	if(function_exists("register_nav_menus")){
		register_nav_menus(
			array(
				"principal" => "Menu Principal", 
				"secundario" => "Menu Secundario",
				"tercero" => "Menu Tercero"
				)
		);
	}
	///////////////////////////////////////////////
?>