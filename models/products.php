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
	}

	$product = new Products();
?>