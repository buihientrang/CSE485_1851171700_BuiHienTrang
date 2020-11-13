<?php
 $host = 'localhost';
 $user ='root';
 $password ='12345678';
 $dbname ='xethocbaxethocba';
 $conn = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
?>