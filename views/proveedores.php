<div class="providers-panel">
	<div class="card">
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
					<td>J-31033587-8</td>
					<td>Richard Amaro</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</td>
					<td>0414-5598157</td>
					<td><i class="fas fa-trash-alt" id="papelera"></i><i class="fas fa-pencil-alt pedit" id="papelera" class="fas fa-pencil-alt pedit" id="papelera" data-bs-toggle="modal" data-bs-target="#editProviderModal"></i></td>
				</tr>
				<tr class="ventas">
					<td>J-12789654-4</td>
					<td>Productora Amaro Parrila</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</td>
					<td>0424-135846</td>
					<td><i class="fas fa-trash-alt" id="papelera"></i><i class="fas fa-pencil-alt pedit" id="papelera" data-bs-toggle="modal" data-bs-target="#editProviderModal"></i></td>
				</tr>
			</tbody>
		</table>

		<!-- Button: Add provider -->
		<div data-bs-toggle="modal" data-bs-target="#regProviderModal">
			<div class="btn-float" data-bs-toggle="tooltip" data-bs-placement="left" title="Registrar proveedor">              
				<i class="fas fa-plus"></i>
			</div>
		</div>

		<!-- Modal: Add provider -->
		<div class="modal fade" id="regProviderModal" tabindex="-1" aria-labelledby="regProviderModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<!-- Header -->
					<div class="modal-header">
						<div>
							<h5 class="modal-title" id="regProviderModalLabel">Registrar nuevo proveeador</h5>
							<p class="text-sm">Inserte la información especificada.</p>
						</div>
						<i class="fas fa-times" data-bs-dismiss="modal" aria-label="Close"></i>
					</div>
					<!-- Content -->
					<div class="modal-body">
						<form id="provForm" action="" method="POST" class="d-flex flex-column">
							<div>
								<label for="provRIFInput" class="form-label">RIF</label>
								<input type="text" class="form-control" id="provRIFInput" name="doc" aria-describedby="provRIFHelp" placeholder="J-00000000" required>
								<span id="provRIFHelp"></span>
							</div>
							<div>
								<label for="provNameInput" class="form-label">Nombre</label>
								<input type="text" class="form-control" id="provNameInput" name="nombre" aria-describedby="provNameHelp" required>
								<span id="provNameHelp"></span>
							</div>
							<div>
								<label for="provTelfInput" class="form-label">Telefono</label>
								<input type="text" class="form-control" id="provTelfInput" name="telefono" aria-describedby="provTelfHelp" required>
								<span id="provTelfHelp"></span>
							</div>
							<div>
								<label for="provDescInput" class="form-label">Direccion</label>
								<textarea class="form-control" id="provDescInput" name="descripcion" aria-describedby="provDescHelp"></textarea>
								<span id="provDescHelp"></span>
							</div>
							<div class="button-row d-flex justify-content-end mt-4">
								<input type="reset" class="btn btn-light">
								<button type="submit" class="btn btn-gradient-primary-color" id="registar" name="Registar">Registar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal: Edit provider -->
		<div class="modal fade" id="editProviderModal" tabindex="-1" aria-labelledby="editProviderModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<!-- Header -->
					<div class="modal-header">
						<div>
							<h5 class="modal-title" id="regProviderModalLabel">Editar proveeador</h5>
							<p class="text-sm">Inserte la información especificada.</p>
						</div>
						<i class="fas fa-times" data-bs-dismiss="modal" aria-label="Close"></i>
					</div>
					<!-- Content -->
					<div class="modal-body">
						<form id="provEditForm" action="" method="POST" class="d-flex flex-column">
							<div>
								<label for="provRIFInput" class="form-label">RIF</label>
								<input type="text" class="form-control" id="provRIFInput" name="doc" aria-describedby="provRIFHelp" placeholder="J-00000000" required>
								<span id="provRIFHelp"></span>
							</div>
							<div>
								<label for="provNameInput" class="form-label">Nombre</label>
								<input type="text" class="form-control" id="provNameInput" name="nombre" aria-describedby="provNameHelp" required>
								<span id="provNameHelp"></span>
							</div>
							<div>
								<label for="provTelfInput" class="form-label">Telefono</label>
								<input type="text" class="form-control" id="provTelfInput" name="telefono" aria-describedby="provTelfHelp" required>
								<span id="provTelfHelp"></span>
							</div>
							<div>
								<label for="provDescInput" class="form-label">Direccion</label>
								<textarea class="form-control" id="provDescInput" name="descripcion" aria-describedby="provDescHelp"></textarea>
								<span id="provDescHelp"></span>
							</div>
							<div class="button-row d-flex justify-content-end mt-4">
								<input type="reset" class="btn btn-light">
								<button type="submit" class="btn btn-gradient-primary-color" id="registar" name="Registar">Editar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>