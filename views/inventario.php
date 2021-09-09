<ul class="nav nav-tabs flex-colum justify-content-around" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#productList" role="tab"><i class="fas fa-boxes"></i>Productos en almacen</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#addProduct" role="tab"><i class="fas fa-box"></i> Añadir producto</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#editProduct" role="tab"><i class="fas fa-edit"></i> Editar producto</a>
    </li>
</ul>

<div class="inventory-panel">
    <div class="tab-content">
        <div class="tab-pane fade show active card" id="productList">
            Inserte lista aqui
        </div>

        <div class="tab-pane fade card card-forms" id="addProduct" role="tabpanel" aria-labelledby="test-tab">
            <h5 class="mb-0">Añadir producto</h5>
            <p class="mb-3 text-sm">Inserte la información especificada</p>
            <form method="POST" class="d-flex flex-column">
                <div class="form-group mb-3">
                    <label for="pcodeInput" class="form-label">Código de producto</label>
                    <input type="text" class="form-control" id="pcodeInput" name="cod" aria-describedby="codHelp" placeholder="0000000000">
                    <div id="codHelp" class="form-text"></div>
                </div>

                <div class="form-group row">
                    <div class="col-9">
                        <label for="pnameInput" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="pnameInput" name="name" aria-describedby="nameHelp">
                        <div id="nameHelp" class="form-text"></div>
                    </div>
                    <div class="col-3">
                        <label for="pnameInput" class="form-label">Cantidad</label>
                        <input type="text" class="form-control" id="pnameInput" name="name" aria-describedby="nameHelp">
                        <div id="nameHelp" class="form-text"></div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-9">
                        <label for="pnameInput" class="form-label">Descripción</label>
                        <input type="text" class="form-control" id="pnameInput" name="name" aria-describedby="nameHelp">
                        <div id="nameHelp" class="form-text"></div>
                    </div>
                    <div class="col-3">
                        <label for="pnameInput" class="form-label">Precio unitario</label>
                        <input type="text" class="form-control" id="pnameInput" name="name" aria-describedby="nameHelp">
                        <div id="nameHelp" class="form-text"></div>
                    </div>
                </div>
            </form>
        </div>

        <div class="tab-pane fade card card-forms" id="editProduct" role="tabpanel" aria-labelledby="test-tab">
            olaakakajkaaa
        </div>
    </div>
</div>