-- MySQL dump 10.16  Distrib 10.1.36-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: nhac1
-- ------------------------------------------------------
-- Server version	10.1.36-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `album`
--

DROP TABLE IF EXISTS `album`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenalbum` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `album`
--

LOCK TABLES `album` WRITE;
/*!40000 ALTER TABLE `album` DISABLE KEYS */;
/*!40000 ALTER TABLE `album` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `baihat`
--

DROP TABLE IF EXISTS `baihat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `baihat` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `tenbaihat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `casy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theloai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duongdan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loibaihat` varchar(9999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luotnghe` int(255) NOT NULL,
  `idtheloai` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idtheloai` (`idtheloai`),
  CONSTRAINT `baihat_ibfk_1` FOREIGN KEY (`idtheloai`) REFERENCES `theloai` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `baihat`
--

LOCK TABLES `baihat` WRITE;
/*!40000 ALTER TABLE `baihat` DISABLE KEYS */;
INSERT INTO `baihat` VALUES (10,'Hongkong1','Trọng Tài','Nhạc Trẻ','nhac/hongkong1.mp3','image/21309893.jpg','',11,4),(11,'Tên bài hát','Tên ca sĩ','Nhạc EDM','nhac/hongkong1.mp3','image/21124196.jpg','',5,3),(12,'Tên bài hát','Tên ca sĩ','Nhạc Thư Giãn','nhac/hongkong1.mp3','image/22913579.jpg','',3,2),(13,'Tên bài hát','Tên ca sĩ','Rap','nhac/hongkong1.mp3','image/21106388.jpg','',2,1),(14,'Tên bài hát','Tên ca sĩ','Nhạc Trẻ','nhac/hongkong1.mp3','image/22911086.jpg','',0,4),(15,'Tên bài hát','Tên ca sĩ','Nhạc Thư Giãn','nhac/hongkong1.mp3','image/23725919.jpg','',0,2),(16,'Tên bài hát','Tên ca sĩ','Nhạc Thư Giãn','nhac/hongkong1.mp3','image/22695413.jpg','',0,2);
/*!40000 ALTER TABLE `baihat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `casy`
--

DROP TABLE IF EXISTS `casy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `casy` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `casy` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casy`
--

LOCK TABLES `casy` WRITE;
/*!40000 ALTER TABLE `casy` DISABLE KEYS */;
/*!40000 ALTER TABLE `casy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nguoidung`
--

DROP TABLE IF EXISTS `nguoidung`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nguoidung` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
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
  `sdt` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nguoidung`
--

LOCK TABLES `nguoidung` WRITE;
/*!40000 ALTER TABLE `nguoidung` DISABLE KEYS */;
INSERT INTO `nguoidung` VALUES (5,'toan','$2y$12$9077aa17387c21beacc10OQdXVJ3VrA0arhqlA2EWgMoSEWB/ppX6','Admin','0','1991-01-01','No','bolobalabolobala12345@gmail.com',0,'dffda36403afcd243a6845afdf669e95',1,'012345678'),(8,'admin','$2y$12$9077aa17387c21beacc10OQdXVJ3VrA0arhqlA2EWgMoSEWB/ppX6','Admin','0','1991-01-01','No','haohv62@wru.vn',2,'',1,'012345678');
/*!40000 ALTER TABLE `nguoidung` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `theloai`
--

DROP TABLE IF EXISTS `theloai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `theloai` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `tentheloai` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `theloai`
--

LOCK TABLES `theloai` WRITE;
/*!40000 ALTER TABLE `theloai` DISABLE KEYS */;
INSERT INTO `theloai` VALUES (1,'Rap','image/22334189.jpg'),(2,'Nhạc Thư Giãn','image/281235.jpg'),(3,'Nhạc EDM','image/19975520.jpg'),(4,'Nhạc Trẻ','image/22695413.jpg');
/*!40000 ALTER TABLE `theloai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'nhac1'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-20 21:36:57
