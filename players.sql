-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 نوفمبر 2023 الساعة 19:32
-- إصدار الخادم: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `players`
--

-- --------------------------------------------------------

--
-- بنية الجدول `players1`
--

CREATE TABLE `players1` (
  `pno` int(11) NOT NULL,
  `players` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `players1`
--

INSERT INTO `players1` (`pno`, `players`) VALUES
(1, 'cr7'),
(2, 'messi');

-- --------------------------------------------------------

--
-- بنية الجدول `players2`
--

CREATE TABLE `players2` (
  `no` int(15) NOT NULL,
  `league` varchar(5) NOT NULL,
  `club` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `pno` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `players2`
--

INSERT INTO `players2` (`no`, `league`, `club`, `image`, `pno`) VALUES
(1, 'spl', 'aln', 'image/1699292251.png', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`name`, `uname`, `pass`, `email`, `level`) VALUES
('os1', 'os1', '1', 'osamahhh01@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `players1`
--
ALTER TABLE `players1`
  ADD PRIMARY KEY (`pno`);

--
-- Indexes for table `players2`
--
ALTER TABLE `players2`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `players1`
--
ALTER TABLE `players1`
  MODIFY `pno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `players2`
--
ALTER TABLE `players2`
  MODIFY `no` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
