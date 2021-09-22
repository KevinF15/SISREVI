<div class="cash-panel">
	<div class="card card-forms">
		<form action="" id="cashForm" method="POST" class="d-flex flex-column">
			<div class="form-group row mb-3">
                <div class="col-6">
                	<label for="cashRepDate" class="form-label">Fecha</label>
                	<input type="datetime-local" class="form-control" id="cashRepDate" name="start">
                </div>
                <div class="col-6">
                	<label for="searchClientInput" class="form-label">Vendedor</label>
					<input type="text" class="form-control" placeholder="Yusbelys Yesimar Franco Pereira" disabled>
                </div>
            </div>
            <div class="form-group row mb-3">
            	<div class="row">
            		<div class="mb-4">
						<label for="" class="form-label">Saldo inicial de caja</label>
						<input type="number" class="form-control" name="cash1" min="0" step="1" placeholder="0">
					</div>
            	</div>
            	<div class="col row">
					<div class="mb-3">
						<label for="" class="form-label">Ventas de contado</label>
						<input type="number" class="form-control" name="cash1" min="0" step="1" placeholder="0">
					</div>
					<div class="mb-3">
						<label for="" class="form-label">Ventas por punto</label>
						<input type="number" class="form-control" name="cash2" min="0" step="1" placeholder="0">
					</div>
					<div class="mb-3">
						<label for="" class="form-label">Ventas por transferencia</label>
						<input type="number" class="form-control" name="cash3" min="0" step="1" placeholder="0">
					</div>
					<div class="mb-3">
						<label for="" class="form-label">Ventas por pago movil</label>
						<input type="number" class="form-control" name="cash4" min="0" step="1" placeholder="0">
					</div>
            	</div>
            	<div class="col">
            		<label for="searchClientInput" class="form-label">Detalles de efectivo</label>
					<div class="row mb-3">
						<label for="" class="col-4 col-form-label">200.000 Bs.</label>
						<div class="col-3">
					    	<input type="number" class="form-control" name="cash1" min="0" step="1" placeholder="0">
						</div>
						<div class="col-5">
					    	<b>Total:</b> 0,00 Bs.
						</div>
					</div>
					<div class="row mb-3">
						<label for="" class="col-4 col-form-label">500.000 Bs.</label>
						<div class="col-3">
					    	<input type="number" class="form-control" name="cash2" min="0" step="1" placeholder="0">
						</div>
						<div class="col-5">
					    	<b>Total:</b> 0,00 Bs.
						</div>
					</div>
					<div class="row mb-3">
						<label for="" class="col-4 col-form-label">1.00.000 Bs.</label>
						<div class="col-3">
					    	<input type="number" class="form-control" name="cash3" min="0" step="1" placeholder="0">
						</div>
						<div class="col-5">
					    	<b>Total:</b> 0,00 Bs.
						</div>
					</div>
					<div class="row moneybuttons mt-5 mb-3">
	            		<input class="btn btn-light col m-2" type='button' value='Añadir efectivo' id='addCash'>
						<input class="btn btn-light col m-2" type='button' value='Remover efectivo' id='removeCash'>
	            	</div>
            	</div>
            </div>
            <div class="button-row d-flex justify-content-end mt-4">
				<button type="submit" class="btn btn-gradient-primary-color" name="añadir" class="btn btn-primary">Consultar cierre</button>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">
	window.onload = (function () {
		var counter = 4;

		$('#addCash').click(function () {
			// AÑADIR LUEGO VALIDACIONES PARA LOS FORMATOS DE LAS MONEDAS
			Swal.fire({
				title: '¿Que moneda quieres añadir?',
				html: 'Formatos: 0,00 Bs. / $0,00',
				input: 'text',
				showCancelButton: true,
				confirmButtonText: 'Insertar',
				confirmButtonColor: '#17BFE8',
				cancelButtonText: 'Cerrar',
			}).then((result) => {
				if (result.isDismissed) return false;

				counter++;

				$(`<div class="row mb-3" id="fieldCash${counter}">
					<label for="" class="col-4 col-form-label">${result.value}</label>
					<div class="col-3">
				    	<input type="number" class="form-control" name="cash${counter}" min="0" step="1" placeholder="0">
					</div>
					<div class="col-5">
					   	<b>Total:</b> 0,00 Bs.
					</div>
				</div>`).insertBefore('.moneybuttons');
			})
		});

		$('#removeCash').click(function () {
			if (counter === 3)  {
				Swal.fire({
					icon: 'error',
					title: 'No se pueden borrar mas campos.',
					confirmButtonColor: '#17BFE8',
				});

				return false;
			}

			$(`#fieldCash${counter}`).remove();
			counter--;
		});
	});
</script>