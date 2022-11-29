--
-- Table structure for table `operarios`
--

DROP TABLE IF EXISTS `operarios`;
CREATE TABLE `operarios` (
  `nomina` varchar(50) NOT NULL,
  `operador` varchar(80) DEFAULT NULL,
  `opeMail` varchar(80) DEFAULT NULL,
  `extension` int(11) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `permisos` int(1) DEFAULT NULL,
  PRIMARY KEY (`nomina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


LOCK TABLES `operarios` WRITE;
INSERT INTO `operarios` VALUES ('N00468870','Ana Isabel Valenzuela','avalenzuela@tec.com',702,'avalenzuela','password123',2),('N02117251','Nadia Rivera','nrivera@tec.com',892,'nrivera','password123',2),('N07183763','Alejandro Octavio García','agarcia@tec.com',363,'agarcia','password123',3),('N09136393','Ricardo González','rgonzalez@tec.com',104,'rgonzalez','password123',2);
UNLOCK TABLES;

--
-- Table structure for table `peticiones`
--

DROP TABLE IF EXISTS `peticiones`;
CREATE TABLE `peticiones` (
  `id` int(11) NOT NULL,
  `poblacion` varchar(25) DEFAULT NULL,
  `campusConsulta` varchar(50) DEFAULT NULL,
  `nivelAcademico` varchar(50) DEFAULT NULL,
  `periodos` text DEFAULT NULL,
  `camposInformacion` text DEFAULT NULL,
  `condiciones` text DEFAULT NULL,
  `uso` text DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `estado` varchar(15) DEFAULT NULL,
  `asignado` varchar(50) DEFAULT NULL,
  `correoAsignado` varchar(50) DEFAULT NULL,
  `asignadoPor` varchar(50) DEFAULT NULL,
  `fechaAlta` datetime DEFAULT NULL,
  `fechaEntrega` datetime DEFAULT NULL,
  `fechaAsignacion` datetime DEFAULT NULL,
  `fechaTerminacion` datetime DEFAULT NULL,
  `nominaSolicitante` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `peticiones_FK_1` (`nominaSolicitante`),
  KEY `peticiones_FK` (`asignado`),
  CONSTRAINT `peticiones_FK` FOREIGN KEY (`asignado`) REFERENCES `operarios` (`nomina`),
  CONSTRAINT `peticiones_FK_1` FOREIGN KEY (`nominaSolicitante`) REFERENCES `solicitantes` (`nomina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



LOCK TABLES `peticiones` WRITE;
INSERT INTO `peticiones` VALUES (1,'Grupos','Laguna, Eugenio Garza Laguera, Valle Alto','Profesional Tec21','05/2023','Apellido Materno, Matricula, Nombre','Faucibus Orci Luctus Consulting','pede. Suspendisse dui.','risus varius orci,','Asignada','N00468870','aliquam.rutrum@tec.com','Ricardo González','2005-08-23 00:00:00','2023-05-18 17:31:00','2023-03-20 22:44:00','2023-07-21 08:41:00','A03876145'),(2,'Grupos','Valle Alto, Saltillo','Maestria','10/2023','Semestre, Carrera, Nombre','Aliquam Fringilla LLC','vel pede','in sodales elit','Atendida','N02117251','ante.lectus@tec.com','Alejandro Octavio García','2005-08-25 00:00:00','2022-11-22 00:50:00','2022-09-19 12:41:00','2021-12-08 21:16:00','A06425528'),(3,'Graduados','Valle Alto','Doctorado','02/2022','Nombre, Apellido Paterno','Neque Non Quam PC','blandit congue. In scelerisque scelerisque','cursus. Integer','Por asignar','N09136393','velit@tec.com','Alejandro Octavio García','2005-09-25 00:00:00','2023-06-11 17:04:00','2023-08-09 07:38:00','2022-08-18 11:10:00','A06148352'),(4,'Profesores','Eugenio Garza Sada, Laguna','Profesional Planes Anteriores','01/2023','Apellido Materno, Nombre','Turpis Consulting','laoreet, libero et tristique pellentesque,','cursus vestibulum. Mauris','Atendida','N09136393','agarcia@tec.com','Ana Isabel Valenzuela','2005-09-25 00:00:00','2023-09-17 04:39:00','2022-08-03 11:56:00','2023-07-28 10:10:00','A06615160'),(5,'Bajas','Eugenio Garza Laguera','Preparatoria','10/2023','Apellido Materno','In Molestie Tortor Company','placerat velit. Quisque varius. Nam','Proin velit.','Por asignar','N07183763','cursus.vestibulum@tec.com','Alejandro Octavio García','2005-09-25 00:00:00','2023-02-21 06:41:00','2023-02-20 18:57:00','2022-04-29 18:46:00','A07484367');
UNLOCK TABLES;

--
-- Table structure for table `solicitantes`
--

DROP TABLE IF EXISTS `solicitantes`;
CREATE TABLE `solicitantes` (
  `nomina` varchar(50) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `titulo` varchar(10) DEFAULT NULL,
  `departamento` text DEFAULT NULL,
  `campus` varchar(5) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `permisos` int(1) DEFAULT NULL,
  PRIMARY KEY (`nomina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


LOCK TABLES `solicitantes` WRITE;
INSERT INTO `solicitantes` VALUES ('A03876145','Kitra Davis','Prof.','Accounting','Salti','kitradavis3915@tec.com','81-2012-8227','kdavis','password123',1),('A06148352','Jermaine Smith','Esp.','Tech Support','Salti','jermainesmith5254@tec.com','81-5513-1362','jsmith','password123',1),('A06425528','Quinn Scott','Mtro.','Finances','Monte','quinnscott@tec.com','81-1151-5149','qscott','password123',1),('A06615160','Hiram Haynes','Prof.','Tech Support','Monte','hiramhaynes3793@tec.com','81-5870-7625','hhaynes','password123',1),('A07484367','Berk Pate','Prof.','Customer Relations','Cd. J','berkpate@tec.com','81-7466-3414','bpate','password123',1);
UNLOCK TABLES;
ALTER TABLE efectividad.peticiones ADD CONSTRAINT peticiones_pk PRIMARY KEY (id);

