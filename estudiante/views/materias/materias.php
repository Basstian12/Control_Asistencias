<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Materias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <?php
    include('../links.php');
    ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



    <!-- script para registros a la base de datos con ajax
                ---------IMPORTANTE-------------

-->

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
        <main class="">

            <div class="container bg-light">
                <?php
                require('../modals/inscribirme.php');
                ?>




                <table class="table">
                    <thead>
                        <tr>

                            <th scope="col">Materia</th>
                            <th scope="col">Semestre</th>
                            <th scope="col">Hora</th>

                        </tr>
                    </thead>
                    <tbody class="table-group-divider">

                        <?php

                        $query = $conn->query("SELECT * 
                                FROM inscritos 
                                LEFT JOIN carga_academica ON carga_academica.id = inscritos.id_carga_academica
                                LEFT JOIN unidad_academica ON unidad_academica.id_uacademica = carga_academica.id_uacademica
                                WHERE inscritos.id_alumno = '$user_id';
                    
                    ");
                        while ($valores = mysqli_fetch_array($query)) { ?>
                            <tr>

                                <td><?php echo $valores['nombre'] ?></td>

                                <td><?php echo $valores['semestre'] ?></td>

                                <td><?php echo $valores['hora'] ?></td>
                            </tr>

                        <?php }
                        ?>

                    </tbody>
                </table>
            </div>



        </main>
    </div>

    <!-- script modal -->
    <?php
    include('../modals/script.php')

    ?>


</body>

</html>