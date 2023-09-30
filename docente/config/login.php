
<?php

session_start();

include "db.php"; // Archivo que contiene la conexión a la base de datos

if (isset($_POST['correo']) && isset($_POST['password'])) {
    $username = $_POST['correo'];
    $password = $_POST['password'];

    $query = "SELECT * FROM super_user WHERE correo='$username' AND contraseña='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['correo'] = $username;
        header("Location: ../views/estudiantes/index.php"); // Página a la que se redirige después de iniciar sesión correctamente
        die();
    } else {
        header("Location: ../index.php?error");
        die();
    }
} else {
    header("Location: index.php");
    die();
}

?>