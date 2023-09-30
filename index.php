<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control De Asistencias</title>
    <link rel="stylesheet" href="crs/css/formlogin.css">
    <link rel="stylesheet" href="crs/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Listas">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="apple-touch-icon" href="./crs/img/logo_unach.png">
    <link rel="apple-touch-startup-image" href="./src/img/logo_unach.png">
    <link rel="manifest" href="./manifest.json">

</head>

<body>

    <br><br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <div class="">
                            <img src="crs/img/logo_unach.png" alt="" class="text-center" style="width: 8rem;">
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" id="myAlert">
                                <p>Hubo un error al ingresar, Verifique sus datos porfavor</p>
                            </div>
                        <?php } ?>

                        <form action="config/validate.php" method="POST" class="form">
                            <div class="form-group">
                                <label for="username" class="fw-bolder text-secondary">Seleccionar tipo de usuario: </label><br>
                                <div class="d-flex">
                                    <div>
                                        <label for="docente" class="fw-bolder">Docente: </label>
                                        <input type="radio" class="" name="user" value="1" id="docente" required>
                                    </div>
                                    <div class="ms-2">
                                        <label for="estudiante" class="fw-bolder">Estudiante: </label>
                                        <input type="radio" class="" name="user" value="2" id="estudiante" required>

                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group d-flex">
                                <i class="bi bi-person me-2 icon"></i>
                                <input type="email" class="form-control" name="email" required placeholder="Ingrese su correo">
                            </div><br>
                            <div class="form-group d-flex">
                                <i class="bi bi-key icon me-2"></i>
                                <input type="password" class="form-control" name="pass" required>
                            </div>
                            <br>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary btn-block ">Iniciar sesión</button>
                            </div>
                        </form>

                    </div>


                </div>
            </div>
        </div>
    </div>
    <script>
        // Obtener la alerta
        var alert = document.getElementById("myAlert");

        // Ocultar la alerta después de 5 segundos
        setTimeout(function() {
            alert.style.display = "none";
        }, 3000);
    </script>

    

</body>

</html>