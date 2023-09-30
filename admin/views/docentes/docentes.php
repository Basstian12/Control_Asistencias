<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Docentes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../../crs/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
    <!-- script para registros a la base de datos con ajax
                ---------IMPORTANTE-------------

-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../config/register_bd/scripts.js"></script>

</head>


<body>
    <?php
    include('../header.php');
    ?>
    <div>
        <?php
        include('../nav.php');
        ?>
        <br>
        <main class="bg-light  border-">

            <div class="container">
                <div class="container-sm">
                    <!-- Button trigger modal -->


                    <?php
                    include('../modals/register_docentes.php');
                    ?>

                </div>
            </div>
            <br>
            <div class="container-sm">
                <!-- Button trigger modal -->
                

            </div>
            <table id="docentes" class="table table-striped" style="width:100%">
                <thead>

                    <tr>
                        <th scope="col">Cedulas</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Correos</th>
                        <th scope="col">Opciones</th>


                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    
                    <?php
                    require('../../config/db.php');
                    // Realiza una consulta a la base de datos para obtener los datos a mostrar
                    $sql = "SELECT * FROM docentes";
                    $result = mysqli_query($conn, $sql);

                    // Recorre los resultados y los muestra en la tabla
                    while ($fila = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>' . $fila['cedula'] . '</td>';
                        echo '<td>' . $fila['nombre'] . '</td>';
                        echo '<td>' . $fila['apellidos'] . '</td>';
                        echo '<td>' . $fila['correo'] . '</td>';

                        echo '<td><button class="btn btn-success">Actualizar</button>
                        <button class="btn btn-danger eliminar_docente" data-id="'. $fila['id_docente'] .'">Eliminar</button>
                        </td>';
                        
                        echo '</tr>';
                    }
                    ?>

                </tbody>
            </table>






        </main>
    </div>

    <!-- script modal -->
    <?php
    include('../modals/script.php')

    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#docentes').DataTable({
                /* "paging": false, */
                "destroy": true,
                "pageLength": 5,
                "lengthMenu": [5, 10, 25, 50, 75, 100],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json"

                }


            });
        });
    </script>








</body>

</html>