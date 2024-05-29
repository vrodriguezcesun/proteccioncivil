-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 23-05-2024 a las 17:09:59
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

DROP TABLE IF EXISTS `empleados`;
CREATE TABLE IF NOT EXISTS `empleados` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `empleado` bigint NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `puesto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sala` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cursopa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cursopai` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cursopaf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ciudadpa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cursobyr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cursobyri` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cursobyrf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ciudadbyr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cursomyue` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cursomyuei` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cursomyuef` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ciudadmyue` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cursoeyr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cursoeyri` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cursoeyrf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ciudadeyr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `empleado`, `nombre`, `puesto`, `sala`, `email`, `telefono`, `cursopa`, `cursopai`, `cursopaf`, `ciudadpa`, `cursobyr`, `cursobyri`, `cursobyrf`, `ciudadbyr`, `cursomyue`, `cursomyuei`, `cursomyuef`, `ciudadmyue`, `cursoeyr`, `cursoeyri`, `cursoeyrf`, `ciudadeyr`, `created_at`, `updated_at`) VALUES
(2, 51924, 'Victor Manuel', 'Cocinero', 'Hipodromo', 'vrodriguez39@live.com.mx', '6641107594', NULL, NULL, NULL, 'Tijuana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-20 01:23:52', '2024-05-20 01:24:31'),
(4, 51925, 'Leyla Roxana', 'Cocinero', 'Hipodromo', 'leyla.romero@caliente.com.mx', '663852419', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-20 23:22:33', '2024-05-20 23:22:33'),
(10, 12300, 'Victor Manuel', 'Jefe de Sala', 'Alameda', 'vrodriguez39@live.com.mx', '6617895241', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-22 00:58:39', '2024-05-22 00:58:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluaciones`
--

DROP TABLE IF EXISTS `evaluaciones`;
CREATE TABLE IF NOT EXISTS `evaluaciones` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `respuesta1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `respuesta2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `respuesta3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `evaluaciones_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `evaluaciones`
--

INSERT INTO `evaluaciones` (`id`, `respuesta1`, `respuesta2`, `respuesta3`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Evaluacion de la escena', 'Enfocarme al lesionado', 'El lugar es seguro para mí?', 1, '2024-05-22 00:37:48', '2024-05-22 00:37:48'),
(2, 'Evaluacion de la escena', 'Analisar los riesgos', 'a quien le debo de llamar primero?', 1, '2024-05-22 00:39:18', '2024-05-22 00:39:18'),
(3, 'Evaluacion de la escena', 'Enfocarme al lesionado', 'a quien le debo de llamar primero?', 1, '2024-05-22 00:40:20', '2024-05-22 00:40:20'),
(4, 'moverlo', 'Enfocarme al lesionado', 'El lugar es seguro para mí?', 1, '2024-05-22 00:41:01', '2024-05-22 00:41:01'),
(5, 'Evaluacion de la escena', 'Analisar los riesgos', 'a quien le debo de llamar primero?', 1, '2024-05-22 00:41:17', '2024-05-22 00:41:17'),
(6, 'moverlo', 'Enfocarme al lesionado', 'El lugar es seguro para mí?', 1, '2024-05-22 00:41:31', '2024-05-22 00:41:31'),
(7, 'Llamar al 911', 'Llamar al 911', 'Llamar al 911', 1, '2024-05-22 00:42:37', '2024-05-22 00:42:37'),
(8, 'Evaluacion de la escena', 'Enfocarme al lesionado', 'Llamar al 911', 1, '2024-05-22 01:26:10', '2024-05-22 01:26:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
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
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_05_01_020235_create_evaluaciones_table', 1),
(7, '2024_05_04_030207_create_permission_tables', 1),
(8, '2024_05_06_200743_create_empleados_table', 1),
(9, '2024_05_16_171756_create_salas_table', 1),
(10, '2024_05_16_181316_create_puestos_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
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
-- Estructura de tabla para la tabla `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'principal', 'web', '2024-05-19 16:23:58', '2024-05-19 16:23:58'),
(2, 'usuario.index', 'web', '2024-05-19 16:23:58', '2024-05-19 16:23:58'),
(3, 'usuario.create', 'web', '2024-05-19 16:23:58', '2024-05-19 16:23:58'),
(4, 'usuario.edit', 'web', '2024-05-19 16:23:58', '2024-05-19 16:23:58'),
(5, 'usuario.destroy', 'web', '2024-05-19 16:23:58', '2024-05-19 16:23:58'),
(6, 'primerosauxilios', 'web', '2024-05-19 16:23:58', '2024-05-19 16:23:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
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
-- Estructura de tabla para la tabla `puestos`
--

DROP TABLE IF EXISTS `puestos`;
CREATE TABLE IF NOT EXISTS `puestos` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `puestos`
--

INSERT INTO `puestos` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Cocinero', '2024-05-20 01:08:26', '2024-05-20 01:24:21'),
(2, 'Cicinero A y B', '2024-05-20 23:23:00', '2024-05-20 23:23:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2024-05-19 16:23:58', '2024-05-19 16:23:58'),
(2, 'Usuario', 'web', '2024-05-19 16:23:58', '2024-05-19 16:23:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(6, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salas`
--

DROP TABLE IF EXISTS `salas`;
CREATE TABLE IF NOT EXISTS `salas` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rfc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `salas`
--

INSERT INTO `salas` (`id`, `nombre`, `direccion`, `rfc`, `created_at`, `updated_at`) VALUES
(1, 'Hipodromo', 'Ave, Gral Lazaro Cardenas No.2171 Local B-108', 'HAC861114P16', '2024-05-20 01:08:43', '2024-05-20 01:08:43'),
(2, 'Alameda', 'Blvd. Gustavo Diaz Ordaz No.15601 Local 21', 'HAC861114P16', '2024-05-20 23:23:14', '2024-05-20 23:23:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'admin@admin.com', NULL, '$2y$10$fjnYgmYKZli/vaetjKoLSOvqIaWS/5VZlbqZBqY2kO4vQMNWnhOte', NULL, '2024-05-19 16:23:58', '2024-05-19 16:23:58'),
(2, 'Victor Hernandez', 'victor@gmail.com', NULL, '$2y$10$yqfMiLqys66HSFeDvC1B/eh/tOB53UKbRNKbR7x90qLLgupfwwRa.', NULL, '2024-05-19 16:23:58', '2024-05-19 16:23:58');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
