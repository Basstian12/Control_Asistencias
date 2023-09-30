
<?php

require('../db.php');

if (isset($_POST["id_docente"])) {

    $id = $_POST["id_docente"];
    
    $sql = "DELETE FROM docentes WHERE id_docente = $id";
    if (mysqli_query($conn, $sql)) {
        echo "Registro eliminado con éxito.";
    } else {
        echo "ERROR: No se pudo eliminar el registro.";
    }
    mysqli_close($conn);
}

?>