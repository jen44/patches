-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2016 at 05:18 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notes`
--

-- --------------------------------------------------------

--
-- Table structure for table `backgrounds`
--

CREATE TABLE `backgrounds` (
  `id` int(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backgrounds`
--

INSERT INTO `backgrounds` (`id`, `filename`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'chalkboard.jpg', 16, '2016-05-19 03:15:59', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'flat-yellow.jpg', 16, '2016-05-19 03:16:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'galaxy.jpg', 16, '2016-05-19 03:16:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'purple-triangle.png', 16, '2016-05-19 03:16:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'triangles.png', 16, '2016-05-19 03:16:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'flowers.jpg', 16, '2016-05-19 03:16:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'flowers-1.jpg', 16, '2016-05-19 03:16:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'grey-line.jpg', 16, '2016-05-19 03:16:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'red-tree.jpg', 16, '2016-05-19 03:16:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'tree.jpg', 16, '2016-05-19 03:16:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'city.jpg', 16, '2016-05-19 03:16:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'graphic.jpg', 16, '2016-05-19 03:16:21', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'micro.jpg', 16, '2016-05-19 03:16:23', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'ruby.jpg', 16, '2016-05-19 03:16:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'blue-wall.jpg', 16, '2016-05-19 03:16:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'green-wall.jpg', 16, '2016-05-19 03:16:31', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'red-wall.jpg', 16, '2016-05-19 03:16:33', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'idea.jpg', 16, '2016-05-19 03:16:37', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'rose.jpg', 16, '2016-05-19 03:16:39', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'mug.jpg', 16, '2016-05-19 03:16:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'sapphire.jpg', 16, '2016-05-19 03:16:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `boards`
--

CREATE TABLE `boards` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `background` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `followers` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boards`
--

INSERT INTO `boards` (`id`, `name`, `description`, `background`, `user_id`, `followers`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Ezreal''s board 1 edited', 'This is Test board 1 on Ezreal''s account. and the description was edited through the settings page', 'galaxy.jpg', 8, '7,8,9,10', '2016-05-17 04:19:41', '2016-05-16 16:19:41', '0000-00-00 00:00:00'),
(5, 'Ezreal''s board 2', 'This is Test board 2 on Ezreal''s account.', 'purple-triangle.png', 8, '10,11,12', '2016-05-15 21:56:49', '2016-05-15 09:56:49', '0000-00-00 00:00:00'),
(6, 'Sona''s board 2', 'This is Test board 2 on Sona''s account.', 'purple-triangle.png', 13, '1,6,10', '2016-05-16 01:29:25', '2016-05-15 13:29:25', '0000-00-00 00:00:00'),
(9, 'Ezreal''s new board', 'New board created from the board creation form.', 'flowers.jpg', 8, '', '2016-05-17 01:18:06', '2016-05-16 13:18:06', '0000-00-00 00:00:00'),
(14, 'Sona''s Edited board', 'This is Sona''s test board 1', 'flowers.jpg', 13, '', '2016-05-19 00:22:35', '2016-05-18 12:22:35', '0000-00-00 00:00:00'),
(15, 'asdfasdfdssfsdf', 'This board is for deleting m9', 'chalkboard.jpg', 13, '', '2016-05-18 22:49:47', '2016-05-18 10:49:47', '0000-00-00 00:00:00'),
(20, 'Coding is so hard', 'Help me', 'grey-line.jpg', 8, '', '2016-05-18 03:55:19', '2016-05-17 15:55:19', '0000-00-00 00:00:00'),
(21, 'Gems', 'Gems!', 'purple-triangle.png', 7, '', '2016-05-18 03:58:54', '2016-05-17 15:58:54', '0000-00-00 00:00:00'),
(22, 'Ruby for vigor', 'Outrageous', 'ruby.jpg', 7, '', '2016-05-19 02:40:55', '2016-05-18 14:40:55', '0000-00-00 00:00:00'),
(23, 'Sapphire for divinity', 'Outrageous', 'sapphire.jpg', 7, '', '2016-05-19 02:41:30', '2016-05-18 14:41:30', '0000-00-00 00:00:00'),
(24, 'Opal for harmony', 'Outrageous', 'galaxy.jpg', 7, '', '2016-05-18 04:00:42', '2016-05-17 16:00:42', '0000-00-00 00:00:00'),
(25, 'Emerald for insight', 'Outrageous', 'green-wall.jpg', 7, '', '2016-05-19 02:41:46', '2016-05-18 14:41:46', '0000-00-00 00:00:00'),
(26, 'Outrageous', 'Truly truly truly outrageous...', 'flowers-1.jpg', 7, '', '2016-05-19 02:41:59', '2016-05-18 14:41:59', '0000-00-00 00:00:00'),
(27, 'Rules are made to be broken', 'Like buildings... and people.', 'chalkboard.jpg', 12, '', '2016-05-18 04:09:35', '2016-05-17 16:09:35', '0000-00-00 00:00:00'),
(28, 'Let''s just behave...', 'Said no one, ever.', 'grey-line.jpg', 12, '', '2016-05-18 04:10:10', '2016-05-17 16:10:10', '0000-00-00 00:00:00'),
(29, 'Guns don''t kill people...', 'Until you shoot them.', 'purple-triangle.png', 12, '', '2016-05-18 04:11:05', '2016-05-17 16:11:05', '0000-00-00 00:00:00'),
(30, 'Come and join me...', 'Come and play!', 'flowers-1.jpg', 12, '', '2016-05-18 04:11:30', '2016-05-17 16:11:30', '0000-00-00 00:00:00'),
(31, 'Piltover''s finest.', 'Pew.', 'triangles.png', 14, '', '2016-05-18 04:12:19', '2016-05-17 16:12:19', '0000-00-00 00:00:00'),
(32, 'Wanna see a hat trick?', 'Tada!', 'flowers-1.jpg', 14, '', '2016-05-18 04:12:33', '2016-05-17 16:12:33', '0000-00-00 00:00:00'),
(33, 'Lulugar is the best rengar', 'ARURU', 'chalkboard.jpg', 9, '', '2016-05-18 04:13:09', '2016-05-17 16:13:09', '0000-00-00 00:00:00'),
(34, 'Beep boop!', 'Precisely.', 'flat-yellow.jpg', 10, '', '2016-05-18 04:14:03', '2016-05-17 16:14:03', '0000-00-00 00:00:00'),
(35, 'Captain Teemo on duty!', 'Teehee!', 'galaxy.jpg', 11, '', '2016-05-18 04:15:00', '2016-05-17 16:15:00', '0000-00-00 00:00:00'),
(36, 'Simple Guide to Note.', 'This board is to help the new users to become familiar with Note.', 'grey-line.jpg', 16, '', '2016-05-18 04:34:50', '2016-05-17 16:34:50', '0000-00-00 00:00:00'),
(37, 'Admin''s board', 'Admin board', 'flowers-1.jpg', 16, '', '2016-05-18 22:52:31', '2016-05-18 10:52:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `following`
--

CREATE TABLE `following` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `board_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `file` varchar(100) NOT NULL,
  `board_id` int(11) NOT NULL,
  `pos_x` varchar(100) NOT NULL,
  `pos_y` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `user_id`, `title`, `content`, `file`, `board_id`, `pos_x`, `pos_y`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 7, 'Note 3 on Ezreal''s board', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, dolore.', '', 5, '543', '502', '2016-05-16 00:15:34', '2016-05-15 12:15:34', '0000-00-00 00:00:00'),
(6, 9, 'Note 3 on Sona''s board', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, dolore.', '', 6, '472', '391', '2016-05-16 00:19:11', '2016-05-15 12:19:11', '0000-00-00 00:00:00'),
(8, 8, 'Ezreal''s Note', 'On Sona''s board', '', 14, '266', '339', '2016-05-16 23:28:05', '2016-05-16 11:28:05', '0000-00-00 00:00:00'),
(21, 13, 'New note', 'New note content', '', 6, '174', '140', '2016-05-16 09:49:38', '2016-05-16 09:49:38', '0000-00-00 00:00:00'),
(22, 13, 'New note', 'New note content', '', 6, '556', '219', '2016-05-16 09:49:54', '2016-05-16 09:49:54', '0000-00-00 00:00:00'),
(37, 13, 'New note', 'New note content', '', 14, '257', '215', '2016-05-16 22:32:13', '2016-05-16 10:32:13', '0000-00-00 00:00:00'),
(39, 13, 'Hmm..', 'New note content', '', 14, '568', '444', '2016-05-17 05:35:56', '2016-05-16 17:35:56', '0000-00-00 00:00:00'),
(40, 13, 'New note', 'New note content', '', 5, '462', '91', '2016-05-16 10:46:06', '2016-05-16 10:46:06', '0000-00-00 00:00:00'),
(52, 8, 'New note', 'New note content', '', 14, '650', '74', '2016-05-16 11:27:58', '2016-05-16 11:27:58', '0000-00-00 00:00:00'),
(88, 8, 'Edited', 'New note content', '', 9, '463', '188', '2016-05-17 22:56:48', '2016-05-17 10:56:48', '0000-00-00 00:00:00'),
(89, 8, 'New note', 'safasdf', '', 9, '241', '220', '2016-05-17 23:01:11', '2016-05-17 11:01:11', '0000-00-00 00:00:00'),
(90, 16, 'Hi! I''m Admin', 'Just fooling around...', '', 5, '948', '437', '2016-05-18 04:28:30', '2016-05-17 16:28:30', '0000-00-00 00:00:00'),
(92, 16, 'Note 1', 'Hello there! Welcome to Note. Double click on the board to start :)', '', 36, '160', '101', '2016-05-18 04:29:58', '2016-05-17 16:29:58', '0000-00-00 00:00:00'),
(93, 16, 'Note 2', 'A note popped up! Double click on its title and content to edit the text! Try it out!', '', 36, '163', '269', '2016-05-18 04:34:02', '2016-05-17 16:34:02', '0000-00-00 00:00:00'),
(94, 16, 'Note 3', 'You can drag and put your new note anywhere in this board. ', '', 36, '164', '432', '2016-05-18 04:34:02', '2016-05-17 16:34:02', '0000-00-00 00:00:00'),
(95, 16, 'Note 4', 'If you don''t want your note there anymore, simply drag the note to the trash bin in the bottom right corner of this board! ', '', 36, '165', '581', '2016-05-18 04:34:04', '2016-05-17 16:34:04', '0000-00-00 00:00:00'),
(101, 13, 'New notexzvZXCXZc', 'New note contentZXc', '', 15, '511', '357', '2016-05-18 22:50:47', '2016-05-18 10:50:47', '0000-00-00 00:00:00'),
(102, 13, 'New note', 'New note content', '', 15, '787', '96', '2016-05-18 22:50:46', '2016-05-18 10:50:46', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `password`, `avatar`, `admin`, `created_at`, `updated_at`, `deleted_at`, `remember_token`) VALUES
(5, 'Tablet', 'Tablet', 'tablet@gmail.com', '$2y$10$XSEXZ.HLI.GrT2M9EK/hqOqtUWp.ZFaOOMPJaBgh4BvQA9EkmrZwi', '1.png', 0, '2016-05-01 23:04:26', '2016-05-01 10:54:51', '0000-00-00 00:00:00', ''),
(6, 'Magus', 'Magus', 'magus@gmail.com', '$2y$10$g0GLpE1OgX.X9QuZJSqc/ewNBaL7WgpNKvA7i97rgjAqSQ1oYB5by', '2.png', 0, '2016-05-01 23:04:31', '2016-05-01 10:55:15', '0000-00-00 00:00:00', ''),
(7, 'Taric', 'Taric', 'taric@gmail.com', '$2y$10$5zh9BlLCcS2yPAhTHdtIXegqC05Vca1BGEUY44OsrmJz.KMwoIQdC', '3.png', 0, '2016-05-15 21:09:59', '2016-05-15 09:09:59', '0000-00-00 00:00:00', 'sTI2exEBcac6AmDDFd8GaZ6J1p0uQDMV6zdJmbvNttxS9KZdQEQH23dSYiPX'),
(8, 'Ezreal', 'Ezreal', 'ezreal@gmail.com', '$2y$10$exbJnhHqA.v64zU9Pgmwe.WBdAIm0UEylPHbYL4bbD9kEAojd7FrS', '4.png', 0, '2016-05-16 00:15:49', '2016-05-15 12:15:49', '0000-00-00 00:00:00', 'fGxKiHtVUCGDYt6ZXLWmsByuQYD03YnjkexoxpiPEWyOZaT1h075WMlvvPqd'),
(9, 'Rengo', 'Rengo', 'rengo@gmail.com', '$2y$10$q/K3/YfJvRo.q96gENUMVu5L4d.kDlQJ5fw1PM7quabXRM3XCzIYK', '5.png', 0, '2016-05-01 23:04:41', '2016-05-01 10:57:04', '0000-00-00 00:00:00', ''),
(10, 'Blitz', 'Blitz', 'blitz@gmail.com', '$2y$10$oBSdzOocIyeXRrga6SYHeOZcbEgHrU9nrQNyGC6Qlf0PGMoXBlw.G', '6.png', 0, '2016-05-01 23:04:44', '2016-05-01 10:57:20', '0000-00-00 00:00:00', ''),
(11, 'Teemo', 'Teemo', 'teemo@gmail.com', '$2y$10$hQKHFxLIjHKVfd3mTBujt.9jOFoeWjuTWYqzSJy5oGfGFYhLlImrK', '8.png', 0, '2016-05-01 23:04:57', '2016-05-01 10:57:29', '0000-00-00 00:00:00', ''),
(12, 'Jinx', 'Jinx', 'jinx@gmail.com', '$2y$10$FEyxSCz/EhlihKdBJikgyOCoUVOMesYUIEdZotFCIcJAPggSu0L0a', '9.png', 0, '2016-05-01 23:04:54', '2016-05-01 10:57:39', '0000-00-00 00:00:00', ''),
(13, 'Sona', 'Sona', 'sona@gmail.com', '$2y$10$EtWZMfWCyKPcTKMciwB6jOwBLReXd6EfnX7o0ZF/1kXTKOu46zaHi', 'avatar-user-131463349233.jpg', 0, '2016-05-18 23:07:31', '2016-05-18 11:07:31', '0000-00-00 00:00:00', 'EB9sNH1iCR6PDBuLsCVJ8Y0Z5Xnsi3xEK4d5g6CGkwPpfI9Bmj4kztC1Y1WU'),
(14, 'Cait', 'Caitlyn', 'caitlyn@gmail.com', '$2y$10$eJE1WRkFzqbN0VUMJ2vbKORhTDiKUKDy4eZhBr092Bi.eMp/FZFXS', '10.png', 0, '2016-05-01 23:05:05', '2016-05-01 10:58:04', '0000-00-00 00:00:00', ''),
(15, '1', '1', '1', '$2y$10$oefQPXxklHsHknJawNwpueWVjk/6eK2dTubUNKr1N5M3HoXP5U6j6', 'default_avatar.png', 0, '2016-05-09 05:21:22', '2016-05-08 17:21:22', '0000-00-00 00:00:00', ''),
(16, 'admin', 'admin', 'admin@admin.com', '$2y$10$VOCx.ZcO9l3fHGZpGKC4cOFJ.yk4NndMjGn41jhNg1Outc9RgwbeK', 'avatar-user-161463370494.jpg', 1, '2016-05-16 03:52:47', '2016-05-15 15:52:47', '0000-00-00 00:00:00', '48gaQuEMD9FMcff1Z1WAnofCqcnJ2o6TMU5Uj4RQWByRd9Pe0HfE5TscLIng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backgrounds`
--
ALTER TABLE `backgrounds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `boards`
--
ALTER TABLE `boards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `following`
--
ALTER TABLE `following`
  ADD PRIMARY KEY (`id`),
  ADD KEY `follower_id` (`user_id`),
  ADD KEY `board_id` (`board_id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `board_id` (`board_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backgrounds`
--
ALTER TABLE `backgrounds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `boards`
--
ALTER TABLE `boards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `following`
--
ALTER TABLE `following`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
