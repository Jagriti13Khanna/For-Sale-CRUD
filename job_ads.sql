-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2022 at 12:23 AM
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
-- Table structure for table `job_ads`
--

CREATE TABLE `job_ads` (
  `a_id` int(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `ad` text NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_yn` char(1) NOT NULL DEFAULT 'N',
  `job_filled_yn` char(1) NOT NULL DEFAULT 'N',
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_ads`
--

INSERT INTO `job_ads` (`a_id`, `title`, `ad`, `date_posted`, `deleted_yn`, `job_filled_yn`, `u_id`) VALUES
(16, 'Chief Meme Officer', 'Bud Light Seltzer is hiring for a new position on its marketing team the brands first chief meme officer.', '2021-11-23 05:19:48', 'N', 'N', 1),
(17, 'Fiverr ', 'If you are good at what you do, you can work anywhere. If you are the best at what you do, come work at Fiverr.', '2021-11-23 05:18:49', 'N', 'N', 1),
(18, 'Tattoo Artist Wanted', 'If you have the fine motor skills, proficiency with a pan, and patience needed for a true tattoo master, you will be rewarded with a QR code that will provide you with the contact information of the employer. ', '2021-11-23 05:07:09', 'N', 'N', 1),
(19, 'Technical Artist', 'We are looking for a Technical Artist with procedural modelling, level design and blueprint experience in Unreal Engine. You will help us revolutionize the world of computer vision, AI, and robotics by building photorealistic environments in UE4. ', '2021-11-23 05:18:27', 'N', 'N', 1),
(20, '2D Harmony Compositing Artist', '\r\nDo you have production experience as a 2D Harmony Comp Artist? We are currently recruiting for an artist to join our Vancouver studio team. As a 2D Harmony Comp Artist, you will be responsible for compositing work in Harmony sequences as required, which meet the aesthetic, creative, and technical quality standards of the production and in accordance with the production deadlines.', '2021-11-23 05:08:15', 'N', 'N', 2),
(21, 'Artist - Summer Job', 'Hiring for Body Artists and Face Painter positions. No experience necessary - we offer full training and lots of practice time!\r\n\r\n\r\nPaid hourly + Tips, Full-time and Part-time positions available.\r\n\r\nSeasonal June-September', '2021-11-23 05:08:15', 'N', 'N', 2),
(22, 'Tools/Pipeline Developer (Technical Artist)', 'As a Tools/Pipeline Developer on the team, you will focus on a large asset library product that has been developed within EA Create. You will gather requirements, design tools, debug, build pipelines and tools, automate processes for curation and uploading assets, work on complex problems with artists and other engineers in the domain of tool, pipeline, and develop workflows to improve quality and improve processes. You will report to the product Development Director.', '2021-11-23 05:09:17', 'N', 'N', 2),
(23, 'User Interface Artist (Apex Legends)', 'We are looking for a User Interface Artist who will help create a visually appealing user experience for Apex Legends . Reporting to our UX/UI Lead, you will develop beautiful and readable menus, icons, interfaces, and more to help create a seamless and enjoyable experience for our players.', '2021-11-23 05:19:07', 'N', 'N', 2),
(24, 'UI Artist', 'The UI Artist will be working closely with a diverse team of developers, designers and producers to work on innovative games. The ideal candidate is creative and fearless in experimenting with inventive UI design. You will be working with the team to define the look and feel of a game, designing solutions that uphold the Game Hive standard. You are both intuitive and attentive, and cant wait to flex your artistic skills in the innovative mobile space.', '2021-11-30 04:16:53', 'N', 'Y', 3),
(25, 'Lead Artist (Clipwire Games)', 'We are currently looking for an Art Lead with a minimum of 5 years in the game industry and 2+ years in a leadership role, to lead our art teams work on our top-grossing game - Bingo Story, as well as future upcoming projects.', '2021-11-30 04:20:58', 'N', 'Y', 3),
(26, 'Web/Email Designer (Design + HTML+ CSS)', 'Our retail client is looking for an Email Designer to join their team on a permanent, fulltime basis. This will either start out as a contract or be a direct permanent hire, depending on preferences.\r\n', '2021-11-23 05:17:05', 'N', 'N', 7),
(27, 'Beauty Artist - West Edmonton', 'The Beauty Artist provides exceptional customer service by creating a unique, inviting, entertaining, and educational multi-brand shopping destination for the Morphe babe and demonstrates their artistry skills with clients upon request. In addition, this person must create a collaborative work environment on the sales floor, provide excellent service and meet and exceed store financial goals. In addition, the Beauty Artist will be responsible for operational activities as assigned.', '2021-11-23 05:17:05', 'N', 'N', 7),
(29, 'wood', 'splitting', '2021-11-27 23:24:24', 'N', 'N', 18),
(30, 'wood pile', 'needs splitting', '2021-11-27 23:24:32', 'N', 'N', 18),
(31, 'test', 'est', '2021-11-28 21:39:58', 'N', 'N', 19),
(32, 'Lead Artist (Clipwire Games)', 'We are looking for an Art Lead with a minimum of 5 years in the game industry and 2+ years in a leadership role, to lead our art teams work on our top-grossing game - Bingo Story, as well as future upcoming projects.', '2021-11-29 17:35:25', 'N', 'Y', 3),
(33, 'fvbcbdbfc', 'fffffffffffffffffffffffffffff', '2022-03-21 05:30:40', 'N', 'N', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_ads`
--
ALTER TABLE `job_ads`
  ADD PRIMARY KEY (`a_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_ads`
--
ALTER TABLE `job_ads`
  MODIFY `a_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
