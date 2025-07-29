-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2025 at 02:04 PM
-- Server version: 10.4.32-MariaDB-log
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `astrosaloni`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `blog_type` varchar(255) DEFAULT NULL,
  `blog_slug` varchar(255) DEFAULT NULL,
  `blog_name` varchar(255) DEFAULT NULL,
  `blog_shortdesc` varchar(255) DEFAULT NULL,
  `blog_desc` text DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `blog_image` varchar(255) DEFAULT NULL,
  `post_by` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `blog_type`, `blog_slug`, `blog_name`, `blog_shortdesc`, `blog_desc`, `meta_title`, `meta_description`, `blog_image`, `post_by`, `updated_at`, `created_at`) VALUES
(3, 3, 'Love', 'great-astrologer-in-india', 'Great Astrologer in India: Unveiling the Mystical Wisdom of the Stars', '<p>Love is a beautiful but complex emotion that can bring infinite happiness and, at times, intense sorrow. The relationships experience peaks and troughs, and sometimes misunderstandings, ego conflicts, or external</p>', '<p>India, the land of sages and seekers, has a rich tradition of astrology dating back thousands of years. Known as <strong>Jyotish Shastra</strong>, Indian astrology is more than just a system of predicting the future&mdash;it&rsquo;s a deeply spiritual science that connects human lives to cosmic patterns. Over centuries, India has produced countless brilliant astrologers who have amazed the world with their insights, accuracy, and divine wisdom. But who truly stands out as the <strong>great astrologer in India</strong> today?</p>\r\n\r\n<p>In this blog, we explore what makes an astrologer great, how to identify genuine expertise in a world full of pretenders, and introduce you to some of the most <strong>renowned astrologers in India</strong> who continue to inspire millions through their spiritual and astrological guidance.</p>\r\n\r\n<hr />\r\n<h2>The Legacy of Astrology in India</h2>\r\n\r\n<p>Astrology in India is not a passing fad; it is deeply embedded in the culture, rituals, and everyday decisions of life. From choosing auspicious wedding dates to planning business ventures or even naming a newborn, astrology plays a critical role.</p>\r\n\r\n<p>The roots of Indian astrology lie in the <strong>Vedas</strong>, where it was studied alongside astronomy. Ancient sages like <strong>Maharishi Bhrigu</strong>, <strong>Parashara</strong>, and <strong>Varahamihira</strong> authored astrological texts that are still studied and revered today. Their works laid the foundation for what we now call <strong>Vedic Astrology</strong> or <strong>Jyotish Vidya</strong>.</p>\r\n\r\n<hr />\r\n<h2>Who is a Great Astrologer?</h2>\r\n\r\n<p>A great astrologer is not just someone who can read a birth chart or make predictions. True greatness in astrology combines:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Deep Vedic knowledge</strong> and understanding of ancient scriptures</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Spiritual insight</strong> and ethical responsibility</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Accurate predictions</strong> based on detailed calculations</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Practical guidance</strong> that helps people solve real-life problems</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Compassion and empathy</strong> for clients&rsquo; issues</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>A great astrologer helps people <strong>navigate life with confidence</strong>, not create fear or dependency. They use astrology to <strong>empower, not exploit</strong>.</p>\r\n\r\n<hr />\r\n<h2>Signs of a Genuine Astrologer</h2>\r\n\r\n<p>If you&#39;re looking for a great astrologer in India, here are a few signs to help you recognize one:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Transparency:</strong> They explain the logic behind predictions, not just mystify you with jargon.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Experience:</strong> Years of practice and study under a guru or tradition is a good sign.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Client Testimonials:</strong> Look for genuine reviews or word-of-mouth referrals.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Ethics:</strong> They do not promise miracles or manipulate fears.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Accuracy with Responsibility:</strong> Even if their predictions are sharp, they are careful about how they deliver sensitive information.</p>\r\n	</li>\r\n</ol>\r\n\r\n<hr />\r\n<h2>Top Great Astrologers in India</h2>\r\n\r\n<h3>1. <strong>Bejan Daruwalla (Late)</strong></h3>\r\n\r\n<p>One of the most famous astrologers in India, <strong>Bejan Daruwalla</strong> combined Vedic and Western astrology with elements of numerology, I-Ching, and tarot. He was known for his global clientele and appeared on several TV channels and publications. Though he passed away in 2020, his legacy continues through his son and team.</p>\r\n\r\n<h3>2. <strong>K.N. Rao</strong></h3>\r\n\r\n<p>A former civil servant, <strong>K.N. Rao</strong> is known for his scholarly contributions to astrology. He has taught thousands of students and authored many authoritative books on Vedic astrology. His predictions on political events are particularly renowned.</p>\r\n\r\n<h3>3. <strong>Dr. Prem Kumar Sharma</strong></h3>\r\n\r\n<p>A household name in India, <strong>Dr. Sharma</strong> is known for his TV appearances, newspaper columns, and online consultations. With decades of experience and a Ph.D. in astrology, he is widely respected for his practical and accurate guidance.</p>\r\n\r\n<h3>4. <strong>Pt. Ajai Bhambi</strong></h3>\r\n\r\n<p>A popular name among celebrities, politicians, and corporate leaders, <strong>Pt. Bhambi</strong> is known for his Vedic astrology expertise, calm demeanor, and positive outlook. His columns are published in major newspapers and international platforms.</p>\r\n\r\n<h3>5. <strong>Sanjay B. Jumaani</strong></h3>\r\n\r\n<p>Though technically a numerologist, <strong>Sanjay Jumaani</strong> has had a huge influence on astrology-adjacent fields. His client base includes Bollywood stars and business tycoons. He promotes a modern, simplified approach to ancient sciences.</p>\r\n\r\n<h3>6. <strong>Dr. Sohini Sastri</strong></h3>\r\n\r\n<p>Awarded several times as one of India&rsquo;s best astrologers, <strong>Dr. Sastri</strong> specializes in Vedic astrology, palmistry, and Vastu. With clients from across the world, she&rsquo;s known for her deep spiritual wisdom and practical problem-solving advice.</p>\r\n\r\n<hr />\r\n<h2>What Services Do Great Astrologers Offer?</h2>\r\n\r\n<p>A great astrologer in India typically offers a wide range of services such as:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Personal Horoscope Analysis</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Marriage &amp; Compatibility Reports (Kundli Matching)</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Career &amp; Business Consultation</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Health Predictions</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Childbirth &amp; Education Guidance</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Remedies using Mantras, Gemstones, or Vastu</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Muhurat Selection (Auspicious Timing)</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Foreign Travel &amp; Settlement Advice</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Some also offer <strong>numerology</strong>, <strong>palmistry</strong>, and <strong>tarot reading</strong> as additional services, depending on their training.</p>\r\n\r\n<hr />\r\n<h2>Online vs. Offline Consultations</h2>\r\n\r\n<p>Thanks to the digital era, you no longer need to travel miles to meet a great astrologer. Most renowned astrologers in India offer <strong>online consultations via Zoom, WhatsApp, or email</strong>. While an in-person meeting has its charm, online sessions are equally effective if done with sincerity and preparation.</p>\r\n\r\n<p>Before booking, ensure:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>The astrologer provides <strong>authentic birth chart analysis</strong></p>\r\n	</li>\r\n	<li>\r\n	<p>There&rsquo;s <strong>clarity on consultation charges</strong></p>\r\n	</li>\r\n	<li>\r\n	<p>You provide <strong>accurate birth details</strong>: date, time, and place</p>\r\n	</li>\r\n</ul>\r\n\r\n<hr />\r\n<h2>Can Astrology Really Change Your Life?</h2>\r\n\r\n<p>Astrology is not magic&mdash;it&rsquo;s a tool. A great astrologer will not claim to change your destiny but can help you:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Understand your strengths and weaknesses</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Avoid risky periods and seize the right opportunities</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Find clarity in relationships and career paths</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Discover spiritual direction and peace of mind</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p>When practiced with integrity, astrology becomes a <strong>mirror to your soul</strong> and a map to navigate your journey with grace and wisdom.</p>\r\n\r\n<hr />\r\n<h2>Final Thoughts</h2>\r\n\r\n<p>India is blessed with many brilliant minds who have mastered the sacred science of astrology. From traditional Vedic pundits to modern tech-savvy consultants, the options are diverse. But among them, the <strong>great astrologer in India</strong> is the one who combines knowledge with compassion, and predictions with purpose.</p>\r\n\r\n<p>Whether you&#39;re seeking answers about your future or just want to understand yourself better, choosing the right astrologer can be a transformative experience. Remember&mdash;astrology is not about blind belief, but conscious awareness. Choose wisely, and may the stars guide your way.</p>\r\n\r\n<hr />\r\n<p><strong>Are you looking for a personalized consultation with a reputed Indian astrologer?</strong><br />\r\nMake sure to do your research, check reviews, and always go with someone who respects your journey and helps you walk it with confidence.</p>', 'Great Astrologer in India', 'Great Astrologer in India: Unveiling the Mystical Wisdom of the Stars', 'uploads/blogs/1753789203.jpg', 'astro saloni', '2025-07-29 06:10:03', '2025-07-29 06:10:03');

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
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `category_image` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `category_image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Love Vashikaran', 'Love-Vashikaran', NULL, 1, '2025-07-28 05:43:16', '2025-07-28 05:44:32'),
(3, 'Marriage Problems', 'Marriage-Problems', NULL, 1, '2025-07-28 05:44:54', '2025-07-28 05:44:54'),
(4, 'Relationship Advice', 'Relationship-Advice', NULL, 1, '2025-07-28 05:45:12', '2025-07-28 05:45:12'),
(5, 'Black Magic', 'Black-Magic', NULL, 1, '2025-07-28 05:45:29', '2025-07-28 05:45:29'),
(6, 'Success Stories', 'Success-Stories', NULL, 1, '2025-07-28 05:45:48', '2025-07-28 05:45:48');

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
(3, '0001_01_01_000002_create_jobs_table', 1);

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_name` varchar(255) DEFAULT NULL,
  `service_icon` varchar(255) DEFAULT NULL,
  `service_type` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `service_slug` varchar(255) DEFAULT NULL,
  `service_shortdesc` varchar(255) DEFAULT NULL,
  `service_desc` varchar(255) DEFAULT NULL,
  `service_image` varchar(255) DEFAULT NULL,
  `post_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
('rGGqdQKmHJtnK7B5u0Cueo1OhdcVcRpts5epsIRS', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOXMya096bTdMeEI5cjI4VldpRjRKV0tNZWgzZ3ZoU3VvQzZ2SjJadiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1753789972);

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

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Astro Saloni', 'admin@astrosaloni.com', NULL, '$2y$12$NMczVHqCR5WDOrAqFx1UCuRQh34RN07QNtmY0Sm1pMY2dn9Dnnxlq', NULL, '2025-07-27 23:32:13', '2025-07-27 23:32:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_category_id_foreign` (`category_id`);

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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
