<?php
	require_once('models/bd.php');

	class User extends Database {
		private $isAdmin = false;

		public function createEmployee($name, $doc, $type, $dir, $tel) {
			$this->sqlQuery("INSERT INTO empleados(cedula, nombre, cargo, telefono, dir) VALUES ('".$name."', '".$doc."', '".$type."', '".$dir."', '".$tel."')");
		}

		public function addClient($name, $doc, $dir, $tel) {
			$this->sqlQuery("INSERT INTO clientes(doc, nombre, telefono, dir) VALUES ('".$name."', '".$doc."', '".$dir."', '".$tel."')");
		}

		public function addProvider($name, $rif, $dir, $tel) {
			$this->sqlQuery("INSERT INTO proveedores(rif, nombre, telefono, dir) VALUES ('".$name."', '".$rif."', '".$dir."', '".$tel."')");
		}

		public function deleteUser($id, $field, $table) {
			$this->sqlQuery("DELETE FROM ".$table." WHERE ".$field." = '".$id."'");
		}

		public function isLogged() {
			session_start();
			if (!isset($_SESSION['logged'])) return false;
			return true;
		}

		public function isAdmin() {
			
		}
	}
?>