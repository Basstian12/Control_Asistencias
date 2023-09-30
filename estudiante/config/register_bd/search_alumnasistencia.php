<?php
require('../db.php');

session_start();

$user_id = $_SESSION['alumn_id'];
$materia = $_POST["materia"];

// Consulta SQL para buscar registros que contengan el término de búsqueda
$sql = "SELECT A.fecha,A.hora, A.estatus, A.comentario  FROM asistencias AS A LEFT JOIN carga_academica AS C_A
ON A.id_cargaacademica = C_A.id
LEFT JOIN unidad_academica AS UA
ON UA.id_uacademica = C_A.id_uacademica
WHERE A.id_alumno='$user_id' AND UA.id_uacademica = '$materia'";

// Ejecutar la consulta SQL y obtener los resultados
$resultado = mysqli_query($conn, $sql);

// Mostrar los resultados en formato HTML
// recorrer los resultados y crear las opciones para el select
if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <td class="fw-bold"><?php echo $fila['fecha'] ?></td>
            <td><?php echo $fila['hora'] ?></td>
            <td><?php echo $fila['estatus'] ?></td>
            <td><?php echo $fila['comentario'] ?></td>

        </tr>
<?php
    }
} else {
    echo " No se encontro ningun dato
    ";
}


?>