-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 05:30 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhac`
--

-- --------------------------------------------------------

--
-- Table structure for table `baihat`
--

CREATE TABLE `baihat` (
  `id` int(255) NOT NULL,
  `tenbaihat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `casy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theloai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duongdan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loibaihat` varchar(9999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luotnghe` int(255) NOT NULL,
  `idtheloai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `baihat`
--

INSERT INTO `baihat` (`id`, `tenbaihat`, `casy`, `theloai`, `duongdan`, `image`, `loibaihat`, `luotnghe`, `idtheloai`) VALUES
(91, 'Anh chẳng sao mà', 'Khang Viêt', 'Nhạc Trẻ', 'nhac/Anh-Chang-Sao-Ma-Khang-Viet.mp3', 'image/anh26.jpg', '', 0, 4),
(92, 'Chạm Khẽ Tim Anh Một Chút Thôi', 'Noo Phước Thịnh', 'Nhạc Trẻ', 'nhac/Cham-Khe-Tim-Anh-Mot-Chut-Thoi-Noo-Phuoc-Thinh.mp3', 'image/anh8.jpg', '', 0, 4),
(93, 'Roi nguoi thuong cung hoa nguoi dung', 'Hien Ho', 'Nhạc Thư Giãn', 'nhac/Roi-Nguoi-Thuong-Cung-Hoa-Nguoi-Dung-Hien-Ho.mp3', 'image/anh468.jpg', '', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `baihathot`
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

-- --------------------------------------------------------

--
-- Table structure for table `casy`
--

CREATE TABLE `casy` (
  `id` int(255) NOT NULL,
  `casy` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chude`
--

CREATE TABLE `chude` (
  `id` int(11) NOT NULL,
  `chude` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
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
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `userName`, `passWord`, `Name`, `gioitinh`, `ngaysinh`, `diachi`, `email`, `level`, `code`, `active`, `sdt`) VALUES
(5, 'toan', '$2y$12$9077aa17387c21beacc10OQdXVJ3VrA0arhqlA2EWgMoSEWB/ppX6', 'Người Dùng', '1', '2001-12-12', 'KTX ĐHTL', 'bolobalabolobala12345@gmail.com', 0, 'dffda36403afcd243a6845afdf669e95', 1, '0978456321'),
(9, 'hao', '$2y$12$71cadf94e86c095680b9culM.IsYLs7hRBAOy18fE.4Du4ety5Dx.', 'Người Dùng', '1', '2001-12-12', 'KTX ĐHTL', 'haohv62@wru.vn', 2, 'f66864550736e14f33f45d551ec7a941', 1, '0978456321'),
(10, 'user', '$2y$12$90cc5725b4fe5b7bbd0d3uiUUUBCtSf0ZCmhgxd/wYuKsSQHt0E4u', 'Người Dùng', '1', '2001-12-12', 'KTX ĐHTL', 'hongducphi17@gmail.com', 0, '3d5710979ba4d8057d10e2eb90cc1405', 1, '0978456321');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `id` int(255) NOT NULL,
  `tentheloai` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`id`, `tentheloai`, `image`) VALUES
(1, 'Rap', ''),
(2, 'Nhạc Thư Giãn', ''),
(3, 'Nhạc EDM', ''),
(4, 'Nhạc Trẻ', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baihat`
--
ALTER TABLE `baihat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idtheloai` (`idtheloai`);

--
-- Indexes for table `baihathot`
--
ALTER TABLE `baihathot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `casy`
--
ALTER TABLE `casy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chude`
--
ALTER TABLE `chude`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baihat`
--
ALTER TABLE `baihat`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `baihathot`
--
ALTER TABLE `baihathot`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `casy`
--
ALTER TABLE `casy`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chude`
--
ALTER TABLE `chude`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baihat`
--
ALTER TABLE `baihat`
  ADD CONSTRAINT `baihat_ibfk_1` FOREIGN KEY (`idtheloai`) REFERENCES `theloai` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
