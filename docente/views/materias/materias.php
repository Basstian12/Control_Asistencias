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
<br>
            <div class="container">

            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Carrera</th>
                        <th scope="col">Materia</th>
                        <th scope="col">Semestre</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Grupo</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">

                    <?php

                    $query = $conn->query("SELECT unidad_academica.nombre, carga_academica.hora, carga_academica.grupo, carreras.nombre AS carrera, unidad_academica.semestre
FROM carga_academica
JOIN docentes ON docentes.id_docente = carga_academica.id_docente
JOIN unidad_academica ON unidad_academica.id_uacademica = carga_academica.id_uacademica
JOIN carreras ON carreras.id_carrera = unidad_academica.id_carrerrafk
WHERE docentes.id_docente = '$user_id';
                    
                    ");
                    while ($valores = mysqli_fetch_array($query)) { ?>
                        <tr>
                            <td><?php echo $valores['carrera'] ?></td>
                            <td><?php echo $valores['nombre'] ?></td>
                            <td><?php echo $valores['semestre'] ?></td>
                            <td><?php echo $valores['hora'] ?></td>
                            <td><?php echo $valores['grupo'] ?></td>
                        </tr>

                    <?php }
                    ?>

                </tbody>
            </table>


        </main>
    </div>

    <!-- script modal -->
    <?php
    include('../modals/script.php')

    ?>


</body>

</html>