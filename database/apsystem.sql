-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-08-2023 a las 17:32:00
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
(1, '2023-07-15', '14:30:00', 'Positivo', '2023-07-27 22:00:00', 101),
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

--
-- Volcado de datos para la tabla `bancarios`
--

INSERT INTO `bancarios` (`id`, `entidad`, `tipoProducto`, `numeroProducto`, `archivo`, `personas_id`) VALUES
(1, 'bancolombia', 'targeta', '1242352325', NULL, NULL);

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
(1, 'Antioquia', 1),
(2, 'Valle del Cauca', 1),
(3, 'Pichincha', 2),
(4, 'Guayas', 2),
(5, 'Distrito Capital', 3),
(6, 'Miranda', 3);

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `disciplinarios`
--

INSERT INTO `disciplinarios` (`id`, `infraccion`, `correctivo`, `fecha`, `obs`, `pdf`) VALUES
(1, 'Incumplimiento de normas internas', 'Amonestación escrita', '2023-07-15', 'Falta leve', NULL),
(2, 'Falta de puntualidad', 'Suspensión temporal', '2023-06-20', 'Falta moderada', NULL),
(3, 'Conducta inapropiada', 'Terminación de contrato', '2023-07-10', 'Falta grave', NULL);

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
(1, 'Medellín', 1),
(2, 'Cali', 2),
(3, 'Quito', 3),
(4, 'Guayaquil', 4),
(5, 'Caracas', 5),
(6, 'Los Teques', 6);

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
-- Estructura de tabla para la tabla `paises`
--

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
-- Estructura de tabla para la tabla `parentesco`
--

DROP TABLE IF EXISTS `parentesco`;
CREATE TABLE IF NOT EXISTS `parentesco` (
  `parentesco_id` int NOT NULL AUTO_INCREMENT,
  `parestenco_nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`parentesco_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `parentesco`
--

INSERT INTO `parentesco` (`parentesco_id`, `parestenco_nombre`) VALUES
(1, 'Padre'),
(2, 'Madre'),
(3, 'Hijo'),
(4, 'Hija'),
(5, 'Abuelo'),
(6, 'Abuela');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parentesco_parentesco_personas`
--

DROP TABLE IF EXISTS `parentesco_parentesco_personas`;
CREATE TABLE IF NOT EXISTS `parentesco_parentesco_personas` (
  `p_id` int NOT NULL,
  `parentesco_personas_id` int NOT NULL,
  PRIMARY KEY (`p_id`,`parentesco_personas_id`),
  KEY `parentesco_personas_id` (`parentesco_personas_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parentesco_personas`
--

DROP TABLE IF EXISTS `parentesco_personas`;
CREATE TABLE IF NOT EXISTS `parentesco_personas` (
  `id` int NOT NULL,
  `personas_id` int DEFAULT NULL,
  `parentesco_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `parentesco_personas`
--

INSERT INTO `parentesco_personas` (`id`, `personas_id`, `parentesco_id`) VALUES
(1, 101, 1),
(2, 102, 2),
(3, 103, 3),
(4, 104, 4),
(5, 105, 5),
(6, 106, 6);

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
  `ciudad` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `oficina` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `matricula` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `documento` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fechaActualizacion` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `propiedades`
--

INSERT INTO `propiedades` (`id`, `ciudad`, `oficina`, `matricula`, `direccion`, `documento`, `fechaActualizacion`) VALUES
(1, 'Ciudad A', 'Oficina 1', 'Matricula 123', 'Dirección 1', 'Documento 1', '2023-08-02 12:34:56'),
(2, 'Ciudad B', 'Oficina 2', 'Matricula 456', 'Dirección 2', 'Documento 2', '2023-08-02 14:30:00'),
(3, 'Ciudad C', 'Oficina 3', 'Matricula 789', 'Dirección 3', 'Documento 3', '2023-08-02 15:45:00');

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
(1, 'Robo a mano armada', 'Investigación en curso', 'Robo', '2023-07-15', 'Los sospechosos portaban armas de fuego.', NULL, '2023-07-27 16:00:00', 101),
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
