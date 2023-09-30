<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Menu Lateral</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../../crs/css/style.css">
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
                <div class="container-sm">
                    <!-- Button trigger modal -->


                    <?php
                    include('../modals/register_semestres.php');
                    ?>

                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID_SEMESTRE</th>
                        <th scope="col">CARRERA</th>
                        <th scope="col">SEMESTRE</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <th scope="row">8KLSC</th>
                        <td>LSC</td>
                        <td>8</td>
                        <td>
                            <?php
                            include('../modals/update_semestres.php');
                            ?>

                            <button class="ms-2 btn btn-danger" type="submit">Eliminar</button>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row">7KLSC</th>
                        <td>LSC</td>
                        <td>7</td>
                        <td>
                            <?php
                            include('../modals/update_semestres.php');
                            ?>
                            <button class="ms-2 btn btn-danger" type="submit">Eliminar</button>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row">8KLIDTS</th>
                        <td>LIDTS</td>
                        <td>8</td>
                        <td>
                            <?php
                            include('../modals/update_semestres.php');
                            ?>

                            <button class="ms-2 btn btn-danger" type="submit">Eliminar</button>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row">7KLIDTS</th>
                        <td>LIDTS</td>
                        <td>7</td>
                        <td>
                            <?php
                            include('../modals/update_semestres.php');
                            ?>
                            <button class="ms-2 btn btn-danger" type="submit">Eliminar</button>

                        </td>
                    </tr>
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