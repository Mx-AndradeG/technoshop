-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2021 at 05:23 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technoshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `bitacora`
--

CREATE TABLE `bitacora` (
  `id_Bitacora` int(5) NOT NULL,
  `id_Empleado` int(5) NOT NULL,
  `accion` varchar(25) NOT NULL,
  `tabla` varchar(20) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bitacora`
--

INSERT INTO `bitacora` (`id_Bitacora`, `id_Empleado`, `accion`, `tabla`, `fecha`) VALUES
(59, 217, 'Registro insertado', 'Cliente', '2021-04-16 19:10:55'),
(60, 218, 'Registro eliminado', 'Cliente', '2021-04-17 18:38:19'),
(61, 218, 'Registro actualizado', 'Cliente', '2021-04-17 18:40:35'),
(62, 218, 'Registro actualizado', 'Cliente', '2021-04-17 18:41:43'),
(63, 218, 'Registro insertado', 'Empleado', '2021-04-17 18:44:38'),
(64, 218, 'Registro eliminado', 'Empleado', '2021-04-17 18:47:27'),
(65, 218, 'Registro actualizado', 'Empleado', '2021-04-17 18:50:48'),
(66, 218, 'Registro actualizado', 'Empleado', '2021-04-17 18:51:00'),
(67, 218, 'Registro insertado', 'Cliente', '2021-04-20 21:52:55'),
(68, 218, 'Registro insertado', 'Empleado', '2021-04-26 20:00:33'),
(69, 218, 'Registro actualizado', 'Cliente', '2021-04-28 18:06:59'),
(70, 218, 'Registro actualizado', 'Cliente', '2021-04-28 18:07:32'),
(71, 218, 'Registro actualizado', 'Cliente', '2021-04-28 18:07:41'),
(72, 218, 'Registro actualizado', 'Cliente', '2021-04-28 18:15:13'),
(73, 218, 'Registro actualizado', 'Cliente', '2021-04-28 18:15:32'),
(74, 218, 'Registro actualizado', 'Cliente', '2021-04-28 18:16:13'),
(75, 218, 'Registro actualizado', 'Cliente', '2021-04-28 18:16:30'),
(76, 218, 'Registro actualizado', 'Cliente', '2021-04-28 18:18:12'),
(77, 218, 'Registro actualizado', 'Cliente', '2021-04-28 18:18:58'),
(78, 218, 'Registro actualizado', 'Cliente', '2021-04-28 18:19:24'),
(79, 218, 'Registro actualizado', 'Cliente', '2021-04-28 18:19:59'),
(80, 218, 'Registro actualizado', 'Cliente', '2021-04-28 18:20:14'),
(81, 218, 'Registro actualizado', 'Cliente', '2021-04-28 18:20:47'),
(82, 218, 'Registro actualizado', 'Cliente', '2021-04-28 18:21:40'),
(83, 218, 'Registro actualizado', 'Cliente', '2021-04-28 18:22:01'),
(84, 218, 'Registro actualizado', 'Cliente', '2021-04-28 18:22:53'),
(85, 218, 'Registro actualizado', 'Cliente', '2021-04-28 18:28:55'),
(86, 218, 'Registro actualizado', 'Cliente', '2021-04-28 18:29:15'),
(87, 218, 'Registro actualizado', 'Cliente', '2021-04-28 18:29:27'),
(88, 218, 'Registro insertado', 'Cliente', '2021-04-28 18:30:49'),
(89, 218, 'Registro actualizado', 'Empleado', '2021-04-28 18:42:33'),
(90, 218, 'Registro actualizado', 'Empleado', '2021-04-28 18:42:39'),
(91, 218, 'Registro actualizado', 'Empleado', '2021-04-28 18:47:38'),
(92, 218, 'Registro actualizado', 'Empleado', '2021-04-28 18:48:37'),
(93, 218, 'Registro actualizado', 'Empleado', '2021-04-28 18:48:55'),
(94, 218, 'Registro actualizado', 'Empleado', '2021-04-28 18:49:46'),
(95, 218, 'Registro actualizado', 'Empleado', '2021-04-28 18:50:25'),
(96, 218, 'Registro actualizado', 'Empleado', '2021-04-28 18:50:44'),
(97, 218, 'Registro actualizado', 'Empleado', '2021-04-28 18:51:35'),
(98, 218, 'Registro insertado', 'Empleado', '2021-04-28 18:53:00'),
(99, 218, 'Registro insertado', 'Empleado', '2021-04-28 18:55:41'),
(100, 218, 'Registro insertado', 'Empleado', '2021-04-28 18:56:56'),
(101, 218, 'Registro insertado', 'Empleado', '2021-04-28 18:58:15'),
(102, 218, 'Registro insertado', 'Empleado', '2021-04-28 19:07:57'),
(103, 218, 'Registro insertado', 'Empleado', '2021-04-28 19:10:23'),
(104, 218, 'Registro insertado', 'Empleado', '2021-04-28 19:11:51'),
(105, 218, 'Registro insertado', 'Empleado', '2021-04-28 19:16:30'),
(106, 218, 'Registro insertado', 'Empleado', '2021-04-28 19:20:35'),
(107, 218, 'Registro insertado', 'Empleado', '2021-04-28 19:23:21'),
(108, 218, 'Registro insertado', 'Empleado', '2021-04-28 19:26:17'),
(109, 218, 'Registro insertado', 'Empleado', '2021-04-28 19:27:26'),
(110, 218, 'Registro insertado', 'Empleado', '2021-04-28 19:29:07'),
(111, 231, 'Registro insertado', 'Laptop', '2021-04-29 19:40:48'),
(112, 231, 'Registro insertado', 'Laptop', '2021-04-29 20:18:03'),
(113, 231, 'Registro insertado', 'Laptop', '2021-04-29 20:43:27'),
(114, 218, 'Registro insertado', 'Laptop', '2021-05-03 17:49:39'),
(115, 218, 'Registro insertado', 'Laptop', '2021-05-03 18:03:24'),
(116, 218, 'Registro insertado', 'Laptop', '2021-05-03 18:09:56'),
(117, 218, 'Registro insertado', 'Laptop', '2021-05-03 18:19:34'),
(118, 218, 'Registro insertado', 'Laptop', '2021-05-03 18:32:17'),
(119, 218, 'Registro insertado', 'Laptop', '2021-05-03 18:39:02'),
(120, 218, 'Registro insertado', 'Laptop', '2021-05-03 18:44:46'),
(121, 218, 'Registro insertado', 'Laptop', '2021-05-03 18:55:16'),
(122, 218, 'Registro insertado', 'Laptop', '2021-05-03 19:00:46'),
(123, 218, 'Registro insertado', 'Laptop', '2021-05-10 18:10:31'),
(124, 218, 'Registro insertado', 'Laptop', '2021-05-10 18:21:21'),
(125, 218, 'Registro insertado', 'Laptop', '2021-05-10 18:25:16'),
(126, 218, 'Registro insertado', 'Laptop', '2021-05-10 18:31:31'),
(127, 218, 'Registro insertado', 'Laptop', '2021-05-10 18:42:18'),
(128, 218, 'Registro insertado', 'Laptop', '2021-05-11 17:30:44'),
(129, 218, 'Registro insertado', 'Laptop', '2021-05-11 17:35:10'),
(130, 218, 'Registro insertado', 'Laptop', '2021-05-11 17:38:20'),
(131, 218, 'Registro insertado', 'Laptop', '2021-05-11 17:41:58'),
(132, 218, 'Registro insertado', 'Laptop', '2021-05-11 18:00:46'),
(133, 218, 'Registro insertado', 'Laptop', '2021-05-11 18:08:42'),
(134, 218, 'Registro insertado', 'Laptop', '2021-05-11 18:16:01'),
(135, 218, 'Registro insertado', 'Laptop', '2021-05-11 18:26:09'),
(136, 218, 'Registro insertado', 'Laptop', '2021-05-11 18:30:39'),
(137, 0, 'Registro insertado', 'Laptop', '2021-05-11 18:42:15');

-- --------------------------------------------------------

--
-- Table structure for table `carrito`
--

CREATE TABLE `carrito` (
  `id_Carrito` int(5) NOT NULL,
  `id_Cliente` int(5) NOT NULL,
  `Id_Producto` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carrito`
--

INSERT INTO `carrito` (`id_Carrito`, `id_Cliente`, `Id_Producto`) VALUES
(5, 412, 273),
(7, 412, 279),
(8, 412, 277),
(10, 413, 276);

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `id_Cliente` int(5) NOT NULL,
  `id_Tipousuario` varchar(5) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `edad` int(2) NOT NULL,
  `sexo` int(1) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `telefono` bigint(11) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id_Cliente`, `id_Tipousuario`, `nombres`, `apellidos`, `edad`, `sexo`, `usuario`, `correo`, `contraseña`, `telefono`, `direccion`) VALUES
(366, 'A', 'Luis Gerardo', 'Lopez', 25, 1, 'termin_gs8', 'luisge_lopez@hotmail.com', 'prueba', 4496667788, 'San francisco de los Viveros #336'),
(372, 'A', 'Dom', 'Schneider', 63, 1, 'Dan97', 'schnei97@gmail.com', 'avv', 4495556655, 'Hacienda de los viveros #660'),
(375, 'A', 'Maria Fernanda', 'Rivas', 75, 1, 'rivfer_7', 'mafer_rp99@gmail.com', '$sha', 5234526178, 'Lomas del Real #123'),
(376, 'A', 'Jose Leonardo', 'Sanchez', 45, 1, 'SancL99', 'sancl_ss@outlook.com', '420c7bf3f5dab3d', 4494956128, 'Hacienda El Milagro #660'),
(377, 'A', 'Juan', 'Esqueda', 28, 2, 'Johnny_56', 'juan.esqqueda@hotmail.com', 'bd80cabe7174ad5', 5556398877, 'Lago de los viveros #660'),
(378, 'A', 'Alejandra', 'Marquez', 35, 1, 'loso25', 'am_mrqz.00@gmail.com', '097288269fda515', 4495556688, 'Hacienda San Martin #334'),
(379, 'A', 'Diana', 'Sanchez', 45, 1, 'dn_jlk', 'diana_sanc90@gmail.com', '4c92b5fb6d16c0b', 24494956128, 'Cieneguillas #32'),
(380, 'A', 'Monica', 'Lindo', 67, 2, 'Mon98', 'chuy1234@hotmail.com', 'c75e84902bf940a', 4494992215, 'Mozart #110'),
(381, 'A', 'Octavio', 'Guzman', 25, 1, 'octav_gz', 'octavio90@gmail.com', '534bb67b278a526', 5589985458, 'Lago de Chapultepec #210'),
(382, 'A', 'Luis Armando', 'Reynoso', 42, 1, 'Luis98G7', 'luis.gar98@gmail.com', '$2y$10$A/EeuXgM', 4496635287, 'Los Perales #660'),
(383, 'A', 'Luis Antonio', 'Martin', 29, 1, 'term98', 'term98.martin@hotmail.com', '$2y$10$Dnqy4ltX', 4495623354, 'Hacienda Miravalle #445'),
(384, 'A', 'Jose', 'Castañeda', 30, 1, 'pepisho55', 'cast_99@outlook.com', '$2y$10$JTsrxlha', 4496668877, 'Las Flores #110'),
(385, 'A', 'Daniela', 'Resendez', 20, 2, 'danr9', 'resend.dan99@hotmail.com', '$2y$10$.2kAqxG4', 5226128955, 'Ojocaliente #44'),
(386, 'A', 'Sarahi', 'Lopez', 21, 2, 'sara995', 'sarahi.lopex9@outlook.com', '$2y$10$UHXBSYSU', 4496132548, 'Av. Siglo XXI #3343'),
(387, 'A', 'Jessica', 'Medina', 25, 2, 'jessmed.o', 'jess_med99@hotmail.com', '$2y$10$HeBw1Ezd', 8887554213, 'San Gerónimo #132'),
(388, 'A', 'Jaime', 'Lopez', 25, 1, 'james.lop', 'jaimelop.9m@gmail.com', '$2y$10$Kpgkcuzm', 4494995220, 'Av. Aguascalientes Sur #443'),
(400, 'A', 'Moises', 'Solana', 23, 1, 'moysol', 'moises-sol01@outlook.com', '$2y$10$BzJP8Cr.', 4495689937, 'Vazquez del Mercado #45'),
(401, 'A', 'Luisa María', 'Torres', 25, 2, 'LuisaMJ', 'luisa98@hotmail.co', 'ornev', 4495556655, 'aergvaervqervqer'),
(402, 'A', 'Jose Leonardo', 'Sanchez', 25, 1, 'UsuarioPrueba2', 'chuy123@hotmail.com', '$2y$10$t97Q7IU7', 4494956128, 'Hacienda El Milagro 660'),
(403, 'A', 'Jose', 'Contreras', 22, 1, 'cuauh.cont99', 'cuauh.contrerasg@hotmail.com', '$2y$10$hd1htvOZ', 4496325598, 'José Maria Velasco #655'),
(404, 'A', 'Claudia', 'Sánchez', 26, 1, 'Clau9909', 'clau_97@gmail.com', '$2y$10$ckFZzN0s', 4496652248, 'Palo Alto #440, Ojocaliente I, Aguascalientes'),
(405, 'A', 'Ramiro', 'Perez', 32, 1, 'Ram990', 'ramirez_ram@hotmail.com', '$2y$10$XDRWCysH', 4496632547, 'Direccion de Prueba'),
(406, 'A', 'Jose Leonardo', 'Sanchez', 23, 1, 'joe567', 'sedr0@outlook.com', '$2y$10$T44eTOFh', 4495602178, 'Hacienda El Milagro 660'),
(407, 'A', 'Lourdes', 'Martinez', 23, 2, 'lourd_90', 'lourdes90@gmail.com', '$2y$10$435j5cyU', 4495562012, 'Hacienda El Milagro 660'),
(408, 'A', 'Sofia', 'Ponce', 25, 2, 'sofi90', 'sofiapon@gmail.com', '$2y$10$b1pCKw3K', 4494996325, 'Hacienda El Milagro 660'),
(409, 'A', 'Veronica', 'Ponce', 25, 2, 'veropon', 'veroponce98@outlook.com', '$2y$10$XfGZZqhX.bqaHGuxd4fNOO8NzWMwvRW3Q6T2T/4.QYV3a5AO7W7QC', 4496205877, 'Hacienda El Milagro 660'),
(410, 'A', 'Jose Leonardo', 'Sanchez', 35, 1, 'test1', 'luisito@hotmail.com', '$2y$10$JdIxuuce48JG20JmXEN/UevH72FE52a5s3Jl4iPO.VGSAkuy4O4Me', 4496552336, 'Hacienda El Milagro 660'),
(411, 'A', 'Rafael', 'Lopez', 23, 1, 'RafaLop', 'rafael97.ots@hotmail.com', '$2y$10$KOb0xNwdUhRAReNxKQOp2.6i5fLl9sbKaqRwZ1ThFDdoKa7iTHhmW', 4496667788, 'Hacienda El Milagro 660'),
(412, 'A', 'Daniela', 'Gonzalez', 25, 2, 'GonzD9', 'daniela99.gz@outlook.com', '$2y$10$oapJmyPM1vx3a1j9.xHTTuEb1bmxqQSvU2YDu10X4jtgzcgj2hCFC', 4495211023, 'Ojocaliente I'),
(413, 'A', 'Carla', 'Fernandez', 32, 2, 'CarlFer', 'carla.fdz@gmail.com', '$2y$10$h3/s1bPoy7ocpm2NKdQNz.UY1f9G2qx6rJSCkPyt1DTGXXeLsaOqq', 4491234587, 'Mozart 110'),
(419, 'A', 'Jose Leonardo', 'Sanchez', 23, 1, 'leonGS', 'leonardo.gs@hotmail.com', '$2y$10$R3ut6JxYaelQqB9lkDeuMuphd6N90t9GA/qYmq/lEYkAjx9WFX7iW', 524494956128, 'Hacienda El Milagro 660');

-- --------------------------------------------------------

--
-- Table structure for table `comentario`
--

CREATE TABLE `comentario` (
  `id_Comentario` int(5) NOT NULL,
  `id_Cliente` int(5) NOT NULL,
  `id_Producto` int(5) NOT NULL,
  `comentario` varchar(300) NOT NULL,
  `fecha` date NOT NULL,
  `calificacion` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comentario`
--

INSERT INTO `comentario` (`id_Comentario`, `id_Cliente`, `id_Producto`, `comentario`, `fecha`, `calificacion`) VALUES
(1, 366, 260, 'Muy buena', '2021-03-27', 5),
(2, 380, 260, 'Good', '2021-02-17', 4),
(3, 376, 262, 'Equate features with benefits in the body of your review whenever possible (don’t just use a bulleted list without explaining how it will solve their problem).', '2021-03-27', 3),
(18, 409, 273, 'I have purchase this at Sally’s for years and love the way it tones brassieres out of my hair. Worked perfectly to tone my daughters platinum hair too.', '2021-05-08', 4),
(19, 407, 281, 'Equate features with benefits in the body of your review whenever possible (don’t just use a bulleted list without explaining how it will solve their problem).', '2021-05-11', 4),
(20, 411, 281, 'Equate features with benefits in the body of your review whenever possible (don’t just use a bulleted list without explaining how it will solve their problem).', '2021-05-10', 5),
(21, 382, 276, 'Equate features with benefits in the body of your review whenever possible (don’t just use a bulleted list without explaining how it will solve their problem).', '2021-05-10', 3),
(22, 409, 262, 'Equate features with benefits in the body of your review whenever possible (don’t just use a bulleted list without explaining how it will solve their problem).', '2021-05-11', 4);

-- --------------------------------------------------------

--
-- Table structure for table `descuento`
--

CREATE TABLE `descuento` (
  `id_des` int(5) NOT NULL,
  `id_Producto` int(5) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `disponibilidad` varchar(15) NOT NULL,
  `precio` int(5) NOT NULL,
  `precio_des` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `descuento`
--

INSERT INTO `descuento` (`id_des`, `id_Producto`, `modelo`, `disponibilidad`, `precio`, `precio_des`) VALUES
(3, 262, 'Pavilion 15-DK0005LA', 'Si', 24999, 16700),
(20, 260, 'Pavilion 15-DK0005LA', 'Si', 21500, 19600);

-- --------------------------------------------------------

--
-- Table structure for table `deseo`
--

CREATE TABLE `deseo` (
  `id_Deseo` int(5) NOT NULL,
  `id_cliente` int(5) NOT NULL,
  `id_Producto` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deseo`
--

INSERT INTO `deseo` (`id_Deseo`, `id_cliente`, `id_Producto`) VALUES
(3, 380, 262),
(4, 382, 262),
(5, 378, 262),
(6, 366, 262),
(7, 372, 264),
(8, 381, 264),
(9, 387, 264),
(24, 409, 270),
(28, 412, 263),
(29, 412, 277),
(31, 413, 273),
(32, 413, 279),
(33, 413, 269),
(34, 409, 278);

-- --------------------------------------------------------

--
-- Table structure for table `edad`
--

CREATE TABLE `edad` (
  `id_edad` int(11) DEFAULT NULL,
  `edad` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `edad`
--

INSERT INTO `edad` (`id_edad`, `edad`) VALUES
(NULL, '2016-04-14'),
(2, '1999-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `eleccion`
--

CREATE TABLE `eleccion` (
  `id_Eleccion` int(2) NOT NULL,
  `eleccion` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eleccion`
--

INSERT INTO `eleccion` (`id_Eleccion`, `eleccion`) VALUES
(0, 'No'),
(1, 'Si');

-- --------------------------------------------------------

--
-- Table structure for table `empleado`
--

CREATE TABLE `empleado` (
  `id_Empleado` int(5) NOT NULL,
  `id_Tipousuario` varchar(5) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `edad` int(2) NOT NULL,
  `sexo` int(1) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `telefono` bigint(11) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empleado`
--

INSERT INTO `empleado` (`id_Empleado`, `id_Tipousuario`, `nombres`, `apellidos`, `edad`, `sexo`, `usuario`, `correo`, `contraseña`, `telefono`, `direccion`) VALUES
(211, '911-A', 'Carlos', 'Leclerc', 23, 1, 'CarlesL', 'carloslec_99@gmail.com', 'aerqrb', 4498752144, 'Mozart #118'),
(216, '911-A', 'Emmanuel', 'Santos', 26, 1, 'emmsant', 'emm.sant09@gmail.com', '$2y$10$3hMDjgvkcr2huAfudw1eiO5rVTEG8AYHuyN1B2UnVRNGkhdggCjgi', 4494653487, 'Av. Esfuerzo Nacional #562'),
(217, '911-A', 'Jose ', 'Guzman', 25, 1, 'GuzJ90', 'jose.guzsa@hotmail.com', '$2y$10$uDnfIrWOi1dCDhgtzGOkd..ILQZNzQMoEvwLpvAB313WchDOqpMxG', 4491265587, 'Palo Alto #128'),
(218, 'G001', 'Roberto', 'Fernandez', 35, 1, 'rob_fdz', 'roberto.fdzcv@outlook.com', '$2y$10$fMqphvpaSZX5asii8wKLYuZGV9Y0SsZnSfI56/1R/Z/oBs.ojFAse', 4497856333, 'Av. Lopez Mateos #444'),
(219, '911-B', 'Alejandro', 'Gutierrez', 23, 1, 'Alj90', 'alejandro.gut@gmail.com', '$2y$10$eBa9An2Ow92MDInKyOqIeOe.uqTPfhQco6QeeSvcBAqdmI1ZTssHK', 4499962236, 'Capicornio #53'),
(220, 'B-1', 'Claudia', 'Martinez', 33, 2, 'RafM_G', 'correo4567gmail.com', '$2y$10$n6zxw/VE8qg3H3Ryb8dij.O2fH8ndIQO7fRFZtfvEaCJNbmZULasy', 4495587412, 'Av. Rodolfo Landeros #857'),
(222, 'G001', 'Leonardo', 'Sanchez', 25, 1, 'root', 'leon.sanc990@gmail.com', '$2y$10$i.bFx65TRPqViEtxE.L6Nu4KVeUAmPUlQQEnlusvraIAme63bQTD6', 4494955220, 'Hacienda Las Amarillas #621'),
(223, '911-A', 'Daniela', 'Lemus', 25, 2, 'lem.dan9', 'danilemus.998@gmail.com', '$2y$10$qW5Vy6jd5u6nVwh.Da0f0OF6VDBOxSQmCfHUC/hlGRdNEWvGG6O4e', 4498902332, 'Av. Heroe de Nacozario #122'),
(224, '911-A', 'Liliana', 'Muros', 30, 2, 'muros98', 'lilianamuros98@hotmail.com', '$2y$10$BYncKQzgYYhzqOLZqCFGq.hCz1XpwKzoImgoLC7LY51dSly.FeA.G', 4495203124, 'Pedro Parga #34'),
(225, '911-B', 'Luis Miguel', 'Flores', 33, 1, 'lm.flores', 'luismiflor@outlook.com', '$2y$10$37Ka41hXa.zP7Yt7NM3kNuTB6GCIFCbvNv/rST4ZuVlTz1B917SFm', 4496334687, 'Francisco G. Hornedo #133'),
(226, 'B-1', 'Rosa', 'Melquiades', 28, 2, 'rosemlq', 'rosamelq.55@gmail.com', '$2y$10$gtnzI1PdAlN7LFrYO1R0LetiTSqPdzfAL16ZJv5FxpjRlo/unE9B2', 4496382245, 'Andrómeda #479'),
(227, 'B-2', 'Angel', 'Gonzalez', 22, 1, 'gonzan34', 'gonzalez.ang@hotmail.com', '$2y$10$jDtj6xCryT535rn3MWt/2uyyE9wmLWCTbvVCuE.3sIU/7tqUKiDqO', 4495217844, 'Ignacio T. Chavez #89'),
(228, 'B-2', 'Rodrigo', 'Martinez', 24, 1, 'rodmart89', 'rodrigo.marti90@gmail.com', '$2y$10$EJMqpw/R0mloa8560bg6Jezj0q.tKrjjtnHOZ3dM2toXTVOvl/Ne.', 4494225185, 'Av. Poliducto #657'),
(229, '911-B', 'Carla', 'Ramirez', 20, 1, 'ramcarla', 'carla_sert@gmail.com', '$2y$10$7cjMH.dZ6RQFnT02TQ90wuAPx0veVfXc/s.3imRt9GBaLyxhJmG26', 4498886237, 'Cañada Honda #421'),
(230, 'B-1', 'Daniel', 'Lopez', 30, 1, 'danlop99', 'daniel.lopez90@outlook.com', '$2y$10$18RpewS2mi0M4RlnbbgBtu2V5f2jqXiMkAUydS.CRhkD0uw9MKxS.', 4492501235, 'Sagitario #55'),
(231, 'G001', 'Laura', 'Santoy', 26, 1, 'santoyL', 'laurasant.0@gmail.com', '$2y$10$3WhBEmgABbi9YcuaMNHBg.HnB6h5tVSxyXTjiQsGxShaftf7cEQ7i', 4496239641, 'Paseo del Cerrito #123'),
(232, '911-B', 'Josefina', 'Muñoz', 36, 1, 'josefinaM', 'josefina.mun@gmail.com', '$2y$10$glLwFrbDsQpHgvvIO1qlFu3HtSeRKYu7GX3VAnrgJJyDpO6gxYDRy', 4493025568, 'Paseo de la Asunción Nte #456'),
(233, 'B-2', 'Diana', 'Camacho', 40, 1, 'diana.camach9', 'diana_camacho9@outlook.com', '$2y$10$Fu9nmwCDLtkDtPwHvNu2ROKG/3jsaicmpw0qQnyGzAaiJVdjyEBM.', 4497863320, 'Miguel Caldera #96'),
(234, 'B-1', 'Patricia', 'Perez', 23, 2, 'patperez', 'patperez90@gmail.com', '$2y$10$vmjCRAeFXK0Zky/4oXVIoeP7SeNQKJQ43mttA9N/Yvodx0TYR139G', 4495526210, 'Av. de las Palmas #443'),
(235, '911-B', 'Francisco', 'Gutierrez', 32, 1, 'Frangut9', 'fran.gtz@hotmail.com', '$2y$10$1i0nnDp1fS5FaqcUww9s8Op7c6MjumAR9h6z7/aTbCUW5K5Tijomu', 4496205148, 'Av. Siglo XIX #290');

-- --------------------------------------------------------

--
-- Table structure for table `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `estado`
--

INSERT INTO `estado` (`id_estado`, `estado`) VALUES
(1, 'Pedido'),
(2, 'Enviado'),
(3, 'En camino'),
(4, 'Entregado'),
(5, 'En Proceso'),
(6, 'Rechazado');

-- --------------------------------------------------------

--
-- Table structure for table `fabricante`
--

CREATE TABLE `fabricante` (
  `id_fabricante` int(5) NOT NULL,
  `nfabricante` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fabricante`
--

INSERT INTO `fabricante` (`id_fabricante`, `nfabricante`) VALUES
(1, 'HP'),
(2, 'Asus'),
(3, 'Dell'),
(4, 'Apple'),
(5, 'Acer'),
(6, 'Alienware'),
(7, 'Lenovo'),
(9, 'Huawei');

-- --------------------------------------------------------

--
-- Table structure for table `familia`
--

CREATE TABLE `familia` (
  `id_Familia` int(5) NOT NULL,
  `nfamilia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `familia`
--

INSERT INTO `familia` (`id_Familia`, `nfamilia`) VALUES
(1, 'Intel i7'),
(2, 'Intel i5'),
(3, 'Intel i9'),
(4, 'Intel i3'),
(5, 'Ryzen 9'),
(6, 'Ryzen 7'),
(7, 'Ryzen 5'),
(8, 'A4'),
(9, 'Intel Celeron 4'),
(10, 'Ryzen 3');

-- --------------------------------------------------------

--
-- Table structure for table `frecuencia`
--

CREATE TABLE `frecuencia` (
  `id_Frecuencia` int(5) NOT NULL,
  `frecuencia` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `frecuencia`
--

INSERT INTO `frecuencia` (`id_Frecuencia`, `frecuencia`) VALUES
(1, '60 Hz'),
(2, '144 Hz'),
(3, '240 Hz');

-- --------------------------------------------------------

--
-- Table structure for table `imagen`
--

CREATE TABLE `imagen` (
  `id_Imagen` int(5) NOT NULL,
  `imagen1` varchar(100) NOT NULL,
  `imagen2` varchar(100) NOT NULL,
  `imagen3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `imagen`
--

INSERT INTO `imagen` (`id_Imagen`, `imagen1`, `imagen2`, `imagen3`) VALUES
(2, 'https://i.ibb.co/NLn1v7J/c06439201.png', 'https://i.ibb.co/Hq4dRLJ/large-2-jpg-nuhscyhb1.jpg', 'https://i.ibb.co/vjFcjf4/3-4-2-4.png'),
(3, 'https://i.ibb.co/vjFcjf4/3-4-2-4.png', 'https://i.ibb.co/vjFcjf4/3-4-2-4.png', 'https://i.ibb.co/vjFcjf4/3-4-2-4.png'),
(4, 'https://i.ibb.co/RDypZ0X/195161584442-001-1.jpg', 'https://i.ibb.co/vjFcjf4/3-4-2-4.png', 'https://i.ibb.co/vjFcjf4/3-4-2-4.png'),
(5, 'https://i.ibb.co/q1yFKbn/CP-DELL-V3405-R58256-BW10-PS-521-1.jpg', 'https://i.ibb.co/vjFcjf4/3-4-2-4.png', 'https://i.ibb.co/vjFcjf4/3-4-2-4.png'),
(6, 'https://ibb.co/HgFp6m2', 'https://i.ibb.co/vjFcjf4/3-4-2-4.png', 'https://i.ibb.co/vjFcjf4/3-4-2-4.png'),
(7, 'https://i.ibb.co/q1yFKbn/CP-DELL-V3405-R58256-BW10', 'https://i.ibb.co/vjFcjf4/3-4-2-4.png', 'https://i.ibb.co/vjFcjf4/3-4-2-4.png'),
(8, 'https://i.ibb.co/q1yFKbn/CP-DELL-V3405-R58256-BW10', 'https://i.ibb.co/vjFcjf4/3-4-2-4.png', 'https://i.ibb.co/vjFcjf4/3-4-2-4.png'),
(13, 'https://i.ibb.co/qm5KDXy/Acer-Aspire-5-A515-56-56-G-56-S-56-T-with-FP-', 'https://i.ibb.co/DCdQvjw/Acer-Aspire-5-A515-56-56-', 'https://i.ibb.co/Nj6Cg5n/Acer-Aspire-5-A515-56-56-'),
(14, 'https://i.ibb.co/qm5KDXy/Acer-Aspire-5-A515-56-56-G-56-S-56-T-with-FP-', 'https://i.ibb.co/DCdQvjw/Acer-Aspire-5-A515-56-56-', 'https://i.ibb.co/Nj6Cg5n/Acer-Aspire-5-A515-56-56-'),
(15, 'https://i.ibb.co/K07FHKP/Acer-Aspire-5-A515-56-56-G-56-S-56-T-with-FP-Backlit-Silver-modelmain.png', 'https://i.ibb.co/RNB9DCm/Acer-Aspire-5-A515-56-56-G-56-S-56-T-with-FP-Backlit-Silver-gallery-03.png', 'https://i.ibb.co/DkW6Rr6/Acer-Aspire-5-A515-56-56-G-56-S-56-T-with-FP-Backlit-Silver-gallery-05.png'),
(16, 'https://i.ibb.co/j4wNsRt/1098293635.png', 'https://i.ibb.co/6sdJtLB/w-10-1-3-1-1-1.png', 'https://i.ibb.co/pJt6jGW/awm15r3nt-cnb-00060rb055-gy.png'),
(17, 'https://i.ibb.co/t2L2Nk1/D-NQ-NP-902371-MLA45058059459-032021-O.png', 'https://i.ibb.co/dbPGwpv/D-NQ-NP-601578-MLA45058059461-032021-O.png', 'https://i.ibb.co/rdt3Ztv/D-NQ-NP-969740-MLA45057868959-032021-O.png'),
(18, 'https://i.ibb.co/ZzxjnkW/1101618702.png', 'https://i.ibb.co/RTF9CT1/1101618702-3p.png', 'https://i.ibb.co/QmsLqjB/1101618702-1p.png'),
(19, 'https://i.ibb.co/pxmZ71c/1096021051.png', 'https://i.ibb.co/C9WJ0Td/1096021051-2p.png', 'https://i.ibb.co/dmb89Lm/1096021051-5p.png'),
(20, 'https://i.ibb.co/Zmmqv0b/1105704018.png', 'https://i.ibb.co/TtWYzFR/1105704018-1p.png', 'https://i.ibb.co/wWfjGzZ/1105704018-2p.png'),
(21, 'https://i.ibb.co/dMbnR75/3226534-1.png', 'https://i.ibb.co/fFZRHTB/3226536.png', 'https://i.ibb.co/LvRQC1Q/3226537.png'),
(22, 'https://i.ibb.co/FVj9KZP/1103671341.png', 'https://i.ibb.co/k1pPdF8/D-NQ-NP-768479-MLM45634967750-042021-O.png', 'https://i.ibb.co/nLGPnh8/1103671341-5p.png'),
(23, 'https://i.ibb.co/Pg1T4YH/ww-lenovo-laptop-v15-gallery-1-1.png', 'https://i.ibb.co/1JSc9VR/ww-lenovo-laptop-v15-gallery-2.png', 'https://i.ibb.co/ZHjPLyn/lenovo-laptop-v15-subseries-feature-1-front-left.png'),
(24, 'https://i.ibb.co/Np6GnsR/1100320963.png', 'https://i.ibb.co/0rGCNR7/1100320963-6p.png', 'https://i.ibb.co/Y02YNq5/1100320963-5p.png'),
(25, 'https://i.ibb.co/0rXMnzk/1102190102.png', 'https://i.ibb.co/n7626v3/1102190102-1p.png', 'https://i.ibb.co/v1PjMw1/1102190102-4p.png'),
(26, 'https://i.ibb.co/CBBkR4Q/1105117236.png', 'https://i.ibb.co/Vghp8xZ/1105117236-1p.png', 'https://i.ibb.co/bKXjGKH/1105117236-3p.png'),
(27, 'https://i.ibb.co/xD1wrHd/lenovo-laptop-legion-7-gallery-1.png', 'https://i.ibb.co/42q1sPp/lenovo-laptops-legion-laptops-legion-y-series-lenovo-legion-7-15-intel-gall', 'https://i.ibb.co/Gd3qwz4/lenovo-laptops-legion-laptops-legion-y-series-lenovo-legion-7-15-intel-gall'),
(28, 'https://i.ibb.co/XkfNR0N/as-images-apple.png', 'https://i.ibb.co/fdrG8Dz/as-images-apple-1.png', 'https://i.ibb.co/MDyKZ50/as-images-apple-2.png'),
(29, 'https://i.ibb.co/7VDf7NB/81-Kyhfco-B4-L-AC-SL1500.png', 'https://i.ibb.co/v4GxM8M/71fvs-UGpk-PL-AC-SL1500.png', 'https://i.ibb.co/VYPd3b8/71f-Ygney-Eo-L-AC-SL1500.png'),
(30, 'https://i.ibb.co/2qXMGdK/618-GEu-Ht8-ML-AC-SL1500.png', 'https://i.ibb.co/d7tRdLX/51a-Nrn5jf-L-AC-SL1500.png', 'https://i.ibb.co/hMz8fDh/51-I2p-B4m-I2-L-AC-SL1500.png'),
(31, 'https://i.ibb.co/KzPkNkx/lenovo-300e-windows-feature-05.png', 'https://i.ibb.co/zQMVzGk/lenovo-300e-windows-feature-04.png', 'https://i.ibb.co/2n4Lw4L/lenovo-300e-windows-feature-02.png'),
(32, 'https://i.ibb.co/KzPkNkx/lenovo-300e-windows-feature-05.png', 'https://i.ibb.co/zQMVzGk/lenovo-300e-windows-feature-04.png', 'https://i.ibb.co/2n4Lw4L/lenovo-300e-windows-feature-02.png'),
(33, 'https://i.ibb.co/thXsNM3/00019287679511-L.png', 'https://i.ibb.co/B4C3kN7/00019287679511-L1.png', 'https://i.ibb.co/k0RC1pP/00019287679511-L3.png'),
(34, 'https://i.ibb.co/c2xcBc8/71k-WJdo-Vg-AS-AC-SL1500.png', 'https://i.ibb.co/gzbYr5s/71-I02-QWMGTS-AC-SL1500.png', 'https://i.ibb.co/kQLtJz4/61o4b81-WCAS-AC-SL1500.png'),
(35, 'https://i.ibb.co/hCM0q72/615t-Ej-J0-YHL-AC-SL1200.png', 'https://i.ibb.co/XY38wb6/617m-Wrd-Lx3-L-AC-SL1200.png', 'https://i.ibb.co/926pJP6/613-0-F3-R7-L-AC-SL1200.png'),
(36, 'https://i.ibb.co/B2nbq3Z/71z-NU5-UBINL-AC-SL1500.png', 'https://i.ibb.co/wpfcZD8/818o-BEkkh-WL-AC-SL1500.png', 'https://i.ibb.co/PQDVKRF/817-JLru-YA9-L-AC-SL1500.png'),
(37, 'https://i.ibb.co/tMmHMtK/4154hjlt-JBL-AC.png', 'https://i.ibb.co/XyC1xNk/41-T12ai-Fdd-L-AC.png', 'https://i.ibb.co/cyfnqbZ/31-VGDpyfgr-L-AC.png'),
(38, 'https://i.ibb.co/P5X1qHJ/61h9q0-MUEDS-AC-SL1500.png', 'https://i.ibb.co/0Xgq2SF/61v2-Lkpfs-YS-AC-SL1500.png', 'https://i.ibb.co/VL255wx/512-Fq-Azt5z-S-AC-SL1500.png'),
(39, 'https://i.ibb.co/SRsq4qj/61-LEDRVJX0-L-AC-SL1074.png', 'https://i.ibb.co/yk5QXVV/611ub2w7qp-L-AC-SL1076.png', 'https://i.ibb.co/GJVcVQP/61-UNm21-FTz-L-AC-SL1076.png'),
(40, 'https://i.ibb.co/FB465SV/41-DP5pnrx8-S-AC.png', 'https://i.ibb.co/rMN9yz6/31v-E8-MBLb-ZS-AC.png', 'https://i.ibb.co/rMN9yz6/31v-E8-MBLb-ZS-AC.png'),
(41, 'https://i.ibb.co/0GSCKHJ/71r1x-Eqpn5-L-AC-SL1500.png', 'https://i.ibb.co/dgc0xJr/71w-WEYj-L0n-L-AC-SL1500.png', 'https://i.ibb.co/0cS7Dx4/71-MHY38-Hf3-L-AC-SL1500.png'),
(42, 'https://i.ibb.co/SrHw0qr/D-Q-NP-775647-MLA45254206623-032021-R.png', 'https://i.ibb.co/Stm170f/D-Q-NP-726386-MLA45254206624-032021-R.png', 'https://i.ibb.co/r3kgXC0/D-Q-NP-622527-MLA45254206626-032021-R.png');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id_Producto` int(5) NOT NULL,
  `cantidad` int(3) NOT NULL,
  `condicion` varchar(20) NOT NULL,
  `disponibilidad` varchar(15) NOT NULL,
  `id_fabricante` int(5) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `precio` int(5) NOT NULL,
  `id_Imagen` int(5) NOT NULL,
  `id_Sistema` int(5) NOT NULL,
  `ram` varchar(20) NOT NULL,
  `graficos` varchar(25) NOT NULL,
  `almacenamientoPrincipal` varchar(20) NOT NULL,
  `almacenamientoSecundario` varchar(20) NOT NULL,
  `id_Familia` int(5) NOT NULL,
  `procesador` varchar(20) NOT NULL,
  `puertos` varchar(70) NOT NULL,
  `wifi` int(2) NOT NULL,
  `bluetooth` int(2) NOT NULL,
  `garantia` varchar(20) NOT NULL,
  `microfono` int(2) NOT NULL,
  `camara` int(2) NOT NULL,
  `altavoces` int(2) NOT NULL,
  `teclado` int(2) NOT NULL,
  `unidadOptica` int(2) NOT NULL,
  `bateria` varchar(15) NOT NULL,
  `id_Pantalla` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id_Producto`, `cantidad`, `condicion`, `disponibilidad`, `id_fabricante`, `modelo`, `precio`, `id_Imagen`, `id_Sistema`, `ram`, `graficos`, `almacenamientoPrincipal`, `almacenamientoSecundario`, `id_Familia`, `procesador`, `puertos`, `wifi`, `bluetooth`, `garantia`, `microfono`, `camara`, `altavoces`, `teclado`, `unidadOptica`, `bateria`, `id_Pantalla`) VALUES
(260, 25, 'Nuevo', 'Si', 1, 'Pavilion 15-DK0005LA', 21500, 0, 1, '16 GB', 'Nvidia GTX1050 4GB GDDR5', '1 TB HDD', '124 GB SSD', 1, 'i7-9750H', '3 USB 3.0, 1 HDMI, 1 SD Slot', 1, 1, '1 año directo con pr', 1, 1, 1, 1, 1, '8000mAh', 14),
(262, 25, 'Nuevo', 'Si', 1, '15-DY091WM', 16700, 2, 1, '16 GB', 'Nvidia GTX1050 4GB GDDR5', '1 TB HDD', '124 GB SSD', 1, 'i7-9750H', '3 USB 3.0, 1 HDMI, 1 SD Slot', 1, 1, '1 año directo con pr', 1, 1, 1, 1, 1, '8000mAh', 17),
(263, 20, 'Nuevo', 'Si', 1, '15-DA2035', 10999, 4, 1, '8 GB', 'Integrados', '1 TB HDD', 'No aplica', 4, 'i3-9750', '3 USB 3.0, 1 HDMI, 1 SD Slot', 1, 1, '1 año directo con pr', 1, 0, 1, 1, 1, '8000mAh', 19),
(264, 15, 'Nuevo', 'Si', 3, 'Vostro 3405', 14999, 5, 1, '8 GB', 'Integrados', '1 TB HDD', 'No aplica', 2, 'i5-9655H', '3 USB 3.0, 1 HDMI, 1 SD Slot', 1, 1, '1 año directo con pr', 1, 1, 1, 1, 1, '9000mAh', 20),
(266, 25, 'Nuevo', 'Si', 5, 'Aspire 5 A515-56', 24399, 15, 1, '8 GB', 'Iris Xe Graphics', '1 TB HDD', '124 GB SSD', 2, 'i5-1135G7', '3 USB 3.0, 1 USB Tipo C, 1 HDMI, 1 Ethernet', 1, 1, '1 año directo con pr', 1, 1, 1, 1, 0, '8 hrs', 28),
(267, 15, 'Nuevo', 'Si', 6, 'M15 R3', 55999, 16, 1, '16 GB', 'NVIDIA GeForce RTX 2070', '512 GB SSD', 'No aplica', 1, 'i7-10750H', '3 USB 3.0, 1 Ethernet, ', 1, 1, '1 año directo con pr', 1, 1, 1, 1, 0, 'Depende del uso', 29),
(268, 10, 'Nuevo', 'Si', 9, 'MateBook D14', 22299, 17, 1, '8 GB', 'Radeon Vega 10', '512 GB SSD', 'No aplica', 6, '3700 U', '3 USB 3.0, 1 HDMI', 1, 1, '1 año directo con pr', 1, 1, 1, 1, 0, '8 hrs', 30),
(269, 10, 'Nuevo', 'Si', 7, '100E', 8999, 18, 1, '4 GB', 'Integrados', '500 GB HDD', 'No aplica', 8, 'A4-9120C', '2 USB 3.0, 2 USB 2.0, 2 USB Tipo C', 1, 1, '1 año directo con pr', 1, 1, 1, 1, 0, 'Hasta 10 horas', 31),
(270, 5, 'Nuevo', 'Si', 4, 'Macbook Air', 24599, 19, 6, '8 GB', 'Intel Iris Plus Graphics', '256 GB SSD', 'No aplica', 4, 'i3-10xxx', '2 Thunderbolt, 2 USB Tipo C', 1, 1, '1 año directo con pr', 1, 1, 1, 2, 0, 'Hasta 11 horas', 32),
(271, 15, 'Nuevo', 'Si', 5, 'Aspire 3', 9445, 20, 1, '4 GB', 'Integrados', '500 GB HDD', 'No aplica', 9, 'N4020', '2 USB 2.0, 1 Ethernet', 1, 1, '1 año directo con pr', 1, 1, 1, 1, 1, 'Hasta 4 horas', 33),
(272, 10, 'Nuevo', 'Si', 2, 'X515JA Ci3', 13769, 21, 1, '16 GB', 'Intel UHD Graphics', '1 TB HDD', '256 GB SSD', 4, 'i3-1005G1', '1 USB 2.0, 2 USB 3.0, 1 USB Tipo C, 1 HDMI', 1, 1, '1 año directo con pr', 1, 1, 1, 1, 0, 'Hasta 6 horas', 34),
(273, 20, 'Nuevo', 'Si', 2, 'VivoBook Flip', 19999, 22, 1, '8 GB', ' Intel UHD Graphics', '256 GB SSD', 'No aplica', 4, 'i3-10750H', '2 USB 2.0, 1 USB Tipo C, 1 HDMI', 1, 0, '1 año directo con pr', 1, 0, 1, 1, 0, 'Hasta 7 horas', 35),
(274, 5, 'Nuevo', 'Si', 7, 'V15 IGL', 21599, 23, 3, '16 GB', 'Intel UHD Graphics', '1 TB HDD', '124 GB M.2', 1, 'Intel® Core™ i7-1065', '2 USB 3.1, 1 USB 2.0, 1 HDMI', 1, 1, '1 año directo con pr', 1, 1, 1, 1, 0, 'Hasta 6 horas', 36),
(275, 10, 'Nuevo', 'Si', 9, 'MateBook X', 32399, 24, 1, '16 GB', 'Intel UHD Graphics', '512 GB SSD', 'No aplica', 2, 'i5-10750H', '2 USB Tipo C', 1, 1, '1 año directo con pr', 1, 1, 1, 1, 0, 'Hasta 9 Horas', 37),
(276, 12, 'Nuevo', 'Si', 3, 'Inspiron 15 3501', 17999, 25, 1, '8 GB', 'Integrados', '1 TB HDD', '256 GB SSD', 2, 'i5-10750H', '2 USB 2.0, 1 USB 3.0, 1 Ethernet', 1, 1, '1 año directo con pr', 1, 1, 1, 1, 0, 'Hasta 7 horas', 38),
(277, 5, 'Nuevo', 'Si', 1, '151D4LT', 13899, 26, 1, '4 GB', 'Intel UHD Graphics', '500 GB HDD', 'No aplica', 4, 'i3-9750', '2 USB 2.0, 1 Ethernet', 1, 1, '1 año directo con pr', 1, 1, 1, 1, 0, 'Hasta 7 horas', 39),
(278, 20, 'Nuevo', 'Si', 7, 'Legion 7i', 51999, 27, 3, '16 GB', 'NVIDIA® GeForce® RTX 2070', '512 GB SSD', 'No aplica', 1, 'i7-10750H', '3 USB 3.0, 1 USB Tipo C, 1 HDMI, 1 Ethernet', 1, 1, '1 año directo con pr', 1, 1, 1, 1, 0, 'Hasta 8 horas', 40),
(279, 10, 'Nuevo', 'Si', 4, 'MacBook Pro', 34499, 28, 6, '8 GB', 'Intel UHD Graphics', '256 GB SSD', 'No aplica', 2, 'i5-10750H', 'Dos puertos Thunderbolt/USB 4', 1, 1, '1 año directo con pr', 1, 1, 1, 1, 0, 'Hasta 17 horas', 41),
(280, 15, 'Nuevo', 'Si', 1, 'HP Pavilion', 18959, 29, 1, '8 GB', 'NVIDIA GeForce GTX 1650', '256 GB SSD', 'No aplica', 7, '4600H', '3 USB 3.0, 1 HDMI, ', 1, 1, '1 año directo con pr', 1, 1, 1, 1, 0, 'Hasta 7 horas', 42),
(281, 10, 'Nuevo', 'Si', 5, 'Swift 3', 14500, 30, 1, '8 GB', 'AMD Integrated', '500 GB HDD', 'No aplica', 7, '4500U', '2 USB 2.0, 1 Ethernet', 1, 0, '1 año directo con pr', 0, 0, 0, 1, 0, 'Hasta 7 horas', 43),
(282, 8, 'Nuevo', 'Si', 7, '300e', 11139, 32, 1, '4 GB', 'AMD Radeon 540', '500 GB HDD', 'No aplica', 10, '3200G', '2 USB 2.0, 1 Ethernet', 1, 0, '1 año directo con pr', 1, 1, 1, 1, 0, 'Hasta 10 horas', 45),
(283, 15, 'Nuevo', 'Si', 2, 'X543MA', 7999, 33, 1, '4 GB', 'Integrados', '500 GB HDD', 'No aplica', 9, 'N4000', '2 USB 2.0, 1 Ethernet', 1, 1, '1 año directo con pr', 1, 1, 1, 1, 0, 'Hasta 7 horas', 46),
(284, 5, 'Nuevo', 'No', 2, 'ZenBook Pro 15', 79250, 34, 1, '16 GB', 'NVIDIA GeForce GTX 1050 T', '1 TB SSD', 'No aplica', 3, 'i9-8950HK', '3 USB 3.0, 1 USB Tipo C, 1 HDMI, 1 Ethernet', 1, 1, '1 año directo con pr', 1, 1, 1, 2, 0, 'Hasta 7 horas', 47),
(285, 10, 'Nuevo', 'Si', 1, 'Omen 17T', 55999, 35, 3, '64 GB', 'NVIDIA RTX 2080', '1 TB SSD', '124 GB M.2', 3, 'i9-9880H', '3 USB 3.0, 1 USB Tipo C, 1 HDMI, 1 Ethernet', 1, 1, '1 año directo con pr', 1, 1, 1, 1, 0, 'Hasta 7 horas', 48),
(286, 15, 'Nuevo', 'Si', 2, 'OG Zephyrus G14', 41999, 36, 1, '16 GB', 'NVIDIA GeForce RTX2060', '1 TB SSD', '124 GB M.2', 5, '4900HS', '2 USB 3.0, 2 USB 2.0, 2 USB Tipo C', 1, 1, '1 año directo con pr', 1, 1, 1, 1, 0, 'Hasta 10 horas', 49),
(287, 15, 'Nuevo', 'Si', 7, 'IdeaPad Gaming 3', 22999, 37, 1, '8 GB', 'NVIDIA GeForce GTX 1650 T', '512 GB SSD', 'No aplica', 6, '4800H', '2 USB 3.0, 2 USB 2.0, 2 USB Tipo C', 1, 1, '1 año directo con pr', 1, 1, 1, 1, 0, 'Hasta 6 horas', 50),
(288, 15, 'Nuevo', 'Si', 7, 'Thinkpad E14', 34999, 38, 3, '16 GB', 'Nvidia GeForce GTX1050 ', '512 GB SSD', 'No aplica', 1, 'i7-1165G7', '3 USB 3.0, 1 USB Tipo C, 1 HDMI, 1 Ethernet', 1, 1, '1 año directo con pr', 1, 0, 0, 1, 0, 'Hasta 6 horas', 51),
(289, 5, 'Nuevo', 'Si', 3, 'XPS', 22500, 39, 1, '8 GB', 'Intel UHD Graphics', '500 GB M.2', 'No aplica', 1, 'i7-10510U', '3 USB 3.0, 1 HDMI', 1, 1, '1 año directo con pr', 1, 1, 1, 1, 0, 'Hasta 7 horas', 52),
(290, 20, 'Nuevo', 'No', 2, 'VivoBook 15', 13499, 40, 1, '8 GB', 'Radeon Vega 8', '1 TB HDD', 'No aplica', 7, '3500U', '2 USB 2.0, 1 Ethernet', 1, 1, '1 año directo con pr', 1, 1, 1, 1, 0, 'Hasta 7 horas', 53),
(291, 5, 'Nuevo', 'Si', 7, 'Flex 5', 16499, 41, 1, '16 GB', 'AMD Radeon Graphics', '256 GB SSD', 'No aplica', 7, '4500U', '3 USB 3.0, 1 Ethernet', 1, 1, '1 año directo con pr', 1, 1, 1, 1, 0, 'Hasta 6 horas', 54),
(292, 10, 'Nuevo', 'Si', 1, ' 240 G7', 9899, 42, 1, '4 GB', 'Intel UHD Graphics', '500 GB HDD', 'No aplica', 9, 'N4020', '2 USB 2.0, 1 HDMI', 1, 1, '1 año directo con pr', 1, 1, 1, 1, 0, 'Hasta 10 horas', 55);

-- --------------------------------------------------------

--
-- Table structure for table `pantalla`
--

CREATE TABLE `pantalla` (
  `id_Pantalla` int(4) NOT NULL,
  `tamaño` varchar(20) NOT NULL,
  `resolucion` varchar(15) NOT NULL,
  `frecuencia` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pantalla`
--

INSERT INTO `pantalla` (`id_Pantalla`, `tamaño`, `resolucion`, `frecuencia`) VALUES
(14, '15\"-17\"', '1920x1080', '60 Hz'),
(15, '18\" o más', '1920x1080', '120 Hz'),
(16, '15\"-17\"', '1920x1080', '60 Hz'),
(17, '15\"-17\"', '1920x1080', '60 Hz'),
(18, '12\"-14\"', '1920x1080', '60 Hz'),
(19, '12\"-14\"', '1920x1080', '60 Hz'),
(20, '15\"-17\"', '1920x1080', '120 Hz'),
(21, '15\"-17\"', '1920x1080', '120 Hz'),
(22, '15\"-17\"', '1920x1080', '60 Hz'),
(26, '15\"-17\"', '1920x1080', '60 Hz'),
(27, '15\"-17\"', '1920x1080', '60 Hz'),
(28, '15\"-17\"', '1920x1080', '60 Hz'),
(29, '15\"-17\"', '1920x1080', '244 Hz'),
(30, '12\"-14\"', '1920x1080', '60 Hz'),
(31, '12\"-14\"', '1366x768', '60 Hz'),
(32, '12\"-14\"', '1920x1080', '120 Hz'),
(33, '15\"-17\"', '1366x768', '60 Hz'),
(34, '15\"-17\"', '1920x1080', '60 Hz'),
(35, '12\"-14\"', '1920x1080', '60 Hz'),
(36, '15\"-17\"', '1920x1080', '60 Hz'),
(37, '12\"-14\"', 'Resolución', '60 Hz'),
(38, '15\"-17\"', '1920x1080', '60 Hz'),
(39, '12\"-14\"', '1366x768', '60 Hz'),
(40, '15\"-17\"', '1920x1080', '120 Hz'),
(41, '12\"-14\"', '1920x1080', '60 Hz'),
(42, '15\"-17\"', '1920x1080', '60 Hz'),
(43, '12\"-14\"', '1920x1080', '60 Hz'),
(44, '12\"-14\"', '1920x1080', '60 Hz'),
(45, '12\"-14\"', '1920x1080', '60 Hz'),
(46, '15\"-17\"', '1366x768', '60 Hz'),
(47, '15\"-17\"', '1920x1080', '120 Hz'),
(48, '18\" o más', '1920x1080', '120 Hz'),
(49, '12\"-14\"', '1920x1080', '120 Hz'),
(50, '15\"-17\"', '1920x1080', '120 Hz'),
(51, '12\"-14\"', '1920x1080', '120 Hz'),
(52, '12\"-14\"', '1920x1080', '60 Hz'),
(53, '15\"-17\"', '1366x768', '60 Hz'),
(54, '12\"-14\"', '1920x1080', '60 Hz'),
(55, '12\"-14\"', '1366x768', '60 Hz');

-- --------------------------------------------------------

--
-- Table structure for table `pedido`
--

CREATE TABLE `pedido` (
  `id_Pedido` int(5) NOT NULL,
  `id_Cliente` int(5) NOT NULL,
  `id_Producto` int(5) NOT NULL,
  `id_Estado` int(11) NOT NULL,
  `nombreCliente` varchar(30) NOT NULL,
  `cantidad` int(2) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `precio` int(15) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `total` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pedido`
--

INSERT INTO `pedido` (`id_Pedido`, `id_Cliente`, `id_Producto`, `id_Estado`, `nombreCliente`, `cantidad`, `modelo`, `precio`, `direccion`, `fecha`, `total`) VALUES
(3, 376, 262, 2, 'Luis', 1, 'Pavilion 15-DK0005LA', 24999, 'wgaergr', '2021-01-25', 49998),
(4, 382, 264, 2, 'Luis Armando', 3, 'Vostro 3405', 14999, 'Los Perales #660', '2021-04-07', 44997),
(13, 409, 263, 2, 'Veronica', 1, '15-DA2035', 10999, 'Hacienda El Milagro 660', '2021-05-10', 10999),
(14, 409, 275, 2, 'Veronica', 1, 'MateBook X', 32399, 'Hacienda El Milagro 660', '2021-05-10', 32399),
(15, 413, 272, 2, 'Carla', 1, 'X515JA Ci3', 13769, 'Mozart 110', '2021-05-11', 13769),
(16, 409, 262, 1, 'Veronica', 1, '15-DY091WM', 16700, 'Hacienda El Milagro 660', '2021-05-11', 16700);

-- --------------------------------------------------------

--
-- Table structure for table `procesador`
--

CREATE TABLE `procesador` (
  `id_Procesador` int(4) NOT NULL,
  `id_Familia` int(11) NOT NULL,
  `modelo` varchar(15) NOT NULL,
  `frecuencia` varchar(10) NOT NULL,
  `frecuenciaMax` varchar(10) NOT NULL,
  `nucleos` int(2) NOT NULL,
  `hilos` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `procesador`
--

INSERT INTO `procesador` (`id_Procesador`, `id_Familia`, `modelo`, `frecuencia`, `frecuenciaMax`, `nucleos`, `hilos`) VALUES
(1, 1, 'i7-9750H', '2.60GHz', '4.80GHz', 6, 12);

-- --------------------------------------------------------

--
-- Table structure for table `resolucion`
--

CREATE TABLE `resolucion` (
  `id_Resolucion` int(5) NOT NULL,
  `resolucion` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resolucion`
--

INSERT INTO `resolucion` (`id_Resolucion`, `resolucion`) VALUES
(1, '1920x1080'),
(2, '1366x768'),
(3, '1280x720'),
(4, '2560x1440');

-- --------------------------------------------------------

--
-- Table structure for table `sexo`
--

CREATE TABLE `sexo` (
  `id_Sexo` int(1) NOT NULL,
  `sexo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sexo`
--

INSERT INTO `sexo` (`id_Sexo`, `sexo`) VALUES
(1, 'Masculino'),
(2, 'Femenino'),
(3, 'Otro');

-- --------------------------------------------------------

--
-- Table structure for table `sistema`
--

CREATE TABLE `sistema` (
  `id_Sistema` int(5) NOT NULL,
  `nsistema` varchar(30) NOT NULL,
  `marca` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sistema`
--

INSERT INTO `sistema` (`id_Sistema`, `nsistema`, `marca`) VALUES
(1, 'Windows 10 Home Edition', 'Microsoft'),
(2, 'Sierra', 'Apple'),
(3, 'Windows 10 Pro ', 'Microsoft'),
(4, 'Windows 10 Enterprise', 'Microsoft'),
(5, 'Windows 10 Education', 'Microsoft'),
(6, 'Catalina', 'Apple');

-- --------------------------------------------------------

--
-- Table structure for table `tamaño`
--

CREATE TABLE `tamaño` (
  `id_Tamaño` int(11) NOT NULL,
  `tamaño` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tamaño`
--

INSERT INTO `tamaño` (`id_Tamaño`, `tamaño`) VALUES
(1, '11\"12\"'),
(2, '13\"-14\"'),
(3, '15\"-16\"'),
(4, '17\" & >');

-- --------------------------------------------------------

--
-- Table structure for table `teclado`
--

CREATE TABLE `teclado` (
  `id_Teclado` int(5) NOT NULL,
  `idioma` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teclado`
--

INSERT INTO `teclado` (`id_Teclado`, `idioma`) VALUES
(1, 'Español'),
(2, 'Inglés');

-- --------------------------------------------------------

--
-- Table structure for table `tipo`
--

CREATE TABLE `tipo` (
  `id_Tipo` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipo`
--

INSERT INTO `tipo` (`id_Tipo`, `nombre`) VALUES
(1, 'IPS-Reflectante'),
(2, 'IPS_Mate'),
(3, 'LED-Reflectante');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_Tipousuario` varchar(5) NOT NULL,
  `tipo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_Tipousuario`, `tipo`) VALUES
('911-A', 'soporteCliente'),
('911-B', 'soporteEmpleado'),
('A', 'Cliente'),
('B-1', 'Almacenista'),
('B-2', 'Mantenimiento'),
('G001', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id_Bitacora`);

--
-- Indexes for table `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_Carrito`),
  ADD KEY `ClienteCarrito` (`id_Cliente`),
  ADD KEY `ProductoCarrito` (`Id_Producto`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_Cliente`),
  ADD KEY `id_Tipousuario` (`id_Tipousuario`),
  ADD KEY `id_SexoUsuario` (`sexo`);

--
-- Indexes for table `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_Comentario`),
  ADD KEY `id_ProductoComentario` (`id_Producto`),
  ADD KEY `id_ClienteComentario` (`id_Cliente`);

--
-- Indexes for table `descuento`
--
ALTER TABLE `descuento`
  ADD PRIMARY KEY (`id_des`),
  ADD KEY `id_ProductoDescuento` (`id_Producto`);

--
-- Indexes for table `deseo`
--
ALTER TABLE `deseo`
  ADD PRIMARY KEY (`id_Deseo`),
  ADD KEY `id_ProductoDeseo` (`id_Producto`),
  ADD KEY `Id_ClienteDeseo` (`id_cliente`);

--
-- Indexes for table `eleccion`
--
ALTER TABLE `eleccion`
  ADD PRIMARY KEY (`id_Eleccion`);

--
-- Indexes for table `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_Empleado`),
  ADD KEY `id_TipousuarioEmpleado` (`id_Tipousuario`),
  ADD KEY `id_SexoEmpelado` (`sexo`);

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indexes for table `fabricante`
--
ALTER TABLE `fabricante`
  ADD PRIMARY KEY (`id_fabricante`);

--
-- Indexes for table `familia`
--
ALTER TABLE `familia`
  ADD PRIMARY KEY (`id_Familia`);

--
-- Indexes for table `frecuencia`
--
ALTER TABLE `frecuencia`
  ADD PRIMARY KEY (`id_Frecuencia`);

--
-- Indexes for table `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_Imagen`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id_Producto`),
  ADD KEY `id_fabricante` (`id_fabricante`),
  ADD KEY `id_Sistema` (`id_Sistema`),
  ADD KEY `id_Pantalla` (`id_Pantalla`),
  ADD KEY `id_EleccionWifi` (`wifi`),
  ADD KEY `id_EleccionBluetooth` (`bluetooth`),
  ADD KEY `id_EleccionMicrofono` (`microfono`),
  ADD KEY `id_EleccionCamara` (`camara`),
  ADD KEY `id_EleccionAltavoces` (`altavoces`),
  ADD KEY `id_EleccionUnidadOptica` (`unidadOptica`),
  ADD KEY `id_FamiliaLaptop` (`id_Familia`),
  ADD KEY `id_Teclado` (`teclado`);

--
-- Indexes for table `pantalla`
--
ALTER TABLE `pantalla`
  ADD PRIMARY KEY (`id_Pantalla`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_Pedido`),
  ADD KEY `id_Producto` (`id_Producto`),
  ADD KEY `Id_Estado` (`id_Estado`),
  ADD KEY `Id_ClientePedido` (`id_Cliente`);

--
-- Indexes for table `procesador`
--
ALTER TABLE `procesador`
  ADD PRIMARY KEY (`id_Procesador`),
  ADD KEY `id_Familia` (`id_Familia`);

--
-- Indexes for table `resolucion`
--
ALTER TABLE `resolucion`
  ADD PRIMARY KEY (`id_Resolucion`);

--
-- Indexes for table `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id_Sexo`);

--
-- Indexes for table `sistema`
--
ALTER TABLE `sistema`
  ADD PRIMARY KEY (`id_Sistema`);

--
-- Indexes for table `tamaño`
--
ALTER TABLE `tamaño`
  ADD PRIMARY KEY (`id_Tamaño`);

--
-- Indexes for table `teclado`
--
ALTER TABLE `teclado`
  ADD PRIMARY KEY (`id_Teclado`);

--
-- Indexes for table `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id_Tipo`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_Tipousuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id_Bitacora` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_Carrito` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_Cliente` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=420;

--
-- AUTO_INCREMENT for table `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_Comentario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `descuento`
--
ALTER TABLE `descuento`
  MODIFY `id_des` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `deseo`
--
ALTER TABLE `deseo`
  MODIFY `id_Deseo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `eleccion`
--
ALTER TABLE `eleccion`
  MODIFY `id_Eleccion` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_Empleado` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT for table `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fabricante`
--
ALTER TABLE `fabricante`
  MODIFY `id_fabricante` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `familia`
--
ALTER TABLE `familia`
  MODIFY `id_Familia` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `frecuencia`
--
ALTER TABLE `frecuencia`
  MODIFY `id_Frecuencia` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_Imagen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id_Producto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=293;

--
-- AUTO_INCREMENT for table `pantalla`
--
ALTER TABLE `pantalla`
  MODIFY `id_Pantalla` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_Pedido` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `procesador`
--
ALTER TABLE `procesador`
  MODIFY `id_Procesador` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resolucion`
--
ALTER TABLE `resolucion`
  MODIFY `id_Resolucion` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id_Sexo` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sistema`
--
ALTER TABLE `sistema`
  MODIFY `id_Sistema` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tamaño`
--
ALTER TABLE `tamaño`
  MODIFY `id_Tamaño` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teclado`
--
ALTER TABLE `teclado`
  MODIFY `id_Teclado` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id_Tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `ClienteCarrito` FOREIGN KEY (`id_Cliente`) REFERENCES `cliente` (`id_Cliente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ProductoCarrito` FOREIGN KEY (`Id_Producto`) REFERENCES `laptop` (`id_Producto`) ON UPDATE CASCADE;

--
-- Constraints for table `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `id_SexoUsuario` FOREIGN KEY (`sexo`) REFERENCES `sexo` (`id_Sexo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `id_Tipousuario` FOREIGN KEY (`id_Tipousuario`) REFERENCES `usuario` (`id_Tipousuario`) ON UPDATE CASCADE;

--
-- Constraints for table `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `id_ClienteComentario` FOREIGN KEY (`id_Cliente`) REFERENCES `cliente` (`id_cliente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `id_ProductoComentario` FOREIGN KEY (`id_Producto`) REFERENCES `laptop` (`id_Producto`) ON UPDATE CASCADE;

--
-- Constraints for table `descuento`
--
ALTER TABLE `descuento`
  ADD CONSTRAINT `id_ProductoDescuento` FOREIGN KEY (`id_Producto`) REFERENCES `laptop` (`id_Producto`) ON UPDATE CASCADE;

--
-- Constraints for table `deseo`
--
ALTER TABLE `deseo`
  ADD CONSTRAINT `id_ClienteDeseo` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `id_ProductoDeseo` FOREIGN KEY (`id_Producto`) REFERENCES `laptop` (`id_Producto`) ON UPDATE CASCADE;

--
-- Constraints for table `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `id_SexoEmpelado` FOREIGN KEY (`sexo`) REFERENCES `sexo` (`id_Sexo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `id_TipousuarioEmpleado` FOREIGN KEY (`id_Tipousuario`) REFERENCES `usuario` (`id_Tipousuario`);

--
-- Constraints for table `laptop`
--
ALTER TABLE `laptop`
  ADD CONSTRAINT `id_EleccionAltavoces` FOREIGN KEY (`altavoces`) REFERENCES `eleccion` (`id_Eleccion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `id_EleccionBluetooth` FOREIGN KEY (`bluetooth`) REFERENCES `eleccion` (`id_Eleccion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `id_EleccionCamara` FOREIGN KEY (`camara`) REFERENCES `eleccion` (`id_Eleccion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `id_EleccionMicrofono` FOREIGN KEY (`microfono`) REFERENCES `eleccion` (`id_Eleccion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `id_EleccionUnidadOptica` FOREIGN KEY (`unidadOptica`) REFERENCES `eleccion` (`id_Eleccion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `id_EleccionWifi` FOREIGN KEY (`wifi`) REFERENCES `eleccion` (`id_Eleccion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `id_FamiliaLaptop` FOREIGN KEY (`id_Familia`) REFERENCES `familia` (`id_Familia`) ON UPDATE CASCADE,
  ADD CONSTRAINT `id_Pantalla` FOREIGN KEY (`id_Pantalla`) REFERENCES `pantalla` (`id_Pantalla`),
  ADD CONSTRAINT `id_Sistema` FOREIGN KEY (`id_Sistema`) REFERENCES `sistema` (`id_Sistema`),
  ADD CONSTRAINT `id_Teclado` FOREIGN KEY (`teclado`) REFERENCES `teclado` (`id_Teclado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `id_fabricante` FOREIGN KEY (`id_fabricante`) REFERENCES `fabricante` (`id_fabricante`) ON UPDATE CASCADE;

--
-- Constraints for table `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `id_ClientePedido` FOREIGN KEY (`id_Cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `id_Estado` FOREIGN KEY (`id_Estado`) REFERENCES `estado` (`id_estado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `id_ProductoPedido` FOREIGN KEY (`id_Producto`) REFERENCES `laptop` (`id_Producto`) ON UPDATE CASCADE;

--
-- Constraints for table `procesador`
--
ALTER TABLE `procesador`
  ADD CONSTRAINT `id_Familia` FOREIGN KEY (`id_Familia`) REFERENCES `familia` (`id_Familia`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
