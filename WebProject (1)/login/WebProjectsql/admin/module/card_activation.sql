-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2022 at 05:23 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ensah`
--

-- --------------------------------------------------------

--
-- Table structure for table `card_activation`
--

CREATE TABLE `card_activation` (
  `id` int(10) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `id_departement` varchar(255) NOT NULL,
  `ele1` varchar(255) NOT NULL,
  `ele2` varchar(255) NOT NULL,
  `h_td_tp` varchar(255) NOT NULL,
  `h_cours` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `uploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card_activation`
--

INSERT INTO `card_activation` (`id`, `nom`, `id_departement`, `ele1`, `ele2`, `h_td_tp`, `h_cours`, `image`, `uploaded`) VALUES
(102, 'cpp', 'info', 'herg', 'STL','20', '30', 'images.png','2021-01-16 12:47:17'),
(103, 'uml', 'energie ', ' ', '','20', '30', 'images.png','2021-01-16 12:47:17'),
(104, 'algo', 'info', 'fct', 'bo3o','20', '30', 'images.png','2021-01-16 12:47:17'),
(105, 'roro', 'info', 'herg', 'STL','20', '30', 'images.png','2021-01-16 12:47:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card_activation`
--
ALTER TABLE `card_activation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card_activation`
--
ALTER TABLE `card_activation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
