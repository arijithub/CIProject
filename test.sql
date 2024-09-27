-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2018 at 10:59 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `address` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `address`) VALUES
(3, 'About', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `y_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `y_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `phone`, `y_email`, `y_password`, `picture`, `gender`, `created`, `modified`, `status`) VALUES
(28, 'ARIJIT ', '7003043809', 'arijitjana@gmail.com', '123', 'cats.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contab`
--

CREATE TABLE `contab` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `comments` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cust`
--

CREATE TABLE `cust` (
  `cid` int(11) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `course` varchar(200) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `dept`, `course`, `picture`, `name`, `designation`, `qualification`) VALUES
(1, 'COMMERCE', 'U.G.', 'Penguins.jpg', 'TTR', 'Assistant Professor', 'M.COM, M-Phil, PHD'),
(2, 'English', 'U.G.', 'Koala.jpg', 'Smt. Anwesha Sengupta ', 'Govt Approved Contructual Teacher', 'M.A, B.Ed'),
(3, 'English', 'P.G.', 'e21.jpg', 'Dr. Oindrila Ghosh ', 'Assistant Professor', 'M.A, Ph.D'),
(4, 'Bengali', 'U.G.', 'fc2.jpg', 'Dr. Sumit Kumar Debnath ', 'Assistant Professor ', 'M.A., B.Ed., Ph.D.'),
(5, 'History', 'U.G.', 'b1.jpg', 'Rohan Mondal', 'Assistant Professor', 'M.A., P.H.D.'),
(6, 'Physics', 'U.G.', 't16.jpg', 'Arindam', 'Professor', 'Msc'),
(7, 'Mathematics', 'U.G.', '111.jpg', 'Sukamal', 'Professor', 'P.H.D'),
(8, 'Chemistry', 'U.G.', 'e3.jpg', 'Amit Sarkar', 'Professor', 'P.H.D'),
(9, 'Bengali', 'U.G.', 'fc5.jpg', 'rajesh biswas', 'Ass. Professor', 'M.Phil'),
(10, 'Bengali', 'P.G.', 't11.jpg', 'Sujata Das', 'Ass. Professor', 'P.H.D'),
(11, 'Bengali', 'P.G.', 'fc7.jpg', 'Rohan Biswas', 'Ass. Professor', 'P.H.D'),
(12, 'Bengali', 'P.G.', 'abt1.jpg', 'Paramita Das', 'Ass. Professor', 'P.H.D'),
(13, 'Mathematics', 'P.G.', 'fc.jpg', 'Ranjan Samanta', 'Professor', 'P.H.D'),
(14, 'Physics', 'U.G.', 'team4.jpg', 'Sunhasis', 'Manna', 'M.Phil'),
(15, 'History', 'P.G.', 't6.jpg', 'Manjury Roy', 'Ass. Professor', 'M.Phil'),
(16, 'History', 'U.G.', 'team1.jpg', 'Ratan Barui', 'Ass. Professor', 'M.Phil'),
(17, 'History', 'P.G.', 'fc21.jpg', 'Raghunatha Satra', 'Ass. Professor', 'M.Phil');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `picture1` varchar(255) NOT NULL,
  `picture2` varchar(255) NOT NULL,
  `picture3` varchar(233) NOT NULL,
  `picture4` varchar(244) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `title`, `address`, `picture`, `picture1`, `picture2`, `picture3`, `picture4`, `created`, `modified`, `status`) VALUES
(7, 'Ramkrishna Mission school', 'Narendrapur', '131.jpg', '141.jpg', '161.jpg', 'b15.jpg', 'db32.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stu`
--

CREATE TABLE `stu` (
  `id` int(11) NOT NULL,
  `stid` int(10) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu`
--

INSERT INTO `stu` (`id`, `stid`, `sname`, `course`, `marks`) VALUES
(1, 1200, 'Nabajit', 'Oracle', 67),
(2, 1985, 'Dipraj', 'Java', 78),
(3, 1658, 'Debanjan', 'DPFA', 100),
(4, 1853, 'Soumya', 'SQL', 98),
(5, 1482, 'Pappu', 'J2EE', 74),
(6, 1052, 'Deeptanshu', '.NET', 88);

-- --------------------------------------------------------

--
-- Table structure for table `userdet`
--

CREATE TABLE `userdet` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdet`
--

INSERT INTO `userdet` (`id`, `username`, `password`, `image`) VALUES
(15, 'jhjjj', 'uiiuiii', 'http://localhost/pro/uploads/life.jpg'),
(16, 'jhjjj', 'uiiuiii', 'http://localhost/pro/uploads/sherlock-holmes-23032.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contab`
--
ALTER TABLE `contab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cust`
--
ALTER TABLE `cust`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stu`
--
ALTER TABLE `stu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdet`
--
ALTER TABLE `userdet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contab`
--
ALTER TABLE `contab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cust`
--
ALTER TABLE `cust`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stu`
--
ALTER TABLE `stu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userdet`
--
ALTER TABLE `userdet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
