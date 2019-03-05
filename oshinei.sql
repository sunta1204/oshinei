-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2018 at 12:21 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oshinei`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dep_id` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `dep_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dep_amountemp` int(3) NOT NULL,
  `dep_tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `dep_name`, `dep_amountemp`, `dep_tel`) VALUES
('001', 'การเงิน', 4, '0822689290'),
('002', 'แคชเชียร์', 3, '0982700972'),
('003', 'reception', 4, '0973207920'),
('004', 'กัปตันออเดอร์', 3, '0893803839'),
('005', 'runner', 3, '0968979740');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `emp_fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `emp_year` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `emp_sex` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `emp_cardid` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `emp_rank` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `emp_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `emp_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `emp_permission` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_fullname`, `emp_year`, `emp_sex`, `emp_cardid`, `emp_rank`, `emp_email`, `emp_address`, `emp_permission`) VALUES
('324211', 'สมชาย ใจดี', '25', 'ชาย', '1420224948242', 'เชฟ', 'somchai@gmail.com', '233 ม.7 ต.วังสามหมอ อ.วังสามหมอ จ.อุดรธานี 41680', '0'),
('324212', 'ธีรเดช ผูกพันธ์', '24', 'ชาย', '1413112345288', 'บุคคล', 'teeradeth@gmail.com', '9 ม.7 ต.ในเมือง อ.เมือง จ.ขอนแก่น 40000', '0'),
('324213', 'นันทวัน ไปดี', '20', 'หญิง', '1461559830329', 'บุคคล', 'nuntawan@gmail.com', '14 ม.6 ต.บ้านเป็ด อ.เมือง จ.ขอนแก่น 40000', '0'),
('324214', 'พฤกษา นาดี', '19', 'หญิง', '1451298340677', 'บริการ', 'prueksa@gmail.com', '243 ม.8 ต.ในเมือง อ.เมือง จ. ขอนแก่น 40000', '0'),
('324215', 'วินิต รอมแรม', '23', 'ชาย', '1432686963009', 'บริการ', 'Vinit_nit@gmail.com', '394 ม.บ้านเป็ด อ.เมือง จ.ขอนแก่น 40000', '0'),
('admin', 'admin admin', '30', '', '', '', 'admin@admin.com', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `emp_id` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `exp_insu` int(20) NOT NULL,
  `exp_late` int(20) NOT NULL,
  `exp_absence` int(20) NOT NULL,
  `exp_shirts` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`emp_id`, `exp_insu`, `exp_late`, `exp_absence`, `exp_shirts`) VALUES
('324211', 700, 20, 300, '350'),
('324212', 700, 20, 300, '350'),
('324213', 700, 20, 300, '350'),
('324214', 700, 20, 300, '350'),
('324215', 700, 20, 300, '350');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `emp_id` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `emp_rank` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `salary_time` int(30) NOT NULL,
  `salary_receive` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`emp_id`, `emp_rank`, `salary_time`, `salary_receive`) VALUES
('324211', 'เซฟ', 390, 13800),
('324212', 'บุคคล', 338, 12500),
('324213', 'บุคคล', 351, 13000),
('324214', 'บริการ', 360, 12600),
('324215', 'บริการ', 360, 12600),
('admin', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `emp_id` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `work_in` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `work_out` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `work_vacation` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `work_period` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`emp_id`, `work_in`, `work_out`, `work_vacation`, `work_period`) VALUES
('324211', '10:00 น.', '18:00 น.', 'จันทร์', 8),
('324212', '10:00 น.', '18:00 น.', 'จันทร์', 8),
('324213', '10:00 น.', '18:00 น.', 'จันทร์', 8),
('324214', '10:00 น.', '18:00 น.', 'จันทร์', 8),
('324215', '10:00 น.', '18:00 น.', 'จันทร์', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`emp_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
