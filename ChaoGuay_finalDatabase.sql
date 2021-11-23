-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2021 at 04:37 AM
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

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `admin2` ()  BEGIN
    CREATE TABLE admin2(AdminName varchar(200) COLLATE utf8mb4_general_ci NOT NULL, IdAdmin int NOT NULL);
    INSERT INTO admin2(AdminName,Idadmin)
    SELECT admin.adminfirstname AS AdminName ,admin.idadmin AS Idadmin FROM admin;
END$$

DELIMITER ;

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
(3, 'pram', 'pram', 'petch', 'sang'),
(4, 'root', '1234', '1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `beverage`
--

CREATE TABLE `beverage` (
  `idfood` int(20) NOT NULL,
  `foodname` varchar(100) NOT NULL,
  `prices` int(50) NOT NULL,
  `snackstatus` tinyint(4) NOT NULL,
  `beveragetypes` varchar(100) NOT NULL,
  `idadmin` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beverage`
--

INSERT INTO `beverage` (`idfood`, `foodname`, `prices`, `snackstatus`, `beveragetypes`, `idadmin`) VALUES
(2, 'coke', 25, 1, 'Drink', 1);

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
  `time` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `theatre_no` int(11) NOT NULL,
  `theatretype` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `idadmin` int(11) NOT NULL,
  `idpromotion` int(11) NOT NULL,
  `idseat` int(11) NOT NULL,
  `idtheatre` int(11) NOT NULL,
  `idmovie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingticket`
--

INSERT INTO `bookingticket` (`idticket`, `movie_name`, `row`, `seat_no`, `date`, `time`, `theatre_no`, `theatretype`, `idadmin`, `idpromotion`, `idseat`, `idtheatre`, `idmovie`) VALUES
(2, 'Black Widow', 'B', 1, '2021-11-23', '10.30', 3, '3D', 4, 3, 1, 3, 11);

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
(11, 'Black Widow', 'action', 120, '2021-11-21 13:54:43', 1, 3, '3D', 1, 'uploads/blackwidow.jpg');

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

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`idpromotion`, `promotionname`, `detail`, `linkimage`, `idadmin`) VALUES
(1, 'pop', 'popopop', 'popopopopop', 1),
(2, 'Codomoboys', '', 'uploads/', 1),
(3, 'Wednesday', ': 100THB', '', 1),
(4, 'Friday', NULL, '', 1),
(5, 'True Card', NULL, '', 1),
(6, 'AIS/SERENADE', NULL, '', 1);

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

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`idseat`, `row`, `seat_no`, `seat_type`, `seat_price`, `idtheatre`) VALUES
(1, 'A', 1, 'Normal', 200, 1),
(2, 'A', 2, 'Normal', 200, 1),
(3, 'A', 3, 'Normal', 200, 1),
(4, 'A', 4, 'Normal', 200, 1),
(5, 'A', 5, 'Normal', 200, 1),
(6, 'B', 6, 'Normal', 200, 1),
(7, 'B', 7, 'Normal', 200, 1),
(8, 'B', 8, 'Normal', 200, 1),
(9, 'B', 9, 'Normal', 200, 1),
(10, 'B', 10, 'Normal', 200, 1),
(11, 'C', 11, 'Normal', 200, 1),
(12, 'C', 12, 'Normal', 200, 1),
(13, 'C', 13, 'Normal', 200, 1),
(14, 'C', 14, 'Normal', 200, 1),
(15, 'C', 15, 'Normal', 200, 1),
(16, 'D', 16, 'Premium', 300, 1),
(17, 'D', 17, 'Premium', 300, 1),
(18, 'D', 18, 'Premium', 300, 1),
(19, 'D', 19, 'Premium', 300, 1),
(20, 'D', 20, 'Premium', 300, 1),
(21, 'E', 21, 'Premium', 300, 1),
(22, 'E', 22, 'Premium', 300, 1),
(23, 'E', 23, 'Premium', 300, 1),
(24, 'E', 24, 'Premium', 300, 1),
(25, 'E', 25, 'Premium', 300, 1),
(26, 'F', 26, 'Honeymoon', 500, 1),
(27, 'F', 27, 'Honeymoon', 500, 1),
(28, 'F', 28, 'Honeymoon', 500, 1),
(29, 'F', 29, 'Honeymoon', 500, 1),
(30, 'F', 30, 'Honeymoon', 500, 1);

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE `theatre` (
  `idtheatre` int(11) NOT NULL,
  `theatre_no` int(11) NOT NULL,
  `theatre_type` varchar(45) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theatre`
--

INSERT INTO `theatre` (`idtheatre`, `theatre_no`, `theatre_type`) VALUES
(1, 1, '2D'),
(2, 2, '2D'),
(3, 3, '3D'),
(4, 4, '4DX');

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
  ADD KEY `fk1_idadmin` (`idadmin`);

--
-- Indexes for table `bookingticket`
--
ALTER TABLE `bookingticket`
  ADD PRIMARY KEY (`idticket`),
  ADD KEY `idadmin` (`idadmin`),
  ADD KEY `idpromotion` (`idpromotion`),
  ADD KEY `idseat` (`idseat`),
  ADD KEY `idtheatre` (`idtheatre`),
  ADD KEY `idmovie` (`idmovie`);

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
  ADD PRIMARY KEY (`idtheatre`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `beverage`
--
ALTER TABLE `beverage`
  MODIFY `idfood` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bookingticket`
--
ALTER TABLE `bookingticket`
  MODIFY `idticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `idmovie` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `idpromotion` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `idseat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `theatre`
--
ALTER TABLE `theatre`
  MODIFY `idtheatre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beverage`
--
ALTER TABLE `beverage`
  ADD CONSTRAINT `fk1_idadmin` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`idadmin`);

--
-- Constraints for table `bookingticket`
--
ALTER TABLE `bookingticket`
  ADD CONSTRAINT `fk_idadmin_bt` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`idadmin`),
  ADD CONSTRAINT `fk_idmovie6` FOREIGN KEY (`idmovie`) REFERENCES `movie` (`idmovie`),
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
  ADD CONSTRAINT `fk1_idtheatre` FOREIGN KEY (`idtheatre`) REFERENCES `theatre` (`idtheatre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
