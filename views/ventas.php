<div class="sales-panel">
    <!-- Tabs -->
    <ul class="nav nav-tabs flex-colum justify-content-around" role="tablist">
        <li class="nav-item" role="presentation">
            <a href="#newSale" class="nav-link" data-bs-toggle="tab" data-bs-target="#newSale" type="button" role="tab" aria-selected="false"><i class="fas fa-shopping-cart"></i> Nueva venta</a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="#salesHistory" class="nav-link active" data-bs-toggle="tab" data-bs-target="#salesHistory" type="button" role="tab" aria-selected="true"><i class="fas fa-book"></i> Historial</a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="#refunds" class="nav-link" data-bs-toggle="tab" data-bs-target="#refunds" type="button" role="tab" aria-selected="false"><i class="fas fa-backspace"></i> Devoluciones</a>
        </li>
    </ul>

    <div class="inventory-panel">
        <div class="tab-content">
            <div class="tab-pane fade show active card" id="newSale" role="tabpanel">
                <form method="POST" class="d-flex flex-column">
                    <ul class="nav-op-ven">
                        <li>
                            <div class="form-group mb-3">
                                <label for="searchClientInput" class="form-label">Cliente</label>
                                    <input type="text" class="form-control" id="searchClientInput" name="doc_cliente" aria-describedby="searchClientHelp" placeholder="Cedula/RIF">
                                <div id="searchClientHelp" class="form-text"></div>
                            </div>
                        </li>
                        <li id="pelo">
                            <label for="clientName" class="form-label">Nombre</label> <br>
                            <a id="clientName">
                                <?php 
                                    echo "Stiven de minecraft";
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
            
            <div class="tab-pane fade card" id="salesHistory" role="tabpanel">
                <div class="card-header">
                    <h5>Historial de ventas</h5>
                </div>
                <form method="POST" class="d-flex flex-column">
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
                            <td>mucha plata</td>
                            <td>ayer</td>
                            <td>
                                <i class="fas fa-eye" href="#editProduct" id="papelera"></i>
                                <i class="fas fa-backspace" id="papelera"></i>
                            </td>
                        </tr>
                        <tr class="ventas">
                            <td>000002</td>
                            <td>la dea</td>
                            <td>>:)</td>
                            <td>3H</td>
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
                            <h6>Nada tamos pelaos :,v</h6>
                        </div>
                        <div class="col">
                            <h6>TOTAL DIVISA:</h6>
                            <h6>me comi una banana</h6>
                        </div>
                        <div class="col">
                            <h6>TOTAL PUNTO:</h6>
                            <h6>joer quiero money</h6>
                        </div>
                        <div class="col">
                            <h6>TOTAL EFECTIVO:</h6>
                            <h6>una locha</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade card" id="refunds" role="tabpanel">
                <div class="card-header">
                    <h5>Historial de devoluciones</h5>
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
                            <th>Cogigo de devolucion</th>
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
                            <td>mucha plata</td>
                            <td>ayer</td>
                            <td>
                                <i class="fas fa-eye" href="#salesHistory" id="papelera"></i>
                            </td>
                        </tr>
                        <tr class="ventas">
                            <td>000002</td>
                            <td>la dea</td>
                            <td>>:)</td>
                            <td>3H</td>
                            <td>
                                <i class="fas fa-eye" href="#salesHistory" id="papelera"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>