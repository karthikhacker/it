-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 20, 2016 at 03:59 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `it`
--

-- --------------------------------------------------------

--
-- Table structure for table `actress_movies_list`
--

CREATE TABLE IF NOT EXISTS `actress_movies_list` (
  `id` int(11) NOT NULL,
  `actress_profile_id` int(11) NOT NULL,
  `actress_name` varchar(20) NOT NULL,
  `movie_name` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `lang` varchar(20) NOT NULL,
  `notes` varchar(20) NOT NULL,
  `as_director` varchar(20) NOT NULL,
  `as_singer` varchar(20) NOT NULL,
  `talk_show` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actress_movies_list`
--

INSERT INTO `actress_movies_list` (`id`, `actress_profile_id`, `actress_name`, `movie_name`, `year`, `role`, `lang`, `notes`, `as_director`, `as_singer`, `talk_show`) VALUES
(1, 1, 'Anushka', 'singam', '2011', 'college girl', 'Tamil', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `actress_profile`
--

CREATE TABLE IF NOT EXISTS `actress_profile` (
  `id` int(11) NOT NULL,
  `subjectp_id` int(11) NOT NULL,
  `actress_name` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `husband` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `Children` varchar(20) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `debu` varchar(20) NOT NULL,
  `image` varchar(20) NOT NULL,
  `talk_show` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actress_profile`
--

INSERT INTO `actress_profile` (`id`, `subjectp_id`, `actress_name`, `dob`, `fullname`, `husband`, `nationality`, `Children`, `occupation`, `debu`, `image`, `talk_show`) VALUES
(1, 1, 'Anushka', '12/12/12', 'Anushka shetty', '', 'Indian', '', 'actress', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `asubject`
--

CREATE TABLE IF NOT EXISTS `asubject` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asubject`
--

INSERT INTO `asubject` (`id`, `subject_name`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'E'),
(6, 'F'),
(7, 'G'),
(8, 'H'),
(9, 'I'),
(10, 'J'),
(11, 'K'),
(12, 'L'),
(13, 'M'),
(14, 'N'),
(15, 'O'),
(16, 'P'),
(17, 'Q'),
(18, 'R'),
(19, 'S'),
(20, 'T'),
(21, 'U'),
(22, 'V'),
(23, 'W'),
(24, 'X'),
(25, 'Y'),
(26, 'Z');

-- --------------------------------------------------------

--
-- Table structure for table `director_movies_list`
--

CREATE TABLE IF NOT EXISTS `director_movies_list` (
  `id` int(11) NOT NULL,
  `director_profile_id` int(11) NOT NULL,
  `director_name` varchar(20) NOT NULL,
  `movie_name` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `lang` varchar(20) NOT NULL,
  `notes` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `director_movies_list`
--

INSERT INTO `director_movies_list` (`id`, `director_profile_id`, `director_name`, `movie_name`, `year`, `role`, `lang`, `notes`) VALUES
(1, 1, 'A.R.Murugadoss', 'Gajini', '2007', 'Director', 'Tamil', '');

-- --------------------------------------------------------

--
-- Table structure for table `director_profile`
--

CREATE TABLE IF NOT EXISTS `director_profile` (
  `id` int(11) NOT NULL,
  `subjectp_id` int(11) NOT NULL,
  `director_name` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `debu` varchar(20) NOT NULL,
  `image` text NOT NULL,
  `talk_show` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `director_profile`
--

INSERT INTO `director_profile` (`id`, `subjectp_id`, `director_name`, `dob`, `fullname`, `nationality`, `occupation`, `debu`, `image`, `talk_show`) VALUES
(1, 1, 'A.R.Murugadoss', '11/11/11', 'A.R.Murugadoss', 'Indian', 'director', 'Ramana', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `actor_name` varchar(20) NOT NULL,
  `movie_name` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `lang` varchar(20) NOT NULL,
  `notes` varchar(20) NOT NULL,
  `as_director` varchar(20) NOT NULL,
  `as_singer` varchar(20) NOT NULL,
  `talk_show` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `profile_id`, `actor_name`, `movie_name`, `year`, `role`, `lang`, `notes`, `as_director`, `as_singer`, `talk_show`) VALUES
(1, 1, 'Ajith kumar', 'Arambam', '2014', 'Army officer', 'Tamil', '', 'as director', '', 'coming soon...'),
(2, 1, '', 'Veeram', '2013', 'Elder brother', 'Tamil', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `movies_month`
--

CREATE TABLE IF NOT EXISTS `movies_month` (
  `id` int(11) NOT NULL,
  `month` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies_month`
--

INSERT INTO `movies_month` (`id`, `month`) VALUES
(1, 'Jan'),
(2, 'Feb'),
(3, 'Mar'),
(4, 'Apr'),
(5, 'May'),
(6, 'June'),
(7, 'July'),
(8, 'Aug'),
(9, 'Sep'),
(10, 'Oct'),
(11, 'Nov'),
(12, 'Dec');

-- --------------------------------------------------------

--
-- Table structure for table `movies_page_main`
--

CREATE TABLE IF NOT EXISTS `movies_page_main` (
  `id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `month_id` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `month` varchar(20) NOT NULL,
  `movie_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies_page_main`
--

INSERT INTO `movies_page_main` (`id`, `year_id`, `month_id`, `year`, `month`, `movie_name`) VALUES
(1, 1, '', '1985', 'Jan', 'Billa'),
(4, 1, '', '', '', 'Billa2'),
(5, 1, '', '', 'Feb', 'Titanic'),
(6, 2, '', '1986', 'Jan', 'Fast furious2'),
(7, 2, '', '', 'Feb', 'Fast and furious 3'),
(8, 3, '3', '1987', 'Jan', 'Arambam');

-- --------------------------------------------------------

--
-- Table structure for table `movies_profile`
--

CREATE TABLE IF NOT EXISTS `movies_profile` (
  `id` int(11) NOT NULL,
  `movies_page_id` int(11) NOT NULL,
  `movie_name` varchar(20) NOT NULL,
  `director` varchar(20) NOT NULL,
  `music_director` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `producer` varchar(20) NOT NULL,
  `lang` varchar(20) NOT NULL,
  `movie_review` text NOT NULL,
  `movie_video` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies_profile`
--

INSERT INTO `movies_profile` (`id`, `movies_page_id`, `movie_name`, `director`, `music_director`, `year`, `producer`, `lang`, `movie_review`, `movie_video`) VALUES
(2, 1, 'Billa', 'Vishnu vardan', 'Yuvan', '2007', 'Sun pictures', 'Tamil', '', 'coming soon..'),
(3, 8, 'Arambam', 'Vishnu vardan', 'Yuvan', '1987', 'Sun pictures', 'Tamil', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `movies_year`
--

CREATE TABLE IF NOT EXISTS `movies_year` (
  `id` int(11) NOT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies_year`
--

INSERT INTO `movies_year` (`id`, `year`) VALUES
(1, '1985'),
(2, '1986'),
(3, '1987'),
(4, '1988'),
(5, '1989'),
(6, '1990'),
(7, '1991'),
(8, '1992'),
(9, '1993'),
(10, '1994'),
(11, '1995'),
(12, '1996'),
(13, '1997'),
(14, '1998');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL,
  `subjectp_id` int(11) NOT NULL,
  `actor_name` varchar(20) NOT NULL,
  `actress_name` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `spouse` varchar(20) NOT NULL,
  `children` varchar(20) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `debu` varchar(20) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `subjectp_id`, `actor_name`, `actress_name`, `dob`, `fullname`, `nationality`, `spouse`, `children`, `occupation`, `debu`, `image`) VALUES
(1, 1, 'Ajith', '', '11/11/11', 'Ajith Kumar', 'Indian', 'shalini', 'Anushka', 'actor', 'Amaravathi', ''),
(2, 8, 'Surya', '', '12/12/12', 'Surya Sivakumar', 'Indian', 'Joythika', 'Diya,Dev', 'actor', 'Friends', '');

-- --------------------------------------------------------

--
-- Table structure for table `subjectp`
--

CREATE TABLE IF NOT EXISTS `subjectp` (
  `id` int(11) NOT NULL,
  `asubject_id` int(11) NOT NULL,
  `subject_n` varchar(20) NOT NULL,
  `actor_n` varchar(20) NOT NULL,
  `actress_name` varchar(20) NOT NULL,
  `director` varchar(20) NOT NULL,
  `music_director` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjectp`
--

INSERT INTO `subjectp` (`id`, `asubject_id`, `subject_n`, `actor_n`, `actress_name`, `director`, `music_director`) VALUES
(1, 1, 'A', 'Ajith', 'Anushka', 'A.R.Murugadoss', ''),
(2, 1, '', 'Arvind', 'Anjali', '', ''),
(3, 2, 'B', 'Boman', 'Bomika', '', ''),
(4, 2, '', 'Balaji', '', '', ''),
(5, 3, 'C', 'Chiranjeevi', '', '', ''),
(6, 3, '', '', '', '', ''),
(7, 4, 'D', 'Don', '', '', ''),
(8, 19, 'S', 'Surya', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actress_movies_list`
--
ALTER TABLE `actress_movies_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `actress_profile`
--
ALTER TABLE `actress_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asubject`
--
ALTER TABLE `asubject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `director_movies_list`
--
ALTER TABLE `director_movies_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `director_profile`
--
ALTER TABLE `director_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies_month`
--
ALTER TABLE `movies_month`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies_page_main`
--
ALTER TABLE `movies_page_main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies_profile`
--
ALTER TABLE `movies_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies_year`
--
ALTER TABLE `movies_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjectp`
--
ALTER TABLE `subjectp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actress_movies_list`
--
ALTER TABLE `actress_movies_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `actress_profile`
--
ALTER TABLE `actress_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `asubject`
--
ALTER TABLE `asubject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `director_movies_list`
--
ALTER TABLE `director_movies_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `director_profile`
--
ALTER TABLE `director_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `movies_month`
--
ALTER TABLE `movies_month`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `movies_page_main`
--
ALTER TABLE `movies_page_main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `movies_profile`
--
ALTER TABLE `movies_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `movies_year`
--
ALTER TABLE `movies_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subjectp`
--
ALTER TABLE `subjectp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
