-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2019-12-08 14:01:01
-- 服务器版本： 5.7.26
-- PHP 版本： 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `db_myskills`
--

-- --------------------------------------------------------

--
-- 表的结构 `myskills`
--

DROP TABLE IF EXISTS `myskills`;
CREATE TABLE IF NOT EXISTS `myskills` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `myskills`
--

INSERT INTO `myskills` (`ID`, `title`, `description`) VALUES
(1, 'AI/PS', 'Be good at using AI and PS to make posters and icons'),
(2, 'C4D/3DMAX', 'Be good at using C4D and 3DMAX to make model of product'),
(3, 'AE/PR', 'Be good at using AE and PR to edit the video.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
