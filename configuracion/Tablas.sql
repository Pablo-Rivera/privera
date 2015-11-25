/*###################################################
###                TABLA CATEGORIA                ###
###################################################*/

CREATE TABLE categoria (
       id_categoria integer NOT NULL AUTO_INCREMENT,
       nombre varchar(20) NOT NULL,
       CONSTRAINT pk_categoria PRIMARY KEY (id_categoria),
       CONSTRAINT uk_categoria UNIQUE (nombre)
);

/*#################################################*/



/*###################################################
###                 TABLA PRODUCTO                ###
###################################################*/

CREATE TABLE producto (
       id_producto integer NOT NULL AUTO_INCREMENT,
       fk_id_categoria integer NOT NULL,
       nombre varchar(20) NOT NULL,
       descripcion varchar(254) NOT NULL,
       precio real(6,2),
       CONSTRAINT pk_noticia PRIMARY KEY (id_producto),
       CONSTRAINT uk_noticia UNIQUE (nombre)
);

       ALTER TABLE producto
       ADD CONSTRAINT fk_producto_categoria FOREIGN KEY (fk_id_categoria)
               REFERENCES categoria (id_categoria)
                       ON DELETE RESTRICT
                       ON UPDATE RESTRICT;

/*#################################################*/



/*###################################################
###                 TABLA IMAGEN                  ###
###################################################*/

CREATE TABLE imagen (
       id_imagen integer NOT NULL AUTO_INCREMENT,
       fk_id_producto integer NOT NULL,
       path varchar(200) NOT NULL,
       CONSTRAINT pk_imagen PRIMARY KEY (id_imagen),
       CONSTRAINT uk_producto UNIQUE (path)
);

       ALTER TABLE imagen
       ADD CONSTRAINT fk_imagen_producto FOREIGN KEY (fk_id_producto)
               REFERENCES producto (id_producto)
                       ON DELETE CASCADE
                       ON UPDATE CASCADE;

/*#################################################*/

-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2015 a las 20:48:46
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `password`) VALUES
(2, 'pepito@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
