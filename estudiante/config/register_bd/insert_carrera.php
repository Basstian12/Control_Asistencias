<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php

require('../../config/db.php');


$nombre = $_POST['carrera'];
$facultad = $_POST['facultad'];
$direccion = $_POST['direccion'];



$sql = "INSERT INTO carreras (nombre,facultad,area_estudio) VALUES ('$nombre','$facultad','$direccion')";

if ($conn->query($sql)) {
    echo 'Registro insertado correctamente';
}




?>