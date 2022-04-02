-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 07:02 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `agent_id` int(11) NOT NULL,
  `agent_name` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(11) NOT NULL,
  `b_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_desc` text NOT NULL,
  `cat_slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cus_id` int(11) NOT NULL,
  `cus_name` int(11) NOT NULL,
  `cus_address` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `h_id` int(11) NOT NULL,
  `h_name` varchar(50) NOT NULL,
  `h_address` varchar(100) NOT NULL,
  `h_contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `log_id` int(11) NOT NULL,
  `log_status` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(200) NOT NULL,
  `package_description` varchar(200) NOT NULL,
  `package_price` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(50) NOT NULL,
  `post_content` text NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `post_updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_content`, `thumbnail`, `category_id`, `user_id`, `post_created`, `post_updated`) VALUES
(1, '$title', '$content', '$thumbnail', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'this is title 1', '                        	thsi sis asfsaiaslfsdf', '', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'this is title 1', '                        	thsi sis asfsaiaslfsdf', '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'my name', '                        	asdfasfasdfsadf', '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'my name', '                        	asdfasfasdfsadf', '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'titleasf aasdf ', '                        	asf asf asdf ', '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'mamu', '                        	asfd asdf asdf asdf', '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'dadu', '                        	this is dadu', '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'asfsadf', '                        	safsafdasdf safd ', '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'asfsadf', '                        	safsafdasdf safd ', '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'asfsadf', '                        	safsafdasdf safd ', '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'asfsadf', '                        	safsafdasdf safd ', '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'asfsadf', '                        	safsafdasdf safd ', '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'asfsadf', '                        	safsafdasdf safd ', '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'asfsadf', '                        	safsafdasdf safd ', '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'asfsadf', '                        	safsafdasdf safd ', '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'asfsadf', '                        	safsafdasdf safd ', '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'asfsadf', '                        	safsafdasdf safd ', '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'post twenty', 'lorem ipsum dolor sit amet.', '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Agents'),
(3, 'Users');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_phone_number` varchar(15) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `user_name`, `user_address`, `user_phone_number`, `user_email`, `user_password`) VALUES
(1, 'Ritee', 'Lama', 'ritee_lama', 'USA', '54842154874', 'ritee@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'Savitri', 'Basnet', 'savitri_basnet', 'Usa', '789456123', 'savitribasnet@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(3, 'Manisha', 'Rai', 'manisha_rai', 'Usa', '7894514785', 'manisha@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(4, 'Rajan', 'Lama', 'rajan_lama', 'Usa', '1448536987', 'rajan@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(5, 'Mickey', 'Mouse', 'mickey_mouse', 'Disneyland', '7412589630', 'mickey@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(6, 'Goofy', 'Mouse', 'goofy_mouse', 'Disneyland', '7894561230', 'goofy@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(7, 'Aakriti', 'Kc', 'aakriti_kc', 'Canada', '7894561230', 'aakriti@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(8, 'Diksha', 'Ghimire', 'diksha_ghimire', 'Canada', '7894561230', 'diksha@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(9, 'Abc', 'Def', 'abc_def', 'Usa', '21546541', 'abc@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(10, 'Kriti', 'Lama', 'kriti_lama', 'Usa', '126874845648', 'kriti@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(11, 'Krisha', 'Lama', 'krisha_lama', 'Usa', '487516358748945', 'krisha@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(12, 'Sfasfdasfd', 'Safdsadf', 'sfasfdasfd_safdsadf', 'Safdasfd', '7412589630', 'rajan.lama786@gmail.com', '040b7cf4a55014e185813e0644502ea9'),
(13, 'Kalpana', 'Dhungana', 'kalpana_dhungana', 'Canada', '487516358748945', 'kalpana@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(14, 'Savitri', 'Basnet', 'savitri_basnet_1', 'Usa', '7412589630', 'savu@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`),
  ADD KEY `agent_id` (`agent_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
