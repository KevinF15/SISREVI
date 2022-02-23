<?php
	if (!is_file("models/".$pagina.".php")){
		echo "Falta definir la clase ".$pagina;
		exit;
	}

	if(is_file("views/".$pagina.".php")){
		require_once("models/".$pagina.".php");

		if (!empty($_POST)) {
			if (isset($_POST['action']) && $_POST['action'] === 'delete') {
				$client->delete($_POST['id']);
				die();
			} else if (isset($_POST['editar'])) {
				$database->sqlQuery("UPDATE clientes SET doc='".$_POST['doc']."', nombre='".$_POST['nombre']."', telefono='".$_POST['telefono']."', dir='".$_POST['dir']."' WHERE doc='".$_POST['doc']."'");
				die();
			}

			// Validaciones
			if ($client->checkIfExist($_POST['doc'])) {
				showAlert('danger', 'Cedula ya registrada...');
			} else {
				$client->create($_POST['doc'], $_POST['nombre'], $_POST['dir'], $_POST['telefono']);
				showAlert('success', '¡Cliente registrado satisfactoriamente!');
			}
		}

		require_once("views/".$pagina.".php"); 
	} else{
		header('Location: 404.php');
	}
?>