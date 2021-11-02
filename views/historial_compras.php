<div class="orders-panel">
		<div class="card" id="orderHistory">
			<form id="histOrdForm" method="POST" class="d-flex flex-column">
				<div class="form-group mb-3">
					<label class="form-label">Intervalo de tiempo</label>
					<div class="form-group row">
							<div class="col-3">
								<input type="datetime-local" class="form-control" id="oHistoryStart" name="start">
							</div>
							<div class="col-3">
								<input type="datetime-local" class="form-control" id="oHistoryEnd" name="end">
							</div>
							<div class="col-3">
								<button type="submit" class="btn btn-gradient-primary-color" name="Enivir">Enviar</button>
							</div>
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
						<td></td>
					</tr>
				</thead>
				<tbody>
					<tr class="ventas">
						<td>000001</td>
						<td>Divisa</td>
						<td>$10</td>
						<td>09/08/2021</td>
						<td>
							<i class="fas fa-eye" href="#editProduct" id="papelera"></i>
							<i class="fas fa-backspace" id="papelera"></i>
						</td>
					</tr>
				</tbody>
			</table>
</div>