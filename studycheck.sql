-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 05, 2018 at 09:32 AM
-- Server version: 5.7.17-log
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studycheck`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `CLASS_ID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `SUBJECT_ID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `DATE` date NOT NULL,
  `TIME` time NOT NULL,
  `STATUS` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `class_check`
--

CREATE TABLE `class_check` (
  `ID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `CLASS_ID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `DATE` date NOT NULL,
  `TIME` time NOT NULL,
  `STUDENT_ID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `STATUS` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `studen_info`
--

CREATE TABLE `studen_info` (
  `STUDEN_ID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `STUDEN_CODE` int(11) UNSIGNED ZEROFILL NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `TEL` varchar(15) NOT NULL,
  `SEX` varchar(10) NOT NULL,
  `AGE` int(2) NOT NULL,
  `BLOOD_TYPE` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studen_info`
--

INSERT INTO `studen_info` (`STUDEN_ID`, `STUDEN_CODE`, `NAME`, `ADDRESS`, `TEL`, `SEX`, `AGE`, `BLOOD_TYPE`) VALUES
(0000000002, 00000089898, 'yuyuyu', 'ghjhjfbmn', '676767', 'female', 22, 'AB+'),
(0000000003, 04294967295, 'นายนัก ศึกษา', 'เลขที่ 2 ถนนราชธานี ตำบลในเมือง อำเภอเมือง จังหวัดอุบลราชธานี 34000', '0880310125', 'male', 24, 'AB-');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `SUBJECT_ID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `SUBJECT_NAME` varchar(50) NOT NULL,
  `SUBJECT_CODE` int(10) NOT NULL,
  `TEACHER_CODE` int(10) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`SUBJECT_ID`, `SUBJECT_NAME`, `SUBJECT_CODE`, `TEACHER_CODE`) VALUES
(0000000001, 'bbbbbb', 11110909, 0000000002),
(0000000002, 'bvbvbv', 21212, 0000000002),
(0000000004, 'วิชาทดสอบ', 123456789, 0000000002);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `TEACHER_ID` int(5) UNSIGNED ZEROFILL NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `TEL` varchar(15) NOT NULL,
  `TYPE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`TEACHER_ID`, `NAME`, `USERNAME`, `PASSWORD`, `TEL`, `TYPE`) VALUES
(00001, 'Administrator', 'admin', 'admin1234', '0880310125', 'admin'),
(00002, 'teacher', '1234', '1234', '123321', 'teacher'),
(00003, 'fdfg', '333', '333', 'rtert', 'teacher'),
(00004, 'name', 'add', 'add', '1323', 'admin'),
(00006, 'ปปป', '444', '44444', '1414', 'teacher'),
(00007, 'hhhhh', '55555', '55555', '555', 'teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`CLASS_ID`);

--
-- Indexes for table `class_check`
--
ALTER TABLE `class_check`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `studen_info`
--
ALTER TABLE `studen_info`
  ADD PRIMARY KEY (`STUDEN_ID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`SUBJECT_ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`TEACHER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `CLASS_ID` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `class_check`
--
ALTER TABLE `class_check`
  MODIFY `ID` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `studen_info`
--
ALTER TABLE `studen_info`
  MODIFY `STUDEN_ID` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `SUBJECT_ID` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `TEACHER_ID` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
