-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2019 a las 01:08:54
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base_libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `aut_codigo` int(11) NOT NULL,
  `pais_codigo` int(11) NOT NULL,
  `aut_nombre` varchar(100) NOT NULL,
  `aut_apellido` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `cal_codigo` int(11) NOT NULL,
  `cal_valor` int(11) NOT NULL,
  `lib_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `car_codigo` int(11) NOT NULL,
  `usu_codigo` int(11) NOT NULL,
  `lib_codigo` int(11) NOT NULL,
  `car_cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `com_id` int(11) NOT NULL,
  `com_id_libro` int(11) NOT NULL,
  `comentario` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `fac_codigo` int(11) NOT NULL,
  `fac_fecha` date NOT NULL,
  `fac_id_usu` int(11) NOT NULL,
  `fac_id_pedido` int(11) NOT NULL,
  `fac_total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturadetalle`
--

CREATE TABLE `facturadetalle` (
  `fde_codigo` int(11) NOT NULL,
  `fac_codigo` int(11) NOT NULL,
  `fde_precio` int(11) NOT NULL,
  `fde_subtotal` int(11) NOT NULL,
  `fde_iva` int(11) NOT NULL,
  `fde_descuento` int(11) NOT NULL,
  `fde_total` int(11) NOT NULL,
  `lib_codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `gen_codigo` int(11) NOT NULL,
  `gen_nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `lib_codigo` int(11) NOT NULL,
  `aut_codigo` int(11) NOT NULL,
  `gen_codigo` int(11) NOT NULL,
  `lib_ima` varchar(200) NOT NULL,
  `lib_isbn` int(11) NOT NULL,
  `lib_titulo` varchar(100) NOT NULL,
  `lib_stock` int(11) NOT NULL,
  `lib_precio` double(10,2) NOT NULL,
  `lib_observaciones` mediumtext NOT NULL,
  `lib_resumen` mediumtext NOT NULL,
  `lib_novedad` varchar(1) NOT NULL DEFAULT 'N',
  `lib_idioma` varchar(25) NOT NULL,
  `lib_editorial` varchar(100) NOT NULL,
  `lib_paginas` int(11) NOT NULL,
  `lib_anio` date NOT NULL,
  `img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `pais_codigo` int(11) NOT NULL,
  `pais_nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `ped_codigo` int(11) NOT NULL,
  `ped_estado` varchar(1) NOT NULL,
  `car_codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjeta`
--

CREATE TABLE `tarjeta` (
  `tar_codigo` int(11) NOT NULL,
  `tar_numero` int(16) NOT NULL,
  `tar_fecha_ven` date NOT NULL,
  `tar_nombre_usu` varchar(50) NOT NULL,
  `tar_cvv` int(4) NOT NULL,
  `tar_usu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_id` int(11) NOT NULL,
  `usu_nombre` varchar(50) NOT NULL,
  `usu_apellido` varchar(50) NOT NULL,
  `usu_fecha_nacimiento` date NOT NULL,
  `usu_correo` varchar(100) NOT NULL,
  `usu_contrasenia` varchar(100) NOT NULL,
  `usu_fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `usu_fecha_modificacion` timestamp NULL DEFAULT NULL,
  `usu_eliminado` varchar(1) NOT NULL DEFAULT 'N',
  `usu_cedula` varchar(10) NOT NULL,
  `usu_telefono` varchar(10) NOT NULL,
  `usu_direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_id`, `usu_nombre`, `usu_apellido`, `usu_fecha_nacimiento`, `usu_correo`, `usu_contrasenia`, `usu_fecha_creacion`, `usu_fecha_modificacion`, `usu_eliminado`, `usu_cedula`, `usu_telefono`, `usu_direccion`) VALUES
(2, 'Pedro', 'Mendez', '1997-11-18', 'pedro@gmail.com', '12345', '2019-12-02 00:05:11', NULL, 'N', '0100000147', '9876543210', 'Av.americas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`aut_codigo`),
  ADD UNIQUE KEY `pais_codigo` (`pais_codigo`);

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`cal_codigo`),
  ADD UNIQUE KEY `lib_id` (`lib_id`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`car_codigo`),
  ADD UNIQUE KEY `usu_codigo` (`usu_codigo`),
  ADD UNIQUE KEY `lib_codigo` (`lib_codigo`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`com_id`),
  ADD UNIQUE KEY `com_id_libro` (`com_id_libro`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`fac_codigo`),
  ADD UNIQUE KEY `fac_id_usu` (`fac_id_usu`),
  ADD UNIQUE KEY `fac_id_pedido` (`fac_id_pedido`);

--
-- Indices de la tabla `facturadetalle`
--
ALTER TABLE `facturadetalle`
  ADD PRIMARY KEY (`fde_codigo`),
  ADD UNIQUE KEY `fac_codigo` (`fac_codigo`),
  ADD UNIQUE KEY `lib_codigo` (`lib_codigo`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`gen_codigo`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`lib_codigo`),
  ADD UNIQUE KEY `gen_codigo` (`gen_codigo`),
  ADD UNIQUE KEY `aut_codigo` (`aut_codigo`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`pais_codigo`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`ped_codigo`),
  ADD UNIQUE KEY `car_codigo` (`car_codigo`);

--
-- Indices de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD PRIMARY KEY (`tar_codigo`),
  ADD UNIQUE KEY `tar_usu_id` (`tar_usu_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `aut_codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `cal_codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `car_codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `fac_codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `facturadetalle`
--
ALTER TABLE `facturadetalle`
  MODIFY `fde_codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `gen_codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `lib_codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `pais_codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `ped_codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  MODIFY `tar_codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autor`
--
ALTER TABLE `autor`
  ADD CONSTRAINT `autor_ibfk_1` FOREIGN KEY (`pais_codigo`) REFERENCES `pais` (`pais_codigo`);

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `calificaciones_ibfk_1` FOREIGN KEY (`lib_id`) REFERENCES `libro` (`lib_codigo`);

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`lib_codigo`) REFERENCES `libro` (`lib_codigo`),
  ADD CONSTRAINT `fk_carrito_usu` FOREIGN KEY (`usu_codigo`) REFERENCES `usuario` (`usu_id`);

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`com_id_libro`) REFERENCES `libro` (`lib_codigo`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`fac_id_pedido`) REFERENCES `pedido` (`ped_codigo`),
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`fac_id_usu`) REFERENCES `usuario` (`usu_id`);

--
-- Filtros para la tabla `facturadetalle`
--
ALTER TABLE `facturadetalle`
  ADD CONSTRAINT `facturadetalle_ibfk_1` FOREIGN KEY (`fac_codigo`) REFERENCES `factura` (`fac_codigo`),
  ADD CONSTRAINT `facturadetalle_ibfk_2` FOREIGN KEY (`lib_codigo`) REFERENCES `libro` (`lib_codigo`);

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `libro_ibfk_1` FOREIGN KEY (`gen_codigo`) REFERENCES `genero` (`gen_codigo`),
  ADD CONSTRAINT `libro_ibfk_2` FOREIGN KEY (`aut_codigo`) REFERENCES `autor` (`aut_codigo`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`car_codigo`) REFERENCES `carrito` (`car_codigo`);

--
-- Filtros para la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD CONSTRAINT `tarjeta_ibfk_1` FOREIGN KEY (`tar_usu_id`) REFERENCES `usuario` (`usu_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
