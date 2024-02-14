-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2018 at 11:28 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `docter`
--

-- --------------------------------------------------------

--
-- Table structure for table `add`
--

CREATE TABLE `add` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob` varchar(100) NOT NULL,
  `adder` longtext NOT NULL,
  `spec` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `name`, `pwd`) VALUES
(1, 'adminstr', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `docters`
--

CREATE TABLE `docters` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob` varchar(100) NOT NULL,
  `adder` longtext NOT NULL,
  `spec` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `docters`
--

INSERT INTO `docters` (`id`, `name`, `email`, `mob`, `adder`, `spec`, `uname`, `pwd`) VALUES
(1, 'sda', 'ddsa', 'dsa', 'dsa', 'das', '', ''),
(2, 'xz', 'xz', 'zxc', 'cxzx', 'cxv', '', ''),
(3, 'karthika', 'ewar', 'rewr', 'rew', 're', '', ''),
(4, 'jkh', 'khj', 'kjh', 'kjh', 'kj', '', ''),
(5, 'erw', 'ragavan@gmail.com', '8220399316', 'rew', 'Statins', 'k', 'k'),
(6, 'ravi', 'ravi@gmail.com', '8012232157', 'theni', ' Clopidogrel bisulfate', '', ''),
(7, 'ravi', 'karthikasri02@gmail.com', '8220399316', 'theni', '', '', ''),
(8, 'hg', 'hg', 'jhg', 'hg', ' Warfarin sodium', 'jhg', 'bfgc');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `id` int(11) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `pn` varchar(11) NOT NULL,
  `dn` varchar(100) NOT NULL,
  `bb` varchar(100) NOT NULL,
  `sug` varchar(100) NOT NULL,
  `cho` varchar(100) NOT NULL,
  `ecg` varchar(100) NOT NULL,
  `urine` varchar(100) NOT NULL,
  `ra` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`id`, `pid`, `pn`, `dn`, `bb`, `sug`, `cho`, `ecg`, `urine`, `ra`) VALUES
(1, '2', 'karthi', 'xz', 'fvdg', 'gf', 'gf', 'gfd', 'gf', 'gf'),
(2, '6', 'yt', '', 'fdsf', 'fd', 'fd', 'fd', 'fd', 'fd'),
(3, '2', 'karthi', 'xz', 'lk', 'lk', 'lkj', 'lkj', 'lkj', 'lkj');

-- --------------------------------------------------------

--
-- Table structure for table `med`
--

CREATE TABLE `med` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `med`
--

INSERT INTO `med` (`id`, `name`, `price`, `qty`) VALUES
(1, 'gfh', 'hfgh', 'hgfh');

-- --------------------------------------------------------

--
-- Table structure for table `med1`
--

CREATE TABLE `med1` (
  `id` int(11) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `pn` varchar(100) NOT NULL,
  `dn` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `medi` varchar(11) NOT NULL,
  `med` varchar(100) NOT NULL,
  `type` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `med1`
--

INSERT INTO `med1` (`id`, `pid`, `pn`, `dn`, `date`, `medi`, `med`, `type`) VALUES
(1, '2', '', 'karthika', '2018-02-27', 'StatinsAspi', 'Statins', 'yes'),
(2, '1', 'karthi', 'xz', '2018-03-29', 'StatinsAspi', 'Aspirin', 'yes'),
(3, '6', '', 'erw', '2018-03-29', 'StatinsAspi', ' Beta-blockers', 'no'),
(4, '6', 'karthi', 'karthika', '2018-03-28', 'StatinsAspi', 'Aspirin', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob` varchar(100) NOT NULL,
  `adder` longtext NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`id`, `name`, `email`, `mob`, `adder`, `uname`, `pwd`) VALUES
(1, 'xzX', 'xz', 'xzc', 'xc', 'k', 'k'),
(2, 'hg', 'hgfc', 'hgfc', 'hgfc', 'm', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob` varchar(100) NOT NULL,
  `adder` longtext NOT NULL,
  `ages` varchar(100) NOT NULL,
  `date` int(100) NOT NULL,
  `bloodgroup` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `problem` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `upass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `pid`, `name`, `email`, `mob`, `adder`, `ages`, `date`, `bloodgroup`, `gender`, `problem`, `uname`, `upass`) VALUES
(1, 1, 'karthi', 'karthikasri02@gmail.com', '8220399316', 'rew', '25', 2, 'b+ve', 'ghg', 'female', 'karthi', '234'),
(2, 2, 'karthi', 'karthikasri02@gmail.com', '8220399316', 'dsf', '25', 0, 'b+ve', 'ghg', 'male', 'mm', 'mm'),
(3, 0, 'thenmozhi', 'thenmozhi@gmail.com', '8526037072', 'theni', '19', 0, 'a+', 'heart ', 'Female', 'then', 'then'),
(4, 6, 'bvc', 'hgfc', '5454', 'hg', '56', 0, 'ghj', 'jnhg', 'Female', 'jhg', 'jg'),
(5, 0, 'yt', 'uyt', 'uty', 'uj', 'uyt', 0, 'uyt', 'uyt', 'Female', 'uyt', 'ujy');

-- --------------------------------------------------------

--
-- Table structure for table `rep`
--

CREATE TABLE `rep` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pn` varchar(100) NOT NULL,
  `dn` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `bb` varchar(100) NOT NULL,
  `suger` varchar(100) NOT NULL,
  `ecg` varchar(100) NOT NULL,
  `urn` varchar(100) NOT NULL,
  `qls` varchar(100) NOT NULL,
  `exra` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rep`
--

INSERT INTO `rep` (`id`, `pid`, `pn`, `dn`, `date`, `bb`, `suger`, `ecg`, `urn`, `qls`, `exra`) VALUES
(1, 2, '', 'karthi', '26/2/2018', 'gf', 'hgf', 'hfg', 'hgf', 'hfg', 'hf'),
(2, 6, 'karthi', 'karthika', '2018-03-20', 'k', 'kj', 'kj', 'kj', 'kj', 'kj'),
(3, 1, 'bvc', 'karthika', '2018-03-08', 'kjh', 'kjh', 'kjh', 'kjh', 'kjkj', 'kj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add`
--
ALTER TABLE `add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docters`
--
ALTER TABLE `docters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `med`
--
ALTER TABLE `med`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `med1`
--
ALTER TABLE `med1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rep`
--
ALTER TABLE `rep`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add`
--
ALTER TABLE `add`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `docters`
--
ALTER TABLE `docters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `med`
--
ALTER TABLE `med`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `med1`
--
ALTER TABLE `med1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rep`
--
ALTER TABLE `rep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
