<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Menu Lateral</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <?php
    include('../links.php');
    ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>


<body>
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
                <div class="alert alert-dark text-dark fw-bold">
                    <p>Listar estudiantes y ver detalles</p>
                    <div class="container">
                        <form action="" class="form-control">
                            <div class="d-flex">

                                <div class="m-2">
                                    <label for="carrer" class="form-label">Carrera:</label>
                                    <select name="carrer" id="carrer" class="form-select">
                                        <option value="" selected>Seleccionar</option>
                                        <option value="LSC">LSC</option>
                                        <option value="LIDTS">LIDTS</option>
                                    </select>
                                </div>
                                <div class="m-2">
                                    <label for="semestre" class="form-label">Semestre:</label>
                                    <select name="semestre" id="semestre" class="form-select">
                                        <option value="" selected>Seleccionar</option>
                                        <option value="8K">8K</option>
                                        <option value="8J">8J</option>
                                    </select>
                                </div>
                                <div class="m-2">
                                    <label for="materia" class="form-label">Materia:</label>
                                    <select name="materia" id="materia" class="form-select">
                                        <option value="" selected>Seleccionar</option>
                                        <option value="ORACLE">ORACLE</option>
                                        <option value="P AMBIENTALES">P AMBIENTALES</option>
                                    </select>
                                </div>
                                <div class="m-2">
                                    <label for="grupo" class="form-label">Grupo:</label>
                                    <select name="grupo" id="grupo" class="form-select">
                                        <option value="" selected>Seleccionar</option>
                                        <option value="8K">8K</option>
                                        <option value="8J">8J</option>
                                    </select>
                                </div>

                                <div class="m-2"><br>
                                    <input type="submit" value="Buscar" class="btn btn-primary mt-2">
                                </div>
                            </div>
                        </form>
                    </div>



                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Semestre</th>
                        <th scope="col">Turno</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <td>Yareli Roxana</td>
                        <td>Hernandez Deara</td>
                        <td>8K</td>
                        <td>Vespertino</td>
                        <td>Activo</td>
                    </tr>
                    <tr>
                        <td>Madai</td>
                        <td>Deara Ruiz</td>
                        <td>8K</td>
                        <td>Vespertino</td>
                        <td>Regular</td>
                    </tr>
                    <tr>
                        <td>Miguel</td>
                        <td>Demeza Alvaro</td>
                        <td>8K</td>
                        <td>Vespertino</td>
                        <td>Activo</td>
                    </tr>
                </tbody>

            </table>
            <div class="alert text-center">

                <button type="button" class="btn btn-success ">
                    <i class="bi bi-file-earmark-excel"></i> Generar Reporte
                </button>
            </div>




        </main>
    </div>

    <!-- script modal -->
    <?php
    include('../modals/script.php')

    ?>


</body>

</html>