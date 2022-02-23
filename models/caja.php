<?php
	ob_start();
	require_once('dompdf/vendor/autoload.php');
	use Dompdf\Dompdf;

	class CashReg extends Database {
		public function createPDF($info) {
			try {
				$html = '<html>
					<head></head>
					<body>
						Fecha: '.$info['fecha'].'
						Responsable: '.$info['cajero'].'
					</body>
				<html>';
			} catch (Exception $e) {
				return $e->getMessage();
			}

			$pdf = new DOMPDF();
		 	$pdf->set_paper("A4", "portrait");
			$pdf->load_html(utf8_decode($html));
			$pdf->render();
			$pdf->stream('arqueoCaja-'.$info['fecha'].'.pdf', array("Attachment" => false));
		} 
	}

	$cashReg = new CashReg();
?>