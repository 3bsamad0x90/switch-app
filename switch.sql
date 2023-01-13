-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 04:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `switch`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`id`, `key`, `value`, `type`, `created_at`, `updated_at`) VALUES
(1, 'social', '[\"whatsapp\",\"linkedin\",\"youtube\"]', NULL, '2023-01-11 10:56:10', '2023-01-12 17:06:20'),
(2, 'music', '[\"spotify\",\"anghami\"]', NULL, '2023-01-11 12:02:52', '2023-01-12 17:06:20'),
(3, 'business', '[\"googlePlay\"]', NULL, '2023-01-11 12:02:52', '2023-01-12 17:06:20'),
(4, 'creative', '[\"behance\",\"dribble\"]', NULL, '2023-01-11 13:34:59', '2023-01-12 17:06:20'),
(5, 'facebookIcon', '8MpDKn0a1zV0dcc9WPsU0y3vs2PUrnIlbcKSAfOg.png', NULL, '2023-01-12 16:52:17', '2023-01-12 16:52:17'),
(6, 'whatsappIcon', '7f9qWIravptAKWflp3zk0kRIGEUnMT97Nu6LT5FL.png', NULL, '2023-01-12 17:06:20', '2023-01-12 17:06:20');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `user_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `company`, `title`, `country`, `phone`, `email`, `subject`, `content`, `status`, `user_id`, `user_type`, `created_at`, `updated_at`) VALUES
(12, 'test', 'ilaw', 'test', '3', '0558218579', 'abuobaidailaw@gmail.com', 'question', 'test', '1', NULL, NULL, '2022-08-04 15:48:03', '2022-08-04 19:48:36'),
(9, NULL, NULL, 'test', NULL, NULL, NULL, 'request', 'test', '1', '2', 'publisher', '2022-07-05 08:38:15', '2022-07-05 08:38:30'),
(6, 'hossam', 'babak', 'قانون الشركات', '224', '545412304', 'hossamdeeb46@gmail.com', 'question', 'السللام عليكم', '1', NULL, NULL, '2022-07-04 08:33:06', '2022-08-04 19:48:54'),
(7, 'test', 'test', 'test', '63', '1023452059', 'publisher1@ilawfair.com', 'question', 'test', '1', NULL, NULL, '2022-07-04 08:35:54', '2022-08-07 22:50:45'),
(47, 'omar', 'okmm', 'fsff', 'AW', '020200', 'omar@omar.dfv', 'question', 'fsfs', '1', NULL, NULL, '2022-10-03 19:21:47', '2022-10-04 12:41:47'),
(13, NULL, NULL, 'test', NULL, NULL, NULL, 'question', 'test', '1', '2', 'publisher', '2022-08-07 22:53:10', '2022-08-08 00:03:46'),
(14, 'Abuobaida', 'iLAW', 'TEST', '201', '0508750613', 'abuobaidailaw@gmail.com', 'request', 'TEST', '1', NULL, NULL, '2022-08-08 13:05:08', '2022-08-10 13:08:17'),
(15, NULL, NULL, 'test', NULL, NULL, NULL, 'suggest', 'السلام عليكم', '1', '13', 'publisher', '2022-09-27 14:29:03', '2022-09-27 14:58:15'),
(16, NULL, NULL, 'hi', NULL, NULL, NULL, 'question', 'hello', '1', '13', 'publisher', '2022-09-27 15:31:14', '2022-09-29 13:36:48'),
(17, NULL, NULL, 'test', NULL, NULL, NULL, 'suggest', 'test 1', '1', '2', 'publisher', '2022-09-27 17:25:46', '2022-09-29 13:36:39'),
(18, NULL, NULL, 'هلو', NULL, NULL, NULL, 'question', 'هلو', '1', '13', 'publisher', '2022-09-27 19:48:07', '2022-09-29 13:36:51'),
(48, 'manar', '...', '...', 'EG', '01026033826', 'manar.m.elhefnawy@gmail.com', 'complaint', '....', '1', NULL, NULL, '2022-10-03 19:56:05', '2022-10-04 12:43:34'),
(20, 'ezat', 'gdfg', 'ghfvhufg', '63', '1023123121', 'ezatellozy1@gmail.com', 'suggest', 'hftydf', '1', NULL, NULL, '2022-09-28 18:29:50', '2022-10-04 12:44:06'),
(21, 'ezat', 'gdfg', NULL, '3', '1023123121', 'ezatellozy1@gmail.com', 'suggest', 'dddd', '1', NULL, NULL, '2022-09-28 18:30:29', '2022-10-04 17:32:18'),
(22, 'dsad', 'gdfg', 'ghfvhufg', '2', '1023123121', 'ezatellozy1@gmail.com', 'suggest', 'dsadasd', '1', NULL, NULL, '2022-09-29 11:42:50', '2022-10-04 21:03:13'),
(23, 'ezat', 'gdfg', 'ghfvhufg', '2', '1023123121', 'ezatellozy1@gmail.com', 'question', 'asdd', '1', NULL, NULL, '2022-09-29 11:43:44', '2022-10-05 15:05:44'),
(24, 'ezat', 'fdsfsdf', 'ghfvhufg', '69', '1023123121', 'ezatell@gmail.com', 'question', 'fsdfsdfsd', '1', NULL, NULL, '2022-09-29 11:44:31', '2022-10-05 19:44:22'),
(25, 'ezat', 'gdfg', 'ghfvhufg', '1', '1023123121', 'ezatellozy1@gmail.com', 'suggest', 'fdgdfg', '1', NULL, NULL, '2022-09-29 11:48:32', '2022-10-07 00:26:41'),
(26, 'dsad', 'gdfg', 'ghfvhufg', '2', '1023123121', 'ezatellozy1@gmail.com', 'question', 'fsdfdsf', '1', NULL, NULL, '2022-09-29 11:49:39', '2022-10-11 12:45:03'),
(27, 'ezat', 'gdfg', 'ghfvhufg', '2', '1023123121', 'ezatellozy1@gmail.com', 'question', 'dasdasd', '1', NULL, NULL, '2022-09-29 11:50:36', '2022-10-11 16:38:55'),
(28, 'dsad', 'gdfg', 'dfskfhn', '2', '10212121', 'ezatell@gmail.com', 'question', 'vdskfnsd', '1', NULL, NULL, '2022-09-29 11:51:37', '2022-10-14 14:13:44'),
(29, 'ezat', 'fsdfsd', 'ghfvhufg', '18', '1023123121', 'ezatell@gmail.com', 'suggest', 'fsdfsdf', '1', NULL, NULL, '2022-09-29 12:17:23', '2022-10-11 17:04:56'),
(30, 'ezat', 'fds', 'fsdfsdfsdf', '2', '1023123121', 'ezatell@gmail.com', 'suggest', 'fsdfsdf', '1', NULL, NULL, '2022-09-29 12:17:52', '2022-10-16 20:20:15'),
(31, 'ezat', 'gdfg', 'fsdfsdf', '16', '15152111', 'ezatellozy1@gmail.com', 'request', 'fsdfsdfdsf', '1', NULL, NULL, '2022-09-29 12:18:14', '2022-10-16 21:07:37'),
(32, 'ezat', 'gdfg', 'ghfvhufg', '17', '1023123121', 'ezatellozy1@gmail.com', 'request', 'gfhg', '1', NULL, NULL, '2022-09-29 12:40:23', '2022-10-16 23:47:26'),
(33, 'محمد', NULL, NULL, '63', '01000000000', 'tester@technomasr.com', NULL, 'this is my message', '1', NULL, NULL, '2022-09-29 17:04:19', '2022-10-19 13:35:19'),
(34, 'محمد', NULL, NULL, '63', '01000000000', 'tester@technomasr.com', NULL, 'this is my message', '1', NULL, NULL, '2022-09-29 17:20:01', '2022-10-04 17:24:55'),
(35, 'sdegdsgs', 'dsfdf', 'sdfsdf', 'AM', '02000', 'doj@dskv.divhj', 'request', 'dffd', '1', NULL, NULL, '2022-09-29 17:22:07', '2022-10-19 21:20:35'),
(36, 'dhdhdh', 'dhxhh', 'dhdhdhhd', 'AR', '0191983', 'dhdhh@dhd.fhfh', 'complaint', 'ggfff', '1', NULL, NULL, '2022-09-29 21:08:43', '2022-10-19 21:20:40'),
(37, 'abuobaida', 'ilaw', 'Sharjah', 'AE', '0508750613', 'abuobaida@ilaw.ae', 'question', 'Test', '1', NULL, NULL, '2022-09-30 08:56:57', '2022-10-19 21:20:38'),
(38, 'Mustafa', 'iLAW', 'test', 'AE', '0508750613', 'abobeada@gmail.com', 'request', 'Test', '1', NULL, NULL, '2022-09-30 08:59:17', '2022-10-19 13:38:21'),
(39, 'omer', 'ilaw', 'test', 'SA', '0508750613', 'omer@ilaw.ae', 'suggest', 'test', '1', NULL, NULL, '2022-09-30 09:01:58', '2022-10-20 15:41:32'),
(42, 'خالد', NULL, NULL, 'AO', '0545412304', 'hossam@ilaw.ae', 'suggest', 'تعديل على التصنيفات', '1', NULL, NULL, '2022-10-03 11:59:18', '2022-10-20 15:42:19'),
(41, 'Abuobaida', 'ilaw', 'test', 'AE', '0508750613', 'mr.abuobaidamustafa@gmail.com', 'question', 'Test', '1', NULL, NULL, '2022-10-03 09:38:17', '2022-10-20 15:53:28'),
(43, 'test10', NULL, NULL, 'AQ', '862866377', 'test@google.ae', 'suggest', 'test10', '1', NULL, NULL, '2022-10-03 12:01:36', '2022-10-24 13:07:33'),
(44, 'تيست', 'test', 'fufj', 'AO', '584848', 'mr.abuobaidamustafa@gmail.com', 'request', 'Tjrrjj', '1', NULL, NULL, '2022-10-03 12:03:27', '2022-10-11 17:04:30'),
(45, 'ttt', 'hhg', 'jhhh', 'AI', '8687654', 'tt@t.com', 'complaint', 'hhhhv', '1', NULL, NULL, '2022-10-03 12:04:32', '2022-10-24 13:31:20'),
(46, NULL, NULL, 'النريخ', NULL, NULL, NULL, 'suggest', 'كيفك', '1', '13', 'publisher', '2022-10-03 16:45:15', '2022-10-03 16:45:34'),
(49, 'hy', 'esgt', 'sefgs', 'AM', '00140', 'fthdf@trh.ry', 'question', 'fjf', '1', NULL, NULL, '2022-10-03 20:04:19', '2022-10-24 13:31:17'),
(50, 'gjyjytj', 'gdrg', 'gh', 'AW', '0202222', 'fjrtdj@trhd.fjth', 'question', 'fgtjgk', '1', NULL, NULL, '2022-10-03 20:06:04', '2022-10-19 21:21:34'),
(51, 'manar', '......', '..........', '63', '01026033826', 'manar.m.elhefnawy@gmail.com', 'complaint', '...........', '1', NULL, NULL, '2022-10-03 20:08:11', '2022-10-04 00:11:41'),
(52, 'test', 'test', 'test', 'AE', '0508750613', 'app@ilaw.ae', 'suggest', 'Test', '1', NULL, NULL, '2022-10-04 08:43:14', '2022-10-04 12:44:14'),
(53, NULL, NULL, 'eddfe', NULL, NULL, NULL, 'suggest', 'efefe', '1', '13', 'publisher', '2022-10-04 17:33:38', '2022-10-04 17:34:10'),
(54, 'manar', 'manar', '.....', 'EG', '010268938632', 'rwad.solutions8@gmail.com', 'complaint', 'hi,we test', '1', NULL, NULL, '2022-10-06 17:02:43', '2022-10-06 21:17:06'),
(55, NULL, NULL, 'test', NULL, NULL, NULL, 'suggest', 'test', '1', '2', 'publisher', '2022-10-24 14:11:42', '2022-10-24 14:11:59'),
(56, 'hossam', 'babak', 'قانون الشركات', '4', '0545412304', 'hossam@ilaw.ae', 'complaint', 'الاقلام', '1', NULL, NULL, '2022-10-24 12:07:46', '2022-10-24 16:09:16'),
(57, 'المتحدة للنشر والتوزيع', NULL, 'ف', '8', '45565659', 'hossamdeeb46@gmail.com', 'complaint', 'ف', '1', NULL, NULL, '2022-10-24 12:09:47', '2022-10-24 16:17:12'),
(58, 'manar', '......', 'testing', '63', '010230130', 'technomasr4@gmail.com', 'suggest', 'we test the site', '1', NULL, NULL, '2022-11-06 19:25:12', '2022-11-06 23:25:38'),
(59, 'manar', '......', 'testing', '247', '0103230000', 'test@technomasr.com', 'question', 'test', '1', NULL, NULL, '2022-11-07 13:03:52', '2022-11-07 17:04:12');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_fr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nicename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iso3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonecode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `block` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `iso`, `name_ar`, `name_en`, `name_fr`, `nicename`, `iso3`, `numcode`, `phonecode`, `block`, `created_at`, `updated_at`) VALUES
(1, 'AF', 'أفغانستان', 'AFGHANISTAN', NULL, 'Afghanistan', 'AFG', '4', '93', 0, NULL, '2022-10-17 17:42:26'),
(2, 'AL', NULL, 'ALBANIA', NULL, 'Albania', 'ALB', '8', '355', 0, NULL, NULL),
(3, 'DZ', NULL, 'ALGERIA', NULL, 'Algeria', 'DZA', '12', '213', 0, NULL, NULL),
(4, 'AS', NULL, 'AMERICAN SAMOA', NULL, 'American Samoa', 'ASM', '16', '1684', 0, NULL, NULL),
(5, 'AD', NULL, 'ANDORRA', NULL, 'Andorra', 'AND', '20', '376', 0, NULL, NULL),
(6, 'AO', NULL, 'ANGOLA', NULL, 'Angola', 'AGO', '24', '244', 0, NULL, NULL),
(7, 'AI', NULL, 'ANGUILLA', NULL, 'Anguilla', 'AIA', '660', '1264', 0, NULL, NULL),
(8, 'AQ', NULL, 'ANTARCTICA', NULL, 'Antarctica', NULL, NULL, '0', 0, NULL, NULL),
(9, 'AG', NULL, 'ANTIGUA AND BARBUDA', NULL, 'Antigua and Barbuda', 'ATG', '28', '1268', 0, NULL, NULL),
(10, 'AR', NULL, 'ARGENTINA', NULL, 'Argentina', 'ARG', '32', '54', 0, NULL, NULL),
(11, 'AM', NULL, 'ARMENIA', NULL, 'Armenia', 'ARM', '51', '374', 0, NULL, NULL),
(12, 'AW', NULL, 'ARUBA', NULL, 'Aruba', 'ABW', '533', '297', 0, NULL, NULL),
(13, 'AU', NULL, 'AUSTRALIA', NULL, 'Australia', 'AUS', '36', '61', 0, NULL, NULL),
(14, 'AT', NULL, 'AUSTRIA', NULL, 'Austria', 'AUT', '40', '43', 0, NULL, NULL),
(15, 'AZ', NULL, 'AZERBAIJAN', NULL, 'Azerbaijan', 'AZE', '31', '994', 0, NULL, NULL),
(16, 'BS', NULL, 'BAHAMAS', NULL, 'Bahamas', 'BHS', '44', '1242', 0, NULL, NULL),
(17, 'BH', NULL, 'BAHRAIN', NULL, 'Bahrain', 'BHR', '48', '973', 0, NULL, NULL),
(18, 'BD', NULL, 'BANGLADESH', NULL, 'Bangladesh', 'BGD', '50', '880', 0, NULL, NULL),
(19, 'BB', NULL, 'BARBADOS', NULL, 'Barbados', 'BRB', '52', '1246', 0, NULL, NULL),
(20, 'BY', NULL, 'BELARUS', NULL, 'Belarus', 'BLR', '112', '375', 0, NULL, NULL),
(21, 'BE', NULL, 'BELGIUM', NULL, 'Belgium', 'BEL', '56', '32', 0, NULL, NULL),
(22, 'BZ', NULL, 'BELIZE', NULL, 'Belize', 'BLZ', '84', '501', 0, NULL, NULL),
(23, 'BJ', NULL, 'BENIN', NULL, 'Benin', 'BEN', '204', '229', 0, NULL, NULL),
(24, 'BM', NULL, 'BERMUDA', NULL, 'Bermuda', 'BMU', '60', '1441', 0, NULL, NULL),
(25, 'BT', NULL, 'BHUTAN', NULL, 'Bhutan', 'BTN', '64', '975', 0, NULL, NULL),
(26, 'BO', NULL, 'BOLIVIA', NULL, 'Bolivia', 'BOL', '68', '591', 0, NULL, NULL),
(27, 'BA', NULL, 'BOSNIA AND HERZEGOVINA', NULL, 'Bosnia and Herzegovina', 'BIH', '70', '387', 0, NULL, NULL),
(28, 'BW', NULL, 'BOTSWANA', NULL, 'Botswana', 'BWA', '72', '267', 0, NULL, NULL),
(29, 'BV', NULL, 'BOUVET ISLAND', NULL, 'Bouvet Island', NULL, NULL, '0', 0, NULL, NULL),
(30, 'BR', NULL, 'BRAZIL', NULL, 'Brazil', 'BRA', '76', '55', 0, NULL, NULL),
(31, 'IO', NULL, 'BRITISH INDIAN OCEAN TERRITORY', NULL, 'British Indian Ocean Territory', NULL, NULL, '246', 0, NULL, NULL),
(32, 'BN', NULL, 'BRUNEI DARUSSALAM', NULL, 'Brunei Darussalam', 'BRN', '96', '673', 0, NULL, NULL),
(33, 'BG', NULL, 'BULGARIA', NULL, 'Bulgaria', 'BGR', '100', '359', 0, NULL, NULL),
(34, 'BF', NULL, 'BURKINA FASO', NULL, 'Burkina Faso', 'BFA', '854', '226', 0, NULL, NULL),
(35, 'BI', NULL, 'BURUNDI', NULL, 'Burundi', 'BDI', '108', '257', 0, NULL, NULL),
(36, 'KH', NULL, 'CAMBODIA', NULL, 'Cambodia', 'KHM', '116', '855', 0, NULL, NULL),
(37, 'CM', NULL, 'CAMEROON', NULL, 'Cameroon', 'CMR', '120', '237', 0, NULL, NULL),
(38, 'CA', NULL, 'CANADA', NULL, 'Canada', 'CAN', '124', '1', 0, NULL, NULL),
(39, 'CV', NULL, 'CAPE VERDE', NULL, 'Cape Verde', 'CPV', '132', '238', 0, NULL, NULL),
(40, 'KY', NULL, 'CAYMAN ISLANDS', NULL, 'Cayman Islands', 'CYM', '136', '1345', 0, NULL, NULL),
(41, 'CF', NULL, 'CENTRAL AFRICAN REPUBLIC', NULL, 'Central African Republic', 'CAF', '140', '236', 0, NULL, NULL),
(42, 'TD', NULL, 'CHAD', NULL, 'Chad', 'TCD', '148', '235', 0, NULL, NULL),
(43, 'CL', NULL, 'CHILE', NULL, 'Chile', 'CHL', '152', '56', 0, NULL, NULL),
(44, 'CN', NULL, 'CHINA', NULL, 'China', 'CHN', '156', '86', 0, NULL, NULL),
(45, 'CX', NULL, 'CHRISTMAS ISLAND', NULL, 'Christmas Island', NULL, NULL, '61', 0, NULL, NULL),
(46, 'CC', NULL, 'COCOS (KEELING) ISLANDS', NULL, 'Cocos (Keeling) Islands', NULL, NULL, '672', 0, NULL, NULL),
(47, 'CO', NULL, 'COLOMBIA', NULL, 'Colombia', 'COL', '170', '57', 0, NULL, NULL),
(48, 'KM', NULL, 'COMOROS', NULL, 'Comoros', 'COM', '174', '269', 0, NULL, NULL),
(49, 'CG', NULL, 'CONGO', NULL, 'Congo', 'COG', '178', '242', 0, NULL, NULL),
(50, 'CD', NULL, 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', NULL, 'Congo, the Democratic Republic of the', 'COD', '180', '242', 0, NULL, NULL),
(51, 'CK', NULL, 'COOK ISLANDS', NULL, 'Cook Islands', 'COK', '184', '682', 0, NULL, NULL),
(52, 'CR', NULL, 'COSTA RICA', NULL, 'Costa Rica', 'CRI', '188', '506', 0, NULL, NULL),
(53, 'CI', NULL, 'COTE D\'IVOIRE', NULL, 'Cote D\'Ivoire', 'CIV', '384', '225', 0, NULL, NULL),
(54, 'HR', NULL, 'CROATIA', NULL, 'Croatia', 'HRV', '191', '385', 0, NULL, NULL),
(55, 'CU', NULL, 'CUBA', NULL, 'Cuba', 'CUB', '192', '53', 0, NULL, NULL),
(56, 'CY', NULL, 'CYPRUS', NULL, 'Cyprus', 'CYP', '196', '357', 0, NULL, NULL),
(57, 'CZ', NULL, 'CZECH REPUBLIC', NULL, 'Czech Republic', 'CZE', '203', '420', 0, NULL, NULL),
(58, 'DK', NULL, 'DENMARK', NULL, 'Denmark', 'DNK', '208', '45', 0, NULL, NULL),
(59, 'DJ', NULL, 'DJIBOUTI', NULL, 'Djibouti', 'DJI', '262', '253', 0, NULL, NULL),
(60, 'DM', NULL, 'DOMINICA', NULL, 'Dominica', 'DMA', '212', '1767', 0, NULL, NULL),
(61, 'DO', NULL, 'DOMINICAN REPUBLIC', NULL, 'Dominican Republic', 'DOM', '214', '1809', 0, NULL, NULL),
(62, 'EC', NULL, 'ECUADOR', NULL, 'Ecuador', 'ECU', '218', '593', 0, NULL, NULL),
(63, 'EG', 'مصر', 'EGYPT', NULL, 'Egypt', 'EGY', '818', '20', 0, NULL, '2022-06-10 02:23:25'),
(64, 'SV', NULL, 'EL SALVADOR', NULL, 'El Salvador', 'SLV', '222', '503', 0, NULL, NULL),
(65, 'GQ', NULL, 'EQUATORIAL GUINEA', NULL, 'Equatorial Guinea', 'GNQ', '226', '240', 0, NULL, NULL),
(66, 'ER', NULL, 'ERITREA', NULL, 'Eritrea', 'ERI', '232', '291', 0, NULL, NULL),
(67, 'EE', NULL, 'ESTONIA', NULL, 'Estonia', 'EST', '233', '372', 0, NULL, NULL),
(68, 'ET', NULL, 'ETHIOPIA', NULL, 'Ethiopia', 'ETH', '231', '251', 0, NULL, NULL),
(69, 'FK', NULL, 'FALKLAND ISLANDS (MALVINAS)', NULL, 'Falkland Islands (Malvinas)', 'FLK', '238', '500', 0, NULL, NULL),
(70, 'FO', NULL, 'FAROE ISLANDS', NULL, 'Faroe Islands', 'FRO', '234', '298', 0, NULL, NULL),
(71, 'FJ', NULL, 'FIJI', NULL, 'Fiji', 'FJI', '242', '679', 0, NULL, NULL),
(72, 'FI', NULL, 'FINLAND', NULL, 'Finland', 'FIN', '246', '358', 0, NULL, NULL),
(73, 'FR', NULL, 'FRANCE', NULL, 'France', 'FRA', '250', '33', 0, NULL, NULL),
(74, 'GF', NULL, 'FRENCH GUIANA', NULL, 'French Guiana', 'GUF', '254', '594', 0, NULL, NULL),
(75, 'PF', NULL, 'FRENCH POLYNESIA', NULL, 'French Polynesia', 'PYF', '258', '689', 0, NULL, NULL),
(76, 'TF', NULL, 'FRENCH SOUTHERN TERRITORIES', NULL, 'French Southern Territories', NULL, NULL, '0', 0, NULL, NULL),
(77, 'GA', NULL, 'GABON', NULL, 'Gabon', 'GAB', '266', '241', 0, NULL, NULL),
(78, 'GM', NULL, 'GAMBIA', NULL, 'Gambia', 'GMB', '270', '220', 0, NULL, NULL),
(79, 'GE', NULL, 'GEORGIA', NULL, 'Georgia', 'GEO', '268', '995', 0, NULL, NULL),
(80, 'DE', NULL, 'GERMANY', NULL, 'Germany', 'DEU', '276', '49', 0, NULL, NULL),
(81, 'GH', NULL, 'GHANA', NULL, 'Ghana', 'GHA', '288', '233', 0, NULL, NULL),
(82, 'GI', NULL, 'GIBRALTAR', NULL, 'Gibraltar', 'GIB', '292', '350', 0, NULL, NULL),
(83, 'GR', NULL, 'GREECE', NULL, 'Greece', 'GRC', '300', '30', 0, NULL, NULL),
(84, 'GL', NULL, 'GREENLAND', NULL, 'Greenland', 'GRL', '304', '299', 0, NULL, NULL),
(85, 'GD', NULL, 'GRENADA', NULL, 'Grenada', 'GRD', '308', '1473', 0, NULL, NULL),
(86, 'GP', NULL, 'GUADELOUPE', NULL, 'Guadeloupe', 'GLP', '312', '590', 0, NULL, NULL),
(87, 'GU', NULL, 'GUAM', NULL, 'Guam', 'GUM', '316', '1671', 0, NULL, NULL),
(88, 'GT', NULL, 'GUATEMALA', NULL, 'Guatemala', 'GTM', '320', '502', 0, NULL, NULL),
(89, 'GN', NULL, 'GUINEA', NULL, 'Guinea', 'GIN', '324', '224', 0, NULL, NULL),
(90, 'GW', NULL, 'GUINEA-BISSAU', NULL, 'Guinea-Bissau', 'GNB', '624', '245', 0, NULL, NULL),
(91, 'GY', NULL, 'GUYANA', NULL, 'Guyana', 'GUY', '328', '592', 0, NULL, NULL),
(92, 'HT', NULL, 'HAITI', NULL, 'Haiti', 'HTI', '332', '509', 0, NULL, NULL),
(93, 'HM', NULL, 'HEARD ISLAND AND MCDONALD ISLANDS', NULL, 'Heard Island and Mcdonald Islands', NULL, NULL, '0', 0, NULL, NULL),
(94, 'VA', NULL, 'HOLY SEE (VATICAN CITY STATE)', NULL, 'Holy See (Vatican City State)', 'VAT', '336', '39', 0, NULL, NULL),
(95, 'HN', NULL, 'HONDURAS', NULL, 'Honduras', 'HND', '340', '504', 0, NULL, NULL),
(96, 'HK', NULL, 'HONG KONG', NULL, 'Hong Kong', 'HKG', '344', '852', 0, NULL, NULL),
(97, 'HU', NULL, 'HUNGARY', NULL, 'Hungary', 'HUN', '348', '36', 0, NULL, NULL),
(98, 'IS', NULL, 'ICELAND', NULL, 'Iceland', 'ISL', '352', '354', 0, NULL, NULL),
(99, 'IN', NULL, 'INDIA', NULL, 'India', 'IND', '356', '91', 0, NULL, NULL),
(100, 'ID', NULL, 'INDONESIA', NULL, 'Indonesia', 'IDN', '360', '62', 0, NULL, NULL),
(101, 'IR', NULL, 'IRAN, ISLAMIC REPUBLIC OF', NULL, 'Iran, Islamic Republic of', 'IRN', '364', '98', 0, NULL, NULL),
(102, 'IQ', NULL, 'IRAQ', NULL, 'Iraq', 'IRQ', '368', '964', 0, NULL, NULL),
(103, 'IE', NULL, 'IRELAND', NULL, 'Ireland', 'IRL', '372', '353', 0, NULL, NULL),
(104, 'IL', NULL, 'ISRAEL', NULL, 'Israel', 'ISR', '376', '972', 0, NULL, NULL),
(105, 'IT', NULL, 'ITALY', NULL, 'Italy', 'ITA', '380', '39', 0, NULL, NULL),
(106, 'JM', NULL, 'JAMAICA', NULL, 'Jamaica', 'JAM', '388', '1876', 0, NULL, NULL),
(107, 'JP', NULL, 'JAPAN', NULL, 'Japan', 'JPN', '392', '81', 0, NULL, NULL),
(108, 'JO', NULL, 'JORDAN', NULL, 'Jordan', 'JOR', '400', '962', 0, NULL, NULL),
(109, 'KZ', NULL, 'KAZAKHSTAN', NULL, 'Kazakhstan', 'KAZ', '398', '7', 0, NULL, NULL),
(110, 'KE', NULL, 'KENYA', NULL, 'Kenya', 'KEN', '404', '254', 0, NULL, NULL),
(111, 'KI', NULL, 'KIRIBATI', NULL, 'Kiribati', 'KIR', '296', '686', 0, NULL, NULL),
(112, 'KP', NULL, 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', NULL, 'Korea, Democratic People\'s Republic of', 'PRK', '408', '850', 0, NULL, NULL),
(113, 'KR', NULL, 'KOREA, REPUBLIC OF', NULL, 'Korea, Republic of', 'KOR', '410', '82', 0, NULL, NULL),
(114, 'KW', NULL, 'KUWAIT', NULL, 'Kuwait', 'KWT', '414', '965', 0, NULL, NULL),
(115, 'KG', NULL, 'KYRGYZSTAN', NULL, 'Kyrgyzstan', 'KGZ', '417', '996', 0, NULL, NULL),
(116, 'LA', NULL, 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', NULL, 'Lao People\'s Democratic Republic', 'LAO', '418', '856', 0, NULL, NULL),
(117, 'LV', NULL, 'LATVIA', NULL, 'Latvia', 'LVA', '428', '371', 0, NULL, NULL),
(118, 'LB', NULL, 'LEBANON', NULL, 'Lebanon', 'LBN', '422', '961', 0, NULL, NULL),
(119, 'LS', NULL, 'LESOTHO', NULL, 'Lesotho', 'LSO', '426', '266', 0, NULL, NULL),
(120, 'LR', NULL, 'LIBERIA', NULL, 'Liberia', 'LBR', '430', '231', 0, NULL, NULL),
(121, 'LY', NULL, 'LIBYAN ARAB JAMAHIRIYA', NULL, 'Libyan Arab Jamahiriya', 'LBY', '434', '218', 0, NULL, NULL),
(122, 'LI', NULL, 'LIECHTENSTEIN', NULL, 'Liechtenstein', 'LIE', '438', '423', 0, NULL, NULL),
(123, 'LT', NULL, 'LITHUANIA', NULL, 'Lithuania', 'LTU', '440', '370', 0, NULL, NULL),
(124, 'LU', NULL, 'LUXEMBOURG', NULL, 'Luxembourg', 'LUX', '442', '352', 0, NULL, NULL),
(125, 'MO', NULL, 'MACAO', NULL, 'Macao', 'MAC', '446', '853', 0, NULL, NULL),
(126, 'MK', NULL, 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', NULL, 'Macedonia, the Former Yugoslav Republic of', 'MKD', '807', '389', 0, NULL, NULL),
(127, 'MG', NULL, 'MADAGASCAR', NULL, 'Madagascar', 'MDG', '450', '261', 0, NULL, NULL),
(128, 'MW', NULL, 'MALAWI', NULL, 'Malawi', 'MWI', '454', '265', 0, NULL, NULL),
(129, 'MY', NULL, 'MALAYSIA', NULL, 'Malaysia', 'MYS', '458', '60', 0, NULL, NULL),
(130, 'MV', NULL, 'MALDIVES', NULL, 'Maldives', 'MDV', '462', '960', 0, NULL, NULL),
(131, 'ML', NULL, 'MALI', NULL, 'Mali', 'MLI', '466', '223', 0, NULL, NULL),
(132, 'MT', NULL, 'MALTA', NULL, 'Malta', 'MLT', '470', '356', 0, NULL, NULL),
(133, 'MH', NULL, 'MARSHALL ISLANDS', NULL, 'Marshall Islands', 'MHL', '584', '692', 0, NULL, NULL),
(134, 'MQ', NULL, 'MARTINIQUE', NULL, 'Martinique', 'MTQ', '474', '596', 0, NULL, NULL),
(135, 'MR', NULL, 'MAURITANIA', NULL, 'Mauritania', 'MRT', '478', '222', 0, NULL, NULL),
(136, 'MU', NULL, 'MAURITIUS', NULL, 'Mauritius', 'MUS', '480', '230', 0, NULL, NULL),
(137, 'YT', NULL, 'MAYOTTE', NULL, 'Mayotte', NULL, NULL, '269', 0, NULL, NULL),
(138, 'MX', NULL, 'MEXICO', NULL, 'Mexico', 'MEX', '484', '52', 0, NULL, NULL),
(139, 'FM', NULL, 'MICRONESIA, FEDERATED STATES OF', NULL, 'Micronesia, Federated States of', 'FSM', '583', '691', 0, NULL, NULL),
(140, 'MD', NULL, 'MOLDOVA, REPUBLIC OF', NULL, 'Moldova, Republic of', 'MDA', '498', '373', 0, NULL, NULL),
(141, 'MC', NULL, 'MONACO', NULL, 'Monaco', 'MCO', '492', '377', 0, NULL, NULL),
(142, 'MN', NULL, 'MONGOLIA', NULL, 'Mongolia', 'MNG', '496', '976', 0, NULL, NULL),
(143, 'MS', NULL, 'MONTSERRAT', NULL, 'Montserrat', 'MSR', '500', '1664', 0, NULL, NULL),
(144, 'MA', NULL, 'MOROCCO', NULL, 'Morocco', 'MAR', '504', '212', 0, NULL, NULL),
(145, 'MZ', NULL, 'MOZAMBIQUE', NULL, 'Mozambique', 'MOZ', '508', '258', 0, NULL, NULL),
(146, 'MM', NULL, 'MYANMAR', NULL, 'Myanmar', 'MMR', '104', '95', 0, NULL, NULL),
(147, 'NA', NULL, 'NAMIBIA', NULL, 'Namibia', 'NAM', '516', '264', 0, NULL, NULL),
(148, 'NR', NULL, 'NAURU', NULL, 'Nauru', 'NRU', '520', '674', 0, NULL, NULL),
(149, 'NP', NULL, 'NEPAL', NULL, 'Nepal', 'NPL', '524', '977', 0, NULL, NULL),
(150, 'NL', NULL, 'NETHERLANDS', NULL, 'Netherlands', 'NLD', '528', '31', 0, NULL, NULL),
(151, 'AN', NULL, 'NETHERLANDS ANTILLES', NULL, 'Netherlands Antilles', 'ANT', '530', '599', 0, NULL, NULL),
(152, 'NC', NULL, 'NEW CALEDONIA', NULL, 'New Caledonia', 'NCL', '540', '687', 0, NULL, NULL),
(153, 'NZ', NULL, 'NEW ZEALAND', NULL, 'New Zealand', 'NZL', '554', '64', 0, NULL, NULL),
(154, 'NI', NULL, 'NICARAGUA', NULL, 'Nicaragua', 'NIC', '558', '505', 0, NULL, NULL),
(155, 'NE', NULL, 'NIGER', NULL, 'Niger', 'NER', '562', '227', 0, NULL, NULL),
(156, 'NG', NULL, 'NIGERIA', NULL, 'Nigeria', 'NGA', '566', '234', 0, NULL, NULL),
(157, 'NU', NULL, 'NIUE', NULL, 'Niue', 'NIU', '570', '683', 0, NULL, NULL),
(158, 'NF', NULL, 'NORFOLK ISLAND', NULL, 'Norfolk Island', 'NFK', '574', '672', 0, NULL, NULL),
(159, 'MP', NULL, 'NORTHERN MARIANA ISLANDS', NULL, 'Northern Mariana Islands', 'MNP', '580', '1670', 0, NULL, NULL),
(160, 'NO', NULL, 'NORWAY', NULL, 'Norway', 'NOR', '578', '47', 0, NULL, NULL),
(161, 'OM', NULL, 'OMAN', NULL, 'Oman', 'OMN', '512', '968', 0, NULL, NULL),
(162, 'PK', NULL, 'PAKISTAN', NULL, 'Pakistan', 'PAK', '586', '92', 0, NULL, NULL),
(163, 'PW', NULL, 'PALAU', NULL, 'Palau', 'PLW', '585', '680', 0, NULL, NULL),
(164, 'PS', NULL, 'PALESTINIAN TERRITORY, OCCUPIED', NULL, 'Palestinian Territory, Occupied', NULL, NULL, '970', 0, NULL, NULL),
(165, 'PA', NULL, 'PANAMA', NULL, 'Panama', 'PAN', '591', '507', 0, NULL, NULL),
(166, 'PG', NULL, 'PAPUA NEW GUINEA', NULL, 'Papua New Guinea', 'PNG', '598', '675', 0, NULL, NULL),
(167, 'PY', NULL, 'PARAGUAY', NULL, 'Paraguay', 'PRY', '600', '595', 0, NULL, NULL),
(168, 'PE', NULL, 'PERU', NULL, 'Peru', 'PER', '604', '51', 0, NULL, NULL),
(169, 'PH', NULL, 'PHILIPPINES', NULL, 'Philippines', 'PHL', '608', '63', 0, NULL, NULL),
(170, 'PN', NULL, 'PITCAIRN', NULL, 'Pitcairn', 'PCN', '612', '0', 0, NULL, NULL),
(171, 'PL', NULL, 'POLAND', NULL, 'Poland', 'POL', '616', '48', 0, NULL, NULL),
(172, 'PT', NULL, 'PORTUGAL', NULL, 'Portugal', 'PRT', '620', '351', 0, NULL, NULL),
(173, 'PR', NULL, 'PUERTO RICO', NULL, 'Puerto Rico', 'PRI', '630', '1787', 0, NULL, NULL),
(174, 'QA', NULL, 'QATAR', NULL, 'Qatar', 'QAT', '634', '974', 0, NULL, NULL),
(175, 'RE', NULL, 'REUNION', NULL, 'Reunion', 'REU', '638', '262', 0, NULL, NULL),
(176, 'RO', NULL, 'ROMANIA', NULL, 'Romania', 'ROM', '642', '40', 0, NULL, NULL),
(177, 'RU', NULL, 'RUSSIAN FEDERATION', NULL, 'Russian Federation', 'RUS', '643', '70', 0, NULL, NULL),
(178, 'RW', NULL, 'RWANDA', NULL, 'Rwanda', 'RWA', '646', '250', 0, NULL, NULL),
(179, 'SH', NULL, 'SAINT HELENA', NULL, 'Saint Helena', 'SHN', '654', '290', 0, NULL, NULL),
(180, 'KN', NULL, 'SAINT KITTS AND NEVIS', NULL, 'Saint Kitts and Nevis', 'KNA', '659', '1869', 0, NULL, NULL),
(181, 'LC', NULL, 'SAINT LUCIA', NULL, 'Saint Lucia', 'LCA', '662', '1758', 0, NULL, NULL),
(182, 'PM', NULL, 'SAINT PIERRE AND MIQUELON', NULL, 'Saint Pierre and Miquelon', 'SPM', '666', '508', 0, NULL, NULL),
(183, 'VC', NULL, 'SAINT VINCENT AND THE GRENADINES', NULL, 'Saint Vincent and the Grenadines', 'VCT', '670', '1784', 0, NULL, NULL),
(184, 'WS', NULL, 'SAMOA', NULL, 'Samoa', 'WSM', '882', '684', 0, NULL, NULL),
(185, 'SM', NULL, 'SAN MARINO', NULL, 'San Marino', 'SMR', '674', '378', 0, NULL, NULL),
(186, 'ST', NULL, 'SAO TOME AND PRINCIPE', NULL, 'Sao Tome and Principe', 'STP', '678', '239', 0, NULL, NULL),
(187, 'SA', 'السعودية', 'SAUDI ARABIA', NULL, 'Saudi Arabia', 'SAU', '682', '966', 0, NULL, '2022-06-10 02:30:20'),
(188, 'SN', NULL, 'SENEGAL', NULL, 'Senegal', 'SEN', '686', '221', 0, NULL, NULL),
(189, 'CS', NULL, 'SERBIA AND MONTENEGRO', NULL, 'Serbia and Montenegro', NULL, NULL, '381', 0, NULL, NULL),
(190, 'SC', NULL, 'SEYCHELLES', NULL, 'Seychelles', 'SYC', '690', '248', 0, NULL, NULL),
(191, 'SL', NULL, 'SIERRA LEONE', NULL, 'Sierra Leone', 'SLE', '694', '232', 0, NULL, NULL),
(192, 'SG', NULL, 'SINGAPORE', NULL, 'Singapore', 'SGP', '702', '65', 0, NULL, NULL),
(193, 'SK', NULL, 'SLOVAKIA', NULL, 'Slovakia', 'SVK', '703', '421', 0, NULL, NULL),
(194, 'SI', NULL, 'SLOVENIA', NULL, 'Slovenia', 'SVN', '705', '386', 0, NULL, NULL),
(195, 'SB', NULL, 'SOLOMON ISLANDS', NULL, 'Solomon Islands', 'SLB', '90', '677', 0, NULL, NULL),
(196, 'SO', NULL, 'SOMALIA', NULL, 'Somalia', 'SOM', '706', '252', 0, NULL, NULL),
(197, 'ZA', NULL, 'SOUTH AFRICA', NULL, 'South Africa', 'ZAF', '710', '27', 0, NULL, NULL),
(198, 'GS', NULL, 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', NULL, 'South Georgia and the South Sandwich Islands', NULL, NULL, '0', 0, NULL, NULL),
(199, 'ES', NULL, 'SPAIN', NULL, 'Spain', 'ESP', '724', '34', 0, NULL, NULL),
(200, 'LK', NULL, 'SRI LANKA', NULL, 'Sri Lanka', 'LKA', '144', '94', 0, NULL, NULL),
(201, 'SD', NULL, 'SUDAN', NULL, 'Sudan', 'SDN', '736', '249', 0, NULL, NULL),
(202, 'SR', NULL, 'SURINAME', NULL, 'Suriname', 'SUR', '740', '597', 0, NULL, NULL),
(203, 'SJ', NULL, 'SVALBARD AND JAN MAYEN', NULL, 'Svalbard and Jan Mayen', 'SJM', '744', '47', 0, NULL, NULL),
(204, 'SZ', NULL, 'SWAZILAND', NULL, 'Swaziland', 'SWZ', '748', '268', 0, NULL, NULL),
(205, 'SE', NULL, 'SWEDEN', NULL, 'Sweden', 'SWE', '752', '46', 0, NULL, NULL),
(206, 'CH', NULL, 'SWITZERLAND', NULL, 'Switzerland', 'CHE', '756', '41', 0, NULL, NULL),
(207, 'SY', NULL, 'SYRIAN ARAB REPUBLIC', NULL, 'Syrian Arab Republic', 'SYR', '760', '963', 0, NULL, NULL),
(208, 'TW', NULL, 'TAIWAN, PROVINCE OF CHINA', NULL, 'Taiwan, Province of China', 'TWN', '158', '886', 0, NULL, NULL),
(209, 'TJ', NULL, 'TAJIKISTAN', NULL, 'Tajikistan', 'TJK', '762', '992', 0, NULL, NULL),
(210, 'TZ', NULL, 'TANZANIA, UNITED REPUBLIC OF', NULL, 'Tanzania, United Republic of', 'TZA', '834', '255', 0, NULL, NULL),
(211, 'TH', NULL, 'THAILAND', NULL, 'Thailand', 'THA', '764', '66', 0, NULL, NULL),
(212, 'TL', NULL, 'TIMOR-LESTE', NULL, 'Timor-Leste', NULL, NULL, '670', 0, NULL, NULL),
(213, 'TG', NULL, 'TOGO', NULL, 'Togo', 'TGO', '768', '228', 0, NULL, NULL),
(214, 'TK', NULL, 'TOKELAU', NULL, 'Tokelau', 'TKL', '772', '690', 0, NULL, NULL),
(215, 'TO', NULL, 'TONGA', NULL, 'Tonga', 'TON', '776', '676', 0, NULL, NULL),
(216, 'TT', NULL, 'TRINIDAD AND TOBAGO', NULL, 'Trinidad and Tobago', 'TTO', '780', '1868', 0, NULL, NULL),
(217, 'TN', NULL, 'TUNISIA', NULL, 'Tunisia', 'TUN', '788', '216', 0, NULL, NULL),
(218, 'TR', NULL, 'TURKEY', NULL, 'Turkey', 'TUR', '792', '90', 0, NULL, NULL),
(219, 'TM', NULL, 'TURKMENISTAN', NULL, 'Turkmenistan', 'TKM', '795', '7370', 0, NULL, NULL),
(220, 'TC', NULL, 'TURKS AND CAICOS ISLANDS', NULL, 'Turks and Caicos Islands', 'TCA', '796', '1649', 0, NULL, NULL),
(221, 'TV', NULL, 'TUVALU', NULL, 'Tuvalu', 'TUV', '798', '688', 0, NULL, NULL),
(222, 'UG', NULL, 'UGANDA', NULL, 'Uganda', 'UGA', '800', '256', 0, NULL, NULL),
(223, 'UA', NULL, 'UKRAINE', NULL, 'Ukraine', 'UKR', '804', '380', 0, NULL, NULL),
(224, 'AE', 'الإمارات العربية المتحدة', 'UNITED ARAB EMIRATES', NULL, 'United Arab Emirates', 'ARE', '784', '971', 0, NULL, '2022-06-10 02:29:47'),
(225, 'GB', NULL, 'UNITED KINGDOM', NULL, 'United Kingdom', 'GBR', '826', '44', 0, NULL, NULL),
(226, 'US', NULL, 'UNITED STATES', NULL, 'United States', 'USA', '840', '1', 0, NULL, NULL),
(227, 'UM', NULL, 'UNITED STATES MINOR OUTLYING ISLANDS', NULL, 'United States Minor Outlying Islands', NULL, NULL, '1', 0, NULL, NULL),
(228, 'UY', NULL, 'URUGUAY', NULL, 'Uruguay', 'URY', '858', '598', 0, NULL, NULL),
(229, 'UZ', NULL, 'UZBEKISTAN', NULL, 'Uzbekistan', 'UZB', '860', '998', 0, NULL, NULL),
(230, 'VU', NULL, 'VANUATU', NULL, 'Vanuatu', 'VUT', '548', '678', 0, NULL, NULL),
(231, 'VE', NULL, 'VENEZUELA', NULL, 'Venezuela', 'VEN', '862', '58', 0, NULL, NULL),
(232, 'VN', NULL, 'VIET NAM', NULL, 'Viet Nam', 'VNM', '704', '84', 0, NULL, NULL),
(233, 'VG', NULL, 'VIRGIN ISLANDS, BRITISH', NULL, 'Virgin Islands, British', 'VGB', '92', '1284', 0, NULL, NULL),
(234, 'VI', NULL, 'VIRGIN ISLANDS, U.S.', NULL, 'Virgin Islands, U.s.', 'VIR', '850', '1340', 0, NULL, NULL),
(235, 'WF', NULL, 'WALLIS AND FUTUNA', NULL, 'Wallis and Futuna', 'WLF', '876', '681', 0, NULL, NULL),
(236, 'EH', NULL, 'WESTERN SAHARA', NULL, 'Western Sahara', 'ESH', '732', '212', 0, NULL, NULL),
(237, 'YE', NULL, 'YEMEN', NULL, 'Yemen', 'YEM', '887', '967', 0, NULL, NULL),
(238, 'ZM', NULL, 'ZAMBIA', NULL, 'Zambia', 'ZMB', '894', '260', 0, NULL, NULL),
(239, 'ZW', NULL, 'ZIMBABWE', NULL, 'Zimbabwe', 'ZWE', '716', '263', 0, NULL, NULL),
(240, 'RS', NULL, 'SERBIA', NULL, 'Serbia', 'SRB', '688', '381', 0, NULL, NULL),
(241, 'AP', NULL, 'ASIA PACIFIC REGION', NULL, 'Asia / Pacific Region', '0', '0', '0', 0, NULL, NULL),
(242, 'ME', NULL, 'MONTENEGRO', NULL, 'Montenegro', 'MNE', '499', '382', 0, NULL, NULL),
(243, 'AX', NULL, 'ALAND ISLANDS', NULL, 'Aland Islands', 'ALA', '248', '358', 0, NULL, NULL),
(244, 'BQ', NULL, 'BONAIRE, SINT EUSTATIUS AND SABA', NULL, 'Bonaire, Sint Eustatius and Saba', 'BES', '535', '599', 0, NULL, NULL),
(245, 'CW', NULL, 'CURACAO', NULL, 'Curacao', 'CUW', '531', '599', 0, NULL, NULL),
(246, 'GG', NULL, 'GUERNSEY', NULL, 'Guernsey', 'GGY', '831', '44', 0, NULL, NULL),
(247, 'IM', NULL, 'ISLE OF MAN', NULL, 'Isle of Man', 'IMN', '833', '44', 0, NULL, NULL),
(248, 'JE', NULL, 'JERSEY', NULL, 'Jersey', 'JEY', '832', '44', 0, NULL, NULL),
(249, 'XK', NULL, 'KOSOVO', NULL, 'Kosovo', '---', '0', '381', 0, NULL, NULL),
(250, 'BL', NULL, 'SAINT BARTHELEMY', NULL, 'Saint Barthelemy', 'BLM', '652', '590', 0, NULL, NULL),
(251, 'MF', NULL, 'SAINT MARTIN', NULL, 'Saint Martin', 'MAF', '663', '590', 0, NULL, NULL),
(252, 'SX', NULL, 'SINT MAARTEN', NULL, 'Sint Maarten', 'SXM', '534', '1', 0, NULL, NULL),
(253, 'SS', NULL, 'SOUTH SUDAN', NULL, 'South Sudan', 'SSD', '728', '211', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f_a_qs`
--

CREATE TABLE `f_a_qs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer_ar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `f_a_qs`
--

INSERT INTO `f_a_qs` (`id`, `question_ar`, `question_en`, `answer_ar`, `answer_en`, `status`, `created_at`, `updated_at`) VALUES
(2, 'كيف يمكنني الإشتراك في الابليكيشن؟', 'how can i register in app ?', '<p>يمكنك الضغط على علامة المستخدم الموجودة بالشريط الازرق بالأعلى ثم اضغط على انشاء حساب جديد</p>', '<p>click on the icon at the top then create new account</p>', '1', '2022-06-11 03:52:49', '2023-01-10 10:46:08'),
(7, 'ما هي مدة انتظار المنتج ؟', 'What is the waiting time for the product?', '<p>علي الاكثر ثلاث أيام&nbsp;</p>', '<p>at most three days</p>', '1', '2023-01-10 10:49:09', '2023-01-10 10:49:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(61, '2014_10_12_000000_create_users_table', 14),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_06_07_165740_create_roles_table', 1),
(5, '2022_06_07_165808_create_permissions_table', 1),
(6, '2022_06_07_165835_create_role_permissions_table', 1),
(7, '2022_06_08_203325_create_countries_table', 2),
(8, '2022_06_09_100938_create_governorates_table', 3),
(9, '2022_06_09_101416_create_cities_table', 3),
(19, '2022_06_10_003429_create_currencies_table', 4),
(20, '2022_06_10_005227_create_writers_table', 4),
(21, '2022_06_10_010359_create_sections_table', 4),
(22, '2022_06_11_003547_create_f_a_qs_table', 5),
(23, '2022_06_11_022745_create_pages_table', 6),
(25, '2022_06_11_031251_create_contact_messages_table', 7),
(26, '2022_06_11_054130_create_settings_table', 8),
(28, '2022_06_11_171653_create_user_addresses_table', 9),
(45, '2022_06_11_203454_create_user_payment_methods_table', 10),
(46, '2022_06_11_233917_create_books_table', 10),
(47, '2022_06_12_002841_create_book_features_table', 10),
(50, '2022_06_15_132358_create_publisher_payment_methods_table', 11),
(51, '2022_06_15_132757_create_publisher_payments_histories_table', 11),
(64, '2023_01_10_095143_create_orders_table', 16),
(56, '2022_06_15_161841_create_order_items_table', 12),
(57, '2022_06_15_171913_create_book_reviews_table', 12),
(63, '2023_01_09_140732_create_products_table', 15),
(65, '2023_01_10_095243_create_products_orders_table', 16),
(66, '2023_01_10_123745_create_orders_products_table', 17),
(67, '2023_01_11_073813_create_apps_table', 18),
(68, '2023_01_11_125217_create_serial_numbers_table', 19),
(69, '2019_12_14_000001_create_personal_access_tokens_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('9bca4f1b-15a9-4119-882f-7bcd7691317f', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newPublisher\",\"linked_id\":20,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 Mohamed Sultan \\u0628\\u0627\\u0644\\u062a\\u0633\\u062c\\u064a\\u0644 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0646\\u0635\\u0629 \\u0643\\u0646\\u0627\\u0634\\u0631 \\u0648\\u0628\\u062d\\u0627\\u062c\\u0629 \\u0625\\u0644\\u0649 \\u0627\\u0644\\u0645\\u0631\\u0627\\u062c\\u0639\\u0629 \\u0648\\u0627\\u0644\\u0645\\u0648\\u0627\\u0641\\u0642\\u0629.\",\"date\":\"2022-07-01\",\"time\":\"21:18\"}', '2022-07-01 19:58:08', '2022-07-01 19:18:36', '2022-07-01 19:58:08'),
('cef8bb50-7c02-4f91-8f9c-00fc5fde2db3', 'App\\Notifications\\PublisherNotifications', 'App\\User', 20, '{\"type\":\"activatePublisherAccount\",\"linked_id\":20,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0645\\u062d\\u0645\\u062f \\u0633\\u0644\\u0637\\u0627\\u0646 \\u0648\\u0647\\u0648 \\u0623\\u062d\\u062f \\u0627\\u0644\\u0645\\u062f\\u0631\\u0627\\u0621 \\u0628\\u062a\\u0641\\u0639\\u064a\\u0644 \\u062d\\u0633\\u0627\\u0628\\u0643 \\u0628\\u0646\\u062c\\u0627\\u062d.\",\"date\":\"2022-07-01\",\"time\":\"22:23\"}', '2022-07-01 20:27:40', '2022-07-01 20:23:34', '2022-07-01 20:27:40'),
('717167bc-2840-43e8-b5fb-caa8039558b0', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newPublisherMessage\",\"linked_id\":2,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0646\\u0627\\u0634\\u0631 publisher \\u0628\\u0625\\u0631\\u0633\\u0627\\u0644 \\u0631\\u0633\\u0627\\u0644\\u0629 \\u062c\\u062f\\u064a\\u062f\\u0629 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0627\\u062a\\u0635\\u0644 \\u0628\\u0646\\u0627.\",\"date\":\"2022-07-02\",\"time\":\"01:27\"}', '2022-07-02 00:05:39', '2022-07-01 23:27:18', '2022-07-02 00:05:39'),
('02828027-ddac-4d36-a601-1819d1ea778d', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newPublisherMessage\",\"linked_id\":2,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0646\\u0627\\u0634\\u0631 publisher \\u0628\\u0625\\u0631\\u0633\\u0627\\u0644 \\u0631\\u0633\\u0627\\u0644\\u0629 \\u062c\\u062f\\u064a\\u062f\\u0629 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0627\\u062a\\u0635\\u0644 \\u0628\\u0646\\u0627.\",\"date\":\"2022-07-02\",\"time\":\"02:06\"}', '2022-07-02 00:06:38', '2022-07-02 00:06:31', '2022-07-02 00:06:38'),
('4d363945-ec01-4176-8e5a-ddb79d17faee', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newPublisherMessage\",\"linked_id\":6,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0646\\u0627\\u0634\\u0631 publisher \\u0628\\u0625\\u0631\\u0633\\u0627\\u0644 \\u0631\\u0633\\u0627\\u0644\\u0629 \\u062c\\u062f\\u064a\\u062f\\u0629 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0627\\u062a\\u0635\\u0644 \\u0628\\u0646\\u0627.\",\"date\":\"2022-07-02\",\"time\":\"02:07\"}', '2022-07-02 00:07:18', '2022-07-02 00:07:11', '2022-07-02 00:07:18'),
('a69df79b-642b-46d6-adcb-e2c2bb11db64', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newWriter\",\"linked_id\":3,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0646\\u0627\\u0634\\u0631 publisher \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0643\\u0627\\u062a\\u0628 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-07-02\",\"time\":\"02:31\"}', '2022-07-02 04:38:32', '2022-07-02 00:31:32', '2022-07-02 04:38:32'),
('9679dcc2-c30c-47b5-b9e4-f58df76064dc', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newPublisherMessage\",\"linked_id\":4,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0646\\u0627\\u0634\\u0631 publisher \\u0628\\u0625\\u0631\\u0633\\u0627\\u0644 \\u0631\\u0633\\u0627\\u0644\\u0629 \\u062c\\u062f\\u064a\\u062f\\u0629 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0627\\u062a\\u0635\\u0644 \\u0628\\u0646\\u0627.\",\"date\":\"2022-07-03\",\"time\":\"16:44\"}', '2022-07-03 16:52:38', '2022-07-03 16:44:40', '2022-07-03 16:52:38'),
('5805da45-e7c8-412e-9b58-797d95faa747', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newWriter\",\"linked_id\":5,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0646\\u0627\\u0634\\u0631 publisher \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0643\\u0627\\u062a\\u0628 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-07-03\",\"time\":\"16:45\"}', '2022-07-03 16:52:32', '2022-07-03 16:45:28', '2022-07-03 16:52:32'),
('867bdbd7-b4b9-4175-b369-07e0bd86e089', 'App\\Notifications\\PublisherNotifications', 'App\\User', 2, '{\"type\":\"activatePublisherAccount\",\"linked_id\":2,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0645\\u062d\\u0645\\u062f \\u0633\\u0644\\u0637\\u0627\\u0646 \\u0648\\u0647\\u0648 \\u0623\\u062d\\u062f \\u0627\\u0644\\u0645\\u062f\\u0631\\u0627\\u0621 \\u0628\\u062a\\u0641\\u0639\\u064a\\u0644 \\u062d\\u0633\\u0627\\u0628\\u0643 \\u0628\\u0646\\u062c\\u0627\\u062d.\",\"date\":\"2022-07-04\",\"time\":\"15:05\"}', '2022-07-04 15:09:05', '2022-07-04 15:05:39', '2022-07-04 15:09:05'),
('4b3242bc-b348-466a-8c0f-a8108d1531dc', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newPublisherMessage\",\"linked_id\":8,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0646\\u0627\\u0634\\u0631 \\u0645\\u062d\\u0645\\u062f \\u0645\\u062d\\u0645\\u0648\\u062f \\u0628\\u0625\\u0631\\u0633\\u0627\\u0644 \\u0631\\u0633\\u0627\\u0644\\u0629 \\u062c\\u062f\\u064a\\u062f\\u0629 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0627\\u062a\\u0635\\u0644 \\u0628\\u0646\\u0627.\",\"date\":\"2022-07-04\",\"time\":\"15:14\"}', '2022-07-04 15:14:16', '2022-07-04 15:14:06', '2022-07-04 15:14:16'),
('431fbcc8-cc27-4ed3-aef2-e0678bbc94c2', 'App\\Notifications\\PublisherNotifications', 'App\\User', 2, '{\"type\":\"activatePublisherAccount\",\"linked_id\":2,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0645\\u062d\\u0645\\u062f \\u0633\\u0644\\u0637\\u0627\\u0646 \\u0648\\u0647\\u0648 \\u0623\\u062d\\u062f \\u0627\\u0644\\u0645\\u062f\\u0631\\u0627\\u0621 \\u0628\\u062a\\u0641\\u0639\\u064a\\u0644 \\u062d\\u0633\\u0627\\u0628\\u0643 \\u0628\\u0646\\u062c\\u0627\\u062d.\",\"date\":\"2022-07-05\",\"time\":\"08:36\"}', '2022-07-05 11:18:58', '2022-07-05 08:36:28', '2022-07-05 11:18:58'),
('8c6ba7f6-46f1-499d-968e-38f7eee4dcd1', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newPublisherMessage\",\"linked_id\":9,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0646\\u0627\\u0634\\u0631 publisher \\u0628\\u0625\\u0631\\u0633\\u0627\\u0644 \\u0631\\u0633\\u0627\\u0644\\u0629 \\u062c\\u062f\\u064a\\u062f\\u0629 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0627\\u062a\\u0635\\u0644 \\u0628\\u0646\\u0627.\",\"date\":\"2022-07-05\",\"time\":\"08:38\"}', '2022-07-05 08:38:30', '2022-07-05 08:38:15', '2022-07-05 08:38:30'),
('e2e16d19-e8f6-4ffb-a4cc-f2b15d0eda90', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newPublisherMessage\",\"linked_id\":11,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0646\\u0627\\u0634\\u0631 publisher \\u0628\\u0625\\u0631\\u0633\\u0627\\u0644 \\u0631\\u0633\\u0627\\u0644\\u0629 \\u062c\\u062f\\u064a\\u062f\\u0629 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0627\\u062a\\u0635\\u0644 \\u0628\\u0646\\u0627.\",\"date\":\"2022-07-05\",\"time\":\"08:50\"}', '2022-07-05 08:51:10', '2022-07-05 08:50:44', '2022-07-05 08:51:10'),
('15cc1224-57a0-4f40-b9dd-96ef767e2442', 'App\\Notifications\\PublisherNotifications', 'App\\User', 2, '{\"type\":\"activatePublisherAccount\",\"linked_id\":2,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0645\\u062d\\u0645\\u062f \\u0633\\u0644\\u0637\\u0627\\u0646 \\u0648\\u0647\\u0648 \\u0623\\u062d\\u062f \\u0627\\u0644\\u0645\\u062f\\u0631\\u0627\\u0621 \\u0628\\u062a\\u0641\\u0639\\u064a\\u0644 \\u062d\\u0633\\u0627\\u0628\\u0643 \\u0628\\u0646\\u062c\\u0627\\u062d.\",\"date\":\"2022-07-05\",\"time\":\"12:14\"}', '2022-07-05 12:14:29', '2022-07-05 12:14:18', '2022-07-05 12:14:29'),
('d01dd762-5e69-4245-871b-d8429423865c', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newPublisherMessage\",\"linked_id\":13,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0646\\u0627\\u0634\\u0631 publisher \\u0628\\u0625\\u0631\\u0633\\u0627\\u0644 \\u0631\\u0633\\u0627\\u0644\\u0629 \\u062c\\u062f\\u064a\\u062f\\u0629 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0627\\u062a\\u0635\\u0644 \\u0628\\u0646\\u0627.\",\"date\":\"2022-08-07\",\"time\":\"18:53\"}', '2022-08-08 00:03:46', '2022-08-07 22:53:10', '2022-08-08 00:03:46'),
('316138c6-8def-42ad-9a5e-8769d6ed7489', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newWriter\",\"linked_id\":6,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0646\\u0627\\u0634\\u0631 publisher \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0643\\u0627\\u062a\\u0628 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-08-07\",\"time\":\"20:01\"}', '2022-08-08 00:03:39', '2022-08-08 00:01:09', '2022-08-08 00:03:39'),
('b96a62c7-f74f-4434-a51b-89e76de6fbc2', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newPublisherMessage\",\"linked_id\":15,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0646\\u0627\\u0634\\u0631 \\u062d\\u0633\\u0627\\u0645 \\u0628\\u0625\\u0631\\u0633\\u0627\\u0644 \\u0631\\u0633\\u0627\\u0644\\u0629 \\u062c\\u062f\\u064a\\u062f\\u0629 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0627\\u062a\\u0635\\u0644 \\u0628\\u0646\\u0627.\",\"date\":\"2022-09-27\",\"time\":\"10:29\"}', '2022-09-27 14:58:15', '2022-09-27 14:29:03', '2022-09-27 14:58:15'),
('3419e91e-8777-4f7c-8719-d2c2a6fb5970', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newWriter\",\"linked_id\":10,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0646\\u0627\\u0634\\u0631 \\u062d\\u0633\\u0627\\u0645 \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0643\\u0627\\u062a\\u0628 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-09-27\",\"time\":\"10:42\"}', '2022-09-27 14:57:59', '2022-09-27 14:42:24', '2022-09-27 14:57:59'),
('ec0958f6-21b7-403f-959e-363d6d92b07d', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newWriter\",\"linked_id\":11,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0646\\u0627\\u0634\\u0631 \\u062d\\u0633\\u0627\\u0645 \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0643\\u0627\\u062a\\u0628 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-09-27\",\"time\":\"11:19\"}', '2022-09-29 13:36:42', '2022-09-27 15:19:20', '2022-09-29 13:36:42'),
('85da72cd-6341-4793-a4c1-873e65881721', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newPublisherMessage\",\"linked_id\":16,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0646\\u0627\\u0634\\u0631 \\u062d\\u0633\\u0627\\u0645 \\u0628\\u0625\\u0631\\u0633\\u0627\\u0644 \\u0631\\u0633\\u0627\\u0644\\u0629 \\u062c\\u062f\\u064a\\u062f\\u0629 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0627\\u062a\\u0635\\u0644 \\u0628\\u0646\\u0627.\",\"date\":\"2022-09-27\",\"time\":\"11:31\"}', '2022-09-29 13:36:47', '2022-09-27 15:31:14', '2022-09-29 13:36:47'),
('6895d39d-5d69-4a15-b86f-1fc1f5fa5afe', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newPublisherMessage\",\"linked_id\":17,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0646\\u0627\\u0634\\u0631 publisher \\u0628\\u0625\\u0631\\u0633\\u0627\\u0644 \\u0631\\u0633\\u0627\\u0644\\u0629 \\u062c\\u062f\\u064a\\u062f\\u0629 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0627\\u062a\\u0635\\u0644 \\u0628\\u0646\\u0627.\",\"date\":\"2022-09-27\",\"time\":\"13:25\"}', '2022-09-29 13:36:38', '2022-09-27 17:25:46', '2022-09-29 13:36:38'),
('93a3e902-2437-483f-9ad7-6ae7245fc7d3', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newPublisherMessage\",\"linked_id\":18,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0646\\u0627\\u0634\\u0631 \\u062d\\u0633\\u0627\\u0645 \\u0628\\u0625\\u0631\\u0633\\u0627\\u0644 \\u0631\\u0633\\u0627\\u0644\\u0629 \\u062c\\u062f\\u064a\\u062f\\u0629 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0627\\u062a\\u0635\\u0644 \\u0628\\u0646\\u0627.\",\"date\":\"2022-09-27\",\"time\":\"15:48\"}', '2022-09-29 13:36:51', '2022-09-27 19:48:07', '2022-09-29 13:36:51'),
('11c5de45-c08d-4972-8b3d-2ce7ff081c4f', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newPublisherMessage\",\"linked_id\":19,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0646\\u0627\\u0634\\u0631 \\u062d\\u0633\\u0627\\u0645 \\u0628\\u0625\\u0631\\u0633\\u0627\\u0644 \\u0631\\u0633\\u0627\\u0644\\u0629 \\u062c\\u062f\\u064a\\u062f\\u0629 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0627\\u062a\\u0635\\u0644 \\u0628\\u0646\\u0627.\",\"date\":\"2022-09-27\",\"time\":\"15:48\"}', '2022-09-29 13:36:34', '2022-09-27 19:48:44', '2022-09-29 13:36:34'),
('4c6c2756-1ba6-4a0a-89b2-7f59a2ce5dc0', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newPublisherMessage\",\"linked_id\":40,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0646\\u0627\\u0634\\u0631 publisher \\u0628\\u0625\\u0631\\u0633\\u0627\\u0644 \\u0631\\u0633\\u0627\\u0644\\u0629 \\u062c\\u062f\\u064a\\u062f\\u0629 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0627\\u062a\\u0635\\u0644 \\u0628\\u0646\\u0627.\",\"date\":\"2022-09-30\",\"time\":\"11:18\"}', '2022-10-02 21:20:50', '2022-09-30 15:18:33', '2022-10-02 21:20:50'),
('9acb3a57-d850-4b2f-b91a-cf35411b4e32', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newWriter\",\"linked_id\":13,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0646\\u0627\\u0634\\u0631 publisher \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0643\\u0627\\u062a\\u0628 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-02\",\"time\":\"14:06\"}', '2022-10-02 19:25:01', '2022-10-02 18:06:06', '2022-10-02 19:25:01'),
('56054d36-2d98-4e45-a798-64103a55d7cc', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newPublisherMessage\",\"linked_id\":46,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0646\\u0627\\u0634\\u0631 \\u062d\\u0633\\u0627\\u0645 \\u0628\\u0625\\u0631\\u0633\\u0627\\u0644 \\u0631\\u0633\\u0627\\u0644\\u0629 \\u062c\\u062f\\u064a\\u062f\\u0629 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0627\\u062a\\u0635\\u0644 \\u0628\\u0646\\u0627.\",\"date\":\"2022-10-03\",\"time\":\"12:45\"}', '2022-10-03 16:45:34', '2022-10-03 16:45:15', '2022-10-03 16:45:34'),
('11003824-61d2-4193-bd59-1f480413cb21', 'App\\Notifications\\AdminNotifications', 'App\\User', 84, '{\"type\":\"resetPasswordCode\",\"linked_id\":84,\"text\":\"\\u062a\\u0645 \\u0625\\u0631\\u0633\\u0627\\u0644 \\u0643\\u0648\\u062f \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631\",\"date\":\"2022-10-03\",\"time\":\"14:44\"}', NULL, '2022-10-03 18:44:18', '2022-10-03 18:44:18'),
('7fd54d8e-3214-48f5-80c3-0f702bb843ba', 'App\\Notifications\\AdminNotifications', 'App\\User', 86, '{\"type\":\"resetPasswordCode\",\"linked_id\":86,\"text\":\"\\u062a\\u0645 \\u0625\\u0631\\u0633\\u0627\\u0644 \\u0643\\u0648\\u062f \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631\",\"date\":\"2022-10-03\",\"time\":\"15:40\"}', NULL, '2022-10-03 19:40:46', '2022-10-03 19:40:46'),
('57c6f9fe-e0fd-42b5-bd04-a07d6d688fe9', 'App\\Notifications\\AdminNotifications', 'App\\User', 86, '{\"type\":\"resetPasswordCode\",\"linked_id\":86,\"text\":\"\\u062a\\u0645 \\u0625\\u0631\\u0633\\u0627\\u0644 \\u0643\\u0648\\u062f \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631\",\"date\":\"2022-10-03\",\"time\":\"15:52\"}', NULL, '2022-10-03 19:52:07', '2022-10-03 19:52:07'),
('53f83b12-c2dc-4167-bb9a-7d0bf4849aea', 'App\\Notifications\\AdminNotifications', 'App\\User', 72, '{\"type\":\"resetPasswordCode\",\"linked_id\":72,\"text\":\"\\u062a\\u0645 \\u0625\\u0631\\u0633\\u0627\\u0644 \\u0643\\u0648\\u062f \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631\",\"date\":\"2022-10-04\",\"time\":\"06:47\"}', NULL, '2022-10-04 10:47:19', '2022-10-04 10:47:19'),
('6be4c1f6-8b71-496c-b9b9-b69366fd1ebf', 'App\\Notifications\\AdminNotifications', 'App\\User', 89, '{\"type\":\"resetPasswordCode\",\"linked_id\":89,\"text\":\"\\u062a\\u0645 \\u0625\\u0631\\u0633\\u0627\\u0644 \\u0643\\u0648\\u062f \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631\",\"date\":\"2022-10-04\",\"time\":\"06:47\"}', NULL, '2022-10-04 10:47:34', '2022-10-04 10:47:34'),
('e72b3078-f3a6-428c-b52b-e80d22eb9467', 'App\\Notifications\\AdminNotifications', 'App\\User', 89, '{\"type\":\"ResetPasswordSuccess\",\"linked_id\":89,\"text\":\"\\u062a\\u0645\\u062a \\u0639\\u0645\\u0644\\u064a\\u0629 \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631 \\u0628\\u0646\\u062c\\u0627\\u062d\",\"date\":\"2022-10-04\",\"time\":\"06:48\"}', NULL, '2022-10-04 10:48:12', '2022-10-04 10:48:12'),
('9378f144-c933-4c4a-96f3-45dd51a765bd', 'App\\Notifications\\AdminNotifications', 'App\\User', 72, '{\"type\":\"ResetPasswordSuccess\",\"linked_id\":72,\"text\":\"\\u062a\\u0645\\u062a \\u0639\\u0645\\u0644\\u064a\\u0629 \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631 \\u0628\\u0646\\u062c\\u0627\\u062d\",\"date\":\"2022-10-04\",\"time\":\"06:48\"}', NULL, '2022-10-04 10:48:31', '2022-10-04 10:48:31'),
('4203008c-8364-4ac3-9da9-fcee7c9651f7', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newPublisherMessage\",\"linked_id\":53,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0646\\u0627\\u0634\\u0631 \\u062d\\u0633\\u0627\\u0645 \\u0628\\u0625\\u0631\\u0633\\u0627\\u0644 \\u0631\\u0633\\u0627\\u0644\\u0629 \\u062c\\u062f\\u064a\\u062f\\u0629 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0627\\u062a\\u0635\\u0644 \\u0628\\u0646\\u0627.\",\"date\":\"2022-10-04\",\"time\":\"13:33\"}', '2022-10-04 17:34:09', '2022-10-04 17:33:38', '2022-10-04 17:34:09'),
('5d2feeaf-f7d9-449c-bba1-8cbe82dc2c28', 'App\\Notifications\\AdminNotifications', 'App\\User', 96, '{\"type\":\"resetPasswordCode\",\"linked_id\":96,\"text\":\"\\u062a\\u0645 \\u0625\\u0631\\u0633\\u0627\\u0644 \\u0643\\u0648\\u062f \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631\",\"date\":\"2022-10-06\",\"time\":\"11:32\"}', NULL, '2022-10-06 15:32:18', '2022-10-06 15:32:18'),
('030bb3f7-3335-4e3f-89d9-1c3e9426ba21', 'App\\Notifications\\AdminNotifications', 'App\\User', 96, '{\"type\":\"resetPasswordCode\",\"linked_id\":96,\"text\":\"\\u062a\\u0645 \\u0625\\u0631\\u0633\\u0627\\u0644 \\u0643\\u0648\\u062f \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631\",\"date\":\"2022-10-06\",\"time\":\"12:39\"}', NULL, '2022-10-06 16:39:53', '2022-10-06 16:39:53'),
('09a23c2d-853f-437d-9bbc-59e1a8ecdb81', 'App\\Notifications\\AdminNotifications', 'App\\User', 96, '{\"type\":\"resetPasswordCode\",\"linked_id\":96,\"text\":\"\\u062a\\u0645 \\u0625\\u0631\\u0633\\u0627\\u0644 \\u0643\\u0648\\u062f \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631\",\"date\":\"2022-10-06\",\"time\":\"12:42\"}', NULL, '2022-10-06 16:42:04', '2022-10-06 16:42:04'),
('899d88d9-63bb-42d2-940b-8d9274979c2c', 'App\\Notifications\\AdminNotifications', 'App\\User', 96, '{\"type\":\"resetPasswordCode\",\"linked_id\":96,\"text\":\"\\u062a\\u0645 \\u0625\\u0631\\u0633\\u0627\\u0644 \\u0643\\u0648\\u062f \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631\",\"date\":\"2022-10-06\",\"time\":\"12:43\"}', NULL, '2022-10-06 16:43:44', '2022-10-06 16:43:44'),
('e3784cf3-3432-4a96-9ea0-99443e2c615c', 'App\\Notifications\\AdminNotifications', 'App\\User', 96, '{\"type\":\"resetPasswordCode\",\"linked_id\":96,\"text\":\"\\u062a\\u0645 \\u0625\\u0631\\u0633\\u0627\\u0644 \\u0643\\u0648\\u062f \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631\",\"date\":\"2022-10-06\",\"time\":\"12:46\"}', NULL, '2022-10-06 16:46:46', '2022-10-06 16:46:46'),
('f75c81c6-6bb0-4068-9219-fd45475955bc', 'App\\Notifications\\AdminNotifications', 'App\\User', 96, '{\"type\":\"resetPasswordCode\",\"linked_id\":96,\"text\":\"\\u062a\\u0645 \\u0625\\u0631\\u0633\\u0627\\u0644 \\u0643\\u0648\\u062f \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631\",\"date\":\"2022-10-06\",\"time\":\"12:52\"}', NULL, '2022-10-06 16:52:44', '2022-10-06 16:52:44'),
('be5e3721-cf0c-4cfa-98d8-25ff6a8ac41e', 'App\\Notifications\\AdminNotifications', 'App\\User', 96, '{\"type\":\"resetPasswordCode\",\"linked_id\":96,\"text\":\"\\u062a\\u0645 \\u0625\\u0631\\u0633\\u0627\\u0644 \\u0643\\u0648\\u062f \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631\",\"date\":\"2022-10-06\",\"time\":\"12:57\"}', NULL, '2022-10-06 16:57:44', '2022-10-06 16:57:44'),
('da2d84c8-2f77-4103-a268-f048e3a4da76', 'App\\Notifications\\AdminNotifications', 'App\\User', 96, '{\"type\":\"ResetPasswordSuccess\",\"linked_id\":96,\"text\":\"\\u062a\\u0645\\u062a \\u0639\\u0645\\u0644\\u064a\\u0629 \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631 \\u0628\\u0646\\u062c\\u0627\\u062d\",\"date\":\"2022-10-06\",\"time\":\"12:58\"}', NULL, '2022-10-06 16:58:55', '2022-10-06 16:58:55'),
('cd06e668-64a7-42ae-90b8-955713818c41', 'App\\Notifications\\AdminNotifications', 'App\\User', 96, '{\"type\":\"resetPasswordCode\",\"linked_id\":96,\"text\":\"\\u062a\\u0645 \\u0625\\u0631\\u0633\\u0627\\u0644 \\u0643\\u0648\\u062f \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631\",\"date\":\"2022-10-06\",\"time\":\"13:01\"}', NULL, '2022-10-06 17:01:32', '2022-10-06 17:01:32'),
('f43a1734-4759-47ec-9b5c-a09c367a0699', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newWriter\",\"linked_id\":24,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0646\\u0627\\u0634\\u0631 publisher \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0643\\u0627\\u062a\\u0628 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-06\",\"time\":\"17:58\"}', '2022-10-07 00:51:59', '2022-10-06 21:58:21', '2022-10-07 00:51:59'),
('ea11e053-c43f-4551-b6ab-31cb426d6c07', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":11,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 Ezat Ellozy \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-06\",\"time\":\"16:49\"}', '2022-10-07 12:46:16', '2022-10-06 20:49:48', '2022-10-07 12:46:16'),
('b1d204ee-4c64-4378-bf73-6f9873df5d3a', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"41\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 Ezat Ellozy \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-06\",\"time\":\"16:51\"}', '2022-10-07 00:52:06', '2022-10-06 20:51:22', '2022-10-07 00:52:06'),
('646bf715-f15c-4346-bd9e-bf1db3f963ca', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"40\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 test 1000 \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-07\",\"time\":\"04:39\"}', '2022-10-07 12:40:36', '2022-10-07 08:39:12', '2022-10-07 12:40:36'),
('fdfa237a-97de-412c-b472-bac5191f552c', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"40\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 test 1000 \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-07\",\"time\":\"04:39\"}', '2022-10-07 12:46:16', '2022-10-07 08:39:45', '2022-10-07 12:46:16'),
('78341ab1-5029-4d7c-9d87-fd2636818829', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"40\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 test 1000 \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-07\",\"time\":\"04:40\"}', '2022-10-07 12:46:16', '2022-10-07 08:40:12', '2022-10-07 12:46:16'),
('138df334-a312-467e-ad60-87007cb0dede', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"40\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 test 1000 \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-07\",\"time\":\"04:40\"}', '2022-10-07 12:46:16', '2022-10-07 08:40:43', '2022-10-07 12:46:16'),
('34844265-a270-4831-be2e-5340dc55977d', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"40\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 test 1000 \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-07\",\"time\":\"04:41\"}', '2022-10-07 12:46:16', '2022-10-07 08:41:04', '2022-10-07 12:46:16'),
('67f5d11e-6114-4ef1-94f9-19217ebc8470', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"40\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 test 1000 \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-07\",\"time\":\"04:43\"}', '2022-10-07 12:46:12', '2022-10-07 08:43:34', '2022-10-07 12:46:12'),
('e1612b4e-0ee8-45d4-aaf6-e2b7ac16049e', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"40\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 Obaida \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-07\",\"time\":\"05:08\"}', '2022-10-11 12:40:56', '2022-10-07 09:08:41', '2022-10-11 12:40:56'),
('6abd5251-c853-482e-8e52-ea3d11928590', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"41\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 test 1000 \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-08\",\"time\":\"09:41\"}', '2022-10-10 17:13:41', '2022-10-08 13:41:32', '2022-10-10 17:13:41'),
('1915c4fb-83af-41ef-8916-23de33534190', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"41\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 ObaidaMustafa \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-09\",\"time\":\"10:45\"}', '2022-10-10 14:33:32', '2022-10-09 14:45:50', '2022-10-10 14:33:32'),
('93640570-10e1-41b8-a7ba-ad1008256b96', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"132\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 HD \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-12\",\"time\":\"07:17\"}', '2022-10-12 16:02:43', '2022-10-12 11:17:02', '2022-10-12 16:02:43'),
('db3b7515-8f1d-464d-9f3f-81e0ea1f71d6', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"132\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 Obaida \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-12\",\"time\":\"08:10\"}', '2022-10-12 16:18:30', '2022-10-12 12:10:42', '2022-10-12 16:18:30'),
('f2daa5d9-e337-4f71-a424-914f45e89e3d', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"132\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 HD \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-12\",\"time\":\"09:47\"}', '2022-10-12 17:51:04', '2022-10-12 13:47:52', '2022-10-12 17:51:04'),
('5c18525e-d607-47b7-86da-ba016706d4ea', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"132\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 HD \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-12\",\"time\":\"09:51\"}', '2022-10-12 17:55:04', '2022-10-12 13:51:34', '2022-10-12 17:55:04'),
('421b8d56-a8da-4e74-9470-10c05956caa8', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"132\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 Sara \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-12\",\"time\":\"10:22\"}', '2022-10-12 18:23:49', '2022-10-12 14:22:44', '2022-10-12 18:23:49'),
('1ce0783e-59a3-4fe6-a416-015ccab48e9e', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"132\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 manar \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-16\",\"time\":\"07:44\"}', '2022-10-16 20:12:55', '2022-10-16 11:44:59', '2022-10-16 20:12:55'),
('2f7f9e44-cd97-4865-9a31-cf3c81592871', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"132\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 manar \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-16\",\"time\":\"08:02\"}', '2022-10-16 20:09:19', '2022-10-16 12:02:54', '2022-10-16 20:09:19'),
('b7446110-37cb-4b1a-8130-e0ced55e371f', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"134\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 HD \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-16\",\"time\":\"12:13\"}', '2022-10-16 20:14:09', '2022-10-16 16:13:48', '2022-10-16 20:14:09'),
('0cc83c1e-6586-44db-a825-e4115dbab1cf', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"134\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 HD \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-16\",\"time\":\"12:16\"}', '2022-10-16 20:20:31', '2022-10-16 16:16:37', '2022-10-16 20:20:31'),
('24505c3e-d5f5-40d9-81dd-00752a7e1499', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"134\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 HD \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-16\",\"time\":\"12:17\"}', '2022-10-16 20:20:35', '2022-10-16 16:17:31', '2022-10-16 20:20:35'),
('dc462511-6555-4d11-bc51-1a34ae81fe99', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"130\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 HD \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-17\",\"time\":\"08:33\"}', '2022-10-17 16:34:01', '2022-10-17 12:33:06', '2022-10-17 16:34:01'),
('3d78dbf9-4d37-4177-b27f-a102378ab87b', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"131\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 test \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-17\",\"time\":\"13:32\"}', '2022-10-18 12:07:16', '2022-10-17 17:32:33', '2022-10-18 12:07:16'),
('7a556e53-ebb5-4dba-b8fa-fa7618053623', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"132\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 manar \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-17\",\"time\":\"14:47\"}', '2022-10-18 12:07:09', '2022-10-17 18:47:32', '2022-10-18 12:07:09'),
('4d61213b-f789-4a88-b77a-efbd35e95a35', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"136\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 manar \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-17\",\"time\":\"15:01\"}', '2022-10-18 12:06:56', '2022-10-17 19:01:38', '2022-10-18 12:06:56'),
('d4fb1478-a239-4490-84a7-6ca57e83bbb3', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"129\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 HD \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-23\",\"time\":\"12:29\"}', '2022-10-23 20:32:25', '2022-10-23 16:29:57', '2022-10-23 20:32:25'),
('583e397e-43cb-4cb0-9ba0-c4cd1e9b1d34', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"125\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 HD \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-23\",\"time\":\"12:32\"}', '2022-10-23 20:32:54', '2022-10-23 16:32:11', '2022-10-23 20:32:54'),
('6dc5689e-32b7-4baf-a88e-0ac9fda10528', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"121\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 HD \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-10-23\",\"time\":\"12:36\"}', '2022-10-23 20:36:57', '2022-10-23 16:36:42', '2022-10-23 20:36:57'),
('ddd68aec-0148-49d0-aea2-6cf0e94c26bc', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newPublisherMessage\",\"linked_id\":55,\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0646\\u0627\\u0634\\u0631 publisher \\u0628\\u0625\\u0631\\u0633\\u0627\\u0644 \\u0631\\u0633\\u0627\\u0644\\u0629 \\u062c\\u062f\\u064a\\u062f\\u0629 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0627\\u062a\\u0635\\u0644 \\u0628\\u0646\\u0627.\",\"date\":\"2022-10-24\",\"time\":\"10:11\"}', '2022-10-24 14:11:59', '2022-10-24 14:11:42', '2022-10-24 14:11:59'),
('fb762cf5-19a2-4de6-94da-8050089c5af7', 'App\\Notifications\\AdminNotifications', 'App\\User', 128, '{\"type\":\"resetPasswordCode\",\"linked_id\":128,\"text\":\"\\u062a\\u0645 \\u0625\\u0631\\u0633\\u0627\\u0644 \\u0643\\u0648\\u062f \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631\",\"date\":\"2022-11-03\",\"time\":\"13:52\"}', NULL, '2022-11-03 17:52:41', '2022-11-03 17:52:41'),
('d9758b24-0f2e-4cee-a4ff-cbd49c4ba861', 'App\\Notifications\\AdminNotifications', 'App\\User', 128, '{\"type\":\"ResetPasswordSuccess\",\"linked_id\":128,\"text\":\"\\u062a\\u0645\\u062a \\u0639\\u0645\\u0644\\u064a\\u0629 \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631 \\u0628\\u0646\\u062c\\u0627\\u062d\",\"date\":\"2022-11-03\",\"time\":\"13:57\"}', NULL, '2022-11-03 17:57:04', '2022-11-03 17:57:04'),
('1ace98a1-1dad-4a70-8674-9381313316fc', 'App\\Notifications\\AdminNotifications', 'App\\User', 128, '{\"type\":\"resetPasswordCode\",\"linked_id\":128,\"text\":\"\\u062a\\u0645 \\u0625\\u0631\\u0633\\u0627\\u0644 \\u0643\\u0648\\u062f \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631\",\"date\":\"2022-11-03\",\"time\":\"14:02\"}', NULL, '2022-11-03 18:02:36', '2022-11-03 18:02:36'),
('d10f0352-4fef-4557-ab21-f2d1bb9eb169', 'App\\Notifications\\AdminNotifications', 'App\\User', 128, '{\"type\":\"resetPasswordCode\",\"linked_id\":128,\"text\":\"\\u062a\\u0645 \\u0625\\u0631\\u0633\\u0627\\u0644 \\u0643\\u0648\\u062f \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631\",\"date\":\"2022-11-03\",\"time\":\"14:09\"}', NULL, '2022-11-03 18:09:28', '2022-11-03 18:09:28'),
('12a488f6-6e5d-4a96-ba3c-4e7fe22c822d', 'App\\Notifications\\AdminNotifications', 'App\\User', 1, '{\"type\":\"newBookReview\",\"linked_id\":\"139\",\"text\":\"\\u0644\\u0642\\u062f \\u0642\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 Abuobaida \\u0628\\u0625\\u062f\\u062e\\u0627\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062c\\u062f\\u064a\\u062f \\u0648\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647 \\u0644\\u062a\\u0641\\u0639\\u064a\\u0644\\u0647.\",\"date\":\"2022-11-04\",\"time\":\"05:43\"}', '2022-11-06 16:38:49', '2022-11-04 09:43:16', '2022-11-06 16:38:49'),
('ef9d10bc-2b1e-44af-b38a-2853ce2e0dca', 'App\\Notifications\\AdminNotifications', 'App\\User', 151, '{\"type\":\"resetPasswordCode\",\"linked_id\":151,\"text\":\"\\u062a\\u0645 \\u0625\\u0631\\u0633\\u0627\\u0644 \\u0643\\u0648\\u062f \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631\",\"date\":\"2022-11-06\",\"time\":\"08:55\"}', NULL, '2022-11-06 13:55:40', '2022-11-06 13:55:40'),
('99dda71d-ad54-457e-a303-a87594753f90', 'App\\Notifications\\AdminNotifications', 'App\\User', 181, '{\"type\":\"resetPasswordCode\",\"linked_id\":181,\"text\":\"\\u062a\\u0645 \\u0625\\u0631\\u0633\\u0627\\u0644 \\u0643\\u0648\\u062f \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631\",\"date\":\"2022-11-07\",\"time\":\"05:49\"}', NULL, '2022-11-07 10:49:20', '2022-11-07 10:49:20'),
('a0d93b7c-f2a4-4ee8-b550-abcd9d4ebda5', 'App\\Notifications\\AdminNotifications', 'App\\User', 181, '{\"type\":\"resetPasswordCode\",\"linked_id\":181,\"text\":\"\\u062a\\u0645 \\u0625\\u0631\\u0633\\u0627\\u0644 \\u0643\\u0648\\u062f \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631\",\"date\":\"2022-11-07\",\"time\":\"05:51\"}', NULL, '2022-11-07 10:51:32', '2022-11-07 10:51:32'),
('79f0141b-d9a6-490f-8a45-73bb430d465d', 'App\\Notifications\\AdminNotifications', 'App\\User', 181, '{\"type\":\"resetPasswordCode\",\"linked_id\":181,\"text\":\"\\u062a\\u0645 \\u0625\\u0631\\u0633\\u0627\\u0644 \\u0643\\u0648\\u062f \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631\",\"date\":\"2022-11-07\",\"time\":\"05:54\"}', NULL, '2022-11-07 10:54:57', '2022-11-07 10:54:57');
INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('34aa3fbc-77ae-4796-b4c2-f6078bd98ecb', 'App\\Notifications\\AdminNotifications', 'App\\User', 185, '{\"type\":\"resetPasswordCode\",\"linked_id\":185,\"text\":\"\\u062a\\u0645 \\u0625\\u0631\\u0633\\u0627\\u0644 \\u0643\\u0648\\u062f \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631\",\"date\":\"2022-11-07\",\"time\":\"07:50\"}', NULL, '2022-11-07 12:50:58', '2022-11-07 12:50:58'),
('8890bb5f-6f7a-4f7d-a517-387812c4f5e6', 'App\\Notifications\\AdminNotifications', 'App\\User', 185, '{\"type\":\"ResetPasswordSuccess\",\"linked_id\":185,\"text\":\"\\u062a\\u0645\\u062a \\u0639\\u0645\\u0644\\u064a\\u0629 \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631 \\u0628\\u0646\\u062c\\u0627\\u062d\",\"date\":\"2022-11-07\",\"time\":\"07:52\"}', NULL, '2022-11-07 12:52:10', '2022-11-07 12:52:10'),
('c9c512ed-0ed0-4c5e-86c7-0a887a8cb37a', 'App\\Notifications\\AdminNotifications', 'App\\User', 185, '{\"type\":\"ResetPasswordSuccess\",\"linked_id\":185,\"text\":\"\\u062a\\u0645\\u062a \\u0639\\u0645\\u0644\\u064a\\u0629 \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631 \\u0628\\u0646\\u062c\\u0627\\u062d\",\"date\":\"2022-11-07\",\"time\":\"07:52\"}', NULL, '2022-11-07 12:52:11', '2022-11-07 12:52:11'),
('b57e6574-1e15-4084-8ce9-c9d3ddacd1d3', 'App\\Notifications\\AdminNotifications', 'App\\User', 124, '{\"type\":\"resetPasswordCode\",\"linked_id\":124,\"text\":\"\\u062a\\u0645 \\u0625\\u0631\\u0633\\u0627\\u0644 \\u0643\\u0648\\u062f \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631\",\"date\":\"2022-11-18\",\"time\":\"11:55\"}', NULL, '2022-11-18 16:55:01', '2022-11-18 16:55:01'),
('beb5c237-54fd-48d0-9c89-e23de4236804', 'App\\Notifications\\AdminNotifications', 'App\\User', 124, '{\"type\":\"ResetPasswordSuccess\",\"linked_id\":124,\"text\":\"\\u062a\\u0645\\u062a \\u0639\\u0645\\u0644\\u064a\\u0629 \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631 \\u0628\\u0646\\u062c\\u0627\\u062d\",\"date\":\"2022-11-18\",\"time\":\"11:56\"}', NULL, '2022-11-18 16:56:39', '2022-11-18 16:56:39'),
('ead878c0-a952-4a04-9ec7-f06e0b15b9dc', 'App\\Notifications\\AdminNotifications', 'App\\User', 124, '{\"type\":\"ResetPasswordSuccess\",\"linked_id\":124,\"text\":\"\\u062a\\u0645\\u062a \\u0639\\u0645\\u0644\\u064a\\u0629 \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631 \\u0628\\u0646\\u062c\\u0627\\u062d\",\"date\":\"2022-11-18\",\"time\":\"11:56\"}', NULL, '2022-11-18 16:56:40', '2022-11-18 16:56:40');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('pending','done','review') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `status`, `user_id`, `product_id`, `discount`, `created_at`, `updated_at`) VALUES
(1, 'done', 1, 1, NULL, '2023-01-10 14:02:03', NULL),
(2, 'pending', 4, 2, NULL, '2023-01-12 14:46:33', '2023-01-12 14:46:33'),
(3, 'pending', 4, 4, NULL, '2023-01-12 14:48:59', '2023-01-12 14:48:59'),
(5, 'pending', 4, 1, NULL, '2023-01-12 15:01:04', '2023-01-12 15:01:04');

-- --------------------------------------------------------

--
-- Table structure for table `orders_products`
--

CREATE TABLE `orders_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `products_id` bigint(20) UNSIGNED NOT NULL,
  `orders_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders_products`
--

INSERT INTO `orders_products` (`id`, `products_id`, `orders_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 4, 3, NULL, NULL),
(4, 1, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_weight` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `user_id`, `publisher_id`, `order_id`, `book_id`, `book_type`, `price`, `unit_weight`, `quantity`, `total`, `created_at`, `updated_at`) VALUES
(1, '1', '2', '1', '2', 'pdfCopy', '150', NULL, '1', '150', '2022-06-18 03:05:58', '2022-06-18 03:05:58'),
(2, '1', '6', '2', '3', 'pdfCopy', '150', NULL, '1', '150', '2022-06-18 03:05:58', '2022-06-18 03:05:58'),
(3, '1', '6', '2', '3', 'hardCopy', '150', NULL, '1', '150', '2022-06-18 03:05:58', '2022-06-18 03:05:58'),
(4, '11', '2', '3', '2', 'pdfCopy', '150', NULL, '9', '1350', '2022-06-21 13:55:08', '2022-06-21 13:55:08'),
(5, '11', '6', '4', '3', 'pdfCopy', '150', NULL, '8', '1200', '2022-06-21 13:55:08', '2022-06-21 13:55:08'),
(6, '11', '6', '5', '3', 'pdfCopy', '150', NULL, '1', '150', '2022-06-21 16:54:26', '2022-06-21 16:54:26'),
(7, '11', '2', '6', '2', 'pdfCopy', '150', NULL, '1', '150', '2022-06-21 16:54:26', '2022-06-21 16:54:26'),
(8, '12', '6', '7', '3', 'hardcopy', '250', NULL, '1', '250', '2022-06-21 18:21:19', '2022-06-21 18:21:19'),
(9, '12', '6', '8', '3', 'pdfCopy', '150', NULL, '1', '150', '2022-06-21 18:21:19', '2022-06-21 18:21:19'),
(10, '12', '6', '8', '3', 'hardcopy', '250', NULL, '1', '250', '2022-06-22 00:05:40', '2022-06-22 00:05:40'),
(11, '11', '6', '9', '3', 'pdfCopy', '100', NULL, '2', '200', '2022-06-22 11:59:07', '2022-06-22 11:59:07'),
(12, '11', '6', '11', '3', 'pdfCopy', '100', NULL, '2', '200', '2022-06-22 11:59:07', '2022-06-22 11:59:07'),
(13, '11', '2', '10', '2', 'hardcopy', '250', NULL, '1', '250', '2022-06-22 11:59:07', '2022-06-22 11:59:07'),
(14, '11', '2', '11', '2', 'hardcopy', '250', NULL, '2', '500', '2022-06-22 12:08:49', '2022-06-22 12:08:49'),
(15, '11', '6', '12', '3', 'pdfCopy', '100', NULL, '1', '100', '2022-06-22 12:08:49', '2022-06-22 12:08:49'),
(16, '11', '6', '15', '3', 'hardcopy', '250', NULL, '1', '250', '2022-06-22 12:08:49', '2022-06-22 12:08:49'),
(17, '11', '2', '13', '2', 'pdfCopy', '150', NULL, '1', '150', '2022-06-23 13:30:13', '2022-06-23 13:30:13'),
(18, '11', '2', '14', '2', 'pdfCopy', '150', NULL, '1', '150', '2022-06-23 13:30:35', '2022-06-23 13:30:35'),
(19, '12', '2', '15', '2', 'pdfCopy', '150', NULL, '1', '150', '2022-06-24 08:40:59', '2022-06-24 08:40:59'),
(20, '12', '2', '19', '2', 'hardcopy', '250', NULL, '1', '250', '2022-06-24 08:40:59', '2022-06-24 08:40:59'),
(21, '12', '13', '16', '5', 'pdfCopy', '150', NULL, '1', '150', '2022-06-25 15:00:19', '2022-06-25 15:00:19'),
(112, '11', '2', '82', '2', 'pdfCopy', '150', NULL, '1', '150', '2022-09-19 15:19:42', '2022-09-19 15:19:42'),
(23, '14', '2', '17', '2', 'pdfCopy', '150', NULL, '1', '150', '2022-07-05 04:52:06', '2022-07-05 04:52:06'),
(24, '20', '13', '18', '5', 'pdfCopy', '150', NULL, '1', '150', '2022-08-25 13:31:32', '2022-08-25 13:31:32'),
(163, '44', '13', '127', '5', 'pdfCopy', '150', NULL, '1', '150', '2022-09-19 20:33:06', '2022-09-19 20:33:43'),
(95, '11', '2', '61', '4', 'pdfCopy', '45', NULL, '1', '45', '2022-09-18 12:08:26', '2022-09-18 12:08:26'),
(70, '11', '2', '42', '2', 'hardcopy', '250', NULL, '1', '250', '2022-09-15 18:03:11', '2022-09-15 18:03:11'),
(71, '11', '6', '43', '3', 'hardcopy', '250', NULL, '1', '250', '2022-09-15 18:03:11', '2022-09-15 18:03:11'),
(41, '20', '13', '26', '5', 'pdfCopy', '150', NULL, '1', '150', '2022-09-15 08:51:06', '2022-09-15 08:51:06'),
(74, '11', '2', '48', '2', 'pdfCopy', '150', NULL, '1', '150', '2022-09-15 19:50:07', '2022-09-15 19:50:07'),
(309, '54', '13', '175', '130', 'pdfCopy', '50', NULL, '1', '50', '2022-10-12 14:11:39', '2022-10-12 14:11:39'),
(69, '11', '2', '42', '2', 'pdfCopy', '150', NULL, '1', '150', '2022-09-15 17:26:15', '2022-09-15 17:26:15'),
(96, '11', '2', '61', '2', 'hardcopy', '250', NULL, '1', '250', '2022-09-18 12:16:02', '2022-09-18 12:16:02'),
(109, '40', '2', '79', '2', 'pdfCopy', '150', NULL, '1', '150', '2022-09-19 11:48:14', '2022-09-19 11:48:14'),
(110, '40', '2', '79', '2', 'hardcopy', '250', NULL, '1', '250', '2022-09-19 11:48:17', '2022-09-19 11:48:17'),
(113, '11', '6', '83', '3', 'pdfCopy', '100', NULL, '1', '100', '2022-09-19 15:20:29', '2022-09-19 15:20:29'),
(137, '11', '6', '103', '3', 'pdfCopy', '100', NULL, '1', '100', '2022-09-19 17:41:53', '2022-09-19 17:41:53'),
(135, '11', '6', '100', '3', 'hardcopy', '250', NULL, '1', '250', '2022-09-19 17:17:45', '2022-09-19 17:17:45'),
(136, '11', '2', '102', '2', 'pdfCopy', '150', NULL, '1', '150', '2022-09-19 17:41:51', '2022-09-19 17:41:51'),
(134, '11', '6', '100', '3', 'pdfCopy', '100', NULL, '1', '100', '2022-09-19 17:17:42', '2022-09-19 17:17:42'),
(138, '11', '2', '102', '2', 'hardcopy', '250', NULL, '1', '250', '2022-09-19 17:41:55', '2022-09-19 17:41:55'),
(139, '11', '2', '105', '2', 'pdfCopy', '150', NULL, '1', '150', '2022-09-19 17:50:42', '2022-09-19 17:50:42'),
(140, '11', '6', '106', '3', 'pdfCopy', '100', NULL, '1', '100', '2022-09-19 17:53:13', '2022-09-19 17:53:13'),
(157, '11', '2', '120', '2', 'hardcopy', '250', '2', '2', '500', '2022-09-19 20:09:56', '2022-09-19 20:10:04'),
(156, '11', '2', '120', '2', 'pdfCopy', '150', NULL, '2', '300', '2022-09-19 20:09:56', '2022-09-19 20:10:06'),
(235, '64', '2', '208', '26', 'hardcopy', '200', '9010', '1', '200', '2022-10-03 12:06:12', '2022-10-03 12:06:12'),
(160, '41', '2', '124', '2', 'pdfCopy', '150', NULL, '1', '150', '2022-09-19 20:11:44', '2022-09-19 20:11:44'),
(162, '41', '2', '124', '2', 'hardcopy', '250', '2', '1', '250', '2022-09-19 20:14:33', '2022-09-19 20:14:33'),
(164, '44', '6', '128', '3', 'hardcopy', '250', '1.5', '3', '750', '2022-09-19 20:33:06', '2022-09-19 20:33:50'),
(166, '38', '6', '131', '3', 'hardcopy', '250', '1.5', '1', '250', '2022-09-20 08:57:25', '2022-09-20 08:57:25'),
(167, '11', '2', '132', '2', 'hardcopy', '250', '2', '1', '250', '2022-09-25 12:08:57', '2022-09-25 12:08:57'),
(169, '46', '2', '135', '2', 'hardcopy', '250', '2', '5', '1250', '2022-09-25 12:49:31', '2022-09-25 15:18:43'),
(178, '46', '13', '143', '5', 'hardcopy', '200', NULL, '1', '200', '2022-09-26 12:34:36', '2022-09-26 12:34:36'),
(177, '46', '13', '143', '5', 'PDF', '150', NULL, '1', '150', '2022-09-26 12:34:23', '2022-09-26 12:34:23'),
(176, '38', '2', '141', '2', 'hardcopy', '250', '2', '1', '250', '2022-09-25 17:02:32', '2022-09-25 17:02:32'),
(182, '46', '6', '148', '3', 'hardcopy', '300', '1.5', '1', '300', '2022-09-26 17:33:15', '2022-09-26 17:33:15'),
(183, '46', '6', '150', '3', 'hardcopy', '300', '1.5', '1', '300', '2022-09-26 17:38:37', '2022-09-26 17:38:37'),
(184, '46', '13', '152', '5', 'hardcopy', '200', NULL, '1', '200', '2022-09-26 17:42:14', '2022-09-26 17:42:14'),
(185, '46', '13', '152', '5', 'PDF', '150', NULL, '1', '150', '2022-09-26 17:45:04', '2022-09-26 17:45:04'),
(189, '48', '6', '156', '3', 'hardcopy', '300', '1.5', '1', '300', '2022-09-26 18:28:16', '2022-09-26 18:28:16'),
(190, '48', '6', '158', '3', 'PDF', '150', NULL, '1', '150', '2022-09-26 18:29:55', '2022-09-26 18:29:55'),
(191, '49', '6', '160', '3', 'PDF', '150', NULL, '1', '150', '2022-09-26 19:16:17', '2022-09-26 19:16:17'),
(192, '49', '6', '160', '3', 'hardcopy', '300', '1.5', '1', '300', '2022-09-26 19:18:27', '2022-09-26 19:18:27'),
(203, '51', '2', '173', '4', 'PDF', '60', NULL, '1', '60', '2022-09-27 12:49:50', '2022-09-27 12:49:50'),
(313, '54', '13', '175', '121', 'pdfCopy', '50', NULL, '1', '50', '2022-10-12 14:15:33', '2022-10-12 14:15:33'),
(209, '55', '6', '181', '3', 'hardcopy', '300', '1.5', '1', '300', '2022-09-28 18:14:27', '2022-09-28 18:14:27'),
(207, '53', '52', '178', '5', 'hardcopy', '200', NULL, '1', '200', '2022-09-27 15:52:48', '2022-09-27 15:52:48'),
(217, '59', '6', '189', '3', 'hardcopy', '300', '1.5', '1', '300', '2022-09-29 21:21:41', '2022-09-29 21:21:41'),
(225, '72', '2', '193', '25', 'PDF', '150', NULL, '4', '600', '2022-10-03 09:33:45', '2022-10-03 09:49:55'),
(226, '72', '2', '195', '21', 'hardcopy', '150', '4', '3', '450', '2022-10-03 09:51:44', '2022-10-03 10:05:14'),
(227, '73', '13', '197', '29', 'hardcopy', '102', NULL, '1', '102', '2022-10-03 10:32:19', '2022-10-03 10:32:19'),
(241, '72', '2', '215', '25', 'hardcopy', '200', '600', '3', '600', '2022-10-03 13:34:38', '2022-10-03 13:34:43'),
(268, '90', '2', '239', '39', 'hardcopy', '200', '5', '1', '200', '2022-10-05 13:47:21', '2022-10-05 13:47:21'),
(240, '73', '2', '214', '26', 'PDF', '150', NULL, '1', '150', '2022-10-03 13:15:55', '2022-10-03 13:15:55'),
(262, '19', '13', '229', '29', 'hardcopy', '102', NULL, '1', '102', '2022-10-04 10:09:36', '2022-10-04 10:09:36'),
(267, '90', '2', '237', '38', 'PDF', '150', NULL, '2', '300', '2022-10-05 08:38:34', '2022-10-05 08:54:03'),
(265, '90', '6', '233', '37', 'hardcopy', '200', '2', '1', '200', '2022-10-05 08:20:07', '2022-10-05 08:20:07'),
(266, '90', '2', '235', '38', 'hardcopy', '150', '50', '4', '600', '2022-10-05 08:37:24', '2022-10-05 08:37:37'),
(360, '23', '13', '300', '137', 'hardcopy', '170', '1.5', '1', '170', '2022-10-31 17:28:02', '2022-10-31 17:28:02'),
(261, '72', '2', '224', '33', 'hardcopy', '100', '500', '2', '200', '2022-10-04 08:17:58', '2022-10-04 08:18:31'),
(404, '18', '13', '327', '132', 'hardcopy', '100', '2', '1', '100', '2022-11-03 17:23:12', '2022-11-03 17:23:12'),
(387, '120', '13', '314', '132', 'hardcopy', '100', '2', '1', '100', '2022-11-03 09:17:35', '2022-11-03 09:17:35'),
(274, '96', '2', '246', '39', 'PDF', '150', NULL, '1', '150', '2022-10-06 17:37:46', '2022-10-06 17:37:46'),
(272, '89', '2', '244', '38', 'hardcopy', '150', '50', '1', '150', '2022-10-05 16:52:19', '2022-10-05 16:52:19'),
(273, '96', '2', '246', '41', 'hardcopy', '120', '500', '1', '120', '2022-10-06 17:32:38', '2022-10-06 17:32:38'),
(275, '96', '2', '246', '38', 'hardcopy', '150', '50', '1', '150', '2022-10-06 17:45:35', '2022-10-06 17:45:35'),
(342, '54', '13', '175', '132', 'PDF', '50', NULL, '1', '50', '2022-10-17 21:20:33', '2022-10-17 21:20:33'),
(277, '96', '2', '249', '39', 'hardcopy', '200', '5', '1', '200', '2022-10-06 18:01:02', '2022-10-06 18:01:02'),
(284, '98', '2', '259', '38', 'pdfCopy', '100', NULL, '3', '300', '2022-10-09 20:27:12', '2022-10-09 20:27:12'),
(280, '86', '2', '253', '39', 'hardcopy', '200', '5', '1', '200', '2022-10-06 19:21:12', '2022-10-06 19:21:12'),
(281, '86', '2', '255', '25', 'pdfCopy', '120', NULL, '1', '120', '2022-10-06 19:55:23', '2022-10-06 19:55:23'),
(282, '96', '2', '251', '39', 'hardcopy', '200', '5', '1', '200', '2022-10-06 20:14:13', '2022-10-06 20:14:13'),
(285, '98', '2', '259', '39', 'pdfCopy', '100', NULL, '1', '100', '2022-10-09 20:27:12', '2022-10-09 20:27:12'),
(286, '98', '52', '260', '5', 'pdfCopy', '150', NULL, '1', '150', '2022-10-09 20:27:12', '2022-10-09 20:27:12'),
(344, '94', '13', '263', '130', 'pdfCopy', '50', NULL, '1', '50', '2022-10-21 10:30:30', '2022-10-21 10:30:30'),
(289, '101', '13', '264', '127', 'pdfCopy', '50', NULL, '5', '250', '2022-10-10 15:41:25', '2022-10-10 15:42:06'),
(291, '94', '13', '263', '131', 'pdfCopy', '50', NULL, '1', '50', '2022-10-11 15:43:08', '2022-10-11 15:43:08'),
(295, '100', '13', '268', '131', 'pdfCopy', '50', NULL, '1', '50', '2022-10-12 11:25:43', '2022-10-12 11:25:43'),
(293, '100', '13', '266', '132', 'pdfCopy', '50', NULL, '4', '200', '2022-10-12 11:09:58', '2022-10-12 11:24:00'),
(296, '100', '13', '268', '130', 'pdfCopy', '50', NULL, '1', '50', '2022-10-12 11:25:45', '2022-10-12 11:25:45'),
(297, '100', '13', '268', '129', 'pdfCopy', '50', NULL, '1', '50', '2022-10-12 11:25:48', '2022-10-12 11:25:48'),
(298, '100', '13', '268', '128', 'pdfCopy', '50', NULL, '1', '50', '2022-10-12 11:25:51', '2022-10-12 11:25:51'),
(299, '100', '13', '268', '127', 'pdfCopy', '50', NULL, '1', '50', '2022-10-12 11:25:52', '2022-10-12 11:25:52'),
(300, '100', '13', '268', '126', 'pdfCopy', '50', NULL, '1', '50', '2022-10-12 11:25:54', '2022-10-12 11:25:54'),
(343, '54', '13', '175', '131', 'hardcopy', '100', '1', '1', '100', '2022-10-17 21:26:27', '2022-10-17 21:26:27'),
(321, '54', '13', '175', '132', 'pdfCopy', '50', NULL, '1', '50', '2022-10-12 14:25:32', '2022-10-17 21:21:21'),
(311, '54', '13', '175', '128', 'pdfCopy', '50', NULL, '1', '50', '2022-10-12 14:12:27', '2022-10-12 14:12:27'),
(388, '120', '13', '314', '123', 'hardcopy', '180', '1.5', '1', '180', '2022-11-03 09:32:06', '2022-11-03 09:32:06'),
(346, '122', '13', '293', '130', 'pdfCopy', '50', NULL, '1', '50', '2022-10-25 19:20:01', '2022-10-25 19:20:01'),
(418, '151', '13', '335', '139', 'hardcopy', '160', '1.5', '1', '160', '2022-11-06 19:58:04', '2022-11-06 19:58:04'),
(328, '102', '13', '281', '132', 'PDF', '50', NULL, '4', '200', '2022-10-12 15:42:57', '2022-10-12 15:45:03'),
(322, '54', '13', '175', '124', 'pdfCopy', '50', NULL, '1', '50', '2022-10-12 14:25:48', '2022-10-12 14:25:48'),
(416, '151', '13', '335', '127', 'hardcopy', '180', '1.5', '1', '180', '2022-11-06 19:57:50', '2022-11-06 19:57:50'),
(417, '151', '13', '335', '126', 'hardcopy', '180', '1.5', '1', '180', '2022-11-06 19:57:57', '2022-11-06 19:57:57'),
(338, '96', '13', '287', '132', 'hardcopy', '100', '1', '1', '100', '2022-10-17 17:14:32', '2022-10-17 17:14:32'),
(347, '122', '13', '293', '130', 'hardcopy', '100', '1', '1', '100', '2022-10-25 20:54:08', '2022-10-25 20:54:08'),
(401, '110', '13', '324', '139', 'hardcopy', '160', '1.5', '1', '160', '2022-11-03 15:55:01', '2022-11-03 15:55:01'),
(358, '23', '13', '300', '138', 'pdfCopy', '0', NULL, '1', '0', '2022-10-31 17:23:14', '2022-10-31 17:23:14'),
(383, '120', '13', '311', '139', 'hardcopy', '160', '1.5', '2', '320', '2022-11-02 10:56:17', '2022-11-02 11:03:01'),
(365, '23', '13', '300', '137', 'pdfCopy', '0', NULL, '1', '0', '2022-11-01 00:25:03', '2022-11-01 00:25:03'),
(436, '12', '13', '344', '139', 'hardcopy', '160', '1.5', '1', '160', '2022-11-08 14:22:05', '2022-11-08 14:22:05'),
(396, '120', '13', '321', '129', 'hardcopy', '180', '1', '1', '180', '2022-11-03 12:12:33', '2022-11-03 12:12:33'),
(397, '120', '13', '321', '125', 'hardcopy', '180', '1.5', '1', '180', '2022-11-03 12:13:16', '2022-11-03 12:13:16'),
(458, '23', '13', '300', '127', 'hardcopy', '180', '1.5', '1', '180', '2022-11-25 02:34:04', '2022-11-25 02:34:04'),
(407, '110', '13', '324', '137', 'pdfCopy', '0', NULL, '1', '0', '2022-11-06 13:08:48', '2022-11-06 13:08:48'),
(419, '151', '161', '336', '140', 'hardcopy', '180', '200', '1', '180', '2022-11-06 19:58:09', '2022-11-06 19:58:09'),
(449, '189', '13', '356', '132', 'hardcopy', '100', '2', '1', '100', '2022-11-10 18:16:00', '2022-11-10 18:16:00'),
(421, '181', '13', '338', '104', 'hardcopy', '160', '1', '2', '320', '2022-11-07 11:14:42', '2022-11-09 22:03:32'),
(446, '189', '13', '352', '104', 'hardcopy', '160', '1', '1', '160', '2022-11-10 17:33:55', '2022-11-10 17:33:55'),
(448, '189', '13', '352', '131', 'hardcopy', '170', '1', '1', '170', '2022-11-10 18:12:38', '2022-11-10 18:12:38'),
(431, '185', '13', '342', '104', 'hardcopy', '160', '1', '1', '160', '2022-11-07 20:19:50', '2022-11-07 20:19:50'),
(440, '100', '13', '348', '131', 'hardcopy', '170', '1', '1', '170', '2022-11-08 16:58:03', '2022-11-08 16:58:03'),
(439, '100', '13', '348', '126', 'pdfCopy', '50', NULL, '1', '50', '2022-11-08 16:58:03', '2022-11-08 16:58:03'),
(451, '213', '13', '359', '131', 'hardcopy', '170', '1', '1', '170', '2022-11-13 23:02:54', '2022-11-13 23:02:54'),
(456, '21', '13', '363', '131', 'hardcopy', '170', '1', '1', '170', '2022-11-21 23:45:18', '2022-11-21 23:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@ilawfair.com', '$2y$10$FFnK8x66X7TVvUNy8RTr6.OZQfxopBFoZe9XRXXG1X.BMZC0E7c8O', '2022-08-04 17:12:29'),
('hossam@ilaw.ae', '$2y$10$PTt/G5RVNJE/Rah575GKReEfSHcf/5quRNQ9s7VOt91Q0Q8aVQdDa', '2022-10-10 19:54:17'),
('mrmohamesultan77@gmail.com', '$2y$10$/h99pmouLyrS9V5ne9hH/Oy/q5qXvW9i5.7uCPG/.iJ70B0Xh2F.C', '2022-07-04 04:34:14'),
('abuobaida@ilaw.ae', '$2y$10$8bqCQtFeZqPY9pqikpyrM.FjrOrPVYSoZlFCOaOOVhbDZoaMiDTR.', '2022-08-10 12:58:34'),
('test@test.com', '$2y$10$VCV/KRRZu1ETVAMjkgeN9OKFWyWbq0AnMdwVbphNm6YoBPxbSkKIK', '2022-07-04 12:33:48');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_fr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middleware` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name_ar`, `name_en`, `name_fr`, `middleware`, `group`, `created_at`, `updated_at`) VALUES
(1, 'استعراض الإعدادات', 'view settings', NULL, '', 'settings', NULL, NULL),
(2, 'تعديل الإعدادات', 'edit settings', NULL, '', 'settings', NULL, NULL),
(3, 'استعراض المديرين والمشرفين', NULL, NULL, '', 'admins', NULL, NULL),
(4, 'إدخال المديرين والمشرفين', NULL, NULL, '', 'admins', NULL, NULL),
(5, 'تعديل المديرين والمشرفين', NULL, NULL, '', 'admins', NULL, NULL),
(6, 'حذف المديرين والمشرفين', NULL, NULL, '', 'admins', NULL, NULL),
(7, 'استعراض الناشرين', NULL, NULL, '', 'publishers', NULL, NULL),
(8, 'إدخال الناشرين', NULL, NULL, '', 'publishers', NULL, NULL),
(9, 'تعديل الناشرين', NULL, NULL, '', 'publishers', NULL, NULL),
(10, 'حذف الناشرين', NULL, NULL, '', 'publishers', NULL, NULL),
(11, 'استعراض العملاء', NULL, NULL, '', 'clients', NULL, NULL),
(12, 'إدخال العملاء', NULL, NULL, '', 'clients', NULL, NULL),
(13, 'تعديل العملاء', NULL, NULL, '', 'clients', NULL, NULL),
(14, 'حذف العملاء', NULL, NULL, '', 'clients', NULL, NULL),
(15, 'استعراض الدول', NULL, NULL, '', 'countries', NULL, NULL),
(16, 'إدخال الدول', NULL, NULL, '', 'countries', NULL, NULL),
(17, 'تعديل الدول', NULL, NULL, '', 'countries', NULL, NULL),
(18, 'حذف الدول', NULL, NULL, '', 'countries', NULL, NULL),
(19, 'استعراض أدوار المشرفين', NULL, NULL, '', 'roles', NULL, NULL),
(20, 'إدخال أدوار المشرفين', NULL, NULL, '', 'roles', NULL, NULL),
(21, 'تعديل أدوار المشرفين', NULL, NULL, '', 'roles', NULL, NULL),
(22, 'حذف أدوار المشرفين', NULL, NULL, '', 'roles', NULL, NULL),
(23, 'استعراض مناطق الشحن', NULL, NULL, '', 'shippingLocales', NULL, NULL),
(24, 'إدخال مناطق الشحن', NULL, NULL, '', 'shippingLocales', NULL, NULL),
(25, 'تعديل مناطق الشحن', NULL, NULL, '', 'shippingLocales', NULL, NULL),
(26, 'حذف مناطق الشحن', NULL, NULL, '', 'shippingLocales', NULL, NULL),
(27, 'استعراض العملات', NULL, NULL, '', 'currencies', NULL, NULL),
(28, 'إدخال العملات', NULL, NULL, '', 'currencies', NULL, NULL),
(29, 'تعديل العملات', NULL, NULL, '', 'currencies', NULL, NULL),
(30, 'حذف العملات', NULL, NULL, '', 'currencies', NULL, NULL),
(31, 'استعراض الكتب', NULL, NULL, '', 'books', NULL, NULL),
(32, 'إدخال الكتب', NULL, NULL, '', 'books', NULL, NULL),
(33, 'تعديل الكتب', NULL, NULL, '', 'books', NULL, NULL),
(34, 'حذف الكتب', NULL, NULL, '', 'books', NULL, NULL),
(35, 'استعراض الأقسام', NULL, NULL, '', 'sections', NULL, NULL),
(36, 'إدخال الأقسام', NULL, NULL, '', 'sections', NULL, NULL),
(37, 'تعديل الأقسام', NULL, NULL, '', 'sections', NULL, NULL),
(38, 'حذف الأقسام', NULL, NULL, '', 'sections', NULL, NULL),
(39, 'استعراض المؤلفين', NULL, NULL, '', 'writers', NULL, NULL),
(40, 'إدخال المؤلفين', NULL, NULL, '', 'writers', NULL, NULL),
(41, 'تعديل المؤلفين', NULL, NULL, '', 'writers', NULL, NULL),
(42, 'حذف المؤلفين', NULL, NULL, '', 'writers', NULL, NULL),
(43, 'استعراض الطلبات', NULL, NULL, '', 'orders', NULL, NULL),
(44, 'إدخال الطلبات', NULL, NULL, '', 'orders', NULL, NULL),
(45, 'تعديل الطلبات', NULL, NULL, '', 'orders', NULL, NULL),
(46, 'حذف الطلبات', NULL, NULL, '', 'orders', NULL, NULL),
(47, 'استعراض الأسئلة الشائعة', NULL, NULL, '', 'faqs', NULL, NULL),
(48, 'إدخال الأسئلة الشائعة', NULL, NULL, '', 'faqs', NULL, NULL),
(49, 'تعديل الأسئلة الشائعة', NULL, NULL, '', 'faqs', NULL, NULL),
(50, 'حذف الأسئلة الشائعة', NULL, NULL, '', 'faqs', NULL, NULL),
(51, 'استعراض الصفحات الثابتة', NULL, NULL, '', 'pages', NULL, NULL),
(52, 'تعديل الصفحات الثابتة', NULL, NULL, '', 'pages', NULL, NULL),
(53, 'استعراض الرسائل', NULL, NULL, '', 'contactMessages', NULL, NULL),
(54, 'حذف الرسائل', NULL, NULL, '', 'contactMessages', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\User', 3, 'API TOKEN', '0b979ba60ecf595109c8cd84a7e8592f97b2ae72dbc0100b2c70203983403ac2', '[\"*\"]', '2023-01-12 12:10:17', '2023-01-12 11:27:00', '2023-01-12 12:10:17'),
(2, 'App\\User', 3, 'API TOKEN', '6578fbebd957655b3a5ba2e619f86fe9ab84b6788f7a07708e0f83801a78de4b', '[\"*\"]', NULL, '2023-01-12 12:01:30', '2023-01-12 12:01:30'),
(3, 'App\\User', 3, 'API TOKEN', '6b0b783ed2cb051254d6b408fac48a49043bca2ade668b76282b2f73d195a07a', '[\"*\"]', NULL, '2023-01-12 13:31:52', '2023-01-12 13:31:52'),
(4, 'App\\User', 4, 'API TOKEN', '9b6a8e4e5e11170e93d6f138e4a070172bf56f9872998a01c4c6df2f97b8a841', '[\"*\"]', NULL, '2023-01-12 13:41:00', '2023-01-12 13:41:00'),
(5, 'App\\User', 3, 'API TOKEN', '6428bd541e62236504152b803430b15da061af12f330696d551bb55e07d8651d', '[\"*\"]', NULL, '2023-01-12 13:41:24', '2023-01-12 13:41:24'),
(6, 'App\\User', 4, 'API TOKEN', 'a32440e6d69456793e398d21ba727712fb89d2bdf0e1604e140ac408e710b1c6', '[\"*\"]', NULL, '2023-01-12 13:42:19', '2023-01-12 13:42:19'),
(7, 'App\\User', 4, 'API TOKEN', 'c89b8a5371011f99e075eda73d95ada177ed4c5fe549f011cc265110c5843661', '[\"*\"]', NULL, '2023-01-12 14:22:10', '2023-01-12 14:22:10'),
(8, 'App\\User', 4, 'API TOKEN', 'ad002efda68a56a3b4736ae5e0f074e6ab50a9b73a995c29deacad20257da1fc', '[\"*\"]', NULL, '2023-01-12 14:23:56', '2023-01-12 14:23:56'),
(9, 'App\\User', 4, 'API TOKEN', '60633bb095cd464b79d41a06fead21e361754d82578b211d0639755d09a5eada', '[\"*\"]', NULL, '2023-01-12 14:28:30', '2023-01-12 14:28:30');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productName_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productName_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchases` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName_ar`, `productName_en`, `price`, `image`, `purchases`, `created_at`, `updated_at`) VALUES
(1, 'منتج اول ', 'first product', '100', '9vPZzvsr35DxEcPouPZ7LaUl9gjI6GjwguAX0kS6.jpg', 0, NULL, NULL),
(2, 'تيشرت', 'T-shirt', '500', 'pSL1Lk56JIxiv4FCPo40nkgcXk4rTlUdnCVg6JU1.jpg', 0, '2023-01-11 16:21:47', '2023-01-11 16:21:47'),
(3, 'ساعة', 'watch', '600', '78FZlcFNb7pFHdlqzHGei1c3O3CrlBe5KSzbaadV.png', 0, '2023-01-11 16:27:44', '2023-01-11 16:49:48'),
(4, 'ساعة ذكية', 'smart watch', '2500', '0VIrz761zR7drcnfa0G5EjM2K9OsF5cF1KAIzlpX.jpg', 0, '2023-01-11 16:36:49', '2023-01-11 16:49:37');

-- --------------------------------------------------------

--
-- Table structure for table `products_orders`
--

CREATE TABLE `products_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_orders`
--

INSERT INTO `products_orders` (`id`, `product_id`, `order_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_fr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name_ar`, `name_en`, `name_fr`, `guard`, `created_at`, `updated_at`) VALUES
(1, 'الإدارة', 'administrator', 'administrator fr', 'admin', NULL, NULL),
(2, 'ناشر', 'publisher', 'publisher fr', 'publisher', NULL, NULL),
(4, 'المشرفين', 'moderators', 'moderators fr', 'admin', NULL, NULL),
(3, 'العميل', 'client', 'client fr', 'client', NULL, NULL),
(9, 'المحاسب', 'Accountant', NULL, 'admin', '2022-11-08 14:38:15', '2022-11-08 14:38:15');

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE `role_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roles_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_permissions`
--

INSERT INTO `role_permissions` (`id`, `roles_id`, `permissions_id`, `created_at`, `updated_at`) VALUES
(154, '4', '31', NULL, NULL),
(153, '4', '29', NULL, NULL),
(152, '4', '28', NULL, NULL),
(151, '4', '27', NULL, NULL),
(150, '4', '25', NULL, NULL),
(149, '4', '24', NULL, NULL),
(148, '4', '23', NULL, NULL),
(147, '4', '17', NULL, NULL),
(146, '4', '16', NULL, NULL),
(145, '4', '15', NULL, NULL),
(144, '4', '19', NULL, NULL),
(143, '4', '13', NULL, NULL),
(142, '4', '12', NULL, NULL),
(141, '4', '11', NULL, NULL),
(140, '4', '9', NULL, NULL),
(139, '4', '8', NULL, NULL),
(138, '4', '7', NULL, NULL),
(137, '4', '1', NULL, NULL),
(136, '9', '53', NULL, NULL),
(135, '9', '51', NULL, NULL),
(134, '9', '47', NULL, NULL),
(133, '9', '44', NULL, NULL),
(132, '9', '43', NULL, NULL),
(131, '9', '39', NULL, NULL),
(130, '9', '35', NULL, NULL),
(129, '9', '31', NULL, NULL),
(128, '9', '29', NULL, NULL),
(127, '9', '28', NULL, NULL),
(126, '9', '27', NULL, NULL),
(125, '9', '25', NULL, NULL),
(124, '9', '24', NULL, NULL),
(123, '9', '23', NULL, NULL),
(122, '9', '17', NULL, NULL),
(121, '9', '16', NULL, NULL),
(120, '9', '15', NULL, NULL),
(119, '9', '19', NULL, NULL),
(118, '9', '13', NULL, NULL),
(117, '9', '12', NULL, NULL),
(116, '9', '11', NULL, NULL),
(115, '9', '9', NULL, NULL),
(114, '9', '8', NULL, NULL),
(113, '9', '7', NULL, NULL),
(112, '9', '5', NULL, NULL),
(111, '9', '4', NULL, NULL),
(110, '9', '3', NULL, NULL),
(109, '9', '1', NULL, NULL),
(155, '4', '32', NULL, NULL),
(156, '4', '33', NULL, NULL),
(157, '4', '34', NULL, NULL),
(158, '4', '36', NULL, NULL),
(159, '4', '37', NULL, NULL),
(160, '4', '38', NULL, NULL),
(161, '4', '39', NULL, NULL),
(162, '4', '40', NULL, NULL),
(163, '4', '41', NULL, NULL),
(164, '4', '42', NULL, NULL),
(165, '4', '43', NULL, NULL),
(166, '4', '44', NULL, NULL),
(167, '4', '45', NULL, NULL),
(168, '4', '47', NULL, NULL),
(169, '4', '48', NULL, NULL),
(170, '4', '49', NULL, NULL),
(171, '4', '51', NULL, NULL),
(172, '4', '52', NULL, NULL),
(173, '4', '53', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `serial_numbers`
--

CREATE TABLE `serial_numbers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `serial_numbers`
--

INSERT INTO `serial_numbers` (`id`, `serial_number`, `created_at`, `updated_at`) VALUES
(1, '150', '2023-01-11 15:32:39', '2023-01-11 15:32:39'),
(2, '180', '2023-01-11 16:01:59', '2023-01-11 16:08:36'),
(3, '190', '2023-01-11 16:08:59', '2023-01-11 16:08:59');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linked_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `linked_id`, `type`, `created_at`, `updated_at`) VALUES
(1, '_token', 'RSfEenl0gIQatsmSF1rM24hX5okxSjHbUAbXqfcm', NULL, NULL, '2022-06-11 16:59:20', '2022-06-11 16:59:20'),
(2, 'closeSite', '0', NULL, NULL, '2022-06-11 17:37:07', '2023-01-10 10:11:08'),
(3, 'siteTitle_ar', '', NULL, NULL, '2022-06-11 17:52:34', '2022-06-11 17:52:34'),
(4, 'siteTitle_en', '', NULL, NULL, '2022-06-11 17:52:34', '2022-06-11 17:52:34'),
(5, 'siteDescription', '', NULL, NULL, '2022-06-11 17:52:34', '2022-06-11 17:52:34'),
(6, 'siteKeywords', '', NULL, NULL, '2022-06-11 17:52:34', '2022-06-11 17:52:34'),
(7, 'closeSiteText', 'test', NULL, NULL, '2022-06-11 17:52:34', '2022-10-30 21:19:10'),
(8, 'facebook', '', NULL, NULL, '2022-06-11 17:52:34', '2022-06-11 17:52:34'),
(9, 'twitter', '', NULL, NULL, '2022-06-11 17:52:34', '2022-06-11 17:52:34'),
(10, 'instagram', '', NULL, NULL, '2022-06-11 17:52:34', '2022-06-11 17:52:34'),
(11, 'youtube', '', NULL, NULL, '2022-06-11 17:52:34', '2022-06-11 17:52:34'),
(12, 'phone', '971564093620', NULL, NULL, '2022-06-11 17:52:34', '2022-10-31 13:22:23'),
(13, 'mobile', '971564093620', NULL, NULL, '2022-06-11 17:52:34', '2022-10-31 13:22:23'),
(14, 'email', 'info@admin.com', NULL, NULL, '2022-06-11 17:52:34', '2023-01-10 10:11:08'),
(15, 'logo', '', NULL, NULL, '2022-06-11 17:53:20', '2022-09-18 21:59:48'),
(16, 'fav', '', NULL, NULL, '2022-06-11 17:53:20', '2022-09-18 21:59:52'),
(17, 'address', '', NULL, NULL, '2022-06-14 17:41:22', '2022-06-14 17:41:22'),
(18, 'map', '', NULL, NULL, '2022-06-14 17:41:22', '2022-06-14 17:41:22'),
(19, 'autoBooksPublishing', '0', NULL, NULL, '2022-06-14 17:41:22', '2022-10-24 19:44:04'),
(20, 'publisherControlPublishStatus', '1', NULL, NULL, '2022-06-14 17:41:22', '2022-10-25 19:38:21'),
(21, 'home_slide1title_ar', 'المعرض الإلكتروني الدائم للكتاب القانوني', NULL, NULL, '2022-06-18 22:15:34', '2022-11-08 22:51:22'),
(22, 'home_slide1title_en', 'Permanent electronic exhibition of legal books', NULL, NULL, '2022-06-18 22:15:34', '2022-11-08 22:51:22'),
(23, 'home_slide1title_fr', 'Permanent electronic exhibition of legal books', NULL, NULL, '2022-06-18 22:15:34', '2022-11-08 22:51:22'),
(24, 'home_slide1des_ar', '', NULL, NULL, '2022-06-18 22:15:34', '2022-11-08 22:51:22'),
(25, 'home_slide1des_en', '', NULL, NULL, '2022-06-18 22:15:34', '2022-11-08 22:51:22'),
(26, 'home_slide1des_fr', '', NULL, NULL, '2022-06-18 22:15:34', '2022-11-08 22:51:22'),
(27, 'home_slide1btnTxt_ar', '', NULL, NULL, '2022-06-18 22:15:34', '2022-10-24 16:21:21'),
(28, 'home_slide1btnTxt_en', '', NULL, NULL, '2022-06-18 22:15:34', '2022-10-24 16:21:21'),
(29, 'home_slide1btnTxt_fr', '', NULL, NULL, '2022-06-18 22:15:34', '2022-10-24 16:21:21'),
(30, 'home_slide1btnLink', '', NULL, NULL, '2022-06-18 22:15:34', '2022-10-24 16:21:21'),
(31, 'home_slide2title_ar', 'المنصة القانونية الأولى على مستوي الوطن العربي', NULL, NULL, '2022-06-18 22:15:34', '2022-10-31 14:32:21'),
(32, 'home_slide2title_en', 'The first legal platform in the Arab world', NULL, NULL, '2022-06-18 22:15:34', '2022-10-26 18:00:30'),
(33, 'home_slide2title_fr', 'The first legal platform in the Arab world', NULL, NULL, '2022-06-18 22:15:34', '2022-10-26 18:00:30'),
(34, 'home_slide2des_ar', '', NULL, NULL, '2022-06-18 22:15:34', '2022-10-26 18:00:30'),
(35, 'home_slide2des_en', '', NULL, NULL, '2022-06-18 22:15:35', '2022-10-26 18:00:30'),
(36, 'home_slide2des_fr', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(37, 'home_slide2btnTxt_ar', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(38, 'home_slide2btnTxt_en', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(39, 'home_slide2btnTxt_fr', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(40, 'home_slide2btnLink', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(41, 'home_slide3title_ar', '', NULL, NULL, '2022-06-18 22:15:35', '2022-10-24 16:20:44'),
(42, 'home_slide3title_en', '', NULL, NULL, '2022-06-18 22:15:35', '2022-10-24 16:20:44'),
(43, 'home_slide3title_fr', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(44, 'home_slide3des_ar', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(45, 'home_slide3des_en', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(46, 'home_slide3des_fr', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(47, 'home_slide3btnTxt_ar', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(48, 'home_slide3btnTxt_en', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(49, 'home_slide3btnTxt_fr', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(50, 'home_slide3btnLink', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(51, 'home_slide4title_ar', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(52, 'home_slide4title_en', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(53, 'home_slide4title_fr', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(54, 'home_slide4des_ar', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(55, 'home_slide4des_en', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(56, 'home_slide4des_fr', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(57, 'home_slide4btnTxt_ar', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(58, 'home_slide4btnTxt_en', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(59, 'home_slide4btnTxt_fr', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(60, 'home_slide4btnLink', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(61, 'home_slide5title_ar', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(62, 'home_slide5title_en', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(63, 'home_slide5title_fr', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(64, 'home_slide5des_ar', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(65, 'home_slide5des_en', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(66, 'home_slide5des_fr', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(67, 'home_slide5btnTxt_ar', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(68, 'home_slide5btnTxt_en', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(69, 'home_slide5btnTxt_fr', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(70, 'home_slide5btnLink', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(71, 'publisherShare', '50', NULL, NULL, '2022-06-18 22:15:35', '2022-10-28 15:02:47'),
(72, 'MinimumForTransfeerMoney', '1000', NULL, NULL, '2022-06-18 22:15:35', '2022-10-05 12:48:31'),
(73, 'username', '', NULL, NULL, '2022-06-18 22:15:35', '2022-11-01 14:05:29'),
(74, 'password', '#', NULL, NULL, '2022-06-18 22:15:35', '2022-11-01 14:05:29'),
(75, 'freeShippingTimeFrom', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(76, 'freeShippingTimeTo', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(77, 'otherShippingMethodTimeFrom', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(78, 'otherShippingMethodTimeTo', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(79, 'otherShippingMethodFees', '', NULL, NULL, '2022-06-18 22:15:35', '2022-06-18 22:15:35'),
(80, 'expreseShippingStatus', '1', NULL, NULL, '2022-06-21 16:56:38', '2022-06-21 16:56:38'),
(81, 'home_slide1img', 'uFQX4NpJfJILWXSJ4MLWOjRnKHOjtgxKLrcnmltM.jpg', NULL, NULL, '2022-06-27 08:39:18', '2022-11-08 22:51:23'),
(85, 'privacyPolicy_fr', '<p>* What are the conditions for placing my books in iLAW Fair<br />* Can I sell an e-book on your website?<br />I have a book of my own that I would like to print and publish</p>\r\n<p>* What are the conditions for placing my books at iLAW Fair?</p>\r\n<p>First: The rights to publish the book are entirely yours.</p>\r\n<p>Second: To advertise the book on our homepage or in our electronic newsletter, you have to suggest the title of the book, as our specialized committee will select the books according to their importance, and this service is free for the time being.</p>\r\n<p>Please include the following information in a separate letter to be attached to the books sent:<br />Date:<br />The title of the book:<br />Responsible person\'s name:<br />Responsible person\'s address:<br />E-mail:<br />Telephone number:<br />Fax Number:<br />Number of copies of the book available:<br />Copy price (in US dollars):<br />discount percentage:<br />About the book*:</p>\r\n<p>* The biography will be placed on our website on the book\'s page. Please, the submitted abstract should not exceed 400 words.</p>\r\n<p>I have a book I wrote that I would like to publish online<br />ilaw for Publishing and Distribution undertakes the preparation, publication and distribution of the book through its iLAW Fair website, in a fair agreement with the author, after examining the work by a specialized technical committee.</p>\r\n<p><br />terms and conditions</p>\r\n<p>&bull; Any dispute or complaint arising out of or related to the use of this website is strictly governed by and construed in accordance with the laws of the United Arab Emirates.<br />&bull; The main domicile of the company is the Emirate of Sharjah in the United Arab Emirates, and the applicable law is the UAE law.<br />0 The publisher and the author bear all the consequences and legal responsibility for all the ideas contained in the books announced through the site. Also, any dispute regarding the intellectual property rights of one of the works disclaims the site&rsquo;s legal responsibility, as it rests entirely with the publishing house and the author.</p>\r\n<p>&bull; Minors, under the age of 18, are prohibited from registering as users of this site and from transacting on or using the site.<br />&bull; We accept payments via the electronic network through credit cards from Visa, MasterCard, PayPal, Amex and Western Union in US dollars and UAE dirhams and in the currency used in the country of residence and in advance cash in some countries and we do not support the method of cash on delivery. In all cases, the transferee guarantees the source of his money and acknowledges that it is clean money free from suspicion of money laundering or terrorism financing, and he is solely responsible for violating that.</p>\r\n<p>&bull; The cardholder must keep a copy of transaction records and merchant protection policies and rules.<br />&bull; The user is responsible for protecting the privacy of his account.<br />&bull; Website policies, terms and conditions may change or be updated from time to time in order to meet the terms and standards. Therefore, customers are encouraged to visit these sections again and again to become aware of the latest changes to the site. These changes become effective on the day they are posted on the site.</p>\r\n<p><br />privacy policy</p>\r\n<p>&bull; The site saves personal identification information and stores it in the database. As for credit card details, they are not stored, shared, sold or rented to any third party.<br />&bull; If you make a payment for our products or service on the Site, the information you are asked to provide will be communicated directly to the Service Provider via a secure communication channel.<br />&bull; The store takes the necessary measures to ensure the protection and security of data through a variety of software methods and computer equipment. However, iLAW fair cannot guarantee the security of information previously disclosed on the Internet.<br />&bull; The site disclaims responsibility for the privacy policies of the sites linked to it. If you provide information to these third parties, different rules will apply to the collection and use of your information. You should contact these agencies directly if you have questions about their use of the information they collect.<br />&bull; Some of the advertisements you see on the Site may be selected and implemented by third parties such as advertisers, advertising agencies, audience segmentation providers and advertising networks. These parties may collect information about you and your online activity, whether on the Site or on any other site, from Through cookies, web beacons, and other technologies in an effort to understand your interests and provide you with advertising that matches your interests. Therefore, we want you to be aware that our site does not have access to or control over information that may be collected by third parties, and that this policy does not cover the information practices of those parties. Please cancel any other data that contradicts the aforementioned data.</p>\r\n<p><br />Delivery and Shipping Policy</p>\r\n<p>&bull; The iLAW Fair will not deal or provide any services or products to any of the countries that are sanctioned by the Office of Foreign Assets Control (OFAC) in accordance with the provisions of the Constitution and the laws of the United Arab Emirates.<br />&bull; Customers are notified of the payment confirmation via an e-mail upon completion of the payment process.<br />&bull; Order details are sent via e-mail within a maximum period of 48 hours from the confirmation of the order, and the customer can track the expected time of arrival of his order by logging into the \"Your Account\" icon.<br />0</p>\r\n<p>&bull; Please note that making multiple transactions leads to multiple entries in the cardholder\'s monthly statement.</p>\r\n<p><br />Refund Policy</p>\r\n<p>&bull; Refunds are made only when paying by credit card or PayPal.<br />&bull; When paying via Western Union or cash, please note that the amount or the difference in the amount paid is not returned to the customer due to the transfer cost, but rather it is kept as a credit for use in future orders.<br />0 The customer can refund the value of the product only, not included in the shipping cost or insurance fees.<br />0 The refund will be processed in your iLAW Fair account wallet within 5 working days from the date of confirming the refund request.<br />0complete</p>', NULL, NULL, '2022-07-01 08:43:56', '2022-10-25 13:35:48'),
(83, 'privacyPolicy_ar', '<p>* ما هي الشروط لأضع كتبي فيiLAW Fair <br /> * هل بإمكاني بيع كتاب إلكتروني عبر موقعكم؟ <br /> * لدي كتاب من تأليفي أود طباعته ونشره <br /> <br /> * ما هي الشروط لأضع كتبي في iLAW Fair؟ <br /> <br /> أولاً: ان تكون حقوق نشر الكتاب لك بالكامل. <br /> <br /> ثانيا: للإعلان عن الكتاب على صفحتنا الرئيسية أو في نشرتنا الإلكترونية، فعليك اقتراح عنوان الكتاب حيث تقوم لجنة مختصة لدينا بانتقاء الكتب تبعاً لأهميتها، وهذه الخدمة مجانية في الوقت الحاضر. <br /> <br /> يرجى تدوين المعلومات التالية في رسالة منفصلة ترفق مع الكتب المرسلة: <br /> التاريخ: <br /> عنوان الكتاب: <br /> اسم الشخص المسؤول: <br /> عنوان الشخص المسؤول: <br /> البريد الإلكتروني: <br /> رقم الهاتف: <br /> رقم الفاكس: <br /> عدد النسخ المتوفرة من الكتاب: <br /> سعر النسخة (بالدولار الأمريكي): <br /> نسبة الخصم: <br /> نبذة عن الكتاب*: <br /> <br /> *سيتم وضع النبذة على موقعنا في الصفحة الخاصة بالكتاب. يرجى ان لا تزيد النبذة المرسلة عن 400 كلمة. <br /> <br /> * لدي كتاب من تأليفي أود نشره الكترونيا <br /> تتولي ilaw&nbsp; للنشر والتوزيع اعداد الكتاب ونشره وتوزيعه من خلال موقعها الالكتروني iLAW Fair&nbsp; باتفاق عادل مع المؤلف بعد فحص العمل من قبل لجنة فنيه متخصصة علما بأن النشر كمؤلف سيكون الكترونيا فقط حيث لا نقدم خدمة النشر الورقي في الوقت الحالي. <br /> <br /> <br /> الأحكام والشروط<br /> <br /> &bull; كل نزاع أو شكوى تنشأ عن استخدام هذا الموقع أو تكون مرتبطة به تخضع حصرا لقوانين الإمارات العربية المتحدة وتفسّر وفقاً لها. <br /> &bull; الموطن الرئيسي للشركة هي امارة الشارقة بالإمارات العربية المتحدة ، والقانون واجب التطبيق هو القانون الاماراتي.<br /> ٠ يتحمل الناشر والمؤلف كافة التبعات والمسؤولية القانونية عن كافة الافكار الواردة بالكتب المعلن عنها من خلال الموقع ايضا اي نزاع خاص بحقوق الملكية الفكرية لأحد المؤلفات يخلي الموقع مسؤوليته القانونية حيث انها تقع كاملة علي عاتق دار النشر والمؤلف.<br /> <br /> &bull; يُمنع القاصرون، تحت سن 18، من التسجيل كمستخدمين في هذا الموقع ومن التعامل على الموقع أو استخدامه. <br /> &bull; نقبل تسديد الدفعات عبر الشبكة الإلكترونية من خلال بطاقات الائتمان من Visa وMasterCard وPayPal وAmex وWestern Union&nbsp; بالدولار الأميركي والدرهم الاماراتي وبالعملة المستخدمة في البلد المقيم ونقداً مسبقاً في بعض الدول ولا نعتمد طريقة الدفع النقدي عند الاستلام. وفي كل الأحوال يضمن المحول مصدر أمواله ويقر بأنها أموال نظيفة خالية من شبهة غسل الاموال أو تمويل الارهاب ويتحمل وحده مسؤولية مخالفة ذلك.<br /> <br /> &bull; يجب على حامل البطاقة الاحتفاظ بنسخة عن سجلات المعاملات وسياسات حماية التجار وقواعدهم. <br /> &bull; المستخدم مسؤول عن حماية خصوصية حسابه. <br /> &bull; قد تتغير سياسات وأحكام وشروط الموقع الإلكتروني أو يتم تحديثها من حين لآخر لغرض تلبية الشروط والمعايير. لذلك، يتم تشجيع الزبائن على زيارة هذه الأقسام مراراً وتكراراً ليصبحوا على دراية بآخر التغييرات التي طرأت على الموقع. ويسري مفعول هذه التغييرات في اليوم الذي تُنشر فيه على الموقع. <br /> <br /> <br /> سياسة الخصوصية</p>\r\n<p><br /> &bull; يحفظ الموقع معلومات الهوية الشخصية ويُخزنها في قاعدة البيانات أما التفاصيل الخاصّة ببطاقات الائتمان فلا يتمّ تخزينها، أو مشاركتها ،أو بيعها أو تأجيرها لأي طرف ثالث. <br /> &bull; في حال قمتم بدفع مبلغ مالي مقابل منتجاتنا أو خدمتنا على الموقع، سيتم إيصال المعلومات التي يُطلب منكم تزويدها مباشرة إلى مزوّد الخدمة عبر قناة اتصال آمنة. <br /> &bull; يتخّذ المتجر التدابير اللازمة لضمان حماية البيانات وأمنها عبر العديد من الأساليب البرمجية والمعدات الحاسوبية. ومع ذلك، لا يمكن لموقع iLAW fair&nbsp; أن يضمن أمن المعلومات التي يتم الكشف عنها مسبقاً على شبكة الإنترنت. <br /> &bull; يخلي الموقع مسؤوليته عن سياسات الخصوصية التابعة للمواقع المرتبطة به. وإن زوّدت معلومات لتلك الأطراف الثالثة سيتم تطبيق قواعد مختلفة في جمع معلوماتك الخاصة واستخدامها. يتوجب عليك أن تتواصل مع تلك الهيئات مباشرة إن كانت لديك أسئلة تتعلق حيال استخدامها للمعلومات التي تجمعها. <br /> &bull; قد يتم اختيار وتنفيذ بعض الإعلانات التي تراها على الموقع من قبل أطراف ثالثة كالمعلنين ووكالات الإعلانات ومزوّدي خدمات تجزئة الجماهير وشبكات الإعلان، ويمكن لهذه الأطراف أن تجمع المعلومات الخاصة بك وعن نشاطك على شبكة الإنترنت سواء كانت على الموقع أو على أي موقع آخر، وذلك من خلال ملفات تعريف الارتباط وإشارات الويب وغيرها من التقنيات في سعيها لفهم اهتماماتك وتزويدك بإعلانات تتوافق معها. لذلك، نوّد أن تكونوا على دراية بأنّ موقعنا لا يمكنه الوصول إلى المعلومات التي قد تجمعها الاطراف الثالثة أو التّحكم بها، وبأن هذه السياسة لا تغطي الممارسات المعلوماتية لتلك الأطراف. يرجى إلغاء أي بيانات أخرى تُعارض البيانات المذكورة مسبقاً. <br /> <br /> <br /> سياسة التسليم والشحن</p>\r\n<p><br /> &bull; إن iLAW Fair&nbsp; لن يتعامل أو يقدّم أي خدمات أو منتجات إلى أي بلد من البلدان المفروضة عليها عقوبات من قبل مكتب مراقبة الأصول الأجنبية (أوفاك) وذلك وفقاً لأحكام الدستور والقوانين التابعة لدولة الإمارات العربية المتحدة . <br /> &bull; يتم إعلام العملاء بتأكيد الدفع عبر بريد إلكتروني فور اتمام عملية الدفع. <br /> &bull; يتم إرسال تفاصيل الطلبية عبر بريد إلكتروني في مدة زمنيه اقصاها ٤٨ ساعة من تأكيد الطلب وبإمكان العميل أن يتعقب الوقت المرتقب لوصول طلبيته عبر الدخول إلى أيقونة \"حسابك\".<br /> ٠ <br /> <br /> &bull; يرجى ملاحظة أن إجراء معاملات متعددة يؤدي إلى عمليات قيد متعددة في بيان حامل البطاقة الشهري. <br /> <br /> <br /> سياسة الاسترداد</p>\r\n<p><br /> &bull; تجري عمليات استرداد الأموال فقط عند الدفع عبر بطاقة الإئتمان أو PayPal&nbsp; .</p>\r\n<p>&bull; عند الدفع عبر Western Union أو نقداً يرجى ملاحظة أنه لا يتم إعادة المبلغ أو فرق المبلغ المدفوع إلى الزبون بسبب كلفة التحويل بل يتم الإحتفاظ به كرصيد للاستخدام في الطلبيات المستقبلية.<br /> ٠ يمكن للعميل استرداد قيمة المنتج فقط غير مشمولة بتكلفة الشحن أو رسوم التأمين .<br /> ٠ تتم عملية استرداد الاموال في محفظة حسابك في iLAW Fair&nbsp; في غضون ٥ أيام عمل من تاريخ تأكيد طلب الاسترداد .<br /> ٠تتم اعادة الاموال لحساب بطاقات الائتمان الخاصة بك في غضون ١٤ يوم عمل من تاريخ تأكيد طلب الاسترداد. <br /> <br /> <br /> <br /> <br /> سياسة الإلغاء والتبديل</p>\r\n<p><br /> يسمح بإلغاء الطلبية أو إبدالها في الحالات التالية: <br /> &bull; اذا أُرسل المنتج الخاطئ. <br /> &bull; اذا ثبت أن المنتج معيب أو أتلف خلال عملية الشحن. <br /> &bull; يمكن طلب الإلغاء في مرحلة الإعداد أي إن كانت الكتب لا تزال في حالة \"مطلوب\" حيث لا يمكن طلب إلغاء كتاب بعد أن يصبح في حالة \"موجود\" أو \"أرسل\".<br /> ٠ في كل الاحوال يجب تقديم طلب التبديل خلال ٤٨ساعة بحد اقصي من تاريخ استلام الشحنة الخاطئة.</p>\r\n<p><br />* ما هي الشروط لأضع كتبي فيiLAW Fair <br /> * هل بإمكاني بيع كتاب إلكتروني عبر موقعكم؟ <br /> * لدي كتاب من تأليفي أود طباعته ونشره <br /> <br /> * ما هي الشروط لأضع كتبي في iLAW Fair؟ <br /> <br /> أولاً: ان تكون حقوق نشر الكتاب لك بالكامل. <br /> <br /> ثانيا: للإعلان عن الكتاب على صفحتنا الرئيسية أو في نشرتنا الإلكترونية، فعليك اقتراح عنوان الكتاب حيث تقوم لجنة مختصة لدينا بانتقاء الكتب تبعاً لأهميتها، وهذه الخدمة مجانية في الوقت الحاضر. <br /> <br /> يرجى تدوين المعلومات التالية في رسالة منفصلة ترفق مع الكتب المرسلة: <br /> التاريخ: <br /> عنوان الكتاب: <br /> اسم الشخص المسؤول: <br /> عنوان الشخص المسؤول: <br /> البريد الإلكتروني: <br /> رقم الهاتف: <br /> رقم الفاكس: <br /> عدد النسخ المتوفرة من الكتاب: <br /> سعر النسخة (بالدولار الأمريكي): <br /> نسبة الخصم: <br /> نبذة عن الكتاب*: <br /> <br /> *سيتم وضع النبذة على موقعنا في الصفحة الخاصة بالكتاب. يرجى ان لا تزيد النبذة المرسلة عن 400 كلمة. <br /> <br /> * لدي كتاب من تأليفي أود نشره الكترونيا <br /> تتولي ilaw&nbsp; للنشر والتوزيع اعداد الكتاب ونشره وتوزيعه من خلال موقعها الالكتروني iLAW Fair&nbsp; باتفاق عادل مع المؤلف بعد فحص العمل من قبل لجنة فنيه متخصصة علما بأن النشر كمؤلف سيكون الكترونيا فقط حيث لا نقدم خدمة النشر الورقي في الوقت الحالي. <br /> <br /> <br /> الأحكام والشروط<br /> <br /> &bull; كل نزاع أو شكوى تنشأ عن استخدام هذا الموقع أو تكون مرتبطة به تخضع حصرا لقوانين الإمارات العربية المتحدة وتفسّر وفقاً لها. <br /> &bull; الموطن الرئيسي للشركة هي امارة الشارقة بالإمارات العربية المتحدة ، والقانون واجب التطبيق هو القانون الاماراتي.<br /> ٠ يتحمل الناشر والمؤلف كافة التبعات والمسؤولية القانونية عن كافة الافكار الواردة بالكتب المعلن عنها من خلال الموقع ايضا اي نزاع خاص بحقوق الملكية الفكرية لأحد المؤلفات يخلي الموقع مسؤوليته القانونية حيث انها تقع كاملة علي عاتق دار النشر والمؤلف.<br /> <br /> &bull; يُمنع القاصرون، تحت سن 18، من التسجيل كمستخدمين في هذا الموقع ومن التعامل على الموقع أو استخدامه. <br /> &bull; نقبل تسديد الدفعات عبر الشبكة الإلكترونية من خلال بطاقات الائتمان من Visa وMasterCard وPayPal وAmex وWestern Union&nbsp; بالدولار الأميركي والدرهم الاماراتي وبالعملة المستخدمة في البلد المقيم ونقداً مسبقاً في بعض الدول ولا نعتمد طريقة الدفع النقدي عند الاستلام. وفي كل الأحوال يضمن المحول مصدر أمواله ويقر بأنها أموال نظيفة خالية من شبهة غسل الاموال أو تمويل الارهاب ويتحمل وحده مسؤولية مخالفة ذلك.<br /> <br /> &bull; يجب على حامل البطاقة الاحتفاظ بنسخة عن سجلات المعاملات وسياسات حماية التجار وقواعدهم. <br /> &bull; المستخدم مسؤول عن حماية خصوصية حسابه. <br /> &bull; قد تتغير سياسات وأحكام وشروط الموقع الإلكتروني أو يتم تحديثها من حين لآخر لغرض تلبية الشروط والمعايير. لذلك، يتم تشجيع الزبائن على زيارة هذه الأقسام مراراً وتكراراً ليصبحوا على دراية بآخر التغييرات التي طرأت على الموقع. ويسري مفعول هذه التغييرات في اليوم الذي تُنشر فيه على الموقع. <br /> <br /> <br /> سياسة الخصوصية</p>\r\n<p><br /> &bull; يحفظ الموقع معلومات الهوية الشخصية ويُخزنها في قاعدة البيانات أما التفاصيل الخاصّة ببطاقات الائتمان فلا يتمّ تخزينها، أو مشاركتها ،أو بيعها أو تأجيرها لأي طرف ثالث. <br /> &bull; في حال قمتم بدفع مبلغ مالي مقابل منتجاتنا أو خدمتنا على الموقع، سيتم إيصال المعلومات التي يُطلب منكم تزويدها مباشرة إلى مزوّد الخدمة عبر قناة اتصال آمنة. <br /> &bull; يتخّذ المتجر التدابير اللازمة لضمان حماية البيانات وأمنها عبر العديد من الأساليب البرمجية والمعدات الحاسوبية. ومع ذلك، لا يمكن لموقع iLAW fair&nbsp; أن يضمن أمن المعلومات التي يتم الكشف عنها مسبقاً على شبكة الإنترنت. <br /> &bull; يخلي الموقع مسؤوليته عن سياسات الخصوصية التابعة للمواقع المرتبطة به. وإن زوّدت معلومات لتلك الأطراف الثالثة سيتم تطبيق قواعد مختلفة في جمع معلوماتك الخاصة واستخدامها. يتوجب عليك أن تتواصل مع تلك الهيئات مباشرة إن كانت لديك أسئلة تتعلق حيال استخدامها للمعلومات التي تجمعها. <br /> &bull; قد يتم اختيار وتنفيذ بعض الإعلانات التي تراها على الموقع من قبل أطراف ثالثة كالمعلنين ووكالات الإعلانات ومزوّدي خدمات تجزئة الجماهير وشبكات الإعلان، ويمكن لهذه الأطراف أن تجمع المعلومات الخاصة بك وعن نشاطك على شبكة الإنترنت سواء كانت على الموقع أو على أي موقع آخر، وذلك من خلال ملفات تعريف الارتباط وإشارات الويب وغيرها من التقنيات في سعيها لفهم اهتماماتك وتزويدك بإعلانات تتوافق معها. لذلك، نوّد أن تكونوا على دراية بأنّ موقعنا لا يمكنه الوصول إلى المعلومات التي قد تجمعها الاطراف الثالثة أو التّحكم بها، وبأن هذه السياسة لا تغطي الممارسات المعلوماتية لتلك الأطراف. يرجى إلغاء أي بيانات أخرى تُعارض البيانات المذكورة مسبقاً. <br /> <br /> <br /> سياسة التسليم والشحن</p>\r\n<p><br /> &bull; إن iLAW Fair&nbsp; لن يتعامل أو يقدّم أي خدمات أو منتجات إلى أي بلد من البلدان المفروضة عليها عقوبات من قبل مكتب مراقبة الأصول الأجنبية (أوفاك) وذلك وفقاً لأحكام الدستور والقوانين التابعة لدولة الإمارات العربية المتحدة . <br /> &bull; يتم إعلام العملاء بتأكيد الدفع عبر بريد إلكتروني فور اتمام عملية الدفع. <br /> &bull; يتم إرسال تفاصيل الطلبية عبر بريد إلكتروني في مدة زمنيه اقصاها ٤٨ ساعة من تأكيد الطلب وبإمكان العميل أن يتعقب الوقت المرتقب لوصول طلبيته عبر الدخول إلى أيقونة \"حسابك\".<br /> ٠ <br /> <br /> &bull; يرجى ملاحظة أن إجراء معاملات متعددة يؤدي إلى عمليات قيد متعددة في بيان حامل البطاقة الشهري. <br /> <br /> <br /> سياسة الاسترداد</p>\r\n<p><br /> &bull; تجري عمليات استرداد الأموال فقط عند الدفع عبر بطاقة الإئتمان أو PayPal&nbsp; .</p>\r\n<p>&bull; عند الدفع عبر Western Union أو نقداً يرجى ملاحظة أنه لا يتم إعادة المبلغ أو فرق المبلغ المدفوع إلى الزبون بسبب كلفة التحويل بل يتم الإحتفاظ به كرصيد للاستخدام في الطلبيات المستقبلية.<br /> ٠ يمكن للعميل استرداد قيمة المنتج فقط غير مشمولة بتكلفة الشحن أو رسوم التأمين .<br /> ٠ تتم عملية استرداد الاموال في محفظة حسابك في iLAW Fair&nbsp; في غضون ٥ أيام عمل من تاريخ تأكيد طلب الاسترداد .<br /> ٠تتم اعادة الاموال لحساب بطاقات الائتمان الخاصة بك في غضون ١٤ يوم عمل من تاريخ تأكيد طلب الاسترداد. <br /> <br /> <br /> <br /> <br /> سياسة الإلغاء والتبديل</p>\r\n<p><br /> يسمح بإلغاء الطلبية أو إبدالها في الحالات التالية: <br /> &bull; اذا أُرسل المنتج الخاطئ. <br /> &bull; اذا ثبت أن المنتج معيب أو أتلف خلال عملية الشحن. <br /> &bull; يمكن طلب الإلغاء في مرحلة الإعداد أي إن كانت الكتب لا تزال في حالة \"مطلوب\" حيث لا يمكن طلب إلغاء كتاب بعد أن يصبح في حالة \"موجود\" أو \"أرسل\".<br /> ٠ في كل الاحوال يجب تقديم طلب التبديل خلال ٤٨ساعة بحد اقصي من تاريخ استلام الشحنة الخاطئة.<br /> <br /> <br />&nbsp;</p>', NULL, NULL, '2022-07-01 08:43:56', '2022-10-25 13:35:18'),
(84, 'privacyPolicy_en', '<p>* What are the conditions for placing my books in iLAW Fair<br />* Can I sell an e-book on your website?<br />I have a book of my own that I would like to print and publish</p>\r\n<p>* What are the conditions for placing my books at iLAW Fair?</p>\r\n<p>First: The rights to publish the book are entirely yours.</p>\r\n<p>Second: To advertise the book on our homepage or in our electronic newsletter, you have to suggest the title of the book, as our specialized committee will select the books according to their importance, and this service is free for the time being.</p>\r\n<p>Please include the following information in a separate letter to be attached to the books sent:<br />Date:<br />The title of the book:<br />Responsible person\'s name:<br />Responsible person\'s address:<br />E-mail:<br />Telephone number:<br />Fax Number:<br />Number of copies of the book available:<br />Copy price (in US dollars):<br />discount percentage:<br />About the book*:</p>\r\n<p>* The biography will be placed on our website on the book\'s page. Please, the submitted abstract should not exceed 400 words.</p>\r\n<p>I have a book I wrote that I would like to publish online<br />ilaw for Publishing and Distribution undertakes the preparation, publication and distribution of the book through its iLAW Fair website, in a fair agreement with the author, after examining the work by a specialized technical committee.</p>\r\n<p><br />terms and conditions</p>\r\n<p>&bull; Any dispute or complaint arising out of or related to the use of this website is strictly governed by and construed in accordance with the laws of the United Arab Emirates.<br />&bull; The main domicile of the company is the Emirate of Sharjah in the United Arab Emirates, and the applicable law is the UAE law.<br />0 The publisher and the author bear all the consequences and legal responsibility for all the ideas contained in the books announced through the site. Also, any dispute regarding the intellectual property rights of one of the works disclaims the site&rsquo;s legal responsibility, as it rests entirely with the publishing house and the author.</p>\r\n<p>&bull; Minors, under the age of 18, are prohibited from registering as users of this site and from transacting on or using the site.<br />&bull; We accept payments via the electronic network through credit cards from Visa, MasterCard, PayPal, Amex and Western Union in US dollars and UAE dirhams and in the currency used in the country of residence and in advance cash in some countries and we do not support the method of cash on delivery. In all cases, the transferee guarantees the source of his money and acknowledges that it is clean money free from suspicion of money laundering or terrorism financing, and he is solely responsible for violating that.</p>\r\n<p>&bull; The cardholder must keep a copy of transaction records and merchant protection policies and rules.<br />&bull; The user is responsible for protecting the privacy of his account.<br />&bull; Website policies, terms and conditions may change or be updated from time to time in order to meet the terms and standards. Therefore, customers are encouraged to visit these sections again and again to become aware of the latest changes to the site. These changes become effective on the day they are posted on the site.</p>\r\n<p><br />privacy policy</p>\r\n<p>&bull; The site saves personal identification information and stores it in the database. As for credit card details, they are not stored, shared, sold or rented to any third party.<br />&bull; If you make a payment for our products or service on the Site, the information you are asked to provide will be communicated directly to the Service Provider via a secure communication channel.<br />&bull; The store takes the necessary measures to ensure the protection and security of data through a variety of software methods and computer equipment. However, iLAW fair cannot guarantee the security of information previously disclosed on the Internet.<br />&bull; The site disclaims responsibility for the privacy policies of the sites linked to it. If you provide information to these third parties, different rules will apply to the collection and use of your information. You should contact these agencies directly if you have questions about their use of the information they collect.<br />&bull; Some of the advertisements you see on the Site may be selected and implemented by third parties such as advertisers, advertising agencies, audience segmentation providers and advertising networks. These parties may collect information about you and your online activity, whether on the Site or on any other site, from Through cookies, web beacons, and other technologies in an effort to understand your interests and provide you with advertising that matches your interests. Therefore, we want you to be aware that our site does not have access to or control over information that may be collected by third parties, and that this policy does not cover the information practices of those parties. Please cancel any other data that contradicts the aforementioned data.</p>\r\n<p><br />Delivery and Shipping Policy</p>\r\n<p>&bull; The iLAW Fair will not deal or provide any services or products to any of the countries that are sanctioned by the Office of Foreign Assets Control (OFAC) in accordance with the provisions of the Constitution and the laws of the United Arab Emirates.<br />&bull; Customers are notified of the payment confirmation via an e-mail upon completion of the payment process.<br />&bull; Order details are sent via e-mail within a maximum period of 48 hours from the confirmation of the order, and the customer can track the expected time of arrival of his order by logging into the \"Your Account\" icon.<br />0</p>\r\n<p>&bull; Please note that making multiple transactions leads to multiple entries in the cardholder\'s monthly statement.</p>\r\n<p><br />Refund Policy</p>\r\n<p>&bull; Refunds are made only when paying by credit card or PayPal.<br />&bull; When paying via Western Union or cash, please note that the amount or the difference in the amount paid is not returned to the customer due to the transfer cost, but rather it is kept as a credit for use in future orders.<br />0 The customer can refund the value of the product only, not included in the shipping cost or insurance fees.<br />0 The refund will be processed in your iLAW Fair account wallet within 5 working days from the date of confirming the refund request.<br />0complete</p>', NULL, NULL, '2022-07-01 08:43:56', '2022-10-25 13:35:48'),
(82, 'home_slide2img', 'a7GourwosnBvgWIVKmmkl0aI0xeiCoPb6kcFAt09.webp', NULL, NULL, '2022-06-27 08:44:04', '2022-10-24 16:18:12'),
(88, 'otherShippingMethod', '0', NULL, NULL, '2022-09-27 15:41:53', '2022-09-27 15:41:53'),
(86, 'freeShipping', '0', NULL, NULL, '2022-09-18 18:34:59', '2022-09-18 22:42:00'),
(87, 'home_slide3img', '', NULL, NULL, '2022-09-18 22:00:12', '2022-10-24 16:12:54'),
(89, 'stopAllPublishers', '0', NULL, NULL, '2022-10-05 12:52:51', '2022-10-25 19:38:21'),
(91, 'registerationEmail_en', '<p>your account has been created successfully please click the link bellow to activate it and begin to use our application.</p>', NULL, NULL, '2022-11-07 04:38:05', '2022-11-08 22:37:07'),
(90, 'registerationEmail_ar', '<p>تم إنشاء حسابك بنجاح على موقعنا ilawfair يمكنك استخدام الرابط التالي لتفعيل حسابك فقط اضغط على</p>', NULL, NULL, '2022-11-07 04:38:05', '2022-11-08 22:37:07'),
(92, 'linkedin', '', NULL, NULL, '2023-01-10 10:11:08', '2023-01-10 10:11:08'),
(93, 'tiktok', '', NULL, NULL, '2023-01-10 10:11:08', '2023-01-10 10:11:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `familyName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '2',
  `api_token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT 'ar',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `userName`, `familyName`, `email`, `phone`, `image`, `background_image`, `job_title`, `bio`, `role`, `api_token`, `language`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'محمد', '3bsamad', 'عبده', 'mohamed@gmail.com', '01233656489', 'kcx08WyJGdKxa5eJuBjWxpoR3ZkDN3TWXS6Bpr85.jpg', NULL, 'مهندس', NULL, '1', NULL, 'ar', NULL, '$2y$10$BrIR9xsmJ1avKyXzrDVTD.2DW8kHS0aAwy4zFrxDAFRdlM2wfBvhC', NULL, NULL, '2023-01-10 10:28:11'),
(3, 'Ahmed', NULL, 'mohamed', 'ahmed@gmail.com', '014785369', NULL, NULL, 'doctor', NULL, '2', '1|2nl2cevJWZuWWNV2JPzPrNqCqgrv9Kfmf1Hox7Gf', 'en', NULL, '$2y$10$DRJY4nziip4oHZxRlM9o3u.KUpJhDZdEY9.VGHrTC2PEG/lsxCFq.', NULL, '2023-01-12 11:27:00', '2023-01-12 11:27:00'),
(4, 'mahmoud', NULL, 'mohamed', 'mahmoud@gmail.com', '014785369', NULL, NULL, 'doctor', NULL, '2', NULL, 'en', NULL, '$2y$10$i6HcHeRlv6yGazMTvLvTYeAlaFSsgf7erN4KpNcbNZhrq96y3ilq6', NULL, '2023-01-12 13:41:00', '2023-01-12 13:41:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_favorites`
--

CREATE TABLE `user_favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_favorites`
--

INSERT INTO `user_favorites` (`id`, `user_id`, `book_id`, `created_at`, `updated_at`) VALUES
(195, '96', '131', '2022-10-17 12:32:49', '2022-10-17 12:32:49'),
(199, '12', '132', '2022-10-21 17:28:09', '2022-10-21 17:28:09'),
(5, '61', '25', '2022-10-02 19:16:13', '2022-10-02 19:16:13'),
(203, '185', '139', '2022-11-07 13:01:59', '2022-11-07 13:01:59'),
(197, '100', '130', '2022-10-17 12:37:47', '2022-10-17 12:37:47'),
(196, '96', '132', '2022-10-17 12:33:04', '2022-10-17 12:33:04'),
(192, '98', '5', '2022-10-09 20:27:13', '2022-10-09 20:27:13'),
(164, '64', '31', '2022-10-03 16:39:04', '2022-10-03 16:39:04'),
(202, '185', '130', '2022-11-07 12:59:07', '2022-11-07 12:59:07'),
(165, '64', '30', '2022-10-03 17:01:25', '2022-10-03 17:01:25'),
(180, '89', '32', '2022-10-04 12:05:11', '2022-10-04 12:05:11'),
(183, '89', '15', '2022-10-05 15:15:08', '2022-10-05 15:15:08'),
(201, '151', '125', '2022-11-06 17:41:53', '2022-11-06 17:41:53'),
(162, '64', '22', '2022-10-03 16:31:17', '2022-10-03 16:31:17'),
(188, '86', '41', '2022-10-06 19:57:23', '2022-10-06 19:57:23'),
(179, '72', '32', '2022-10-04 08:36:07', '2022-10-04 08:36:07'),
(200, '12', '131', '2022-10-21 17:28:09', '2022-10-21 17:28:09'),
(190, '95', '40', '2022-10-07 08:42:09', '2022-10-07 08:42:09'),
(191, '97', '41', '2022-10-09 14:45:41', '2022-10-09 14:45:41'),
(36, '61', '26', '2022-10-02 19:54:20', '2022-10-02 19:54:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_a_qs`
--
ALTER TABLE `f_a_qs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders_products`
--
ALTER TABLE `orders_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_products_product_id_foreign` (`products_id`),
  ADD KEY `orders_products_order_id_foreign` (`orders_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_orders`
--
ALTER TABLE `products_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_orders_product_id_foreign` (`product_id`),
  ADD KEY `products_orders_order_id_foreign` (`order_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serial_numbers`
--
ALTER TABLE `serial_numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_favorites`
--
ALTER TABLE `user_favorites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apps`
--
ALTER TABLE `apps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `f_a_qs`
--
ALTER TABLE `f_a_qs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders_products`
--
ALTER TABLE `orders_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=460;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products_orders`
--
ALTER TABLE `products_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `role_permissions`
--
ALTER TABLE `role_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT for table `serial_numbers`
--
ALTER TABLE `serial_numbers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_favorites`
--
ALTER TABLE `user_favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders_products`
--
ALTER TABLE `orders_products`
  ADD CONSTRAINT `orders_products_order_id_foreign` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_products_product_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products_orders`
--
ALTER TABLE `products_orders`
  ADD CONSTRAINT `products_orders_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
