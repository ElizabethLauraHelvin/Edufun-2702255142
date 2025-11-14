-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2025 at 07:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edufunquiz_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `materis`
--

CREATE TABLE `materis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title` varchar(255) NOT NULL,
  `BodyText` text NOT NULL,
  `ArticleImage` text NOT NULL,
  `writer_id` bigint(20) UNSIGNED NOT NULL,
  `Date` date NOT NULL DEFAULT curdate(),
  `Cat` enum('Software Engineering','Interactive Multimedia','Data Mining') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materis`
--

INSERT INTO `materis` (`id`, `Title`, `BodyText`, `ArticleImage`, `writer_id`, `Date`, `Cat`, `created_at`, `updated_at`) VALUES
(1, 'Human and Computer Interaction', 'Vitae voluptas et deserunt maiores. Quae hic quaerat provident quod possimus. Non autem reprehenderit dicta numquam voluptates iste et error. Veritatis voluptatem maiores ea repudiandae et autem quaerat.\n\nDoloribus fugit repellendus quos nihil asperiores qui quos. Cupiditate omnis sapiente asperiores error aperiam necessitatibus. Possimus nemo quae qui ea.\n\nFacere et nihil commodi autem quibusdam aut. Est doloremque qui ut ut cumque optio aperiam.\n\nLaudantium similique similique modi iure vitae. Suscipit repellendus dolorem nostrum non ad.\n\nRatione voluptates ipsum odit et eos est tempore. Ipsam accusantium optio velit illum molestias ipsa ea voluptatem. Perferendis aperiam rerum veritatis cum autem aut porro. Dolores rerum sit ut assumenda sit earum cum.\n\nQuaerat veritatis minima illo nostrum voluptatibus corrupti ab. Sed aut accusantium rerum odit pariatur. Sed veniam optio quo impedit et consequatur.\n\nNumquam veritatis magnam est et et. Sint deserunt debitis et non magni quaerat impedit. Quod rerum sit et ea quae. Odit velit nostrum omnis aut.\n\nVoluptatum accusamus labore maxime ex. Rerum ut perferendis at natus velit ex cupiditate. Accusantium magnam nemo neque praesentium sed qui. Fugiat sequi est et tempora.\n\nLaborum sunt unde voluptates quasi laborum. Possimus vero quam dolores delectus. Repellat dolor doloribus tempora sit. Neque autem tempora eum nam sint sunt provident odio.\n\nAut aperiam inventore explicabo quasi molestias delectus ea. Maiores sunt impedit dolorem repellat quaerat. Ipsam neque enim quisquam qui minima velit autem deleniti.', 'im1.jpg', 1, '2025-11-15', 'Interactive Multimedia', NULL, NULL),
(2, 'User Experience', 'Dolorum eum est tempora magni odit. Reprehenderit aut assumenda enim at voluptatem alias ut. Sed unde modi sunt aut autem.\n\nQuis incidunt porro voluptatum aut quasi impedit doloremque. Magnam commodi laborum est corrupti. In enim quis magni atque quia rerum.\n\nDebitis atque consequatur deserunt nostrum at. Tempore aut vel alias aut deserunt tempore. Ut rerum cupiditate et dolorem sed aut excepturi error. Molestias excepturi voluptas unde necessitatibus.\n\nEsse similique vero mollitia debitis eveniet. Tempora corrupti vel beatae. Omnis dolor delectus magni est voluptates.\n\nBlanditiis voluptatem perferendis sint. Omnis pariatur ut porro eum quae.\n\nQuia natus et ullam et. Dolore ut ipsa deleniti ut. Deserunt maiores a aut commodi voluptatibus est enim. Quae quibusdam odio aut est omnis corrupti.\n\nIpsum ea consequatur sequi qui molestiae sapiente omnis. Laudantium voluptatem debitis sapiente natus perspiciatis.\n\nAmet perspiciatis qui atque voluptatem quibusdam sint. Veritatis eum accusamus provident autem. Saepe ut est ut exercitationem delectus.\n\nLibero omnis et beatae pariatur quam perferendis fuga. Nisi in in modi repudiandae vel. Officiis id libero labore autem.\n\nUt quibusdam autem id provident debitis. Quis sunt qui voluptas quidem autem modi. Consectetur tempore sit ea deleniti. Harum eligendi qui aut quaerat pariatur.', 'im2.jpeg', 1, '2025-11-15', 'Interactive Multimedia', NULL, NULL),
(3, 'User Experience for Digital Immersive Technology', 'Ipsum asperiores est quod sunt pariatur et soluta. Commodi cum ipsum soluta. Vero minima exercitationem nobis similique nam ea velit dolor.\n\nEos quae voluptatum iure eaque dignissimos. Iusto laboriosam voluptatum amet ex dolorum et quam. Qui ut omnis nam ullam ad placeat nobis. Aut commodi sapiente et enim ratione rerum.\n\nPerferendis nulla aut sit magni aut odit molestias. Nisi magnam explicabo dolores optio id vitae similique qui. A iure sint aut ut quo.\n\nQuis expedita sunt voluptatem illum debitis repellendus fugit. Quia nulla quaerat dolorum excepturi et. Voluptatem voluptas adipisci quia eligendi autem enim. In commodi accusamus saepe repellat sed et saepe. Illo qui consequatur repudiandae amet minima expedita sequi vitae.\n\nNihil distinctio nisi nam rerum consequuntur optio vero est. Et aperiam excepturi quae cumque qui. Vel veritatis commodi quia voluptas assumenda. Possimus natus perferendis labore voluptate id.\n\nQuaerat perspiciatis occaecati soluta. Libero omnis ut perferendis. Aut enim minima nulla impedit.\n\nNihil commodi nesciunt atque nostrum. Possimus sequi distinctio voluptatem quia est. Necessitatibus aut dicta ea sed reiciendis est consequatur doloremque.\n\nIpsa fugit blanditiis alias reiciendis aliquid et sit nisi. Sunt animi corrupti inventore voluptas et maxime quia. Aut odio est blanditiis minus odio. Omnis consequatur sint consequatur odio enim.\n\nVoluptatibus nisi praesentium facilis non velit vero. Itaque veritatis eum itaque cum. Et quia quia voluptatum eaque deleniti voluptatem est.\n\nEos repudiandae in et et velit quos voluptas. Omnis qui architecto non esse labore. Praesentium nostrum quis rerum iste est.', 'im3.jpeg', 1, '2025-11-15', 'Interactive Multimedia', NULL, NULL),
(4, 'Pattern Software Design', 'Est esse blanditiis dolore nulla ducimus eligendi et sed. Impedit quis aut amet sunt ut sapiente nam. Ab velit nulla cumque dolorem consequatur accusantium sint quibusdam. Voluptas ut ut sint necessitatibus.\n\nExercitationem saepe eum quasi neque non. Accusantium minus atque cum. Nihil dolores nesciunt quae.\n\nArchitecto cupiditate accusamus tenetur repudiandae. Maiores adipisci aut inventore voluptatem mollitia. Consequatur temporibus dolores impedit laudantium tempore suscipit. Vel sunt recusandae aut sint officia eum.\n\nQuis sequi vero hic. Error laboriosam omnis expedita. Ea at nisi est qui vel ut velit.\n\nRerum in praesentium quia provident. Hic repellendus dicta nihil eligendi. Sint et quam dolorem dolores.\n\nRepellendus doloremque est in sunt. Rem explicabo quis aut qui similique at necessitatibus voluptatem. At qui in asperiores voluptatem praesentium.\n\nId magnam beatae omnis distinctio quis sit cumque. Quo optio atque accusamus nihil consequatur. Aut veritatis quo dolores qui dolore odio est. Repellendus deserunt laboriosam beatae.\n\nSunt fugiat tempore aut iure optio unde ut error. Hic architecto magni est libero consequuntur similique ex. Ea magni fugiat placeat maxime alias. Illum autem possimus vel harum veritatis.\n\nExcepturi illum nulla perspiciatis. Et eum dolor facere ducimus. Officiis sint molestias eos ipsum ea.\n\nTempora omnis ut suscipit blanditiis. Odio magnam id voluptatibus consequuntur harum.', 'se1.jpg', 2, '2025-11-15', 'Software Engineering', NULL, NULL),
(5, 'Agile Software Development', 'Nostrum quis et est repellendus incidunt. Officiis qui ipsum ipsam nostrum ipsum omnis. Maiores dolores aut tenetur doloribus provident mollitia. Voluptatem nostrum illum voluptatem ducimus modi sit aperiam dolor.\n\nCulpa et impedit vel consequatur ea est. Soluta tenetur ut laudantium doloremque omnis voluptatem. Ea et sint voluptatum excepturi autem.\n\nNon amet reiciendis deserunt. Et soluta commodi laborum. Vitae consequatur omnis reiciendis quis deleniti.\n\nDeserunt delectus facere cupiditate doloribus voluptas est pariatur. Ea omnis corporis voluptates ex magnam. Dignissimos voluptatem hic odio optio voluptatem. Sint sint est et odit excepturi. Autem dolor deleniti consequatur corrupti ducimus adipisci.\n\nQuia atque numquam quae hic dignissimos ut occaecati. Aut asperiores sit occaecati harum. Occaecati aut minima eum quas quia.\n\nAb nulla fuga unde et quibusdam. Cupiditate ut qui sapiente nihil consequuntur.\n\nTotam aut quas reprehenderit quis sit magnam commodi. Et et distinctio eligendi illum. Molestiae culpa et in aut. Delectus iste alias eveniet qui.\n\nConsequatur optio excepturi est et atque debitis. Est expedita dolores ut eligendi doloremque. Eaque assumenda perferendis deleniti voluptatem rerum. Laboriosam nobis aut est minima aut similique.\n\nTempora nulla a qui esse vel et eaque minus. Quis quam voluptatem veniam ducimus. Non provident officia sapiente itaque sit nihil. Vel molestiae ipsum ab doloremque ea ex.\n\nVelit minus sit facere veritatis minima soluta ut eum. Cum rem nemo optio in delectus.', 'se2.jpg', 2, '2025-11-15', 'Software Engineering', NULL, NULL),
(6, 'Code Reengineering', 'Est incidunt illo reiciendis voluptatem excepturi aperiam quia. Voluptate sed blanditiis aut soluta quas. Quo quia sint similique ut quam.\n\nPossimus ratione dolores fugiat voluptas sit architecto cupiditate adipisci. Aut consequatur dolores repellat et quas. Omnis animi sed sunt deleniti. Tempore suscipit dolor laudantium esse eos.\n\nVoluptatem dolores dolor voluptas. Sit impedit cumque voluptas recusandae laborum. Impedit quis molestiae quae. Sit vero et dignissimos reprehenderit.\n\nMollitia cumque non architecto ipsa est. Minus reprehenderit cum eos culpa voluptatem perspiciatis ut vel.\n\nMolestiae ratione deleniti voluptas modi minus qui assumenda. Aspernatur et iste voluptatum quam quis perferendis. Eveniet voluptas est consequatur reiciendis.\n\nRepellat quia quidem nisi vitae sapiente eveniet. Aperiam labore cupiditate quo ut omnis aut quisquam. Quos autem quas eos.\n\nDeserunt earum dolor sint sapiente quibusdam eos. Minima ipsam omnis eos consequatur et sint. Atque voluptas voluptatem pariatur dolores. Magnam sunt velit ut itaque quibusdam.\n\nQui fuga omnis voluptates ut nisi. Aut sunt excepturi vero. Dolores magni sed inventore officia architecto sed.\n\nIpsum et harum aut tempora voluptatem assumenda illum. Mollitia quis consequatur eos voluptas qui. Illo omnis at vel adipisci vel quo harum.\n\nAut velit doloremque repellendus aut minus id. Et hic maiores aut vero architecto ex eaque. Qui consequuntur unde optio error enim. Reiciendis quia officiis facere quasi labore labore.', 'se3.jpeg', 3, '2025-11-15', 'Software Engineering', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_11_11_155649_create_categories_table', 1),
(5, '2025_11_11_161540_create_writers_table', 1),
(6, '2025_11_11_161548_create_materis_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('qcDO3Rvq8x12xKOMoclWmb9gwiVpwKIX05X6lMSD', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY0dJUUQwNG0wOEh0eVF0U29oaWtkRTNMQjdnMFRMd0hBaFRMcXBuRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jYXRlZ29yeS9JbnRlcmFjdGl2ZSUyME11bHRpbWVkaWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1763145474);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `writers`
--

CREATE TABLE `writers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Spesialis` enum('Software Engineering','Interactive Multimedia','Data Mining') NOT NULL,
  `ProfilePicture` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `writers`
--

INSERT INTO `writers` (`id`, `Name`, `Email`, `Spesialis`, `ProfilePicture`, `created_at`, `updated_at`) VALUES
(1, 'Agung Pranomo', 'agung.pranomo@binus.edu', 'Software Engineering', 'co1.png', NULL, NULL),
(2, 'Ibu Titiek', 'ibu.titiek@binus.edu', 'Interactive Multimedia', 'ce2.png', NULL, NULL),
(3, 'Joko Widodo', 'joko.widodo@binus.edu', 'Data Mining', 'ce3.png', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materis`
--
ALTER TABLE `materis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materis_writer_id_foreign` (`writer_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materis`
--
ALTER TABLE `materis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `writers`
--
ALTER TABLE `writers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `materis`
--
ALTER TABLE `materis`
  ADD CONSTRAINT `materis_writer_id_foreign` FOREIGN KEY (`writer_id`) REFERENCES `writers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
