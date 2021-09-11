<ul class="nav nav-tabs flex-colum justify-content-around" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#productList" role="tab"><i class="fas fa-truck-loading"></i>Crear pedido</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#addProduct" role="tab"><i class="fas fa-book"></i>Historial</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#editProduct" role="tab"><i class="fas fa-people-carry"></i>Proveedores</a>
    </li>
</ul>

<div class="inventory-panel">
    <div class="tab-content">
        <div class="tab-pane fade show active card" id="productList">
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
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Cantidad</th>
                            <th>Precio c/u</th>
                            <th>Precio proveedor</th>
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
                            <td>un riñon</td>
                            <td><i class="fas fa-trash-alt" href="#editProduct" id="papelera"></i></td>
                        </tr>
                        <tr class="ventas">
                            <td>platano</td>
                            <td>verde</td>
                            <td>2</td>
                            <td>23423434$</td>
                            <td>mucha money</td>
                            <td>trululu</td>
                            <td><i class="fas fa-trash-alt" href="#editProduct" id="papelera"></i></td>
                        </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            <ul class="nav-op-ven">
                                 <li>
                                    <button type="button" class="btn btn-gradient-primary-color" data-toggle="modal" data-target="#modal1" name="agregar">Agregar</button>
                                </li>
                                <li>
                                    <button type="submit" class="btn btn-gradient-primary-color" name="registrar">Registrar</button>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <div class="tab-content" id="total">
                                <h6>TOTAL:</h6>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        <div class="tab-pane fade card card-forms" id="addProduct" role="tabpanel" aria-labelledby="test-tab">
        <h5 class="mb-0">Historial de pedidos</h5>
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

        <div class="tab-pane fade card card-forms" id="editProduct" role="tabpanel" aria-labelledby="test-tab">
            olaakakajkaaa
        </div>
    </div>
</div>