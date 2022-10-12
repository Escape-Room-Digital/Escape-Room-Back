-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2022 a las 19:32:13
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escaperoomdigital`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codeeditors`
--

CREATE TABLE `codeeditors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `codeeditors`
--

INSERT INTO `codeeditors` (`id`, `name`, `statement`, `result`, `created_at`, `updated_at`) VALUES
(1, 'El caracol que cayó en el pozo', 'Un caracol cayó en un pozo de 15 metros. Cada día logra subir 3 metros, pero cada noche vuelve a caer 2.', '15 días', '2022-10-12 15:27:59', '2022-10-12 15:27:59'),
(2, 'El tigre que cayó en el pozo', 'Un caracol cayó en un pozo de 15 metros. Cada día logra subir 3 metros, pero cada noche vuelve a caer 2.', '15 días', '2022-10-12 15:27:59', '2022-10-12 15:27:59'),
(3, 'O\'Conner-Bradtke', 'Cole-Kling', 'Christiansen-Homenick', '2022-10-12 15:27:59', '2022-10-12 15:27:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escaperooms`
--

CREATE TABLE `escaperooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `escaperooms`
--

INSERT INTO `escaperooms` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'EscapeRoom1', '2022-10-12 15:27:59', '2022-10-12 15:27:59'),
(2, 'Yost-Pfannerstill', '2022-10-12 15:27:59', '2022-10-12 15:27:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escaperoom_logictest`
--

CREATE TABLE `escaperoom_logictest` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logictest_id` bigint(20) UNSIGNED NOT NULL,
  `escaperoom_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logictests`
--

CREATE TABLE `logictests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct` tinyint(1) NOT NULL DEFAULT 1,
  `incorrect` tinyint(1) NOT NULL DEFAULT 0,
  `clue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `logictests`
--

INSERT INTO `logictests` (`id`, `name`, `statement`, `question`, `correct`, `incorrect`, `clue`, `image`, `created_at`, `updated_at`) VALUES
(1, 'El caracol que cayó en el pozo', 'Un caracol cayó en un pozo de 15 metros. Cada día logra subir 3 metros, pero cada noche vuelve a caer 2.', 'El Caracol saldrá del pozo en 15 días. ¿Verdadero o Falso?', 1, 0, '¿cuantos metros sube por dia?', 'https://demascotas.info/wp-content/uploads/2021/07/pexels-capriauto-8154117-scaled-e1625822522143.jpg', '2022-10-12 15:27:59', '2022-10-12 15:27:59'),
(2, 'Los tres perros', 'Rover pesa menos que Fido. Rover pesa más que Boomer. De los tres perros, Boomer es el que menos pesa.', 'Si las dos primeras afirmaciones son verdaderas, la tercera afirmación es', 1, 0, 'Fido pesa mas que los otros dos perros', 'https://st.depositphotos.com/2166845/4807/i/600/depositphotos_48073787-stock-photo-three-dogs.jpg', '2022-10-12 15:27:59', '2022-10-12 15:27:59'),
(3, 'Los centros comerciales', 'Kingston Mall tiene más tiendas que Galleria. El centro comercial Four Corners tiene menos tiendas que Galleria. El Kingston Mall tiene más tiendas que el Four Corners Mall.', 'Si las dos primeras afirmaciones son verdaderas, la tercera afirmación es', 1, 0, 'De las dos primeras afirmaciones, sabe que Kingston Mall tiene la mayor cantidad de tiendas, por lo que Kingston Mall tendría más tiendas que Four Corners Mall.', 'https://www.miradormadrid.com/wp-content/uploads/2020/01/Centros-Comerciales-2.jpg', '2022-10-12 15:27:59', '2022-10-12 15:27:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_19_112137_create_logictests_table', 1),
(6, '2022_09_21_071927_create_codeeditors_table', 1),
(7, '2022_10_03_085821_create_escaperooms_table', 1),
(8, '2022_10_03_152711_create_escaperoom_logictest_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solution` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testdone` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `promo`, `solution`, `testdone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Erik Rogahn', '567.519.0350', 'kayden75@example.net', 'Prof. Milton Bernhard IV', 'Haleigh Schroeder', 0, '2022-10-12 15:27:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cUkONpE7Et', '2022-10-12 15:27:59', '2022-10-12 15:27:59'),
(2, 'Cayla Fritsch', '1-843-561-8280', 'gaetano51@example.com', 'Helena O\'Keefe', 'Nat Collier', 0, '2022-10-12 15:27:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '68wHJxc9mq', '2022-10-12 15:27:59', '2022-10-12 15:27:59'),
(3, 'Mae Mayert', '425.426.0667', 'stark.easter@example.org', 'Cara Gottlieb', 'Ila Keebler MD', 0, '2022-10-12 15:27:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JCebZSZGHm', '2022-10-12 15:27:59', '2022-10-12 15:27:59'),
(4, 'Calista Stiedemann', '+1 (361) 801-7207', 'dturcotte@example.org', 'Dr. Lilyan Hyatt II', 'Miss Dahlia O\'Reilly', 0, '2022-10-12 15:27:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'u5aJjVa6TY', '2022-10-12 15:27:59', '2022-10-12 15:27:59'),
(5, 'Michelle Rutherford PhD', '(283) 249-8250', 'xheaney@example.com', 'Ms. Grace Gorczany V', 'Krista Stoltenberg', 0, '2022-10-12 15:27:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1C76F84OJp', '2022-10-12 15:27:59', '2022-10-12 15:27:59'),
(6, 'Mr. Jesus Hessel', '+1.269.675.8303', 'abdullah.koch@example.net', 'Prof. Estevan Wilderman V', 'Prof. Aiden Stamm', 0, '2022-10-12 15:27:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3AmAOjkWtp', '2022-10-12 15:27:59', '2022-10-12 15:27:59'),
(7, 'Jeremy Legros III', '+1.323.674.1860', 'morgan26@example.com', 'Prof. Maynard Lindgren PhD', 'Xander Torp', 0, '2022-10-12 15:27:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gUQ7VJFBXv', '2022-10-12 15:27:59', '2022-10-12 15:27:59'),
(8, 'Forest Huel', '(650) 354-0974', 'princess37@example.com', 'Ms. Amira Howe IV', 'Prof. Royce Keebler Sr.', 0, '2022-10-12 15:27:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'sgQQjjkILx', '2022-10-12 15:27:59', '2022-10-12 15:27:59'),
(9, 'Prof. Arne Effertz Sr.', '1-305-416-1085', 'willy.kuhn@example.org', 'Ms. Ashly Monahan PhD', 'Prof. Krista Johns', 0, '2022-10-12 15:27:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NjIdkTqrnt', '2022-10-12 15:27:59', '2022-10-12 15:27:59'),
(10, 'Corrine Wisoky', '(989) 892-4427', 'margot39@example.org', 'Cornelius Gottlieb', 'Ms. Raquel Runolfsson', 0, '2022-10-12 15:27:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6aGGFJ0tDR', '2022-10-12 15:27:59', '2022-10-12 15:27:59');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `codeeditors`
--
ALTER TABLE `codeeditors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `escaperooms`
--
ALTER TABLE `escaperooms`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `escaperoom_logictest`
--
ALTER TABLE `escaperoom_logictest`
  ADD PRIMARY KEY (`id`),
  ADD KEY `escaperoom_logictest_logictest_id_foreign` (`logictest_id`),
  ADD KEY `escaperoom_logictest_escaperoom_id_foreign` (`escaperoom_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `logictests`
--
ALTER TABLE `logictests`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `codeeditors`
--
ALTER TABLE `codeeditors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `escaperooms`
--
ALTER TABLE `escaperooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `escaperoom_logictest`
--
ALTER TABLE `escaperoom_logictest`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `logictests`
--
ALTER TABLE `logictests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `escaperoom_logictest`
--
ALTER TABLE `escaperoom_logictest`
  ADD CONSTRAINT `escaperoom_logictest_escaperoom_id_foreign` FOREIGN KEY (`escaperoom_id`) REFERENCES `escaperooms` (`id`),
  ADD CONSTRAINT `escaperoom_logictest_logictest_id_foreign` FOREIGN KEY (`logictest_id`) REFERENCES `logictests` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
