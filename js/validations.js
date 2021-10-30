$(function () {
	/*
	*	Validations rules
	*	
	*	re: Set the regular expression.
	*	message: Specify the error message for when the validation returns false.
	* 	clones: Helps the rule work on other inputs with different names but with the same validation
	*/
	var validations = {
		enameInput: {
			re: /^[A-Za-z\u00f1\u00d1\u00E0-\u00FC\s]{0,50}$/,
			message: "El nombre no puede contener números, ni caracteres especiales y tampoco debe tener más de 50 caracteres.",
			clones: ['provNameInput'],
		},
		edocInput: {
			re: /^[0-9]{7,8}$/,
			message: "Cedula inválida: Verifique e introdúzcala de nuevo.",
		},
		etelInput: {
			re: /^[0-9]{4}[-]{1}[0-9]{7}$/,
			message: "Teléfono inválido: El formato debe ser 04XX-XXXXXXX o 02XX-XXXXXXX",
			clones: ['provTelfInput'],
		},
		pnameInput: {
			re: /^[A-Za-z0-9-#_\u00f1\u00d1\u00E0-\u00FC\s\b]{3,40}$/,
			message: "Algunos caracteres ingresados no estan permitidos y solo se permiten de 3 a 40 caracteres.",
			clones: ['pditnameInput'],
		},
		pdescInput: {
			re: /^[A-Za-z0-9\u00f1\u00d1\u00E0-\u00FC\s]{0,100}$/,
			message: "Se ha excedido el limite de caracteres permitidos (maximo: 100).",
			clones: ['pditDescInput', 'edirInput', 'provDescInput'],
		},
		precunitInput: {
			re: /^[1-9]{0,12}([.][0-9]{2,2})?$/,
			message: "El monto debe ser mayor que 0.",
			clones: ['preccostInput', 'ditprecunitInput', 'ditpreccostInput', 'salaryInput', 'comInput'],
		},
		provRIFInput: {
			re: /^[Jj0-9-\b]{9,10}$/,
			message: "RIF inválido: El formato debe ser J-0000000",
		},
		loginCedInput: {
			re: /^[0-9]{7,8}$/,
			message: "Cedula inválida: Verifique e introdúzcala de nuevo.",
		},
		loginPassInput: {
			re: /^[A-Za-z-0-9\u00f1\u00d1\u00E0-\u00FC!@#\$%\^&\*\?_~]*$/,
			message: "Los caracteres especiales permitidos son: !@#$%^&*?_~",
		},
	}

	function validateInput(input, re, message) {
		var inputId = input.attr('id');
		var inputHelp = $(`#${inputId.slice(0, -5)}Help`);
		
		if ((re).test(input.val())) {
			if (input.hasClass('is-invalid')) {
				input.removeClass('is-invalid').addClass('is-valid');
			}

	    	inputHelp.text('');
	    	return true;
	    } else {
	    	if (input.hasClass('is-valid')) {
				input.removeClass('is-valid').addClass('is-invalid');
			}

	    	inputHelp.text(message);
	    	return false;
	    }
	}

	// Validar mientras se escribe
	$('input, textarea').keyup(function() {
		var inputId = $(this).attr('id');
		var input = $(`#${inputId}`)

		for (const key in validations) {
			var val = validations[key];

			if (key === inputId) {
	    		validateInput(input, val.re, val.message);
	    	} else if (val.clones) {
	    		for (const i in val.clones) {
	    			if (val.clones[i] == inputId) validateInput(input, val.re, val.message);
	    		}
	    	}

		}
	});

	// Validar formularios al hacer submit
	$('form').submit(function (e) {
		var formId = $(this).attr('id');
		var formAction = $(this).attr('action');
		var validate = true;

		
		$.each($(`#${formId} input, #${formId} textarea`), function(i, input) {
			var inputId = $(this).attr('id');

    		for (const key in validations) {
				var val = validations[key];

				if (key === inputId && !validateInput($(this), val.re, val.message)) {
		    		$(this).addClass('is-invalid');
		    		$(`#${inputId.slice(0, -5)}Help`).addClass('invalid-feedback');
		    		validate = false;
		    	} else if (val.clones) {
		    		for (const i in val.clones) {
		    			if (val.clones[i] == inputId && !validateInput($(this), val.re, val.message)) {
		    				$(this).addClass('is-invalid');
		    				$(`#${inputId.slice(0, -5)}Help`).addClass('invalid-feedback');
		    				validate = false;
		    			}
		    		}
		    	}
			}
		});

		if (validate) {
			Swal.fire({
				title: '¡Hecho!',
				text: 'Cada formulario dará un mensaje distinto luego...',
				icon: 'success',
				timer: 3000,
				showConfirmButton: false,
				confirmButtonColor: '#17BFE8',
			});
		} else {
			e.preventDefault();
		}
	})
});