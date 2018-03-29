-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 02:44 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projektas`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `conversation_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `user_id`, `conversation_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'this not easy', '2018-03-29 09:05:54', '2018-03-29 09:05:54'),
(2, 1, 2, 'this hard', '2018-03-29 09:05:54', '2018-03-29 09:05:54'),
(3, 2, 3, 'this medium', '2018-03-29 09:05:54', '2018-03-29 09:05:54'),
(4, 4, 4, 'this easy', '2018-03-29 09:05:54', '2018-03-29 09:05:54'),
(5, 3, 1, 'this very easy', '2018-03-29 09:05:54', '2018-03-29 09:05:54');

-- --------------------------------------------------------

--
-- Table structure for table `channels`
--

CREATE TABLE `channels` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `channels`
--

INSERT INTO `channels` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'FrontEnd', '2018-03-29 09:05:54', '2018-03-29 09:05:54'),
(2, 'BackEnd', '2018-03-29 09:05:54', '2018-03-29 09:05:54'),
(3, 'HTML', '2018-03-29 09:05:54', '2018-03-29 09:05:54'),
(4, 'CSS', '2018-03-29 09:05:54', '2018-03-29 09:05:54'),
(5, 'JavaScript', '2018-03-29 09:05:54', '2018-03-29 09:05:54'),
(6, 'JS Frameworks', '2018-03-29 09:05:54', '2018-03-29 09:05:54'),
(7, 'PHP', '2018-03-29 09:05:54', '2018-03-29 09:05:54'),
(8, 'Python', '2018-03-29 09:05:54', '2018-03-29 09:05:54'),
(9, 'PHP frameworks', '2018-03-29 09:05:54', '2018-03-29 09:05:54');

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `channel_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conversations`
--

INSERT INTO `conversations` (`id`, `user_id`, `channel_id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Why is this not working???', 'nobody said this was going to be easy and blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah', '2018-03-29 09:05:54', '2018-03-29 09:05:54'),
(2, 1, 2, 'Pls help???', 'nobody said this was going to be easy and blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah', '2018-03-29 09:05:54', '2018-03-29 09:05:54'),
(3, 1, 2, 'Finally solved it', 'nobody said this was going to be easy and blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah', '2018-03-29 09:05:54', '2018-03-29 09:05:54'),
(4, 1, 2, 'Done', 'nobody said this was going to be easy and blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah', '2018-03-29 09:05:54', '2018-03-29 09:05:54'),
(5, 1, 2, 'Well done', 'nobody said this was going to be easy and blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah', '2018-03-29 09:05:54', '2018-03-29 09:05:54');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `answer_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `answer_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2018-03-29 09:33:44', '2018-03-29 09:33:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_23_231940_create_channels_table', 1),
(4, '2018_03_24_001025_create_conversations_table', 1),
(5, '2018_03_24_001050_create_answers_table', 1),
(6, '2018_03_26_185837_add_foreign_to_conversations_table', 1),
(7, '2018_03_26_201853_add_foreign_to_answers_table', 1),
(8, '2018_03_28_112501_create_likes_table', 1),
(9, '2018_03_28_115218_add_foreign_to_likes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'http://localhost/avatars/avatar.jpg', 'admin@admin.lt', '$2y$10$pLZz9.HGrrD.Of/sjdJ4QereCPkmpmug9zP4hb5nYg8h55aYeJwdG', 'WjSZfIrBFWEFUUsV9YhMCiezbR8kNuP4xEAiCW7AhfCEV78hckxEcMdxYcmR', '2018-03-29 09:05:53', '2018-03-29 09:05:53'),
(2, 'Vardenis', 'http://localhost/storage/avatar.jpg', 'vardenis@pavardenis.lt', '$2y$10$Lpw6JpNunb/JfIEejZXzJOQdtdkedVyHdVAX9S.drbeobwxDwl01a', NULL, NULL, NULL),
(3, 'Antanas', 'http://localhost/storage/avatar2.jpg', 'vardenis@pavardeniss.lt', '$2y$10$R1rf2Eo9m8UIum6fjLpSG.5p6QkOTDM1gFlJARD3FqaBM3zQWjRoy', NULL, NULL, NULL),
(4, 'Alvydas', 'http://localhost/avatars/avatar.jpg', 'vardeniss@pavardenis.lt', '$2y$10$qvhaCP21olmOjTY64ErQQumQzfvm4xEItcqEdgmk0jYqa3XzohP.S', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_conversation_id_foreign` (`conversation_id`),
  ADD KEY `answers_user_id_foreign` (`user_id`);

--
-- Indexes for table `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conversations_channel_id_foreign` (`channel_id`),
  ADD KEY `conversations_user_id_foreign` (`user_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_answer_id_foreign` (`answer_id`),
  ADD KEY `likes_user_id_foreign` (`user_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `channels`
--
ALTER TABLE `channels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_conversation_id_foreign` FOREIGN KEY (`conversation_id`) REFERENCES `conversations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `conversations`
--
ALTER TABLE `conversations`
  ADD CONSTRAINT `conversations_channel_id_foreign` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `conversations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_answer_id_foreign` FOREIGN KEY (`answer_id`) REFERENCES `answers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
