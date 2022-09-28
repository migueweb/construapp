<?php include 'views/header.php';?>
<?php
if(isset($_GET['msg']) && $_GET['msg'] == 'destroy'){
    session_destroy();
    header('Location: ./');
}
?>

    <!-- Start main content-->
    <div class="container mt-4 bg-white p-5">
        <h1>Bienvenido a Contruapp</h1>
        <h4 class="text-secondary"> La contructora #1 en el pais</h4>

        <img src="./img/img-building.jpg" alt="Edificio Contruapp" class="img-fluid">

        <!-- Start text-->
        <p class="w-100 fs-4 mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, eveniet non eos officia provident minima asperiores magnam assumenda voluptatibus libero. Eos cum sunt in voluptas ullam tempora quo labore consectetur est quas reprehenderit eligendi enim laudantium corrupti temporibus, explicabo perferendis!
        </p>
        <p class="w-100 fs-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, eveniet non eos officia provident minima asperiores magnam assumenda voluptatibus libero. Eos cum sunt in voluptas ullam tempora quo labore consectetur est quas reprehenderit eligendi enim laudantium corrupti temporibus, explicabo perferendis!
            magnam assumenda voluptatibus libero. Eos cum sunt in voluptas ullam tempora quo labore consectetur est quas reprehenderit eligendi enim laudantium corrupti temporibus, explicabo perferendis!
        </p>

        <!-- End text-->
        <h2 class="mt-5">Remodelar</h2>
        <h4 class="text-secondary">Premio Lorem, ipsum dolor.</h4>
        <img src="./img/image-kitchen.jpg" alt="cocina remodelada" class="img-fluid">

        <p class="fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quam velit voluptatibus fugit enim vitae amet, voluptatem officiis libero placeat, beatae eius. Doloremque temporibus adipisci, rerum et, dolore provident ipsam quisquam vitae esse voluptate eaque harum cupiditate mollitia blanditiis voluptatem sint eligendi id. Illum, accusantium.</p>

        <div>
            <a href="./calculate_price.php" class="btn btn-lg btn-info fs-5">¿Realizar cotizacion?</a>
            <a href="./register.php" class="btn btn-lg btn-success fs-5">Crear una cuenta</a>
        </div>
        


        <!-- Start Fill-->
        <div class="m-5 p-5"></div>

        
    </div>
    <!-- End main content-->


<?php include 'views/footer.php';?>


