-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2021 at 08:52 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ved`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `created_at:` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at:`) VALUES
(1, 'vedant', '$2y$10$hHao9qyEy4HsycYUuBgbN.Ob30nDeTl.W4VN7dn.KE7yNvjN4ai3y', '2021-10-04 14:51:49'),
(2, 'vedant1', '$2y$10$.l.aP6TIrlHIFazIZbhNZ.mGRU6EetyKeunmKVqcdC0bqCwm8M6Gm', '2021-10-04 14:55:20'),
(3, 'vedant12', '$2y$10$8/sf9boITZIeuOTQgsiJqeCrD8WgspkTVRDDX0dM.4ggDrSBHFiCC', '2021-10-04 14:56:28'),
(4, 'vedant5', '$2y$10$wxbafRt2iqgeEJZq0G3TzOyOlNqNynmo6rQ4w9ciNniLcpY5hxvha', '2021-10-04 14:58:35'),
(5, 'nikhil', '$2y$10$Oi/0AWydNsRW/gPYAV6hwua.oUI/CZB/vWLxrgUE2ogqP0YUHEWYm', '2021-10-04 15:04:08'),
(6, 'samiksha', '$2y$10$HeRHBP89kMTdFNNRWNGFZOYa1VX7bze9y5CVXOr7rfwevprc88hFO', '2021-10-04 15:14:09'),
(7, 'abcde', '$2y$10$NCe3pSPqwyw1DDyh6r740uOYqhOCqjf9gZuox8g3lzDIgwgxVCZXW', '2021-10-04 16:35:00'),
(8, 'vedant1234', '$2y$10$48rk8l6Le2iOo8Cidc38fu3rESkL.cbb57Tyux6gVfvBfpDe7i53m', '2021-10-04 16:44:40'),
(9, 'aadesh', '$2y$10$hOoKcYGvcywU/vc0cidMbONF8Teu.8chMEwe59R0Ih3T8SIe8HyOW', '2021-10-04 18:41:37'),
(10, 'samiksha1', '$2y$10$yaXvYHCoQAomEwsYh6RWT.GFwG6yOm4lKFRsKkxvlOZwTTOT4KFLO', '2021-10-05 05:48:35'),
(11, 'kanan1', '$2y$10$emzLbxh4xjQ.f76ETcBbyeTw/6gflrooiTlTAnPXxAJpquQG.y0qG', '2021-10-05 08:05:56'),
(12, 'v', '$2y$10$nbLjVfFIE0JopHg8ultb/uD0TW8HwhtVo6vS8ZRCikuTRa5LnIOYO', '2021-10-09 08:03:13'),
(13, 'ved', '$2y$10$PNzXOBdDbxjLnUzKMyzOTeAhezq/YGclZG7yNcWrd9L3dSqeUd.D6', '2021-10-09 08:07:05'),
(14, 'h', '$2y$10$7r2oaDoq4o/hILHPl05TuuSMNjJevKPT0gyv/CENUjhQSEu8FyHLi', '2021-10-09 18:04:27'),
(15, 'k', '$2y$10$tGbRbvHNnoKWJZ77PwGcrOPI0avBOsTCdVw3lA2PnCBH/HrrLuchy', '2021-10-09 18:24:04'),
(16, 'm', '$2y$10$ehc.94sNVyXOiyvQHw.uEeIg6x23flgYd01LHE.l/mlEcuURemPk.', '2021-10-09 18:38:09');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
