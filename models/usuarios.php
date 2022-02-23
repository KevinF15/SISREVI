<?php
	class User extends Database {
		public function getData($params, $table) {
			$arrLength = count($params)-1;
			$rows = "";


			foreach ($params as $row){
				if ($row === $params[count($params)-1]) {
					$rows .= $row;
					break;
				}

				$rows .= $row.", ";
			}

			$sql = $this->sqlQuery("SELECT ".$rows." FROM ".$table);
			return $sql->fetch();
		}

		public function parseDoc($prefix, $num) {
        	return $prefix."-".$num;
        }

        public function checkIfLogged() {
        	if (!isset($_SESSION['logged'])) return false;
			return true;
        }

        public function checkPermission() {

        }

        /**************************
	 	*   FUNCIONES DE SESION   *
	 	**************************/

        public function login($doc, $pass) {
        	$sql = $this->sqlQuery("SELECT * FROM empleados WHERE cedula='".$doc."' AND clave='".$pass."'");
        	$userData = $sql->fetch();

        	if (count($sql->fetchColumn()) > 0) {
				$_SESSION['logged'] = true;
				$_SESSION['name'] = $userData[1];
				$_SESSION['type'] = $userData[2];
				redir('index.php');
			} else {
				showAlert('danger', 'Datos incorrectos, verifique e intentelo de nuevo...');
				return false;
			}
        }
	}
?>