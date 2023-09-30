<?php
require('../db.php');


$carrera = $_POST["carrera"];
$semestre = $_POST["semester"];

$sql = "SELECT  carga_academica.id,unidad_academica.nombre AS materia,carreras.nombre AS carrera, 
docentes.nombre AS docente,docentes.apellidos AS apellidos, unidad_academica.semestre AS semestre
,carga_academica.hora 
FROM carga_academica 
JOIN docentes ON docentes.id_docente = carga_academica.id_docente
JOIN unidad_academica ON unidad_academica.id_uacademica = carga_academica.id_uacademica 
JOIN carreras ON carreras.id_carrera = unidad_academica.id_carrerrafk
WHERE unidad_academica.semestre = '$semestre' AND unidad_academica.id_carrerrafk = '$carrera';";

$resultado = mysqli_query($conn, $sql);

// recorrer los resultados y crear las opciones para el select
if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) {

        echo '<tr><td>' . $fila['carrera'] . '</td> <td>' . $fila['materia'] . '</td>
      <td>' . $fila['docente'] . $fila['apellidos'] . '</td><td>' . $fila['semestre'] . '</td><td>' . $fila['hora'] . '</td>
      <td class="text-center">
         <div class=" d-flex justify-content-center">
           <div class="me-1">
            <button class="btn btn-success">Editar</button>
           </div>
           <div>
              <button class="btn btn-danger eliminar_carga" data-id="' . $fila['id'] . '">Eliminar</button>
           </div>
        </div>
        </td>
      </tr>';
    }
} else {
    echo "<script>
            Swal.fire({
              icon: 'error',
              title: 'No se encontro resultado de la busqueda',
              showConfirmButton: false,
              timer: 1500
            }) </script>
    ";
}
// devolver las opciones para el select en formato JSON

?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../../config/register_bd/scripts.js"></script>