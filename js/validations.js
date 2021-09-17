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
			required: true,
			re: /^[A-Za-z\u00f1\u00d1\u00E0-\u00FC\s]{0,50}$/,
			message: "El nombre no puede contener números, ni caracteres especiales y tampoco debe tener más de 50 caracteres.",
			clones: ['provNameInput'],
		},
		edocInput: {
			required: true,
			re: /^[0-9]{7,8}$/,
			message: "Cedula inválida: Verifique e introdúzcala de nuevo.",
		},
		etelInput: {
			required: true,
			re: /^[0-9]{4}[-]{1}[0-9]{7}$/,
			message: "Teléfono inválido: El formato debe ser 04XX-XXXXXXX o 02XX-XXXXXXX",
			clones: ['provTelfInput'],
		},
		pnameInput: {
			required: true,
			re: /^[A-Za-z0-9-#_\u00f1\u00d1\u00E0-\u00FC\s\b]{3,40}$/,
			message: "Algunos caracteres ingresados no estan permitidos y solo se permiten de 3 a 40 caracteres.",
			clones: ['pditnameInput'],
		},
		pdescInput: {
			required: true,
			re: /^[A-Za-z0-9\u00f1\u00d1\u00E0-\u00FC\s]{0,100}$/,
			message: "Se ha excedido el limite de caracteres permitidos (maximo: 100).",
			clones: ['pditDescInput', 'edirInput', 'provDescInput'],
		},
		precunitInput: {
			required: true,
			re: /^[1-9]{0,12}([.][0-9]{2,2})?$/,
			message: "El monto debe ser mayor que 0.",
			clones: ['ditprecunitInput', 'salaryInput', 'comInput'],
		},
		provRIFInput: {
			required: true,
			re: /^[Jj0-9-\b]{9,10}$/,
			message: "RIF inválido: El formato debe ser J-0000000",
		},
	}

	$('input, textarea').keyup(function() {
		var inputId = $(this).attr('id');
		var input = $(`#${inputId}`)

		for (const key in validations) {
			var val = validations[key];

			if (key === inputId) {
	    		if ((val.re).test(input.val())) {
	    			$(`#${inputId.slice(0, -5)}Help`).text('');
	    		} else {
	    			$(`#${inputId.slice(0, -5)}Help`).text(val.message);
	    		}
	    	} else if (val.clones) { // Para despues: Hacer la validacion funciones
	    		for (const i in val.clones) {
	    			if (val.clones[i] == inputId) {
	    				if ((val.re).test(input.val())) {
			    			$(`#${inputId.slice(0, -5)}Help`).text('');
			    		} else {
			    			$(`#${inputId.slice(0, -5)}Help`).text(val.message);
			    		}
	    			}
	    		}
	    	}
		}
	});
});