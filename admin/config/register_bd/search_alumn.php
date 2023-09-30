<?php
// Conectar a la base de datos

require('../../config/db.php');

// Obtener el valor de búsqueda del parámetro GET
$carrera = $_GET["carrera"];
$semestre = $_GET["semestre"];


// consulta SQL para buscar los datos
$sql = "SELECT unidad_academica.nombre FROM unidad_academica JOIN carreras ON 
unidad_academica.id_carrerrafk = carreras.id_carrera WHERE unidad_academica.semestre = '$semestre' AND carreras.nombre = '$carrera'";

// ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);

// recorrer los resultados y crear las opciones para el select
$options = "";
while ($fila = mysqli_fetch_array($resultado)) {
    echo '<option value="' . $fila['nombre'] . '">' . $fila['nombre'] . '</option>';
}

// cerrar la conexión a la base de datos
mysqli_close($conn);

// devolver las opciones para el select en formato JSON
echo json_encode($options);
?>