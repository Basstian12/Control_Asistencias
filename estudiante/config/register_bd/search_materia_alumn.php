<?php

session_start();
// Conectar a la base de datos

require('../../config/db.php');

// Obtener el valor de búsqueda del parámetro GET
$user_id = $_SESSION['alumn_id'];


$carrera = $_GET["carrera"];
$semestre = $_GET["semestre"];
$grupo = $_GET["grupo"];

echo $carrera.$semestre. $grupo;

// consulta SQL para buscar los datos
$sql = "SELECT * FROM carga_academica 
LEFT JOIN unidad_academica ON unidad_academica.id_uacademica = carga_academica.id_uacademica
WHERE unidad_academica.id_carrerrafk = '$carrera' AND unidad_academica.semestre='$semestre' AND carga_academica.grupo='$grupo'";

// ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);

// recorrer los resultados y crear las opciones para el select
$options = "";
while ($fila = mysqli_fetch_array($resultado)) {
    echo '<option value="'.$fila['id'].'">' . $fila['nombre'] . '</option>';
}

// cerrar la conexión a la base de datos
mysqli_close($conn);

// devolver las opciones para el select en formato JSON
echo json_encode($options);


