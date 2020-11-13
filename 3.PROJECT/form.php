<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
        
    <link rel="stylesheet" href="public/style.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>

<body>
    <div>
        
    
    <div class="font-serif">
        <div class="grid grid-cols-12 container mx-auto">
            <aside class="col-span-3 text-xl ">
                <nav class="mr-8 " style="margin-top: 56px;">
                    <ul>
                        <li class="text-white bg-blue-700 px-2 py-3 hover:text-yellow-400"><a href="#"><i
                                    class="fas fa-balance-scale pr-3 "></i>Điều
                                kiện xét tuyển</a></li>
                        <li class="text-white bg-blue-500 px-2 py-3 my-1 hover:text-yellow-400"><a href="#"><i
                                    class="far fa-address-book pr-3"></i>Ngành xét tuyển</a></li>
                        <li class="text-white bg-red-500 px-2 py-3 my-1 hover:text-yellow-400"><a href="#"><i
                                    class="fas fa-briefcase pr-3"></i>Hồ
                                sơ
                                và cách đăng ký</a></li>
                        <li class="text-white bg-orange-500 px-2 py-3 my-1 hover:text-yellow-400"><a href="#"><i
                                    class="fas fa-pen-nib pr-3"></i>Đăng
                                ký
                                xét tuyển </a></li>
                        <li class="text-white bg-purple-500 px-2 py-3 my-1 hover:text-yellow-400"><a href="#"><i
                                    class="fas fa-book-open pr-3"></i>Hướng
                                dẫn đăng ký</a></li>
                        <li class="text-white bg-green-500 px-2 py-3 my-1 hover:text-yellow-400"><a href="#"><i
                                    class="fas fa-search pr-3"></i>Tìm
                                kiếm
                                ngành học</a></li>
                    </ul>
                </nav>
            </aside>
            <!-- end aside -->
            <div class="col-span-9 ">
                <section>
                    <div class="bg-blue-600 ">
                        <h2 class="text-center py-4">THÔNG TIN HỒ SƠ</h2>
                    </div>
                    <div class="px-20 py-16 border ">
                        <form action="form-process.php" method="POST">
                            <div>
                                <div class="grid grid-cols-2 gap-10">
                                    <div>
                                        <div class="border border-gray-500 my-2">
                                            <label for="#"
                                                class=" border-r-2 border-gray-600 bg-gray-400  inline-block  py-4 px-3">Họ
                                                và
                                                tên</label><input type="text" name="hoten" id=""
                                                class="py-3 pl-4 outline-none" placeholder="Nhập tên" required>
                                        </div>
                                        <div class="border border-gray-500 my-2">
                                            <label for="#"
                                                class=" border-r-2 border-gray-600 bg-gray-400  inline-block  py-4 px-3">Ngày
                                                sinh</label><input type="text" name="ngaysinh" id=""
                                                class="py-3 pl-4 outline-none" placeholder="Nhập ngày tháng năm sinh">
                                        </div>
                                        <div class="border border-gray-500 my-2">
                                            <label for="#"
                                                class=" border-r-2 border-gray-600 bg-gray-400  inline-block  py-4 px-4 ">Nơi
                                                sinh</label><select name="noisinh" id="" class="py-3 pl-4 outline-none ">
                                                <option value="#">-Chọn Tỉnh-</option>
                                                <option value="Tuyên Quang">Tuyên Quang</option>
                                                <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                                <option value="Hà Giang">Hà Giang</option>
                                                <option value="Hà Nội">Hà Nội</option>
                                            </select>
                                        </div>
                                        <div class="border border-gray-500 my-2">
                                            <label for="#"
                                                class=" border-r-2 border-gray-600 bg-gray-400 inline-block  py-4 px-4 ">Học
                                                lực lớp
                                                12</label><select name="hocluc12" id="" class="py-3 pl-4 outline-none ">
                                                <option value="#">-Chọn-</option>
                                                <option value="Giỏi">Giỏi</option>
                                                <option value="Khá">Khá</option>
                                                <option value="TB">Trung bình</option>
                                                <option value="Yếu">Yếu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="border border-gray-500 my-2">
                                            <label for="#"
                                                class=" border-r-2 border-gray-600 bg-gray-400  inline-block  py-4 px-4 ">Giới
                                                tính</label><select name="gioitinh" id="" class="py-3 pl-4 outline-none ">
                                                <option value="#">-Chọn-</option>
                                                <option value="Nam">Nam</option>
                                                <option value="Nữ">Nữ</option>
                                            </select>
                                        </div>
                                        <div class="grid grid-cols-2 gap-2">
                                            <div class="border border-gray-500 my-2">
                                                <label for="#"
                                                    class=" border-r-2 border-gray-600 bg-gray-400  inline-block  py-4 px-1 ">Dân
                                                    tộc</label>
                                                <input type="text" name="dantoc" id="" class="w-20 py-3 pl-1 outline-none"
                                                    placeholder="Nhập tên" required>
                                            </div>
                                            <div class="border border-gray-500 my-2">
                                                <label for="#"
                                                    class=" border-r-2 border-gray-600 bg-gray-400 inline-block  py-4 px-1 ">Tôn
                                                    giáo</label>
                                                <input type=" text" name="tongiao" id="" class="w-20 py-3 pl-1 outline-none"
                                                    placeholder="Nhập tên" required>
                                            </div>
                                        </div>
                                        <div class="border border-gray-500 my-2">
                                            <label for="#"
                                                class=" border-r-2 border-gray-600 bg-gray-400 inline-block  py-4 px-4 ">Năm
                                                tốt
                                                nghiệp</label><select name="namtn" id="" class="py-3 pl-4 outline-none ">
                                                <option value="#">-Chọn-</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                            </select>
                                        </div>
                                        <div class="border border-gray-500 my-2">
                                            <label for="#"
                                                class=" border-r-2 border-gray-600 bg-gray-400  inline-block  py-4 px-4 ">Hạnh
                                                kiểm
                                                lớp 12</label><select name="hanhkiem12" id="" class="py-3 pl-4 outline-none ">
                                                <option value="#">-Chọn-</option>
                                                <option value="xuất sắc">Xuất sắc</option>
                                                <option value="Tốt">Tốt</option>
                                                <option value="Khá">Khá</option>
                                                <option value="TB">Trung bình</option>
                                                <option value="Yếu">Yếu</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="grid grid-cols-3 gap-5">
                                        <div class="border border-gray-500 my-2">
                                            <label for="#"
                                                class=" border-r-2 border-gray-600 bg-gray-400  inline-block  py-4 px-4 ">Số
                                                CMND</label><input type="text" name="cmnd" id=""
                                                class="w-24 py-3 pl-4 outline-none " placeholder="Số CMND" required>
                                        </div>
                                        <div class="border border-gray-500 my-2">
                                            <label for="#"
                                                class=" border-r-2 border-gray-600 bg-gray-400 inline-block  py-4 px-4 ">Ngày
                                                cấp</label><input type="date" name="ngaycap" id=""
                                                class="w-24 py-3 pl-4 outline-none ">
                                        </div>
                                        <div class="border border-gray-500 my-2">
                                            <label for="#"
                                                class="border-r-2 border-gray-600 bg-gray-400  py-4 inline-block px-4 ">Nơi
                                                cấp</label><select name="noicap" id="" class="w-24 py-3 pl-4 outline-none ">
                                                <option value="#">-Chọn-</option>
                                                <option value="Tuyên Quang">Tuyên Quang</option>
                                                <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                                <option value="Hà Giang">Hà Giang</option>
                                                <option value="Hà Nội">Hà Nội</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border border-gray-500 my-2">
                                        <label for="#"
                                            class="border-r-2 border-gray-600 bg-gray-400  py-4 inline-block px-4">Hộ
                                            khẩu thường chú</label><input type="text" name="hktc" id=""
                                            style="width: 500px;" class=" py-3 pl-4  outline-none "
                                            placeholder="Nhập hộ khẩu thường trú" required>
                                    </div>
                                    
                                </div>
                            </div>
                            <span class="block my-8"><i>Ghi rõ tên tỉnh(thành phố, huyện(quận), xã(phường) vào hộ khẩu
                                    thường
                                    trú</i></span>
                            <span class="font-semibold block mb-4">Nơi học THPT hoặc tương đương (ghi tên trường và nơi
                                trường:
                                huyện(quận), tỉnh(thành
                                phố)</span>
                            <div>
                                <div class="flex justify-between">
                                    <div class="mt-8">
                                        <label for="#"
                                            class="border border-gray-600 bg-gray-400  py-4 inline-block px-1 w-24">Năm
                                            lớp 10</label>
                                        <label for="#"
                                            class="border border-gray-600 bg-gray-400  py-4 block px-1 w-24 my-2">Năm
                                            lớp
                                            11</label>
                                        <label for="#"
                                            class="border border-gray-600 bg-gray-400  py-4 inline-block px-1 w-24">Năm
                                            lớp
                                            12</label>
                                    </div>
                                    <div>
                                        <label for="#">Mã tỉnh</label>
                                        <div class="mt-2">
                                            <div>
                                                <input type="text" name="matinh" id="" required
                                                    class="border border-gray-600 bg-gray-400  py-4 inline-block px-1 w-40 outline-none">
                                            </div>
                                            <div>
                                                <input type="text" name="matinh" id="" required
                                                    class="border border-gray-600 bg-gray-400  py-4 block px-1 w-40 my-2 outline-none">
                                            </div>
                                            <div>
                                                <input type="text" name="matinh" id="" required
                                                    class="border border-gray-600 bg-gray-400  py-4 inline-block px-1 w-40 outline-none">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="#">Tên tỉnh</label>
                                        <div class="mt-2">
                                            <div>
                                                <select name="tentinh" id=""
                                                    class="border border-gray-600 bg-gray-400  py-4 inline-block px-1 w-40 outline-none">
                                                    <option value="#">-Chọn Tỉnh-</option>
                                                    <option value="Tuyên Quang">Tuyên Quang</option>
                                                    <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                                    <option value="Hà Giang">Hà Giang</option>
                                                    <option value="Hà Nội">Hà Nội</option>
                                                </select>
                                            </div>
                                            <div>
                                                <select name="tentinh" id=""
                                                    class="border border-gray-600 bg-gray-400  py-5 block px-1 w-40 my-2 outline-none">
                                                    <option value="#">-Chọn Tỉnh-</option>
                                                    <option value="Tuyên Quang">Tuyên Quang</option>
                                                    <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                                    <option value="Hà Giang">Hà Giang</option>
                                                    <option value="Hà Nội">Hà Nội</option>
                                                </select>
                                            </div>
                                            <div>
                                                <select name="tentinh" id=""
                                                    class="border border-gray-600 bg-gray-400  py-5 inline-block px-1 w-40 outline-none">
                                                    <option value="#">-Chọn Tỉnh-</option>
                                                    <option value="Tuyên Quang">Tuyên Quang</option>
                                                    <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                                    <option value="Hà Giang">Hà Giang</option>
                                                    <option value="Hà Nội">Hà Nội</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="#">Mã trường</label>
                                        <div class="mt-2">
                                            <div>
                                                <input type="text" name="matruong" id="" required
                                                    class="border border-gray-600 bg-gray-400  py-4 inline-block px-1 w-40 outline-none">
                                            </div>
                                            <div>
                                                <input type="text" name="matruong" id="" required
                                                    class="border border-gray-600 bg-gray-400  py-4 block my-2  px-1 w-40 outline-none">
                                            </div>
                                            <div>
                                                <input type="text" name="matruong" id="" required
                                                    class="border border-gray-600 bg-gray-400  py-4 inline-block px-1 w-40 outline-none">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="#">Tên trường</label>
                                        <div class="mt-2">
                                            <div>
                                                <select name="tentruong" id=""
                                                    class="border border-gray-600 bg-gray-400  py-4 inline-block px-1 w-40 outline-none">
                                                    <option value="#"></option>
                                                    <option value="THPT1">THPT1</option>
                                                    <option value="THPT2">THPT2</option>
                                                    <option value="THPT3">THPT3</option>
                                                </select>
                                            </div>
                                            <div>
                                                <select name="tentruong" id=""
                                                    class="border border-gray-600 bg-gray-400  py-5 block my-2 px-1 w-40 outline-none">
                                                    <option value="#"></option>
                                                    <option value="THPT1">THPT1</option>
                                                    <option value="THPT2">THPT2</option>
                                                    <option value="THPT3">THPT3</option>
                                                </select>
                                            </div>
                                            <div>
                                                <select name="tentruong" id=""
                                                    class="border border-gray-600 bg-gray-400  py-5 inline-block px-1 w-40 outline-none">
                                                    <option value="#"></option>
                                                    <option value="THPT1">THPT1</option>
                                                    <option value="THPT2">THPT2</option>
                                                    <option value="THPT3">THPT3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-6">
                                    <div>
                                        <label for="#">Đối tượng ưu tiên tuyển sinh (Thuộc đối tượng nào thí sinh chọn
                                            đối
                                            tượng
                                            bên phải)</label> <select name="dtuutien" id=""
                                            class="border border-gray-600 bg-gray-400  py-4 inline-block px-4 w-40 outline-none"
                                            style="margin-left: 35px;">
                                            <option value="#">-Chọn-</option>
                                            <option value="DT1">DT1</option>
                                            <option value="DT2">DT2</option>
                                            <option value="DT3">DT3</option>
                                        </select>
                                    </div>
                                    <div class="flex justify-between mt-4">
                                        <label for="#">Khu vực ưu tiên tuyển sinh (Thuộc khu vực nào thí sinh chọn ký
                                            hiệu
                                            của khu vực(KV1, KV2, Kv3,) vào ô khu vực ưu tiên)</label>
                                        <select name="kvuutien" id=""
                                            class="border border-gray-600 bg-gray-400  py-4 inline-block px-4 w-48 outline-none">
                                            <option value="#">-Chọn-</option>
                                            <option value="kv1">kv1</option>
                                            <option value="kv2">kv2</option>
                                            <option value="kv3">kv3</option>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <div class="border border-gray-500 my-4">
                                        <label for="#"
                                            class="border-r-2 border-gray-600 bg-gray-400  py-4 inline-block px-4"> Địa
                                            chỉ liên hệ </label><input type="text" name="dclienhe" id="" required
                                            placeholder="Nhập địa chỉ" class=" py-3 pl-4  outline-none ">
                                    </div>
                                    <div class="grid grid-cols-2 gap-5">
                                        <div class="border border-gray-500 my-4">
                                            <label for="#"
                                                class="border-r-2 border-gray-600 bg-gray-400  py-4 inline-block px-4">Điện
                                                thoại thí sinh</label><input type="tel" name="sdtts" id="" required
                                                placeholder="Nhập số điện thoại" class=" py-3 pl-4  outline-none ">
                                        </div>
                                        <div class="border border-gray-500 my-4">
                                            <label for="#"
                                                class="border-r-2 border-gray-600 bg-gray-400  py-4 inline-block px-4">Điện
                                                thoại phụ huynh</label><input type="tel" name="sdtph" id="" required
                                                placeholder="Nhập số điện thoại" class=" py-3 pl-4  outline-none ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-20">
                                <div class="bg-yellow-500">
                                    <h2 class="text-center font-bold py-4">THÔNG TIN ĐĂNG KÍ</h2>
                                </div>
                                <div class="px-20 py-16 border ">
                                    <p class="text-sm">Sau khi đã đọc và nêu rõ các quy định về tiêu chí và điều kiện
                                        xét tuyển của
                                        Nhà trường, tôi
                                        đồng ý xét tuyển học bạ vào trình độ Đại học như sau(Chọn phương thức xét tuyển)
                                    </p>
                                    <div class="font-medium my-2">
                                        <div>
                                            <input type="checkbox"><label for="#" class="mx-2">Tuyển thẳng Tổng điểm
                                                trung bình lớp
                                                12 theo tổ
                                                hợp 3
                                                môn</label>
                                        </div>
                                        <div><input type="checkbox" name="" id=""> <label for="#" class="mx-2">Tuyển
                                                thẳng Tổng điểm
                                                trung bình 3
                                                học
                                                kỳ (HK1, HK2 năm lớp 11, HK1 năm lớp 12)</label></div>

                                        <p><strong>Lưu ý: </strong>Thí sinh có thể chọn một trong hai hoặc cả hai để
                                            tăng cơ
                                            hội trúng
                                            tuyển </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center mt-4 ">
                                <input type="submit" name="dangki" id="" value="Đăng kí"
                                    class="px-12 py-3 bg-red-500 rounded-full font-bold text-2xl text-white">
                            </div>
                        </form>

                        </div>
                        
                    </div>
                </section>
                <!-- end section -->[]

            </div>
        </div>
    </div>

</body>

</html>