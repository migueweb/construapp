<?php include 'views/header.php';?>
<?php
if(isset($_GET['msg']) && $_GET['msg'] == 'destroy'){
    session_destroy();
    header('Location: ./');
}
?>

    <!-- Start main content-->
    <div class="container mt-4">
        <h4> Cotizar precio remodelacion</h4>
    </div>
    <!-- End main content-->


<?php include 'views/footer.php';?>


