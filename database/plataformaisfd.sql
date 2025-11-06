-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2025 a las 18:27:32
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `plataformaisfd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencias`
--

CREATE TABLE `asistencias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `inscripcion_id` bigint(20) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `presente` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `duracion` varchar(255) NOT NULL,
  `clasificacion` varchar(255) NOT NULL,
  `horario` varchar(255) DEFAULT NULL,
  `numero_resolucion` varchar(255) DEFAULT NULL,
  `fecha_aprobacion` date DEFAULT NULL,
  `fondo` varchar(255) DEFAULT NULL,
  `plan_estudio` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `nombre`, `descripcion`, `duracion`, `clasificacion`, `horario`, `numero_resolucion`, `fecha_aprobacion`, `fondo`, `plan_estudio`, `created_at`, `updated_at`) VALUES
(1, 'Profesorado en Inglés', 'El Profesorado de Inglés es un programa académico de cuatro años que se centra en la formación de profesionales en la enseñanza del idioma inglés. Los estudiantes adquieren habilidades pedagógicas, lingüísticas y culturales, además de profundizar en metodologías de enseñanza modernas. Al completar el programa, estarán preparados para desempeñarse como docentes de inglés en diversos niveles educativos. La carrera ofrece una sólida base en teorías de la enseñanza del idioma y proporciona a los graduados las herramientas necesarias para ser educadores efectivos.', '4 años', 'Profesorado', '19:00 a 23:00 hs', 'N° 369/17', NULL, 'ingles-big.jpg', 'planingles.png', '2025-09-15 22:00:00', '2025-09-15 22:00:00'),
(2, 'Tecnicatura Superior en Desarrollo de Software', 'La Tecnicatura Superior en Desarrollo de Software, especializada en Desarrollo Web, es un programa de tres años que forma a profesionales en programación, diseño web y gestión de proyectos. Los estudiantes adquieren habilidades técnicas en programación web, bases de datos y frameworks, además de aprender sobre diseño web y usabilidad. Al graduarse, estarán preparados para desarrollar sitios y aplicaciones web, gestionar proyectos de desarrollo y mantener y optimizar sitios existentes. Esta carrera ofrece una sólida base en tecnología web y prepara a los graduados para roles en desarrollo y diseño web.', '3 años', 'Tecnicatura', '19:00 a 23:00 hs', 'N° 369/17', NULL, 'software-big.jpg', 'plansoft.png', '2025-09-16 22:00:00', '2025-09-16 22:00:00'),
(3, 'Tecnicatura Superior en Soporte de Infraestructura de Tecnología de la Información', 'La Tecnicatura Superior en Soporte de Infraestructura de Tecnología de la Información es una carrera de nivel superior que forma profesionales capacitados para gestionar, mantener y optimizar los recursos tecnológicos esenciales de cualquier organización. El egresado es un especialista en asegurar la máxima disponibilidad y eficiencia del ambiente operativo, implementando, manteniendo y resolviendo problemas relacionados con la infraestructura de TI. Sus funciones principales incluyen la administración de sistemas operativos (físicos y virtualizados), la gestión de redes locales y de área amplia, el soporte de hardware y software de base, y la participación en la implementación de medidas de seguridad informática. El ámbito laboral para estos técnicos abarca departamentos de TI de empresas, centros de procesamiento de datos y empresas proveedoras de servicios tecnológicos, ocupando roles como Administrador de Redes, Administrador de Sistemas o Especialista en Soporte de TI.', '3 años', 'Tecnicatura', '19:00 a 23:00 hs', 'N° 3607/16', NULL, 'infraestructura.jpg', 'plansoft.png', '2025-09-16 22:00:00', '2025-09-16 22:00:00'),
(4, 'Tecnicatura Superior en Administración de Sistemas y Redes', 'La Tecnicatura Superior en Administración de Sistemas y Redes es un programa de tres años diseñado para formar profesionales en la gestión eficiente de sistemas informáticos y redes. Los estudiantes adquieren habilidades técnicas en el mantenimiento y la configuración de sistemas, así como en la administración de redes. Se enfocan en la seguridad de la información, la resolución de problemas y la implementación de tecnologías emergentes. Al graduarse, estarán preparados para roles en administración de sistemas, soporte técnico y seguridad informática. La carrera proporciona una sólida base en tecnologías de la información y prepara a los graduados para enfrentar los desafíos del mundo digital.', '3 años', 'Tecnicatura', '19:00 a 23:00 hs', 'N° 369/17', NULL, 'redes-big.jpg', 'planredes.png', '2025-09-17 22:00:00', '2025-09-17 22:00:00'),
(5, 'Tecnicatura Superior en Administración de Empresas con Orientación a PyMES', 'La Tecnicatura Superior en Administración de Empresas con Orientación a PyMES es un programa de tres años que se enfoca en la formación de profesionales en la gestión empresarial, con énfasis en las pequeñas y medianas empresas (PyMES). Los estudiantes desarrollan habilidades en áreas como contabilidad, finanzas, marketing y recursos humanos. Además, adquieren conocimientos específicos para entender y abordar los desafíos particulares que enfrentan las PyMES. Al graduarse, estarán preparados para asumir roles de liderazgo en la administración de empresas, contribuyendo al éxito y crecimiento sostenible de las organizaciones. La carrera proporciona una sólida base teórica y práctica en el ámbito empresarial.', '3 años', 'Tecnicatura', '19:00 a 23:00 hs', 'N° 369/17', NULL, 'pymes-big.jpg', 'plansoft.png', '2025-09-18 22:00:00', '2025-09-18 22:00:00'),
(6, 'Profesorado en Economía', 'El Profesorado en Economía es un programa académico de cuatro años que se dedica a la formación de profesionales en la enseñanza de principios económicos. Los estudiantes desarrollan competencias pedagógicas y adquieren conocimientos especializados en teoría económica, políticas fiscales y análisis financiero. La carrera también aborda aspectos prácticos como la interpretación de datos económicos y la comprensión de tendencias globales. Al completar el programa, los graduados estarán preparados para ejercer como docentes de economía en diferentes niveles educativos, contribuyendo al entendimiento y análisis crítico de los fenómenos económicos. La carrera ofrece una base sólida tanto en contenido económico como en métodos de enseñanza efectivos.', '4 años', 'Profesorado', '19:00 a 23:00 hs', 'N° 369/17', NULL, 'economia-big.jpg', 'plansoft.png', '2025-09-19 22:00:00', '2025-09-19 22:00:00'),
(7, 'Profesorado en Ciencias de la Educación', 'El Profesorado en Ciencias de la Educación es un programa académico de cuatro años centrado en la formación de profesionales para la enseñanza y comprensión de las teorías educativas. Los estudiantes exploran diversas disciplinas pedagógicas y psicológicas, adquiriendo conocimientos sobre métodos de enseñanza, desarrollo del aprendizaje y gestión educativa. Además, se enfocan en la aplicación de tecnologías educativas y estrategias para abordar la diversidad en el aula. Al completar la carrera, los graduados estarán preparados para desempeñarse como docentes en diversos niveles educativos, contribuyendo al desarrollo integral de los estudiantes. La formación proporciona una base sólida en teorías educativas y prácticas pedagógicas innovadoras.', '4 años', 'Profesorado', '19:00 a 23:00 hs', 'N° 369/17', NULL, 'ciencias_educacion-big.jpg', 'plansoft.png', '2025-09-20 22:00:00', '2025-09-20 22:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `inscripciones_materias`
--

CREATE TABLE `inscripciones_materias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `materia_id` bigint(20) UNSIGNED NOT NULL,
  `estado` enum('pendiente','confirmada','rechazada') NOT NULL DEFAULT 'pendiente',
  `fecha_inscripcion` date NOT NULL DEFAULT '2025-09-26',
  `origen` enum('landing','admin') NOT NULL DEFAULT 'landing',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones_mesas`
--

CREATE TABLE `inscripciones_mesas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `mesa_id` bigint(20) UNSIGNED NOT NULL,
  `estado` enum('pendiente','confirmada','rechazada') NOT NULL DEFAULT 'pendiente',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
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
-- Estructura de tabla para la tabla `job_batches`
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
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `carrera_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesas_examen`
--

CREATE TABLE `mesas_examen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `turno` varchar(255) DEFAULT NULL,
  `aula` varchar(255) DEFAULT NULL,
  `materia_id` bigint(20) UNSIGNED NOT NULL,
  `profesor_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000001_create_cache_table', 1),
(2, '0001_01_01_000002_create_jobs_table', 1),
(3, '2025_05_20_000000_create_users_table', 1),
(4, '2025_06_01_210539_create_carreras_table', 1),
(5, '2025_06_02_042726_create_materias_table', 1),
(6, '2025_06_02_150740_create_mesa_examen_table', 1),
(7, '2025_08_28_184342_create_permission_tables', 1),
(8, '2025_09_26_024715_create_programas_curriculares_table', 1),
(9, '2025_09_26_024837_create_inscripciones_materias_table', 1),
(10, '2025_09_26_024920_create_inscripciones_mesas_table', 1),
(11, '2025_09_26_024946_create_notas_table', 1),
(12, '2025_09_26_025035_create_asistencias_table', 1),
(13, '2025_09_26_025053_create_posts_table', 1),
(14, '2025_09_26_040111_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(4, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `mesa_id` bigint(20) UNSIGNED NOT NULL,
  `calificacion` decimal(5,2) DEFAULT NULL,
  `observaciones` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'crear usuario', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(2, 'ver usuario', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(3, 'editar usuario', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(4, 'eliminar usuario', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(5, 'crear carrera', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(6, 'ver carrera', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(7, 'editar carrera', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(8, 'eliminar carrera', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(9, 'crear materia', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(10, 'ver materia', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(11, 'editar materia', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(12, 'eliminar materia', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(13, 'crear programa', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(14, 'ver programa', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(15, 'editar programa', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(16, 'eliminar programa', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(17, 'crear mesa', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(18, 'ver mesa', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(19, 'editar mesa', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(20, 'eliminar mesa', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(21, 'crear inscripcion_materia', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(22, 'ver inscripcion_materia', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(23, 'editar inscripcion_materia', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(24, 'eliminar inscripcion_materia', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(25, 'crear inscripcion_mesa', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(26, 'ver inscripcion_mesa', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(27, 'editar inscripcion_mesa', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(28, 'eliminar inscripcion_mesa', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(29, 'crear nota', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(30, 'ver nota', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(31, 'editar nota', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(32, 'eliminar nota', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(33, 'crear asistencia', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(34, 'ver asistencia', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(35, 'editar asistencia', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(36, 'eliminar asistencia', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(37, 'crear post', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(38, 'ver post', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(39, 'editar post', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(40, 'eliminar post', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(41, 'crear role', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(42, 'ver role', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(43, 'editar role', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(44, 'eliminar role', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(45, 'crear permission', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(46, 'ver permission', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(47, 'editar permission', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(48, 'eliminar permission', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `contenido` text NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `tipo` enum('noticia','evento','blog') NOT NULL DEFAULT 'noticia',
  `autor_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `titulo`, `contenido`, `imagen`, `tipo`, `autor_id`, `created_at`, `updated_at`) VALUES
(1, 'Día del Estudiante', 'Estudiantes de las diferentes Tecnicaturas y Profesorados participaron con entusiasmo y alegría. Fue una excelente jornada, vivida con respeto, cariño y amor. Gracias queridos estudiantes por participar y formar parte de la gran familia del F.A.C. Gracias profes por aportar siempre su granito de arena, contribuyendo con valores y también diversión. \n\n “Siempre imaginé que el Paraíso sería algún tipo de biblioteca” — Jorge Luis Borges. \n\n Hoy, nuestro paraíso fue este encuentro compartido, lleno de energía, comunidad y celebración.', 'img/estudiantes.jpg', 'noticia', 1, '2025-09-21 11:45:00', '2025-09-21 11:45:00'),
(2, 'Primer Encuentro de Conversatorio Interinstitucional', 'El pasado 20 de mayo, en el Instituto Superior “Félix A. Cabrera” (FAC), se llevó a cabo con gran entusiasmo el primer encuentro de conversatorio junto a la Secretaría de Ciencia y Tecnología de la provincia. Este espacio permitió el diálogo, el intercambio de experiencias y la proyección de nuevas ideas entre estudiantes de nuestras tecnicaturas superiores y actores clave del ecosistema científico-tecnológico provincial. \n\nUna jornada enriquecedora que marcó el inicio de futuros vínculos y colaboraciones entre instituciones comprometidas con la innovación, la formación técnica y el desarrollo local. \n\n¡Gracias a todas las personas que lo hicieron posible!', 'img/conversatorio.jpg', 'noticia', 1, '2025-05-31 23:30:00', '2025-05-31 23:30:00'),
(3, 'Lanzamiento del Nuevo Sitio Institucional', 'El Instituto Superior presentó su nuevo portal web, diseñado para mejorar la comunicación con estudiantes, docentes y la comunidad. La nueva versión integra secciones interactivas, acceso rápido a noticias y un diseño adaptativo que facilita la navegación desde cualquier dispositivo.\n\nEl desarrollo estuvo a cargo del área de Tecnología, con la colaboración de estudiantes de la Tecnicatura en Desarrollo de Software. La plataforma estará en constante actualización para incorporar nuevas funcionalidades durante el ciclo lectivo.', 'img/webinstituto.png', 'noticia', 1, '2025-10-08 12:00:00', '2025-10-08 12:00:00'),
(4, 'Capacitación en Insfraestructura de Redes para Alumnos', 'Durante los días miércoles 29 y jueves 30 de octubre, recibimos en nuestro instituto a los representantes de GT Telecomunicaciones, quienes brindaron una valiosa charla técnica sobre redes de fibra óptica, tendidos, cajas de empalme y botellas, destinada a los estudiantes de las Tecnicaturas Superiores del Instituto “Félix A. Cabrera”.', 'img/capacitacion1.jpg', 'noticia', 1, '2025-11-05 11:00:00', '2025-11-05 11:00:00'),
(5, 'Jornada Institucional de Innovación Educativa', 'El Instituto Félix realizará una jornada especial dedicada a la innovación educativa, con la participación de docentes, estudiantes y expertos invitados. El objetivo es reflexionar sobre los nuevos desafíos del aprendizaje digital y las metodologías activas en el aula.\n\nDurante la jornada, se desarrollarán talleres prácticos, charlas magistrales y mesas de debate donde se abordarán temáticas como inteligencia artificial en la educación, gamificación y evaluación por competencias.', 'img/evento1.jpg', 'evento', 1, '2025-10-05 17:30:00', '2025-10-05 17:30:00'),
(6, 'Feria Anual de Ciencia y Tecnología 2025', 'Como cada año, el Instituto Félix abre sus puertas para recibir a la comunidad en la Feria Anual de Ciencia y Tecnología. Los estudiantes presentarán más de 50 proyectos innovadores desarrollados a lo largo del ciclo lectivo, abarcando temáticas de robótica, sustentabilidad, programación y biotecnología.\n\nEl evento busca fomentar la creatividad, el pensamiento crítico y la investigación aplicada, siendo una oportunidad única para conectar a los jóvenes con el ámbito científico y profesional.', 'img/feria.jpeg', 'evento', 1, '2025-09-20 14:15:00', '2025-09-22 19:00:00'),
(7, 'Encuentro de Egresados 2025', 'El Instituto invita a todos sus egresados a reencontrarse en una tarde llena de recuerdos, experiencias y nuevas oportunidades de vinculación profesional. Será un espacio para compartir logros, proyectos y generar redes entre diferentes promociones.\n\nAdemás, durante el encuentro se presentará el nuevo programa de mentorías profesionales, que permitirá a egresados colaborar con estudiantes actuales en su desarrollo académico y laboral.', 'img/evento_3.jpg', 'evento', 1, '2025-09-15 12:45:00', '2025-09-15 12:45:00'),
(8, 'Acto de Colación de Grados 2025', 'El Instituto de Formación Docente “Félix Atilio Cabrera” tiene el agrado de invitar a toda la comunidad educativa al Acto de Colación de Graduados 2025, un momento de orgullo, emoción y reconocimiento al esfuerzo de nuestros egresados que culminan una importante etapa en su formación profesional. Este encuentro representa no solo el cierre de un camino de aprendizajes, sino también el inicio de nuevos desafíos y oportunidades.\n\nAcompañaremos a nuestros flamantes profesionales de la educación y la tecnología en una ceremonia que celebra la dedicación, la constancia y los valores que distinguen a nuestra institución.', 'img/evento_2.png', 'evento', 1, '2025-09-10 16:20:00', '2025-09-12 13:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas_curriculares`
--

CREATE TABLE `programas_curriculares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `archivo` varchar(255) DEFAULT NULL,
  `carrera_id` bigint(20) UNSIGNED NOT NULL,
  `materia_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'adminsistema', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(2, 'adminpublico', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(3, 'secretario', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(4, 'profesor', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43'),
(5, 'estudiante', 'web', '2025-09-26 06:42:43', '2025-09-26 06:42:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(2, 3),
(3, 1),
(3, 3),
(4, 1),
(4, 3),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
(10, 4),
(10, 5),
(11, 1),
(11, 2),
(12, 1),
(12, 2),
(13, 1),
(13, 2),
(14, 1),
(14, 2),
(14, 5),
(15, 1),
(15, 2),
(16, 1),
(16, 2),
(17, 1),
(17, 3),
(18, 1),
(18, 3),
(19, 1),
(19, 3),
(20, 1),
(20, 3),
(21, 1),
(21, 3),
(21, 5),
(22, 1),
(22, 3),
(22, 4),
(22, 5),
(23, 1),
(23, 3),
(24, 1),
(24, 3),
(25, 1),
(25, 3),
(25, 5),
(26, 1),
(26, 3),
(26, 4),
(26, 5),
(27, 1),
(27, 3),
(28, 1),
(28, 3),
(29, 1),
(29, 3),
(29, 4),
(30, 1),
(30, 3),
(30, 4),
(30, 5),
(31, 1),
(31, 3),
(31, 4),
(32, 1),
(32, 3),
(33, 1),
(33, 3),
(33, 4),
(34, 1),
(34, 3),
(34, 4),
(35, 1),
(35, 3),
(35, 4),
(36, 1),
(36, 3),
(37, 1),
(37, 2),
(38, 1),
(38, 2),
(38, 5),
(39, 1),
(39, 2),
(40, 1),
(40, 2),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
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
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('7LbPcuwyMDj0oLHaJm65y6FkwCFteHUwvrKd8VUx', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSjFqMGZXYlE2cW5RcFNyWlZKWUUxbU1qOG5Hbk5uV1VjTG5ETWE0OSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMDoiaHR0cDovL2xvY2FsaG9zdDo4MDAwL3VzdWFyaW9zIjt9fQ==', 1758863525),
('cujVMfeFKmMJpdnfq11zk7S6ZQtwGoeMHC34uP3V', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ1ZqN0ZSaXI3NXRCcW14bjlkdDI4UkxWamkzaVh5aWVNcUJrNkl3aiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762450001),
('gFLOYUoKDFwEz8mYMmxbp4jASFQnDB4kqK18JMpq', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoickNMUzl4dTZmaEpUT0ExVVhCSGg1cjY4endEQWZnOHFtSU1ZSElaciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1762445328);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `dni` varchar(20) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `dni`, `telefono`, `direccion`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Sistema', 'admin@plataformaisfd.com', NULL, '$2y$12$aAsgacJMfLrDyJuVOPkQOOgoWJeM1RDMyXaWzE9jJW9kBt3MgZoCy', NULL, NULL, NULL, NULL, '2025-09-26 06:42:44', '2025-09-26 06:42:44'),
(2, 'Prueba', 'prueba@example.com', NULL, '$2y$12$rXVM4x/KscOPIokIHVeg/uyk.tFRhzBBJW2guFMfa2hACDr79u7u.', NULL, NULL, NULL, NULL, '2025-09-26 07:33:03', '2025-09-26 07:33:03');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asistencias_inscripcion_id_foreign` (`inscripcion_id`);

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `inscripciones_materias`
--
ALTER TABLE `inscripciones_materias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inscripciones_materias_user_id_foreign` (`user_id`),
  ADD KEY `inscripciones_materias_materia_id_foreign` (`materia_id`);

--
-- Indices de la tabla `inscripciones_mesas`
--
ALTER TABLE `inscripciones_mesas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inscripciones_mesas_user_id_foreign` (`user_id`),
  ADD KEY `inscripciones_mesas_mesa_id_foreign` (`mesa_id`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materias_carrera_id_foreign` (`carrera_id`);

--
-- Indices de la tabla `mesas_examen`
--
ALTER TABLE `mesas_examen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mesas_examen_materia_id_foreign` (`materia_id`),
  ADD KEY `mesas_examen_profesor_id_foreign` (`profesor_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notas_user_id_foreign` (`user_id`),
  ADD KEY `notas_mesa_id_foreign` (`mesa_id`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_autor_id_foreign` (`autor_id`);

--
-- Indices de la tabla `programas_curriculares`
--
ALTER TABLE `programas_curriculares`
  ADD PRIMARY KEY (`id`),
  ADD KEY `programas_curriculares_carrera_id_foreign` (`carrera_id`),
  ADD KEY `programas_curriculares_materia_id_foreign` (`materia_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inscripciones_materias`
--
ALTER TABLE `inscripciones_materias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inscripciones_mesas`
--
ALTER TABLE `inscripciones_mesas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mesas_examen`
--
ALTER TABLE `mesas_examen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `programas_curriculares`
--
ALTER TABLE `programas_curriculares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD CONSTRAINT `asistencias_inscripcion_id_foreign` FOREIGN KEY (`inscripcion_id`) REFERENCES `inscripciones_materias` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `inscripciones_materias`
--
ALTER TABLE `inscripciones_materias`
  ADD CONSTRAINT `inscripciones_materias_materia_id_foreign` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `inscripciones_materias_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `inscripciones_mesas`
--
ALTER TABLE `inscripciones_mesas`
  ADD CONSTRAINT `inscripciones_mesas_mesa_id_foreign` FOREIGN KEY (`mesa_id`) REFERENCES `mesas_examen` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `inscripciones_mesas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `materias_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `mesas_examen`
--
ALTER TABLE `mesas_examen`
  ADD CONSTRAINT `mesas_examen_materia_id_foreign` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mesas_examen_profesor_id_foreign` FOREIGN KEY (`profesor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `notas_mesa_id_foreign` FOREIGN KEY (`mesa_id`) REFERENCES `mesas_examen` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_autor_id_foreign` FOREIGN KEY (`autor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `programas_curriculares`
--
ALTER TABLE `programas_curriculares`
  ADD CONSTRAINT `programas_curriculares_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `programas_curriculares_materia_id_foreign` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
