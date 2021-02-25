-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2020 lúc 07:29 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vinmart`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_hd`
--

CREATE TABLE `chitiet_hd` (
  `id_ct_hoadon` int(11) NOT NULL,
  `mahoadon` int(11) NOT NULL,
  `mahanghoa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dongia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanh_tien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiet_hd`
--

INSERT INTO `chitiet_hd` (`id_ct_hoadon`, `mahoadon`, `mahanghoa`, `dongia`, `soluong`, `thanh_tien`) VALUES
(15, 39, '1212', 5000, 5, 25000),
(16, 39, '1313', 5000, 5, 25000),
(17, 40, '1212', 5000, 4, 20000),
(18, 40, '1313', 5000, 6, 30000),
(19, 41, '1212', 5000, 2, 10000),
(20, 41, '1313', 5000, 4, 20000),
(21, 42, '1212', 5000, 3, 15000),
(22, 42, '1313', 5000, 3, 15000),
(23, 43, '1212', 5000, 9, 45000),
(24, 44, '1212', 5000, 10, 50000),
(25, 44, '1313', 5000, 3, 15000),
(26, 46, '1212', 5000, 5, 25000),
(27, 46, '1313', 5000, 5, 25000),
(28, 47, '1212', 5000, 5, 25000),
(29, 48, '1212', 5000, 5, 25000),
(30, 48, '1313', 5000, 2, 10000),
(31, 49, '1212', 5000, 5, 25000),
(32, 50, '1313', 5000, 5, 25000),
(33, 50, '1212', 5000, 10, 50000),
(34, 64, '1212', 5000, 5, 30000),
(35, 65, '1212', 5000, 5, 25000),
(36, 65, '1313', 5000, 5, 25000),
(37, 66, '1212', 5000, 4, 20000),
(38, 66, '1313', 5000, 4, 20000),
(39, 67, '1212', 5000, 5, 25000),
(40, 67, '1313', 5000, 5, 25000),
(41, 68, '1313', 5000, 5, 25000),
(42, 68, '1414', 7000, 5, 35000),
(43, 69, '1212', 5000, 3, 15000),
(44, 69, '1414', 7000, 5, 35000),
(45, 70, '1212', 5000, 5, 25000),
(46, 70, '1313', 5000, 2, 10000),
(47, 70, '1414', 7000, 3, 21000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_nhapkho`
--

CREATE TABLE `ct_nhapkho` (
  `machitietnhap` int(11) NOT NULL,
  `mahanghoa` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `ngaynhap` date NOT NULL,
  `tongtgia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ct_nhapkho`
--

INSERT INTO `ct_nhapkho` (`machitietnhap`, `mahanghoa`, `soluong`, `ngaynhap`, `tongtgia`) VALUES
(1, 1, 200, '2020-10-24', 1000000),
(2, 2, 200, '2020-10-24', 1000000),
(3, 3, 300, '2020-10-24', 1500000),
(4, 1, 200, '2020-11-20', 1000000),
(8, 5, 200, '2020-11-20', 1400000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doanhthu`
--

CREATE TABLE `doanhthu` (
  `madt` int(11) NOT NULL,
  `ngaylap` date NOT NULL,
  `tongdoanhthu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `doanhthu`
--

INSERT INTO `doanhthu` (`madt`, `ngaylap`, `tongdoanhthu`) VALUES
(1, '2020-11-18', 140000),
(2, '2020-11-20', 300000),
(3, '2020-11-21', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahoadon` int(11) NOT NULL,
  `manhanvien` int(11) NOT NULL,
  `ngaylap` date NOT NULL,
  `giolap` time NOT NULL DEFAULT current_timestamp(),
  `tonggia` int(11) NOT NULL,
  `thanh_toan` int(11) NOT NULL,
  `due` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`mahoadon`, `manhanvien`, `ngaylap`, `giolap`, `tonggia`, `thanh_toan`, `due`) VALUES
(39, 2, '2020-11-15', '16:21:28', 50000, 50000, 0),
(40, 1, '2020-11-15', '19:33:31', 50000, 100000, 50000),
(41, 2, '2020-11-17', '01:02:57', 30000, 50000, 20000),
(42, 1, '2020-11-18', '00:10:26', 30000, 30000, 0),
(43, 2, '2020-11-18', '00:22:22', 45000, 50000, 5000),
(44, 2, '2020-11-18', '19:43:19', 65000, 100000, 35000),
(45, 1, '2020-11-19', '01:04:43', 40000, 50000, 10000),
(46, 2, '2020-11-19', '01:05:35', 50000, 50000, 0),
(47, 1, '2020-11-19', '01:07:25', 25000, 30000, 5000),
(48, 1, '2020-11-19', '10:10:18', 35000, 40000, 5000),
(64, 1, '2020-11-20', '00:53:21', 50000, 50000, 0),
(65, 1, '2020-11-20', '00:58:13', 50000, 50000, 0),
(66, 1, '2020-11-20', '01:00:01', 40000, 50000, 10000),
(67, 2, '2020-11-20', '01:03:37', 50000, 50000, 0),
(68, 1, '2020-11-20', '11:09:02', 60000, 60000, 0),
(69, 2, '2020-11-20', '11:10:01', 50000, 50000, 0),
(70, 1, '2020-11-20', '18:38:12', 56000, 60000, 4000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khohang`
--

CREATE TABLE `khohang` (
  `makho` int(11) NOT NULL,
  `mahanghoa` int(11) NOT NULL,
  `ngaynhap` date NOT NULL,
  `soluong` int(11) NOT NULL,
  `barcode` varchar(55) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khohang`
--

INSERT INTO `khohang` (`makho`, `mahanghoa`, `ngaynhap`, `soluong`, `barcode`) VALUES
(1, 1, '2020-10-24', 400, ''),
(2, 2, '2020-10-24', 163, '1212'),
(3, 3, '2020-10-24', 277, '1313'),
(6, 5, '2020-11-20', 187, '1414');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mathang`
--

CREATE TABLE `mathang` (
  `mahanghoa` int(11) NOT NULL,
  `tenmh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dongia` int(50) NOT NULL,
  `dvt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `barcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `msncc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mathang`
--

INSERT INTO `mathang` (`mahanghoa`, `tenmh`, `dongia`, `dvt`, `barcode`, `msncc`) VALUES
(1, 'Coca cola', 5000, 'Chai', '8934588063145', 1),
(2, 'Pepsi', 5000, 'Chai', '1212', 2),
(3, 'Trà xanh 0 độ', 5000, 'Chai', '1313', 3),
(5, 'Sữa Vinamilk', 7000, 'Hộp', '1414', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ncc`
--

CREATE TABLE `ncc` (
  `msncc` int(11) NOT NULL,
  `tenncc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` char(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ncc`
--

INSERT INTO `ncc` (`msncc`, `tenncc`, `diachi`, `sdt`) VALUES
(1, 'Coca-Cola Việt Nam', ' 485 Song Hành Xa Lộ Hà Nội, Phường Linh Trung, Thủ Đức, Thành phố Hồ Chí Minh', '08 3896 10'),
(2, 'Suntory PepsiCo Việt Nam', ' Bluesky Tower, 5f office 01, Đường Bạch Đằng, Phường 2, Tân Bình, Thành phố Hồ Chí Minh', '028 3848 7'),
(3, 'Tân Hiệp Phát', '219 Đại lộ Bình Dương, Vĩnh Phú, Thuận An, Bình Dương', '0898 760 0'),
(4, 'th true milk', '166 Nguyễn Thái Học, P. Quang Trung, TP. Vinh, Nghệ An', '1800545440'),
(5, 'Vinamilk', 'Số 10, Đường Tân Trào, phường Tân Phú, quận 7, Tp. HCM', '028 54 155'),
(6, 'P&G Việt Nam', '11/F, MPlaza, 39 Le Duan Blvd. District 1, Ho Chi Minh City Vietnam', '035214555');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manhanvien` int(11) NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`manhanvien`, `hoten`, `diachi`, `ngaysinh`, `gioitinh`, `sdt`, `img`, `id`) VALUES
(1, 'Lê Văn Hiếu', '911/1/8 Lạc Long Quân p.11 q.Tân Bình TP HCM', '1999-01-03', 'Nam', '0888537087', '67605686_1691507820993260_4187575014607814656_o.jpg', 2),
(2, 'Hồ Ninh Hải Uyên', '485 Song Hành Xa Lộ Hà Nội, Phường Linh Trung, Thủ Đức, Thành phố Hồ Chí Minh', '2020-10-24', 'Nữ', '2147483647', '4-1468251774220-0-0-1162-1580-crop-1468251782962.jpg', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phanquyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `username`, `password`, `phanquyen`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1),
(2, 'hieule', 'ffa3304fb995f48b0c313b8c4f179fc2', 2),
(3, 'haiuyen', 'e10adc3949ba59abbe56e057f20f883e', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiet_hd`
--
ALTER TABLE `chitiet_hd`
  ADD PRIMARY KEY (`id_ct_hoadon`);

--
-- Chỉ mục cho bảng `ct_nhapkho`
--
ALTER TABLE `ct_nhapkho`
  ADD PRIMARY KEY (`machitietnhap`),
  ADD KEY `mahanghoa` (`mahanghoa`);

--
-- Chỉ mục cho bảng `doanhthu`
--
ALTER TABLE `doanhthu`
  ADD PRIMARY KEY (`madt`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahoadon`),
  ADD KEY `manhanvien` (`manhanvien`);

--
-- Chỉ mục cho bảng `khohang`
--
ALTER TABLE `khohang`
  ADD PRIMARY KEY (`makho`),
  ADD KEY `mahanghoa` (`mahanghoa`);

--
-- Chỉ mục cho bảng `mathang`
--
ALTER TABLE `mathang`
  ADD PRIMARY KEY (`mahanghoa`),
  ADD KEY `msncc` (`msncc`);

--
-- Chỉ mục cho bảng `ncc`
--
ALTER TABLE `ncc`
  ADD PRIMARY KEY (`msncc`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manhanvien`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiet_hd`
--
ALTER TABLE `chitiet_hd`
  MODIFY `id_ct_hoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `ct_nhapkho`
--
ALTER TABLE `ct_nhapkho`
  MODIFY `machitietnhap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `doanhthu`
--
ALTER TABLE `doanhthu`
  MODIFY `madt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `khohang`
--
ALTER TABLE `khohang`
  MODIFY `makho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `mathang`
--
ALTER TABLE `mathang`
  MODIFY `mahanghoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `ncc`
--
ALTER TABLE `ncc`
  MODIFY `msncc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `manhanvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ct_nhapkho`
--
ALTER TABLE `ct_nhapkho`
  ADD CONSTRAINT `ct_nhapkho_ibfk_2` FOREIGN KEY (`mahanghoa`) REFERENCES `mathang` (`mahanghoa`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`manhanvien`) REFERENCES `nhanvien` (`manhanvien`);

--
-- Các ràng buộc cho bảng `khohang`
--
ALTER TABLE `khohang`
  ADD CONSTRAINT `khohang_ibfk_1` FOREIGN KEY (`mahanghoa`) REFERENCES `mathang` (`mahanghoa`);

--
-- Các ràng buộc cho bảng `mathang`
--
ALTER TABLE `mathang`
  ADD CONSTRAINT `mathang_ibfk_1` FOREIGN KEY (`msncc`) REFERENCES `ncc` (`msncc`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_2` FOREIGN KEY (`id`) REFERENCES `taikhoan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
