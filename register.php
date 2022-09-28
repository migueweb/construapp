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

            <!-- Alert Error-->
            <?php if(isset($_GET['msg']) && $_GET['msg'] == 'error'){?>

            <div class="alert alert-danger alert-dismissible fade show fs-5" role="alert">
                Ocurrio un error al registrar
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php }?>


            <!-- Alert Success -->
            <?php if(isset($_GET['msg']) && $_GET['msg'] == 'success'){?>

            <div class="alert alert-success alert-dismissible fade show fs-5" role="alert">
                Registro exitoso
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php }?>


            <!-- End Alerts-->

            <!-- Start Form wrapper-->
            <article class="card text-center">

                <div class="card-header fs-4 text-success bg-white">
                    Registrarse
                </div>

                <div class="card-body shadow">

                    <!-- Start Form-->
                    <form action="validate_register.php" method="POST">
                        <div class="row">

                            <div class="col-12 col-md-6 mt-3 text-start">
                                <label for="name" class="fs-5">Nombre</label>
                                <input type="text" name="fName" id="name" class="form-control py-2 fs-5">
                            </div>

                            <div class="col-12 col-md-6 mt-3 text-start">
                                <label class="fs-5" for="lastname">Apellido</label>
                                <input type="text" name="fLastname" id="lastname" class="form-control py-2 fs-5">
                            </div>

                            <div class="col-12 mt-3 text-start">
                                <label for="email" class="fs-5">Correo</label>
                                <input type="email" name="fEmail" id="email" class="form-control py-2 fs-5">
                            </div>

                            <div class="col-12 mt-3 text-start">
                                <label for="password" class="fs-5">Contraseña</label>
                                <input type="password" name="fPass" id="password" class="form-control py-2 fs-5">
                            </div>

                            <div class="col-12 mt-4 mb-2 text-start">
                                <input class="form-check-input" type="checkbox" value="" id="tc" required>
                                <label class="form-check-label" for="tc">
                                    Acepto los <a href="#">Terminos y condiciones</a>
                                </label>
                            </div>
                            <input type="hidden" name="hidden" value="1">

                            <div class="col-12 mt-4 ">
                                <button type="submit"
                                    class="btn btn-success w-50 py-2 fs-5 float-end">Registrarse</button>
                            </div>

                        </div>
                    </form>
                    <!-- End Form-->
                    <div class="mx-auto mt-4">
                        <a href="./login.php">¿Ya tengo una cuenta?</a>
                    </div>
                </div>
        </div>
        </article>
    </div>

</main>





<?php include 'views/footer.php';?>