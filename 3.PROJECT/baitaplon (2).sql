-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 13, 2020 lúc 07:14 AM
-- Phiên bản máy phục vụ: 8.0.17
-- Phiên bản PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `baitaplon`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangnhap`
--

CREATE TABLE `dangnhap` (
  `taikhoan` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `matkhau` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dangnhap`
--

INSERT INTO `dangnhap` (`taikhoan`, `matkhau`, `email`) VALUES
('1234', '4321', 'tranghienbui');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xethocba`
--

CREATE TABLE `xethocba` (
  `id` int(50) NOT NULL,
  `hoten` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ngaysinh` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `noisinh` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hocluc12` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gioitinh` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `dantoc` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tongiao` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `namtn` int(20) NOT NULL,
  `hanhkiem12` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cmnd` int(20) NOT NULL,
  `ngaycap` date NOT NULL,
  `noicap` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hktc` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `matinh` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tentinh` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `matruong` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tentruong` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dtuutien` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kvuutien` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dclienhe` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `sdtts` int(20) NOT NULL,
  `sdtph` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `xethocba`
--

INSERT INTO `xethocba` (`id`, `hoten`, `ngaysinh`, `noisinh`, `hocluc12`, `gioitinh`, `dantoc`, `tongiao`, `namtn`, `hanhkiem12`, `cmnd`, `ngaycap`, `noicap`, `hktc`, `matinh`, `tentinh`, `matruong`, `tentruong`, `dtuutien`, `kvuutien`, `dclienhe`, `sdtts`, `sdtph`) VALUES
(1, 'bùi hiền trang', '27/08/2000', 'tuyên quang', 'khá', '1', 'kinh', 'không', 2018, 'khá', 123432, '2020-11-10', 'tuyên quang', 'hào phú sơn dương', '123', 'tuyên quang', '654', 'THPT1', 'DT1', 'kv1', 'quang tất hào phú', 4321, 12345),
(2, 'chinh chinh', '12/4/2000', 'hà nội', 'giỏi', 'nữ', 'kinh', 'không', 2018, 'tốt', 5638, '2020-11-17', 'hà tây', 'hà nội', '23', 'hà nội', '23', 'THPT1', 'đt2', 'kv1', 'quốc oai hà nội', 4321, 32456),
(5, 'trang chó', '31/12/2000', 'tuyên quang', 'ngu', 'bd', 'nùng', 'không', 5, 'yếu', 444444444, '2020-11-10', 'trung quốc', 'hào phú sơn dương', '23', 'tuyên quang', '23', 'THPT1', 'DT1', 'kv1', 'quốc oai hà nội', 777, 888);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD PRIMARY KEY (`taikhoan`);

--
-- Chỉ mục cho bảng `xethocba`
--
ALTER TABLE `xethocba`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `xethocba`
--
ALTER TABLE `xethocba`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
