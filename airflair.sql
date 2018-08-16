-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2017 at 11:58 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airflair`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(8) NOT NULL,
  `FirstName` varchar(99) NOT NULL,
  `LastName` varchar(99) NOT NULL,
  `Gender` char(1) NOT NULL,
  `PhoneNumber` bigint(12) NOT NULL,
  `Email` varchar(99) NOT NULL,
  `Password` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `FirstName`, `LastName`, `Gender`, `PhoneNumber`, `Email`, `Password`) VALUES
(4, 'Don', 'Dada', 'm', 18765512181, 'dondada@gmail.com', '0a3fb87d14cfa328dc8795b6c7a7a05f'),
(5, 'Delmark', 'Thompson', 'm', 18763870037, 'delmark@stu.ncu.edu.jm', '9f58a89dd294e774306950f7652ed6ee'),
(6, 'Damion', 'Mitchell', 'm', 18761234567, 'damion@ncu.edu.jm', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerID` int(8) NOT NULL,
  `FirstName` varchar(99) NOT NULL,
  `LastName` varchar(99) NOT NULL,
  `Gender` char(64) NOT NULL,
  `PhoneNumber` bigint(12) NOT NULL,
  `Email` varchar(99) NOT NULL,
  `Parish` varchar(99) DEFAULT NULL,
  `Address` varchar(99) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `FirstName`, `LastName`, `Gender`, `PhoneNumber`, `Email`, `Parish`, `Address`, `Password`) VALUES
(13, 'Leslie-Ann', 'James', 'f', 2147483647, 'leslie-annJames@gmail.com', 'Hanover', '63 Hanover Close ', '21bb5bb51758eab175d4d640334abb'),
(16, 'Delmark', 'Thompson', 'm', 18763870037, 'delmark@stu.ncu.edu.jm', 'Manchester', '!24 Sesame Street', '9f58a89dd294e774306950f7652ed6'),
(19, 'James', 'Bond', 'm', 12345678901, 'doubleo7@mail.com', 'Kingston', 'Key Beach Drive', 'ecda8ff7933831de47cded3bb238b6'),
(20, 'Eron', 'Thompson', 'm', 18765512181, 'eron@live.com', 'Kingston', 'Barbican Road, Kingston 6', '5f4dcc3b5aa765d61d8327deb882cf'),
(21, 'Don', 'Dada', 'm', 18765512181, 'eat.9@live.com', 'St. Thomas', '12 Seaview Gardens', '0a3fb87d14cfa328dc8795b6c7a7a05f'),
(22, 'work', 'thompson', 'male', 2331342, 'crosses@yahoo.com', 'Portland', '123fruint street', 'f427ddbb51312c8dab3b5b85d8d0d3dc');

-- --------------------------------------------------------

--
-- Table structure for table `orderstatus`
--

CREATE TABLE `orderstatus` (
  `OrderID` int(8) NOT NULL,
  `CustomerID` int(8) NOT NULL,
  `ProductID` decimal(8,0) NOT NULL,
  `Product_Quan` decimal(10,0) NOT NULL,
  `total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderstatus`
--

INSERT INTO `orderstatus` (`OrderID`, `CustomerID`, `ProductID`, `Product_Quan`, `total`) VALUES
(45, 21, '8', '2', '60'),
(46, 21, '8', '2', '60'),
(47, 21, '8', '50', '1500'),
(48, 21, '8', '5', '150'),
(49, 22, '6', '50', '900'),
(50, 22, '6', '50', '900');

-- --------------------------------------------------------

--
-- Table structure for table `sweater`
--

CREATE TABLE `sweater` (
  `SweaterID` int(8) NOT NULL,
  `Image` blob NOT NULL,
  `Type` char(7) NOT NULL,
  `Size` char(7) NOT NULL,
  `Quantity` int(255) NOT NULL,
  `Color` text NOT NULL,
  `Price` float(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sweater`
--

INSERT INTO `sweater` (`SweaterID`, `Image`, `Type`, `Size`, `Quantity`, `Color`, `Price`) VALUES
(3, 0x31353832363035345f313139383137313432363930343035395f343033303637343733373038373832363030355f6e2e6a7067, 'm', 'm', 100, 'Green', 25),
(4, 0x31363030323739395f313230353235363333323836323233355f323133353231363435363235373535333331355f6e2e6a7067, 'm', 'l', 100, 'Yellow', 30),
(5, 0x31353839343930375f313230313230333237363630303837345f343032373534303731333034313537343134325f6e2e6a7067, 'f', 'xs', 100, 'Green', 30),
(6, 0x31353839343930375f313230313230333237363630303837345f343032373534303731333034313537343134325f6e2e6a7067, 'f', 'small', 100, 'Green', 18);

-- --------------------------------------------------------

--
-- Table structure for table `tanks`
--

CREATE TABLE `tanks` (
  `TanksID` int(8) NOT NULL,
  `Image` blob NOT NULL,
  `Type` char(7) NOT NULL,
  `Size` char(7) NOT NULL,
  `Quantity` int(255) NOT NULL,
  `Color` text NOT NULL,
  `Price` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanks`
--

INSERT INTO `tanks` (`TanksID`, `Image`, `Type`, `Size`, `Quantity`, `Color`, `Price`) VALUES
(2, 0x31363236353431365f313232303633373339313332343132395f353539343530333538313139383130343335375f6e2e6a7067, 'female', 'xsmall', 5, 'Blue', '15');

-- --------------------------------------------------------

--
-- Table structure for table `tshirts`
--

CREATE TABLE `tshirts` (
  `TshirtsID` int(8) NOT NULL,
  `Image` blob NOT NULL,
  `Type` char(7) NOT NULL,
  `Size` char(7) NOT NULL,
  `Quantity` int(255) NOT NULL,
  `Color` text NOT NULL,
  `Price` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tshirts`
--

INSERT INTO `tshirts` (`TshirtsID`, `Image`, `Type`, `Size`, `Quantity`, `Color`, `Price`) VALUES
(2, 0x31363131343335395f313230393635373434393038383739305f373939383630373136383834373737373738335f6e2e6a7067, 'male', 'xsmall', 28, 'Blue', '25'),
(3, 0x31363131343335395f313230393635373434393038383739305f373939383630373136383834373737373738335f6e2e6a7067, 'male', 'small', 28, 'Blue', '25'),
(6, 0x31363131343738335f313230373133343531363030373735305f333535363030393939363339313431373133335f6e2e6a7067, 'female', 'xsmall', 25, 'Red', '25'),
(8, 0x31363131343738335f313230373133343531363030373735305f333535363030393939363339313431373133335f6e2e6a7067, 'female', 'large', -20, 'Red', '30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `orderstatus`
--
ALTER TABLE `orderstatus`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `sweater`
--
ALTER TABLE `sweater`
  ADD PRIMARY KEY (`SweaterID`);

--
-- Indexes for table `tanks`
--
ALTER TABLE `tanks`
  ADD PRIMARY KEY (`TanksID`);

--
-- Indexes for table `tshirts`
--
ALTER TABLE `tshirts`
  ADD PRIMARY KEY (`TshirtsID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `orderstatus`
--
ALTER TABLE `orderstatus`
  MODIFY `OrderID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `sweater`
--
ALTER TABLE `sweater`
  MODIFY `SweaterID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tanks`
--
ALTER TABLE `tanks`
  MODIFY `TanksID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tshirts`
--
ALTER TABLE `tshirts`
  MODIFY `TshirtsID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
