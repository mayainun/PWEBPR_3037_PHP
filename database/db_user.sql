-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2024 at 05:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `ID` int(11) NOT NULL,
  `profil` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `no_telepon` varchar(200) NOT NULL,
  `status_member` enum('AKTIF','NON-AKTIF','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`ID`, `profil`, `nama`, `no_telepon`, `status_member`) VALUES
(1, 'member2.jpg', 'Yesi Kho', '089786754', 'AKTIF'),
(2, 'member.jpg', 'Ainun Maya', '0897467892', 'AKTIF'),
(3, 'member3.jpg', 'Dewi Anjani', '906869756', 'AKTIF'),
(4, 'member4.jpeg', 'Diajeng Ulfi', '4567899897', 'AKTIF'),
(5, 'member5.jpg', 'Rani Aliya', '978497649', 'AKTIF'),
(6, 'member6.webp', 'Diana Astianti', '038655277', 'AKTIF'),
(7, 'member7.jpg', 'Gania Rani', '0789755683', 'AKTIF'),
(8, 'member8.png', 'Cintania Ramadhani', '089678259', 'AKTIF'),
(9, '1.jpg', 'Farah Malik', '123254517', 'AKTIF'),
(10, '2.jpg', 'Daniel Nguyen', '98972635267', 'AKTIF'),
(11, '3.jpg', 'Sofia García', '76325392', 'AKTIF'),
(12, '4.jpg', 'Liam Patel', '7962386382', 'AKTIF'),
(13, '5.jpg', 'Emily Kim', '98912632739', 'AKTIF'),
(14, '6.jpg', 'Lucas Santos', '436322832', 'AKTIF'),
(15, '7.jpg', 'Isabella Khan', '982916738', 'AKTIF'),
(16, '9.jpg', 'Noah Chen', '9302930293', 'AKTIF'),
(17, '8.jpg', 'Olivia Martinez', '932783622', 'AKTIF'),
(18, '10.jpg', 'Certhan Al', '234267383', 'AKTIF');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `ID` int(200) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `no_telepon` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`ID`, `nama_lengkap`, `no_telepon`, `username`, `password`) VALUES
(2, 'ainun maya rohmani', '089521800375', 'mayaaa', '123456'),
(3, 'Dewi Anjani', '089521800375', 'dewi', '111'),
(4, 'jhikrana', '089521800375', 'ila', '111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
