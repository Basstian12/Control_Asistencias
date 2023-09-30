


<?php
require('../db.php');

$buscar = $_POST["matricula"];


// Consulta SQL para buscar registros que contengan el término de búsqueda
$sql = "SELECT * FROM alumnos WHERE matricula = '$buscar'";

// Ejecutar la consulta SQL y obtener los resultados
$alumnos = mysqli_query($conn, $sql);

// Mostrar los resultados en formato HTML
if (mysqli_num_rows($alumnos) > 0) {
    while ($fila = mysqli_fetch_assoc($alumnos)) {

        echo '<tr>';
        echo '<td>' . $fila['nombre'] . '</td>';
        echo '<td>' . $fila['apellidos'] . '</td>';
        echo '<td class="text-center">
         <div class=" d-flex justify-content-center">
           <div class="me-1">
            <button class="btn btn-success">Editar</button>
           </div>
           <div>
              <button class="btn btn-danger eliminar" data-id="' . $fila['id_alumno'] . '">Eliminar</button>
           </div>
           
        </div>
        </td>';

        echo '</tr>';
    }
} else {
    echo "<p>No se encontraron resultados.</p>";
}

?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../../config/register_bd/scripts.js"></script>
