<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<?php

require('../../config/db.php');

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$cedula = $_POST['cedula'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$direccion = $_POST['direccion'];

$sql = "INSERT INTO docentes (nombre,apellidos,cedula,correo,contraseña,direccion) VALUES 
 ('$nombre','$apellidos','$cedula','$correo','$contraseña','$direccion')";

if ($conn->query($sql)) {
    echo 'Registro insertado correctamente';
}




?>