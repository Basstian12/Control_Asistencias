<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<?php

require('../../config/db.php');

$grupo = $_POST['grupo'];
$materia = $_POST['materia'];
$semestre = $_POST['semestre'];
$carrera = $_POST['carrera'];
$docente = $_POST['docente'];
$hora = $_POST['hora'];
$turno = $_POST['turno'];


$sql = "INSERT INTO carga_academica (grupo,id_uacademica,id_docente,hora,turno,semestre, carrera) VALUES 
 ('$grupo','$materia','$docente','$hora','$turno','$semestre','$carrera')";

if ($conn->query($sql)) {

    echo 'Registro insertado correctamente';
}




?>