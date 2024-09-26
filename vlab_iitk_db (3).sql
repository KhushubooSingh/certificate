-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2024 at 09:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vlab_iitk_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `sr_no` int(11) NOT NULL,
  `certificate_title` varchar(50) DEFAULT NULL,
  `registration_no` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact_no` varchar(10) NOT NULL,
  `course_duration_from` varchar(10) NOT NULL,
  `course_duration_to` varchar(10) NOT NULL,
  `college_name` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`sr_no`, `certificate_title`, `registration_no`, `name`, `course`, `email`, `contact_no`, `course_duration_from`, `course_duration_to`, `college_name`) VALUES
(1, 'VLAB Development Internship Program', 'VL24070001', 'Shikha Gupta', 'Basic Chemistry Laboratory-I', 'shikhabhu099@gmail.com', '8354989009', '01-09-2023', '30-10-2023', 'Bundelkhand University, Jhansi'),
(2, 'VLAB Development Internship Program', 'VL24070002', 'Shubham Srivastava', 'Basic Chemistry Laboratory-I', 'shubhamsri708161@gmail.com', '8795962844', '01-09-2023', '30-10-2023', 'Bundelkhand University, Jhansi'),
(3, 'VLAB Development Internship Program', 'VL24070003', 'Akash Latya', 'Basic Chemistry Laboratory-I', 'akashlatya000@gmail.com', '9555916910', '01-09-2023', '30-10-2023', 'Bundelkhand University, Jhansi'),
(4, 'VLAB Development Internship Program', 'VL24070004', 'Sonali Jha', 'Basic Chemistry Laboratory-I', 'sonalijha611@gmail.com', '9580607201', '01-09-2023', '30-10-2023', 'Bundelkhand University, Jhansi'),
(5, 'VLAB Development Internship Program', 'VL24070005', 'Ketan Gautam', 'Basic Chemistry Laboratory-I', 'ketangau@gmail.com', '6386167705', '01-09-2023', '30-10-2023', 'Bundelkhand University, Jhansi'),
(6, 'VLAB Development Internship Program', 'VL24070006', 'Vishakha Verma', 'Basic Chemistry Laboratory-I', 'vvishakha@gmail.com', '9889233660', '01-09-2023', '30-10-2023', 'Bundelkhand University, Jhansi'),
(7, 'VLAB Development Internship Program', 'VL24070007', 'Durgesh Tiwari', 'Basic Chemistry Laboratory-I', 'durgesh83034@gmail.com', '8303439046', '01-09-2023', '30-10-2023', 'Bundelkhand University, Jhansi'),
(8, 'VLAB Development Internship Program', 'VL24070008', 'Anshika Raikwar', 'Basic Chemistry Laboratory-I', 'raikwaranshika25@gmail.com', '8959239966', '01-09-2023', '30-10-2023', 'Bundelkhand University, Jhansi'),
(9, 'VLAB Development Internship Program', 'VL24070009', 'Khushi Sahu', 'Basic Chemistry Laboratory-I', 'khushimailbox2004@gmail.com', '8004190237', '01-09-2023', '30-10-2023', 'Bundelkhand University, Jhansi'),
(10, 'VLAB Development Internship Program', 'VL24070010', 'Priya Singh', 'Characterization of Materials ', 'priyasingh2332000@gmail.com', '9460884381', '01-09-2023', '30-10-2023', 'Bundelkhand University, Jhansi'),
(11, 'VLAB Development Internship Program', 'VL24070011', 'Kamini Singh', 'Characterization of Materials ', 'sengarkamini2002@gmail.com', '9084253498', '01-09-2023', '30-10-2023', 'Bundelkhand University, Jhansi'),
(12, 'VLAB Development Internship Program', 'VL24070012', 'Sahil Soni', 'Characterization of Materials ', 'sahilsssoni431@gmail.com', '8765390190', '01-09-2023', '30-10-2023', 'Bundelkhand University, Jhansi'),
(13, 'VLAB Development Internship Program', 'VL24070013', 'Aman Kumar', 'Characterization of Materials ', 'amancvn@gmail.com', '9565281403', '01-09-2023', '30-10-2023', 'Bundelkhand University, Jhansi'),
(14, 'VLAB Development Internship Program', 'VL24070014', 'Sachin Sharma', 'Characterization of Materials ', 'sharmasachin95880@gmail.com', '9997616933', '01-09-2023', '30-10-2023', 'Bundelkhand University, Jhansi'),
(15, 'VLAB Development Internship Program', 'VL24070015', 'Akash Kumar', 'Characterization of Materials ', 'akasr1603@gmail.com', '6395323426', '01-09-2023', '30-10-2023', 'Bundelkhand University, Jhansi'),
(16, 'VLAB Development Internship Program', 'VL24070016', 'Adarsh Maurya', 'Characterization of Materials ', 'adarshmsd1@gmail.com', '7071161116', '01-09-2023', '30-10-2023', 'Bundelkhand University, Jhansi'),
(17, 'VLAB Development Internship Program', 'VL24070017', 'Praveen Chauhan', 'Characterization of Materials ', 'sudarshanrajpit2002@gmail.com', '6395066298', '01-09-2023', '30-10-2023', 'Bundelkhand University, Jhansi'),
(18, 'VLAB Development Internship Program', 'VL24070018', 'Sushant Kumar', 'Characterization of Materials ', 'sushantsrivastava9919@gmail.com', '9919085351', '01-09-2023', '30-10-2023', 'Bundelkhand University, Jhansi'),
(19, 'VLAB Development Internship Program', 'VL24070019', 'Gaurav Singh', 'Characterization of Materials ', 'gauravisingh1892000@gmail.com', '9721659714', '01-09-2023', '30-10-2023', 'Bundelkhand University, Jhansi'),
(20, 'VLAB Development Internship Program', 'VL24070020', 'Ayushi Gupta', 'Characterization of Materials ', 'aayushibgupta@gmail.com', '8299814104', '01-09-2023', '30-10-2023', 'Bundelkhand University, Jhansi'),
(21, 'VLAB Development Internship Program', 'VL24070021', 'Ankita Yadav', 'Characterization of Materials ', 'ankitayadav80048@gmail.com', '9198052127', '01-09-2023', '30-10-2023', 'Bundelkhand University, Jhansi'),
(22, 'VLAB Development Internship Program', 'VL24070022', 'Vishal Pathak', 'Characterization of Materials ', 'vishalpathak693@gmail.com', '9336246318', '01-09-2023', '30-10-2023', 'Bundelkhand University, Jhansi'),
(23, 'VLAB Development Internship Program', 'VL24070023', 'Rishabh Soni', 'Characterization of Materials ', 'sonirishabh19269@gmail.com', '7905190813', '01-09-2023', '30-10-2023', 'Bundelkhand University, Jhansi'),
(24, 'VLAB Development Internship Program', 'VL24070024', 'Mohd. Ehtisham Ansari', 'Characterization of Materials ', 'mohammadehtisham034@gmail.com', '9125501825', '01-09-2023', '30-10-2023', 'Bundelkhand University, Jhansi'),
(25, 'VLAB Development Internship Program', 'VL24070025', 'Gaurav Chaudhary', 'Fluid Mechanics Lab', 'gaurav2013c@gmail.com', '9140124801', '01-04-2024', '30-06-2024', 'Rajkiya Engineering College, Banda'),
(26, 'VLAB Development Internship Program', 'VL24070026', 'Himanshu Sahu', 'Fluid Mechanics Lab', '2107340130026@recbanda.ac.in', '7524007581', '01-04-2024', '31-05-2024', 'Rajkiya Engineering College, Banda'),
(27, 'VLAB Development Internship Program', 'VL24070027', 'Lakshman Das', 'Fluid Mechanics Lab', '2107340400013@recbanda.ac.in', '', '01-04-2024', '30-06-2024', 'Rajkiya Engineering College, Banda'),
(28, 'VLAB Development Internship Program', 'VL24070028', 'Shalini', 'Fluid Mechanics Lab', 'shalinitiwari1837@gmail.com', '6386664834', '01-04-2024', '31-05-2024', 'Rajkiya Engineering College, Banda'),
(29, 'VLAB Development Internship Program', 'VL24070029', 'Lalita Singh', 'Fluid Mechanics Lab', '2107340400014@recbanda.ac.in', '7897698656', '01-04-2024', '31-05-2024', 'Rajkiya Engineering College, Banda');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `pf_no` varchar(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `pan_no` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `account_no` varchar(100) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `guardian_name` varchar(100) NOT NULL,
  `photo_url` varchar(512) DEFAULT NULL,
  `id_no` varchar(100) NOT NULL,
  `joining_date` varchar(10) DEFAULT NULL,
  `aadhar_no` varchar(12) NOT NULL,
  `other` varchar(100) DEFAULT NULL,
  `branch_name` varchar(100) NOT NULL,
  `ifsc_code` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `guardian_contact` int(10) NOT NULL,
  `alt_email` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `password` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`pf_no`, `name`, `email`, `pan_no`, `designation`, `bank_name`, `account_no`, `mobile_no`, `guardian_name`, `photo_url`, `id_no`, `joining_date`, `aadhar_no`, `other`, `branch_name`, `ifsc_code`, `address`, `guardian_contact`, `alt_email`, `status`, `gender`, `password`) VALUES
('121314', 'Maria', 'maria123@gmail.com', 'SHA787FBJ', 'clerk', 'SBI', '76345725', 2147483647, 'Andrew', '', '76543', '2024-08-16', '4821654522', 'none', 'india', 'SBI12398ER', 'ferfcrefrfef', 2147483647, 'maria234@gmail.com', 'active', 'female', 'abcd'),
('1213145', 'Maria ', 'maria123@gmail.com', 'SHA787FBJ', 'clerk', 'SBI', '76345725', 2147483647, 'Andrew', '', '76543', '2024-08-16', '4821654522', 'none', 'Sweden', 'SBI12398ER', 'ferfcrefrfef', 2147483647, 'maria234@gmail.com', 'active', 'female', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(30) NOT NULL,
  `date` varchar(10) NOT NULL,
  `institute_name` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `faculty_student` varchar(100) NOT NULL,
  `feel_of_simulated_labs` varchar(100) NOT NULL,
  `manual_provided` varchar(100) NOT NULL,
  `results_after_every_experiment` varchar(100) NOT NULL,
  `simulation_meets` varchar(100) DEFAULT NULL,
  `procedure_understandable` varchar(100) NOT NULL,
  `content` varchar(100) NOT NULL,
  `accuracy` varchar(100) NOT NULL,
  `ease_of_performing_experiments` varchar(100) NOT NULL,
  `experiment_was_relevant` varchar(100) NOT NULL,
  `Quiz` varchar(100) NOT NULL,
  `Challenges` varchar(1000) NOT NULL,
  `Observations` varchar(1000) NOT NULL,
  `potential_enhancements` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `date`, `institute_name`, `email`, `faculty_student`, `feel_of_simulated_labs`, `manual_provided`, `results_after_every_experiment`, `simulation_meets`, `procedure_understandable`, `content`, `accuracy`, `ease_of_performing_experiments`, `experiment_was_relevant`, `Quiz`, `Challenges`, `Observations`, `potential_enhancements`) VALUES
('Blanche', '2024-08-23', 'RKGGP', 'khush123@gmail.com', 'Faculty', 'Excellent', 'Excellent', 'Excellent', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'xasxasxda', 'sxdaqsww', 'wsdaswdxsa'),
('Blanche', '2024-08-23', 'RKGGP', 'khush123@gmail.com', 'Faculty', 'Excellent', 'Excellent', 'Excellent', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'xasxasxda', 'sxdaqsww', 'wsdaswdxsa'),
('Maria', '2024-08-23', 'RKGGP', 'khush123@gmail.com', 'Faculty', 'Excellent', 'Excellent', 'Excellent', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'xasxasxda', 'sxdaqsww', 'wsdaswdxsa');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin'),
('manager', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `pf_no` varchar(100) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `task_id` int(11) NOT NULL,
  `task_name` varchar(500) NOT NULL,
  `task_status` varchar(100) NOT NULL,
  `comments` varchar(1000) NOT NULL,
  `user_pf_no` varchar(255) NOT NULL,
  `user_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`pf_no`, `date`, `task_id`, `task_name`, `task_status`, `comments`, `user_pf_no`, `user_timestamp`) VALUES
('007896', '2024-08-29', 1239, 'portal website creation', 'completed', 'gbb', '121314', '2024-08-10 11:48:42'),
('123454', '2024-08-15', 1241, 'portal website creation', 'in_progress', 'cplt', '121314', '2024-08-10 11:51:56'),
('007896', '2024-08-10', 1242, 'portal website creation', 'in_progress', 'cplt', '121314', '2024-08-10 11:39:51'),
('007896', '2024-08-23', 1243, 'portal website creation', 'on_hold', 'gbb', '121314', '2024-08-10 11:52:44'),
('171996', '2024-08-14', 1244, 'task management web page', 'assigned', 'started working on task', '', '2024-08-12 06:38:54'),
('171996', '2024-08-14', 1245, 'task management web page', 'assigned', 'started working on task', '', '2024-08-12 06:39:13'),
('121314', '2024-08-14', 1246, 'abcd', 'on_hold', 'derfgerfg', '', '2024-08-13 05:37:58'),
('587412', '2024-08-07', 1247, 'portal website creation', 'in_progress', 'derfgerfg', '', '2024-08-13 05:53:19'),
('587412', '2024-08-07', 1248, 'portal website creation', 'in_progress', 'derfgerfg', '', '2024-08-13 05:54:37'),
('587412', '2024-08-07', 1249, 'portal website creation', 'in_progress', 'derfgerfg', '', '2024-08-13 05:55:47'),
('587412', '2024-08-07', 1250, 'portal website creation', 'in_progress', 'derfgerfg', '', '2024-08-13 05:57:09'),
('121314', '2024-08-14', 1251, 'abcd', 'on_hold', 'derfgerfg', '', '2024-08-13 05:57:23'),
('007896', '2024-08-03', 1252, 'portal website creation', 'on_hold', 'yujj', '', '2024-08-13 05:57:47'),
('123454', '2024-08-13', 1253, 'portal website creation', 'on_hold', 'putting on hold cause of another task', '121314', '2024-08-13 03:17:31'),
('171996', '2024-08-14', 1254, 'task management web page', 'in_progress', 'please start work on this and let me know if any concern', '121314', '2024-08-13 03:21:29'),
('171996', '2024-08-14', 1255, 'task management web page', 'in_progress', 'please start work on this and let me know if any concern', '121314', '2024-08-13 03:23:53'),
('171996', '2024-08-14', 1256, 'task management', 'in_progress', 'derfgerfg', '121314', '2024-08-13 03:25:23'),
('121314', '2024-08-07', 1257, 'portal website creation', 'assigned', 'started working on task', '', '2024-08-13 09:29:30');

-- --------------------------------------------------------

--
-- Table structure for table `workshop_registration`
--

CREATE TABLE `workshop_registration` (
  `participant_name` varchar(100) NOT NULL,
  `college_name` varchar(500) NOT NULL,
  `participant_email` varchar(100) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `college_email` varchar(100) NOT NULL,
  `event_name` varchar(1000) NOT NULL,
  `event_date` varchar(10) NOT NULL,
  `event_time` time NOT NULL,
  `nodal_center_name` varchar(500) NOT NULL,
  `nodal_coordinator_name` varchar(500) NOT NULL,
  `nodal_center_state` varchar(500) NOT NULL,
  `regional_nodal_center_name` varchar(500) NOT NULL,
  `nodal_center_pin_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `workshop_registration`
--

INSERT INTO `workshop_registration` (`participant_name`, `college_name`, `participant_email`, `contact_no`, `college_email`, `event_name`, `event_date`, `event_time`, `nodal_center_name`, `nodal_coordinator_name`, `nodal_center_state`, `regional_nodal_center_name`, `nodal_center_pin_code`) VALUES
('khushboo singh', 'IIT Kanpur', 'khushboo123@gmail.com', '7531992788', 'khushisingh9616@gmail.com', 'VLab Workshop', '2024-08-23', '10:39:00', 'IIT Kanpur', 'Khushboo Singh', 'Madhya Pradesh', 'Kanpur', '232101'),
('Khushi singh', 'IIT Kanpur', 'khushboo123@gmail.com', '7531992788', 'skhushboo.iik@gmail.com', 'VLab Workshop', '2024-08-24', '11:46:00', 'IIT Kanpur', 'Khushboo Singh', 'Manipur', 'Kanpur', '232101'),
('khushboo singh', 'IIT Kanpur', 'khushboo123@gmail.com', '7531992788', 'skhushboo.iik@gmail.com', 'VLab Workshop', '2024-08-24', '13:48:00', 'IIT Kanpur', 'Khushboo Singh', 'Maharashtra', 'Kanpur', '232101'),
('khushboo singh', 'IIT Kanpur', 'khushboo123@gmail.com', '7531992788', 'skhushboo.iik@gmail.com', 'VLab Workshop', '2024-08-24', '11:50:00', 'IIT Kanpur', 'Khushboo Singh', 'Himachal Pradesh', 'Kanpur', '232101');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`sr_no`),
  ADD UNIQUE KEY `registration_no` (`registration_no`),
  ADD UNIQUE KEY `registration_no_2` (`registration_no`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`pf_no`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`task_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1258;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
