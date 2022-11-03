-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 09:27 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ehealth_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_tb`
--

CREATE TABLE `appointment_tb` (
  `snumber` int(225) NOT NULL,
  `pname` varchar(225) NOT NULL,
  `pnumber` varchar(225) NOT NULL,
  `appemail` varchar(225) NOT NULL,
  `symptoms` varchar(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `age` int(10) NOT NULL,
  `appdate` date NOT NULL,
  `apptime` varchar(6) DEFAULT NULL,
  `doctor` varchar(225) NOT NULL,
  `curent_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment_tb`
--

INSERT INTO `appointment_tb` (`snumber`, `pname`, `pnumber`, `appemail`, `symptoms`, `gender`, `age`, `appdate`, `apptime`, `doctor`, `curent_date`) VALUES
(1, 'Akinboyewa David', '2147483647', 'akinboyewadavid@gmail.com', 'I just want to see the doctor', 'male', 0, '2021-04-26', '00:20:', 'Dr David', '2021-06-03 14:24:45'),
(2, 'Mayowa Thomas', '2147483647', 'mayowathomas@gmail.com', 'I have been having pain under my foot for 3 months now.  May i request that you fix me for an appointment with you.', 'Female', 0, '2021-04-28', '00:20:', 'Dr David Jacobs', '2021-06-03 14:24:45'),
(3, 'Adeola Daniels', '2147483647', 'adeoladaniels2@gmail.com', 'I think i have malaria.', 'Female', 0, '2021-04-30', '00:20:', 'Dr Olamide Faith', '2021-06-03 14:24:45'),
(4, 'Esther David', '2147483647', 'estherdavid@gmail.com', 'I am pregnant', 'female', 0, '2021-04-30', '00:20:', 'Dr David', '2021-06-03 14:24:45'),
(5, 'Adeola Grace', '2147483647', 'adeolagrace@gmail.com', 'I noticed that my hands are itching me', 'female', 0, '2021-05-15', '2:00pm', 'Dr David', '2021-06-03 14:24:45'),
(6, 'Ben James', '2147483647', 'benjames@gmail.com', 'Have been having a headache for the past 3 days', 'male', 0, '2021-04-28', '2:00pm', 'Dr Olamide Faith', '2021-06-03 14:24:45'),
(7, 'Grace Emaculate', '2147483647', 'graceemaculate@gmail.com', 'I just was to see you', 'Female', 0, '2021-04-29', '3:00pm', 'Dr Alakaloko Felix', '2021-06-03 14:24:45'),
(8, 'Dupe akuma', '2147483647', 'dupeakuma@gmail.com', 'Sore throat and cough', 'Female', 0, '2021-05-01', '2:00pm', 'Prof. Adesoji Ademuyiwa', '2021-06-03 14:24:45'),
(9, 'Elon Musk', '08026738938', 'elonmusk@gmail.com', 'Having Sleepless night', 'male', 0, '2021-04-30', '2:00pm', 'Prof. Adesoji Ademuyiwa', '2021-06-03 14:24:45'),
(10, 'adeyinka bukky', '08066994421', 'adebuk@gmail.com', 'cough and breathlessness', 'male', 0, '2021-05-04', '3:00pm', 'Prof. Adesoji Ademuyiwa', '2021-06-03 14:24:45'),
(11, 'Michael james', '08023452678', 'michaeljames@gmail.com', 'I need a glasses', 'male', 0, '2021-05-02', '3:00pm', 'Prof. Adesoji Ademuyiwa', '2021-06-03 14:24:45'),
(12, 'Akinboyewa David', '07061242347', 'njames@gmail.com', 'cough', 'Female', 23, '2021-05-12', '3:00pm', 'Prof. Adesoji Ademuyiwa', '2021-06-03 14:24:45'),
(13, 'Chuku Ebuka', '123456789', 'chukeebuka@gmail.com', 'dizziness', 'Male', 26, '2021-06-18', '2:00pm', 'Prof. Adesoji Ademuyiwa', '2021-06-03 14:27:43'),
(14, 'friedbread', '123457678', 'friedbread@gmail.com', 'cough', 'Female', 27, '2021-06-03', '2:00pm', 'Prof. Adesoji Ademuyiwa', '2021-06-03 14:57:30'),
(15, 'Mary James', '12345678', 'maryjames@gmail.com', 'cold', 'Male', 25, '2021-06-03', '2:00pm', 'Dr Alakaluko Felix', '2021-06-03 15:02:09'),
(16, 'Esther James', '07061242347', 'estherjames@gmail.com', 'Overthinking', 'Male', 22, '2021-06-03', '2:00pm', 'Dr Alakaluko Felix', '2021-06-03 16:04:13'),
(17, 'fred', 'jonna', 'fredjonna@gmail.com', 'too much money', 'Male', 28, '2021-06-16', '2:00pm', 'Dr David', '2021-06-05 13:03:47');

-- --------------------------------------------------------

--
-- Table structure for table `clinical_records_tb`
--

CREATE TABLE `clinical_records_tb` (
  `id` int(10) NOT NULL,
  `date_of_presentation` date NOT NULL,
  `firstname` varchar(225) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `hosp_number` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `source_of_referral` varchar(225) NOT NULL,
  `presenting_compliant` varchar(225) NOT NULL,
  `hpc` varchar(225) NOT NULL,
  `examination` varchar(225) NOT NULL,
  `diagnosis` varchar(225) NOT NULL,
  `diagnosis_two` varchar(225) NOT NULL,
  `available_investigations` varchar(225) NOT NULL,
  `requested` varchar(225) NOT NULL,
  `plan` varchar(225) NOT NULL,
  `secondvisit` varchar(225) NOT NULL,
  `thirdvisit` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clinical_records_tb`
--

INSERT INTO `clinical_records_tb` (`id`, `date_of_presentation`, `firstname`, `lastname`, `hosp_number`, `address`, `phonenumber`, `age`, `gender`, `source_of_referral`, `presenting_compliant`, `hpc`, `examination`, `diagnosis`, `diagnosis_two`, `available_investigations`, `requested`, `plan`, `secondvisit`, `thirdvisit`) VALUES
(1, '2021-05-06', 'David', 'Akinboyewa', '1111', 'Department of Surgery, College of Medicine, University of Lagos. Idi-Araba, Surulere, Lagos.  ', '07061242347', 24, 'male', 'compliant', '  compliant    ', 'compliant', 'compliant', 'choledochal', 'choledochal', '    compliant  ', 'compliant', '    compliant  ', '    compliant  was good', '    compliant  '),
(2, '2021-05-06', 'David', 'Akinboyewa', '123456', 'no 3 olufemi peter ire-akari estate, isolo, Lagos', '07061242347', 25, 'male', '1', '2', '3', '4', 'ileal', 'choledochal', '6', '7', '6', '7', '8'),
(3, '2021-05-06', 'David', 'Akinboyewa', '1234567', 'no 3 olufemi peter ire-akari estate, isolo, Lagos', '07061242347', 23, 'Female', 'compliant', 'compliant', 'cough', '', 'hirschsprung', 'hirschsprung', '', '', '', '', ''),
(4, '0000-00-00', '', '', '', '', '', 0, '', '', '', '', 'compliant', 'hirschsprung', '', '', '', '', '', ''),
(5, '0000-00-00', '', '', '', '', '', 0, '', '', '', '', '', 'anorectal-high', 'compliant', '', '', '', '', ''),
(6, '0000-00-00', '', '', '', '', '', 0, '', '', '', '', '', '', '', 'compliant', '', '', '', ''),
(7, '0000-00-00', '', '', '', '', '', 0, '', '', '', '', '', '', '', 'compliant', 'compliant', ' compliant', ' compliant', ' compliant'),
(8, '2021-05-06', 'David', 'Akinboyewa', '12345', 'no 3 olufemi peter ire-akari estate, isolo, Lagos', '07061242347', 23, 'Male', 'compliant', 'compliant', 'cough', 'compliant', 'ileal', 'compliant', 'compliant', 'compliant', ' compliant', ' compliant', ' compliant');

-- --------------------------------------------------------

--
-- Table structure for table `ehealth_reg`
--

CREATE TABLE `ehealth_reg` (
  `snumber` int(225) NOT NULL,
  `firstname` varchar(225) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `unit` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `enpassword` varchar(225) NOT NULL,
  `admin` varchar(18) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `activate` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ehealth_reg`
--

INSERT INTO `ehealth_reg` (`snumber`, `firstname`, `lastname`, `unit`, `email`, `password`, `enpassword`, `admin`, `admin_email`, `activate`) VALUES
(307, 'David', 'Akinboyewa', 'PSU', 'akinboyewadavid@gmail.com', '1234567', 'PSU608b9f795c415', 'PSUadmin01', 'akinboyewadavid@gmail.com', 1),
(308, 'White ', 'Smith', 'PSU', 'whitesmith@yahoo.co.uk', 'YAHOO', 'PSU608bb39043499', '', '', 0),
(309, 'moyosoluwa', 'ojo', 'PSU', 'moyoojo2015@gmail.com', '12345', 'PSU608bbc30d30bf', '', '', 0),
(310, 'Esther', 'Mary', 'PSU', 'esthermary@gmail.com', '12345678', 'PSU608c1af0231da', '', '', 0),
(311, 'chinelo', 'kemi', 'PSU', 'chinelokemi@gmail.com', '1234567', '123456', '', '', 0),
(312, 'Esther', 'Akinboyewa', 'PSU', 'estherakinboyewa@gmail.com', '123456', 'PSU608c44fa59cd2', '', '', 0),
(313, 'David', 'mike', 'PSU', 'davidmiike@gmail.com', '123456', 'PSU608d5a185f493', '', '', 0),
(314, 'Tobi', 'Seun', 'PSU', 'tobiseun@gmail.com', '1234567', 'PSU609261ab4d93a', '', '', 0),
(315, 'Esther', 'Busari', 'PSU', 'estherbusari@gmail.com', '1234567', 'PSU60991ed70e8ea', '', '', 0),
(316, 'faith', 'email', 'PSU', 'faithemail@gmail.com', '12345678', 'PSU60992aef371b6', '', '', 0),
(317, 'thomas', 'james', 'PSU', 'thomasjames@gmail.com', '12345678', 'PSU6099389f8af00', '', '', 0),
(318, 'George', 'Iheduwa', 'psu', 'georgeiheduwa@gmail.com', '12345678', 'PSU60b8ef3923191', '', '', 0),
(319, 'femi', 'jola', 'PSU', 'femijola@gmail.com', '12345678', 'PSU60bb745679a76', '', '', 0),
(320, 'moyo', 'dada', 'PSU', 'moyodada@gmail.com', '1234567', 'PSU60d17fcd35c7e', '', '', 0),
(321, 'moyosoluwa', 'ojo', 'PSU', 'moyo1@gmail.com', 'moyo12', 'PSU60d2eee768db1', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `elective_surgery_records_tb`
--

CREATE TABLE `elective_surgery_records_tb` (
  `id` int(11) NOT NULL,
  `date_of_presentation` date NOT NULL,
  `firstname` varchar(225) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `hosp_number` varchar(225) NOT NULL,
  `age` int(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `hpc` varchar(225) NOT NULL,
  `phy_exam` varchar(225) NOT NULL,
  `inv` varchar(225) NOT NULL,
  `diagnosis` varchar(225) NOT NULL,
  `diagnosis_two` varchar(225) NOT NULL,
  `pre_op_mgt_summary` varchar(225) NOT NULL,
  `surgery_performed` varchar(225) NOT NULL,
  `date_of_surgery` date NOT NULL,
  `reason_for_delay` varchar(225) NOT NULL,
  `intra_op` varchar(225) NOT NULL,
  `post_op_summary1` varchar(225) NOT NULL,
  `post_op_summary2` varchar(225) NOT NULL,
  `post_op_summary3` varchar(225) NOT NULL,
  `complication` varchar(225) NOT NULL,
  `outcomes` varchar(225) NOT NULL,
  `date_of_discharge` date NOT NULL,
  `surgeon` varchar(225) NOT NULL,
  `date_of_surgery2` date NOT NULL,
  `date_of_discharge2` date NOT NULL,
  `length_hospital_stay` int(225) NOT NULL,
  `cost_of_surgery` varchar(225) NOT NULL,
  `total_cost_of_care` varchar(225) NOT NULL,
  `education` varchar(225) NOT NULL,
  `father_occupation` varchar(225) NOT NULL,
  `mother_occupation` varchar(225) NOT NULL,
  `father_monthly_income` varchar(225) NOT NULL,
  `mother_monthly_income` varchar(225) NOT NULL,
  `monthly_expenditure` varchar(225) NOT NULL,
  `monthly_income_left` varchar(225) NOT NULL,
  `source_current_health_expenditure` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elective_surgery_records_tb`
--

INSERT INTO `elective_surgery_records_tb` (`id`, `date_of_presentation`, `firstname`, `lastname`, `hosp_number`, `age`, `gender`, `hpc`, `phy_exam`, `inv`, `diagnosis`, `diagnosis_two`, `pre_op_mgt_summary`, `surgery_performed`, `date_of_surgery`, `reason_for_delay`, `intra_op`, `post_op_summary1`, `post_op_summary2`, `post_op_summary3`, `complication`, `outcomes`, `date_of_discharge`, `surgeon`, `date_of_surgery2`, `date_of_discharge2`, `length_hospital_stay`, `cost_of_surgery`, `total_cost_of_care`, `education`, `father_occupation`, `mother_occupation`, `father_monthly_income`, `mother_monthly_income`, `monthly_expenditure`, `monthly_income_left`, `source_current_health_expenditure`) VALUES
(1, '2021-06-01', 'David', 'BUKKY', '12345', 25, '1', '2', '3', '5', 'ileal', '7', 'preop_var', '9', '2021-06-01', '10', '11', '    12  ', '    13  ', '    14  ', '    15  ', '    16  ', '2021-06-01', '2021-06-01', '2021-06-01', '2021-06-01', 2, '3', '', '4', '5', '6', '7', '8', '9', '10', '11'),
(2, '0000-00-00', 'David', 'emmauel', '123456', 0, '', '', '', '', 'david', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(3, '0000-00-00', 'David', 'emmauel', '1234567', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(4, '0000-00-00', '', '', '', 23, 'male', 'cough', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(5, '0000-00-00', '', '', '', 23, 'male', 'cough', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(6, '0000-00-00', '', '', '', 23, 'male', 'cough', 'BUKKY', 'David', 'BUKKY', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(7, '0000-00-00', '', '', '', 23, 'male', 'cough', 'BUKKY', 'David', 'BUKKY', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(8, '0000-00-00', '', '', '', 0, '', '', '', '', 'BUKKY', '', 'BUKKY', 'David', '2021-05-05', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(9, '0000-00-00', '', '', '', 0, '', '', '', '', 'BUKKY', '', 'BUKKY', 'David', '2021-05-05', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(10, '0000-00-00', '', '', '', 0, '', '', '', '', 'BUKKY', '', 'David', 'David', '2021-05-05', 'David', ' David', '', '  David', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(11, '0000-00-00', '', '', '', 0, '', '', '', '', 'BUKKY', '', 'David', 'David', '2021-05-05', 'David', ' David', '', '  David', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(12, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', '  David', ' ', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(13, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', '  David', ' ', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(14, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' David', '  David', '  David', '  David', '2021-05-05', 'David', '2021-05-05', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(15, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' David', '  David', '  David', '  David', '2021-05-05', 'David', '2021-05-05', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(16, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '2021-05-05', 0, '', '', '', '', '', '', '', '', '', ''),
(17, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '2021-05-05', 0, '', '', '', '', '', '', '', '', '', ''),
(18, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 23, '', '', '', '', '', '', '', '', '', ''),
(19, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 23, '', '', '', '', '', '', '', '', '', ''),
(20, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 234, '123456', '', '', '', '', '', '', '', '', ''),
(21, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 234, '123456', '', '', '', '', '', '', '', '', ''),
(22, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '12345', '1234567', '', 'David', 'David', '', '', '', '', ''),
(23, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '12345', '1234567', '', 'David', 'David', '', '', '', '', ''),
(24, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '2345555', '2333334445', '12222233', '1234445555', '1222334'),
(25, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '2345555', '2333334445', '12222233', '1234445555', '1222334'),
(26, '0000-00-00', 'David', 'BUKKY', '12334', 23, '2', 'cough', 'BUKKY', 'David', 'David', '', 'BUKKY', 'David', '2021-05-05', 'David', ' David', '  David', '  David', '  David', '  David', '  David', '2021-05-05', 'David', '2021-05-05', '2021-05-05', 123345, '123344', '12334566', '', 'David', 'David', '1223344', '123454', '1233444', '12345678', 'BUKKY'),
(27, '0000-00-00', 'David', 'BUKKY', '12334', 23, '2', 'cough', 'BUKKY', 'David', 'David', '', 'BUKKY', 'David', '2021-05-05', 'David', ' David', '  David', '  David', '  David', '  David', '  David', '2021-05-05', 'David', '2021-05-05', '2021-05-05', 123345, '123344', '12334566', '', 'David', 'David', '1223344', '123454', '1233444', '12345678', 'BUKKY'),
(28, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', 'David'),
(29, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', 'David'),
(30, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '12334566', '1234556', ''),
(31, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '12334566', '1234556', ''),
(32, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(33, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(34, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(35, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(36, '2021-05-05', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(37, '2021-05-05', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(38, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(39, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(40, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(41, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(42, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(43, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(44, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(45, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(46, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(47, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(48, '2021-05-05', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(49, '2021-05-05', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(50, '0000-00-00', '', '', '', 0, '', '', '', '', 'anorectal-high', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(51, '0000-00-00', '', '', '', 0, '', '', '', '', 'anorectal-high', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(52, '0000-00-00', '', '', '', 0, '', '', '', '', 'constipation', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(53, '0000-00-00', '', '', '', 0, '', '', '', '', 'constipation', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(54, '0000-00-00', '', '', '', 0, 'Male', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(55, '0000-00-00', '', '', '', 0, 'Male', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(56, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', 'post-graduate', '', '', '', '', '', '', ''),
(57, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', 'post-graduate', '', '', '', '', '', '', ''),
(58, '2021-05-09', 'David', 'BUKKY', '1234', 23, 'female', 'David', 'David', 'David', 'omphalocele', 'compliant', 'BUKKY', 'David', '2021-05-09', 'David', ' David', ' David', ' David', ' David', ' David', ' David', '2021-05-09', 'David', '2021-05-09', '2021-05-09', 23, '234566', '235565', 'tertiary', 'David', 'David', '22344555', '2345566', 'David', '2334445', '2345555'),
(59, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', ''),
(60, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ' ', ' ', ' ', ' ', ' ', ' ', '0000-00-00', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `emergency_surgery_records_tb`
--

CREATE TABLE `emergency_surgery_records_tb` (
  `id_emergency` int(10) NOT NULL,
  `date_of_presentation` date NOT NULL,
  `firstname` varchar(225) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `hosp_number` varchar(225) NOT NULL,
  `age` int(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `pc` varchar(225) NOT NULL,
  `hx` varchar(225) NOT NULL,
  `hpc` varchar(225) NOT NULL,
  `phy` varchar(225) NOT NULL,
  `available_ix` varchar(225) NOT NULL,
  `diagnosis` varchar(225) NOT NULL,
  `diagnosis_two` varchar(225) NOT NULL,
  `requested_ix` varchar(225) NOT NULL,
  `plan` varchar(225) NOT NULL,
  `er_care_summary` varchar(225) NOT NULL,
  `surgery_performed` varchar(225) NOT NULL,
  `intraop` varchar(225) NOT NULL,
  `date_time_of_surgery` varchar(225) NOT NULL,
  `reason_for_delay` varchar(225) NOT NULL,
  `admission_summary_1` varchar(225) NOT NULL,
  `admission_summary_2` varchar(225) NOT NULL,
  `admission_summary_3` varchar(225) NOT NULL,
  `complications` varchar(225) NOT NULL,
  `outcome` varchar(225) NOT NULL,
  `date_of_discharge` varchar(225) NOT NULL,
  `length_hospital_stay` varchar(225) NOT NULL,
  `surgeon` varchar(225) NOT NULL,
  `date_of_surgery` varchar(225) NOT NULL,
  `total_cost_of_care` varchar(225) NOT NULL,
  `cost_of_surgery` varchar(225) NOT NULL,
  `education` varchar(225) NOT NULL,
  `fatheroccup` varchar(225) NOT NULL,
  `motheroccup` varchar(225) NOT NULL,
  `father_monthly_income` varchar(225) NOT NULL,
  `mother_monthly_income` varchar(225) NOT NULL,
  `monthly_household_expenditure` varchar(225) NOT NULL,
  `monthly_income_left` varchar(225) NOT NULL,
  `source_of_fund` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emergency_surgery_records_tb`
--

INSERT INTO `emergency_surgery_records_tb` (`id_emergency`, `date_of_presentation`, `firstname`, `lastname`, `hosp_number`, `age`, `gender`, `pc`, `hx`, `hpc`, `phy`, `available_ix`, `diagnosis`, `diagnosis_two`, `requested_ix`, `plan`, `er_care_summary`, `surgery_performed`, `intraop`, `date_time_of_surgery`, `reason_for_delay`, `admission_summary_1`, `admission_summary_2`, `admission_summary_3`, `complications`, `outcome`, `date_of_discharge`, `length_hospital_stay`, `surgeon`, `date_of_surgery`, `total_cost_of_care`, `cost_of_surgery`, `education`, `fatheroccup`, `motheroccup`, `father_monthly_income`, `mother_monthly_income`, `monthly_household_expenditure`, `monthly_income_left`, `source_of_fund`) VALUES
(1, '2021-05-06', 'David', '', '', 0, '', '', '0', '', '', '', 'ileal 02', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '2021-05-06', 'David', 'Akinboyewa', '1234567', 32, '', '', '0', '', '', '', 'ileal ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '0000-00-00', '', '', '', 0, 'Male', 'sdss', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '0000-00-00', '', '', '', 0, '', 'sdss', 'David', 'David', 'David', 'David', 'gastroschisis', 'compliant', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '0000-00-00', 'David', '', '12789', 0, '', '', 'David', 'cough', 'BUKKY', 'David', 'pyloric', 'compliant', '', 'David', 'er_care_summary_var', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 'er_care_summary_var', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 'David', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'David', ' David', '2021-05-06', 'David', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', ' ', '', 'David', '', ' David', ' David', ' David', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', ' ', '', '', '', ' ', ' ', ' David', ' David', '2021-05-06', 'David', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', ' ', '', '', '', ' ', ' ', ' ', ' ', '', '', '', '2021-05-06', '23456678', 'David', 'tertiary', 'David', 'David', '', '', '', '', ''),
(12, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', ' ', '', '', '', ' ', ' ', ' ', ' ', '', '', '', '', '', '', '', 'David', 'David', '124565646', '124113434', 'David', '', ''),
(13, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', 'ileal', '', '', '', '', '', ' ', '', '', '', ' ', ' ', ' ', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '234456', '2345555'),
(14, '2021-05-25', 'David 01', 'Akinboyewa 01', '12345678', 36, 'male 02', 'David 02', 'David 02', 'David 02', 'David 02', 'David 02', 'ileal 02', 'compliant 02', 'David 02', 'David 02', 'David 02', '2021-05-25', ' David 02', '2021-05-25', 'David 01', '      David Textarea value fetch from database and update in Java in HTML        ', '      David Textarea value fetch from database and update in HTML in JAVA        ', '      David Textarea value fetch from database and update in PHP in HTML    Hello', '          David 02        ', '          David & David 02        ', '2021-05-25', '2334567702', 'Mike 02', '2021-05-25', '2334567702', 'David 02', 'secondary 02', 'David 02', 'David 02', '244354602', '234455550102', 'David 02', '235343402', 'David 02'),
(15, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', 'David', '', '', '', ' ', '', '', ' ', ' ', ' ', ' ', ' ', '', '', 'David', '', '', '', '', '', '', '', '', '', '', ''),
(16, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', ' ', '', '', ' ', ' ', ' ', ' ', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `unoperated_consult_records_tb`
--

CREATE TABLE `unoperated_consult_records_tb` (
  `id_unoperated_consult` int(10) NOT NULL,
  `date_of_presentation` date NOT NULL,
  `firstname` varchar(225) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `hosp_number` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `phonenumber` varchar(225) NOT NULL,
  `age` varchar(6) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `source_of_referral` varchar(225) NOT NULL,
  `presenting_compliant` varchar(225) NOT NULL,
  `hpc` varchar(225) NOT NULL,
  `examination` varchar(225) NOT NULL,
  `diagnosis` varchar(225) NOT NULL,
  `diagnosis_two` varchar(225) NOT NULL,
  `available_investigations` varchar(225) NOT NULL,
  `requested` varchar(225) NOT NULL,
  `plan` varchar(225) NOT NULL,
  `second_review` varchar(225) NOT NULL,
  `third_review` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unoperated_consult_records_tb`
--

INSERT INTO `unoperated_consult_records_tb` (`id_unoperated_consult`, `date_of_presentation`, `firstname`, `lastname`, `hosp_number`, `address`, `phonenumber`, `age`, `gender`, `source_of_referral`, `presenting_compliant`, `hpc`, `examination`, `diagnosis`, `diagnosis_two`, `available_investigations`, `requested`, `plan`, `second_review`, `third_review`) VALUES
(1, '2021-05-06', 'David', 'Akinboyewa', '12345', 'no 3 olufemi peter ire-akari estate, isolo, Lagos ', '07061242347', '33', 'Male', 'compliant', ' David', 'David', 'David', 'anorectal', 'David', 'David ', 'David', 'David', '  David ', '  David '),
(2, '2021-05-06', 'David', 'David', '2222', 'no 3 olufemi peter ire-akari estate, isolo, Lagos ', '07061242347', '28', 'Male', 'David', 'David & David', 'David', 'David', 'choledochal', 'David', 'David ', 'David', 'David', '  David ', '  David '),
(3, '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', ' '),
(4, '2021-05-06', 'David', 'Akinboyewa', '', 'no 3 olufemi peter ire-akari estate, isolo, Lagos', '07061242347', '23', 'Female', 'David', 'David', 'David', 'David', 'biliary', 'David', 'David', 'David', 'David', ' David', ' David'),
(5, '2021-05-06', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', ' '),
(6, '2021-05-06', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `ward_consult_records_tb`
--

CREATE TABLE `ward_consult_records_tb` (
  `id_ward_consult` int(10) NOT NULL,
  `date_of_presentation` date NOT NULL,
  `firstname` varchar(225) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `hosp_number` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `phonenumber` varchar(225) NOT NULL,
  `age` int(6) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `source_of_referral` varchar(225) NOT NULL,
  `presenting_compliant` varchar(225) NOT NULL,
  `hpc` varchar(225) NOT NULL,
  `examination` varchar(225) NOT NULL,
  `diagnosis` varchar(225) NOT NULL,
  `diagnosis_two` varchar(225) NOT NULL,
  `available_investigations` varchar(225) NOT NULL,
  `requested` varchar(225) NOT NULL,
  `plan` varchar(225) NOT NULL,
  `second_review` varchar(225) NOT NULL,
  `third_review` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ward_consult_records_tb`
--

INSERT INTO `ward_consult_records_tb` (`id_ward_consult`, `date_of_presentation`, `firstname`, `lastname`, `hosp_number`, `address`, `phonenumber`, `age`, `gender`, `source_of_referral`, `presenting_compliant`, `hpc`, `examination`, `diagnosis`, `diagnosis_two`, `available_investigations`, `requested`, `plan`, `second_review`, `third_review`) VALUES
(1, '2021-05-06', 'David', 'Akinboyewa', '12345', 'no 3 olufemi peter ire-akari estate, isolo, Lagos', '07061242347', 24, 'Male', 'David & David', 'David', 'David', 'David', 'ileal', 'David', 'David', 'David', 'David', ' David', ' David'),
(2, '2021-05-06', 'David 2', 'Akinboyewa', '1234567', 'no 3 olufemi peter ire-akari estate, isolo, Lagos', '07061242347', 25, 'Male', 'David', 'David', 'David', 'David', 'pyloric', 'David', 'David', 'David', 'David', ' David', ' David');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_tb`
--
ALTER TABLE `appointment_tb`
  ADD PRIMARY KEY (`snumber`);

--
-- Indexes for table `clinical_records_tb`
--
ALTER TABLE `clinical_records_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ehealth_reg`
--
ALTER TABLE `ehealth_reg`
  ADD PRIMARY KEY (`snumber`);

--
-- Indexes for table `elective_surgery_records_tb`
--
ALTER TABLE `elective_surgery_records_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emergency_surgery_records_tb`
--
ALTER TABLE `emergency_surgery_records_tb`
  ADD PRIMARY KEY (`id_emergency`);

--
-- Indexes for table `unoperated_consult_records_tb`
--
ALTER TABLE `unoperated_consult_records_tb`
  ADD PRIMARY KEY (`id_unoperated_consult`);

--
-- Indexes for table `ward_consult_records_tb`
--
ALTER TABLE `ward_consult_records_tb`
  ADD PRIMARY KEY (`id_ward_consult`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_tb`
--
ALTER TABLE `appointment_tb`
  MODIFY `snumber` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `clinical_records_tb`
--
ALTER TABLE `clinical_records_tb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ehealth_reg`
--
ALTER TABLE `ehealth_reg`
  MODIFY `snumber` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322;

--
-- AUTO_INCREMENT for table `elective_surgery_records_tb`
--
ALTER TABLE `elective_surgery_records_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `emergency_surgery_records_tb`
--
ALTER TABLE `emergency_surgery_records_tb`
  MODIFY `id_emergency` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `unoperated_consult_records_tb`
--
ALTER TABLE `unoperated_consult_records_tb`
  MODIFY `id_unoperated_consult` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ward_consult_records_tb`
--
ALTER TABLE `ward_consult_records_tb`
  MODIFY `id_ward_consult` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
