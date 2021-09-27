-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2021 at 09:16 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eye`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_cus` int(10) NOT NULL,
  `name_cus` varchar(100) NOT NULL,
  `age` varchar(5) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `r_old` varchar(30) NOT NULL,
  `pdr_old` varchar(5) NOT NULL,
  `l_old` varchar(30) NOT NULL,
  `pdl_old` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_cus`, `name_cus`, `age`, `tel`, `address`, `email`, `company`, `r_old`, `pdr_old`, `l_old`, `pdl_old`) VALUES
(15, 'คฑาวุธ ถวัลย์วิลาสวงศ์', '32', '0843087996,0885788121', 'hatyai', '', 'ราชภัฏสงขลา', '00', '00', '00', '00'),
(16, 'สุปราณี แสงเขียว', '31', '0805391115', 'hatyai', '', 'มอ', '-125', '30', '-125', '30'),
(17, 'พีรพล แซ่ไล่', '30', '0869634594', 'สงขลา', '', 'Man A', '', '', '', ''),
(19, 'วรวัฒน์ ทานิล', '25', '0896545279', 'อยุธยา', '', 'cap com', '', '', '', ''),
(20, 'กนกวรรณ ชมเชย', '40', '08123456789', 'พัทลุง', '', 'รพ.พัทลุง', '00', '00', '00', '00'),
(21, 'ธีรเดช เพขรแก้ว', '43', '081222464444', '-', '', 'วค', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `len`
--

CREATE TABLE `len` (
  `id_len` int(10) NOT NULL,
  `name_len` varchar(100) NOT NULL,
  `price_len` int(10) NOT NULL,
  `popular_len` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `len`
--

INSERT INTO `len` (`id_len`, `name_len`, `price_len`, `popular_len`) VALUES
(1, '--ไม่ตัดเลนส์--', 0, ''),
(4, 'EMI', 750, ''),
(5, 'KT', 450, ''),
(6, 'Auto', 1200, ''),
(7, 'Progressive', 1400, ''),
(11, 'FT', 600, '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `level` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user`, `pass`, `name`, `level`) VALUES
('admin', '1234', 'หลำ', '1'),
('ping', '1234', 'ปิง', '1');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_pro` int(10) NOT NULL,
  `name_pro` text NOT NULL,
  `price_pro` int(10) NOT NULL,
  `popular_pro` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_pro`, `name_pro`, `price_pro`, `popular_pro`) VALUES
(1, '--นำกรอบแว่นมาเอง--', 0, ''),
(2, 'P เล็ก', 350, ''),
(3, 'P ใหญ่', 700, ''),
(7, 'Okey', 3000, '');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `id_sale` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `date_sale` date NOT NULL,
  `date_recive` date NOT NULL,
  `time_recive` time NOT NULL,
  `total_price` int(10) NOT NULL,
  `mudjum` int(10) NOT NULL,
  `date_mudjum` date NOT NULL,
  `payrevive` int(10) NOT NULL DEFAULT 0,
  `date_payrecive` date NOT NULL,
  `balance` int(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`id_sale`, `name`, `tel`, `date_sale`, `date_recive`, `time_recive`, `total_price`, `mudjum`, `date_mudjum`, `payrevive`, `date_payrecive`, `balance`, `status`) VALUES
(41, 'นก', '074357205', '2564-05-26', '2564-05-27', '12:00:00', 3500, 3000, '2564-05-26', 500, '2564-05-27', 0, 'ดำเนินการเสร็จสิ้น'),
(42, 'นก', '074357205', '2564-05-27', '2564-05-27', '12:00:00', 2700, 0, '0000-00-00', 2700, '2564-05-27', 0, 'ดำเนินการเสร็จสิ้น'),
(43, 'นก', '074357205', '2564-05-28', '2564-05-27', '12:00:00', 5000, 5000, '2564-05-28', 0, '0000-00-00', 0, 'ดำเนินการเสร็จสิ้น'),
(44, 'คฑาวุธ ถวัลย์วิลาสวงศ์', '0843087996,0885788121', '2564-05-26', '2564-05-27', '12:00:00', 1900, 900, '2564-05-26', 1000, '2564-06-11', 0, 'ดำเนินการเสร็จสิ้น'),
(45, 'วรวัฒน์ ทานิล', '0896545279', '2564-05-26', '2564-05-27', '12:00:00', 4500, 0, '0000-00-00', 0, '0000-00-00', 4500, 'กำลังดำเนินการ'),
(46, 'พีรพล แซ่ไล่', '0869634594', '2564-05-26', '2564-05-27', '12:00:00', 1300, 0, '0000-00-00', 1300, '2564-05-27', 0, 'ดำเนินการเสร็จสิ้น'),
(47, 'คฑาวุธ ถวัลย์วิลาสวงศ์', '0843087996,0885788121', '2564-05-26', '2564-05-27', '12:00:00', 2500, 2500, '2564-05-26', 0, '0000-00-00', 0, 'กำลังดำเนินการ'),
(48, 'พีรพล แซ่ไล่', '0869634594', '2564-05-29', '2564-05-30', '12:00:00', 1500, 1500, '2564-05-29', 0, '2564-05-30', 0, 'ดำเนินการเสร็จสิ้น'),
(49, 'สุปราณี แสงเขียว', '0805391115', '2564-05-26', '2564-05-28', '16:00:00', 5800, 800, '2564-05-26', 0, '0000-00-00', 5000, 'กำลังดำเนินการ'),
(50, 'บอย', '', '2564-05-27', '2564-05-30', '13:05:00', 900, 900, '2564-05-27', 0, '0000-00-00', 0, 'กำลังดำเนินการ'),
(51, 'ธีรเดช เพชรแก้ว', '0813352689', '2564-05-29', '2564-05-31', '12:00:00', 4900, 900, '2564-05-29', 0, '0000-00-00', 4000, 'กำลังดำเนินการ');

-- --------------------------------------------------------

--
-- Table structure for table `sale_detail`
--

CREATE TABLE `sale_detail` (
  `id_sale_detail` int(20) NOT NULL,
  `id_sale` varchar(10) NOT NULL,
  `id_pro` varchar(50) NOT NULL,
  `id_len` varchar(50) NOT NULL,
  `sum_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sale_detail`
--

INSERT INTO `sale_detail` (`id_sale_detail`, `id_sale`, `id_pro`, `id_len`, `sum_price`) VALUES
(75, '41', 'P เล็ก', '--ไม่ตัดเลนส์--', 500),
(76, '41', 'P ใหญ่', 'Auto', 1500),
(77, '41', 'P ใหญ่', 'Auto', 1500),
(78, '42', 'P เล็ก', '--ไม่ตัดเลนส์--', 500),
(79, '42', 'P ใหญ่', 'Auto', 1500),
(80, '42', 'P ใหญ่', 'Auto', 1500),
(81, '43', 'P เล็ก', '--ไม่ตัดเลนส์--', 500),
(82, '43', 'P ใหญ่', 'Auto', 1500),
(83, '43', 'P ใหญ่', 'Auto', 1500),
(84, '44', 'P เล็ก', 'EMI', 700),
(85, '44', 'P ใหญ่', 'FT', 1200),
(86, '45', 'Okey', 'EMI', 4500),
(87, '46', 'P ใหญ่', 'EMI', 1300),
(88, '47', 'Rayban', 'CR', 2000),
(89, '47', '--นำกรอบแว่นมาเอง--', 'KT', 500),
(90, '48', 'Rayban', '--ไม่ตัดเลนส์--', 1500),
(91, '49', 'Rayban', 'CR', 5500),
(92, '49', 'P เล็ก', '--ไม่ตัดเลนส์--', 300),
(93, '50', 'P ใหญ่', 'KT', 900),
(94, '51', 'Rayban', 'Auto', 4200),
(95, '51', 'P เล็ก', 'CR', 700);

-- --------------------------------------------------------

--
-- Table structure for table `tudlen`
--

CREATE TABLE `tudlen` (
  `id_tud` int(20) NOT NULL,
  `num` int(5) NOT NULL,
  `id_cus` int(10) NOT NULL,
  `date_tud` date NOT NULL,
  `r` varchar(30) NOT NULL,
  `pdr` varchar(5) NOT NULL,
  `l` varchar(30) NOT NULL,
  `pdl` varchar(5) NOT NULL,
  `id_pro` varchar(50) NOT NULL,
  `price_pro` int(10) NOT NULL,
  `id_len` varchar(50) NOT NULL,
  `price_len` int(10) NOT NULL,
  `total_price` int(10) NOT NULL,
  `comment_tud` varchar(200) NOT NULL,
  `r_old` varchar(30) NOT NULL,
  `l_old` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tudlen`
--

INSERT INTO `tudlen` (`id_tud`, `num`, `id_cus`, `date_tud`, `r`, `pdr`, `l`, `pdl`, `id_pro`, `price_pro`, `id_len`, `price_len`, `total_price`, `comment_tud`, `r_old`, `l_old`) VALUES
(23, 1, 15, '2564-05-26', '-75', '32', '-100', '33', 'P ใหญ่', 3500, 'CR', 1200, 4000, 'ปกติ', '', ''),
(24, 1, 16, '2564-05-25', '-300', '30', '-300', '30', 'P ใหญ่', 350, 'EMI', 750, 950, 'พื้นลอย', '', ''),
(25, 1, 17, '2564-05-27', '-300-150x180', '33', '-300-150x90', '32', 'Okey', 3000, 'AUTO', 750, 3750, 'มึนๆ', '', ''),
(27, 1, 19, '2564-05-11', '-50', '32', '-50', '32', 'Rayban', 3000, 'CR', 0, 3000, '', '', ''),
(29, 2, 15, '2564-05-27', '-500', '35', '-650', '34', 'Rayban', 350, 'EMI', 750, 950, 'เบลอ', '', ''),
(31, 3, 15, '2564-05-21', '-100', '32', '-100', '32', 'P เล็ก', 700, 'EMI', 390, 700, '-', '', ''),
(32, 4, 15, '2564-06-01', '-300', '35', '-300', '35', 'P เล็ก', 700, 'KT', 1400, 2100, '-', '', ''),
(33, 2, 17, '2564-04-13', '-300', '30', '-300', '30', 'Okey', 700, 'FT', 750, 1500, '-', '', ''),
(34, 2, 20, '2564-05-27', '-700', '30', '-750', '34', 'Okey', 700, 'AUTO', 750, 1200, '-', '', ''),
(35, 1, 21, '2564-06-11', '+100', '31', '+200', '32', 'Okey', 3000, 'CR', 390, 3390, '-', '', ''),
(36, 2, 21, '2564-06-12', '+300', '31', '+200', '31', 'Rayban', 3500, 'Progressive', 1400, 4900, 'เบลอ', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cus`);

--
-- Indexes for table `len`
--
ALTER TABLE `len`
  ADD PRIMARY KEY (`id_len`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_pro`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id_sale`);

--
-- Indexes for table `sale_detail`
--
ALTER TABLE `sale_detail`
  ADD PRIMARY KEY (`id_sale_detail`);

--
-- Indexes for table `tudlen`
--
ALTER TABLE `tudlen`
  ADD PRIMARY KEY (`id_tud`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_cus` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `len`
--
ALTER TABLE `len`
  MODIFY `id_len` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_pro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `id_sale` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `sale_detail`
--
ALTER TABLE `sale_detail`
  MODIFY `id_sale_detail` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `tudlen`
--
ALTER TABLE `tudlen`
  MODIFY `id_tud` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
