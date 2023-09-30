<?php


require('../db.php');


// Consulta SQL para buscar registros que contengan el término de búsqueda
$sql = "SELECT * FROM carreras ";

// Ejecutar la consulta SQL y obtener los resultados
$resultado = mysqli_query($conn, $sql);

// Mostrar los resultados en formato HTML


if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo 
        "<div class='row'>".
        "<h5 class='text-info col-11'>".$fila["nombre"]."</h5>".
        "</div>"
        ;
        
   
    }
} else {
    echo "<p>No se encontraron resultados.</p>";
}
