<?php
     $baitaplon_id= $_GET['id'];
    require("config.php");
    include("functions.php");
    // B2: Khai bao truy van
    if(deletebaitaplon($baitaplon_id)){
        header("Location:admin.php");
        exit();
    }else{
        echo "Loi gi do ...";
    }
    // B3: Dong ket noi
    mysqli_close($conn);
?>