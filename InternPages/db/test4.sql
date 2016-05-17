-- MySQL dump 10.13  Distrib 5.7.9, for Win32 (AMD64)
--
-- Host: localhost    Database: imis
-- ------------------------------------------------------
-- Server version	5.7.9

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
-- Table structure for table `cer_record`
--

DROP TABLE IF EXISTS `cer_record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cer_record` (
  `certification_ID` int(11) NOT NULL,
  `student_ID` int(11) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`certification_ID`,`student_ID`),
  KEY `student_ID` (`student_ID`),
  CONSTRAINT `cer_record_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `student` (`student_ID`),
  CONSTRAINT `cer_record_ibfk_2` FOREIGN KEY (`certification_ID`) REFERENCES `certification` (`certification_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cer_record`
--

LOCK TABLES `cer_record` WRITE;
/*!40000 ALTER TABLE `cer_record` DISABLE KEYS */;
INSERT INTO `cer_record` VALUES (6001,1002,NULL);
/*!40000 ALTER TABLE `cer_record` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `certification`
--

DROP TABLE IF EXISTS `certification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `certification` (
  `certification_ID` int(11) NOT NULL,
  `cer_titles` varchar(20) NOT NULL,
  `cer_body` varchar(20) NOT NULL,
  PRIMARY KEY (`certification_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `certification`
--

LOCK TABLES `certification` WRITE;
/*!40000 ALTER TABLE `certification` DISABLE KEYS */;
INSERT INTO `certification` VALUES (6001,'MSDN','Microsoft'),(6002,'CCNA','Cisco certificate'),(6003,'CCNP','Cisco certificate');
/*!40000 ALTER TABLE `certification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company` (
  `comp_name` varchar(30) NOT NULL,
  `comp_type` enum('Company','Startup Company','Research Project','MAC Project','Other') DEFAULT NULL,
  `websit` varchar(50) NOT NULL,
  `note` varchar(100) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL DEFAULT 'Windsor',
  `postalcode` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL DEFAULT 'Canada',
  `company_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`comp_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` VALUES ('Amazon','Company','http://www.amazon.com',NULL,'444 University Ave','Windsor','N9B2Y4','Canada',NULL),('Company3','Research Project','https://w2.company1.com','This is a test','111 Askin Ave','Toronto','N1B2X0','Canada',NULL),('IBM','Company','http://www.ibm.com','This is an IT company','123 University Ave','Windsor','N9B2Y0','Canada',NULL),('mac111','Startup Company','http://www.mac111.com',NULL,'333 University Ave','Windsor','N9B2Y7','Canada',NULL),('Research lab1','Research Project','http://www.researchlab1.com',NULL,'476 University Ave','Windsor','N9B2Y1','Canada',NULL);
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `edu_record`
--

DROP TABLE IF EXISTS `edu_record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `edu_record` (
  `education_ID` int(11) NOT NULL,
  `student_ID` int(11) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`education_ID`,`student_ID`),
  KEY `student_ID` (`student_ID`),
  CONSTRAINT `edu_record_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `student` (`student_ID`),
  CONSTRAINT `edu_record_ibfk_2` FOREIGN KEY (`education_ID`) REFERENCES `education` (`education_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `edu_record`
--

LOCK TABLES `edu_record` WRITE;
/*!40000 ALTER TABLE `edu_record` DISABLE KEYS */;
INSERT INTO `edu_record` VALUES (5001,1001,NULL),(5002,1002,NULL),(5003,1003,NULL),(5004,1004,NULL);
/*!40000 ALTER TABLE `edu_record` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `education`
--

DROP TABLE IF EXISTS `education`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `education` (
  `education_ID` int(11) NOT NULL,
  `edu_type` varchar(15) NOT NULL,
  `major` varchar(30) NOT NULL,
  `gpa` decimal(2,1) NOT NULL,
  `uni_name` varchar(50) NOT NULL,
  `uni_location` varchar(25) NOT NULL,
  PRIMARY KEY (`education_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `education`
--

LOCK TABLES `education` WRITE;
/*!40000 ALTER TABLE `education` DISABLE KEYS */;
INSERT INTO `education` VALUES (5001,'Graduate','Computer Science',3.3,'University of Ottawa','Ottawa'),(5002,'Undergraduate','Computer Science',3.0,'University of Toronto','Toronto'),(5003,'Undergraduate','Information Tech',3.5,'University of Waterloo','Waterloo'),(5004,'Undergraduate','Information Tech',2.8,'University of Alberta','Alberta');
/*!40000 ALTER TABLE `education` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `intern`
--

DROP TABLE IF EXISTS `intern`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `intern` (
  `comp_name` varchar(45) NOT NULL,
  `student_ID` int(11) NOT NULL,
  `contact_FN` varchar(20) NOT NULL,
  `contact_LN` varchar(20) NOT NULL,
  `job_name` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `note` varchar(100) DEFAULT NULL,
  `intern_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`student_ID`),
  KEY `job_name` (`job_name`),
  KEY `comp_name` (`comp_name`),
  CONSTRAINT `intern_ibfk_1` FOREIGN KEY (`job_name`) REFERENCES `job` (`job_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `intern_ibfk_2` FOREIGN KEY (`student_ID`) REFERENCES `student` (`student_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `intern_ibfk_3` FOREIGN KEY (`comp_name`) REFERENCES `job` (`comp_name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `intern`
--

LOCK TABLES `intern` WRITE;
/*!40000 ALTER TABLE `intern` DISABLE KEYS */;
INSERT INTO `intern` VALUES ('mac111',1001,'Lily','Zhang','Android Developer','','',NULL,NULL),('mac111',1005,'Lucy','Zhang','C# developer','1234567890','',NULL,NULL);
/*!40000 ALTER TABLE `intern` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job`
--

DROP TABLE IF EXISTS `job`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job` (
  `job_ID` int(11) NOT NULL,
  `job_name` varchar(30) NOT NULL,
  `comp_name` varchar(30) NOT NULL,
  `position` varchar(20) NOT NULL,
  `note` varchar(100) NOT NULL,
  `responsibility` varchar(50) NOT NULL,
  `requirement` varchar(50) NOT NULL,
  `salary` int(11) DEFAULT NULL,
  PRIMARY KEY (`job_ID`),
  KEY `job_name` (`job_name`),
  KEY `comp_name` (`comp_name`),
  CONSTRAINT `job_ibfk_1` FOREIGN KEY (`job_name`) REFERENCES `job_group` (`job_Name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `job_ibfk_2` FOREIGN KEY (`comp_name`) REFERENCES `company` (`comp_name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job`
--

LOCK TABLES `job` WRITE;
/*!40000 ALTER TABLE `job` DISABLE KEYS */;
INSERT INTO `job` VALUES (2001,'Android Developer','Amazon','Developer','','Develop assigned features','famaliar with android',3000),(2002,'C# developer','IBM','Developer','','Develop assigned features','famaliar with C#',3000),(2003,'DB manager','mac111','DB manager','','maintain database','famaliar with oracle',2000),(2004,'Network','Research lab1','network manager','','maintain network','CCIE certification',3000),(2111,'Android Developer','Amazon','','','','',3000);
/*!40000 ALTER TABLE `job` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_group`
--

DROP TABLE IF EXISTS `job_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_group` (
  `job_Name` varchar(30) NOT NULL,
  `group_Name` enum('Web Development','Mobile Development','System Development','Technical Support','Networking','Data Analysis','Testing','Security','Data Management','Other') DEFAULT NULL,
  `job_group_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`job_Name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_group`
--

LOCK TABLES `job_group` WRITE;
/*!40000 ALTER TABLE `job_group` DISABLE KEYS */;
INSERT INTO `job_group` VALUES ('Android Developer','Mobile Development',NULL),('C# developer','Web Development',NULL),('DB manager','Data Management',NULL),('Java developer','System Development',NULL),('MAC developer','Mobile Development',NULL),('Network','Networking',NULL),('PHP developer','Web Development',NULL),('Software testing','Testing',NULL),('Unix developer','System Development',NULL);
/*!40000 ALTER TABLE `job_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `own_skill`
--

DROP TABLE IF EXISTS `own_skill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `own_skill` (
  `skill_ID` int(11) NOT NULL,
  `student_ID` int(11) NOT NULL,
  `skill_level` varchar(20) NOT NULL,
  PRIMARY KEY (`skill_ID`,`student_ID`),
  KEY `student_ID` (`student_ID`),
  CONSTRAINT `own_skill_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `student` (`student_ID`),
  CONSTRAINT `own_skill_ibfk_2` FOREIGN KEY (`skill_ID`) REFERENCES `skill` (`skill_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `own_skill`
--

LOCK TABLES `own_skill` WRITE;
/*!40000 ALTER TABLE `own_skill` DISABLE KEYS */;
INSERT INTO `own_skill` VALUES (3001,1001,'Not at all competent'),(3002,1002,'Little competent'),(3003,1002,'Moderately competent'),(3004,1004,'Extremely competent');
/*!40000 ALTER TABLE `own_skill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skill`
--

DROP TABLE IF EXISTS `skill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skill` (
  `skill_ID` int(11) NOT NULL,
  `skill_name` varchar(15) NOT NULL,
  `skill_type` enum('Technical','CMS','Operating System') DEFAULT NULL,
  PRIMARY KEY (`skill_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skill`
--

LOCK TABLES `skill` WRITE;
/*!40000 ALTER TABLE `skill` DISABLE KEYS */;
INSERT INTO `skill` VALUES (3001,'ASP.NET','Technical'),(3002,'C','Technical'),(3003,'JAVA','Technical'),(3004,'MYSQL','Technical'),(3005,'JavaScript','Technical'),(3006,'Perl','Technical'),(3007,'PHP','Technical'),(3008,'Python','Technical'),(3009,'Conrete5','CMS'),(3010,'Android','Operating System');
/*!40000 ALTER TABLE `skill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `student_ID` int(11) NOT NULL,
  `stu_FName` varchar(20) NOT NULL,
  `stu_MName` varchar(20) DEFAULT NULL,
  `stu_LName` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `status` varchar(15) NOT NULL,
  `semenster` enum('Fall','Winter') NOT NULL,
  `year` year(4) NOT NULL,
  `intern_status` enum('Hired','Available') NOT NULL,
  PRIMARY KEY (`student_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1001,'Tom',NULL,'Bieber','tom@uwindsor.ca','2269757100','Male','Internatinal','Winter',2016,'Hired'),(1002,'Jack',NULL,'Jobs','jack@uwindsor.ca','2269757102','Female','Internatinal','Fall',2015,'Hired'),(1003,'Argo',NULL,'Robers','argo@uwindsor.ca','2269757101','Male','International','Fall',2015,'Available'),(1004,'Britney',NULL,'Spears','britney@uwindsor.ca','2269757103','Female','International','Winter',2016,'Available'),(1005,'Sonia',NULL,'Spears','sonia@uwindsor.ca','2269757104','Female','International','Fall',2015,'Hired'),(1010,'Yan','M','Liu','yan@uwindsor.ca','1234567890','Female','International','Fall',2015,'Available');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `temp_view`
--

DROP TABLE IF EXISTS `temp_view`;
/*!50001 DROP VIEW IF EXISTS `temp_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `temp_view` AS SELECT 
 1 AS `student_ID`,
 1 AS `stu_FName`,
 1 AS `stu_MName`,
 1 AS `stu_LName`,
 1 AS `email`,
 1 AS `telephone`,
 1 AS `gender`,
 1 AS `status`,
 1 AS `semenster`,
 1 AS `year`,
 1 AS `intern_status`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_name` varchar(10) NOT NULL,
  `passwd` varchar(10) NOT NULL,
  `user_ID` int(10) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workexp`
--

DROP TABLE IF EXISTS `workexp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workexp` (
  `workexp_ID` int(11) NOT NULL,
  `student_ID` int(11) NOT NULL,
  `company_name` varchar(25) NOT NULL,
  `company_location` varchar(20) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `position` varchar(20) NOT NULL,
  PRIMARY KEY (`workexp_ID`),
  KEY `student_ID` (`student_ID`),
  CONSTRAINT `workexp_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `student` (`student_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workexp`
--

LOCK TABLES `workexp` WRITE;
/*!40000 ALTER TABLE `workexp` DISABLE KEYS */;
INSERT INTO `workexp` VALUES (4001,1001,'Fido inc.','Canada','2013-12-03','2014-06-03','Developer');
/*!40000 ALTER TABLE `workexp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `temp_view`
--

/*!50001 DROP VIEW IF EXISTS `temp_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `temp_view` AS select `student`.`student_ID` AS `student_ID`,`student`.`stu_FName` AS `stu_FName`,`student`.`stu_MName` AS `stu_MName`,`student`.`stu_LName` AS `stu_LName`,`student`.`email` AS `email`,`student`.`telephone` AS `telephone`,`student`.`gender` AS `gender`,`student`.`status` AS `status`,`student`.`semenster` AS `semenster`,`student`.`year` AS `year`,`student`.`intern_status` AS `intern_status` from `student` where ((`student`.`gender` = 'Male') and (`student`.`semenster` = 'Fall')) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-06  7:53:31
