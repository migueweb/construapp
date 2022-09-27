<?php

//print_r($_POST);
include_once './model/db_conection.php';


if(
    empty($_POST['hidden']) || empty($_POST['fName']) || empty($_POST['fLastname']) || 
    empty($_POST['fEmail']) || empty($_POST['fPass'])
    ){
        header('Location: register.php?msg=empty');
    }
    
    if (
        isset($_POST['fName']) && isset($_POST['fLastname']) &&
        isset($_POST['fEmail']) && isset($_POST['fPass']) &&
        isset($_POST['hidden']) && $_POST['hidden'] == '1'
        ) {

            $fName = $_POST['fName'];
            $fLastname = $_POST['fLastname'];
            $fEmail = $_POST['fEmail'];
            
            // encrypting password
            $fPass = password_hash($_POST['fPass'], PASSWORD_BCRYPT);

            $sql = "INSERT INTO `users`(`name`, `lastname`, `email`, `password`) VALUES ('$fName','$fLastname','$fEmail','$fPass')";

            $result = mysqli_query($conn, $sql);

            if (!$result) {
                header('Location: register.php?msg=error');
            }

            header('Location: register.php?msg=success');
}
