-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2020 at 06:12 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accessories_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `by_device`
--

CREATE TABLE `by_device` (
  `device_id` int(10) NOT NULL,
  `device_title` text NOT NULL,
  `device_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `by_device`
--

INSERT INTO `by_device` (`device_id`, `device_title`, `device_desc`) VALUES
(1, 'Apple', 'Apple'),
(2, 'Samsung', 'Samsung'),
(3, 'BlackBerry', 'BlackBerry'),
(4, 'Huawei', 'Huawei'),
(5, 'Sony', 'Sony'),
(6, 'Google', 'Google'),
(7, 'Motorola', 'Motorola'),
(8, 'HTC', 'HTC'),
(9, 'Other', 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `by_type`
--

CREATE TABLE `by_type` (
  `type_id` int(10) NOT NULL,
  `type_title` text NOT NULL,
  `type_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `by_type`
--

INSERT INTO `by_type` (`type_id`, `type_title`, `type_desc`) VALUES
(1, 'Case & Cover', 'Case & Cover'),
(2, 'Screen Protector', 'Screen Protector'),
(3, 'Watch Band', 'Watch Band'),
(4, 'Keyboard', 'Keyboard'),
(5, 'Charger', 'Charger'),
(6, 'Cable & Adapter', 'Cable & Adapter'),
(7, 'Headphone', 'Headphone'),
(8, 'Stylus', 'Stylus'),
(9, 'Miscellaneous', 'Miscellaneous');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `carousel_id` int(10) NOT NULL,
  `carousel_name` text NOT NULL,
  `carousel_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`carousel_id`, `carousel_name`, `carousel_image`) VALUES
(1, 'Slide Number 1', 'Beats-Headphone.png'),
(2, 'Slide Number 2', 'Phone-Controller.png'),
(3, 'Slide Number 3', 'Portable-Charger.png'),
(4, 'Slide Number 4', 'versatile_stylus.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(10) NOT NULL,
  `customer_fname` varchar(255) NOT NULL,
  `customer_lname` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_phone` int(50) NOT NULL,
  `customer_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_fname`, `customer_lname`, `customer_email`, `customer_pass`, `customer_phone`, `customer_image`) VALUES
(1, 'Khon11', 'Phu', 'khonphu@gmail.com', '$2y$10$OwyMQ2R8CGMBLToJ9XKGFO27P.4RQUljJvuW8eNz1zDUtFDgVY2mC', 12345679, '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `device_id` int(10) NOT NULL,
  `type_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_image1` text NOT NULL,
  `product_image2` text NOT NULL,
  `product_image3` text NOT NULL,
  `product_price` float NOT NULL,
  `product_desc` text NOT NULL,
  `product_keyword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `device_id`, `type_id`, `date`, `product_title`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `product_desc`, `product_keyword`) VALUES
(1, 1, 2, '2020-05-19 17:09:09', '3D Tempered Glass for iPhone 4.7 inch', '3D_Tempered_Glass_Screen_Protector_for_iPhone_4.7_inch_1.jpg', '3D_Tempered_Glass_Screen_Protector_for_iPhone_4.7_inch_2.jpg', '3D_Tempered_Glass_Screen_Protector_for_iPhone_4.7_inch_1.jpg', 11.95, 'Screen Protector', 'Protector'),
(2, 1, 1, '2020-05-19 17:08:48', 'CaseMe Slim Synthetic Leather Wallet Case', 'CaseMe_Slim_Synthetic_Leather_Wallet_Case_with_Stand_for_iPhoneSE_1.jpg', 'CaseMe_Slim_Synthetic_Leather_Wallet_Case_with_Stand_for_iPhoneSE_2.jpg', 'CaseMe_Slim_Synthetic_Leather_Wallet_Case_with_Stand_for_iPhoneSE_3.jpg', 19.95, 'Slim Case', 'Case'),
(3, 1, 7, '2020-05-19 19:25:09', 'High Quality Replica Apple EarPods', 'High_Quality_Replica_Apple_EarPods_with_Remote_and_Mic_Stereo_Headset_1.jpg', 'High_Quality_Replica_Apple_EarPods_with_Remote_and_Mic_Stereo_Headset_2.jpg', 'High_Quality_Replica_Apple_EarPods_with_Remote_and_Mic_Stereo_Headset_3.jpg', 14.95, 'Ear Pod', 'Headphone'),
(4, 1, 3, '2020-05-19 19:25:42', 'Rustic Inspired Leather Band Apple Watch', 'Premium_Rustic_Inspired_Leather_Band_for_40_mm_Apple_Watch_1.jpg', 'Premium_Rustic_Inspired_Leather_Band_for_40_mm_Apple_Watch_2.jpg', 'Premium_Rustic_Inspired_Leather_Band_for_40_mm_Apple_Watch_3.jpg', 32.95, 'Watch', 'Watch'),
(5, 1, 1, '2020-05-19 17:03:21', 'Impact Case for Apple iPhoneSE', 'Impact_Case_for_Apple_iPhoneSE.jpg', 'Impact_Case_for_Apple_iPhoneSE.jpg', 'Impact_Case_for_Apple_iPhoneSE.jpg', 19.95, 'Impact Case', 'Case'),
(6, 1, 1, '2020-05-19 17:07:49', 'Textured Synthetic Leather Belt Pouch', 'Textured_Synthetic_Leather_Belt_Pouch_(Bumper_Case_Compatible)_1.jpg', 'Textured_Synthetic_Leather_Belt_Pouch_(Bumper_Case_Compatible)_2.jpg', 'Textured_Synthetic_Leather_Belt_Pouch_(Bumper_Case_Compatible)_3.jpg', 27.95, 'Bumper Case', 'Case'),
(7, 1, 4, '2020-05-19 19:30:10', 'Ultra Portable Bluetooth Mini Keyboard', 'Ultra_Portable_Bluetooth_Mini_Keyboard_with_Stand_1.jpg', 'Ultra_Portable_Bluetooth_Mini_Keyboard_with_Stand_2.jpg', 'Ultra_Portable_Bluetooth_Mini_Keyboard_with_Stand_3.jpg', 64.95, 'Mini Keyboard', 'keyboard'),
(8, 2, 1, '2020-05-19 19:26:43', 'Samsung Galaxy S20+ Smart Clear View Cover', 'Genuine_Samsung_Galaxy_S20+_Smart_Clear_View_Cover.jpg', 'Genuine_Samsung_Galaxy_S20+_Smart_Clear_View_Cover_2.jpg', 'Genuine_Samsung_Galaxy_S20+_Smart_Clear_View_Cover.jpg', 67.95, 'Smart Clear View Cover', 'Cover'),
(9, 2, 2, '2020-05-19 19:23:06', 'Curved Anti Glare Full Screen Protector', 'Curved_Anti_Glare_Full_Screen_Protector_for_Samsung_Galaxy_S8.jpg', 'Curved_Anti_Glare_Full_Screen_Protector_for_Samsung_Galaxy_S8.jpg', 'Curved_Anti_Glare_Full_Screen_Protector_for_Samsung_Galaxy_S8.jpg', 12.95, 'Ultra clear Screen Protector', 'Screen Protector'),
(10, 2, 5, '2020-05-19 19:24:06', 'Genuine Samsung Adaptive Fast Charger', 'Genuine_Samsung_Adaptive_Fast_Charger_with_Type_C_cable_Black.jpg', 'Genuine_Samsung_Adaptive_Fast_Charger_with_Type_C_cable_White.jpg', 'Genuine_Samsung_Adaptive_Fast_Charger_with_Type_C_cable_Black.jpg', 37.95, 'Adaptive Fast Charger', 'Charger'),
(11, 2, 8, '2020-05-19 19:13:53', 'Samsung HM5100 Bluetooth enabled S Pen', 'Samsung_HM5100_Bluetooth_enabled_S_Pen_1.jpg', 'Samsung_HM5100_Bluetooth_enabled_S_Pen_2.jpg', 'Samsung_HM5100_Bluetooth_enabled_S_Pen_3.jpg', 57.95, 'Bluetooth enabled S Pen', 'Pen'),
(12, 2, 4, '2020-05-19 19:28:56', 'Keyboard and Case for Samsung Tab A 10.1', 'Keyboard_and_Case_for_Samsung_Tab_A_10.1_1.jpg', 'Keyboard_and_Case_for_Samsung_Tab_A_10.1_2.jpg', 'Keyboard_and_Case_for_Samsung_Tab_A_10.1_3.jpg', 59.95, 'Keyboard and case', 'keyboard'),
(13, 2, 7, '2020-05-19 19:32:30', 'Samsung EO IG955 In Ear Earphones', 'Samsung_EO_IG955_In_Ear_Earphones_with_Built_in_Remote_tuned_by_AKG_1.jpg', 'Samsung_EO_IG955_In_Ear_Earphones_with_Built_in_Remote_tuned_by_AKG_2.jpg', 'Samsung_EO_IG955_In_Ear_Earphones_with_Built_in_Remote_tuned_by_AKG_3.jpg', 37.95, 'Earphone', 'Headphone'),
(14, 2, 6, '2020-05-19 19:37:56', 'Genuine Samsung EP DG930 Data Cable', 'Genuine_Samsung_EP_DG930_Data_Cable_Combo_1.jpg', 'Genuine_Samsung_EP_DG930_Data_Cable_Combo_2.jpg', 'Genuine_Samsung_EP_DG930_Data_Cable_Combo_1.jpg', 39.95, 'Charger', 'Charger'),
(15, 3, 1, '2020-05-19 19:44:11', 'Synthetic Leather Wallet Case with Stand', 'Synthetic_Leather_Wallet_Case_with_Stand_1.jpg', 'Synthetic_Leather_Wallet_Case_with_Stand_2.jpg', 'Synthetic_Leather_Wallet_Case_with_Stand_3.jpg', 4.95, 'Screen Protector', 'Protector'),
(16, 4, 1, '2020-05-19 19:47:57', 'Premium Leather Smart View Case', 'Premium_Leather_Smart_View_Case_1.jpg', 'Premium_Leather_Smart_View_Case_2.jpg', 'Premium_Leather_Smart_View_Case_3.jpg', 24.95, 'Smart View Case', 'Case'),
(17, 4, 5, '2020-05-19 19:51:47', 'Genuine Huawei 3A AC Charger', 'Genuine_Huawei_3A_AC_Charger_1.jpg', 'Genuine_Huawei_3A_AC_Charger_2.jpg', 'Genuine_Huawei_3A_AC_Charger_3.jpg', 37.95, 'AC Charger ', 'Charger'),
(18, 4, 6, '2020-05-19 19:54:45', 'Genuine Huawei Micro USB Adapter', 'Genuine_Huawei_Micro_USB_Adapter_1.jpg', 'Genuine_Huawei_Micro_USB_Adapter_2.jpg', 'Genuine_Huawei_Micro_USB_Adapter_1.jpg', 13.95, 'Genuine Huawei Micro USB to USB-C (Also Known as USB Type-C) Adapter - White', 'USB'),
(19, 4, 7, '2020-05-19 19:57:15', 'Huawei AM116 3.5mm Earphones', 'Huawei_AM116_3.5mm_Earphones_1.jpg', 'Huawei_AM116_3.5mm_Earphones_2.jpg', 'Huawei_AM116_3.5mm_Earphones_3.jpg', 29.95, 'Huawei AM116 3.5mm Earphones with Remote and Microphone', 'Headphone'),
(20, 5, 2, '2020-05-19 20:11:05', 'Tempered Glass Screen Protector Xperia Z5', 'Tempered Glass Screen Protector for Sony Xperia Z5.jpg', 'Tempered Glass Screen Protector for Sony Xperia Z5.jpg', 'Tempered Glass Screen Protector for Sony Xperia Z5.jpg', 9.95, 'Tempered Glass Screen Protector for Sony Xperia Z5', 'Protector'),
(21, 5, 5, '2020-05-19 20:13:52', 'Genuine Sony Xperia Z1 Charging Dock DK31', 'Genuine_Sony_Xperia_Z1_Charging_Dock_DK31_1.jpg', 'Genuine_Sony_Xperia_Z1_Charging_Dock_DK31_2.jpg', 'Genuine_Sony_Xperia_Z1_Charging_Dock_DK31_1.jpg', 23.95, 'Genuine Sony Xperia Z1 Charging Dock DK31', 'Charger'),
(22, 5, 5, '2020-05-19 20:15:48', 'Genuine Sony Xperia Z3 Charging Dock DK48', 'Genuine_Sony_Xperia Z3_Charging_Dock_DK48_1.jpg', 'Genuine_Sony_Xperia Z3_Charging_Dock_DK48_2.jpg', 'Genuine_Sony_Xperia Z3_Charging_Dock_DK48_3.jpg', 19.95, 'Genuine Sony Xperia Z3 Charging Dock DK48 - Classic Black', 'Charger'),
(23, 5, 7, '2020-05-19 20:17:54', 'Genuine Sony MH-750 3.5mm Stereo Headset', 'Genuine_Sony_MH-750_3.5mm_Stereo_Headset_1.jpg', 'Genuine_Sony_MH-750_3.5mm_Stereo_Headset_2.jpg', 'Genuine_Sony_MH-750_3.5mm_Stereo_Headset_1.jpg', 29.95, 'Genuine Sony MH-750 3.5mm Stereo Headset for Sony Xperia P', 'Headphone'),
(24, 6, 1, '2020-05-19 20:21:35', 'Premium Leather Wallet Case for Pixel 4', 'Premium_Leather_Wallet_Case_for_Pixel_4_1.jpg', 'Premium_Leather_Wallet_Case_for_Pixel_4_2.jpg', 'Premium_Leather_Wallet_Case_for_Pixel_4_3.jpg', 29.95, 'Premium Leather Wallet Case for Google Pixel 4 - Caramel', 'Case'),
(25, 7, 1, '2020-05-19 20:26:38', 'Synthetic Leather Wallet Case for One Macro', 'Synthetic_Leather_Wallet_Case_for_One_Marcro_1.jpg', 'Synthetic_Leather_Wallet_Case_for_One_Marcro_2.jpg', 'Synthetic_Leather_Wallet_Case_for_One_Marcro_3.jpg', 23.95, 'Synthetic Leather Wallet Case with Stand for Motorola One Macro - Blue', 'Case'),
(26, 8, 5, '2020-05-19 20:29:31', 'Genuine HTC 2A/10W AC Charger', 'Genuine_HTC_2A_10W_AC_Charger_1.jpg', 'Genuine_HTC_2A_10W_AC_Charger_2.jpg', 'Genuine_HTC_2A_10W_AC_Charger_3.jpg', 24.95, 'Genuine HTC 2A/10W AC Charger with USB-A to Micro USB cable - Black', 'Charger'),
(27, 8, 7, '2020-05-19 20:37:49', 'HTC 39H00010-00M Original Stereo Headset ', 'HTC_39H00010_00M_Original_Stereo_Headset.jpg', 'HTC_39H00010_00M_Original_Stereo_Headset.jpg', 'HTC_39H00010_00M_Original_Stereo_Headset.jpg', 23.95, 'HTC 39H00010-00M Original Stereo Headset Plus Music Controls', 'Headphone'),
(28, 8, 5, '2020-05-19 20:38:35', 'Genuine HTC 4000 mAh External Battery', 'Genuine_HTC_4000_mAh_External_Battery_1.jpg', 'Genuine_HTC_4000_mAh_External_Battery_2.jpg', 'Genuine_HTC_4000_mAh_External_Battery_1.jpg', 39.95, 'Genuine HTC 4000 mAh External Battery Recharger', 'Charger'),
(29, 9, 9, '2020-05-19 20:42:02', 'Universal Sports Armband for Phones', 'Universal_Sports_Armband_for_Phones_1.jpg', 'Universal_Sports_Armband_for_Phones_2.jpg', 'Universal_Sports_Armband_for_Phones_1.jpg', 16.95, 'Universal Sports Armband for Phones', 'Armband'),
(30, 9, 9, '2020-05-19 20:47:24', 'Monopod Selfie Stick - Classic Black', 'Monopod_Selfie_Stick_1.jpg', 'Monopod_Selfie_Stick_2.jpg', 'Monopod_Selfie_Stick_1.jpg', 19.95, 'Monopod Selfie Stick', 'Stick'),
(31, 9, 9, '2020-05-19 20:46:20', 'WiWU Cozy Storage Bag', 'WiWU_Cozy_Storage_Bag_1.jpg', 'WiWU_Cozy_Storage_Bag_2.jpg', 'WiWU_Cozy_Storage_Bag_1.jpg', 29.95, 'WiWU Cozy Storage Bag', 'Bag');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `by_device`
--
ALTER TABLE `by_device`
  ADD PRIMARY KEY (`device_id`);

--
-- Indexes for table `by_type`
--
ALTER TABLE `by_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`carousel_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `by_device`
--
ALTER TABLE `by_device`
  MODIFY `device_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `by_type`
--
ALTER TABLE `by_type`
  MODIFY `type_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `carousel_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
