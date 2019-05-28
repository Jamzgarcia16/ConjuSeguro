-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2018 a las 05:22:08
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
-- Estructura de tabla para la tabla `apartamentos`
--

CREATE TABLE `apartamentos` (
  `id_apartamento` int(4) NOT NULL,
  `nombre_apartamento` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `valor_adm` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(15, 2, 12),
(16, 2, 13),
(17, 2, 14),
(18, 3, 7),
(19, 4, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id_menu` int(1) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `modulo` varchar(100) NOT NULL,
  `icono` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id_menu`, `titulo`, `modulo`, `icono`, `url`) VALUES
(1, 'Admón Usuarios', 'adm_usuarios', '<i class=\"fa fa-archive\"></i>', 'admon-usuarios'),
(2, 'Admón Menús', 'adm_menus', '<i class=\"fa fa-amazon\"></i>', 'adm-menus'),
(3, 'Admón Perfiles', 'adm_perfiles', '<i class=\"fa fa-cogs\"></i>', 'admon-perfiles'),
(4, 'Admón Clientes', 'adm_clientes', '<i class=\"fa fa-desktop\"></i>', 'admon-clientes'),
(5, 'Admón Banners', 'adm_banners', '<i class=\"fa fa-bed\"></i>', 'admon-banners'),
(6, 'Estadísticas Banners', 'estadisticas_banners', '<i class=\"fa fa-ban\"></i>', 'estadisticas-banners'),
(7, 'Admón Visitantes', 'adm_visitantes', '<i class=\"fa fa-amazon\"></i>', 'adm-visitantes'),
(8, 'Admón Propietarios', 'adm_propietario', '<i class=\"fa fa-amazon\"></i>', 'adm-propietario'),
(9, 'Admón Residentes', 'adm_residentes', '<i class=\"fa fa-amazon\"></i>', 'adm-residentes'),
(10, 'Admon Apartamentos', 'adm_apartamentos', '<i class=\"fa fa-amazon\"></i>', 'adm-apartamentos'),
(11, 'Admón Interiores', 'adm_interiores', '<i class=\"fa fa-amazon\"></i>', 'adm_interiores'),
(12, 'Admon Eventos', 'adm_eventos', '<i class=\"fa fa-amazon\"></i>', 'adm-eventos'),
(13, 'Admón Reservas', 'adm_reservas', '<i class=\"fa fa-amazon\"></i>', 'adm_reservas'),
(14, 'Admón Correspondencia', 'adm_correspondencia', '<i class=\"fa fa-amazon\"></i>', 'adm_correspondencia');

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
(3, 'guarda'),
(4, 'invitado');

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
(1, 'administrador', 'admin@conjuntoseguro.com', '8ca32d950873fd2b5b34a7d79c4a294b2fd805abe3261beb04fab61a3b4b75609afd6478aa8d34e03f262d68bb09a2ba9d655e228c96723b2854838a6e613b9d', 'fotos/admin.png', 1, 1),
(2, 'jimmy', 'prueba1@gmail.com', '8ca32d950873fd2b5b34a7d79c4a294b2fd805abe3261beb04fab61a3b4b75609afd6478aa8d34e03f262d68bb09a2ba9d655e228c96723b2854838a6e613b9d', 'fotos/logon.png', 1, 2),
(3, 'otrousuario', 'otrouser@gmail.com', '8ca32d950873fd2b5b34a7d79c4a294b2fd805abe3261beb04fab61a3b4b75609afd6478aa8d34e03f262d68bb09a2ba9d655e228c96723b2854838a6e613b9d', 'fotos/goku.png', 1, 3),
(4, 'David Palacios', 'davidpalacios@conjuseguro.com', '808d63ba47fcef6a7c52ec47cb63eb1b747a9d527a77385fc05c8a5ce8007586265d003b4130f6b0c8f3bb2ad89965a5da07289ba5d1e35321e160bea4f766f8', 'fotos/davidpalacios@conjuseguro.com.jpg', 1, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `apartamentos`
--
ALTER TABLE `apartamentos`
  ADD PRIMARY KEY (`id_apartamento`);

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
-- AUTO_INCREMENT de la tabla `apartamentos`
--
ALTER TABLE `apartamentos`
  MODIFY `id_apartamento` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `aux_perfiles_menus`
--
ALTER TABLE `aux_perfiles_menus`
  MODIFY `id_aux` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfil` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aux_perfiles_menus`
--
ALTER TABLE `aux_perfiles_menus`
  ADD CONSTRAINT `aux_perfiles_menus_ibfk_1` FOREIGN KEY (`perfil_id`) REFERENCES `perfiles` (`id_perfil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `aux_perfiles_menus_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`perfil_id`) REFERENCES `perfiles` (`id_perfil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
