<?php
	if(is_file("views/".$pagina.".php")){
		require_once("views/".$pagina.".php"); 
	} else{
		header('Location: 404.php');
	}
?>