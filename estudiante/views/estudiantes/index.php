<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Estudiante</title>
    <?php
    include('../links.php');
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../config/register_bd/scripts.js"></script>



</head>


<body>
    <?php
    include('../header.php');

    include('../../../config/db.php');
    ?>

    <div>
        <?php
        include('../nav.php');
        ?>

        <main class="bg-light">

            <div class="container alert alert-secondary">


                <?php
                require('../modals/asistencia.php');
                ?>
            </div>
            <div class=" ">
                <form class="form-control">
                    <div class="form-group">
                        <label for="materia" class="fw-bold">Materia:</label>
                        <select name="materia" id="select_materia" class="form-select">
                            <option value="0">Elegir materia</option>
                            <?php
                            session_start();

                            $user_id = $_SESSION['alumn_id'];

                            $query = $conn->query("SELECT inscritos.id_carga_academica, 
                                carga_academica.id_uacademica, unidad_academica.nombre, unidad_academica.id_uacademica
                                FROM inscritos 
                                LEFT JOIN carga_academica ON carga_academica.id = inscritos.id_carga_academica
                                LEFT JOIN unidad_academica ON unidad_academica.id_uacademica = carga_academica.id_uacademica
                                WHERE inscritos.id_alumno = '$user_id'");
                            while ($valores = mysqli_fetch_array($query)) {
                                echo '<option value="' . $valores['id_uacademica'] . '">' . $valores['nombre'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Buscar" class="btn btn-info mt-4" id="btn_buscarAsistencia">
                    </div>
                </form>



                <table class="table">
                    <thead>
                        <tr>


                            <th scope="col">Fecha</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Estatus</th>
                            <th scope="col">Comentario</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider" id="resultado_asistencia">



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