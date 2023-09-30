<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin-Materias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../../crs/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="../../config/register_bd/scripts.js"></script>

</head>


<body>

    <?php
    include('../../config/db.php');
    ?>

    <?php
    include('../header.php');
    ?>
    <div>
        <?php
        include('../nav.php');
        ?>
        <br>
        <main class="bg-light  border-">

            <div class="container">
                <div class="container-sm">
                    <!-- Button trigger modal -->


                    <?php
                    include('../modals/register_materias.php');
                    ?>

                </div>
            </div>

            <div class="m-2">
                <form action="">
                    <div class="d-flex">
                        <div>
                            <label for="carrera-e" class="form-label">CARRRERA:</label>
                            <select name="" id="carrera_uacademica_input" class="form-select" onchange="searchUacademica()">
                                <option value="0">Seleccionar</option>
                                <?php
                                $query = $conn->query("SELECT * FROM carreras");
                                while ($valores = mysqli_fetch_array($query)) {
                                    echo '<option value="' . $valores['id_carrera'] . '">' . $valores['nombre'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div>
                            <label for="semestre_uacademica" class="form-label">SEMESTRE:</label>
                            <select name="" id="semestre_uacademica_input" class="form-select" onchange="searchUacademica()">
                                <option value="" selected>Seleccionar</option>
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


                        <div class="m-2">
                            <button class="btn btn-primary mt-4" type="submit" id="buscarUacademica_btn">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>



            <table class="table">
                <thead>
                    <tr>
                        <th>Carrera</th>
                        <th>Materia</th>
                        <th>Docente</th>
                        <th>Semestre</th>
                        <th>Hora</th>
                        <th>Opciones</th>

                    </tr>
                </thead>
                <tbody class="table-group-divider" id="resultado_uacademica">
                    
                </tbody>
            </table>


        </main>
    </div>

    <!-- script modal -->
    <?php
    include('../modals/script.php')

    ?>


</body>

</html>