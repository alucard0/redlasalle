-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: red_universidades
-- ------------------------------------------------------
-- Server version	10.1.26-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado` (
  `PK_Estado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`PK_Estado`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado`
--

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
INSERT INTO `estado` VALUES (1,'Aguascalientes'),(2,'Baja California'),(3,'Baja California Sur'),(4,'Campeche'),(5,'Chiapas'),(6,'Chihuahua'),(7,'Ciudad de México'),(8,'Coahuila'),(9,'Colima'),(10,'Durango'),(11,'Guanajuato'),(12,'Guerrero'),(13,'Hidalgo'),(14,'Jalisco'),(15,'Estado de México'),(16,'Michoacán'),(17,'Morelos'),(18,'Nayarit'),(19,'Nuevo León'),(20,'Oaxaca'),(21,'Puebla'),(22,'Querétaro'),(23,'Quintana Roo'),(24,'San Luis Potosí'),(25,'Sinaloa'),(26,'Sonora'),(27,'Tabasco'),(28,'Tamaulipas'),(29,'Tlaxcala'),(30,'Veracruz'),(31,'Yucatán'),(32,'Zacatecas');
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `municipio`
--

DROP TABLE IF EXISTS `municipio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `municipio` (
  `PK_Municipio` int(11) NOT NULL AUTO_INCREMENT,
  `FK_Estado` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  PRIMARY KEY (`PK_Municipio`),
  KEY `Estado_FK` (`FK_Estado`),
  CONSTRAINT `Estado_FK` FOREIGN KEY (`FK_Estado`) REFERENCES `estado` (`PK_Estado`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `municipio`
--

LOCK TABLES `municipio` WRITE;
/*!40000 ALTER TABLE `municipio` DISABLE KEYS */;
INSERT INTO `municipio` VALUES (1,19,'Monterrey'),(2,6,'Chihuahua'),(3,26,'Ciudad Obregón'),(4,11,'León'),(5,17,'Cuernavaca'),(6,20,'Santa Cruz Xoxocotlán'),(7,10,'Gómez Palacio'),(8,13,'Pachuca'),(9,28,'Ciudad Victoria'),(10,16,'Morelia'),(11,8,'Saltillo'),(12,23,'Cancún'),(13,15,'Nezahualcóyotl'),(14,21,'Puebla'),(15,7,'');
/*!40000 ALTER TABLE `municipio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `o_edu`
--

DROP TABLE IF EXISTS `o_edu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `o_edu` (
  `PK_O_Edu` int(11) NOT NULL AUTO_INCREMENT,
  `FK_Tipo` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  PRIMARY KEY (`PK_O_Edu`),
  KEY `Tipo_FK` (`FK_Tipo`),
  CONSTRAINT `Tipo_FK` FOREIGN KEY (`FK_Tipo`) REFERENCES `tipo` (`PK_Tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=215 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `o_edu`
--

LOCK TABLES `o_edu` WRITE;
/*!40000 ALTER TABLE `o_edu` DISABLE KEYS */;
INSERT INTO `o_edu` VALUES (1,1,'Actuaría'),(2,1,'Administración (de Negocios)'),(3,1,'Administración de Empresas Turísticas'),(4,1,'Administración y Finanzas'),(5,1,'Administración y Mercadotecnia'),(6,1,'Arquitectura'),(7,1,'Automatización y Control Industrial'),(8,1,'Ciencias de la Comunicación'),(9,1,'Ciencias de la Educación'),(10,1,'Ciencias de la Familia'),(11,1,'Ciencias del Deporte / Entrenamiento deportivo'),(12,1,'Ciencias Políticas y Gestión Pública'),(13,1,'Ciencias Religiosas'),(14,1,'Comercio (y Negocios) Internacionales'),(15,1,'Comunicación Organizacional'),(16,1,'Contaduría (Pública) (y Finanzas)'),(17,1,'Criminología / Criminalística'),(18,1,'Derecho'),(19,1,'Desarrollo de Capital Humano'),(20,1,'Desarrollo Infantil'),(21,1,'(Desarrollo e) Innovación Educativa'),(22,1,'Diseño Ambiental y Espacios'),(23,1,'Diseño de Modas y Calzado'),(24,1,'Diseño / Diseño Gráfico / Digital'),(25,1,'Diseño Industrial'),(26,1,'Diseño y Gestión de la Moda'),(27,1,'Educación (Area Gestión)'),(28,1,'Educación Preescolar'),(29,1,'Educación Primaria'),(30,1,'Educación Secundaria'),(31,1,'Enfermería'),(32,1,'Filosofía'),(33,1,'Fisioterapia'),(34,1,'Gastronomía '),(35,1,'Gestión y Desarrollo de Empresas'),(36,1,'Gestión y Operación de Servicios Gastronómicos'),(37,1,'Idiomas'),(38,1,'Idiomas y Relaciones Públicas'),(39,1,'Industria en Alimentos'),(40,1,'Ingeniería Industrial (en Calidad)'),(41,1,'Ingeniería Ambiental (y Seguridad Industrial)'),(42,1,'Ingeniería Biomédica'),(43,1,'Ingeniería Cibernética y Sistemas Computacionales'),(44,1,'Ingeniería Civil'),(45,1,'Ingeniería Electromecánica'),(46,1,'Ingeniería Electromédica'),(47,1,'Ingeniería Electrónica y Telecomunicaciones'),(48,1,'Ingeniería en Energías Renovables / Alternativas'),(49,1,'Ingeniería en Minas'),(50,1,'Ingeniería Mecánica'),(51,1,'Ingeniería Mecatrónica'),(52,1,'Ingeniería Producción Multimedia'),(53,1,'Ingeniería Química'),(54,1,'Ingeniería de Software y Sistemas Computacionales'),(55,1,'Ingeniería en Tecnologías y Soluciones de Negocios'),(56,1,'Ingeniería Agrónomo en Producción'),(57,1,'Lenguas Modernas e Intercurturalidad'),(58,1,'Matemáticas Educativas'),(59,1,'Medicina Veterinaria y Zootecnia'),(60,1,'Médico Cirujano'),(61,1,'Mercadotecnia (Estartégica)'),(62,1,'Música'),(63,1,'Nutrición (y Gastronomía)'),(64,1,'Odontología'),(65,1,'Pedagogía'),(66,1,'Psicología'),(67,1,'Psicología Educativa / Psicopedagogía'),(68,1,'Química en Alimentos'),(69,1,'Químico Farmacéutico Biólogo'),(70,1,'Recursos Humanos'),(71,1,'Relaciones Internacionales'),(72,1,'Responsabilidad y Liderazgo Social'),(73,1,'Salud Pública'),(74,1,'Turismo de Negocios y Reuniones'),(75,2,'Administración (de Negocios)'),(76,2,'Administración de Negocios en Entornos Virtuales'),(77,2,'Administración de Instituciones de Salud'),(78,2,'Administración Educativa'),(79,2,'Administración y Economía Pública'),(80,2,'Agricultura Protegida'),(81,2,'Agronegocios'),(82,2,'Amparo'),(83,2,'Banca y Mercados Financieros'),(84,2,'Calidad'),(85,2,'Calidad y estadística Aplicada'),(86,2,'Ciencia de los Alimentos y Nutrición Humana'),(87,2,'Ciencias Forences'),(88,2,'Ciencias Penales'),(89,2,'Cibertrónica'),(90,2,'Comunicación Organizacional'),(91,2,'Comunicación Social y Política'),(92,2,'Derecho Aduanal'),(93,2,'Derecho Civil'),(94,2,'Derecho Constitucional y Administrativo'),(95,2,'Derecho Mercantil y Coorporativo'),(96,2,'Derecho del Trabajo y Relaciones Laborales'),(97,2,'Dirección Estratégica de Comunicación'),(98,2,'Derecho Privado'),(99,2,'Derecho Procesal Penal Oral'),(100,2,'Desarrollo Humano'),(101,2,'Diseño Arquitectónico (Sustentable)'),(102,2,'Diseño e Ingeniería de Sistemas Mecatrónicos'),(103,2,'Diseño Editorial'),(104,2,'Diseño Estructural'),(105,2,'Diseño Gráfico'),(106,2,'Diseño Urbano'),(107,2,'Diseño y Gestión para la Industria Automotriz'),(108,2,'Diseño y Negocio'),(109,2,'Docencia para la Educación Media Superior y Superior'),(110,2,'Educación / Superior / Area Gestión Educativa'),(111,2,'Educación, Area de Intervención Docente'),(112,2,'Emprendimiento e Innovación en los Negocios'),(113,2,'Enfermería y Gerentología'),(114,2,'Estrategia e Innovación de Marcas'),(115,2,'Facilitación para el Desarrollo Humano'),(116,2,'Farmacología Clínica'),(117,2,'Filosofía Social'),(118,2,'Finanzas Coorporativas'),(119,2,'Fiscal / Impuestos'),(120,2,'Gerencia de Proyectos Inmobiliarios'),(121,2,'Gestión Deportiva'),(122,2,'Gestión y Desarrollo de Productos Turísticos'),(123,2,'Gestión y Desarrollo Organizacional'),(124,2,'Gestión e Innovación de Organizaciones Educativas'),(125,2,'Gestión Estratégica del Capital Humano'),(126,2,'Gestión de Proyectos y de Empresas Constructoras'),(127,2,'Gestión y Transferencia de Agrobiotecnología'),(128,2,'Gestión Turística'),(129,2,'Habilidad del Espacio Interior'),(130,2,'Ingeniería Administrativa y Calidad'),(131,2,'Ingeniería Automotriz'),(132,2,'Ingeniería Biomédica'),(133,2,'Ingeniería Económica y Financiera'),(134,2,'Ingeniería de Estructuras'),(135,2,'Ingeniería de Manufactura'),(136,2,'Ingeniería de Sistemas Electrónicos y Computacionales'),(137,2,'Ingeniería Mecatrónica Industrial'),(138,2,'Ingeniería y Diseño de Envase, Empaque y Embalaje'),(139,2,'Investigación Educativa'),(140,2,'Justicia Penal'),(141,2,'Logística, Despacho y Defensa del Comercio Internacional'),(142,2,'Mercadotecnia Turística'),(143,2,'Negocios Internacionales (Gestión estratégica)'),(144,2,'Odontología Pediátrica'),(145,2,'Ortodoncia'),(146,2,'Planecaión y Desarrollo Institucional'),(147,2,'Proyectos de Desarrollo'),(148,2,'Proyectos de Inmobiliarios'),(149,2,'Proyectos de Inversión Urbano Sustentables'),(150,2,'Psicología Clínica'),(151,2,'Psicoterapia / Familiar / Dinámica'),(152,2,'Publicidad (y Marketing Estratégico)'),(153,2,'Redes y Seguridad de la Información'),(154,2,'Relaciones Públicas'),(155,2,'Sistemas de Productividad Pecuaria'),(156,2,'Tecnologías de Información (Empresarial)'),(157,2,'Tecnologías de la Construcción'),(158,2,'Tecnologías Web y Dispositivos Móviles'),(159,2,'Telecomunicaciones y Redes'),(160,2,'Terapia Familiar'),(161,3,'Educación (y Desarrollo Humano)'),(162,3,'Administración (y Estudios Organizacionales)'),(163,3,'Ciencias Políticas'),(164,3,'Derecho'),(165,3,'Métodos Alternos de Solución de Conflictos'),(166,4,'Administración de las Operaciones'),(167,4,'Administración de los Recursos'),(168,4,'Publicidad y diseño'),(169,4,'Derechos Humanos con Perspectiva de Género'),(170,4,'Habilidades Docentes'),(171,5,'MIEX Master International Management'),(172,5,'Curso internacional de Revalidación en Odontología (CIRO)'),(173,5,'(Master) Diploma Internacional en Dirección Financiera'),(174,6,'Especialidad en Educación Primaria'),(175,6,'Especialidad en Docencia del Bachillerato'),(176,6,'Especialidad en Docencia Universitaria'),(177,6,'Especialidad en Gestión Educativa'),(178,6,'Maestría en Educación con Énfasis en Gestión Educativa'),(179,6,'Maestría en Administración'),(180,2,'Manejo del sobrepeso y la obesidad'),(181,2,'Gobernanza y Estrategia Internacional'),(182,4,'Calidad y Estadística Aplicada'),(183,4,'Derecho Civil'),(184,4,'Derecho de Empresa'),(185,4,'Justicia Penal'),(186,4,'Ciberseguridad'),(187,4,'Dirección Industrial'),(188,4,'Energías Renovables'),(189,4,'Anestesiología'),(190,4,'Cirugía General'),(191,4,'Ginecología Y Obstetricia'),(192,4,'Medicina del Enfermo en Estado Crítico'),(193,4,'Medicina Interna'),(194,4,'Neonatología'),(195,4,'Ortopedia'),(196,4,'Otorrinolaringología'),(197,4,'Pediatría'),(198,4,'Radiología e Imagen'),(199,4,'Administración'),(200,4,'Administración de Organizaciones de la Salud'),(201,4,'Desarrollo de Emprendedores y Negocios'),(202,4,'Estrategias Fiscales'),(203,4,'Finanzas Corporativas y Bursatiles'),(204,4,'Gestión Estratégica del Capital Humano'),(205,4,'Ingeniería Económica y Financiera'),(206,4,'Logística y Cadena de Suministros'),(207,4,'Mercadotecnia y Publicidad'),(208,4,'Tecnologías de la Información en la Dirección de Negocios'),(209,4,'Gestión de los aprendizajes'),(210,4,'Gestión Educativa'),(211,4,'Intervención Docente'),(212,4,'Gestión Estratégica de Marca (Branding)'),(213,4,'Gestión y Administración de Proyectos'),(214,4,'Gestión y Operación de Inmuebles (Facility Management)');
/*!40000 ALTER TABLE `o_edu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plantel`
--

DROP TABLE IF EXISTS `plantel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plantel` (
  `PK_Plantel` int(11) NOT NULL AUTO_INCREMENT,
  `FK_Municipio` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `Nombre_Corto` varchar(50) NOT NULL,
  `URL` varchar(150) DEFAULT NULL,
  `Fb` varchar(150) DEFAULT NULL,
  `Num_Mapa` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_Plantel`),
  KEY `Municipio_FK` (`FK_Municipio`),
  CONSTRAINT `Municipio_FK` FOREIGN KEY (`FK_Municipio`) REFERENCES `municipio` (`PK_Municipio`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plantel`
--

LOCK TABLES `plantel` WRITE;
/*!40000 ALTER TABLE `plantel` DISABLE KEYS */;
INSERT INTO `plantel` VALUES (1,1,'Centro de Estudios Superiores La Salle','Ceslas','http://ceslas.mx/','https://www.facebook.com/CeslasLaSalleMonterrey/',1),(2,2,'Universidad La Salle Chihuahua','Chihuahua','http://ulsachihuahua.edu.mx/','https://www.facebook.com/UniversidadLaSalleChihuahua/?hc_ref=SEARCH&fref=nf',6),(3,3,'Universidad La Salle Noroeste','Noroeste','http://www.ulsa-noroeste.edu.mx/','https://www.facebook.com/UniversidadLaSalleNoroeste/',11),(4,4,'Universidad De La Salle Bajío','Bajío','http://bajio.delasalle.edu.mx/','https://www.facebook.com/DeLaSalleBajio/',2),(5,5,'Universidad La Salle Cuernavaca','Cuernavaca','http://www.ulsac.edu.mx/','https://www.facebook.com/lasallecuernavaca/',7),(6,6,'Universidad La Salle Oaxaca','Oaxaca','http://www.ulsaoaxaca.edu.mx/','https://www.facebook.com/Universidad-La-Salle-Oaxaca-155739531228141/',12),(7,7,'Universidad La Salle Laguna','Laguna','http://www.ulsalaguna.edu.mx/','https://www.facebook.com/ulsalaguna/',8),(8,8,'Universidad La Salle Pachuca','Pachuca','http://www.lasallep.edu.mx/','https://www.facebook.com/lasallep/',13),(9,9,'Universidad La Salle Victoria','Victoria','http://www.ulsavictoria.edu.mx','https://www.facebook.com/ULSAVictoria/',15),(10,10,'Universidad La Salle Morelia','Morelia','http://www.lasallemorelia.edu.mx/','http://www.lasallemorelia.edu.mx/',9),(11,11,'Universidad La Salle Saltillo','Saltillo','http://www.ulsasaltillo.edu.mx/','https://www.facebook.com/LaSalleSaltillo/',14),(12,12,'Universidad La Salle Cancún','Cancún','http://lasallecancun.edu.mx/','https://www.facebook.com/lasallecancun/',5),(13,13,'Universidad La Salle Nezahualcóyotl','Nezahualcóyotl','http://www.ulsaneza.edu.mx/','https://www.facebook.com/lasalleneza/',10),(14,14,'Universidad La Salle Benavente','Benavente','http://www.universidadlasallebenavente.edu.mx/','https://www.facebook.com/UniversidadLaSalleBenaventeDePuebla/',4),(15,15,'Universidad La Salle Ciudad de México','México','http://www.lasalle.mx/','https://www.facebook.com/LaSalleMX/',3);
/*!40000 ALTER TABLE `plantel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plantel_o_edu`
--

DROP TABLE IF EXISTS `plantel_o_edu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plantel_o_edu` (
  `FK_Plantel` int(11) NOT NULL,
  `FK_O_Edu` int(11) NOT NULL,
  `PK_P_O_E` bigint(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`PK_P_O_E`),
  KEY `Plantel_FK` (`FK_Plantel`),
  KEY `O_Edu_FK` (`FK_O_Edu`),
  CONSTRAINT `O_Edu_FK` FOREIGN KEY (`FK_O_Edu`) REFERENCES `o_edu` (`PK_O_Edu`),
  CONSTRAINT `Plantel_FK` FOREIGN KEY (`FK_Plantel`) REFERENCES `plantel` (`PK_Plantel`)
) ENGINE=InnoDB AUTO_INCREMENT=497 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plantel_o_edu`
--

LOCK TABLES `plantel_o_edu` WRITE;
/*!40000 ALTER TABLE `plantel_o_edu` DISABLE KEYS */;
INSERT INTO `plantel_o_edu` VALUES (4,1,1),(15,1,2),(4,2,3),(12,2,4),(5,2,5),(10,2,6),(13,2,7),(8,2,8),(9,2,9),(4,3,10),(12,3,11),(5,3,12),(7,3,13),(10,3,14),(13,3,15),(6,3,16),(8,3,17),(7,4,18),(11,5,19),(4,6,20),(14,6,21),(12,6,22),(2,6,23),(5,6,24),(7,6,25),(15,6,26),(10,6,27),(3,6,28),(6,6,29),(8,6,30),(11,6,31),(9,6,32),(4,7,33),(4,8,34),(12,8,35),(5,8,36),(7,8,37),(15,8,38),(3,8,39),(8,8,40),(11,8,41),(9,8,42),(15,9,43),(10,9,44),(8,9,45),(2,10,46),(7,10,47),(1,11,48),(4,11,49),(7,11,50),(13,11,51),(2,12,52),(3,12,53),(11,12,54),(9,12,55),(14,13,56),(15,13,57),(4,14,58),(2,14,59),(5,14,60),(7,14,61),(15,14,62),(10,14,63),(3,14,64),(6,14,65),(11,14,67),(9,14,68),(2,15,69),(4,16,70),(14,16,71),(12,16,72),(2,16,73),(5,16,74),(7,16,75),(15,16,76),(10,16,77),(3,16,78),(6,16,79),(8,16,80),(9,16,81),(4,17,82),(12,17,83),(13,17,84),(4,18,85),(14,18,86),(12,18,87),(2,18,88),(5,18,89),(7,18,90),(15,18,91),(10,18,92),(3,18,93),(6,18,94),(8,18,95),(11,18,96),(9,18,97),(4,19,98),(2,20,99),(7,21,100),(11,21,101),(4,22,102),(9,22,103),(4,23,104),(4,24,105),(12,24,106),(2,24,107),(5,24,108),(7,24,109),(15,24,110),(10,24,111),(3,24,112),(8,24,113),(11,24,114),(9,24,115),(4,25,116),(2,25,117),(7,25,118),(3,25,119),(11,25,120),(3,26,121),(4,27,122),(1,27,123),(3,27,124),(6,27,125),(14,28,126),(1,28,127),(15,28,128),(14,29,129),(1,29,130),(15,29,131),(14,30,132),(12,31,133),(13,31,134),(6,31,136),(8,31,137),(15,32,138),(11,33,139),(2,33,140),(7,33,141),(3,33,142),(6,33,143),(7,34,144),(6,34,145),(11,34,146),(2,35,147),(4,36,148),(2,37,149),(12,38,150),(7,38,151),(11,38,152),(9,38,153),(3,39,154),(4,40,155),(2,40,156),(5,40,157),(15,40,158),(3,40,159),(6,40,160),(8,40,161),(11,40,162),(9,40,163),(15,41,164),(6,41,165),(11,41,166),(4,42,167),(15,42,168),(9,42,169),(15,43,170),(8,43,171),(4,44,172),(12,44,173),(5,44,174),(7,44,175),(15,44,176),(6,44,177),(8,44,178),(11,44,179),(9,44,180),(4,45,181),(2,46,182),(7,46,183),(3,46,184),(4,47,185),(2,47,186),(15,47,187),(3,47,188),(6,47,189),(8,47,190),(9,47,191),(2,48,192),(7,48,193),(3,48,194),(11,48,195),(7,49,196),(3,49,197),(15,50,198),(2,51,199),(5,51,200),(7,51,201),(15,51,202),(3,51,203),(8,51,204),(11,51,205),(3,52,206),(11,52,207),(9,52,208),(15,53,209),(4,54,210),(3,54,211),(6,54,212),(4,55,213),(2,55,214),(15,55,215),(8,55,216),(9,55,217),(4,56,218),(4,57,219),(6,57,220),(1,58,221),(4,59,222),(15,60,223),(9,60,224),(4,61,225),(12,61,226),(2,61,227),(5,61,228),(7,61,229),(15,61,230),(10,61,231),(3,61,232),(11,61,233),(9,61,234),(7,62,235),(12,63,236),(2,63,237),(7,63,238),(3,63,239),(11,63,240),(9,63,241),(4,64,242),(13,65,243),(4,66,244),(12,66,245),(5,66,246),(7,66,247),(15,66,248),(10,66,249),(13,66,250),(6,66,251),(8,66,252),(9,66,253),(14,67,254),(1,67,255),(3,67,256),(15,68,257),(15,69,258),(2,70,259),(3,70,260),(15,71,261),(13,72,262),(2,73,263),(4,74,264),(4,75,265),(12,75,266),(5,75,267),(15,75,268),(10,75,269),(13,75,270),(6,75,271),(8,75,272),(9,75,273),(4,76,274),(4,77,275),(14,77,276),(2,77,277),(15,77,278),(13,77,279),(8,77,280),(4,78,281),(14,78,282),(13,78,283),(6,78,284),(4,79,285),(4,80,286),(4,81,287),(3,82,288),(4,83,289),(1,84,290),(2,84,291),(7,84,292),(15,85,293),(3,85,294),(15,86,295),(4,87,296),(4,88,297),(15,89,298),(4,90,299),(7,90,300),(4,91,301),(6,91,302),(4,92,303),(4,93,304),(15,93,305),(3,93,306),(8,93,307),(4,94,308),(2,94,309),(4,95,310),(2,95,311),(15,95,312),(3,95,313),(11,95,314),(4,96,315),(15,97,316),(9,98,317),(3,99,318),(11,99,319),(9,99,320),(2,100,321),(5,100,322),(10,100,323),(4,101,324),(7,101,325),(6,101,326),(11,101,327),(9,101,328),(4,102,329),(4,103,330),(7,104,331),(7,105,332),(11,105,333),(9,105,334),(4,106,335),(4,107,336),(4,108,337),(8,109,338),(4,110,339),(14,110,340),(2,110,341),(5,110,342),(3,110,343),(5,110,344),(8,110,345),(11,110,346),(9,110,347),(15,111,348),(4,112,349),(13,113,350),(15,114,351),(4,115,352),(15,116,353),(15,117,354),(4,118,355),(4,119,356),(3,119,357),(9,119,358),(15,120,359),(4,121,360),(14,121,361),(4,122,362),(4,123,363),(14,123,364),(1,123,365),(4,124,366),(7,124,367),(15,125,368),(10,125,369),(7,126,370),(15,126,371),(9,126,372),(4,127,373),(10,128,374),(4,129,375),(4,130,376),(14,130,377),(2,130,378),(7,130,379),(3,130,380),(9,130,381),(4,131,382),(3,132,383),(12,133,384),(2,133,385),(7,133,386),(15,133,387),(10,133,388),(3,133,389),(8,133,390),(4,134,391),(4,135,392),(4,136,393),(8,137,394),(5,137,395),(4,138,396),(14,139,397),(6,139,398),(15,140,399),(4,141,400),(12,142,401),(6,142,402),(4,143,403),(15,143,404),(3,143,405),(4,144,406),(4,145,407),(1,146,408),(8,147,409),(15,148,410),(12,149,411),(4,150,412),(12,151,413),(5,151,414),(7,151,415),(8,151,416),(4,152,417),(2,152,418),(9,152,419),(4,153,420),(4,154,421),(4,155,422),(4,156,423),(15,156,424),(3,156,425),(6,156,426),(9,156,427),(4,157,428),(4,158,429),(3,159,430),(4,160,431),(9,160,432),(4,161,433),(14,161,434),(15,161,435),(3,161,436),(4,162,437),(15,162,438),(4,163,439),(4,164,440),(15,164,441),(3,164,442),(4,165,443),(2,166,444),(2,167,445),(2,168,446),(2,169,447),(2,170,448),(15,171,449),(4,172,450),(15,172,451),(8,173,452),(13,174,453),(13,175,454),(13,176,455),(13,177,457),(13,178,458),(13,179,459),(15,2,460),(15,33,461),(15,180,462),(15,181,463),(15,182,464),(15,183,465),(15,184,466),(15,185,467),(15,186,468),(15,187,469),(15,188,470),(15,189,471),(15,190,472),(15,191,473),(15,192,474),(15,193,475),(15,194,476),(15,195,477),(15,196,478),(15,197,479),(15,198,480),(15,199,481),(15,200,482),(15,201,483),(15,202,484),(15,203,485),(15,204,486),(15,205,487),(15,206,488),(15,207,489),(15,208,490),(15,209,491),(15,210,492),(15,211,493),(15,212,494),(15,213,495),(15,214,496);
/*!40000 ALTER TABLE `plantel_o_edu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo`
--

DROP TABLE IF EXISTS `tipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo` (
  `PK_Tipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`PK_Tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo`
--

LOCK TABLES `tipo` WRITE;
/*!40000 ALTER TABLE `tipo` DISABLE KEYS */;
INSERT INTO `tipo` VALUES (1,'Licenciaturas'),(2,'Maestrías'),(3,'Doctorados'),(4,'Especialidades'),(5,'Programas Internacionales'),(6,'Posgrados en línea');
/*!40000 ALTER TABLE `tipo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-14 12:08:26
