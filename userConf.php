<?php
	include 'init.php';
	$userCed = '';

	if (!empty($_GET['for'])) {
		$userCed = $_GET['for'];

		if (!empty($_POST)) {
			$database->sqlQuery("UPDATE empleados SET clave = ".$_POST['clave']." WHERE cedula = '".$userCed."'");
			redir('index.php?pagina=principal');
		}

	} else if (empty($_GET)) {
		header('Location: index.php');
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
                	<h3 class="fw-bolder mb-0">Configura tu cuenta</h3>
                	<p class="mb-3">Rellena el siguiente formulario</p>

                	<?php
                		if (isset($_GET['for'])) {
                	?>

                	<form id="loginForm" class="forms d-flex flex-column text-start" method="POST">
                		<div class="form-group mb-3">
		                    <label class="form-label" for="eloginCedInput">Cedula</label>
						    <input type="text" class="form-control" id="eloginCedInput" placeholder="Cedula" name="cedula" value="<?=$userCed?>" disabled>
							<div id="eloginCedHelp" class="form-text"></div>
						 </div>

		                <div class="form-group mb-3">
		                	<label for="precunitInput" class="form-label">Contraseña</label>
		                    <input type="password" class="form-control" id="loginPassInput" placeholder="Contraseña" name="clave" required>
						    <div id="loginPassHelp" class="form-text"></div>
						</div>

		                <!--<div class="form-group mb-3 form-check form-switch">
							<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked> Recordarme
						</div>-->

		                <div class="button-row d-flex justify-content-end">
		                    <button type="submit" class="btn btn-gradient-primary-color w-100" name="agregar">Establecer</button>
		                </div>
                	</form>

                	<?php
                		} else if (isset($_GET['initConf'])) {
                			$checkIfExistUsers = $database->sqlQuery("SELECT count(*) FROM empleados");

                			if ($checkIfExistUsers->fetchColumn() > 0) {
                				header('Location: index.php');
                				die();
							}

							if (!empty($_POST)) {
								$eDoc = $user->parseDoc($_POST['cedPrefix'], $_POST['cedula']);

								$database->sqlQuery("INSERT INTO empleados(cedula, nombre, cargo, telefono, dir, clave) VALUES ('".$eDoc."', '".$_POST['nombre']."', '".$_POST['cargo']."', '".$_POST['telefono']."', '".$_POST['dir']."', '".$_POST['clave']."')");
								header('Location: login.php');
							}
                	?>

                	<form id="loginForm" class="forms d-flex flex-column text-start" method="POST">
                		<div class="form-group row mb-3">
                			<div class="col-6">
				               	<label for="enameInput" class="form-label">Nombre</label>
					            <input type="text" class="form-control" id="enameInput" name="nombre" aria-describedby="enameHelp">
					            <div id="enameHelp" class="form-text"></div>
				            </div>
				            <div class="col-6">
				               	<label for="loginPassInput" class="form-label">Contraseña</label>
		            	        <input type="password" class="form-control" id="loginPassInput" name="clave" required>
							    <div id="loginPassHelp" class="form-text"></div>
				            </div>
				        </div>
				        <div class="form-group row mb-3">
				   			<div class="col-6">
				               	<label for="edocInput" class="form-label">Documento</label>
				                <div class="input-group">
			                   <select class="input-group-text" id="cedPrefixInput" name="cedPrefix">
								    <option value="V">V</option>
								    <option value="E">E</option>
								</select>
			                    <input type="text" class="form-control" id="loginCedInput" placeholder="Cedula" name="cedula" required>
							 </div>
							 <div id="loginCedHelp" class="form-text"></div>
				            </div>
				            <div class="col-6">
				 	            <label for="echargeInput" class="form-label">Cargo</label>
				                <select class="form-select" name="cargo" id="echargeInput" aria-describedby="chargeHelp">
				        	       	<option value="Administrador" selected>Administrador</option>
				                </select>
				                <div id="chargeHelp" class="form-text"></div>
				            </div>
				        </div>
				        <div class="form-group row mb-3">
				            <div class="col-6">
				        	    <label for="edirInput" class="form-label">Dirección</label>
				                <textarea class="form-control" id="edirInput" name="dir" aria-describedby="edirHelp"></textarea>
				                <div id="edirHelp" class="form-text"></div>
				            </div>
				        	<div class="col-6">
				                <label for="etelInput" class="form-label">Teléfono</label>
				                <input type="text" class="form-control" id="etelInput" name="telefono" aria-describedby="etelHelp">
				            	<div id="etelHelp" class="form-text"></div>
				       		</div>
				    	</div>
				        <div class="button-row d-flex justify-content-end mt-4">
							<input type="reset" class="btn btn-light">
							<button type="submit" class="btn btn-gradient-primary-color" name="añadir">Añadir</button>
						</div>
                	</form>


                	<?php 
                		}
                	?>
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