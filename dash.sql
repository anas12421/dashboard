-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 12, 2023 at 06:25 PM
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
(1, 'They do this through collaboration between our strategists, designers and technologists.They craft beautiful and unique digital experiences.Unlimited power and customization possibilities.Pixel perfect design & clear code delivered to you.', '1.jpg', 'Forrest Salazar', 'Ab earum ipsum elit', 1),
(2, 'They do this through collaboration between our strategists, designers and technologists.They craft beautiful and unique digital experiences.Unlimited power and customization possibilities.Pixel perfect design & clear code delivered to you.', '2.jpg', 'Vernon Griffith', 'Aperiam ullamco natu', 1),
(3, 'They do this through collaboration between our strategists, designers and technologists.They craft beautiful and unique digital experiences.Unlimited power and customization possibilities.Pixel perfect design & clear code delivered to you.', '3.jpg', 'TaShya Owens', 'Laborum ipsam minima', 1),
(4, 'They do this through collaboration between our strategists, designers and technologists.They craft beautiful and unique digital experiences.Unlimited power and customization possibilities.Pixel perfect design & clear code delivered to you.', '4.jpg', 'Wynter Dickerson', 'Est explicabo Vel p', 1);

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
  `message` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `time` datetime(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `status`, `time`) VALUES
(64, 'Ori Mathis', 'hyjosukybo@mailinator.com', 'Sit iusto voluptatem', 'Ut et fugiat pariatu', 1, '2023-06-10 12:58:21.0'),
(65, 'Finn Colon', 'lidif@mailinator.com', 'Delectus mollitia n', 'Quos incididunt labo', 1, '2023-06-10 12:58:23.0'),
(66, 'Guinevere Richmond', 'kuqodiby@mailinator.com', 'Eius voluptatem Qui', 'Obcaecati voluptatem', 1, '2023-06-10 12:58:25.0'),
(67, 'Cooper Rivas', 'giwupo@mailinator.com', 'Ex vel repudiandae o', 'Assumenda aliquam ve', 1, '2023-06-10 12:58:27.0'),
(68, 'Louis Oliver', 'zurex@mailinator.com', 'Dolorum rerum mollit', 'Architecto consequat', 1, '2023-06-10 12:58:28.0'),
(70, 'Eleanor Ruiz', 'culag@mailinator.com', 'Enim amet velit lib', 'Elit accusantium qu', 1, '2023-06-10 11:02:24.0'),
(71, 'Caryn Wall', 'sodyqywy@mailinator.com', 'Labore ullam reicien', 'Tempor aspernatur in', 1, '2023-06-10 11:02:27.0'),
(72, 'Leroy Malone', 'zerox@mailinator.com', 'Assumenda mollit com', 'Totam proident reru', 1, '2023-06-10 11:02:29.0'),
(73, 'Risa Dillard', 'mara@mailinator.com', 'Adipisicing doloribu', 'Corrupti duis fugia', 1, '2023-06-10 11:02:31.0'),
(74, 'Sarah Herman', 'mihopexe@mailinator.com', 'Cupidatat neque temp', 'Facilis sit harum ac', 0, '2023-06-10 11:02:33.0'),
(75, 'Caryn Petersen', 'sowime@mailinator.com', 'Et repellendus Sit', 'Enim ut maxime dolor', 1, '2023-06-10 11:02:35.0'),
(76, 'Abel Allison', 'rodes@mailinator.com', 'Reprehenderit vel e', 'Quae occaecat sit vo', 1, '2023-06-10 11:02:41.0'),
(77, 'Charles Mann', 'pykuja@mailinator.com', 'Sit doloremque quae', 'Nulla placeat ut re', 1, '2023-06-10 11:02:43.0'),
(78, 'Derek Melendez', 'rapis@mailinator.com', 'Quos blanditiis arch', 'Assumenda sit volup', 0, '2023-06-10 11:02:48.0'),
(79, 'Hakeem York', 'godus@mailinator.com', 'Ea eos quis rem iur', 'Quis sint deserunt i', 0, '2023-06-10 11:02:49.0'),
(80, 'Hector Rivers', 'qemovasi@mailinator.com', 'Qui iure sint minus ', 'Provident ut delect', 1, '2023-06-10 11:02:50.0'),
(81, 'Micah Patton', 'riwa@mailinator.com', 'Ex quia dolores cons', 'In voluptates sint m', 1, '2023-06-10 03:21:02.0'),
(82, 'Boris Duffy', 'cajabupev@mailinator.com', 'Sed incididunt et qu', 'Quo id ipsam duis ad', 1, '2023-06-10 04:07:13.0'),
(83, 'Rahim Miranda', 'kisuzygabe@mailinator.com', 'Quos rerum quis ut s', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias iure doloremque ', 0, '2023-06-10 11:58:44.0'),
(84, 'Cole Waters', 'sunyhaj@mailinator.com', 'Nulla molestias corr', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias iure doloremque quisquam laborum assumenda dolor ad omnis neque vitae aperiam asperiores explicabo unde inventore illo commodi, reprehenderit dolorum maiores nemo eaque at libero, nisi ducimus facilis. Nam officiis animi vero commodi quo, aut adipisci eos eveniet non vitae facere qui?', 1, '2023-06-10 11:59:17.0');

-- --------------------------------------------------------

--
-- Table structure for table `copyright`
--

CREATE TABLE `copyright` (
  `id` int NOT NULL,
  `action_name` varchar(100) NOT NULL,
  `action_link` varchar(1000) NOT NULL,
  `copy_text` varchar(200) NOT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `copyright`
--

INSERT INTO `copyright` (`id`, `action_name`, `action_link`, `copy_text`, `status`) VALUES
(1, 'Melinda Wong', 'Lareina Herring', 'Nell Baxter', 0),
(7, 'Stephanie Cross', 'Barbara Avila', 'Camille Rush', 0),
(8, 'Stuart Good', 'Maia Robles', 'Pandora Cooke', 0),
(9, 'Carol Mcgee', 'Lucy Harmon', 'Kadeem Stevens', 0),
(10, 'Dreambuzz', '#banner', '© 2019 All Right Reserved Ratsaan.', 1);

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
  `menu_link` varchar(1000) DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu_name`, `menu_link`, `status`) VALUES
(19, 'Home', '#banner', 1),
(20, 'Expertise', '#skillbar', 1),
(21, 'services', '#service', 1),
(23, 'Portfolio', '#portfolio', 1),
(26, 'Testimonial', '#testimonial', 1),
(27, 'Contact', '#contact', 1);

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
(13, 'Digital Content Marketing', 'It can change the way we feel about a company and the products & services they offer.', 1),
(14, 'Application Devlopment', 'It can change the way we feel about a company and the products & services they offer.', 1),
(15, 'Videography Photography', 'It can change the way we feel about a company and the products & services they offer.', 0),
(16, 'Wordpress Development', 'It can change the way we feel about a company and the products & services they offer.', 1),
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
(7, 'Anas Abdullah ', 'anas161090@gmail.com', '$2y$10$wUcSRxmwBn8DPJchF0tfZeBIpTzifcBCMc9yKQNDPwK4jRmplmrbi', '7.jpg'),
(26, 'Developer Anas', 'devanas124@gmail.com', '$2y$10$o8KkFzUBwyUVlZeGNxiSkeCgiPSYpQSYjA4uAoNT11IbpMTQb94Sm', '26.jpg'),
(27, 'Sofiqul Islam Sultan', 'wynadu@mailinator.com', '$2y$10$IGdHZQqSxzJRnaCnaWPNkORaqeNJRQ4f4gSFlj8u1kfALi1ANWMuG', '27.jpg'),
(29, 'Sharmin Akter Selina', 'tyfaderome@mailinator.com', '$2y$10$Fp0K3chUV8KfDArVfbPwdOPqcyF86KFJBDXECKJJOu13PVLQyiHxS', '29.jpg'),
(30, 'Umme Salma', 'viwugo@mailinator.com', '$2y$10$9Lb6zvm5UtQr40P7Yz0Wv.LZiE061M5BvrL2xGeOznMj52X3PBXXO', NULL),
(31, 'Abdur Rahman Kala', 'kumyba@mailinator.com', '$2y$10$cakW4RkLZK8tvybXSgh.YOZhmyI4pck9rln1.EBF9f6x61Axhgx9a', NULL),
(32, 'Mofizur Rahman Tapas', 'bejimudad@mailinator.com', '$2y$10$wICE5ynY.hK0EI1QofygM.lmgl4rgBEPnu9By4Bb977EAQPrees1G', NULL),
(33, 'Sanjida Akter', 'dalycyxo@mailinator.com', '$2y$10$8Vy3QC0c2BuHn5X1zolY6OhQH.rH.9kFlBSYaafVJHAQuWEz3kY4e', NULL),
(34, 'Anan Rahman Kala', 'hekyger@mailinator.com', '$2y$10$62xbYIs9AAR7OOWGf.N3F.AAU1eRt3iVTddhu8/hP/eardbHlLfjq', NULL),
(35, 'Arafat Rahman Akhi', 'zabuv@mailinator.com', '$2y$10$CJ5rYJYWwSpwbmu90oroj.s1t2U5K711OldqaJGkDFyH34D41zCKa', NULL),
(36, 'Tasmiya Tabbasum', 'huqo@mailinator.com', '$2y$10$jcip.FFiy9HmPv2VOBGNI.kzvz8HkFr0s3YLnA0MY3oiXmlEoOm9W', NULL),
(37, 'Nayeemul Karim', 'head@gmail.com', '$2y$10$cgcru1/iiMhQx4WCTBAS5uDx3LB8M1HOEu4cG3AbhEVFNddatVTQq', NULL),
(38, 'Nazim Uddin', 'tajiwizit@mailinator.com', '$2y$10$KOF2H7SGbbGfuAD5fMnLyedYVY1mufrnJqZ3imn3yfa8JtABDgGKy', NULL),
(39, 'Rabeya Khatun', 'kyfagikety@mailinator.com', '$2y$10$6rnERHJORiw8bdPekev8A.CfX8bJkgojZTQ2rHQrIiXSdKjGY97MW', NULL),
(40, 'Saimon Khan', 'saimon152166@gmail.com', '$2y$10$yirVy0qN40Q/4PzzwQnpDur2AtLrusLVov3CXwVmRyJiHhdr0wrya', '40.png'),
(41, 'Hai', 'luvul@mailinator.com', '$2y$10$pEPNhO6llwMeDh7BDynCYe/INXHuiNb79b.tUk/IuTOSM362PdqvG', NULL),
(42, 'Yeyyyy', 'sogibele@mailinator.com', '$2y$10$FaeTPjBinEKrOs9FHi.wK.m5d4WrMzjXipZcOB7gidQ0B9N7ARJLW', NULL);

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
-- Indexes for table `copyright`
--
ALTER TABLE `copyright`
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `copyright`
--
ALTER TABLE `copyright`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
