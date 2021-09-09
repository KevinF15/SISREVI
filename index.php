<?php
	$pagina = "principal";

	if (!empty($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}

	$ventanas = array(
		"principal" => "Página principal",
		"ventas" => "Resgistro de ventas",
		"inventario" => "Control de inventario",
		"ayuda" => "Soporte",
	);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Menu para sistema</title>

		<!-- Bootstrap & Font Awesome CSS -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/fontawesome.all.min.css">

		<!-- Custom fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="css/main.css">

		<script type="text/javascript">
			function getQueryStringValue(key) {
				return unescape(window.location.search.replace(new RegExp("^(?:.*[&\\?]" + escape(key).replace(/[\.\+\*]/g, "\\$&") + "(?:\\=([^&]*))?)?.*$", "i"), "$1"));  
			}

			// Obtiene la variable $pagina (de php) y la convierte en actual_page (javascript)
			var actual_page = (!getQueryStringValue("pagina") ? "principal" : getQueryStringValue("pagina"));
		</script>
	</head>
	<body>
		<div id="wrapper">
			<!-- Sidebar -->
			<aside id="sidebar">
				<div class="sidebar-header">
			    	<a class="navbar-brand" href="#">
				    	<!--<img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">-->
				    	<i class="fab fa-artstation"></i> SISREVI <br>
			     	</a>
			    </div>
			    <!-- Sidebar navigation -->
			    <nav class="sidenav nav flex-column">
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

			<main id="content" class="d-flex flex-column">
				<header class="navbar justify-content-between" id="header">
				  	<div class="headerdir">
				  		<!--<div class="cat">Inicio</div>-->
				  		<div class="page"><?=$ventanas[$pagina];?></div>
					</div>
					<nav class="headernav">
				    	<ul class="navbar">
				    		<li class="nav-link">
				    			<i class="fas fa-bell"></i>
				    		</li>
				    		<div class="btn-group">
				    			<!-- Configuration menu -->
					    		<li class="nav-link dropdown" role="button" id="configMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fas fa-cog"></i>
									<div class="dropdown-menu header-dropdown" aria-labelledby="configMenu">
										<h6 class="dropdown-header">Opciones administrativas</h6>
									    <a class="dropdown-item" href="#"><i class="fas fa-user-tie"></i> Gestionar empleados</a>
									    <a class="dropdown-item" href="#"><i class="fas fa-calculator"></i> Calcular sueldos</a>
									    <h6 class="dropdown-header">Otras opciones</h6>
									    <a class="dropdown-item" href="#"><i class="fas fa-sliders-h"></i> Ajustes de sistema</a>
									</div>
					    		</li>
				    		</div>
							<div class="btn-group">
								<!-- User profile menu -->
					    		<li class="nav-link dropdown user-profile" role="button" id="userMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    			<img src="images/user.png"><i class="fas fa-sort-down"></i>
					    			<div class="dropdown-menu header-dropdown" aria-labelledby="userMenu">
									    <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
									</div>
					    		</li>
				    		</div>
				    	</ul>
				    </nav>
				</header>

				<div class="main-content">
					<?php
						// Solo se esta usando esta linea de codigo porque el proposito de esta entega es mostrar el menu y como se
						// adapto a las vistas, de manera que consideramos que esta demas crear tantos archivos en controladores
						// que por ahora tendran el mismo codigo... Cuando sea el momento de usar los controladores se usara el
						// codigo comentado abajo.
						require_once("controllers/all.php");

						/*if (is_file("controllers/".$pagina.".php")) {
							require_once("controllers/".$pagina.".php");
						} else {
							header('Location: 404.php');
						}*/
					?>
				</div>
			</main>
		</div>


		<!-- Load jQuery and others Frameworks -->
		<script type="text/javascript" src="js/lib/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/lib/popper.min.js" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/lib/bootstrap.min.js" crossorigin="anonymous"></script>

		<script type="text/javascript" src="js/index.js"></script>
	</body>
</html>