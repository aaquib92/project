-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE `admin_login` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(55) NOT NULL,
  `user_pass` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin_login` (`user_id`, `user_name`, `user_pass`, `name`) VALUES
(1,	'junaid6',	'123456',	'junaid khan'),
(2,	'ravish23',	'1234',	'ravish kazi'),
(3,	'ansar96',	'apple',	'ansar shaikh');

DROP TABLE IF EXISTS `contact_form`;
CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `message` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `contact_form` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1,	'abc',	'abc@gmail.com',	'9920111234',	'hii'),
(2,	'def',	'def@gmail.com',	'9920111235',	'how are you');

DROP TABLE IF EXISTS `course_details`;
CREATE TABLE `course_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(55) NOT NULL,
  `start_date` varchar(55) NOT NULL,
  `end_date` varchar(55) NOT NULL,
  `timing` varchar(55) NOT NULL,
  `days` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `course_details` (`id`, `course`, `start_date`, `end_date`, `timing`, `days`) VALUES
(1,	'Java Technology ',	'2018-01-07',	'2018-03-31',	'2.00 pm to 4.00 pm',	'Sat/Sun '),
(2,	'Python Technology 	',	'2018-01-21',	'2018-03-17',	'7.00 pm to 9.00 pm 	',	'Sat/Sun '),
(3,	'C C++ DS Unix 	',	'2018-02-06',	'2018-03-29',	'7.00 pm to 9.00 pm 	',	'Tue/Thu '),
(4,	'Javascript 	',	'2018-02-18',	'2018-03-12',	'4.00 pm to 6.00 pm 	',	'Sat/Sun '),
(6,	'html5',	'2018-02-09',	'2018-04-18',	'10:00 am to 12:00 pm',	'Tue/Thu');

DROP TABLE IF EXISTS `job_openings`;
CREATE TABLE `job_openings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job` varchar(55) NOT NULL,
  `openings` varchar(55) NOT NULL,
  `experience` varchar(55) NOT NULL,
  `prerequisite` varchar(100) NOT NULL,
  `jobid` int(11) NOT NULL,
  `company` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `job_openings` (`id`, `job`, `openings`, `experience`, `prerequisite`, `jobid`, `company`) VALUES
(1,	'Java Developer 	',	'4',	'Fresher ',	'Java, Java Script, SQL 	',	25111604,	'Puratech '),
(2,	'UI Developer 	',	'2',	'0 to 2 years 	',	'Proficient in using HTML, CSS, JavaScript, Java, AJAX, ',	1412201602,	'	S.K. International '),
(3,	'Senior Java Developer/ Principal Software Engg. ',	'Not Disclosed 	',	'4 to 10 years 	',	'Spring MVC, Hibernate , Communication Skills ',	30111601,	'	Diebold '),
(4,	'ASP.NET 	',	'2',	'1 to 3 	',	'Development and Coding Skills',	25111601,	'	Technowin ');

DROP TABLE IF EXISTS `recent_placements`;
CREATE TABLE `recent_placements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `company` varchar(55) NOT NULL,
  `position` varchar(55) NOT NULL,
  `contact` varchar(55) NOT NULL,
  `date` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `recent_placements` (`id`, `name`, `company`, `position`, `contact`, `date`) VALUES
(1,	'Parth Shah 	',	'Dgflick Solution Pvt Ltd  	',	'Trainee Software Developer 	',	'parthpa1618@gmail.com 	',	'2016-12-15'),
(2,	'Ketan Khatri 	',	'S. K. International 	',	'Software Developer 	',	'ketankhatri35@gmail.com 	',	'2016-12-10'),
(3,	'Annette Kotian 	',	'InBetween IT Services India Pvt. Ltd. ',	'Jr. Software Developer 	',	'annettekotian@gmail.com 	',	'2014-04-08'),
(4,	'Gaurav Shah 	',	'Saba Software pvt. ltd. 	',	'Software Engineer 	',	'shah.gaurav47@gmail.com 	',	'2012-05-22'),
(5,	'xyz',	'TCS',	'ui developer',	'abc@gmail.com',	'2018-01-10');

-- 2018-02-04 18:15:59
