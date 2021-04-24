-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-04-2021 a las 05:12:33
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `workout`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(60) NOT NULL,
  `apellido_cliente` varchar(60) NOT NULL,
  `email_cliente` varchar(60) NOT NULL,
  `fecha_nacimiento_cliente` date NOT NULL,
  `telefono_cliente` varchar(15) NOT NULL,
  `gimnasio_cliente` int(11) NOT NULL,
  `url_imagen_cliente` varchar(100) NOT NULL,
  `fecha_creacion_cliente` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre_cliente`, `apellido_cliente`, `email_cliente`, `fecha_nacimiento_cliente`, `telefono_cliente`, `gimnasio_cliente`, `url_imagen_cliente`, `fecha_creacion_cliente`) VALUES
(20, 'Eliseo', 'VM', 'eliseo-01@gmail.com', '2021-12-31', '9981505702', 65, '127162643_10159108904568217_5842463868241141841_n.jpg', NULL),
(21, 'Juan', 'VM', 'eliseo-01@gmail.com', '2020-11-14', '9981505702', 64, '122678745_2762713470669451_2203428614279550983_o.jpg', NULL),
(22, 'Pepe', 'VM', 'eliseo-01@gmail.com', '2020-11-10', '9981505702', 72, 'Sin título111.png', NULL),
(23, 'Alex', 'VM', 'eliseo-01@gmail.com', '2020-11-03', '9981505702', 66, 'Sin título111.png', NULL),
(26, 'Carlos', 'VM', 'eliseo-01@gmail.com', '2020-11-10', '9981505702', 66, '122678745_2762713470669451_2203428614279550983_o.jpg', NULL),
(27, 'Itzel', 'VM', 'eliseo-01@gmail.com', '2020-11-14', '9981505702', 66, 'Sin título111.png', NULL),
(28, 'Lucia', 'VM', 'eliseo-01@gmail.com', '1994-07-19', '9981505702', 68, '123140339_1519457401589137_5102889472902390156_n.jpg', NULL),
(29, 'Omar', 'VM', 'eliseo-01@gmail.com', '2020-11-03', '9981505702', 67, '20190609_112611.jpg', NULL),
(30, 'Astrid', 'VM', 'eliseo-01@gmail.com', '1994-07-19', '9981505702', 72, '122708132_1000704930432221_3500663975623121294_o.jpg', NULL),
(31, 'Fanny', 'VM', 'ultima@ultima.com', '2020-11-02', '9981505702', 66, '123049280_184397109906000_7453044576460053003_o.jpg', NULL),
(32, 'Federico', 'VM', 'juan@juan.com', '2020-11-02', '9981-5057-02', 66, '118988454_322259409191532_9047549356402945931_o.jpg', NULL),
(33, 'Ariel', 'VM', 'eliseo-01@gmail.com', '2020-11-03', '9981505702', 67, '108031076_10208153574434112_6700955287415195789_o.jpg', NULL),
(34, 'Lucia', 'Alamilla', 'eliseo-01@gmail.com', '2020-11-02', '9981-5057-02', 73, '108031076_10208153574434112_6700955287415195789_o.jpg', NULL),
(35, 'Beatriz', 'Juarez', 'eliseo-01@gmail.com', '2020-11-18', '9981-5057-02', 64, '113242783_10208175112172542_1332820974758870271_o.jpg', NULL),
(36, 'Ana', 'Dell', 'eliseo-01@gmail.com', '1994-07-19', '9981505702', 71, '127162643_10159108904568217_5842463868241141841_n.jpg', NULL),
(39, 'Logi Logi', 'Logi', 'logi@logi.com', '2021-01-20', '9981505050', 76, 'aprender-ingles.jpg', NULL),
(40, 'Fede', 'Perez', 'logi@logi.com', '2021-01-27', '9981505050', 64, 'unnamed.jpg', NULL),
(42, 'Microsoft', 'Corporation', 'eliseo-01@gmail.com', '2021-02-24', '9981505050', 76, 'platzi.jpg', NULL),
(44, 'Alma', 'China', 'logi@logi.com', '2021-01-20', '9981505050', 76, 'eb7710e28b66bc1bfa26e60c0426cf0e.jpg', NULL),
(45, 'Propiedad', 'propiedad', 'logi@logi.com', '2021-01-20', '9981505050', 65, 'unnamed.jpg', NULL),
(46, 'Guadalupe', 'Tijuana', 'eliseo-01@gmail.com', '2021-01-20', '9981505050', 65, 'brackets-linguales-preguntas-frecuentes.jpg', NULL),
(47, 'Luz', 'Nieto', 'eliseo-01@gmail.com', '2021-01-20', '9981505050', 65, 'maxresdefault.jpg', NULL),
(48, 'Nvidia', 'Nvidia', 'nvidia@nvidia.com', '2021-02-24', '9981505050', 64, 'platzi.jpg', NULL),
(49, 'Luis', 'Paca', '', '2021-03-24', '', 64, 'pantalla-muy-larga-gaming-1024x576.jpg', NULL),
(50, 'Pepe', 'Juarez', 'juarez@alave.com.mx', '2020-09-09', '9981505702', 76, '', NULL),
(51, 'Pepita', 'Nana', '', '2020-05-20', '9981505702', 79, '', NULL),
(52, 'Pepe', 'Mujica', 'paragua@paraguay.com', '2021-04-24', '9981505702', 64, '1366_200350.jpg', NULL),
(53, 'Clark', 'Kent', 'superman@superman.com', '2021-04-12', '9981505702', 64, 'aprender-ingles.jpg', '2021-04-18');

--
-- Disparadores `cliente`
--
DELIMITER $$
CREATE TRIGGER `pago_ai` AFTER INSERT ON `cliente` FOR EACH ROW INSERT INTO pago(nombre_cliente_pago)
VALUES (NEW.id_cliente)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada_salida`
--

CREATE TABLE `entrada_salida` (
  `id_entrada_salida` int(11) NOT NULL,
  `cliente_entrada_salida` int(11) NOT NULL,
  `fecha_entrada_salida` date NOT NULL,
  `e_s` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entrada_salida`
--

INSERT INTO `entrada_salida` (`id_entrada_salida`, `cliente_entrada_salida`, `fecha_entrada_salida`, `e_s`) VALUES
(43, 20, '2021-01-03', '17:03:27'),
(44, 20, '2021-01-03', '17:03:31'),
(46, 21, '2021-01-03', '17:03:40'),
(47, 21, '2021-01-03', '17:03:44'),
(48, 47, '2021-01-08', '20:37:32'),
(49, 47, '2021-01-08', '20:39:16'),
(52, 46, '2021-01-08', '20:39:45'),
(53, 46, '2021-01-08', '20:40:36'),
(54, 46, '2021-01-08', '20:40:37'),
(55, 46, '2021-01-08', '20:40:39'),
(56, 46, '2021-01-08', '20:42:10'),
(57, 46, '2021-01-08', '20:42:11'),
(58, 46, '2021-01-08', '20:42:12'),
(59, 46, '2021-01-08', '20:42:19'),
(60, 46, '2021-01-08', '20:42:20'),
(61, 46, '2021-01-08', '20:42:20'),
(62, 46, '2021-01-08', '20:42:30'),
(63, 20, '2021-01-08', '20:52:18'),
(64, 20, '2021-01-08', '20:53:11'),
(65, 20, '2021-01-08', '20:54:38'),
(66, 20, '2021-01-08', '20:58:21'),
(67, 20, '2021-01-08', '21:00:22'),
(68, 21, '2021-01-08', '21:01:19'),
(69, 21, '2021-01-08', '21:02:26'),
(70, 45, '2021-01-09', '14:41:09'),
(71, 22, '2021-01-12', '21:23:18'),
(72, 22, '2021-01-12', '21:23:57'),
(73, 48, '2021-01-12', '21:27:23'),
(74, 48, '2021-01-12', '21:27:26'),
(75, 48, '2021-01-13', '21:50:07'),
(76, 48, '2021-01-13', '21:50:24'),
(77, 34, '2021-01-16', '22:12:42'),
(78, 21, '2021-01-19', '23:08:00'),
(80, 21, '2021-02-04', '22:09:35'),
(81, 21, '2021-02-04', '22:11:15'),
(82, 21, '2021-03-09', '21:34:34'),
(83, 35, '2021-03-09', '22:00:08'),
(84, 21, '2021-03-14', '21:23:11'),
(85, 20, '2021-04-18', '12:57:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id_pago` int(11) NOT NULL,
  `nombre_cliente_pago` int(11) NOT NULL,
  `cobertura_pago` date DEFAULT NULL,
  `pago` decimal(9,2) DEFAULT NULL,
  `fecha_creacion_pago` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`id_pago`, `nombre_cliente_pago`, `cobertura_pago`, `pago`, `fecha_creacion_pago`) VALUES
(1, 20, NULL, NULL, NULL),
(2, 21, NULL, NULL, NULL),
(3, 22, NULL, NULL, NULL),
(4, 23, NULL, NULL, NULL),
(5, 26, NULL, NULL, NULL),
(6, 27, NULL, NULL, NULL),
(7, 28, NULL, NULL, NULL),
(8, 29, NULL, NULL, NULL),
(9, 30, NULL, NULL, NULL),
(10, 31, NULL, NULL, NULL),
(11, 32, NULL, NULL, NULL),
(12, 33, NULL, NULL, NULL),
(13, 34, NULL, NULL, NULL),
(14, 35, NULL, NULL, NULL),
(15, 36, NULL, NULL, NULL),
(16, 39, NULL, NULL, NULL),
(17, 40, NULL, NULL, NULL),
(18, 42, NULL, NULL, NULL),
(19, 44, NULL, NULL, NULL),
(20, 45, NULL, NULL, NULL),
(21, 46, NULL, NULL, NULL),
(22, 47, NULL, NULL, NULL),
(23, 48, NULL, NULL, NULL),
(24, 49, NULL, NULL, NULL),
(25, 50, NULL, NULL, NULL),
(26, 51, NULL, NULL, NULL),
(27, 52, NULL, NULL, NULL),
(28, 53, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_registro` int(11) NOT NULL,
  `email_registro` varchar(60) NOT NULL,
  `password_registro` varchar(60) NOT NULL,
  `gimnasio_registro` varchar(60) NOT NULL,
  `nombre_registro` varchar(60) NOT NULL,
  `apellido_registro` varchar(60) NOT NULL,
  `sexo_registro` varchar(20) NOT NULL,
  `fecha_creacion_registro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_registro`, `email_registro`, `password_registro`, `gimnasio_registro`, `nombre_registro`, `apellido_registro`, `sexo_registro`, `fecha_creacion_registro`) VALUES
(64, 'eliseo-01@gmail.com', '$2y$12$O5SgNF3wr.kk7rPUTy0ut.iVttGAexjwAh3wWi2rCjXUA7LFSpnkO', 'Tortuga', '', '', '', NULL),
(65, 'eliseo-02@gmail.com', '$2y$12$D5O5gzydiyG50ecukJ5/uOsnDsIzjTgW2frdSi5PQGNmXtpC2SGp.', 'Gato', '', '', '', NULL),
(66, 'eliseo-03@gmail.com', '$2y$12$Ukui5/HWpBFNkm0XcFqDtu.AhVn/XAA7oX1GuJTgSdcFaoMtEwH7e', 'Serpiente', '', '', '', NULL),
(67, 'eliseo-05@gmail.com', '$2y$12$PXHeRoImIST2G/ZgFE890.Wn62uRC7oKPrDu1US290OYQOQW0Vg4y', 'Gorila', '', '', '', NULL),
(68, 'eliseo-04@gmail.com', '$2y$12$BQ4O.sx49Bmx7Q8IxpmWhuvSRODjJ/Tm4p.FS5wkHdoe5aZnLxZhW', 'Tiburon', '', '', '', NULL),
(69, 'eliseo-06@gmail.com', '$2y$12$laB.yj.2D3MoBsImVk9sHOsm6EnsiwPNLJqCRpKTLf6bTB9pGe9y2', 'Delfin', '', '', '', NULL),
(70, 'eliseo-07@gmail.com', '$2y$12$9RmyBrBNoJEIihMBkSzuq.taXU01q2EkDn5i/K5/SwuAAQoL5z2yW', 'Pez', '', '', '', NULL),
(71, 'eliseo-08@gmail.com', '$2y$12$n08M1A6ItbCYqh8PDSOfcuRkGKflLMDbTXRPUXlyF8RYExGcws6iu', 'Ballena', '', '', '', NULL),
(72, 'eliseo-09@gmail.com', '$2y$12$nC1vnra3JAjYlP0bYtkmQegcMzNwrntC.dleE6SqrHq5EnGS8dG12', 'Raton', '', '', '', NULL),
(73, 'eliseo-10@gmail.com', '$2y$12$1vVvzGXTHiQokg/Rs4OWjOqusJNyCnLtK3BtJkev.2SECMwKORGyS', 'Ardilla', '', '', '', NULL),
(74, 'eliseo-23@gmail.com', '$2y$12$ZSWEaJ9NyWrUgD4FeiGc2OUrVBG0dwyTKn3iW9gCvSk.7e26iKtTi', 'Pajaro', '', '', '', NULL),
(75, 'eliseo-25@gmail.com', '$2y$12$oh1lZpTQfJHENNeNNPdhh.p0jJ7WtGwhwT.XJuqAdy/rcJlJ37hc.', 'Gusano', '', '', '', NULL),
(76, 'yuilucy08@gmail.com', '$2y$12$csWDXud3MbhEbGFApeS.FeAgRD6Tw/GABf1mGqKzLD6aM.T07yv.q', 'Perro', '', '', '', NULL),
(77, 'yuilucy08@gmail.com', '$2y$12$2AKkq7AYWTh7gyn9zuSAVekWXy1rROMJoe4NzrPjeYpX7dMKeQxeu', 'Titan', '', '', '', NULL),
(78, 'admin@admin.com', '$2y$12$ZRJPsQFiUkum7eKLU8gyFeSYDrrtsXfTPVNgdwdkca8N03L6fbZ4i', 'Gallo', '', '', '', NULL),
(79, 'eliseo@eliseo.com', '$2y$12$huQcB8TC8qtrUiB0LTV8UuWljZLGnzHo7aXKBQ700jEa0XMyr/QQ6', 'Paloma', '', '', '', NULL),
(80, 'eliseo99@hotmail.com', '$2y$12$6KSL.P8OmkMdRDspJmDi6.WPmXFFn8Rq0TnWqmdg248MhJWIZt55G', 'Tucanes', '', '', '', '2021-04-18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `gimnasio_cliente` (`gimnasio_cliente`);

--
-- Indices de la tabla `entrada_salida`
--
ALTER TABLE `entrada_salida`
  ADD PRIMARY KEY (`id_entrada_salida`),
  ADD KEY `cliente_entrada_salida` (`cliente_entrada_salida`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `nombre_cliente_pago` (`nombre_cliente_pago`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_registro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `entrada_salida`
--
ALTER TABLE `entrada_salida`
  MODIFY `id_entrada_salida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`gimnasio_cliente`) REFERENCES `registro` (`id_registro`);

--
-- Filtros para la tabla `entrada_salida`
--
ALTER TABLE `entrada_salida`
  ADD CONSTRAINT `entrada_salida_ibfk_1` FOREIGN KEY (`cliente_entrada_salida`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `pago_ibfk_1` FOREIGN KEY (`nombre_cliente_pago`) REFERENCES `cliente` (`id_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
