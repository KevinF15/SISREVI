<div>
	<div class="card">
	<form id="salesHistoryForm" method="POST" class="d-flex flex-column">
				<div class="form-group mb-3">
					<label class="form-label">Intervalo de tiempo</label>
					<div class="form-group row">
						<div class="col-3">
							<input type="datetime-local" class="form-control" id="sHistoryStart" name="start">
						</div>
						<div class="col-3">
							<input type="datetime-local" class="form-control" id="sHistoryEnd" name="end">
						</div>
						<div class="col-3">
							<button type="submit" class="btn btn-gradient-primary-color" name="Enivir">Enviar</button>
						</div>
					</div>
				</div>
			</form>
			<table class="table">
				<thead>
					<tr>
						<th>Numero de factura</th>
						<th>Metodo de pago</th>
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
			<div class="container" id="tolaes">
				<div class="row">
					<div class="col">
						<h6>TOTAL GENERAL:</h6>
						<h6>$10</h6>
					</div>
					<div class="col">
						<h6>TOTAL DIVISA:</h6>
						<h6>$10</h6>
					</div>
					<div class="col">
						<h6>TOTAL PUNTO:</h6>
						<h6>0,00 Bs.</h6>
					</div>
					<div class="col">
						<h6>TOTAL EFECTIVO:</h6>
						<h6>0,00 Bs.</h6>
					</div>
				</div>
			</div>
		</div>
</div>