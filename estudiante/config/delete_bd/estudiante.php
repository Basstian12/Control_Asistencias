
<?php

require('../db.php');

if (isset($_POST["id"])) {

    $id = $_POST["id"];
    $sql = "DELETE FROM alumnos WHERE id_alumno = $id";
    if (mysqli_query($conn, $sql)) {
        echo "Registro eliminado con éxito.";
    } else {
        echo "ERROR: No se pudo eliminar el registro.";
    }
    mysqli_close($conn);
}

?>