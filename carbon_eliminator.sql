-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 10:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carbon_eliminator`
--

-- --------------------------------------------------------

--
-- Table structure for table `a_login`
--

CREATE TABLE `a_login` (
  `a_id` varchar(45) NOT NULL,
  `a_pwd` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `a_login`
--

INSERT INTO `a_login` (`a_id`, `a_pwd`) VALUES
('admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cal`
--

CREATE TABLE `cal` (
  `t_id` int(10) NOT NULL,
  `c_date` date NOT NULL,
  `c_mot` varchar(25) NOT NULL,
  `c_vehicle` varchar(25) NOT NULL,
  `c_distance` int(10) NOT NULL,
  `c_footprint` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cal`
--

INSERT INTO `cal` (`t_id`, `c_date`, `c_mot`, `c_vehicle`, `c_distance`, `c_footprint`) VALUES
(98765432, '2022-11-30', 'motorBike', 'LargeMotorBike', 329, 55),
(92745109, '2022-11-15', 'flight', 'ShortBusinessClassFlight', 6000, 985),
(95639842, '2022-11-22', 'carTravel', 'LargePetrolVan', 600, 186),
(96325145, '2022-11-15', 'carTravel', 'LargePetrolCar', 35, 13),
(96453419, '2022-11-12', 'carTravel', 'LargeDieselCar', 340, 96),
(96522365, '2022-11-07', 'carTravel', 'MediumHybridCar', 680, 95),
(97435109, '2022-11-23', 'flight', 'DomesticFlight', 400, 80),
(98123803, '2022-11-17', 'publicTransit', 'Subway', 100, 8),
(98654943, '2022-11-16', 'publicTransit', 'NationalTrain', 3000, 201),
(98741256, '2022-11-08', 'motorBike', 'MediumMotorBike', 299, 38),
(99985388, '2022-12-15', 'carTravel', 'LargeHybridCar', 785, 195),
(99767853, '2022-12-07', 'publicTransit', 'Subway', 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) NOT NULL,
  `parent` bigint(20) NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `parent`, `name`) VALUES
(1, 0, 'flight'),
(2, 0, 'carTravel'),
(3, 0, 'motorBike'),
(4, 0, 'publicTransit'),
(5, 1, 'DomesticFlight'),
(6, 1, 'ShortEconomyClassFlight'),
(7, 1, 'ShortBusinessClassFlight'),
(8, 1, 'LongEconomyClassFlight'),
(9, 1, 'LongPremiumClassFlight'),
(10, 1, 'LongBusinessClassFlight'),
(11, 1, 'LongFirstClassFlight'),
(12, 2, 'SmallDieselCar'),
(13, 2, 'MediumDieselCar'),
(14, 2, 'LargeDieselCar'),
(15, 2, 'MediumHybridCar'),
(16, 2, 'LargeHybridCar'),
(17, 2, 'MediumLPGCar'),
(18, 2, 'LargeLPGCar'),
(19, 2, 'MediumCNGCar'),
(20, 2, 'LargeCNGCar'),
(21, 2, 'SmallPetrolVan'),
(22, 2, 'LargePetrolVan'),
(23, 2, 'SmallDielselVan'),
(24, 2, 'MediumDielselVan'),
(25, 2, 'LargeDielselVan'),
(26, 2, 'LPGVan'),
(27, 2, 'CNGVan'),
(28, 2, 'SmallPetrolCar'),
(29, 2, 'MediumPetrolCar'),
(30, 2, 'LargePetrolCar'),
(31, 3, 'SmallMotorBike'),
(32, 3, 'MediumMotorBike'),
(33, 3, 'LargeMotorBike'),
(34, 4, 'Taxi'),
(35, 4, 'ClassicBus'),
(36, 4, 'EcoBus'),
(37, 4, 'Coach'),
(38, 4, 'NationalTrain'),
(39, 4, 'LightRail'),
(40, 4, 'Subway'),
(41, 4, 'FerryOnFoot'),
(42, 4, 'FerryInCar');

-- --------------------------------------------------------

--
-- Table structure for table `t_info`
--

CREATE TABLE `t_info` (
  `t_id` int(10) NOT NULL,
  `t_fname` varchar(30) NOT NULL,
  `t_lname` varchar(30) NOT NULL,
  `t_contact` varchar(15) NOT NULL,
  `t_eid` varchar(30) NOT NULL,
  `t_city` varchar(25) NOT NULL,
  `t_country` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_info`
--

INSERT INTO `t_info` (`t_id`, `t_fname`, `t_lname`, `t_contact`, `t_eid`, `t_city`, `t_country`) VALUES
(90912748, 'Bruce', 'Perry', '7259444346', 'Bruce@gmail.co', 'Tokyo', 'Japan'),
(91350575, 'Nina', 'Gonzales', '5056444792', 'Nina@gmail.com', 'Pompéia', 'Brazil'),
(91738201, 'Agnes	', '	Hunt	', '5093222527', 'Agnes@gmail.co', '	Tokyo	', 'Japan               '),
(92745109, 'Andrea', 'Murray', '7469129850', 'amurray@newmail.com', '', ''),
(92794793, 'Fannie	', '	Cortez	', '2096633886', 'Fanni@gmail.co', '	Tokyo	', 'Japan               '),
(93161447, 'Vincent	', '	Reid	', '2039953372', 'Vince@gmail.co', '	Tokyo	', 'Japan               '),
(93495351, 'Daryl	', '	Gonzales', '5054135619', 'Daryl@gmail.co', '	Tokyo	', 'Japan               '),
(94067483, 'Vanessa	', '	Valdez	', '3093506217', 'Vanes@gmail.co', '	Tokyo	', 'Japan               '),
(94200876, 'Gerardo	', 'Silva', '2086497362', 'Gerardo@gmail.', 'Tuneiras	', 'Brazil'),
(94673822, 'Erin', 'Cruz', '9988776655', 'erincruz@gmail.com', '', ''),
(94680123, 'Lilia', 'Mae', '4376812982', 'liliamae@yahoo.com', '', ''),
(95639842, 'Jennifer', 'Winget', '7658213983', 'jwinget@yahoo.com', '', ''),
(96136508, 'Carlos	', '	Parker	', '5056440578', 'Carlo@gmail.co', '	Tokyo	', 'Japan               '),
(96325145, 'sczc', 'dvv', '65165313', 'fzbdhzhf@fzh.com', '', ''),
(96437237, 'Frankie	', '	Gross	', '5056444270', 'Frank@gmail.co', '	Tokyo	', 'Japan               '),
(96453419, 'Conny', 'Ashley', '8937329810', 'cashley@gmail.com', '', ''),
(96522365, 'Joes', 'Shah', '9852123658', 'js@shah.com', '', ''),
(96837220, 'Charlott	', 'Mendez		', '3082768491', 'Charl@gmail.co', '	Las Angeles', 'USA'),
(97435109, 'Robin', 'Cook', '4367139342', 'rcook123@rmail.com', '', ''),
(97676381, 'Shari	', '	Rose	', '9083399844', 'Shari@gmail.co', '	Tokyo	', 'Japan               '),
(98123803, 'Juan', 'Lee', '6810729460', 'juanlee@hotmail.com', '', ''),
(98251531, 'Vicky', 'Mccarthy', '5058629325', 'Vicky@gmail.co', 'Antiga', 'Brazil'),
(98654943, 'Mike', 'Kennedy', '9879876565', 'mkennedy@hotmail.com', '', ''),
(98741256, 'Peter', 'Bros', '5874565412', 'peterbros@007.com', '', ''),
(98765432, 'john', 'garland', '9856658952', 'john@garland.com', '', ''),
(99205076, 'Ricardo	', '	Hopkins	', '5055652412', 'Ricar@gmail.co', '	Tokyo	', 'Japan               '),
(99218666, 'Darla	', '	Boyd	', '2094537211', 'Darl@gmail.com', 'Kwa-Dabula	', 'South Africa'),
(99767853, 'Michael', 'Batic', '647688987', 'mbatic@ymail.com', '', ''),
(99985388, 'Ramon	', '	Castillo', '5056445026', 'Ramon@gmail.co', '	Tokyo	', 'Japan               ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `t_info`
--
ALTER TABLE `t_info`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
