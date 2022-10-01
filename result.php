<?php 
session_start();
if(!isset($_SESSION['login']) || $_SESSION['login'] != true ){
    header('Location: ./');
}

$currentDate = date ( 'd-m-Y' );
?>

<?php include_once 'views/header.php';?>



<main class="container">    
    <div class="row">

        
        <!-- Prices-->
        <div class="col-12 col-md-6 mx-auto">

            <!-- Alert: get you API key-->
            <?php if($_GET['copPrice'] < 1){?>
                <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                    Para ver la conversion obten una API key <a
                        href="https://apilayer.com/marketplace/currency_data-api" target="_blank">aqui</a>
            
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php }?>

            <div class="card mb-3 mt-3">
                <img src="./img/image-calculate.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Cotización</h5>
                    <p><strong>Area a Remodelar:</strong> <?php echo $_GET['spaceToRemodel'];?> in<sup>2</sup></p>
                    <p><strong>Precio Aproximado en USD:</strong> <?php echo $_GET['usdPrice'];?></p>
                    <p><strong>Precio Aproximado en COP:</strong> <?php echo $_GET['copPrice'];?></p>


                    <p class="card-text"><small class="text-muted">Cotización generada <?php echo $currentDate;?> por
                            ConstruApp</small></p>
                </div>
            </div>
        </div>
    </div>


</main>
<?php include_once 'views/footer.php';?>