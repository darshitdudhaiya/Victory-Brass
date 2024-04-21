-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2023 at 01:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `victory_brass`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Id` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Id`, `Name`, `Description`) VALUES
(10, 'Brass Item', 'We are the leading and prominent manufacturer of high quality Cut Wire Shots. With our good knowladge in this field we are provide you best product from our side.'),
(11, 'Aluminum Item', 'We are the leading and prominent manufacturer of high quality Cut Wire Shots. With our good knowladge in this field we are provide you best product from our side.'),
(12, 'Steel Item', 'We are the leading and prominent manufacturer of high quality Cut Wire Shots. With our good knowladge in this field we are provide you best product from our side.');

-- --------------------------------------------------------

--
-- Table structure for table `categoriesimages`
--

CREATE TABLE `categoriesimages` (
  `Id` int(11) NOT NULL,
  `ImageName` varchar(500) NOT NULL,
  `CategoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categoriesimages`
--

INSERT INTO `categoriesimages` (`Id`, `ImageName`, `CategoryId`) VALUES
(9, '1692362680-round-brass-inserts-500x500.webp', 10),
(11, '1692362385-stainless-steel-shot-500x500.webp', 11),
(12, '1692362472-aluminium-diamond-mirror-cap-500x500.webp', 12);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `Id` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `Mobile` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Id` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Size` varchar(500) NOT NULL,
  `Material` varchar(500) NOT NULL,
  `Threads` varchar(500) NOT NULL,
  `Plating` varchar(500) NOT NULL,
  `CategoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `Name`, `Description`, `Size`, `Material`, `Threads`, `Plating`, `CategoryId`) VALUES
(9, 'Cut Wire', 'We are the leading and prominent manufacturer of high quality Cut Wire Shots. With our good knowladge in this field we are provide you best product from our side.', '2 mm', 'Steel', 'ISO metric, MM, PG, BSW, BSP, BSB, BSF, BA, NPT, NPTF, UNC, UNF, UNEF etc Ay Threads as per Customer’s Design. ', 'Brass-IS319, Free Cutting, BS 249, CuZn39Pb3, CW614N, CW602N, Cz132, C35330 Any Special Brass Material Composition As per Customer Requirements. ', 12),
(10, 'Round Brass Inserts', 'With sincerity and hard work of our professionals, we have carved a niche for ourselves in this domain by providing a premium quality gamut of 2 inch Brass Inserts.', '2 inch', 'Brass', 'None', 'None', 10),
(11, 'Polished Brass Washer', 'Being a customer oriented organization, we are deeply engaged in offering a wide array of Brass Washer.', 'None', 'Brass', 'ISO metric, MM, PG, BSW, BSP, BSB, BSF, BA, NPT, NPTF, UNC, UNF, UNEF etc Ay Threads as per Customer’s Design. ', ' Brass Natural, Electro Tinned, Nickel, Silver, Zinc, Nickle-Chrome or any Special Finish/Plating as per Customer’s Speciﬁcation. ', 10),
(12, 'Brass Moulding Bush', 'In order to cater the variegated demands of our precious clients, we are offering an excellent quality range of Brass Moulding Bush.', '1 inch', 'Brass', 'ISO metric, MM, PG, BSW, BSP, BSB, BSF, BA, NPT, NPTF, UNC, UNF, UNEF etc Ay Threads as per Customer’s Design. ', 'Brass Natural, Electro Tinned, Nickel, Silver, Zinc, Nickle-Chrome or any Special Finish/Plating as per Customer’s Speciﬁcation. ', 10);

-- --------------------------------------------------------

--
-- Table structure for table `productsimages`
--

CREATE TABLE `productsimages` (
  `Id` int(11) NOT NULL,
  `ImageName` varchar(500) NOT NULL,
  `ProductId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productsimages`
--

INSERT INTO `productsimages` (`Id`, `ImageName`, `ProductId`) VALUES
(9, '1692642707-cut-wire-shots-250x250.webp', 9),
(10, '1692381344-round-brass-inserts-500x500.webp', 10),
(11, '1692442563-polished-brass-washer-500x500.webp', 11),
(12, '1692442656-brass-moulding-bush-500x500.webp', 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `categoriesimages`
--
ALTER TABLE `categoriesimages`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `CategoryId` (`CategoryId`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `CategoryId` (`CategoryId`);

--
-- Indexes for table `productsimages`
--
ALTER TABLE `productsimages`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ProductId` (`ProductId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categoriesimages`
--
ALTER TABLE `categoriesimages`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `productsimages`
--
ALTER TABLE `productsimages`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categoriesimages`
--
ALTER TABLE `categoriesimages`
  ADD CONSTRAINT `categoriesimages_ibfk_1` FOREIGN KEY (`CategoryId`) REFERENCES `categories` (`Id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`CategoryId`) REFERENCES `categories` (`Id`);

--
-- Constraints for table `productsimages`
--
ALTER TABLE `productsimages`
  ADD CONSTRAINT `productsimages_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `products` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
