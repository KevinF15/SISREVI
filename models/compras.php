<?php
	require_once('models/bd.php');

	class Purchases extends Database {
		public function add($provider, $products, $amount) {
			$BD = $this->connectBD();
			$BD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			try {
				$fecha = date('Y-m-d');
				$tamano = count($products);
				$guarda = $BD->query("insert into compras(fecha, cantidad_producto, doc_proveedor) values ('$fecha', '$tamano','$provider')");
		   		$lid = $BD->lastInsertId();

				for($i = 0; $i < $tamano; $i++){
				   $cod_query = $BD->prepare("SELECT cod FROM `productos` WHERE nombre = '$products[$i]'");
				   $cod_query->execute();
				   $product = 0;

					while ($row = $cod_query->fetch(PDO::FETCH_ASSOC))  {
					    $cod_product = $row['cod'];
					}

					$gd = $BD->query("insert into `producto_comprado`
				   (cantidad, id_compra, cod_producto)
				   values(
				   '$amount[$i]',
			       '$lid',
				   '$cod_product'
				   )");
			   }
			} catch(Exception $e){
				return $e->getMessage();
			}

		}

	 	public function showProviders() {
	 		$BD = $this->connectBD();
	 		$BD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	 		try {
	 			$providers = $BD->query("Select * from proveedores");

	 			if ($providers) {
	 				$results = '';

	 				foreach ($providers as $provider) {
	 					$results .= '<option value="'.$provider['rif'].'">'.$provider['nombre'].'</option>';
	 				}

	 				return $results;
	 			}
	 		} catch(Exception $e){
				return $e->getMessage();
			}
	 	}

		public function showProducs() {
			$BD = $this->connectBD();
			$BD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			try {
				$producs = $BD->query("Select * from productos");

				if ($producs) {
					$results = '';

					foreach ($producs as $produc) {
						$results = $results."<tr style='cursor:pointer' onclick='colocaproducto(this);'>";
							$results = $results."<td>";
								$results = $results.$produc['nombre']; 
							$results = $results."</td>";
							$results = $results."<td>";
								$results = $results.$produc['descripcion'];
							$results = $results."</td>";
							$results = $results."<td>";
								$results = $results.$produc['existencia'];
							$results = $results."</td>";
							$results = $results."<td>";
								$results = $results.$produc['prec_proveedor'];
							$results = $results."</td>";
						$results = $results."</tr>";
					}

					return $results;
				}
			} catch(Exception $e){
			   return $e->getMessage();
		   }
		}
	 }

	 
?>