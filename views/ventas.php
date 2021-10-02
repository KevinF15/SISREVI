<div class="sales-panel">
	<!-- Tabs -->
	<ul class="nav nav-tabs flex-colum justify-content-around" role="tablist">
		<li class="nav-item" role="presentation">
			<a href="#newSale" class="nav-link active" data-bs-toggle="tab" data-bs-target="#newSale" type="button" role="tab" aria-selected="true"><i class="fas fa-shopping-cart"></i> Nueva venta</a>
		</li>
		<li class="nav-item" role="presentation">
			<a href="#salesHistory" class="nav-link" data-bs-toggle="tab" data-bs-target="#salesHistory" type="button" role="tab" aria-selected="false"><i class="fas fa-book"></i> Historial</a>
		</li>
	</ul>

	<div class="tab-content">
		<div class="tab-pane fade show active card" id="newSale" role="tabpanel">
			<form id="newSaleForm" method="POST" class="d-flex flex-column">
				<ul class="nav-op-ven">
					<li>
						<div class="form-group mb-3">
							<label for="searchClientInput" class="form-label">Cliente</label>
							<input class="form-control" list="searchClientInput" placeholder="Cedula / RIF" required>
		                    <datalist id="searchClientInput">
		                        <option>V-15785658 - Fernando Garcia</option>
		                        <option>J-30415457-5 - Filomena Sanchez</option>
		                    </datalist>
						</div>
					</li>
					<li id="pelo">
						<label for="clientName" class="form-label">Nombre</label> <br>
						<a id="clientName">
							<?php 
								echo "Fernando Garcia";
							?>
						</a>
					</li>
				</ul> 

				<!-- Button: Add product -->
				<div data-bs-toggle="modal" data-bs-target="#addProdModal">
					<div class="btn-float" data-bs-toggle="tooltip" data-bs-placement="left" title="Agregar producto">              
						<i class="fas fa-cart-plus"></i>
					</div>
				</div>

				<!-- Modal: Add product -->
				<div class="modal fade" id="addProdModal" tabindex="-1" aria-labelledby="addProdModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<!-- Header -->
							<div class="modal-header">
								<div>
									<h5 class="modal-title" id="exampleModalLabel">Lista de productos</h5>
									<p class="text-sm">Seleccione un producto de la lista para agregarlo.</p>
								</div>
								<i class="fas fa-times" data-bs-dismiss="modal" aria-label="Close"></i>
							</div>
							<!-- Content -->
							<div class="modal-body">
								<table class="table table-responsive">
									<thead>
										<tr>
											<th>Nombre</th>
											<th>Descripcion</th>
											<th>Existencia</th>
											<th>Precio unitario</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Termostaro</td>
											<td>P1125 maxwel para neveras de 1-3 puertas.</td>
											<td>23</td>
											<td>12,00 Bs.</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- Footer -->
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
							</div>
						</div>
					</div>
				</div>

				<table class="table">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Descripcion</th>
							<th>Cantidad</th>
							<th>Precio c/u</th>
							<th>IVA</th>
							<th>total</th>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr class="ventas">
							<td>Termostaro</td>
							<td>P1125 maxwel para neveras de 1-3 puertas.</td>
							<td><input type="number" class="form-control productAmount" id="salesAmInput" name="existencia" min="1" step="1" required></td>
							<td>12,00 Bs.</td>
							<td>0,0 Bs.</td>
							<td>24,00 Bs.</td>
							<td><i class="fas fa-trash-alt" href="#editProduct" id="papelera"></i></td>
						</tr>
					</tbody>
				</table>
					<table>
					<tr>
						<td>
							<ul class="nav-op-ven">
								 <li>
									<button type="submit" class="btn btn-gradient-primary-color" name="registrar">Registrar</button>
								</li>
							</ul>
						</td>
						<td>
							<div class="tab-content" id="total">
								<h6>IVA: 0,00 Bs.</h6>
								<h6>TOTAL: 24,00 Bs.</h6>
							</div>
						</td>
					</tr>
				</table>
			</form>
		</div>
			
		<div class="tab-pane fade card" id="salesHistory" role="tabpanel">
			<div class="card-header">
				<h5>Historial de ventas</h5>
			</div>
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
</div>