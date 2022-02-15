-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2021 at 07:16 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kurir`
--

-- --------------------------------------------------------

--
-- Table structure for table `calculator`
--

CREATE TABLE `calculator` (
  `id` int(10) NOT NULL,
  `currency` varchar(100) NOT NULL,
  `normal` varchar(100) NOT NULL,
  `express` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calculator`
--

INSERT INTO `calculator` (`id`, `currency`, `normal`, `express`) VALUES
(1, 'Rp', '21000', '28000');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(10) NOT NULL,
  `cname` varchar(500) NOT NULL,
  `nit` varchar(255) NOT NULL,
  `cemail` varchar(500) NOT NULL,
  `cphone` varchar(100) NOT NULL,
  `caddress` varchar(1000) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `website` varchar(1000) NOT NULL,
  `footer_website` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `cons_no` int(11) NOT NULL,
  `bemail` varchar(100) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `cname`, `nit`, `cemail`, `cphone`, `caddress`, `country`, `city`, `website`, `footer_website`, `currency`, `cons_no`, `bemail`, `date`) VALUES
(1, 'Kurir dan Logistik JNE', '12345678910', 'robialakbar@gmail.com', '087896277897', '  Jalan Ahmad yani Pangkalpinang, Indonesia', 'Indonesia', 'Pangkalpinang', 'https://robialakbar.com/', 'Kurir dan Logistik by robialakbar', 'Rp', 0, 'robialakbar@gmail.com', '01/29/2021');

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE `courier` (
  `cid` int(6) NOT NULL,
  `cons_no` varchar(20) NOT NULL,
  `ship_name` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `s_add` varchar(200) NOT NULL,
  `cc` varchar(12) NOT NULL,
  `rev_name` varchar(100) NOT NULL,
  `r_phone` varchar(12) NOT NULL,
  `r_add` varchar(200) NOT NULL,
  `cc_r` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(40) NOT NULL,
  `weight` double NOT NULL,
  `variable` varchar(255) NOT NULL,
  `shipping_subtotal` varchar(255) NOT NULL,
  `invice_no` varchar(20) NOT NULL,
  `qty` int(10) NOT NULL,
  `book_mode` varchar(20) NOT NULL,
  `declarate` double NOT NULL,
  `freight` double NOT NULL,
  `mode` varchar(20) NOT NULL,
  `pick_date` varchar(250) NOT NULL,
  `schedule` varchar(250) NOT NULL,
  `pick_time` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `comments` varchar(250) NOT NULL,
  `book_date` date NOT NULL,
  `status_delivered` varchar(10) NOT NULL,
  `officename` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courier_online`
--

CREATE TABLE `courier_online` (
  `cid` int(10) NOT NULL,
  `deliveryboy` varchar(100) NOT NULL,
  `receivedby` varchar(100) NOT NULL,
  `drs` varchar(100) NOT NULL,
  `cons_no` varchar(20) NOT NULL,
  `ship_name` varchar(100) NOT NULL,
  `s_phone` varchar(12) NOT NULL,
  `s_add` varchar(200) NOT NULL,
  `fromcity` varchar(200) NOT NULL,
  `rev_name` varchar(100) NOT NULL,
  `r_phone` varchar(12) NOT NULL,
  `r_add` varchar(200) NOT NULL,
  `tocity` varchar(200) NOT NULL,
  `type` varchar(40) NOT NULL,
  `note` varchar(255) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `book_mode` varchar(20) NOT NULL,
  `freight` double NOT NULL,
  `Qnty` varchar(255) NOT NULL,
  `variable` varchar(255) NOT NULL,
  `shipping_subtotal` varchar(255) NOT NULL,
  `mode` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `deliverydate` varchar(100) NOT NULL,
  `time` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `paymode` varchar(255) NOT NULL,
  `comments` varchar(250) NOT NULL,
  `office` varchar(100) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courier_online`
--

INSERT INTO `courier_online` (`cid`, `deliveryboy`, `receivedby`, `drs`, `cons_no`, `ship_name`, `s_phone`, `s_add`, `fromcity`, `rev_name`, `r_phone`, `r_add`, `tocity`, `type`, `note`, `weight`, `book_mode`, `freight`, `Qnty`, `variable`, `shipping_subtotal`, `mode`, `date`, `deliverydate`, `time`, `status`, `payment`, `paymode`, `comments`, `office`, `user`) VALUES
(1, '', '', '', 'AWB-173254413', 'alex saputra', '087896277897', 'user@gmail.com', 'Jakarta Raya, Indonesia', 'toto Hartono', '0878 9876 78', 'Jalan Ahmad yani Seroja II', 'Riau, Indonesia', 'Pallate', 'Mohon Untuk pelatakannya di letakkan diatas bodynya sendiri karena rentan terpisah', '60', 'Express', 0, '2', '2.20', '0,00', '', '2021-01-30', '02/02/2021', '2021-01-30', 'Shipment-arrived', 'OK', 'Bank', '', 'user@gmail.com', 'ADMINISTRATOR'),
(2, 'Yoga', 'Krisna', '78', 'AWB-419162472', 'alex saputra', '087896277897', 'user@gmail.com', 'Jawa Barat, Indonesia', 'Dora Wardani', '08 7856 2322', 'Jalan Jenderal Sudirman No. 75 Surabaya', 'Jawa Timur, Indonesia', 'Other', 'Tolong Dibuatkan rak kayu ', '75', 'Normal', 0, '4', '2.20', '0,00', '', '2021-01-30', '01/30/2021', '2021-01-30', 'Delivered', 'OK', 'Bank', '', 'user@gmail.com', 'ADMINISTRATOR'),
(3, '', '', '', 'AWB-358695461', 'alex saputra', '087896277897', 'user@gmail.com', 'Banten, Indonesia', 'saputra', '0876 8765 57', 'jalan Sudirman Jaya', 'Kepulauan Bangka Belitung, Indonesia', 'Other', 'Tolong dibawa dengan kendaraan besar karena mudah Robek', '75', 'Normal', 0, '4', '2.20', '0,00', '', '2021-01-30', '02/01/2021', '2021-01-30', 'Hold', 'Pending', '', '', 'user@gmail.com', 'KARYAWAN'),
(4, '', '', '', 'AWB-134030768', 'alex saputra', '087896277897', 'user@gmail.com', 'Jawa Tengah, Indonesia', 'Antonius', '087438476387', 'Jalan Jenderal Sudirman No. 75 Surabaya', 'Kalimantan Timur, Indonesia', 'Pallate', 'jangan Di Lempar', '75', 'Express', 80000, '1', '2.20', '13200000 ', '', '2021-01-30', '02/02/2021', '2021-01-30', 'Hold', 'Pending', '', '', 'user@gmail.com', 'KARYAWAN');

-- --------------------------------------------------------

--
-- Table structure for table `courier_paid`
--

CREATE TABLE `courier_paid` (
  `id` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `cons_no` varchar(20) NOT NULL,
  `book_mode` varchar(30) NOT NULL,
  `on_delivery` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courier_track`
--

CREATE TABLE `courier_track` (
  `id` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `cons_no` varchar(20) NOT NULL,
  `pick_time` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `bk_time` datetime NOT NULL,
  `user` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courier_track`
--

INSERT INTO `courier_track` (`id`, `cid`, `cons_no`, `pick_time`, `status`, `comments`, `bk_time`, `user`) VALUES
(2, 2, 'AWB-315920156', 'Colombia', 'On-Hold', 'DELICATED', '2016-09-21 22:30:07', ''),
(3, 2, 'AWB-315920156', 'Venezuela', 'In-Transit', 'CHANGE OF SHIPMENT', '2016-09-21 23:02:20', '');

-- --------------------------------------------------------

--
-- Table structure for table `manager_admin`
--

CREATE TABLE `manager_admin` (
  `cid` int(11) NOT NULL,
  `name_parson` varchar(255) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pwd` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `office` varchar(20) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `type` varchar(255) NOT NULL,
  `role` varchar(25) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager_admin`
--

INSERT INTO `manager_admin` (`cid`, `name_parson`, `name`, `pwd`, `phone`, `email`, `office`, `estado`, `type`, `role`, `date`) VALUES
(1, 'ADMINISTRATOR', 'ADMINISTRATOR', '09731', '087896277897', 'robialakbar@gmail.com', 'Office1', 1, 'a', 'Administratror', '2020-07-24');

-- --------------------------------------------------------

--
-- Table structure for table `manager_user`
--

CREATE TABLE `manager_user` (
  `cid` int(11) NOT NULL,
  `name_parson` varchar(255) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pwd` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `office` varchar(20) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `type` varchar(255) NOT NULL,
  `role` varchar(25) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager_user`
--

INSERT INTO `manager_user` (`cid`, `name_parson`, `name`, `pwd`, `phone`, `email`, `office`, `estado`, `type`, `role`, `date`) VALUES
(1, 'EMPLOYEE', 'KARYAWAN', '09731', '3116173306', 'robialakbar1@gmail.c', 'Indonesia', 1, 'u', 'Employee', '2016-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `mode_bookings`
--

CREATE TABLE `mode_bookings` (
  `id` int(5) NOT NULL,
  `name` varchar(45) NOT NULL,
  `services` varchar(15) NOT NULL,
  `deliverytime` varchar(12) NOT NULL,
  `observations` text NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mode_bookings`
--

INSERT INTO `mode_bookings` (`id`, `name`, `services`, `deliverytime`, `observations`, `estado`) VALUES
(6, 'SHIP', 'Container shipp', 'FROM MONDAY ', 'Handling, palletizing, storage, packaging,  TO Address Services', 1),
(7, 'HIGH ROAD', 'VANS AND tracto', 'FROM MONDAY ', 'NONE', 1),
(8, 'COURIER', 'ECONOMIC AND SP', 'FROM MONDAY ', 'NONES', 1),
(9, 'EXPRESS', 'Operating at hi', 'FROM MONDAY ', 'NONE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` int(10) NOT NULL,
  `off_name` varchar(100) NOT NULL,
  `address` varchar(230) NOT NULL,
  `city` varchar(100) NOT NULL,
  `ph_no` varchar(20) NOT NULL,
  `office_time` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `off_name`, `address`, `city`, `ph_no`, `office_time`, `contact_person`, `estado`) VALUES
(17, 'DEPRIXA-Bandung', 'La #36-45', 'Bandung Jawa barat', '900658120', '8:00AM - 12:00PM | 2:00PM - 4:00PM', 'Agus Setiono', 1),
(50, 'DEPRIXA-Jakarta', 'Serrania casa 31', 'Jakarta', '3116172254', '8:00AM - 12:00PM | 2:00PM - 4:00PM', 'Budi Sentosa', 1),
(15, 'DEPRIXA-Makassar', 'Avenue-75 #20-33', 'Makasar, Sulawesi Selatan', '0180004748', '8:00AM - 12:00PM | 2:00PM - 4:00PM', 'Susanti', 1),
(14, 'DEPRIXA-Palembang', 'Avenue-58 #22-55', 'Palembang, Sumatera Selatan', '0180008989', '8:00AM - 12:00PM | 2:00PM - 4:00PM', 'Ilham Abidin', 1),
(13, 'DEPRIXA-Surabaya', 'boulevard 80 #00-00', 'Surabaya, Jawa timur', '01800012121', '8:00AM - 12:00PM | 2:00PM - 4:00PM', 'Sutiyoso', 1),
(12, 'DEPRIXA-Medan', 'Avenue-55 #12-78', 'Sumatera Utara', '0180002323', '8:00AM - 12:00PM | 2:00PM - 4:00PM', 'Dede Parto', 1),
(19, 'DEPRIXA-Bengkulu', 'Avenue-5666-212-3', 'Bengkulu', '70121212', '8:00AM - 12:00PM | 2:00PM - 4:00PM', 'Inabel', 1),
(20, 'DEPRIXA-Malang', 'Malang, Jawa Timur', 'Malang, Jawa Timur', '0290000045', '8:00AM - 12:00PM | 2:00PM - 4:00PM', 'Soni wardoyo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `online_booking`
--

CREATE TABLE `online_booking` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `note` varchar(200) NOT NULL,
  `name_delivery` varchar(200) NOT NULL,
  `email_delivery` varchar(200) NOT NULL,
  `phone_delivery` varchar(200) NOT NULL,
  `company_delivery` varchar(200) NOT NULL,
  `address_delivery` varchar(200) NOT NULL,
  `scountry` varchar(100) NOT NULL,
  `sstate` varchar(100) NOT NULL,
  `dcountry` varchar(100) NOT NULL,
  `dstate` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `service` varchar(200) NOT NULL,
  `courier_name` varchar(200) NOT NULL,
  `freight` varchar(20) NOT NULL,
  `Qnty` varchar(255) NOT NULL,
  `width` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `length` varchar(100) NOT NULL,
  `booking_date` date NOT NULL,
  `collection_date` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `reasons` varchar(255) NOT NULL,
  `delivery` varchar(255) NOT NULL,
  `tracking` varchar(100) NOT NULL,
  `officename` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_booking`
--

INSERT INTO `online_booking` (`id`, `name`, `email`, `phone`, `address`, `note`, `name_delivery`, `email_delivery`, `phone_delivery`, `company_delivery`, `address_delivery`, `scountry`, `sstate`, `dcountry`, `dstate`, `type`, `service`, `courier_name`, `freight`, `Qnty`, `width`, `height`, `weight`, `length`, `booking_date`, `collection_date`, `status`, `reasons`, `delivery`, `tracking`, `officename`) VALUES
(1, 'alex saputra', 'user@gmail.com', '087896277897', 'Jalan Ahmad yani Pangkalpinang, Indonesia', 'Tolong Dibawa dengan hari hati karena mudah retak', 'Cokro saputra', '', '087896277888', '', 'Jalan Buleleng', 'Indonesia', 'Kepulauan Bangka Belitung', 'Indonesia', 'Bali', 'Other', 'Express', '', '', '1', '23', '100', '75', '25', '2021-01-30', '', 'Cancelled', '', '', '', 'user@gmail.com'),
(2, 'alex saputra', 'user@gmail.com', '087896277897', 'Jalan Ahmad yani Pangkalpinang, Indonesia', 'Mohon Untuk pelatakannya di letakkan diatas bodynya sendiri karena rentan terpisah', 'toto Hartono', '', '0878 9876 7865', '', 'Jalan Ahmad yani Seroja II', 'Indonesia', 'Jakarta Raya', 'Indonesia', 'Riau', 'Pallate', 'Express', '', '', '2', '43', '111', '60', '32', '2021-01-30', '', 'Approved', '', '', 'AWB-173254413', 'user@gmail.com'),
(3, 'alex saputra', 'user@gmail.com', '087896277897', 'Jalan Ahmad yani Pangkalpinang, Indonesia', 'Tolong dibawa dengan kendaraan besar karena mudah Robek', 'saputra', '', '0876 8765 5786', '', 'jalan Sudirman Jaya', 'Indonesia', 'Banten', 'Indonesia', 'Kepulauan Bangka Belitung', 'Other', 'Normal', '', '', '4', '12', '100', '75', '43', '2021-01-30', '', 'Approved', '', '', 'AWB-358695461', 'user@gmail.com'),
(4, 'alex saputra', 'user@gmail.com', '087896277897', 'Jalan Ahmad yani Pangkalpinang, Indonesia', 'Tolong Dibuatkan rak kayu ', 'Dora Wardani', '', '08 7856 232287', '', 'Jalan Jenderal Sudirman No. 75 Surabaya', 'Indonesia', 'Jawa Barat', 'Indonesia', 'Jawa Timur', 'Other', 'Normal', '', '', '4', '50', '120', '75', '25', '2021-01-30', '', 'Approved', '', '', 'AWB-419162472', 'user@gmail.com'),
(5, 'alex saputra', 'user@gmail.com', '087896277897', 'Jalan Ahmad yani Pangkalpinang, Indonesia', 'jangan Di Lempar', 'Antonius', '', '0874384763874', '', 'Jalan Jenderal Sudirman No. 75 Surabaya', 'Indonesia', 'Jawa Tengah', 'Indonesia', 'Kalimantan Timur', 'Pallate', 'Express', '', '', '1', '23', '175', '75', '43', '2021-01-30', '', 'Approved', '', '', 'AWB-134030768', 'user@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `scheduledpickup`
--

CREATE TABLE `scheduledpickup` (
  `cid` int(11) NOT NULL,
  `name_courier` varchar(20) NOT NULL,
  `courier` varchar(255) NOT NULL,
  `rate` varchar(200) NOT NULL,
  `services` varchar(20) NOT NULL,
  `Length` varchar(20) NOT NULL,
  `Width` varchar(20) NOT NULL,
  `Height` varchar(20) NOT NULL,
  `Weight` int(20) NOT NULL,
  `WeightType` varchar(25) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scheduledpickup`
--

INSERT INTO `scheduledpickup` (`cid`, `name_courier`, `courier`, `rate`, `services`, `Length`, `Width`, `Height`, `Weight`, `WeightType`, `date`) VALUES
(1, 'Fastrack', 'imagen/hermes-logo.png', '15.00', 'Normal', '23', '12', '15', 12, 'Kg', '2016-02-21'),
(2, 'World Courier', 'imagen/collectplus-logo.png', '15.01', 'Express', '34', '19', '25', 3, 'Kg', '2016-02-21'),
(3, 'Delivery Express', 'imagen/dx-logo.png', '14.12', 'Express', '29', '11', '14', 12, 'Kg', '2016-02-21'),
(4, 'Red Line', 'imagen/ajg-logo.jpg', '7', 'Express', '12', '22', '9', 1, 'Kg', '0000-00-00'),
(5, 'Full Services', 'imagen/dpd-pickup-logo.png', '10', 'Normal', '22', '23', '12', 2, 'Kg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `subir_imagen`
--

CREATE TABLE `subir_imagen` (
  `id` int(11) NOT NULL,
  `nombre_imagen` text NOT NULL,
  `imagen` mediumblob NOT NULL,
  `tipo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subir_imagen`
--

INSERT INTO `subir_imagen` (`id`, `nombre_imagen`, `imagen`, `tipo`) VALUES
(1, 'ss.png', 0x89504e470d0a1a0a0000000d49484452000000f00000002d080600000090f5e663000000097048597300000b1300000b1301009a9c18000006c769545874584d4c3a636f6d2e61646f62652e786d7000000000003c3f787061636b657420626567696e3d22efbbbf222069643d2257354d304d7043656869487a7265537a4e54637a6b633964223f3e203c783a786d706d65746120786d6c6e733a783d2261646f62653a6e733a6d6574612f2220783a786d70746b3d2241646f626520584d5020436f726520352e362d633134352037392e3136333439392c20323031382f30382f31332d31363a34303a32322020202020202020223e203c7264663a52444620786d6c6e733a7264663d22687474703a2f2f7777772e77332e6f72672f313939392f30322f32322d7264662d73796e7461782d6e7323223e203c7264663a4465736372697074696f6e207264663a61626f75743d222220786d6c6e733a786d703d22687474703a2f2f6e732e61646f62652e636f6d2f7861702f312e302f2220786d6c6e733a786d704d4d3d22687474703a2f2f6e732e61646f62652e636f6d2f7861702f312e302f6d6d2f2220786d6c6e733a73744576743d22687474703a2f2f6e732e61646f62652e636f6d2f7861702f312e302f73547970652f5265736f757263654576656e74232220786d6c6e733a70686f746f73686f703d22687474703a2f2f6e732e61646f62652e636f6d2f70686f746f73686f702f312e302f2220786d6c6e733a64633d22687474703a2f2f7075726c2e6f72672f64632f656c656d656e74732f312e312f2220786d703a43726561746f72546f6f6c3d2241646f62652050686f746f73686f702043432032303139202857696e646f7773292220786d703a437265617465446174653d22323032312d30312d32395430303a34333a35382b30373a30302220786d703a4d65746164617461446174653d22323032312d30312d32395430303a34333a35382b30373a30302220786d703a4d6f64696679446174653d22323032312d30312d32395430303a34333a35382b30373a30302220786d704d4d3a496e7374616e636549443d22786d702e6969643a38646664353031372d353130322d333834302d393639662d6232653065343764646165642220786d704d4d3a446f63756d656e7449443d2261646f62653a646f6369643a70686f746f73686f703a30326639376430372d303365332d383934662d386430652d3031316137373131633561642220786d704d4d3a4f726967696e616c446f63756d656e7449443d22786d702e6469643a37646136333164332d366134612d336334392d393666622d616466363335373038666264222070686f746f73686f703a436f6c6f724d6f64653d2233222064633a666f726d61743d22696d6167652f706e67223e203c786d704d4d3a486973746f72793e203c7264663a5365713e203c7264663a6c692073744576743a616374696f6e3d2263726561746564222073744576743a696e7374616e636549443d22786d702e6969643a37646136333164332d366134612d336334392d393666622d616466363335373038666264222073744576743a7768656e3d22323032312d30312d32395430303a34333a35382b30373a3030222073744576743a736f6674776172654167656e743d2241646f62652050686f746f73686f702043432032303139202857696e646f777329222f3e203c7264663a6c692073744576743a616374696f6e3d227361766564222073744576743a696e7374616e636549443d22786d702e6969643a38646664353031372d353130322d333834302d393639662d623265306534376464616564222073744576743a7768656e3d22323032312d30312d32395430303a34333a35382b30373a3030222073744576743a736f6674776172654167656e743d2241646f62652050686f746f73686f702043432032303139202857696e646f777329222073744576743a6368616e6765643d222f222f3e203c2f7264663a5365713e203c2f786d704d4d3a486973746f72793e203c70686f746f73686f703a546578744c61796572733e203c7264663a4261673e203c7264663a6c692070686f746f73686f703a4c617965724e616d653d22524f424920414c20414b424152222070686f746f73686f703a4c61796572546578743d22524f424920414c20414b424152222f3e203c7264663a6c692070686f746f73686f703a4c617965724e616d653d224b757269722026616d703b204c6f67697374696b222070686f746f73686f703a4c61796572546578743d224b757269722026616d703b204c6f67697374696b222f3e203c2f7264663a4261673e203c2f70686f746f73686f703a546578744c61796572733e203c2f7264663a4465736372697074696f6e3e203c2f7264663a5244463e203c2f783a786d706d6574613e203c3f787061636b657420656e643d2272223f3e60dd2c28000026f749444154789ced7d79741cc779e7afaaafe9b96770f30049f0a62e4aa42ceba2a5084a6c5952b25953765ebc04b111a85d67d7491cc7d4be4db27979fb127137b11527712c427920e8bc4d96ccda3936762cd1b62c5bd64949a6244a0209f0c43500e69eeee9ab6aff986ea03198c14140b6e4e5efbd7e047baaabbfaafeaabea3befa8a70ce71155771151f4c8885426159151042c29a563ea6954a3f3f323afacd8686e45f390efb41341a2d1a8681e6e646001008211480e57f56d334a4d369088200dbe6289b0e2ccbc4c4f828020105c15008940a100501f97c0e5aa904db71a0a84168650bd17010b7dcbc13b6ed606c6c0c84905a24060104b66ddb965e5643afe22ade87100541585605822094f57256289ba62050f181f3e72e3cd0dcd2fc03c69c2f0038290882250802745d9f7e86528a743a8d8b172f61cd9ad5701c67798d1025b4b7b7637c7c1c9cf3ea814cdceb2aaee2670e943186e55d8e2d8ac21365dd1c8f44a358bf61032cd3baf3ccc0e0b7755dff8db74f0fc408a14e2010e0814000aaaa42922494cb06285da971c521080282c1208ac5220a85028ac5e2aceb2aaee267116236975b762582207c5d55953bf2b9fc67454914e2f1382cdb899e3d3bf83fdb5a5baf350ce331c69c01c61800d49292cb06630caaaa62f3e6cd9898980063acee3b8e1e79f22080c71651ed1080c35ddd3d87162ad8dfd77b10c02e007b7db733000e0138ded5dd33b4c0b30bd17308c0a1aeee9e4c8de7770178c5fdefeeaeee9e930bd1bb000d0f7575f71c9fa76c028067925cd1fb16a87b104002c0c9aeee9edd0b945fb0ed6e9963003a50f9268f7675f71c767f5b56dfaf00fd4be2c57dfb1f9ec58b941082e55e9c73844281df9765e9ff960a455cbc7801922462cdead5c866325da77e7ceabb966ddf4e0885653928164ba0942e82e6a581f38a24561405f97c1eb95c0ef97c1ef97cbebae8ae4556d901e0b1febede63f50af4f7f576f6f7f50ea2f211f656fd9c70ef0fba1faa1e128ba0e52080a7ebfce6b527738583b703b39968a1fee9f4fd5d7762ba423c8699fed8e50e88c5d052b3edfd7dbd9da8f45b072ab4deeb0d5e17cbedfb6a2c95fe25f1e2d1234fcee24571910f2f08c761c57024fc5b254d0f957256e754e60256b5b5229e4c627262a2ed8d536f7c65fbb6edbf2e2bf2b3945288a2084110644288b952340015491c0a85d0d1d181a9a929388e534b127b9df6e87cd2b5bfaf772f2a33f7defebedeceaeee9e1355bf1f00f084fbdf39d2da659e83a830d963fd7dbda8f33e8f09eb49108f8e5dfd7dbd07aa1810a87c5c0038812b8337784fb8b474cc53d6ffbe938b914a8b852b290fd4a065be49c9fb9673da5ef57d4ea0a25954d3bbdcbe5f29fa1fad96ae7e1c3df2e4342f1e3df264e7befd0f9f00004a08c7821738280504410421149cf39a97e358e74291707722113f5ed2caecf43b03c8e50b906519f95ce1da37df78eb58a9a47dd2614cbd78e9f22f8c8c8c7eae5c36a22bbd94c51883288a884422b02c8b97cbe5e9171c3df264028b6478578df454c95933a5fb613de638ded5ddb3b17a707675f79ce8eaeeb917c0a3eeadc75c69578d5d6ef99a1fdaa5e390bf6c153c265cb2347427194f73f0e85c482ad41d34cb8437911cc60cd32f561b98d577fd7dbd8f61f6f7b9b7ce64b3dcbef76349f4bbd27951bcb86fffc33579914a8463a14b200caa2242e065185a069224552eb17289a20859961108a808aaeae5d5ab5bfffdbab56d5fa19468c3a3e3d00c0bb2a2402feb2de786cefd756a7ce20fbff7fd67bf3a3c3cfac75a493f6859ac5d96e54649149b45516ca694361142560b82b09952ba8d10b28d10b29d73bedd719c1b017e2b63ece73967bb0008a8980202e7dcfb57608c09a1508836343408b22cfb5ded9dbe4eb922dbcded788f390e7775f73c345f7977607bef9aa566bbb33630ff2c0d546c37ffbf7e2cb68e5af0da71c865e20c808e0554bf69b5f50ade5713aeb4ecc48cdfc0abbbae36e0f69d47e709dffd63a8683e4045cbaaf97d56a8efaf987eac002f8a8b967d444429378a6276120d4d6bc001c0273949a0a2a64a9288d74fbd59dcb4a9e33f878281cb172e8f7cbea4698d8eaa4295150008a552139f6f5fdb8e1d5bb7221289fe4e3697bd69786474ca72b8c41c5bd08a79475503715d2fb7889224045555d1f5b2402975a2d1e884cd090f06838212083ecb39392d08d4b66d9b4a92c42ccba2a22872c7712008022384889c73c9d79269f56fa126bb1fd81b70fef20750619c21cc48ad85701c334e2ebfa4f63ee242d2ac161d7e265c4c1db3e0329de7d8f1681a72e9aca9fab91ac49c41b302f006dca1aeee9ea1febe5e4f9b58cc00c87475f79c74279da73133a1cdeb8cc332fbbe0a5742ffa279f1e891276bf2e2126c600e4205504104a1020002c21dd7193533900541c4858b97363726e367d66fe838c43906464646be689ac67ac761701c0681528422710c5d1c06e34c02e71f1d1c3a07ce39c2e12014494638142e59b67d9e12120d06830301452e8442c1645373f33fbe70f2cdb1782c3c2c29c1519b8ba6225296cfe7d1d0d080a9a92924120964b3590483412e4992c518f3b77341f5cf658403f0d98655f6afd791879760037acf577f50efff35eb7155f5032eddc76b30e4b4fabc147bd46da3d73ebf87f5a4fbae4ed466ac6539ccead07210334e26cfc6f4eaeeacf9d06c5a4e54799a875019bc0bd1b7dcbe5f31faeb15704dbe59bce8d9bfc01538b1289550ca0c83730bba1d40bea883fa9c44a228de92cbe6fe349bcd3d47a9d0bb7a6dfbb36f9e7e27cf6d03898626e4cd322441a84c0284209fcf23a8aad8d4b1ce59d5d6f67cb221f9770e634135a09e9124f1b46118094912df0087264a623c1c0e67b76fe980651a0886c3100883653908040228954a505515e572198aa2c0b66d98a6c929a57e45c3ebd083478f3c79b0bfaf77a1269f0030ad82b98c7f2536a0c724d5aaa957d763aedd560ff51c6e8b9ec5ab70d0a565a8aa5e4f72d453a17755955b165c89ee975e190070a5580640a2bfaf37319ffdeae2691fcd9e76b41096dbf7cba57f162f2e82de59bc08004b5ecba1828442fa0272e3efc2303498a609d39ab90cc308b4b5b6ac4d8d4f7e616a2af3b5975e7ef5efdf3cfdee75178787313e72197a610abaae211808a0b9210645926118061a1a1aceae5ab5ea33b178fc2f5545495996758e100c504a5e741c47332d53711c275f2e97854d1ded68694aa27d753344c2609a2654559d1ec0baae231008c0b66d689a461cc7a10070f4c8937ef56f211c426516af767e4ccfda4b9440de73d38c5535192c84ce3a76e992eddf2aa6ab36013cfaead1b5d20e2c6f223959c3c35b97962a07d05eb78e13ee337eeda22656a8ef812ba77fc9bcb86fffc3f7eedbfff0ac89e00a969138a820c1212212f118e20909922802a46212534a7fa006e45f2995f44f65329947b2d98c2c508a60300c8b13b444124525a0e88e653409011996e58003304dd3d6346dd3e4e4d4afa6d399dfd9b061dd7e59967f6cdb4e0ba5441345314208d16cdbd6755da7822842d70dc20022cb9263db961d0caa01c330b8a228304d139452a6aaaae8388e2781a7d5bf7dfb1f4e02985e62aa52c1e6b39dbc4e5faa03a796e4f22fc7d45cf077bdc48fa1325b3f0d60b7ef373f132e6532995e5aa9d1ce85bca7cb7198cd82db366fd9a5962fc153e77761ee8451ad9a1eefeaee79c8b77474a0bfaff7f03c93ecb2fa7e05e89fc38b1e5c7b779a175d0f744d2c2b9a82310ec7b690c915502ae9e09cc3b22c5636ca3f4a3624fe68e0ccbb69810077edb9fdec830fdcffdb9df7dcd3bd65dbb6cf2612c95f894442ff984ea7e1301b8a2c239fcf6f3a3734f467a9d4c4e704919e21042fe4720510c22765592a50422745512c32c66cceb9220882502a953800c3b6986d9a66b3284acc711c471445c7b66d8752cadd41ef859bd5951eee87be17958179ccfd382b09cf6ef6bf7b41278a6b7b7b6ad3ae2abafc7f2f6a40b9769df75c677f5f2ff75fa8441101aeea57f5acdfebbb12f6af5f4a3e5d83166f70cca779003e4fb32b05bdfe9c4f0a2fb7ef578afe39ef773dd2d3bc78f4c893757971d9e150841018a605c63852a9490854c0fa75ebf0ea2b2fff27ad588cb6b7b7fff55d77ddf9e9f6b56bbfb86e5dfb11550df4d9b6fd9dd5ab577f66ebb62dbf158b46deb16d1b4135a47090b58ee34882208c964df3a662b1f0a056d23f562a69f799a6191145919ba6a900704cd3144551940941cc30cdfd53e9fc1f958a25d3342d1b804d08b101d8004cf7f2775a4dfbc80d77f46c9d276a95c10ce32eb4d4320d77d078eff6cfa68bb227abc2303b6afcbd94808ac584ed79a8661cbfd7775936b02b2917adc2ce73ef500dfbd493869dee7b6a61597dbf02f4cffbfe7dfb1f5e0c2fae4c241621049452948a25886dab100e85d0b1a1e3d4d6addb3eddd4dcfc4c341acd4c4e4c8203104511edebda6159d6487353d3e3a150f06941103b4747c73fcb1cd611548300c147b4927e311209bd66db4e8a584e361209515dd7493299b42dcb7282aaca8b258d13c23eef70f205dbb10ba2282820c4608cd50bd55c8cfa77181526efa81579d3d5dd93e9efebf554a30398bd24340755618a87ea30c4bcd2ac2af8c33f5097a4cefabca519001beb0d7ad7a1e395f56345968fdc89cfbf4e5bcf41e4c55c77d4b85fb7edee92d261b8dedbfebedee335da7ac57dbf5cfa5d2c89178f1e79f2c0befd0fcf89025ba204aed8bf549040089540488410c073428ba288747a02a65116366fdbf6f52d5bb77c4314854c3a9d0607100caa4824124824e288c562281b0644417caba5a5b9bfb9b1f12f1a1b935f58b77ecd27dada9af781397f4a40fe860af49f5535f05d51942633999c3d70e6ac79e23bdf7188400541a0b7970deb338cf1464205319bcbadcd64b2181f1f47a1508028cecc4fae5db1a0fae77e684f4ad69bbdbd8e7c6c3e55dbfdf8fe385c7f98a5c7848b7186791340a6ca665d74045615d32d14985f2f08a166d4d315c0bffe5c3734d1a5d1f3e4fa69f1f779bdc9e451ef59ccb41bc08af4fdb2e85fac29e23aace6e5c5450d604228045181a4445b53175f7b2c75fea5bf358a137fe1940bdbca0687613a1028010127b665a26c18a22008b6a6e9b04d0de1501000200802244904e71c92244396650483213087e52549ea9565f9f16028f87f82a1e0dfac695f738a8a7432959a283cf5f489b2619a5c55d50da6657d32972b7cf9ab7ff5c40f9e7ffee5bfd3cbc6fa72b90c7012620c3b19e3e09ca054d2512814416925f413b39d060b31fc74c85a55a00480693bcb2bf3747f5fef13fe72fd7dbd1dae141bc4ec20fa2549cffebedebd6e5491673f574f004b91885e907df5b2512dcc71645549bd2b569fab34924717a1fad772aa4df75dbde7ddfb5e3b0f564d0057dcf72b4cff9278d11542b320568232ea8312017a71ecaef1b34ffd16b7b4463d377c23896e5795e4cd27a0c4335cd7c202e1dbc7b2e6670d2176ad51e64669d2122385cc48222cff31a5f4b42ccb25ceb903c01b4cbcb2a590820a026cc698a2068a8c339c1d1cc22b2f9fc4dd3ff711343636ad19191dbf8d31fe91af7ded6bbb462f5f5e954a8d85b3d96c6462625c7ce0c15fc6e62ddb502e1b1045aa4a22b6c5e33130c60170388e0d0088c7e3c01202febbba7b8e7b6b78a87cc05a6ada43be0f7c0015af67adea8e0378a4c687f63e46a7ebf05808d5aadabcbb70fca80ab25f706b247c76beef9effef638b583f4fd6616e8ff987e6db1850454bf5068b4545507575f71cf2459b3d818a6308585edfaf04fd8be6c57dfb1f3e7ef4c8937579519cbcfcd6bc1550414a16a6ceffbbcba7bff360b154861cdd800d3b76838556ef18cbe58eda4c6ab54c1611d570420c2604963d0d7bf4650c8d9fbb69fdf5f77f68f2fcf32972e347f787632defd8b62502702449564dd3dc4908d94e08d10825ff4c059a1288d0c639ee144561cfb163c76f488d8d6f98181f8d148a7955d74b926598302d0b8661a1582a6170e81c3873c03983e3f000806d15db97c19f84c3cd3ab254f5ef302aaad701d40997740771a75b77f542fca3a848887a1f69b10e90c3a82c91d45b86588c34f447942dc874ae9defa97ebbdc0962295ef95a3667f5c6894716599757cf2eb78ea52e9d3d828a19d3d9dfd7bbd75583afa8ef57827e172bc68be4f97ffdeabc4f0a82b42e3775f9c8db6fbe7e97d4b813abb6dc86d68e9d1024893b96431c1038960996390d0926862f0e2293cd42a60c3baf590baab6b158b2e5bfc49bd6fd0f4204ca3997745d6fcae54a8f170ac58f4b22e5940ae94040993cf9eaab8dc78ffd5d3c3d9952002e32cec05925fcd2761c58a60dc31dc0a55211dbb66dc717bff4e71044019c13280a7da12119bf83313627474f7373f322fbea2aaee2830371cb8df7d5fd91520a2d3fa5a7d2a589c4b59f46dbd6db110a2a60dc81553609630c9c73d8b68d330317d0e8bc8e642c04292c412b1671eaa577116b68a78e99ffdd0ffdc267ce87622dc74449a1b22c3349361d701eb06d078c59ab0921ab6dcb42b158443a93010781655a609cc1b2ecca655bb02d0b9665c3344d0c0e0d2193cda2a9a9099c3310d004e768e51cc33fc13ebc8aabf8a961fe6524ce090465436cdd6d2da1e07aa88a00dbb6c0188363db701c07b6e3c0611cedab621879238753a72f8352e0fa5b7f11b95c0993e52244b135a2dbf21f041de3144479900a52d661fc0238030771f7123b08068348261248a5c691cf175128e4619a161873dfe3b0cabe0902041501bbb626a197b220ae74b56c3b94ce6436037307704bcb55097c153f7b10874e3f5bf74702b49834fa7b76f8863d8a22c2347438cc01b31dd8cc01731cd88cc03172c80ebd8acb6905e1a666505141c189800424706d0c6deb3662f4f2f9ed236f9ffee6b6dd0f7e341c6fbbac2a324d3b0c54a878891963906505a150084135004dd351364c9866190159423428211c9411092b880465343424b1637d0c76390fc688eb1c23515996af8946a3cf78f9b7aee22a7e9621ae5e7f4dcd1f08019103897cd68efde8cc48eee35c2f81d97665003b95cb71182cc7814c08622ddbb186071027e7c0c39b90b56d504bc744b60865e03bd8b8eb1340c3ee7834d1b483c3395fd24a1c948210024114204912545585aaaa082832440158d51c41433489b606158a2c4292040802056380282bb02c1b5a21036fa8728eb061985b57385f5e5df892e33d52ed1cf279a84fb8bf2f7bf74e7f5f6f1a15c7d8bd0b16ae5fc741f802f05dda161b08f2342a0e987a1ee6f70457d26e2f64b4abbbe711dfbd59f5b8edd9551d8bfc4182c8796d49c53962f9a90bbf3636a975eabc1d020dc3b6cce974b28e6dc3660c215a06c90fc2c93c0fd1513062ad4373c306d0c9b720db97b1362ec196d7e3fc3b3f44a2b9fd72d9bcfe295511cd7028349a99ca8013010215c019200a22026a00a224411408da9bc248c65410ee409125844321041409aa2a411238f4b28d72710a8e6d43a01c9c835242360b5420e058ccf2c072517339c3c7e8279633d8aaeaf416ffaf380aaa7f6e06442f687ee322abd88525ee3b5e2e96d1ee27e00b5bad538f178cf18185583930613608a130f45cf36bcf1cfdbdcba3c558c38dfb20485b0166833b0e1c66c3302cc8928400cb60fcf24bc815390c46d1b6268964532b42411585fc7a04d430464747502e8c20b1f626fdc2f9cb5afbfa76302268de4e20ce391cee4010c58af41505702e42d38a08ab806d134423416c6c6f02631c84009c339856117a7102b66d818a14a01c94d056cb34e38cb19fc487f1187a08985ee2f032421ceaeaee596cb68e05e14ac9e5ea1607e0dbecee4d34f3ec579d86bb8492c0ec58eef71c57d26e1fadd35a4f753d6e404607e689a4fa204034f5ecdcbb8480d976ba6dfd35df073bf9a036fe438c5b221a5ad6c0b10dd8b60dc3342113070e6c18c22a88c92444fd3c2c87c3b26d44e22d6096065561d8bc7d27a6b25b218457e51a1ba3207040c1057fb648ce1c5795960150082245202041914410c2615a36f29a097080311b9228c2b438b2d929d88606498c5476473116d6747d03633cf35eaad2ee0e916986ae0a9b9c131fdb3f93de74d66f3ea9786f5777cf89febede275051bd77a322453a5159fbeb4065006e74378bd72cb7409495b76ff5a4efff8b95a873f633d7831b3ce10ff6af6946b8e5fcd92cbc763e06374ba4db4e7fbbbd7c64fedc62d393a5af3c5009753dd0d5ddb3b1ba1ed4588b7553b6ee4525fff262d7797faa10d3630373ef728052818a921ce144403137014318831a69048101c7b6c02c0b055303213a42d104744b84ad73505058a51428d791991c43c69a4230740ee1789ba306da4756af6a83a669d0394b03049c3170422a0e6f4a41a8086e9570c39626c44304c32323884582884582b06c023994002fa52010405544704b4359cb22148e402000632c5e2c6adb08c1ab966daf7802791fa68309fa67325426507f2f71bde0834e54a2a94ef8ca0dc14d65eade3beed63fe41b04f5cacd8713a8a4c8f5f6b8eec2e2031216153ce1db08e147278057fafb7aa73750d428e7454b9dc4ece8b20ecc6ef731cc0d2a39e86a118f606efcb63f375575ff01ae4aed1bbcf3a6777dbf414cacbea9e60f822066d313c3c7ce5dfefedd5c0e22ced2b0f2c3b02054822b6c0b65c3409a73046800a69647516b8450c8a1597c15d1a68d701047716a04a317a6b0e186bb4b9b1a92dff8e10f7f041082eddb77e40821603e4b55142588920ca3ac6175530cab5b1ba169454483125445462c2ca17d4323288f60686818854c01e1b08c522187e6b60d102ba9ba6292246e91030a2627a7409779f6d33cf018c51fa6f8e83c8900aa07aa875d983d28fcbb64923e865f54b97aa88a9d3e808aeaf8d0129c6bf5e8f7bf632f2a83b2faf403cf277010c0a3be72436eb9e3be840a9d986da74eb7db6d43277c9bf07d66cb5e54a4fcbdeefb3ababa7b36d6aac7d79ea17dfb1f1efaa00e5e0010134d6b6bfe4089608a72e8e8c66d3b6f1f3d7fea5324fd8a38357109136c15d46813c02c380e03774c24950c6462204c2d0c5e98424929a19da621446308365d03757514badc6a4ea646f287fbbe766b40125bfeed273ef1a98658747adb1f631ca22820a004603a04e026b66c4aa2a1f1465cba9445766a12914800db3626115403181f9fc4a5d75358d346502ce621cbb2a7de4b8562e10e450dac5155f5f27bd8779e1438800a6324509104f512dd5533d01cc78acf769be571f5dd9fb75c3df4cf2427cf6026e1f852f7f426b0b0c3c79bc81ef20f747750a53123f5fce54eba654ef6f7f51e82ab69b874cf6ab77f2ba7ab127bdb33ab336aecc26c075675ff4ddbbfbec13b6fe68bf72ba8a16530f7caa2ac65a824f2c4ce9b6ffff1a6edd7960489407026b03a9442ab7409627100a9f36f2237fa2eb6356571db161b776e77900c1bb834e9209b4e81d93a6c218abcc671e1ec40ec89bffcf29799a9ffed9977dffefbbffcb32f7d321289201a894014286449402050d9a194cd1640898de686001a63126489a158cc636a620ac562119a56422828a36cda98cc97904d8f61627212baae83338e42beb8e7c5175e38343838d83e30308081811a66c232e0e6d69a0e4877a5c161d4d8ba06cc65201faad552afce6a46aadebb5aafdc1cb8ccfa84fbee8da8649818826f2b647f5fef2bfdf31cfd320ffdd5d885b9193cabebf2a4e8891acb57fecc9840ed3dbbf7a2d2ee03a81c59f374d556bde9c9cdf74c753d5ebfefc58c2dfd81f446534a08e65e0067a65a2e8c3d521c7bfe0f92315909c59a70d3756b70cfae20ae6bcba0999c43e1e273187ceb0564b37994f5121ccb805ecc606ce41286ce5fc4e0d039bcf3f63b304b69306d4a3af9e273d79e1b1c58572ae4040e86813303181d4f215fd491c91791c9e64108414b6b1b4c4450b29310d5d508849b116bbb06426c3334ba1e3476239a36ecc16d9d9fc29efbf6a379f5169c1b3a03d3b2208a225a5a5b79480d86ce0cbc432f9c3f870be7cfad74bf79d2f7b82701bb6692b71facb1057129f62f307760566f5c58accd0bcc247c7ba4abbb27e36a07fed4419ed77c3e69bc98ed779e3651ef7031cf2b3cdf46faeaf7ccd9b0e1b6e1a1aeee1e82caceaa4e54b67426aa9ea956c3fdf5f8ed646fa5a0fa5cab0f044442aa964b09e058167293e74a9c591d85f4e510e406acdab01bd15803ace269948d4968650b969183c445388c438aae0717e388af8e60935c46319f838a20e2c924d6766c0573181efc54046fbef62226c72e2135368a2f7ff9715cb3f316acedd802d330c06c130a7170dfc71f80616878f372086004931603c226a64c074ffd68045448a1542ac028eb383f568056fa31b46216bb77df8cf6b56bd1b17153fe9aeb6f3a16199b3c2f0a2b7f881a6618a27a09e2102aaaea6398d9ba06d4b01f7d3b5baad725876aa8b69d55f7eb95ab8544d5bf5ecad37be1eed24125bff57c93c1a23dd0fef7f8e049f793f5cab903702f663bb0a6dbed3303a63ded5ddd3d8ff65712a87b5ee9c3a8dd37d5fdd7e9b6e5a17dfb1f3ee99e3bb4178b77e8bd6f4009664ec026e02084502a48d7e8c5cc6f96b223d7505185248a4834b44208ae810d05baa6636c2283b5ad0db8fbd6ed10030d389b69c657fef655bc78ea12ee79f057f11f3ef7fbf8f4c3bf81bb3ff64bb02121dab20e5b6fb8199228830a0a22c916a8b126a42627f1cee93731363e81e1d1095c1a9bc47856c785b48e7ffdde0bf8e653cfe05bdf7e1afff00fff88a7bef54d9c78fa5bf8f6b7fe092f3cf77dbcfbee699c3ef32e865323b8303c8cc7bff42778fc4b5fc4d78e1e89bc7366686dbc791d94483394c88ac74177a2b2197b96aad835739652a7cb701e664938575df54e99ab9614b5d4cf6af5b55eb95af054c3e973995c89e83f456f212ce8c0ea9a399665afd7f6febede842f226da8abbbe7709d72bb30b304573dc8bd774e1f4d53a5e154abc0b512d2d7ea3fff72da71008945e6667e5f41b49c2a2fade328b9f1377f333bf6f6af4ab2a4502ac3d00b302ffd001c14b032286b3af492068706115df321d0581bbef3cc0bf8fafffe5fb871f74d181e7a1b93976514f239500a284a10e18635281b366ebeeb63c8e772208442516414725330751de180042e31509120cc2d344a1cebafd98678731332e9346449462c160348657f6f734b1b98aea3f8e2b390ad3c06a40df883d75e47404921a0069480443e245a5909b665ad6487f90e47aba74e1e4285a90e6246c5cda0e278f1ab3b9e33c9f3b07a7982abd74a670525d42b370fbcdc509da8d88cfedf1e75693dd0dfd75b335387cfe1837936bf7b52f1102a1343f586ff0c662724af55ce1b80d50eac21605a6bf0faec95aafa4fba9e6cefdb74b8b4ee76eb48d4a8d7fffdbcfdb6d5c7debcef411d463073515896d35a4a9f7dc0716c159c525db7909ad2904d8f80199308376e45f3b59fc4cd0f7e1e3beefd75a0f14664ec0402d126ecedeac18e6b77e2c857bf883ff9efff15c7ffe649bcf2dcf7904a8de1f4a99770ee9d5338f9e2731838fd63c81285a517c16c1ba2006c6eb570ff1d6dd8737d00db1353d868e570e3dab5b8fdce3b71fffd0fe097fecd2fe363f77d1c7bf6dc8d5b3e7c2baebbfe06ac5fbb06ad6dabd0ba653b56b5ae41c7860dd8bd7b37920d8d78f7ed37b69e79ebd56bcfbefd3acebefdfa4af6d9bcf6a03bab1f4265c0fa93a7fb1d349e23c92fd5ea6df2ae7edf923683bb36ef6eccb6974fa2e2013ee4d272729e0090858e1a9da6c5ade351cc9e5c0ea3eae84e5f390f27303370aaed5fff73f762ee003b0cd75c71dbea376b3235ea9953af9b7bea04eaa4ad793f834c8e0c4c070d1342218ac2cd832ff7bdc48904ce6c4c4ee4303e6542117524dbb6406dbb0536a3b834c53091ce415504689a8e7ca100432f223f3a84482800db72303c320c4a2918e3281472488d8fc3b61dd8b68d4d3b76a2a3636325a6dad471eb0e199d776e436a7c14036f9fc5db1742b83c5506a31c9c31e886814c3a0d495690cd66e0d836020105b665231409a35428229bcbe1c3b7de5ab185dbd78ea86ae03f72c6fe0900f67c64cf7bd3813fa99d133fe3f0a9da1b1769dbaf0856fa68db9f34444120de21839439d6cf9d79fde9dfb5cb3a2405b02c03a9d438ca9a8560430c6f0ea4907ef379a8928de75f7e0d43670771ed4d1fc6e6edd7c1b26de4a7c631313682d8c6cd2094a3542a5512e251825c2603ce396ebbe30e8c8f8d198035d8d6d228fecbbffceb3a428872ef2d77a2909b44219741be54c63b2305e8760899d42568a53c38e728140a50832a744d07e30c0dc946d89cc1290002a588c563d0340d030303181a1a543a3a3a986d5734e8f76a005fc5d2e08bc09a8e58733595bda868023fb1c1fbb300d128eb902401966d73db3243a397ceeb4d8dd16cd991440eca344bc9c71a5bf2ed1b378dd8e3e4e2ebdf7dedae975e7caea33199c4c68e0db87edbc667eed873cb0be94c3a07678b7de9e29ad03f7ce3ebbf79f6cc401c20d8b4790beeb9e71ed8b68d6f7df39b208422180a17366decf84a54151bafdf18fcec4dd7ad53d6b606f1d4f75e821a0c63ddfa0edc172e219a6cc2b79f31f1e3b70c104a914e67606673000856af59038152a44747d0d0d8045914c018417a6a1213131383e170f473c978f2594dd771756ff0fb0a9eea5a2b31de8a6dfef8ff05e2b9e13c1cdbc6f537dcc009214fdd70f7af3d6f5b663c1a8b530e9191f82be573afff8bad0482962c3b46381cfe85c696b6df6e88c7824d4d8df9b25efcfaf9b3ef0c4f4ea6b39224c86d6daba43d7beefaf6e5e1e1fb63d198b4b6bd1de7cf9d47369785ae6b183a7bb64c28bd904ea7af6b4c364edd77e7e6c18fdcbe237969cc426a228b2d5b1358d7de8a5864029144135e6f6ac8707e2164960db9582c2097cbd98aa2940da30cd33455cbb20442282291082825d0340d3baeb9f6e59b777fe89fc7c6c6796b5b0b9a9b1b7fdafd7c152e5c67d3a398c9ad0c54eccfc3f379b9afa23644d3aa1ccf29c901504a9d50ac31a5154ba960a4013623685cb51945eda3c82388e63512b66c297fe3f5536f7cd7e19c5a96c5344dd30bf93ccfe7f34c9645924c18b8ff815ffcc1876ebea5757c7c94a6b225144b3a360725ecfdc45ed83633fffccf1fcf590c7ceb96cdecee8fdc2a8e9d7ff5664be770ec321cb30c815652c2a65383b86147fb5f1952db374ebff596420522663399dcb973e74a8410c4e3f150241a6b0caa6a6b2a354e6545a137ddb42bf7e10f7ff8f9868606be794b072ccb7a4fed9c0fba0df55382e7b19e857dfb1ffe2990f2c186e89dacf0e28b2f42966553d3348442219c3d7b064a2000d330a1a831307030cbc1ce1baeb5b76cde3025cb0a2ccb42201080699ab8f63a19a66942966418e562391c0e64930d5bb13a9f47241a41b1a0211c0ec2342dfcfe7ffb3d102a201490c060a704514450e5686e6d87a426c041210914f9dc04dad76eb5926bd79fda73db6e33a80690cfe7110e87512c16115483709803ce399165099aa6935028cccae532245902dc543dd6caae245dc555bc6f20027800006cdb06a554b66d9b30c698e5862532e64c6f38e09c43100484422148eeb9be8aa2c0711c489204c62a39ae1873e030a7922e47a0904511947a79ab38c2e130044144b96c18032342aca46f4ec992226ddcb9c3a114383d9c8365342aa69378a5980e94a20de417836ac0098542843186783c0e4110a6cf00668cf1605085208850148598a6014a089c8aed1b00a001f8c64fa98fafe22ade33fc3f50825ddeef87865b0000000049454e44ae426082, 'image/png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clients`
--

CREATE TABLE `tbl_clients` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` varchar(100) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_clients`
--

INSERT INTO `tbl_clients` (`id`, `name`, `address`, `email`, `phone`, `password`, `company`, `country`, `state`, `zipcode`, `estado`, `date`) VALUES
(1, 'DONO SAPUTRA', 'Malang', 'tam@demo.com', '123456', '09731', 'jaomweb', 'Jawa Timur', 'Indonesia', '057', 1, '2016-09-23'),
(2, 'MULYONO', 'Jakarta', 'tam@demo.com', '3116173306', '09731', 'EXPAGRICOL', 'Indonesia', 'Indonesia', '33125', 1, '2016-09-23'),
(3, 'alex saputra', 'Jalan Ahmad yani Pangkalpinang, Indonesia', 'user@gmail.com', '087896277897', '123456', 'DLH Prov Babel', 'Indonesia', 'Kepulauan Bangka Belitung', '33125', 1, '2021-01-30');

-- --------------------------------------------------------

--
-- Table structure for table `type_shipments`
--

CREATE TABLE `type_shipments` (
  `id` int(5) NOT NULL,
  `name` varchar(45) NOT NULL,
  `packaging` varchar(15) NOT NULL,
  `dimensions` varchar(12) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_shipments`
--

INSERT INTO `type_shipments` (`id`, `name`, `packaging`, `dimensions`, `estado`) VALUES
(8, 'Money', 'Envelope', '11,4 x 16,23', 1),
(9, 'Herbals', 'Plastic', '35x50, 40x50', 1),
(10, 'Medical', 'Box', ' 50 x 50x 23', 1),
(12, 'Technology', 'Box', ' 50 x 50x 23', 1),
(13, 'White line', 'Pallets', '1200 x 1000 ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `upload_image_bank`
--

CREATE TABLE `upload_image_bank` (
  `cid` int(11) NOT NULL,
  `cons_no` varchar(150) NOT NULL,
  `nombre_imagen` text NOT NULL,
  `imagen` mediumblob NOT NULL,
  `tipo` text NOT NULL,
  `office` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_image_bank`
--

INSERT INTO `upload_image_bank` (`cid`, `cons_no`, `nombre_imagen`, `imagen`, `tipo`, `office`, `date`) VALUES
(1, 'AWB-419162472', 'bitnami.ico', 0x000001000100101000000100200068040000160000002800000010000000200000000100200000000000400400000000000000000000000000000000000000000000000000000000000000000000896c5bff80614fff80614fff80614fff80614fff80614fff80614fff896c5bff00000000000000000000000000000000000000000000000000000000957a6bffb0998cffe9e2deffe9e2deffe9e2deffe9e2deffe9e2deffe9e2deffb0998cff7e5f4cff00000000000000000000000000000000000000007e5f4cffe9e2defffaf7f6fffffffffffffffffffffffffffffffffffffffffffffffffff7f3f0ffbdaba0ff7e5f4cff00000000000000000000000080614ffff5f1eefff8f3effff5ece6fff3e7e1fff1e4dcfff1e1d8fff1e1d7fff1e2d8fff3e5ddfff7ede7fffbf7f3ffc9b8aeff7e5f4cff00000000896c5bffdbd0c9fff8f1edff855445ff855445ff855445ff855445ff855445ff855445ff855445ffbd9a8bffe6d0c3fff6e8e0fff9f3efffb0998cff896c5bff80614ffff8f3effff5e9e1ffdcc3b7ff855445ff865546ff976b5cff976a5cff976a5bff8f6051ff855445ff946657fff1dacdfff8ebe3ffe8dbd4ff7e5f4cff80614ffffaf4f0fff3e3d9ffddc0b1ff855445ffa47a6affeed2c2ffeed2c1ffeed1bfffedd0beffaa7f6fff855445ffefd2c1fff5e4d9fff1e5deff7e5f4cff80614ffffaf2eefff3dfd3ffdcbcacff855445ffa27666ffeacbb9ffeacab7ffeacab6ffe5c2aeffa27564ff855445ffefcdbafff5e0d4fff1e4dbff7e5f4cff80614ffffaf2ecfff2dccfffdbb9a7ff865546ff865546ff8a5a4aff8a594aff8a594aff855445ff855445ffbd917dffeec9b3fff4ddcffff0e2d9ff7e5f4cff80614ffffaf0eafff2d8caffdbb5a1ff855445ff966656ffc09480ffc0937fffbf937effb48978ff885849ffad8779fffaf0e9fffdf9f6ffe9e2deff7e5f4cff80614ffffaefe8fff2d6c5ffdab29cff855445ffa57764ffeec7b1fff5e0d2fffcf5f1ffffffffff9a7265ff855445ffffffffffffffffffe6e0ddff7e5f4cff80614ffffaefe8fff3d6c5ffdbb29bff855445ff8c5d4effa9857affa9867cffa9877cff9e776bff855445ff9c7468ffffffffffffffffffccbfb8ff896c5bff80614ffffbefe9fff4d9c9ff855445ff855445ff855445ff855445ff855445ff855445ff9b7367ffb3958cfff0eae8ffffffffffefebe8ff896c5bff0000000080614ffffcf6f2fff9ece3fffefbf9fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff5f4f2ff8e7061ff000000000000000080614ffff9f0eafff9f5f2fff8f5f4fff8f5f4fff8f5f4fff8f5f4fff8f5f4fff8f5f4fff8f6f5fff4f1efffd6ccc7ff826250ff00000000000000000000000080614fff80614fff80614fff80614fff80614fff80614fff80614fff80614fff80614fff80614fff80614fff896c5bff00000000000000000000000000000000f00f0000e0070000c0030000800100000000000000000000000000000000000000000000000000000000000000000000000100000003000000070000000f0000, 'image/x-icon', 'user@gmail.com', '2021-01-30'),
(2, 'AWB-173254413', 'bitnami.ico', 0x000001000100101000000100200068040000160000002800000010000000200000000100200000000000400400000000000000000000000000000000000000000000000000000000000000000000896c5bff80614fff80614fff80614fff80614fff80614fff80614fff896c5bff00000000000000000000000000000000000000000000000000000000957a6bffb0998cffe9e2deffe9e2deffe9e2deffe9e2deffe9e2deffe9e2deffb0998cff7e5f4cff00000000000000000000000000000000000000007e5f4cffe9e2defffaf7f6fffffffffffffffffffffffffffffffffffffffffffffffffff7f3f0ffbdaba0ff7e5f4cff00000000000000000000000080614ffff5f1eefff8f3effff5ece6fff3e7e1fff1e4dcfff1e1d8fff1e1d7fff1e2d8fff3e5ddfff7ede7fffbf7f3ffc9b8aeff7e5f4cff00000000896c5bffdbd0c9fff8f1edff855445ff855445ff855445ff855445ff855445ff855445ff855445ffbd9a8bffe6d0c3fff6e8e0fff9f3efffb0998cff896c5bff80614ffff8f3effff5e9e1ffdcc3b7ff855445ff865546ff976b5cff976a5cff976a5bff8f6051ff855445ff946657fff1dacdfff8ebe3ffe8dbd4ff7e5f4cff80614ffffaf4f0fff3e3d9ffddc0b1ff855445ffa47a6affeed2c2ffeed2c1ffeed1bfffedd0beffaa7f6fff855445ffefd2c1fff5e4d9fff1e5deff7e5f4cff80614ffffaf2eefff3dfd3ffdcbcacff855445ffa27666ffeacbb9ffeacab7ffeacab6ffe5c2aeffa27564ff855445ffefcdbafff5e0d4fff1e4dbff7e5f4cff80614ffffaf2ecfff2dccfffdbb9a7ff865546ff865546ff8a5a4aff8a594aff8a594aff855445ff855445ffbd917dffeec9b3fff4ddcffff0e2d9ff7e5f4cff80614ffffaf0eafff2d8caffdbb5a1ff855445ff966656ffc09480ffc0937fffbf937effb48978ff885849ffad8779fffaf0e9fffdf9f6ffe9e2deff7e5f4cff80614ffffaefe8fff2d6c5ffdab29cff855445ffa57764ffeec7b1fff5e0d2fffcf5f1ffffffffff9a7265ff855445ffffffffffffffffffe6e0ddff7e5f4cff80614ffffaefe8fff3d6c5ffdbb29bff855445ff8c5d4effa9857affa9867cffa9877cff9e776bff855445ff9c7468ffffffffffffffffffccbfb8ff896c5bff80614ffffbefe9fff4d9c9ff855445ff855445ff855445ff855445ff855445ff855445ff9b7367ffb3958cfff0eae8ffffffffffefebe8ff896c5bff0000000080614ffffcf6f2fff9ece3fffefbf9fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff5f4f2ff8e7061ff000000000000000080614ffff9f0eafff9f5f2fff8f5f4fff8f5f4fff8f5f4fff8f5f4fff8f5f4fff8f5f4fff8f6f5fff4f1efffd6ccc7ff826250ff00000000000000000000000080614fff80614fff80614fff80614fff80614fff80614fff80614fff80614fff80614fff80614fff80614fff896c5bff00000000000000000000000000000000f00f0000e0070000c0030000800100000000000000000000000000000000000000000000000000000000000000000000000100000003000000070000000f0000, 'image/x-icon', 'user@gmail.com', '2021-01-30'),
(3, 'AWB-173254413', 'bitnami.ico', 0x000001000100101000000100200068040000160000002800000010000000200000000100200000000000400400000000000000000000000000000000000000000000000000000000000000000000896c5bff80614fff80614fff80614fff80614fff80614fff80614fff896c5bff00000000000000000000000000000000000000000000000000000000957a6bffb0998cffe9e2deffe9e2deffe9e2deffe9e2deffe9e2deffe9e2deffb0998cff7e5f4cff00000000000000000000000000000000000000007e5f4cffe9e2defffaf7f6fffffffffffffffffffffffffffffffffffffffffffffffffff7f3f0ffbdaba0ff7e5f4cff00000000000000000000000080614ffff5f1eefff8f3effff5ece6fff3e7e1fff1e4dcfff1e1d8fff1e1d7fff1e2d8fff3e5ddfff7ede7fffbf7f3ffc9b8aeff7e5f4cff00000000896c5bffdbd0c9fff8f1edff855445ff855445ff855445ff855445ff855445ff855445ff855445ffbd9a8bffe6d0c3fff6e8e0fff9f3efffb0998cff896c5bff80614ffff8f3effff5e9e1ffdcc3b7ff855445ff865546ff976b5cff976a5cff976a5bff8f6051ff855445ff946657fff1dacdfff8ebe3ffe8dbd4ff7e5f4cff80614ffffaf4f0fff3e3d9ffddc0b1ff855445ffa47a6affeed2c2ffeed2c1ffeed1bfffedd0beffaa7f6fff855445ffefd2c1fff5e4d9fff1e5deff7e5f4cff80614ffffaf2eefff3dfd3ffdcbcacff855445ffa27666ffeacbb9ffeacab7ffeacab6ffe5c2aeffa27564ff855445ffefcdbafff5e0d4fff1e4dbff7e5f4cff80614ffffaf2ecfff2dccfffdbb9a7ff865546ff865546ff8a5a4aff8a594aff8a594aff855445ff855445ffbd917dffeec9b3fff4ddcffff0e2d9ff7e5f4cff80614ffffaf0eafff2d8caffdbb5a1ff855445ff966656ffc09480ffc0937fffbf937effb48978ff885849ffad8779fffaf0e9fffdf9f6ffe9e2deff7e5f4cff80614ffffaefe8fff2d6c5ffdab29cff855445ffa57764ffeec7b1fff5e0d2fffcf5f1ffffffffff9a7265ff855445ffffffffffffffffffe6e0ddff7e5f4cff80614ffffaefe8fff3d6c5ffdbb29bff855445ff8c5d4effa9857affa9867cffa9877cff9e776bff855445ff9c7468ffffffffffffffffffccbfb8ff896c5bff80614ffffbefe9fff4d9c9ff855445ff855445ff855445ff855445ff855445ff855445ff9b7367ffb3958cfff0eae8ffffffffffefebe8ff896c5bff0000000080614ffffcf6f2fff9ece3fffefbf9fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff5f4f2ff8e7061ff000000000000000080614ffff9f0eafff9f5f2fff8f5f4fff8f5f4fff8f5f4fff8f5f4fff8f5f4fff8f5f4fff8f6f5fff4f1efffd6ccc7ff826250ff00000000000000000000000080614fff80614fff80614fff80614fff80614fff80614fff80614fff80614fff80614fff80614fff80614fff896c5bff00000000000000000000000000000000f00f0000e0070000c0030000800100000000000000000000000000000000000000000000000000000000000000000000000100000003000000070000000f0000, 'image/x-icon', 'user@gmail.com', '2021-01-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calculator`
--
ALTER TABLE `calculator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `courier_online`
--
ALTER TABLE `courier_online`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `courier_paid`
--
ALTER TABLE `courier_paid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courier_track`
--
ALTER TABLE `courier_track`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager_admin`
--
ALTER TABLE `manager_admin`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `manager_user`
--
ALTER TABLE `manager_user`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `mode_bookings`
--
ALTER TABLE `mode_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_booking`
--
ALTER TABLE `online_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scheduledpickup`
--
ALTER TABLE `scheduledpickup`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `subir_imagen`
--
ALTER TABLE `subir_imagen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_shipments`
--
ALTER TABLE `type_shipments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_image_bank`
--
ALTER TABLE `upload_image_bank`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calculator`
--
ALTER TABLE `calculator`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courier`
--
ALTER TABLE `courier`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courier_online`
--
ALTER TABLE `courier_online`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courier_paid`
--
ALTER TABLE `courier_paid`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courier_track`
--
ALTER TABLE `courier_track`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manager_admin`
--
ALTER TABLE `manager_admin`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manager_user`
--
ALTER TABLE `manager_user`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mode_bookings`
--
ALTER TABLE `mode_bookings`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `online_booking`
--
ALTER TABLE `online_booking`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `scheduledpickup`
--
ALTER TABLE `scheduledpickup`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subir_imagen`
--
ALTER TABLE `subir_imagen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `type_shipments`
--
ALTER TABLE `type_shipments`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `upload_image_bank`
--
ALTER TABLE `upload_image_bank`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
