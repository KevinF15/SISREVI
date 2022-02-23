<?php
	if (!is_file("models/".$pagina.".php")){
		echo "Falta definir la clase ".$pagina;
		exit;
	}

	if(is_file("views/".$pagina.".php")){
		require_once("models/".$pagina.".php");

		if (!empty($_POST)) {
			if (isset($_POST['action']) && $_POST['action'] === 'delete') {
				$provider->delete($_POST['id']);
				die();
			} else if (isset($_POST['editar'])) {
				$database->sqlQuery("UPDATE proveedores SET rif='".$_POST['rif']."', nombre='".$_POST['nombre']."', telefono='".$_POST['telefono']."', dir='".$_POST['dir']."' WHERE rif='".$_POST['rif']."'");
				die();
			}

			// Validaciones
			if ($provider->checkIfExist($_POST['rif'])) {
				showAlert('danger', 'Cedula ya registrada...');
			} else {
				$provider->create($_POST['rif'], $_POST['nombre'], $_POST['dir'], $_POST['telefono']);
				showAlert('success', '¡Proveedor registrado correctamente!');
			}
		}

		require_once("views/".$pagina.".php"); 
	} else{
		header('Location: 404.php');
	}
?>