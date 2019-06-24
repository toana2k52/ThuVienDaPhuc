-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 24, 2019 lúc 08:45 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thu_vien_da_phuc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietphieumuon`
--

CREATE TABLE `chitietphieumuon` (
  `id` int(12) NOT NULL,
  `id_phieumuon` int(12) NOT NULL,
  `id_sach` int(12) NOT NULL,
  `ngaytradukien` date NOT NULL,
  `soluong` int(12) NOT NULL,
  `tinhtrang` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietphieumuon`
--

INSERT INTO `chitietphieumuon` (`id`, `id_phieumuon`, `id_sach`, `ngaytradukien`, `soluong`, `tinhtrang`, `created_at`, `updated_at`) VALUES
(3, 2, 2, '2019-06-10', 1, '0', '2019-06-05 07:41:41', '2019-06-05 07:41:41'),
(4, 2, 9, '2019-06-10', 10, '0', '2019-06-05 07:41:41', '2019-06-06 02:22:26'),
(5, 3, 10, '2019-06-09', 2, '0', '2019-06-06 01:42:20', '2019-06-06 20:49:17'),
(6, 3, 9, '2019-06-09', 5, '0', '2019-06-06 01:42:20', '2019-06-06 01:42:20'),
(7, 4, 11, '2019-06-11', 2, '0', '2019-06-06 08:10:57', '2019-06-06 08:11:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietphieunhap`
--

CREATE TABLE `chitietphieunhap` (
  `id` int(12) NOT NULL,
  `id_phieunhap` int(12) NOT NULL,
  `id_sach` int(12) NOT NULL,
  `soluong` int(12) NOT NULL,
  `dongia` int(21) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietphieunhap`
--

INSERT INTO `chitietphieunhap` (`id`, `id_phieunhap`, `id_sach`, `soluong`, `dongia`, `created_at`, `updated_at`) VALUES
(4, 9, 8, 15, 12500, '2019-06-05 02:37:06', '2019-06-05 02:37:06'),
(5, 9, 9, 50, 6000, '2019-06-05 02:37:06', '2019-06-05 02:37:06'),
(7, 13, 8, 15, 12500, '2019-06-05 02:50:35', '2019-06-05 02:50:35'),
(8, 14, 10, 30, 20000, '2019-06-05 02:52:02', '2019-06-05 02:52:02'),
(9, 15, 11, 15, 6500, '2019-06-06 08:10:01', '2019-06-06 08:10:01'),
(10, 16, 12, 25, 3500, '2019-06-06 20:50:14', '2019-06-06 20:50:14'),
(11, 17, 13, 25, 3800, '2019-06-06 20:51:07', '2019-06-06 20:51:07'),
(12, 17, 14, 25, 3900, '2019-06-06 20:51:07', '2019-06-06 20:51:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietphieutra`
--

CREATE TABLE `chitietphieutra` (
  `id` int(12) NOT NULL,
  `id_phieutra` int(12) NOT NULL,
  `id_sach` int(12) NOT NULL,
  `ngaymuonsach` date NOT NULL,
  `soluong` int(12) NOT NULL,
  `tinhtrang` varchar(500) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietphieutra`
--

INSERT INTO `chitietphieutra` (`id`, `id_phieutra`, `id_sach`, `ngaymuonsach`, `soluong`, `tinhtrang`, `created_at`, `updated_at`) VALUES
(24, 25, 8, '2019-06-06', 5, '0', '2019-06-06 02:21:46', '2019-06-06 02:21:46'),
(25, 26, 9, '2019-06-05', 3, '0', '2019-06-06 02:22:26', '2019-06-06 02:22:26'),
(26, 27, 9, '2019-06-05', 5, '0', '2019-06-06 02:22:26', '2019-06-06 02:22:26'),
(27, 28, 11, '2019-06-06', 1, '0', '2019-06-06 08:11:35', '2019-06-06 08:11:35'),
(28, 29, 10, '2019-06-06', 3, '0', '2019-06-06 20:49:17', '2019-06-06 20:49:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chucvu`
--

CREATE TABLE `chucvu` (
  `id` int(12) NOT NULL,
  `tenchucvu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngachluong` float NOT NULL,
  `ghichu` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chucvu`
--

INSERT INTO `chucvu` (`id`, `tenchucvu`, `ngachluong`, `ghichu`) VALUES
(1, 'Giáo viên', 2, ''),
(2, 'Thủ thư', 1, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `docgia`
--

CREATE TABLE `docgia` (
  `id` int(12) NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` tinyint(1) NOT NULL COMMENT '1 nam, 0 nữ',
  `sodienthoai` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `docgia`
--

INSERT INTO `docgia` (`id`, `hoten`, `diachi`, `gioitinh`, `sodienthoai`, `ghichu`) VALUES
(1, 'Le đức thành', 'Ha noi', 0, '123456789', NULL),
(2, 'Dương Huy Toàn', 'Hà Nội', 1, '0354859494', NULL),
(3, 'Trần Văn A', 'Hà Nội', 1, '0998877665', NULL),
(4, 'Đỗ Thành Trung', 'Hà Tây', 1, '0547475415', NULL),
(5, 'Trần Thị C', 'Thái Nguyên', 0, '0321452148', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisach`
--

CREATE TABLE `loaisach` (
  `id` int(12) NOT NULL,
  `tenloaisach` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisach`
--

INSERT INTO `loaisach` (`id`, `tenloaisach`) VALUES
(1, 'Sách giáo khoa'),
(2, 'Sách tham khảo'),
(3, 'Sách bài tập'),
(4, 'Sách pháp luật'),
(5, 'Thể loại khác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(12) NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `dantoc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cancuoccongdan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_chucvu` int(12) NOT NULL,
  `id_phongban` int(12) NOT NULL,
  `id_bhxh` int(12) NOT NULL,
  `ghichu` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `hoten`, `sodienthoai`, `diachi`, `ngaysinh`, `dantoc`, `cancuoccongdan`, `id_chucvu`, `id_phongban`, `id_bhxh`, `ghichu`) VALUES
(1, 'Dương Huy Toàn', '0354859494', 'Ha Noi', '1998-09-19', 'Kinh', '123456789', 2, 1, 1, 'Boss');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieumuon`
--

CREATE TABLE `phieumuon` (
  `id` int(12) NOT NULL,
  `id_docgia` int(12) NOT NULL,
  `id_nhanvien` int(12) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phieumuon`
--

INSERT INTO `phieumuon` (`id`, `id_docgia`, `id_nhanvien`, `created_at`, `updated_at`) VALUES
(2, 3, 1, '2019-06-05 07:41:41', '2019-06-05 07:41:41'),
(3, 2, 1, '2019-06-06 01:42:20', '2019-06-06 01:42:20'),
(4, 4, 1, '2019-06-06 08:10:57', '2019-06-06 08:10:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieunhap`
--

CREATE TABLE `phieunhap` (
  `id` int(12) NOT NULL,
  `id_nhanvien` int(12) NOT NULL,
  `tongtien` int(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phieunhap`
--

INSERT INTO `phieunhap` (`id`, `id_nhanvien`, `tongtien`, `created_at`, `updated_at`) VALUES
(9, 1, 487500, '2019-06-05 09:37:06', '2019-06-05 09:37:06'),
(13, 1, 187500, '2019-06-05 09:50:35', '2019-06-05 09:50:35'),
(14, 1, 600000, '2019-06-05 09:52:01', '2019-06-05 09:52:01'),
(15, 1, 97500, '2019-06-06 15:10:01', '2019-06-06 15:10:01'),
(16, 1, 87500, '2019-06-07 03:50:14', '2019-06-07 03:50:14'),
(17, 1, 192500, '2019-06-07 03:51:07', '2019-06-07 03:51:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieutra`
--

CREATE TABLE `phieutra` (
  `id` int(12) NOT NULL,
  `id_nhanvien` int(12) NOT NULL,
  `id_docgia` int(12) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phieutra`
--

INSERT INTO `phieutra` (`id`, `id_nhanvien`, `id_docgia`, `created_at`, `updated_at`) VALUES
(25, 1, 2, '2019-06-06 02:21:46', '2019-06-06 02:21:46'),
(26, 1, 2, '2019-06-06 02:22:26', '2019-06-06 02:22:26'),
(27, 1, 2, '2019-06-06 02:22:26', '2019-06-06 02:22:26'),
(28, 1, 4, '2019-06-06 08:11:35', '2019-06-06 08:11:35'),
(29, 1, 2, '2019-06-06 20:49:17', '2019-06-06 20:49:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `id` int(12) NOT NULL,
  `id_loaisach` int(12) NOT NULL,
  `tensach` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(12) NOT NULL,
  `tacgia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nhaxuatban` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dongia` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`id`, `id_loaisach`, `tensach`, `soluong`, `tacgia`, `nhaxuatban`, `dongia`, `created_at`, `updated_at`) VALUES
(2, 1, 'Kết cấu oto', 22, 'Toàn 2', 'Kim đồng', '90000', '2019-06-05 16:15:46', '2019-06-05 14:41:41'),
(8, 1, 'GDCD 12', 50, 'Toàn', 'Hà Nội', '12500', '2019-06-05 09:37:06', '2019-06-06 09:21:46'),
(9, 2, 'Kết cấu thép', 63, 'Toàn 2', 'Ninh Bình', '6000', '2019-06-05 09:37:06', '2019-06-06 09:22:26'),
(10, 2, 'Học tốt ngữ văn 10', 63, 'Tuấn', 'Hường', '20000', '2019-06-05 09:52:02', '2019-06-07 03:49:17'),
(11, 1, 'Sinh học 12', 13, 'Toàn', 'Kim Đồng', '6500', '2019-06-06 15:10:01', '2019-06-06 15:11:35'),
(12, 1, 'Toán 12', 25, 'Toàn', 'Kim Đồng', '3500', '2019-06-07 03:50:14', '2019-06-07 03:50:14'),
(13, 1, 'Toán 11', 25, 'Toàn', 'KD', '3800', '2019-06-07 03:51:07', '2019-06-07 03:51:07'),
(14, 3, 'BT Toán 11', 25, 'Toàn', 'KD', '3900', '2019-06-07 03:51:07', '2019-06-07 03:51:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoannguoidung`
--

CREATE TABLE `taikhoannguoidung` (
  `id` int(12) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_nhanvien` int(12) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoannguoidung`
--

INSERT INTO `taikhoannguoidung` (`id`, `email`, `password`, `id_nhanvien`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2y$10$8SejJrc33rvTE1kbPgLcCe71t9S2FBfBmhwDEKzBRM/U6V2xk/6.S', 1, 'ca8juQuqVm0QyHLDlIhfEHnls38gAiIw2OYfwkJ85Umitzd9L4T5MRgv1lgG', '2019-05-18 14:18:31', '2019-05-19 14:14:04');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietphieumuon`
--
ALTER TABLE `chitietphieumuon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietphieunhap`
--
ALTER TABLE `chitietphieunhap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietphieutra`
--
ALTER TABLE `chitietphieutra`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `docgia`
--
ALTER TABLE `docgia`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaisach`
--
ALTER TABLE `loaisach`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phieumuon`
--
ALTER TABLE `phieumuon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phieutra`
--
ALTER TABLE `phieutra`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tensach` (`tensach`);

--
-- Chỉ mục cho bảng `taikhoannguoidung`
--
ALTER TABLE `taikhoannguoidung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietphieumuon`
--
ALTER TABLE `chitietphieumuon`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `chitietphieunhap`
--
ALTER TABLE `chitietphieunhap`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `chitietphieutra`
--
ALTER TABLE `chitietphieutra`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `docgia`
--
ALTER TABLE `docgia`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `loaisach`
--
ALTER TABLE `loaisach`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `phieumuon`
--
ALTER TABLE `phieumuon`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `phieutra`
--
ALTER TABLE `phieutra`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `sach`
--
ALTER TABLE `sach`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `taikhoannguoidung`
--
ALTER TABLE `taikhoannguoidung`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
