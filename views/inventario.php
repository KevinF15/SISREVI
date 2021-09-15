<div class="inventory-panel">
    <!-- Tabs -->
	<ul class="nav nav-tabs flex-colum justify-content-around" role="tablist">
		<li class="nav-item" role="presentation">
			<a href="#productList" class="nav-link active" data-bs-toggle="tab" data-bs-target="#productList" type="button" role="tab" aria-selected="true"><i class="fas fa-boxes"></i> Productos en almacen</a>
		</li>
		<li class="nav-item" role="presentation">
			<a href="#addProduct" class="nav-link" data-bs-toggle="tab" data-bs-target="#addProduct" type="button" role="tab" aria-selected="false"><i class="fas fa-box"></i> Añadir producto</a>
		</li>
		<li class="nav-item" role="presentation">
			<a href="#editProduct" class="nav-link" data-bs-toggle="tab" data-bs-target="#editProduct" type="button" role="tab" aria-selected="false"><i class="fas fa-edit"></i> Editar producto</a>
		</li>
	</ul>
	<div class="tab-content">
        <!-- Product list -->
		<div class="tab-pane fade show active card" id="productList" role="tabpanel">
            <div class="product-table table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Existencia</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0001</td>
                            <td>Lorem ipsum</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ...</td>
                            <td>5</td>
                            <td>4.859.658,77 Bs.</td>
                            <td><i class="fas fa-pencil-alt pedit"></i> <i class="fas fa-trash-alt pdel"></i></td>
                        </tr>
                        <tr>
                            <td>0002</td>
                            <td>Dolor sit</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ...</td>
                            <td><div class="sout">Agotado</div></td>
                            <td>4.859.658,77 Bs.</td>
                            <td><i class="fas fa-pencil-alt pedit"></i> <i class="fas fa-trash-alt pdel"></i></td>
                        </tr>
                        <tr>
                            <td>0003</td>
                            <td>Amet consectetur</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ...</td>
                            <td>5</td>
                            <td>4.859.658,77 Bs.</td>
                            <td><i class="fas fa-pencil-alt pedit"></i> <i class="fas fa-trash-alt pdel"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Add product -->
		<div class="tab-pane fade card card-forms" id="addProduct" role="tabpanel">
            <div class="card-header">
                <h5>Añadir producto</h5>
                <p class="text-sm">Inserte la información especificada</p>
            </div>
            <form action="" method="POST" class="d-flex flex-column">
                <div class="form-group mb-3">
                    <label for="pcodeInput" class="form-label">Código de producto</label>
                    <input type="text" class="form-control" id="pcodeInput" name="cod" aria-describedby="codHelp" placeholder="0000000000" disabled>
                    <div id="codHelp" class="form-text"></div>
                </div>

                <div class="form-group row mb-3">
                    <div class="col-9">
                        <label for="pnameInput" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="pnameInput" name="nombre" aria-describedby="pnameHelp">
                        <div id="pnameHelp" class="form-text"></div>
                    </div>
                    <div class="col-3">
                        <label for="existInput" class="form-label">Cantidad</label>
                        <input type="number" class="form-control" id="existInput" name="existencia" min="0" step="1" aria-describedby="existHelp">
                        <div id="existHelp" class="form-text"></div>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <div class="col-9">
                        <label for="pdescInput" class="form-label">Descripción</label>
                        <textarea class="form-control" id="pdescInput" name="descripcion" aria-describedby="pdescHelp"></textarea>
                        <div id="pdescHelp" class="form-text"></div>
                    </div>
                    <div class="col-3">
                        <label for="precunitInput" class="form-label">Precio unitario</label>
                        <input type="number" class="form-control" id="precunitInput" name="prec_unit" min="1" step="0.01" aria-describedby="precunitHelp">
                        <div id="precunitHelp" class="form-text"></div>
                    </div>
                </div>

                <div class="button-row d-flex justify-content-end mt-4">
                    <input type="reset" class="btn btn-light">
                    <button type="submit" class="btn btn-gradient-primary-color" name="agregar">Agregar</button>
                </div>
            </form>
        </div>
        <!-- Edit product -->
		<div class="tab-pane fade card card-forms" id="editProduct" role="tabpanel">
			<div class="card-header">
                <h5>Editar producto</h5>
                <p class="text-sm">Seleccione el producto a editar y modifique su información.</p>
            </div>
            <form method="POST" class="d-flex flex-column">
                <div class="form-group mb-3">
                    <label for="pcodeInput" class="form-label">Producto</label>
                    <input class="form-control" list="searchCodProd" placeholder="Ingrese codigo o nombre de producto...">
                    <datalist id="searchCodProd">
                        <option>00001 - Termostato</option>
                        <option>00002 - Platano</option>
                    </datalist>
                    <div id="codHelp" class="form-text"></div>
                </div>

                <div class="form-group row mb-3">
                    <div class="col-9">
                        <label for="pnameInput" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="pnameInput" name="nombre" aria-describedby="nameHelp">
                        <div id="nameHelp" class="form-text"></div>
                    </div>
                    <div class="col-3">
                        <label for="pnameInput" class="form-label">Cantidad</label>
                        <input type="number" class="form-control" id="existInput" name="existencia" min="0" step="1" aria-describedby="existHelp">
                        <div id="existHelp" class="form-text"></div>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <div class="col-9">
                        <label for="pnameInput" class="form-label">Descripción</label>
                        <textarea class="form-control" id="pdescInput" name="descripcion" aria-describedby="descHelp"></textarea>
                        <div id="descHelp" class="form-text"></div>
                    </div>
                    <div class="col-3">
                        <label for="precunitInput" class="form-label">Precio unitario</label>
                        <input type="number" class="form-control" id="precunitInput" name="prec_unit" min="1" step="0.01" aria-describedby="existHelp">
                        <div id="nameHelp" class="form-text"></div>
                    </div>
                </div>

                <div class="button-row d-flex justify-content-end mt-4">
                    <input type="reset" class="btn btn-light">
                    <button type="submit" class="btn btn-gradient-primary-color" name="agregar">Agregar</button>
                </div>
            </form>
		</div>
	</div>
</div>