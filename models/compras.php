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
	 }
?>