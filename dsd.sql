-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 01:35 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dsd`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `NoEngine` int(11) NOT NULL,
  `NoDoors` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`NoEngine`, `NoDoors`) VALUES
(444, 4),
(555, 4),
(666, 4),
(777, 4);

-- --------------------------------------------------------

--
-- Table structure for table `cruiser`
--

CREATE TABLE `cruiser` (
  `NoEngine` int(11) NOT NULL,
  `AtCruiser` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cruiser`
--

INSERT INTO `cruiser` (`NoEngine`, `AtCruiser`) VALUES
(222, 'atributo crus');

-- --------------------------------------------------------

--
-- Table structure for table `make`
--

CREATE TABLE `make` (
  `idmake` int(11) NOT NULL,
  `Make` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `make`
--

INSERT INTO `make` (`idmake`, `Make`) VALUES
(1, 'Nissan'),
(2, 'Honda'),
(3, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `idModel` int(11) NOT NULL,
  `Model` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`idModel`, `Model`) VALUES
(1, 'Civic'),
(2, 'Frontier');

-- --------------------------------------------------------

--
-- Table structure for table `motorcycle`
--

CREATE TABLE `motorcycle` (
  `NoEngine` int(11) NOT NULL,
  `chain` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motorcycle`
--

INSERT INTO `motorcycle` (`NoEngine`, `chain`) VALUES
(222, 'tipo cDEN'),
(3333, 'cade s');

-- --------------------------------------------------------

--
-- Table structure for table `scooter`
--

CREATE TABLE `scooter` (
  `NoEngine` int(11) NOT NULL,
  `AtScooter` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scooter`
--

INSERT INTO `scooter` (`NoEngine`, `AtScooter`) VALUES
(3333, 'TRIB SCOOTER');

-- --------------------------------------------------------

--
-- Table structure for table `sedan`
--

CREATE TABLE `sedan` (
  `NoEngine` int(11) NOT NULL,
  `TrunkCap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sedan`
--

INSERT INTO `sedan` (`NoEngine`, `TrunkCap`) VALUES
(666, 23);

-- --------------------------------------------------------

--
-- Table structure for table `tipe`
--

CREATE TABLE `tipe` (
  `idTipe` tinyint(4) NOT NULL,
  `Tipe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipe`
--

INSERT INTO `tipe` (`idTipe`, `Tipe`) VALUES
(1, 'Cars'),
(2, 'MotorCycle');

-- --------------------------------------------------------

--
-- Table structure for table `van`
--

CREATE TABLE `van` (
  `NoEngine` int(11) NOT NULL,
  `LoadCap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `van`
--

INSERT INTO `van` (`NoEngine`, `LoadCap`) VALUES
(555, 34),
(777, 45);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `NoEngine` int(11) NOT NULL COMMENT 'The Engine number i think is unique',
  `NoWheels` tinyint(4) NOT NULL,
  `Price` float NOT NULL,
  `idTipo` tinyint(4) NOT NULL,
  `idModel` int(11) NOT NULL,
  `idMake` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`NoEngine`, `NoWheels`, `Price`, `idTipo`, `idModel`, `idMake`) VALUES
(111, 4, 15256.2, 1, 1, 1),
(222, 2, 123, 2, 2, 2),
(444, 5, 1111, 1, 1, 1),
(555, 4, 4, 1, 1, 1),
(666, 4, 234, 1, 1, 1),
(777, 4, 12345.7, 1, 2, 2),
(3333, 2, 234, 2, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`NoEngine`),
  ADD KEY `NoEngine` (`NoEngine`);

--
-- Indexes for table `cruiser`
--
ALTER TABLE `cruiser`
  ADD PRIMARY KEY (`NoEngine`),
  ADD KEY `NoEngine` (`NoEngine`);

--
-- Indexes for table `make`
--
ALTER TABLE `make`
  ADD PRIMARY KEY (`idmake`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`idModel`);

--
-- Indexes for table `motorcycle`
--
ALTER TABLE `motorcycle`
  ADD PRIMARY KEY (`NoEngine`),
  ADD KEY `NoEngine` (`NoEngine`);

--
-- Indexes for table `scooter`
--
ALTER TABLE `scooter`
  ADD PRIMARY KEY (`NoEngine`),
  ADD KEY `NoEngine` (`NoEngine`);

--
-- Indexes for table `sedan`
--
ALTER TABLE `sedan`
  ADD PRIMARY KEY (`NoEngine`),
  ADD UNIQUE KEY `NoEngine` (`NoEngine`);

--
-- Indexes for table `tipe`
--
ALTER TABLE `tipe`
  ADD PRIMARY KEY (`idTipe`);

--
-- Indexes for table `van`
--
ALTER TABLE `van`
  ADD PRIMARY KEY (`NoEngine`),
  ADD UNIQUE KEY `NoEngine` (`NoEngine`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`NoEngine`),
  ADD KEY `fk_idModel` (`idModel`),
  ADD KEY `fk_idMake` (`idMake`) USING BTREE,
  ADD KEY `idTipo` (`idTipo`),
  ADD KEY `fk_tipe` (`idTipo`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `make`
--
ALTER TABLE `make`
  MODIFY `idmake` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `idModel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`NoEngine`) REFERENCES `vehicles` (`NoEngine`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cruiser`
--
ALTER TABLE `cruiser`
  ADD CONSTRAINT `cruiser_ibfk_1` FOREIGN KEY (`NoEngine`) REFERENCES `motorcycle` (`NoEngine`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `motorcycle`
--
ALTER TABLE `motorcycle`
  ADD CONSTRAINT `motorcycle_ibfk_1` FOREIGN KEY (`NoEngine`) REFERENCES `vehicles` (`NoEngine`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `scooter`
--
ALTER TABLE `scooter`
  ADD CONSTRAINT `scooter_ibfk_1` FOREIGN KEY (`NoEngine`) REFERENCES `motorcycle` (`NoEngine`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sedan`
--
ALTER TABLE `sedan`
  ADD CONSTRAINT `sedan_ibfk_1` FOREIGN KEY (`NoEngine`) REFERENCES `cars` (`NoEngine`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `van`
--
ALTER TABLE `van`
  ADD CONSTRAINT `van_ibfk_1` FOREIGN KEY (`NoEngine`) REFERENCES `cars` (`NoEngine`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_ibfk_1` FOREIGN KEY (`idTipo`) REFERENCES `tipe` (`idTipe`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
