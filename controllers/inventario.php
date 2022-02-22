<?php
	if(is_file("views/".$pagina.".php")){
		require_once('models/bd.php');
		require_once('models/products.php');
		
		if (!empty($_POST)) {
			if (isset($_POST['action']) && $_POST['action'] === 'delete') {
				$product->delete($_POST['id'], 'cod', 'productos');
				die();
			}  else if (isset($_POST['action']) && $_POST['action'] === 'addBrand') {
				$product->addBrand($_POST['name']);
				die();
			}
 
			// $_POST validations
			$productExist = $database->sqlQuery("SELECT count(*) FROM productos WHERE cod_barras='".$_POST['cod_barras']."'");

			if ($productExist->fetchColumn() > 0) {
				// User exist
				showAlert('danger', 'Producto ya registrado...');
			} else {
				$_POST['cod_barras'] = strtoupper($_POST['cod_barras']);

				$product->addProduct($_POST['cod_barras'], $_POST['nombre'], $_POST['marca'], "0", $_POST['prec_unit'], $_POST['prec_proveedor'], $_POST['descripcion'],);
				showAlert('success', '¡Producto registrado satisfactoriamente!');
			}
		}

		require_once("views/".$pagina.".php"); 
	} else{
		header('Location: 404.php');
	}
?>