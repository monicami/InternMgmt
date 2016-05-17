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
  `cer_ID` int(11) NOT NULL,
  `student_ID` int(11) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cer_ID`,`student_ID`),
  KEY `student_ID` (`student_ID`),
  CONSTRAINT `cer_record_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `student` (`student_ID`),
  CONSTRAINT `cer_record_ibfk_2` FOREIGN KEY (`cer_ID`) REFERENCES `certification` (`cer_ID`)
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
  `cer_ID` int(11) NOT NULL,
  `cer_titles` varchar(20) NOT NULL,
  `cer_body` varchar(20) NOT NULL,
  PRIMARY KEY (`cer_ID`)
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
  PRIMARY KEY (`comp_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` VALUES ('Amazon','Company','http://www.amazon.com',NULL,'444 University Ave','Windsor','N9B2Y4','Canada'),('IBM','Company','http://www.ibm.com','this is a IT company','123 University Ave','Windsor','N9B2Y0','Canada'),('mac111','Startup Company','http://www.mac111.com',NULL,'333 University Ave','Windsor','N9B2Y7','Canada'),('Research lab1','Research Project','http://www.researchlab1.com',NULL,'476 University Ave','Windsor','N9B2Y1','Canada');
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `edu_record`
--

DROP TABLE IF EXISTS `edu_record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `edu_record` (
  `edu_ID` int(11) NOT NULL,
  `student_ID` int(11) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`edu_ID`,`student_ID`),
  KEY `student_ID` (`student_ID`),
  CONSTRAINT `edu_record_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `student` (`student_ID`),
  CONSTRAINT `edu_record_ibfk_2` FOREIGN KEY (`edu_ID`) REFERENCES `education` (`edu_ID`)
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
  `edu_ID` int(11) NOT NULL,
  `edu_type` varchar(15) NOT NULL,
  `major` varchar(30) NOT NULL,
  `gpa` decimal(2,1) NOT NULL,
  `uni_name` varchar(50) NOT NULL,
  `uni_location` varchar(25) NOT NULL,
  PRIMARY KEY (`edu_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `education`
--

LOCK TABLES `education` WRITE;
/*!40000 ALTER TABLE `education` DISABLE KEYS */;
INSERT INTO `education` VALUES (5001,'Bachelor','Computer Science',3.3,'University of Ottawa','Ottawa'),(5002,'Bachelor','Computer Science',3.0,'University of Toronto','Toronto'),(5003,'Bachelor','Information Tech',3.5,'University of Waterloo','Waterloo'),(5004,'Bachelor','Information Tech',2.8,'University of Alberta','Alberta');
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
  PRIMARY KEY (`student_ID`),
  KEY `job_name` (`job_name`),
  KEY `comp_name` (`comp_name`),
  CONSTRAINT `intern_ibfk_1` FOREIGN KEY (`job_name`) REFERENCES `job` (`job_name`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `intern_ibfk_2` FOREIGN KEY (`student_ID`) REFERENCES `student` (`student_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `intern_ibfk_3` FOREIGN KEY (`comp_name`) REFERENCES `job` (`comp_name`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `intern`
--

LOCK TABLES `intern` WRITE;
/*!40000 ALTER TABLE `intern` DISABLE KEYS */;
INSERT INTO `intern` VALUES ('Amazon',1001,'Lucy','Ma','Android Developer','1234567890','lucy@amazon.ca',NULL),('IBM',1002,'Lily','Zhang','C# developer','2269757000','lily@ibm.ca',NULL);
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
INSERT INTO `job` VALUES (2001,'Android Developer','Amazon','Developer','','Develop assigned features','famaliar with android',3000),(2002,'C# developer','IBM','Developer','','Develop assigned features','famaliar with C#',3000),(2003,'DB manager','mac111','DB manager','','maintain database','famaliar with oracle',2000),(2004,'Network','Research lab1','network manager','','maintain network','CCIE certification',3000);
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
  PRIMARY KEY (`job_Name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_group`
--

LOCK TABLES `job_group` WRITE;
/*!40000 ALTER TABLE `job_group` DISABLE KEYS */;
INSERT INTO `job_group` VALUES ('',NULL),('Android Developer','Mobile Development'),('C# developer','Web Development'),('DB manager','Data Management'),('Java developer','System Development'),('MAC developer','Mobile Development'),('Network','Networking'),('PHP developer','Web Development'),('Software testing','Testing'),('Unix developer','System Development');
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
INSERT INTO `own_skill` VALUES (3001,1001,'Famaliar');
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
INSERT INTO `student` VALUES (1001,'Tom',NULL,'Bieber','tom@uwindsor.ca','2269757100','Male','Internatinal','Winter',2016,'Hired'),(1002,'Jack',NULL,'Jobs','jack@uwindsor.ca','2269757102','Female','Internatinal','Fall',2015,'Hired'),(1003,'Argo',NULL,'Robers','argo@uwindsor.ca','2269757101','Male','International','Fall',2015,'Hired'),(1004,'Britney',NULL,'Spears','britney@uwindsor.ca','2269757103','Female','International','Winter',2016,'Available'),(1005,'Sonia',NULL,'Spears','sonia@uwindsor.ca','2269757104','Female','International','Fall',2015,'Available'),(1010,'Yan','M','Liu','yan@uwindsor.ca','1234567890','Female','International','Fall',2015,'Available');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workexp`
--

DROP TABLE IF EXISTS `workexp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workexp` (
  `exp_ID` int(11) NOT NULL,
  `student_ID` int(11) NOT NULL,
  `company_name` varchar(25) NOT NULL,
  `company_location` varchar(20) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `position` varchar(20) NOT NULL,
  PRIMARY KEY (`exp_ID`),
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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-04  6:44:59
