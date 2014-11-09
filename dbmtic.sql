-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2014 at 09:18 
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbmtic`
--

-- --------------------------------------------------------

--
-- Table structure for table `mstchas`
--

CREATE TABLE IF NOT EXISTS `mstchas` (
  `MstChasID` int(11) NOT NULL AUTO_INCREMENT,
  `MstChasNo` varchar(45) DEFAULT NULL,
  `MStChasMaker` varchar(45) DEFAULT NULL,
  `MStChasModel` varchar(45) DEFAULT NULL,
  `MStChasType` varchar(45) DEFAULT NULL,
  `MstEmpID` int(11) NOT NULL,
  PRIMARY KEY (`MstChasID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `mstchas`
--

INSERT INTO `mstchas` (`MstChasID`, `MstChasNo`, `MStChasMaker`, `MStChasModel`, `MStChasType`, `MstEmpID`) VALUES
(1, '1', 'HINO', 'RANGER', 'FG 215 JP', 0),
(2, '2', 'HINO', 'RANGER', 'FG 235 JP', 0),
(3, '3', 'HINO', 'RANGER', 'FL 235 JW', 0),
(4, '4', 'HINO', 'RANGER', 'FL 240 JW', 0),
(5, '5', 'HINO', 'RANGER', 'FL 260 JT', 0),
(6, '6', 'HINO', 'RANGER', 'FL 260 JW', 0),
(7, '7', 'HINO', 'RANGER', 'FM 260 JW', 0),
(8, '8', 'HINO', 'DUTRO', 'FG 235 JL', 0),
(9, '9', 'HINO', 'DUTRO', '130 HD', 0),
(10, '10', 'HINO', 'DUTRO', '130 MDL', 0),
(11, '11', 'HINO', 'DUTRO', '110 LDL', 0),
(12, '12', 'ISUZU', '', 'FVM 34 W', 0),
(13, '13', 'ISUZU', '', 'ELF NKR 71', 0),
(14, '14', 'ISUZU', '', 'FRR 90 Q', 0),
(15, '15', 'ISUZU', '', 'FTR 90 S', 0),
(16, '16', 'ISUZU', '', 'FVR 34 S', 0),
(17, '17', 'NISSAN', '', 'CDA 260 X', 0),
(18, '18', 'NISSAN', '', 'PK 215 R', 0),
(19, '19', 'MITSUBISHI', '', 'FN 617 (6x2)', 0),
(20, '20', 'MITSUBISHI', '', 'FN 517 ML2 (6x2)', 0),
(21, '21', 'MITSUBISHI', '', 'FN 527 ML (6x4)', 0),
(22, '22', 'MITSUBISHI', '', 'SUPER HD', 0),
(23, '23', 'MITSUBISHI', '', 'FE 73', 0),
(24, '24', 'MITSUBISHI', '', 'FE 74 S', 0),
(25, '25', 'MITSUBISHI', '', 'FE 74 HD', 0),
(26, '26', 'MITSUBISHI', '', 'FE 83 BC', 0),
(27, '27', 'MITSUBISHI', '', 'FE 84', 0),
(28, '28', 'MITSUBISHI', '', 'FE 84 G BC', 0),
(29, '29', 'MITSUBISHI', '', 'L 300', 0),
(30, '30', 'TOYOTA', 'DYNA', '30XT JUMBO', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mstcust`
--

CREATE TABLE IF NOT EXISTS `mstcust` (
  `MstCustID` int(11) NOT NULL AUTO_INCREMENT,
  `MstCustNo` varchar(45) DEFAULT NULL,
  `MstCustIDName` varchar(45) DEFAULT NULL,
  `MstCustIDAbbr` varchar(45) DEFAULT NULL,
  `MstCustIDAddress1` varchar(45) DEFAULT NULL,
  `MstCustIDAddress2` varchar(45) DEFAULT NULL,
  `MstCustIDAddress3` varchar(45) DEFAULT NULL,
  `MstCustIDPIC1` varchar(45) DEFAULT NULL,
  `MstCustIDPIC2` varchar(45) DEFAULT NULL,
  `MstCustIDPIC3` varchar(45) DEFAULT NULL,
  `MstCustIDNoTlp` varchar(45) DEFAULT NULL,
  `MstCustIDNofax` varchar(45) DEFAULT NULL,
  `MstCustIDNpwp` varchar(45) DEFAULT NULL,
  `MstCustIDPICEmail1` varchar(45) DEFAULT NULL,
  `MstCustIDPICEmail2` varchar(45) DEFAULT NULL,
  `MstCustIDPICEmail3` varchar(45) DEFAULT NULL,
  `MstEmpID` int(11) NOT NULL,
  `MstPayID` int(11) NOT NULL,
  PRIMARY KEY (`MstCustID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mstcust`
--

INSERT INTO `mstcust` (`MstCustID`, `MstCustNo`, `MstCustIDName`, `MstCustIDAbbr`, `MstCustIDAddress1`, `MstCustIDAddress2`, `MstCustIDAddress3`, `MstCustIDPIC1`, `MstCustIDPIC2`, `MstCustIDPIC3`, `MstCustIDNoTlp`, `MstCustIDNofax`, `MstCustIDNpwp`, `MstCustIDPICEmail1`, `MstCustIDPICEmail2`, `MstCustIDPICEmail3`, `MstEmpID`, `MstPayID`) VALUES
(1, 'CST-001', 'PT Angkasa Jaya Tbk', NULL, 'Cikarang, Bekasi', 'Krapyak, Semarang', NULL, 'Megha', 'Erna', NULL, '021-411111', '021-411112', NULL, 'angkasa.jaya@gmail.com', NULL, NULL, 1, 1),
(2, 'CST-002', 'PT Alami Sejahtera Tbk', NULL, 'Cileungsi, Bogor', NULL, NULL, 'Triana', 'Dewi', NULL, '022-411111', '022-411112', NULL, 'alami.sejahtera@gmail.com', NULL, NULL, 1, 1),
(3, 'CST-003', 'PT Bumi Sentosa', NULL, 'Subah, Batang', NULL, NULL, 'Megha Triana', 'Citra', NULL, '0285-411111', '0285-411112', NULL, 'bumi.sentosa@gmail.com', NULL, NULL, 1, 1),
(4, 'CST-004', 'PT Cahaya Terang', NULL, 'Karang Anyar, Solo', NULL, NULL, 'Triana Megha', 'Adinda', NULL, '026-411111', '026-411112', NULL, 'cahaya.terang@gmail.com', NULL, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mstemp`
--

CREATE TABLE IF NOT EXISTS `mstemp` (
  `MstEmpID` int(11) NOT NULL AUTO_INCREMENT,
  `MstEmpNIK` varchar(45) DEFAULT NULL,
  `MstEmpName` varchar(45) DEFAULT NULL,
  `MstEmpDiv` varchar(45) DEFAULT NULL,
  `MstEmpGender` varchar(45) DEFAULT NULL,
  `MstEmpEdu` varchar(45) DEFAULT NULL,
  `MstEmpReligi` varchar(45) DEFAULT NULL,
  `MstEmpBirdthDate` datetime DEFAULT NULL,
  `MstEmpJoinDate` datetime DEFAULT NULL,
  `MstEmpNoRek` varchar(45) DEFAULT NULL,
  `MstEmpNoKtp` varchar(45) DEFAULT NULL,
  `MstEmpNoNpwp` varchar(45) DEFAULT NULL,
  `MstEmpNoJamsos` varchar(45) DEFAULT NULL,
  `MstEmpAddress` varchar(45) DEFAULT NULL,
  `MstEmpPassword` varchar(45) DEFAULT NULL,
  `MstEmpLevel` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`MstEmpID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mstgrpsales`
--

CREATE TABLE IF NOT EXISTS `mstgrpsales` (
  `MstGRPSalesID` int(11) NOT NULL AUTO_INCREMENT,
  `MstGRPSalesDesc` varchar(45) DEFAULT NULL,
  `MstGRPSalesAbbr` varchar(45) DEFAULT NULL,
  `MstEmpID` int(11) NOT NULL,
  PRIMARY KEY (`MstGRPSalesID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mstgrpsales`
--

INSERT INTO `mstgrpsales` (`MstGRPSalesID`, `MstGRPSalesDesc`, `MstGRPSalesAbbr`, `MstEmpID`) VALUES
(1, 'PLT', 'group sales 1', 1),
(2, 'QR', 'group sales 2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mstproduct`
--

CREATE TABLE IF NOT EXISTS `mstproduct` (
  `MstProductID` int(11) NOT NULL AUTO_INCREMENT,
  `MstProductType` varchar(45) DEFAULT NULL,
  `MstProductVariant` varchar(45) NOT NULL,
  `MstProductGroupingSize` varchar(45) DEFAULT NULL,
  `MstProductCategory` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `MstProductName` varchar(45) DEFAULT NULL,
  `MstProductUOM` varchar(45) DEFAULT NULL,
  `MstProductStatus` varchar(45) DEFAULT NULL,
  `MstProductLastUpDate` varchar(45) DEFAULT NULL,
  `MstSpecID` int(11) NOT NULL,
  `MstGrpReportID` int(11) NOT NULL,
  `MstEmpID` int(11) NOT NULL,
  `MstTypeProductID` int(11) NOT NULL,
  PRIMARY KEY (`MstProductID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=258 ;

--
-- Dumping data for table `mstproduct`
--

INSERT INTO `mstproduct` (`MstProductID`, `MstProductType`, `MstProductVariant`, `MstProductGroupingSize`, `MstProductCategory`, `MstProductName`, `MstProductUOM`, `MstProductStatus`, `MstProductLastUpDate`, `MstSpecID`, `MstGrpReportID`, `MstEmpID`, `MstTypeProductID`) VALUES
(1, 'Wing Box', 'QR-1', 'Small Type', 'Wing Box QR-1-Small Type', 'QRS', 'Unit', '5', '1', 28, 0, 0, 1),
(2, 'Wing Box', 'QR-1', 'Medium Type', 'Wing Box QR-1-Medium Type', 'QRS', 'Unit', '', '1', 28, 0, 0, 1),
(3, 'Wing Box', 'QR-1', 'Big Type', 'Wing Box QR-1-Big Type', 'QRS', 'Unit', '', '1', 28, 0, 0, 1),
(4, 'Wing Box', 'QR-2', 'Small Type', 'Wing Box QR-2-Small Type', 'QRS', 'Unit', '', '1', 28, 0, 0, 2),
(5, 'Wing Box', 'QR-2', 'Medium Type', 'Wing Box QR-2-Medium Type', 'QRS', 'Unit', '', '1', 28, 0, 0, 2),
(6, 'Wing Box', 'QR-2', 'Big Type', 'Wing Box QR-2-Big Type', 'QRS', 'Unit', '', '1', 28, 0, 0, 2),
(7, 'Wing Box', 'QR-3', 'Small Type', 'Wing Box QR-3-Small Type', 'QRS', 'Unit', '', '1', 28, 0, 0, 2),
(8, 'Wing Box', 'QR-3', 'Medium Type', 'Wing Box QR-3-Medium Type', 'QRS', 'Unit', '', '1', 28, 0, 0, 3),
(9, 'Wing Box', 'QR-3', 'Big Type', 'Wing Box QR-3-Big Type', 'QRS', 'Unit', '', '1', 28, 0, 0, 3),
(10, 'Wing Box', 'QR-4', 'Small Type', 'Wing Box QR-4-Small Type', 'QRS', 'Unit', '', '1', 28, 0, 0, 3),
(11, 'Wing Box', 'QR-4', 'Medium Type', 'Wing Box QR-4-Medium Type', 'QRS', 'Unit', '', '1', 28, 0, 0, 3),
(12, 'Wing Box', 'QR-4', 'Big Type', 'Wing Box QR-4-Big Type', 'QRS', 'Unit', '', '1', 28, 0, 0, 1),
(13, 'Wing Box', 'QR-5', 'Small Type', 'Wing Box QR-5-Small Type', 'QRS', 'Unit', '', '1', 28, 0, 0, 1),
(14, 'Wing Box', 'QR-5', 'Medium Type', 'Wing Box QR-5-Medium Type', 'QRS', 'Unit', '', '1', 28, 0, 0, 2),
(15, 'Wing Box', 'QR-5', 'Big Type', 'Wing Box QR-5-Big Type', 'QRS', 'Unit', '', '1', 28, 0, 0, 2),
(16, 'Pallet', 'Type A', 'Pallet', 'Dolly / Daisha Standard', 'STP', 'Set', '', '1', 28, 0, 0, 1),
(17, 'Pallet', 'Type B', 'Pallet', 'Pallet & Rack Standard', 'STP', 'Set', '', '1', 28, 0, 0, 1),
(18, 'Pallet', 'Type C', 'Pallet', 'Pallet Special / Dolly Special / Rack Special', 'STP', 'Set', '', '1', 28, 0, 0, 2),
(19, 'Pallet', 'Type D', 'Pallet', 'Special Equipment & Product Seperti Jig', 'STP', 'Set', '', '1', 28, 0, 0, 2),
(20, 'Box', 'Steel', 'Non Wing Box', 'Box Steel', 'STP', 'Unit', '', '1', 28, 0, 0, 3),
(21, 'Box', 'Alumunium Composite', 'Non Wing Box', 'Box Alumunium Composite', 'STP', 'Unit', '', '1', 28, 0, 0, 3),
(22, 'Box', 'Alumunium Full Hollow', 'Non Wing Box', 'Box Alumunium Full Hollow', 'STP', 'Unit', '', '1', 28, 0, 0, 3),
(23, 'Flat Deck', 'Steel', 'Non Wing Box', 'Flat Deck Steel', 'STP', 'Unit', '', '1', 28, 0, 0, 2),
(24, 'Lose Bak', 'Steel', 'Non Wing Box', 'Loss Back Steel', 'STP', 'Unit', '', '1', 28, 0, 0, 2),
(25, 'Concrete Mixer', 'Buffalo', 'Small Type', 'Mixer Buffalo 3m3', 'STP', 'Unit', '', '1', 28, 0, 0, 1),
(26, 'Concrete Mixer', 'Buffalo', 'Big Type', 'Mixer Buffalo 7m3', 'STP', 'Unit', '', '1', 28, 0, 0, 0),
(27, 'Chassis for TTI', 'Chassis for TTI', 'Chassis for TTI', 'Chassis for TTI', 'TTI', 'Unit', '', '1', 28, 0, 0, 0),
(28, 'Cooling Unit', 'Topree', 'Cooling Unit', 'Cooling Unit Topree', 'STP', 'Unit', '', '1', 28, 0, 0, 0),
(257, 'MstProductType', 'MstProductVariant', 'MstProductGroupingSize', 'MstProductName', 'MstProductCategory', 'MstProductUOM', 'MstSpecID', 'MstProductStatus', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mstsalespic`
--

CREATE TABLE IF NOT EXISTS `mstsalespic` (
  `MstSalesPICID` int(11) NOT NULL AUTO_INCREMENT,
  `MstSalesPICName` varchar(45) DEFAULT NULL,
  `MstSalesPICPICEmail1` varchar(45) DEFAULT NULL,
  `MstSalesPICPICEmail2` varchar(45) DEFAULT NULL,
  `MstSalesPICPICEmail3` varchar(45) DEFAULT NULL,
  `MstEmpID` int(11) NOT NULL,
  PRIMARY KEY (`MstSalesPICID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mstsalespic`
--

INSERT INTO `mstsalespic` (`MstSalesPICID`, `MstSalesPICName`, `MstSalesPICPICEmail1`, `MstSalesPICPICEmail2`, `MstSalesPICPICEmail3`, `MstEmpID`) VALUES
(1, 'Anton Wiryawan', NULL, NULL, NULL, 1),
(2, 'Andini Larasati', NULL, NULL, NULL, 1),
(3, 'Budi Sujatmiko', NULL, NULL, NULL, 1),
(4, 'Chairunnisa', NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mstsellingprice`
--

CREATE TABLE IF NOT EXISTS `mstsellingprice` (
  `MstSellingPriceID` int(11) NOT NULL AUTO_INCREMENT,
  `MstSellingPriceUnitPrice` int(11) DEFAULT NULL,
  `MstSellingPriceExpiredDate` datetime DEFAULT NULL,
  `MstSellingPriceStatus` varchar(45) DEFAULT NULL,
  `MstProductID` int(11) NOT NULL,
  `MstEmpID` int(11) NOT NULL,
  PRIMARY KEY (`MstSellingPriceID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mstsellingprice`
--

INSERT INTO `mstsellingprice` (`MstSellingPriceID`, `MstSellingPriceUnitPrice`, `MstSellingPriceExpiredDate`, `MstSellingPriceStatus`, `MstProductID`, `MstEmpID`) VALUES
(1, 500000, '2015-01-20 12:22:25', 'active', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mstspec`
--

CREATE TABLE IF NOT EXISTS `mstspec` (
  `MstSpecID` int(11) NOT NULL AUTO_INCREMENT,
  `MstSpecDesc` varchar(45) DEFAULT NULL,
  `MstSpecPenggerak` varchar(45) DEFAULT NULL,
  `MstSpecBase` varchar(45) DEFAULT NULL,
  `MstSpecCrossMember` varchar(45) DEFAULT NULL,
  `MstSpecWall` varchar(45) DEFAULT NULL,
  `MstSpecSideDoor` varchar(45) DEFAULT NULL,
  `MstSpecWing` varchar(45) DEFAULT NULL,
  `MstSpecInnerRoof` varchar(45) DEFAULT NULL,
  `MstSpecSideGuard` varchar(45) DEFAULT NULL,
  `MstSpecBackBumper` varchar(45) DEFAULT NULL,
  `MstSpecLamp` varchar(45) DEFAULT NULL,
  `MstSpecPainting` varchar(45) DEFAULT NULL,
  `MstSpecBackDoor` varchar(45) DEFAULT NULL,
  `MstSpecRearDoor` varchar(45) DEFAULT NULL,
  `MstSpecTangga` varchar(45) DEFAULT NULL,
  `MstSpecLastUpDate` varchar(45) DEFAULT NULL,
  `MstEmpID` int(11) NOT NULL,
  PRIMARY KEY (`MstSpecID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `mstspec`
--

INSERT INTO `mstspec` (`MstSpecID`, `MstSpecDesc`, `MstSpecPenggerak`, `MstSpecBase`, `MstSpecCrossMember`, `MstSpecWall`, `MstSpecSideDoor`, `MstSpecWing`, `MstSpecInnerRoof`, `MstSpecSideGuard`, `MstSpecBackBumper`, `MstSpecLamp`, `MstSpecPainting`, `MstSpecBackDoor`, `MstSpecRearDoor`, `MstSpecTangga`, `MstSpecLastUpDate`, `MstEmpID`) VALUES
(1, 'LOSS BAK', '', 'Bordes 3.2 mm, UNP 120/55 SPHC 4.5 X 45/80 X ', '400 mm (Standard)', 'SQ Pipe 100/50,Plat Bending 1.6 mm', 'SQ 40/20, 40/40 plat Bending 1,6 mm', '', '', 'Plat Bending', 'UNP 120/55', '', 'Duco Silver', 'Round Pipe 27', 'SQ 40/20, 40/40 plat Bending 1,6 mm', 'Round Pipe 27', '28/10/2014 8:43', 0),
(2, 'STEEL BOX (Ukuran Besar)', '', 'Bordes 3.2 mm, UNP 120/55 SPHC 4.5 X 45/80 X ', '400 mm (Standard)', 'SQ Pipe 100/50,Plat Bending 1.6 mm', '', 'Panel Plat, Frame Steel Tube, Plat Bending', '', 'Plat Bending', 'UNP 120/55', 'Lampu Kota 6 Pcs, Lampu Box 2 Pcs', 'Duco Silver', 'SQ pipe 20/40, SQ 40/40 Plat Bending 1.6 mm', '', '', '28/10/2014 8:43', 0),
(3, 'STEEL BOX (Ukuran Kecil)', '', 'Bordes 2.3 mm, UNP 65/42, UNP 50/38 UNP 45/80', '400 mm (Standard)', 'SQ Pipe 100/50,Plat Bending 1.6 mm', '', 'Panel Plat, Frame Steel Tube, Plat Bending', '', 'Plat Bending', 'UNP 120/55', 'Lampu Kota 6 Pcs, Lampu Box 2 Pcs', 'Duco Silver', 'SQ pipe 20/40, SQ 40/40 Plat Bending 1.6 mm', '', '', '28/10/2014 8:43', 0),
(4, 'WING BOX QR1 (Ukuran Besar)', 'PWI & Torque Spring', 'Bordes 3.2 mm, UNP 120/55 SPHC 4.5 X 45/80 X ', '400 mm (Standard)', 'SQ Pipe 100/50,Plat Bending 1.6 mm', 'SQ 40/20, 40/40 plat Bending 1,6 mm', 'Panel Terpal Canvas , Frame Steel Tube, R Pip', 'Wire mesh', 'Plat Bending', 'UNP 120/55', 'Lampu Kota 6 pcs, Lampu Platfond', 'Duco Silver', 'SQ pipe 20/40, SQ 40/40 Plat Bending 1.6 mm', '', '', '28/10/2014 8:43', 0),
(5, 'WING BOX QR1 (Ukuran Kecil)', 'Long + Torque Spring', 'Bordes 2.3 mm, UNP 65/42, UNP 50/38 UNP 45/80', '400 mm (Standard)', 'SQ Pipe 45/75, Plat Bending 1.6 mm', 'SQ 40/20, 40/40 plat Bending 1,6 mm', 'Panel Terpal Canvas , Frame Steel Tube, R Pip', 'Wire mesh', 'Plat Bending', 'UNP 100/50', 'Lampu Kota 6 Pcs, Lampu Box 2 Pcs', 'Duco Silver', 'SQ pipe 20/40, SQ 40/40 Plat Bending 1.6 mm', '', '', '28/10/2014 8:43', 0),
(6, 'WING BOX QR2 (Ukuran Besar)', 'PWI Spring', 'Bordes 3.2 mm, UNP 120/55 SPHC 4.5 X 45/80 X ', '400 mm (Standard)', 'SQ Pipe 100/50,Plat Bending 1.6 mm', 'SQ 40/20, 40/40 plat Bending 1,6 mm', 'Panel Zincalume, Frame Steel Tube Bending pla', 'Zincalume', 'Plat Bending', 'UNP 120/55', 'Lampu Kota 6 Pcs, Lampu Box 2 Pcs', 'Duco Silver', 'SQ pipe 20/40, SQ 40/40 Plat Bending 1.6 mm', '', '', '28/10/2014 8:43', 0),
(7, 'WING BOX QR2 (Ukuran Kecil)', 'Long + Torque Spring', 'Bordes 2.3 mm, UNP 65/42, UNP 50/38 UNP 45/80', '400 mm (Standard)', 'SQ Pipe 45/75, Plat Bending 1.6 mm', 'SQ 40/20, 40/40 plat Bending 1,6 mm', 'Panel Zincalume, Frame Steel Tube Bending pla', '', 'Plat Bending', 'UNP 100/50', 'Lampu Kota 6 Pcs, Lampu Box 2 Pcs', 'Duco Silver', 'SQ pipe 20/40, SQ 40/40 Plat Bending 1.6 mm', '', '', '28/10/2014 8:43', 0),
(8, 'WING BOX QR3 (Ukuran Besar)', 'PWI Spring', 'Bordes 3.2 mm, UNP 120/55 SPHC 4.5 X 45/80 X ', '400 mm (Standard)', 'SQ Pipe 100/50,Plat Bending 1.6 mm', 'Alumunium Extrussion', 'Panel Zincalume, Frame Steel Tube Bending pla', '', 'Plat Bending', 'UNP 120/55', 'Lampu Kota 6 Pcs, Lampu Box 2 Pcs', 'Duco Silver', 'SQ pipe 20/40, SQ 40/40 Plywood 18t + Zinc. S', '', '', '28/10/2014 8:43', 0),
(9, 'WING BOX QR3 (Ukuran Kecil)', 'PWI Spring', 'Bordes 3.2 mm, UNP 120/55 SPHC 4.5 X 45/80 X ', '400 mm (Standard)', 'SQ Pipe 100/50,Plat Bending 1.6 mm', 'Alumunium Extrussion', 'Panel Zincalume, Frame Steel Tube Bending pla', '', 'Plat Bending', 'UNP 120/55', 'Lampu Kota 6 Pcs, Lampu Box 2 Pcs', 'Duco Silver', 'SQ pipe 20/40, SQ 40/40 Plywood 18t + Zinc. S', '', '', '28/10/2014 8:43', 0),
(10, 'WING BOX QR4 (Ukuran Besar)', 'Hydraulic', 'Bordes 3.2 mm, UNP 120/55 SPHC 4.5 X 45/80 X ', '400 mm (Standard)', 'UNP 150/75, Plat Bending 1.6 mm', 'SQ 40/20, 40/40 plat Bending 1,6 mm', 'Panel Zincalume, Frame Steel Tube Bending pla', 'Zincalume', 'Plat Bending', 'UNP 120/55', 'Lampu Kota 6 Pcs, Lampu Box 2 Pcs', 'Duco Silver', 'SQ pipe 20/40, SQ 40/40 Plat Bending 1.6 mm', '', '', '28/10/2014 8:43', 0),
(11, 'WING BOX QR4 (Ukuran Kecil)', 'Hydraulic', 'Bordes 2.3 mm, UNP 65/42, UNP 50/38 UNP 45/80', '400 mm (Standard)', 'SQ Pipe 100/50, Plat Bending 1.6 mm', 'SQ 40/20, 40/40 plat Bending 1,6 mm', 'Panel Zincalume, Frame Steel Tube Bending pla', 'Zincalume', 'Plat Bending', 'UNP 120/55', 'Lampu Kota 6 Pcs, Lampu Box 2 Pcs', 'Duco Silver', 'SQ pipe 20/40, SQ 40/40 Plat Bending 1.6 mm', '', '', '28/10/2014 8:43', 0),
(12, 'WING BOX QR5 (Ukuran Besar)', 'Hydraulic', 'Bordes 3.2 mm, UNP 120/55 SPHC 4.5 X 45/80 X ', '400 mm (Standard)', 'UNP 150/75, Plat Bending 2.0 mm', 'Alumunium Extrussion', 'Panel Zincalume, Frame Steel Tube Bending pla', 'Zincalume', 'Plat Bending', 'UNP 120/55', 'Lampu Kota 6 Pcs, Lampu Box 2 Pcs', 'Duco Silver', 'SQ pipe 20/40, SQ 40/40 Plywood 18t + Zinc. S', '', '', '28/10/2014 8:43', 0),
(13, 'WING BOX QR5 (Ukuran Kecil)', 'Hydraulic', 'Bordes 2.3 mm, UNP 65/42, UNP 50/38 UNP 45/80', '400 mm (Standard)', 'SQ Pipe 100/50, Plat Bending 1.6 mm', 'Alumunium Extrussion', 'Panel Zincalume, Frame Steel Tube Bending pla', 'Zincalume', 'Plat Bending', 'UNP 100/50', 'Lampu Kota 6 Pcs, Lampu Box 2 Pcs', 'Duco Silver', 'SQ pipe 20/40, SQ 40/40 Plywood 18t + Zinc. S', '', '', '28/10/2014 8:43', 0);

-- --------------------------------------------------------

--
-- Table structure for table `msttypeorder`
--

CREATE TABLE IF NOT EXISTS `msttypeorder` (
  `MstTypeOrderID` int(11) NOT NULL AUTO_INCREMENT,
  `MstTypeOrderCode` varchar(45) DEFAULT NULL,
  `MstTypeOrderName` varchar(45) DEFAULT NULL,
  `MstEmpID` int(11) NOT NULL,
  PRIMARY KEY (`MstTypeOrderID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `msttypeorder`
--

INSERT INTO `msttypeorder` (`MstTypeOrderID`, `MstTypeOrderCode`, `MstTypeOrderName`, `MstEmpID`) VALUES
(1, 'ORD-A', 'Type Order A', 1),
(2, 'ORD-B', 'Type Order B', 1),
(3, 'ORD-C', 'Type Order C', 1),
(4, 'ORD-D', 'Type Order D', 1);

-- --------------------------------------------------------

--
-- Table structure for table `msttypeproduct`
--

CREATE TABLE IF NOT EXISTS `msttypeproduct` (
  `MstTypeProductID` int(11) NOT NULL AUTO_INCREMENT,
  `MstTypeProductCode` varchar(45) DEFAULT NULL,
  `MstTypeProductName` varchar(45) DEFAULT NULL,
  `MstEmpID` int(11) NOT NULL,
  PRIMARY KEY (`MstTypeProductID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `msttypeproduct`
--

INSERT INTO `msttypeproduct` (`MstTypeProductID`, `MstTypeProductCode`, `MstTypeProductName`, `MstEmpID`) VALUES
(1, 'PRODUCT', 'PRODUCT', 0),
(2, 'PART', 'PART', 0),
(3, 'MATERIAL', 'MATERIAL', 0);

-- --------------------------------------------------------

--
-- Table structure for table `txndraw`
--

CREATE TABLE IF NOT EXISTS `txndraw` (
  `TxnDrawID` int(11) NOT NULL AUTO_INCREMENT,
  `TxnDrawNo` varchar(45) DEFAULT NULL,
  `TxnDrawDate` datetime DEFAULT NULL,
  `TxnDrawStatus` varchar(45) DEFAULT NULL,
  `TxnDrawTitle` varchar(45) DEFAULT NULL,
  `MstEmpID` int(11) NOT NULL,
  PRIMARY KEY (`TxnDrawID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `txndraw`
--

INSERT INTO `txndraw` (`TxnDrawID`, `TxnDrawNo`, `TxnDrawDate`, `TxnDrawStatus`, `TxnDrawTitle`, `MstEmpID`) VALUES
(1, '01', '2014-11-09 06:27:22', 'status', 'title', 1),
(2, '02', '2014-11-08 07:34:34', 'status', 'title', 1);

-- --------------------------------------------------------

--
-- Table structure for table `txnquotdtl`
--

CREATE TABLE IF NOT EXISTS `txnquotdtl` (
  `TxnQuotDtlID` int(11) NOT NULL AUTO_INCREMENT,
  `TxnQuotHdrNoRev` varchar(45) DEFAULT NULL,
  `TxnQuotDtlQty` int(11) DEFAULT NULL,
  `TxnQuotDtlUnitPrice` int(11) DEFAULT NULL,
  `TxnQuotDtlDiscPrs` int(11) DEFAULT NULL,
  `TxnQuotDtlDiscAm` int(11) DEFAULT NULL,
  `TxnQuotDtlRemarks` varchar(45) DEFAULT NULL,
  `MstChasID` int(11) NOT NULL,
  `MstProductID` int(11) NOT NULL,
  `TxnQuotHdrID` int(11) NOT NULL,
  `TxnDrawID` int(11) NOT NULL,
  `MstTypeProductID` int(11) NOT NULL,
  PRIMARY KEY (`TxnQuotDtlID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `txnquothdr`
--

CREATE TABLE IF NOT EXISTS `txnquothdr` (
  `TxnQuotHdrID` int(11) NOT NULL AUTO_INCREMENT,
  `TxnQuotHdrNo` varchar(45) DEFAULT NULL,
  `TxnQuotHdrDate` varchar(45) DEFAULT NULL,
  `TxnQuotHdrTermsTxt` varchar(45) DEFAULT NULL,
  `TxnQuotHdrDiscount` int(11) DEFAULT NULL,
  `TxnQuotHdrRemarks` int(11) DEFAULT NULL,
  `MstCustID` int(11) NOT NULL,
  `MstSalesPICID` int(11) NOT NULL,
  `MstApprID` int(11) NOT NULL,
  `MstEmpID` int(11) NOT NULL,
  `MstGRPSalesID` int(11) NOT NULL,
  `MstTypeOrderID` int(11) NOT NULL,
  PRIMARY KEY (`TxnQuotHdrID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
