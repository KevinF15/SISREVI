<?php
	session_start();

	require_once("models/bd.php");
	require_once("models/usuarios.php");

	// Carga de modelos principales
	$database = new Database();
	$user = new User();

	/*************************
	 *    OTRAS FUNCIONES    *
	 *************************/

	/**
	 * Muestra mensajes de alerta:
	 * $type = primary | success | warning | danger
	 */

	function showAlert($type, $message) {
		echo '<div class="alert alert-'.$type.' alert-dismissible fade show" role="alert">
				  '.$message.'
  			      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
			  </div>';
	}

	function redir($url) {
		header("Location: ".$url);
		die();
	}
?>