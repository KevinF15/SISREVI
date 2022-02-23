<?php
	class Providers extends Database {
		public function create($rif, $name, $dir, $tel) {
			try {
				$this->sqlQuery("INSERT INTO proveedores(rif, nombre, dir, telefono) VALUES ('".$rif."', '".$name."', '".$dir."', '".$tel."')");
			} catch (Exception $e){
				return $e->getMessage();
			}
		}

		public function delete($rif) {
			$this->sqlQuery("DELETE FROM proveedores WHERE rif='".$rif."'");
		}

		public function checkIfExist($rif) {
        	$val = $this->sqlQuery("SELECT count(rif) FROM proveedores WHERE rif='".$rif."'");
        	$val = $val->fetchColumn();

        	if ($val > 0) return true;
        	return false;
        }

        public function showList() {
        	$query = $this->sqlQuery("SELECT rif, nombre, telefono, dir from proveedores");

			while ($row = $query->fetch(PDO::FETCH_ASSOC))  {
				echo "<tr class=userDataRow data-id=".$row['rif'].">";
				    echo "<td>".$row['rif']."</td>";
				    echo "<td>".$row['nombre']."</td>";
				    echo "<td>".$row['telefono']."</td>";
				    echo "<td>".$row['dir']."</td>";
				    echo '<td><i class="fas fa-pencil-alt pedit" data-bs-toggle="modal" data-bs-target="#editProviderModal"></i> <i class="fas fa-trash-alt pdel"></i></td>';
			    echo "</tr>";
			}
        }
	}

	$provider = new Providers();
?>