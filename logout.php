<?php
	session_start();
	if ($_SESSION['logged']) session_destroy();
	header('Location: login.php');
	die();
?>