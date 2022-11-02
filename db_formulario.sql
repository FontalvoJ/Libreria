-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2022 a las 00:40:24
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
-- Base de datos: `db_formulario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_form`
--

CREATE TABLE `tbl_form` (
  `id_users` int(11) NOT NULL,
  `nombre_user` varchar(45) NOT NULL,
  `telefono_user` varchar(10) NOT NULL,
  `email_user` varchar(20) NOT NULL,
  `informacion_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_form`
--

INSERT INTO `tbl_form` (`id_users`, `nombre_user`, `telefono_user`, `email_user`, `informacion_user`) VALUES
(13, 'Valentina Bianco', '3102010363', 'vale@gmail.com', 'Que precio tiene el libro \"Mi portada del Libro\"'),
(14, 'Natalia', '3117738222', 'natalia@gmail.com', 'Que precio tiene el libro \"El buen cirujano\"'),
(15, 'Jose David', '3148213761', 'josedavid@gmail.com', 'Necesito actualizar mi información de usuario.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_users` int(11) NOT NULL,
  `nombre_user` varchar(45) NOT NULL,
  `apellido_user` varchar(45) NOT NULL,
  `cedula_user` varchar(45) NOT NULL,
  `email_user` varchar(45) NOT NULL,
  `pass_user` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_users`
--

INSERT INTO `tbl_users` (`id_users`, `nombre_user`, `apellido_user`, `cedula_user`, `email_user`, `pass_user`) VALUES
(4, 'Jose David Fontalvo', 'ssw', '1234', 'fd@gmail.com', '1234'),
(7, 'Natalia', 'Arenas', '1001667588', 'nat@gmail.com', '222222222'),
(8, 'Maria', 'Hernandez', '1001667588', 'maria@gmail.com', '1234'),
(9, 'Mabel', 'Argenis', '43148533', 'mabel@gmail.com', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_form`
--
ALTER TABLE `tbl_form`
  ADD PRIMARY KEY (`id_users`);

--
-- Indices de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_form`
--
ALTER TABLE `tbl_form`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
