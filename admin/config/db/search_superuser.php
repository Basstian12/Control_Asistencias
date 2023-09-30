<?php


session_start();
// Conexión a la base de datos
require('../db.php');




if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtener los valores del formulario
  $correo = $_POST['correo'];
  $contraseña = $_POST['password'];

  // Verificar si existe un usuario con ese correo y contraseña
  $sql = "SELECT * FROM super_user WHERE correo = '$correo' AND contraseña = '$contraseña'";
  $resultado = mysqli_query($conn, $sql);

  if (mysqli_num_rows($resultado) > 0) {
    // Si existe un usuario con ese correo y contraseña, inicia la sesión del usuario
    session_start();
    $_SESSION['correo'] = $correo;
    header('Location: ../../views/estudiantes/index.php');
  } else {
    // Si no existe un usuario con ese correo y contraseña, muestra un mensaje de error
    echo 'Correo o contraseña incorrectos.';
  }
}

mysqli_close($conn);
