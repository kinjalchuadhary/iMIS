-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 08, 2016 at 03:53 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iMIS_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_skills`
--

CREATE TABLE IF NOT EXISTS `cms_skills` (
  `cms_id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  `concrete5` varchar(45) DEFAULT NULL,
  `dotnetnuke` varchar(45) DEFAULT NULL,
  `drupal` varchar(45) DEFAULT NULL,
  `joomla` varchar(45) DEFAULT NULL,
  `wordpress` varchar(45) DEFAULT NULL,
  `cms_other` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_skills`
--

INSERT INTO `cms_skills` (`cms_id`, `stu_id`, `concrete5`, `dotnetnuke`, `drupal`, `joomla`, `wordpress`, `cms_other`) VALUES
(9, 1045, 'not at all competent', 'not at all competent', 'not at all competent', 'not at all competent', 'not at all competent', 'not at all competent'),
(10, 1046, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 1047, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 1048, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 1049, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 1050, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 1051, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 1052, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 1053, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 1050, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `edu_id` int(11) NOT NULL,
  `stu_id` int(11) DEFAULT NULL,
  `degree_type` varchar(45) DEFAULT NULL,
  `degree_major` varchar(45) DEFAULT NULL,
  `degree_gpa` float DEFAULT NULL,
  `degree_university` varchar(45) DEFAULT NULL,
  `degree_university_location` varchar(45) DEFAULT NULL,
  `certifications` varchar(45) DEFAULT NULL,
  `certifications_body` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`edu_id`, `stu_id`, `degree_type`, `degree_major`, `degree_gpa`, `degree_university`, `degree_university_location`, `certifications`, `certifications_body`) VALUES
(8, 1045, 'graduate', 'computer', 3.8, 'university of windsor', 'Canada', 'ccna', 'cisco'),
(9, 1046, NULL, NULL, NULL, NULL, NULL, '', ''),
(10, 1047, 'graduate', 'computer', 3.8, 'university of windsor', 'Canada', 'ccna', 'cisco'),
(11, 1048, NULL, '', 0, '', '', '', ''),
(12, 1049, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 1050, 'graduate', 'computer', 3.8, 'university of windsor', 'Canada', 'ccna', 'cisco'),
(14, 1051, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 1052, 'graduate', 'computer', 3.8, 'university of windsor', 'Canada', 'ccna', 'cisco'),
(16, 1053, 'undergraduate', 'computer', NULL, NULL, NULL, 'ccna', 'cisco'),
(17, 1050, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `intership`
--

CREATE TABLE IF NOT EXISTS `intership` (
  `stu_id` int(11) NOT NULL,
  `inter_type` varchar(45) NOT NULL,
  `inter_company_name` varchar(45) DEFAULT NULL,
  `inter_address` varchar(45) DEFAULT NULL,
  `inter_city` varchar(45) DEFAULT NULL,
  `inter_postal_code` varchar(45) DEFAULT NULL,
  `inter_country` varchar(45) DEFAULT NULL,
  `contact_person_fn` varchar(45) DEFAULT NULL,
  `contact_person_ln` varchar(45) DEFAULT NULL,
  `contact_person_position` varchar(45) DEFAULT NULL,
  `inter_tel` varchar(45) DEFAULT NULL,
  `inter_email` varchar(45) DEFAULT NULL,
  `inter_company_website` varchar(45) DEFAULT NULL,
  `notes` varchar(45) DEFAULT NULL,
  `inter_status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intership`
--

INSERT INTO `intership` (`stu_id`, `inter_type`, `inter_company_name`, `inter_address`, `inter_city`, `inter_postal_code`, `inter_country`, `contact_person_fn`, `contact_person_ln`, `contact_person_position`, `inter_tel`, `inter_email`, `inter_company_website`, `notes`, `inter_status`) VALUES
(1045, 'company', 'apple', '3187 peter street', 'windsor', 'N9C 1H4', 'Canada', 'Joseph', 'Roy', 'manager', '', 'joseph@gmail.com', 'www.apple.com', '        ', 'hired'),
(1046, 'company', 'apple', '2345 college street', 'windsor', '1B5 1N4', 'Canada', NULL, 'Smith', 'senior engineer', NULL, 'smith@gmail.com', NULL, NULL, 'hired'),
(1047, 'company', 'ibm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(1048, 'startup company', 'myweb', '', '', '', '', '', '', '', '', '', '', '  ', ''),
(1049, 'company', 'apple', '2132 rankin', 'windsor', 'D3C 1K3', 'Canada', NULL, NULL, 'senior engineer', NULL, 'smith@gmail.com', NULL, NULL, 'hired'),
(1050, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(1050, 'research project', 'ibm', '341 rankin street', 'london', NULL, 'Canada', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available'),
(1051, 'research project', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(1052, 'mac project', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(1053, 'mac project', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `job_groups`
--

CREATE TABLE IF NOT EXISTS `job_groups` (
  `job_id` int(11) NOT NULL,
  `jgroup` varchar(45) DEFAULT NULL,
  `job_position` varchar(45) DEFAULT NULL,
  `job_description` varchar(45) DEFAULT NULL,
  `job_responsibilities` varchar(45) DEFAULT NULL,
  `job_requirements` varchar(45) DEFAULT NULL,
  `job_salary` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_groups`
--

INSERT INTO `job_groups` (`job_id`, `jgroup`, `job_position`, `job_description`, `job_responsibilities`, `job_requirements`, `job_salary`) VALUES
(101, 'web development', ' web designer', 'developing website', 'establishing a detailed program specification', '1 year experience', '45000'),
(102, 'testing', 'senior engineer', 'testing software', 'conducting user-acceptance testing', '3 years experience ', '56000'),
(103, 'mobile development', 'ios developer', 'designing mobile app', 'installing the program into production', 'excellent on swift language ', '78000'),
(104, 'networking', 'network engineer', 'technical reports ', 'modifying and developing existing network', '2 years exeperience', '43600'),
(105, 'system development', 'systems engineer ', '', 'adapting the program to new requirements', '2 years experience on linux', '65600');

-- --------------------------------------------------------

--
-- Table structure for table `job_show`
--

CREATE TABLE IF NOT EXISTS `job_show` (
  `job_show_id` int(11) NOT NULL,
  `job_id` int(11) DEFAULT NULL,
  `interest_status` varchar(45) DEFAULT NULL,
  `stu_id` int(11) NOT NULL DEFAULT '1045'
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_show`
--

INSERT INTO `job_show` (`job_show_id`, `job_id`, `interest_status`, `stu_id`) VALUES
(21, 101, 'interested', 1045),
(22, 102, NULL, 1045),
(23, 103, 'interested', 1045),
(24, 103, NULL, 1045),
(25, 104, NULL, 1045),
(26, 105, NULL, 1045);

-- --------------------------------------------------------

--
-- Table structure for table `Master_Table`
--

CREATE TABLE IF NOT EXISTS `Master_Table` (
  `master_id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `IsAdmin` varchar(45) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Master_Table`
--

INSERT INTO `Master_Table` (`master_id`, `first_name`, `last_name`, `email`, `password`, `IsAdmin`) VALUES
(1, 'Administrator', NULL, 'admin@gmail.com', 'admin', '1'),
(1045, 'jayveer', 'parmar', 'jay@gmail.com', 'jay', '0'),
(1046, 'Rudresh', 'Jha', 'rj@gmail.com', 'rj', '0'),
(1047, 'Aditya', 'Patel', 'aditya@gmail.com', 'aditya', '0'),
(1048, 'John', 'Wilson', 'john@gmail.com', 'john', '0'),
(1049, 'Rose', 'Martin', 'rose@gmail.com', 'rose', '0'),
(1050, 'Sarah', 'Lee', 'sarah@gmail.com', 'sarah', '0'),
(1051, 'Dhaval', 'Patel', 'dhaval@gmail.com', 'dhaval', '0'),
(1052, 'Neel', 'Desai', 'neel@gmail.com', 'neel', '0'),
(1053, 'Hardik', 'Patel', 'hardik@gmail.com', 'hardik', '0');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL,
  `subject` varchar(45) DEFAULT NULL,
  `news` varchar(450) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `subject`, `news`) VALUES
(1, 'Today is last day for submission', 'Do it');

-- --------------------------------------------------------

--
-- Table structure for table `operating_system_skills`
--

CREATE TABLE IF NOT EXISTS `operating_system_skills` (
  `os_id` int(11) NOT NULL,
  `stu_id` int(11) DEFAULT NULL,
  `android` varchar(45) DEFAULT NULL,
  `chrome_os` varchar(45) DEFAULT NULL,
  `ios` varchar(45) DEFAULT NULL,
  `linux` varchar(45) DEFAULT NULL,
  `macos` varchar(45) DEFAULT NULL,
  `unix` varchar(45) DEFAULT NULL,
  `windows` varchar(45) DEFAULT NULL,
  `os_other` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operating_system_skills`
--

INSERT INTO `operating_system_skills` (`os_id`, `stu_id`, `android`, `chrome_os`, `ios`, `linux`, `macos`, `unix`, `windows`, `os_other`) VALUES
(12, 1045, 'little competent', 'not at all competent', 'extremely competent', 'moderately competent', 'extremely competent', 'moderately competent', 'extremely competent', 'not at all competent'),
(13, 1046, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 1047, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 1048, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 1049, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 1050, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 1051, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 1052, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 1053, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 1050, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE IF NOT EXISTS `student_details` (
  `stu_id` int(11) NOT NULL,
  `stu_first_name` varchar(45) NOT NULL,
  `stu_middle_name` varchar(45) DEFAULT NULL,
  `stu_last_name` varchar(45) NOT NULL,
  `stu_email` varchar(45) NOT NULL,
  `stu_tel` varchar(45) DEFAULT NULL,
  `stu_gender` varchar(45) NOT NULL,
  `stu_status` varchar(45) DEFAULT NULL,
  `stu_reg_sem` varchar(45) NOT NULL,
  `stu_year` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`stu_id`, `stu_first_name`, `stu_middle_name`, `stu_last_name`, `stu_email`, `stu_tel`, `stu_gender`, `stu_status`, `stu_reg_sem`, `stu_year`) VALUES
(1045, 'jayveer', '', 'parmar', 'jay@gmail.com', '6476874676', 'male', 'international', 'winter', 2016),
(1046, 'Rudresh', NULL, 'Jha', 'rj@gmail.com', '5168789876', 'male', 'international', 'winter', 2015),
(1047, 'Aditya', NULL, 'Patel', 'aditya@gmail.com', '', 'male', 'international', 'fall', 2015),
(1048, 'John', '', 'Wilson', 'john@gmail.com', '', 'male', 'permanent resident/citizen', 'winter', 2016),
(1049, 'Rose', '', 'Martin', 'rose@gmail.com', '', 'female', 'international', 'winter', 2016),
(1050, 'Sarah', NULL, 'Lee', 'sarah@gmail.com', NULL, 'female', 'permanent resident/citizen', 'fall', 2016),
(1051, 'Dhaval', NULL, 'Patel', 'dhaval@gmail.com', NULL, 'male', 'international', 'winter', 2015),
(1052, 'Neel', NULL, 'Desai', 'neel@gmail.com', NULL, 'male', 'international', 'fall', 2015),
(1053, 'Hardik', NULL, 'Patel', 'hardik@gmail.com', NULL, 'male', 'international', 'fall', 2015);

-- --------------------------------------------------------

--
-- Table structure for table `technical_skills`
--

CREATE TABLE IF NOT EXISTS `technical_skills` (
  `tech_id` int(11) NOT NULL,
  `stu_id` int(11) DEFAULT NULL,
  `asp_net` varchar(45) DEFAULT NULL,
  `c` varchar(45) DEFAULT NULL,
  `cplusplus` varchar(45) DEFAULT NULL,
  `csharp` varchar(45) DEFAULT NULL,
  `flex` varchar(45) DEFAULT NULL,
  `java` varchar(45) DEFAULT NULL,
  `javascript` varchar(45) DEFAULT NULL,
  `lisp` varchar(45) DEFAULT NULL,
  `matlab` varchar(45) DEFAULT NULL,
  `mysql` varchar(45) DEFAULT NULL,
  `objective_c` varchar(45) DEFAULT NULL,
  `pascal` varchar(45) DEFAULT NULL,
  `perl` varchar(45) DEFAULT NULL,
  `php` varchar(45) DEFAULT NULL,
  `prolog` varchar(45) DEFAULT NULL,
  `python` varchar(45) DEFAULT NULL,
  `r` varchar(45) DEFAULT NULL,
  `ruby` varchar(45) DEFAULT NULL,
  `sql_oracle` varchar(45) DEFAULT NULL,
  `tcl` varchar(45) DEFAULT NULL,
  `t_sql` varchar(45) DEFAULT NULL,
  `vb_net` varchar(45) DEFAULT NULL,
  `tech_other` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technical_skills`
--

INSERT INTO `technical_skills` (`tech_id`, `stu_id`, `asp_net`, `c`, `cplusplus`, `csharp`, `flex`, `java`, `javascript`, `lisp`, `matlab`, `mysql`, `objective_c`, `pascal`, `perl`, `php`, `prolog`, `python`, `r`, `ruby`, `sql_oracle`, `tcl`, `t_sql`, `vb_net`, `tech_other`) VALUES
(12, 1045, 'little competent', 'extremely competent', 'little competent', 'not at all competent', 'not at all competent', 'moderately competent', 'moderately competent', 'not at all competent', 'not at all competent', 'extremely competent', 'extremely competent', 'not at all competent', 'not at all competent', 'extremely competent', 'not at all competent', 'not at all competent', 'not at all competent', 'not at all competent', 'not at all competent', 'not at all competent', 'not at all competent', 'not at all competent', 'not at all competent'),
(13, 1046, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 1047, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 1048, NULL, 'moderately competent', NULL, NULL, NULL, 'moderately competent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'extremely competent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 1049, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 1050, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'extremely competent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 1051, NULL, 'moderately competent', NULL, NULL, NULL, 'moderately competent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 1052, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'extremely competent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 1053, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 1050, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE IF NOT EXISTS `work` (
  `work_id` int(11) NOT NULL,
  `stu_id` int(11) DEFAULT NULL,
  `work_company_name` varchar(45) DEFAULT NULL,
  `work_company_location` varchar(45) DEFAULT NULL,
  `work_date_of_joining` date DEFAULT NULL,
  `work_position` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`work_id`, `stu_id`, `work_company_name`, `work_company_location`, `work_date_of_joining`, `work_position`) VALUES
(19, 1045, 'tata', 'India', '2013-04-02', 'junior enggineer'),
(20, 1046, NULL, NULL, NULL, NULL),
(21, 1047, NULL, NULL, NULL, NULL),
(22, 1048, 'ibm', 'USA', '0000-00-00', 'software developer'),
(23, 1049, NULL, NULL, NULL, NULL),
(24, 1050, 'ibm', 'Canada', NULL, 'software developerv'),
(25, 1051, NULL, NULL, NULL, NULL),
(26, 1052, NULL, NULL, NULL, NULL),
(27, 1053, NULL, NULL, NULL, NULL),
(28, 1050, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cms_skills`
--
ALTER TABLE `cms_skills`
  ADD PRIMARY KEY (`cms_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`edu_id`);

--
-- Indexes for table `intership`
--
ALTER TABLE `intership`
  ADD PRIMARY KEY (`stu_id`,`inter_type`);

--
-- Indexes for table `job_groups`
--
ALTER TABLE `job_groups`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `job_show`
--
ALTER TABLE `job_show`
  ADD PRIMARY KEY (`job_show_id`);

--
-- Indexes for table `Master_Table`
--
ALTER TABLE `Master_Table`
  ADD PRIMARY KEY (`master_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `operating_system_skills`
--
ALTER TABLE `operating_system_skills`
  ADD PRIMARY KEY (`os_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `technical_skills`
--
ALTER TABLE `technical_skills`
  ADD PRIMARY KEY (`tech_id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`work_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cms_skills`
--
ALTER TABLE `cms_skills`
  MODIFY `cms_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `edu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `job_groups`
--
ALTER TABLE `job_groups`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT for table `job_show`
--
ALTER TABLE `job_show`
  MODIFY `job_show_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `operating_system_skills`
--
ALTER TABLE `operating_system_skills`
  MODIFY `os_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `technical_skills`
--
ALTER TABLE `technical_skills`
  MODIFY `tech_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `work_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
