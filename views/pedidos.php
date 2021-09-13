<div class="providers-panel">
	<!-- Tabs -->
	<ul class="nav nav-tabs flex-colum justify-content-around" role="tablist">
		<li class="nav-item" role="presentation">
			<a href="#newSale" class="nav-link active" data-bs-toggle="tab" data-bs-target="#newOrder" type="button" role="tab" aria-selected="false"><i class="fas fa-truck-loading"></i> Crear pedido</a>
		</li>
		<li class="nav-item" role="presentation">
			<a href="#salesHistory" class="nav-link" data-bs-toggle="tab" data-bs-target="#orderHistory" type="button" role="tab" aria-selected="true"><i class="fas fa-book"></i> Historial</a>
		</li>
		<li class="nav-item" role="presentation">
			<a href="#providers" class="nav-link" data-bs-toggle="tab" data-bs-target="#providers" type="button" role="tab" aria-selected="false"><i class="fas fa-people-carry"></i> Proveedores</a>
		</li>
	</ul>
	<div class="tab-content">
		<!-- New order -->
		<div class="tab-pane fade show active card" id="newOrder" role="tabpanel">
			<form method="POST" class="d-flex flex-column">
				<ul class="nav-op-ven">
                    <li>
                        <div class="form-group mb-3">
                            <label for="pcodeInput" class="form-label">Proveedor</label>
                                <input type="text" class="form-control" id="pcodeInput" name="cod" aria-describedby="codHelp" placeholder="RIF">
                            <div id="codHelp" class="form-text"></div>
                        </div>
                    </li>
                    <li id="pelo">
                        <label for="pcodeInput" class="form-label">Nombre</label> <br>
                        <a id="nombre">
                            <?php 
                                echo "kevin de minecraft";
                            ?>
                        </a>
                    </li>
                </ul>
				<div class="modal fade" id="productsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
					  <div class="modal-header text-light bg-info">
						<h5 class="modal-title" id="productsModalLabel">Listado de productos</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					  </div>
					  <div class="modal-body">
						<table class="table table-striped table-hover">
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
							</table>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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
								<td>1</td>
								<td>234234234$</td>
								<td>mucha plata</td>
								<td></td>
								<td><i class="fas fa-trash-alt" href="#editProduct" id="papelera"></i></td>
							</tr>
							<tr class="ventas">
								<td>platano</td>
								<td>verde</td>
								<td>2</td>
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
									<button type="button" class="btn btn-gradient-primary-color" data-bs-toggle="modal" data-bs-target="#productsModal">Agregar</button>
								</li>
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
            <div class="card-head">
            	<h5 class="mb-3">Historial de pedidos</h5>
            </div>
            <form method="POST" class="d-flex flex-column">
                <div class="form-group mb-3">
                    <label for="pcodeInput" class="form-label">Intervalo de tiempo</label>
                    <div class="form-group row">
                        <div class="col-3">
                            <input type="datetime-local" class="form-control" id="pcodeInput" name="cod">
                        </div>
                        <div class="col-3">
                            <input type="datetime-local" name="tiempo_maximo" class="form-control" id="pcodeInput">
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
            </table>
        </div>
        <!-- Providers list -->
        <div class="tab-pane fade card" id="providers" role="tabpanel">
            <div class="card-head">
            	<h5 class="mb-3">Lista de proveedores</h5>
            </div>
            <form method="POST" class="d-flex flex-column">
                <div class="modal fade" tabindex="-1" role="dialog"  id="modal1">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-header text-light bg-info">
                            <h5 class="modal-title">Listado de productos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-content" id="modal1">
                            <table class="table table-striped table-hover">
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
                            </table>
                        </div>
                        <div class="modal-footer bg-light">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>RIF</th>
                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <td width="100px"></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="ventas">
                            <td>j-654546</td>
                            <td>Elnegro</td>
                            <td>frente a la casa del blanco</td>
                            <td>noc :V</td>
                            <td><i class="fas fa-trash-alt" href="#editProduct" id="papelera"></i><i class="fas fa-pencil-alt pedit" id="papelera"></i></td>
                        </tr>
                        <tr class="ventas">
                            <td>platano</td>
                            <td>verde</td>
                            <td>2</td>
                            <td>23423434$</td>
                            <td><i class="fas fa-trash-alt" href="#editProduct" id="papelera"></i><i class="fas fa-pencil-alt pedit" id="papelera"></i></td>
                        </tr>
                </table>
				<div>
					<button type="button" class="btn btn-gradient-primary-color" data-bs-toggle="modal" data-bs-target="#proveeModal">Registar nuevo</button>
				</div>
				<div class="modal fade" id="proveeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
					  <div class="modal-header text-light bg-info">
						<h5 class="modal-title" id="productsModalLabel">Registrar nuevo proveedor</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					  </div>
					  <div class="modal-body">
                                    <form method="POST" class="d-flex flex-column">
                                        <div>
                                            <label for="pcodeInput" class="form-label">RIF</label>
                                            <input type="text" class="form-control" id="pcodeInput" name="cod" aria-describedby="codHelp" placeholder="j-000000000">
                                            <div id="codHelp" class="form-text"></div>
                                        </div>
                                        <div>
                                            <label for="pnameInput" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" id="pnameInput" name="nombre" aria-describedby="nameHelp">
                                            <div id="nameHelp" class="form-text"></div>
                                        </div>
                                        <div>
                                            <label for="pnameInput" class="form-label">Telefono</label>
                                            <input type="text" class="form-control" id="existInput" name="existencia" min="0" step="1" aria-describedby="existHelp">
                                            <div id="existHelp" class="form-text"></div>
                                        </div>
                                        <div>
                                            <label for="pnameInput" class="form-label">Direccion</label>
                                            <textarea class="form-control" id="pdescInput" name="descripcion" aria-describedby="descHelp"></textarea>
                                            <div id="descHelp" class="form-text"></div>
                                        </div>
                                        <div class="button-row d-flex justify-content-end mt-4">
                                            <input type="reset" class="btn btn-light">
                                            <button type="submit" class="btn btn-gradient-primary-color" name="Registar">Registar</button>
                                        </div>
                                    </form>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
					  </div>
					</div>
				</div>
				</div>
            </form>
        </div>
	</div>
</div>