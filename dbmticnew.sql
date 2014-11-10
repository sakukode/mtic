-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 10, 2014 at 10:02 
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbmticnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `mstappr`
--

CREATE TABLE IF NOT EXISTS `mstappr` (
  `MstApprID` int(11) NOT NULL AUTO_INCREMENT,
  `MstApprName` varchar(45) DEFAULT NULL,
  `MstAppr1` varchar(45) DEFAULT NULL,
  `MstApprTitle1` varchar(45) DEFAULT NULL,
  `MstAppr2` varchar(45) DEFAULT NULL,
  `MstApprTitle2` varchar(45) DEFAULT NULL,
  `MstAppr3` varchar(45) DEFAULT NULL,
  `MstApprTitle3` varchar(45) DEFAULT NULL,
  `MstAppr4` varchar(45) DEFAULT NULL,
  `MstApprTitle4` varchar(45) DEFAULT NULL,
  `MstEmpID` int(11) NOT NULL,
  PRIMARY KEY (`MstApprID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
-- Table structure for table `mstcrs`
--

CREATE TABLE IF NOT EXISTS `mstcrs` (
  `MstCrsID` int(11) NOT NULL AUTO_INCREMENT,
  `MstCrsName` varchar(45) DEFAULT NULL,
  `MstCrsSym` varchar(45) DEFAULT NULL,
  `MstEmpID` int(11) NOT NULL,
  PRIMARY KEY (`MstCrsID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
  `MstEmpLastUpdate` datetime NOT NULL,
  PRIMARY KEY (`MstEmpID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mstgrpreport`
--

CREATE TABLE IF NOT EXISTS `mstgrpreport` (
  `MstGrpReportID` int(11) NOT NULL AUTO_INCREMENT,
  `MstGrpReport` varchar(45) DEFAULT NULL,
  `MstEmpID` int(11) NOT NULL,
  PRIMARY KEY (`MstGrpReportID`)
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
-- Table structure for table `mstpay`
--

CREATE TABLE IF NOT EXISTS `mstpay` (
  `MstPayID` int(11) NOT NULL AUTO_INCREMENT,
  `MstPaySyarat` varchar(45) DEFAULT NULL,
  `MstEmpID` int(11) NOT NULL,
  PRIMARY KEY (`MstPayID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mstpay`
--

INSERT INTO `mstpay` (`MstPayID`, `MstPaySyarat`, `MstEmpID`) VALUES
(1, '30 HARI', 0),
(2, '15 HARI', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mstproduct`
--

CREATE TABLE IF NOT EXISTS `mstproduct` (
  `MstProductID` int(11) NOT NULL AUTO_INCREMENT,
  `MstProductType` varchar(45) DEFAULT NULL,
  `MstProductTypeProduct` varchar(45) NOT NULL,
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
  PRIMARY KEY (`MstProductID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=258 ;

--
-- Dumping data for table `mstproduct`
--

INSERT INTO `mstproduct` (`MstProductID`, `MstProductType`, `MstProductTypeProduct`, `MstProductVariant`, `MstProductGroupingSize`, `MstProductCategory`, `MstProductName`, `MstProductUOM`, `MstProductStatus`, `MstProductLastUpDate`, `MstSpecID`, `MstGrpReportID`, `MstEmpID`) VALUES
(1, 'Wing Box', 'PRODUCT', 'QR-1', 'Small Type', 'MTR', 'QRS', 'Unit', '5', '2014-11-10 07:26:31', 28, 0, 0),
(2, 'Wing Box', 'PRODUCT', 'QR-1', 'Medium Type', 'MTR', 'QRS', 'Unit', '', '2014-11-10 07:26:39', 28, 0, 0),
(3, 'Wing Box', 'PRODUCT', 'QR-1', 'Big Type', 'MTR', 'QRS', 'Unit', '', '2014-11-10 07:24:03', 28, 0, 0),
(4, 'Wing Box', 'PRODUCT', 'QR-2', 'Small Type', 'MTR', 'QRS', 'Unit', '', '2014-11-10 07:24:08', 28, 0, 0),
(5, 'Wing Box', 'PRODUCT', 'QR-2', 'Medium Type', 'MTR', 'QRS', 'Unit', '', '2014-11-10 07:24:15', 28, 0, 0),
(6, 'Wing Box', 'PART', 'QR-2', 'Big Type', 'MTR', 'QRS', 'Unit', '', '2014-11-10 07:24:20', 28, 0, 0),
(7, 'Wing Box', 'PART', 'QR-3', 'Small Type', 'MTR', 'QRS', 'Unit', '', '2014-11-10 07:24:25', 28, 0, 0),
(8, 'Wing Box', 'PART', 'QR-3', 'Medium Type', 'Wing Box QR-3-Medium Type', 'QRS', 'Unit', '', '1', 28, 0, 0),
(9, 'Wing Box', 'PART', 'QR-3', 'Big Type', 'Wing Box QR-3-Big Type', 'QRS', 'Unit', '', '1', 28, 0, 0),
(10, 'Wing Box', 'PART', 'QR-4', 'Small Type', 'Wing Box QR-4-Small Type', 'QRS', 'Unit', '', '1', 28, 0, 0),
(11, 'Wing Box', 'MATERIAL', 'QR-4', 'Medium Type', 'Wing Box QR-4-Medium Type', 'QRS', 'Unit', '', '1', 28, 0, 0),
(12, 'Wing Box', 'MATERIAL', 'QR-4', 'Big Type', 'MTR', 'QRS', 'Unit', '', '2014-11-10 07:24:40', 28, 0, 0),
(13, 'Wing Box', 'MATERIAL', 'QR-5', 'Small Type', 'MTR', 'QRS', 'Unit', '', '2014-11-10 07:24:36', 28, 0, 0),
(14, 'Wing Box', 'MATERIAL', 'QR-5', 'Medium Type', 'MTR', 'QRS', 'Unit', '', '2014-11-10 07:24:31', 28, 0, 0),
(15, 'Wing Box', 'MATERIAL', 'QR-5', 'Big Type', 'Wing Box QR-5-Big Type', 'QRS', 'Unit', '', '1', 28, 0, 0),
(16, 'Pallet', 'PRODUCT', 'Type A', 'Pallet', 'Dolly / Daisha Standard', 'STP', 'Set', '', '1', 28, 0, 0),
(17, 'Pallet', 'PRODUCT', 'Type B', 'Pallet', 'Pallet & Rack Standard', 'STP', 'Set', '', '1', 28, 0, 0),
(18, 'Pallet', 'PRODUCT', 'Type C', 'Pallet', 'Pallet Special / Dolly Special / Rack Special', 'STP', 'Set', '', '1', 28, 0, 0),
(19, 'Pallet', 'PRODUCT', 'Type D', 'Pallet', 'Special Equipment & Product Seperti Jig', 'STP', 'Set', '', '1', 28, 0, 0),
(20, 'Box', 'PRODUCT', 'Steel', 'Non Wing Box', 'Box Steel', 'STP', 'Unit', '', '1', 28, 0, 0),
(21, 'Box', 'PART', 'Alumunium Composite', 'Non Wing Box', 'Box Alumunium Composite', 'STP', 'Unit', '', '1', 28, 0, 0),
(22, 'Box', 'PART', 'Alumunium Full Hollow', 'Non Wing Box', 'Box Alumunium Full Hollow', 'STP', 'Unit', '', '1', 28, 0, 0),
(23, 'Flat Deck', 'PART', 'Steel', 'Non Wing Box', 'Flat Deck Steel', 'STP', 'Unit', '', '1', 28, 0, 0),
(24, 'Lose Bak', 'PART', 'Steel', 'Non Wing Box', 'Loss Back Steel', 'STP', 'Unit', '', '1', 28, 0, 0),
(25, 'Concrete Mixer', 'PART', 'Buffalo', 'Small Type', 'Mixer Buffalo 3m3', 'STP', 'Unit', '', '1', 28, 0, 0),
(26, 'Concrete Mixer', '', 'Buffalo', 'Big Type', 'Mixer Buffalo 7m3', 'STP', 'Unit', '', '1', 28, 0, 0),
(27, 'Chassis for TTI', '', 'Chassis for TTI', 'Chassis for TTI', 'Chassis for TTI', 'TTI', 'Unit', '', '1', 28, 0, 0),
(28, 'Cooling Unit', '', 'Topree', 'Cooling Unit', 'Cooling Unit Topree', 'STP', 'Unit', '', '1', 28, 0, 0),
(257, 'MstProductType', '', 'MstProductVariant', 'MstProductGroupingSize', 'MstProductName', 'MstProductCategory', 'MstProductUOM', 'MstSpecID', 'MstProductStatus', 0, 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mstsalespic`
--

INSERT INTO `mstsalespic` (`MstSalesPICID`, `MstSalesPICName`, `MstSalesPICPICEmail1`, `MstSalesPICPICEmail2`, `MstSalesPICPICEmail3`, `MstEmpID`) VALUES
(1, 'PRATJIH', NULL, NULL, NULL, 0),
(2, 'SUHAEMI', NULL, NULL, NULL, 0),
(3, 'UJI SARONI', NULL, NULL, NULL, 0),
(4, 'AGUS SETYO', NULL, NULL, NULL, 0),
(5, 'WIDIANTO K.', NULL, NULL, NULL, 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
-- Table structure for table `mststatusprod`
--

CREATE TABLE IF NOT EXISTS `mststatusprod` (
  `MstStatusProdID` int(11) NOT NULL AUTO_INCREMENT,
  `MstStatusProdGroup` varchar(45) DEFAULT NULL,
  `MstStatusProdSubGroup` varchar(45) DEFAULT NULL,
  `MstStatusProdJob` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`MstStatusProdID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `msttypeorder`
--

INSERT INTO `msttypeorder` (`MstTypeOrderID`, `MstTypeOrderCode`, `MstTypeOrderName`, `MstEmpID`) VALUES
(1, 'C-001', 'KAROSERI', 0),
(2, 'C-002', 'PALLET', 0);

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
(1, '001', '2014-11-10 00:00:00', 'status', 'title', 1),
(2, '002', '2014-11-10 10:25:38', 'status', 'title', 1);

-- --------------------------------------------------------

--
-- Table structure for table `txnpodtl`
--

CREATE TABLE IF NOT EXISTS `txnpodtl` (
  `TxnPODtlID` int(11) NOT NULL AUTO_INCREMENT,
  `TxnPODtlQty` varchar(45) DEFAULT NULL,
  `TxnPODtlUnitPrice` varchar(45) DEFAULT NULL,
  `TxnPODtlDiscPrs` varchar(45) DEFAULT NULL,
  `TxnPODtlDiscAm` varchar(45) DEFAULT NULL,
  `TxnPODtlRemarks` varchar(45) DEFAULT NULL,
  `MstChasID` int(11) NOT NULL,
  `MstProductID` int(11) NOT NULL,
  `TxnPOHdrID` int(11) NOT NULL,
  `TxnDrawID` int(11) NOT NULL,
  `MstTypeProductID` int(11) NOT NULL,
  PRIMARY KEY (`TxnPODtlID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `txnpohdr`
--

CREATE TABLE IF NOT EXISTS `txnpohdr` (
  `TxnPOHdrID` int(11) NOT NULL AUTO_INCREMENT,
  `TxnPoHdrNo` varchar(45) DEFAULT NULL,
  `TxnPoHdrDate` datetime DEFAULT NULL,
  `TxnPoHdrTermTxt` varchar(45) DEFAULT NULL,
  `TxnPoHdrDiscount` varchar(45) DEFAULT NULL,
  `TxnQuotHdrID` int(11) NOT NULL,
  `MstSalesPICID` int(11) NOT NULL,
  `MstApprID` int(11) NOT NULL,
  `MstEmpID` int(11) NOT NULL,
  `MstGRPSalesID` int(11) NOT NULL,
  PRIMARY KEY (`TxnPOHdrID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `txnquotdtl`
--

CREATE TABLE IF NOT EXISTS `txnquotdtl` (
  `TxnQuotDtlID` int(11) NOT NULL AUTO_INCREMENT,
  `TxnQuotDtlQty` int(11) DEFAULT NULL,
  `TxnQuotDtlUnitPrice` int(11) DEFAULT NULL,
  `TxnQuotDtlDiscPrs` int(11) DEFAULT NULL,
  `TxnQuotDtlDiscAm` int(11) DEFAULT NULL,
  `TxnQuotDtlTotAm` double NOT NULL,
  `TxnQuotDtlRemarks` varchar(45) DEFAULT NULL,
  `MstChasID` int(11) NOT NULL,
  `MstProductID` int(11) NOT NULL,
  `TxnQuotHdrID` int(11) NOT NULL,
  `TxnDrawID` int(11) NOT NULL,
  PRIMARY KEY (`TxnQuotDtlID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `txnquotdtl`
--

INSERT INTO `txnquotdtl` (`TxnQuotDtlID`, `TxnQuotDtlQty`, `TxnQuotDtlUnitPrice`, `TxnQuotDtlDiscPrs`, `TxnQuotDtlDiscAm`, `TxnQuotDtlTotAm`, `TxnQuotDtlRemarks`, `MstChasID`, `MstProductID`, `TxnQuotHdrID`, `TxnDrawID`) VALUES
(1, 5, 100000, 10, 0, 490000, 'lorem ipsum', 3, 11, 1, 1),
(2, 10, 300000, 0, 100000, 2900000, '', 25, 21, 1, 0);

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
  `TxnQuotHdrRemarks` text,
  `TxnQuotHdrPpn` double NOT NULL,
  `TxnQuotHdrSubTotal` double NOT NULL,
  `TxnQuotHdrTotal` double NOT NULL,
  `MstCustID` int(11) NOT NULL,
  `MstSalesPICID` int(11) NOT NULL,
  `MstApprID` int(11) NOT NULL,
  `MstEmpID` int(11) NOT NULL,
  `MstGRPSalesID` int(11) NOT NULL,
  `MstTypeOrderID` int(11) NOT NULL,
  PRIMARY KEY (`TxnQuotHdrID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `txnquothdr`
--

INSERT INTO `txnquothdr` (`TxnQuotHdrID`, `TxnQuotHdrNo`, `TxnQuotHdrDate`, `TxnQuotHdrTermsTxt`, `TxnQuotHdrDiscount`, `TxnQuotHdrRemarks`, `TxnQuotHdrPpn`, `TxnQuotHdrSubTotal`, `TxnQuotHdrTotal`, `MstCustID`, `MstSalesPICID`, `MstApprID`, `MstEmpID`, `MstGRPSalesID`, `MstTypeOrderID`) VALUES
(1, '1/MTI-MRK/PLT/XI/2014', '10-11-2014', '1. Payment  : 14 Days after confirmation PO\n2', 50000, '', 339000, 3390000, 3001000, 2, 4, 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `txnsodtl`
--

CREATE TABLE IF NOT EXISTS `txnsodtl` (
  `TxnSoDtlID` int(11) NOT NULL AUTO_INCREMENT,
  `TxnSoDtlQty` varchar(45) DEFAULT NULL,
  `TxnSoDtlExpDelDate` datetime DEFAULT NULL,
  `TxnQuotDtlID` int(11) NOT NULL,
  `TxnSOHdrID` int(11) NOT NULL,
  PRIMARY KEY (`TxnSoDtlID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `txnsohdr`
--

CREATE TABLE IF NOT EXISTS `txnsohdr` (
  `TxnSOHdrID` int(11) NOT NULL AUTO_INCREMENT,
  `TxnSOHdrNo` varchar(45) DEFAULT NULL,
  `TxnSOHdrNoRev` varchar(45) DEFAULT NULL,
  `TxnSOHdrDate` datetime DEFAULT NULL,
  `MstCustID` int(11) NOT NULL,
  `TxnSOHdrPoNo` varchar(45) DEFAULT NULL,
  `TxnSOHdrPodate` datetime DEFAULT NULL,
  `TypeTrn` varchar(45) DEFAULT NULL,
  `Remaks` varchar(45) DEFAULT NULL,
  `KodeSumber` varchar(45) DEFAULT NULL,
  `DelIndex` varchar(45) DEFAULT NULL,
  `ExtDisPersen1` varchar(45) DEFAULT NULL,
  `ExtDisc1` varchar(45) DEFAULT NULL,
  `TypePpn` varchar(45) DEFAULT NULL,
  `TypePajak` varchar(45) DEFAULT NULL,
  `TypeMeterai` varchar(45) DEFAULT NULL,
  `Meterai` varchar(45) DEFAULT NULL,
  `TxnSOHdrProsesdate` datetime DEFAULT NULL,
  `TxnSOHdrpostingdate` datetime DEFAULT NULL,
  `TxnSOHdrpostingflag` varchar(45) DEFAULT NULL,
  `OtoFlag` varchar(45) DEFAULT NULL,
  `KodeJurnal` varchar(45) DEFAULT NULL,
  `TxnQuotHdrID` int(11) NOT NULL,
  `MstApprID` int(11) NOT NULL,
  `MstSalesPICID` int(11) NOT NULL,
  `MstGRPSalesID` int(11) NOT NULL,
  `MstCrsID` int(11) NOT NULL,
  `MstPayID` int(11) NOT NULL,
  `MstEmpID` int(11) NOT NULL,
  `TxnDrawID` int(11) NOT NULL,
  PRIMARY KEY (`TxnSOHdrID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
