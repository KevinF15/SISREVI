<div class="clients-panel">
	<div class="card">
		<div class="clients-table table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>Documento</th>
						<th>Nombre</th>
						<th>Telefono</th>
						<th>Dirección</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>14.458.321</td>
						<td>Juan Luis Perez Peña</td>
						<td>0426-7859842</td>
						<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</td>
						<td><i class="fas fa-pencil-alt pedit"></i> <i class="fas fa-trash-alt pdel"></i></td>
					</tr>
					<tr>
						<td>16.678.128</td>
						<td>Yusbelys Yesimar Franco Pereira</td>
						<td>0426-458796</td>
						<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</td>
						<td><i class="fas fa-pencil-alt pedit"></i> <i class="fas fa-trash-alt pdel"></i></td>
					</tr>
					<tr>
						<td>4.875.456</td>
						<td>Maria Yusepina Oliveira Martinez</td>
						<td>0414-2244778</td>
						<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</td>
						<td><i class="fas fa-pencil-alt pedit"></i> <i class="fas fa-trash-alt pdel"></i></td>
					</tr>
					<tr>
						<td>4.875.456</td>
						<td>Alan Jose Brito Delgado</td>
						<td>0426-21554876</td>
						<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</td>
						<td><i class="fas fa-pencil-alt pedit"></i> <i class="fas fa-trash-alt pdel"></i></td>
					</tr>
				</tbody>
			</table>
			<!-- Button: Add client -->
			<div data-bs-toggle="modal" data-bs-target="#addClientModal">
				<div class="btn-float" data-bs-toggle="tooltip" data-bs-placement="left" title="Agregar cliente">				
					<i class="fas fa-user-plus"></i>
				</div>
			</div>
			<!-- Modal: Add client -->
			<div class="modal fade" id="addClientModal" tabindex="-1" aria-labelledby="addClientModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<!-- Header -->
						<div class="modal-header">
							<div>
								<h5 class="modal-title" id="exampleModalLabel">Agregar cliente</h5>
								<p class="text-sm">Inserte la información especificada.</p>
							</div>
							<i class="fas fa-times" data-bs-dismiss="modal" aria-label="Close"></i>
				  		</div>
				  		<!-- Content -->
				  		<div class="modal-body">
							<form id="newClientForm" action="" method="POST" class="forms d-flex flex-column">
								<div class="form-group mb-3">
				                    <label for="enameInput" class="form-label">Nombre</label>
				                    <input type="text" class="form-control" id="enameInput" name="nombre" aria-describedby="enameHelp">
				                    <div id="enameHelp" class="form-text"></div>
				                </div>
					            <div class="form-group row mb-3">
					     			<div class="col-6">
				                    	<label for="edocInput" class="form-label">Documento</label>
				                        <input type="number" class="form-control" id="edocInput" name="doc" aria-describedby="edocHelp">
				                        <div id="edocHelp" class="form-text"></div>
				                    </div>
				                    <div class="col-6">
				                        <label for="etelInput" class="form-label">Teléfono</label>
				                        <input type="text" class="form-control" id="etelInput" name="telefono" aria-describedby="etelHelp">
				                        <div id="etelHelp" class="form-text"></div>
				                    </div>
				                </div>
				                <div class="form-group row mb-3">
				                	<div clas="col-12">
				                		<label for="edirInput" class="form-label">Dirección</label>
					                    <textarea class="form-control" id="edirInput" name="dir" aria-describedby="edirHelp"></textarea>
					                    <div id="edirHelp" class="form-text"></div>
				                	</div>
				                </div>
				                <div class="button-row d-flex justify-content-end mt-4">
									<input type="reset" class="btn btn-light">
									<button type="submit" class="btn btn-gradient-primary-color" name="añadir" class="btn btn-primary">Añadir</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>