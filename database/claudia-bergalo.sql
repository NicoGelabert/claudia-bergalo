-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2020 a las 22:13:14
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `claudia-bergalo`
--

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
(4, '2020_11_21_033538_create_works_table', 1);

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
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `works`
--

INSERT INTO `works` (`id`, `name`, `type`, `category`, `length`, `location`, `url`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Sodimac Sueño', 'audio', 'Acting Publicidad', '00:36', 'imperdibles', '/storage/audios/imperdibles/sodimac-02.mp3', '/storage/images/imperdibles/sodimac.jpg', NULL, NULL),
(2, 'Poett Primavera', 'video', 'Publicidad', '00:06', 'imperdibles', 'https://www.youtube.com/watch?v=oTNoFHR69h8', '/storage/images/imperdibles/poett.jpg', NULL, NULL),
(3, 'Palmas del Pilar y Plaza Oeste', 'audio', 'Publicidad', '00:26', 'imperdibles', '/storage/audios/imperdibles/palmas-del-pilar-y-plaza-oeste.mp3', '/storage/images/imperdibles/plaza-oeste.jpg', NULL, NULL),
(4, 'Hitachi', 'video', 'Presentación de marca', '02:49', 'imperdibles', 'https://www.youtube.com/watch?v=STj89hWtjbM', '/storage/images/imperdibles/hitachi.jpg', NULL, NULL),
(5, 'Matarazzo Integral', 'video', 'Publicidad', '00:16', 'imperdibles', 'https://www.youtube.com/watch?v=qtYKVoXLEHA', '/storage/images/imperdibles/matarazzo_integral.jpg', NULL, NULL),
(6, 'Mc Donald´s', 'audio', 'E-learning Neutro', '00:42', 'imperdibles', '/storage/audios/imperdibles/mcdonalds.mp3', '/storage/images/imperdibles/mcdonalds.jpg', NULL, NULL),
(7, 'Campo Limpio', 'video', 'Tutorial', '01:05', 'ultimos', 'https://www.youtube.com/watch?v=ePo4oQ2rUPo', '/storage/images/ultimos/campolimpio.jpg', NULL, NULL),
(8, 'AMIA', 'video', 'Institucional', '00:47', 'ultimos', 'https://www.youtube.com/watch?v=sNoO6H5F4QI', '/storage/images/ultimos/amia.jpg', NULL, NULL),
(9, 'Planta Agencia Creativa', 'video', 'Publicidad', '03:40', 'ultimos', 'https://www.youtube.com/watch?v=IjBDvL7SS5A', '/storage/images/ultimos/planta.jpg', NULL, NULL),
(10, 'Skyteam', 'audio', 'Publicidad Neutro', '00:26', 'ultimos', '/storage/audios/ultimo/skyteam.mp3', '/storage/images/ultimos/skyteam.jpg', NULL, NULL),
(11, 'Telecom', 'audio', 'E-learning', '00:59', 'ultimos', '/storage/audios/ultimo/telecom.mp3', '/storage/images/ultimos/telecom.jpg', NULL, NULL),
(12, 'Chat Robot', 'video', 'Tutorial', '01:49', 'ultimos', 'https://www.youtube.com/watch?v=2XCkNqskw7M', '/storage/images/ultimos/chat-robot.jpg', NULL, NULL),
(13, 'Cuentos por contar', 'audio', 'Narración', '04:04', 'mezcladito', '/storage/audios/mezcladito/cuentos-x-contar.mp3', '/storage/images/mezcladito/cuentosxcontar.jpg', NULL, NULL),
(14, 'AMIA', 'video', 'Institucional', '00:56', 'mezcladito', 'https://www.youtube.com/watch?v=wIfXqlRGtRI', '/storage/images/mezcladito/amia.jpg', NULL, NULL),
(15, 'Baggio de la Huerta', 'video', 'Publicidad', '00:12', 'mezcladito', 'https://www.youtube.com/watch?v=9vGwVqZBzh8', '/storage/images/mezcladito/baggio-de-la-huerta.jpg', NULL, NULL),
(16, 'Azistia', 'audio', 'Contestador teléfonico', '00:42', 'mezcladito', '/storage/audios/mezcladito/azistia.mp3', '/storage/images/mezcladito/azistia.jpg', NULL, NULL),
(17, 'Sodimac Promo', 'audio', 'Publicidad', '00:24', 'mezcladito', '/storage/audios/mezcladito/sodimac-05.mp3', '/storage/images/mezcladito/sodimac-04.jpg', NULL, NULL),
(18, 'La Segunda Seguros', 'audio', 'E-learning', '00:51', 'mezcladito', '/storage/audios/mezcladito/la-segunda-seguros.mp3', '/storage/images/mezcladito/la-segunda-seguros.jpg', NULL, NULL),
(19, 'Demo publicidad', 'audio', 'publicidad', '00:57', 'demo', '/storage/audios/democlau/demopublicidad.mp3', '/storage/images/democlau/demopublicidad.jpg', NULL, NULL),
(20, 'Demo Acting', 'audio', 'acting', '00:54', 'demo', '/storage/audios/democlau/demoacting.mp3', '/storage/images/democlau/demoacting.jpg', NULL, NULL),
(21, 'Demo Niñ@s', 'audio', 'Voces de niñ@s', '00:53', 'demo', '/storage/audios/democlau/demoninios.mp3', '/storage/images/democlau/demoninios.jpg', NULL, NULL),
(22, 'Via Crucis submarino', 'video-grande', 'FA!', '49:30', 'para-ver-y-escuchar', 'https://www.youtube.com/watch?v=xO-AYa4rEMk', '/storage/images/para-ver-y-escuchar/fiestas-001.jpg', NULL, NULL),
(23, 'Bridget, Trolls', 'video-chico', 'Doblaje cantado', '01:56', 'para-ver-y-escuchar', 'https://www.youtube.com/watch?v=H5PuyEmVE_o&t', '/storage/images/para-ver-y-escuchar/Trolls.jpg', NULL, NULL),
(24, 'Fiesta Patronal Virgen de Fátima', 'video-chico', 'FA!', '01:56', 'para-ver-y-escuchar', 'https://www.youtube.com/watch?v=2xvYpRs4PJk&t', '/storage/images/para-ver-y-escuchar/fiestas-002.jpg', NULL, NULL),
(25, 'Doblaje', 'video-mediano', 'Demo', '02:54', 'para-ver-y-escuchar', 'https://www.youtube.com/watch?v=VUCEpK19Ox4&t', '/storage/images/para-ver-y-escuchar/doblaje-demo.jpg', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
