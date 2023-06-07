-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 07, 2023 at 07:12 PM
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
-- Database: `dash`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int NOT NULL,
  `message` text NOT NULL,
  `photo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `message`, `photo`, `name`, `title`, `status`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias iure doloremque quisquam laborum assumenda dolor ad omnis neque vitae aperiam asperiores explicabo unde inventore illo commodi, reprehenderit dolorum maiores nemo eaque at libero, nisi ducimus facilis. Nam officiis animi vero commodi quo, aut adipisci eos eveniet non vitae facere qui?', '1.jpg', 'John Smith', 'Creative designer', 1),
(2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias iure doloremque quisquam laborum assumenda dolor ad omnis neque vitae aperiam asperiores explicabo unde inventore illo commodi, reprehenderit dolorum maiores nemo eaque at libero, nisi ducimus facilis. Nam officiis animi vero commodi quo, aut adipisci eos eveniet non vitae facere qui?', '2.jpg', 'Smith Austin', 'Developer', 1),
(6, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias iure doloremque quisquam laborum assumenda dolor ad omnis neque vitae aperiam asperiores explicabo unde inventore illo commodi, reprehenderit dolorum maiores nemo eaque at libero, nisi ducimus facilis. Nam officiis animi vero commodi quo, aut adipisci eos eveniet non vitae facere qui?', '6.jpg', 'Mik Jack', 'Marketer', 0),
(10, 'They do this through collaboration between our strategists, designers and technologists.They craft beautiful and unique digital experiences.Unlimited power and customization possibilities.Pixel perfect design & clear code delivered to you.', '10.jpg', 'Emi Vaughan', 'Molestiae eos volup', 0);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int NOT NULL,
  `sub_title` varchar(100) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `action_btn` varchar(50) DEFAULT NULL,
  `action_link` text,
  `photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `sub_title`, `title`, `description`, `action_btn`, `action_link`, `photo`) VALUES
(1, 'Full Stack Developer', 'Anas Abdullah', 'I am a developer from Bangladesh', 'Contact Me', 'https://www.facebook.com/anas.abdullah12421/', 'banner.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Owen Knapp', 'hokakuw@mailinator.com', 'Voluptatem Voluptat', 'Ut temporibus non qu'),
(2, 'Rhea Herring', 'rymiji@mailinator.com', 'Quibusdam in id amet', 'Ea cupiditate sed mi'),
(3, 'Colton Davidson', 'kube@mailinator.com', 'Omnis sunt velit vo', 'Quidem amet elit c'),
(4, 'Hedwig Key', 'noxibam@mailinator.com', 'Elit dolor dolores ', 'Sunt voluptas nihil '),
(5, 'Kimberley Nicholson', 'kojuhocagi@mailinator.com', 'Proident libero et ', 'Cum quo voluptas exc'),
(6, 'Dara Solomon', 'qeralenor@mailinator.com', 'Cillum aliquip accus', 'In molestias qui lab'),
(7, 'Luke Franklin', 'rutuqijip@mailinator.com', 'Officia unde id haru', 'Consectetur sint eiu'),
(12, 'Claudia Nolan', 'vizugenixe@mailinator.com', 'Fugiat excepteur sit', 'Nihil tempora est co'),
(13, 'Dale Robbins', 'midyxaxary@mailinator.com', 'Reprehenderit labore', 'Nostrum sunt exerci'),
(14, 'Adam Larson', 'dajeso@mailinator.com', 'Ad error hic quos es', 'Ut dolor eaque sit d'),
(15, 'Knox Peters', 'culefudufu@mailinator.com', 'Consequatur dolores', 'Culpa ea nulla dolo'),
(16, 'Daniel Callahan', 'ciqyxebohu@mailinator.com', 'Excepturi veniam as', 'Vel exercitationem v'),
(17, 'Tamara House', 'fupuqu@mailinator.com', 'Possimus inventore ', 'Quia eos nesciunt '),
(20, 'Nathaniel Oneal', 'vyky@mailinator.com', 'Elit tenetur iure o', 'Qui recusandae Sed ');

-- --------------------------------------------------------

--
-- Table structure for table `expertise`
--

CREATE TABLE `expertise` (
  `id` int NOT NULL,
  `topic` varchar(50) NOT NULL,
  `percentage` int NOT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `expertise`
--

INSERT INTO `expertise` (`id`, `topic`, `percentage`, `status`) VALUES
(19, 'Html', 95, 1),
(20, 'css', 89, 1),
(21, 'Javascript', 70, 1),
(22, 'Jquery', 89, 0),
(23, 'Figma', 85, 0),
(24, 'Php', 70, 1),
(25, 'sass', 88, 1);

-- --------------------------------------------------------

--
-- Table structure for table `footer_logo`
--

CREATE TABLE `footer_logo` (
  `id` int NOT NULL,
  `logo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `footer_logo`
--

INSERT INTO `footer_logo` (`id`, `logo`) VALUES
(1, 'footer_logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int NOT NULL,
  `logo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `logo`) VALUES
(1, 'main_logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int NOT NULL,
  `menu_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `menu_link` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu_name`, `menu_link`) VALUES
(19, 'Home', '#banner'),
(20, 'Expertise', '#skillbar'),
(21, 'services', '#service'),
(23, 'Portfolio', '#portfolio'),
(26, 'Testimonial', '#testimonial'),
(27, 'Contact', '#contact');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `photo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `sub_title`, `photo`, `status`) VALUES
(5, 'Web Design', 'Psd to Html', '5.jpg', 1),
(6, 'Web Development', 'Dynamic', '6.jpg', 1),
(7, 'Graphics Design', 'Logo Design', '7.jpg', 1),
(8, 'App developer', 'Game', '8.jpg', 1),
(21, 'Cyber Security', 'Hacker', '21.jpg', 1),
(23, 'Consequatur ex illo ', 'Voluptatem quia dele', '23.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `status`) VALUES
(11, 'Graphics Branding Design', 'It can change the way we feel about a company and the products & services they offer.', 1),
(12, 'Front End Design Development', 'It can change the way we feel about a company and the products & services they offer.', 1),
(13, 'Digital Content Marketing', 'It can change the way we feel about a company and the products & services they offer.', 0),
(14, 'Application Devlopment', 'It can change the way we feel about a company and the products & services they offer.', 1),
(15, 'Videography Photography', 'It can change the way we feel about a company and the products & services they offer.', 1),
(16, 'Wordpress Development', 'It can change the way we feel about a company and the products & services they offer.', 0),
(18, 'Motion Graphics	', 'It can change the way we feel about a company and the products & services they offer.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `photo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `photo`) VALUES
(7, 'Anas Abdullah', 'anas161090@gmail.com', '$2y$10$eT.sx5XXWeKRSlRMvlmRreTCfACVZkjIQIh/zVHHkDwnl51rZfWGG', '7.jpg'),
(26, 'Developer Anas', 'devanas124@gmail.com', '$2y$10$4.lRbBCgPkaCKOm/D77KNuh6oQCjF0VP7ZBR/FH9H1qPkv79bOB3q', '26.jpg'),
(27, 'Sofiqul Islam Sultan', 'wynadu@mailinator.com', '$2y$10$IGdHZQqSxzJRnaCnaWPNkORaqeNJRQ4f4gSFlj8u1kfALi1ANWMuG', '27.jpg'),
(29, 'Sharmin Akter Selina', 'tyfaderome@mailinator.com', '$2y$10$Fp0K3chUV8KfDArVfbPwdOPqcyF86KFJBDXECKJJOu13PVLQyiHxS', '29.jpg'),
(30, 'Umme Salma', 'viwugo@mailinator.com', '$2y$10$9Lb6zvm5UtQr40P7Yz0Wv.LZiE061M5BvrL2xGeOznMj52X3PBXXO', NULL),
(31, 'Abdur Rahman', 'kumyba@mailinator.com', '$2y$10$Aecp5WlPAEftGPYYjQ4R7eErOLMpFle5wkTR25fKdj0RgNkPJfSeu', NULL),
(32, 'Mofizur Rahman Tapas', 'bejimudad@mailinator.com', '$2y$10$wICE5ynY.hK0EI1QofygM.lmgl4rgBEPnu9By4Bb977EAQPrees1G', NULL),
(33, 'Sanjida Akter', 'dalycyxo@mailinator.com', '$2y$10$8Vy3QC0c2BuHn5X1zolY6OhQH.rH.9kFlBSYaafVJHAQuWEz3kY4e', NULL),
(34, 'Anan Rahman', 'hekyger@mailinator.com', '$2y$10$AUaOqckQ5abpu7iftGnvh.QorAedgFR52uFZc3ztRG9KH9KXn4eKe', NULL),
(35, 'Arafat Rahman', 'zabuv@mailinator.com', '$2y$10$ZGn0b6RA1JIk9q/qMJSg1.NOrsWyF5W0R4MOWOquQBdzZCmm3Aspa', NULL),
(36, 'Tasmiya Tabbasum', 'huqo@mailinator.com', '$2y$10$jcip.FFiy9HmPv2VOBGNI.kzvz8HkFr0s3YLnA0MY3oiXmlEoOm9W', NULL),
(37, 'Nayeemul Karim', 'head@gmail.com', '$2y$10$lwqKJ0JqdZsMo7szK1QFYezEgw7uVJ8QO/o2io2IHrDzPHtVlAkD6', NULL),
(38, 'Nazim Uddin', 'tajiwizit@mailinator.com', '$2y$10$KOF2H7SGbbGfuAD5fMnLyedYVY1mufrnJqZ3imn3yfa8JtABDgGKy', NULL),
(39, 'Rabeya Khatun', 'kyfagikety@mailinator.com', '$2y$10$vgALbfYxFzBcE5Zqvo2QBu3TdXB7jgn1DoBFOqnq5KmfZJLI4o1NS', NULL),
(40, 'Saimon Khan', 'saimon152166@gmail.com', '$2y$10$yirVy0qN40Q/4PzzwQnpDur2AtLrusLVov3CXwVmRyJiHhdr0wrya', '40.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expertise`
--
ALTER TABLE `expertise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_logo`
--
ALTER TABLE `footer_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `expertise`
--
ALTER TABLE `expertise`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `footer_logo`
--
ALTER TABLE `footer_logo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
