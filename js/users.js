$(document).ready(function() {
	$('.userDataRow .pedit').click(function (e) {
		var dataRow = $(this).parents()[1];
		var userId = $(dataRow).data('id');

		var userData = $(`tr[data-id=${userId}] td`).map(function () {
			return $(this).text();
		});

		console.log(userData);

		// For employers
		if ($(".employees-panel")[0]) {
			$('#editEmpForm input[name=doc]').val(userData[0]);
			$('#editEmpForm input[name=nombre]').val(userData[1]);
			$('#editEmpForm input[name=cargo]').val(userData[2]);
			$('#editEmpForm textarea[name=direccion]').val(userData[4]);
			$('#editEmpForm input[name=telefono]').val(userData[3]);
		} else if ($(".clients-panel")[0]) {
			$('#editClientForm input[name=doc]').val(userData[0]);
			$('#editClientForm input[name=nombre]').val(userData[1]);
			$('#editClientForm textarea[name=dir]').text(userData[3]);
			$('#editClientForm input[name=telefono]').val(userData[2]);
		} else if ($(".providers-panel")[0]) {
			$('#provEditForm input[name=rif]').val(userData[0]);
			$('#provEditForm input[name=nombre]').val(userData[1]);
			$('#provEditForm textarea[name=dir]').text(userData[3]);
			$('#provEditForm input[name=telefono]').val(userData[2]);
		}
	});

	// Remove user
	$('.userDataRow .pdel').click(function () {
		var dataRow = $(this).parents()[1];
		var userId = $(dataRow).data('id');

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
					data: {id: userId, action: 'delete'},

					success: function(response) {
						Swal.fire({
					    	title: 'Usuario eliminado',
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