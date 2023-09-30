<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#upAlumn">
    Actualizar
</button>

<!-- Modal -->
<div class="modal fade" id="upAlumn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Materia</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container mt-5">
                    <form action="insertar.php" method="POST">
                        <div class="form-group">
                            <label for="uacadem" class="fw-bold">Unidad Academica:</label>
                            <select name="uacadem" id="uacadem" class="form-select">
                                <option selected>Seleccionar</option>
                                <option value="Enero2023-Junio2023">Enero2023-Junio2023</option>
                                <option value="Agosto2023-Diciembre2023">Agosto2023-Diciembre2023</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="docente" class="fw-bold">Docente:</label>
                            <select name="docente" id="docente" class="form-select">
                                <option selected>Seleccionar</option>
                                <option value="Rigoberto Perez Ovando">Rigoberto Perez Ovando</option>
                                <option value="Hector Nuricumbo">Hector Nuricumbo</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="carrera" class="fw-bold">Semestre:</label>
                            <select name="semestre" id="semestre" class="form-select">
                                <option selected>Seleccionar</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="carrera" class="fw-bold">Grupo:</label>
                            <select name="grupo" id="grupo" class="form-select">
                                <option selected>Seleccionar</option>
                                <option value="J">J</option>
                                <option value="K">K</option>
                                <option value="L">L</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="turno" class="fw-bold">Turno:</label>
                            <select name="turno" id="turno" class="form-select">
                                <option selected>Seleccionar</option>
                                <option value="Matutino">Matutino</option>
                                <option value="Vespertino">Vespertino</option>
                            </select>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="apellido" class="fw-bold">Hora:</label>
                            <div><label for="hinicio">Inicio:</label>
                                <input type="time" class="form-control">
                            </div>
                            <div><label for="hfin">Fin:</label>
                                <input type="time" class="form-control">
                            </div>
                            <hr>
                        </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Limpiar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Insertar</button>
            </div>
            </form>

        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>