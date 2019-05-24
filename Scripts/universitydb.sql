-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2019 at 05:13 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universitydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseNo` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `createDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseNo`, `name`, `description`, `createDate`) VALUES
(2000, 'Hygiene', 'Total body and dental hygiene ', '2019-05-12'),
(2001, 'Chemistry', 'Mineral Chemistry used in pharmacy ', '2019-05-12'),
(2002, 'Oracle', 'Database developing using PL/SQL', '2019-05-12'),
(2003, 'Karaoke ', 'Karaoke on Spanish musics', '2019-05-12'),
(2004, 'Java ', 'fundamental skills in Java programming', '2019-05-12'),
(2005, 'Painting', 'Painting skills with oil color', '2019-05-12'),
(2006, 'Electronics', 'Electronic circuits using in medical devices', '2019-05-12'),
(2007, 'Anatomy ', 'Anatomy of animal\'s body', '2019-05-12'),
(2008, 'MySQL', 'Database management with phpMyadmin', '2019-05-12'),
(2009, 'Zumba', 'Traditional latino dance ', '2019-05-12'),
(2010, 'Professional cooking', 'How to cook for main course of hotels and five star restaurants', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `Id` int(11) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Header_Text` varchar(200) NOT NULL,
  `Description_Text` varchar(1000) NOT NULL,
  `Link_Address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`Id`, `Image`, `Header_Text`, `Description_Text`, `Link_Address`) VALUES
(1, './Images/main_slider_student.jpg', 'Graduation Ceremony', '', 'http://www.afe.gouv.qc.ca/'),
(2, './Images/main_slider_teacher.jpg', 'Welcome to University', '', 'https://www.rbcroyalbank.com/personal.html');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentNo` int(10) NOT NULL,
  `fName` varchar(20) NOT NULL DEFAULT 'First name',
  `lName` varchar(20) NOT NULL DEFAULT 'Last name',
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL DEFAULT '%@%.%',
  `address` varchar(50) NOT NULL,
  `major` varchar(20) NOT NULL,
  `supervisor` int(10) NOT NULL,
  `createDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentNo`, `fName`, `lName`, `username`, `password`, `tel`, `email`, `address`, `major`, `supervisor`, `createDate`) VALUES
(2019001, 'Nasim ', 'Naji', 'nas2019', '12345678', '5145851285', 'nasim.naji85@gmail.com', '200 Lincoln ', 'Pharmacy', 1001, '2019-05-12'),
(2019002, 'Ammar', 'Naghdi', 'amma', '87654321', '5149426791', 'ammarna1985@gmail.com', '45 Sherbrooke W', 'Programming ', 1003, '2019-05-12'),
(2019003, 'Mohammad', 'Kojouri', 'moko', '11111111', '4389269855', 'signal_1983@yahoo.com', '34 Cote Luc', 'Medical engineering ', 1004, '2019-05-12'),
(2019004, 'Elizabeth', 'Gonzalez', 'eli', '121212', '4563451236', 'eli@vanier.ca', '367 Nuns', 'Database developing', 1003, '2019-05-12'),
(2019005, 'Kim', 'Kardashian', 'kimi', '3333', '2347895678', 'kim@kardashian.com', '34 Beverly hills', 'Music', 1002, '2019-05-12'),
(2019006, 'Negar', 'Rad', 'neg', '10101010', '45789123455', 'neg@paint.org', '45 Aliso viejo ', 'Graphic design', 1002, '2019-05-12'),
(2019007, 'Ricky', 'Martin', 'rick', '9988', '6578904532', 'rick@music.net', '66 Hollywood ', 'Music', 1002, '2019-05-12'),
(2019008, 'Farnoosh', 'Fath', 'farfar', '323232', '5436789230', 'far@bank.ca', '34 Westmount', 'Dentistry', 1001, '2019-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacherID` int(10) NOT NULL,
  `fName` varchar(20) NOT NULL DEFAULT 'First Name',
  `lName` varchar(20) NOT NULL DEFAULT 'Last Name',
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL DEFAULT '%@%.%',
  `address` varchar(50) NOT NULL,
  `field` varchar(25) DEFAULT NULL,
  `createDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacherID`, `fName`, `lName`, `username`, `password`, `tel`, `email`, `address`, `field`, `createDate`) VALUES
(1001, 'Mona', 'Hasan', 'mon21', '2121', '4563421212', 'mona@dr.com', '422 Laval', 'Medicine ', '2019-05-12'),
(1002, 'Salvador', 'Dali', 'sal3', '333333', '5453334533', 'sal@paint.music', '98 Barcelona ', 'Art', '2019-05-12'),
(1003, 'Tassia', 'Araujo', 'tass2', '223232', '2324562312', 'tassia@linux.com', '98 Concordia', 'Computer', '2019-05-12'),
(1004, 'Ali', 'Yavar', 'aliy', '564534', '6765432323', 'ali@engineering.org', '45 Tehran', 'Engineering', '2019-05-12'),
(1005, 'Abbas', 'Kia Rostami', '', '', '2346780098', 'aba@art.org', '237 dr lia', 'Art', '0000-00-00'),
(1006, 'Rayan', 'Brie', '', '', '3478900098', 'ry@edu.org', '34 Ryerson St.', 'Medicine', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `thumbnail`
--

CREATE TABLE `thumbnail` (
  `Id` int(11) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Header_Text` varchar(200) NOT NULL,
  `Description_Text` varchar(1000) NOT NULL,
  `Link_Address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thumbnail`
--

INSERT INTO `thumbnail` (`Id`, `Image`, `Header_Text`, `Description_Text`, `Link_Address`) VALUES
(1, './Images/main_thumbnail_student.jpg', 'Students', 'Click to enter the students page', './student.php'),
(2, './Images/main_thumbnail_teacher.jpg', 'Teachers', 'Click to go to teachers page', './teacher.php'),
(3, './Images/main_thumbnail_course.jpg', 'Courses', 'Please visit our website', './course.php'),
(4, './Images/main_thumbnail_news.jpg', 'News', 'click to enter BBC', 'https://www.bbc.com/news');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `gender`, `first_name`, `last_name`, `phonenumber`, `password_hash`) VALUES
(1, 'ammarna1985', '', '', 'Ammar', 'Naghdali Foroushani', '', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseNo`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentNo`),
  ADD KEY `supervisor` (`supervisor`),
  ADD KEY `supervisor_2` (`supervisor`),
  ADD KEY `supervisor_3` (`supervisor`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacherID`);

--
-- Indexes for table `thumbnail`
--
ALTER TABLE `thumbnail`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courseNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2012;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2019022;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacherID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;

--
-- AUTO_INCREMENT for table `thumbnail`
--
ALTER TABLE `thumbnail`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fk_supervisor` FOREIGN KEY (`supervisor`) REFERENCES `teacher` (`teacherID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
