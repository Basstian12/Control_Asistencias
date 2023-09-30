<?php
include('../../../config/db.php');

session_start();

if (isset($_SESSION['alumn_id'])) {

    $user_id = $_SESSION['alumn_id'];
    $sql = "SELECT * FROM alumnos WHERE id_alumno = '$user_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Obtener los datos del usuario
        $row = $result->fetch_assoc();

        $nombre = $row['nombre'];
        $correo = $row['correo'];

        // Mostrar los datos del usuario


    } else {
        echo "Usuario no encontrado.";
    }
} else {
    echo "<script>
    alert('Por favor inicie sesion');
    window.location.href='../../../index.php';
    </script>";
}
?>

<nav class="navbars">
    <div class="container-fluid d-flex">
        <div class="logo d-flex" >
            <div>
                <img src="../../../crs/img/logo_unach.png" alt="Logo" width="60px">
            </div>
            <div class="ms-2 mt-2">
                <h5 class="text-white">Universidad Autónoma de Chiapas</h5>
            </div>
        </div>
        <div class="d-flex info">
            <div class="">
                <h5 class="text-info"><i class="bi bi-circle-fill text-info"></i> Bienvenido: <?php
                                                                                                echo $nombre;                                                                          ?></h5>
            </div>

            <div class="ms-5">
                <a href="../../../config/sesiondestroy.php" class="btn btn-danger">Salir</a>
            </div>
        </div>
    </div>
</nav>
<div class="mt-">