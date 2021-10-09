-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2021 a las 02:54:47
-- Versión del servidor: 8.0.25
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `camza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banco_motivacional`
--

CREATE TABLE `banco_motivacional` (
  `banco_motivacional_tbl_id` int NOT NULL,
  `banco_motivacional_tbl_imagen` varchar(200) DEFAULT NULL,
  `banco_motivacional_tbl_activo` tinyint DEFAULT '1',
  `banco_motivacional_tbl_fecha_registro` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casos_reportados`
--

CREATE TABLE `casos_reportados` (
  `casos_reportados_tbl_id` int NOT NULL,
  `casos_reportados_tbl_anonimato` enum('si','no') DEFAULT NULL,
  `casos_reportados_tbl_nombre_cc` varchar(45) DEFAULT NULL,
  `casos_reportados_tbl_apellido_cc` varchar(20) DEFAULT NULL,
  `casos_reportados_tbl_vinculo` varchar(45) DEFAULT NULL,
  `casos_reportados_tbl_nombre` varchar(20) DEFAULT NULL,
  `casos_reportados_tbl_apellido` varchar(20) DEFAULT NULL,
  `casos_reportados_tbl_apodo` varchar(20) DEFAULT NULL,
  `casos_reportados_tbl_telefono` int DEFAULT NULL,
  `casos_reportados_tbl_ubicacion` varchar(20) DEFAULT NULL,
  `casos_reportados_tbl_evidencia` varchar(200) DEFAULT NULL,
  `casos_reportados_tbl_fecha_registro` datetime DEFAULT CURRENT_TIMESTAMP,
  `casos_reportados_tbl_activo` tinyint DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE `chat` (
  `chat_tbl_id` int NOT NULL,
  `chat_tbl_mensaje` varchar(45) DEFAULT NULL,
  `chat_tbl_activo` tinyint DEFAULT '1',
  `chat_tbl_fecha_registro` datetime DEFAULT CURRENT_TIMESTAMP,
  `chat_tbl_senderuser` int DEFAULT NULL,
  `chat_tbl_recieveruser` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entidad`
--

CREATE TABLE `entidad` (
  `entidad_tbl_id` int NOT NULL,
  `entidad_tbl_nombre` varchar(20) DEFAULT NULL,
  `entidad_tbl_fecha_registro` datetime DEFAULT CURRENT_TIMESTAMP,
  `entidad_tbl_activo` tinyint DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `especialidad_tbl_id` int NOT NULL,
  `especialidad_tbl_nombre` varchar(20) NOT NULL,
  `especialidad_tbl_descripcion` varchar(40) DEFAULT NULL,
  `especialidad_tbl_fecha_registro` datetime DEFAULT CURRENT_TIMESTAMP,
  `especialidad_tbl_activo` tinyint DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `estado_tbl_id` int NOT NULL,
  `estado_tbl_nombre` varchar(20) DEFAULT NULL,
  `estado_tbl_descripcion` varchar(45) DEFAULT NULL,
  `estado_tbl_fecha_registro` datetime DEFAULT CURRENT_TIMESTAMP,
  `estado_tbl_activo` tinyint DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foro`
--

CREATE TABLE `foro` (
  `foro_tbl_id` int NOT NULL,
  `foro_tbl_mensaje` varchar(45) DEFAULT NULL,
  `foro_tbl_activo` tinyint DEFAULT '1',
  `foro_tbl_fecha_registro` datetime DEFAULT CURRENT_TIMESTAMP,
  `foro_tbl_senderuser` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proceso`
--

CREATE TABLE `proceso` (
  `proceso_tbl_id` int NOT NULL,
  `proceso_tbl_droga` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `proceso_tbl_dosis` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `proceso_tbl_precio` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `proceso_tbl_fecha_consumo` date NOT NULL,
  `proceso_tbl_causa` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `proceso_tbl_razon` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `proceso_tbl_persona` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `proceso_tbl_ayuda` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `proceso_tbl_payuda` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `proceso_tbl_etapa` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `proceso_tbl_sueño` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `proceso_tbl_inspiracion` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `proceso_tbl_cambio` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `proceso_tbl_activo` tinyint DEFAULT '1',
  `proceso_tbl_fecha_registro` datetime DEFAULT CURRENT_TIMESTAMP,
  `usuarios_usuarios_tbl_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `proceso`
--

INSERT INTO `proceso` (`proceso_tbl_id`, `proceso_tbl_droga`, `proceso_tbl_dosis`, `proceso_tbl_precio`, `proceso_tbl_fecha_consumo`, `proceso_tbl_causa`, `proceso_tbl_razon`, `proceso_tbl_persona`, `proceso_tbl_ayuda`, `proceso_tbl_payuda`, `proceso_tbl_etapa`, `proceso_tbl_sueño`, `proceso_tbl_inspiracion`, `proceso_tbl_cambio`, `proceso_tbl_activo`, `proceso_tbl_fecha_registro`, `usuarios_usuarios_tbl_id`) VALUES
(1, 'Cannabis (Marihuana, Porro, Hierba)', '2', '40000', '2020-08-12', 'Gusto y experimentación', 'los panas', 'Mis amigos', 'no', 'nadie', 'Etapa Dependiente', '', '', '', 1, '2021-09-24 17:06:31', NULL),
(2, 'Cannabis (Marihuana, Porro, Hierba)', '2', '40000', '2020-08-12', 'Gusto y experimentación', 'los panas', 'Mis amigos', 'no', 'nadie', 'Etapa Dependiente', 'mi vieja', 'mi viejo', 'comprar una casa para mi vieja', 1, '2021-09-24 17:07:42', NULL),
(3, 'Cannabis (Marihuana, Porro, Hierba)', '8', '3000', '2021-09-09', 'Gusto y experimentación', 'los panas', 'Mis compañeros de clase', 'si', 'yo', 'Etapa Disfuncional', 'mi familia', 'mi familia', 'mi familia', 1, '2021-09-24 19:22:16', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `roles_tbl_id` int NOT NULL,
  `roles_tbl_nombre` varchar(20) NOT NULL,
  `roles_tbl_fecha_registro` datetime DEFAULT CURRENT_TIMESTAMP,
  `roles_tbl_activo` tinyint DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuarios_tbl_id` int NOT NULL,
  `usuarios_tbl_nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `usuarios_tbl_apellido` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `usuarios_tbl_genero` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `usuarios_tbl_fecha_nacimiento` date NOT NULL,
  `usuarios_tbl_email` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `usuarios_tbl_username` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `usuarios_tbl_password` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `usuarios_tbl_activo` tinyint DEFAULT '1',
  `usuarios_tbl_fecha_registro` datetime DEFAULT CURRENT_TIMESTAMP,
  `roles_roles_tbl_id` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuarios_tbl_id`, `usuarios_tbl_nombre`, `usuarios_tbl_apellido`, `usuarios_tbl_genero`, `usuarios_tbl_fecha_nacimiento`, `usuarios_tbl_email`, `usuarios_tbl_username`, `usuarios_tbl_password`, `usuarios_tbl_activo`, `usuarios_tbl_fecha_registro`, `roles_roles_tbl_id`) VALUES
(1, 'juan', 'villada', 'on', '2021-09-03', 'ep0322937@gmail.com', 'maria', 'root', 1, '2021-09-21 20:22:30', 1),
(2, 'maria jose', 'vallejo gonzales', 'on', '2004-08-14', 'cuentasff96@gmail.com', 'maria', '5489f74ef9218be451cec32be72fa541', 1, '2021-09-21 20:25:30', 1),
(3, 'majo', 'vallejo González', 'on', '2004-08-14', 'juancamilosanchezvillada@gmail.com', 'majo080221', '12361082b51acd3de8c6345c6b5fd389', 1, '2021-09-21 20:52:11', 1),
(4, 'juan', 'villada', 'on', '2021-09-10', 'cesarvillada15@hotmail.com', 'maria', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2021-09-21 22:52:04', 1),
(5, 'jorge', 'gaitan', 'on', '2021-09-02', 'gladiselenavilladalopez426@gmail.com', 'tilin', '2a65a4f0460410b6d99d9384a0e5b65a', 1, '2021-09-21 23:14:00', 1),
(6, 'tilin', 'orozco', 'on', '2021-09-21', 'cuentasff96@gmail.com', 'majo', 'd827f12e35eae370ba9c65b7f6026695', 1, '2021-09-21 23:17:09', 1),
(7, 'Jonatan Estiven', 'Rendon Álvarez', 'on', '2021-09-03', 'cesarvillada15@hotmail.com', 'jony', 'fcea920f7412b5da7be0cf42b8c93759', 1, '2021-09-22 06:47:49', 1),
(8, 'juan camilo', 'sanchez cillada', 'Masculino', '2003-11-23', 'juancamilosanchezvillada@gmail.com', 'juanca', 'e10adc3949ba59abbe56e057f20f883e', 1, '2021-09-24 17:44:46', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `valoracion_tbl_id` int NOT NULL,
  `valoracion_tbl_estrellas` int DEFAULT NULL,
  `valoracion_tbl_activo` tinyint DEFAULT '1',
  `valoracion_tbl_fecha_registro` datetime DEFAULT CURRENT_TIMESTAMP,
  `usuarios_usuarios_tbl_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banco_motivacional`
--
ALTER TABLE `banco_motivacional`
  ADD PRIMARY KEY (`banco_motivacional_tbl_id`);

--
-- Indices de la tabla `casos_reportados`
--
ALTER TABLE `casos_reportados`
  ADD PRIMARY KEY (`casos_reportados_tbl_id`);

--
-- Indices de la tabla `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_tbl_id`);

--
-- Indices de la tabla `entidad`
--
ALTER TABLE `entidad`
  ADD PRIMARY KEY (`entidad_tbl_id`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`especialidad_tbl_id`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`estado_tbl_id`);

--
-- Indices de la tabla `foro`
--
ALTER TABLE `foro`
  ADD PRIMARY KEY (`foro_tbl_id`);

--
-- Indices de la tabla `proceso`
--
ALTER TABLE `proceso`
  ADD PRIMARY KEY (`proceso_tbl_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roles_tbl_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuarios_tbl_id`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`valoracion_tbl_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banco_motivacional`
--
ALTER TABLE `banco_motivacional`
  MODIFY `banco_motivacional_tbl_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `casos_reportados`
--
ALTER TABLE `casos_reportados`
  MODIFY `casos_reportados_tbl_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_tbl_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `especialidad_tbl_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `foro`
--
ALTER TABLE `foro`
  MODIFY `foro_tbl_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proceso`
--
ALTER TABLE `proceso`
  MODIFY `proceso_tbl_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `roles_tbl_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuarios_tbl_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  MODIFY `valoracion_tbl_id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
