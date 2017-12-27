-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017-12-26 22:05:30
-- 服务器版本： 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `syticket`
--

-- --------------------------------------------------------

--
-- 表的结构 `shows`
--

CREATE TABLE `shows` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `datetime` int(10) UNSIGNED NOT NULL,
  `city` text NOT NULL,
  `stock` smallint(5) UNSIGNED NOT NULL,
  `sale` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `shows`
--

INSERT INTO `shows` (`id`, `datetime`, `city`, `stock`, `sale`) VALUES
(1, 1523046600, 'Paris', 1000, 0),
(2, 1523113200, 'Paris', 1000, 0),
(3, 1523133000, 'Paris', 1000, 0),
(4, 1525465800, 'Paris', 1000, 0),
(5, 1525532400, 'Paris', 1000, 0),
(6, 1525552200, 'Paris', 1000, 0),
(7, 1525618800, 'Paris', 1000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `datetime` (`datetime`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `shows`
--
ALTER TABLE `shows`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
