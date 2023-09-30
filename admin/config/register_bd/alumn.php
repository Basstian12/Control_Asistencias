<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>





<?php

require('../../config/db.php');

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$matricula = $_POST['matricula'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$direccion = $_POST['direccion'];

$sql = "INSERT INTO alumnos (nombre,apellidos,matricula,correo,contraseña,direccion) VALUES 
 ('$nombre','$apellidos','$matricula','$correo','$contraseña','$direccion')";

if ($conn->query($sql)) {
    echo 'Registro insertado correctamente';
}




?>