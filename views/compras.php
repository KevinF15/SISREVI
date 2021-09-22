<div class="orders-panel">
	<!-- Tabs -->
	<ul class="nav nav-tabs flex-colum justify-content-around" role="tablist">
		<li class="nav-item" role="presentation">
			<a href="#newOrder" class="nav-link active" data-bs-toggle="tab" data-bs-target="#newOrder" type="button" role="tab" aria-selected="false"><i class="fas fa-truck-loading"></i> Realizar pedido</a>
		</li>
		<li class="nav-item" role="presentation">
			<a href="#orderHistory" class="nav-link" data-bs-toggle="tab" data-bs-target="#orderHistory" type="button" role="tab" aria-selected="true"><i class="fas fa-book"></i> Historial</a>
		</li>
	</ul>
	<div class="tab-content">
		<!-- New order -->
		<div class="tab-pane fade show active card" id="newOrder" role="tabpanel">
			<form id="addOrderForm" method="POST" class="d-flex flex-column">
				<ul class="nav-op-ven">
					<li>
						<div class="form-group mb-3">
							<label for="searchProviderInput" class="form-label">Proveedor</label>
							<input class="form-control" list="searchProviderInput" placeholder="Cedula / RIF" required>
		                    <datalist id="searchProviderInput">
		                        <option>V-15785658 - Fernando Garcia</option>
		                        <option>J-30415457-5 - Filomena Sanchez</option>
		                    </datalist>
						</div>
					</li>
					<li id="pelo">
						<label class="form-label">Nombre</label> <br>
						<a id="providerName">
							<?php 
								echo "kevin de minecraft";
							?>
						</a>
					</li>
				</ul>
				
				<!-- Button: Add product -->
				<div data-bs-toggle="modal" data-bs-target="#addProdModal">
					<div class="btn-float" data-bs-toggle="tooltip" data-bs-placement="left" title="Agregar producto">              
						<i class="fas fa-plus"></i>
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
											<td>termostaro</td>
											<td>P1125 maxwel para neveras de 1-3 puertas</td>
											<td>23</td>
											<td>234234234$</td>
										</tr>
										<tr>
											<td>platano</td>
											<td>verde</td>
											<td>32</td>
											<td>23423434$</td>
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

				<div class="order table-responsive">
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
								<td>termostaro</td>
								<td>P1125 maxwel para neveras de 1-3 puertas</td>
								<td><input type="number" class="form-control productAmount" id="salesAmInput" name="existencia" min="1" step="1" required></td>
								<td>234234234$</td>
								<td>mucha plata</td>
								<td></td>
								<td><i class="fas fa-trash-alt" href="#editProduct" id="papelera"></i></td>
							</tr>
							<tr class="ventas">
								<td>platano</td>
								<td>verde</td>
								<td><input type="number" class="form-control productAmount" id="salesAmInput" name="existencia" min="1" step="1" required></td>
								<td>23423434$</td>
								<td>mucha money</td>
								<td></td>
								<td><i class="fas fa-trash-alt" href="#editProduct" id="papelera"></i></td>
							</tr>
						</tbody>
					</table>
				</div>

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
								<h6>IVA:</h6>
								<h6>TOTAL:</h6>
							</div>
						</td>
					</tr>
				</table>
			</form>
		</div>

		<!-- Order history -->
		<div class="tab-pane fade card" id="orderHistory" role="tabpanel">
			<div class="card-header">
				<h5>Historial de pedidos</h5>
			</div>
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
						<td>mucha plata</td>
						<td>ayer</td>
						<td>
							<i class="fas fa-eye" href="#editProduct" id="papelera"></i>
							<i class="fas fa-trash-alt" id="papelera"></i>
						</td>
					</tr>
					<tr class="ventas">
						<td>000002</td>
						<td>la dea</td>
						<td>>:)</td>
						<td>3H</td>
						<td>
							<i class="fas fa-eye" href="#editProduct" id="papelera"></i>
							<i class="fas fa-trash-alt" id="papelera"></i>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>