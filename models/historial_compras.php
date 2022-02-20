<?php
	require_once('models/bd.php');

	class Purchases extends Database {
		public function add($clients, $products, $amount) {
			$BD = $this->connectBD();
			$BD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			try {
				$fecha = date('Y-m-d');
				$tamano = count($products);
				$guarda = $BD->query("insert into ventas(fecha, cantidad_producto, doc_cliente) values ('$fecha', '$tamano','$clients')");
		   		$lid = $BD->lastInsertId();

				for($i = 0; $i < $tamano; $i++){
				   $cod_query = $BD->prepare("SELECT cod FROM `productos` WHERE nombre = '$products[$i]'");
				   $cod_query->execute();
				   $product = 0;

					while ($row = $cod_query->fetch(PDO::FETCH_ASSOC))  {
					    $cod_product = $row['cod'];
					}

					$gd = $BD->query("insert into `producto_vendido`
				   (cantidad, n_factura, cod_producto)
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

		public function showbuy() {
			$BD = $this->connectBD();
			$BD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			try {
				if(isset($_POST['detalles'])){

					$detalles = $_POST['detalles'];

					$producs = $BD->query("Select * from `compras` WHERE `id` = '$detalles'");

					if ($producs) {
						$results = '';
	
							foreach ($producs as $produc) {
								$results = $results."<tr>";
									$results = $results."<td>";
										$results = $results.$produc['id']; 
									$results = $results."</td>";
									$results = $results."<td>";
										$results = $results.$produc['doc_proveedor'];
									$results = $results."</td>";
									$results = $results."<td>";
										$results = $results.$produc['total_pagar'];
									$results = $results."</td>";
									$results = $results."<td>";
										$results = $results.$produc['fecha'];
									$results = $results."</td>";
								$results = $results."</tr>";
							}
	
						return $results;
					}
				}
				else if(isset($_POST['start'])&&isset($_POST['end'])){

					$start = $_POST['start'];
					$end = $_POST['end'];

					$producs = $BD->query("Select * from `compras` WHERE `fecha` > '$start' AND `fecha` < '$end'");

					if ($producs) {
						$results = '';
	
							foreach ($producs as $produc) {
								$results = $results."<tr>";
									$results = $results."<td>";
										$results = $results.$produc['id']; 
									$results = $results."</td>";
									$results = $results."<td>";
										$results = $results.$produc['doc_proveedor'];
									$results = $results."</td>";
									$results = $results."<td>";
										$results = $results.$produc['total_pagar'];
									$results = $results."</td>";
									$results = $results."<td>";
										$results = $results.$produc['fecha'];
									$results = $results."</td>";
								$results = $results."</tr>";
							}
	
						return $results;
					}

				}
				else{
					$producs = $BD->query("Select * from compras");

					if ($producs) {
					$results = '';

						foreach ($producs as $produc) {
							$results = $results."<tr>";
								$results = $results."<td>";
									$results = $results.$produc['id']; 
								$results = $results."</td>";
								$results = $results."<td>";
									$results = $results.$produc['doc_proveedor'];
								$results = $results."</td>";
								$results = $results."<td>";
									$results = $results.$produc['total_pagar'];
								$results = $results."</td>";
								$results = $results."<td>";
									$results = $results.$produc['fecha'];
								$results = $results."</td>";
							$results = $results."</tr>";
						}

					return $results;
					}
				}
				
			} catch(Exception $e){
			   return $e->getMessage();
		   }
		}

		public function showdeta() {
			$BD = $this->connectBD();
			$BD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			try {

				if(isset($_POST['start'])&&isset($_POST['end'])){

					$start = $_POST['start'];
					$end = $_POST['end'];

					$producs = $BD->query("Select * from `compras` WHERE `fecha` > '$start' AND `fecha` < '$end'");

					if ($producs) {
						$results = '';
	
							foreach ($producs as $produc) {
								$results = $results."<tr style='cursor:pointer' onclick='colocaproducto(this);'>";
									$results = $results."<td>";
										$results = $results.$produc['id']; 
									$results = $results."</td>";
									$results = $results."<td>";
										$results = $results.$produc['doc_proveedor'];
									$results = $results."</td>";
									$results = $results."<td>";
										$results = $results.$produc['total_pagar'];
									$results = $results."</td>";
									$results = $results."<td>";
										$results = $results.$produc['fecha'];
									$results = $results."</td>";
								$results = $results."</tr>";
							}
	
						return $results;
					}

				}
				
			} catch(Exception $e){
			   return $e->getMessage();
		   }
		}
	 }

	 
?>