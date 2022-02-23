<?php
	if (!is_file("models/".$pagina.".php")){
		echo "Falta definir la clase ".$pagina;
		exit;
	}

	if(is_file("views/".$pagina.".php")){
		require_once("models/".$pagina.".php"); 

		if (!empty($_POST)) {
			$empDoc = $user->parseDoc($_POST['cedPrefix'], $_POST['doc']);

			if (isset($_POST['action']) && $_POST['action'] === 'delete') {
				$employer->delete($_POST['id']);
				die();
			} else if (isset($_POST['editar'])) {
				$database->sqlQuery("UPDATE empleados SET cedula='".$empDoc."', nombre='".$_POST['nombre']."', cargo='".$_POST['cargo']."', telefono='".$_POST['telefono']."', dir='".$_POST['dir']."' WHERE cedula='".$empDoc."'");
				die();
			}

			// Validaciones

			if ($employer->checkIfExist($empDoc)) {
				showAlert('danger', 'Cedula ya registrada...');
			} else {
				$employer->create($empDoc, $_POST['nombre'], $_POST['cargo'], $_POST['telefono'], $_POST['dir']);
				showAlert('success', '¡Empleado registrado satisfactoriamente! ... <b><a href="userConf.php?for='.$empDoc.'"">Configuralo</a></b>');
			}
		}

		require_once("views/".$pagina.".php"); 
	} else{
		header('Location: 404.php');
	}
?>