-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 11:20 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property`
--

-- --------------------------------------------------------

--
-- Table structure for table `property_rent`
--

CREATE TABLE `property_rent` (
  `Prop_rent_id` int(11) NOT NULL,
  `Tenant_name` varchar(50) NOT NULL,
  `Contact_number` int(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `House_rent` int(11) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_rent`
--

INSERT INTO `property_rent` (`Prop_rent_id`, `Tenant_name`, `Contact_number`, `Address`, `House_rent`, `Status`) VALUES
(1, 'Muhammad Ali', 578753983, 'B-7, Gulshan-e-Iqbal, Karachi', 30000, 'Available'),
(2, 'Zafar', 54743873, 'B-87, Block 13D, Gulshan-e-Iqbal, Karachi', 40000, 'Unavailable'),
(3, 'Kashif', 14577348, 'C-42, Block N, North Nazimabad, Karachi', 35000, 'Unavailable'),
(4, 'Junaid', 38574854, 'F-29, Shaheen Palace, Block 4, Gulistan-e-Johar, Karachi', 25000, 'Available'),
(5, 'Abdullah', 68787544, 'C-25, Block A, North Nazimabad, Karachi', 30000, 'Unavailable'),
(6, 'Owais', 87584544, 'B-34, Block 15, Gulistan-e-Johar, Karachi', 35000, 'Unavailable'),
(7, 'Mustafa', 55766781, 'A-28, Saadi Town, Karachi', 28000, 'Available'),
(8, 'Sarwar', 45225234, 'B-57, Block 8, PECHS, Karachi', 50000, 'Unavailable');

-- --------------------------------------------------------

--
-- Table structure for table `property_sale`
--

CREATE TABLE `property_sale` (
  `Prop_sale_id` int(11) NOT NULL,
  `Owner_name` varchar(50) NOT NULL,
  `Contact_number` int(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `House_value` int(11) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_sale`
--

INSERT INTO `property_sale` (`Prop_sale_id`, `Owner_name`, `Contact_number`, `Address`, `House_value`, `Status`) VALUES
(1, 'Imran', 864884554, 'R-9, North Karachi, Karachi', 10000000, 'Unavailable'),
(2, 'Bilal', 457534773, 'F-8, Block-7, Gulshan-e-Iqbal, Karachi', 30000000, 'Available'),
(3, 'Ibrahim', 23783748, 'E-9, Rufi Heights, Gulistan-e-Johar, Karachi', 15000000, 'Available'),
(4, 'Murtaza', 74534743, 'A-2, Kaneez Fatima Society, Karachi', 20000000, 'Unavailable'),
(5, 'Khurram', 56788554, 'B-29, Sector Y-3, Gulshan-e-Maymar, Karachi', 20000000, 'Unavailable'),
(6, 'Sohail', 45884348, 'B-45, Block 10, Gulshan-e-Iqbal, Karachi', 25000000, 'Unavailable'),
(7, 'Shahid', 49849642, 'D-6, Block 4, Clifton, Karachi', 35000000, 'Unavailable'),
(8, 'Mesum', 85698665, 'B-21, Block 3, FB Area, Karachi', 25000000, 'Available'),
(9, 'Huzaifa', 75634433, 'B-34, Block 4, FB Area, Karachi', 27000000, 'Unavailable');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Contact_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `Username`, `Email`, `Password`, `Contact_Number`) VALUES
(1, 'Ali', 'ali@yahoo.com', 'password1', 548386743),
(2, 'Jaffer', 'jaffer@gmail.com', 'password2', 54785443),
(3, 'Mariam', 'mariam@gmail.com', 'password3', 38457451);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist_rent`
--

CREATE TABLE `wishlist_rent` (
  `Wish_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Prop_rent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist_rent`
--

INSERT INTO `wishlist_rent` (`Wish_id`, `User_id`, `Prop_rent_id`) VALUES
(1, 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist_sale`
--

CREATE TABLE `wishlist_sale` (
  `Wish_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Prop_sale_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist_sale`
--

INSERT INTO `wishlist_sale` (`Wish_id`, `User_id`, `Prop_sale_id`) VALUES
(1, 2, 3),
(2, 3, 8),
(3, 3, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `property_rent`
--
ALTER TABLE `property_rent`
  ADD PRIMARY KEY (`Prop_rent_id`);

--
-- Indexes for table `property_sale`
--
ALTER TABLE `property_sale`
  ADD PRIMARY KEY (`Prop_sale_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `wishlist_rent`
--
ALTER TABLE `wishlist_rent`
  ADD PRIMARY KEY (`Wish_id`);

--
-- Indexes for table `wishlist_sale`
--
ALTER TABLE `wishlist_sale`
  ADD PRIMARY KEY (`Wish_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `property_rent`
--
ALTER TABLE `property_rent`
  MODIFY `Prop_rent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `property_sale`
--
ALTER TABLE `property_sale`
  MODIFY `Prop_sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlist_rent`
--
ALTER TABLE `wishlist_rent`
  MODIFY `Wish_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlist_sale`
--
ALTER TABLE `wishlist_sale`
  MODIFY `Wish_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
