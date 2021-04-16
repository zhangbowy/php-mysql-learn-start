-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 05 月 09 日 04:01
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `zhangbo`
--

-- --------------------------------------------------------

--
-- 表的结构 `zhangbo`
--

CREATE TABLE IF NOT EXISTS `zhangbo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `sex` varchar(20) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `ttime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- 转存表中的数据 `zhangbo`
--

INSERT INTO `zhangbo` (`id`, `username`, `password`, `sex`, `address`, `ttime`) VALUES
(1, 'boge', '5201314', 'nan', 'xian', '0000-00-00 00:00:00'),
(2, 'wangyu', 'wangyu123 ', 'girl', 'pingliang', '0000-00-00 00:00:00'),
(3, 'é›·å†›', 'leijun123 ', 'boy', 'åŒ—äº¬å°ç±³ç§‘æŠ€', '0000-00-00 00:00:00'),
(4, 'ä»»å€©', 'renqian123', 'girl', 'yanan', '0000-00-00 00:00:00'),
(30, 'éœ‰éœ‰', 'ilovemeimei  ', 'girl', 'california', '0000-00-00 00:00:00'),
(28, 'å¼ åš', 'wy1314   ', 'boy', 'ç”˜è‚ƒçœå¹³å‡‰å¸‚', '0000-00-00 00:00:00'),
(5, 'taylorswift', 'woaimeimei', 'godless', 'california', '0000-00-00 00:00:00'),
(31, 'èŒƒå°å…µ', 'fnaxiaobing123', 'nan', 'é™•è¥¿è¥¿å®‰', '0000-00-00 00:00:00'),
(32, 'ä¹ è¿‘å¹³', 'qwertyuiop', 'nan', 'é™•è¥¿', '2018-05-09 03:58:26');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
