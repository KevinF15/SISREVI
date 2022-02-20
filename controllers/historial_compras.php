<?php
	if (!is_file("models/".$pagina.".php")){
		echo "Falta definir la clase ".$pagina;
		exit;
	}  

	if(is_file("views/".$pagina.".php")){
		require_once("models/".$pagina.".php");
		$purchase = new Purchases();

		require_once("views/".$pagina.".php");
	} else{
		header('Location: 404.php');
	}
?>