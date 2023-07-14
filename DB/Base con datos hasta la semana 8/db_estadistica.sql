-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2023 a las 17:49:24
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_estadistica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_categoria` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre_categoria`, `created_at`, `updated_at`) VALUES
(1, 'TROPA', '2023-06-15 21:58:07', '2023-06-15 21:58:07'),
(2, 'policia', '2023-06-15 21:58:16', '2023-06-15 21:58:16'),
(3, 'OFICIAL', NULL, NULL),
(4, 'SUB OFICIAL', NULL, NULL),
(5, 'AUXILIAR', NULL, NULL),
(6, 'TROPA', NULL, NULL),
(7, 'CADETE', NULL, NULL),
(8, 'AGREGADO MILITAR', NULL, NULL),
(9, 'CIVIL', NULL, NULL),
(10, 'DH (CONYUGE)', NULL, NULL),
(11, 'DH (HIJO)', NULL, NULL),
(12, 'DH (PADRE)', NULL, NULL),
(13, 'DH (MADRE)', NULL, NULL),
(14, 'ESTUDIANTE', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultaexternas`
--

CREATE TABLE `consultaexternas` (
  `idConsultaExt` bigint(20) UNSIGNED NOT NULL,
  `fechaRegistro` date NOT NULL,
  `facturaNumero` bigint(20) NOT NULL,
  `expediente` bigint(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fuerza_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `consultaexternas`
--

INSERT INTO `consultaexternas` (`idConsultaExt`, `fechaRegistro`, `facturaNumero`, `expediente`, `nombre`, `fuerza_id`, `created_at`, `updated_at`) VALUES
(1, '2023-06-19', 2548, 123, 'cristian', 6, '2023-06-19 20:45:19', '2023-06-19 20:45:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `endoscopias`
--

CREATE TABLE `endoscopias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fechaRegistro` date NOT NULL,
  `facturaNumero` bigint(20) NOT NULL,
  `expediente` bigint(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fuerzas`
--

CREATE TABLE `fuerzas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo_fuerza` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `fuerzas`
--

INSERT INTO `fuerzas` (`id`, `tipo_fuerza`, `created_at`, `updated_at`) VALUES
(1, 'EJERCITO', '2023-06-15 21:57:43', '2023-06-15 21:57:43'),
(2, 'DNII', '2023-06-15 21:57:46', '2023-06-15 21:57:46'),
(4, 'AEREA', NULL, NULL),
(5, 'NAVAL', NULL, NULL),
(6, 'PMOP', NULL, NULL),
(7, 'IPM', NULL, NULL),
(8, 'POLICIA', NULL, NULL),
(10, 'CIVIL', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `idGenero` bigint(20) UNSIGNED NOT NULL,
  `tipo_genero` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`idGenero`, `tipo_genero`, `created_at`, `updated_at`) VALUES
(1, 'Hombre', NULL, NULL),
(2, 'Mujer', NULL, NULL),
(3, 'Otro', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grados`
--

CREATE TABLE `grados` (
  `idGrado` bigint(20) UNSIGNED NOT NULL,
  `tipo_grado` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `grados`
--

INSERT INTO `grados` (`idGrado`, `tipo_grado`, `created_at`, `updated_at`) VALUES
(1, 'AGENTE', NULL, NULL),
(2, 'AGREGADO MILITAR', NULL, NULL),
(3, 'ALFEREZ DE FRAGATA', NULL, NULL),
(4, 'ASPIRANTES A CADETES', NULL, NULL),
(5, 'AUXILIAR', NULL, NULL),
(6, 'CABO', NULL, NULL),
(7, 'CADETE', NULL, NULL),
(8, 'CAPITAN', NULL, NULL),
(9, 'CAPITAN DE CORBETA', NULL, NULL),
(10, 'CAPITAN DE FRAGATA', NULL, NULL),
(11, 'CAPITAN DE NAVIO', NULL, NULL),
(12, 'CIVIL', NULL, NULL),
(13, 'COMANDO I', NULL, NULL),
(14, 'COMANDO II', NULL, NULL),
(15, 'COMANDO III', NULL, NULL),
(16, 'COMISARIO DE POLICIA', NULL, NULL),
(17, 'COMISIONADO DE POLICIA', NULL, NULL),
(18, 'COMISIONADO GENERAL DE POLICIA', NULL, NULL),
(19, 'CONTRALMIRANTE', NULL, NULL),
(20, 'CORONEL', NULL, NULL),
(21, 'DH', NULL, NULL),
(22, 'GENERAL DE BRIGADA', NULL, NULL),
(23, 'GENERAL DE DIVISION', NULL, NULL),
(24, 'INSPECTOR DE POLICIA', NULL, NULL),
(25, 'JEFE MAESTRO', NULL, NULL),
(26, 'JEFE MAYOR', NULL, NULL),
(27, 'JEFE PRIMERO', NULL, NULL),
(28, 'MAYOR', NULL, NULL),
(29, 'RETIRADO', NULL, NULL),
(30, 'SARGENTO PRIMERO', NULL, NULL),
(31, 'SARGENTO RASO', NULL, NULL),
(32, 'SARGENTO SEGUNDO', NULL, NULL),
(33, 'SOLDADO', NULL, NULL),
(34, 'SUB COMISARIO DE POLICIA', NULL, NULL),
(35, 'SUB COMISIONADO DE POLICIA', NULL, NULL),
(36, 'SUB INSPECTOR DE POLICIA', NULL, NULL),
(37, 'SUB OFICIAL', NULL, NULL),
(38, 'SUB TENIENTE', NULL, NULL),
(39, 'TENIENTE', NULL, NULL),
(40, 'TENIENTE CORONEL', NULL, NULL),
(41, 'TENIENTE DE FRAGATA', NULL, NULL),
(42, 'TENIENTE DE NAVIO', NULL, NULL),
(43, 'VICEALMIRANTE', NULL, NULL),
(44, 'TROPA', NULL, NULL),
(45, 'PLAN ESPECIAL', NULL, NULL),
(46, 'ASPIRANTE A ESTUDIANTE', NULL, NULL),
(47, 'N/D', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_05_04_191443_create_sessions_table', 1),
(7, '2023_05_17_141159_create_endoscopias_table', 1),
(8, '2023_05_23_153144_create_universal_controllers_table', 1),
(9, '2023_05_23_174727_create_categorias_table', 1),
(10, '2023_05_29_193016_fuerza', 1),
(11, '2023_05_29_193125_consulta_externa', 1),
(12, '2023_06_14_150745_genero', 1),
(13, '2023_06_14_150925_grado', 1),
(14, '2023_06_14_151259_paciente', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id_paciente` bigint(20) UNSIGNED NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `identidad_paciente` bigint(20) NOT NULL,
  `numero_serie` varchar(50) NOT NULL,
  `edad_paciente` bigint(20) NOT NULL,
  `celular_paciente` varchar(50) NOT NULL,
  `correo_paciente` varchar(50) NOT NULL,
  `nombre_paciente` varchar(50) NOT NULL,
  `apellido_paciente` varchar(50) NOT NULL,
  `grado_id` bigint(20) UNSIGNED NOT NULL,
  `fuerza_id` bigint(20) UNSIGNED NOT NULL,
  `genero_id` bigint(20) UNSIGNED NOT NULL,
  `categoria_id` bigint(20) UNSIGNED NOT NULL,
  `estado_paciente` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id_paciente`, `fecha_nacimiento`, `identidad_paciente`, `numero_serie`, `edad_paciente`, `celular_paciente`, `correo_paciente`, `nombre_paciente`, `apellido_paciente`, `grado_id`, `fuerza_id`, `genero_id`, `categoria_id`, `estado_paciente`, `created_at`, `updated_at`) VALUES
(3, '2023-06-19', 82419971002, 'mt-0404', 25, '+504 97554001', 'cristianolivares@yahoo.es', 'Cristian Alejandro', 'Mena Olivares', 8, 4, 1, 6, 'ACTIVO', '2023-06-19 20:26:57', '2023-06-19 20:26:57'),
(4, '2023-06-19', 824199500515, 'LO-515', 25, '97933855', 'lirioolivares84@gmail.com', 'Lirio Del Carmen', 'Olivares Armijo', 5, 4, 2, 4, 'ACTIVO', '2023-06-19 20:58:09', '2023-06-19 20:58:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('i3wry1EgHNrBdUXcmj4fxIiHoWroZ04W8ca4inm8', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.51', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoieUFWMlBidWVyYWJTelJTZXdUTm9FSkR6NEFNbXlJOE54RDJhbkRnUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jb25zdWx0YWV4dGVybmFzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRPbTBkSmZjZ2p5QjU1Y2I2ckprWm8uVGxTdHp3OGxLcmlrZjFyaXhHLjJzc2pJSC53UTJqRyI7fQ==', 1687275172),
('Vur4L4L7HIYJRR89yMt6vpTQlnzUJcN7cEtgxREo', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.51', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoicUxwclA3eWpFNFR4N2toa3FnRURxSmwyTExjVTZDZE53Q3FvZDJPMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jb25zdWx0YWV4dGVybmFzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkT20wZEpmY2dqeUI1NWNiNnJKa1pvLlRsU3R6dzhsS3Jpa2Yxcml4Ry4yc3NqSUgud1EyakciO30=', 1687198585);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `universal_controllers`
--

CREATE TABLE `universal_controllers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'cristian', 'cristian@gmail.com', NULL, '$2y$10$Om0dJfcgjyB55cb6rJkZo.TlStzw8lKrikf1rixG.2ssjIH.wQ2jG', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-15 21:24:29', '2023-06-15 21:24:29');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `consultaexternas`
--
ALTER TABLE `consultaexternas`
  ADD PRIMARY KEY (`idConsultaExt`),
  ADD KEY `consultaexternas_fuerza_id_foreign` (`fuerza_id`);

--
-- Indices de la tabla `endoscopias`
--
ALTER TABLE `endoscopias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `fuerzas`
--
ALTER TABLE `fuerzas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`idGenero`);

--
-- Indices de la tabla `grados`
--
ALTER TABLE `grados`
  ADD PRIMARY KEY (`idGrado`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id_paciente`),
  ADD KEY `pacientes_grado_id_foreign` (`grado_id`),
  ADD KEY `pacientes_fuerza_id_foreign` (`fuerza_id`),
  ADD KEY `pacientes_genero_id_foreign` (`genero_id`),
  ADD KEY `pacientes_categoria_id_foreign` (`categoria_id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `universal_controllers`
--
ALTER TABLE `universal_controllers`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `consultaexternas`
--
ALTER TABLE `consultaexternas`
  MODIFY `idConsultaExt` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `endoscopias`
--
ALTER TABLE `endoscopias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fuerzas`
--
ALTER TABLE `fuerzas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `idGenero` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `grados`
--
ALTER TABLE `grados`
  MODIFY `idGrado` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id_paciente` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `universal_controllers`
--
ALTER TABLE `universal_controllers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `consultaexternas`
--
ALTER TABLE `consultaexternas`
  ADD CONSTRAINT `consultaexternas_fuerza_id_foreign` FOREIGN KEY (`fuerza_id`) REFERENCES `fuerzas` (`id`);

--
-- Filtros para la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD CONSTRAINT `pacientes_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `pacientes_fuerza_id_foreign` FOREIGN KEY (`fuerza_id`) REFERENCES `fuerzas` (`id`),
  ADD CONSTRAINT `pacientes_genero_id_foreign` FOREIGN KEY (`genero_id`) REFERENCES `generos` (`idGenero`),
  ADD CONSTRAINT `pacientes_grado_id_foreign` FOREIGN KEY (`grado_id`) REFERENCES `grados` (`idGrado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
