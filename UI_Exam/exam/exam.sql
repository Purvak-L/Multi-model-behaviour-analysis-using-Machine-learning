-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2017 at 02:06 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `pass`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `arrayque`
--

CREATE TABLE `arrayque` (
  `id` int(20) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arrayque`
--

INSERT INTO `arrayque` (`id`, `question`) VALUES
(1, 'The memory address of the first element of an array is called__?'),
(2, 'Two dimensional arrays are also called __?'),
(3, 'Array is an example of ________ data structure'),
(4, 'An array elements are always stored in ________ memory locations'),
(5, 'Linear arrays are also called ?');

-- --------------------------------------------------------

--
-- Table structure for table `final`
--

CREATE TABLE `final` (
  `id` int(10) NOT NULL,
  `test_name` varchar(30) NOT NULL,
  `Q1status` varchar(30) NOT NULL,
  `Q2status` varchar(30) NOT NULL,
  `Q3status` varchar(30) NOT NULL,
  `Q4status` varchar(30) NOT NULL,
  `Q5status` varchar(30) NOT NULL,
  `overallstatus` varchar(20) NOT NULL,
  `overallper` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final`
--

INSERT INTO `final` (`id`, `test_name`, `Q1status`, `Q2status`, `Q3status`, `Q4status`, `Q5status`, `overallstatus`, `overallper`) VALUES
(1, 'Array test', '', 'excitement', 'confident', 'confident', 'confident', 'confident', 'you are confident 20%'),
(1, 'Stack test', '', '', '', 'excitement', 'excitement', '', 'you are  60%'),
(1, 'Queue test', 'excitement', 'excitement', 'confident', 'confident', 'confident', 'confident', 'you are confident 40%'),
(1, 'Linked test', 'excitement', 'confident', 'confuse', 'confuse', 'confuse', 'confuse', 'you are confuse 20%'),
(1, 'Array test', 'excitement', 'confident', 'confident', 'confident', 'confident', 'confident', 'you are confident 20%'),
(1, 'Array test', 'confident', 'confident', 'confident', 'confident', 'confident', 'confident', 'you are confident 100%'),
(1, 'Array test', 'confident', 'excitement', 'excitement', 'excitement', 'excitement', 'excitement', 'you are excitement 20%'),
(1, 'Linked test', 'confident', 'excitement', 'excitement', 'excitement', 'excitement', 'excitement', 'you are excitement 20%'),
(1, 'Linked test', 'excitement', 'excitement', 'confident', 'excitement', 'confident', 'excitement', 'you are excitement 60%'),
(1, 'Linked test', 'confident', 'confident', 'confident', 'confident', '', 'confident', 'you are confident 80%'),
(1, 'Array test', 'confident', 'confident', 'confident', 'confident', '', 'confident', 'you are confident 80%'),
(1, 'Array test', 'confident', 'confident', 'confident', 'confident', '', 'confident', 'you are confident 80%'),
(1, 'Array test', 'confident', 'excitement', 'confident', 'confuse', 'confident', 'confident', 'you are confident 60%'),
(1, 'Array test', 'confident', 'confident', 'confident', 'confident', 'confident', 'confident', 'you are confident 100%'),
(1, 'Linked test', 'confident', 'excitement', 'confident', 'confident', '', 'confident', 'you are confident 60%');

-- --------------------------------------------------------

--
-- Table structure for table `hint`
--

CREATE TABLE `hint` (
  `id` int(20) NOT NULL,
  `test_taken` varchar(20) NOT NULL,
  `qno` varchar(10) NOT NULL,
  `hint_select` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hint`
--

INSERT INTO `hint` (`id`, `test_taken`, `qno`, `hint_select`) VALUES
(1, 'Array test', 'Q1', 'yes'),
(1, 'Stack test', 'Q2', 'yes'),
(1, 'Array test', 'Q1', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `linkedquestion`
--

CREATE TABLE `linkedquestion` (
  `id` int(10) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `linkedquestion`
--

INSERT INTO `linkedquestion` (`id`, `question`) VALUES
(1, 'An empty list is the one which has no __?'),
(2, 'Which of the following is not a type of Linked List ?'),
(3, 'â€¦â€¦â€¦â€¦â€¦.is not an operation performed on linear list?'),
(4, 'Linked list is generally considered as an example of type of memory allocation.'),
(5, 'If in a linked list address of first node is 1020 then what will be the address of node at 5th posit');

-- --------------------------------------------------------

--
-- Table structure for table `option_selected1`
--

CREATE TABLE `option_selected1` (
  `id` int(20) NOT NULL,
  `option_selected1` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `option_selected1`
--

INSERT INTO `option_selected1` (`id`, `option_selected1`) VALUES
(1, 'arrQ1A'),
(1, 'arrQ1B'),
(1, 'arrQ2C'),
(1, 'arrQ2B'),
(1, 'arrQ3D'),
(1, 'arrQ4B'),
(1, 'arrQ5C'),
(1, 'stckQ1C'),
(1, 'stckQ1B'),
(1, 'stckQ2D'),
(1, 'stckQ2A'),
(1, 'stckQ4C'),
(1, 'stckQ4B'),
(1, 'stckQ5C'),
(1, 'stckQ5B'),
(1, 'queQ1B'),
(1, 'queQ1C'),
(1, 'queQ2C'),
(1, 'queQ2B'),
(1, 'queQ3C'),
(1, 'queQ4C'),
(1, 'queQ5B'),
(1, 'linQ1B'),
(1, 'linQ1C'),
(1, 'linQ2B'),
(1, 'linQ3C'),
(1, 'linQ3B'),
(1, 'linQ3A'),
(1, 'linQ4C'),
(1, 'linQ4B'),
(1, 'linQ4A'),
(1, 'linQ5C'),
(1, 'linQ5B'),
(1, 'linQ5A'),
(1, 'arrQ1A'),
(1, 'arrQ1B'),
(1, 'arrQ2C'),
(1, 'arrQ3D'),
(1, 'arrQ4C'),
(1, 'arrQ5C'),
(1, 'arrQ1B'),
(1, 'arrQ2C'),
(1, 'arrQ4B'),
(1, 'arrQ3C'),
(1, 'arrQ5C'),
(1, 'arrQ1B'),
(1, 'arrQ2B'),
(1, 'arrQ2C'),
(1, 'arrQ3B'),
(1, 'arrQ3C'),
(1, 'arrQ4D'),
(1, 'arrQ4C'),
(1, 'arrQ5C'),
(1, 'arrQ5D'),
(1, 'linQ1B'),
(1, 'linQ2B'),
(1, 'linQ2C'),
(1, 'linQ3C'),
(1, 'linQ3B'),
(1, 'linQ4C'),
(1, 'linQ4D'),
(1, 'linQ5C'),
(1, 'linQ5D'),
(1, 'linQ1B'),
(1, 'linQ1C'),
(1, 'linQ2C'),
(1, 'linQ2B'),
(1, 'linQ3C'),
(1, 'linQ4D'),
(1, 'linQ4C'),
(1, 'linQ5C'),
(1, 'linQ1C'),
(1, 'linQ2C'),
(1, 'linQ3D'),
(1, 'linQ4C'),
(1, 'arrQ1C'),
(1, 'arrQ2C'),
(1, 'arrQ3C'),
(1, 'arrQ4C'),
(1, 'arrQ1C'),
(1, 'arrQ1C'),
(1, 'arrQ2C'),
(1, 'arrQ3C'),
(1, 'arrQ4C'),
(1, 'arrQ1C'),
(1, 'arrQ2C'),
(1, 'arrQ2B'),
(1, 'arrQ3D'),
(1, 'arrQ4C'),
(1, 'arrQ4B'),
(1, 'arrQ4A'),
(1, 'arrQ5C'),
(1, 'arrQ1B'),
(1, 'arrQ2D'),
(1, 'arrQ3D'),
(1, 'arrQ4C'),
(1, 'arrQ5C'),
(1, 'linQ1B'),
(1, 'linQ2B'),
(1, 'linQ2C'),
(1, 'linQ3D'),
(1, 'linQ4C');

-- --------------------------------------------------------

--
-- Table structure for table `queuequestion`
--

CREATE TABLE `queuequestion` (
  `id` int(10) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queuequestion`
--

INSERT INTO `queuequestion` (`id`, `question`) VALUES
(1, 'On which principle does queue work?'),
(2, 'Which of the following is not the type of queue?'),
(3, 'New nodes are added to the the queue.'),
(4, '____ is a operation not performed in Queue?'),
(5, 'Linear arrays are also called ?');

-- --------------------------------------------------------

--
-- Table structure for table `stackquestion`
--

CREATE TABLE `stackquestion` (
  `id` int(10) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stackquestion`
--

INSERT INTO `stackquestion` (`id`, `question`) VALUES
(1, 'On which principle does stack work?'),
(2, 'Can stack be described as a pointer?'),
(3, 'What is the result of the following operation Top (Push (S, X))?'),
(4, 'The largest element of an array index is called its __?'),
(5, 'Which is/are the application(s) of stack? ');

-- --------------------------------------------------------

--
-- Table structure for table `tbexam_conduct`
--

CREATE TABLE `tbexam_conduct` (
  `studentid` int(10) NOT NULL,
  `paper_name` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time_in` time(6) NOT NULL,
  `time_out` time(6) NOT NULL,
  `result` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbexam_conduct`
--

INSERT INTO `tbexam_conduct` (`studentid`, `paper_name`, `date`, `time_in`, `time_out`, `result`) VALUES
(1, 'Array test', '0000-00-00', '03:44:58.000000', '03:45:12.000000', '0'),
(1, 'Stack test', '2017-05-03', '03:44:58.000000', '03:45:41.000000', '1'),
(1, 'Queue test', '2017-05-03', '03:44:58.000000', '03:46:04.000000', '3'),
(1, 'Linked test', '2017-05-03', '03:44:58.000000', '03:46:22.000000', '0'),
(1, 'Array test', '2017-05-03', '03:44:58.000000', '03:57:12.000000', '2'),
(1, 'Array test', '2017-05-03', '03:44:58.000000', '03:57:26.000000', '1'),
(1, 'Array test', '2017-05-03', '03:44:58.000000', '03:57:40.000000', '2'),
(1, 'Linked test', '2017-05-03', '03:44:58.000000', '03:58:27.000000', '0'),
(1, 'Linked test', '2017-05-03', '03:44:58.000000', '03:59:15.000000', '0'),
(1, 'Linked test', '2017-05-03', '03:44:58.000000', '04:00:02.000000', '1'),
(1, 'Array test', '2017-05-03', '03:44:58.000000', '04:01:26.000000', '2'),
(1, 'Array test', '2017-05-03', '03:44:58.000000', '04:01:45.000000', '2'),
(1, 'Array test', '2017-05-03', '03:44:58.000000', '04:02:25.000000', '0'),
(1, 'Array test', '2017-05-03', '03:44:58.000000', '04:03:45.000000', '1'),
(1, 'Linked test', '2017-05-03', '03:44:58.000000', '04:04:03.000000', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbstudent`
--

CREATE TABLE `tbstudent` (
  `studentid` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `class` varchar(10) NOT NULL,
  `branch` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbstudent`
--

INSERT INTO `tbstudent` (`studentid`, `name`, `class`, `branch`) VALUES
(1, 'prachi', 'ME', 'cse'),
(2, 'neha', 'dfg', 'jhjhj');

-- --------------------------------------------------------

--
-- Table structure for table `tb_id`
--

CREATE TABLE `tb_id` (
  `id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_id`
--

INSERT INTO `tb_id` (`id`) VALUES
(1),
(2),
(2),
(2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arrayque`
--
ALTER TABLE `arrayque`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linkedquestion`
--
ALTER TABLE `linkedquestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queuequestion`
--
ALTER TABLE `queuequestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stackquestion`
--
ALTER TABLE `stackquestion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arrayque`
--
ALTER TABLE `arrayque`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `linkedquestion`
--
ALTER TABLE `linkedquestion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `queuequestion`
--
ALTER TABLE `queuequestion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `stackquestion`
--
ALTER TABLE `stackquestion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
