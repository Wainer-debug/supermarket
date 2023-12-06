-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-10-2023 a las 04:03:54
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud_php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `table_productos`
--

CREATE TABLE `table_productos` (
  `id` int(10) NOT NULL,
  `nombreproducto` varchar(100) DEFAULT NULL,
  `cantidad` int(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `categoria` varchar(30) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `fechaRegistro` varchar(50) NOT NULL,
  `precio` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `table_productos`
--

INSERT INTO `table_productos` (`id`, `nombreproducto`, `cantidad`, `descripcion`, `categoria`, `foto`, `fechaRegistro`, `precio`) VALUES
(65, 'Arroz', 100, 'Arroz Diana', 'Despensa', '48a8a33b.jpg', '04-10-2023 20:49:54 PM', '22500'),
(66, 'Chocolatina Jet', 20, 'Marca Jet', 'Dulces', '64db575a.jpg', '04-10-2023 20:50:46 PM', '1700'),
(67, 'Leche', 50, 'Alqueria', 'Lácteos', 'e26804d9.jpg', '04-10-2023 20:51:28 PM', '2500'),
(68, 'Queso Doble Crema', 5, 'Alpina', 'Quesos y Fiambres', '25d045ab.jpg', '04-10-2023 20:52:08 PM', '4200'),
(69, 'Ropa de Bebe', 500, 'Adidas', 'Mi Bebe', '47ad4031.jpg', '04-10-2023 20:52:51 PM', '55000'),
(70, 'Jabón en Polvo', 10, 'Ariel', 'Limpieza y Aseo', 'd8dfcb88.jpg', '04-10-2023 20:53:28 PM', '1700'),
(71, 'Whisky', 30, 'Jack Daniel&#39;s', 'Vinos y Licores', '019d598f.jpeg', '04-10-2023 20:54:33 PM', '150000'),
(72, 'Carne de Res', 70, 'Res', 'Carnes y Pescados', '221b84c5.jpg', '04-10-2023 20:55:30 PM', '18200'),
(73, 'Pan ', 15, 'Bimbo', 'Panaderia y Pasteleria', 'c9a7824f.jpeg', '04-10-2023 20:55:58 PM', '5600'),
(74, 'Cebolla', 25, 'Cebolla Larga', 'Frutas y Verduras', 'b8c1b829.jpg', '04-10-2023 20:56:54 PM', '2100'),
(75, 'Mariscos', 35, 'Mariscos', 'Congelados', '389da05f.jpg', '04-10-2023 20:57:43 PM', '28000'),
(76, 'Comida para Perro', 55, 'Pedigree', 'Mascotas', '782dd81d.jpg', '04-10-2023 20:59:40 PM', '35000'),
(77, 'Acetaminofen', 60, 'Genfar', 'Perfumeria y Farmacia', 'e67330ff.jpg', '04-10-2023 21:01:28 PM', '3000'),
(78, 'Gaseosa', 1000, 'Coca Cola', 'Bebidas y Jugos', '87b824a2.jpg', '04-10-2023 21:02:20 PM', '6500');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `table_productos`
--
ALTER TABLE `table_productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `table_productos`
--
ALTER TABLE `table_productos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
