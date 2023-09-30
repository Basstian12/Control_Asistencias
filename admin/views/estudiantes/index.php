<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../../crs/css/style.css">
    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {

            $("#buscaralumn_btn").click(function() {

                var valorBusqueda = $("#buscaralumn_input").val();
                var valorBusqueda1 = $("#buscaralumn_input1").val();

                $.ajax({
                    url: "../../config/db/search_student.php",
                    method: "POST",
                    data: {
                        matricula: valorBusqueda,
                        nombre: valorBusqueda1
                    },
                    success: function(result) {
                        $("#alumnos").html(result);
                    }


                });
                return false;
            });

        });
    </script>

    <!-- script para registros a la base de datos con ajax
                ---------IMPORTANTE-------------

-->

    <script src="../../config/register_bd/scripts.js"></script>

</head>



<body>


    <?php
    include('../header.php');
    ?>

    <?php
    include('../nav.php');
    ?>


    <?php
    include('../../config/db.php');
    ?>



    </div>
    <main class="sm">
        <br>
        <div class="container">
            
            <div class="container-sm">
                <!-- Button trigger modal -->


                <?php
                include('../modals/register-alumn.php');
                ?>

            </div>


            <div id="alert">

            </div>
            <br>
        </div>



        








        <!-- Seccion de busqueda de estudiantes -->
        <br>
        <div class="container-sm">
            <!-- Button trigger modal -->
            <div class="text-dark fw-bold">
                <p>Buscar estudiantes</p>
                <div class="container">
                    <form action="" class="form-control">
                        <div class="d-flex">
                            <div class="m-2">
                                <label for="matricula" class="form-label"> Matricula:</label>
                                <input type="search" name="" id="buscaralumn_input" class="form-control" placeholder="Buscar estudiante">

                            </div>
                            <!--  -->
                            <div class="m-2"><br>
                                <input type="submit" value="Buscar" class="btn btn-primary mt-2" id="buscaralumn_btn">
                            </div>
                        </div>
                    </form>

                    <div class="">
                        <div>
                            <table class="table">
                                <thead class="bg-secondary text-light">
                                    <tr>
                                        <th scope="col" class="text-center">Nombre</th>
                                        <th scope="col" class="text-center">Apellido</th>
                                        <th scope="col" class="text-center">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody id="alumnos">

                                    <!-- se imprimen resultados de los alumnos -->


                                </tbody>
                            </table>

                        </div>

                    </div>


                </div>



            </div>

        </div>


    </main>
    </div>

    <!-- script modal -->
    <?php
    include('../modals/script.php')

    ?>


</body>

</html>