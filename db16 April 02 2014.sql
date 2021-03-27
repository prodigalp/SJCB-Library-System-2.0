-- MySQL dump 10.13  Distrib 5.5.20, for Win32 (x86)
--
-- Host: localhost    Database: library
-- ------------------------------------------------------
-- Server version	5.5.20-log

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
-- Table structure for table `tblbooks`
--

DROP TABLE IF EXISTS `tblbooks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblbooks` (
  `ctrlnum` int(11) NOT NULL DEFAULT '0',
  `accnum` varchar(20) NOT NULL,
  `daterec` date NOT NULL,
  `classloc` decimal(7,2) NOT NULL,
  `author` varchar(70) NOT NULL,
  `title` varchar(150) NOT NULL,
  `edition` varchar(10) NOT NULL,
  `volume` varchar(11) NOT NULL,
  `pages` varchar(11) NOT NULL,
  `sofund` varchar(50) NOT NULL,
  `costprice` decimal(7,2) NOT NULL,
  `publisher` varchar(80) NOT NULL,
  `copyright` varchar(20) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `colorcode` varchar(30) NOT NULL,
  `quantity` varchar(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `cardnum` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `pichref` varchar(255) NOT NULL,
  `picom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblbooks`
--

LOCK TABLES `tblbooks` WRITE;
/*!40000 ALTER TABLE `tblbooks` DISABLE KEYS */;
INSERT INTO `tblbooks` VALUES (1,'1','2005-11-07',80.00,'Westlake, Helen G','Childrens','','1','368','Rey C. Alyaga Library Collection',0.00,'Gison &amp; CO.','1973','','Ligth Blue','','General References','','','',''),(2,'2','2005-11-07',153.00,'Dodd, David H.','Cognition New','','1','399','Rey C. Alejaga Library Collection',0.00,'Allyn &amp; Bacon','1980','','Red','','Philosophy,Psychology','','','',''),(3,'3','2005-11-07',658.00,'Grant, Philip','The Effort - Net Return Mood of Employee Motivation','','1','237','Rey C. Alyaga Library Collection',0.00,'Quorum Books','1990','','Brown','','Applied Sciences','','','',''),(4,'4','2005-11-07',611.00,'Krause William','Concise Text of Histology','','1','429&amp;','Rey C. Alejaga Library Collection',0.00,'Williams','1981','','Brown','','Applied Sciences','','','',''),(5,'5','2005-11-07',808.00,'Vesterman, William','The College Writers Readers Essays on Students','','1','542','Rey C. Alyaga Library Collection',0.00,'Mickraw-Hill','1989','','Violet','','Literature','','','',''),(6,'6','2003-08-12',658.00,'Quick Thomas L.','Person to Person Management','','1','210','Rey C. Aleyaga Library Collection',3.00,'St. Martin','1977','','Brown','','Applied Sciences','','','',''),(40,'7','2005-11-07',560.00,'Ralph David M.','Principle of Paleontology','','1','481','Rey C. Alyaga Library Collection',0.00,'W.H. Freeman ','1978','','Dark Blue','','Pure Sciences','','','',''),(41,'8','2005-11-07',310.00,'Kaplan, Harold','Combustion Toxicology','','1','174','Rey C. Alyaga Library Collection',1180.40,'Technomic','1983','OK','Pink','','Social Sciences','','','',''),(43,'12','2005-11-07',631.38,'Stansell, John','The Prentice-Hall Concise Book of Communication','','1','147','Rey C. Alyaga Library Collection',0.00,'Prentice - Hall','1983','','Brown','','Applied Sciences','','','',''),(44,'19','2005-11-07',155.67,'Belsky, Janet','The Psychology of Aging','','1','293','Rey C. Alyaga Library Collection',0.00,'C.V. Mosby','1982','','Red','','Philosophy,Psychology','','','Friend.jpg',''),(45,'22','2005-11-07',158.10,'Thomas, Paul G.','Psychofeedback','','1','201','Rey C. Alyaga Library Collection',0.00,'Prentice-Hall','1982','','Red','','Philosophy,Psychology','','','',''),(46,'26','2005-11-07',615.80,'Reed, Kathlyn L.','Concepts of Occupational Theraphy','','1','284','Rey C. Alyaga Library Collection',0.00,'Williams / Wilkins','1983','','Brown','','Applied Sciences','','','Sunset.jpg',''),(47,'32','2005-11-07',612.00,'Lausch, Erwin','Manipulation','','1','283','Rey C. Alyaga Library Collection',0.00,'The Viking Press','1972','','Brown','','Applied Sciences','','','Winter.jpg',''),(53,'48','0000-00-00',0.00,'48','48','','','','',0.00,'','','','-','','-','','','Blue hills.jpg','48'),(54,'49','0000-00-00',0.00,'49 updated din','49 UPdated din','','','','',0.00,'','','','-','','-','','','Blue hills.jpg','49'),(55,'50','0000-00-00',0.00,'50','50','','','','',0.00,'','','','-','','-','','','Winter.jpg','50'),(56,'51','0000-00-00',0.00,'51','51','','','','',0.00,'','','','-','','-','','','Water lilies.jpg','51'),(57,'52','0000-00-00',0.00,'52 updated','52 updated','','','','',0.00,'','','','-','','-','','','Sunset.jpg','52');
/*!40000 ALTER TABLE `tblbooks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblborrow`
--

DROP TABLE IF EXISTS `tblborrow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblborrow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accnum` varchar(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `ctrlnum` int(11) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `mname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `timer` time NOT NULL,
  `dater1` date NOT NULL,
  `dater2` date NOT NULL,
  `mode` varchar(40) NOT NULL,
  `remarks` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblborrow`
--

LOCK TABLES `tblborrow` WRITE;
/*!40000 ALTER TABLE `tblborrow` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblborrow` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcollege`
--

DROP TABLE IF EXISTS `tblcollege`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblcollege` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ctrlnum` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `studnum` varchar(30) NOT NULL,
  `bday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `course` varchar(30) NOT NULL,
  `yearlevel` varchar(15) NOT NULL,
  `contactnum` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fathersname` varchar(50) NOT NULL,
  `mothersname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcollege`
--

LOCK TABLES `tblcollege` WRITE;
/*!40000 ALTER TABLE `tblcollege` DISABLE KEYS */;
INSERT INTO `tblcollege` VALUES (4,20,'Bulacan','13-0107-S','1994-02-15','Male','BSCS','II','09286411729','wardonis@gmail.com','Rey Emmanuel Adonis','Digna Adonis'),(5,21,'Bulacan','10-123-1','1994-01-29','Male','BSCS','IV','09193871642','odbunag@yahoo.com','Ferdinand Bunag','Ma. Salvacion Bunag'),(6,22,'Bulacan','11-006-1','1994-07-15','Female','BSCS','IV','09281633219','jmcontreras@yahoo.com','Julito Contreras','Elena Contreras'),(7,23,'Sta. Maria','12-001-1','1994-06-08','Male','BSCS','III','09324727265','koespiritu@msn.com','Jose Alvin Espiritu','Felicidad Espiritu'),(8,24,'Bulacan','10-030-1','1994-05-04','Female','BSCS','IV','09156481279','mfdelatorre@yahoo.com','Patricio Dela Torre','Guillerma Dela Torre'),(9,25,'Apalit','11-060-1','1993-10-17','Male','BSCS','III','09164297824','rgdelrosario@yahoo.com','Ronald Del Rosario','Marites Del Rosario'),(10,26,'Bulacan','12-014-2','1989-04-21','Male','BSCS','II','09136341827','fgoclarit@gmail.com','Francisco Oclarit','Daylinda Oclarit'),(11,27,'Bulacan','08-035-1','1996-08-14','Male','BSCS','I','09251620914','avyumol@yahoo.com','Amador Yumol','Eliza Yumol'),(12,28,'Bulacan','12-116-1','1995-03-19','Male','BSCS','III','09221683459','eeolano@yahoo.com','Edmund D. Olano','Aliw E. Olano'),(13,29,'Bulacan','12-032-2','1993-02-08','Female','BSCS','I','09191382316','msbase@gmail.com','Edwin Base','Marita Base'),(14,30,'Apalit','09-066-1','1988-03-19','Male','BSCS','I','09228286413','jddeluna@msn.com','Alfredo De Luna','Marivic De Luna'),(15,31,'Bulacan','09-121-1','1990-08-06','Male','BSCS','II','09426293131','rtmanahan@yahoo.com','Rodolfo B. Manahan','Estella T. Manahan');
/*!40000 ALTER TABLE `tblcollege` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcurrent`
--

DROP TABLE IF EXISTS `tblcurrent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblcurrent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gtype` varchar(40) NOT NULL,
  `role` varchar(10) NOT NULL,
  `ctrlnum` int(11) NOT NULL,
  `dater` date NOT NULL,
  `timer` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcurrent`
--

LOCK TABLES `tblcurrent` WRITE;
/*!40000 ALTER TABLE `tblcurrent` DISABLE KEYS */;
INSERT INTO `tblcurrent` VALUES (25,'Emmanuel','Blas','G.','egblas','827ccb0eea8a706c4c34a16891f84e7b','Professor','2',0,'2014-04-02','11:50:17');
/*!40000 ALTER TABLE `tblcurrent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblhigh`
--

DROP TABLE IF EXISTS `tblhigh`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblhigh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ctrlnum` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `studnum` varchar(30) NOT NULL,
  `bday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `yearlevel` varchar(15) NOT NULL,
  `section` varchar(15) NOT NULL,
  `contactnum` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fathersname` varchar(50) NOT NULL,
  `mothersname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblhigh`
--

LOCK TABLES `tblhigh` WRITE;
/*!40000 ALTER TABLE `tblhigh` DISABLE KEYS */;
INSERT INTO `tblhigh` VALUES (1,32,'Taguig','09-106-1','1991-09-15','Male','4th','Emerald','09234517218','esazarcon@yahoo.com','Eduardo S. Azarcon','Milagros S. Azarcon'),(2,33,'Manila','09-114-1','1992-09-16','Male','1st','Diamond','09226489213','mlsenobio@msn.com','Silvino R. Senobio','Ma. Teresita L. Senobio'),(3,34,'Rizal','08-014-1','1988-09-13','Female','2nd','St.Jude','09284317219','edgalvan@uk.com','Rolando Galvan','Marlou Galvan'),(4,35,'Quezon City','11-012-2','1985-05-24','Female','3rd','St.Mark','09184211673','acbenis@yahoo.com','Ricardo Benis','Anita Benis'),(5,36,'Bulacan','10-142-1','1988-03-28','Male','1st','Everlasting','09156133415','kepacle@msn.com','Cesar C. Pacle','Josefina S. Enriquez'),(6,37,'Pampanga','10-129-1','1992-12-16','Male','2nd','St.Joseph','09214581961','crconception@gmail.com','Joel M. Conception','Rosemarie R. Conception'),(7,38,'Cavite','10-097-1','1993-02-23','Female','---','St.Peter','09112581345','asmagat@gmail.com','Arnulfo Magat','Cristine Magat'),(8,39,'Cubao','10-062-1','1994-04-29','Female','3rd','St.Tomas','09225381691','jgrelanes@ymail.com','Jose G. Relanes','Violeta G. Relanes'),(9,40,'Marikina','10-034-1','1992-11-12','Female','1st','St. Peter','09427184132','jsdagondon@yahoo.com','Ernile S. Dagondon','Gina S. Dagondon'),(10,41,'Cebu','10-065-2','1993-08-09','Male','4th','St. Paul','09196381724','rbbarcial@gmail.com','Arcadio B. Barcial','Patricia B. Barcial'),(11,42,'Fairview','09-169-1','1992-07-20','Female','3rd','St. Carmen','09241737219','mfalfonso@yahoo.com','Jovencio Alfonso','Leticia Alfonso');
/*!40000 ALTER TABLE `tblhigh` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblprof`
--

DROP TABLE IF EXISTS `tblprof`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblprof` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empnum` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactnum` varchar(20) NOT NULL,
  `ctrlnum` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblprof`
--

LOCK TABLES `tblprof` WRITE;
/*!40000 ALTER TABLE `tblprof` DISABLE KEYS */;
INSERT INTO `tblprof` VALUES (3,'11-007-1','lgbautista@yahoo.com','299-6300',4),(4,'11-007-2','hdbuenaventura@yahoo.com','235-2572',5),(5,'11-007-3','egblas@yahoo.com','233-2312',6),(6,'11-007-4','mmdioquino@yahoo.com','972-2531',7),(7,'11-007-5','mdoliveros@yahoo.com','422-9556',8),(8,'11-007-6','vtrepia@yahoo.com','325-6219',9),(9,'11-007-7','rpsantos@yahoo.com','722-5931',10),(10,'11-007-8','asartiola@yahoo.com','422-6917',11),(11,'11-007-9','aesagun@yahoo.com','531-4211',12),(12,'11-009-10','svvillanueva@msn.com','784-1317',13),(13,'11-008-72','ncpolicarpio@gmail.com','472-1673',14),(14,'11-008-14','librarian@msn.com','342-771-3',15),(15,'11-008-42','everest@gmail.com','342-7421',16),(16,'13-174-4','sison@yahoo.com','421-4721',17),(17,'xxx','xxx','xxx',43);
/*!40000 ALTER TABLE `tblprof` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbluser`
--

DROP TABLE IF EXISTS `tbluser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gtype` varchar(40) NOT NULL,
  `role` varchar(10) NOT NULL,
  `ctrlnum` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbluser`
--

LOCK TABLES `tbluser` WRITE;
/*!40000 ALTER TABLE `tbluser` DISABLE KEYS */;
INSERT INTO `tbluser` VALUES (4,'Levy','Bautista','G.','lgbautista','827ccb0eea8a706c4c34a16891f84e7b','Professor','2',0),(5,'Henry David','Buenaventura','T.','hdbuenaventura','827ccb0eea8a706c4c34a16891f84e7b','Professor','2',0),(6,'Emmanuel','Blas','G.','egblas','827ccb0eea8a706c4c34a16891f84e7b','Professor','2',0),(7,'Michelle','Dioquino','M.','mmdioquino','827ccb0eea8a706c4c34a16891f84e7b','Professor','2',0),(8,'Ma. Fatima','Oliveros','D.','mdoliveros','827ccb0eea8a706c4c34a16891f84e7b','Professor','2',0),(9,'Veronica','Repia','T.','vtrepia','827ccb0eea8a706c4c34a16891f84e7b','Professor','2',0),(10,'Reynaldo','Santos','P.','rpsantos','827ccb0eea8a706c4c34a16891f84e7b','Professor','2',0),(11,'Amor','Artiola','S.','asartiola','827ccb0eea8a706c4c34a16891f84e7b','Professor','2',0),(12,'Arsenio','Sagun Jr.','E.','aesagun','827ccb0eea8a706c4c34a16891f84e7b','Professor','2',0),(13,'Santiago','Villanueva','V.','svvillanueva','827ccb0eea8a706c4c34a16891f84e7b','Professor','2',0),(14,'Naneth','Policarpio','C.','ncpolicarpio','827ccb0eea8a706c4c34a16891f84e7b','Professor','2',0),(15,'Admin','Admin','X.','Administrator','827ccb0eea8a706c4c34a16891f84e7b','Administrator','4',0),(16,'SA1','SA1','X','SA1','827ccb0eea8a706c4c34a16891f84e7b','S.A.','3',0),(17,'SA2','SA2','X','SA2','827ccb0eea8a706c4c34a16891f84e7b','S.A.','3',0),(20,'Wrean Ronice','Adonis','R','wradonis','827ccb0eea8a706c4c34a16891f84e7b','College','2',0),(21,'Oyo Boy','Bunag','D.','odbunag','827ccb0eea8a706c4c34a16891f84e7b','College','2',0),(22,'Jennifer','Contreras','M.','jmcontreras','827ccb0eea8a706c4c34a16891f84e7b','College','2',0),(23,'Mark Kevin ','Espiritu','O.','koespiritu','827ccb0eea8a706c4c34a16891f84e7b','College','2',0),(24,'Monica','Dela Torre','F.','mfdelatorre','827ccb0eea8a706c4c34a16891f84e7b','College','2',0),(25,'Reymart','Del Rosario','G.','rgdelrosario','827ccb0eea8a706c4c34a16891f84e7b','College','2',0),(26,'Francis Jhonn','Oclarit Jr.','G.','fgoclarit','827ccb0eea8a706c4c34a16891f84e7b','College','2',0),(27,'Alfredo','Yumol','V.','avyumol','827ccb0eea8a706c4c34a16891f84e7b','College','2',0),(28,'Edrenz Kimuel','Olano','E.','eeolano','827ccb0eea8a706c4c34a16891f84e7b','College','2',0),(29,'Maureen','Base','S.','msbase','827ccb0eea8a706c4c34a16891f84e7b','College','2',0),(30,'Jonathan','De Luna','D.','jddeluna','827ccb0eea8a706c4c34a16891f84e7b','College','2',0),(31,'Roberto','Manahan','T.','rtmanahan','827ccb0eea8a706c4c34a16891f84e7b','College','2',0),(32,'Edwin','Azarcon','S.','esazarcon','827ccb0eea8a706c4c34a16891f84e7b','Highschool','2',0),(33,'Marvin','Senobio','L.','mlsenobio','827ccb0eea8a706c4c34a16891f84e7b','Highschool','2',0),(34,'Elizabeth','Galvan','D.','edgalvan','827ccb0eea8a706c4c34a16891f84e7b','Highschool','2',0),(35,'Ana Cristina','Benis','C. ','acbenis','827ccb0eea8a706c4c34a16891f84e7b','Highschool','2',0),(36,'Kennedy','Pacle','E.','kepacle','827ccb0eea8a706c4c34a16891f84e7b','Highschool','2',0),(37,'Cyrel','Conception','R.','crconception','827ccb0eea8a706c4c34a16891f84e7b','Highschool','2',0),(38,'Aloha','Magat','S.','asmagat','827ccb0eea8a706c4c34a16891f84e7b','Highschool','2',0),(39,'Jessica','Relanes','G.','jgrelanes','827ccb0eea8a706c4c34a16891f84e7b','Highschool','2',0),(40,'Jovelyn ','Dagondon','S.','jsdagondon','827ccb0eea8a706c4c34a16891f84e7b','Highschool','2',0),(41,'Ramonito','Barcial','B.','rbbarcial','827ccb0eea8a706c4c34a16891f84e7b','Highschool','2',0),(42,'Maria Eliza','Alfonso','F.','mfalfonso','827ccb0eea8a706c4c34a16891f84e7b','Highschool','2',0),(43,'Guest','Guest','X.','Guest','827ccb0eea8a706c4c34a16891f84e7b','Guest','1',0);
/*!40000 ALTER TABLE `tbluser` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-04-02 13:53:35
