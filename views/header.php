<?php session_start();?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
    <title>ContruApp</title>

    <!-- Bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="css/bootstrap-icons.css">

</head>

<body class="bg-light">
    <!-- Start navbar -->
    <nav class="navbar navbar-expand-lg shadow-sm bg-white">
        <div class="container">
            <a class="navbar-brand fs-3" href="./"> <i class="bi bi-house"></i> ConstruApp</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link fs-5" href="./">Inicio</a>
                    <a class="nav-link fs-5" href="./calculate_price.php">Cotizar</a>
                    
                    <?php if(!isset($_SESSION['login']) || $_SESSION['login'] != true  ){?>
                        <a class="nav-link fs-5" href="./login.php">Iniciar sesión</a>
                        <a class="nav-link fs-5" href="./register.php">Registrarse</a>
                    <?php }?>
                </div>
            </div>

            <?php if(isset($_SESSION['login']) && $_SESSION['login'] == true){ ?>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">

                    <a class="nav-link fs-5 text-black">
                        <i class="bi bi-person"></i>
                        <?php echo $_SESSION['name'], ' ',$_SESSION['lastname'] ; ?>
                    </a>

                    <a href="#" class="nav-link fs-5" data-bs-toggle="modal" data-bs-target="#exampleModal">Cerrar sesión</a>
                </div>
            </div>

            <?php }?>

        </div>



    </nav>
    <!-- End navbar -->