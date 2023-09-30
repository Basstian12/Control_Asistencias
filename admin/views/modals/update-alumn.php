<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#upAlumn">
    Actualizar
</button>

<!-- Modal -->
<div class="modal fad" id="upAlumn" tabindex="-100" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <label for="nombre">Matricula:</label>
                            <input type="text" class="form-control" name="matricula" value="A190435">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" value="Sebastian">
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellidos:</label>
                            <input type="text" class="form-control" name="apellidos" value="Hernandez Silvano">
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo electrónico:</label>
                            <input type="email" class="form-control" name="correo" value="sebastian.hernandez60@unach.mx">
                        </div>
                        <div class="form-group">
                            <label for="contraseña">Contraseña:</label>
                            <input type="password" class="form-control" id="contraseña" value=".......">
                        </div>
                        <div class="form-group">
                            <label for="apellido">Grado y Grupo:</label>
                            <select name="grado_grupo" id="grado_grupo" class="form-select">
                                <option selected>Seleccionar</option>
                                <option value="8 K">8 K</option>
                                <option value="8 J">8 J</option>
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
