<?php include 'views/header.php';?>

<!-- Start register form-->
<main class="container mt-3">
    <div class="row">

        <div class="col-12 col-md-5 mx-auto">

            <div class="card text-center">

                <div class="card-header fs-4 text-primary bg-white">
                    Iniciar sesión
                </div>

                <div class="card-body shadow">

                    <form action="register.php" method="post">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <label for="email" class="fs-5">Correo</label>
                                <input type="email" name="fEmail" id="email" class="form-control py-2 fs-5">
                            </div>

                            <div class="col-12 mt-3">
                                <label for="password" class="fs-5">Contraseña</label>
                                <input type="password" name="fPass" id="password" class="form-control py-2 fs-5">
                            </div>

                            <input type="hidden" name="hidden" value="1">

                            <div class="col-12 mt-3 ">
                                <button type="submit" class="btn btn-primary w-100 py-2 fs-5">Iniciar sesión</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>





<?php include 'views/footer.php';?>