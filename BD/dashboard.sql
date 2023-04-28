-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2022 a las 04:41:26
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas_mat`
--

CREATE TABLE `notas_mat` (
  `id` int(11) NOT NULL,
  `cal_dif` varchar(50) NOT NULL,
  `cal_dif2` varchar(50) NOT NULL,
  `mate_dis` varchar(50) NOT NULL,
  `cal_saber11` int(10) NOT NULL,
  `año_lec` varchar(100) NOT NULL,
  `semestre` int(10) NOT NULL,
  `jornada` varchar(20) NOT NULL,
  `años_saber11` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `notas_mat`
--

INSERT INTO `notas_mat` (`id`, `cal_dif`, `cal_dif2`, `mate_dis`, `cal_saber11`, `año_lec`, `semestre`, `jornada`, `años_saber11`) VALUES
(1, '2', '1', '3', 2, '2021', 1, 'Diurna', '2021'),
(2, '3', '4', '1', 3, '2021', 1, 'Diurna', '2021'),
(3, '3', '4', '1', 3, '2021', 1, 'Diurna', '2021');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `correo`, `contraseña`) VALUES
(1, 'Esteban Urbina', 'esteban1994@hotmail.com', '1234'),
(2, 'MONICA BBRAVO', 'monica@gmail.com', '1234'),
(3, 'Esteban Urbina', 'esteban@hotmail.com', '1000'),
(4, 'JULIANA ', 'JULI200@HOTMAIL.COM', '100'),
(5, 'JULIANA  urbina', 'JULI200@HOTMAIL.COM', '100'),
(6, 'JULIANA  urbina', 'JULI200@HOTMAIL.COM', '100'),
(7, 'juliana', 'esteban@hotmail.com', '1000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
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
-- AUTO_INCREMENT de la tabla `notas_mat`
--
ALTER TABLE `notas_mat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
