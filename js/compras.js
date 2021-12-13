$(document).ready(function(){
    //para mostrar en modal mensajes del servidor	
    if($.trim($("#mensajes").text()) != ""){
        muestraMensaje($("#mensajes").html());
    }
    //Fin de seccion de mostrar envio en modal mensaje//	
    //evento keyup de input codigoproducto
    $("#codigoproducto").on("keyup",function(){
        var codigo = $(this).val();
        $("#listadodeproductos tr").each(function(){
            if(codigo == $(this).find("td:eq(1)").text()){
                colocaproducto($(this));
            }
        });
    });
    $("#facturar").on("click",function(){
        if(existecliente()==true){
            if(verificaproductos()){
                $("#f").submit();
            }
            else{
                muestraMensaje("Debe agregar algun producto a la venta !!!");
            }
        }
        else{
            muestraMensaje("Debe ingresar un cliente registrado !!!");
        }
    });	      
    });

    function verificaproductos(){
        var existe = false;
        if($("#detalledeventa tr").length > 0){
            existe = true;
        }
        return existe;
    }
    
    function colocaproducto(linea){
        var id = $(linea).find("td:eq(0)").text();
        var encontro = false;
        
        $("#detalledeventa tr").each(function(){
            if(id*1 == $(this).find("td:eq(1)").text()*1){
                encontro = true
                var t = $(this).find("td:eq(4)").children();
                t.val(t.val()*1+1);
                modificasubtotal(t);
            } 
        });
        
        if(!encontro){
            var l = `
              <tr>
               <td style="display:none">
                   <input type="text" name="idp[]" style="display:none"
                   value="`+
                        $(linea).find("td:eq(0)").text()+
                   `"/>`+   
                        $(linea).find("td:eq(0)").text()+
               `</td>
               <td>`+
                        $(linea).find("td:eq(0)").text()+
               `</td>
               <td>`+
                        $(linea).find("td:eq(1)").text()+
               `</td>
               <td>
                  <input type="text" value="1" name="cant[]" onkeyup="modificasubtotal(this)"/>
               </td>
               <td>
                   <input type="text" name="Precio_proveedor[]" style="display:none"
                   value="`+
                        $(linea).find("td:eq(3)").text()+
                   `"/>`+
                        $(linea).find("td:eq(3)").text()+
               `</td>
               <td>`+
                        redondearDecimales($(linea).find("td:eq(3)").text()*1,1)+
               `</td>
               <td>
               <button type="button" class="btn btn-primary" onclick="eliminalineadetalle(this)"></button><i class="fas fa-trash-alt" href="#editProduct" id="papelera"></i>
               </td>
               </tr>`;
            $("#detalledeventa").append(l);
        }
    }
    //fin de funcion colocar productos
    
    
    //funcion para modificar subtotal
    function modificasubtotal(textocantidad){
        var linea = $(textocantidad).closest('tr');
        var valor = $(textocantidad).val()*1;
        var Precio_proveedor = $(linea).find("td:eq(3)").text()*1;
        $(linea).find("td:eq(4)").text(redondearDecimales((valor*Precio_proveedor),2));
    }
    //fin de funcion modifica subtotal
    
    
    //funcion para eliminar linea de detalle de ventas
    function eliminalineadetalle(boton){
        $(boton).closest('tr').remove();
    }
    // fin de funcion de eliminar linea
    
    
    //funcion para colocar datos del cliente en pantalla
    function colocacliente(linea){
        $("#cedulacliente").val($(linea).find("td:eq(1)").text());
        $("#idcliente").val($(linea).find("td:eq(0)").text());
        $("#datosdelcliente").html($(linea).find("td:eq(2)").text()+
        "  "+$(linea).find("td:eq(3)").text()+"  "+
        $(linea).find("td:eq(4)").text());
    }
    
    //fin de colocar datos del cliente
    
    
    
    //Funcion que muestra el modal con un mensaje
    function muestraMensaje(mensaje){
        $("#contenidodemodal").html(mensaje);
                $("#mostrarmodal").modal("show");
                setTimeout(function() {
                        $("#mostrarmodal").modal("hide");
                },5000);
    }
    
    
    //Función para validar por Keypress
    function validarkeypress(er,e){
        
        key = e.keyCode;
        
        
        tecla = String.fromCharCode(key);
        
        
        a = er.test(tecla);
        
        if(!a){
        
            e.preventDefault();
        }
        
        
    }
    //Función para validar por keyup
    function validarkeyup(er,etiqueta,etiquetamensaje,
    mensaje){
        a = er.test(etiqueta.val());
        if(a){
            etiquetamensaje.text("");
            return 1;
        }
        else{
            etiquetamensaje.text(mensaje);
            return 0;
        }
    }
    
    function coloca(linea){
        $("#cedula").val($(linea).find("td:eq(0)").text());
        $("#apellidos").val($(linea).find("td:eq(1)").text());
        $("#nombres").val($(linea).find("td:eq(2)").text());
        $("#fechadenacimiento").val($(linea).find("td:eq(3)").text());
        if($(linea).find("td:eq(4)").text()=="M"){
            $("#masculino").prop('checked','checked');
            $("#femenino").prop('checked','');
        }
        else{
            $("#femenino").prop('checked','checked');
            $("#masculino").prop('checked','');
        }
        $("#gradodeinstruccion").val($(linea).find("td:eq(5)").text());
        
    }
    function redondearDecimales(numero, decimales) {
        return Number(Math.round(numero +'e'+ decimales) +'e-'+ decimales).toFixed(decimales);
        
    }