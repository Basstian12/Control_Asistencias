<!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#upAlumn">
    Notificar
</button>

<!-- Modal -->
<div class="modal fade" id="upAlumn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-secondary">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Notificar alumno</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-secondary">
                <div class="container mt-5">
                    <form action="#" method="POST">
                        <div class="form-group">
                            <label for="asunto" class="text-light">Asunto:</label>
                            <input type="text" class="form-control" name="asunto" value="" id="asunto">
                        </div>
                        <div class="form-group">
                            <label for="nota" class="text-light">Nota:</label>
                            <textarea name="nota" id="nota" cols="30" rows="10" class="form-control"></textarea>
                            
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
