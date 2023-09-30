<!-- Button trigger modal -->
<button type="button" class="btn btn-info detalles" data-id="<?php echo $fila['id_alumno'] ?>" data-bs-toggle="modal" data-bs-target="#modalDetalles">
    Detalles
</button>

<input type="text" hidden id="carreras_alumn" value="<?php echo $fila['id_carrera'] ?>">
<input type="text" hidden id="semestres_alumn" value="<?php echo $fila['semestre'] ?>">
<input type="text" hidden id="materias_alumn" value="<?php echo $fila['id_uacademica'] ?>">
<input type="text" hidden id="grupos_alumn" value="<?php echo $fila['grupo'] ?>">

<!-- Modal -->
<div class="modal fade" id="modalDetalles" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Notificar alumno</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">



                <table id="d-alumn-sem" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Estatus</th>
                        </tr>
                    </thead>
                    <tbody id="result_detalle">

                    </tbody>

                </table>

            </div>

            </form>

        </div>
    </div>
</div>