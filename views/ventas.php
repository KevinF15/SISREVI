<div class="sales-panel">
		<div class="card">
			<form id="newSaleForm" method="POST" class="d-flex flex-column">
				<ul class="nav-op-ven">
					<li>
						<div class="form-group mb-3">
							<label for="searchClientInput" class="form-label">Cliente</label>
							<input class="form-control" list="searchClientInput" placeholder="Cedula / RIF" name="clients" required>
		                    <datalist id="searchClientInput">
								<?php
		                        	echo $purchase->showcliens();
		                        ?>
		                    </datalist>
						</div>
					</li>
					<li id="pelo">
						<label for="metodo" class="form-label">Metodo de pago</label> <br>
						<input class="form-control" list="metodo" placeholder="Seleccione metodo" name="metod" id="metod" required>
		                    <datalist id="metodo">
		                        <option>Efectivo</option>
		                        <option>Divisa</option>
								<option>Punto debito</option>
								<option>Punto credito</option>
								<option>Transferencia</option>
								<option>Pago movil</option>
		                    </datalist>
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
											<?php
												echo $purchase->showProducs();
											?>
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

				<table class="table" id="detallecompra">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Descripcion</th>
							<th>Cantidad</th>
							<th>Precio c/u</th>
							<th>total</th>
							<td></td>
						</tr>
					</thead>
					<tbody id="detalledeventa">
						
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
								<h6>TOTAL: <span id="sumatotal"></span>Bs.</h6>
								<h6>TOTAL:<span id="sumatotal2"></span>$.</h6>
							</div>
						</td>
					</tr>
				</table>
			</form>
			<script type="text/javascript" src="js/ventas1.js"></script>
		</div>
</div>