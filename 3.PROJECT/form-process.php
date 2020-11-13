<?php
            require('config.php');
            if (isset($_POST['dangki']) && $_POST['hoten'] != ""){
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

$sql= "INSERT INTO xethocba(hoten,ngaysinh,noisinh,hocluc12,gioitinh,dantoc,tongiao,namtn,hanhkiem12,cmnd,ngaycap,noicap,hktc,matinh,tentinh,matruong,tentruong,dtuutien,kvuutien,dclienhe,sdtts,sdtph) 
VALUES ('$hoten','$ngaysinh','$noisinh','$hocluc12','$gioitinh',' $dantoc','$tongiao','$namtn','$hanhkiem12','$cmnd','$ngaycap','$noicap','$hktc','$matinh','$tentinh','$matruong','$tentruong','$dtuutien','$kvuutien','$dclienhe','$sdtts','$sdtph')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "THêm dữ liệu thành công";
            header("location:xemkq.php");
            
        }else{
            echo "Lỗi .{'$sql'}";
        }
            }
            // chạy đi đợi anh gõ máy anh 
    
        ?>