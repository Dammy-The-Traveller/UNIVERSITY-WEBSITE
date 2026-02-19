-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 17, 2024 at 03:18 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accra_institute_of_technology`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` char(255) NOT NULL,
  `first_phone` varchar(255) NOT NULL,
  `second_phone` varchar(255) NOT NULL,
  `gender` varchar(55) NOT NULL,
  `DOB` date NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `campus_type` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Type_of_program` varchar(255) NOT NULL,
  `Program_of_choice` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `img_name` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COMMENT='this is for storing new student data';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `middle_name`, `last_name`, `email`, `password`, `first_phone`, `second_phone`, `gender`, `DOB`, `whatsapp`, `address`, `country`, `campus_type`, `Type_of_program`, `Program_of_choice`, `user_type`, `img_name`) VALUES
(1, 'Oluwadamilare', 'David', 'Adebesin', 'adebesindamilare39@gmail.com', '$2y$10$H6yFnKu0vPqXYT1un5Zm5udELcGxndM4W3ZvDlKpcgQjPfu.IKg6C', '055024206', '23481156762', 'Male', '2024-10-08', '2349151644913', '2, adewusi street itoki road og Ng', 'Nigeria', '1', 'Undergraduates', 'Bachelor of Science (BSc) in Computer Science', 'user', ''),
(3, 'Damilare', 'David', 'Adebesin', 'adebesindamilare75@gmail.com', '$2y$10$7hKf9ccbVD8BzXI3xzaTFuUHHycgHr/4IczRavyJG4ocK0JGIarny', '0550204206', '07033708218', 'Female', '2007-07-30', '08115336762', '7, salami close oke ayo iju ishaga agbado road', 'Nigeria', 'Campus-Based Programs', 'Undergraduates', 'Bachelor of Science (BSc) in Information Tech (IT) (E-Commerce)', 'user', ''),
(4, 'Damilare', 'David', 'Adebesin', 'adebesindamilare705@gmail.com', '$2y$10$cyeVxljUotQKXfZfaXrau.obT5bADrnznU7KSdSTBEL3g.eD6w1j2', '00536151996', '07033708218', 'Male', '2004-10-26', '08115336762', '7, salami close oke ayo iju ishaga agbado road', 'Nigeria', 'Campus-Based Programs', 'Undergraduates', 'Bachelor of Science (BSc) in Information Tech (IT) (Software Development)', 'user', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
