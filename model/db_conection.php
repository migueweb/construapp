<?php
$server = 'localhost';
$user = 'root';
$pass = 'root';
$database = 'construapp_db';

$conn = mysqli_connect($server, $user, $pass, $database);

if(!$conn) {
    echo 'connection failed';
}
echo 'connection successfully'
?>