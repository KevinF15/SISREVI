$(document).ready(function() {
	$('.productDataRow .pdel').click(function () {
		var dataRow = $(this).parents()[1];
		var id = $(dataRow).data('id');

		Swal.fire({
			text: '¿Estás seguro de realizar esta acción?',
			icon: 'warning',
			iconColor: '#EF415A',
			showCancelButton: true,
			confirmButtonColor: '#EF415A',
			confirmButtonText: "Si",
			cancelButtonText: "No",
		}).then((result) => {
			if (result.isConfirmed) {
				$.ajax({
				    url: '',
		            type: 'POST',
					data: {id: id, action: 'delete'},

					success: function(response) {
						Swal.fire({
					    	title: 'Producto eliminado',
					    	icon: 'success',
					    	timer: 1000,
							showConfirmButton: false,
						});

						$(dataRow).remove();
		            }, 			
		    	});
			}
		});
	});
});

function addBrand () {
	Swal.fire({
		title: 'Ingresa el nombre de la marca',
		input: 'text',
		inputLabel: '',
		showCancelButton: true,
		confirmButtonColor: '#EF415A',
		confirmButtonText: "Si",
		cancelButtonText: "No",
		inputValidator: (value) => {
			if (!value) {
			    return '¡Necesitas escribir algo!'
		    }
		}
	}).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
			    url: '',
			    type: 'POST',
				data: {name: result.value, action: 'addBrand'},

				success: function(response) {
					Swal.fire({
				    	title: 'Marca agregada',
				    	icon: 'success',
				    	timer: 1000,
						showConfirmButton: false,
					});

					$('datalist#brand-list').append(`<option value="${result.value}">`);
			    }, 			
			});
		}
	});
}