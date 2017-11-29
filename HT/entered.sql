-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 02 月 17 日 00:43
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `entered`
--

CREATE TABLE IF NOT EXISTS `entered` (
  `ID` int(11) NOT NULL COMMENT '自增ID',
  `mobile` char(11) NOT NULL COMMENT '手机号',
  `username` varchar(20) NOT NULL COMMENT '姓名',
  `createddate` date NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`),
  UNIQUE KEY `mobile` (`mobile`),
  UNIQUE KEY `username` (`username`),
  KEY `mobile_2` (`mobile`),
  KEY `username_2` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='活动报名表';

--
-- 转存表中的数据 `entered`
--

INSERT INTO `entered` (`ID`, `mobile`, `username`, `createddate`) VALUES
(0, '18580711111', '黄靖', '2017-02-17');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
