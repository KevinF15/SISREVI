<div class="employees-panel">
	<div class="card">
		<div class="employees-table table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>Cedula</th>
						<th>Nombre</th>
						<th>Cargo</th>
						<th>Telefono</th>
						<th>Dirección</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$employer->showList();						
					?>
				</tbody>
			</table>
			<!-- Button: Add employer -->
			<div data-bs-toggle="modal" data-bs-target="#addEmpModal">
				<div class="btn-float" data-bs-toggle="tooltip" data-bs-placement="left" title="Agregar empleado">				
					<i class="fas fa-user-plus"></i>
				</div>
			</div>
			<!-- Modal: Add employer -->
			<div class="modal fade" id="addEmpModal" tabindex="-1" aria-labelledby="addEmpModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<!-- Header -->
						<div class="modal-header">
							<div>
								<h5 class="modal-title" id="exampleModalLabel">Agregar empleado</h5>
								<p class="text-sm">Inserte la información especificada.</p>
							</div>
							<i class="fas fa-times" data-bs-dismiss="modal" aria-label="Close"></i>
				  		</div>
				  		<!-- Content -->
				  		<div class="modal-body">
							<form id="newEmpForm" action="" method="POST" class="forms d-flex flex-column">
								<div class="form-group mb-3">
				                    <label for="enameInput" class="form-label">Nombre</label>
				                    <input type="text" class="form-control" id="enameInput" name="nombre" aria-describedby="enameHelp">
				                    <div id="enameHelp" class="form-text"></div>
				                </div>
					            <div class="form-group row mb-3">
					     			<div class="col-6">
				                    	<label for="edocInput" class="form-label">Documento</label>
				                        <div class="input-group">
						                   <select class="input-group-text" id="cedPrefixInput" name="cedPrefix">
											    <option value="V">V</option>
											    <option value="E">E</option>
											</select>
						                    <input type="text" class="form-control" id="edocInput" placeholder="Cedula" name="doc" required>
										</div>
										<div id="edocHelp" class="form-text"></div>
				                    </div>
				                    <div class="col-6">
				                        <label for="echargeInput" class="form-label">Cargo</label>
				                        <select class="form-select" name="cargo" id="echargeInput" aria-describedby="chargeHelp">
				                        	<option value="Administrador" selected="">Administrador</option>
				                        	<option value="Cajero">Cajero</option>
				                        </select>
				                        <div id="chargeHelp" class="form-text"></div>
				                    </div>
				                </div>
				                <div class="form-group row mb-3">
				                    <div class="col-8">
				                        <label for="edirInput" class="form-label">Dirección</label>
				                        <textarea class="form-control" id="edirInput" name="dir" aria-describedby="edirHelp"></textarea>
				                        <div id="edirHelp" class="form-text"></div>
				                    </div>
				                    <div class="col-4">
				                        <label for="etelInput" class="form-label">Teléfono</label>
				                        <input type="text" class="form-control" id="etelInput" name="telefono" aria-describedby="etelHelp">
				                        <div id="etelHelp" class="form-text"></div>
				                    </div>
				                </div>
				                <div class="button-row d-flex justify-content-end mt-4">
									<input type="reset" class="btn btn-light">
									<button type="submit" class="btn btn-gradient-primary-color" name="añadir">Añadir</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal: Edit employer -->
			<div class="modal fade" id="editEmpModal" tabindex="-1" aria-labelledby="editEmpModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<!-- Header -->
						<div class="modal-header">
							<div>
								<h5 class="modal-title" id="exampleModalLabel">Editar empleado</h5>
								<p class="text-sm">Inserte la información especificada.</p>
							</div>
							<i class="fas fa-times" data-bs-dismiss="modal" aria-label="Close"></i>
				  		</div>
				  		<!-- Content -->
				  		<div class="modal-body">
							<form id="editEmpForm" method="POST" class="forms d-flex flex-column">
								<div class="form-group mb-3">
				                    <label for="enameInput" class="form-label">Nombre</label>
				                    <input type="text" class="form-control" id="enameInput" name="nombre" aria-describedby="enameHelp">
				                    <div id="enameHelp" class="form-text"></div>
				                </div>
					            <div class="form-group row mb-3">
					     			<div class="col-6">
				                    	<div class="input-group">
						                   <select class="input-group-text" id="eCedPrefixInput" name="cedPrefix">
											    <option value="V">V</option>
											    <option value="E">E</option>
											</select>
						                    <input type="text" class="form-control" id="edocInput" placeholder="Cedula" name="doc" required>
										</div>
										<div id="edocHelp" class="form-text"></div>
				                    </div>
				                    <div class="col-6">
				                        <label for="echargeInput" class="form-label">Cargo</label>
				                        <select class="form-select" name="cargo" id="eChargeInput" aria-describedby="chargeHelp">
				                        	<option value="Administrador">Administrador</option>
				                        	<option value="Cajero">Cajero</option>
				                        </select>
				                        <div id="chargeHelp" class="form-text"></div>
				                    </div>
				                </div>
				                <div class="form-group row mb-3">
				                    <div class="col-8">
				                        <label for="edirInput" class="form-label">Dirección</label>
				                        <textarea class="form-control" id="edirInput" name="dir" aria-describedby="edirHelp"></textarea>
				                        <div id="edirHelp" class="form-text"></div>
				                    </div>
				                    <div class="col-4">
				                        <label for="etelInput" class="form-label">Teléfono</label>
				                        <input type="text" class="form-control" id="etelInput" name="telefono" aria-describedby="etelHelp">
				                        <div id="etelHelp" class="form-text"></div>
				                    </div>
				                </div>
				                <div class="button-row d-flex justify-content-end mt-4">
									<input type="reset" class="btn btn-light">
									<button type="submit" class="btn btn-gradient-primary-color" name="editar" class="btn btn-primary">Editar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>