-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2023 at 11:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `headline` varchar(400) NOT NULL,
  `aboutdesc` varchar(3000) NOT NULL,
  `eduname` varchar(200) NOT NULL,
  `edulocation` varchar(200) NOT NULL,
  `edufield` varchar(200) NOT NULL,
  `edusd` varchar(200) NOT NULL,
  `edued` varchar(200) NOT NULL,
  `exp` varchar(200) NOT NULL,
  `companyname` text NOT NULL,
  `expsd` varchar(200) NOT NULL,
  `exped` varchar(200) NOT NULL,
  `skill` varchar(200) NOT NULL,
  `skillrange` varchar(100) NOT NULL,
  `project` varchar(400) NOT NULL,
  `projectdesc` varchar(3000) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `linkedin` varchar(200) NOT NULL,
  `github` varchar(200) NOT NULL,
  `address` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `headline`, `aboutdesc`, `eduname`, `edulocation`, `edufield`, `edusd`, `edued`, `exp`, `companyname`, `expsd`, `exped`, `skill`, `skillrange`, `project`, `projectdesc`, `phone`, `email`, `linkedin`, `github`, `address`) VALUES
(63, 'Mahesh  Ghongade', 'Full Stack Website Developer', 'I am a Full stack web developer with the skills set of HTML,CSS,JS,PHP,SQL.', '[\"Computer Science Engineering\",\"12th Science\",\"10th\"]', '[\"Amravati\",\"Amravati\",\"Shirala\"]', '[\"P R Pote College Of Engineering and Management\",\"Shri Shivaji Sciene College\",\"Kasturabai Jain Vidyalai\"]', '', '', '', '', '', '', '[\"HTML\"]', '[\"50\"]', '[\"Success\"]', '[\"DDDDDDDDD\"]', 2147483647, 'maheshghongade644@gmail.com', '', '', 'Amravati, Maharashtra, India 444801.'),
(64, 'Mahesh  Ghongade', 'Full Stack Website Developer', 'I am a Full stack web developer with the skills set of HTML,CSS,JS,PHP,SQL.', '[\"Computer Science Engineering\",\"12th Science\",\"10th\"]', '[\"Amravati\",\"Amravati\",\"Shirala\"]', '[\"P R Pote College Of Engineering and Management\",\"Shri Shivaji Sciene College\",\"Kasturabai Jain Vidyalai\"]', '', '', '', '', '', '', '[\"HTML\"]', '[\"50\"]', '[\"Success\"]', '[\"DDDDDDDDD\"]', 2147483647, 'maheshghongade644@gmail.com', '', '', 'Amravati, Maharashtra, India 444801.'),
(65, 'Mahesh  Ghongade', 'Full Stack Website Developer', 'I am a Full stack web developer with the skills set of HTML,CSS,JS,PHP,SQL.', '[\"Computer Science Engineering\"]', '[\"Amravati\"]', '[\"P R Pote College Of Engineering and Management\"]', '', '', '', '', '', '', '[\"HTML\"]', '[\"50\"]', '[\"Success\"]', '[\"DDDDDDDDD\"]', 2147483647, 'maheshghongade644@gmail.com', '', '', 'Amravati, Maharashtra, India 444801.'),
(66, 'Mahesh  Ghongade', 'Full Stack Website Developer', 'I am a Full stack web developer with the skills set of HTML,CSS,JS,PHP,SQL.', '[\"Computer Science Engineering\"]', '[\"Amravati\"]', '[\"P R Pote College Of Engineering and Management\"]', '', '', '', '', '', '', '[\"HTML\"]', '[\"50\"]', '[\"Success\"]', '[\"DDDDDDDDD\"]', 2147483647, 'maheshghongade644@gmail.com', '', '', 'Amravati, Maharashtra, India 444801.'),
(67, 'Mahesh  Ghongade', 'Full Stack Website Developer', 'I am a Full stack web developer with the skills set of HTML,CSS,JS,PHP,SQL.', '[\"Web developer\"]', '[\"CodeMBS\"]', '[\"2023-12-22\"]', '', '', '[\"2023-12-22\"]', '[\"Computer Science Engineering\"]', '[\"Amravati', '[\"P R Pote', '[\"HTML\"]', '[\"50\"]', '[\"Success\"]', '[\"DDDDDDDDD\"]', 2147483647, 'maheshghongade644@gmail.com', '', '', 'Amravati, Maharashtra, India 444801.'),
(68, 'Mahesh  Ghongade', 'Full Stack Website Developer', 'I am a Full stack web developer with the skills set of HTML,CSS,JS,PHP,SQL.', '[\"Computer Science Engineering\"]', '[\"Amravati\"]', '[\"P R Pote College Of Engineering and Management\"]', '', '', '[\"HTML\"]', '[\"50\"]', '[\"Success\"', '[\"DDDDDDDD', '[\"Web developer\"]', '[\"CodeMBS\"]', '[\"2023-12-22\"]', '[\"2023-12-22\"]', 2147483647, 'maheshghongade644@gmail.com', '', '', 'Amravati, Maharashtra, India 444801.'),
(69, 'Mahesh  Ghongade', 'Full Stack Website Developer', 'I am a Full stack web developer with the skills set of HTML,CSS,JS,PHP,SQL.', '[\"P R Pote College Of Engineering and Management\"]', '[\"Amravati\"]', '[\"Computer Science Engineering\"]', '', '', '[\"Web developer\"]', '[\"CodeMBS\"]', '[\"2023-12-', '[\"2023-12-', '[\"HTML\"]', '[\"50\"]', '[\"Success\"]', '[\"DDDDDDDDD\"]', 2147483647, 'maheshghongade644@gmail.com', '', '', 'Amravati, Maharashtra, India 444801.'),
(70, 'Mahesh Arunrao Ghongade', 'Full Stack Website Developer', '3333333345eeeeeeeeeeeertgfdssssssssssssssssssss dddddddddddddddddddddddddddddd', '[\"P R Pote College Of Engineering and Management\"]', '[\"Amravati\"]', '[\"Computer Science Engineering\"]', '[\"2023-12-', '[\"2023-12-', '[\"Web developer\"]', '[\"CodeMBS\"]', '[\"2022-06-', '[\"2024-06-', '[\"Portfolio\"]', '[\"50\"]', '[\"Success\"]', '[\"\"]', 2147483647, 'studybuddybusiness@gmail.com', '', '', 'Amravati, Maharashtra, India 444801.'),
(71, '', '', '', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"50\"]', '[\"\"]', '[\"\"]', 0, '', '', '', ''),
(72, '', '', '', '[\"P R Pote College Of Engineering and Management\"]', '[\"Amravati\"]', '[\"Computer Science Engineering\"]', '[\"2021-12-', '[\"2025-03-', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"50\"]', '[\"\"]', '[\"\"]', 0, '', '', '', ''),
(73, '', '', '', '[\"P R Pote College Of Engineering and Management\",\"Shri shivaji Science College\"]', '[\"Amravati\",\"Amravati\"]', '[\"Computer Science Engineering\",\"12 Science\"]', '[\"2023-12-01\",\"\"]', '[\"2024-06-28\",\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"50\"]', '[\"\"]', '[\"\"]', 0, '', '', '', ''),
(74, '', '', '', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"Web developer\",\"App Developer\"]', '[\"CodeMBS\",\"50\"]', '[\"2023-12-22\",\"2023-', '[\"2024-04-18\",\"2024-', '[\"\"]', '[\"50\"]', '[\"\"]', '[\"\"]', 0, '', '', '', ''),
(75, '', '', '', '[\"P R Pote College Of Engineering and Management\",\"Shri Shivaji Science College\",\"Kasturabai Jain Vidyalai\"]', '[\"Amravati\",\"Amravati\",\"Shirala\"]', '[\"Computer Science Engineering\",\"12 Science\",\"10 \"]', '[\"2023-12-06\",\"2023-12-25\",\"2023-12-03\"]', '[\"2023-12-03\",\"2023-12-09\",\"2024-01-04\"]', '[\"Web developer\",\"App Developer\",\"Game Developer\"]', '[\"CodeMBS\",\"Facebook\",\"Google\"]', '[\"2023-12-24\",\"2023-12-25\",\"2024-01-02\"]', '[\"2023-12-05\",\"2023-12-30\",\"2023-11-26\"]', '[\"\"]', '[\"50\"]', '[\"\"]', '[\"\"]', 0, '', '', '', ''),
(76, '', '', '', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"50\"]', '[\"\"]', '[\"\"]', 0, '', '', '', ''),
(77, '', '', '', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"50\"]', '[\"\"]', '[\"\"]', 0, '', '', '', ''),
(78, 'Mahesh Arunrao Ghongade', 'web developer', ' maaaaaaaans snnnnnnnnnn sbbbbbbbbbbbbb vssssssssssssssssssssssss aaaaaaaav abbbbbbbbbbbbbbbbbbbb bbbbbbbbbbbbbbbbbbbb gggggggggggggggggggggggggg hhhhhhhhhhhhhhhhhh jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"\"]', '[\"50\"]', '[\"Web Development\",\"App Developemnt\"]', '[\" maaaaaaaans snnnnnnnnnn sbbbbbbbbbbbbb vssssssssssssssssssssssss aaaaaaaav abbbbbbbbbbbbbbbbbbbb bbbbbbbbbbbbbbbbbbbb gggggggggggggggggggggggggg hhhhhhhhhhhhhhhhhh jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj\",\" maaaaaaaans snnnnnnnnnn sbbbbbbbbbbbbb vssssssssssssssssssssssss aaaaaaaav abbbbbbbbbbbbbbbbbbbb bbbbbbbbbbbbbbbbbbbb gggggggggggggggggggggggggg hhhhhhhhhhhhhhhhhh jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj\"]', 2147483647, 'maheshghongade644@gmail.com', '', '', 'Amravati Maharashtra India');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
