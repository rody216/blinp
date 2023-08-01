-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 30-07-2023 a las 22:10:13
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `created_on`) VALUES
(1, 'admin', '$2y$10$UrGSvHTWm8.ZK4BzPmo8iuqsK6XF5RfHay6ooC5D50y/nShon5wqe', 'Admin', 'Admin', 'Matrix rojo.gif', '2019-12-18');

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
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `delitos`
--

INSERT INTO `delitos` (`id`, `nombre`) VALUES
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
-- Estructura de tabla para la tabla `empleados`
--

DROP TABLE IF EXISTS `empleados`;
CREATE TABLE IF NOT EXISTS `empleados` (
  `no_emp` int NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `nombre` varchar(14) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `apellido` varchar(16) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `genero` enum('M','F') CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `fecha_ingreso` date NOT NULL,
  PRIMARY KEY (`no_emp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`no_emp`, `fecha_nacimiento`, `nombre`, `apellido`, `genero`, `fecha_ingreso`) VALUES
(10001, '1953-09-02', 'Georgi', 'Facello', 'M', '1986-06-26'),
(10002, '1964-06-02', 'Bezalel', 'Simmel', 'F', '1985-11-21'),
(10003, '1959-12-03', 'Parto', 'Bamford', 'M', '1986-08-28'),
(10004, '1954-05-01', 'Chirstian', 'Koblick', 'M', '1986-12-01'),
(10005, '1955-01-21', 'Kyoichi', 'Maliniak', 'M', '1989-09-12'),
(10006, '1953-04-20', 'Anneke', 'Preusig', 'F', '1989-06-02'),
(10007, '1957-05-23', 'Tzvetan', 'Zielinski', 'F', '1989-02-10'),
(10008, '1958-02-19', 'Saniya', 'Kalloufi', 'M', '1994-09-15'),
(10009, '1952-04-19', 'Sumant', 'Peac', 'F', '1985-02-18'),
(10010, '1963-06-01', 'Duangkaew', 'Piveteau', 'F', '1989-08-24'),
(10011, '1953-11-07', 'Mary', 'Sluis', 'F', '1990-01-22'),
(10012, '1960-10-04', 'Patricio', 'Bridgland', 'M', '1992-12-18'),
(10013, '1963-06-07', 'Eberhardt', 'Terkki', 'M', '1985-10-20'),
(10014, '1956-02-12', 'Berni', 'Genin', 'M', '1987-03-11'),
(10015, '1959-08-19', 'Guoxiang', 'Nooteboom', 'M', '1987-07-02'),
(10016, '1961-05-02', 'Kazuhito', 'Cappelletti', 'M', '1995-01-27'),
(10017, '1958-07-06', 'Cristinel', 'Bouloucos', 'F', '1993-08-03'),
(10018, '1954-06-19', 'Kazuhide', 'Peha', 'F', '1987-04-03'),
(10019, '1953-01-23', 'Lillian', 'Haddadi', 'M', '1999-04-30'),
(10020, '1952-12-24', 'Mayuko', 'Warwick', 'M', '1991-01-26'),
(10021, '1960-02-20', 'Ramzi', 'Erde', 'M', '1988-02-10'),
(10022, '1952-07-08', 'Shahaf', 'Famili', 'M', '1995-08-22'),
(10023, '1953-09-29', 'Bojan', 'Montemayor', 'F', '1989-12-17'),
(10024, '1958-09-05', 'Suzette', 'Pettey', 'F', '1997-05-19'),
(10025, '1958-10-31', 'Prasadram', 'Heyers', 'M', '1987-08-17'),
(10026, '1953-04-03', 'Yongqiao', 'Berztiss', 'M', '1995-03-20'),
(10027, '1962-07-10', 'Divier', 'Reistad', 'F', '1989-07-07'),
(10028, '1963-11-26', 'Domenick', 'Tempesti', 'M', '1991-10-22'),
(10029, '1956-12-13', 'Otmar', 'Herbst', 'M', '1985-11-20'),
(10030, '1958-07-14', 'Elvis', 'Demeyer', 'M', '1994-02-17'),
(10031, '1959-01-27', 'Karsten', 'Joslin', 'M', '1991-09-01'),
(10032, '1960-08-09', 'Jeong', 'Reistad', 'F', '1990-06-20'),
(10033, '1956-11-14', 'Arif', 'Merlo', 'M', '1987-03-18'),
(10034, '1962-12-29', 'Bader', 'Swan', 'M', '1988-09-21'),
(10035, '1953-02-08', 'Alain', 'Chappelet', 'M', '1988-09-05'),
(10036, '1959-08-10', 'Adamantios', 'Portugali', 'M', '1992-01-03'),
(10037, '1963-07-22', 'Pradeep', 'Makrucki', 'M', '1990-12-05'),
(10038, '1960-07-20', 'Huan', 'Lortz', 'M', '1989-09-20'),
(10039, '1959-10-01', 'Alejandro', 'Brender', 'M', '1988-01-19'),
(10040, '1959-09-13', 'Weiyi', 'Meriste', 'F', '1993-02-14'),
(10041, '1959-08-27', 'Uri', 'Lenart', 'F', '1989-11-12'),
(10042, '1956-02-26', 'Magy', 'Stamatiou', 'F', '1993-03-21'),
(10043, '1960-09-19', 'Yishay', 'Tzvieli', 'M', '1990-10-20'),
(10044, '1961-09-21', 'Mingsen', 'Casley', 'F', '1994-05-21'),
(10045, '1957-08-14', 'Moss', 'Shanbhogue', 'M', '1989-09-02'),
(10046, '1960-07-23', 'Lucien', 'Rosenbaum', 'M', '1992-06-20'),
(10047, '1952-06-29', 'Zvonko', 'Nyanchama', 'M', '1989-03-31'),
(10048, '1963-07-11', 'Florian', 'Syrotiuk', 'M', '1985-02-24'),
(10049, '1961-04-24', 'Basil', 'Tramer', 'F', '1992-05-04'),
(10050, '1958-05-21', 'Yinghua', 'Dredge', 'M', '1990-12-25'),
(10051, '1953-07-28', 'Hidefumi', 'Caine', 'M', '1992-10-15'),
(10052, '1961-02-26', 'Heping', 'Nitsch', 'M', '1988-05-21'),
(10053, '1954-09-13', 'Sanjiv', 'Zschoche', 'F', '1986-02-04'),
(10054, '1957-04-04', 'Mayumi', 'Schueller', 'M', '1995-03-13'),
(10055, '1956-06-06', 'Georgy', 'Dredge', 'M', '1992-04-27'),
(10056, '1961-09-01', 'Brendon', 'Bernini', 'F', '1990-02-01'),
(10057, '1954-05-30', 'Ebbe', 'Callaway', 'F', '1992-01-15'),
(10058, '1954-10-01', 'Berhard', 'McFarlin', 'M', '1987-04-13'),
(10059, '1953-09-19', 'Alejandro', 'McAlpine', 'F', '1991-06-26'),
(10060, '1961-10-15', 'Breannda', 'Billingsley', 'M', '1987-11-02'),
(10061, '1962-10-19', 'Tse', 'Herber', 'M', '1985-09-17'),
(10062, '1961-11-02', 'Anoosh', 'Peyn', 'M', '1991-08-30'),
(10063, '1952-08-06', 'Gino', 'Leonhardt', 'F', '1989-04-08'),
(10064, '1959-04-07', 'Udi', 'Jansch', 'M', '1985-11-20'),
(10065, '1963-04-14', 'Satosi', 'Awdeh', 'M', '1988-05-18'),
(10066, '1952-11-13', 'Kwee', 'Schusler', 'M', '1986-02-26'),
(10067, '1953-01-07', 'Claudi', 'Stavenow', 'M', '1987-03-04'),
(10068, '1962-11-26', 'Charlene', 'Brattka', 'M', '1987-08-07'),
(10069, '1960-09-06', 'Margareta', 'Bierman', 'F', '1989-11-05'),
(10070, '1955-08-20', 'Reuven', 'Garigliano', 'M', '1985-10-14'),
(10071, '1958-01-21', 'Hisao', 'Lipner', 'M', '1987-10-01'),
(10072, '1952-05-15', 'Hironoby', 'Sidou', 'F', '1988-07-21'),
(10073, '1954-02-23', 'Shir', 'McClurg', 'M', '1991-12-01'),
(10074, '1955-08-28', 'Mokhtar', 'Bernatsky', 'F', '1990-08-13'),
(10075, '1960-03-09', 'Gao', 'Dolinsky', 'F', '1987-03-19'),
(10076, '1952-06-13', 'Erez', 'Ritzmann', 'F', '1985-07-09'),
(10077, '1964-04-18', 'Mona', 'Azuma', 'M', '1990-03-02'),
(10078, '1959-12-25', 'Danel', 'Mondadori', 'F', '1987-05-26'),
(10079, '1961-10-05', 'Kshitij', 'Gils', 'F', '1986-03-27'),
(10080, '1957-12-03', 'Premal', 'Baek', 'M', '1985-11-19'),
(10081, '1960-12-17', 'Zhongwei', 'Rosen', 'M', '1986-10-30'),
(10082, '1963-09-09', 'Parviz', 'Lortz', 'M', '1990-01-03'),
(10083, '1959-07-23', 'Vishv', 'Zockler', 'M', '1987-03-31'),
(10084, '1960-05-25', 'Tuval', 'Kalloufi', 'M', '1995-12-15'),
(10085, '1962-11-07', 'Kenroku', 'Malabarba', 'M', '1994-04-09'),
(10086, '1962-11-19', 'Somnath', 'Foote', 'M', '1990-02-16'),
(10087, '1959-07-23', 'Xinglin', 'Eugenio', 'F', '1986-09-08'),
(10088, '1954-02-25', 'Jungsoon', 'Syrzycki', 'F', '1988-09-02'),
(10089, '1963-03-21', 'Sudharsan', 'Flasterstein', 'F', '1986-08-12'),
(10090, '1961-05-30', 'Kendra', 'Hofting', 'M', '1986-03-14'),
(10091, '1955-10-04', 'Amabile', 'Gomatam', 'M', '1992-11-18'),
(10092, '1964-10-18', 'Valdiodio', 'Niizuma', 'F', '1989-09-22'),
(10093, '1964-06-11', 'Sailaja', 'Desikan', 'M', '1996-11-05'),
(10094, '1957-05-25', 'Arumugam', 'Ossenbruggen', 'F', '1987-04-18'),
(10095, '1965-01-03', 'Hilari', 'Morton', 'M', '1986-07-15'),
(10096, '1954-09-16', 'Jayson', 'Mandell', 'M', '1990-01-14'),
(10097, '1952-02-27', 'Remzi', 'Waschkowski', 'M', '1990-09-15'),
(10098, '1961-09-23', 'Sreekrishna', 'Servieres', 'F', '1985-05-13'),
(10099, '1956-05-25', 'Valter', 'Sullins', 'F', '1988-10-18'),
(10100, '1953-04-21', 'Hironobu', 'Haraldson', 'F', '1987-09-21'),
(10101, '1952-04-15', 'Perla', 'Heyers', 'F', '1992-12-28'),
(10102, '1959-11-04', 'Paraskevi', 'Luby', 'F', '1994-01-26'),
(10103, '1953-11-26', 'Akemi', 'Birch', 'M', '1986-12-02'),
(10104, '1961-11-19', 'Xinyu', 'Warwick', 'M', '1987-04-16'),
(10105, '1962-02-05', 'Hironoby', 'Piveteau', 'M', '1999-03-23'),
(10106, '1952-08-29', 'Eben', 'Aingworth', 'M', '1990-12-19'),
(10107, '1956-06-13', 'Dung', 'Baca', 'F', '1994-03-22'),
(10108, '1952-04-07', 'Lunjin', 'Giveon', 'M', '1986-10-02'),
(10109, '1958-11-25', 'Mariusz', 'Prampolini', 'F', '1993-06-16'),
(10110, '1957-03-07', 'Xuejia', 'Ullian', 'F', '1986-08-22'),
(10111, '1963-08-29', 'Hugo', 'Rosis', 'F', '1988-06-19'),
(10112, '1963-08-13', 'Yuichiro', 'Swick', 'F', '1985-10-08'),
(10113, '1963-11-13', 'Jaewon', 'Syrzycki', 'M', '1989-12-24'),
(10114, '1957-02-16', 'Munir', 'Demeyer', 'F', '1992-07-17'),
(10115, '1964-12-25', 'Chikara', 'Rissland', 'M', '1986-01-23'),
(10116, '1955-08-26', 'Dayanand', 'Czap', 'F', '1985-05-28'),
(10117, '1961-10-24', 'Kiyotoshi', 'Blokdijk', 'F', '1990-05-28'),
(10118, '1957-03-29', 'Zhonghui', 'Zyda', 'F', '1990-09-13'),
(10119, '1960-12-01', 'Domenick', 'Peltason', 'M', '1986-03-14'),
(10120, '1960-03-26', 'Armond', 'Fairtlough', 'F', '1996-07-06'),
(10121, '1962-07-14', 'Guoxiang', 'Ramsay', 'M', '1989-05-03'),
(10122, '1965-01-19', 'Ohad', 'Esposito', 'M', '1992-12-23'),
(10123, '1962-05-12', 'Hinrich', 'Randi', 'M', '1993-01-15'),
(10124, '1962-05-23', 'Geraldo', 'Marwedel', 'M', '1991-09-05'),
(10125, '1957-09-13', 'Syozo', 'Hiltgen', 'F', '1990-10-26'),
(10126, '1954-08-07', 'Kayoko', 'Valtorta', 'M', '1985-09-08'),
(10127, '1952-02-24', 'Subir', 'Baja', 'F', '1989-01-14'),
(10128, '1958-02-15', 'Babette', 'Lamba', 'F', '1988-06-06'),
(10129, '1955-12-02', 'Armond', 'Peir', 'M', '1985-12-10'),
(10130, '1955-04-27', 'Nishit', 'Casperson', 'M', '1988-06-21'),
(10131, '1952-02-19', 'Magdalena', 'Eldridge', 'M', '1994-11-17'),
(10132, '1956-12-15', 'Ayakannu', 'Skrikant', 'M', '1994-10-30'),
(10133, '1963-12-12', 'Giri', 'Isaak', 'M', '1985-12-15'),
(10134, '1953-04-15', 'Diederik', 'Siprelle', 'M', '1987-12-12'),
(10135, '1956-12-23', 'Nathan', 'Monkewich', 'M', '1988-02-19'),
(10136, '1961-09-14', 'Zissis', 'Pintelas', 'M', '1986-02-11'),
(10137, '1959-07-30', 'Maren', 'Hutton', 'M', '1985-02-18'),
(10138, '1955-04-24', 'Perry', 'Shimshoni', 'M', '1986-09-18'),
(10139, '1963-03-03', 'Ewing', 'Foong', 'F', '1998-03-15'),
(10140, '1957-03-11', 'Yucel', 'Auria', 'F', '1991-03-14'),
(10141, '1960-01-17', 'Shahaf', 'Ishibashi', 'F', '1993-05-06'),
(10142, '1956-08-29', 'Tzvetan', 'Hettesheimer', 'M', '1993-10-28'),
(10143, '1961-07-16', 'Sakthirel', 'Bakhtari', 'M', '1988-09-30'),
(10144, '1959-06-17', 'Marla', 'Brendel', 'M', '1985-10-14'),
(10145, '1956-03-30', 'Akemi', 'Esposito', 'F', '1987-08-01'),
(10146, '1959-01-12', 'Chenyi', 'Syang', 'M', '1988-06-28'),
(10147, '1964-10-13', 'Kazuhito', 'Encarnacion', 'M', '1986-08-21'),
(10148, '1957-10-04', 'Douadi', 'Azumi', 'M', '1995-10-10'),
(10149, '1953-05-20', 'Xiadong', 'Perry', 'F', '1986-11-05'),
(10150, '1955-01-29', 'Zhenbing', 'Perng', 'F', '1986-11-16'),
(10151, '1959-03-06', 'Itzchak', 'Lichtner', 'M', '1990-04-10'),
(10152, '1954-12-01', 'Jaques', 'Munro', 'F', '1986-01-27'),
(10153, '1955-12-15', 'Heekeun', 'Majewski', 'M', '1987-04-08'),
(10154, '1957-01-17', 'Abdulah', 'Thibadeau', 'F', '1990-12-12'),
(10155, '1959-12-07', 'Adas', 'Nastansky', 'M', '1990-01-05'),
(10156, '1964-09-19', 'Sumali', 'Fargier', 'M', '1985-03-10'),
(10157, '1954-04-23', 'Nigel', 'Aloisi', 'M', '1985-11-02'),
(10158, '1958-04-01', 'Khedija', 'Mitsuhashi', 'M', '1986-01-29'),
(10159, '1955-03-03', 'Serif', 'Buescher', 'M', '1991-05-29'),
(10160, '1953-10-18', 'Debatosh', 'Khasidashvili', 'M', '1989-01-30'),
(10161, '1953-04-06', 'Hairong', 'Mellouli', 'F', '1988-04-03'),
(10162, '1957-10-05', 'Florina', 'Eugenio', 'M', '1991-05-01'),
(10163, '1952-09-17', 'Karsten', 'Szmurlo', 'M', '1989-07-19'),
(10164, '1956-01-19', 'Jagoda', 'Braunmuhl', 'M', '1985-11-12'),
(10165, '1960-06-16', 'Miyeon', 'Macedo', 'M', '1988-05-17'),
(10166, '1953-05-10', 'Samphel', 'Siegrist', 'F', '1993-01-01'),
(10167, '1958-05-23', 'Duangkaew', 'Rassart', 'M', '1992-04-04'),
(10168, '1964-09-11', 'Dharmaraja', 'Stassinopoulos', 'M', '1986-12-06'),
(10169, '1961-05-03', 'Sampalli', 'Snedden', 'F', '1992-07-24'),
(10170, '1960-10-03', 'Kasturi', 'Jenevein', 'F', '1986-01-02'),
(10171, '1957-09-11', 'Herbert', 'Trachtenberg', 'M', '1989-07-22'),
(10172, '1957-03-25', 'Shigeu', 'Matzen', 'F', '1995-10-13'),
(10173, '1962-10-28', 'Shrikanth', 'Mahmud', 'M', '1992-03-21'),
(10174, '1959-05-15', 'Badri', 'Furudate', 'M', '1987-06-01'),
(10175, '1960-01-11', 'Aleksandar', 'Ananiadou', 'F', '1988-01-11'),
(10176, '1957-01-24', 'Brendon', 'Lenart', 'F', '1994-12-22'),
(10177, '1954-11-08', 'Pragnesh', 'Iisaka', 'M', '1993-02-06'),
(10178, '1963-03-13', 'Valery', 'Litvinov', 'M', '1986-10-07'),
(10179, '1961-11-25', 'Deniz', 'Duclos', 'F', '1990-10-04'),
(10180, '1956-01-29', 'Shaw', 'Wendorf', 'M', '1986-02-25'),
(10181, '1963-01-22', 'Sibyl', 'Nooteboom', 'M', '1988-06-22'),
(10182, '1961-02-04', 'Moriyoshi', 'Merey', 'F', '1990-09-02'),
(10183, '1954-10-17', 'Mechthild', 'Bonifati', 'M', '1996-08-11'),
(10184, '1957-05-22', 'Mihalis', 'Lowrie', 'M', '1987-10-29'),
(10185, '1959-12-05', 'Duro', 'Sidhu', 'F', '1986-03-01'),
(10186, '1953-07-16', 'Shigehito', 'Kropatsch', 'M', '1986-03-28'),
(10187, '1961-05-26', 'Tommaso', 'Narwekar', 'F', '1991-06-01'),
(10188, '1956-07-13', 'Christ', 'Muchinsky', 'F', '1987-08-27'),
(10189, '1955-11-12', 'Khalid', 'Erva', 'M', '1989-10-05'),
(10190, '1964-12-11', 'Arve', 'Fairtlough', 'F', '1986-06-23'),
(10191, '1959-04-08', 'Zdislav', 'Nastansky', 'M', '1986-04-10'),
(10192, '1960-09-16', 'Mohua', 'Falck', 'M', '1988-06-13'),
(10193, '1960-06-29', 'Masaru', 'Cheshire', 'M', '1991-07-28'),
(10194, '1954-01-29', 'Josyula', 'Hofmeyr', 'F', '1989-05-15'),
(10195, '1963-11-13', 'Annemarie', 'Redmiles', 'M', '1985-02-15'),
(10196, '1954-01-27', 'Marc', 'Hellwagner', 'M', '1994-11-16'),
(10197, '1963-08-06', 'Kasidit', 'Krzyzanowski', 'F', '1993-11-22'),
(10198, '1953-05-28', 'Pranav', 'Furedi', 'M', '1985-08-31'),
(10199, '1959-04-07', 'Kazuhisa', 'Ranta', 'M', '1997-04-29'),
(10200, '1961-12-31', 'Vidya', 'Awdeh', 'M', '1985-10-16');

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
  `address` text NOT NULL,
  `birthdate` date NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `position_id` int NOT NULL,
  `schedule_id` int NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`id`, `employee_id`, `firstname`, `lastname`, `address`, `birthdate`, `contact_info`, `gender`, `position_id`, `schedule_id`, `photo`, `created_on`) VALUES
(24, 'MAW817094635', 'Abelardo', 'Mejia', 'Calle 54 N 12-23', '1989-07-12', '', 'Female', 2, 2, '', '2020-01-07'),
(25, 'PJO724930615', 'Roberto', 'Velasquez', 'Av 15 12-72', '1989-06-13', '', 'Male', 1, 4, '', '2020-01-07');

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
  `id` int NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `parentesco`
--

INSERT INTO `parentesco` (`id`, `nombre`) VALUES
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
  `parentesco_id` int NOT NULL,
  `parentesco_personas_id` int NOT NULL,
  PRIMARY KEY (`parentesco_id`,`parentesco_personas_id`),
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
-- Estructura de tabla para la tabla `personas`
--

DROP TABLE IF EXISTS `personas`;
CREATE TABLE IF NOT EXISTS `personas` (
  `id` int NOT NULL,
  `numDocumento` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fExpedicion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pNombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sNombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pApellido` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sApellido` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fNacimiento` date DEFAULT NULL,
  `direccion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `estadoCivil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `eMail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

--
-- Volcado de datos para la tabla `position`
--

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
  `personas_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `telefono`
--

INSERT INTO `telefono` (`id`, `numero`, `descripcion`, `personas_id`) VALUES
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
COMMIT;

--
-- Estructura de tabla para la tabla `ramajudicialprocesos`
--


CREATE TABLE IF NOT EXISTS `ramajudicialprocesos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `numeroProceso` int DEFAULT NULL,
  `fechaRadicacion` date DEFAULT NULL,
  `tipoProceso` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `clase` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `estatus` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;





/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
