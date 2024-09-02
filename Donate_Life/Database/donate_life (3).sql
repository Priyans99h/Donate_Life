-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 03:12 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donate_life`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup`
--

CREATE TABLE `bloodgroup` (
  `id` int(255) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bloodgroup`
--

INSERT INTO `bloodgroup` (`id`, `bloodgroup`, `date`) VALUES
(1, 'A+', '2024-02-07'),
(2, 'B+', '2024-02-01'),
(3, 'AB+', '2024-02-01'),
(4, 'O+', '2024-02-01'),
(5, 'O-', '2024-02-01'),
(6, 'AB-', '2024-02-01'),
(7, 'B-', '2024-02-01'),
(8, 'A-', '2024-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` char(255) NOT NULL,
  `age` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `message` mediumtext NOT NULL,
  `date` date NOT NULL,
  `photo` text NOT NULL,
  `status` enum('0','1') DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `firstname`, `lastname`, `email`, `mobile`, `age`, `gender`, `bloodgroup`, `address`, `message`, `date`, `photo`, `status`, `username`, `password`) VALUES
(1, 'Emily ', 'Wilson', 'emily@999.com', '7412586963', 31, 'Male', 'B+', ' 123 Elm St, Riverside', ' Happy to help those in need!', '2024-02-01', 'uploads/3.jpg', '1', 'Emily', '123'),
(2, 'John', ' Doe', 'john@example.com', '7890524145', 30, 'Male', 'A+', '123 Main St, Cityville', 'I\'m happy to donate!', '2024-02-01', 'uploads/1.jpg', '1', 'john', '123'),
(3, 'Jane', 'Smith', 'jane@example.com', '9874587452', 28, 'Female', 'B-', '456 Oak St, Townsville', 'Let\'s save lives!', '2024-01-10', 'uploads/4.jpg', '1', 'jane', '123'),
(4, 'Mary ', 'Johnson', 'mary@e123com', '9958742513', 35, 'Female', 'O+', ' 789 Maple St, Villagetown', ' Ready to make a difference!', '2024-01-24', 'uploads/5.jpg', '1', 'mary', '123'),
(5, 'Amy ', 'Davis', 'amy@ehloe.com', '7548965412', 32, 'Female', 'AB-', '567 Maple Ave, Hamletville', 'Let\'s contribute to the community!', '2024-02-16', 'uploads/6.jpg', '1', 'amy', '123'),
(6, 'Robert ', 'White', 'robert12@gmail.com', '7485471425', 29, 'Male', 'A-', '890 Cedar Dr, Suburbia', 'Let\'s save lives together!', '2024-01-23', 'uploads/2.jpg', '1', 'robert', '123'),
(7, 'darshan', 'tala', 'darshan@gmail.com', '8080808080', 18, 'Others', 'B-', 'AREA', 'kmjnhbgvfcd blood...', '2025-10-16', 'uploads/1655952986798 (2).jpg', '0', 'pri', '123');

-- --------------------------------------------------------

--
-- Table structure for table `dsignin`
--

CREATE TABLE `dsignin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dsignin`
--

INSERT INTO `dsignin` (`id`, `username`, `password`) VALUES
(1, 'emily', '123'),
(2, 'john', '123'),
(3, 'jane', '123'),
(4, 'mary', '123'),
(5, 'amy', '123'),
(6, 'robert', '123'),
(7, 'pri', '123');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`) VALUES
(3, 'PRIYANK G PADSHALA', 'priyank992002@gmail.com', 'Design', 'It\'s very nice Design...\r\n'),
(9, 'bhargav', 'mihir@123', 'rfde32swaq', 'Haloooooo');

-- --------------------------------------------------------

--
-- Table structure for table `requester`
--

CREATE TABLE `requester` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `relation` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `donor_id` bigint(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requester`
--

INSERT INTO `requester` (`id`, `name`, `email`, `mobile`, `address`, `relation`, `message`, `donor_id`) VALUES
(66, 'PRIYANK G PADSHALA', 'priyank@gmail.com', '9985222542', '69-G SWAMI MANDIR AREA', 'Sister', 'We really need blood...', 2),
(67, 'bhargav', 'mihir@123', '7570862630', 'rajkot', 'Brother', 'wesdfgbn', 21),
(68, 'bhargav', 'mihir@123', '7570862630', 'dvdcaxs', 'Brother', 'hgvfcdxs', 22);

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `username`, `password`) VALUES
(1, 'pri', '123'),
(2, 'darshan', '111'),
(3, 'shyam', '123'),
(8, 'yash', '123'),
(9, 'hari', '123');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `username`, `email`, `mobile`, `password`) VALUES
(1, 'prit padaliya', 'prit', 'prit@123.com', '9874521312', '123'),
(2, 'darshan trada', 'darshan', 'darshantrada@gmauk.com', '9885471425', '111'),
(3, 'Shyam Kanzariya', 'shyam', 'shyam001@gmail.com', '4563258522', '123'),
(6, 'yash', 'yash', 'yash@gmail.com', '9081169319', '123'),
(7, 'Harit', 'hari', 'harit99@gmail.com', '8974563312', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dsignin`
--
ALTER TABLE `dsignin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requester`
--
ALTER TABLE `requester`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requester_donor_id_foreign` (`donor_id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `dsignin`
--
ALTER TABLE `dsignin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `requester`
--
ALTER TABLE `requester`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
