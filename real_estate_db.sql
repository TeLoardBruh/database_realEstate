-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 04:12 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_super` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_editor` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `name`, `email`, `password`, `is_editor`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Limhorng Sok', 'agent@gmail.com', '$2y$10$CrSFefTLmmWaP5IknqU8RecH.FKO8W4De6OwJMN79vb2I12Ah9PIa', 0, NULL, '2020-02-08 00:01:06', '2020-02-08 00:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `agent_details`
--

CREATE TABLE `agent_details` (
  `agent_id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phone_number` varchar(45) DEFAULT NULL,
  `sec_phone_number` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `picture` text DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` enum('male','female','other') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `gov_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `agent_details`
--

INSERT INTO `agent_details` (`agent_id`, `fullname`, `phone_number`, `sec_phone_number`, `email`, `picture`, `dob`, `gender`, `created_at`, `updated_at`, `password`, `gov_id`) VALUES
(1, 'Horng', '015380440', NULL, 'limhorngsok@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `buying_contracts`
--

CREATE TABLE `buying_contracts` (
  `bcontract_id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `property_id` int(11) DEFAULT NULL,
  `owners_id` int(11) NOT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `clients_client_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buying_contracts`
--

INSERT INTO `buying_contracts` (`bcontract_id`, `client_id`, `property_id`, `owners_id`, `agent_id`, `clients_client_id`, `updated_at`, `created_at`) VALUES
(2, 6, 1, 1, 1, 0, '2020-02-09 08:10:57', '2020-02-09 08:10:57');

-- --------------------------------------------------------

--
-- Table structure for table `buying_detail`
--

CREATE TABLE `buying_detail` (
  `bcontract_id` int(11) NOT NULL,
  `term` enum('Buy','Rent') DEFAULT 'Buy',
  `paid` tinyint(4) DEFAULT 0,
  `contract_picture` text DEFAULT NULL,
  `ended_at` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buying_detail`
--

INSERT INTO `buying_detail` (`bcontract_id`, `term`, `paid`, `contract_picture`, `ended_at`, `status`) VALUES
(2, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `gender` enum('male','female','other') DEFAULT NULL,
  `phone_number` varchar(45) DEFAULT NULL,
  `sec_phone_number` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `is_married` tinyint(4) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `job` varchar(45) DEFAULT NULL,
  `plcae` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gov_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `fullname`, `gender`, `phone_number`, `sec_phone_number`, `email`, `is_married`, `dob`, `job`, `plcae`, `created_at`, `updated_at`, `gov_id`) VALUES
(1, 'Limhorng Sok', 'male', '015380440', '015380440', 'limhorngsok@gmail.com', NULL, '2020-01-29', NULL, NULL, '2020-02-09 08:04:51', '2020-02-09 08:04:51', '123123'),
(2, 'Limhorng Sok', 'male', '015380440', '015380440', 'limhorngsok@gmail.com', NULL, '2020-01-29', NULL, NULL, '2020-02-09 08:07:40', '2020-02-09 08:07:40', '123123'),
(3, 'Limhorng Sok', 'male', '015380440', '015380440', 'limhorngsok@gmail.com', NULL, '2020-01-29', NULL, NULL, '2020-02-09 08:08:24', '2020-02-09 08:08:24', '123123'),
(4, 'Limhorng Sok', 'male', '015380440', '015380440', 'limhorngsok@gmail.com', NULL, '2020-01-29', NULL, NULL, '2020-02-09 08:09:47', '2020-02-09 08:09:47', '123123'),
(5, 'Limhorng Sok', 'male', '015380440', '015380440', 'limhorngsok@gmail.com', NULL, '2020-01-29', NULL, NULL, '2020-02-09 08:10:45', '2020-02-09 08:10:45', '123123'),
(6, 'Limhorng Sok', 'male', '015380440', '015380440', 'limhorngsok@gmail.com', NULL, '2020-01-29', NULL, NULL, '2020-02-09 08:10:56', '2020-02-09 08:10:56', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `idinvoice` int(11) NOT NULL,
  `bcontract_id` int(11) DEFAULT NULL,
  `amount` decimal(12,2) DEFAULT NULL,
  `picture` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_12_084320_create_admins_table', 1),
(4, '2018_07_12_084720_create_agents_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `property_id` int(11) NOT NULL,
  `owner_id` int(11) DEFAULT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`property_id`, `owner_id`, `agent_id`, `type_id`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `properties_detail`
--

CREATE TABLE `properties_detail` (
  `property_id` int(11) NOT NULL,
  `price` decimal(9,2) DEFAULT NULL,
  `price_rent` decimal(9,2) DEFAULT NULL,
  `availability` tinyint(4) DEFAULT NULL,
  `thumbnail` text DEFAULT NULL,
  `picture` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `revenue`
--

CREATE TABLE `revenue` (
  `revenue_id` int(11) NOT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `amount` decimal(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `selling_contract`
--

CREATE TABLE `selling_contract` (
  `scontract_id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `agent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `selling_detail`
--

CREATE TABLE `selling_detail` (
  `scontract_id` int(11) NOT NULL,
  `type` enum('one','all') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `picture` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `type` enum('Apartment','House','Room','Condo','Land') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `type`) VALUES
(1, 'House');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Limhorng Sok', 'limhorngsok@gmail.com', '$2y$10$yUFwPLZrq4GhrpjP4Mp3pOeKfDrYLcjqw2neUoMhi6G5L1cLr5Nui', 'sb2aayrhpACSrVd2R4uvCcQL8X7UK0DI7iGAE0aNY3arFj1kdCEfoxl4oxTA', '2020-02-07 23:55:49', '2020-02-07 23:55:49'),
(2, 'Limhorng Sok', 'limhorngsok1@gmail.com', '$2y$10$QCDXJGNcd6fO0G/1FwhehOE40jpC.SdOixJ31y5ea7psIY5ttKCqi', 'HPCFoXjeWREXSFSoKZCOJlZ06bdSKOkONljr01jhcuxMCYnPqb7ASN93xWBr', '2020-02-07 23:56:36', '2020-02-07 23:56:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `agents_email_unique` (`email`);

--
-- Indexes for table `agent_details`
--
ALTER TABLE `agent_details`
  ADD UNIQUE KEY `id_UNIQUE` (`agent_id`);

--
-- Indexes for table `buying_contracts`
--
ALTER TABLE `buying_contracts`
  ADD PRIMARY KEY (`bcontract_id`),
  ADD KEY `agent_id_idx` (`agent_id`);

--
-- Indexes for table `buying_detail`
--
ALTER TABLE `buying_detail`
  ADD KEY `fk1_bcontract_id` (`bcontract_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`idinvoice`),
  ADD KEY `bcontract_id_idx` (`bcontract_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`property_id`),
  ADD KEY `owner_id_idx` (`owner_id`),
  ADD KEY `agent_id_idx` (`agent_id`),
  ADD KEY `type_id_idx` (`type_id`);

--
-- Indexes for table `properties_detail`
--
ALTER TABLE `properties_detail`
  ADD KEY `property_id_idx` (`property_id`);

--
-- Indexes for table `revenue`
--
ALTER TABLE `revenue`
  ADD PRIMARY KEY (`revenue_id`),
  ADD KEY `agent_id_idx` (`agent_id`);

--
-- Indexes for table `selling_contract`
--
ALTER TABLE `selling_contract`
  ADD PRIMARY KEY (`scontract_id`),
  ADD KEY `client_id_idx` (`client_id`),
  ADD KEY `agent_id_idx` (`agent_id`);

--
-- Indexes for table `selling_detail`
--
ALTER TABLE `selling_detail`
  ADD KEY `scontract_id_idx` (`scontract_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buying_contracts`
--
ALTER TABLE `buying_contracts`
  MODIFY `bcontract_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buying_contracts`
--
ALTER TABLE `buying_contracts`
  ADD CONSTRAINT `fk_agent_id` FOREIGN KEY (`agent_id`) REFERENCES `agent_details` (`agent_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_buying_contracts_clients1` FOREIGN KEY (`clients_client_id`) REFERENCES `clients` (`client_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `agent_id` FOREIGN KEY (`agent_id`) REFERENCES `agent_details` (`agent_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `owner_id` FOREIGN KEY (`owner_id`) REFERENCES `clients` (`client_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `type_id` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `properties_detail`
--
ALTER TABLE `properties_detail`
  ADD CONSTRAINT `fk_property_id` FOREIGN KEY (`property_id`) REFERENCES `properties` (`property_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `revenue`
--
ALTER TABLE `revenue`
  ADD CONSTRAINT `fk1_agent_id` FOREIGN KEY (`agent_id`) REFERENCES `agent_details` (`agent_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `selling_contract`
--
ALTER TABLE `selling_contract`
  ADD CONSTRAINT `fk1_client_id` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk2_agent_id` FOREIGN KEY (`agent_id`) REFERENCES `agent_details` (`agent_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `selling_detail`
--
ALTER TABLE `selling_detail`
  ADD CONSTRAINT `fk_scontract_id` FOREIGN KEY (`scontract_id`) REFERENCES `selling_contract` (`scontract_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
