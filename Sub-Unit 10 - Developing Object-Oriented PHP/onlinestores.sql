-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2018 at 12:57 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinestores`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `storeID` varchar(10) DEFAULT NULL,
  `productID` varchar(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`storeID`, `productID`, `name`, `description`, `price`) VALUES
('ANTIQUE', 'ANTIQUE001', 'Set of four Shaker ladderback chairs', 'From the early 1800\'s, this set of four matching ladderback chairs in the traditional Shaker style have been in the same family for eight generations. All four have the original rush seats (one slight', 12000),
('ANTIQUE', 'ANTIQUE002', 'Hepplewhite Secretary', 'All original glass and hardware. Made of mahogany, brass and glass. All decorative inlays and finials intact. Some minor condition issues (bumps and nicks) that add to, rather than detract from, the h', 19500),
('ANTIQUE', 'ANTIQUE003', 'Empire Sideboard', 'Mahogany primary with cypress secondaries. Three drawers above three cupboards. From an ante-bellum Louisiana estate. Excellent condition.', 3450),
('ANTIQUE', 'ANTIQUE004', 'Gothic Bookcase', 'All walnut with blocked corners and glazed sliding doors. This unit has a dentillated pediment and a molded cornice. Wonderful condition, made in New York in the early 1800\'s', 14500),
('ANTIQUE', 'ANTIQUE005', 'Federal Dining Table', 'Mahogany two-pillar dining table. Each urn form column rests on three molded sabre legs with brass paws. Two removable leaves are still in place. Excellent condition, minimal wear.', 4500),
('COFFEE', 'COFFEE001', 'Jamaican Blue Mountain Coffee', 'This extraordinary coffee, famous for its exquisite flavor and strong body, is grown in teh majestic Blue Mountain range in Jamaica. Weight: 1 pound.', 22.95),
('COFFEE', 'COFFEE002', 'Blue Grove Hawaiian Maui Premium Coffee', 'This delightful coffee has an aroma that is captivatingly rich and nutty with a faint hint of citrus. Weight: 1 pound.', 18.89),
('COFFEE', 'COFFEE003', 'Sumatra Supreme Coffee', 'One of the finest coffees in the world, medium roasted to accentuate its robust character. Weight: 5 pounds.', 29.95),
('COFFEE', 'COFFEE004', 'Pure Kona Coffee', 'Grown and processed using traditional Hawaiian methods, then roasted in small batches to maintain peak freshness and flavor. Weight: 10 ounces.', 21.45),
('COFFEE', 'COFFEE005', 'Guatemala Antigua Coffee', 'An outstanding coffee with a rich, spicy, and smokey flavor. Weight: 10 ounces.', 7.5),
('ELECBOUT', 'ELECBT001', '32GB High Speed microSD card', 'With enough speed for high-speed digital cameras and enough storage space for nearly 50 CDs, this card is perfect for your multimedia devices.', 123.99),
('ELECBOUT', 'ELECBT002', '3-in-1 4GB USB 2.0 Flash Drive Pen and Laser Pointer', 'Carry it all in a single device. The bottom is a ball-point pen, the top is a laser pointer, and inside is a 4GB USB flash drive.', 14.99),
('ELECBOUT', 'ELECBT003', 'Bluetooth Bracelet with OLED Display', 'Pair this bracelet to your bluetooth-enabled phone, and ringtones are a thing of the past. When a call is received, the bracelet vibrates and the incoming caller ID displays on the OLED screen.', 49),
('ELECBOUT', 'ELECBT004', 'Fitness Watch with Heart Rate Monitor', 'Not only does this device time your workout, it monitors your heart rate. Using ANT+ technology, the device can pair with your exercise equipment or an optional foot pod to track your progress. All of', 149),
('ELECBOUT', 'ELECBT005', 'Solar Charging Backpack', 'Recharge your phone, mp3 player, or handheld device while on the go with this stylish and roomy backpack. The exterior features a solar cell that charges a built-in rechargeable battery. Connectors ar', 179.95);

-- --------------------------------------------------------

--
-- Table structure for table `storeinfo`
--

CREATE TABLE `storeinfo` (
  `storeID` varchar(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `welcome` text,
  `cssFile` varchar(250) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storeinfo`
--

INSERT INTO `storeinfo` (`storeID`, `name`, `description`, `welcome`, `cssFile`, `email`) VALUES
('ANTIQUE', 'Old Tyme Antiques', 'Furniture from America\'s Colonial and Post-war periods', 'At Old Tyme Antiques, we search for the finest examples of Early American furniture. Our appraisers and researchers have researched each and every one of our items, and all have a certified provenance. Any restoration work has been performed by our expert restorers, and is fully documented. We are constantly searching estate sales for new items. If you have an item, we would be glad to appraise it for you, or even sell it on consignment.', 'OldTymeAntiques.css', 'antique1783@example.net'),
('COFFEE', 'Gourmet Coffee', 'Specialty coffees made from the world\'s finest beans', 'Welcome to  Gourmet Coffee. Here you will find many of the world\'s finest gourmet coffees. Our blends are hand-selected from the most unique and flavorful beans, each custom-roasted to enhance the distinct flavor. Whether you desire a dark, medium or light roast, you will find a special treat on our list.', 'Gourmet.css', 'gcoffee@example.com'),
('ELECBOUT', 'Electronic Boutique', 'Computer accessories and peripheral devices', 'Want the coolest high-tech gadgets around? You\'ve come to the right place. We offer USB drives, media cards, and other electronic devices to enhance your digital life.', 'ElectronicsBoutique.css', 'usb4sale@example.org');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `storeinfo`
--
ALTER TABLE `storeinfo`
  ADD PRIMARY KEY (`storeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
