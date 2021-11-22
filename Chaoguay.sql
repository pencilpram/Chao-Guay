-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2021 at 08:54 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ChaoGuay`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(20) NOT NULL,
  `adminuser` varchar(45) NOT NULL,
  `adminpassword` varchar(100) NOT NULL,
  `adminfirstname` varchar(100) NOT NULL,
  `adminlastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `adminuser`, `adminpassword`, `adminfirstname`, `adminlastname`) VALUES
(1, 'pram', 'pram1234', 'Narathee', 'Bunpanya'),
(2, 'chao', 'pram0951817222', 'chao', 'guay');

-- --------------------------------------------------------

--
-- Table structure for table `beverage`
--

CREATE TABLE `beverage` (
  `idfood` int(20) NOT NULL,
  `foodname` varchar(100) NOT NULL,
  `prices` int(50) NOT NULL,
  `snackstatus` tinyint(4) NOT NULL,
  `idadmin` int(20) NOT NULL,
  `idpromotion` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bookingticket`
--

CREATE TABLE `bookingticket` (
  `idticket` int(11) NOT NULL,
  `movie_name` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `row` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `seat_no` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `theatre_no` int(11) NOT NULL,
  `idadmin` int(11) NOT NULL,
  `idpromotion` int(11) NOT NULL,
  `idseat` int(11) NOT NULL,
  `idtheatre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `idmovie` int(20) NOT NULL,
  `movie_name` varchar(250) NOT NULL,
  `genre` varchar(45) NOT NULL,
  `minutes` int(20) NOT NULL,
  `dateandtime` datetime NOT NULL,
  `status` tinyint(4) NOT NULL,
  `theatrenumber` int(10) NOT NULL,
  `theatretype` varchar(100) NOT NULL,
  `idadmin` int(20) NOT NULL,
  `linkimage` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`idmovie`, `movie_name`, `genre`, `minutes`, `dateandtime`, `status`, `theatrenumber`, `theatretype`, `idadmin`, `linkimage`) VALUES
(6, 'ola', 'ola', 40, '2021-11-19 15:37:27', 0, 3, '4DX', 1, 'uploads/messageImage_1607360555594.jpg'),
(9, 'Chao', 'Chao', 70, '2021-11-19 15:55:48', 1, 3, '4DX', 1, 'uploads/20200430_140625 2020-04-30 07_24_16.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `idpromotion` int(20) NOT NULL,
  `promotionname` varchar(100) NOT NULL,
  `detail` varchar(200) DEFAULT NULL,
  `linkimage` varchar(250) NOT NULL,
  `idadmin` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `idseat` int(11) NOT NULL,
  `row` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `seat_no` int(11) NOT NULL,
  `seat_type` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `seat_price` int(11) NOT NULL,
  `idtheatre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE `theatre` (
  `idtheatre` int(11) NOT NULL,
  `theatre_no` int(11) NOT NULL,
  `theatre_type` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `idseat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `beverage`
--
ALTER TABLE `beverage`
  ADD PRIMARY KEY (`idfood`),
  ADD KEY `fk1_idadmin` (`idadmin`),
  ADD KEY `fk2_idpromotion` (`idpromotion`);

--
-- Indexes for table `bookingticket`
--
ALTER TABLE `bookingticket`
  ADD PRIMARY KEY (`idticket`),
  ADD KEY `idadmin` (`idadmin`),
  ADD KEY `idpromotion` (`idpromotion`),
  ADD KEY `idseat` (`idseat`),
  ADD KEY `idtheatre` (`idtheatre`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`idmovie`),
  ADD KEY `idadmin` (`idadmin`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`idpromotion`),
  ADD KEY `fk_idamin4` (`idadmin`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`idseat`),
  ADD KEY `idtheatre` (`idtheatre`);

--
-- Indexes for table `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`idtheatre`),
  ADD KEY `idseat` (`idseat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `beverage`
--
ALTER TABLE `beverage`
  MODIFY `idfood` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookingticket`
--
ALTER TABLE `bookingticket`
  MODIFY `idticket` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `idmovie` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `idpromotion` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `idseat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `theatre`
--
ALTER TABLE `theatre`
  MODIFY `idtheatre` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beverage`
--
ALTER TABLE `beverage`
  ADD CONSTRAINT `fk1_idadmin` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`idadmin`),
  ADD CONSTRAINT `fk2_idpromotion` FOREIGN KEY (`idpromotion`) REFERENCES `promotion` (`idpromotion`);

--
-- Constraints for table `bookingticket`
--
ALTER TABLE `bookingticket`
  ADD CONSTRAINT `fk_idadmin_bt` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`idadmin`),
  ADD CONSTRAINT `fk_idpromotion4` FOREIGN KEY (`idpromotion`) REFERENCES `promotion` (`idpromotion`),
  ADD CONSTRAINT `fk_idseat4` FOREIGN KEY (`idseat`) REFERENCES `seat` (`idseat`),
  ADD CONSTRAINT `fk_idtheatre3` FOREIGN KEY (`idtheatre`) REFERENCES `theatre` (`idtheatre`);

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `fk_idadmin` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`idadmin`);

--
-- Constraints for table `promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `fk_idamin4` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`idadmin`);

--
-- Constraints for table `seat`
--
ALTER TABLE `seat`
  ADD CONSTRAINT `fk_idtheatre` FOREIGN KEY (`idtheatre`) REFERENCES `theatre` (`idtheatre`);

--
-- Constraints for table `theatre`
--
ALTER TABLE `theatre`
  ADD CONSTRAINT `fk_idseat` FOREIGN KEY (`idseat`) REFERENCES `seat` (`idseat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
