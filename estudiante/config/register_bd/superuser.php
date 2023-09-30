<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php

require('../../config/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre_user'];
    $correo = $_POST['correo_user'];
    $password = $_POST['pass_user'];


    $sql = "INSERT INTO super_user (nombre_completo,correo,contraseña) VALUES ('$nombre','$correo','$password')";
    $resultado = mysqli_query($conn, $sql);

    if ($resultado) {
        // Si la inserción fue exitosa, crear una variable con un mensaje de éxito
        echo json_encode(array('success' => true));
    } else {
        // Si la inserción falló, crear una variable con un mensaje de error
        echo json_encode(array('error' => false));
    }
}


?>