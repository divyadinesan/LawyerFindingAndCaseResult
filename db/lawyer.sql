-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2023 at 05:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawyer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(56) NOT NULL,
  `admin_name` varchar(59) NOT NULL,
  `admin_email` varchar(45) NOT NULL,
  `admin_password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `lawyer_id` int(56) NOT NULL,
  `lawyer_name` varchar(59) NOT NULL,
  `lawyer_image` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `lawyer_Email` varchar(89) NOT NULL,
  `Age` varchar(45) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Number_of_Case_win` varchar(45) NOT NULL,
  `Number_of_Case_fail` varchar(60) NOT NULL,
  `section_id` int(76) NOT NULL,
  `Total_case` varchar(45) NOT NULL,
  `lawyer_contact_no` varchar(56) NOT NULL,
  `lawyer_experience` varchar(59) NOT NULL,
  `lawyer_fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`lawyer_id`, `lawyer_name`, `lawyer_image`, `Password`, `lawyer_Email`, `Age`, `Gender`, `Number_of_Case_win`, `Number_of_Case_fail`, `section_id`, `Total_case`, `lawyer_contact_no`, `lawyer_experience`, `lawyer_fee`) VALUES
(1, 'catherine', '1682578393.jpg', '123', 'catherine@gmail.com', '56', 'female', '28', '2', 1, '30', '1231231232', '30years', 1300),
(2, 'john', '1682578814.jpg', '1234', 'john@gmail.com', '45', 'male', '21', '1', 2, '23', '4321543217', '12years', 1380),
(3, 'kelvin', '1682578901.jpg', '654321', 'kelvin@gmail.com', '45', 'male', '21', '2', 4, '33', '9090878906', '10year', 1300),
(4, 'kevin', '1682578975.jpg', '54321', 'kevin@gmail.com', '56', 'male', '44', '7', 15, '33', '5432112345', '12years', 1380),
(5, 'jesni', '1682579067.jpg', '6543', 'jesni@gmail.com', '45', 'female', '21', '1', 13, '33', '6767676543', '14years', 1300),
(6, 'sona', '1682579180.jpg', '6543', 'sona@gmail.com', '56', 'female', '21', '7', 4, '33', '5432123456', '11year', 34110),
(7, 'swetha', '1682579273.jpg', '4321', 'swetha@gmail.com', '35', 'female', '21', '5', 2, '23', '56564343432', '12years', 34110),
(10, 'Arun', '1682931220.jpg', '123', 'arun@gmail.com', '65', 'male', '30', '3', 1, '33', '5432165432', '30years', 34110),
(11, 'Gopal', '1682931368.jpg', '5432', 'gopal@gmail.com', '35', 'male', '21', '2', 3, '23', '5432123456', '7year', 1380),
(15, 'Ajay', '1682932040.jpg', '333', 'ajay@gmail.com', '55', 'male', '15', '3', 6, '18', '4443332221', '11year', 1380),
(16, 'Aleena', '1682932393.jpg', '666', 'aleena@gmail.com', '45', 'female', '15', '18', 6, '33', '8889990007', '7year', 1300),
(18, 'Akshara', '1682932718.jpg', '888', 'akshara@gmail.com', '35', 'female', '29', '4', 15, '33', '8765432123', '10year', 1380),
(20, 'Aneeta', '1682933652.jpg', '8765432', 'aneeta@gmail.com', '45', 'female', '15', '3', 13, '18', '9090878906', '7year', 1300),
(21, 'Shifa', '1682934468.jpg', '321', 'shifa@gmail.com', '54', 'female', '30', '3', 1, '33', '4321543217', '23years', 34110),
(22, 'Stifa', '1682934565.jpg', '676', 'stifa@gmail.com', '45', 'female', '44', '2', 2, '46', '5432112345', '14years', 34110),
(23, 'Lancy', '1682934675.jpg', '777', 'lancy@gmail.com', '65', 'female', '44', '2', 3, '46', '5432123456', '12years', 34110),
(24, 'Raju Dinesh', '1682934755.jpg', '432', 'raju@gmail.com', '45', 'male', '44', '7', 0, '49', '1231231232', '7year', 1300),
(25, 'Rose de', '1682934827.jpg', '888', 'rose@gmail.com', '65', 'female', '29', '1', 6, '30', '4443332221', '11year', 34110),
(26, 'Jenind', '1682934927.jpg', '999', 'jenin@gmail.com', '45', 'male', '15', '21', 0, '36', '5432123456', '10year', 1380),
(27, 'Aibel John', '1682935035.jpg', '321', 'aibel@gmail.com', '65', 'male', '30', '1', 0, '30', '5432112345', '11year', 34110);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(56) NOT NULL,
  `user_email` varchar(45) NOT NULL,
  `lawyer_email` varchar(45) NOT NULL,
  `register_id` int(45) NOT NULL,
  `card_name` varchar(50) NOT NULL,
  `card_no` varchar(67) NOT NULL,
  `cvc` varchar(79) NOT NULL,
  `expire_date` varchar(76) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `user_email`, `lawyer_email`, `register_id`, `card_name`, `card_no`, `cvc`, `expire_date`) VALUES
(1, 'divya@gmail.com', 'arun@gmail.com', 1, 'SBI', '1122334455667788', '100', '21/24');

-- --------------------------------------------------------

--
-- Table structure for table `register_case`
--

CREATE TABLE `register_case` (
  `register_id` int(56) NOT NULL,
  `lawyer_email` varchar(59) NOT NULL,
  `section_id` varchar(45) NOT NULL,
  `client_email` varchar(45) NOT NULL,
  `case_description` varchar(45) NOT NULL,
  `case_status` varchar(50) NOT NULL,
  `fee_status` varchar(67) NOT NULL,
  `case_result` varchar(79) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_case`
--

INSERT INTO `register_case` (`register_id`, `lawyer_email`, `section_id`, `client_email`, `case_description`, `case_status`, `fee_status`, `case_result`) VALUES
(1, 'arun@gmail.com', '1', 'divya@gmail.com', 'acciden', 'Approved', 'Payed', 'Win');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(11) NOT NULL,
  `section_name` varchar(100) NOT NULL,
  `section_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section_name`, `section_image`) VALUES
(1, 'Criminal Section', '1682068239.jpg'),
(2, 'Divorce Section', '1682068691.jpg'),
(3, 'envirnomental', '1682070057.jpg'),
(4, 'cyber', '1682070151.jpg'),
(6, 'civil', '1682070240.jpg'),
(13, 'tax', '1682341299.jpg'),
(15, 'family section', '1682398033.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(56) NOT NULL,
  `User_name` varchar(59) NOT NULL,
  `User_age` varchar(45) NOT NULL,
  `User_address` varchar(45) NOT NULL,
  `User_phone` varchar(89) NOT NULL,
  `User_email` varchar(45) NOT NULL,
  `User_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `User_name`, `User_age`, `User_address`, `User_phone`, `User_email`, `User_password`) VALUES
(1, 'Anisha T M', '20', 'Vellur Thrissur', '9988776655', 'anisha@gmail.com', 'anisha@123'),
(2, 'divya dinesh', '25', 'Ollur Thrissur', '9873456789', 'divya@gmail.com', 'divya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`lawyer_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `register_case`
--
ALTER TABLE `register_case`
  ADD PRIMARY KEY (`register_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(56) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lawyer`
--
ALTER TABLE `lawyer`
  MODIFY `lawyer_id` int(56) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(56) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register_case`
--
ALTER TABLE `register_case`
  MODIFY `register_id` int(56) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(56) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
