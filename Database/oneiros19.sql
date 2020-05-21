-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2019 at 07:33 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oneiros19`
--

-- --------------------------------------------------------

--
-- Table structure for table `admak`
--

CREATE TABLE `admak` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `alternateendings`
--

CREATE TABLE `alternateendings` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `awaaz`
--

CREATE TABLE `awaaz` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cadence`
--

CREATE TABLE `cadence` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `destival`
--

CREATE TABLE `destival` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dhwani`
--

CREATE TABLE `dhwani` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ekqissa`
--

CREATE TABLE `ekqissa` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `elysium`
--

CREATE TABLE `elysium` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ensemble`
--

CREATE TABLE `ensemble` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `filmistaan`
--

CREATE TABLE `filmistaan` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `focus`
--

CREATE TABLE `focus` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groundzero`
--

CREATE TABLE `groundzero` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `humourus`
--

CREATE TABLE `humourus` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `igenium`
--

CREATE TABLE `igenium` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ignite`
--

CREATE TABLE `ignite` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `instaperture`
--

CREATE TABLE `instaperture` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jamyouup`
--

CREATE TABLE `jamyouup` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kairos`
--

CREATE TABLE `kairos` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `missionimprovable`
--

CREATE TABLE `missionimprovable` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nextar`
--

CREATE TABLE `nextar` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `octaves`
--

CREATE TABLE `octaves` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `oddsandends`
--

CREATE TABLE `oddsandends` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `onlyone`
--

CREATE TABLE `onlyone` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pictionary`
--

CREATE TABLE `pictionary` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pictureperfect`
--

CREATE TABLE `pictureperfect` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `powershoot`
--

CREATE TABLE `powershoot` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rangmanch`
--

CREATE TABLE `rangmanch` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rapsody`
--

CREATE TABLE `rapsody` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sadharan`
--

CREATE TABLE `sadharan` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `saptak`
--

CREATE TABLE `saptak` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sasstheshoes`
--

CREATE TABLE `sasstheshoes` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `showcase`
--

CREATE TABLE `showcase` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shutter`
--

CREATE TABLE `shutter` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sos`
--

CREATE TABLE `sos` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `spoofydo`
--

CREATE TABLE `spoofydo` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sportify`
--

CREATE TABLE `sportify` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trippytiles`
--

CREATE TABLE `trippytiles` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `twicethevoice`
--

CREATE TABLE `twicethevoice` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `College` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Registration` int(11) NOT NULL,
  `Referal` varchar(10) NOT NULL,
  `Ambassador` text NOT NULL,
  `Whatsapp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `warofbands`
--

CREATE TABLE `warofbands` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `woodstock`
--

CREATE TABLE `woodstock` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rno` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Whatsapp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admak`
--
ALTER TABLE `admak`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `alternateendings`
--
ALTER TABLE `alternateendings`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `awaaz`
--
ALTER TABLE `awaaz`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `cadence`
--
ALTER TABLE `cadence`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `destival`
--
ALTER TABLE `destival`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `dhwani`
--
ALTER TABLE `dhwani`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `ekqissa`
--
ALTER TABLE `ekqissa`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `elysium`
--
ALTER TABLE `elysium`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `ensemble`
--
ALTER TABLE `ensemble`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `filmistaan`
--
ALTER TABLE `filmistaan`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `focus`
--
ALTER TABLE `focus`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `groundzero`
--
ALTER TABLE `groundzero`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `humourus`
--
ALTER TABLE `humourus`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `igenium`
--
ALTER TABLE `igenium`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `ignite`
--
ALTER TABLE `ignite`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `instaperture`
--
ALTER TABLE `instaperture`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `jamyouup`
--
ALTER TABLE `jamyouup`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `kairos`
--
ALTER TABLE `kairos`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `missionimprovable`
--
ALTER TABLE `missionimprovable`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `nextar`
--
ALTER TABLE `nextar`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `octaves`
--
ALTER TABLE `octaves`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `oddsandends`
--
ALTER TABLE `oddsandends`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `onlyone`
--
ALTER TABLE `onlyone`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `pictionary`
--
ALTER TABLE `pictionary`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `pictureperfect`
--
ALTER TABLE `pictureperfect`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `powershoot`
--
ALTER TABLE `powershoot`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `rangmanch`
--
ALTER TABLE `rangmanch`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `rapsody`
--
ALTER TABLE `rapsody`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `sadharan`
--
ALTER TABLE `sadharan`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `saptak`
--
ALTER TABLE `saptak`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `sasstheshoes`
--
ALTER TABLE `sasstheshoes`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `showcase`
--
ALTER TABLE `showcase`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `shutter`
--
ALTER TABLE `shutter`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `sos`
--
ALTER TABLE `sos`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `spoofydo`
--
ALTER TABLE `spoofydo`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `sportify`
--
ALTER TABLE `sportify`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `trippytiles`
--
ALTER TABLE `trippytiles`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `twicethevoice`
--
ALTER TABLE `twicethevoice`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `warofbands`
--
ALTER TABLE `warofbands`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `woodstock`
--
ALTER TABLE `woodstock`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
