<?php
print_r($_POST);

include_once 'model/db_conection.php';

if(empty($_POST['fEmail']) || empty($_POST['fPass']) ||empty($_POST['hidden']) ){
    header('Location: login.php?msg=empty');
}

if(
    isset($_POST['fEmail']) && isset($_POST['fPass']) && 
    isset($_POST['hidden']) && $_POST['hidden'] == '1'
    ){
        $fEmail = $_POST['fEmail'];
        $fPass = $_POST['fPass'];
        
        $sql = "SELECT * FROM `users` WHERE email = '$fEmail';";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        
        $password = $row['password'];
        
        if(!password_verify($fPass, $password)){
            header('Location: login.php?msg=credentialsError');
        }
        
        session_start();
        $_SESSION['name'] = $row['name'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['login'] = true;

        header('Location: ./');

        
    } 
    ?>