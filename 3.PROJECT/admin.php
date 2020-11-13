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
      <h1>Trang quản trị </h1>
        <div class="row">
            
            <div class="col-md-8">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                                        
                            <th>stt</th>
                            <th>Họ và tên</th>
                            <th>Ngày sinh</th>
                            <th>Nơi sinh</th>
                            <th>Học lưc năm 12</th>
                            <th>Giới tính</th>
                            <th>Dân tộc</th>
                            <th>Tôn giáo</th>
                            <th>Năm tốt nghiệp</th>
                            <th>Hạnh kiểm lớp 12</th>
                            <th>CMND</th>
                            <th>Ngày cấp</th>
                            <th>Nơi cấp</th>
                            <th>Hộ khẩu thường chú</th>
                            <th>Mã tỉnh</th>
                            <th>Tên tỉnh</th>
                            <th>Mã trường</th>
                            <th>Tên trường</th>
                            <th>đối tượng ưu tiên</th>
                            <th>khu vực ưu tiên</th>
                            <th>địa chỉ liên hệ</th>
                            <th>SĐT thí sinh</th>
                            <th>SĐT phụ huynh</th>
                            
                            <th>Xóa hồ sơ</th>
                            <th>Sửa hồ sơ </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        require('config.php');
                        $sql = "select * from xethocba";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($result))
                        { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['hoten']; ?></td>
                            <td><?php echo $row['ngaysinh']; ?></td>
                            <td><?php echo $row['noisinh']; ?></td>
                            <td><?php echo $row['hocluc12']; ?></td>
                            <td><?php echo $row['gioitinh']; ?></td>
                            <td><?php echo $row['dantoc']; ?></td>
                            <td><?php echo $row['tongiao']; ?></td>
                            <td><?php echo $row['namtn']; ?></td>
                            <td><?php echo $row['hanhkiem12']; ?></td>
                            <td><?php echo $row['cmnd']; ?></td>
                            <td><?php echo $row['ngaycap']; ?></td>
                            <td><?php echo $row['noicap']; ?></td>
                            <td><?php echo $row['hktc']; ?></td>
                            <td><?php echo $row['matinh']; ?></td>
                            <td><?php echo $row['tentinh']; ?></td> 
                            <td><?php echo $row['matruong']; ?></td>
                            <td><?php echo $row['tentruong']; ?></td>
                            <td><?php echo $row['dtuutien']; ?></td>
                            <td><?php echo $row['kvuutien']; ?></td>
                            <td><?php echo $row['dclienhe']; ?></td>
                            <td><?php echo $row['sdtts']; ?></td>
                            <td><?php echo $row['sdtph']; ?></td>
                            <td><a href="delete.php?id=<?php echo $row['id'] ?>" name="id" class="fa fa-trash-alt"></a></td>
                            <td><a href="edit.php?id=<?php echo $row['id'] ?>" name="id" class="fa fa-edit"></a></td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
                
            </div>
        </div>
        <i class="ico-search"></i>
                    <td width="80"><label><h3>Danh sách sau khi lọc :</h3></label></td>
                    <td width="140"><select name="">
                                      <option value="">chọn</option>
 
                                            <option value="2018">  Giỏi </option>
                                            <option value="2019"> Khá </option>
                                            <option value="2020"> Trung bình </option>
                                            <option value="2020"> yếu </option>
                                        </select></td>
      </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>