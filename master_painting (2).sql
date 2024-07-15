-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2021 a las 13:43:31
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `master_painting`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `removed` enum('true','false') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `removed`, `created_at`, `updated_at`) VALUES
(1, 'Interior Paint', 'interior-paint', 'false', NULL, NULL),
(2, 'Exterior Paint', 'exterior-paint', 'false', NULL, NULL),
(3, 'Pressure Washer', 'pressure-washer', 'false', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path_thumb` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_id` bigint(20) UNSIGNED DEFAULT NULL,
  `principal` enum('false','true') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `saved` enum('false','true') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `path`, `path_thumb`, `model`, `work_id`, `principal`, `saved`, `created_at`, `updated_at`) VALUES
(1, 'public/images/works/1/1/image_1.jpg', 'public/images/works/1/1/thumb-image_1.jpg', 'work', 1, 'true', 'false', '2021-07-22 06:35:38', '2021-07-22 06:35:38'),
(2, 'public/images/works/1/1/image_2.jpg', 'public/images/works/1/1/thumb-image_2.jpg', 'work', 1, 'false', 'false', '2021-07-22 06:35:38', '2021-07-22 06:35:38'),
(3, 'public/images/works/1/1/image_3.jpg', 'public/images/works/1/1/thumb-image_3.jpg', 'work', 1, 'false', 'false', '2021-07-22 06:35:39', '2021-07-22 06:35:39'),
(4, 'public/images/works/1/2/image_4.jpg', 'public/images/works/1/2/thumb-image_4.jpg', 'work', 2, 'true', 'false', '2021-07-22 06:36:47', '2021-07-22 06:36:47'),
(5, 'public/images/works/1/2/image_5.jpg', 'public/images/works/1/2/thumb-image_5.jpg', 'work', 2, 'false', 'false', '2021-07-22 06:36:48', '2021-07-22 06:36:48'),
(6, 'public/images/works/1/2/image_6.jpg', 'public/images/works/1/2/thumb-image_6.jpg', 'work', 2, 'false', 'false', '2021-07-22 06:36:48', '2021-07-22 06:36:48'),
(7, 'public/images/works/1/3/image_7.jpg', 'public/images/works/1/3/thumb-image_7.jpg', 'work', 3, 'true', 'false', '2021-07-22 06:37:26', '2021-07-22 06:37:27'),
(8, 'public/images/works/1/3/image_8.jpg', 'public/images/works/1/3/thumb-image_8.jpg', 'work', 3, 'false', 'false', '2021-07-22 06:37:27', '2021-07-22 06:37:27'),
(9, 'public/images/works/1/3/image_9.jpg', 'public/images/works/1/3/thumb-image_9.jpg', 'work', 3, 'false', 'false', '2021-07-22 06:37:27', '2021-07-22 06:37:27'),
(13, 'public/images/works/1/4/image_13.jpg', 'public/images/works/1/4/thumb-image_13.jpg', 'work', 4, 'true', 'false', '2021-07-22 06:41:43', '2021-07-22 06:41:43'),
(14, 'public/images/works/1/4/image_14.jpg', 'public/images/works/1/4/thumb-image_14.jpg', 'work', 4, 'false', 'false', '2021-07-22 06:41:43', '2021-07-22 06:41:43'),
(15, 'public/images/works/1/4/image_15.jpg', 'public/images/works/1/4/thumb-image_15.jpg', 'work', 4, 'false', 'false', '2021-07-22 06:41:44', '2021-07-22 06:41:44'),
(16, 'public/images/works/1/5/image_16.jpg', 'public/images/works/1/5/thumb-image_16.jpg', 'work', 5, 'true', 'false', '2021-07-22 06:42:49', '2021-07-22 06:42:49'),
(17, 'public/images/works/1/5/image_17.jpg', 'public/images/works/1/5/thumb-image_17.jpg', 'work', 5, 'false', 'false', '2021-07-22 06:42:49', '2021-07-22 06:42:49');

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
(26, '2014_10_12_000000_create_users_table', 1),
(27, '2021_07_15_182029_create_videos_table', 1),
(28, '2021_07_15_182051_create_categories_table', 1),
(29, '2021_07_15_182052_create_works_table', 1),
(30, '2021_07_15_184758_create_images_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `session_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Master Painting', '$2y$10$BALm3KRa.zoZ/Q72pDtuUeozL91hv1cdkKyp/myBivJ.loHI.EHQK', '240721205826dJc1YzTgwdyE92E7WiiDWfgY250brdPEQDYDWcFvaoIs55vktfwXPsOEdHxs', NULL, NULL, '2021-07-25 01:58:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `title`, `id_video`, `url`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Burak Yeter - Tuesday (Official Music Video) ft. Danelle Sandoval', 'Y1_VsyLAGuk', 'https://www.youtube.com/watch?v=Y1_VsyLAGuk&list=PLJeo0kVu0J_Gw_G7DlpNvs90QvkWsevFV&index=13', 'burak-yeter-tuesday-official-music-video-ft-danelle-sandoval', '2021-07-22 06:19:39', '2021-07-22 06:19:39'),
(2, 'Major Lazer & DJ Snake - Lean On (feat. MØ) (Official Music Video)', 'YqeW9_5kURI', 'https://www.youtube.com/watch?v=YqeW9_5kURI&list=PLJeo0kVu0J_Gw_G7DlpNvs90QvkWsevFV&index=14', 'major-lazer-dj-snake-lean-on-feat-mo-official-music-video', '2021-07-22 06:20:01', '2021-07-22 06:20:01'),
(3, 'Simon Blaze - The Feeling (feat. Razah) (VideoHUB)', 'KJ9NNiDlic8', 'https://www.youtube.com/watch?v=KJ9NNiDlic8&list=PLJeo0kVu0J_Gw_G7DlpNvs90QvkWsevFV&index=16', 'simon-blaze-the-feeling-feat-razah-videohub', '2021-07-22 06:20:18', '2021-07-22 06:20:18'),
(4, 'Simon Blaze feat. Razah - Love Is Pain (Original Mix) (VideoHUB)', 'An85KqlSR_E', 'https://www.youtube.com/watch?v=An85KqlSR_E&list=PLJeo0kVu0J_Gw_G7DlpNvs90QvkWsevFV&index=5', 'simon-blaze-feat-razah-love-is-pain-original-mix-videohub', '2021-07-22 06:21:22', '2021-07-22 06:21:22'),
(6, 'Diego Power - Don\'t Look At Me (Original Mix) (INFINITY BASS)', 'VHALh6FV8NU', 'https://www.youtube.com/watch?v=VHALh6FV8NU&list=PLJeo0kVu0J_Gw_G7DlpNvs90QvkWsevFV&index=2', 'diego-power-dont-look-at-me-original-mix-infinity-bass', '2021-07-22 06:22:05', '2021-07-22 06:22:05'),
(9, 'Infinity Ink - Infinity (Dubdogz & Bhaskar Remix) (Bass Boosted)', '5-xhpcgBMe4', 'https://www.youtube.com/watch?v=5-xhpcgBMe4&list=PLJeo0kVu0J_Gw_G7DlpNvs90QvkWsevFV&index=11', 'infinity-ink-infinity-dubdogz-bhaskar-remix-bass-boosted', '2021-07-22 06:23:17', '2021-07-22 06:23:17'),
(10, 'Prayer in C (Robin Schulz Remix) (Catholic Version)', 'xyjYCzzW7hg', 'https://www.youtube.com/watch?v=xyjYCzzW7hg&list=PLJeo0kVu0J_Gw_G7DlpNvs90QvkWsevFV&index=18', 'prayer-in-c-robin-schulz-remix-catholic-version', '2021-07-22 06:25:09', '2021-07-22 06:25:09'),
(11, 'SKRILLEX - Bangarang feat. Sirah [Official Music Video]', 'YJVmu6yttiw', 'https://www.youtube.com/watch?v=YJVmu6yttiw&list=PLJeo0kVu0J_Gw_G7DlpNvs90QvkWsevFV&index=20', 'skrillex-bangarang-feat-sirah-official-music-video', '2021-07-22 06:25:38', '2021-07-22 06:25:38'),
(12, 'Martin Garrix - Animals (Official Video)', 'gCYcHz2k5x0', 'https://www.youtube.com/watch?v=gCYcHz2k5x0&list=PLJeo0kVu0J_Gw_G7DlpNvs90QvkWsevFV&index=23', 'martin-garrix-animals-official-video', '2021-07-22 06:26:11', '2021-07-22 06:26:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('Published','Not-published') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Not-published',
  `save_status` enum('saved','removed','draft') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `works`
--

INSERT INTO `works` (`id`, `title`, `description`, `date`, `category_id`, `status`, `save_status`, `created_at`, `updated_at`) VALUES
(1, 'Alisado completo de las paredes y techos', '<p>Se realiz&oacute; un trabajo de<strong>&nbsp;alisado completo de las paredes y techos</strong>. Primeramente, se elimin&oacute; el gotel&eacute; y el papel pintado que hab&iacute;a en la mayor&iacute;a de las paredes.&nbsp;</p>\r\n\r\n<p>Para ello, en pintores madrid empleamos m&aacute;quinas lijadoras profesionales. Para un correcto acabado se realiz&oacute; un igualado de las paredes a trav&eacute;s de la aplicaci&oacute;n de varias manos de aquaplast y su posterior lijado.</p>\r\n\r\n<p>A la vez que alisamos, iluminamos la zona con luz transversal, para de esa manera localizar todas las irregularidades. Repetimos el proceso hasta conseguir unas paredes completamente lisas.</p>\r\n\r\n<p>Una vez terminado este trabajo, se procedi&oacute; a la pintura de paredes y techos con pintura esmalte al agua. Empleamos pintura satinada, para de esa manera conseguir una mayor luminosidad y resistencia a las paredes de la vivienda de 80m2 situada en Calle Bravo Murillo (Madrid).</p>\r\n\r\n<p>Nuestros trabajos de quitar gotel&eacute; y alisar paredes son insuperables, ya que contamos con much&iacute;simos a&ntilde;os de experiencia realizando este tipo de trabajo, y todos nuestros clientes quedan encantados</p>', NULL, 1, 'Published', 'saved', '2021-07-22 06:34:05', '2021-07-22 06:36:01'),
(2, 'Alisado de paredes con gotelé California', '<p>Se realiz&oacute; un&nbsp;<strong>alisado de paredes con gotel&eacute;</strong>.</p>\r\n\r\n<p>Se trataba de un gotel&eacute; muy duro y viejo, por lo que para ahorrar costes se propuso la idea de alisar las paredes directamente, en lugar de quitar el gotel&eacute; existente. Este proceso es m&aacute;s barato para el cliente, pero solamente lo recomendamos cuando el gotel&eacute; es muy duro y no puede dar problemas de desprendimiento. Para quitar el gotel&eacute;, se igualaron las paredes aplicando varias manos de aquaplast y su posterior lijado.</p>\r\n\r\n<p>Una vez terminada esta fase se procedi&oacute; a la pintura de paredes y techos con pintura pl&aacute;stica marca Valentine. Siempre empleamos pinturas de las mejores marcas, y de la m&aacute;s alta calidad.</p>\r\n\r\n<p>Orientamos al cliente sobre colores, y se pint&oacute; protegiendo muy bien todas las zonas. Un resultado espectacular para esta vivienda de 70m2 situada en Paseo del Comandante Fortea (Madrid).</p>', NULL, 1, 'Published', 'saved', '2021-07-22 06:36:07', '2021-07-22 06:40:22'),
(3, 'Pintura de paredes y techos.', '<p>Se realiz&oacute; un trabajo de&nbsp;<strong>pintura de paredes y techos</strong>.</p>\r\n\r\n<p>Se trata de un piso que se iba a poner en alquiler, as&iacute; que se buscaba un presupuesto barato, y una modernizaci&oacute;n de la est&eacute;tica del piso. Siempre con una m&aacute;xima calidad, que garantizase que no iba a haber problemas de pintura. Se emple&oacute; pintura pl&aacute;stica Valentine de m&aacute;xima calidad para pintar este piso de 100m2 situado en Paseo del Manzanares (Madrid).</p>\r\n\r\n<p>El color rojo en algunas paredes hace que el piso contraste frente a la competencia. Le otorga personalidad, y en contraste con el techo y muebles blancos, queda muy moderno.</p>\r\n\r\n<p>Pintar colores intensos es siempre m&aacute;s complicado que pintar en blanco, as&iacute; que siempre hay que recurrir a profesionales para evitar marcas, brochazos, y problemas futuros.</p>', NULL, 2, 'Published', 'saved', '2021-07-22 06:36:52', '2021-07-22 06:37:34'),
(4, 'Alisado de paredes y techo', '<p>En la siguiente vivienda se realiz&oacute; el<strong>&nbsp;alisado de paredes y techo</strong>, las cuales contaban con gotel&eacute;.</p>\r\n\r\n<p>Para quitar el gotel&eacute;, realizamos el proceso habitual de quitar la gota existente con m&aacute;quina lijadora.</p>\r\n\r\n<p>Posteriormente lijamos a mano y aplicamos capas de aguaplast (y volvemos a lijar), hasta que el resultado est&eacute; perfectamente liso. Una vez finalizado el trabajo, se realiz&oacute; la pintura de paredes y techos con pintura pl&aacute;stica marca Bruguer, con diferentes colores en la vivienda de 60m2 situada en Calle de Santa Comba (Madrid)</p>\r\n\r\n<p>Los colores ofrecen un aire renovado al piso, a la vez que mantienen su luminosidad. Emplear un color intenso en una sola de las paredes de la estancia, puede hacer que &eacute;sta parezca m&aacute;s grande.</p>', NULL, 2, 'Published', 'saved', '2021-07-22 06:40:29', '2021-07-22 06:41:13'),
(5, 'Pintura de paredes y techos con pintura plástica', '<p>En esta vivienda se realiz&oacute; un trabajo de<strong>&nbsp;pintura de paredes y techos con pintura pl&aacute;stica</strong>&nbsp;Valentine.</p>\r\n\r\n<p>La foto es de una habitaci&oacute;n de 9m2, la cual se pint&oacute; en dos colores.</p>\r\n\r\n<p>Antes de pintar, siempre repasamos las paredes, cubrimos peque&ntilde;as grietas y agujeros que pueda haber, y nos aseguramos de que toda la superficie est&aacute; firme y perfecta para ser pintada.</p>\r\n\r\n<p>Tambi&eacute;n se realiz&oacute; el lijado y pintado de muebles, en color blanco, con pintura lacada a rodillo. La vivienda est&aacute; situada en Calle L&eacute;rida (Madrid).</p>', NULL, 2, 'Published', 'saved', '2021-07-22 06:42:11', '2021-07-22 06:42:51'),
(17, NULL, NULL, NULL, NULL, 'Not-published', 'draft', '2021-07-25 01:14:40', '2021-07-25 01:14:40');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_work_id_foreign` (`work_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`),
  ADD KEY `works_category_id_foreign` (`category_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_work_id_foreign` FOREIGN KEY (`work_id`) REFERENCES `works` (`id`);

--
-- Filtros para la tabla `works`
--
ALTER TABLE `works`
  ADD CONSTRAINT `works_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
