<?php
	class Products extends Database {
		public function addProduct($cod, $name, $brand, $stock, $precunit, $cost, $desc) {
			$brandCod = $this->sqlQuery("SELECT cod FROM marcas WHERE nombre = '".$brand."'");
			$brandCod = $brandCod->fetch()[0];

			$this->sqlQuery("INSERT INTO productos(cod_barras, nombre, cod_marca, existencia, prec_unit, prec_proveedor, descripcion) VALUES ('".$cod."','".$name."', '".$brandCod."', '".$stock."', '".$precunit."', '".$cost."', '".$desc."')");
		}

		public function delete($id, $field, $table) {
			$this->sqlQuery("DELETE FROM ".$table." WHERE ".$field." = '".$id."'");
		}

		public function addBrand($name) {
			$this->sqlQuery("INSERT INTO marcas(nombre) VALUES ('".$name."')");
		}

		public function showList() {
			$query = $this->sqlQuery("SELECT cod, cod_barras, nombre, cod_marca, existencia, prec_proveedor, descripcion from productos");

			while ($row = $query->fetch(PDO::FETCH_ASSOC))  {
				if ($row['existencia'] == 0) $row['existencia'] = '<div class="sout">Agotado</div>';

				echo "<tr class=productDataRow data-id=".$row['cod'].">";
			    echo "<td>".$row['cod_barras']."</td>";
			    echo "<td>".$row['nombre']."</td>";
			    echo "<td>".$row['descripcion']."</td>";
			    echo "<td>".$row['existencia']."</td>";
			    echo "<td>".$row['prec_proveedor']."</td>";
			    echo '<td><i class="fas fa-pencil-alt pedit" data-bs-toggle="modal" data-bs-target="#editEmpModal"></i> <i class="fas fa-trash-alt pdel"></i></td>';
			    echo "</tr>";
			}
		}
	}

	$product = new Products();
?>