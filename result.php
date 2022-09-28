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
        <div class="col-12 col-md-6 mx-auto">
            <div class="card mb-3 mt-3">
                <img src="./img/image-calculate.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Cotización</h5>
                    <p><strong>Area a Remodelar:</strong> <?php echo $_GET['spaceToRemodel'];?> in<sup>2</sup></p>
                    <p><strong>Precio Aproximado:</strong> $<?php echo $_GET['price'];?> usd</p>
                   
                   
                    <p class="card-text"><small class="text-muted">Cotización generada <?php echo $currentDate;?> por ConstruApp</small></p>
                </div>
            </div>
        </div>
    </div>


</main>
<?php include_once 'views/footer.php';?>
<?php session_destroy();?>
