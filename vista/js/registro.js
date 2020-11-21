$(document).ready(function() {
    $("#FormRegistroSupervisor").on('submit', function(e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        //console.log(datos);
        $.ajax({
            url: $(this).attr("action"),
            data: datos,
            type: $(this).attr("method"),
            success: function(data) {
                //console.log(data);
                var resultado = JSON.parse(data);
                //console.log('->' + resultado.respuesta);
                if (resultado.respuesta == 'exito') {
                    Swal.fire(
                        'Correcto!',
                        'Se ha registrado correctamente el supervisor ',
                        'success'

                        setTimeout(function() {
                            window.location.href = "Registro.php";
                        }, 2000);
                    
                    document.getElementById("FormRegistroSupervisor").reset();
                } else if (resultado.respuesta == 'error') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error al registrar',
                        text: '¡Supervisor ya existente!'
                    })
                } else if (resultado.respuesta == 'mal') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Las contraseñas no coinciden'
                    })
                }
            }
        });
    });
});