<?php
$taikhoan = $_POST['txt_taikhoan'];
$matkhau = $_POST['txt_matkhau'];
$matkhau1 = $_POST["txt_matkhau1"]; 
$email = $_POST['txt_email'];
if (!($matkhau == $matkhau1)) 
  { 
    echo('mat khau khong trung khop <a href="dangki.php">Quay lai dang ki</a>'); 
  } 
else 
{ 
  $matkhau = $matkhau;
  require('config.php');
  $sql = "INSERT INTO dangnhap(taikhoan,matkhau,email)
  VALUES ('$taikhoan','$matkhau','$email');";
  if(mysqli_query($conn,$sql))
    {
      header("location:dangnhap.php");
    }
  else
    {
      echo('ten tai khoan da co san <a href="dangki.php">Quay lai dang ki</a>');
    }
}
?>