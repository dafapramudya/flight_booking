-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2018 at 03:03 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_airplane`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `reservation_code` varchar(255) NOT NULL,
  `reservation_at` varchar(255) NOT NULL,
  `reservation_date` date NOT NULL,
  `customerid` int(11) NOT NULL,
  `seat_code` varchar(255) NOT NULL,
  `ruteid` int(11) NOT NULL,
  `depart_at` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `reservation_code`, `reservation_at`, `reservation_date`, `customerid`, `seat_code`, `ruteid`, `depart_at`, `price`, `userid`) VALUES
(0, '0qwerty', 'Semarang', '2018-01-30', 0, 'oaooaaooo', 0, 'oaooadfad', 500000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transportation`
--

CREATE TABLE `transportation` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `seat_qty` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `transportation_typeid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transportation`
--

INSERT INTO `transportation` (`id`, `code`, `description`, `seat_qty`, `logo`, `transportation_typeid`) VALUES
(1, 'qty001', 'Pesawat Suchoi made in China', 200, 'gi.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transportation_type`
--

CREATE TABLE `transportation_type` (
  `id` int(11) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_airport`
--

CREATE TABLE `t_airport` (
  `id` int(11) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `bandara` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_airport`
--

INSERT INTO `t_airport` (`id`, `kode`, `bandara`, `kota`) VALUES
(1, 'SRG', 'Achmad Yani', 'Semarang'),
(2, 'DPS', 'Ngurah Rai', 'Bali/Denpasar'),
(3, 'ACH', 'Hula Kamba', 'Aceh'),
(4, 'SBY', 'Jaran Goyang', 'Surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `t_customer`
--

CREATE TABLE `t_customer` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(12) NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_customer`
--

INSERT INTO `t_customer` (`id`, `name`, `address`, `phone`, `gender`) VALUES
(1, 'Jojo', 'Bizare', 2147483647, 'Laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `t_rute`
--

CREATE TABLE `t_rute` (
  `id` int(11) NOT NULL,
  `depart_at` time NOT NULL,
  `arrive` time NOT NULL,
  `tanggal_terbang` date NOT NULL,
  `rute_from` int(11) NOT NULL,
  `rute_to` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `transportationid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_rute`
--

INSERT INTO `t_rute` (`id`, `depart_at`, `arrive`, `tanggal_terbang`, `rute_from`, `rute_to`, `price`, `transportationid`) VALUES
(1, '15:00:00', '16:20:00', '2018-02-13', 1, 2, 500000, 1),
(2, '04:00:00', '05:30:00', '2018-02-23', 2, 1, 900000, 1),
(3, '07:00:00', '09:00:00', '2018-02-13', 1, 2, 900000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `level` enum('admin','operator','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id`, `username`, `email`, `password`, `fullname`, `level`) VALUES
(1, 'dapramkun', 'dafapramudya7@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Dafa Pramudya', 'admin'),
(19, 'coba', 'coba@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'CobaSan', 'user'),
(20, 'af', 'algi@BLA.com', '9cdfb439c7876e703e307864c9167a15', 'Algi', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transportation_type`
--
ALTER TABLE `transportation_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_airport`
--
ALTER TABLE `t_airport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_customer`
--
ALTER TABLE `t_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_rute`
--
ALTER TABLE `t_rute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transportation`
--
ALTER TABLE `transportation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transportation_type`
--
ALTER TABLE `transportation_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_airport`
--
ALTER TABLE `t_airport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_customer`
--
ALTER TABLE `t_customer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_rute`
--
ALTER TABLE `t_rute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
