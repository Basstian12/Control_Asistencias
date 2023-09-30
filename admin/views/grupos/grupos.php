<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Menu Lateral</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../../crs/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
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




        <main class="bg-secondary  border-">




            <div class="container">
                <div class="container-sm">
                    <!-- Button trigger modal -->


                    <?php
                    include('../modals/register_grupos.php');
                    ?>

                </div>
            </div>
            <br>

            <div class="modal-body bg-light">
                <table id="grupos" class="table table-striped" style="width:90%">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Estatus</th>
                            <th>Hora</th>
                            <th>Materia</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10-01-2023</td>
                            <td>ASISTENCIA</td>
                            <td>18:00:00</td>
                            <td>ORACLE</td>

                        </tr>
                        <tr>
                            <td>11-01-2023</td>
                            <td>FALTA</td>
                            <td>00:00:00</td>
                            <td>ORACLE</td>

                        </tr>
                        <tr>
                            <td>11-01-2023</td>
                            <td>RETARDO</td>
                            <td>18:20:00</td>
                            <td>ORACLE</td>

                        </tr>
                        <tr>
                            <td>11-01-2023</td>
                            <td>RETARDO</td>
                            <td>18:20:00</td>
                            <td>ORACLE</td>

                        </tr>
                        <tr>
                            <td>11-01-2023</td>
                            <td>RETARDO</td>
                            <td>18:20:00</td>
                            <td>ORACLE</td>

                        </tr>
                        <tr>
                            <td>11-01-2023</td>
                            <td>RETARDO</td>
                            <td>18:20:00</td>
                            <td>ORACLE</td>

                        </tr>
                        <tr>
                            <td>11-01-2023</td>
                            <td>RETARDO</td>
                            <td>18:20:00</td>
                            <td>ORACLE</td>

                        </tr>
                        <tr>
                            <td>11-01-2023</td>
                            <td>RETARDO</td>
                            <td>18:20:00</td>
                            <td>ORACLE</td>

                        </tr>
                        <tr>
                            <td>11-01-2023</td>
                            <td>RETARDO</td>
                            <td>18:20:00</td>
                            <td>ORACLE</td>

                        </tr>
                        <tr>
                            <td>11-01-2023</td>
                            <td>ASISTENCIA</td>
                            <td>18:00:00</td>
                            <td>ORACLE</td>

                        </tr>


                    </tbody>

                </table>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Limpiar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>


    </div>


    </main>
    </div>

    <!-- script modal -->
    <?php
    include('../modals/script.php')

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#grupos').DataTable({
                "pageLength": 5,
                "lengthMenu": [3, 10, 25, 50, 75, 100],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json"

                }

            });
        });
    </script>


</body>

</html>