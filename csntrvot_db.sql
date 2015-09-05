-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 23, 2012 at 08:15 AM
-- Server version: 5.1.62
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `csntrvot_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_members`
--

CREATE TABLE IF NOT EXISTS `tbl_members` (
  `Member_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Year_Level` varchar(15) NOT NULL,
  `Section` varchar(1) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Image` text NOT NULL,
  PRIMARY KEY (`Member_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `tbl_members`
--

INSERT INTO `tbl_members` (`Member_ID`, `Year_Level`, `Section`, `Name`, `Email`, `Image`) VALUES
(9, '1st Year', 'A', 'Oliver Martinez', 'nemoryoliver@gmail.com', 'mark19.jpg'),
(12, '1st Year', 'A', 'Reyden Lamig', 'reyden@reyden.com', 'oprah winfrey.jpg'),
(13, '1st Year', 'A', 'Koala', 'koala@koala.com', 'Koala19.jpg'),
(15, '1st Year', 'A', 'Neri', 'test@test.com', 'Neri.jpg'),
(16, '', '', 'Administrator', 'admin@admin.com', 'jonnel.jpg'),
(17, '1st Year', 'A', 'Anna', 'anna@anna.com', 'anna.jpg'),
(18, '1st Year', 'A', 'Dannie', 'admin1@admin1.com', 'dannie.jpg'),
(19, '4th Year', 'C', 'Jasmen Abna', 'jasmen@jasmen.com', 'jasmen.jpg'),
(20, '2nd Year', 'A', 'Christine Reyes', 'kristine@kristine.com', 'kristine reyes.jpg'),
(21, '1st Year', 'A', 'Paris Hilton', 'paris@paris.com', 'paris hilton.jpg'),
(22, '3rd Year', 'A', 'Ang Angry Birds', 'ang@ang.com', 'ang51.jpg'),
(23, '2nd Year', 'A', 'Jeffry Lanohan', 'jeffry@jeffry.com', 'jeffyl.jpg'),
(24, '2nd Year', 'A', 'Brad Pitt', 'brad@brad.com', 'brad pitt.jpg'),
(25, '1st Year', 'A', 'Daisy Octavio', 'daisy@daisy.com', 'daisy.jpg'),
(26, '1st Year', 'A', 'David Archuleta', 'david@david.com', 'david23.jpg'),
(27, '3rd Year', 'B', 'Ivan Coulston', 'ivan@ivan.com', 'iban.jpg'),
(28, '2nd Year', 'A', 'Kayvin Nobleza', 'kayvin@kayvin.com', 'kayvin.jpg'),
(29, '3rd Year', 'A', 'Justin Timberlake', 'justine@justine.com', 'justin timberlake.jpg'),
(30, '1st Year', 'A', 'Rosco Coffreros', 'rosco@rosco.com', 'rosco.jpg'),
(31, '1st Year', 'A', 'Taylor Swift', 'taylor@taylor.com', 'taylo swift51.jpg'),
(32, '1st Year', 'A', 'Penguin', 'penguin@penguin.com', 'Penguins.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_messages`
--

CREATE TABLE IF NOT EXISTS `tbl_messages` (
  `Message_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Message` text NOT NULL,
  `Unique_ID_From` int(11) NOT NULL,
  `Unique_ID_To` int(11) NOT NULL,
  PRIMARY KEY (`Message_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Dumping data for table `tbl_messages`
--

INSERT INTO `tbl_messages` (`Message_ID`, `Message`, `Unique_ID_From`, `Unique_ID_To`) VALUES
(62, '<a href=''../includes/functions/approve_nomination_request.php?user_unique_id=9&position=Governor&nominated_by_id=18'' class=''button''>Approve</a> I would like to nominate you as a Governor', 18, 9),
(63, '<a href=''../includes/functions/approve_nomination_request.php?user_unique_id=20&position=Governor&nominated_by_id=18'' class=''button''>Approve</a> I would like to nominate you as a Governor', 18, 20),
(64, '<a href=''../includes/functions/approve_nomination_request.php?user_unique_id=18&position=Governor&nominated_by_id=9'' class=''button''>Approve</a> I would like to nominate you as a Governor', 9, 18),
(65, '<a href=''../includes/functions/approve_nomination_request.php?user_unique_id=35&position=Board_Member&nominated_by_id=22'' class=''button''>Approve</a> I would like to nominate you as a Board_Member', 22, 35),
(66, '<a href=''../includes/functions/approve_nomination_request.php?user_unique_id=34&position=Board_Member&nominated_by_id=23'' class=''button''>Approve</a> I would like to nominate you as a Board_Member', 23, 34),
(67, '<a href=''../includes/functions/approve_nomination_request.php?user_unique_id=33&position=Vice_Governor&nominated_by_id=24'' class=''button''>Approve</a> I would like to nominate you as a Vice_Governor', 24, 33),
(68, '<a href=''../includes/functions/approve_nomination_request.php?user_unique_id=32&position=Board_Member&nominated_by_id=25'' class=''button''>Approve</a> I would like to nominate you as a Board_Member', 25, 32),
(69, '<a href=''../includes/functions/approve_nomination_request.php?user_unique_id=31&position=Board_Member&nominated_by_id=26'' class=''button''>Approve</a> I would like to nominate you as a Board_Member', 26, 31),
(70, '<a href=''../includes/functions/approve_nomination_request.php?user_unique_id=30&position=Board_Member&nominated_by_id=27'' class=''button''>Approve</a> I would like to nominate you as a Board_Member', 27, 30),
(71, '<a href=''../includes/functions/approve_nomination_request.php?user_unique_id=29&position=Board_Member&nominated_by_id=28'' class=''button''>Approve</a> I would like to nominate you as a Board_Member', 28, 29),
(72, '<a href=''../includes/functions/approve_nomination_request.php?user_unique_id=28&position=Board_Member&nominated_by_id=29'' class=''button''>Approve</a> I would like to nominate you as a Board_Member', 29, 28),
(73, '<a href=''../includes/functions/approve_nomination_request.php?user_unique_id=28&position=Governor&nominated_by_id=29'' class=''button''>Approve</a> I would like to nominate you as a Governor', 29, 28),
(74, '<a href=''../includes/functions/approve_nomination_request.php?user_unique_id=29&position=Board_Member&nominated_by_id=30'' class=''button''>Approve</a> I would like to nominate you as a Board_Member', 30, 29),
(75, '<a href=''../includes/functions/approve_nomination_request.php?user_unique_id=27&position=Board_Member&nominated_by_id=31'' class=''button''>Approve</a> I would like to nominate you as a Board_Member', 31, 27),
(76, '<a href=''../includes/functions/approve_nomination_request.php?user_unique_id=26&position=Board_Member&nominated_by_id=35'' class=''button''>Approve</a> I would like to nominate you as a Board_Member', 35, 26),
(77, '<a href=''../includes/functions/approve_nomination_request.php?user_unique_id=24&position=Board_Member&nominated_by_id=24'' class=''button''>Approve</a> I would like to nominate you as a Board_Member', 24, 24),
(78, '<a href=''../includes/functions/approve_nomination_request.php?user_unique_id=24&position=Governor&nominated_by_id=26'' class=''button''>Approve</a> I would like to nominate you as a Governor', 26, 24),
(79, '<a href=''../includes/functions/approve_nomination_request.php?user_unique_id=27&position=Governor&nominated_by_id=25'' class=''button''>Approve</a> I would like to nominate you as a Governor', 25, 27),
(80, '<a href=''../includes/functions/approve_nomination_request.php?user_unique_id=27&position=Vice_Governor&nominated_by_id=26'' class=''button''>Approve</a> I would like to nominate you as a Vice_Governor', 26, 27),
(81, 'Test', 1, 9),
(82, 'Test', 1, 18),
(83, 'Test', 1, 20),
(84, 'Test', 1, 21),
(85, 'Test', 1, 22),
(86, 'Test', 1, 23),
(87, 'Test', 1, 24),
(88, 'Test', 1, 25),
(89, 'Test', 1, 26),
(90, 'Test', 1, 27),
(91, 'Test', 1, 28),
(92, 'Test', 1, 29),
(93, 'Test', 1, 30),
(94, 'Test', 1, 31),
(95, 'Test', 1, 32),
(96, 'Test', 1, 33),
(97, 'Test', 1, 34),
(98, 'Test', 1, 35),
(99, 'Test', 1, 36);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nominees`
--

CREATE TABLE IF NOT EXISTS `tbl_nominees` (
  `Nominee_ID` int(30) NOT NULL AUTO_INCREMENT,
  `Unique_ID` int(11) NOT NULL,
  `Nominated_By_ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Position` varchar(20) NOT NULL,
  `Votes` int(10) NOT NULL,
  `Date_Added` date NOT NULL,
  PRIMARY KEY (`Nominee_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

--
-- Dumping data for table `tbl_nominees`
--

INSERT INTO `tbl_nominees` (`Nominee_ID`, `Unique_ID`, `Nominated_By_ID`, `Name`, `Position`, `Votes`, `Date_Added`) VALUES
(99, 9, 18, 'Oliver Martinez', 'Governor', 1, '0000-00-00'),
(100, 20, 18, 'Neri', 'Governor', 2, '0000-00-00'),
(101, 18, 9, 'Reyden Lamig', 'Governor', 1, '0000-00-00'),
(102, 31, 26, 'Ivan Coulston', 'Board_Member', 3, '0000-00-00'),
(103, 26, 35, 'Ang Angry Birds', 'Board_Member', 2, '0000-00-00'),
(104, 33, 24, 'Justin Timberlake', 'Vice_Governor', 2, '0000-00-00'),
(105, 32, 25, 'Kayvin Nobleza', 'Board_Member', 0, '0000-00-00'),
(106, 30, 27, 'David Archuleta', 'Board_Member', 2, '0000-00-00'),
(107, 29, 28, 'Daisy Octavio', 'Board_Member', 3, '0000-00-00'),
(108, 24, 26, 'Jasmen Abna', 'Governor', 2, '0000-00-00'),
(109, 27, 26, 'Jeffry Lanohan', 'Vice_Governor', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_system`
--

CREATE TABLE IF NOT EXISTS `tbl_system` (
  `Begin_Date` date NOT NULL,
  `End_Date` date NOT NULL,
  `Student_Access` varchar(15) NOT NULL DEFAULT 'enabled',
  `Registration_Access` varchar(15) NOT NULL DEFAULT 'enabled'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_system`
--

INSERT INTO `tbl_system` (`Begin_Date`, `End_Date`, `Student_Access`, `Registration_Access`) VALUES
('2012-03-11', '2013-03-19', 'enabled', 'enabled');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `Unique_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Member_ID` int(11) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Level` varchar(8) NOT NULL DEFAULT 'student',
  `Password` varchar(30) NOT NULL,
  `Status` varchar(15) NOT NULL DEFAULT 'unconfirmed',
  `Date_Registered` date NOT NULL,
  `Confirmation_Code` varchar(90) NOT NULL,
  PRIMARY KEY (`Unique_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`Unique_ID`, `Member_ID`, `Username`, `Level`, `Password`, `Status`, `Date_Registered`, `Confirmation_Code`) VALUES
(1, 16, 'admin', 'admin', 'admin', 'confirmed', '2012-03-03', ''),
(9, 9, 'oliver', 'student', 'oliver', 'confirmed', '2012-03-05', 'b1e6495d5174b0b3f584c89f3c2aa1c6'),
(18, 12, 'reyden', 'student', 'reyden', 'confirmed', '2012-03-17', '0a63278103105c462907bd86209a3cb4'),
(20, 15, 'neri', 'student', 'neri', 'confirmed', '2012-03-18', '098f6bcd4621d373cade4e832627b4f6'),
(21, 20, 'kristine', 'student', 'kristine', 'confirmed', '2012-03-20', '002f48e213c339f5d1d839185dcc8e7f'),
(22, 13, 'koala', 'student', 'koala', 'confirmed', '2012-03-20', 'a564de63c2d0da68cf47586ee05984d7'),
(23, 17, 'anna', 'student', 'anna', 'confirmed', '2012-03-20', 'a70f9e38ff015afaa9ab0aacabee2e13'),
(24, 19, 'jasmen', 'student', 'jasmen', 'confirmed', '2012-03-20', '983d944032d6cc2c9226fe1929e9a3a1'),
(25, 21, 'paris', 'student', 'paris', 'confirmed', '2012-03-20', 'ccbee73cd81c7f42405e1920409247ec'),
(26, 22, 'ang', 'student', 'ang', 'confirmed', '2012-03-20', '4fb3b68e84149f91bcfd0102f95d3731'),
(27, 23, 'jeffry', 'student', 'jeffry', 'confirmed', '2012-03-20', '4bda20fa34c78ccbb9002ab384d9cae5'),
(28, 24, 'brad', 'student', 'brad', 'confirmed', '2012-03-20', '884354eb56db3323cbce63a5e177ecac'),
(29, 25, 'daisy', 'student', 'daisy', 'confirmed', '2012-03-20', 'df4b892324bbb648f27734b55c206b4b'),
(30, 26, 'david', 'student', 'david', 'confirmed', '2012-03-20', '172522ec1028ab781d9dfd17eaca4427'),
(31, 27, 'ivan', 'student', 'ivan', 'confirmed', '2012-03-20', '2c42e5cf1cdbafea04ed267018ef1511'),
(32, 28, 'kayvin', 'student', 'kayvin', 'confirmed', '2012-03-20', '41d9d4168fc24b2e7ad280e0c19802a3'),
(33, 29, 'justine', 'student', 'justine', 'confirmed', '2012-03-20', 'b55050b2f605b7cf0d48346ff3d432d3'),
(34, 30, 'rosco', 'student', 'rosco', 'confirmed', '2012-03-20', '704065f6257444283efb2b55f25e1c96'),
(35, 31, 'taylor', 'student', 'taylor', 'confirmed', '2012-03-20', '7d8bc5f1a8d3787d06ef11c97d4655df'),
(36, 32, 'penguin', 'student', 'penguin', 'confirmed', '2012-03-19', '24f7ca5f6ff1a5afb9032aa5e533ad95');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_votes`
--

CREATE TABLE IF NOT EXISTS `tbl_votes` (
  `Vote_ID` int(30) NOT NULL AUTO_INCREMENT,
  `Unique_ID` int(30) NOT NULL,
  `Nominee_ID` int(30) NOT NULL,
  `Nominee_Position` varchar(20) NOT NULL,
  `Date_Voted` date NOT NULL,
  PRIMARY KEY (`Vote_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `tbl_votes`
--

INSERT INTO `tbl_votes` (`Vote_ID`, `Unique_ID`, `Nominee_ID`, `Nominee_Position`, `Date_Voted`) VALUES
(19, 20, 100, 'Governor', '2012-03-20'),
(20, 9, 99, 'Governor', '2012-03-20'),
(21, 18, 101, 'Governor', '2012-03-20'),
(22, 23, 103, 'Board_Member', '2012-03-20'),
(23, 23, 106, 'Board_Member', '2012-03-20'),
(24, 23, 107, 'Board_Member', '2012-03-20'),
(25, 23, 102, 'Board_Member', '2012-03-20'),
(26, 23, 100, 'Governor', '2012-03-20'),
(27, 23, 104, 'Vice_Governor', '2012-03-20'),
(28, 24, 108, 'Governor', '2012-03-20'),
(29, 24, 104, 'Vice_Governor', '2012-03-20'),
(30, 24, 102, 'Board_Member', '2012-03-20'),
(31, 24, 103, 'Board_Member', '2012-03-20'),
(32, 24, 107, 'Board_Member', '2012-03-20'),
(33, 27, 109, 'Vice_Governor', '2012-03-20'),
(34, 27, 102, 'Board_Member', '2012-03-20'),
(35, 27, 107, 'Board_Member', '2012-03-20'),
(36, 27, 106, 'Board_Member', '2012-03-20'),
(37, 27, 108, 'Governor', '2012-03-20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
