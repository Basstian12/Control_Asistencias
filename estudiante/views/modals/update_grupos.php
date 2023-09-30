<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#upAlumn">
    Actualizar
</button>

<!-- Modal -->
<div class="modal fade" id="upAlumn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar datos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container mt-5">
                    <form action="insertar.php" method="POST">
                        <div class="form-group">
                            <label for="nombre">Id Grupo:</label>
                            <input type="text" class="form-control" name="idgrupo" value="8_KLSC2023">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Grupo:</label>
                            <input type="text" class="form-control" name="grupo" value="K">
                        </div>
                        <div class="form-group">
                            <label for="apellido">Grado:</label>
                            <input type="text" class="form-control" name="grado" value="8">
                        </div>

                        <div class="form-group">
                            <label for="apellido">Turno:</label>
                            <select name="turno" id="turno" class="form-select">
                                <option selected>Seleccionar</option>
                                <option value="MATUTINO">MATUTINO</option>
                                <option value="VESPERTINO">VESPERTINO</option>
                            </select>
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