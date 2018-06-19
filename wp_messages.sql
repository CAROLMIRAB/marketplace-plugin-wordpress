-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 20-06-2018 a las 00:06:39
-- Versión del servidor: 5.6.35
-- Versión de PHP: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nucleoem_home`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_messages`
--

CREATE TABLE `wp_messages` (
  `id` int(11) NOT NULL,
  `user_in` int(11) NOT NULL,
  `user_out` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` int(1) NOT NULL,
  `datecurrency` datetime NOT NULL,
  `type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `wp_messages`
--

INSERT INTO `wp_messages` (`id`, `user_in`, `user_out`, `subject`, `message`, `status`, `datecurrency`, `type`) VALUES
(1, 53, 55, 'hola', 'hola me gustaría saber de tus productos', 1, '2018-05-01 00:00:00', 2),
(2, 55, 53, 'hola', 'hola, me puedes dar precio de tu producto o enviarme una cotización', 2, '2018-05-01 00:00:00', 1),
(18, 56, 55, 'holi', 'holi', 1, '2018-05-29 19:23:56', 0),
(19, 55, 56, 'hola', 'hola me gustaría me envies la factura de los artículos a mi correo', 2, '2018-05-02 00:00:00', 0),
(20, 53, 55, 'lentes', 'me encantaron esos lentes los tienes al mayor', 1, '2018-06-19 19:13:11', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `wp_messages`
--
ALTER TABLE `wp_messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `wp_messages`
--
ALTER TABLE `wp_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
