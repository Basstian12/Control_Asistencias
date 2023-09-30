<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

require('db.php');

$user = $_POST["user"];
$email = $_POST["email"];
$pass = $_POST["pass"];


echo $user;
echo '<br>';
echo $email;
echo '<br>';
echo $pass;
echo '<br>';

if ($user == 1) {
    session_start();
    $sql = "SELECT * FROM docentes WHERE correo = '$email' AND contraseña = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Obtener los datos del usuario desde la base de datos
        $row = $result->fetch_assoc();

        // Crear una sesión y almacenar los datos del usuario
        $_SESSION['user_id'] = $row['id_docente'];
        $_SESSION['user_name'] = $row['nombre'];

        // Redirigir al usuario a la página de inicio
        header("Location: ../docente/views/estudiantes/index.php");
    } else {
        header("Location: ../index.php?error");
        die();
    }
} else {

    session_start();
    $sql = "SELECT * FROM alumnos WHERE correo = '$email' AND contraseña = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Obtener los datos del usuario desde la base de datos
        $row = $result->fetch_assoc();

        // Crear una sesión y almacenar los datos del usuario
        $_SESSION['alumn_id'] = $row['id_alumno'];
        $_SESSION['alumn_name'] = $row['nombre'];

        // Redirigir al usuario a la página de inicio
        header("Location: ../estudiante/views/estudiantes/index.php");
    } else {
        header("Location: ../index.php?error");
        die();
    }
}

?>

