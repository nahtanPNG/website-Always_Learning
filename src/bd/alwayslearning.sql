-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 13, 2023 at 04:49 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alwayslearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `prova`
--

CREATE TABLE `prova` (
  `id` int NOT NULL,
  `nome` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `nota` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `prova`
--

INSERT INTO `prova` (`id`, `nome`, `data`, `nota`) VALUES
(10, '', '2013-04-23', 9),
(11, '', '2013-04-23', 9),
(12, '', '2013-04-23', 9);

-- --------------------------------------------------------

--
-- Table structure for table `usuário`
--

CREATE TABLE `usuário` (
  `id` int NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usuário`
--

INSERT INTO `usuário` (`id`, `nome`, `email`, `usuario`, `senha`) VALUES
(2, 'nathan', 'nathan@gmail.com', 'nathanz', '$2y$10$m3sk/IBqvkj80yZRvKlP1Oemh3nSm21LG8d1QYw0OMA8zQp1o8Bf.'),
(3, 'ygor izaac', 'ygo@gmail.com', 'ygoriz', '$2y$10$YCJ7gzmRcVzjooDWgpOgQeerBwUhIIqMBt8mQdOtlHlALcex7tCe6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prova`
--
ALTER TABLE `prova`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuário`
--
ALTER TABLE `usuário`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prova`
--
ALTER TABLE `prova`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `usuário`
--
ALTER TABLE `usuário`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
