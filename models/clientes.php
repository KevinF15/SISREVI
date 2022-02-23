<?php
	class Clients extends Database {
		public function create($doc, $name, $dir, $tel) {
			try {
				$this->sqlQuery("INSERT INTO clientes(doc, nombre, dir, telefono) VALUES ('".$doc."', '".$name."', '".$dir."', '".$tel."')");
			} catch (Exception $e){
				return $e->getMessage();
			}
		}

		public function delete($doc) {
			$this->sqlQuery("DELETE FROM clientes WHERE doc='".$doc."'");
		}

		public function checkIfExist($doc) {
        	$val = $this->sqlQuery("SELECT count(doc) FROM clientes WHERE doc='".$doc."'");
        	$val = $val->fetchColumn();

        	if ($val > 0) return true;
        	return false;
        }

        public function showList() {
        	$query = $this->sqlQuery("SELECT doc, nombre, telefono, dir from clientes");

			while ($row = $query->fetch(PDO::FETCH_ASSOC))  {
				echo "<tr class=userDataRow data-id=".$row['doc'].">";
				    echo "<td>".$row['doc']."</td>";
				    echo "<td>".$row['nombre']."</td>";
				    echo "<td>".$row['telefono']."</td>";
				    echo "<td>".$row['dir']."</td>";
				    echo '<td><i class="fas fa-pencil-alt pedit" data-bs-toggle="modal" data-bs-target="#editClientModal"></i> <i class="fas fa-trash-alt pdel"></i></td>';
			    echo "</tr>";
			}
        }
	}

	$client = new Clients();
?>