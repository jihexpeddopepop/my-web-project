/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.5-10.10.3-MariaDB : Database - book
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`book` /*!40100 DEFAULT CHARACTER SET tis620 COLLATE tis620_thai_ci */;

USE `book`;

/*Table structure for table `book_dept` */

DROP TABLE IF EXISTS `book_dept`;

CREATE TABLE `book_dept` (
  `book_dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_dept_name` varchar(100) DEFAULT NULL,
  `book_dept_active` varchar(1) DEFAULT 'Y',
  PRIMARY KEY (`book_dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=tis620 COLLATE=tis620_thai_ci;

/*Data for the table `book_dept` */

insert  into `book_dept`(`book_dept_id`,`book_dept_name`,`book_dept_active`) values (1,'สารสนเทศ','Y'),(2,'การพยาบาล','Y'),(3,'ทันตกรรม','Y'),(4,'ศูนย์สุขภาพชุมชน PCC','Y'),(5,'ห้องบัตร','Y'),(6,'ฝ่ายบริหารทั่วไป','Y'),(7,'งานกายภาพบำบัด','Y'),(8,'ห้องตรวจโรค','Y'),(9,'งานเรียกเก็บรายได้','Y'),(10,'งานโสตทัศนศึกษา','Y');

/*Table structure for table `book_detail` */

DROP TABLE IF EXISTS `book_detail`;

CREATE TABLE `book_detail` (
  `book_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_detail_no` varchar(100) DEFAULT NULL,
  `book_detail_title` varchar(100) DEFAULT NULL,
  `book_detail_detail` text DEFAULT NULL,
  `book_detail_dept1` int(11) DEFAULT NULL,
  `book_detail_dept2` int(11) DEFAULT NULL,
  `book_detail_date` date DEFAULT NULL,
  `book_detail_file` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`book_detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=tis620 COLLATE=tis620_thai_ci;

/*Data for the table `book_detail` */

insert  into `book_detail`(`book_detail_id`,`book_detail_no`,`book_detail_title`,`book_detail_detail`,`book_detail_dept1`,`book_detail_dept2`,`book_detail_date`,`book_detail_file`) values (75,'00100223','11022233','Anooooooo,,',6,3,'2023-05-30','repv2.pdf'),(76,'3334444','44444','44444444444444',9,4,'2023-05-22','repv1.pdf'),(77,'33344444','44444444444444','44444444444444444444',1,5,'2023-05-22','repv1.pdf'),(78,'881','1112','1114',2,10,'2023-05-22','repv1.pdf'),(79,'8822','83122','2658',3,4,'2023-05-24','Course_Certificate.pdf'),(81,'1111111111','1111111','popeyeee',4,8,'2023-05-01','7469805e1f9492d95301dc45b67029fb'),(82,'0012','001222','1212222',3,6,'2023-05-24','4ce9c7e5912d4dc733068e90d3486ed0'),(83,'255551','111','22215511',4,6,'2023-05-27','e61e987765518d041cb8a2b1908669b5.pdf'),(84,'114444','care22222','1111111',3,1,'2023-05-23','ea561cf0e9886958c1db7ef774d7a8f3.pdf'),(85,'0123456789','ทดสอบ','ทดสอบ',1,3,'2023-05-22','e20c6dc41e4ddbd6e5e5d1eb8ffaf0b7.pdf'),(86,'01234444','ทดสอบ2','ทดสอบ2',10,2,'2023-05-23','e8c8ff91cf905a6cb78d1a698072bd23.pdf'),(87,'3334','444444','22222222',7,2,'2023-05-23','67f92cbf70b4be8f6bb8b88e4799c166.pdf'),(88,'33355555','455555','8585858',2,1,'2023-05-24','d93ab462d0ee35e62800915aca5b03ea.pdf'),(89,'47577','8578','575',7,2,'2023-05-24','bceb17a326adc3d470b282e7c92c9b5d.pdf'),(91,'0930578688','โฮริมิยะ โฮริมิยะ','โฮริมิยะ',1,8,'2023-05-30','762b365f62168e748e7234e64a9629ad.pdf'),(92,'09305786881','โฮริมิยะ โฮริมิยะคุง','โฮริมิยะ',8,7,'2023-05-30','b0da145479bfb4a0d36a55417049bead.pdf'),(93,'093057868812','โฮริมิยะ โฮริมิยะคุง','โฮริมิยะ',1,9,'2023-05-24','9567f90f71bec2cc9ab0d80e8ff4a196.pdf'),(94,'09305786881','ปิยามาตร','ปิยมาตร',6,4,'2023-06-01','3199ba7c579b1315abb7c88f254ba4d0.pdf'),(95,'099009882','แอเรียล','นางเงือก\r\n',2,1,'2023-06-04','ff13577ae20e71e6fe1a2da24af51c00.pdf'),(96,'099009881','ชาเย็น','นางฟ้า',3,1,'2023-06-13','e32998f8d566707d52e0999bad6fe2f7.pdf'),(97,'0995665545','แอลเรียล','black',1,1,'2023-06-02','pink.php'),(98,'111111111112','ยัยตัวร้ายกับนายต่างดาว','ยัยตัวร้ายกับนายต่างดาว',9,10,'2023-06-01','284481aa334a3e6f55f8f4837639fe19.pdf'),(99,'2354678666665','มาลีเพื่อนรัก','มาลีเพื่อนรัก',2,1,'2023-06-01','6c698552bcf5666a49890f5ce162a02f.pdf'),(100,'78956456465','ข้าวจ้าว','ข้าวเหนียว',6,8,'2023-06-01','8922df93aecb8b286d1373658bf98fb0.pdf'),(101,'8','8','8',2,2,'2023-06-20','4e2d97602d781fa1f948685ca4431f03.pdf'),(102,'M','M','rrr',1,2,'2023-06-06','2532cfc2305210ecd28afcdc309cfe48.pdf'),(103,'333','ดาบพิฆาตอสูร','ccc',1,2,'2023-06-05','56f306e726154405ad4c54d05b8305e2.pdf'),(104,'12','แมวเป้า','ฟฟ',2,5,'2023-06-21',NULL),(105,'113','book','book',2,1,'2023-06-08','88335cba66121cefaba7ac9921a19b77.pdf'),(106,'11','Runglawan','ff',1,2,'2023-06-08','94130e70ebf1457ae4fd7d063a274a65.pdf'),(107,'00021635','1112','12',2,1,'2023-06-08','ab1b73567bc3d97a50c988524c78c1eb.pdf'),(108,'1','1','1',2,1,'2023-06-08','ea5891866168cdec5c27c01419a2d1db.pdf');

/*Table structure for table `book_login` */

DROP TABLE IF EXISTS `book_login`;

CREATE TABLE `book_login` (
  `book_login_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_login_username` varchar(100) DEFAULT NULL,
  `book_login_password` varchar(100) DEFAULT NULL,
  `book_login_level_id` char(1) DEFAULT NULL,
  `book_dept_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`book_login_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=tis620 COLLATE=tis620_thai_ci;

/*Data for the table `book_login` */

insert  into `book_login`(`book_login_id`,`book_login_username`,`book_login_password`,`book_login_level_id`,`book_dept_id`) values (1,'admin','12345678','1',1),(2,'maomao','23072544','1',1),(3,'63010912540','1479300003016','2',1),(4,'63010912540@msu.ac.th','1479300003016','2',1),(5,'popeye','11111111','2',2),(6,'yoongi','11111111','5',3);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
