<?php
	require_once('models/bd.php');

	if(is_file("views/".$pagina.".php")){
		if (!empty($_POST)) {
			if (isset($_POST['action']) && $_POST['action'] === 'delete') {
				$user->deleteUser($_POST['id'], 'cedula', 'empleados');
				die();
			} else if (isset($_POST['editar'])) {
				$database->sqlQuery("UPDATE empleados SET cedula='".$_POST['doc']."', nombre='".$_POST['nombre']."', cargo='".$_POST['cargo']."', telefono='".$_POST['telefono']."', dir='".$_POST['dir']."' WHERE cedula='".$_POST['doc']."'");
				exit();
			}

			// no permitir quedar sin administraddores

			// $_POST validations
			$userExist = $database->sqlQuery("SELECT count(cedula) FROM empleados WHERE cedula='".$_POST['doc']."'");

			if ($userExist->fetchColumn() > 0) {
				// User exist
				showAlert('danger', 'Cedula ya registrada...');
			} else {
				$user->createEmployee($_POST['doc'], $_POST['nombre'], $_POST['cargo'], $_POST['telefono'], $_POST['dir']);
				//header('Location: userConf.php?for='.$_POST['doc']);
				showAlert('success', '¡Empleado registrado satisfactoriamente! ... <b><a href="userConf.php?for='.$_POST['doc'].'"">Configuralo</a></b>');
			}
		}

		require_once("views/".$pagina.".php"); 
	} else{
		header('Location: 404.php');
	}
?>