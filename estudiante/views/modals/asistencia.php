<!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#asistencia">
    Registrar Asistencia
</button>

<!-- Modal -->
<div class="modal fade" id="asistencia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar una asistencia</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-secondary-emphasis">
                <div class="container mt-5">
                    <form id="form_asistencias">
                        <div class="form-group">

                            <label for="materia" class="fw-bold">Materia:</label>
                            <select name="materias" id="materias" class="form-select">
                                <option value="0">Elegir materia</option>
                                <?php
                                session_start();

                                $user_id = $_SESSION['alumn_id'];

                                $query = $conn->query("SELECT inscritos.id_carga_academica, 
                                carga_academica.id_uacademica, unidad_academica.nombre 
                                FROM inscritos 
                                LEFT JOIN carga_academica ON carga_academica.id = inscritos.id_carga_academica
                                LEFT JOIN unidad_academica ON unidad_academica.id_uacademica = carga_academica.id_uacademica
                                WHERE inscritos.id_alumno = '$user_id'");
                                while ($valores = mysqli_fetch_array($query)) {
                                    echo '<option value="' . $valores['id_carga_academica'] . '">' . $valores['nombre'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status" class="fw-bold">Estatus:</label>
                            <select name="estatus" id="status" class="form-select">
                                <option value="0">Seleccionar</option>
                                <option value="ASISTENCIA">ASISTENCIA</option>
                                <option value="FALTA">FALTA</option>
                                <option value="RETARDO">RETARDO</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="fecha" class="fw-bold">Dia:</label>
                            <input type="date" class="form-control" name="fecha" value="" id="fecha">
                        </div>
                        <div class="form-group">
                            <label for="hora" class="fw-bold">Hora:</label>
                            <input type="time" class="form-control" name="hora" value="" id="hora">
                        </div>
                        <div class="form-group">
                            <label for="comentario" class="fw-bold">Comentario:</label>
                            <textarea name="comentario" id="comentario" cols="30" rows="5" class="form-control"></textarea>
                        </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Limpiar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
            </form>

        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>