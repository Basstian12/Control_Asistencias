<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Mas detalles
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Detalle de alumnos por semestre</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-dark-light">
                <div class="m-2">
                    <form action="#">
                        <div class="d-flex">
                            <div>
                                <label for="carrera-e" class="form-label">CARRRERAS:</label>
                                <select name="carrera" id="carrera" class="form-select">
                                    <option value="" selected>Seleccionar</option>
                                    <option value="Lic. Sistemas computacionales">Lic. Sistemas computacionales</option>
                                    <option value="Lic. Ingenieria en desarrollo y tecnologia de software">Lic. Ingenieria en desarrollo y tecnologia de software</option>
                                </select>
                            </div>
                            <div class="m-2">
                                <button class="btn btn-primary mt-4" type="submit">Buscar</button>
                            </div>
                        </div>
                    </form>
                </div>


                <table id="d-alumn-sem" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Matriculas</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Carrera</th>
                            <th>U_Academica</th>
                            <th>Grupos</th>
                            <th>Materias</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>A190436</td>
                            <td>Juan</td>
                            <td>Gomez</td>
                            <td>Lic. Sistemas computacionales</td>
                            <td>Enero2023-Junio2023</td>
                            <td>8 K</td>
                            <td>
                                <div>
                                    <select name="materia" id="materia" class="form-select">
                                        <option value="Auditoria web">Auditoria web</option>
                                        <option value="Ingenieria de software">Ingenieria de software</option>
                                        <option value="Oracle">Oracle</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <button class="mt-1 btn btn-danger" type="submit">Eliminar</button>

                            </td>

                        </tr>
                        <tr>
                            <td>A190435</td>
                            <td>Sebastian</td>
                            <td>Hernandez</td>
                            <td>Lic. Sistemas computacionales</td>
                            <td>Enero2023-Junio2023</td>
                            <td>8 K</td>
                            <td>
                                <div>
                                    <select name="materia" id="materia" class="form-select">
                                        <option value="Auditoria web">Auditoria web</option>
                                        <option value="Ingenieria de software">Ingenieria de software</option>
                                        <option value="Oracle">Oracle</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <button class="mt-1 btn btn-danger" type="submit">Eliminar</button>

                            </td>

                        </tr>



                    </tbody>

                </table>
            </div>
            <div class="modal-footer">
                <div class="alert text-center">

                    <button type="button" class="btn btn-success ">
                        <i class="bi bi-file-earmark-excel"></i> Generar Reporte
                    </button>
                </div>
                <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Limpiar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#d-alumn-sem').DataTable({
            /* "paging": false, */
            "destroy": true,
            "pageLength": 5,
            "lengthMenu": [5, 10, 25, 50, 75, 100],
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json"

            }


        });
    });
</script>