-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2025 a las 23:35:51
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dashboard`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id` int(11) NOT NULL,
  `año_lectivo` varchar(50) NOT NULL,
  `semestre` int(11) DEFAULT NULL,
  `jornada` varchar(50) NOT NULL,
  `año_saber11` varchar(50) NOT NULL,
  `id_notas` varchar(50) NOT NULL,
  `id_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas_lec`
--

CREATE TABLE `notas_lec` (
  `id` int(11) NOT NULL,
  `com_oral1` int(11) DEFAULT NULL,
  `com_orl2` int(11) DEFAULT NULL,
  `com_orl3` int(11) DEFAULT NULL,
  `resultado` int(11) NOT NULL,
  `jornada` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `notas_lec`
--

INSERT INTO `notas_lec` (`id`, `com_oral1`, `com_orl2`, `com_orl3`, `resultado`, `jornada`) VALUES
(1, 4, 4, 4, 4, 'Noctura'),
(2, 4, 3, 3, 5, 'Diruna'),
(3, 5, 2, 3, 3, 'Noctura'),
(4, 1, 2, 3, 1, 'Diruna'),
(5, 2, 4, 3, 1, 'Noctura'),
(6, 5, 3, 4, 2, 'Diruna'),
(7, 0, 5, 5, 4, 'Noctura'),
(8, 1, 5, 4, 3, 'Noctura'),
(9, 1, 5, 1, 1, 'Diruna'),
(10, 1, 5, 4, 2, 'Diruna'),
(11, 1, 4, 1, 2, 'Diruna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas_mat`
--

CREATE TABLE `notas_mat` (
  `id` int(11) NOT NULL,
  `mat_basc3` int(11) DEFAULT NULL,
  `mat_disc1` int(11) DEFAULT NULL,
  `cal_difc2` int(11) DEFAULT NULL,
  `mat_dis2c1` int(11) DEFAULT NULL,
  `algc1` int(11) DEFAULT NULL,
  `cinc1` int(11) DEFAULT NULL,
  `resultado` int(11) DEFAULT NULL,
  `jornada` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `notas_mat`
--

INSERT INTO `notas_mat` (`id`, `mat_basc3`, `mat_disc1`, `cal_difc2`, `mat_dis2c1`, `algc1`, `cinc1`, `resultado`, `jornada`) VALUES
(1, 4, 4, 4, 4, 4, 4, 4, 'Diurna'),
(2, 4, 4, 4, 4, 4, 4, 4, 'Nocturna'),
(3, 4, 4, 4, 4, 4, 4, 4, 'Nocturna'),
(4, 5, 2, 4, 4, 1, 1, 2, 'Nocturna'),
(5, 4, 4, 4, 4, 4, 4, 4, 'Diurna'),
(6, 5, 2, 4, 4, 1, 1, 2, 'Diurna'),
(7, 3, 1, 5, 4, 1, 1, 2, 'Nocturna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `correo`, `contraseña`) VALUES
(1, 'Esteban Urbina', 'esteban1994@hotmail.com', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notas_lec`
--
ALTER TABLE `notas_lec`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notas_mat`
--
ALTER TABLE `notas_mat`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notas_lec`
--
ALTER TABLE `notas_lec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `notas_mat`
--
ALTER TABLE `notas_mat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
