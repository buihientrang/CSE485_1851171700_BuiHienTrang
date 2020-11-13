<?php
session_start();
require("config.php");
if($_POST["txt_taikhoan"] !='' && $_POST["txt_matkhau"] !='')
{
    $taikhoan = $_POST["txt_taikhoan"];
    $matkhau = $_POST["txt_matkhau"];
    $matkhau = $matkhau;
    $sql = "SELECT * FROM dangnhap where taikhoan = '$taikhoan' and matkhau = '$matkhau'";
    $user = mysqli_query($conn,$sql);
    if(mysqli_num_rows($user)>0)
    {
        $_SESSION["user"]=$taikhoan;
        header("location:admin.php");
        exit();
    }
    else
    {
        echo 'sai tai khoan hoac mat khau <a href="dangnhap.php">Quay lai dang nhap</a>';
    }
}
else
{
        echo 'chua nhap tai khoan hoac mat khau <a href="dangnhap.php">Quay lai dang nhap</a>';
}
?>