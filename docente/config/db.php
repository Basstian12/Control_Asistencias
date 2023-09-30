<?php

$servername = "localhost"; //nombre del servidor
$username = "root"; //nombre de usuario de la base de datos
$password = ""; //contraseña de la base de datos
$dbname = "unach"; //nombre de la base de datos

// Crear la conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}




?>