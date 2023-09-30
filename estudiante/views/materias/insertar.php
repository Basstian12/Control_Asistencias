
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php

require('../../config/db.php');


$materia = $_POST['materia'];
$alumno = $_POST['alumno'];
$carrera = $_POST['carrera'];



$sql = "INSERT INTO inscritos (id_carga_academica,id_alumno,id_carrera) VALUES ('$materia','$alumno','$carrera')";

if ($conn->query($sql)) {
    echo 'Registro insertado correctamente';
}





?>