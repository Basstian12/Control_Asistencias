<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Periodo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../../crs/css/style.css">


    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



    <!-- script para registros a la base de datos con ajax
                ---------IMPORTANTE-------------

-->

    <script src="../../config/register_bd/scripts.js"></script>

</head>


<body>

    <?php
    include('../header.php');
    ?>
    <?php
    include('../nav.php');
    ?>
    <br>

    <main class="border-">

        <div class="container">
            <div class="container-sm alert alert-secondary">
                <label for="" class="fw-bold">Registar nueva carrera</label><br><br>
                <div>

                    <?php
                    include('../modals/register_carrera.php');
                    ?>
                </div>

            </div>

            <div class="container-sm alert alert-secondary">
                <label for="" class="fw-bold">Registar nuevo superusuario Administrativo</label><br><br>
                <div>

                    <?php
                    include('../modals/insert_superuser.php');
                    ?>
                </div>

            </div>

        </div>





    </main>


    <!-- script modal -->
    <?php
    include('../modals/script.php')

    ?>


</body>

</html>