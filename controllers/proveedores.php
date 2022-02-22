<?php
	if(is_file("views/".$pagina.".php")){
		if (!empty($_POST)) {
			if (isset($_POST['action']) && $_POST['action'] === 'delete') {
				$user->deleteUser($_POST['id'], 'rif', 'proveedores');
				die();
			} else if (isset($_POST['editar'])) {
				$database->sqlQuery("UPDATE proveedores SET rif='".$_POST['rif']."', nombre='".$_POST['nombre']."', telefono='".$_POST['telefono']."', dir='".$_POST['dir']."' WHERE rif='".$_POST['rif']."'");
				exit();
			}

			// $_POST validations
			$userExist = $database->sqlQuery("SELECT count(rif) FROM proveedores WHERE rif='".$_POST['rif']."'");

			if ($userExist->fetchColumn() > 0) {
				// User exist
				showAlert('danger', 'Proveedor ya registrado...');
			} else {
				$user->addProvider($_POST['rif'], $_POST['nombre'], $_POST['telefono'], $_POST['dir']);
				showAlert('success', '¡Proveedor registrado exitosamente!');
			}

		}

		require_once("views/".$pagina.".php"); 
	} else{
		header('Location: 404.php');
	}
?>