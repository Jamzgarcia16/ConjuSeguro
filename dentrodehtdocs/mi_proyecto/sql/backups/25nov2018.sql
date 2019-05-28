-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2018 a las 01:21:56
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mi_proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aux_perfiles_menus`
--

CREATE TABLE `aux_perfiles_menus` (
  `id_aux` int(4) NOT NULL,
  `perfil_id` int(2) NOT NULL,
  `menu_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aux_perfiles_menus`
--

INSERT INTO `aux_perfiles_menus` (`id_aux`, `perfil_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 1, 11),
(12, 1, 12),
(13, 1, 13),
(14, 1, 14),
(15, 2, 13),
(16, 2, 14),
(17, 3, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id_menu` int(2) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `mudolo` varchar(100) NOT NULL,
  `icono` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id_menu`, `titulo`, `mudolo`, `icono`, `url`) VALUES
(1, 'Admon Usuarios', 'adm_usuarios', '<i class=\"fa fa-archive\"></i>', 'admon-usuarios'),
(2, 'Admón Menús', 'adm_menus', '<i class=\"fa fa-asterisk\"></i>', 'admon-menus'),
(3, 'Admón Perfiles', 'adm_perfiles', '<i class=\"fa fa-desktop\"></i>', 'admon-perfiles'),
(4, 'Admón Clientes', 'adm_clientes', '<i class=\"fa fa-desktop\"></i>', 'admon-clientes'),
(5, 'Admón Banners', 'adm_banners', '<i class=\"fa fa-bed\"></i>', 'admon-banners'),
(6, 'Estadísticas Banners', 'estadisticas_banners', '<i class=\"fa fa-ban\"></i>', 'estadisticas-banners'),
(7, 'Admón Visitantes', 'adm_visitantes', '<i class=\"fa fa-address-book-o\"></i>', 'adm_visitantes'),
(8, 'Admon Apartamentos', 'adm_apartamentos', '<i class=\"fa fa-angle-double-left\"></i>', 'adm_apartamentos'),
(9, 'Admón Interiores', 'adm_interiores', '<i class=\"fa fa-angle-down\"></i>', 'adm_interiores'),
(10, 'Admón Propietarios', 'adm_propietarios', '<i class=\"fa fa-amazon\"></i>', 'adm_propietarios'),
(12, 'Admón Eventos', 'adm_eventos', '<i class=\"fa fa-align-center\"></i>', 'adm_eventos'),
(13, 'Admón Reserva', 'adm_reservas', '<i class=\"fa fa-angle-double-right\"></i>', 'adm_reservas'),
(14, 'Admon Correspondencia', 'adm_correspondencia', '<i class=\"fa fa-angellist\"></i>', 'adm_correspondencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id_perfil` int(2) NOT NULL,
  `nombre_perfil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfil`, `nombre_perfil`) VALUES
(1, 'administrador'),
(2, 'cliente'),
(3, 'guarda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(2) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cuenta` varchar(100) NOT NULL,
  `clave` varchar(128) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1' COMMENT ' 1=activo,0=inactivo ',
  `perfil_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `cuenta`, `clave`, `foto`, `estado`, `perfil_id`) VALUES
(2, 'jimmy', 'prueba1@gmail.com', '123456', 'fotos/logon.png', 1, 2),
(3, 'otrousuario', 'otrouser@gmail.com', '123456', 'fotos/goku.png', 1, 3),
(4, 'administrador', 'adm@conjuseguro.com', '123456789', 'fotos/goku.png', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aux_perfiles_menus`
--
ALTER TABLE `aux_perfiles_menus`
  ADD PRIMARY KEY (`id_aux`),
  ADD KEY `perfil_id` (`perfil_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perfil_id` (`perfil_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aux_perfiles_menus`
--
ALTER TABLE `aux_perfiles_menus`
  MODIFY `id_aux` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id_menu` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfil` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
