-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb14.freehostingeu.com
-- Generation Time: Dec 18, 2016 at 07:33 AM
-- Server version: 5.7.16-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2108487_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `name` varchar(50) NOT NULL,
  `des` varchar(100) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`name`, `des`, `dt`) VALUES
('Comic Cafe', 'plz contact.we have some offers going on.', '2016-04-24 14:00:18'),
('Dhaka Restaurant', 'Leftover available.Interested people plz contact with us.', '2016-04-23 09:23:13'),
('KFC', 'Leftover available for 50 people.Plz do contact soon.Thank you', '2016-04-24 13:50:43'),
('Dhaka Restaurant', 'Anybody here?', '2016-04-23 13:47:40'),
('Shawarma King', 'Leftover available.', '2016-04-25 04:41:10'),
('Yan Thai Restaurant', 'we have left over food for 30 people... contact us', '2016-04-25 05:52:45'),
('meridian restaurant', 'we have leftover foods for 30 person.', '2016-04-25 10:13:40'),
('Dhaka Restaurant', 'Leftover Available.', '2016-04-25 10:34:43'),
('Kabir Uddin', 'ammu amr khuda lagse', '2016-06-03 07:59:36'),
('kfc', 'contact us', '2016-04-28 15:07:13'),
('Comic Cafe', 'Leftovers available for 30.', '2016-05-01 04:52:41'),
('Bar-B-Q Cafe', 'contact with us.', '2016-05-01 04:59:07'),
('Aqib Bhai', 'Ki share korbo jani na', '2016-08-07 11:54:53');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `owner` text NOT NULL,
  `name` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `number` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `ID` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`owner`, `name`, `location`, `number`, `password`, `ID`) VALUES
('Restaurant', 'BFC', 'Kafrul', '01998474775', '249jfjdn', 'B1'),
('Orphanage', 'Orphan\'s Home', 'Baily Road', '01983847578', 'ghkjluot', 'A345566'),
('Restaurant', 'KFC', 'Mirpur', '01746955388', '123456', 'A2'),
('Restaurant', 'Abul Hotel', 'Dhaka', '01829367878', '123456', 'A1'),
('restaurant', 'Yan Thai Chinese', 'mirpur', '098765', '123b', 'yt404'),
('Restaurant', 'Dhaka Restaurant', 'Hajipara,Dhaka', '01987655346', '12345678', '13579'),
('Orphanage', 'jege Utho', 'Agargaon,Dhaka', '01983588667', 'jegeutho', 'AB-1259607'),
('Restaurant', 'Comic Cafe', 'Dhanmondi', '01948585839', 'comic123', '495794030'),
('Restaurant', 'Shawarma King', 'Banasree,Rampura', '01965933596', 'king123', 'sha1234678'),
('orphanage', 'Save the children', 'gulshan', '98767', '123m', 'or101'),
('restaurant', 'Yan Thai Chinese', 'mirpur 11', '99887766', '345b', 'rrtt898'),
('orphanage', 'Sir Solimullah muslim orphanage', 'Old Dhaka', '01715757681', '1234', 'yuti890'),
('restaurant', 'King Restaurant', 'mirpur', '01983528195', '123456', 'nmnmnm890'),
('restaurant', 'pizza inn', 'chowrongi', '0171658866', '123', 'joney12'),
('', '', '', '', '', ''),
('restaurant', 'cafe 360', 'mirpur 6', '8790', '123', '98bnhgj'),
('orphanage', 'asalota', 'Agargaon', '124', '123', '789or'),
('Restaurant', 'Bar-B-Q Cafe', 'Dhanmondi', '01715081174', '1234', '14567852'),
('restaurant', 'Md. Kabir Uddin', 'mirpur 10,dhaka', '01713093669', '10091968', '0096');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
