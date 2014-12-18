-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2014 at 04:13 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lzweb`
--
CREATE DATABASE IF NOT EXISTS `lzweb` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `lzweb`;

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE IF NOT EXISTS `mission` (
  `mid` int(8) NOT NULL AUTO_INCREMENT,
  `uid` int(8) NOT NULL,
  `tid` int(8) NOT NULL,
  `title` varchar(20) COLLATE utf8_bin NOT NULL,
  `content` varchar(20) COLLATE utf8_bin NOT NULL,
  `goodcount` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  `pubtime` date NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`mid`, `uid`, `tid`, `title`, `content`, `goodcount`, `grade`, `pubtime`) VALUES
(1, 1, 7, '新闻测试', '新闻内容测试', 8, 4, '2014-12-18'),
(2, 1, 7, '这是新闻', '这是一个新闻测试内容', 33, 3, '2014-12-18'),
(3, 2, 3, 'wen的新闻', 'wen的新闻内容，测试一下', 1, 5, '2014-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `rid` int(8) NOT NULL AUTO_INCREMENT,
  `uid` int(8) NOT NULL,
  `nickname` varchar(20) COLLATE utf8_bin NOT NULL,
  `mid` int(8) NOT NULL,
  `content` varchar(11) COLLATE utf8_bin NOT NULL,
  `goodcount` int(11) NOT NULL,
  `grade` int(1) NOT NULL,
  `replytime` date NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`rid`, `uid`, `nickname`, `mid`, `content`, `goodcount`, `grade`, `replytime`) VALUES
(1, 2, 'wen', 1, '这就是一个神奇的回复啊', 8, 2, '2014-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE IF NOT EXISTS `theme` (
  `tid` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(4) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`tid`, `name`) VALUES
(7, '新闻'),
(8, '体育');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL,
  `nickname` varchar(10) COLLATE utf8_bin NOT NULL,
  `type` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `password`, `nickname`, `type`) VALUES
(1, 'admin', 'admin', 'admin', 0),
(2, 'wen', 'wen', 'wen', 1),
(3, 'yang', 'yang', 'yang', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
