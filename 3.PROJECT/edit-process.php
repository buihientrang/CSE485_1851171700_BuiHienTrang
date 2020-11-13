<?php
    include 'config.php';
    $id= $_POST['id'];
    
    $hoten= $_POST['hoten'];
    $ngaysinh= $_POST['ngaysinh'];
    $noisinh= $_POST['noisinh'];
    $hocluc12= $_POST['hocluc12'];
    $gioitinh= $_POST['gioitinh'];   
    $dantoc= $_POST['dantoc'];
    $tongiao= $_POST['tongiao'];
    $namtn= $_POST['namtn'];
    $hanhkiem12= $_POST['hanhkiem12'];
    $cmnd= $_POST['cmnd'];
    $ngaycap= $_POST['ngaycap'];
    $noicap= $_POST['noicap'];
    $hktc= $_POST['hktc'];
    $matinh= $_POST['matinh'];
    $tentinh= $_POST['tentinh'];
    $matruong= $_POST['matruong'];    
    $tentruong= $_POST['tentruong'];
    $dtuutien= $_POST['dtuutien'];
    $kvuutien= $_POST['kvuutien'];
    $dclienhe= $_POST['dclienhe'];    
    $sdtts= $_POST['sdtts'];
    $sdtph= $_POST['sdtph'];
    $sql= "UPDATE xethocba SET hoten='$hoten',ngaysinh='$ngaysinh',noisinh='$noisinh',hocluc12='$hocluc12', gioitinh='$gioitinh',dantoc='$dantoc',  tongiao='$tongiao' , namtn='$namtn',hanhkiem12='$hanhkiem12' , cmnd='$cmnd' ,ngaycap='$ngaycap', noicap='$noicap',
    hktc='$hktc', matinh='$matinh',tentinh='$tentinh',matruong='$matruong',tentruong='$tentruong' , dtuutien='$dtuutien',kvuutien='$kvuutien', dclienhe='$dclienhe', sdtts='$sdtts',sdtph='$sdtph'  WHERE id='$id' ";
    if(mysqli_query($conn,$sql))
    {
        header('location:admin.php');
    }

?>