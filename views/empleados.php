<div class="employees-panel">
	<!-- Tabs -->
	<ul class="nav nav-tabs flex-colum justify-content-around" role="tablist">
		<li class="nav-item" role="presentation">
			<a href="#employees" class="nav-link active" data-bs-toggle="tab" data-bs-target="#employees" type="button" role="tab" aria-selected="true"><i class="fas fa-users"></i> Lista de empleados</a>
		</li>
		<li class="nav-item" role="presentation">
			<a href="#salaryCalc" class="nav-link" data-bs-toggle="tab" data-bs-target="#salaryCalc" type="button" role="tab" aria-selected="false"><i class="fas fa-calculator"></i> Calculadora de sueldos</a>
		</li>
	</ul>

	<div class="tab-content">
		<!-- Add employer -->
		<div class="tab-pane show active fade card" id="employees" role="tabpanel">
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
						<tr>
							<td>14.458.321</td>
							<td>Juan Luis Perez Peña</td>
							<td>Administrador</td>
							<td>0426-7859842</td>
							<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</td>
							<td><i class="fas fa-pencil-alt pedit"></i> <i class="fas fa-trash-alt pdel"></i></td>
						</tr>
						<tr>
							<td>16.678.128</td>
							<td>Yusbelys Yesimar Franco Pereira</td>
							<td>Administrador</td>
							<td>0426-458796</td>
							<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</td>
							<td><i class="fas fa-pencil-alt pedit"></i> <i class="fas fa-trash-alt pdel"></i></td>
						</tr>
						<tr>
							<td>4.875.456</td>
							<td>Maria Yusepina Oliveira Martinez</td>
							<td>Cajera</td>
							<td>0414-2244778</td>
							<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</td>
							<td><i class="fas fa-pencil-alt pedit"></i> <i class="fas fa-trash-alt pdel"></i></td>
						</tr>
						<tr>
							<td>4.875.456</td>
							<td>Alan Jose Brito Delgado</td>
							<td>Cajero</td>
							<td>0426-21554876</td>
							<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</td>
							<td><i class="fas fa-pencil-alt pedit"></i> <i class="fas fa-trash-alt pdel"></i></td>
						</tr>
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
									<p class="text-sm">Inserte la información especificada</p>
								</div>
								<i class="fas fa-times" data-bs-dismiss="modal" aria-label="Close"></i>
					  		</div>
					  		<!-- Content -->
					  		<div class="modal-body">
								<form method="POST" class="forms d-flex flex-column">
									<div class="form-group mb-3">
					                    <label for="enameInput" class="form-label">Nombre</label>
					                    <input type="text" class="form-control" id="enameInput" name="nombre" aria-describedby="nameHelp">
					                    <div id="nameHelp" class="form-text"></div>
					                </div>
						            <div class="form-group row mb-3">
					                    <div class="col-6">
					                        <label for="edocInput" class="form-label">Cedula</label>
					                        <input type="number" class="form-control" id="edocInput" name="doc" aria-describedby="docHelp">
					                        <div id="docHelp" class="form-text"></div>
					                    </div>
					                    <div class="col-6">
					                        <label for="echargeInput" class="form-label">Cargo</label>
					                        <select class="form-select" name="cargo" id="echargeInput" aria-describedby="chargeHelp">
					                        	<option value="a" selected="">Administrador</option>
					                        	<option value="c">Cajero</option>
					                        </select>
					                        <div id="chargeHelp" class="form-text"></div>
					                    </div>
					                </div>
					                <div class="form-group row mb-3">
					                    <div class="col-8">
					                        <label for="edirInput" class="form-label">Dirección</label>
					                        <textarea class="form-control" id="edirInput" name="direccion" aria-describedby="dirHelp"></textarea>
					                        <div id="dirHelp" class="form-text"></div>
					                    </div>
					                    <div class="col-4">
					                        <label for="etelInput" class="form-label">Telefono</label>
					                        <input type="number" class="form-control" id="etelInput" name="telefono" aria-describedby="telHelp" row="1">
					                        <div id="telHelp" class="form-text"></div>
					                    </div>
					                </div>
								</form>
							</div>
							<!-- Footer -->
							<div class="modal-footer">
								<button type="button" class="btn btn-primary">Añadir</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Salary calculator -->
		<div class="tab-pane fade card card-forms" id="salaryCalc" role="tabpanel">
			<div class="card-header">
                <h5>Calculadora de sueldos</h5>
                <p class="text-sm">Especifique la fecha y comision a tomar en cuenta.</p>
            </div>
            <form method="POST" class="d-flex flex-column">
            	<div class="form-group row mb-3">
                    <div class="col-6">
                    	<label for="caTimeSInput" class="form-label text-sm">Inicio</label>
	                    <input type="datetime-local" class="form-control" id="caTimeSInput" name="dfrom" aria-describedby="caTimeSHelp">
	                    <div id="caTimeSHelp" class="form-text"></div>
                    </div>
                    <div class="col-6">
                    	<label for="caTimeEInput" class="form-label text-sm">Fin</label>
	                    <input type="datetime-local" class="form-control" id="caTimeEInput" name="dto" aria-describedby="caTimeEHelp">
	                    <div id="codHelp" class="form-text"></div>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <div class="col-6">
                    	<label for="searchEmpInput" class="form-label text-sm">Empleado</label>
                    	<input class="form-control" id="searchEmpInput" list="searchEmp" placeholder="Ingrese el nombre del empleado...">
	                    <datalist id="searchEmp">
	                        <option>Juan Luis Perez Peña</option>
	                        <option>Yusbelys Yesimar Franco Pereira</option>
	                        <option>Maria Yusepina Oliveira Martinez</option>
	                        <option>Alan Jose Brito Delgado</option>
	                    </datalist>
                    </div>
                    <div class="col-3">
                    	<label for="salaryInput" class="form-label text-sm">Sueldo base</label>
                    	<input type="number" class="form-control" id="salaryInput" name="salary" min="0" step="1" aria-describedby="salaryHelp" placeholder="0.00">
                    	<div id="salaryHelp" class="form-text"></div>
                    </div>
                    <div class="col-3">
                    	<label for="comInput" class="form-label text-sm">Comisión</label>
                    	<input type="number" class="form-control" id="comnput" name="com" min="0" step="0.1" aria-describedby="comHelp" placeholder="0.00">
                    	<div id="comHelp" class="form-text"></div>
                    </div>
                </div>
                <div class="button-row d-flex justify-content-end mt-4">
                    <input type="reset" class="btn btn-light">
                    <button type="submit" class="btn btn-gradient-primary-color" name="calc">Calcular</button>
                </div>
            </form>
		</div>
	</div>
</div>