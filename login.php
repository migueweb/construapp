<?php include 'views/header.php';?>

<!-- Start register form-->
<main class="container mt-3">
    <div class="row">

        <div class="col-12 col-md-5 mx-auto">

            <!-- Start Alerts -->

            <!-- Alert Empty-->
            <?php if(isset($_GET['msg']) && $_GET['msg'] == 'empty'){?>

            <div class="alert alert-warning alert-dismissible fade show fs-5" role="alert">
                <strong>Error!</strong> Rellene todos los campos
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php }?>

            <!-- Alert Credentials Error-->
            <?php if(isset($_GET['msg']) && $_GET['msg'] == 'credentialsError'){?>

            <div class="alert alert-warning alert-dismissible fade show fs-5" role="alert">
                <strong>Error!</strong> Correo o contraseña incorrectos
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php }?>

            <article class="card text-center mt-5">

                <div class="card-header fs-4 bg-white">
                    Iniciar sesión
                </div>

                <div class="card-body shadow p-4">

                    <!-- Start Form-->
                    <form action="validate_login.php" method="post">
                        <div class="row">
                            <div class="col-12 mt-3 text-start">
                                <label for="email" class="fs-5">Correo:</label>
                                <input type="email" name="fEmail" id="email" class="form-control py-2 fs-5" required>
                            </div>

                            <div class="col-12 mt-3 text-start">
                                <label for="password" class="fs-5">Contraseña:</label>
                                <input type="password" name="fPass" id="password" class="form-control py-2 fs-5"
                                    required>
                            </div>

                            <input type="hidden" name="hidden" value="1">

                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary w-50 py-2 fs-5 float-end mt-2">Iniciar
                                    sesión</button>
                            </div>

                        </div>
                    </form>
                    <!-- End Form-->

                    <div class="col-12 mt-4">
                        <a href="register.php">¿No tengo una cuenta?</a>
                    </div>
            </article>
        </div>
    </div>
    </div>

</main>

<!-- Start Fill-->
<div class="mt-2 p-5"></div>
<!-- End Fill-->



<?php include 'views/footer.php';?>