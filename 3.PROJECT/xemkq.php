<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  </head>
  <body>
  <div class="font-serif">
        <header class="mx-32">
            <div class="flex justify-between items-center my-8">
                <div>
                    <a href="#"><img src="./image/itemlogo.jpg" alt="day la hinh anh"></a>
                </div>
                <div class="mx-64">
                
      </nav>
      <main class="container">
      <h1>danh sách thí sinh đã đăng kí</h1>
        <div class="row">
            
            <div class="col-md-8">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                                        
                            <th>stt</th>
                            <th>Họ và tên</th>
                            <!-- <th>Ngày sinh</th>
                            <th>Nơi sinh</th> -->
                            <th>Học lưc năm 12</th>
                            <th>Giới tính</th>
                            <th>Dân tộc</th>
                            <th>Tôn giáo</th>
                            <th>Năm tốt nghiệp</th>
                            <th>Hạnh kiểm lớp 12</th>
                            <th>CMND</th>
                            <!-- <th>Ngày cấp</th>
                            <th>Nơi cấp</th> -->
                            <th>Hộ khẩu thường chú</th>
                            <!-- <th>Mã tỉnh</th> -->
                            <th>Tên tỉnh</th>
                            <!-- <th>Mã trường</th> -->
                            <th>Tên trường</th>
                            <th>đối tượng ưu tiên</th>
                            <th>khu vực ưu tiên</th>
                            <th>địa chỉ liên hệ</th>
                            <th>SĐT thí sinh</th>
                            <th>SĐT phụ huynh</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        require('config.php');
                        include("functions.php");
                        // B2: Khai bao truy van
                        $baitaplon = getAllbaitaplon();
                        foreach($baitaplon as $row){
                    ?>
                            <tr>
                                <td><?php echo $row[0];?></td>
                                <td><?php echo $row[1];?></td>
                                <!-- <td><?php echo $row[2];?></td>
                                <td><?php echo $row[3];?></td> -->
                                <td><?php echo $row[4];?></td>
                                <td><?php echo $row[5];?></td>
                                <td><?php echo $row[6];?></td>
                                <td><?php echo $row[7];?></td>
                                <td><?php echo $row[8];?></td>
                                <td><?php echo $row[9];?></td>
                                <td><?php echo $row[10];?></td>
                                <td><?php echo $row[11];?></td>
                                <!-- <td><?php echo $row[12];?></td>
                                <td><?php echo $row[13];?></td> -->
                                <td><?php echo $row[14];?></td>
                                <!-- <td><?php echo $row[15];?></td> -->
                                <td><?php echo $row[16];?></td>
                                <!-- <td><?php echo $row[17];?></td> -->
                                <td><?php echo $row[18];?></td>
                                <td><?php echo $row[19];?></td>
                                <td><?php echo $row[20];?></td>
                                <td><?php echo $row[21];?></td>
                                <td><?php echo $row[22];?></td>
                            </tr>
                    <?php
                        }
                    ?>
                        
                        
                    </tbody>
                </table>
                
            </div>
        </div>
        
      </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>