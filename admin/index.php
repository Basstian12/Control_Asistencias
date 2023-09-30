<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_asistecias</title>
    <link rel="stylesheet" href="crs/css/formlogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

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
                            <div class="alert alert-danger"><p>Hubo un error al ingresar, Verifique sus datos porfavor</p>
                        </div>
                        <?php } ?>

                        <form action="config/login.php" method="POST">
                            <div class="form-group">
                                <label for="username" class="fw-bolder">Nombre de usuario</label>
                                <input type="text" class="form-control" name="correo" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="fw-bolder">Contraseña</label>
                                <input type="password" class="form-control" name="password" required>
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

    <script src="./script.js"></script>

</body>

</html>