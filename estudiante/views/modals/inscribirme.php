<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Inscribirme
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar materia</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container mt-5">
                    <form id="form_inscripcion">
                        <div class="form-group">
                            <label for="carrera" class="form-label">Carrera:</label>
                            <select name="carrera" id="carreras" class="form-select" onchange="buscarMateriaI()">
                                <option value="0">Elegir carrera</option>
                                <?php
                                $query = $conn->query("SELECT * FROM carreras");
                                while ($valores = mysqli_fetch_array($query)) {
                                    echo '<option value="' . $valores['id_carrera'] . '">' . $valores['nombre'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="carrera" class="fw-bold">Semestre:</label>
                            <select name="semestre" id="semestre" class="form-select" onchange="buscarMateriaI()">
                                <option value="0">Seleccionar</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="carrera" class="fw-bold">GRUPO:</label>
                            <select name="grupos" id="grupos" class="form-select" onchange="buscarMateriaI()">
                                <option value="0">Seleccionar</option>
                                <option value="J">J</option>
                                <option value="K">K</option>
                                <option value="L">L</option>
                                <option value="M">M</option>
                            </select>
                        </div>

                        <script>
                            function buscarMateriaI() {
                                var valor1 = document.getElementById("carreras").value;
                                var valor2 = document.getElementById("semestre").value;
                                var valor3 = document.getElementById("grupos").value;
                                var xmlhttp = new XMLHttpRequest();
                                xmlhttp.onreadystatechange = function() {
                                    if (this.readyState == 4 && this.status == 200) {
                                        document.getElementById("select3").innerHTML = this.responseText;
                                    }
                                };
                                xmlhttp.open("GET", "../../config/register_bd/search_materia_alumn.php?carrera=" + valor1 + "&semestre=" + valor2 + "&grupo=" + valor3, true);
                                xmlhttp.send();
                            }
                        </script>
                        <div class="form-group">
                            <label for="materia" class="fw-bold">Materia:</label>
                            <select name="materia" id="select3" class="form-select">
                                <option selected>Seleccionar</option>
                            </select>
                        </div>
                        <?php
                        $user_id = $_SESSION['alumn_id'];
                        ?>
                        <input type="text" value="<?php echo $user_id ?>" name="alumno" hidden>
                        


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