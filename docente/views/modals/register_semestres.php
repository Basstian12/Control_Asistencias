<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Registrar
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar un semestre</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container mt-5">
                    <form action="insertar.php" method="POST">
                        <div class="form-group">
                            <label for="nombre">Id Semestre:</label>
                            <input type="text" class="form-control" name="idgrupo">
                        </div>
                        <div class="form-group">
                            <label for="apellido">Carrera:</label>
                            <select name="turno" id="turno" class="form-select">
                                <option selected>Seleccionar</option>
                                <option value="LSC">LSC</option>
                                <option value="LIDTS">LIDTS</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="apellido">Semestre:</label>
                            <select name="semestre" id="turno" class="form-select">
                                <option selected>Seleccionar</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
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