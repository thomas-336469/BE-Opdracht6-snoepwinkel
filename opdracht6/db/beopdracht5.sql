-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 02 feb 2024 om 09:12
-- Serverversie: 5.7.36
-- PHP-versie: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beopdracht5`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `allergeens`
--

DROP TABLE IF EXISTS `allergeens`;
CREATE TABLE IF NOT EXISTS `allergeens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `naam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `omschrijving` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `allergeens`
--

INSERT INTO `allergeens` (`id`, `naam`, `omschrijving`, `created_at`, `updated_at`) VALUES
(1, 'Gluten', 'Dit product bevat gluten', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(2, 'Gelatine', 'Dit product bevat gelatine', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(3, 'AZO-Kleurstof', 'Dit product bevat AZO-kleurstoffen', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(4, 'Lactose', 'Dit product bevat lactose', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(5, 'Soja', 'Dit product bevat soja', '2024-01-29 09:36:47', '2024-01-29 09:36:47');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `leveranciers`
--

DROP TABLE IF EXISTS `leveranciers`;
CREATE TABLE IF NOT EXISTS `leveranciers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `naam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactpersoon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leverancier_nummer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobiel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `leveranciers`
--

INSERT INTO `leveranciers` (`id`, `naam`, `contactpersoon`, `leverancier_nummer`, `mobiel`, `created_at`, `updated_at`) VALUES
(1, 'Venco', 'Bert van Linge', 'L1029384719', '06-28493827', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(2, 'Astra Sweets', 'Jasper del Monte', 'L1029284315', '06-39398734', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(3, 'Haribo', 'Sven Stalman', 'L1029324748', '06-24383291', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(4, 'Basset', 'Joyce Stelterberg', 'L1023845773', '06-48293823', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(5, 'De Bron', 'Remco Veenstra', 'L1023857736', '06-34291234', '2024-01-29 09:36:47', '2024-01-29 09:36:47');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `magazijns`
--

DROP TABLE IF EXISTS `magazijns`;
CREATE TABLE IF NOT EXISTS `magazijns` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `verpakkings_eenheid` decimal(8,2) NOT NULL,
  `aantal_aanwezig` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `magazijn_product_id_foreign` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `magazijns`
--

INSERT INTO `magazijns` (`id`, `product_id`, `verpakkings_eenheid`, `aantal_aanwezig`, `created_at`, `updated_at`) VALUES
(1, 1, '5.00', 453, '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(2, 2, '2.50', 400, '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(3, 3, '5.00', 1, '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(4, 4, '1.00', 800, '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(5, 5, '3.00', 234, '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(6, 6, '2.00', 345, '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(7, 7, '1.00', 795, '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(8, 8, '10.00', 233, '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(9, 9, '2.50', 123, '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(10, 10, '3.00', NULL, '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(11, 11, '2.00', 367, '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(12, 12, '1.00', 467, '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(13, 13, '5.00', 20, '2024-01-29 09:36:47', '2024-01-29 09:36:47');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_29_092646_create_allergeen_table', 1),
(6, '2024_01_29_092646_create_magazijn_table', 1),
(7, '2024_01_29_092646_create_product_per_allergeen_table', 1),
(8, '2024_01_29_092646_create_product_table', 1),
(9, '2024_01_29_092647_create_leverancier_table', 1),
(10, '2024_01_29_092647_create_product_per_leverancier_table', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `naam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `naam`, `barcode`, `created_at`, `updated_at`) VALUES
(1, 'Mintnopjes', '8719587231278', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(2, 'Schoolkrijt', '8719587326713', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(3, 'Honingdrop', '8719587327836', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(4, 'Zure Beren', '8719587321441', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(5, 'Cola Flesjes', '8719587321237', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(6, 'Turtles', '8719587322245', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(7, 'Witte Muizen', '8719587328256', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(8, 'Reuzen Slangen', '8719587325641', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(9, 'Zoute Rijen', '8719587322739', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(10, 'Winegums', '8719587327527', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(11, 'Drop Munten', '8719587322345', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(12, 'Kruis Drop', '8719587322265', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(13, 'Zoute Ruitjes', '8719587323256', '2024-01-29 09:36:47', '2024-01-29 09:36:47');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product_per_allergeens`
--

DROP TABLE IF EXISTS `product_per_allergeens`;
CREATE TABLE IF NOT EXISTS `product_per_allergeens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `allergeen_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_per_allergeen_product_id_foreign` (`product_id`),
  KEY `product_per_allergeen_allergeen_id_foreign` (`allergeen_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `product_per_allergeens`
--

INSERT INTO `product_per_allergeens` (`id`, `product_id`, `allergeen_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(2, 1, 1, '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(3, 1, 3, '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(4, 3, 4, '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(5, 6, 5, '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(6, 9, 2, '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(7, 9, 5, '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(8, 10, 2, '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(9, 12, 4, '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(10, 13, 1, '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(11, 13, 4, '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(12, 13, 5, '2024-01-29 09:36:47', '2024-01-29 09:36:47');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product_per_leveranciers`
--

DROP TABLE IF EXISTS `product_per_leveranciers`;
CREATE TABLE IF NOT EXISTS `product_per_leveranciers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `leverancier_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `datum_levering` date NOT NULL,
  `aantal` int(11) NOT NULL,
  `datum_eerstvolgende_levering` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_per_leverancier_leverancier_id_foreign` (`leverancier_id`),
  KEY `product_per_leverancier_product_id_foreign` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `product_per_leveranciers`
--

INSERT INTO `product_per_leveranciers` (`id`, `leverancier_id`, `product_id`, `datum_levering`, `aantal`, `datum_eerstvolgende_levering`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-04-09', 23, '2023-04-16', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(2, 1, 1, '2023-04-18', 21, '2023-04-25', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(3, 1, 2, '2023-04-09', 12, '2023-04-16', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(4, 1, 3, '2023-04-10', 11, '2023-04-17', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(5, 2, 4, '2023-04-14', 16, '2023-04-21', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(6, 2, 4, '2023-04-21', 23, '2023-04-28', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(7, 2, 5, '2023-04-14', 45, '2023-04-21', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(8, 2, 6, '2023-04-14', 30, '2023-04-21', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(9, 3, 7, '2023-04-12', 12, '2023-04-19', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(10, 3, 7, '2023-04-19', 23, '2023-04-26', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(11, 3, 8, '2023-04-10', 12, '2023-04-17', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(12, 3, 9, '2023-04-11', 1, '2023-04-18', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(13, 4, 10, '2023-04-16', 24, '2023-04-30', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(14, 5, 11, '2023-04-10', 47, '2023-04-17', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(15, 5, 11, '2023-04-19', 60, '2023-04-26', '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(16, 5, 12, '2023-04-11', 45, NULL, '2024-01-29 09:36:47', '2024-01-29 09:36:47'),
(17, 5, 13, '2023-04-12', 23, NULL, '2024-01-29 09:36:47', '2024-01-29 09:36:47');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Wybren', 'example@mboutrecht.nl', NULL, '$2y$12$vlfKWFprZNCVIM/PqdAu9OnuzbKYegU2OXbMgjyOT6pngmSgSTpvq', NULL, '2024-01-29 09:53:01', '2024-01-29 09:53:01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
