-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2022 at 06:41 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_30760715_tutorial11`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `dob` date DEFAULT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `is_delete` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `password`, `age`, `dob`, `city`, `state`, `country`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'NIRAV PATEL', 'nirav1@gmail.com', '123457', 19, '2002-08-15', 'SILVASSA', 'DNH', 'INDIA', 0, '2022-03-16 18:09:44', '2022-03-17 05:33:33'),
(2, 'krishna patel', 'kpatel581@rku.ac.in', '987654', 19, '2003-03-11', 'vapi', 'gujarat', 'india', 0, '2022-03-16 19:18:33', '2022-03-17 03:38:05'),
(3, 'Pooran Kunwar', 'pkanwar316@rku.ac.in', '456123', 19, '2003-10-15', 'SILVASSA', 'DNH', 'INDIA', 0, '2022-03-16 20:15:13', '2022-03-17 03:38:10'),
(4, 'Darshan', 'dzalavadiya122@rku.ac.in', 'password', 20, '2001-12-24', 'Mahuva', 'gujarat', 'INDIA', 0, '2022-03-17 03:39:33', '2022-03-17 05:38:30'),
(5, 'Darpan Hirapara', 'dhirapara901@gmail.com', '123456', 20, '2002-08-26', 'Junagadh', 'Gujarat', 'INDIA', 0, '2022-03-17 05:34:54', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
