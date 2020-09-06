-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-09-2020 a las 05:07:52
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `solutoria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf`
--

CREATE TABLE `uf` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `uf`
--

INSERT INTO `uf` (`id`, `fecha`, `valor`) VALUES
(189, '2020-09-05', 28684.1),
(190, '2020-09-04', 28683.1),
(191, '2020-09-03', 28682.2),
(192, '2020-09-02', 28681.3),
(193, '2020-09-01', 28680.4),
(194, '2020-08-31', 28679.4),
(195, '2020-08-30', 28678.5),
(196, '2020-08-29', 28677.6),
(197, '2020-08-28', 28676.7),
(198, '2020-08-27', 28675.8),
(199, '2020-08-26', 28674.8),
(200, '2020-08-25', 28673.9),
(201, '2020-08-24', 28673),
(202, '2020-08-23', 28672.1),
(203, '2020-08-22', 28671.1),
(204, '2020-08-21', 28670.2),
(205, '2020-08-20', 28669.3),
(206, '2020-08-19', 28668.3),
(207, '2020-08-18', 28667.4),
(208, '2020-08-17', 28666.5),
(209, '2020-08-16', 28665.6),
(210, '2020-08-15', 28664.7),
(211, '2020-08-14', 28663.7),
(212, '2020-08-13', 28662.8),
(213, '2020-08-12', 28661.9),
(214, '2020-08-11', 28661),
(215, '2020-08-10', 28660),
(216, '2020-08-09', 28659.1),
(217, '2020-08-08', 28660),
(218, '2020-08-07', 28661),
(219, '2020-08-06', 28661.9);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `uf`
--
ALTER TABLE `uf`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `uf`
--
ALTER TABLE `uf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
