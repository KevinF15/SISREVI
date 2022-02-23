<?php
	class Employees extends Database {
		public function create($name, $doc, $type, $dir, $tel) {
			try {
				$this->sqlQuery("INSERT INTO empleados(cedula, nombre, cargo, telefono, dir) VALUES ('".$name."', '".$doc."', '".$type."', '".$dir."', '".$tel."')");
			} catch (Exception $e){
				return $e->getMessage();
			}
		}

		public function delete($doc) {
			$this->sqlQuery("DELETE FROM empleados WHERE cedula='".$doc."'");
		}

		public function checkIfExist($doc) {
        	$val = $this->sqlQuery("SELECT count(cedula) FROM empleados WHERE cedula='".$doc."'");
        	$val = $val->fetchColumn();

        	if ($val > 0) return true;
        	return false;
        }

        public function showList() {
        	$query = $this->sqlQuery("SELECT cedula, nombre, cargo, telefono, dir from empleados");

			while ($row = $query->fetch(PDO::FETCH_ASSOC))  {
				echo "<tr class=userDataRow data-id=".$row['cedula'].">";
				    echo "<td>".$row['cedula']."</td>";
				    echo "<td>".$row['nombre']."</td>";
				    echo "<td>".$row['cargo']."</td>";
				    echo "<td>".$row['telefono']."</td>";
				    echo "<td>".$row['dir']."</td>";
				    echo '<td><i class="fas fa-pencil-alt pedit" data-bs-toggle="modal" data-bs-target="#editEmpModal"></i> <i class="fas fa-trash-alt pdel"></i></td>';
			    echo "</tr>";
			}
        }
	}

	$employer = new Employees();
?>