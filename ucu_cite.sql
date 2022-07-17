-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 09:44 PM
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
(1, '1654628907_admin icon.png', 'admin', 'admin', 'Russel Jeanne', 'Pinlac', 'russeljeannepinlac@gmail.com', '9705778540', 'Bantog, Asingan, Pangasinan', '2439', 'Admin');

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
-- Table structure for table `news_events_tbl`
--

CREATE TABLE `news_events_tbl` (
  `bulletin_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(30) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `time_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_events_tbl`
--

INSERT INTO `news_events_tbl` (`bulletin_id`, `photo`, `title`, `content`, `time_date`) VALUES
(31, '1656345505_fun run.jfif', 'Fun Run', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at augue at ante molestie porttitor. Donec laoreet elit vel erat maximus, vel varius quam vehicula. Vivamus dictum posuere sem, at placerat dolor tristique at. Maecenas accumsan odio justo, vitae lacinia velit iaculis a. Donec vel massa et quam posuere auctor et a dolor. Ut tellus turpis, tincidunt in tincidunt id, consectetur non ligula. Nullam ante urna, porta sit amet pellentesque sed, viverra non elit. Nunc elit orci, porta nec sapien id, feugiat pharetra purus. Nulla ac dolor at urna varius fermentum nec et dolor. Integer non porta tortor. Sed consequat tortor vitae nunc aliquet, non mattis est aliquam. Suspendisse nec gravida lacus. Nunc lectus ligula, scelerisque non nibh in, pretium congue mauris. Morbi non augue sit amet mauris condimentum scelerisque. Mauris scelerisque congue aliquet. Aenean vestibulum massa sit amet massa porta, a pharetra leo molestie.', '2022-06-27 23:58:00');

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

--
-- Dumping data for table `reserve_block_tbl`
--

INSERT INTO `reserve_block_tbl` (`id`, `block_id`, `student_id`, `status`) VALUES
(17, 18, 20, 'Pending');

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
(5, 20, 'Bachelor of Science in Information Technology', 'ICT', 'Bachelor of Science in Information Technology', 'Luciano Millan National High School', 'N/A', 'Narciso R. Ramos Elementary School', 'N/A', '2012', '1');

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
(4, 21, 'Bachelor in Library & Information Science', 'PSU Asingan', 'Bachelor of Science in Information Technology', 'Narciso R. Ramos Elementary School', '2015', '2');

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
(7, 20, '2000-03-26', 'Filipino', 'Pangasinan', 'Urdaneta City', 'N/A', 'N/A', '2428', 'russeljeannepinlac@gmail.com', '09705778540', 'Male', 'IGLESIA NI CRISTO'),
(8, 21, '2002-10-31', 'Filipino', 'Pangasinan', 'Urdaneta City', 'N/A', 'N/A', '2428', 'lhoressel@gmail.com', 'N/A', 'Female', 'ROMAN CATHOLIC');

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
(8, 20, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'Milagros', 'Marquez', 'Vinoya', 'N/A', 'Teacher'),
(9, 21, 'Salvador', 'N/A', 'Salayog', 'N/A', 'N/A', 'Vendor', 'Lorena', 'N/A', 'Salayog', 'N/A', 'Vendor');

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

--
-- Dumping data for table `student_grade_tbl`
--

INSERT INTO `student_grade_tbl` (`id`, `student_id`, `subj_id`, `grade`) VALUES
(849, 20, 61, '85'),
(850, 20, 62, ''),
(851, 20, 63, ''),
(852, 20, 64, ''),
(853, 20, 65, ''),
(854, 20, 66, ''),
(855, 20, 67, ''),
(856, 20, 68, ''),
(857, 20, 69, ''),
(858, 20, 70, ''),
(859, 20, 71, '85'),
(860, 20, 72, ''),
(861, 20, 73, ''),
(862, 20, 74, ''),
(863, 20, 75, ''),
(864, 20, 76, ''),
(865, 20, 77, ''),
(866, 20, 78, ''),
(867, 20, 79, '85'),
(868, 20, 80, ''),
(869, 20, 81, ''),
(870, 20, 82, ''),
(871, 20, 83, ''),
(872, 20, 84, ''),
(873, 20, 85, ''),
(874, 20, 86, ''),
(875, 20, 87, ''),
(876, 20, 88, '85'),
(877, 20, 89, ''),
(878, 20, 90, ''),
(879, 20, 91, ''),
(880, 20, 92, ''),
(881, 20, 93, ''),
(882, 20, 94, ''),
(883, 20, 95, ''),
(884, 20, 96, '85'),
(885, 20, 97, ''),
(886, 20, 98, ''),
(887, 20, 99, ''),
(888, 20, 100, ''),
(889, 20, 101, ''),
(890, 20, 102, ''),
(891, 20, 103, ''),
(892, 20, 104, '85'),
(893, 20, 105, ''),
(894, 20, 106, ''),
(895, 20, 107, ''),
(896, 20, 108, ''),
(897, 20, 109, ''),
(898, 20, 110, '85'),
(899, 20, 111, ''),
(900, 20, 112, '85'),
(901, 20, 113, ''),
(902, 20, 114, ''),
(903, 20, 115, ''),
(904, 20, 130, '90'),
(905, 21, 120, '85'),
(906, 21, 121, ''),
(907, 21, 122, '');

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
(8, 20, 'Milagros', 'Marquez', 'Vinoya', 'N/A', 'N/A', 'Teacher', 'Mother', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A'),
(9, 21, 'Lorena', 'N/A', 'Salayog', 'N/A', 'N/A', 'Vendor', 'Mother', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A');

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
(20, '20181636', '4th', 'Russel Jeanne', 'Vinoya', 'Pinlac', 'N/A', 'Pangasinan', 'Asingan', 'Bantog', 'N/A', '2439', 'Evaluated', 'Regular Graduating', '032600'),
(21, '10312002', '2nd', 'Lhoressa Mae', 'Mercado', 'Salayog', 'N/A', 'Pangasinan', 'Asingan', 'Zone 1 Macalong', 'N/A', '2439', 'Evaluated', 'Transferee', 'lhoressel');

-- --------------------------------------------------------

--
-- Table structure for table `student_requirement_tbl`
--

CREATE TABLE `student_requirement_tbl` (
  `req_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_requirement_tbl`
--

INSERT INTO `student_requirement_tbl` (`req_id`, `student_id`, `file_name`, `date_time`, `status`) VALUES
(178, 20, 'admin icon.png', '2022-07-17 04:31:42', 'Pending');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_acad_info_transferee_tbl`
--
ALTER TABLE `student_acad_info_transferee_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_basic_info_tbl`
--
ALTER TABLE `student_basic_info_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_fam_info_tbl`
--
ALTER TABLE `student_fam_info_tbl`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `bulletin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- AUTO_INCREMENT for table `news_events_tbl`
--
ALTER TABLE `news_events_tbl`
  MODIFY `bulletin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `reserve_block_tbl`
--
ALTER TABLE `reserve_block_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `student_acad_info_tbl`
--
ALTER TABLE `student_acad_info_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_acad_info_transferee_tbl`
--
ALTER TABLE `student_acad_info_transferee_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_basic_info_tbl`
--
ALTER TABLE `student_basic_info_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student_fam_info_tbl`
--
ALTER TABLE `student_fam_info_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_grade_tbl`
--
ALTER TABLE `student_grade_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=908;

--
-- AUTO_INCREMENT for table `student_guardian_info_tbl`
--
ALTER TABLE `student_guardian_info_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_pri_info_tbl`
--
ALTER TABLE `student_pri_info_tbl`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `student_requirement_tbl`
--
ALTER TABLE `student_requirement_tbl`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

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
-- Constraints for table `student_grade_tbl`
--
ALTER TABLE `student_grade_tbl`
  ADD CONSTRAINT `student_grade_tbl_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_pri_info_tbl` (`student_id`),
  ADD CONSTRAINT `student_grade_tbl_ibfk_2` FOREIGN KEY (`subj_id`) REFERENCES `subject_tbl` (`subj_id`);

--
-- Constraints for table `subject_tbl`
--
ALTER TABLE `subject_tbl`
  ADD CONSTRAINT `subject_tbl_ibfk_1` FOREIGN KEY (`eval_id`) REFERENCES `eval_cmo_series_tbl` (`eval_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
