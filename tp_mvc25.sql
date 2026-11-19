-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 19, 2026 at 10:00 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tp_mvc25`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int NOT NULL,
  `lecturer_id` int NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `semester` int NOT NULL,
  `credits` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `lecturer_id`, `course_name`, `semester`, `credits`) VALUES
(2, 7, 'Pemrograman Web', 3, 3),
(3, 7, 'UI/UX Design', 4, 2),
(4, 8, 'Struktur Data', 2, 3),
(5, 8, 'Algoritma dan Pemrograman', 1, 3),
(6, 9, 'Basis Data', 3, 3),
(7, 9, 'Sistem Informasi', 4, 2),
(8, 10, 'Rekayasa Perangkat Lunak', 4, 3),
(9, 11, 'Kecerdasan Buatan', 5, 3),
(10, 11, 'Jaringan Komputer', 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `nidn` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `join_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`id`, `name`, `nidn`, `phone`, `join_date`) VALUES
(7, 'Dr. Ara Jasmine, M.Kom.', '0405018501', '081234567801', '2020-01-15'),
(8, 'Haechan Lee, M.Kom.', '0412088802', '081234567802', '2021-03-10'),
(9, 'Niki Zefanya, M.T.', '0315068703', '081234567803', '2019-07-20'),
(10, 'Olivia Rodrigo, M.Kom.', '0522099004', '081234567804', '2022-02-01'),
(11, 'Giveon Dezmann Evans, M.Kom.', '0611128905', '081234567805', '2021-08-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lecturer_id` (`lecturer_id`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
