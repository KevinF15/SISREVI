<?php
	$pagina = "principal";

	if (!empty($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}

	$ventanas = array(
		"principal" => "Página principal",
		"ventas" => "Registro de ventas",
		"inventario" => "Control de inventario",
		"pedidos" => "Registro de compras",
		"empleados" => "Gestión de empleados",
		"respaldo" => "Copia de Seguridad y Restauración",
		"ayuda" => "Soporte",
	);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?=ucfirst($pagina)?> - SISREVI</title>

		<!-- Bootstrap & Font Awesome CSS -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/fontawesome.all.min.css">

		<!-- Custom fonts: Nunito -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

		<!-- Web styles -->
		<link rel="stylesheet" type="text/css" href="css/main.css">

		<script type="text/javascript">
			function getQueryStringValue(key) {
				return unescape(window.location.search.replace(new RegExp("^(?:.*[&\\?]" + escape(key).replace(/[\.\+\*]/g, "\\$&") + "(?:\\=([^&]*))?)?.*$", "i"), "$1"));  
			}

			// Gets the variable $pagina and converts it to a javascript variable
			var actual_page = (!getQueryStringValue("pagina") ? "inicio" : getQueryStringValue("pagina"));
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
					<a class="nav-link principal" href="?pagina=principal">
						<i class="fas fa-home"></i> Inicio
					</a>
					<a class="nav-link ventas" href="?pagina=ventas">
						<i class="fas fa-shopping-cart"></i> Ventas
					</a>
					<a class="nav-link inventario" href="?pagina=inventario">
						<i class="fas fa-warehouse"></i> Inventario
					</a>

					<a class="nav-link pedidos" href="?pagina=pedidos">
						<i class="fas fa-luggage-cart"></i> Pedidos
					</a>

					<h6 class="sidebar-category">Otros</h6>

					<a class="nav-link respaldo" href="?pagina=respaldo">
						<i class="fas fa-server"></i> Respaldo
					</a>
					<a class="nav-link ayuda" href="?pagina=ayuda">
						<i class="fas fa-info-circle"></i> Ayuda
					</a>
				</nav>
			</aside>

			<header id="header">
				<div class="headerdir">
				 	<div class="cat">Inicio</div>
				 	<div class="page"><?=$ventanas[$pagina];?></div>
				</div>
				<nav class="headernav">
				   	<ul>
				    	<li>
				    		<i class="fas fa-bell"></i>
				    	</li>
				    	<!-- Configuration menu -->
				    	<li class="dropdown">
				    		<i class="fas fa-cog" id="configMenu" data-bs-toggle="dropdown" aria-expanded="false"></i>
				    		<ul class="dropdown-menu" aria-labelledby="configMenu">
				    			<h6 class="dropdown-header">Opciones administrativas</h6>
							    <li><a class="dropdown-item" href="?pagina=empleados"><i class="fas fa-user-tie"></i> Gestionar empleados</a></li>
							    <li><a class="dropdown-item" href="?pagina=empleados#sueldos"><i class="fas fa-calculator"></i> Calcular sueldos</a></li>
							    <h6 class="dropdown-header">Otras opciones</h6>
							    <li class="open-settings"><a class="dropdown-item"><i class="fas fa-sliders-h"></i> Ajustes de sistema</a></li>
							  </ul>
				    	</li>
				    	<!-- User profile menu -->
				    	<li class="dropdown user-profile">
				    		<a id="userMenu" data-bs-toggle="dropdown" aria-expanded="false"><img src="media/user.png" > <i class="fas fa-sort-down"></i></a>
				    		<ul class="dropdown-menu" aria-labelledby="userMenu">
				    			<li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a></li>
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

		<script type="text/javascript" src="js/index.js"></script>
	</body>
</html>