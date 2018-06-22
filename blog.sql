-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-06-22 08:00:24
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- 表的结构 `administrator`
--

CREATE TABLE `administrator` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `administrator`
--

INSERT INTO `administrator` (`id`, `username`, `password`) VALUES
(1, 'yang', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE `article` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `img` varchar(100) NOT NULL,
  `administrator_id` int(11) NOT NULL DEFAULT '1',
  `class_id` int(11) NOT NULL,
  `subtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `img`, `administrator_id`, `class_id`, `subtime`) VALUES
(19, '第三方', '<p>七岁的爱莎有个古怪又疯狂的外婆，会埋伏在雪堆里吓唬邻居，把重要的事情记在墙上因为墙不会丢，半夜从医院溜出来带着爱莎翻进动物园，在阳台上用彩弹枪射击推销员，基本上想干什么就干什么。这个四处惹麻烦的外婆却是爱莎唯1的朋友，也是她心中的超级英雄。不管什么情况下，外婆都会站在爱莎这一边，为了她去跟全世界拼命。就算是超级英雄，也有失去超能力的一天。外婆不幸得了癌症去世，留给爱莎一项艰巨的任务--将外婆的道歉信送给她得罪过的九个邻居。收信人包括一只爱吃糖果的大狗，一个总在不停洗手的怪物，一个管东管西的烦人精和一个酗酒的心理医生。这一趟送信之旅让爱莎渐渐发现：外婆和邻居们的故事，比她听过的所有童话都更加精彩。</p>', '15293362281958780741.jpg', 1, 1, '2018-06-18 11:37:08');

-- --------------------------------------------------------

--
-- 表的结构 `contentclass`
--

CREATE TABLE `contentclass` (
  `id` int(10) UNSIGNED NOT NULL,
  `class_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `contentclass`
--

INSERT INTO `contentclass` (`id`, `class_name`) VALUES
(1, 'html/css'),
(2, 'php'),
(3, '其他'),
(4, 'mysql'),
(5, '个人感想'),
(11, 'c#'),
(18, 'java');

-- --------------------------------------------------------

--
-- 表的结构 `diary`
--

CREATE TABLE `diary` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `lableOne` varchar(10) NOT NULL,
  `lableTwo` varchar(10) NOT NULL,
  `lableThree` varchar(10) NOT NULL,
  `lableFour` varchar(10) NOT NULL,
  `lableFive` varchar(10) NOT NULL,
  `administrator_id` int(11) NOT NULL DEFAULT '1',
  `subtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `diary`
--

INSERT INTO `diary` (`id`, `title`, `content`, `lableOne`, `lableTwo`, `lableThree`, `lableFour`, `lableFive`, `administrator_id`, `subtime`) VALUES
(1, 'sad', '11111', 's', 's', 'a', 's', 'd', 1, '2018-06-18 04:15:12'),
(2, '豆腐干', '1111', '似的发射点士大夫', '的', '的', '的', '的', 1, '2018-06-18 04:14:52'),
(3, '豆腐干', '111', '似的发射点士大夫', '的', '的', '的', '的', 1, '2018-06-18 04:14:27'),
(12, 'dsa', '11', 'ssad', 'asd', 'asd', 'asd', 'asd', 1, '2018-06-18 04:14:02'),
(13, 'egfdf', 'fcvg', 'dfgdf', 'sdfds', 'sdaf', 'dsf', 'sdf', 1, '2018-06-19 06:01:09'),
(14, 'sadf', 'adsd', 'asd', '', '', '', '', 1, '2018-06-19 09:09:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contentclass`
--
ALTER TABLE `contentclass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diary`
--
ALTER TABLE `diary`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `article`
--
ALTER TABLE `article`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- 使用表AUTO_INCREMENT `contentclass`
--
ALTER TABLE `contentclass`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- 使用表AUTO_INCREMENT `diary`
--
ALTER TABLE `diary`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
