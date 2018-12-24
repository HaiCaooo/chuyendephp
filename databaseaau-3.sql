-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 22, 2018 lúc 06:45 AM
-- Phiên bản máy phục vụ: 5.7.21
-- Phiên bản PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `databaseaau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sđt` int(11) DEFAULT NULL,
  `adress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `datecreate` datetime DEFAULT CURRENT_TIMESTAMP,
  `dateupdate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `email`, `sđt`, `adress`, `status`, `datecreate`, `dateupdate`) VALUES
(1, 't153706', '987654321', 'duongminhnhut1996@gmail.com', 1206698421, 'ajfsijbagijdgbb', 1, '2018-11-14 00:00:00', '2018-11-14 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nauan`
--

DROP TABLE IF EXISTS `nauan`;
CREATE TABLE IF NOT EXISTS `nauan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tenmon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinhanh` varchar(255) DEFAULT NULL,
  `cachlam` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nauan`
--

INSERT INTO `nauan` (`id`, `tenmon`, `hinhanh`, `cachlam`) VALUES
(46, 'BA BỐN CHỈ CHIÊN TRỘN NƯỚC MẮM KIỂU THÁI', 'avatar1/file_1545459963.jpg', 'qwetiuas[pfhnsolkgdnsg'),
(45, 'eyhfgtfdtdtht', 'avatar1/file_1545458231.jpg', 'ăn gì cai gi day'),
(44, 'BA BỐN CHỈ CHIÊN TRỘN NƯỚC MẮM KIỂU THÁI', 'avatar1/file_1545453483.jpg', 'ăn gì day mọi người');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoandangki`
--

DROP TABLE IF EXISTS `taikhoandangki`;
CREATE TABLE IF NOT EXISTS `taikhoandangki` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `adress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fileinput` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `taikhoandangki`
--

INSERT INTO `taikhoandangki` (`id`, `hoten`, `email`, `phone`, `adress`, `note`, `fileinput`) VALUES
(64, 'Nguyen Van A', '', '9876544410', '', 'sadgsagagaaf', 'avatar/file_1545453684.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
