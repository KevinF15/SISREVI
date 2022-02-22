<?php
	if(is_file("views/".$pagina.".php")){
		if (!empty($_POST)) {
			// Delete user data
			if (isset($_POST['action']) && $_POST['action'] === 'delete') {
				$user->deleteUser($_POST['id'], 'doc', 'clientes');
				die();
			// Edit user data
			} else if (isset($_POST['editar'])) {
				$database->sqlQuery("UPDATE clientes SET doc='".$_POST['doc']."', nombre='".$_POST['nombre']."', telefono='".$_POST['telefono']."', dir='".$_POST['dir']."' WHERE doc='".$_POST['doc']."'");
				die();
			}

			// $_POST validations
			$userExist = $database->sqlQuery("SELECT count(doc) FROM clientes WHERE doc='".$_POST['doc']."'");

			// If user exist...
			if ($userExist->fetchColumn() > 0) {
				showAlert('danger', 'Cedula ya registrada...');
			} else {
				$user->addClient($_POST['doc'], $_POST['nombre'], $_POST['telefono'], $_POST['dir']);
				showAlert('success', '¡Cliente registrado exitosamente!');
			}

		}

		require_once("views/".$pagina.".php"); 
	} else{
		header('Location: 404.php');
	}
?>