-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 02 月 15 日 08:21
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `huodong`
--

-- --------------------------------------------------------

--
-- 表的结构 `manage`
--

CREATE TABLE IF NOT EXISTS `manage` (
  `ID` int(11) NOT NULL,
  `title` varchar(200) NOT NULL COMMENT '标题',
  `advertise` varchar(200) NOT NULL COMMENT '广告地址',
  `apply` varchar(200) NOT NULL COMMENT '报名时间',
  `activity` varchar(200) NOT NULL COMMENT '活动时间',
  `address` varchar(200) NOT NULL COMMENT '活动地址',
  `tel` varchar(200) NOT NULL COMMENT '咨询电话',
  `addressimg` varchar(200) NOT NULL COMMENT '图片',
  `doing1` varchar(200) NOT NULL COMMENT '活动赏析1',
  `doing2` varchar(200) NOT NULL COMMENT '活动赏析2',
  `doing3` varchar(200) NOT NULL COMMENT '活动赏析3',
  `doing4` varchar(200) NOT NULL COMMENT '活动赏析4',
  `createdtime` date NOT NULL COMMENT '创建日期',
  `moditime` date NOT NULL COMMENT '修改日期',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='后台管理';

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
