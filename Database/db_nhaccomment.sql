-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 29, 2018 lúc 04:20 PM
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
-- Cơ sở dữ liệu: `db_nhaconline`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `album`
--

CREATE TABLE `album` (
  `id` int(100) NOT NULL,
  `tenalbum` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `casi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chude` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=16384 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `album`
--

INSERT INTO `album` (`id`, `tenalbum`, `image`, `casi`, `chude`) VALUES
(2, '3', 'image/anh12.jpg', '2', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baihat`
--

CREATE TABLE `baihat` (
  `id` int(100) NOT NULL,
  `tenbaihat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luotnghe` int(100) NOT NULL,
  `idalbum` int(10) NOT NULL,
  `idcasi` int(10) NOT NULL,
  `idchude` int(10) NOT NULL,
  `ngaydang` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AVG_ROW_LENGTH=16384 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baihat`
--

INSERT INTO `baihat` (`id`, `tenbaihat`, `path`, `image`, `luotnghe`, `idalbum`, `idcasi`, `idchude`, `ngaydang`) VALUES
(7, '1212', 'nhac/Buon-Khong-Em-Dat-G.mp3', 'image/anh14.jpg', 175, 2, 2, 3, '2018-12-29 17:00:43'),
(8, '222', 'nhac/Chieu-Hom-Ay-JayKii.mp3', 'image/anh2.jpg', 22, 2, 2, 3, '2018-12-29 20:21:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `casi`
--

CREATE TABLE `casi` (
  `id` int(100) NOT NULL,
  `tencasi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieusu` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB AVG_ROW_LENGTH=16384 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `casi`
--

INSERT INTO `casi` (`id`, `tencasi`, `image`, `tieusu`) VALUES
(2, '2', 'image/anh10.jpg', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chude`
--

CREATE TABLE `chude` (
  `id` int(100) NOT NULL,
  `tenchude` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=16384 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chude`
--

INSERT INTO `chude` (`id`, `tenchude`, `image`) VALUES
(3, '2121', 'image/a.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_cm` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime NOT NULL,
  `check_cm` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baihat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id_cm`, `name`, `message`, `time`, `check_cm`, `baihat_id`) VALUES
(10, 'Hào', 'Bài hát của bạn rất hay ', '2018-12-29 20:30:00', 'Y', 7),
(11, 'Toản', 'Bài hát này rất tuyệt vời !!! 1 like cho ca sỹ thể hiện. Chúc a thành công trên con đường sắp tới.', '2018-12-29 20:30:49', 'Y', 8),
(12, 'Hoàng Hào', 'Ngày mai nếu lỡ gặp nhau đừng bận lòng anh chẳng sao đâu!', '2018-12-29 21:20:25', 'Y', 7),
(13, 'Châu Khải Phong', 'Đoạn đường bước phía trước', '2018-12-29 21:46:09', 'Y', 7),
(16, 'Vũ Văn Cao', 'Wow !! This song is fantastic ! Thank u for song', '2018-12-29 22:02:14', 'Y', 8),
(17, 'Toàn', 'Nhớ người yêu cũ quá ! Híc híc', '2018-12-29 22:04:46', 'Y', 8),
(18, 'Boy_co_don_tim_girl_fa', 'Huhu, mặc dù mình k có người yêu nhưng mình vẫn buồn\r\n =))', '2018-12-29 22:05:31', 'Y', 8),
(19, 'Us', 'Good Song!', '2018-12-29 22:12:58', 'Y', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `userName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passWord` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoten` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioitinh` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaysinh` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(1) NOT NULL DEFAULT '0',
  `code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(1) DEFAULT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'image/avatar.png',
  `ngaydangky` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `userName`, `passWord`, `hoten`, `gioitinh`, `ngaysinh`, `diachi`, `sdt`, `email`, `level`, `code`, `active`, `avatar`, `ngaydangky`) VALUES
(1, 'hao', '$2y$12$35e64d4f0754e8d6b90b5u8RWlLkJsTjkAgprmpBZVixSjdS0PPD6', NULL, NULL, NULL, NULL, NULL, 'haohv62@wru.vn', 2, '88c015f93d23c0964adb12e7c5af7a12', 1, 'image/avatar.png', '2018-12-29 16:58:13');

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `v_baihat`
-- (See below for the actual view)
--
CREATE TABLE `v_baihat` (
`id` int(100)
,`tenbaihat` varchar(100)
,`path` varchar(100)
,`image` varchar(100)
,`luotnghe` int(100)
,`tencasi` varchar(100)
,`tenalbum` varchar(100)
,`tenchude` varchar(100)
,`ngaydang` datetime
,`idchude` int(10)
,`idcasi` int(10)
,`idalbum` int(10)
);

-- --------------------------------------------------------

--
-- Cấu trúc cho view `v_baihat`
--
DROP TABLE IF EXISTS `v_baihat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_baihat`  AS  select `bh`.`id` AS `id`,`bh`.`tenbaihat` AS `tenbaihat`,`bh`.`path` AS `path`,`bh`.`image` AS `image`,`bh`.`luotnghe` AS `luotnghe`,`cs`.`tencasi` AS `tencasi`,`ab`.`tenalbum` AS `tenalbum`,`cd`.`tenchude` AS `tenchude`,`bh`.`ngaydang` AS `ngaydang`,`bh`.`idchude` AS `idchude`,`bh`.`idcasi` AS `idcasi`,`bh`.`idalbum` AS `idalbum` from (((`baihat` `bh` join `casi` `cs` on((`bh`.`idcasi` = `cs`.`id`))) join `chude` `cd` on((`bh`.`idchude` = `cd`.`id`))) join `album` `ab` on((`bh`.`idalbum` = `ab`.`id`))) ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `baihat`
--
ALTER TABLE `baihat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `baihat_ibfk_1` (`idcasi`),
  ADD KEY `baihat_ibfk_2` (`idchude`),
  ADD KEY `baihat_ibfk_3` (`idalbum`);

--
-- Chỉ mục cho bảng `casi`
--
ALTER TABLE `casi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chude`
--
ALTER TABLE `chude`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_cm`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `album`
--
ALTER TABLE `album`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `baihat`
--
ALTER TABLE `baihat`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `casi`
--
ALTER TABLE `casi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `chude`
--
ALTER TABLE `chude`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_cm` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baihat`
--
ALTER TABLE `baihat`
  ADD CONSTRAINT `baihat_ibfk_1` FOREIGN KEY (`idcasi`) REFERENCES `casi` (`id`),
  ADD CONSTRAINT `baihat_ibfk_2` FOREIGN KEY (`idchude`) REFERENCES `chude` (`id`),
  ADD CONSTRAINT `baihat_ibfk_3` FOREIGN KEY (`idalbum`) REFERENCES `album` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
