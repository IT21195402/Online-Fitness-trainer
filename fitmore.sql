-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 08:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitmore`
--

-- --------------------------------------------------------

--
-- Table structure for table `build`
--

CREATE TABLE `build` (
  `Weight` int(3) NOT NULL,
  `Height` int(11) NOT NULL,
  `Age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `build`
--

INSERT INTO `build` (`Weight`, `Height`, `Age`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `burn`
--

CREATE TABLE `burn` (
  `Weight` int(3) NOT NULL,
  `Height` int(3) NOT NULL,
  `Age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `burn`
--

INSERT INTO `burn` (`Weight`, `Height`, `Age`) VALUES
(1, 1, 1),
(1, 1, 1),
(1, 1, 1),
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `massage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`f_name`, `l_name`, `email`, `phone`, `massage`) VALUES
('', 'dsjadas', 'asdas123', 137123, 'daljsdhalshda'),
('', 'dsjadas', 'asdas123', 137123, 'daljsdhalshda'),
('', 'dsjadas', 'asdas123', 137123, 'daljsdhalshda'),
('', 'aththanayake', 'it21200588@my.sliit.lk', 773299695, 'I want enquiry '),
('', 'aththanayake', 'it21200588@my.sliit.lk', 773299695, 'I want enquiry '),
('', 'aththanayake', 'it21200588@my.sliit.lk', 773299695, 'I want enquiry '),
('bhashithaa', 'aththnayake', 'badhdjwd', 515485, 'nbhhjdwd'),
('bhashitha', 'aththanayake', 'it21200588@my.sliit.lk', 773299695, 'I want enquiry '),
('bhashitha', 'aththanayake', 'it21200588@my.sliit.lk', 773299695, 'I want enquiry '),
('bhashitha', 'aththanayake', 'it21200588@my.sliit.lk', 773299695, 'I want enquiry '),
('bhashitha', 'aththanayake', 'it21200588@my.sliit.lk', 773299695, 'I want enquiry '),
(' c', 'd', 'd', 4, 'df'),
('ddd', 'n n', 'nbn', 52, 'nbshd');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Hip Machine', '3DcAM01', 'product-images/a.jpg', 1500.00),
(2, 'Ab Machine', 'USB02', 'product-images/AbMachine.jpg', 800.00),
(3, 'Ab roller', 'wristWear03', 'product-images/ab-roller-wheel.jpg', 300.00),
(4, 'Barbellpair', 'LPN45', 'product-images/barbellpair.jpg', 800.00),
(5, 'Rowing', 'rw1', 'product-images/camera.jpg', 2000.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `Id` int(10) NOT NULL,
  `FName` varchar(20) NOT NULL,
  `LName` varchar(20) NOT NULL,
  `Pwd` varchar(20) NOT NULL,
  `Confirmpwd` varchar(20) NOT NULL,
  `Age` int(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `ContactNumber` int(10) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `RegisterAs` varchar(10) NOT NULL,
  `Reg_DT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`Id`, `FName`, `LName`, `Pwd`, `Confirmpwd`, `Age`, `Email`, `ContactNumber`, `Address`, `Gender`, `RegisterAs`, `Reg_DT`) VALUES
(17, 'Janith', 'Viduranga', '123ABCd$', '12345Abc', 12, 'jviduranga1@gmail.com', 23432423, 'Colombo', 'on', '0', '2022-05-22 16:35:57'),
(18, 'Janith', 'Viduranga', '123ABCd$', '123ABcd$', 12, 'it21195402@my.sliit.lk', 23432423, 'dfgdfgdfgdfgfdg', 'on', '0', '2022-05-22 20:47:51'),
(19, 'Janith', 'Viduranga', '123ABCd$', '123ABCd$', 12, 'it21195402@my.sliit.lk', 23432423, 'Colombo', 'on', '0', '2022-05-22 21:38:58'),
(20, 'Janith', 'Viduranga', '123ABCd$', '123ABCd$', 12, 'jviduranga1@gmail.com', 772062050, 'Colombo', 'on', '0', '2022-05-22 22:14:40'),
(21, 'Janithdas', 'Vidurangaasd', 'Kmnsb12@', 'Kmnsb12@', 23, 'it21195402@my.sliit.lk', 23432423, 'dfgdfgdfgdfgfdg', 'on', 'on', '2022-05-22 22:20:47'),
(22, 'Janith', 'Viduranga', 'Kmnsb12@', 'Kmnsb12@', 12, 'jviduranga1@gmail.com', 23432423, 'dfgdfgdfgdfgfdg', 'on', 'on', '2022-05-22 22:30:57'),
(23, 'Janith', 'Viduranga', 'Kmnsb12@', 'Kmnsb12@', 12, 'jviduranga1@gmail.com', 23432423, 'dfgdfgdfgdfgfdg', 'on', 'on', '2022-05-22 22:43:22'),
(24, 'Janith', 'Viduranga', 'Kmnsb12@', 'Kmnsb12@', 12, 'jviduranga1@gmail.com', 23432423, 'dfgdfgdfgdfgfdg', 'on', 'on', '2022-05-22 22:47:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
