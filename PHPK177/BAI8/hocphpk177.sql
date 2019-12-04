-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2019 at 03:11 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hocphpk177`
--

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `id_ds` int(11) UNSIGNED NOT NULL,
  `name_ds` varchar(100) NOT NULL,
  `address_ds` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL
) ;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`id_ds`, `name_ds`, `address_ds`, `phone`) VALUES
(2, 'Nguyễn Văn Hoàng', 'Hà Nội', 99888888),
(3, 'Phan Quỳnh Hằng', 'Tuyên Quang', 972166777),
(4, 'Nguyễn Văn Anh', 'Tuyên Quang', 89996777),
(5, 'Nguyễn Văn Trỗi', 'Nam Định', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`id_ds`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `id_ds` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
