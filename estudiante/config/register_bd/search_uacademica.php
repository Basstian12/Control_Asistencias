<?php
require('../db.php');

session_start();

$user_id = $_SESSION['user_id'];

$carrera = $_POST["carrera"];
$semestre = $_POST["semester"];
$materia = $_POST["materia"];
$grupo = $_POST["grupo"];




$sql = "SELECT alumnos.nombre AS alumno ,inscritos.id_carrera,unidad_academica.semestre,unidad_academica.id_uacademica ,alumnos.id_alumno, alumnos.apellidos , carga_academica.id_uacademica AS id, unidad_academica.nombre AS materia,
docentes.nombre AS maestro, carga_academica.grupo, carga_academica.hora, alumnos.matricula, inscritos.id_carrera
FROM inscritos
JOIN carga_academica ON carga_academica.id = inscritos.id_carga_academica
JOIN docentes ON docentes.id_docente = carga_academica.id_docente
JOIN unidad_academica ON unidad_academica.id_uacademica = carga_academica.id_uacademica
JOIN alumnos ON alumnos.id_alumno = inscritos.id_alumno
WHERE inscritos.id_carrera = '$carrera' AND unidad_academica.id_uacademica = '$materia' AND unidad_academica.semestre = '$semestre' AND docentes.id_docente = '$user_id' AND carga_academica.grupo = '$grupo'";

$resultado = mysqli_query($conn, $sql);

// recorrer los resultados y crear las opciones para el select
if (mysqli_num_rows($resultado) > 0) {
  while ($fila = mysqli_fetch_assoc($resultado)) { ?>
    <tr>
      <td class="fw-bold"><?php echo $fila['matricula'] ?></td>
      <td><?php echo $fila['alumno'] . ' ' . $fila['apellidos'] ?></td>
      <td><?php echo $fila['grupo'] ?></td>
      <td><?php echo $fila['hora'] ?></td>
      <td class="text-center">
        <div class=" d-flex justify-content-center">
          <div class="me-1">
            <?php
            require("../../views/modals/details-alumn.php");
            ?>
          </div>

          <div>

          </div>
        </div>
      </td>

    </tr>
<?php
  }
} else {
  echo "<script>
            Swal.fire({
              icon: 'error',
              title: 'No se encontro resultado de la busqueda',
              showConfirmButton: false,
              timer: 1500
            }) </script>
    ";
}
// devolver las opciones para el select en formato JSON

?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../../config/register_bd/scripts.js"></script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function() {
    $('#alumno').DataTable({
      "pageLength": 5,
      "lengthMenu": [5, 10, 25, 50, 75, 100],
      "language": {
        "url": "https://cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json"

      }

    });
  });
</script>