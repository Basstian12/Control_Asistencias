<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php

session_start();

$user_id = $_SESSION['alumn_id'];

require('../../config/db.php');

$materia = $_POST['materias'];
$estatus = $_POST['estatus'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$comentario = $_POST['comentario'];

echo $materia . ' ' . $estatus . ' ' . $fecha .' ' . $hora . ' ' .' '.$comentario;

$sql = "INSERT INTO asistencias (fecha,hora,estatus,id_cargaacademica,id_alumno,comentario) VALUES 
 ('$fecha','$hora','$estatus','$materia','$user_id','$comentario')";

if ($conn->query($sql)) {
    echo 'Registro insertado correctamente';
}




?>