-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2022 at 12:26 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jkhanna1_job_posting`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_last_login` datetime DEFAULT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `email`, `user_name`, `first_name`, `last_name`, `date_registered`, `date_last_login`, `password`) VALUES
(1, 'min@gmail.com', 'Muskan', 'Muskan', 'mouse', '2021-11-23 05:15:46', NULL, '$2y$10$wSqKEgL4QbpNn39TlTxc/eT3wvxcjlWlIlDmSy37W6B86dz.N./lu'),
(2, 'bob@gmail.com', 'Steve', 'Steve', 'builder', '2021-11-23 05:15:37', '2021-11-22 21:56:25', '$2y$10$pKTEoAAO871XFIQ.12L9b.Wt.4fDt/0DpdjlvmL1f5H7wVRyAF.uS'),
(3, 'micky@gmail.com', 'Michael', 'Michael', 'micky', '2021-12-11 06:20:28', '2021-12-10 23:20:28', '$2y$10$Llpy3CsJ9JDLfHOSscPId.wXCzdCU0fY3yQO1QYpkgaqX8texkRj6'),
(4, 'minny@gmail.com', 'Natalie', 'Natalie', 'minny', '2021-11-23 05:16:04', NULL, '$2y$10$IGRVlJOVAZo6yHai2CmtquymZrVNTL3dQ7VoGiR5gM91SCuqvvRq2'),
(7, 'amy@gmail.com', 'Amy', 'Amy', 'dfd', '2021-11-23 05:15:20', NULL, '$2y$10$LQX96Eh/uTXKngTBt6OZDubiRXd4mhN5vf42k/Uj4P3KA/KBjEX.a'),
(9, 'jkbkuj@gmail.com', 'Jenny', 'Jenny', 'dfdfd', '2021-11-23 05:15:28', NULL, '$2y$10$Tfw3w7FYw6iYug8c68L6cOXIpolVgxDqsXhJ1vfR5i.M1HEmCiUxq'),
(11, 'a', 'a', 'a', 'a', '2021-11-27 20:00:51', NULL, ''),
(12, 'b', 'b b', 'a', 'a', '2021-11-27 20:01:09', NULL, ''),
(13, '<h1>test</h1>', '<h1>test</h1>', '<h1>test</h1>', '<h1>test</h1>', '2021-11-27 20:01:29', NULL, ''),
(14, 'mpoulin@nait.ca', 'michelle', 'Michelle', 'Poulin', '2021-11-27 20:02:53', NULL, ''),
(15, 'Jaisairam@13', 'jkhanna', 'Jagriti', 'Khanna', '2021-11-27 22:07:56', NULL, ''),
(16, 'mbraun@gmail.com', 'mbraun', 'Matthew', 'Braun', '2021-11-27 22:08:54', NULL, ''),
(17, 'dummy@gmail.com', 'dummy', 'dummy', 'dummy', '2021-11-27 22:20:11', NULL, '$2y$10$S5AeRfu4Y8SDg24SfRYf0e5n7lRH42DHeG5spyZ5z3msNdIYvQJ66'),
(18, 'm', 'm', 'm', 'm', '2021-12-05 19:57:39', '2021-12-05 12:57:39', '$2y$10$7vRJ94s1qO7.wMmmaQYja.A9JWC/.FxsrH..XJmlbF01xZd8vEwcW'),
(19, 'mm', 'mm', 'michelle', 'poulin', '2021-11-28 21:39:48', '2021-11-28 14:39:48', '$2y$10$M2us6wj1T2K6kEjjkTRRsesNYCPe0Nf.NdTe.raj0dAbCCgbJc/mC'),
(20, 'd', 'd d', 'd', 'd', '2021-11-29 17:36:25', NULL, '$2y$10$Wzxk3V7Yz4N0P5t1QwOAdetWVeW242gIIAwBbsykgOoDuHQkQIxa2'),
(21, 'mbraunn@gmail.com', 'mbraunn', 'Matthew', 'Braun', '2021-11-30 05:29:33', '2021-11-29 22:29:33', '$2y$10$nj5VkJJsPLP/NSBMBVfgw.Tazlw5pvOVj.0geJqopmeLRoap89kA.'),
(22, 'jk@gmail.com', 'jk', 'j', 'k', '2022-03-21 05:25:34', '2022-03-20 23:25:34', '$2y$10$.0xNCBfZBjT4LsDxs9HeS.mlI0/025PXlp4sZbDpMOOy8nTIAhg3u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
