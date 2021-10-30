<?php
	session_start();

	if (!isset($_SESSION['logged'])) header('Location: login.php');

	$pagina = "principal";

	if (!empty($_GET['pagina'])) {
		$pagina = $_GET['pagina'];
	}

	$ventanas = array(
		"principal" => array("Inicio", "Página principal"),
		"clientes" => array("Registros", "Registro de Clientes"),
		"proveedores" => array("Registros", "Registro de Proveedores"),
		"empleados" => array("Registros", "Gestión de Empleados"),
		"productos" => array("Registros", "Gestión de Productos"),
		"compras" => array("Movimientos", "Compras"),
		"ventas" => array("Movimientos", "Ventas"),
		"inventario" => array("Reportes", "Inventario"),
		"caja" => array("Reportes", "Cuadre de caja"),
		"respaldo" => array("Respaldo", "Copia de Seguridad y Restauración"),
		"ayuda" => array("Soporte", "Guías y ayuda"),
	);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?=ucfirst($pagina)?> - SISREVI</title>
		<link rel="icon" type="image/x-icon" href="media/favicon.ico">

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

		<script type="text/javascript">
			function getQueryStringValue(key) {
				return unescape(window.location.search.replace(new RegExp("^(?:.*[&\\?]" + escape(key).replace(/[\.\+\*]/g, "\\$&") + "(?:\\=([^&]*))?)?.*$", "i"), "$1"));  
			}

			// Gets the variable $pagina and converts it to a javascript variable
			var actual_page = (!getQueryStringValue("pagina") ? "inicio" : getQueryStringValue("pagina"));
			var actual_nav = ('<?=$ventanas[$pagina][0]?>');
			actual_nav = `${actual_nav[0].toLowerCase()}${actual_nav.slice(1)}`;
		</script>
	</head>
	<body>
		<div id="wrapper" class="grid">
			<aside id="sidebar">
				<div class="sidebar-header">
			    	<a class="navbar-brand" href="#">
				    	<!--<img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">-->
				    	<i class="fab fa-artstation"></i> SISREVI
			     	</a>
			    </div>
			    <!-- Sidebar navigation -->
			    <nav class="sidenav">
					<a class="nav-link inicio" href="?pagina=principal">
						<i class="fas fa-home"></i> Inicio
					</a>
					
					<a class="nav-link registros" data-bs-toggle="collapse" href="#registerMenu" role="button" aria-expanded="false" aria-controls="registerMenu">
						<i class="fas fa-clipboard-list"></i> Registros <span class="down fas fa-angle-down"></span>
					</a>
					<div class="collapse sidebar-collapse" id="registerMenu">
						<ul>
							<li><a class="clientes" href="?pagina=clientes"><i class="fas fa-user"></i> Clientes</a></li>
							<li><a class="proveedores" href="?pagina=proveedores"><i class="fas fa-people-carry"></i> Proveedores</a></li>
							<li><a class="empleados" href="?pagina=empleados"><i class="fas fa-user-tie"></i> Empleados</a></li>
							<li><a class="productos" href="?pagina=productos"><i class="fas fa-box"></i> Productos</a></li>
						</ul>
					</div>

					<a class="nav-link movimientos" data-bs-toggle="collapse" href="#movMenu" role="button" aria-expanded="false" aria-controls="movMenu">
						<i class="fas fa-book"></i> Movimientos <span class="down fas fa-angle-down">
					</a>
					<div class="collapse sidebar-collapse" id="movMenu">
						<ul>
							<li><a class="compras" href="?pagina=compras"><i class="fas fa-shopping-basket"></i> Compras</a></li>
							<li><a class="ventas" href="?pagina=ventas"><i class="fas fa-shopping-cart"></i> Ventas</a></li>
						</ul>
					</div>

					<a class="nav-link reportes" data-bs-toggle="collapse" href="#reportsMenu" role="button" aria-expanded="false" aria-controls="reportsMenu">
						<i class="fas fa-file-alt"></i> Reportes <span class="down fas fa-angle-down">
					</a>
					<div class="collapse sidebar-collapse" id="reportsMenu">
						<ul>
							<li><a class="inventario" href="?pagina=inventario"><i class="fas fa-warehouse"></i> Inventario</a></li>
							<li><a class="caja" href="?pagina=caja"><i class="fas fa-cash-register"></i> Cuadre de caja</a></li>
						</ul>
					</div>

					<h6 class="sidebar-category">Otros</h6>

					<a class="nav-link respaldo" href="?pagina=respaldo">
						<i class="fas fa-server"></i> Respaldo
					</a>
					<a class="nav-link soporte" href="?pagina=ayuda">
						<i class="fas fa-info-circle"></i> Ayuda
					</a>
				</nav>
			</aside>

			<header id="header">
				<div class="headerdir">
				 	<div class="cat"><?=$ventanas[$pagina][0];?></div>
				 	<div class="page"><?=$ventanas[$pagina][1];?></div>
				</div>
				<nav class="headernav">
				   	<ul>
				    	<!-- Configuration menu -->
				    	<li>
				    		<i class="fas fa-cog open-settings"></i>
				    	</li>
				    	<!-- User profile menu -->
				    	<li class="dropdown user-profile">
				    		<a id="userMenu" data-bs-toggle="dropdown" aria-expanded="false"><img src="media/user.png" > <i class="fas fa-sort-down"></i></a>
				    		<ul class="dropdown-menu" aria-labelledby="userMenu">
				    			<li><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a></li>
							  </ul>
				    	</li>
				    </ul>
				</nav>
			</header>

			<main id="content">
				<?php
					if (is_file("controllers/".$pagina.".php")) {
						require_once("controllers/".$pagina.".php");
					} else {
						header('Location: 404.php');
					}
				?>
			</main>

			<!-- Settings panel -->
			<div id="settings" class="shadow-lg">
				<i class="fas fa-times close-settings"></i>
				<div class="card-header">
					<h5>Configuración del Sistema</h5>
					<p class="text-sm">Opciones generales</p>
				</div>
			</div>
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