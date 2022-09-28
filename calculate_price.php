<?php include_once './views/header.php'?>
<?php session_start();?>

<!-- validate if the user is logged in -->
<?php
    if(!isset($_SESSION['login']) || $_SESSION['login'] != true) {
?>

<div class="container">
    <div class="alert alert-info mt-3 w-75 mx-auto" role="alert">
        <h4 class="alert-heading">Advertencia</h4>
        <p>Para Realizar una cotizacion primero de Iniciar sesión o crear una cuenta </p>
        <hr>
        <div class="row mx-auto">
            <div class="col-xs-12 col-md-2 mb-2">
                <a href="./login.php" class="btn btn-warning">Iniciar Sesión</a>
            </div>
            <div class="col-xs-12 col-md-3">
                <a href="./register.php" class="btn btn-secondary">Crear una cuenta</a>
            </div>
        </div>
    </div>
</div>

<?php }?>

<!-- Main content-->
<main class="container">

    <!-- validate if the user is logged in -->
    <?php
    if(isset($_SESSION['login']) && $_SESSION['login'] == true /* and Estage = 1 */){
    ?>
    <div class="row">
        <div class="col-12 col-md-7 mx-auto">

            <!-- Start Alerts -->

            <!-- Alert Empty-->
            <?php if(isset($_GET['msg']) && $_GET['msg'] == 'empty'){?>

            <div class="alert alert-warning alert-dismissible fade show fs-5 mt-3" role="alert">
                <strong>Error!</strong> Rellene todos los campos
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php }?>

            <!-- Alert Error-->
            <?php if(isset($_GET['msg']) && $_GET['msg'] == 'error'){?>

            <div class="alert alert-danger alert-dismissible fade show fs-5 mt-3 text-center" role="alert">
                Ocurrio un error
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php }?>
            <!-- End Alerts -->

            <article class="card mt-3 shadow">
                <div class="card-header bg-white text-center shadow-sm fs-4">
                    Cotizar Remodelacion
                </div>
                <!-- Start card body-->
                <div class="card-body mt-2 p-4">

                    <!-- Alert Reminder-->
                    <div class="alert alert-info alert-dismissible fade show text-center" role="alert">
                        Recuerde colocar las medidas en pulgadas cuadradas <sup>2</sup>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>                        

                    <!-- Button Help-->
                    <button type="button" class="btn btn-link p-0 m-0 float-end" data-bs-toggle="modal"
                        data-bs-target="#helpModal">
                        ¿Necesito ayuda?
                    </button>

                    <!-- Start calculate form -->
                    <form action="validate_calculate_price.php" method="post">

                        <div class="row w-75">
                            <!-- Wall 1-->
                            <div class="col-12">
                                <div class="fs-4">Area 1</div>
                                <label for="wall-1">Tamaño</label>
                                <input type="number" name="wall-1" id="wall-1" class="form-control" required>
                            </div>

                            <!-- Wall-1 Object-1-->
                            <div class="col-12">
                                <label for="w1-obj-1" class="mt-3">Objecto 1</label>
                                <input type="number" name="w1-obj-1" id="w1-obj-1" class="form-control">
                            </div>

                            <!-- Wall-1 Object-2-->
                            <div class="col-12">
                                <label for="w1-obj-2" class="mt-3">Objecto 2</label>
                                <input type="number" name="w1-obj-2" id="w1-obj-2" class="form-control">
                            </div>

                            <!-- Wall-1 Object-3-->
                            <div class="col-12">
                                <label for="w1-obj-3" class="mt-3">Objecto 3</label>
                                <input type="number" name="w1-obj-3" id="w1-obj-3" class="form-control">
                            </div>

                            <!-- Wall 2-->
                            <div class="col-12">
                                <div class="fs-4 mt-4">Area 2</div>
                                <label for="wall-1">Tamaño</label>
                                <input type="number" name="wall-2" id="wall-2" class="form-control" required>
                            </div>

                            <!-- Wall-2 Object-1-->
                            <div class="col-12">
                                <label for="w1-obj-1" class="mt-3">Objecto 1</label>
                                <input type="number" name="w2-obj-1" id="w2-obj-1" class="form-control">
                            </div>

                            <!-- Wall-2 Object-2-->
                            <div class="col-12">
                                <label for="w1-obj-2" class="mt-3">Objecto 2</label>
                                <input type="number" name="w2-obj-2" id="w2-obj-2" class="form-control">
                            </div>

                            <!-- Wall-2 Object-3-->
                            <div class="col-12">
                                <label for="w1-obj-3" class="mt-3">Objecto 3</label>
                                <input type="number" name="w2-obj-3" id="w2-obj-3" class="form-control">
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-lg btn-primary w-50 mt-3">Cotizar</button>
                            </div>
                        </div>

                    </form>
                    <!-- End calculate form -->
                </div>
            </article>
        </div>
    </div>

    <?php }?>

</main>

<!--Start fill-->
<div class="m-5 p-3"></div>
<!-- End fill-->

<!-- Modal Help-->
<div class="modal fade" id="helpModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ayuda</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-light">
                <p class="fs-5">El formulario actual esta basado en la siguiente configuracion de dos Areas:</p>
                <img src="./img/image-help-config1.png" alt="configuracion actual de dos paredes" class="img-fluid">
                
                <p class="mt-2 fs-5">Donde:</p>
                <img src="./img/image-help-area1.png" alt="" class="img-fluid">
                <p class="fs-5">Area 1 Seria el equivalente a pared o muro y </p>

                <img src="./img/image-help-object.png" alt="" class="img-fluid p-2">
                <p class="fs-5"> Objeto 1 seria el equivalente a un objeto que ocupe espacio en el area (pared o muro) un objeto podria ser una nevera, estufa, lavaplatos, etc...</p>
                <p class="mt-2 fs-5"> Para realizar una cotizacion debe ingresar el tamaño del area 1 y 2 aparte añadir el tamaño de los objectos si es necesario.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Entendido</button>
    
            </div>
        </div>
    </div>
</div>
<?php include_once './views/footer.php'?>