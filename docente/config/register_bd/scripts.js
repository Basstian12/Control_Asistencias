


$(document).ready(function () {

    $(".detalles").click(function () {

        var carrera = $("#carreras_alumn").val();
        var semestre = $("#semestres_alumn").val();
        var materia = $("#materias_alumn").val();
        var grupo = $("#grupos_alumn").val();
        var id_alumno = $(this).data('id');
        $.ajax({
            url: "../../config/consult/asistencias_alumno.php",
            method: "POST",
            data: {
                id_alumno: id_alumno,
                carrera: carrera,
                semestre: semestre,
                materia: materia,
                grupo: grupo,
                
            },
            success: function (result) {
                $("#result_detalle").html(result);
            }


        });
        return false;
    });

});
 








/* Buscar unidad academica con carrera y semestre */

$(document).ready(function () {

    $("#buscaralumno_btn").click(function () {

        var carrera = $("#carrera").val();
        var semestre = $("#semestre").val();
        var materia = $("#select_materia").val();
        var grupo = $("#grupo").val();

        $.ajax({
            url: "../../config/register_bd/search_uacademica.php",
            method: "POST",
            data: {
                carrera: carrera,
                semester: semestre,
                materia: materia,
                grupo: grupo
            },
            success: function (result) {
                $("#resultado_alumno").html(result);
            }


        });
        return false;
    });

});





//insertar estudiante

$(document).ready(function () {
    // Capturar evento de envío del formulario
    $('#form_student').submit(function (event) {
        // Evitar el comportamiento por defecto del formulario
        event.preventDefault();

        // Obtener los datos del formulario
        var datos = $(this).serialize();

        // Enviar los datos mediante AJAX
        $.ajax({
            type: 'POST',
            url: '../../config/register_bd/alumn.php',
            data: datos,
            success: function (result1) {
                // Mostrar mensaje de éxito
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Registro insertado correctamente',
                    showConfirmButton: false,
                    timer: 2000
                });
            },
            error: function () {
                // Mostrar mensaje de error
                alert('Error al insertar registro');
            }
        });
    });
});


//Carga academica

$(document).ready(function () {
    // Capturar evento de envío del formulario
    $('#form_uacademica').submit(function (event) {
        // Evitar el comportamiento por defecto del formulario
        event.preventDefault();

        // Obtener los datos del formulario
        var datos = $(this).serialize();

        // Enviar los datos mediante AJAX
        $.ajax({
            type: 'POST',
            url: '../../config/register_bd/carga_academica.php',
            data: datos,
            success: function (uacademica) {
                // Mostrar mensaje de éxito
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Registro insertado correctamente',
                    showConfirmButton: false,
                    timer: 2000
                });
            },
            error: function () {
                // Mostrar mensaje de error
                alert('Error al insertar registro');
            }
        });
    });
});



// botón eliminar estudiante

$(document).ready(function () {
    $('.eliminar').click(function () {
        var id = $(this).data('id');
        Swal.fire({
            title: '¿Está seguro?',
            text: "¡No podrá revertir esto12!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminarlo!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '../../config/delete_bd/estudiante.php',
                    type: 'POST',
                    data: { id: id },
                    success: function (response) {
                        Swal.fire({
                            position: 'top-center',
                            icon: 'success',
                            title: 'Se ha eliminado correctamente',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        // Redireccionar a otra página después de eliminar el registro
                        setTimeout(function () {
                            location.reload();
                        }, 1500);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });
            }
        })
    });
});

/* eliminar carga academica */

$(document).ready(function () {
    $('.eliminar_carga').click(function () {
        var id = $(this).data('id');
        Swal.fire({
            title: '¿Está seguro?',
            text: "¡No se podra recuperar datos",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminarlo!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '../../config/delete_bd/carga_academica.php',
                    type: 'POST',
                    data: { id: id },
                    success: function (response) {
                        Swal.fire({
                            position: 'top-center',
                            icon: 'success',
                            title: 'Se ha eliminado correctamente',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        // Redireccionar a otra página después de eliminar el registro
                        setTimeout(function () {
                            location.reload();
                        }, 1500);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });
            }
        })
    });
});










/* Registro de docentes */
$(document).ready(function () {
    // Capturar evento de envío del formulario
    $('#form_docente').submit(function (event) {
        // Evitar el comportamiento por defecto del formulario
        event.preventDefault();

        // Obtener los datos del formulario
        var datos = $(this).serialize();

        // Enviar los datos mediante AJAX
        $.ajax({
            type: 'POST',
            url: '../../config/register_bd/docente.php',
            data: datos,
            success: function (result2) {
                // Mostrar mensaje de éxito
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Registro insertado correctamente',
                    showConfirmButton: false,
                    timer: 2000
                });
            },
            error: function () {
                // Mostrar mensaje de error
                alert('Error al insertar registro');
            }
        });
    });
});

/* eliminar docente */
$(document).ready(function () {

    $('.eliminar_docente').click(function () {
        var id_docente = $(this).data('id');
        Swal.fire({
            title: '¿Está seguro?',
            text: "¡No se podra recuper datos!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminarlo!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '../../config/delete_bd/docente.php',
                    type: 'POST',
                    data: { id_docente: id_docente },
                    success: function (response) {
                        Swal.fire({
                            position: 'top-center',
                            icon: 'success',
                            title: 'Se ha eliminado correctamente',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        // Redireccionar a otra página después de eliminar el registro
                        setTimeout(function () {
                            location.reload();
                        }, 1500);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });
            }
        })
    });
});









/* REGISTRAR CARRERA A LA BD */
$(document).ready(function () {
    // Capturar evento de envío del formulario
    $('#form_carreras').submit(function (event) {
        // Evitar el comportamiento por defecto del formulario
        event.preventDefault();

        // Obtener los datos del formulario
        var datos1 = $(this).serialize();

        // Enviar los datos mediante AJAX
        $.ajax({
            type: 'POST',
            url: '../../config/register_bd/insert_carrera.php',
            data: datos1,
            success: function (result3) {
                // Mostrar mensaje de éxito
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Registro insertado correctamente',
                    showConfirmButton: false,
                    timer: 2000
                });
            },
            error: function () {
                // Mostrar mensaje de error
                alert('Error al insertar registro');
            }
        });
    });
});

/* Registrar nuevo super usuario */



$(document).ready(function () {
    // Capturar evento de envío del formulario
    $('#form_superUser').submit(function (event) {
        // Evitar el comportamiento por defecto del formulario
        event.preventDefault();

        // Obtener los datos del formulario
        var formUser = $(this).serialize();

        // Enviar los datos mediante AJAX
        $.ajax({
            type: 'POST',
            url: '../../config/register_bd/superuser.php',
            data: formUser,
            success: function (InsertUser) {
                // Mostrar mensaje de éxito
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Registro insertado correctamente',
                    showConfirmButton: false,
                    timer: 2000
                });
            },
            error: function () {
                // Mostrar mensaje de error
                 Swal.fire({
              icon: 'error',
              title: 'Eror al insertar datos',
              showConfirmButton: false,
              timer: 1500
            })
            }
        });
    });
});




//LISTAR ESTUDIANTE A BASE DE CARRERA Y MATERIA

var inputSelect = document.getElementById("semestre");
var resultadosSelect = document.getElementById("resultados-select");



// Agregar un evento para manejar los cambios en el select de entrada
inputSelect.addEventListener("change", function () {
    // Obtener el valor seleccionado del select de entrada
    
     
    var valor = inputSelect.value;

    // Crear una solicitud Ajax para buscar los datos
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            // Procesar la respuesta del servidor
            if (xhr.status === 200) {
                // Limpiar el select de resultados
                resultadosSelect.innerHTML = "";

                // Agregar las opciones al select de resultados
                var resultados = JSON.parse(xhr.responseText);
                for (var i = 0; i < resultados.length; i++) {
                    var opcion = document.createElement("option");
                    opcion.value = resultados[i].nombre;
                    opcion.textContent = resultados[i].nombre;
                    resultadosSelect.appendChild(opcion);
                }
            } else {
                resultadosSelect.innerHTML = "Error: " + xhr.status;
            }
        }
    };
    xhr.open("GET", "../../config/register_bd/search_alumn.php?valor=" + encodeURIComponent(valor), true);

    xhr.send();
});


/* activar boton submit al estar lleno los campor en docentes/estudiantes */







