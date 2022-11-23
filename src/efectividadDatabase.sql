CREATE DATABASE `efectividad` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

-- efectividad.altamanual definition

CREATE TABLE `altamanual` (
  `nomina` varchar(50) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `titulo` varchar(10) DEFAULT NULL,
  `departamento` text DEFAULT NULL,
  `campus` varchar(5) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `clave` varchar(50) NOT NULL,
  PRIMARY KEY (`nomina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- efectividad.operarios definition

CREATE TABLE `operarios` (
  `nomina` varchar(50) NOT NULL,
  `operador` varchar(80) DEFAULT NULL,
  `opeMail` varchar(80) DEFAULT NULL,
  `extension` int(11) DEFAULT NULL,
  `privilegios` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`nomina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- efectividad.peticiones definition

CREATE TABLE `peticiones` (
  `peticion` varchar(10) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  `poblacion` varchar(25) DEFAULT NULL,
  `nivel` varchar(50) DEFAULT NULL,
  `texto` text DEFAULT NULL,
  `columnas` text DEFAULT NULL,
  `uso` text DEFAULT NULL,
  `estado` varchar(15) DEFAULT NULL,
  `asignado` varchar(50) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `entrega` date DEFAULT NULL,
  `fechaT` datetime DEFAULT NULL,
  `observaciones` text DEFAULT NULL,
  `id` int(11) NOT NULL,
  `archivoP` bit(1) DEFAULT NULL,
  `archivoR` bit(1) DEFAULT NULL,
  `archivo` varchar(100) DEFAULT NULL,
  `condiciones` text DEFAULT NULL,
  `telefono` text DEFAULT NULL,
  `fechaA` datetime DEFAULT NULL,
  `nomina` varchar(50) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `peticiones_un` (`peticion`),
  KEY `peticiones_FK` (`asignado`),
  KEY `peticiones_FK_1` (`nomina`),
  CONSTRAINT `peticiones_FK` FOREIGN KEY (`asignado`) REFERENCES `operarios` (`nomina`),
  CONSTRAINT `peticiones_FK_1` FOREIGN KEY (`nomina`) REFERENCES `altamanual` (`nomina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;