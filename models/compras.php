<?php
	require_once('models/bd.php');

	class Purchases extends Database {
	 	public function showProviders() {
	 		$BD = $this->connectBD();
	 		$BD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	 		try {
	 			$providers = $BD->query("Select * from proveedores");

	 			if ($providers) {
	 				$results = '';

	 				foreach ($providers as $provider) {
	 					$results .= '<option>'.$provider['rif']." - ".$provider['nombre'].'</option>';
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