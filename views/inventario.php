<div class="inventory-panel">
    <!-- Tabs -->
    <ul class="nav nav-tabs flex-colum justify-content-around" role="tablist">
        <li class="nav-item" role="presentation">
            <a href="#productList" class="nav-link active" data-bs-toggle="tab" data-bs-target="#productList" type="button" role="tab" aria-selected="true"><i class="fas fa-warehouse"></i> Inventario</a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="#addProduct" class="nav-link" data-bs-toggle="tab" data-bs-target="#addProduct" type="button" role="tab" aria-selected="false"><i class="fas fa-box"></i> Añadir producto</a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="#editProduct" class="nav-link" data-bs-toggle="tab" data-bs-target="#editProduct" type="button" role="tab" aria-selected="false"><i class="fas fa-edit"></i> Editar producto</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade show active card" id="productList" role="tabpanel">
            <div class="product-table table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Existencia</th>
                            <th>Precio de costo</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php
							$product->showList();
						?>

                        <!--<tr>
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
                        </tr>-->
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
            <form action="" id="pform" method="POST" class="d-flex flex-column">
                <div class="form-group mb-3">
                    <label for="pcodeInput" class="form-label">Código de producto</label>
                    <input type="text" class="form-control" id="pcodeInput" name="cod_barras" aria-describedby="pcodHelp" placeholder="0000000000">
                    <div id="pcodHelp" class="form-text"></div>
                </div>

                <div class="form-group row mb-3">
                    <div class="col-5">
                        <label for="pnameInput" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="pnameInput" name="nombre" aria-describedby="pnameHelp" required>
                        <div id="pnameHelp" class="form-text"></div>
                    </div>
                    <div class="col-4">
                        <label for="pnameInput" class="form-label">Marca</label>
                        <div class="input-group mb-3">
                            <input class="form-control" list="brand-list" name="marca" id="brandNameInput" required>
                            <datalist id="brand-list">
                                <?php
                                   $brands = $database->sqlQuery("SELECT nombre from marcas");

                                    while ($row = $brands->fetch(PDO::FETCH_ASSOC))  {
                                        echo "<option value=".$row['nombre'].">";
                                    }
                                ?>
                            </datalist>
                            <button class="btn btn-outline-secondary" type="button" onClick="addBrand()"><i class="fas fa-solid fa-plus"></i></button>
                        </div>
                        <div id="pBrandHelp" class="form-text"></div>
                    </div>
                    <div class="col-3">
                        <label for="existInput" class="form-label">Existencia</label>
                        <input type="number" class="form-control" id="existInput" name="existencia" min="0" step="1" placeholder="0" disabled>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <div class="col-6">
                        <label for="pdescInput" class="form-label">Descripción</label>
                        <textarea class="form-control" id="pdescInput" name="descripcion" aria-describedby="pdescHelp"></textarea>
                        <div id="pdescHelp" class="form-text"></div>
                    </div>
                    <div class="col-3">
                        <label for="precunitInput" class="form-label">Precio unitario</label>
                        <input type="number" class="form-control" id="precunitInput" name="prec_unit" min="1" step="0.01" aria-describedby="precunitHelp" required>
                        <div id="precunitHelp" class="form-text"></div>
                    </div>
                    <div class="col-3">
                        <label for="preccostInput" class="form-label">Precio de costo</label>
                        <input type="number" class="form-control" id="preccostInput" name="prec_proveedor" min="1" step="0.01" aria-describedby="precunitHelp" required>
                        <div id="preccostHelp" class="form-text"></div>
                    </div>
                </div>

                <div class="button-row d-flex justify-content-end mt-4">
                    <input type="reset" class="btn btn-light">
                    <button type="submit" class="btn btn-gradient-primary-color" name="agregar">Agregar</button>
                </div>
            </form>
        </div>
        <!-- Modal: Add employer -->
        <div class="modal fade" id="addEmpModal" tabindex="-1" aria-labelledby="addEmpModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!-- Header -->
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title" id="exampleModalLabel">Marcas</h5>
                            <p class="text-sm">Selecciona o agrega una nueva marca.</p>
                        </div>
                        <i class="fas fa-times" data-bs-dismiss="modal" aria-label="Close"></i>
                    </div>
                    <!-- Content -->
                    <div class="modal-body">
                    	<div class="d-flex flex-column">
                    		<div class="row mr-3">
                    			<div class="col-5 brands-list">
                    				Aja<br>
                    				Aja<br>
                    				Aja<br>
                    				Aja<br>
                    				Aja<br>
                    				Aja<br>
                    				Aja<br>
                    				Aja<br>
                    				Aja<br>
                    			</div>
                    			<div class="col-7">
                    				Aja
                    			</div>
                    		</div>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Edit product -->
        <div class="tab-pane fade card card-forms" id="editProduct" role="tabpanel">
            <div class="card-header">
                <h5>Editar producto</h5>
                <p class="text-sm">Seleccione el producto a editar y modifique su información.</p>
            </div>
            <form id="pditform" method="POST" class="d-flex flex-column">
                <div class="form-group mb-3">
                    <label for="searchCodProd" class="form-label">Producto</label>
                    <input class="form-control" list="searchCodProdInput" placeholder="Ingrese codigo o nombre de producto..." required>
                    <datalist id="searchCodProdInput">
                        <option>00001 - Termostato</option>
                        <option>00002 - Platano</option>
                    </datalist>
                </div>

                <div class="form-group row mb-3">
                    <div class="col-9">
                        <label for="pditnameInput" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="pditnameInput" name="nombre" aria-describedby="pditnameHelp" required>
                        <div id="pditnameHelp" class="form-text"></div>
                    </div>
                    <div class="col-3">
                        <label for="pditExistInput" class="form-label">Existencia</label>
                        <input type="number" class="form-control" id="pditExistInput" name="existencia" placeholder="0" disabled>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <div class="col-6">
                        <label for="pditDescInput" class="form-label">Descripción</label>
                        <textarea class="form-control" id="pditDescInput" name="descripcion" aria-describedby="pditDescHelp"></textarea>
                        <div id="pditDescHelp" class="form-text"></div>
                    </div>
                    <div class="col-3">
                        <label for="ditprecunitInput" class="form-label">Precio unitario</label>
                        <input type="number" class="form-control" id="ditprecunitInput" name="prec_unit" min="1" step="0.01" aria-describedby="ditprecunitHelp" required>
                        <div id="ditprecunitHelp" class="form-text"></div>
                    </div>
                    <div class="col-3">
                        <label for="ditpreccostInput" class="form-label">Precio de costo</label>
                        <input type="number" class="form-control" id="ditpreccostInput" name="prec_proveedor" min="1" step="0.01" aria-describedby="precunitHelp" required>
                        <div id="ditpreccostHelp" class="form-text"></div>
                    </div>
                </div>

                <div class="button-row d-flex justify-content-end mt-4">
                    <input type="reset" class="btn btn-light">
                    <button type="submit" class="btn btn-gradient-primary-color" name="agregar">Editar</button>
                </div>
            </form>
        </div>
    </div>
<!--    <div class="card">
            
	</div>-->

</div>

<script type="text/javascript">
    /***************************************
              Edit product action
    ***************************************/

    window.onload = (function () {
        $('.pedit').click(function () {
            //window.location.replace(`?pagina=inventario#editProduct`);
            window.location.href = '?pagina=inventario#editProduct';
        })
    });
</script>