-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 04:30 PM
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
-- Database: `lambs`
--

-- --------------------------------------------------------

--
-- Table structure for table `historiaid`
--

CREATE TABLE `historiaid` (
  `historiaid` int(11) NOT NULL,
  `historia` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historiaid`
--

INSERT INTO `historiaid` (`historiaid`, `historia`) VALUES
(29, '         • Lambs is a Finnish rock band that has been making music since 1994. The band was formed\r\n          in Tornio, Finland. The band consists of A. Lindholm on guitar and vocals, Timo on drums,\r\n          and Tommy on bass. ');

-- --------------------------------------------------------

--
-- Table structure for table `keikkakalenteriid`
--

CREATE TABLE `keikkakalenteriid` (
  `KeikkakalenteriID` int(11) NOT NULL,
  `paivamaara` date NOT NULL,
  `paikkakunta` varchar(25) NOT NULL,
  `paikka` varchar(50) NOT NULL,
  `kellonaika` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keikkakalenteriid`
--

INSERT INTO `keikkakalenteriid` (`KeikkakalenteriID`, `paivamaara`, `paikkakunta`, `paikka`, `kellonaika`) VALUES
(2, '2023-05-13', 'Helsinki', 'Tavastia', '23:02:00'),
(5, '2023-05-04', 'Testi', 'Oulu', '22:22:00'),
(6, '2023-05-18', 'Gig', 'Tornio', '03:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `mediaid`
--

CREATE TABLE `mediaid` (
  `MediaID` int(11) NOT NULL,
  `kuvanimi` varchar(200) NOT NULL,
  `kuvapolku` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `kayttajatunnus` varchar(20) NOT NULL,
  `salasana` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `kayttajatunnus`, `salasana`) VALUES
(1, 'Admin', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `uutisetid`
--

CREATE TABLE `uutisetid` (
  `uutisetID` int(11) NOT NULL,
  `otsikko` varchar(50) NOT NULL,
  `uutinen` varchar(500) NOT NULL,
  `uutispvm` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uutisetid`
--

INSERT INTO `uutisetid` (`uutisetID`, `otsikko`, `uutinen`, `uutispvm`) VALUES
(10, 'New Release!', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum\r\n\r\n', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `historiaid`
--
ALTER TABLE `historiaid`
  ADD PRIMARY KEY (`historiaid`);

--
-- Indexes for table `keikkakalenteriid`
--
ALTER TABLE `keikkakalenteriid`
  ADD PRIMARY KEY (`KeikkakalenteriID`);

--
-- Indexes for table `mediaid`
--
ALTER TABLE `mediaid`
  ADD PRIMARY KEY (`MediaID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `uutisetid`
--
ALTER TABLE `uutisetid`
  ADD PRIMARY KEY (`uutisetID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `historiaid`
--
ALTER TABLE `historiaid`
  MODIFY `historiaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `keikkakalenteriid`
--
ALTER TABLE `keikkakalenteriid`
  MODIFY `KeikkakalenteriID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mediaid`
--
ALTER TABLE `mediaid`
  MODIFY `MediaID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uutisetid`
--
ALTER TABLE `uutisetid`
  MODIFY `uutisetID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
