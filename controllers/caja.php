<?php
	if (!is_file("models/".$pagina.".php")){
		echo "Falta definir la clase ".$pagina;
		exit;
	}

	if(is_file("views/".$pagina.".php")){
		require_once("models/".$pagina.".php"); 

		if (!empty($_POST)) {
			$cashReg->createPDF(
				array(
					"fecha" => $_POST['date'],
					"cajero" => $_POST['cajero'],
				)
			);
		}

		require_once("views/".$pagina.".php"); 
	} else{
		header('Location: 404.php');
	}
?>