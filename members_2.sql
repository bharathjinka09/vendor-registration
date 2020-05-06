-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 05, 2020 at 02:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vendor`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `vendor_id` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `whatsapp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `gstin` varchar(50) NOT NULL,
  `service` varchar(50) NOT NULL,
  `service_area` varchar(50) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `beneficiary_name` varchar(50) NOT NULL,
  `account_number` varchar(50) NOT NULL,
  `bank_address` varchar(100) NOT NULL,
  `ifsc` varchar(50) NOT NULL,
  `payment_mode` varchar(50) NOT NULL,
  `id_proof` varchar(500) NOT NULL,
  `driving_license` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `vendor_id`, `name`, `mobile`, `whatsapp`, `email`, `address`, `gstin`, `service`, `service_area`, `bank_name`, `beneficiary_name`, `account_number`, `bank_address`, `ifsc`, `payment_mode`, `id_proof`, `driving_license`) VALUES
(1, '', 'bharath', '8096621265', '08096621265', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '', 'bharath', '8096621265', '08096621265', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '', 'bharath', '8096621265', '08096621265', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '', 'Sat', '9874563214', '9856321456', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', '', '', 'SBI', 'Bharath', '223455645', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', '', '', ''),
(6, '', 'Sat', '9874563214', '9856321456', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', '', '', 'SBI', 'Bharath', '223455645', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', '', '', ''),
(7, '', 'Sat', '9874563214', '9856321456', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', '', '', 'SBI', 'Bharath', '223455645', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', '', '', ''),
(8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', '', '', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', '', '', ''),
(10, '', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', '', '', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', '', '', ''),
(11, '', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', '', '', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', '', '', ''),
(12, '', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', '', '', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', '', '', ''),
(13, '', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', '', '', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', '', '', ''),
(14, '', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', 'AC Repair', 'Koramangala', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', '', '', ''),
(15, '', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', 'AC Repair', 'Marathahalli', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', 'Phonepe', '', ''),
(16, '', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', 'AC Repair', 'Marathahalli', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', 'Cash', '3043-json_loads.png', ''),
(17, '', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', 'AC Repair', 'Marathahalli', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', 'Cash', '5963-arrow-down.png', ''),
(18, '', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', 'AC Repair', 'Marathahalli', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', 'Cash', '9369-arrow-down.png', ''),
(19, '', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', 'AC Repair', 'Marathahalli', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', 'Cash', '9230-arrow-down.png', ''),
(20, '', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', 'AC Repair', 'Marathahalli', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', 'Cash', '2393-arrow-down.png', ''),
(21, '', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', 'AC Repair', 'Marathahalli', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', 'Cash', 'arrow-down.png', ''),
(22, '', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', 'AC Repair', 'Marathahalli', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', 'Cash', 'arrow-down.png', ''),
(23, '', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', 'AC Repair', 'Marathahalli', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', 'Cash', 'arrow-down.png', ''),
(24, '', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', 'AC Repair', 'Marathahalli', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', 'Cash', 'arrow-down.png', ''),
(25, '', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', 'AC Repair', 'Marathahalli', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', 'Cash', '', ''),
(26, '', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', 'AC Repair', 'Marathahalli', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', 'Gpay', 'arrow-up.png', ''),
(27, '', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', 'AC Repair', 'Marathahalli', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', 'Gpay', 'arrow-up.png', ''),
(28, '', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', 'AC Repair', 'Marathahalli', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', 'Gpay', 'arrow-up.png', ''),
(29, '', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', 'AC Repair', 'Marathahalli', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', 'Gpay', 'arrow-up.png', ''),
(30, '', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', 'AC Repair', 'Marathahalli', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', 'Cash', 'Screenshot from 2020-04-13 22-21-06.png', 'shirt.jpg'),
(31, '', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', 'AC Repair', 'Marathahalli', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', 'Cash', 'Screenshot from 2020-04-13 22-21-06.png', 'shirt.jpg'),
(32, '', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', 'AC Repair', 'Marathahalli', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', 'Cash', 'deep_shallow_copy.png', 'watch.jpg'),
(33, '', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', 'AC Repair', 'Marathahalli', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', 'Cash', 'deep_shallow_copy.png', 'watch.jpg'),
(34, '', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', 'AC Repair', 'Marathahalli', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', 'Cash', 'deep_shallow_copy.png', 'watch.jpg'),
(35, '', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', 'AC Repair', 'Koramangala', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', 'Paytm', 'cart.png', 'smiley.svg'),
(36, 'KABLR4000.', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', 'AC Repair', 'Marathahalli', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', 'Cash', 'request.png', 'shoes.jpg'),
(37, 'KABLR4000.99999', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', 'AC Repair', 'Marathahalli', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', 'Cash', 'DHCP.jpg', 'request.png'),
(38, '0', 'Sat', '08096621265', '08096621265', 'sat@vad.com', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'IN45660044546546', 'AC Repair', 'Marathahalli', 'SBI', 'Bharath', '34567890431', 'No.6, Mahalingapuram,, Main Road, Nungambakkam,, Chennai - 600034, , 600034', 'SBIN00345', 'Cash', 'DNS.jpg', 'smiley.svg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
