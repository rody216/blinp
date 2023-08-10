-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 08-08-2023 a las 19:49:51
-- Versión del servidor: 8.0.31
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `apsystem`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `academicos`
--

DROP TABLE IF EXISTS `academicos`;
CREATE TABLE IF NOT EXISTS `academicos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `institucion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nivel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `titulo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `academicos`
--

INSERT INTO `academicos` (`id`, `institucion`, `nivel`, `titulo`, `fecha`) VALUES
(1, ' Universidad Internacional de la Rioja', 'Doctorado', 'Doctorado', '2023-07-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `created_on`, `role`) VALUES
(1, 'admin', '$2y$10$UrGSvHTWm8.ZK4BzPmo8iuqsK6XF5RfHay6ooC5D50y/nShon5wqe', 'Admin', 'Admin', 'Matrix rojo.gif', '2019-12-18', 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_permissions`
--

DROP TABLE IF EXISTS `admin_permissions`;
CREATE TABLE IF NOT EXISTS `admin_permissions` (
  `admin_id` int NOT NULL,
  `permission_id` int NOT NULL,
  PRIMARY KEY (`admin_id`,`permission_id`),
  KEY `permission_id` (`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentesponal`
--

DROP TABLE IF EXISTS `antecedentesponal`;
CREATE TABLE IF NOT EXISTS `antecedentesponal` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `resultado` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fechaActualizacion` timestamp NULL DEFAULT NULL,
  `personas_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `antecedentesponal`
--

INSERT INTO `antecedentesponal` (`id`, `fecha`, `hora`, `resultado`, `fechaActualizacion`, `personas_id`) VALUES
(2, '2023-06-20', '09:45:00', 'Negativo', '2023-07-27 22:30:00', 102),
(3, '2023-07-10', '18:15:00', 'Positivo', '2023-07-27 23:00:00', 103);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arl`
--

DROP TABLE IF EXISTS `arl`;
CREATE TABLE IF NOT EXISTS `arl` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `personas_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `arl`
--

INSERT INTO `arl` (`id`, `nombre`, `personas_id`) VALUES
(1, 'ARL Colmena', 101),
(2, 'ARL Seguros Bolívar', 102),
(3, 'ARL Positiva', 103);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `id` int NOT NULL AUTO_INCREMENT,
  `employee_id` int NOT NULL,
  `date` date NOT NULL,
  `time_in` time NOT NULL,
  `status` int NOT NULL,
  `time_out` time NOT NULL,
  `num_hr` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `attendance`
--

INSERT INTO `attendance` (`id`, `employee_id`, `date`, `time_in`, `status`, `time_out`, `num_hr`) VALUES
(119, 24, '2020-01-07', '10:11:26', 0, '00:00:00', 0),
(120, 25, '2020-01-07', '10:17:04', 0, '00:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bancarios`
--

DROP TABLE IF EXISTS `bancarios`;
CREATE TABLE IF NOT EXISTS `bancarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `entidad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tipoProducto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `numeroProducto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `archivo` blob,
  `personas_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajacompensacion`
--

DROP TABLE IF EXISTS `cajacompensacion`;
CREATE TABLE IF NOT EXISTS `cajacompensacion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `personas_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cajacompensacion`
--

INSERT INTO `cajacompensacion` (`id`, `nombre`, `personas_id`) VALUES
(1, 'Caja Compensación ABC', 101),
(2, 'Caja Compensación XYZ', 102),
(3, 'Caja Compensación 123', 103);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cashadvance`
--

DROP TABLE IF EXISTS `cashadvance`;
CREATE TABLE IF NOT EXISTS `cashadvance` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date_advance` date NOT NULL,
  `employee_id` varchar(15) NOT NULL,
  `amount` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cashadvance`
--

INSERT INTO `cashadvance` (`id`, `date_advance`, `employee_id`, `amount`) VALUES
(1, '2020-01-07', '25', 50000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deductions`
--

DROP TABLE IF EXISTS `deductions`;
CREATE TABLE IF NOT EXISTS `deductions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  `amount` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `deductions`
--

INSERT INTO `deductions` (`id`, `description`, `amount`) VALUES
(5, 'Pago de EPS 4%', 2500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `delitos`
--

DROP TABLE IF EXISTS `delitos`;
CREATE TABLE IF NOT EXISTS `delitos` (
  `delito_id` int NOT NULL AUTO_INCREMENT,
  `delito_nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`delito_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `delitos`
--

INSERT INTO `delitos` (`delito_id`, `delito_nombre`) VALUES
(1, 'Robo'),
(2, 'Homicidio'),
(3, 'Lesiones personales'),
(4, 'Estafa'),
(5, 'Tráfico de drogas');

-- --------------------------------------------------------

DROP TABLE IF EXISTS `paises`;
CREATE TABLE IF NOT EXISTS `paises` (
  `id` int NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id`, `nombre`) VALUES
(1, 'Colombia'),
(2, 'Ecuador'),
(3, 'Venezuela');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

DROP TABLE IF EXISTS `departamentos`;
CREATE TABLE IF NOT EXISTS `departamentos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `paises_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre`, `paises_id`) VALUES
(1, 'Amazonas', 1),
(2, 'Antioquia', 1),
(3, 'Arauca', 1),
(4, 'Archipielago De San Andres Y Providencia', 1),
(5, 'Atlantico', 1),
(6, 'Bogota D.C', 1),
(7, 'Bolivar', 1),
(8, 'Boyaca', 1),
(9, 'Caldas', 1),
(10, 'Caqueta', 1),
(11, 'Casanare', 1),
(12, 'Cauca', 1),
(13, 'Cesar', 1),
(14, 'Choco', 1),
(15, 'Cordoba', 1),
(16, 'Cundinamarca', 1),
(17, 'Guainia', 1),
(18, 'Guaviare', 1),
(19, 'Huila', 1),
(20, 'La Guajira', 1),
(21, 'Magdalena', 1),
(22, 'Meta', 1),
(23, 'Narino', 1),
(24, 'Norte De Santander', 1),
(25, 'Putumayo', 1),
(26, 'Quindio', 1),
(27, 'Risaralda', 1),
(28, 'Santander', 1),
(29, 'Sucre', 1),
(30, 'Tolima', 1),
(31, 'Valle Del Cauca', 1),
(32, 'Vaupes', 1),
(33, 'Vichada', 1),
(34, 'Ambato', 2),
(35, 'Azuay', 2),
(36, 'Bolivar', 2),
(37, 'Canar', 2),
(38, 'Carchi', 2),
(39, 'Chimborazo', 2),
(40, 'Cotopaxi', 2),
(41, 'Ecuador', 2),
(42, 'El Oro', 2),
(43, 'Esmeraldas', 2),
(44, 'Galapagos', 2),
(45, 'Guayas', 2),
(46, 'Imbabura', 2),
(47, 'Loja', 2),
(48, 'Los Rios', 2),
(49, 'Manabi', 2),
(50, 'Morona Santiago', 2),
(51, 'Napo', 2),
(52, 'Orellana', 2),
(53, 'Pastaza', 2),
(54, 'Pichincha', 2),
(55, 'Quito', 2),
(56, 'Santa Elena', 2),
(57, 'Santo Domingo De Los Tsachilas', 2),
(58, 'Sucumbios', 2),
(59, 'Tungurahua', 2),
(60, 'Zamora Chinchipe', 2),
(61, 'Zonas No Delimitadas', 2),
(62, 'Amazonas', 3),
(63, 'Anzoategui', 3),
(64, 'Apure', 3),
(65, 'Aragua', 3),
(66, 'Barinas', 3),
(67, 'Bolivar', 3),
(68, 'Carabobo', 3),
(69, 'Caracas', 3),
(70, 'Cojedes', 3),
(71, 'Delta Amacuro', 3),
(72, 'Districo Capital', 3),
(73, 'Falcon', 3),
(74, 'Guarico', 3),
(75, 'Lara', 3),
(76, 'Merida', 3),
(77, 'Miranda', 3),
(78, 'Monogas', 3),
(79, 'Nueva Esparta', 3),
(80, 'Portuguesa', 3),
(81, 'Sucre', 3),
(82, 'Tachira', 3),
(83, 'Trujillo', 3),
(84, 'Vargas', 3),
(85, 'Venezuela', 3),
(86, 'Yaracuy', 3),
(87, 'Zulia', 3);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disciplinarios`
--

DROP TABLE IF EXISTS `disciplinarios`;
CREATE TABLE IF NOT EXISTS `disciplinarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `infraccion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `correctivo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `obs` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pdf` blob,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `disciplinarios`
--

INSERT INTO `disciplinarios` (`id`, `infraccion`, `correctivo`, `fecha`, `obs`, `pdf`) VALUES
(1, 'Incumplimiento de normas internas', 'Amonestación escrita', '2023-07-15', 'Falta leve', NULL),
(2, 'Falta de puntualidad', 'Suspensión temporal', '2023-06-20', 'Falta moderada', NULL),
(3, 'Conducta inapropiada', 'Terminación de contrato', '2023-07-10', 'Falta grave', NULL),
(4, 'Robo', 'Carcel', '2023-08-08', 'Se metio  a la carcel', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(15) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `municipality` varchar(50) NOT NULL,
  `expedition_date` date NOT NULL,
  `document_number` date NOT NULL,
  `address` text NOT NULL,
  `birthdate` date NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `position_id` int NOT NULL,
  `schedule_id` int NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`id`, `employee_id`, `firstname`, `lastname`, `country`, `department`, `municipality`, `expedition_date`, `document_number`, `address`, `birthdate`, `contact_info`, `gender`, `position_id`, `schedule_id`, `photo`, `created_on`) VALUES
(24, 'MAW817094635', 'Abelardo', 'Mejia', 'País1', 'Departamento1', 'Municipio1', '1989-07-12', '0000-00-00', 'Calle 54 N 12-23', '1989-07-12', 'Contacto1', 'Female', 2, 2, 'Screenshot_10.png', '2020-01-07'),
(26, 'LMX384296175', 'Liady', 'Martinez', '', '', '', '0000-00-00', '0000-00-00', 'Cl. 32a Nte. ### 2a-37, Cali, Valle del Cauca\r\nApto 403 Torre B', '2023-02-28', 'Cl. 32a Nte. ### 2a-37, Cali, Valle del Cauca', 'Female', 0, 4, 'logout1.png', '2023-08-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eps`
--

DROP TABLE IF EXISTS `eps`;
CREATE TABLE IF NOT EXISTS `eps` (
  `id` int NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `personas_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `eps`
--

INSERT INTO `eps` (`id`, `nombre`, `personas_id`) VALUES
(1, 'EPS SaludTotal', 101),
(2, 'EPS Coomeva', 102),
(3, 'EPS Sura', 103);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fondopension`
--

DROP TABLE IF EXISTS `fondopension`;
CREATE TABLE IF NOT EXISTS `fondopension` (
  `id` int NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `personas_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fondopension`
--

INSERT INTO `fondopension` (`id`, `nombre`, `personas_id`) VALUES
(1, 'Fondo Pensiones ABC', 101),
(2, 'Fondo Pensiones XYZ', 102),
(3, 'Fondo Pensiones 123', 103);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto`
--

DROP TABLE IF EXISTS `foto`;
CREATE TABLE IF NOT EXISTS `foto` (
  `id` int NOT NULL,
  `foto` blob,
  `fechaFotografia` date DEFAULT NULL,
  `fechaActualizacion` timestamp NULL DEFAULT NULL,
  `personas_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gsanguineo`
--

DROP TABLE IF EXISTS `gsanguineo`;
CREATE TABLE IF NOT EXISTS `gsanguineo` (
  `id` int NOT NULL,
  `grupo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `personas_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `personas_id` (`personas_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `gsanguineo`
--

INSERT INTO `gsanguineo` (`id`, `grupo`, `rh`, `personas_id`, `created_at`) VALUES
(1, 'A', '+', 101, '2023-07-15 10:30:00'),
(2, 'B', '-', 102, '2023-06-20 11:45:00'),
(3, 'AB', '+', 103, '2023-07-10 09:15:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `icth`
--

DROP TABLE IF EXISTS `icth`;
CREATE TABLE IF NOT EXISTS `icth` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipo_Examen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `archivo` blob,
  `personas_id` int DEFAULT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `icth`
--

INSERT INTO `icth` (`id`, `tipo_Examen`, `fecha`, `archivo`, `personas_id`, `fechaCreacion`) VALUES
(6, 'Antecedentes', '2023-07-30', 0x6c6f676f7574312e706e67, NULL, '2023-07-30 22:06:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juridicos`
--

DROP TABLE IF EXISTS `juridicos`;
CREATE TABLE IF NOT EXISTS `juridicos` (
  `id` int NOT NULL,
  `noticia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `calidad` date DEFAULT NULL,
  `delito` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hechos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `archivo` blob,
  `personas_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `juridicos`
--

INSERT INTO `juridicos` (`id`, `noticia`, `calidad`, `delito`, `hechos`, `fecha`, `archivo`, `personas_id`) VALUES
(1, 'Robo en la Calle Principal', '2023-07-15', 'Robo', 'Dos individuos con máscaras robaron una tienda de conveniencia en la Calle Principal.', '2023-07-15', NULL, 101),
(2, 'Agresión en el Parque de la Ciudad', '2023-07-20', 'Agresión', 'Ocurrió una pelea física entre dos grupos en el Parque de la Ciudad.', '2023-07-20', NULL, 102),
(3, 'Caso de Malversación', '2023-06-30', 'Malversación', 'Se acusó a un empleado de malversar fondos de la empresa.', '2023-06-30', NULL, 103);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mmpponal`
--

DROP TABLE IF EXISTS `mmpponal`;
CREATE TABLE IF NOT EXISTS `mmpponal` (
  `id` int NOT NULL,
  `fechaHechos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lugarHechos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `articulo` int DEFAULT NULL,
  `numeral` int DEFAULT NULL,
  `ampliacionHechos` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `descargos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `conciliaciones` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `documento` blob,
  `fechaActualizacion` timestamp NULL DEFAULT NULL,
  `personas_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mmpponal`
--

INSERT INTO `mmpponal` (`id`, `fechaHechos`, `lugarHechos`, `articulo`, `numeral`, `ampliacionHechos`, `descargos`, `conciliaciones`, `documento`, `fechaActualizacion`, `personas_id`) VALUES
(1, '2023-07-15', 'Calle 123', 123, 1, 'Ampliación de los hechos...', 'Descargos presentados...', 'Se llegó a una conciliación...', NULL, '2023-07-27 20:00:00', 101),
(2, '2023-06-20', 'Avenida ABC', 456, 2, 'Ampliación de los hechos...', 'Descargos presentados...', 'No hubo conciliación...', NULL, '2023-07-27 20:30:00', 102),
(3, '2023-07-10', 'Carretera XYZ', 789, 3, 'Ampliación de los hechos...', 'Descargos presentados...', 'Se llegó a una conciliación parcial...', NULL, '2023-07-27 21:00:00', 103);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

DROP TABLE IF EXISTS `municipios`;
CREATE TABLE IF NOT EXISTS `municipios` (
  `id` int NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `departamentos_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id`, `nombre`, `departamentos_id`) VALUES
(1, 'El Encanto', 1),
(2, 'La Chorrera', 1),
(3, 'La Pedrera', 1),
(4, 'La Victoria', 1),
(5, 'Leticia', 1),
(6, 'Miriti  ( Paraná)', 1),
(7, 'Puerto Alegría', 1),
(8, 'Puerto Arica', 1),
(9, 'Puerto Nariño', 1),
(10, 'Puerto Santander', 1),
(11, 'Tarapacá', 1),
(12, 'Abejorral', 2),
(13, 'Abriaquí', 2),
(14, 'Alejandría', 2),
(15, 'Amagá', 2),
(16, 'Amalfi', 2),
(17, 'Andes', 2),
(18, 'Angelópolis', 2),
(19, 'Angostura', 2),
(20, 'Anorí', 2),
(21, 'Anza', 2),
(22, 'Apartadó', 2),
(23, 'Arboletes', 2),
(24, 'Argelia', 2),
(25, 'Armenia', 2),
(26, 'Barbosa', 2),
(27, 'Bello', 2),
(28, 'Belmira', 2),
(29, 'Betania', 2),
(30, 'Betulia', 2),
(31, 'Briceño', 2),
(32, 'Buriticá', 2),
(33, 'Cáceres', 2),
(34, 'Caicedo', 2),
(35, 'Caldas', 2),
(36, 'Campamento', 2),
(37, 'Cañasgordas', 2),
(38, 'Caracolí', 2),
(39, 'Caramanta', 2),
(40, 'Carepa', 2),
(41, 'Carolina', 2),
(42, 'Caucasia', 2),
(43, 'Chigorodó', 2),
(44, 'Cisneros', 2),
(45, 'Ciudad Bolívar', 2),
(46, 'Cocorná', 2),
(47, 'Concepción', 2),
(48, 'Concordia', 2),
(49, 'Copacabana', 2),
(50, 'Dabeiba', 2),
(51, 'Don Matías', 2),
(52, 'Ebéjico', 2),
(53, 'El Bagre', 2),
(54, 'El Carmen De Viboral', 2),
(55, 'El Santuario', 2),
(56, 'Entrerrios', 2),
(57, 'Envigado', 2),
(58, 'Fredonia', 2),
(59, 'Frontino', 2),
(60, 'Giraldo', 2),
(61, 'Girardota', 2),
(62, 'Gómez Plata', 2),
(63, 'Granada', 2),
(64, 'Guadalupe', 2),
(65, 'Guarne', 2),
(66, 'Guatape', 2),
(67, 'Heliconia', 2),
(68, 'Hispania', 2),
(69, 'Itagui', 2),
(70, 'Ituango', 2),
(71, 'Jardín', 2),
(72, 'Jericó', 2),
(73, 'La Ceja', 2),
(74, 'La Estrella', 2),
(75, 'La Pintada', 2),
(76, 'La Unión', 2),
(77, 'Liborina', 2),
(78, 'Maceo', 2),
(79, 'Marinilla', 2),
(80, 'Medellín', 2),
(81, 'Montebello', 2),
(82, 'Murindó', 2),
(83, 'Mutatá', 2),
(84, 'Nariño', 2),
(85, 'Nechí', 2),
(86, 'Necoclí', 2),
(87, 'Olaya', 2),
(88, 'Peñol', 2),
(89, 'Peque', 2),
(90, 'Pueblorrico', 2),
(91, 'Puerto Berrío', 2),
(92, 'Puerto Nare', 2),
(93, 'Puerto Triunfo', 2),
(94, 'Remedios', 2),
(95, 'Retiro', 2),
(96, 'Rionegro', 2),
(97, 'Sabanalarga', 2),
(98, 'Sabaneta', 2),
(99, 'Salgar', 2),
(100, 'San Andrés', 2),
(101, 'San Antonio de Prado', 2),
(102, 'San Carlos', 2),
(103, 'San Francisco', 2),
(104, 'San Jerónimo', 2),
(105, 'San José De La Montaña', 2),
(106, 'San Juan De Urabá', 2),
(107, 'San Luis', 2),
(108, 'San Pedro', 2),
(109, 'San Pedro De Urabá', 2),
(110, 'San Rafael', 2),
(111, 'San Roque', 2),
(112, 'San Vicente', 2),
(113, 'Santa Bárbara', 2),
(114, 'Santa Rosa De Osos', 2),
(115, 'Santafé De Antioquia', 2),
(116, 'Santo Domingo', 2),
(117, 'Segovia', 2),
(118, 'Sonson', 2),
(119, 'Sopetrán', 2),
(120, 'Támesis', 2),
(121, 'Tarazá', 2),
(122, 'Tarso', 2),
(123, 'Titiribí', 2),
(124, 'Toledo', 2),
(125, 'Turbo', 2),
(126, 'Uramita', 2),
(127, 'Urrao', 2),
(128, 'Valdivia', 2),
(129, 'Valparaíso', 2),
(130, 'Vegachí', 2),
(131, 'Venecia', 2),
(132, 'Vigía Del Fuerte', 2),
(133, 'Yalí', 2),
(134, 'Yarumal', 2),
(135, 'Yolombó', 2),
(136, 'Yondó', 2),
(137, 'Zaragoza', 2),
(138, 'Arauca', 3),
(139, 'Arauquita', 3),
(140, 'Cravo Norte', 3),
(141, 'Fortul', 3),
(142, 'Puerto Rondón', 3),
(143, 'Saravena', 3),
(144, 'Tame', 3),
(145, 'Con Willemstad Antillas', 4),
(146, 'Providencia', 4),
(147, 'San Andrés', 4),
(148, 'Baranoa', 5),
(149, 'Barranquilla', 5),
(150, 'Campo De La Cruz', 5),
(151, 'Candelaria', 5),
(152, 'Caracolí', 5),
(153, 'Galapa', 5),
(154, 'Juan De Acosta', 5),
(155, 'Luruaco', 5),
(156, 'Malambo', 5),
(157, 'Manatí', 5),
(158, 'Palmar De Varela', 5),
(159, 'Piojó', 5),
(160, 'Polonuevo', 5),
(161, 'Ponedera', 5),
(162, 'Puerto Colombia', 5),
(163, 'Repelón', 5),
(164, 'Sabanagrande', 5),
(165, 'Sabanalarga', 5),
(166, 'Santa Lucía', 5),
(167, 'Santo Tomás', 5),
(168, 'Soledad', 5),
(169, 'Suan', 5),
(170, 'Tubará', 5),
(171, 'Usiacurí', 5),
(172, 'Bogotá', 6),
(173, 'Achí', 7),
(174, 'Altos Del Rosario', 7),
(175, 'Arenal', 7),
(176, 'Arjona', 7),
(177, 'Arroyohondo', 7),
(178, 'Barranco De Loba', 7),
(179, 'Calamar', 7),
(180, 'Cantagallo', 7),
(181, 'Cartagena', 7),
(182, 'Cicuco', 7),
(183, 'Clemencia', 7),
(184, 'Córdoba', 7),
(185, 'El Carmen De Bolívar', 7),
(186, 'El Guamo', 7),
(187, 'El Peñón', 7),
(188, 'Hatillo De Loba', 7),
(189, 'Magangué', 7),
(190, 'Mahates', 7),
(191, 'Margarita', 7),
(192, 'María La Baja', 7),
(193, 'Mompós', 7),
(194, 'Montecristo', 7),
(195, 'Morales', 7),
(196, 'NOROSI', 7),
(197, 'Pinillos', 7),
(198, 'Regidor', 7),
(199, 'Río Viejo', 7),
(200, 'San Cristóbal', 7), 
(201, 'San Estanislao', 7),
(202, 'San Fernando', 7),
(203, 'San Jacinto', 7),
(204, 'San Jacinto Del Cauca', 7),
(205, 'San Juan Nepomuceno', 7),
(206, 'San Martín De Loba', 7),
(207, 'San Pablo', 7),
(208, 'Santa Catalina', 7),
(209, 'Santa Rosa', 7),
(210, 'Santa Rosa Del Sur', 7),
(211, 'Simití', 7),
(212, 'Soplaviento', 7),
(213, 'Talaigua Nuevo', 7),
(214, 'Tiquisio', 7),
(215, 'Turbaco', 7),
(216, 'Turbaná', 7),
(217, 'Villanueva', 7),
(218, 'Zambrano', 7),
(219, 'Almeida', 8),
(220, 'Aquitania', 8),
(221, 'Arcabuco', 8),
(222, 'Belén', 8),
(223, 'Berbeo', 8),
(224, 'Betéitiva', 8),
(225, 'Boavita', 8),
(226, 'Boyacá', 8),
(227, 'Briceño', 8),
(228, 'Buenavista', 8),
(229, 'Busbanzá', 8),
(230, 'Caldas', 8),
(231, 'Campohermoso', 8),
(232, 'Cerinza', 8),
(233, 'Chinavita', 8),
(234, 'Chiquinquirá', 8),
(235, 'Chíquiza', 8),
(236, 'Chiscas', 8),
(237, 'Chita', 8),
(238, 'Chitaraque', 8),
(239, 'Chivatá', 8),
(240, 'Chivor', 8),
(241, 'Ciénega', 8),
(242, 'Cómbita', 8),
(243, 'Coper', 8),
(244, 'Corrales', 8),
(245, 'Covarachía', 8),
(246, 'Cubará', 8),
(247, 'Cucaita', 8),
(248, 'Cuítiva', 8),
(249, 'Duitama', 8),
(250, 'El Cocuy', 8),
(251, 'El Espino', 8),
(252, 'Firavitoba', 8),
(253, 'Floresta', 8),
(254, 'Gachantivá', 8),
(255, 'Gameza', 8),
(256, 'Garagoa', 8),
(257, 'Guacamayas', 8),
(258, 'Guateque', 8),
(259, 'Guayatá', 8),
(260, 'Güicán', 8),
(261, 'Iza', 8),
(262, 'Jenesano', 8),
(263, 'Jericó', 8),
(264, 'La Capilla', 8),
(265, 'La Uvita', 8),
(266, 'La Victoria', 8),
(267, 'Labranzagrande', 8),
(268, 'Macanal', 8),
(269, 'Maripí', 8),
(270, 'Miraflores', 8),
(271, 'Mongua', 8),
(272, 'Monguí', 8),
(273, 'Moniquirá', 8),
(274, 'Motavita', 8),
(275, 'Muzo', 8),
(276, 'Nobsa', 8),
(277, 'Nuevo Colón', 8),
(278, 'Oicatá', 8),
(279, 'Otanche', 8),
(280, 'Pachavita', 8),
(281, 'Páez', 8),
(282, 'Paipa', 8),
(283, 'Pajarito', 8),
(284, 'Panqueba', 8),
(285, 'Pauna', 8),
(286, 'Paya', 8),
(287, 'Paz De Río', 8),
(288, 'Pesca', 8),
(289, 'Pisba', 8),
(290, 'Puerto Boyacá', 8),
(291, 'Quípama', 8),
(292, 'Ramiriquí', 8),
(293, 'Ráquira', 8),
(294, 'Rondón', 8),
(295, 'Saboyá', 8),
(296, 'Sáchica', 8),
(297, 'Samacá', 8),
(298, 'San Eduardo', 8),
(299, 'San José De Pare', 8),
(300, 'San Luis De Gaceno', 8),
(301, 'San Mateo', 8),
(302, 'San Miguel De Sema', 8),
(303, 'San Pablo De Borbur', 8),
(304, 'Santa María', 8),
(305, 'Santa Rosa De Viterbo', 8),
(306, 'Santa Sofía', 8),
(307, 'Santana', 8),
(308, 'Sativanorte', 8),
(309, 'Sativasur', 8),
(310, 'Siachoque', 8),
(311, 'Soatá', 8),
(312, 'Socha', 8),
(313, 'Socotá', 8),
(314, 'Sogamoso', 8),
(315, 'Somondoco', 8),
(316, 'Sora', 8),
(317, 'Soracá', 8),
(318, 'Sotaquirá', 8),
(319, 'Susacón', 8),
(320, 'Sutamarchán', 8),
(321, 'Sutatenza', 8),
(322, 'Tasco', 8),
(323, 'Tenza', 8),
(324, 'Tibaná', 8),
(325, 'Tibasosa', 8),
(326, 'Tinjacá', 8),
(327, 'Tipacoque', 8),
(328, 'Toca', 8),
(329, 'Togüí', 8),
(330, 'Tópaga', 8),
(331, 'Tota', 8),
(332, 'Tunja', 8),
(333, 'Tununguá', 8),
(334, 'Turmequé', 8),
(335, 'Tuta', 8),
(336, 'Tutazá', 8),
(337, 'Umbita', 8),
(338, 'Ventaquemada', 8),
(339, 'Villa De Leyva', 8),
(340, 'Viracachá', 8),
(341, 'Zetaquira', 8),
(342, 'Aguadas', 9),
(343, 'Anserma', 9),
(344, 'Aranzazu', 9),
(345, 'Belalcázar', 9),
(346, 'Chinchiná', 9),
(347, 'Filadelfia', 9),
(348, 'La Dorada', 9),
(349, 'La Merced', 9),
(350, 'Manizales', 9),
(351, 'Manzanares', 9),
(352, 'Marmato', 9),
(353, 'Marquetalia', 9),
(354, 'Marulanda', 9),
(355, 'Neira', 9),
(356, 'Norcasia', 9),
(357, 'Pácora', 9),
(358, 'Palestina', 9),
(359, 'Pensilvania', 9),
(360, 'Riosucio', 9),
(361, 'Risaralda', 9),
(362, 'Salamina', 9),
(363, 'Samaná', 9),
(364, 'San José', 9),
(365, 'Supía', 9),
(366, 'Victoria', 9),
(367, 'Villamaría', 9),
(368, 'Viterbo', 9),
(369, 'Albania', 10),
(370, 'Belén De Los Andaquies', 10),
(371, 'Cartagena Del Chairá', 10),
(372, 'Curillo', 10),
(373, 'El Doncello', 10),
(374, 'El Paujil', 10),
(375, 'Florencia', 10),
(376, 'La Montañita', 10),
(377, 'Milán', 10),
(378, 'Morelia', 10),
(379, 'Puerto Rico', 10),
(380, 'San José Del Fragua', 10),
(381, 'San Vicente Del Caguán', 10),
(382, 'Solano', 10),
(383, 'Solita', 10),
(384, 'Valparaíso', 10),
(385, 'Aguazul', 11),
(386, 'Chameza', 11),
(387, 'Hato Corozal', 11),
(388, 'La Salina', 11),
(389, 'Maní', 11),
(390, 'Monterrey', 11),
(391, 'Nunchía', 11),
(392, 'Orocué', 11),
(393, 'Paz De Ariporo', 11),
(394, 'Pore', 11),
(395, 'Recetor', 11),
(396, 'Sabanalarga', 11),
(397, 'Sácama', 11),
(398, 'San Luis De Palenque', 11),
(399, 'Támara', 11),
(400, 'Tauramena', 11),
(401, 'Trinidad', 11),
(402, 'Villanueva', 11),
(403, 'Yopal', 11),
(404, 'Almaguer', 12),
(405, 'Argelia', 12),
(406, 'Balboa', 12),
(407, 'Bolívar', 12),
(408, 'Buenos Aires', 12),
(409, 'Cajibío', 12),
(410, 'Caldono', 12),
(411, 'Caloto', 12),
(412, 'Corinto', 12),
(413, 'El Tambo', 12),
(414, 'Florencia', 12),
(415, 'GUACHENE', 12),
(416, 'Guapi', 12),
(417, 'Inzá', 12),
(418, 'Jambaló', 12),
(419, 'La Sierra', 12),
(420, 'La Vega', 12),
(421, 'López', 12),
(422, 'Mercaderes', 12),
(423, 'Miranda', 12),
(424, 'Morales', 12),
(425, 'Padilla', 12),
(426, 'Paez', 12),
(427, 'Patía', 12),
(428, 'Piamonte', 12),
(429, 'Piendamó', 12),
(430, 'Popayán', 12),
(431, 'Puerto Tejada', 12),
(432, 'Puracé', 12),
(433, 'Rosas', 12),
(434, 'San Sebastián', 12),
(435, 'Santa Rosa', 12),
(436, 'Santander De Quilichao', 12),
(437, 'Silvia', 12),
(438, 'Sotara', 12),
(439, 'Suárez', 12),
(440, 'Sucre', 12),
(441, 'Timbío', 12),
(442, 'Timbiquí', 12),
(443, 'Toribio', 12),
(444, 'Totoró', 12),
(445, 'Villa Rica', 12),
(446, 'Aguachica', 13),
(447, 'Agustín Codazzi', 13),
(448, 'Astrea', 13),
(449, 'Becerril', 13),
(450, 'Bosconia', 13),
(451, 'Chimichagua', 13),
(452, 'Chiriguaná', 13),
(453, 'Curumaní', 13),
(454, 'El Copey', 13),
(455, 'El Paso', 13),
(456, 'Gamarra', 13),
(457, 'González', 13),
(458, 'La Gloria', 13),
(459, 'La Jagua De Ibirico', 13),
(460, 'La Paz', 13),
(461, 'Manaure', 13),
(462, 'Pailitas', 13),
(463, 'Pelaya', 13),
(464, 'Pueblo Bello', 13),
(465, 'Río De Oro', 13),
(466, 'San Alberto', 13),
(467, 'San Diego', 13),
(468, 'San Martín', 13),
(469, 'Tamalameque', 13),
(470, 'Valledupar', 13),
(471, 'Acandí', 14),
(472, 'Alto Baudo', 14),
(473, 'Atrato', 14),
(474, 'Bagadó', 14),
(475, 'Bahía Solano', 14),
(476, 'Bajo Baudó', 14),
(477, 'Belén De Bajirá', 14),
(478, 'Bojaya', 14),
(479, 'Carmen Del Darien', 14),
(480, 'Cértegui', 14),
(481, 'Condoto', 14),
(482, 'El Cantón Del San Pablo', 14),
(483, 'El Carmen De Atrato', 14),
(484, 'El Litoral Del San Juan', 14),
(485, 'Istmina', 14),
(486, 'Juradó', 14),
(487, 'Lloró', 14),
(488, 'Medio Atrato', 14),
(489, 'Medio Baudó', 14),
(490, 'Medio San Juan', 14),
(491, 'Nóvita', 14),
(492, 'Nuquí', 14),
(493, 'Quibdó', 14),
(494, 'Río Iro', 14),
(495, 'Río Quito', 14),
(496, 'Riosucio', 14),
(497, 'San José Del Palmar', 14),
(498, 'Sipí', 14),
(499, 'Tadó', 14),
(500, 'Unguía', 14),
(501, 'Unión Panamericana', 14),
(502, 'Ayapel', 15),
(503, 'Buenavista', 15),
(504, 'Canalete', 15),
(505, 'Cereté', 15),
(506, 'Chimá', 15),
(507, 'Chinú', 15),
(508, 'Ciénaga De Oro', 15),
(509, 'Cotorra', 15),
(510, 'La Apartada', 15),
(511, 'Lorica', 15),
(512, 'Los Córdobas', 15),
(513, 'Momil', 15),
(514, 'Montelíbano', 15),
(515, 'Montería', 15),
(516, 'Moñitos', 15),
(517, 'Planeta Rica', 15),
(518, 'Pueblo Nuevo', 15),
(519, 'Puerto Escondido', 15),
(520, 'Puerto Libertador', 15),
(521, 'Purísima', 15),
(522, 'Sahagún', 15),
(523, 'San Andrés de Sotavento', 15),
(524, 'San Andrés Sotavento', 15),
(525, 'San Antero', 15),
(526, 'San Bernardo Del Viento', 15),
(527, 'San Carlos', 15),
(528, 'San José De Uré', 15),
(529, 'San Pelayo', 15),
(530, 'Tierralta', 15),
(531, 'Tuchín', 15),
(532, 'Valencia', 15),
(533, 'Agua De Dios', 16),
(534, 'Albán', 16),
(535, 'Anapoima', 16),
(536, 'Anolaima', 16),
(537, 'Apulo', 16),
(538, 'Arbeláez', 16),
(539, 'Beltrán', 16),
(540, 'Bituima', 16),
(541, 'Bojacá', 16),
(542, 'Cabrera', 16),
(543, 'Cachipay', 16),
(544, 'Cajicá', 16),
(545, 'Caparrapí', 16),
(546, 'Caqueza', 16),
(547, 'Carmen De Carupa', 16),
(548, 'Chaguaní', 16),
(549, 'Chía', 16),
(550, 'Chipaque', 16),
(551, 'Choachí', 16),
(552, 'Chocontá', 16),
(553, 'Cogua', 16),
(554, 'Cota', 16),
(555, 'Cucunubá', 16),
(556, 'El Colegio', 16),
(557, 'El Peñón', 16),
(558, 'El Rosal', 16),
(559, 'Facatativá', 16),
(560, 'Fomeque', 16),
(561, 'Fontibon', 16),
(562, 'Fosca', 16),
(563, 'Funza', 16),
(564, 'Fúquene', 16),
(565, 'Fusagasugá', 16),
(566, 'Gachala', 16),
(567, 'Gachancipá', 16),
(568, 'Gachetá', 16),
(569, 'Gama', 16),
(570, 'Girardot', 16),
(571, 'Granada', 16),
(572, 'Guachetá', 16),
(573, 'Guaduas', 16),
(574, 'Guasca', 16),
(575, 'Guataquí', 16),
(576, 'Guatavita', 16),
(577, 'Guayabal De Siquima', 16),
(578, 'Guayabetal', 16),
(579, 'Gutiérrez', 16),
(580, 'Jerusalén', 16),
(581, 'Junín', 16),
(582, 'La Calera', 16),
(583, 'La Mesa', 16),
(584, 'La Palma', 16),
(585, 'La Peña', 16),
(586, 'La Vega', 16),
(587, 'Lenguazaque', 16),
(588, 'Macheta', 16),
(589, 'Madrid', 16),
(590, 'Manta', 16),
(591, 'Medina', 16),
(592, 'Mosquera', 16),
(593, 'Nariño', 16),
(594, 'Nemocón', 16),
(595, 'Nilo', 16),
(596, 'Nimaima', 16),
(597, 'Nocaima', 16),
(598, 'Pacho', 16),
(599, 'Paime', 16),
(600, 'Pandi', 16),
(601, 'Paratebueno', 16),
(602, 'Pasca', 16),
(603, 'Puerto Salgar', 16),
(604, 'Pulí', 16),
(605, 'Quebradanegra', 16),
(606, 'Quetame', 16),
(607, 'Quipile', 16),
(608, 'Ricaurte', 16),
(609, 'San Antonio Del Tequendama', 16),
(610, 'San Bernardo', 16),
(611, 'San Cayetano', 16),
(612, 'San Francisco', 16),
(613, 'San Juan De Río Seco', 16),
(614, 'Sasaima', 16),
(615, 'Sesquilé', 16),
(616, 'Sibaté', 16),
(617, 'Silvania', 16),
(618, 'Simijaca', 16),
(619, 'Soacha', 16),
(620, 'Sopó', 16),
(621, 'Subachoque', 16),
(622, 'Suesca', 16),
(623, 'Supatá', 16),
(624, 'Susa', 16),
(625, 'Sutatausa', 16),
(626, 'Tabio', 16),
(627, 'Tausa', 16),
(628, 'Tena', 16),
(629, 'Tenjo', 16),
(630, 'Tibacuy', 16),
(631, 'Tibirita', 16),
(632, 'Tocaima', 16),
(633, 'Tocancipá', 16),
(634, 'Topaipí', 16),
(635, 'Ubalá', 16),
(636, 'Ubaque', 16),
(637, 'Une', 16),
(638, 'Útica', 16),
(639, 'Venecia', 16),
(640, 'Vergara', 16),
(641, 'Vianí', 16),
(642, 'Villa De San Diego De Ubate', 16),
(643, 'Villagómez', 16),
(644, 'Villapinzón', 16),
(645, 'Villeta', 16),
(646, 'Viotá', 16),
(647, 'Yacopí', 16),
(648, 'Zipacón', 16),
(649, 'Zipaquirá', 16),
(650, 'Barranco Minas', 17),
(651, 'Cacahual', 17),
(652, 'Inírida', 17),
(653, 'La Guadalupe', 17),
(654, 'Mapiripana', 17),
(655, 'Morichal', 17),
(656, 'Pana Pana', 17),
(657, 'Puerto Colombia', 17),
(658, 'San Felipe', 17),
(659, 'Calamar', 18),
(660, 'El Retorno', 18),
(661, 'Miraflores', 18),
(662, 'San José Del Guaviare', 18),
(663, 'Acevedo', 19),
(664, 'Agrado', 19),
(665, 'Aipe', 19),
(666, 'Algeciras', 19),
(667, 'Altamira', 19),
(668, 'Baraya', 19),
(669, 'Campoalegre', 19),
(670, 'Colombia', 19),
(671, 'Elías', 19),
(672, 'Garzón', 19),
(673, 'Gigante', 19),
(674, 'Guacarí', 19),
(675, 'Guadalupe', 19),
(676, 'Hobo', 19),
(677, 'Iquira', 19),
(678, 'Isnos', 19),
(679, 'La Argentina', 19),
(680, 'La Plata', 19),
(681, 'Nátaga', 19),
(682, 'Neiva', 19),
(683, 'Oporapa', 19),
(684, 'Paicol', 19),
(685, 'Palermo', 19),
(686, 'Palestina', 19),
(687, 'Pital', 19),
(688, 'Pitalito', 19),
(689, 'Rivera', 19),
(690, 'Saladoblanco', 19),
(691, 'San Agustín', 19),
(692, 'Santa María', 19),
(693, 'Suaza', 19),
(694, 'Tarqui', 19),
(695, 'Tello', 19),
(696, 'Teruel', 19),
(697, 'Tesalia', 19),
(698, 'Timaná', 19),
(699, 'Villavieja', 19),
(700, 'Yaguará', 19),
(701, 'Albania', 20),
(702, 'Arriba', 20),
(703, 'Barrancas', 20),
(704, 'Dibulla', 20),
(705, 'Distracción', 20),
(706, 'El Molino', 20),
(707, 'Fonseca', 20),
(708, 'Hatonuevo', 20),
(709, 'La Jagua Del Pilar', 20),
(710, 'Maicao', 20),
(711, 'Manaure', 20),
(712, 'Riohacha', 20),
(713, 'San Juan Del Cesar', 20),
(714, 'Uribia', 20),
(715, 'Urumita', 20),
(716, 'Villanueva', 20),
(717, 'Algarrobo', 21),
(718, 'Aracataca', 21),
(719, 'Ariguaní', 21),
(720, 'Cerro de San Antonio', 21),
(721, 'Cerro San Antonio', 21),
(722, 'Chibolo', 21),
(723, 'Ciénaga', 21),
(724, 'Concordia', 21),
(725, 'El Banco', 21),
(726, 'El Piñón', 21),
(727, 'El Retén', 21),
(728, 'Fundación', 21),
(729, 'Guamal', 21),
(730, 'Nueva Granada', 21),
(731, 'Palermo', 21),
(732, 'Pedraza', 21),
(733, 'Pijiño Del Carmen', 21),
(734, 'Pivijay', 21),
(735, 'Plato', 21),
(736, 'Puebloviejo', 21),
(737, 'Remolino', 21),
(738, 'Sabanas De San Angel', 21),
(739, 'Salamina', 21),
(740, 'San Sebastián De Buenavista', 21),
(741, 'San Zenón', 21),
(742, 'Santa Ana', 21),
(743, 'Santa Bárbara De Pinto', 21),
(744, 'Santa Marta', 21),
(745, 'Sitionuevo', 21),
(746, 'Tenerife', 21),
(747, 'Zapayán', 21),
(748, 'Zona Bananera', 21),
(749, 'Acacías', 22),
(750, 'Barranca De Upía', 22),
(751, 'Cabuyaro', 22),
(752, 'Castilla La Nueva', 22),
(753, 'Costa Rica', 22),
(754, 'Cubarral', 22),
(755, 'Cumaral', 22),
(756, 'El Calvario', 22),
(757, 'El Castillo', 22),
(758, 'El Dorado', 22),
(759, 'Fuente De Oro', 22),
(760, 'Granada', 22),
(761, 'Guamal', 22),
(762, 'La Macarena', 22),
(763, 'Lejanías', 22),
(764, 'Mapiripán', 22),
(765, 'Mesetas', 22),
(766, 'Puerto Concordia', 22),
(767, 'Puerto Gaitán', 22),
(768, 'Puerto Lleras', 22),
(769, 'Puerto López', 22),
(770, 'Puerto Rico', 22),
(771, 'Restrepo', 22),
(772, 'San Carlos De Guaroa', 22),
(773, 'San Juan De Arama', 22),
(774, 'San Juanito', 22),
(775, 'San Martín', 22),
(776, 'Uribe', 22),
(777, 'Villavicencio', 22),
(778, 'Vistahermosa', 22),
(779, 'Albán', 23),
(780, 'Aldana', 23),
(781, 'Ancuyá', 23),
(782, 'Arboleda', 23),
(783, 'Barbacoas', 23),
(784, 'Belén', 23),
(785, 'Buesaco', 23),
(786, 'Chachagüí', 23),
(787, 'Colón', 23),
(788, 'Consaca', 23),
(789, 'Contadero', 23),
(790, 'Córdoba', 23),
(791, 'Cuaspud', 23),
(792, 'Cumbal', 23),
(793, 'Cumbitara', 23),
(794, 'El Charco', 23),
(795, 'El Peñol', 23),
(796, 'El Rosario', 23),
(797, 'El Tablón De Gómez', 23),
(798, 'El Tambo', 23),
(799, 'Francisco Pizarro', 23),
(800, 'Funes', 23),
(801, 'Guachucal', 23),
(802, 'Guaitarilla', 23),
(803, 'Gualmatán', 23),
(804, 'Iles', 23),
(805, 'Imués', 23),
(806, 'Ipiales', 23),
(807, 'La Cruz', 23),
(808, 'La Florida', 23),
(809, 'La Llanada', 23),
(810, 'La Tola', 23),
(811, 'La Unión', 23),
(812, 'Leiva', 23),
(813, 'Linares', 23),
(814, 'Los Andes', 23),
(815, 'Magüi', 23),
(816, 'Mallama', 23),
(817, 'Mosquera', 23),
(818, 'Nariño', 23),
(819, 'Olaya Herrera', 23),
(820, 'Ospina', 23),
(821, 'Pasto', 23),
(822, 'Policarpa', 23),
(823, 'Potosí', 23),
(824, 'Providencia', 23),
(825, 'Puerres', 23),
(826, 'Pupiales', 23),
(827, 'Ricaurte', 23),
(828, 'Roberto Payán', 23),
(829, 'Samaniego', 23),
(830, 'San Bernardo', 23),
(831, 'San Lorenzo', 23),
(832, 'San Pablo', 23),
(833, 'San Pedro De Cartago', 23),
(834, 'Sandoná', 23),
(835, 'Santa Bárbara', 23),
(836, 'Santacruz', 23),
(837, 'Sapuyes', 23),
(838, 'Taminango', 23),
(839, 'Tangua', 23),
(840, 'Tumaco', 23),
(841, 'Túquerres', 23),
(842, 'Yacuanquer', 23),
(843, 'Abrego', 24),
(844, 'Arboledas', 24),
(845, 'Bochalema', 24),
(846, 'Bucarasica', 24),
(847, 'Cachirá', 24),
(848, 'Cácota', 24),
(849, 'Chinácota', 24),
(850, 'Chitagá', 24),
(851, 'Convención', 24),
(852, 'Cúcuta', 24),
(853, 'Cucutilla', 24),
(854, 'Durania', 24),
(855, 'El Carmen', 24),
(856, 'El Tarra', 24),
(857, 'El Zulia', 24),
(858, 'Gramalote', 24),
(859, 'Hacarí', 24),
(860, 'Herrán', 24),
(861, 'La Esperanza', 24),
(862, 'La Playa', 24),
(863, 'La Vega', 24),
(864, 'Labateca', 24),
(865, 'Los Patios', 24),
(866, 'Lourdes', 24),
(867, 'Mutiscua', 24),
(868, 'Ocaña', 24),
(869, 'Pamplona', 24),
(870, 'Pamplonita', 24),
(871, 'Puerto Santander', 24),
(872, 'Ragonvalia', 24),
(873, 'Salazar', 24),
(874, 'San Calixto', 24),
(875, 'San Cayetano', 24),
(876, 'Santiago', 24),
(877, 'Sardinata', 24),
(878, 'Silos', 24),
(879, 'Teorama', 24),
(880, 'Tibú', 24),
(881, 'Toledo', 24),
(882, 'Villa Caro', 24),
(883, 'Villa Del Rosario', 24),
(884, 'Colón', 25),
(885, 'Mocoa', 25),
(886, 'Orito', 25),
(887, 'Puerto Asís', 25),
(888, 'Puerto Caicedo', 25),
(889, 'Puerto Guzmán', 25),
(890, 'Puerto Leguizamo', 25),
(891, 'San Francisco', 25),
(892, 'San Miguel', 25),
(893, 'Santiago', 25),
(894, 'Sibundoy', 25),
(895, 'Valle Del Guamuez', 25),
(896, 'Villagarzón', 25),
(897, 'Armenia', 26),
(898, 'Buenavista', 26),
(899, 'Calarca', 26),
(900, 'Circasia', 26),
(901, 'Córdoba', 26),
(902, 'Filandia', 26),
(903, 'Génova', 26),
(904, 'La Tebaida', 26),
(905, 'Montenegro', 26),
(906, 'Pijao', 26),
(907, 'Quimbaya', 26),
(908, 'Salento', 26),
(909, 'Apía', 27),
(910, 'Balboa', 27),
(911, 'Belén De Umbría', 27),
(912, 'Dosquebradas', 27),
(913, 'Guática', 27),
(914, 'La Celia', 27),
(915, 'La Virginia', 27),
(916, 'Marsella', 27),
(917, 'Mistrató', 27),
(918, 'Pereira', 27),
(919, 'Pueblo Rico', 27),
(920, 'Quinchía', 27),
(921, 'Santa Rosa De Cabal', 27),
(922, 'Santuario', 27),
(923, 'Aguada', 28),
(924, 'Albania', 28),
(925, 'Aratoca', 28),
(926, 'Barbosa', 28),
(927, 'Barichara', 28),
(928, 'Barrancabermeja', 28),
(929, 'Betulia', 28),
(930, 'Bolívar', 28),
(931, 'Bucaramanga', 28),
(932, 'Cabrera', 28),
(933, 'California', 28),
(934, 'Capitanejo', 28),
(935, 'Carcasí', 28),
(936, 'Cepitá', 28),
(937, 'Cerrito', 28),
(938, 'Charalá', 28),
(939, 'Charta', 28),
(940, 'Chima', 28),
(941, 'Chipatá', 28),
(942, 'Cimitarra', 28),
(943, 'Concepción', 28),
(944, 'Confines', 28),
(945, 'Contratación', 28),
(946, 'Coromoro', 28),
(947, 'Curití', 28),
(948, 'El Carmen De Chucurí', 28),
(949, 'El Guacamayo', 28),
(950, 'El Peñón', 28),
(951, 'El Playón', 28),
(952, 'Encino', 28),
(953, 'Enciso', 28),
(954, 'Florián', 28),
(955, 'Floridablanca', 28),
(956, 'Galán', 28),
(957, 'Gambita', 28),
(958, 'Girón', 28),
(959, 'Guaca', 28),
(960, 'Guadalupe', 28),
(961, 'Guapotá', 28),
(962, 'Guavatá', 28),
(963, 'Güepsa', 28),
(964, 'Hato', 28),
(965, 'Jesús María', 28),
(966, 'Jordán', 28),
(967, 'La Belleza', 28),
(968, 'La Paz', 28),
(969, 'Landázuri', 28),
(970, 'Lebríja', 28),
(971, 'Los Santos', 28),
(972, 'Macaravita', 28),
(973, 'Málaga', 28),
(974, 'Matanza', 28),
(975, 'Mogotes', 28),
(976, 'Molagavita', 28),
(977, 'Ocamonte', 28),
(978, 'Oiba', 28),
(979, 'Onzaga', 28),
(980, 'Palmar', 28),
(981, 'Palmas Del Socorro', 28),
(982, 'Páramo', 28),
(983, 'Piedecuesta', 28),
(984, 'Pinchote', 28),
(985, 'Puente Nacional', 28),
(986, 'Puerto Parra', 28),
(987, 'Puerto Wilches', 28),
(988, 'Rionegro', 28),
(989, 'Sabana De Torres', 28),
(990, 'San Andrés', 28),
(991, 'San Benito', 28),
(992, 'San Gil', 28),
(993, 'San Joaquín', 28),
(994, 'San José De Miranda', 28),
(995, 'San Miguel', 28),
(996, 'San Vicente De Chucurí', 28),
(997, 'Santa Bárbara', 28),
(998, 'Santa Helena Del Opón', 28),
(999, 'Silos', 28),
(1000, 'Simacota', 28),
(1001, 'Socorro', 28),
(1002, 'Suaita', 28),
(1003, 'Sucre', 28),
(1004, 'Suratá', 28),
(1005, 'Tona', 28),
(1006, 'Valle De San José', 28),
(1007, 'Vélez', 28),
(1008, 'Vetas', 28),
(1009, 'Villanueva', 28),
(1010, 'Zapatoca', 28),
(1011, 'Buenavista', 29),
(1012, 'Caimito', 29),
(1013, 'Chalán', 29),
(1014, 'Coloso', 29),
(1015, 'Corozal', 29),
(1016, 'Coveñas', 29),
(1017, 'El Roble', 29),
(1018, 'Galeras', 29),
(1019, 'Guaranda', 29),
(1020, 'La Unión', 29),
(1021, 'Los Palmitos', 29),
(1022, 'Majagual', 29),
(1023, 'Morroa', 29),
(1024, 'Ovejas', 29),
(1025, 'Palmito', 29),
(1026, 'Sampués', 29),
(1027, 'San Benito Abad', 29),
(1028, 'San Juan De Betulia', 29),
(1029, 'San Marcos', 29),
(1030, 'San Onofre', 29),
(1031, 'San Pedro', 29),
(1032, 'Santiago De Tolú', 29),
(1033, 'Sincé', 29),
(1034, 'Sincelejo', 29),
(1035, 'Sucre', 29),
(1036, 'Tolú Viejo', 29),
(1037, 'Alpujarra', 30),
(1038, 'Alvarado', 30),
(1039, 'Ambalema', 30),
(1040, 'Anzoátegui', 30),
(1041, 'Armero', 30),
(1042, 'Ataco', 30),
(1043, 'Cajamarca', 30),
(1044, 'Carmen De Apicalá', 30),
(1045, 'Carmen de Aplicalá', 30),
(1046, 'Casabianca', 30),
(1047, 'Chaparral', 30),
(1048, 'Coello', 30),
(1049, 'Coyaima', 30),
(1050, 'Cunday', 30),
(1051, 'Dolores', 30),
(1052, 'Espinal', 30),
(1053, 'Falan', 30),
(1054, 'Flandes', 30),
(1055, 'Fresno', 30),
(1056, 'Guamo', 30),
(1057, 'Herveo', 30),
(1058, 'Honda', 30),
(1059, 'Ibagué', 30),
(1060, 'Icononzo', 30),
(1061, 'Lérida', 30),
(1062, 'Líbano', 30),
(1063, 'Mariquita', 30),
(1064, 'Melgar', 30),
(1065, 'Murillo', 30),
(1066, 'Natagaima', 30),
(1067, 'Ortega', 30),
(1068, 'Palocabildo', 30),
(1069, 'Piedras', 30),
(1070, 'Planadas', 30),
(1071, 'Prado', 30),
(1072, 'Purificación', 30),
(1073, 'Rioblanco', 30),
(1074, 'Roncesvalles', 30),
(1075, 'Rovira', 30),
(1076, 'Saldaña', 30),
(1077, 'San Antonio', 30),
(1078, 'San Luis', 30),
(1079, 'Santa Isabel', 30),
(1080, 'Suárez', 30),
(1081, 'Valle De San Juan', 30),
(1082, 'Venadillo', 30),
(1083, 'Villahermosa', 30),
(1084, 'Villarrica', 30),
(1085, 'Alcalá', 31),
(1086, 'Andalucía', 31),
(1087, 'Ansermanuevo', 31),
(1088, 'Argelia', 31),
(1089, 'Bolívar', 31),
(1090, 'Buenaventura', 31),
(1091, 'Buga', 31),
(1092, 'Bugalagrande', 31),
(1093, 'Caicedonia', 31),
(1094, 'Cali', 31),
(1095, 'Calima', 31),
(1096, 'Calima Darien', 31),
(1097, 'Candelaria', 31),
(1098, 'Carrito', 31),
(1099, 'Cartago', 31),
(1100, 'Dagua', 31),
(1101, 'El Águila', 31),
(1102, 'El Cairo', 31),
(1103, 'El Cerrito', 31),
(1104, 'El Dovio', 31),
(1105, 'Florida', 31),
(1106, 'Ginebra', 31),
(1107, 'Guacarí', 31),
(1108, 'Jamundí', 31),
(1109, 'La Cumbre', 31),
(1110, 'La Unión', 31),
(1111, 'La Victoria', 31),
(1112, 'Obando', 31),
(1113, 'Palmira', 31),
(1114, 'Paso Ancho', 31),
(1115, 'Plandas', 31),
(1116, 'Pradera', 31),
(1117, 'Restrepo', 31),
(1118, 'Riofrío', 31),
(1119, 'Roldanillo', 31),
(1120, 'Rosario', 31),
(1121, 'San Pedro', 31),
(1122, 'Sevilla', 31),
(1123, 'Tambo', 31),
(1124, 'Toro', 31),
(1125, 'Trujillo', 31),
(1126, 'Tuluá', 31),
(1127, 'Ulloa', 31),
(1128, 'Versalles', 31),
(1129, 'Vijes', 31),
(1130, 'Yotoco', 31),
(1131, 'Yumbo', 31),
(1132, 'Zarzal', 31),
(1133, 'Caruru', 32),
(1134, 'Mitú', 32),
(1135, 'Pacoa', 32),
(1136, 'Papunaua', 32),
(1137, 'Taraira', 32),
(1138, 'Yavaraté', 32),
(1139, 'Cumaribo', 33),
(1140, 'La Primavera', 33),
(1141, 'Puerto Carreño', 33),
(1142, 'Santa Rosalía', 33),
(1143, 'Ambato', 34),
(1144, 'Camilo Ponce Enríquez', 35),
(1145, 'Chordeleg', 35),
(1146, 'Cuenca', 35),
(1147, 'Elpan', 35),
(1148, 'Girón', 35),
(1149, 'Guachapala', 35),
(1150, 'Gualaceo', 35),
(1151, 'Nabon', 35),
(1152, 'Oña', 35),
(1153, 'Paute', 35),
(1154, 'Pucara', 35),
(1155, 'San Fernando', 35),
(1156, 'Santa Isabel', 35),
(1157, 'Sevilla De Oro', 35),
(1158, 'Sigsig', 35),
(1159, 'Caluma', 36),
(1160, 'Chillanes', 36),
(1161, 'Chimbo', 36),
(1162, 'Echeandia', 36),
(1163, 'Guaranda', 36),
(1164, 'Las Naves', 36),
(1165, 'San Miguel', 36),
(1166, 'Azogues', 37),
(1167, 'Biblian', 37),
(1168, 'Cañar', 37),
(1169, 'Deleg', 37),
(1170, 'El Tambo', 37),
(1171, 'Latroncal', 37),
(1172, 'Suscal', 37),
(1173, 'Bolivar', 38),
(1174, 'Espejo', 38),
(1175, 'Mira', 38),
(1176, 'Montufar', 38),
(1177, 'San Pedro De Huaca', 38),
(1178, 'Tulcan', 38),
(1179, 'Alausi', 39),
(1180, 'Chambo', 39),
(1181, 'Chunchi', 39),
(1182, 'Colta', 39),
(1183, 'Cumanda', 39),
(1184, 'Guamote', 39),
(1185, 'Guano', 39),
(1186, 'Pallatanga', 39),
(1187, 'Penipe', 39),
(1188, 'Riobamba', 39),
(1189, 'La Mana', 40),
(1190, 'Latacunga', 40),
(1191, 'Pangua', 40),
(1192, 'Pujili', 40),
(1193, 'Salcedo', 40),
(1194, 'Saquisili', 40),
(1195, 'Sigchos', 40),
(1196, 'Ecuador', 41),
(1197, 'Arenillas', 42),
(1198, 'Atahualpa', 42),
(1199, 'Balsas', 42),
(1200, 'Chilla', 42),
(1201, 'El Guabo', 42),
(1202, 'Huaquillas', 42),
(1203, 'Las Lajas', 42),
(1204, 'Machala', 42),
(1205, 'Marcabeli', 42),
(1206, 'Pasaje', 42),
(1207, 'Piñas', 42),
(1208, 'Portovelo', 42),
(1209, 'Santa Rosa', 42),
(1210, 'Zaruma', 42),
(1211, 'Atacames', 43),
(1212, 'Eloy Alfaro', 43),
(1213, 'Esmeraldas', 43),
(1214, 'La Concordia', 43),
(1215, 'Muisne', 43),
(1216, 'Quininde', 43),
(1217, 'Rioverde', 43),
(1218, 'San Lorenzo', 43),
(1219, 'Valdez (Limones)', 43),
(1220, 'Isabela', 44),
(1221, 'Puerto Baquerizo Moreno', 44),
(1222, 'San Cristobal', 44),
(1223, 'Santa Cruz', 44),
(1224, 'Alfredo Baquerizo Moreno (Jujan)', 45),
(1225, 'Balao', 45),
(1226, 'Balzar', 45),
(1227, 'Colimes', 45),
(1228, 'Coronel Marcelino Maridueña', 45),
(1229, 'Daule', 45),
(1230, 'Duran', 45),
(1231, 'El Triunfo', 45),
(1232, 'Elempalme', 45),
(1233, 'General Antonio Elizalde', 45),
(1234, 'Guayaquil', 45),
(1235, 'Isidro Ayora', 45),
(1236, 'Lomas De Sargentillo', 45),
(1237, 'Milagro', 45),
(1238, 'Naranjal', 45),
(1239, 'Naranjito', 45),
(1240, 'Nobol', 45),
(1241, 'Palestina', 45),
(1242, 'Pedro Carbo', 45),
(1243, 'Playas', 45),
(1244, 'Salitre (Urbina Jado)', 45),
(1245, 'Samborondon', 45),
(1246, 'San Jacinto De Yaguachi', 45),
(1247, 'Santa Lucia', 45),
(1248, 'Simon Bolivar', 45),
(1249, 'Antonio Ante', 46),
(1250, 'Cotacachi', 46),
(1251, 'Ibarra', 46),
(1252, 'Otavalo', 46),
(1253, 'Pimampiro', 46),
(1254, 'San Miguel De Urcuqui', 46),
(1255, 'Calvas', 47),
(1256, 'Catamayo', 47),
(1257, 'Celica', 47),
(1258, 'Chaguarpamba', 47),
(1259, 'Espindola', 47),
(1260, 'Gonzanama', 47),
(1261, 'Loja', 47),
(1262, 'Macara', 47),
(1263, 'Olmedo', 47),
(1264, 'Paltas', 47),
(1265, 'Pindal', 47),
(1266, 'Puyango', 47),
(1267, 'Quilanga', 47),
(1268, 'Saraguro', 47),
(1269, 'Sozoranga', 47),
(1270, 'Zapotillo', 47),
(1271, 'Baba', 48),
(1272, 'Babahoyo', 48),
(1273, 'Buena Fe', 48),
(1274, 'Mocache', 48),
(1275, 'Montalvo', 48),
(1276, 'Palenque', 48),
(1277, 'Puebloviejo', 48),
(1278, 'Quevedo', 48),
(1279, 'Quinsaloma', 48),
(1280, 'Urdaneta', 48),
(1281, 'Valencia', 48),
(1282, 'Ventanas', 48),
(1283, 'Vinces', 48),
(1284, '24 De Mayo', 49),
(1285, 'Bolivar', 49),
(1286, 'Chone', 49),
(1287, 'El Carmen', 49),
(1288, 'Flavio Alfaro', 49),
(1289, 'Jama', 49),
(1290, 'Jaramijo', 49),
(1291, 'Jipijapa', 49),
(1292, 'Junin', 49),
(1293, 'Manta', 49),
(1294, 'Montecristi', 49),
(1295, 'Pajan', 49),
(1296, 'Pedernales', 49),
(1297, 'Pichincha', 49),
(1298, 'Portoviejo', 49),
(1299, 'Puerto Lopez', 49),
(1300, 'Rocafuerte', 49),
(1301, 'San Vicente', 49),
(1302, 'Santa Ana', 49),
(1303, 'Sucre', 49),
(1304, 'Tosagua', 49),
(1305, 'Canton Tiwintza', 50),
(1306, 'Gualaquiza', 50),
(1307, 'Huamboya', 50),
(1308, 'Limon Indanza', 50),
(1309, 'Logroño', 50),
(1310, 'Macas', 50),
(1311, 'Morona', 50),
(1312, 'Pablo Sexto', 50),
(1313, 'Palora', 50),
(1314, 'San Juan Bosco', 50),
(1315, 'Santiago', 50),
(1316, 'Sucua', 50),
(1317, 'Taisha', 50),
(1318, 'Archidona', 51),
(1319, 'Carlos Julio Arosemena Tola', 51),
(1320, 'El Chaco', 51),
(1321, 'Quijos', 51),
(1322, 'Tena', 51),
(1323, 'Aguarico', 52),
(1324, 'La Joya De Los Sachas', 52),
(1325, 'Loreto', 52),
(1326, 'Orellana', 52),
(1327, 'Puerto Francisco De Orellana', 52),
(1328, 'Arajuno', 53),
(1329, 'Mera', 53),
(1330, 'Pastaza', 53),
(1331, 'Puyo', 53),
(1332, 'Santaclara', 53),
(1333, 'Cayambe', 54),
(1334, 'Mejia', 54),
(1335, 'Pedro Moncayo', 54),
(1336, 'Pedro Vicente Maldonado', 54),
(1337, 'Puerto Quito', 54),
(1338, 'Quito', 54),
(1339, 'Rumiñahui', 54),
(1340, 'San Miguel De Los Bancos', 54),
(1341, 'Quito', 55),
(1342, 'La Libertad', 56),
(1343, 'Salinas', 56),
(1344, 'Santa Elena', 56),
(1345, 'Santo Domingo', 57),
(1346, 'Cascales', 58),
(1347, 'Cuyabeno', 58),
(1348, 'Gonzalo Pizarro', 58),
(1349, 'Lagoagrio', 58),
(1350, 'Putumayo', 58),
(1351, 'Shushufindi', 58),
(1352, 'Sucumbios', 58),
(1353, 'Ambato', 59),
(1354, 'Baños De Agua Santa', 59),
(1355, 'Cevallos', 59),
(1356, 'Mocha', 59),
(1357, 'Patate', 59),
(1358, 'Quero', 59),
(1359, 'San Pedro De Pelileo', 59),
(1360, 'Santiago De Pillaro', 59),
(1361, 'Tisaleo', 59),
(1362, 'Centinela Del Condor', 60),
(1363, 'Chinchipe', 60),
(1364, 'Elpangui', 60),
(1365, 'Nangaritza', 60),
(1366, 'Palanda', 60),
(1367, 'Paquisha', 60),
(1368, 'Yacuambi', 60),
(1369, 'Yantzaza(Yanzatza)', 60),
(1370, 'Zamora', 60),
(1371, 'Zonas No Delimitadas', 61),
(1372, 'Alto Orinoco (La Esmeralda)', 62),
(1373, 'Atabapo (San Fernando De Atabapo)', 62),
(1374, 'Atures (Puerto Ayacucho)', 62),
(1375, 'Autana (Isla Ratón)', 62),
(1376, 'Ayacucho', 62),
(1377, 'Manapiare (San Juan De Manapiare)', 62),
(1378, 'Maroa (Maroa)', 62),
(1379, 'Río Negro (San Carlos De Río Negro)', 62),
(1380, 'Anaco (Anaco)', 63),
(1381, 'Aragua (Aragua De Barcelona)', 63),
(1382, 'Ayacucho', 63),
(1383, 'Bolívar (Barcelona)', 63),
(1384, 'Bruzual (Clarines)', 63),
(1385, 'Cajigal (Onoto)', 63),
(1386, 'Caracas', 63),
(1387, 'Carvajal (Valle De Guanape)', 63),
(1388, 'Diego Bautista Urbaneja (Lechería)', 63),
(1389, 'Freites (Cantaura)', 64),
(1390, 'Guanipa (El Tigrito) (San José de Guanipa)', 63),
(1391, 'Guanta (Guanta)', 63),
(1392, 'Independencia (Soledad)', 63),
(1393, 'Libertad (San Mateo)', 64),
(1394, 'Mcgregor (El Chaparro)', 63),
(1395, 'Miranda (Pariaguán)', 63),
(1396, 'Monagas (San Diego De Cabrutica)', 63),
(1397, 'Peñalver (Puerto Píritu)', 63),
(1398, 'Píritu (Píritu)', 63),
(1399, 'Santa Ana (Santa Ana)', 63),
(1400, 'Simón Rodriguez (El Tigre)', 63),
(1401, 'Sotillo (Puerto La Cruz)', 63),
(1402, 'Achaguas (Achaguas)', 64),
(1403, 'Apure', 64),
(1404, 'Biruaca (Biruaca)', 64),
(1405, 'Muñoz (Bruzual)', 64),
(1406, 'Páez (Guasdualito)', 64),
(1407, 'Pedro Camejo (San Juan De Payara)', 64),
(1408, 'Rómulo Gallegos (Elorza)', 64),
(1409, 'San Fernando (San Fernando De Apure)', 64),
(1410, 'Bolívar (San Mateo)', 65),
(1411, 'Camatagua (Camatagua)', 65),
(1412, 'Francisco Linares Alcántara (Santa Rita)', 65),
(1413, 'Girardot (Maracay)', 65),
(1414, 'José Ángel Lamas (Santa Cruz)', 65),
(1415, 'José Félix Ribas (La Victoria)', 65),
(1416, 'José Rafael Revenga (El Consejo)', 65),
(1417, 'Libertador (Palo Negro)', 65),
(1418, 'Mario Briceño Iragorry (El Limón)', 65),
(1419, 'Ocumare De La Costa De Oro', 65),
(1420, 'San Casimiro (San Casimiro)', 65),
(1421, 'San Sebastián De Los Reyes', 65),
(1422, 'Santiago Mariño (Turmero)', 65),
(1423, 'Santos Michelena (Las Tejerías)', 65),
(1424, 'Sucre (Cagua)', 65),
(1425, 'Tovar (Colonia Tovar)', 65),
(1426, 'Urdaneta (Barbacoas)', 65),
(1427, 'Zamora (Villa De Cura)', 65),
(1428, 'Alberto Arvelo Torrealba (Sabaneta)', 66),
(1429, 'Andrés Eloy Blanco (El Cantón)', 66),
(1430, 'Antonio José De Sucre (Socopó)', 66),
(1431, 'Arismendi (Arismendi)', 66),
(1432, 'Barinas (Barinas)', 66),
(1433, 'Bolívar (Barinitas)', 66),
(1434, 'Cruz Paredes (Barrancas)', 66),
(1435, 'Ezequiel Zamora (Santa Bárbara)', 66),
(1436, 'Obispos (Obispos)', 66),
(1437, 'Pedraza (Ciudad Bolivia)', 66),
(1438, 'Rojas (Libertad)', 66),
(1439, 'Sosa (Ciudad De Nutrias)', 66),
(1440, 'Caroní (Ciudat Guayana)', 67),
(1441, 'Cedeño (Caicara Del Orinoco)', 67),
(1442, 'El Callao (El Callao)', 67),
(1443, 'Gran Sabana (Santa Elena De Uairén)', 67),
(1444, 'Heres (Ciudat Bolívar)', 67),
(1445, 'Padre Pedro Chen (El Palmar)', 67),
(1446, 'Piar (Upata)', 67),
(1447, 'Raúl Leoni (Ciudad Piar)', 67),
(1448, 'Roscio (Guasipati)', 67),
(1449, 'Sifontes (Tumeremo)', 67),
(1450, 'Sucre (Maripa)', 67),
(1451, 'Bejuma (Bejuma)', 68),
(1452, 'Carlos Arvelo (Güigüe)', 68),
(1453, 'Diego Ibarra (Mariara)', 68),
(1454, 'Guacara (Guacara)', 68),
(1455, 'Juan José Mora (Morón)', 68),
(1456, 'Libertador (Tocuyito)', 68),
(1457, 'Los Guayos (Los Guayos)', 68),
(1458, 'Miranda (Miranda)', 68),
(1459, 'Montalbán (Montalbán)', 68),
(1460, 'Naguanagua (Naguanagua)', 68),
(1461, 'Puerto Cabello (Puerto Cabello)', 68),
(1462, 'San Diego (San Diego)', 68),
(1463, 'San Joaquín (San Joaquín)', 68),
(1464, 'Valencia', 68),
(1465, 'Caracas', 69),
(1466, 'Anzoátegui (Cojedes)', 70),
(1467, 'Falcón (Tinaquillo)', 70),
(1468, 'Girardot (El Baúl)', 70),
(1469, 'Lima Blanco (Macapo)', 70),
(1470, 'Pao De San Juan Bautista (El Pao)', 70),
(1471, 'Ricaurte (Libertad)', 70),
(1472, 'Rómulo Gallegos (Las Vegas)', 70),
(1473, 'San Carlos (San Carlos)', 70),
(1474, 'Tinaco (Tinaco)', 70),
(1475, 'Antonio Díaz (Curiapo)', 71),
(1476, 'Casacoima (Sierra Imataca)', 71),
(1477, 'Pedernales (Pedernales)', 71),
(1478, 'Tucupita (Tucupita)', 71),
(1479, 'Districo Capital', 72),
(1480, 'Acosta (San Juan De Los Cayos)', 73),
(1481, 'Bolívar (San Luis)', 73),
(1482, 'Buchivacoa (Capatárida)', 73),
(1483, 'Cacique Manaure (Yaracal)', 73),
(1484, 'Carirubana (Punto Fijo)', 73),
(1485, 'Colina (La Vela De Coro)', 73),
(1486, 'Dabajuro (Dabajuro)', 73),
(1487, 'Democracia (Pedregal)', 73),
(1488, 'Falcón (Pueblo Nuevo)', 73),
(1489, 'Federación (Churuguara)', 73),
(1490, 'Jacura (Jacura)', 73),
(1491, 'Los Taques (Santa Cruz De Los Taques)', 73),
(1492, 'Mauroa (Mene De Mauroa)', 73),
(1493, 'Miranda (Santa Ana De Coro)', 73),
(1494, 'Monseñor Iturriza (Chichiriviche)', 73),
(1495, 'Palmasola (Palmasola)', 73),
(1496, 'Petit (Cabure)', 73),
(1497, 'Píritu (Píritu)', 73),
(1498, 'Punta Cardon', 73),
(1499, 'San Francisco (Mirimire)', 73),
(1500, 'Silva (Tucacas)', 73),
(1501, 'Sucre (La Cruz De Taratara)', 73),
(1502, 'Tocópero (Tocópero)', 73),
(1503, 'Unión (Santa Cruz De Bucaral)', 73),
(1504, 'Urumaco (Urumaco)', 73),
(1505, 'Zamora (Puerto Cumarebo)', 73),
(1506, 'Camaguán (Camaguán)', 74),
(1507, 'Chaguaramas (Chaguaramas)', 74),
(1508, 'El Socorro (El Socorro)', 74),
(1509, 'Francisco De Miranda (Calabozo)', 74),
(1510, 'José Félix Ribas (Tucupido)', 74),
(1511, 'José Tadeo Monagas', 74),
(1512, 'Juan Germán Roscio', 74),
(1513, 'Julián Mellado (El Sombrero)', 74),
(1514, 'Las Mercedes (Las Mercedes)', 74),
(1515, 'Leonardo Infante (Valle De La Pascua)', 74),
(1516, 'Ortíz (Ortíz)', 74),
(1517, 'Pedro Zaraza (Zaraza)', 74),
(1518, 'San Gerónimo De Guayabal (Guayabal)', 74),
(1519, 'San José De Guaribe', 74),
(1520, 'Santa María De Ipire', 74),
(1521, 'Andrés Eloy Blanco (Sanare)', 75),
(1522, 'Crespo (Duaca)', 75),
(1523, 'Iribarren (Barquisimeto)', 75),
(1524, 'Jiménez (Quibor)', 75),
(1525, 'Morán (El Tocuyo)', 75),
(1526, 'Palavecino (Cabudare)', 75),
(1527, 'Simón Planas (Sarare)', 75),
(1528, 'Torres (Carora)', 75),
(1529, 'Urdaneta (Siquisique)', 75),
(1530, 'Alberto Adriani (El Vigía)', 76),
(1531, 'Andrés Bello (La Azulita)', 76),
(1532, 'Antonio Pinto Salinas', 76),
(1533, 'Aricagua (Aricagua)', 76),
(1534, 'Arzobispo Chacón (Canaguá)', 76),
(1535, 'Campo Elías (Ejido)', 76),
(1536, 'Caracciolo Parra Olmedo (Tucaní)', 76),
(1537, 'Cardenal Quintero (Santo Domingo)', 76),
(1538, 'Guaraque (Guaraque)', 76),
(1539, 'Julio César Salas (Arapuey)', 76),
(1540, 'Justo Briceño (Torondoy)', 76),
(1541, 'Libertador (Merida)', 76),
(1542, 'Miranda (Timotes)', 76),
(1543, 'Obispo Ramos De Lora', 76),
(1544, 'Padre Norega (Santa María De Caparo)', 76),
(1545, 'Pueblo Llano (Pueblo Llano)', 76),
(1546, 'Rangel (Mucuchíes)', 76),
(1547, 'Rivas Dávila (Bailadores)', 76),
(1548, 'Santos Marquina (Tabay)', 76),
(1549, 'Sucre (Lagunillas)', 76),
(1550, 'Tovar (Tovar)', 76),
(1551, 'Tulio Febres Cordero (Nueva Bolivia)', 76),
(1552, 'Zea (Zea)', 76),
(1553, 'Acevedo (Caucagua)', 77),
(1554, 'Andrés Bello', 77),
(1555, 'Baruta (Baruta)', 77),
(1556, 'Brión (Higuerote)', 77),
(1557, 'Buroz (Mamporal)', 77),
(1558, 'Carrizal (Carrizal)', 77),
(1559, 'Chacao (Chacao)', 77),
(1560, 'Cristóbal Rojas (Charallave)', 77),
(1561, 'El Hatillo (El Hatillo)', 77),
(1562, 'Guaicaipuro (Los Teques)', 77),
(1563, 'Independencia (Santa Teresa Del Tuy)', 77),
(1564, 'Lander (Ocumare Del Tuy)', 77),
(1565, 'Los Salias (San Antonio De Los Altos)', 77),
(1566, 'Páez (Río Chico)', 77),
(1567, 'Paz Castillo (Santa Lucía)', 77),
(1568, 'Pedro Gual (Cúpira)', 77),
(1569, 'Plaza (Guarenas)', 77),
(1570, 'Simón Bolívar', 77),
(1571, 'Sucre (Petare)', 77),
(1572, 'Urdaneta (Cúa)', 77),
(1573, 'Zamora (Guatire)', 77),
(1574, 'Acosta (San Antonio De Capayacuar)', 78),
(1575, 'Aguasay (Aguasay)', 78),
(1576, 'Bolívar (Caripito)', 78),
(1577, 'Caripe (Caripe)', 78),
(1578, 'Cedeño (Caicara)', 78),
(1579, 'Ezequiel Zamora (Punta De Mata)', 78),
(1580, 'Libertador (Temblador)', 78),
(1581, 'Maturín (Maturín)', 78),
(1582, 'Piar (Aragua)', 78),
(1583, 'Punceres (Quiriquire)', 78),
(1584, 'Santa Bárbara (Santa Bárbara)', 78),
(1585, 'Sotillo (Barrancas Del Orinco)', 78),
(1586, 'Uracoa (Uracoa)', 78),
(1587, 'Antolín Del Campo', 79),
(1588, 'Arismendi (La Asunción)', 79),
(1589, 'Díaz (San Juan Bautista)', 79),
(1590, 'García (El Valle Del Espíritu Santo)', 79),
(1591, 'Gómez (Santa Ana)', 79),
(1592, 'Maneiro (Pampatar)', 79),
(1593, 'Marcano (Juan Griego)', 79),
(1594, 'Mariño (Porlamar)', 79),
(1595, 'Península De Macanao (Boca De Río)', 79),
(1596, 'Tubores (Punta De Piedras)', 79),
(1597, 'Villalba (San Pedro De Coche)', 79),
(1598, 'Agua Blanca (Agua Blanca)', 80),
(1599, 'Araure (Araure)', 80),
(1600, 'Esteller (Píritu)', 80),
(1601, 'Guanare (Guanare)', 80),
(1602, 'Guanarito (Guanarito)', 80),
(1603, 'Monseñor José Vicenti De Unda', 80),
(1604, 'Ospino (Ospino)', 80),
(1605, 'Páez (Acarigua)', 80),
(1606, 'Papelón (Papelón)', 80),
(1607, 'San Genaro De Boconoíto', 80),
(1608, 'San Rafael De Onoto', 80),
(1609, 'Santa Rosalía (El Playón)', 80),
(1610, 'Sucre (Biscucuy)', 80),
(1611, 'Turén (Villa Bruzual)', 80),
(1612, 'Andrés Eloy Blanco (Casanay)', 81),
(1613, 'Andrés Mata (San José De Aerocuar)', 81),
(1614, 'Arismendi (Río Caribe)', 81),
(1615, 'Benítez (El Pilar)', 81),
(1616, 'Beremúdez (Carúpano)', 81),
(1617, 'Bolívar (Marigüitar)', 81),
(1618, 'Cajigal (Yaguaraparo)', 81),
(1619, 'Cruz Salmerón Acosta (Araya)', 81),
(1620, 'Libertador (Tunapuy)', 81),
(1621, 'Mariño(Irapa)', 81),
(1622, 'Mejía (San Antonio Del Golfo)', 81),
(1623, 'Montes (Cumanacoa)', 81),
(1624, 'Ribero (Cariaco)', 81),
(1625, 'Sucre (Cumaná)', 81),
(1626, 'Valdez (Güiria)', 81),
(1627, 'Andrés Bello(Cordero)', 82),
(1628, 'Antonio Rómulo Costa (Las Mesas)', 82),
(1629, 'Ayacucho (Colón)', 82),
(1630, 'Bolívar (San Antonio Del Táchira)', 82),
(1631, 'Cárdenas (Táriba)', 82),
(1632, 'Córdoba (Santa Ana De Táchira)', 82),
(1633, 'Fernández Feo (San Rafael Del Piñal)', 82),
(1634, 'Francisco De Miranda', 82),
(1635, 'García De Hevia (La Fría)', 82),
(1636, 'Guásimos (Palmira)', 82),
(1637, 'Independencia (Capacho Nuevo)', 82),
(1638, 'Jáuregui (La Grita)', 82),
(1639, 'José María Vargas (El Cobre)', 82),
(1640, 'Junín (Rubio)', 82),
(1641, 'Libertad (Capacho Viejo)', 82),
(1642, 'Libertador (Abejales)', 82),
(1643, 'Lobatera (Lobatera)', 82),
(1644, 'Michelena (Michelena)', 82),
(1645, 'Panamericano (Coloncito)', 82),
(1646, 'Pedro María Ureña (Ureña)', 82),
(1647, 'Rafael Urdaneta (Delicias)', 82),
(1648, 'Samuel Darío Maldonado (La Tendida)', 82),
(1649, 'San Cristobal', 82),
(1650, 'San Cristóbal (San Cristóbal)', 82),
(1651, 'Seboruco (Seboruco)', 82),
(1652, 'Simón Rodríguez (San Simón)', 82),
(1653, 'Andrés Bello', 83),
(1654, 'Boconó (Boconó)', 83),
(1655, 'Bolívar (Sabana Grande)', 83),
(1656, 'Candelaria (Chejendé)', 83),
(1657, 'Carache (Carache)', 83),
(1658, 'Escuque (Escuque)', 83),
(1659, 'José Felipe Márquez Cañizalez', 83),
(1660, 'Juan Vicente Campos Elías', 83),
(1661, 'La Ceiba (Santa Apolonia)', 83),
(1662, 'Miranda (El Dividive)', 83),
(1663, 'Monte Carmelo (Monte Carmelo)', 83),
(1664, 'Motatán (Motatán)', 83),
(1665, 'Pampán (Pampán)', 83),
(1666, 'Pampanito (Pampanito)', 83),
(1667, 'Rafael Rangel (Betijoque)', 83),
(1668, 'San Rafael De Carvajal', 83),
(1669, 'Sucre (Queniquea)', 83),
(1670, 'Sucre (Sabana De Mendoza)', 83),
(1671, 'Trujillo (Trujillo)', 83),
(1672, 'Urdaneta (La Quebrada)', 83),
(1673, 'Valera (Valera)', 83),
(1674, 'Torbes (San Josecito)', 84),
(1675, 'Vargas (La Guaira)', 84),
(1676, 'Venezuela', 85),
(1677, 'Arístides Bastidas (San Pablo)', 86),
(1678, 'Bolívar (Aroa)', 86),
(1679, 'Bruzual (Chivacoa)', 86),
(1680, 'Cocorote (Cocorote)', 86),
(1681, 'Independencia (Independencia)', 86),
(1682, 'José Antonio Páez', 86),
(1683, 'La Trinidad (Boraure)', 86),
(1684, 'Manuel Monge (Yumare)', 86),
(1685, 'Nirgua (Nirgua)', 86),
(1686, 'Peña (Yaritagua)', 86),
(1687, 'San Felipe (San Felipe)', 86),
(1688, 'Sucre (Guama)', 86),
(1689, 'Urachiche (Urachiche)', 86),
(1690, 'Uribante (Pregonero)', 86),
(1691, 'Veroes (Farriar)', 86),
(1692, 'Almirante Padilla (El Toro)', 87),
(1693, 'Asunción', 87),
(1694, 'Baralt (San Timoteo)', 87),
(1695, 'Cabimas (Cabimas)', 87),
(1696, 'Catatumbo (Encontrados)', 87),
(1697, 'Colón (San Carlos Del Zulia)', 87),
(1698, 'El Zulia Venezuela', 87),
(1699, 'Francisco Javier Pulgar', 87),
(1700, 'Jesús Enrique Losada (La Concepción)', 87),
(1701, 'Jesús María Semprún (Casigua El Cubo)', 87),
(1702, 'La Cañada De Urdaneta (Concepción)', 87),
(1703, 'Lagunillas (Ciudat Ojeda)', 87),
(1704, 'Machiques De Perijá (Machiques)', 87),
(1705, 'Mara (San Rafael Del Moján)', 87),
(1706, 'Maracaibo (Maracaibo)', 87),
(1707, 'Miranda (Los Puertos De Altagracia)', 87),
(1708, 'Páez (Sinamaica)', 87),
(1709, 'Rosario De Perijá (La Villa Del Rosario)', 87),
(1710, 'San Francisco (San Francisco)', 87),
(1711, 'San Judas Tadeo (Umoquena)', 87),
(1712, 'Santa Rita (Santa Rita)', 87),
(1713, 'Simón Bolívar (Tía Juana)', 87),
(1714, 'Sucre (Bobures)', 87),
(1715, 'Valmore Rodríguez (Bachaquero)', 87);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `overtime`
--

DROP TABLE IF EXISTS `overtime`;
CREATE TABLE IF NOT EXISTS `overtime` (
  `id` int NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(15) NOT NULL,
  `hours` double NOT NULL,
  `rate` double NOT NULL,
  `date_overtime` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parentesco`
--

DROP TABLE IF EXISTS `parentesco`;
CREATE TABLE IF NOT EXISTS `parentesco` (
  `id` int NOT NULL AUTO_INCREMENT,
  `conyugue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hijo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `padre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `madre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hermano` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

DROP TABLE IF EXISTS `personal`;
CREATE TABLE IF NOT EXISTS `personal` (
  `id` int NOT NULL AUTO_INCREMENT,
  `numero_documento` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fecha_expedicion` date DEFAULT NULL,
  `primer_nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `segundo_nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `primer_apellido` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `segundo_apellido` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `edad` int DEFAULT NULL,
  `estatura` float DEFAULT NULL,
  `tipo_sangre` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `factor_rh` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pais` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `departamento` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ciudad` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `direccion_residencia` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `estado_civil` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto` blob,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `delito_id` int DEFAULT NULL,
  `parentesco_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `delito_id` (`delito_id`),
  KEY `parentesco_id` (`parentesco_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas_parentesco_personas`
--

DROP TABLE IF EXISTS `personas_parentesco_personas`;
CREATE TABLE IF NOT EXISTS `personas_parentesco_personas` (
  `personas_id` int NOT NULL,
  `parentesco_personas_id` int NOT NULL,
  PRIMARY KEY (`personas_id`,`parentesco_personas_id`),
  KEY `parentesco_personas_id` (`parentesco_personas_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `position`
--

DROP TABLE IF EXISTS `position`;
CREATE TABLE IF NOT EXISTS `position` (
  `id` int NOT NULL AUTO_INCREMENT,
  `description` varchar(150) NOT NULL,
  `rate` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procuraduria`
--

DROP TABLE IF EXISTS `procuraduria`;
CREATE TABLE IF NOT EXISTS `procuraduria` (
  `id` int NOT NULL AUTO_INCREMENT,
  `certificado` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hora` time NOT NULL,
  `fecha` date DEFAULT NULL,
  `resultado` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `siri` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sancion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `providencia` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `documento` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `actualizacion` timestamp NULL DEFAULT NULL,
  `personas_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

DROP TABLE IF EXISTS `propiedades`;
CREATE TABLE IF NOT EXISTS `propiedades` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ciudad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `oficina` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `matricula` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `direccion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `documento` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fechaActualizacion` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `propiedades`
--

INSERT INTO `propiedades` (`id`, `ciudad`, `oficina`, `matricula`, `direccion`, `documento`, `fechaActualizacion`) VALUES
(1, 'Ciudad A', 'Oficina 1', 'Matricula 123', 'Dirección 1', 'Documento 1', '2023-08-02 12:34:56'),
(2, 'Ciudad B', 'Oficina 2', 'Matricula 456', 'Dirección 2', 'Documento 2', '2023-08-02 14:30:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ramajudicialprocesos`
--

DROP TABLE IF EXISTS `ramajudicialprocesos`;
CREATE TABLE IF NOT EXISTS `ramajudicialprocesos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `numeroProceso` int DEFAULT NULL,
  `fechaRadicacion` date DEFAULT NULL,
  `tipoProceso` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `clase` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `estatus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pdf` blob,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rnmcponal`
--

DROP TABLE IF EXISTS `rnmcponal`;
CREATE TABLE IF NOT EXISTS `rnmcponal` (
  `id` int NOT NULL AUTO_INCREMENT,
  `expediente` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fechaHechos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lugarHechos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `departamento` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ciudad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `municipio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `articulo` int DEFAULT NULL,
  `numeral` int DEFAULT NULL,
  `ampliacionHechos` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `descargos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `medidas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `documento` blob,
  `fechaActualizacion` timestamp NULL DEFAULT NULL,
  `personas_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rnmcponal`
--

INSERT INTO `rnmcponal` (`id`, `expediente`, `fechaHechos`, `lugarHechos`, `departamento`, `ciudad`, `municipio`, `articulo`, `numeral`, `ampliacionHechos`, `descargos`, `medidas`, `documento`, `fechaActualizacion`, `personas_id`) VALUES
(1, 'EXP-001', '2023-07-15', 'Calle 123', 'Sucre', 'Sincelejo', 'Ayapel', 123, 1, 'Ampliación de los hechos...', 'Descargos presentados...', 'Medidas tomadas...', NULL, '2023-07-27 18:00:00', 101),
(2, 'EXP-002', '2023-06-20', 'Avenida ABC', 'Cordoba', 'Monteria', 'La cruz', 456, 2, 'Ampliación de los hechos...', 'Descargos presentados...', 'Medidas tomadas...', NULL, '2023-07-27 18:30:00', 102),
(3, 'EXP-003', '2023-07-10', 'Carretera XYZ', 'Bolivar', 'Cartagena', 'Monte de Maria', 789, 3, 'Ampliación de los hechos...', 'Descargos presentados...', 'Medidas tomadas...', NULL, '2023-07-27 19:00:00', 103);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `schedules`
--

DROP TABLE IF EXISTS `schedules`;
CREATE TABLE IF NOT EXISTS `schedules` (
  `id` int NOT NULL AUTO_INCREMENT,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `schedules`
--

INSERT INTO `schedules` (`id`, `time_in`, `time_out`) VALUES
(1, '07:00:00', '16:00:00'),
(2, '08:00:00', '17:00:00'),
(3, '09:00:00', '18:00:00'),
(4, '10:00:00', '19:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `simit`
--

DROP TABLE IF EXISTS `simit`;
CREATE TABLE IF NOT EXISTS `simit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `numeroComparendo` int DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `secretaria` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `infraccion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `valor` int DEFAULT NULL,
  `pdf` blob,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `simit`
--

INSERT INTO `simit` (`id`, `numeroComparendo`, `fecha`, `secretaria`, `infraccion`, `valor`, `pdf`) VALUES
(1, 12345, '2023-07-15', 'Secretaría de Movilidad', 'Exceso de velocidad', 500000, NULL),
(2, 67890, '2023-06-20', 'Secretaría de Tránsito', 'No detenerse en semáforo en rojo', 350000, NULL),
(3, 23456, '2023-07-10', 'Secretaría de Transporte', 'Estacionamiento en zona prohibida', 200000, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `spoa`
--

DROP TABLE IF EXISTS `spoa`;
CREATE TABLE IF NOT EXISTS `spoa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `noticia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `calidad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `delito` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fechaHechos` date DEFAULT NULL,
  `ampliacionHechos` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `documento` blob,
  `fechaActualizacion` timestamp NULL DEFAULT NULL,
  `personas_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `spoa`
--

INSERT INTO `spoa` (`id`, `noticia`, `calidad`, `delito`, `fechaHechos`, `ampliacionHechos`, `documento`, `fechaActualizacion`, `personas_id`) VALUES
(2, 'Lesiones personales', 'Caso cerrado', 'Lesiones', '2023-06-20', 'Las víctimas recibieron atención médica.', NULL, '2023-07-27 16:30:00', 102),
(3, 'Homicidio', 'En juicio', 'Homicidio', '2023-07-10', 'Se han presentado testigos clave durante el juicio.', NULL, '2023-07-27 17:00:00', 103);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

DROP TABLE IF EXISTS `telefono`;
CREATE TABLE IF NOT EXISTS `telefono` (
  `id` int NOT NULL AUTO_INCREMENT,
  `numero` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_personal` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `telefono`
--

INSERT INTO `telefono` (`id`, `numero`, `descripcion`, `id_personal`) VALUES
(1, '1234567890', 'Teléfono principal', 101),
(2, '9876543210', 'Teléfono móvil', 101),
(3, '5555555555', 'Teléfono de trabajo', 102);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumento`
--

DROP TABLE IF EXISTS `tipodocumento`;
CREATE TABLE IF NOT EXISTS `tipodocumento` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `personas_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipodocumento`
--

INSERT INTO `tipodocumento` (`id`, `nombre`, `personas_id`) VALUES
(1, 'Cédula de ciudadanía', 101),
(2, 'Tarjeta de identidad', 102),
(3, 'Pasaporte', 103);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

DROP TABLE IF EXISTS `vehiculos`;
CREATE TABLE IF NOT EXISTS `vehiculos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipo_Vehiculo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `placas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `modelo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `marca` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `linea` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `secretaria_Transito` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `documento` blob,
  `fecha_Actualizacion` timestamp NULL DEFAULT NULL,
  `personas_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `tipo_Vehiculo`, `placas`, `modelo`, `marca`, `linea`, `secretaria_Transito`, `documento`, `fecha_Actualizacion`, `personas_id`) VALUES
(1, 'Camioneta', 'ABC0981', '2093', 'Toyota', 'española', 'cali', '', '0000-00-00 00:00:00', 0);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `admin_permissions`
--
ALTER TABLE `admin_permissions`
  ADD CONSTRAINT `admin_permissions_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `admin_permissions_ibfk_2` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
