-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 07, 2016 at 11:32 AM
-- Server version: 10.1.18-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id138370_30_behr`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(6) UNSIGNED NOT NULL,
  `price` double(16,4) NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `model` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `province` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `image` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `price`, `createDate`, `model`, `type`, `name`, `province`, `age`, `image`) VALUES
(224, 400.0000, '2016-11-01 14:42:46', 'audi', 'sedan', 'davey', 'limpopo', 2015, 'uploads/2016-audi-a4-1 large(2).jpg'),
(226, 700.0000, '0000-00-00 00:00:00', 'volvo', 'fiat', 'andycandy', 'gauteng', 2010, 'uploads/honda.jpg'),
(227, 350.0000, '0000-00-00 00:00:00', 'volvo', 'fiat', 'lisacuddy', 'gauteng', 2015, 'uploads/ford.jpg'),
(248, 350.0000, '2016-10-12 20:49:35', 'audi', 'SUV', 'davey', 'gauteng', 2015, 'uploads/carSill.png'),
(252, 350.0000, '2016-10-12 18:28:28', 'bmw', 'hatchback', 'candyland', 'gauteng', 2003, 'uploads/376458_16_rx-vision_h.jpg'),
(253, 12.0000, '2016-10-12 20:07:26', 'audi', 'SUV', 'davey', 'gauteng', 12, 'uploads/carSill.png'),
(254, 12.0000, '2016-10-12 20:08:16', 'audi', 'SUV', 'davey', 'gauteng', 12, 'uploads/carSill.png'),
(255, 12.0000, '2016-10-12 20:09:12', 'audi', 'SUV', 'davey', 'gauteng', 12, 'uploads/carSill.png'),
(257, 200.0000, '2016-10-12 20:26:59', 'honda', 'sedan', 'deanybaby', 'gauteng', 204, 'uploads/honda.jpg'),
(258, 200.0000, '2016-11-05 17:53:42', 'nissan', 'hatchback', 'avi', 'eastern cape', 2004, 'uploads/citroen-DS3-3d-model.jpg'),
(259, 60.0000, '2016-11-06 21:53:21', 'audi', 'SUV', 'cookiecat', 'gauteng', 2016, 'uploads/Dodge-Charger-Police-Car-12--pTRU1-13676535dt.jpg'),
(266, 300.0000, '2016-11-07 11:17:50', 'citroen', 'hatchback', 'avi', 'nortthen cape', 2009, 'uploads/7784.jpg'),
(267, 350000.0000, '2016-11-07 11:29:33', 'honda', '4x4', 'avi', 'gauteng', 2005, 'uploads/2015-Jeep-Wrangler-Rubicon.jpg'),
(268, 200.0000, '2016-11-07 11:30:17', 'nissan', 'sedan', 'avi', 'gauteng', 2003, 'uploads/2012-nissan-murano-crosscabriolet-photo-421821-s-original.jpg'),
(269, 500.0000, '2016-11-07 11:31:16', 'fiat', 'hatchback', 'avi', 'free state', 2015, 'uploads/fiat-500-c-07.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `fromUser` varchar(50) NOT NULL,
  `toUser` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`fromUser`, `toUser`, `message`, `time`) VALUES
('davey', 'andycandy', 'hey', '2016-10-07 14:14:17'),
('andycandy', 'davey', 'hey man, im really interested in that alpha that you are selling but the price is a bit high', '2016-10-07 14:45:16'),
('davey', 'andycandy', 'hey you sexy beast', '2016-10-07 15:00:12'),
('davey', 'andycandy', 'hey', '2016-10-07 18:13:34'),
('davey', 'andycandy', 'hey there u sexy beast', '2016-10-12 09:47:03'),
('davey', 'avi', 'hey brother from another mother', '2016-11-05 18:55:05'),
('andycandy', 'davey', 'hey mamamamamama', '2016-11-05 18:57:44'),
('davey', 'andycandy', 'hey there you sexy beast', '2016-11-05 19:33:27'),
('cookiecat', 'davey', 'hi there', '2016-11-06 21:59:26'),
('abey', 'davey', 'hi, i am interested in your audi a4. can we arrange a meet', '2016-11-07 09:32:22');

-- --------------------------------------------------------

--
-- Table structure for table `regusers`
--

CREATE TABLE `regusers` (
  `id` int(6) UNSIGNED NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cell` int(11) NOT NULL,
  `password` varchar(30) NOT NULL,
  `about` text NOT NULL,
  `location` text NOT NULL,
  `profilepic` varchar(70) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regusers`
--

INSERT INTO `regusers` (`id`, `fullname`, `username`, `email`, `cell`, `password`, `about`, `location`, `profilepic`, `admin`) VALUES
(67, 'david behr', 'davey', '1', 0, '152638', 'i live in california', 'cansas', 'uploads/wom.jpg', 0),
(69, 'andrew', 'andycandy', 'andy@gmail.com', 0, '147', 'this is a man', 'pretoria', 'uploads/man.jpg', 1),
(76, 'dave', 'davey', '1', 0, '12', 'i live in california', 'cansas', 'uploads/wom.jpg', 0),
(77, 'dan', 'davey', '1', 0, '5', 'i live in california', 'cansas', 'uploads/wom.jpg', 0),
(79, 'candice', 'candyland', 'candice@gmail.com', 0, '145', 'im a sweet lady', '', 'uploads/david.jpg', 0),
(80, 'dean', 'deanybaby', 'dean@gmail.com', 0, '142', '', '', 'uploads/ilop_mega_man_helmet_knit_cap_person.jpg', 0),
(81, 'aviv', 'avi', 'aviv@tel.com', 0, '147', '', '', '', 0),
(82, 'steven universe', 'cookiecat', 'su@gmail.com', 0, 'pearl', 'jhbjhbjhb', '', 'uploads/4b38c4e56eae72d2a8e157dd653725ec.jpg', 1),
(83, 'keegan', 'keegy', 'keeg@gmail.com', 0, '147', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `user` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `postedBy` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`user`, `id`, `postedBy`) VALUES
('andycandy', 224, 'davey'),
('andycandy', 227, 'lisacuddy'),
('davey', 259, 'cookiecat'),
('davey', 260, 'abey');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `regusers`
--
ALTER TABLE `regusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=270;
--
-- AUTO_INCREMENT for table `regusers`
--
ALTER TABLE `regusers`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
