<div class="orders-panel">
	<div class="card" id="newOrder" role="tabpanel">
			<form id="addOrderForm" method="POST" class="d-flex flex-column">
				<ul class="nav-op-ven">
					<li>
						<div class="form-group mb-3">
							<label for="searchProviderInput" class="form-label">Proveedor</label>
							<input class="form-control" list="searchProviderInput" placeholder="Cedula / RIF" required>
		                    <datalist id="searchProviderInput">
		                    	<!--<option>V-15785658 - Fernando Garcia</option>
		                        <option>J-30415457-5 - Filomena Sanchez</option>-->
		                        <?php
		                        	echo $purchase->showProviders();
		                        ?>
		                    </datalist>
						</div>
					</li>
					<li id="pelo">
						<label class="form-label">Nombre</label> <br>
						<a id="providerName">
							Seleccione proveedor
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
											<th>Precio proveedor</th>
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

				<div class="order table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Descripcion</th>
								<th>Cantidad</th>
								<th>Precio proveedor</th>
								<th>total</th>
								<td></td>
							</tr>
						</thead>
						<tbody id="detalledeventa">

						</tbody>
					</table>
				</div>

				<table>
					<tr>
						<td>
							<ul class="nav-op-ven">
								<li>
									<button type="submit" class="btn btn-gradient-primary-color" name="registrar">Agregar</button>
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
	</div>
</div>