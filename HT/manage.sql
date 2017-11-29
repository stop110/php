-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 02 月 17 日 00:42
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
  `createdtime` date NOT NULL COMMENT '创建日期',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='后台管理';

--
-- 转存表中的数据 `manage`
--

INSERT INTO `manage` (`ID`, `title`, `advertise`, `apply`, `activity`, `address`, `tel`, `addressimg`, `createdtime`) VALUES
(0, '在线钟祥', 'http://api.0550.com/thumb/0640038001/uploads/images/37/62/ed/c98cbc378c82122d9126e44b0e.jpg', '即日起至2017年2月17日', '2017年2月18日—19日', '钟祥镜月湖大道大公元三楼', '小猫猴子（微信：Home0550 联系电话：18900501521）', '', '2017-02-17');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
