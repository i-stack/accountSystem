-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2023-03-03 15:18:08
-- 服务器版本： 5.6.50-log
-- PHP 版本： 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `ceshi`
--

-- --------------------------------------------------------

--
-- 表的结构 `black_admin`
--

CREATE TABLE `black_admin` (
  `uid` int(11) NOT NULL,
  `user` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `last` datetime NOT NULL,
  `dlip` varchar(15) DEFAULT NULL,
  `active` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `black_admin`
--

INSERT INTO `black_admin` (`uid`, `user`, `pass`, `last`, `dlip`, `active`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2023-03-03 15:16:10', '36.161.210.83', 1);

-- --------------------------------------------------------

--
-- 表的结构 `black_config`
--

CREATE TABLE `black_config` (
  `k` varchar(255) NOT NULL DEFAULT '',
  `v` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `black_config`
--

INSERT INTO `black_config` (`k`, `v`) VALUES
('description', '简单在线礼金记账查询系统'),
('keywords', '礼金记账系统，记账系统，随礼记录'),
('sitename', '礼金记账系统');

-- --------------------------------------------------------

--
-- 表的结构 `black_list`
--

CREATE TABLE `black_list` (
  `id` int(11) NOT NULL,
  `qq` text,
  `level` text NOT NULL,
  `date` datetime NOT NULL,
  `note` text COMMENT '????ԭ?'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `black_list`
--

INSERT INTO `black_list` (`id`, `qq`, `level`, `date`, `note`) VALUES
(12, '狗子', '已还礼', '2023-03-02 13:11:41', '100'),
(15, '刀客', '未还礼', '2023-03-03 15:14:29', '888');

--
-- 转储表的索引
--

--
-- 表的索引 `black_admin`
--
ALTER TABLE `black_admin`
  ADD PRIMARY KEY (`uid`);

--
-- 表的索引 `black_config`
--
ALTER TABLE `black_config`
  ADD PRIMARY KEY (`k`(10));

--
-- 表的索引 `black_list`
--
ALTER TABLE `black_list`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `black_admin`
--
ALTER TABLE `black_admin`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `black_list`
--
ALTER TABLE `black_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
