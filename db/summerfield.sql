-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 08:18 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `summerfield`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `username`, `password`, `user_role`) VALUES
(1, 'summerfield@gmail.com', '$2y$10$BiUaYJxyZYxI7cL2hytgdeElxA9ZtcaKkhW3HRFZQyxPqyKl8Xnhe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admission_information`
--

CREATE TABLE `tbl_admission_information` (
  `admission_information_id` int(1) NOT NULL,
  `admission_information_desc` text NOT NULL,
  `admission_information_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admission_information`
--

INSERT INTO `tbl_admission_information` (`admission_information_id`, `admission_information_desc`, `admission_information_image`) VALUES
(1, '<span xss=removed>Summerfield School is a multi-cultural institution with a curriculum based on the principles of American education. The school was established with the primary purpose to provide a quality education for expatriate children living in Bangladesh. Having said that, the school warmly welcomes a limited number of students from our host country, as non-visa required students. The school makes every effort to accommodate growth in enrollment demands by following flexible and responsive staffing and building policies and practices.</span><br xss=removed><br xss=removed><span xss=removed>Summerfield School admits students based on the the required status of their Bangladesh visa in their foreign passport. Students that require a visa to be in their passport to legally reside in Bangladesh are considered Visa Required. All other students are considered Non-Visa required. (i.e. a student whom may have a foreign passport, but not legally required to have a visa in that passport to reside in Bangladesh - that student is considered non-visa required.) Given the close and important relationship that the school has with the United States Embassy in Bangladesh, children of all U.S. Government employees, in Grades Kindergarten through Twelve, whose fees are paid by the U.S. Government and who meet the school\'s entrance requirements, will be admitted automatically to the school. In Pre-Kindergarten, children of all U.S. Government employees, whose fees would normally be paid by the U.S. Government (in Grades K-12) and who meet the entrance requirements, are given priority for admission.</span><br xss=removed><br xss=removed><span xss=removed>Parents or employing agencies who intend to enroll children in Summerfield School should notify the school as early as possible. Admission is contingent on completing the full application packet (see Procedure). A non-refundable application fee is required at the time of application.</span><br xss=removed><br xss=removed><span xss=removed>Summerfield School has an active Student Support Services program that plays a key role in ensuring that all Summerfield School students have a fair opportunity to achieve their full developmental and academic potential. Summerfield School\'s inclusionary approach means that services are aligned as much as possible with the student\'s regular classroom environment. As such, Summerfield School admits students who can meet grade level expectations in the curriculum given the support available. For more information, please consult the Student Support Services section of this website.</span>', 'admission_information/addmission.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admission_process`
--

CREATE TABLE `tbl_admission_process` (
  `admission_process_id` int(1) NOT NULL,
  `admission_process_desc` text NOT NULL,
  `admission_process_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admission_process`
--

INSERT INTO `tbl_admission_process` (`admission_process_id`, `admission_process_desc`, `admission_process_pdf`) VALUES
(1, '<span xss=removed>Dear Parents/Guardians,</span><br xss=removed><span xss=removed>Our Admission process is outlined below:</span><br xss=removed><span xss=removed>1. Fill Pre-Admission form availableonline, please click on the button below</span><br xss=removed><span xss=removed>2. Submit Pre-Admission form Online.</span><br xss=removed><span xss=removed>3. Parents will be contacted for-</span><br xss=removed><span xss=removed>    i) Step 1: Admission Test of student.</span><br xss=removed><span xss=removed>    ii) Step 2: Interview of both the parent and student.</span><br xss=removed><span xss=removed>4. If approved through the admission process and subject to seat availability then admission form and relevant fees will be discussed during the Parents Interview.</span><br xss=removed><br xss=removed><span xss=removed>In case you have any queries please do not hesitate to contact our Admission Office.</span><br xss=removed><span xss=removed>Regards,</span><br xss=removed><span xss=removed>The Management</span><br xss=removed><span xss=removed>Tiny Tots School/Summerfield.</span>', 'admission_process_pdf/impuserguide.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_announcement`
--

CREATE TABLE `tbl_announcement` (
  `announcement_id` int(5) NOT NULL,
  `announcement_title` text NOT NULL,
  `announcement_short_desc` text NOT NULL,
  `announcement_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_announcement`
--

INSERT INTO `tbl_announcement` (`announcement_id`, `announcement_title`, `announcement_short_desc`, `announcement_image`) VALUES
(6, 'kkkkkkkkkkkkkkkk', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 'announcement/20.jpg'),
(7, 'hhhhhhhhh', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 'announcement/19.jpg'),
(8, 'hhhhhhhhhhhhhhhhh', 'hhhhhhhhhhhhhhhhhhhhhhhh', 'announcement/21.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apply`
--

CREATE TABLE `tbl_apply` (
  `apply_id` int(1) NOT NULL,
  `apply_title` text NOT NULL,
  `apply_desc` text NOT NULL,
  `apply_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_apply`
--

INSERT INTO `tbl_apply` (`apply_id`, `apply_title`, `apply_desc`, `apply_pdf`) VALUES
(1, '', '<span xss=removed>Application forms are available online. Please click on the button below. If you cannot access the form, you can also contact us and we will email you the form.</span><br xss=removed><span xss=removed>Successful candidates who cannot be admitted due to unavailability of seats are kept in the waiting list and are notified as and when vacancies arise.</span>', 'apply_pdf/pub-2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_calender`
--

CREATE TABLE `tbl_calender` (
  `calender_id` int(5) NOT NULL,
  `calender_title` text NOT NULL,
  `calender_pdf` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_calender`
--

INSERT INTO `tbl_calender` (`calender_id`, `calender_title`, `calender_pdf`, `date`) VALUES
(2, 'kkkkkk', 'calender_pdf/impuserguide6.pdf', '2018-07-05'),
(3, 'hhhhhhhhhhhhhh', 'calender_pdf/pub-4.pdf', '2018-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cambridge`
--

CREATE TABLE `tbl_cambridge` (
  `cambridge_id` int(5) NOT NULL,
  `cambridge_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_cambridge`
--

INSERT INTO `tbl_cambridge` (`cambridge_id`, `cambridge_desc`) VALUES
(1, '<h4 style=\"box-sizing: border-box; font-family: Lato, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); margin: 0px; font-size: 18px; padding-bottom: 10px; font-style: italic; background-color: rgb(255, 255, 255);\"><span class=\"fa fa-hand-o-right\" style=\"box-sizing: border-box; display: inline-block; font-style: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: 1; font-family: &quot;Font Awesome 5 Free&quot;; font-size: inherit; text-rendering: auto; -webkit-font-smoothing: antialiased;\"></span>&nbsp;Subjects offered for O Level are:</h4><p style=\"box-sizing: border-box; margin: 0px; font-family: lato; font-size: 15px; color: rgb(85, 85, 85); padding-bottom: 30px; line-height: 26px; float: left; text-align: justify; width: 750px; background-color: rgb(255, 255, 255);\">• Accounting<br style=\"box-sizing: border-box;\">• Additional Mathematics<br style=\"box-sizing: border-box;\">• Art And Design<br style=\"box-sizing: border-box;\">• Bangladesh Studies<br style=\"box-sizing: border-box;\">• Bengali<br style=\"box-sizing: border-box;\">• Biology<br style=\"box-sizing: border-box;\">• Business Studies<br style=\"box-sizing: border-box;\">• Chemistry<br style=\"box-sizing: border-box;\">• Commerce<br style=\"box-sizing: border-box;\">• Computer Science<br style=\"box-sizing: border-box;\">• Economics<br style=\"box-sizing: border-box;\">• English Language<br style=\"box-sizing: border-box;\">• English Literature<br style=\"box-sizing: border-box;\">• French<br style=\"box-sizing: border-box;\">• History<br style=\"box-sizing: border-box;\">• Islamiyat<br style=\"box-sizing: border-box;\">• Mathematics (Syllabus D)<br style=\"box-sizing: border-box;\">• Physics<br style=\"box-sizing: border-box;\"></p><h4 style=\"box-sizing: border-box; font-family: Lato, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); margin: 0px; font-size: 18px; padding-bottom: 10px; font-style: italic; background-color: rgb(255, 255, 255);\"><span class=\"fa fa-hand-o-right\" style=\"box-sizing: border-box; display: inline-block; font-style: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: 1; font-family: &quot;Font Awesome 5 Free&quot;; font-size: inherit; text-rendering: auto; -webkit-font-smoothing: antialiased;\"></span>&nbsp;Subjects offered for Cambridge A Level are:</h4><p style=\"box-sizing: border-box; margin: 0px; font-family: lato; font-size: 15px; color: rgb(85, 85, 85); padding-bottom: 30px; line-height: 26px; float: left; text-align: justify; width: 750px; background-color: rgb(255, 255, 255);\">• Accounting<br style=\"box-sizing: border-box;\">• Art and Design<br style=\"box-sizing: border-box;\">• Biology<br style=\"box-sizing: border-box;\">• Business&nbsp;<br style=\"box-sizing: border-box;\">• Business Studies<br style=\"box-sizing: border-box;\">• Chemistry<br style=\"box-sizing: border-box;\">• Computer Science<br style=\"box-sizing: border-box;\">• Economics<br style=\"box-sizing: border-box;\">• Further Mathematics<br style=\"box-sizing: border-box;\">• Information Technology<br style=\"box-sizing: border-box;\">• Mathematics<br style=\"box-sizing: border-box;\">• Physics</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_campus`
--

CREATE TABLE `tbl_campus` (
  `campus_id` int(3) NOT NULL,
  `campus_name` varchar(100) NOT NULL,
  `campus_url` text NOT NULL,
  `campus_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_campus`
--

INSERT INTO `tbl_campus` (`campus_id`, `campus_name`, `campus_url`, `campus_desc`) VALUES
(8, 'Corporate Office', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14606.174224308592!2d90.37703800000001!3d23.763651!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0aa1a1bc0c7:0x67c582b31927b7ae!2sSummerfild+Corporate+Office!5e0!3m2!1sen!2sbd!4v1427951985200', '<span xss=removed>7/1, A, Axis Delvista Building,</span><br xss=removed><span xss=removed>Aurongzeb Road, Mohammadpur, Dhaka-1207</span><br xss=removed><span xss=removed>Email: </span><a href=\"mailto:info@summerfield-school.com\" xss=removed>info@summerfield-school.com</a><br xss=removed><span xss=removed>Web: </span><a href=\"http://www.summerfield-school.com/\" target=\"_blank\" xss=removed>www.summerfield-school.com</a><br xss=removed><span xss=removed>Phone: </span><a href=\"skype:+8801756965129?call\" xss=removed>01756965129</a>'),
(9, 'Dhanmondi - 1', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14606.174224308592!2d90.37703800000001!3d23.763651!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0aa1a1bc0c7:0x67c582b31927b7ae!2sSummerfild+Corporate+Office!5e0!3m2!1sen!2sbd!4v1427951985200', '<span xss=removed>7/1, A, Axis Delvista Building,</span><br xss=removed><span xss=removed>Aurongzeb Road, Mohammadpur, Dhaka-1207</span><br xss=removed><span xss=removed>Email: </span><a href=\"mailto:info@summerfield-school.com\" xss=removed>info@summerfield-school.com</a><br xss=removed><span xss=removed>Web: </span><a href=\"http://www.summerfield-school.com/\" target=\"_blank\" xss=removed>www.summerfield-school.com</a><br xss=removed><span xss=removed>Phone: </span><a href=\"skype:+8801756965129?call\" xss=removed>01756965129</a>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_collaboration`
--

CREATE TABLE `tbl_collaboration` (
  `collaboration_id` int(5) NOT NULL,
  `collaboration_image` varchar(255) NOT NULL,
  `collaboration_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_collaboration`
--

INSERT INTO `tbl_collaboration` (`collaboration_id`, `collaboration_image`, `collaboration_url`) VALUES
(2, 'collaboration/8.png', ''),
(3, 'collaboration/7.png', 'http://localhost/summerfield-school/'),
(4, 'collaboration/61--1.png', 'http://localhost/summerfield-school/'),
(5, 'collaboration/63--1.png', ''),
(6, 'collaboration/62--1.png', 'http://localhost/summerfield-school/'),
(7, 'collaboration/60--1.png', 'http://localhost/summerfield-school/');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_curriculam`
--

CREATE TABLE `tbl_curriculam` (
  `curriculam_id` int(5) NOT NULL,
  `curriculam_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_curriculam`
--

INSERT INTO `tbl_curriculam` (`curriculam_id`, `curriculam_desc`) VALUES
(1, '<div xss=\"removed\">\r\n\r\n<h4 xss=\"removed\" style=\"font-size: 13.3333px;\">Junior Section</h4><h4 xss=\"removed\" style=\"font-size: 13.3333px;\"><p xss=\"removed\">• Tiny Tots (Junior Section) curriculum was developed based on modern teaching methods almost 45 years ago.<br xss=\"removed\">• With time we have learned more about effective teaching in the early years, in accordance to that our curriculum development team has re-designed and restructured the curriculum and our teaching methods.<br xss=\"removed\">• Junior School curriculum introduces and reinforces early concepts in Language (both English and Bangla), Maths, Science, Social Awareness, Art and Physical Development.</p></h4><h4 xss=\"removed\" style=\"font-size: 13.3333px;\"><span class=\"fa fa-hand-o-right\" xss=\"removed\"></span>&nbsp;Middle Section</h4><h4 xss=\"removed\" style=\"font-size: 13.3333px;\"><p xss=\"removed\">• Summerfield (Middle Section) curriculum is designed to strengthen their foundation and begin their preparation for the public examinations they will take in high school.<br xss=\"removed\">• Learning in these classes is designed to develop positive attitudes. Students learn not only from their texts but also from their surroundings.</p></h4><h4 xss=\"removed\" style=\"font-size: 13.3333px;\"><span class=\"fa fa-hand-o-right\" xss=\"removed\"></span>&nbsp;Senior Section</h4><h4 xss=\"removed\" style=\"font-size: 13.3333px;\"><p xss=\"removed\">• Strict adherence to the specification to the CIE and Edexcel specifications.<br xss=\"removed\">• Tried and tested teaching methodology which is in accordance to these specifications.<br xss=\"removed\">• Time tables designed to include both extracurricular as well as academic activities.</p></h4>\r\n\r\n  \r\n \r\n\r\n</div>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exam_venue`
--

CREATE TABLE `tbl_exam_venue` (
  `exam_venue_id` int(5) NOT NULL,
  `exam_venue_location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_exam_venue`
--

INSERT INTO `tbl_exam_venue` (`exam_venue_id`, `exam_venue_location`) VALUES
(1, 'kkkkkkkkkkkkkkkkkkkkkkk'),
(2, 'lllllllllllmmmmmmmmmmmmmmm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_facilities`
--

CREATE TABLE `tbl_facilities` (
  `facilities_id` int(5) NOT NULL,
  `facilities_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_facilities`
--

INSERT INTO `tbl_facilities` (`facilities_id`, `facilities_desc`) VALUES
(1, '<h4 style=\"box-sizing: border-box; font-family: Lato, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); margin: 0px; font-size: 18px; padding-bottom: 10px; font-style: italic; background-color: rgb(255, 255, 255);\"><span class=\"fa fa-hand-o-right\" style=\"box-sizing: border-box; display: inline-block; font-style: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: 1; font-family: &quot;Font Awesome 5 Free&quot;; font-size: inherit; text-rendering: auto; -webkit-font-smoothing: antialiased;\"></span>&nbsp;Facilities for Senior Students</h4><h4 style=\"box-sizing: border-box; font-family: Lato, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); margin: 0px; font-size: 18px; padding-bottom: 10px; font-style: italic; background-color: rgb(255, 255, 255);\"><p style=\"box-sizing: border-box; margin: 0px; font-family: lato; font-size: 15px; font-weight: 400; color: rgb(85, 85, 85); padding-bottom: 30px; line-height: 26px; float: left; text-align: justify; width: 750px; font-style: normal;\">• Experienced and reputed teachers who are committed to ensuring best results.<br style=\"box-sizing: border-box;\">• Well equipped and safe laboratories for Computer, Physics and Chemistry students.<br style=\"box-sizing: border-box;\">• Library with relevant reference materials and access to online study resources.<br style=\"box-sizing: border-box;\">• Diverse extracurricular opportunities including indoor/outdoor recreational games, sports teams, interschool involvements, Students’ Council and clubs.</p><br></h4>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculty`
--

CREATE TABLE `tbl_faculty` (
  `faculty_id` int(5) NOT NULL,
  `faculty_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_faculty`
--

INSERT INTO `tbl_faculty` (`faculty_id`, `faculty_desc`) VALUES
(1, '<h4 style=\"box-sizing: border-box; font-family: Lato, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); margin: 0px; padding-bottom: 10px; font-style: italic; background-color: rgb(255, 255, 255);\"><span style=\"font-weight: normal;\">\"The faculty at MCES EMPS is an eclectic team of educators who come to the class room with extensive, real-word experience through intensive training, collaboration &amp; research, they are committed to prepare each &amp; every child for life in the new millennium the teachers are all MS-CIT qualified &amp; with the latest in e-learning technology, we make education enjoyable &amp; comprehensive.\"</span></h4>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(5) NOT NULL,
  `gallery_title` varchar(255) NOT NULL,
  `gallery_desc` text NOT NULL,
  `gallery_cover_image` varchar(255) NOT NULL,
  `gallery_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `gallery_title`, `gallery_desc`, `gallery_cover_image`, `gallery_image`) VALUES
(32, 'kkkkkkkkkkkkkk', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkk', '', '36606486_10211633887672366_7495049752103354368_n.jpg,36701819_10216266194189753_3010365641740779520_n.jpg,36728160_2113525385586453_3275440156982640640_n.jpg,36786481_233203497495377_6114564159846744064_n.jpg,37129449_2594063017485862_7505208393435447296_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_glance`
--

CREATE TABLE `tbl_glance` (
  `glance_id` int(5) NOT NULL,
  `glance_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_glance`
--

INSERT INTO `tbl_glance` (`glance_id`, `glance_desc`) VALUES
(1, '<span xss=removed>Tiny Tots/Summerfield established in 1974, offers English medium education from pre-school to class XII. The school is registered with both Cambridge International Examinations (CIE) and Pearson Edexcel.</span>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_history`
--

CREATE TABLE `tbl_history` (
  `history_id` int(5) NOT NULL,
  `history_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_history`
--

INSERT INTO `tbl_history` (`history_id`, `history_desc`) VALUES
(1, '<span style=\"color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Tiny Tots Playgroup was founded in 1974 by Mrs. Faizi Chowdhury and Ms. Margoth Enander. Their mission was to provide preschool education woven with love and care. The combination of Western education with our traditional one resulted in providing children with strong foundation in academics and extra-curricular activities.</span><br style=\"box-sizing: border-box; color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><br style=\"box-sizing: border-box; color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Summerfield was a stepping stone for the children in their journey to success. In 2006 our first O’level candidate earned accolades of achievement with 100% A grades!</span><br style=\"box-sizing: border-box; color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><br style=\"box-sizing: border-box; color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">At present we have registration with multiple boards including Cambridge International Examination (CIE) and Pearson Edexcel. Our students are appearing for IGCSC and IAL at our own Exam Venue!</span>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logo`
--

CREATE TABLE `tbl_logo` (
  `logo_id` int(3) NOT NULL,
  `main_logo` varchar(255) NOT NULL,
  `side_logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_logo`
--

INSERT INTO `tbl_logo` (`logo_id`, `main_logo`, `side_logo`) VALUES
(3, 'logo_folder/logo-2.png', 'logo_folder/logo-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE `tbl_message` (
  `message_id` int(5) NOT NULL,
  `message_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`message_id`, `message_desc`) VALUES
(1, '<span style=\"box-sizing: border-box; font-weight: 700; color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Dear Visitors,</span><br style=\"box-sizing: border-box; color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">It is a great pleasure and honour to be able to write for the website. We welcome you on behalf of our Tiny Tots/Summerfield family to experience some of the aspects of our “magical journey”.</span><br style=\"box-sizing: border-box; color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><br style=\"box-sizing: border-box; color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">As we step into our 45th year, Insha Allah countless memories unfold woven with love, passion and joy. It seems only the other day, on a crispy winter morning we opened the doors to the little Tiny Tots!</span><br style=\"box-sizing: border-box; color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><br style=\"box-sizing: border-box; color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">We strive to uphold the tradition and cultures instilled in us by our founders and also enrich ourselves continuously. We pledge to nurture the children not only for academic excellence but to become well-rounded global citizens able to contribute positively to society.</span><br style=\"box-sizing: border-box; color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><br style=\"box-sizing: border-box; color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">The students from Tiny Tots have gone far and wide and have reached the soaring heights of success. We owe this achievement to the dedication and hard work of the students, parents and teachers.&nbsp;</span><br style=\"box-sizing: border-box; color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><br style=\"box-sizing: border-box; color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">We thank everyone for their trust, support and look forward to a bright and exciting future for all our students!</span><br style=\"box-sizing: border-box; color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><br style=\"box-sizing: border-box; color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; font-weight: 700; color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Best Regards,</span><br style=\"box-sizing: border-box; color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Anjum Husain&nbsp;</span><br style=\"box-sizing: border-box; color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(119, 119, 119); font-family: lato; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Principal</span>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsletter`
--

CREATE TABLE `tbl_newsletter` (
  `newsletter_id` int(5) NOT NULL,
  `newsletter_title` text NOT NULL,
  `newsletter_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_newsletter`
--

INSERT INTO `tbl_newsletter` (`newsletter_id`, `newsletter_title`, `newsletter_pdf`) VALUES
(4, 'Summerfield School Newsletter:2014-2015', 'newsletter_pdf/impuserguide2.pdf'),
(5, 'Summerfield School Newsletter:2014-2016', 'newsletter_pdf/pub-21.pdf'),
(6, 'Summerfield School Newsletter:2014-2018', 'newsletter_pdf/pub-3.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_result`
--

CREATE TABLE `tbl_result` (
  `result_id` int(5) NOT NULL,
  `exam_name` varchar(255) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `result_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_result`
--

INSERT INTO `tbl_result` (`result_id`, `exam_name`, `class_name`, `result_pdf`) VALUES
(1, 'kkkkkk', 'kkkkkkkkkk', 'result_pdf/impuserguide2.pdf'),
(2, 'mmmmmmmmmmmm', 'mmmmmmmmmmmmm', 'result_pdf/pub-2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_brochure`
--

CREATE TABLE `tbl_school_brochure` (
  `school_brochure_id` int(1) NOT NULL,
  `school_brochure_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_school_brochure`
--

INSERT INTO `tbl_school_brochure` (`school_brochure_id`, `school_brochure_pdf`) VALUES
(1, 'school_brochure_pdf/impuserguide.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(5) NOT NULL,
  `slider_title` text NOT NULL,
  `slider_short_desc` text NOT NULL,
  `slider_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_title`, `slider_short_desc`, `slider_image`) VALUES
(3, 'kkkkkkkkkkkk', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 'slider/slider-1.png'),
(4, 'lllllllllllllllllllllllllllllllllllllllll', 'llllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll', 'slider/slider-2.png'),
(5, 'mmmmmmmmmmmmmmmmmmmmmmm', 'mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm', 'slider/slider-3.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social_network`
--

CREATE TABLE `tbl_social_network` (
  `social_network_id` int(1) NOT NULL,
  `fb_page` varchar(255) NOT NULL,
  `wiki_page` varchar(255) NOT NULL,
  `twitter_page` varchar(255) NOT NULL,
  `insta_page` varchar(255) NOT NULL,
  `utube_page` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_social_network`
--

INSERT INTO `tbl_social_network` (`social_network_id`, `fb_page`, `wiki_page`, `twitter_page`, `insta_page`, `utube_page`) VALUES
(1, 'https://www.facebook.com/tinytots.summerfield/', 'https://en.wikipedia.org/wiki/Summerfield_International_School', 'https://twitter.com/Tinytots1974?lang=en', 'https://www.instagram.com/?hl=en', 'https://www.youtube.com/watch?v=p1YSiJD8WKE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_timeline_slider`
--

CREATE TABLE `tbl_timeline_slider` (
  `timeline_slider_id` int(5) NOT NULL,
  `timeline_slider_title` text NOT NULL,
  `timeline_slider_short_desc` text NOT NULL,
  `timeline_slider_image` varchar(255) NOT NULL,
  `timeline_slider_date` date NOT NULL,
  `timeline_slider_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_timeline_slider`
--

INSERT INTO `tbl_timeline_slider` (`timeline_slider_id`, `timeline_slider_title`, `timeline_slider_short_desc`, `timeline_slider_image`, `timeline_slider_date`, `timeline_slider_time`) VALUES
(4, 'kkkkkkkkkkkkkkkkkkkkkkkk', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 'timeline_slider/slider-1.png', '2018-07-19', '16:09:00'),
(5, 'kkkkkkkkkkkkkkkk', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 'timeline_slider/slider-2.png', '2018-07-27', '16:50:00'),
(6, 'eeeeeeeeeeee', 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', 'timeline_slider/slider-3.png', '2018-07-27', '16:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vacancies`
--

CREATE TABLE `tbl_vacancies` (
  `vacancies_id` int(5) NOT NULL,
  `vacancies_title` varchar(255) NOT NULL,
  `vacancies_salary` text NOT NULL,
  `vacancies_experiance` text NOT NULL,
  `vacancies_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_vacancies`
--

INSERT INTO `tbl_vacancies` (`vacancies_id`, `vacancies_title`, `vacancies_salary`, `vacancies_experiance`, `vacancies_date`) VALUES
(1, 'kkkkkkkk', 'hjhg', 'kkkkkkkkkkkk', '2018-07-04'),
(2, 'llllllllll', 'lllllllllllllllllllllllllllllll', 'llllllllllllllllllllll', '2018-07-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_admission_information`
--
ALTER TABLE `tbl_admission_information`
  ADD PRIMARY KEY (`admission_information_id`);

--
-- Indexes for table `tbl_admission_process`
--
ALTER TABLE `tbl_admission_process`
  ADD PRIMARY KEY (`admission_process_id`);

--
-- Indexes for table `tbl_announcement`
--
ALTER TABLE `tbl_announcement`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `tbl_apply`
--
ALTER TABLE `tbl_apply`
  ADD PRIMARY KEY (`apply_id`);

--
-- Indexes for table `tbl_calender`
--
ALTER TABLE `tbl_calender`
  ADD PRIMARY KEY (`calender_id`);

--
-- Indexes for table `tbl_cambridge`
--
ALTER TABLE `tbl_cambridge`
  ADD PRIMARY KEY (`cambridge_id`);

--
-- Indexes for table `tbl_campus`
--
ALTER TABLE `tbl_campus`
  ADD PRIMARY KEY (`campus_id`);

--
-- Indexes for table `tbl_collaboration`
--
ALTER TABLE `tbl_collaboration`
  ADD PRIMARY KEY (`collaboration_id`);

--
-- Indexes for table `tbl_curriculam`
--
ALTER TABLE `tbl_curriculam`
  ADD PRIMARY KEY (`curriculam_id`);

--
-- Indexes for table `tbl_exam_venue`
--
ALTER TABLE `tbl_exam_venue`
  ADD PRIMARY KEY (`exam_venue_id`);

--
-- Indexes for table `tbl_facilities`
--
ALTER TABLE `tbl_facilities`
  ADD PRIMARY KEY (`facilities_id`);

--
-- Indexes for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_glance`
--
ALTER TABLE `tbl_glance`
  ADD PRIMARY KEY (`glance_id`);

--
-- Indexes for table `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  ADD PRIMARY KEY (`logo_id`);

--
-- Indexes for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  ADD PRIMARY KEY (`newsletter_id`);

--
-- Indexes for table `tbl_result`
--
ALTER TABLE `tbl_result`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `tbl_school_brochure`
--
ALTER TABLE `tbl_school_brochure`
  ADD PRIMARY KEY (`school_brochure_id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `tbl_social_network`
--
ALTER TABLE `tbl_social_network`
  ADD PRIMARY KEY (`social_network_id`);

--
-- Indexes for table `tbl_timeline_slider`
--
ALTER TABLE `tbl_timeline_slider`
  ADD PRIMARY KEY (`timeline_slider_id`);

--
-- Indexes for table `tbl_vacancies`
--
ALTER TABLE `tbl_vacancies`
  ADD PRIMARY KEY (`vacancies_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_admission_information`
--
ALTER TABLE `tbl_admission_information`
  MODIFY `admission_information_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_admission_process`
--
ALTER TABLE `tbl_admission_process`
  MODIFY `admission_process_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_announcement`
--
ALTER TABLE `tbl_announcement`
  MODIFY `announcement_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_apply`
--
ALTER TABLE `tbl_apply`
  MODIFY `apply_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_calender`
--
ALTER TABLE `tbl_calender`
  MODIFY `calender_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_cambridge`
--
ALTER TABLE `tbl_cambridge`
  MODIFY `cambridge_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_campus`
--
ALTER TABLE `tbl_campus`
  MODIFY `campus_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_collaboration`
--
ALTER TABLE `tbl_collaboration`
  MODIFY `collaboration_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_curriculam`
--
ALTER TABLE `tbl_curriculam`
  MODIFY `curriculam_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_exam_venue`
--
ALTER TABLE `tbl_exam_venue`
  MODIFY `exam_venue_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_facilities`
--
ALTER TABLE `tbl_facilities`
  MODIFY `facilities_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  MODIFY `faculty_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_glance`
--
ALTER TABLE `tbl_glance`
  MODIFY `glance_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_history`
--
ALTER TABLE `tbl_history`
  MODIFY `history_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  MODIFY `logo_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `message_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  MODIFY `newsletter_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_result`
--
ALTER TABLE `tbl_result`
  MODIFY `result_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_school_brochure`
--
ALTER TABLE `tbl_school_brochure`
  MODIFY `school_brochure_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_social_network`
--
ALTER TABLE `tbl_social_network`
  MODIFY `social_network_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_timeline_slider`
--
ALTER TABLE `tbl_timeline_slider`
  MODIFY `timeline_slider_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_vacancies`
--
ALTER TABLE `tbl_vacancies`
  MODIFY `vacancies_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
