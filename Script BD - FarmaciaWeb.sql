-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2017 a las 13:51:43
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: farmaciaweb
--
CREATE DATABASE IF NOT EXISTS farmaciaweb DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE farmaciaweb;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla compras
--

CREATE TABLE IF NOT EXISTS compras (
  idCompra int(11) NOT NULL AUTO_INCREMENT,
  Fecha date NOT NULL,
  idProveedor int(11) NOT NULL,
  PRIMARY KEY (idCompra),
  KEY idProveedor (idProveedor)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------
--
--
-- Estructura de tabla para la tabla detallecompra
--

CREATE TABLE IF NOT EXISTS detallecompra (
  idCompra int(11) NOT NULL,
  idMedicamento int(11) NOT NULL,
  Cantidad int(11) NOT NULL,
  KEY idCompra (idCompra),
  KEY idMedicamento (idMedicamento)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------
--
--
-- Estructura de tabla para la tabla detalleventa
--

CREATE TABLE IF NOT EXISTS detalleventa (
  idVenta int(11) NOT NULL,
  idMedicamento int(11) NOT NULL,
  Cantidad int(11) NOT NULL,
  KEY idVenta (idVenta),
  KEY idProducto (idMedicamento)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla medicamentos
--

CREATE TABLE IF NOT EXISTS medicamentos (
  idMedicamento int(11) NOT NULL AUTO_INCREMENT,
  Medicamento varchar(50) NOT NULL,
  Presentacion varchar(20) NOT NULL,
  Existencias int(11) NOT NULL,
  Precio double NOT NULL,
  PRIMARY KEY (idMedicamento)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla proveedores
--

CREATE TABLE IF NOT EXISTS proveedores (
  idProveedor int(11) NOT NULL AUTO_INCREMENT,
  Proveedor varchar(50) NOT NULL,
  Telefono varchar(8) NOT NULL,
  Direccion varchar(150) NOT NULL,
  PRIMARY KEY (idProveedor)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla usuarios
--

CREATE TABLE IF NOT EXISTS usuarios (
  idUsuario int(11) NOT NULL AUTO_INCREMENT,
  Usuario varchar(20) NOT NULL,
  Clave varchar(8) NOT NULL,
  PRIMARY KEY (idUsuario)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla ventas
--

CREATE TABLE IF NOT EXISTS ventas (
  idVenta int(11) NOT NULL AUTO_INCREMENT,
  Fecha date NOT NULL,
  PRIMARY KEY (idVenta)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla compras
--
ALTER TABLE compras
  ADD CONSTRAINT compras_ibfk_1 FOREIGN KEY (idProveedor) REFERENCES proveedores (idProveedor);

--
-- Filtros para la tabla detallecompra
--
ALTER TABLE detallecompra
  ADD CONSTRAINT detallecompra_ibfk_1 FOREIGN KEY (idMedicamento) REFERENCES medicamentos (idMedicamento),
  ADD CONSTRAINT detallecompra_ibfk_2 FOREIGN KEY (idCompra) REFERENCES compras (idCompra);

--
-- Filtros para la tabla detalleventa
--
ALTER TABLE detalleventa
  ADD CONSTRAINT detalleventa_ibfk_1 FOREIGN KEY (idVenta) REFERENCES ventas (idVenta),
  ADD CONSTRAINT detalleventa_ibfk_2 FOREIGN KEY (idMedicamento) REFERENCES medicamentos (idMedicamento);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
