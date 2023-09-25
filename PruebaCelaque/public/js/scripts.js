var Calculo = function (){
    var validarCampos = function () {
        
        if($('#monto').val() == '' || $('#monto').val() == 0 || $('#tasa').val() == '' || $('#tasa').val() == 0 || $('#plazo').val() == '' || $('#plazo').val() == 0){
            Swal.fire({
                title: 'Error!',
                text: 'Todos los campos son obligatorios',
                icon: 'error',
                confirmButtonText: 'Ok'
              })
        }else{

            var frm = $('#frm-calcular');
            $.ajax({
                type: 'POST',
                url: frm.attr('action'),
                dataType: 'json',
                cache: false,
                data: frm.serialize(),
                success: function (json) {
                    if(json.res == 1){
                        $('#resultado').show();
                        $('#cuota').text(json.dato);
                    }else{
                        console.log('funca error');
                    }
                },
                error: function (xhr, status, error) {
                    // Error en la carga
                    console.log("Se ha producido un error en la petición. Inténtelo más tarde. Disculpe las molestias");
                }
            });
            }
    }
    return {
        init: function () {
            $('#btn-calcular').click(function(){
                validarCampos();
            });
            document.getElementById("monto").addEventListener("input", function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });
            
            document.getElementById("tasa").addEventListener("input", function() {
                this.value = this.value.replace(/[^0-9.]/g, '');
            });
            
            document.getElementById("plazo").addEventListener("input", function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });        }
    };
}();