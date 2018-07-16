-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-07-16 01:44:01
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tea`
--
CREATE DATABASE IF NOT EXISTS `tea` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tea`;

-- --------------------------------------------------------

--
-- 表的结构 `me`
--

CREATE TABLE `me` (
  `id` int(11) NOT NULL,
  `phone` varchar(225) NOT NULL COMMENT '电话',
  `weixin` varchar(225) NOT NULL COMMENT '微信',
  `qq` varchar(225) NOT NULL COMMENT 'qq'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `newsTitle` varchar(225) NOT NULL,
  `newsJianjie` text NOT NULL,
  `newsUrl` varchar(225) NOT NULL,
  `newsImage` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `newsTitle`, `newsJianjie`, `newsUrl`, `newsImage`) VALUES
(1, 'asd', '123', 'ddnewsUrl', 'http://localhost/tea/upload/TIM截图20180618153041.png'),
(3, 'afd', '123', 'adsf', 'http://localhost/tea/upload/TIM截图20180618153041.png'),
(5, 'sdsdsdsd', '1312312312', 'sadqweqweqwe', 'http://localhost/tea/upload/TIM截图20180618153041.png'),
(6, '奥术大师多群', '方大化工风控部答复你批发水果', 'https://mp.weixin.qq.com/s/FaRlruL4SJzwYi-B1By5rA', 'http://localhost/tea/upload/微信图片_20180714143845.jpg'),
(7, 'xxxx', 'zzzz', 'cccc', 'http://localhost/tea/upload/Screenshot_20180329-211913.png');

-- --------------------------------------------------------

--
-- 表的结构 `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `uName` varchar(225) NOT NULL COMMENT '姓名',
  `phone` varchar(225) NOT NULL COMMENT '手机号码',
  `liuyan` text COMMENT '留言'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `person`
--

INSERT INTO `person` (`id`, `uName`, `phone`, `liuyan`) VALUES
(12, '阿', '123', '我想加盟，请联系我。'),
(13, '辣鸡', '2554', ''),
(14, '搜狗', '123', 'XP就咯'),
(15, '搜狗', '123', '加盟费多少？请联系我。'),
(16, 'aaa', '123', 'asdasd'),
(17, 'aaa', '123', 'asdasd'),
(18, 'aaa', '123', 'asdasd'),
(19, 'aaa', '123', 'asdasd'),
(20, 'aaa', '123', 'asdasd'),
(21, 'aaa', '123', 'asdasd'),
(22, 'aaa', '123', 'asdasd'),
(23, 'aaa', '123', 'asdasd'),
(24, 'aaa', '123', 'asdasd'),
(25, 'aaa', '123', 'asdasd'),
(26, 'aaa', '123', 'asdasd'),
(27, 'aaa', '123', 'asdasd'),
(28, 'uName', '123', 'liuyan');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL COMMENT 'id',
  `username` varchar(225) NOT NULL COMMENT '用户名',
  `password` varchar(225) NOT NULL COMMENT '密码'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `me`
--
ALTER TABLE `me`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `me`
--
ALTER TABLE `me`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
