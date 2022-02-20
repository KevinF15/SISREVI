<div class="orders-panel">
		<div class="card" id="orderHistory">
			<form id="histOrdForm" method="POST" class="d-flex flex-column">
				<div class="form-group mb-3">
					<label class="form-label">Intervalo de tiempo</label>
					<div class="form-group row">
						<form action="filtarfechar" method="POST"><div class="col-3">
								<input type="datetime-local" class="form-control" id="oHistoryStart" name="start">
							</div>
							<div class="col-3">
								<input type="datetime-local" class="form-control" id="oHistoryEnd" name="end">
							</div>
							<div class="col-3">
								<button type="submit" class="btn btn-gradient-primary-color" name="Enivir">Enviar</button>
							</div>
						</form>
					</div>
					<div id="codHelp" class="form-text"></div>
				</div>
			</form>
			<form id="histOrdForm" method="POST" class="d-flex flex-column">
				<div class="form-group mb-3">
					<label class="form-label">ver detalles</label>
					<div class="form-group row">
						<form action="filtarfechar" method="POST">
							<div class="col-3">
								<input type="number" class="form-control" id="oHistoryStart" name="detalles">
							</div>
							<div class="col-3">
								<button type="submit" class="btn btn-gradient-primary-color" name="Enivir">Enviar</button>
							</div>
						</form>
					</div>
					<div id="codHelp" class="form-text"></div>
				</div>
			</form>
			<table class="table">
				<thead>
					<tr>
						<th>Codigo</th>
						<th>Proveedor</th>
						<th>ToTal</th>
						<th>Fecha</th>
					</tr>
				</thead>
				<tbody>
					<tr class="ventas">
						<?php
		                    echo $purchase->showbuy();
		                ?>
					</tr>
				</tbody>
			</table>
</div>