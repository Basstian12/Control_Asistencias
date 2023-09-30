<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Docente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <?php
    include('../links.php');
    ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../config/register_bd/scripts.js"></script>



</head>


<body>
    <?php
    include('../header.php');

    include('../../../config/db.php');
    ?>
    
   
        <?php
        include('../nav.php');
        ?>
       </div> <br>
        <main class="sm">

            <div class="container">
                <div class="container-sm">
                    <!-- Button trigger modal -->
                    <div class="alert alert-dark text-dark fw-bold">
                        <p>Buscar estudiante</p>
                        <div class="container">
                            <form class="form-control">
                                <div class="d-flex">

                                    <div class="m-2">
                                        <label for="carrer" class="form-label">Carrera:</label>
                                        <select name="carrera" id="carrera" class="form-select" onchange="buscarMateria()">
                                            <option value="0">Elegir carrera</option>
                                            <?php

                                            $query = $conn->query("SELECT * FROM carreras");
                                            while ($valores = mysqli_fetch_array($query)) {
                                                echo '<option value="' . $valores['id_carrera'] . '">' . $valores['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="m-2">
                                        <label for="semestre" class="form-label">Semestre:</label>
                                        <select name="semestre" id="semestre" class="form-select" onchange="buscarMateria()">
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

                                    <div class="form-group m-2">
                                        <label for="materia" class="form-label">Materia:</label>
                                        <select name="materia" id="select_materia" class="form-select">
                                            <option value="0">Seleccionar</option>
                                        </select>
                                    </div>

                                    <script>
                                        function buscarMateria() {
                                            var valor1 = document.getElementById("carrera").value;
                                            var valor2 = document.getElementById("semestre").value;
                                            var xmlhttp = new XMLHttpRequest();
                                            xmlhttp.onreadystatechange = function() {
                                                if (this.readyState == 4 && this.status == 200) {
                                                    document.getElementById("select_materia").innerHTML = this.responseText;
                                                }
                                            };
                                            xmlhttp.open("GET", "../../config/register_bd/search_materias.php?carrera=" + valor1 + "&semestre=" + valor2, true);

                                            xmlhttp.send();
                                        }
                                    </script>
                                    <div class="m-2">
                                        <label for="grupo" class="form-label">Grupo:</label>
                                        <select name="grupo" id="grupo" class="form-select">
                                            <option value="0">Seleccionar</option>
                                            <option value="J">J</option>
                                            <option value="K">K</option>
                                            <option value="L">L</option>
                                        </select>
                                    </div>

                                    <div class="form-group m-2">
                                        <label for="" class="form-label"></label><br>
                                        <button type="submit" class="btn btn-info" id="buscaralumno_btn">Buscar</button>
                                    </div>



                                </div>
                            </form>
                        </div>



                    </div>

                </div>
            </div>





            <table class="table">
                <thead>
                    <tr>


                        <th scope="col">Matricula</th>
                        <th scope="col">Alumnos</th>
                        <th scope="col">Grupo</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Opciones</th>

                    </tr>
                </thead>
                <tbody class="table-group-divider" id="resultado_alumno">



                </tbody>
            </table>

            <div id="excel">

            </div>

            <!-- Reporte de asistencias -->

            <div class="container alert alert-info">
                <h4>Generar reporte de alumnos por materia y grupo</h4>
                <form class="form-control" method="POST" action="reporte_asistencias.php" id="reporte_excel">
                    <div class="d-flex">

                        <div class="m-2">
                            <label for="carrer" class="form-label">Carrera:</label>
                            <select name="carrera" id="carrera_reporte" class="form-select" onchange="materiaReporte()">
                                <option value="0">Elegir carrera</option>
                                <?php

                                $query = $conn->query("SELECT * FROM carreras");
                                while ($valores = mysqli_fetch_array($query)) {
                                    echo '<option value="' . $valores['id_carrera'] . '">' . $valores['nombre'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="m-2">
                            <label for="semestre" class="form-label">Semestre:</label>
                            <select name="semestre" id="semestre_reporte" class="form-select" onchange="materiaReporte()">
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

                        <div class="form-group m-2">
                            <label for="materia" class="form-label">Materia:</label>
                            <select name="materia" id="materia_reporte" class="form-select">
                                <option value="0">Seleccionar</option>
                            </select>
                        </div>

                        <script>
                            function materiaReporte() {
                                var valor1 = document.getElementById("carrera_reporte").value;
                                var valor2 = document.getElementById("semestre_reporte").value;
                                var xmlhttp = new XMLHttpRequest();
                                xmlhttp.onreadystatechange = function() {
                                    if (this.readyState == 4 && this.status == 200) {
                                        document.getElementById("materia_reporte").innerHTML = this.responseText;
                                    }
                                };
                                xmlhttp.open("GET", "../../config/register_bd/search_materias.php?carrera=" + valor1 + "&semestre=" + valor2, true);

                                xmlhttp.send();
                            }
                        </script>
                        <div class="m-2">
                            <label for="grupo" class="form-label">Grupo:</label>
                            <select name="grupo" id="grupo" class="form-select">
                                <option value="0">Seleccionar</option>
                                <option value="J">J</option>
                                <option value="K">K</option>
                                <option value="L">L</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group m-2">
                        <label for="" class="form-label"></label><br>
                        <button type="submit" class="btn btn-success" name="generar_reporte" id="btn_reporte"><i class="bi bi-file-earmark-excel"></i> Generar Reporte</button>
                    </div>
                </form>

            </div>






        </main>
    

    <!-- script modal -->
    <?php
    include('../modals/script.php')

    ?>


</body>

</html>