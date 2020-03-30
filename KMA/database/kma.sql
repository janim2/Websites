-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2019 at 08:02 AM
-- Server version: 10.0.36-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kma`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `admin_name` varchar(1000) NOT NULL,
  `admin_phone` int(11) NOT NULL,
  `admin_password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`admin_id`, `email`, `admin_name`, `admin_phone`, `admin_password`) VALUES
(1, 'stev@gmail.com', 'Stephen Ansah', 268977129, 'testing'),
(2, 'sarah@gmail.com', 'Sarah Smith', 23788666, 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_image` varchar(1000) NOT NULL,
  `news_caption` varchar(2000) NOT NULL,
  `news_message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_image`, `news_caption`, `news_message`) VALUES
(2, 'https://www.jimdo.com/static/6ddd0047c5c518accffa2abb6db438c9/a056a/hero_visual_en.png', 'Stay indoors Now', ''),
(6, 'https://www.jimdo.com/static/6ddd0047c5c518accffa2abb6db438c9/a056a/hero_visual_en.png', 'Threat from overseas', ''),
(7, 'https://www.jimdo.com/static/6ddd0047c5c518accffa2abb6db438c9/a056a/hero_visual_en.png', 'Trying again', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at dictum nunc. Ut eleifend dolor mi, id sodales libero laoreet a. Fusce mollis, nisl et sollicitudin posuere, nibh dolor dictum mauris, ut tristique magna ante vel tellus. Phasellus dignissim eu nunc ac gravida. Ut id rutrum augue. Nunc sit amet vestibulum magna. Donec sed sagittis orci. Nam scelerisque condimentum erat, in consequat est gravida at. Donec ornare dui odio, porttitor ultrices velit bibendum vel. '),
(8, 'https://semantic-ui.com/images/wireframe/image.png', 'Trying again', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at dictum nunc. Ut eleifend dolor mi, id sodales libero laoreet a. Fusce mollis, nisl et sollicitudin posuere, nibh dolor dictum mauris, ut tristique magna ante vel tellus. Phasellus dignissim eu nunc ac gravida. Ut id rutrum augue. Nunc sit amet vestibulum magna. Donec sed sagittis orci. Nam scelerisque condimentum erat, in consequat est gravida at. Donec ornare dui odio, porttitor ultrices velit bibendum vel. '),
(10, 'https://www.jimdo.com/static/6ddd0047c5c518accffa2abb6db438c9/a056a/hero_visual_en.png', 'Don\'t look back', 'Nam maximus, nunc et malesuada scelerisque, nisi dolor posuere enim, eu tempus felis erat et lacus. Praesent congue elementum vestibulum. Praesent tristique vitae nibh quis dapibus. Integer commodo quam odio, in convallis ipsum cursus at. Donec tincidunt, nulla ut pulvinar interdum, lacus arcu malesuada ligula, vel posuere est eros at urna. Curabitur justo ante, auctor ut nisl vitae, porta faucibus neque. Fusce ut nisi volutpat, bibendum sapien et, semper nisl. Suspendisse leo dui, vestibulum a consequat convallis, tempor non elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam nulla turpis, pharetra ut feugiat eu, pulvinar non sapien. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
