-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 05:41 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iiitrentry`
--

-- --------------------------------------------------------

--
-- Table structure for table `acadblockentry`
--

CREATE TABLE `acadblockentry` (
  `id` int(120) NOT NULL,
  `entreename` char(80) NOT NULL,
  `rollno` varchar(70) NOT NULL,
  `mobno` bigint(100) NOT NULL,
  `room` varchar(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `day` time NOT NULL DEFAULT current_timestamp(),
  `dateandtime` datetime NOT NULL DEFAULT current_timestamp(),
  `leavingtime` datetime NOT NULL,
  `remarks` varchar(500) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acadblockentry`
--

INSERT INTO `acadblockentry` (`id`, `entreename`, `rollno`, `mobno`, `room`, `date`, `day`, `dateandtime`, `leavingtime`, `remarks`, `email`) VALUES
(20, 'Achal Sayee', 'CS21B1006', 9398088463, 'Lab 4', '2022-06-02', '18:48:40', '2022-06-02 18:48:40', '2022-06-08 09:48:07', 'returned', 'cs21b1006@iiitr.ac.in'),
(21, 'Achal Sayee', 'CS21B1006', 9398088463, 'Lab 1', '2022-06-02', '18:48:49', '2022-06-02 18:48:49', '2022-06-08 09:48:21', 'returned', 'cs21b1006@iiitr.ac.in'),
(22, 'Achal Sayee', 'CS21B1008', 9398088463, 'Seminar Hall', '2022-06-02', '18:49:00', '2022-06-02 18:49:00', '0000-00-00 00:00:00', '', 'cs21b1008@iiitr.ac.in'),
(23, 'Deep Patel', 'CS21B1008', 543543, 'Lab 2', '2022-06-07', '23:07:37', '2022-06-07 23:07:37', '0000-00-00 00:00:00', '', 'cs21b1008@iiitr.ac.in'),
(24, 'Pratham Jain', 'CS21B1021', 9368784534, 'Lab 1', '2022-06-07', '23:10:02', '2022-06-07 23:10:02', '0000-00-00 00:00:00', '', 'cs21b1021@iiitr.ac.in'),
(25, 'Prayas Raj', 'CS21B1022', 8899286563, 'Seminar Hall', '2022-06-07', '23:11:10', '2022-06-07 23:11:10', '0000-00-00 00:00:00', '', 'cs21b1022@iiitr.ac.in'),
(26, 'Prince Keshri', 'CS21B1023', 543543, 'Classroom 3', '2022-06-07', '23:11:52', '2022-06-07 23:11:52', '0000-00-00 00:00:00', '', 'cs21b1023@iiitr.ac.in'),
(27, 'Sanidhaya Sharma', 'CS21B1024', 6516515, 'Seminar Hall', '2022-06-07', '23:12:26', '2022-06-07 23:12:26', '0000-00-00 00:00:00', '', 'cs21b1024@iiitr.ac.in'),
(28, 'Aditya Raj', 'CS21B1001', 9368784534, 'Lab 4', '2022-06-07', '23:13:35', '2022-06-07 23:13:35', '2022-06-08 09:48:31', 'returned', 'cs21b1001@iiitr.ac.in'),
(29, 'Bhawani Shankar Dhawal', 'CS21B1005', 9398088463, 'Classroom 4', '2022-06-07', '23:14:21', '2022-06-07 23:14:21', '0000-00-00 00:00:00', '', 'cs21b1005@iiitr.ac.in'),
(30, 'Manish Kumar', 'CS21B1010', 8899286563, 'Seminar Hall', '2022-06-07', '23:15:13', '2022-06-07 23:15:13', '0000-00-00 00:00:00', '', 'cs21b1010@iiitr.ac.in'),
(31, 'Parth Goel', 'CS21B1018', 9368784534, 'Lab 2', '2022-06-07', '23:15:51', '2022-06-07 23:15:51', '2022-06-08 09:48:37', 'returned', 'cs21b1018@iiitr.ac.in'),
(32, 'Piyush Anand', 'CS21B1019', 9368784534, 'Seminar Hall', '2022-06-07', '23:16:36', '2022-06-07 23:16:36', '0000-00-00 00:00:00', '', 'cs21b1019@iiitr.ac.in'),
(33, 'Naman Kumar', 'CS21B1014', 6516515, 'Seminar Hall', '2022-06-07', '23:17:35', '2022-06-07 23:17:35', '2022-06-08 09:48:55', 'returned', 'cs21b1014@iiitr.ac.in'),
(34, 'Praveen Raj', 'CS21B1035', 8899286563, 'F-001', '2022-06-07', '23:18:17', '2022-06-07 23:18:17', '0000-00-00 00:00:00', '', 'cs21b1035@iiitr.ac.in'),
(35, 'Thaduri Manikanth', 'CS21B1037', 9368784534, 'Classroom 2', '2022-06-07', '23:19:34', '2022-06-07 23:19:34', '0000-00-00 00:00:00', '', 'cs21b1037@iiitr.ac.in'),
(36, 'Gajula Srinath', 'CS21B1041', 954854695, 'Classroom 1', '2022-06-07', '23:21:30', '2022-06-07 23:21:30', '2022-06-08 09:48:46', 'returned', 'cs21b1041@iiitr.ac.in'),
(37, 'Santosh Dodhi', 'CS21B1025', 4354363546, 'Lab 3', '2022-06-07', '23:22:23', '2022-06-07 23:22:23', '0000-00-00 00:00:00', '', 'cs21b1025@iiitr.ac.in'),
(38, 'Suraj Kumar', 'CS21B1028', 9, 'Seminar Hall', '2022-06-07', '23:23:27', '2022-06-07 23:23:27', '0000-00-00 00:00:00', '', 'cs21b1028@iiitr.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `adlogin`
--

CREATE TABLE `adlogin` (
  `ID` int(70) NOT NULL,
  `Name` varchar(70) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adlogin`
--

INSERT INTO `adlogin` (`ID`, `Name`, `Email`, `Password`) VALUES
(1, 'achal', 'cs21b1006@iiitr.ac.in', '123'),
(2, 'sani', 'cs21b1024@iiitr.ac.in', 'oreo'),
(4, 'disha', 'cs21b1033@iiitr.ac.in', 'backend'),
(5, 'anushka', 'cs21b1032@iiitr.ac.in', '1234'),
(6, 'deepika', 'cs21b1012@iiitr.ac.in', 'lab4');

-- --------------------------------------------------------

--
-- Table structure for table `hostelentry`
--

CREATE TABLE `hostelentry` (
  `id` int(11) NOT NULL,
  `entreename` char(120) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `blockname` char(40) NOT NULL,
  `roomno` varchar(20) NOT NULL,
  `mobno` bigint(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `leavingtime` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` date NOT NULL DEFAULT current_timestamp(),
  `returntime` timestamp NULL DEFAULT NULL,
  `remarks` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostelentry`
--

INSERT INTO `hostelentry` (`id`, `entreename`, `rollno`, `blockname`, `roomno`, `mobno`, `email`, `reason`, `leavingtime`, `date`, `returntime`, `remarks`) VALUES
(1, 'Achal Sayee', 'CS21B1006', 'Tungabhadra', 'F-002', 9398088463, 'cs21b1006@iiitr.ac.in', 'shopping', '2022-06-05 09:24:37', '2022-06-05', '2022-06-08 04:19:08', 'returned'),
(26, 'Prayas Raj', 'CS21B1022', 'Tungabhadra', 'F-001', 3543653464, 'cs21b1022@iiitr.ac.in', 'birthday party', '2022-06-05 09:39:05', '2022-06-05', '2022-06-09 05:50:24', 'returned\r\n'),
(27, 'Deep Patel', 'CS21B1008', 'Tungabhadra', 'F-003', 436546546, 'cs21b1008@iiitr.ac.in', 'party', '2022-06-05 09:40:11', '2022-06-05', '2022-06-08 04:21:23', 'returned'),
(28, 'Deep Patel', 'CS21B1008', 'Tungabhadra', 'F-003', 54765765, 'cs21b1008@iiitr.ac.in', 'going to atm', '2022-06-05 09:40:46', '2022-06-05', '2022-06-09 07:15:28', 'dfsjsdgf'),
(29, 'Achal Sayee', 'CS21B1006', 'Tungabhadra', 'F-002', 9398088463, 'cs21b1006@iiitr.ac.in', 'vacation', '2022-06-05 09:41:50', '2022-06-05', '2022-06-08 04:19:15', 'returned'),
(30, 'Pratham Jain', 'CS21B1021', 'Tungabhadra', 'F-003', 543664536, 'cs21b1021@iiitr.ac.in', 'picnic', '2022-06-05 09:42:32', '2022-06-05', '2022-06-08 04:20:34', 'returned'),
(31, 'Prayas Raj', 'CS21B1022', 'Tungabhadra', 'F-001', 325436, 'cs21b1022@iiitr.ac.in', 'erg', '2022-06-05 09:43:20', '2022-06-05', NULL, ''),
(32, 'Prince Keshri', 'CS21B1023', 'Tungabhadra', 'F-003', 436457, 'cs21b1023@iiitr.ac.in', 'fh', '2022-06-05 09:44:07', '2022-06-05', '2022-06-08 04:19:54', 'returned'),
(33, 'Prince Keshri', 'CS21B1023', 'Tungabhadra', 'F-003', 436457, 'cs21b1023@iiitr.ac.in', 'fh', '2022-06-05 09:46:19', '2022-06-05', NULL, ''),
(34, 'Santosh Dodhi', 'CS21B1025', 'Tungabhadra', 'F-005', 4354363546, 'cs21b1025@iiitr.ac.in', 'satsang', '2022-06-05 09:47:32', '2022-06-05', '2022-06-08 04:20:13', 'returned'),
(35, 'Piyush Anand', 'CS21B1019', 'Tungabhadra', 'F-001', 564156, 'cs21b1019@iiitr.ac.in', 'something', '2022-06-07 07:31:37', '2022-06-07', '2022-06-08 04:21:09', 'returned'),
(36, 'Polavarapu Sai Krishna', 'CS21B1020', 'Tungabhadra', 'F-008', 6516515, 'cs21b1020@iiitr.ac.in', 'something', '2022-06-07 07:32:58', '2022-06-07', NULL, ''),
(37, 'Bhawani Shankar Dhawal', 'CS21B1005', 'Tungabhadra', 'F-005', 45414156, 'cs21b1005@iiitr.ac.in', 'to meet friend', '2022-06-07 07:34:46', '2022-06-07', '2022-06-08 04:20:52', 'returned'),
(38, 'Anubhav Singh', 'CS21B1002', 'Tungabhadra', 'F-007', 65465, 'cs21b1002@iiitr.ac.in', 'atm', '2022-06-07 07:35:34', '2022-06-07', NULL, ''),
(39, 'Naman Kumar', 'CS21B1014', 'Tungabhadra', 'F-003', 4155465, 'cs21b1014@iiitr.ac.in', 'buying chips', '2022-06-07 07:36:25', '2022-06-07', '2022-06-08 04:20:25', 'returned'),
(40, 'Chittala Vivek', 'CS21B1007', 'Tungabhadra', 'F-006', 45145, 'cs21b1007@iiitr.ac.in', 'movie night', '2022-06-07 07:37:23', '2022-06-07', NULL, ''),
(41, 'Paila Akash', 'CS21B1017', 'Tungabhadra', 'F-005', 5456465226, 'cs21b1017@iiitr.ac.in', 'temple', '2022-06-07 07:38:16', '2022-06-07', '2022-06-08 04:21:00', 'returned'),
(42, 'Manish Kumar', 'CS21B1010', 'Tungabhadra', 'F-004', 954854695, 'cs21b1010@iiitr.ac.in', 'playing cricket', '2022-06-07 07:39:30', '2022-06-07', NULL, ''),
(43, 'Sanidhaya Sharma', 'CS21B1024', 'Tungabhadra', 'F-002', 8899286563, 'cs21b1024@iiitr.ac.in', 'mobile repair', '2022-06-07 07:40:12', '2022-06-07', '2022-06-08 04:20:43', 'returned'),
(47, 'Anushka Garg', 'CS21B1032', 'Tungabhadra', 'G-002', 9398087540, 'cs21b1032@iiitr.ac.in', 'prayas birthday party', '2022-06-08 05:41:20', '2022-06-08', NULL, ''),
(48, 'Ramavath Pranathi', 'CS21B1043', 'Tungabhadra', 'G-002', 9368788612, 'cs21b1043@iiitr.ac.in', 'shopping', '2022-06-08 05:45:21', '2022-06-08', NULL, ''),
(49, 'Punati Lakshmi Bhavya', 'CS21B1036', 'Tungabhadra', 'G-002', 9368788667, 'cs21b1036@iiitr.ac.in', 'shopping', '2022-06-08 05:46:25', '2022-06-08', NULL, ''),
(50, 'Telu Neeharika', 'CS21B1029', 'Tungabhadra', 'G-003', 954854695, 'cs21b1029@iiitr.ac.in', 'shopping', '2022-06-08 05:47:35', '2022-06-08', NULL, ''),
(51, 'Disha Agarwal', 'CS21B1033', 'Tungabhadra', 'G-004', 9368788656, 'cs21b1033@iiitr.ac.in', 'shopping', '2022-06-08 05:48:03', '2022-06-08', NULL, ''),
(52, 'Disha Agarwal', 'CS21B1033', 'Tungabhadra', 'G-006', 9368788656, 'cs21b1033@iiitr.ac.in', 'shopping', '2022-06-08 05:48:38', '2022-06-08', NULL, ''),
(53, 'Miriyala Praneetha', 'CS21B1011', 'Tungabhadra', 'G-003', 9698088475, 'cs21b1011@iiitr.ac.in', 'timepass', '2022-06-08 05:49:56', '2022-06-08', NULL, ''),
(54, 'Deepika Namdev Munde', 'CS21B1012', 'Tungabhadra', 'G-003', 8897896879, 'cs21b1012@iiitr.ac.in', 'eye issue', '2022-06-08 11:34:48', '2022-06-08', NULL, ''),
(55, 'Paila Akash', 'CS21B1017', 'Tungabhadra', 'F-005', 8544583594, 'cs21b1017@iiitr.ac.in', 'burthday party', '2022-06-09 07:11:09', '2022-06-09', '2022-06-09 07:11:45', 'returned');

-- --------------------------------------------------------

--
-- Table structure for table `inentry`
--

CREATE TABLE `inentry` (
  `rollno` int(45) NOT NULL,
  `name` char(56) NOT NULL,
  `mobno` int(67) NOT NULL,
  `email` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `libraryentry`
--

CREATE TABLE `libraryentry` (
  `id` int(11) NOT NULL,
  `bookid` varchar(120) NOT NULL,
  `bookname` varchar(120) NOT NULL,
  `author` char(125) NOT NULL,
  `entreename` char(125) NOT NULL,
  `rollno` varchar(120) NOT NULL,
  `issuedate` date NOT NULL DEFAULT current_timestamp(),
  `returndate` date NOT NULL,
  `mobno` bigint(70) NOT NULL,
  `email` varchar(100) NOT NULL,
  `remarks` varchar(500) NOT NULL,
  `duedate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `libraryentry`
--

INSERT INTO `libraryentry` (`id`, `bookid`, `bookname`, `author`, `entreename`, `rollno`, `issuedate`, `returndate`, `mobno`, `email`, `remarks`, `duedate`) VALUES
(1, 'gec1', 'harry potter', 'J.K. Rowling', 'Achal Sayee', 'CS21B1006', '2022-05-24', '0000-00-00', 89734854, 'gdsgsd2hsd', '', NULL),
(2, 'gec2', 'discrete structures', 'Rosen', 'Pratham Jain', 'CS21B1021', '2022-05-22', '0000-00-00', 894370099, 'scag@uhs', '', NULL),
(5, 'gec3', 'The story of my life', 'Hellen Keller', 'Sanidhaya Sharma', 'CS21B1024', '2022-05-28', '2022-05-28', 72378459, 'shghj2j@yuefh', 'returned\r\n', '2022-06-08'),
(7, 'gec5', 'Gulliver travels', 'Jonathan Swift', 'Sanidhaya Sharma', 'CS21B1024', '2022-05-31', '0000-00-00', 8899286563, 'sanidhyas141@gmail.com', '', '2022-06-08'),
(8, 'gec6', 'The story of my life', 'Hellen Keller', 'Achal Sayee', 'CS21B1008', '2022-06-02', '0000-00-00', 9398088463, 'cs21b1008@iiitr.ac.in', '', '2022-06-16'),
(9, 'gec4', 'Gulliver travels', 'Jonathan Swift', 'Achal Sayee', 'CS21B1008', '2022-06-02', '0000-00-00', 9398088463, 'cs21b1008@iiitr.ac.in', '', '2022-06-17'),
(10, 'gec9', 'Linear Algebra And Its Applications', 'Gilbert Strang', 'Prayas Raj', 'CS21B1022', '2022-06-08', '0000-00-00', 954854695, 'cs21b1022@iiitr.ac.in', '', '2022-06-15'),
(11, 'gec12', 'A Course in Calculus and Real Analysis', 'Sudhir R. Ghorpade & Balmohan V. Limaye', 'Prince Keshri', 'CS21B1023', '2022-06-08', '0000-00-00', 9368784534, 'cs21b1023@iiitr.ac.in', '', '2022-06-15'),
(12, 'gec67', 'c++ the complete reference', 'Herbert Schildt', 'Santosh Dodhi', 'CS21B1025', '2022-06-08', '0000-00-00', 9368788612, 'cs21b1025@iiitr.ac.in', '', '2022-06-15'),
(13, 'gec56', 'Let Us C ', 'Yashavant Kanetkar', 'Ayush Rathor', 'CS21B1004', '2022-06-08', '0000-00-00', 9368788612, 'cs21b1004@iiitr.ac.in', '', '2022-06-16'),
(14, 'gec49', 'java the complete reference', 'Herbert Schildt', 'Nirdesh Gothaniya', 'CS21B1016', '2022-06-08', '0000-00-00', 954854695, 'cs21b1016@iiitr.ac.in', '', '2022-06-17'),
(15, 'gec90', 'Advanced Engineering Mathematics', 'R.K. Jain D & S.R.K. Iyengar', 'Kalluru Satya Dilsched', 'CS21B1009', '2022-06-08', '0000-00-00', 939808883, 'cs21b1009@iiitr.ac.in', '', '2022-06-14'),
(16, 'gec23', 'Linear Algebra And Its Applications', 'Gilbert Strang', 'Rushikesh Muneshwar', 'CS21B1013', '2022-06-08', '0000-00-00', 9368784534, 'cs21b1013@iiitr.ac.in', '', '2022-06-13'),
(17, 'gec90', 'inear Algebra And Its Applications', 'Gilbert Strang', 'Deepika Namdev Munde', 'CS21B1012', '2022-06-08', '0000-00-00', 9368784534, 'cs21b1012@iiitr.ac.in', '', '2022-06-16'),
(18, 'gec89', 'Half Girlfriend', 'Chetan Bhagat', 'Manish Kumar', 'CS21B1010', '2022-06-08', '0000-00-00', 9368788612, 'cs21b1010@iiitr.ac.in', '', '2022-06-17'),
(19, 'gec51', 'Sex at Dawn', 'Christopher Ryan', 'Parth Goel', 'CS21B1018', '2022-06-08', '0000-00-00', 9368788612, 'cs21b1018@iiitr.ac.in', '', '2022-06-10'),
(20, 'gec100', 'Come as You Are: The Surprising New Science That Will Transform Your Sex Life', 'Emily Nagoski', 'Naman Kumar', 'CS21B1014', '2022-06-08', '0000-00-00', 954854695, 'cs21b1014@iiitr.ac.in', '', '2022-06-12'),
(21, 'gec101', 'She Comes First', ' Ian Kerner', 'Aditya Raj', 'CS21B1001', '2022-06-08', '0000-00-00', 9368784582, 'cs21b1001@iiitr.ac.in', '', '2022-06-10'),
(22, 'gdsg3', 'asdgasf', 'asdfhdsa', 'sanidhaya', '24', '2022-06-09', '0000-00-00', 983459034, 'sanidhyas141@gmail.com', '', '0000-00-00'),
(23, 'ddfhh', 'fhhfhf', 'hffh', 'hfdfdgf', 'dg5', '2022-06-09', '0000-00-00', 5667575, 'fssfddfs@ytd', '', '2022-06-19'),
(24, 'ddfhh', 'fhhfhf', 'hffh', 'hfdfdgf', 'dg5', '2022-06-09', '0000-00-00', 5667575, 'fssfddfs@ytd', '', '0000-00-00'),
(25, 'dfgkjhdfk', 'hsdfdfsiuh', 'dshsdffds', 'jhsdfgfdj', 'cs21b1017', '2022-06-09', '0000-00-00', 784, 'iehfe@hjgsdfj', '', '2022-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(100) NOT NULL,
  `name` char(240) NOT NULL,
  `rollno` varchar(1600) NOT NULL,
  `email` varchar(150) NOT NULL,
  `requests` varchar(1600) NOT NULL,
  `response` varchar(1600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `name`, `rollno`, `email`, `requests`, `response`) VALUES
(2, 'Sanidhaya Sharma', 'CS21B1024', 'cs21b1024@iiitr.ac.in', 'i am not well', 'Accepted'),
(5, 'Sanidhaya Sharma', 'CS21B1024', 'cs21b1024@iiitr.ac.in', 'i want to reissue', ''),
(6, 'Achal Sayee', 'CS21B1006', 'cs21b1006@iiitr.ac.in', 'Please update my entry(hostel)', 'Updated'),
(8, 'Pratham Jain', 'CS21B1021', 'cs21b1021@iiitr.ac.in', 'Kindly update my library entry', 'Updated'),
(9, 'Prayas Raj', 'CS21B1022', 'cs21b1022@iiitr.ac.in', 'please reissue my book', 'reissued'),
(10, 'Prayas Raj', 'CS21B1022', 'cs21b1022@iiitr.ac.in', 'Please forgive me,i lost my book', 'Pay 1000 Rs fine'),
(20, 'Gajula Srinath', 'CS21B1041', 'cs21b1041@iiitr.ac.in', 'Please add my sports entry', 'ok, will be added in 1 hour\r\n'),
(21, 'Anushka Garg', 'CS21B1032', 'cs21b1032@iiitr.ac.in', 'kindly update my entry\r\n', ''),
(22, 'Paila Akash', 'CS21B1017', 'cs21b1017@iiitr.ac.in', 'please update my entry', 'updated');

-- --------------------------------------------------------

--
-- Table structure for table `sportsentry`
--

CREATE TABLE `sportsentry` (
  `id` int(11) NOT NULL,
  `entreename` char(100) NOT NULL,
  `rollno` varchar(70) NOT NULL,
  `mobno` bigint(60) NOT NULL,
  `sportsitem` varchar(120) NOT NULL,
  `quantity` int(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `returndate` date NOT NULL,
  `email` varchar(200) NOT NULL,
  `remarks` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sportsentry`
--

INSERT INTO `sportsentry` (`id`, `entreename`, `rollno`, `mobno`, `sportsitem`, `quantity`, `date`, `time`, `returndate`, `email`, `remarks`) VALUES
(21, 'Achal Sayee', 'CS21B1008', 9398088463, 'Badminton', 2, '2022-06-02', '2022-06-02 18:49:31', '0000-00-00', 'cs21b1008@iiitr.ac.in', ''),
(23, 'Achal Sayee', 'CS21B1008', 9398088463, 'tennis ball', 5, '2022-06-02', '2022-06-02 18:49:54', '0000-00-00', 'cs21b1008@iiitr.ac.in', ''),
(24, 'Suraj Kumar', 'CS21B1028', 9368784534, 'Badminton ', 2, '2022-06-08', '2022-06-08 09:53:04', '0000-00-00', 'cs21b1028@iiitr.ac.in', ''),
(25, 'Punati Lakshmi Bhavya', 'CS21B1036', 9368788612, 'Badminton Cork', 1, '2022-06-08', '2022-06-08 09:55:41', '0000-00-00', 'cs21b1036@iiitr.ac.in', ''),
(26, 'Telu Neeharika', 'CS21B1029', 9368784534, 'Cricket Bat', 7, '2022-06-08', '2022-06-08 09:56:57', '0000-00-00', 'cs21b1029@iiitr.ac.in', ''),
(27, 'Thejeshwari  Balaji', 'CS21B1030', 9398088463, 'Tennis Ball', 14, '2022-06-08', '2022-06-08 09:58:46', '0000-00-00', 'cs21b1030@iiitr.ac.in', ''),
(28, 'Vankudoth Sudhamsh', 'CS21B1031', 9368784534, 'Stumps', 47, '2022-06-08', '2022-06-08 09:59:32', '0000-00-00', 'cs21b1031@iiitr.ac.in', ''),
(29, 'Thaduri Manikanth', 'CS21B1037', 9368784534, 'Volley Ball', 4, '2022-06-08', '2022-06-08 10:00:14', '0000-00-00', 'cs21b1037@iiitr.ac.in', ''),
(30, 'Ramavath Pranathi', 'CS21B1043', 9368784534, 'Football', 1, '2022-06-08', '2022-06-08 10:00:53', '0000-00-00', 'cs21b1043@iiitr.ac.in', ''),
(31, 'Prayas Raj', 'CS21B1022', 8899286563, 'Bails', 39, '2022-06-08', '2022-06-08 10:02:00', '0000-00-00', 'cs21b1022@iiitr.ac.in', ''),
(32, 'Bhawani Shankar Dhawal', 'CS21B1005', 9368784534, 'Tennis Rackets', 4, '2022-06-08', '2022-06-08 10:02:53', '0000-00-00', 'cs21b1005@iiitr.ac.in', ''),
(33, 'Nirdesh Gothaniya', 'CS21B1016', 9398088463, 'Football', 2, '2022-06-08', '2022-06-08 10:03:31', '0000-00-00', 'cs21b1016@iiitr.ac.in', ''),
(34, 'Manish Kumar', 'CS21B1010', 9368788764, 'Cricket Kit', 1, '2022-06-08', '2022-06-08 10:04:40', '0000-00-00', 'cs21b1010@iiitr.ac.in', ''),
(35, 'Nirdesh Gothaniya', 'CS21B1016', 954854695, 'Badminton', 1, '2022-06-08', '2022-06-08 10:05:34', '0000-00-00', 'cs21b1016@iiitr.ac.in', ''),
(36, 'Nirdesh Gothaniya', 'CS21B1016', 6516515251, 'Cricket Bat', 4, '2022-06-08', '2022-06-08 10:06:17', '0000-00-00', 'cs21b1016@iiitr.ac.in', ''),
(37, 'Prayas Raj', 'CS21B1022', 99515232326, 'Cricket Kit', 4, '2022-06-08', '2022-06-08 10:06:57', '0000-00-00', 'cs21b1022@iiitr.ac.in', ''),
(38, 'Achal Sayee', 'CS21B1006', 9398088463, 'Badminton', 2, '2022-06-08', '2022-06-08 10:08:06', '0000-00-00', 'cs21b1006@iiitr.ac.in', ''),
(39, 'Gajula Srinath', 'CS21B1041', 6304097052, 'BasketBall', 5, '2022-06-08', '2022-06-08 16:01:30', '2022-06-08', 'cs21b1041@iiitr.ac.in', 'returned');

-- --------------------------------------------------------

--
-- Table structure for table `stlogin`
--

CREATE TABLE `stlogin` (
  `ID` int(70) NOT NULL,
  `Name` varchar(70) NOT NULL,
  `rollno` varchar(200) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stlogin`
--

INSERT INTO `stlogin` (`ID`, `Name`, `rollno`, `Email`, `Password`) VALUES
(27, 'Achal Sayee', 'CS21B1006', 'cs21b1006@iiitr.ac.in', '123'),
(28, 'Deep Patel', 'CS21B1008', 'cs21b1008@iiitr.ac.in', '1234'),
(29, 'Pratham Jain', 'CS21B1021', 'cs21b1021@iiitr.ac.in', '3903'),
(30, 'Prayas Raj', 'CS21B1022', 'cs21b1022@iiitr.ac.in', '1234'),
(31, 'Prince Keshri', 'CS21B1023', 'cs21b1023@iiitr.ac.in', '1234'),
(32, 'Sanidhaya Sharma', 'CS21B1024', 'cs21b1024@iiitr.ac.in', '1234'),
(33, 'Santosh Dodhi', 'CS21B1025', 'cs21b1025@iiitr.ac.in', '1234'),
(34, 'Deepika Namdev Munde', 'CS21B1012', 'cs21b1012@iiitr.ac.in', '1234'),
(35, 'Aditya Raj', 'CS21B1001', 'cs21b1001@iiitr.ac.in', '1234'),
(36, 'Anubhav Singh', 'CS21B1002', 'cs21b1002@iiitr.ac.in', '1234'),
(37, 'Ashutosh Shukla', 'CS21B1003', 'cs21b1003@iiitr.ac.in', '345'),
(38, 'Ayush Rathor', 'CS21B1004', 'cs21b1004@iiitr.ac.in', '1234'),
(39, 'Bhawani Shankar Dhawal', 'CS21B1005', 'cs21b1005@iiitr.ac.in', '1234'),
(40, 'Chittala Vivek', 'CS21B1007', 'cs21b1007@iiitr.ac.in', '1234'),
(41, 'Kalluru Satya Dilsched', 'CS21B1009', 'cs21b1009@iiitr.ac.in', '1234'),
(42, 'Manish Kumar', 'CS21B1010', 'cs21b1010@iiitr.ac.in', '1234'),
(43, 'Miriyala Praneetha', 'CS21B1011', 'cs21b1011@iiitr.ac.in', '1234'),
(44, 'Rushikesh Muneshwar', 'CS21B1013', 'cs21b1013@iiitr.ac.in', '1234'),
(45, 'Naman Kumar', 'CS21B1014', 'cs21b1014@iiitr.ac.in', 'Sirius'),
(46, 'Naman Vikram', 'CS21B1015', 'cs21b1015@iiitr.ac.in', '1234'),
(47, 'Nirdesh Gothaniya', 'CS21B1016', 'cs21b1016@iiitr.ac.in', '1234'),
(48, 'Paila Akash', 'CS21B1017', 'cs21b1017@iiitr.ac.in', '1234'),
(49, 'Parth Goel', 'CS21B1018', 'cs21b1018@iiitr.ac.in', '1234'),
(50, 'Piyush Anand', 'CS21B1019', 'cs21b1019@iiitr.ac.in', '1234'),
(51, 'Polavarapu Sai Krishna', 'CS21B1020', 'cs21b1020@iiitr.ac.in', 'sani'),
(52, 'Sathvik Palde', 'CS21B1026', 'cs21b1026@iiitr.ac.in', '1234'),
(53, 'Shivanshu Gupta', 'CS21B1027', 'cs21b1027@iiitr.ac.in', '1234'),
(54, 'Suraj Kumar', 'CS21B1028', 'cs21b1028@iiitr.ac.in', '1234'),
(55, 'Telu Neeharika', 'CS21B1029', 'cs21b1029@iiitr.ac.in', '1234'),
(56, 'Thejeshwari  Balaji', 'CS21B1030', 'cs21b1030@iiitr.ac.in', '1234'),
(57, 'Vankudoth Sudhamsh', 'CS21B1031', 'cs21b1031@iiitr.ac.in', '1234'),
(58, 'Disha Agarwal', 'CS21B1033', 'cs21b1033@iiitr.ac.in', '1234'),
(59, 'Anushka Garg', 'CS21B1032', 'cs21b1032@iiitr.ac.in', 'lab4part2'),
(60, 'Gorrela Sri Likhith', 'CS21B1034', 'cs21b1034@iiitr.ac.in', '1234'),
(61, 'Praveen Raj', 'CS21B1035', 'cs21b1035@iiitr.ac.in', '1234'),
(65, 'Punati Lakshmi Bhavya', 'CS21B1036', 'cs21b1036@iiitr.ac.in', '1234'),
(66, 'Thaduri Manikanth', 'CS21B1037', 'cs21b1037@iiitr.ac.in', '1234'),
(67, 'Chirag Raj', 'CS21B1038', 'cs21b1038@iiitr.ac.in', '1234'),
(68, 'Atharva Pandey', 'CS21B1039', 'cs21b1039@iiitr.ac.in', '1234'),
(69, 'Abhishek Talakere', 'CS21B1040', 'cs21b1040@iiitr.ac.in', '1234'),
(70, 'Gajula Srinath', 'CS21B1041', 'cs21b1041@iiitr.ac.in', 'sri'),
(71, 'Harsh Ranjan', 'CS21B1042', 'cs21b1042@iiitr.ac.in', '1234'),
(72, 'Ramavath Pranathi', 'CS21B1043', 'cs21b1043@iiitr.ac.in', '1234'),
(73, 'prayas', '22', 'saj@ysyu', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acadblockentry`
--
ALTER TABLE `acadblockentry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adlogin`
--
ALTER TABLE `adlogin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hostelentry`
--
ALTER TABLE `hostelentry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inentry`
--
ALTER TABLE `inentry`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `libraryentry`
--
ALTER TABLE `libraryentry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sportsentry`
--
ALTER TABLE `sportsentry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stlogin`
--
ALTER TABLE `stlogin`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acadblockentry`
--
ALTER TABLE `acadblockentry`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `adlogin`
--
ALTER TABLE `adlogin`
  MODIFY `ID` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hostelentry`
--
ALTER TABLE `hostelentry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `inentry`
--
ALTER TABLE `inentry`
  MODIFY `rollno` int(45) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `libraryentry`
--
ALTER TABLE `libraryentry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sportsentry`
--
ALTER TABLE `sportsentry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `stlogin`
--
ALTER TABLE `stlogin`
  MODIFY `ID` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
