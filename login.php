<?php
	session_start();
	require_once('init.php');
	require_once('models/bd.php');

	$checkIfExistUsers = $database->sqlQuery("SELECT count(*) FROM empleados");

	if ($checkIfExistUsers->fetchColumn() == 0) {
     	header('Location: userConf.php?initConf');
     	die();
	}

	if (isset($_SESSION['logged'])) header('Location: index.php');

	if (!empty($_POST)) {
		$query = $database->sqlQuery("SELECT count(*) FROM empleados WHERE cedula = '".$_POST['cedula']."' AND clave = '".$_POST['clave']."'");
		if ($query->fetchColumn() > 0) {
			$_SESSION['logged'] = true;
			header('Location: index.php');
		} else {
			showAlert('danger', 'Datos incorrectos, verifique e intentelo de nuevo...');
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Iniciar Sesión - SISREVI</title>

		<!-- Bootstrap & Font Awesome CSS -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/fontawesome.all.min.css">

		<!-- Custom fonts: Nunito -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700&display=swap" rel="stylesheet">

		<!-- Web styles -->
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body>
		<div id="wrapper" class="grid wrapper-login">
			<main id="content">
				<div class="card card-login">
					<i class="logo-icon fab fa-artstation"></i> <h2 class="fw-bolder mb-4">SISREVI</h2>
                	<h3 class="fw-bolder mb-0">¡Bienvenido de vuelta!</h3>
                	<p class="mb-3">Ingresa tu usuario y contraseña</p>

                	<form id="loginForm" class="forms d-flex flex-column text-start" method="POST">
                		<div class="form-group mb-3">
		                    <label class="form-label" for="loginCedInput">Cedula</label>
						    <input type="text" class="form-control" id="loginCedInput" placeholder="Cedula" name="cedula" required>
							<div id="loginCedHelp" class="form-text"></div>
						 </div>

		                <div class="form-group mb-3">
		                	<label for="loginPassInput" class="form-label">Contraseña</label>
		                    <input type="password" class="form-control" id="loginPassInput" placeholder="Contraseña" name="clave" required>
						    <div id="loginPassHelp" class="form-text"></div>
						</div>

		                <!--<div class="form-group mb-3 form-check form-switch">
							<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked> Recordarme
						</div>-->

		                <div class="button-row d-flex justify-content-end">
		                    <button type="submit" class="btn btn-gradient-primary-color w-100" name="agregar">Ingresar</button>
		                </div>
                	</form>
                </div>
			</main>
		</div>

		<!-- Load core files -->
		<script type="text/javascript" src="js/core/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/core/jquery-ui.min.js"  crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/core/popper.min.js" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/core/bootstrap.min.js" crossorigin="anonymous"></script>

		<!-- Load plugins -->
		<script type="text/javascript" src="js/plugins/chartjs.min.js" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/plugins/sweetalert2.all.min.js" crossorigin="anonymous"></script>

		<script type="text/javascript" src="js/validations.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
	</body>
</html>