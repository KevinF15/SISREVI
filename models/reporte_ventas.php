<?php
	require_once('models/bd.php');

	class Purchases extends Database {

		public function showsell() {
			$BD = $this->connectBD();
			$BD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			try {

				if(isset($_POST['start'])&&isset($_POST['end'])){

					$start = $_POST['start'];
					$end = $_POST['end'];

					$producs = $BD->query("Select * from `ventas` WHERE `fecha` > '$start' AND `fecha` < '$end'");

					if ($producs) {
						$results = '';
	
							foreach ($producs as $produc) {
								$results = $results."<tr>"; //"<tr style='cursor:pointer' onclick='colocaproducto(this);'>";
									$results = $results."<td>";
										$results = $results.$produc['n_factura']; 
									$results = $results."</td>";
									$results = $results."<td>";
										$results = $results.$produc['metodo_pago'];
									$results = $results."</td>";
									$results = $results."<td>";
										$results = $results.$produc['total_cobrar'];
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
					$producs = $BD->query("Select * from ventas");

					if ($producs) {
					$results = '';

						foreach ($producs as $produc) {
							$results = $results."<tr>"; //"<tr style='cursor:pointer' onclick='colocaproducto(this);'>";
								$results = $results."<td>";
									$results = $results.$produc['n_factura']; 
								$results = $results."</td>";
								$results = $results."<td>";
									$results = $results.$produc['metodo_pago'];
								$results = $results."</td>";
								$results = $results."<td>";
									$results = $results.$produc['total_cobrar'];
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