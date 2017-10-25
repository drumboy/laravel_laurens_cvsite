-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 25, 2017 at 02:19 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_laurens_cvsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `werkervarings`
--

CREATE TABLE `werkervarings` (
  `id` int(10) UNSIGNED NOT NULL,
  `bedrijf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `periode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `technologie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `werkervarings`
--

INSERT INTO `werkervarings` (`id`, `bedrijf`, `periode`, `technologie`, `created_at`, `updated_at`) VALUES
(1, 'HR - Technologies NV', '(06/2011 - 07/2011)', 'MS Visual Studio 2010, MS SQL Server 2008, Javascript, SQL, ', '2017-10-24 13:30:00', '2017-10-24 13:30:00'),
(2, 'Homesoft Solutions bvba', '(01/2012 – 02/2012)', 'Dreamweaver, html, css, jQuery, Javascript, OSX', NULL, NULL),
(3, 'My-Websitebuilder.com', '(03/2012 – 04/2012)', 'Dreamweaver, Photoshop, html, css, jQuery, Javascript, xml, php (Spoon library), MS Office 2010, Windows 7', NULL, NULL),
(4, 'Interim + Loopbaanbegeleiding', '(05/2012 – 07/2013)', '', NULL, NULL),
(5, 'CM Midden-Vlaanderen', '(08/2013 – 08/2014)', 'html, css, jQuery, Javascript, xml, jsf, Java Struts 1.2, sql, Oracle SQL Developer, Eclipse, MS Office 2013, Windows 7', NULL, NULL),
(6, 'Nationale Loterij', '(09/2014 – 12/2015)', 'sql, Oracle SQL Developer, MS Office 2010, Windows 7', NULL, NULL),
(7, 'Tradecom', '(10/2016 – 12/2016)', 'Technologieën: C#, MySQL', NULL, NULL),
(8, 'Authority', '(08/2017 – 09/2017)', 'Google Analytics: tracking visitors, conversies, ...', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `werkervarings`
--
ALTER TABLE `werkervarings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `werkervarings`
--
ALTER TABLE `werkervarings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
