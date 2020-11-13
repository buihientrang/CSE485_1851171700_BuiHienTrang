<?php
    // B1: Ket noi DB
    $host = 'localhost';
    $user = 'root';
    $pass = '12345678';
    $db   = 'baitaplon';
    $port = '3306';
    $conn =  mysqli_connect($host, $user, $pass, $db, $port);
    if(!$conn){
        die('Khong the ket noi vi ..');
        exit();
    }

?>