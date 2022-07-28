-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2022 at 09:43 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ucu_cite`
--

-- --------------------------------------------------------

--
-- Table structure for table `acad_yr_tbl`
--

CREATE TABLE `acad_yr_tbl` (
  `acad_id` int(11) NOT NULL,
  `acad_yr` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acad_yr_tbl`
--

INSERT INTO `acad_yr_tbl` (`acad_id`, `acad_yr`, `status`) VALUES
(2, '2022-2023', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(11) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNum` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zipCode` varchar(10) NOT NULL,
  `position` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `profile_pic`, `username`, `password`, `fname`, `lname`, `email`, `phoneNum`, `address`, `zipCode`, `position`) VALUES
(1, '1654628907_admin icon.png', 'admin', 'admin', 'Dionnel', 'Caguin', 'caguindionnel@gmail.com', 'xxxxxxxxxx', 'unsettled', 'N/A', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `announcement_tbl`
--

CREATE TABLE `announcement_tbl` (
  `bulletin_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(30) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `time_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement_tbl`
--

INSERT INTO `announcement_tbl` (`bulletin_id`, `photo`, `title`, `content`, `time_date`) VALUES
(5, '1655822127_announcement_pic.jpg', 'OJT Requirements', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id risus nisl. Integer ornare ex quis diam laoreet, vel egestas erat lobortis. Cras et magna et enim molestie iaculis et quis ante. Fusce gravida mi sem, egestas vestibulum magna venenatis vel. Praesent luctus, felis in viverra feugiat, purus dolor auctor elit, eu ultrices leo urna sed ipsum. Proin consectetur placerat lorem et laoreet. Aenean malesuada lorem a placerat bibendum. Fusce scelerisque vulputate maximus. Aliquam pretium commodo urna, at congue felis scelerisque vitae. Curabitur consequat orci non velit tempus, sit amet pharetra mauris egestas.', '2022-06-21 22:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `blocking_subj_tbl`
--

CREATE TABLE `blocking_subj_tbl` (
  `sched_id` int(11) NOT NULL,
  `block_id` int(11) NOT NULL,
  `subj_id` int(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `days` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blocking_subj_tbl`
--

INSERT INTO `blocking_subj_tbl` (`sched_id`, `block_id`, `subj_id`, `start_time`, `end_time`, `days`) VALUES
(32, 18, 112, '14:38:00', '14:38:00', 'M-T-W-TH-F'),
(33, 18, 113, '14:38:00', '14:38:00', 'M'),
(34, 18, 114, '14:38:00', '14:38:00', 'M-W-F'),
(35, 18, 115, '14:38:00', '14:38:00', 'M-W-F'),
(36, 19, 114, '16:10:00', '16:10:00', 'M-T-W-TH-F'),
(37, 19, 115, '16:10:00', '16:10:00', 'M-W-F'),
(38, 20, 130, '16:10:00', '16:10:00', 'M-T-W-TH-F');

-- --------------------------------------------------------

--
-- Table structure for table `blocking_tbl`
--

CREATE TABLE `blocking_tbl` (
  `block_id` int(11) NOT NULL,
  `block_no` varchar(255) NOT NULL,
  `yr_lvl` varchar(30) NOT NULL,
  `sem` varchar(30) NOT NULL,
  `acad_id` int(11) NOT NULL,
  `total_student` varchar(30) NOT NULL,
  `eval_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blocking_tbl`
--

INSERT INTO `blocking_tbl` (`block_id`, `block_no`, `yr_lvl`, `sem`, `acad_id`, `total_student`, `eval_id`) VALUES
(18, '1', '4th', '1st', 2, '20', 1),
(19, '2', '4th', '1st', 2, '35', 1),
(20, '1', '4th', '2nd', 2, '30', 1),
(21, '1', '4th', '1st', 2, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cert_consent_tbl`
--

CREATE TABLE `cert_consent_tbl` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_type` varchar(100) NOT NULL,
  `student_sig` varchar(255) NOT NULL,
  `witness_sig` varchar(255) NOT NULL,
  `submit_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cert_consent_tbl`
--

INSERT INTO `cert_consent_tbl` (`id`, `student_id`, `student_type`, `student_sig`, `witness_sig`, `submit_date`) VALUES
(2, 26, 'Regular Student', '62e045feca40f1.96042015.png', '62e045feca4177.21469625.png', '2022-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `commitment_undertaking_tbl`
--

CREATE TABLE `commitment_undertaking_tbl` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `signature` varchar(255) NOT NULL,
  `submit_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commitment_undertaking_tbl`
--

INSERT INTO `commitment_undertaking_tbl` (`id`, `student_id`, `signature`, `submit_date`) VALUES
(9, 26, '62e024e008c835.59177831.png', '2022-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `eval_cmo_series_tbl`
--

CREATE TABLE `eval_cmo_series_tbl` (
  `eval_id` int(11) NOT NULL,
  `cmoNo` varchar(100) NOT NULL,
  `series` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eval_cmo_series_tbl`
--

INSERT INTO `eval_cmo_series_tbl` (`eval_id`, `cmoNo`, `series`) VALUES
(1, '25', '2015'),
(2, '53', '2013');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_tbl`
--

CREATE TABLE `faculty_tbl` (
  `faculty_id` int(11) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phoneNum` varchar(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `zipCode` varchar(10) NOT NULL,
  `position` varchar(15) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_tbl`
--

INSERT INTO `faculty_tbl` (`faculty_id`, `profile_pic`, `fname`, `lname`, `email`, `phoneNum`, `address`, `zipCode`, `position`, `subjects`, `username`, `password`) VALUES
(9, '1655750130_sir_johanns.png', 'Johanns', 'Rabago, LPT, MIT', 'johannsrabago@usu.edu.ph', 'xxxxxxxxxx', 'Unknown', '1234', 'College Dean', 'Android App Development, Web Development', 'johanns', 'johanns'),
(10, '1655750519_sir_dionnel.png', 'Dionnel', 'Caguin', 'dionnelcaguin@ucu.edu.ph', 'xxxxxxxxxx', 'Unknown', '1234', 'Cite Instructor', 'Imformation Management, Data Analytics', 'dionnel', 'dionnel'),
(11, '1657116243_sir_danilo.png', 'Danilo', 'Dorado', 'doradodanilo@gmail.com', 'xxxxxxxxxx', 'Urdaneta City', '1234', 'Program Head', 'Android App Development, Web Development', 'danilo', 'danilo');

-- --------------------------------------------------------

--
-- Table structure for table `health_df_tbl`
--

CREATE TABLE `health_df_tbl` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `submit_date` date NOT NULL,
  `attend_limited_f2f` varchar(10) NOT NULL,
  `office_transaction` varchar(50) NOT NULL,
  `others` varchar(50) NOT NULL,
  `sore_throat` varchar(3) NOT NULL,
  `shortness_of_breath` varchar(3) NOT NULL,
  `body_pain` varchar(3) NOT NULL,
  `headache` varchar(3) NOT NULL,
  `fever` varchar(3) NOT NULL,
  `loss` varchar(3) NOT NULL,
  `cough_cold` varchar(3) NOT NULL,
  `diarrhea` varchar(3) NOT NULL,
  `question_2` varchar(3) NOT NULL,
  `question_3` varchar(3) NOT NULL,
  `question_4` varchar(3) NOT NULL,
  `question_4_where` varchar(50) NOT NULL,
  `question_5` varchar(3) NOT NULL,
  `question_5_where` varchar(50) NOT NULL,
  `question_6` varchar(3) NOT NULL,
  `signature` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `health_df_tbl`
--

INSERT INTO `health_df_tbl` (`id`, `student_id`, `submit_date`, `attend_limited_f2f`, `office_transaction`, `others`, `sore_throat`, `shortness_of_breath`, `body_pain`, `headache`, `fever`, `loss`, `cough_cold`, `diarrhea`, `question_2`, `question_3`, `question_4`, `question_4_where`, `question_5`, `question_5_where`, `question_6`, `signature`) VALUES
(7, 26, '2022-07-26', 'checked', 'test transaction', 'test others', 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', 'Yes', 'test where 4', 'No', '', 'Yes', '62dd99592092d8.89951779.png');

-- --------------------------------------------------------

--
-- Table structure for table `news_events_tbl`
--

CREATE TABLE `news_events_tbl` (
  `bulletin_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(30) NOT NULL,
  `post` varchar(10) DEFAULT NULL,
  `content` varchar(1000) NOT NULL,
  `time_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_events_tbl`
--

INSERT INTO `news_events_tbl` (`bulletin_id`, `photo`, `title`, `post`, `content`, `time_date`) VALUES
(43, '1658333686_fun run.jfif', 'Fun Run', 'featured', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget consequat est, fermentum accumsan massa. Etiam sagittis lorem ac urna consequat sodales. Mauris nec dolor quis metus mattis malesuada. Sed interdum ornare mattis. Ut facilisis pretium rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Cras dictum, nibh vel consequat blandit, neque nisi interdum turpis, vel faucibus justo augue varius metus. Phasellus accumsan scelerisque congue. Curabitur in purus velit. Aliquam eget viverra ipsum. Praesent aliquet, enim et faucibus eleifend, arcu lacus imperdiet arcu, non aliquet ipsum orci eu nisl. Quisque in consectetur ipsum.', '2022-07-21 01:14:00'),
(50, '1658904712_event.png', 'Enrollment is Now Ongoing', 'featured', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada id sem et consequat. Phasellus faucibus quam neque, vitae viverra nulla convallis sit amet. Donec tincidunt nulla eget facilisis feugiat. Phasellus in auctor justo, quis blandit lacus. Etiam ornare tellus finibus ligula sodales accumsan. Integer quis nisl bibendum, ullamcorper orci vitae, egestas metus. Suspendisse potenti. Donec sed felis ipsum. Donec sed tortor imperdiet, facilisis ex ac, bibendum dolor. Maecenas sit amet diam ac ante egestas viverra. Morbi at mauris posuere, vestibulum erat eget, condimentum leo.', '2022-07-27 14:51:00');

-- --------------------------------------------------------

--
-- Table structure for table `reserve_block_tbl`
--

CREATE TABLE `reserve_block_tbl` (
  `id` int(11) NOT NULL,
  `block_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_acad_info_tbl`
--

CREATE TABLE `student_acad_info_tbl` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course` varchar(100) NOT NULL,
  `strand` varchar(100) NOT NULL,
  `second_course` varchar(100) NOT NULL,
  `graduated_shs` varchar(100) NOT NULL,
  `learners_ref_num` varchar(100) NOT NULL,
  `graduated_es` varchar(100) NOT NULL,
  `form_138` varchar(100) NOT NULL,
  `graduated_year_es` varchar(100) NOT NULL,
  `eval_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_acad_info_tbl`
--

INSERT INTO `student_acad_info_tbl` (`id`, `student_id`, `course`, `strand`, `second_course`, `graduated_shs`, `learners_ref_num`, `graduated_es`, `form_138`, `graduated_year_es`, `eval_id`) VALUES
(9, 26, 'Bachelor of Science in Information Technology', 'ICT', 'Bachelor of Science in Information Technology', 'Luciano Millan National High School', '', 'Narciso R. Ramos Elementary School', '', '2012', '1');

-- --------------------------------------------------------

--
-- Table structure for table `student_acad_info_transferee_tbl`
--

CREATE TABLE `student_acad_info_transferee_tbl` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `present_course` varchar(100) NOT NULL,
  `transfered_from` varchar(100) NOT NULL,
  `second_course` varchar(100) NOT NULL,
  `graduated_es` varchar(100) NOT NULL,
  `graduated_year_es` varchar(100) NOT NULL,
  `eval_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_acad_info_transferee_tbl`
--

INSERT INTO `student_acad_info_transferee_tbl` (`id`, `student_id`, `present_course`, `transfered_from`, `second_course`, `graduated_es`, `graduated_year_es`, `eval_id`) VALUES
(6, 27, 'Bachelor of Science in Information Technology', 'PSU Asingan', 'Bachelor of Science in Information Technology', 'Narciso R. Ramos Elementary School', '2012', '2');

-- --------------------------------------------------------

--
-- Table structure for table `student_basic_info_tbl`
--

CREATE TABLE `student_basic_info_tbl` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `bdate` date NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `birth_province` varchar(255) NOT NULL,
  `birth_city` varchar(255) NOT NULL,
  `birth_barangay` varchar(255) NOT NULL,
  `birth_house_num` varchar(255) NOT NULL,
  `birth_zip_code` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_num` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_basic_info_tbl`
--

INSERT INTO `student_basic_info_tbl` (`id`, `student_id`, `bdate`, `nationality`, `birth_province`, `birth_city`, `birth_barangay`, `birth_house_num`, `birth_zip_code`, `email`, `contact_num`, `gender`, `religion`) VALUES
(13, 26, '2000-03-26', 'Filipino', 'Pangaisnan', 'Urdaneta City', '', '', '2428', 'russeljeannepinlac@gmail.com', '09705778540', 'Male', 'IGLESIA NI CRISTO'),
(14, 27, '2002-10-31', 'Filipino', 'Pangasinan', 'Urdaneta City', '', '', '2428', 'lhoressel@gmail.com', '09705778540', 'Female', 'ROMAN CATHOLIC');

-- --------------------------------------------------------

--
-- Table structure for table `student_fam_info_tbl`
--

CREATE TABLE `student_fam_info_tbl` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `father_fname` varchar(100) NOT NULL,
  `father_mname` varchar(100) NOT NULL,
  `father_lname` varchar(100) NOT NULL,
  `father_sname` varchar(100) NOT NULL,
  `father_contact` varchar(100) NOT NULL,
  `father_occupation` varchar(100) NOT NULL,
  `mother_fname` varchar(100) NOT NULL,
  `mother_mname` varchar(100) NOT NULL,
  `mother_lname` varchar(100) NOT NULL,
  `mother_contact` varchar(100) NOT NULL,
  `mother_occupation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_fam_info_tbl`
--

INSERT INTO `student_fam_info_tbl` (`id`, `student_id`, `father_fname`, `father_mname`, `father_lname`, `father_sname`, `father_contact`, `father_occupation`, `mother_fname`, `mother_mname`, `mother_lname`, `mother_contact`, `mother_occupation`) VALUES
(14, 26, '', '', '', '', '', '', 'Milagros', 'Marquez', 'Vinoya', '', 'Teacher'),
(15, 27, 'Salvador', '', 'Salayog', '', '', 'Vendor', 'Lorena', '', 'Salayog', '', 'Vendor');

-- --------------------------------------------------------

--
-- Table structure for table `student_grade_tbl`
--

CREATE TABLE `student_grade_tbl` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subj_id` int(11) NOT NULL,
  `grade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_guardian_info_tbl`
--

CREATE TABLE `student_guardian_info_tbl` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `guardian_fname` varchar(100) NOT NULL,
  `guardian_mname` varchar(100) NOT NULL,
  `guardian_lname` varchar(100) NOT NULL,
  `guardian_sname` varchar(100) NOT NULL,
  `guardian_contact` varchar(100) NOT NULL,
  `guardian_occupation` varchar(100) NOT NULL,
  `guardian_relationship` varchar(100) NOT NULL,
  `spouse_fname` varchar(100) NOT NULL,
  `spouse_mname` varchar(100) NOT NULL,
  `spouse_lname` varchar(100) NOT NULL,
  `spouse_sname` varchar(100) NOT NULL,
  `spouse_contact` varchar(100) NOT NULL,
  `spouse_occupation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_guardian_info_tbl`
--

INSERT INTO `student_guardian_info_tbl` (`id`, `student_id`, `guardian_fname`, `guardian_mname`, `guardian_lname`, `guardian_sname`, `guardian_contact`, `guardian_occupation`, `guardian_relationship`, `spouse_fname`, `spouse_mname`, `spouse_lname`, `spouse_sname`, `spouse_contact`, `spouse_occupation`) VALUES
(14, 26, 'Milagros', 'Marquez', 'Vinoya', '', '', 'Teacher', 'Mother', '', '', '', '', '', ''),
(15, 27, 'Lorena', '', 'Salayog', '', '', 'Vendor', 'Mother', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_pri_info_tbl`
--

CREATE TABLE `student_pri_info_tbl` (
  `student_id` int(11) NOT NULL,
  `id_number` varchar(20) NOT NULL,
  `yr_lvl` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `house_num` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `eval_status` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_pri_info_tbl`
--

INSERT INTO `student_pri_info_tbl` (`student_id`, `id_number`, `yr_lvl`, `fname`, `mname`, `lname`, `sname`, `province`, `city`, `barangay`, `house_num`, `zip_code`, `eval_status`, `status`, `password`) VALUES
(26, '20181636', '4th', 'Russel Jeanne', 'Vinoya', 'Pinlac', '', 'Pangasinan', 'Asingan', 'Bantog', '153', '2439', 'Evaluate', 'Regular Graduating', '032600'),
(27, '10312002', '1st', 'Lhoressa Mae', 'Mercado', 'Salayog', '', 'Pangasinan', 'Asingan', 'Zone 1 Macalong', '', '2439', 'Evaluate', 'Transferee', 'lhoressel');

-- --------------------------------------------------------

--
-- Table structure for table `student_requirement_tbl`
--

CREATE TABLE `student_requirement_tbl` (
  `req_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_requirement_tbl`
--

INSERT INTO `student_requirement_tbl` (`req_id`, `student_id`, `file_name`, `file`, `date_time`, `status`) VALUES
(180, 26, 'FORM 137', '1658673451_church.jpg', '2022-07-24 22:37:31', 'Pending'),
(181, 26, 'FORM 138', '1658695312_vcard.png', '2022-07-25 04:41:52', 'Pending'),
(183, 26, 'Updated Evaluation form', '1658940409_ming.jpg', '2022-07-28 00:46:49', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `subject_tbl`
--

CREATE TABLE `subject_tbl` (
  `subj_id` int(11) NOT NULL,
  `eval_id` int(11) NOT NULL,
  `courseCode` varchar(10) NOT NULL,
  `courseDesc` varchar(100) NOT NULL,
  `units` varchar(10) NOT NULL,
  `lec` int(10) NOT NULL,
  `lab` int(10) NOT NULL,
  `pre_requisites` varchar(10) NOT NULL,
  `yr_lvl` varchar(20) NOT NULL,
  `sem` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_tbl`
--

INSERT INTO `subject_tbl` (`subj_id`, `eval_id`, `courseCode`, `courseDesc`, `units`, `lec`, `lab`, `pre_requisites`, `yr_lvl`, `sem`) VALUES
(61, 1, 'GECC 1', 'Understanding the Self', '3', 3, 0, 'None', '1st', '1st'),
(62, 1, 'GECC 3', 'The Contemporary World', '3', 3, 0, 'None', '1st', '1st'),
(63, 1, 'GECC 4', 'Mathematics in the Modern World', '3', 3, 0, 'None', '1st', '1st'),
(64, 1, 'GECC 6', 'Art Appreciation', '3', 3, 0, 'None', '1st', '1st'),
(65, 1, 'GECC 10', 'Filipino sa Iba\'t Ibang Disiplina', '3', 3, 0, 'None', '1st', '1st'),
(66, 1, 'IT01', 'Introduction to Computing ', '3', 2, 3, 'None', '1st', '1st'),
(67, 1, 'IT02', 'Fundamentals of Programming', '3', 2, 3, 'None', '1st', '1st'),
(68, 1, 'NSTP 1', 'Civic Welfare Training Service 1', '3', 3, 0, 'None', '1st', '1st'),
(69, 1, 'PhEd1', 'Fitness and Wellness Activities', '2', 2, 0, 'None', '1st', '1st'),
(70, 1, 'ORATA 1', 'The Spirit of Nobility: The Life, Works and Philosophy of Dr. Pedro T. Orata', '1', 1, 0, 'None', '1st', '1st'),
(71, 1, 'GECC 2', 'Purposive Communication', '3', 3, 0, 'None', '1st', '2nd'),
(72, 1, 'GECC 5', 'Readings in Philippine History', '3', 3, 0, 'None', '1st', '2nd'),
(73, 1, 'IT03', 'Discrete Mathematics', '3', 3, 0, 'GEC 4', '1st', '2nd'),
(74, 1, 'IT04', 'Computer Systems and Organization', '3', 2, 3, 'IT01', '1st', '2nd'),
(75, 1, 'IT05', 'Multimedia Technologies', '3', 2, 3, 'IT01', '1st', '2nd'),
(76, 1, 'IT06', 'Intermediate Programming', '3', 2, 3, 'IT02', '1st', '2nd'),
(77, 1, 'NSTP 2', 'Civic Welfare Training Service 2', '3', 3, 0, 'NSTP 1', '1st', '2nd'),
(78, 1, 'PhEd2', 'Rhythmic/Dance Activities', '2', 2, 0, 'PhEd 1', '1st', '2nd'),
(79, 1, 'GECC 9', 'The Life and Works of Rizal', '3', 3, 0, 'None', '2nd', '1st'),
(80, 1, 'GEC ELEC6', 'Gender and Society', '3', 3, 0, 'None', '2nd', '1st'),
(81, 1, 'IT07', 'Data Structure and Algorithms', '3', 2, 3, 'IT06', '2nd', '1st'),
(82, 1, 'IT08', 'Integrative Programming and Technologies', '3', 2, 3, 'IT06', '2nd', '1st'),
(83, 1, 'IT09', 'Human Computer Interaction', '3', 2, 3, 'IT06', '2nd', '1st'),
(84, 1, 'IT10', '3D Designing', '3', 2, 3, 'IT05', '2nd', '1st'),
(85, 1, 'IT11', 'Networking 1', '3', 2, 3, 'IT04', '2nd', '1st'),
(86, 1, 'PhEd3', 'Sports and Self-Defense Activities', '3', 2, 3, 'PhEd2', '2nd', '1st'),
(87, 1, 'ORATA 2', 'Fostering the Spirit of Nobility ', '1', 1, 0, 'None', '2nd', '1st'),
(88, 1, 'GECC7', 'Ethics', '3', 3, 0, 'None', '2nd', '2nd'),
(89, 1, 'GECC8', 'Science, Technology and Society', '3', 3, 0, 'None', '2nd', '2nd'),
(90, 1, 'GEC ELEC10', 'Occupational Safety and Heath', '3', 3, 0, 'None', '2nd', '2nd'),
(91, 1, 'IT12', 'Networking 2', '3', 2, 3, 'IT11', '2nd', '2nd'),
(92, 1, 'IT13', 'Web Development', '3', 2, 3, 'IT08', '2nd', '2nd'),
(93, 1, 'IT14', 'Mobile Development Application ', '3', 2, 3, 'IT08', '2nd', '2nd'),
(94, 1, 'IT15', 'Information Management 1', '3', 2, 3, 'IT07', '2nd', '2nd'),
(95, 1, 'PhEd4', 'Swimming Activities and Water Survival', '3', 2, 0, 'PhEd3', '2nd', '2nd'),
(96, 1, 'GEC ELEC13', 'Business Communication', '3', 3, 0, 'None', '3rd', '1st'),
(97, 1, 'IT16', 'Information Management 2', '3', 2, 3, 'IT15', '3rd', '1st'),
(98, 1, 'IT17', 'Quantitative Methods', '3', 3, 0, 'IT03', '3rd', '1st'),
(99, 1, 'IT18', 'App. Development and Emerging Tech.', '3', 2, 3, 'IT14', '3rd', '1st'),
(100, 1, 'IT19', 'IT Research Design and Methodologies', '3', 3, 0, 'IT15', '3rd', '1st'),
(101, 1, 'IT20', 'Information Assurance and Security 1', '3', 2, 3, 'IT12, IT15', '3rd', '1st'),
(102, 1, 'IT ELEC01', 'Elective 1 (Advanced Web Development )', '3', 2, 3, 'None', '3rd', '1st'),
(103, 1, 'ORATA 4', 'Nobility in Action', '1', 1, 0, 'None', '3rd', '1st'),
(104, 1, 'IT21', 'Information Assurance and Security 2', '3', 2, 3, 'IT20', '3rd', '2nd'),
(105, 1, 'IT22', 'Technoprenuership', '3', 3, 0, 'IT19', '3rd', '2nd'),
(106, 1, 'IT23', 'Social and Professional Issues', '3', 3, 0, 'IT20', '3rd', '2nd'),
(107, 1, 'IT24', 'Capstone Project 1', '3', 3, 0, 'IT16, IT19', '3rd', '2nd'),
(108, 1, 'IT ELEC02', 'Elective 2 (Advanced Mobile Application Development)', '3', 2, 3, 'None', '3rd', '2nd'),
(109, 1, 'IT ELEC03', 'Elective 3 (Data Analytics)', '3', 2, 3, 'None', '3rd', '2nd'),
(110, 1, 'GEC ELEC11', 'Personality Dev\'t for Workplace Success', '3', 3, 0, 'None', '3rd', 'Middle Term'),
(111, 1, 'IT25', 'Systems Integration and Architecture ', '3', 2, 3, 'IT24', '3rd', 'Middle Term'),
(112, 1, 'IT26', 'Systems Administration and Maintenance', '3', 2, 3, 'IT25', '4th', '1st'),
(113, 1, 'IT27', 'Capstone Project 2', '3', 3, 0, 'IT25', '4th', '1st'),
(114, 1, 'IT ELEC04', 'Elective 4 (Special Topic in IT)', '3', 2, 3, 'None', '4th', '1st'),
(115, 1, 'ORATA 4', 'Sharing the Nobility ', '1', 1, 0, 'None', '4th', '1st'),
(120, 2, 'Eng 101', 'Study Thinking Skills', '3', 3, 0, 'None', '1st', '1st'),
(121, 2, 'IT 101', 'Intro to Information Technology', '3', 3, 0, 'None', '1st', '1st'),
(122, 2, 'IT 102', 'Computer Programming I', '3', 2, 1, 'None', '1st', '1st'),
(130, 1, 'IT28', 'Practicum (486 Hours)', '9', 9, 0, 'IT27', '4th', '2nd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acad_yr_tbl`
--
ALTER TABLE `acad_yr_tbl`
  ADD PRIMARY KEY (`acad_id`);

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement_tbl`
--
ALTER TABLE `announcement_tbl`
  ADD PRIMARY KEY (`bulletin_id`);

--
-- Indexes for table `blocking_subj_tbl`
--
ALTER TABLE `blocking_subj_tbl`
  ADD PRIMARY KEY (`sched_id`),
  ADD KEY `block_id` (`block_id`),
  ADD KEY `subj_id` (`subj_id`);

--
-- Indexes for table `blocking_tbl`
--
ALTER TABLE `blocking_tbl`
  ADD PRIMARY KEY (`block_id`),
  ADD KEY `acad_id` (`acad_id`),
  ADD KEY `eval_id` (`eval_id`);

--
-- Indexes for table `cert_consent_tbl`
--
ALTER TABLE `cert_consent_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commitment_undertaking_tbl`
--
ALTER TABLE `commitment_undertaking_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eval_cmo_series_tbl`
--
ALTER TABLE `eval_cmo_series_tbl`
  ADD PRIMARY KEY (`eval_id`);

--
-- Indexes for table `faculty_tbl`
--
ALTER TABLE `faculty_tbl`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `health_df_tbl`
--
ALTER TABLE `health_df_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_events_tbl`
--
ALTER TABLE `news_events_tbl`
  ADD PRIMARY KEY (`bulletin_id`);

--
-- Indexes for table `reserve_block_tbl`
--
ALTER TABLE `reserve_block_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `block_id` (`block_id`);

--
-- Indexes for table `student_acad_info_tbl`
--
ALTER TABLE `student_acad_info_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `student_acad_info_transferee_tbl`
--
ALTER TABLE `student_acad_info_transferee_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `student_basic_info_tbl`
--
ALTER TABLE `student_basic_info_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `student_fam_info_tbl`
--
ALTER TABLE `student_fam_info_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `student_grade_tbl`
--
ALTER TABLE `student_grade_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `subj_id` (`subj_id`);

--
-- Indexes for table `student_guardian_info_tbl`
--
ALTER TABLE `student_guardian_info_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `student_pri_info_tbl`
--
ALTER TABLE `student_pri_info_tbl`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_requirement_tbl`
--
ALTER TABLE `student_requirement_tbl`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `subject_tbl`
--
ALTER TABLE `subject_tbl`
  ADD PRIMARY KEY (`subj_id`),
  ADD KEY `eval_id` (`eval_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acad_yr_tbl`
--
ALTER TABLE `acad_yr_tbl`
  MODIFY `acad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcement_tbl`
--
ALTER TABLE `announcement_tbl`
  MODIFY `bulletin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blocking_subj_tbl`
--
ALTER TABLE `blocking_subj_tbl`
  MODIFY `sched_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `blocking_tbl`
--
ALTER TABLE `blocking_tbl`
  MODIFY `block_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `cert_consent_tbl`
--
ALTER TABLE `cert_consent_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `commitment_undertaking_tbl`
--
ALTER TABLE `commitment_undertaking_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `eval_cmo_series_tbl`
--
ALTER TABLE `eval_cmo_series_tbl`
  MODIFY `eval_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faculty_tbl`
--
ALTER TABLE `faculty_tbl`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `health_df_tbl`
--
ALTER TABLE `health_df_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `news_events_tbl`
--
ALTER TABLE `news_events_tbl`
  MODIFY `bulletin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `reserve_block_tbl`
--
ALTER TABLE `reserve_block_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `student_acad_info_tbl`
--
ALTER TABLE `student_acad_info_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_acad_info_transferee_tbl`
--
ALTER TABLE `student_acad_info_transferee_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_basic_info_tbl`
--
ALTER TABLE `student_basic_info_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student_fam_info_tbl`
--
ALTER TABLE `student_fam_info_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student_grade_tbl`
--
ALTER TABLE `student_grade_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=964;

--
-- AUTO_INCREMENT for table `student_guardian_info_tbl`
--
ALTER TABLE `student_guardian_info_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student_pri_info_tbl`
--
ALTER TABLE `student_pri_info_tbl`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `student_requirement_tbl`
--
ALTER TABLE `student_requirement_tbl`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `subject_tbl`
--
ALTER TABLE `subject_tbl`
  MODIFY `subj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blocking_subj_tbl`
--
ALTER TABLE `blocking_subj_tbl`
  ADD CONSTRAINT `blocking_subj_tbl_ibfk_1` FOREIGN KEY (`block_id`) REFERENCES `blocking_tbl` (`block_id`),
  ADD CONSTRAINT `blocking_subj_tbl_ibfk_2` FOREIGN KEY (`subj_id`) REFERENCES `subject_tbl` (`subj_id`);

--
-- Constraints for table `blocking_tbl`
--
ALTER TABLE `blocking_tbl`
  ADD CONSTRAINT `blocking_tbl_ibfk_1` FOREIGN KEY (`acad_id`) REFERENCES `acad_yr_tbl` (`acad_id`),
  ADD CONSTRAINT `blocking_tbl_ibfk_2` FOREIGN KEY (`eval_id`) REFERENCES `eval_cmo_series_tbl` (`eval_id`);

--
-- Constraints for table `reserve_block_tbl`
--
ALTER TABLE `reserve_block_tbl`
  ADD CONSTRAINT `reserve_block_tbl_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_pri_info_tbl` (`student_id`),
  ADD CONSTRAINT `reserve_block_tbl_ibfk_2` FOREIGN KEY (`block_id`) REFERENCES `blocking_tbl` (`block_id`);

--
-- Constraints for table `student_acad_info_tbl`
--
ALTER TABLE `student_acad_info_tbl`
  ADD CONSTRAINT `student_acad_info_tbl_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_pri_info_tbl` (`student_id`);

--
-- Constraints for table `student_acad_info_transferee_tbl`
--
ALTER TABLE `student_acad_info_transferee_tbl`
  ADD CONSTRAINT `student_acad_info_transferee_tbl_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_pri_info_tbl` (`student_id`);

--
-- Constraints for table `student_basic_info_tbl`
--
ALTER TABLE `student_basic_info_tbl`
  ADD CONSTRAINT `student_basic_info_tbl_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_pri_info_tbl` (`student_id`);

--
-- Constraints for table `student_fam_info_tbl`
--
ALTER TABLE `student_fam_info_tbl`
  ADD CONSTRAINT `student_fam_info_tbl_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_pri_info_tbl` (`student_id`);

--
-- Constraints for table `student_grade_tbl`
--
ALTER TABLE `student_grade_tbl`
  ADD CONSTRAINT `student_grade_tbl_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_pri_info_tbl` (`student_id`),
  ADD CONSTRAINT `student_grade_tbl_ibfk_2` FOREIGN KEY (`subj_id`) REFERENCES `subject_tbl` (`subj_id`);

--
-- Constraints for table `student_guardian_info_tbl`
--
ALTER TABLE `student_guardian_info_tbl`
  ADD CONSTRAINT `student_guardian_info_tbl_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_pri_info_tbl` (`student_id`);

--
-- Constraints for table `subject_tbl`
--
ALTER TABLE `subject_tbl`
  ADD CONSTRAINT `subject_tbl_ibfk_1` FOREIGN KEY (`eval_id`) REFERENCES `eval_cmo_series_tbl` (`eval_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
