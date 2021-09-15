$(function () {
	// Reglas para validaciones
	var validations = {
		pnameInput: {
			required: true,
			re: /^[A-Za-z\u00f1\u00d1\u00E0-\u00FC\s]{0,50}$/,
			message: "El nombre excede el numero de caracteres permitidos.",
		},
		precunitInput: {
			required: true,
			re: /^[1-9]{0,12}([.][0-9]{2,2})?$/,
			message: "El monto debe ser mayor que 0",
		},
		pdescInput: {
			required: true,
			re: /^[A-Za-z0-9\u00f1\u00d1\u00E0-\u00FC\s]{0,100}$/,
			message: "Se ha excedido el limite de caracteres permitidos (maximo: 100).",
		},
	}

	// Verificar lo escrito en cada <input> / <textarea>
	$('input, textarea').keyup(function() {
		var inputId = $(this).attr('id');
		var input = $(`#${inputId}`)

		// Lee todas las reglas de validaciones
		for (const key in validations) {
			var val = validations[key];

			// Al hayar la regla que concuerde con el id del inpuut/textarea empieza la comprobacion
			if (key === inputId) {
	    		if ((val.re).test(input.val())) {
	    			// Si la expresion regular y el valor del campo concuerdan, no pasa nada c:
	    			$(`#${inputId.slice(0, -5)}Help`).text('');
	    		} else {
	    			// De lo contrario, muestra el mensaje de error
	    			$(`#${inputId.slice(0, -5)}Help`).text(val.message);
	    		}
	    	}
		}
	});
});

$(document).ready(function(){

	$("#pnameInput").on("keypress",function(e){
		codigo = e.keyCode;
		er = /^[A-Za-z0-9-#_ \b]*$/;
		tecla = String.fromCharCode(codigo);
		bien = er.test(tecla);
		if(!bien){
			e.preventDefault();
		}
	});
	
	$("#pnameInput").on("keyup",function(){
		er = /^[A-Za-z0-9-#_ \b]{3,40}$/;
		bien = er.test($(this).val());
		if(bien){
			$("#spnameInput").text("");
		}
		else{
			$("#spnameInput").text("Min 3 caracteres - Max 40 caracteres");
		}

	});
	
	$("#telfInpu").on("keypress",function(e){
		codigo = e.keyCode;
		er = /^[0-9\b]*$/;
		tecla = String.fromCharCode(codigo);
		bien = er.test(tecla);
		if(!bien){
			e.preventDefault();
		}
	});
	
	$("#telfInpu").on("keyup",function(){
		er = /^[0-9\b]{11}$/;
		bien = er.test($(this).val());
		if(bien){
			$("#stelfInpu").text("");
		}
		else{
			$("#stelfInpu").text("Solo 11 digitos");
		}
	});

	$("#pdescInput").on("keypress",function(e){
		codigo = e.keyCode;
		er = /^[A-Za-z0-9-#_ \b]*$/;
		tecla = String.fromCharCode(codigo);
		bien = er.test(tecla);
		if(!bien){
			e.preventDefault();
		}
	});
	
	$("#pdescInput").on("keyup",function(){
		er = /^[A-Za-z0-9-#_ \b]{0,100}$/;
		bien = er.test($(this).val());
		if(bien){
			$("#spdescInput").text("");
		}
		else{
			$("#spdescInput").text("Max 100 caracteres");
		}
	});

	$("#codeInput").on("keypress",function(e){
		codigo = e.keyCode;
		er = /^[Jj0-9-\b]*$/;
		tecla = String.fromCharCode(codigo);
		bien = er.test(tecla);
		if(!bien){
			e.preventDefault();
		}
	});
	
	$("#codeInput").on("keyup",function(){
		er = /^[Jj0-9-\b]{9,10}$/;
		bien = er.test($(this).val());
		if(bien){
			$("#scodeInput").text("");
		}
		else{
			$("#scodeInput").text("J-0000000");
		}
	});

});