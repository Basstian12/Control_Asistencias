<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />


<?php
include('../../config/db.php'); //CONEXION A LA BD


session_start();

$user_id = $_SESSION['user_id'];

$carrera = $_POST['carrera'];
$semestre = $_POST['semestre'];
$materia = $_POST['materia'];
$grupo = $_POST['grupo'];

if (isset($_POST['generar_reporte'])) {
    // NOMBRE DEL ARCHIVO Y CHARSET
    header('Content-Type: application/xls');
    header('Content-Disposition: attachment; filename="Reporte_Alumnos.xls"');
?>

    <style>
        th,
        td {
            border: 1 solid black;
        }

        .tr {
            color: black;
        }

        table {
            margin: auto;
        }

        h4 {
            text-align: center;
        }
    </style>


    <table class="table">
        <tr class="tr">
            <h4>UNIVERSIDAD AUTONOMA DE CHIAPAS</h4>
            <h4><?php
                $query = $conn->query("SELECT * FROM carreras where id_carrera = $carrera");
                while ($valores = mysqli_fetch_array($query)) {
                    echo $valores['nombre'];
                }
                ?>

            </h4>
            <h4>FAC. CONTADURIA Y ADMINISTRACION CAMPUS I</h4>
            <h4>Grupo: <?php echo $grupo; ?></h4>
            <h4>-----------------------lISTA DE ASISTENCIA----------------</h4>

        </tr>
        <tr>

            <th scope="col" style="background-color:black; color:bisque">Matriculas</th>
            <th scope="col" style="background-color:black; color:bisque">Nombres completos</th>

        </tr>

        <?php
        $sql = "SELECT alumnos.nombre AS alumno , alumnos.apellidos , carga_academica.id_uacademica AS id, unidad_academica.nombre AS materia,
docentes.nombre AS maestro, carga_academica.grupo, carga_academica.hora, alumnos.matricula
FROM inscritos
JOIN carga_academica ON carga_academica.id = inscritos.id_carga_academica
JOIN docentes ON docentes.id_docente = carga_academica.id_docente
JOIN unidad_academica ON unidad_academica.id_uacademica = carga_academica.id_uacademica
JOIN alumnos ON alumnos.id_alumno = inscritos.id_alumno
WHERE inscritos.id_carrera = '$carrera' AND unidad_academica.id_uacademica = '$materia' AND carga_academica.semestre = '$semestre' AND docentes.id_docente = '$user_id' AND carga_academica.grupo = '$grupo'";

        $resultado = mysqli_query($conn, $sql);

        // recorrer los resultados y crear las opciones para el select
        if (mysqli_num_rows($resultado) > 0) {
            while ($fila = mysqli_fetch_assoc($resultado)) { ?>

                <tr>
                    <td><?php echo $fila['matricula'] ?></td>
                    <td><?php echo $fila['alumno'] . ' ' . $fila['apellidos'] ?></td>

                </tr>
        <?php

            }
        }

        ?>
    </table>
<?php
}

?>