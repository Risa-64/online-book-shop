-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 06:00 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `u_unm` varchar(20) NOT NULL,
  `u_pwd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`u_unm`, `u_pwd`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `b_id` int(4) NOT NULL,
  `b_nm` varchar(60) NOT NULL,
  `b_subcat` varchar(25) NOT NULL,
  `b_desc` longtext NOT NULL,
  `b_publisher` varchar(40) NOT NULL,
  `b_edition` varchar(20) NOT NULL,
  `b_isbn` varchar(10) NOT NULL,
  `b_page` int(5) NOT NULL,
  `b_price` int(5) NOT NULL,
  `b_img` longtext NOT NULL,
  `b_pdf` longtext NOT NULL,
  `writer` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`b_id`, `b_nm`, `b_subcat`, `b_desc`, `b_publisher`, `b_edition`, `b_isbn`, `b_page`, `b_price`, `b_img`, `b_pdf`, `writer`) VALUES
(52, 'Mirar Gramer Bari', '4', 'â€˜à¦®à§€à¦°à¦¾à¦° à¦—à§à¦°à¦¾à¦®à§‡à¦° à¦¬à¦¾à§œà¦¿â€™ à¦‰à¦ªà¦¨à§à¦¯à¦¾à¦¸à§‡à¦° à¦¶à§à¦°à§à¦Ÿà¦¾ à¦ªà¦¾à¦ à¦•à¦¦à§‡à¦° à¦†à¦®à¦¾à¦° à¦†à¦°à§‡à¦•à¦Ÿà¦¿ à¦‰à¦ªà¦¨à§à¦¯à¦¾à¦¸à§‡à¦° à¦¶à§à¦°à§ à¦®à¦¨à§‡ à¦•à¦°à¦¿à§Ÿà§‡ à¦¦à§‡à¦¬à§‡ (à¦¶à§à¦°à¦¾à¦¬à¦£ à¦®à§‡à¦˜à§‡à¦° à¦¦à¦¿à¦¨) à¦¸à§‡à¦–à¦¾à¦¨à§‡à¦“ à¦¦à§à¦‡ à¦¬à§‹à¦¨ à¦¨à¦¿à§Ÿà§‡ à¦—à¦²à§à¦ª à¦—à§à¦°à§ à¦¹à¦²-à¦¶à¦¾à¦¹à¦¾à¦¨à¦¾, à¦¨à§€à¦¤à§à¥¤ à¦à¦–à¦¾à¦¨à§‡à¦“ à¦¦à§à¦‡ à¦¬à§‹à¦¨-à¦®à§€à¦°à¦¾ à¦à¦¬à¦‚ à¦¶à§‡à¦«à¦¾à¥¤ à¦®à¦¿à¦² à¦à¦‡ à¦ªà¦°à§à¦¯à¦¨à§à¦¤à¦‡à¥¤ à¦­à§‚à¦®à¦¿à¦•à¦¾à§Ÿ à¦¬à§à¦¯à¦¾à¦ªà¦¾à¦°à¦Ÿà¦¾ à¦‰à¦²à§à¦²à§‡à¦– à¦¨à¦¾ à¦•à¦°à¦²à§‡à¦“ à¦¹à¦¤à¥¤ à¦‰à¦²à§à¦²à§‡à¦– à¦•à¦°à¦²à¦¾à¦® à¦•à¦¾à¦°à¦£ à¦®à§€à¦°à¦¾à¦° à¦—à§à¦°à¦¾à¦®à§‡à¦° à¦¬à¦¾à§œà¦¿ à¦¯à¦–à¦¨ à¦²à¦¿à¦–à¦¤à§‡ à¦¶à§à¦°à§ à¦•à¦°à¦²à¦¾à¦® à¦¤à¦–à¦¨ à¦†à¦®à¦¾à¦° à¦®à§‡à¦œà§‹ à¦®à§‡à§Ÿà§‡ à¦–à§à¦¬ à¦¹à§ˆà¦šà§ˆ à¦¶à§à¦°à§ à¦•à¦°à¦²à¥¤ à¦°à¦¾à¦—à§€-à¦°à¦¾à¦—à§€ à¦—à¦²à¦¾à§Ÿ à¦¬à¦²à¦²-à¦à¦Ÿà¦¾ à¦•à§€ à¦•à¦°à¦›? à¦†à¦¬à¦¾à¦°à§‹ à¦†à¦—à§‡à¦° à¦®à¦¤à§‹? à¦†à¦®à¦¿ à¦®à§‡à§Ÿà§‡à¦•à§‡ à¦¬à¦²à¦²à¦¾à¦®, à¦•à¦¾à¦ à¦¾à¦®à§‹ à¦•à§‹à¦¨à§‹ à¦¬à§à¦¯à¦¾à¦ªà¦¾à¦° à¦¨à¦¾ à¦®à¦¾-à¦•à¦¾à¦ à¦¾à¦®à§‹à¦° à¦­à§‡à¦¤à¦°à§‡à¦° à¦¬à§à¦¯à¦¾à¦ªà¦¾à¦°à¦Ÿà¦¾à¦‡ à¦®à§‚à¦²à¥¤à¦¸à¦¬ à¦®à¦¾à¦¨à§à¦·à§‡à¦° à¦¶à¦°à§€à¦° à¦®à§‹à¦Ÿà¦¾à¦®à§à¦Ÿà¦¿ à¦à¦•à¦‡ à¦°à¦•à¦®, à¦•à¦¿à¦¨à§à¦¤à§ à¦®à¦¨?\r\nà¦®à§€à¦°à¦¾à¦° à¦—à§à¦°à¦¾à¦®à§‡à¦° à¦¬à¦¾à§œà¦¿à¦¤à§‡ à¦†à¦®à¦¿ à¦•à¦¿à¦›à§ à¦¯à§à¦•à§à¦¤à¦¿ à¦¬à§à¦¯à¦¬à¦¹à¦¾à¦° à¦•à¦°à§‡à¦›à¦¿, à¦¯à¦¾ à¦¸à¦®à§à¦ªà§‚à¦°à§à¦£à¦‡ à¦†à¦®à¦¾à¦° à¦¯à§à¦•à§à¦¤à¦¿à¥¤ à¦à¦‡ à¦•à¦¥à¦¾à¦Ÿà¦¾ à¦¬à¦²à¦¾ à¦¦à¦°à¦•à¦¾à¦°à¥¤\r\nà¦¹à§à¦®à¦¾à§Ÿà§‚à¦¨ à¦†à¦¹à¦®à§‡à¦¦\r\nà¦§à¦¾à¦¨à¦®à¦£à§à¦¡à¦¿, à¦¢à¦¾à¦•à¦¾', 'Bangla Academi', '12th Printed, 2013', '9847013301', 95, 150, 'upload_image/mira.gif', 'upload_ebook/gd of mobile.pdf', ''),
(13, 'HTML for world wide web', '19', 'html uses tags,it\'\'s  not case sensitive,work with own html tagswhich must be enclosed.', 'Elizabeth', '2005', 'htmlabc12', 560, 400, 'upload_image/0201354934.jpg', 'upload_ebook/html.pdf', ''),
(54, 'Professional ASP.Net', '1', 'ASP.NET is about making you as productive as possible when building fast and secure web applications. Each release of ASP.NET gets better and removes a lot of the tedious code that you previously needed to put in place, making common ASP.NET tasks easier. With this book, an unparalleled team of authors walks you through the full breadth of ASP.NET and the new and exciting capabilities of ASP.NET 4. The authors also show you how to maximize the abundance of features that ASP.NET offers to make your development process smoother and more efficient.', 'Somyo Prokashon', '3rd', '9847013301', 95, 350, 'upload_image/pro_asp4.jpg', '', 'shafkat '),
(51, 'Mishir Ali Somogro', '4', 'à¦®à¦¿à¦¸à¦¿à¦° à¦†à¦²à§€ à¦¸à¦®à¦—à§à¦°-à§§ à¦à¦° à¦‰à¦ªà¦¨à§à¦¯à¦¾à¦¸ à¦¸à¦®à§‚à¦¹\r\n\r\n* à¦¦à§‡à¦¬à§€\r\n* à¦¨à¦¿à¦¶à§€à¦¥à¦¿à¦¨à§€\r\n* à¦¨à¦¿à¦·à¦¾à¦¦\r\n* à¦…à¦¨à§à¦¯à¦­à§à¦¬à¦¨\r\n* à¦¬à§ƒà¦¹à¦¨à§à¦¨à¦²à¦¾\r\n* à¦­à§Ÿ\r\n* à¦¬à¦¿à¦ªà¦¦\r\n* à¦…à¦¨à§€à¦¶\r\n* à¦®à¦¿à¦¸à¦¿à¦° à¦†à¦²à¦¿à¦° à¦…à¦®à¦¿à¦®à¦¾à¦‚à¦¸à¦¿à¦¤ à¦°à¦¹à¦¸à§à¦¯\r\n* à¦†à¦®à¦¿ à¦à¦¬à¦‚ à¦†à¦®à¦°à¦¾\r\n* à¦¤à¦¨à§à¦¦à§à¦°à¦¾à¦¬à¦¿à¦²à¦¾à¦¸\r\n* à¦¹à¦¿à¦®à§à¦° à¦¦à§à¦¬à¦¿à¦¤à§€à§Ÿ à¦ªà§à¦°à¦¹à¦°\r\n* à¦†à¦®à¦¿à¦‡ à¦®à¦¿à¦¸à¦¿à¦° à¦†à¦²à¦¿\r\n* à¦¬à¦¾à¦˜à¦¬à¦¨à§à¦¦à¦¿ à¦®à¦¿à¦¸à¦¿à¦° à¦†à¦²à¦¿\r\n* à¦•à¦¹à§‡à¦¨ à¦•à¦¬à¦¿ à¦•à¦¾à¦²à¦¿à¦¦à¦¾à¦¸\r\n* à¦¹à¦°à¦¤à¦¨ à¦‡à¦¶à¦•à¦¾à¦ªà¦¨\r\n* à¦®à¦¿à¦¸à¦¿à¦° à¦†à¦²à¦¿à¦° à¦šà¦¶à¦®à¦¾\r\n\r\nà¦­à§‚à¦®à¦¿à¦•à¦¾à¦ƒ\r\n\r\nà¦®à¦¿à¦¸à¦¿à¦° à¦†à¦²à¦¿à¦° à¦¸à¦¬ à¦²à§‡à¦–à¦¾ à¦à¦• à¦®à¦²à¦¾à¦Ÿà§‡à¦° à¦­à§‡à¦¤à¦°à¥¤ à¦ªà¦¾à¦ à¦•à¦¦à§‡à¦° à¦œà¦¨à§à¦¯à§‡ à¦¸à§à¦¸à¦‚à¦¬à¦¾à¦¦ à¦¨à¦¾ à¦¦à§à¦ƒà¦¸à¦‚à¦¬à¦¾à¦¦ à¦¬à§à¦à¦¤à§‡ à¦ªà¦¾à¦°à¦›à¦¿ à¦¨à¦¾à¥¤ à¦¦à§à¦°à§à¦®à§‚à¦²à§à¦¯à§‡à¦° à¦¬à¦¾à¦œà¦¾à¦°à§‡ à¦®à¦¿à¦¸à¦¿à¦° à¦†à¦²à¦¿ à¦¸à¦¾à¦¹à§‡à¦¬à§‡à¦° à¦®à¦¤à§‹ à¦­à¦¾à¦²à§‹ à¦®à¦¾à¦¨à§à¦· à¦†à¦Ÿà¦¶ à¦Ÿà¦¾à¦•à¦¾ à¦¨à¦¿à§Ÿà§‡ à¦¨à§‡à¦¬à§‡à¦¨? à¦¬à¦‡à§Ÿà§‡à¦° à¦¨à¦¾-à¦•à¦¿ à¦†à¦Ÿà¦¶ à¦Ÿà¦¾à¦•à¦¾à¥¤\r\n\r\nà¦†à¦®à¦¾à¦° à¦œà¦¨à§à¦¯ à¦­à¦¾à¦²à§‹ à¦¹à§Ÿà§‡à¦›à§‡à¥¤ à¦›à§œà¦¾à¦¨à§‹ à¦›à¦¿à¦Ÿà¦¾à¦¨à§‹ à¦®à¦¿à¦¸à¦¿à¦° à¦†à¦²à¦¿ à¦à¦• à¦¸à¦™à§à¦—à§‡ à¦ªà¦¾à¦šà§à¦›à¦¿à¥¤ à¦…à¦¨à¦¨à§à¦¯à¦¾à¦° à¦®à¦¨à¦¿à¦°à¦•à§‡ à¦§à¦¨à§à¦¯à¦¬à¦¾à¦¦à¥¤\r\n\r\nà¦¹à§à¦®à¦¾à§Ÿà§‚à¦¨ à¦†à¦¹à¦®à§‡à¦¦\r\nà§¨à§ª-à§¦à§­--à§¨à§¦à§¦à§®\r\nà¦¨à§à¦¹à¦¾à¦¶ à¦ªà¦²à§à¦²à§€', 'Ononnya', '5th Printed, 2016', '9847010501', 1144, 680, 'upload_image/mishir.jpeg', 'upload_ebook/gd of mobile.pdf', 'Humayun ahmed'),
(53, 'Himur Moddhyo Dupur', '4', 'à¦®à¦§à§à¦¯à¦¦à§à¦ªà§à¦° à¦¬à§œà¦‡ à¦†à¦¶à§à¦šà¦°à§à¦¯ à¦¸à¦®à§Ÿà¥¤ à¦¤à¦–à¦¨ â€˜à¦­à§‚à¦¤à§‡ à¦®à¦¾à¦°à§‡ à¦¢à¦¿à¦²à§à¥¤â€™ à¦à¦¬à¦‚ à¦…à¦¦à§à¦­à¦¤ à¦•à§‹à¦¨à§‹ à¦•à¦¾à¦°à¦£à§‡ à¦•à¦¿à¦›à§ à¦¸à¦®à§Ÿà§‡à¦° à¦œà¦¨à§à¦¯ à¦†à¦•à¦¾à¦¶à¦Ÿà¦¾ à¦†à§Ÿà¦¨à¦¾ à¦¹à§Ÿà§‡ à¦¯à¦¾à§Ÿà¥¤ à¦¹à¦¿à¦®à§ à¦¹à¦¾à¦à¦Ÿà¦¤à§‡ à¦¬à§‡à¦° à¦¹à§Ÿà§‡à¦›à§‡ à¦®à¦§à§à¦¯à¦¦à§à¦ªà§à¦°à§‡à¥¤ à¦¤à¦¾à¦° à¦¹à¦¾à¦¤à§‡ à¦›à§‹à¦Ÿà§à¦Ÿ à¦à¦•à¦Ÿà¦¾ à¦¦à§à¦ªà§à¦°à¦®à¦¨à¦¿ à¦—à¦¾à¦›à§‡à¦° à¦šà¦¾à¦°à¦¾à¥¤ à¦¸à§‡à¦–à¦¾à¦¨à§‡ à¦šà¦¾à¦° à¦ªà¦¾à¦à¦šà¦Ÿà¦¾ à¦«à§à¦²à¥¤ à¦à¦–à¦¨à§‹ à¦«à§‹à¦Ÿà§‡à¦¨à¦¿à¥¤ à¦®à¦§à§à¦¯à¦¦à§à¦ªà§à¦°à§‡ à¦«à§à¦Ÿà¦¬à§‡à¥¤ à¦¹à¦¿à¦®à§ à¦«à§à¦² à¦«à§‹à¦Ÿà¦¾à¦° à¦¸à¦™à§à¦—à§‡à¦¸à¦™à§à¦—à§‡ à¦†à¦•à¦¾à¦¶à§‡à¦° à¦¦à¦¿à¦•à§‡ à¦¤à¦¾à¦•à¦¾à¦¬à§‡à¥¤ à¦¨à¦¿à¦œà§‡à¦•à§‡ à¦¦à§‡à¦–à¦¾à¦° à¦šà§‡à¦·à§à¦Ÿà¦¾ à¦•à¦°à¦¬à§‡ à¦†à¦•à¦¾à¦¶ à¦†à§Ÿà¦¨à¦¾à§Ÿà¥¤', 'Bangla Academi', '13th Printed, 2016', '9847011600', 95, 200, 'upload_image/mod.jpg', 'upload_ebook/caches.docx', 'humayun ahmed');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(4) NOT NULL,
  `cat_nm` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_nm`) VALUES
(1, 'CSE Books'),
(3, 'Translation'),
(4, 'Story'),
(5, 'Poem'),
(6, 'Research');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `con_id` int(4) NOT NULL,
  `con_nm` varchar(25) NOT NULL,
  `con_writer` varchar(35) NOT NULL,
  `edition` varchar(10) NOT NULL,
  `quantity` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`con_id`, `con_nm`, `con_writer`, `edition`, `quantity`) VALUES
(10, 'abul', 'demitry3411@yahoo.com', 'mi note 3', 4),
(9, 'abul', 'demitry3411@yahoo.com', 'Huawei p30', 0),
(8, 'abul', 'demitry3411@yahoo.com', '2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ord`
--

CREATE TABLE `ord` (
  `name` varchar(20) NOT NULL,
  `product` varchar(20) NOT NULL,
  `qty` int(20) NOT NULL,
  `total` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ord`
--

INSERT INTO `ord` (`name`, `product`, `qty`, `total`) VALUES
('shafkat', 'A Dictionary of Arch', 1, 1000),
('shafkat', 'A Dictionary of Arch', 1, 500),
('', '', 0, 0),
('shafkat', 'A Dictionary of Arch', 1, 500),
('shafkat', 'A Dictionary of Arch', 1, 500),
('shafkat', 'A Dictionary of Arch', 1, 500),
('shafkat', 'Pasta Perfection', 1, 100),
('shafkat', 'Pasta Perfection', 1, 100),
('shafkat', 'Pasta Perfection', 1, 100),
('shafkat', 'Pasta Perfection', 1, 200),
('', '', 0, 0),
('', '', 0, 0),
('', '', 0, 0),
('', '', 0, 0),
('', '', 0, 0),
('', '', 0, 0),
('', '', 0, 0),
('', '', 0, 0),
('', '', 0, 0),
('shafkat', '', 1, 0),
('shafkat', '', 1, 0),
('shafkat', '', 1, 0),
('shafkat', '', 1, 0),
('shafkat', '', 1, 0),
('shafkat', '', 1, 0),
('shafkat', '', 1, 0),
('shafkat', '', 2, 0),
('shafkat', '', 2, 0),
('shafkat', '', 1, 0),
('shafkat', '', 1, 0),
('shafkat', '$row[b_nm] ', 1, 0),
('shafkat', '$row[b_nm] ', 1, 0),
('shafkat', 'Mishir Ali Somogro', 1, 680),
('shafkat', 'Mishir Ali Somogro', 1, 680),
('shafkat', 'Mishir Ali Somogro', 1, 680),
('shafkat', 'Mishir Ali Somogro', 1, 680),
('shafkat', 'Mishir Ali Somogro', 1, 680),
('shafkat', 'Mishir Ali Somogro', 2, 1360),
('shafkat', '', 1, 1360),
('shafkat', 'Mishir Ali Somogro', 1, 2040),
('shafkat', '', 1, 2040),
('shafkat', '', 1, 2040),
('shafkat', 'HTML for world wide ', 1, 2440),
('shafkat', 'Elephant Kingdom : S', 1, 3440),
('shafkat', 'Elephant Kingdom : S', 2, 4440),
('shafkat', 'Elephant Kingdom : S', 2, 4440),
('shafkat', 'Elephant Kingdom : S', 2, 4440),
('shafkat', 'Elephant Kingdom : S', 2, 4440),
('shafkat', 'Elephant Kingdom : S', 2, 4440),
('shafkat', 'Mirar Gramer Bari', 1, 4590),
('shafkat', 'Mirar Gramer Bari', 1, 4590),
('shafkat', 'Mirar Gramer Bari', 1, 4590),
('shafkat', 'Mirar Gramer Bari', 1, 150),
('shafkat', 'Mirar Gramer Bari', 1, 150),
('shafkat', 'Mirar Gramer Bari', 1, 150),
('shafkat', 'Mirar Gramer Bari', 1, 150),
('shafkat', 'Mirar Gramer Bari', 1, 150),
('shafkat', 'Mirar Gramer Bari', 1, 300),
('shadman', 'Mirar Gramer Bari', 1, 150),
('shadman', 'Mirar Gramer Bari', 1, 150),
('ritu', 'Mirar Gramer Bari', 1, 150);

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

CREATE TABLE `pending` (
  `username` varchar(200) NOT NULL,
  `bookname` varchar(200) NOT NULL,
  `price` int(200) NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pub`
--

CREATE TABLE `pub` (
  `pub_id` int(10) NOT NULL,
  `pub_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subcat`
--

CREATE TABLE `subcat` (
  `subcat_id` int(4) NOT NULL,
  `parent_id` int(4) NOT NULL,
  `subcat_nm` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcat`
--

INSERT INTO `subcat` (`subcat_id`, `parent_id`, `subcat_nm`) VALUES
(1, 1, 'CSE Books'),
(2, 2, 'Art And Culture'),
(3, 3, 'Translation'),
(4, 4, 'Story'),
(5, 5, 'Poem'),
(6, 6, 'Research'),
(28, 19, 'Medical');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(4) NOT NULL,
  `u_fnm` varchar(35) NOT NULL,
  `u_unm` varchar(25) NOT NULL,
  `u_pwd` varchar(20) NOT NULL,
  `u_gender` varchar(7) NOT NULL,
  `u_email` varchar(60) NOT NULL,
  `u_contact` varchar(12) NOT NULL,
  `u_city` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_fnm`, `u_unm`, `u_pwd`, `u_gender`, `u_email`, `u_contact`, `u_city`) VALUES
(17, 'Rokhsana Ritu', 'ritu', 'abcd', '', '17103037iubat@gmail.com', '012222222222', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `writer`
--

CREATE TABLE `writer` (
  `writer_id` int(10) NOT NULL,
  `writer_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `pub`
--
ALTER TABLE `pub`
  ADD PRIMARY KEY (`pub_id`);

--
-- Indexes for table `subcat`
--
ALTER TABLE `subcat`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_unm`),
  ADD UNIQUE KEY `u_id` (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `b_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `con_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subcat`
--
ALTER TABLE `subcat`
  MODIFY `subcat_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
