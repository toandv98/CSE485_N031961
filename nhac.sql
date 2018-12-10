-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 10, 2018 lúc 06:06 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhac`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baihat`
--

CREATE TABLE `baihat` (
  `id` int(255) NOT NULL,
  `tenbaihat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `casy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tacgia` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theloai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duongdan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loibaihat` varchar(9999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luotnghe` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baihathot`
--

CREATE TABLE `baihathot` (
  `id` int(255) UNSIGNED NOT NULL,
  `tenbaiat` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `casy` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tacgia` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theloai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duongdan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loibaihat` varchar(9999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luotnghe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baihathot`
--

INSERT INTO `baihathot` (`id`, `tenbaiat`, `casy`, `tacgia`, `theloai`, `duongdan`, `loibaihat`, `luotnghe`) VALUES
(1, 'Mùa Đông Không Lạnh', 'AkiraPhan', 'AkiraPhan', 'Việt Nam', 'nhac/Mùa Đông Không Lạnh.mp3', '', 1000),
(2, 'HongKong1', 'Toản', 'Đặng Văn Toản', 'Việt Nam', 'nhac/HongKhong1.mp3', '', 2200),
(3, 'Em Không Thể', 'Tiên Tiên ft Hoàng Tualiver', 'Tiên Tiên', 'Việt Nam', 'nhac/Em Không Thể.mp3', '', 3300),
(4, 'Con Trai Cưng', 'Bray', 'BRay', 'Việt Nam', 'nhac/Con Trai Cưng.mp3', '', 9900),
(5, 'Thằng Điên', 'Justa Tee', 'Virus ft Justa Tee ', 'Việt Nam', 'nhac/Thằng Điên.mp3', '', 100000),
(6, 'Tay Trái Chỉ Trăng', 'Tát Đỉnh Đỉnh', 'Phượng Hoàng', 'Nhạc Quốc Tế', 'nhac/Tay Trái Chỉ Trăng.mp3', '', 105600);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `casy`
--

CREATE TABLE `casy` (
  `id` int(255) NOT NULL,
  `casy` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `casy`
--

INSERT INTO `casy` (`id`, `casy`) VALUES
(1, 'Vũ Văn Cao'),
(2, 'Độ Mixi'),
(15, 'Đinh Ngọc Toàn'),
(76, 'Sơn Tùng M-TP'),
(77, 'Đông Nhi'),
(78, '365 Daband');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chude`
--

CREATE TABLE `chude` (
  `id` int(11) NOT NULL,
  `chude` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chude`
--

INSERT INTO `chude` (`id`, `chude`) VALUES
(10, 'Nhạc Bolero'),
(11, 'Nhạc Remix'),
(12, 'Nhạc EDM'),
(13, 'Nhạc RVG'),
(14, 'Love Songs'),
(15, 'qasdfnm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `idIMG` int(200) NOT NULL,
  `Images` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(255) NOT NULL,
  `userName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passWord` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(1) NOT NULL,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(1) NOT NULL,
  `sdt` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `userName`, `passWord`, `Name`, `gioitinh`, `ngaysinh`, `diachi`, `email`, `level`, `code`, `active`, `sdt`) VALUES
(5, 'toan', '$2y$12$9077aa17387c21beacc10OQdXVJ3VrA0arhqlA2EWgMoSEWB/ppX6', 'Hao', '1', '11111-11-11', 'KTX Thủy Lợi', 'bolobalabolobala12345@gmail.com', 2, 'dffda36403afcd243a6845afdf669e95', 1, '01234567967'),
(7, 'hao', '$2y$12$c094da967685eae238edfuwzYWjBJrRiVnj7GJ3GtogoTpzjJE3BS', 'Hao', '1', '11111-11-11', 'KTX Thủy Lợi', 'haohv62@wru.vn', 0, '07058d4fbf9f3f5c32e64563499c1a92', 1, '01234567967');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `id` int(255) NOT NULL,
  `tentheloai` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`id`, `tentheloai`) VALUES
(16, 'Việt Nam'),
(17, 'Nhạc Quốc Tế'),
(19, 'Âu Mỹ'),
(20, 'Hàn Quốc'),
(21, 'Rap Việt'),
(22, 'Cách Mạng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baihat`
--
ALTER TABLE `baihat`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `baihathot`
--
ALTER TABLE `baihathot`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `casy`
--
ALTER TABLE `casy`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chude`
--
ALTER TABLE `chude`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`idIMG`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baihat`
--
ALTER TABLE `baihat`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `baihathot`
--
ALTER TABLE `baihathot`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `casy`
--
ALTER TABLE `casy`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT cho bảng `chude`
--
ALTER TABLE `chude`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `idIMG` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
