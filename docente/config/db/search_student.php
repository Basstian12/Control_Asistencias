<?php
require('../db.php');

$id_alumno = $_POST["id_alumno"];


// Consulta SQL para buscar registros que contengan el término de búsqueda
$sql = "SELECT * FROM alumnos WHERE matricula = '$id_alumno'";

// Ejecutar la consulta SQL y obtener los resultados
$alumnos = mysqli_query($conn, $sql);

// Mostrar los resultados en formato HTML
if (mysqli_num_rows($alumnos) > 0) {
    while ($fila = mysqli_fetch_assoc($alumnos)) { ?>

        <tr>
            <td><?php echo $fila['nombre'] ?></td>
            <td><?php echo $fila['matricula'] ?></td>
        </tr>

<?php }
} else {
    echo "<p>No se encontraron mas detalles.</p>";
}

?>

