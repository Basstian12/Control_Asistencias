<!-- Button trigger modal -->

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insert_superuser">
    Nuevo usuario
</button>

<!-- Modal -->
<div class="modal fade" id="insert_superuser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar superusuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container mt-5">
                    <form id="form_superUser">
                        <div class="form-group">
                            <label for="nombre_user" class="fw-bold">Nombre:</label>
                            <input type="text" class="form-control" name="nombre_user" required>
                        </div>
                        <div class="form-group">
                            <label for="correo_user" class="fw-bold">Correo:</label>
                            <input type="email" class="form-control" name="correo_user" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="pass_user" class="fw-bold">Contraseña:</label>
                            <input type="password" class="form-control" name="pass_user" required>
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