-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2017 at 10:38 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dating`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `sender` varchar(50) NOT NULL,
  `title` varchar(30) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`sender`, `title`, `message`) VALUES
('spark', 'Whats up kids ?', 'Going out for jogging. PM if you want to join!'),
('batboy83', '123', 'sadsa'),
('batboy83', 'sdasdaadsa', 'dassdasaddasdas');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `title` varchar(30) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`sender`, `receiver`, `title`, `message`) VALUES
('pussycat940', 'wonderwoman774', 'Communism?', 'DO not talk to them when the eye is open!'),
('wonderwoman774', 'spark', 'about batboy', 'did you hear what happened?'),
('spark', 'wonderwoman774', 're: about batboy', 'yeah ... omg isnt that horrible! I heard he got raped by bats as well!'),
('tonny', 'batboy83', 'heard what happened', 'dude you are embarrassing... get poor or start acting rich'),
('batboy83', 'tonny', 'bite me', 'Dont you have anything else to do? go spend your money on something kid, some of us have to be real superheroes!'),
('batboy83', 'pussycat940', 'umm. ..', 'Are you awake ??'),
('batboy83', 'tonny', 'being a jerk', 'bite me stark'),
('batboy83', 'spark', 'Nothing im just glad it works', ':)'),
('batboy83', 'spark', 'Nothing im just glad it works', ':)');

-- --------------------------------------------------------

--
-- Table structure for table `superclient`
--

CREATE TABLE `superclient` (
  `nickname` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` date NOT NULL,
  `superpower` varchar(60) NOT NULL,
  `likes` int(10) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superclient`
--

INSERT INTO `superclient` (`nickname`, `name`, `age`, `superpower`, `likes`, `image`) VALUES
('batboy83', 'Batman', '1939-11-21', 'Rich and sad', 0, 'https://www.technobuffalo.com/wp-content/uploads/2015/04/batman-suit-002-200x200.jpg'),
('pussycat940', 'Cat Woman', '1940-03-14', 'drink milk with nose', 0, 'http://d111vui60acwyt.cloudfront.net/product_photos/24763314/lorettavampz-catwoman-chrisgomez-3164cgweb_200sq.jpg'),
('spark', 'The Flash', '1995-11-17', 'Super fast!', 0, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWMfMy_GY1Cu_Qow-DiS_ktxLfx_2XuVLfdv9mAUsg8S8wU2Qy'),
('tonny', 'Ironman', '1980-04-16', 'Richer than batboy', 0, 'https://qph.ec.quoracdn.net/main-thumb-t-2958-200-sfSHRVI4EmQN3SzcIylIU1M3Tud29qyP.jpeg'),
('wonderwoman774', 'Wonder Woman', '1011-11-14', 'Strong, Legs', 0, 'https://static1.squarespace.com/static/55d6264ee4b074f43cec4558/t/593ec17c20099e29fa0b1b81/1497285078581/wonder+woman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `superclient`
--
ALTER TABLE `superclient`
  ADD PRIMARY KEY (`nickname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
