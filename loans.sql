-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2020 at 05:53 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loans`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_bank_statement`
--

CREATE TABLE `company_bank_statement` (
  `id` int(11) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `receipt_number` varchar(30) NOT NULL,
  `year` varchar(10) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `done_by` varchar(30) NOT NULL,
  `year_finish` varchar(3) NOT NULL DEFAULT 'no',
  `active` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_bank_statement`
--

INSERT INTO `company_bank_statement` (`id`, `amount`, `receipt_number`, `year`, `date_added`, `done_by`, `year_finish`, `active`) VALUES
(1, '20000', 'eco20254', '', '2020-04-01 00:00:00', '1', 'no', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `company_expenses`
--

CREATE TABLE `company_expenses` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `amount` varchar(50) NOT NULL,
  `receipt_number` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `done_by` varchar(50) NOT NULL,
  `year_finish` varchar(3) NOT NULL DEFAULT 'no',
  `active` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_expenses`
--

INSERT INTO `company_expenses` (`id`, `name`, `amount`, `receipt_number`, `year`, `date_added`, `done_by`, `year_finish`, `active`) VALUES
(1, 'TV Remote', '10', 'tv2020', '2020', '2020-03-24', '1', 'no', 'yes'),
(2, 'Food for staff', '20', 'fod2020', '', '2020-03-29', '1', 'no', 'yes'),
(3, 'Mask', '20', 'mas2020', '', '2020-03-29', '1', 'no', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `company_returnship`
--

CREATE TABLE `company_returnship` (
  `id` int(11) NOT NULL,
  `year` varchar(10) NOT NULL,
  `amount` double NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `active` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_returnship`
--

INSERT INTO `company_returnship` (`id`, `year`, `amount`, `date_added`, `active`) VALUES
(1, '2020', 167.52777811111, '2020-04-01', 'yes'),
(3, '2020', 167.53, '2020-04-02', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `company_revenue`
--

CREATE TABLE `company_revenue` (
  `id` int(11) NOT NULL,
  `person_id` varchar(50) NOT NULL,
  `loan_id` varchar(50) NOT NULL,
  `amount` double NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `purpose_date` varchar(50) NOT NULL,
  `done_by` varchar(50) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `year_finish` varchar(3) NOT NULL DEFAULT 'no',
  `active` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_revenue`
--

INSERT INTO `company_revenue` (`id`, `person_id`, `loan_id`, `amount`, `purpose`, `purpose_date`, `done_by`, `date_added`, `year_finish`, `active`) VALUES
(1, 'f6966091f86e91942b71f36cc7b5430d', '1', 1000, 'Loan Interest and Penalty Interest', '	\r\n2020-03-22', '1 ', '2020-02-23', 'no', 'yes'),
(2, '0851bf0a73cfb1b3559a277f2f09c66f', '3', 6.66667, 'Loan Interest', '2020-04-23', '1 ', '2020-03-23', 'no', 'yes'),
(3, '0851bf0a73cfb1b3559a277f2f09c66f', '3', 6.66667, 'Loan Interest', '2020-04-23', '1 ', '2020-03-23', 'no', 'yes'),
(4, 'A199905222020', '3', 25, 'Penalty For member contribution', 'February - 2020', '1 ', '2020-03-23', 'no', 'yes'),
(5, 'da64883f2825ba6478dce6a8c9ecbf8d', '7', 5, 'Penalty For member contribution', 'February - 2020', '1 ', '2020-03-23', 'no', 'yes'),
(6, '4ec6e239e5c086cae3d4181b650c8a9b', '5', 5, 'Penalty For member contribution', 'January - 2020', '1 ', '2020-03-23', 'no', 'yes'),
(7, '4ec6e239e5c086cae3d4181b650c8a9b', '5', 5, 'Penalty For member contribution', 'February - 2020', '1 ', '2020-03-23', 'no', 'yes'),
(8, '1dabd7990abbe29c5ea622d80e2d5879', '11', 12.5, 'Penalty For member contribution', 'January - 2020', '1 ', '2020-03-23', 'no', 'yes'),
(9, '0851bf0a73cfb1b3559a277f2f09c66f', '3', 6.6666666666667, 'Loan Interest', '2020-04-23', '1 ', '2020-03-23', 'no', 'yes'),
(10, 'f6966091f86e91942b71f36cc7b5430d', '1', 50, 'Loan Interest', '2020-03-28', '1 ', '2020-03-25', 'no', 'yes'),
(11, 'f6966091f86e91942b71f36cc7b5430d', '1', 50, 'Loan Interest', '2020-03-28', '1 ', '2020-03-29', 'no', 'yes'),
(12, 'f6966091f86e91942b71f36cc7b5430d', '1', 50, 'Loan Interest', '2020-03-28', '1 ', '2020-03-29', 'no', 'yes'),
(13, 'f6966091f86e91942b71f36cc7b5430d', '1', 50, 'Loan Interest', '2020-03-28', '1 ', '2020-03-29', 'no', 'yes'),
(14, 'f6966091f86e91942b71f36cc7b5430d', '1', 50, 'Loan Interest', '2020-03-28', '1 ', '2020-03-29', 'no', 'yes'),
(15, 'f6966091f86e91942b71f36cc7b5430d', '1', 50, 'Loan Interest', '2020-03-28', '1 ', '2020-03-29', 'no', 'yes'),
(16, '0851bf0a73cfb1b3559a277f2f09c66f', '3', 6.6666666666667, 'Loan Interest', '2020-04-26', '1 ', '2020-03-29', 'no', 'yes'),
(17, 'f6966091f86e91942b71f36cc7b5430d', '1', 50, 'Loan Interest', '2020-03-28', '1 ', '2020-03-29', 'no', 'yes'),
(18, '399b2b9804c57bf4fb2242f5dbdfd0be', '8', 5, 'Penalty For member contribution', 'January - 2020', '1 ', '2020-03-29', 'no', 'yes'),
(19, '399b2b9804c57bf4fb2242f5dbdfd0be', '8', 5, 'Penalty For member contribution', 'February - 2020', '1 ', '2020-03-29', 'no', 'yes'),
(20, '1dabd7990abbe29c5ea622d80e2d5879', '11', 12.5, 'Penalty For member contribution', 'February - 2020', '1 ', '2020-03-29', 'no', 'yes'),
(21, '399b2b9804c57bf4fb2242f5dbdfd0be', '4', 5.8333333333333, 'Loan Interest', '2020-05-29', '1 ', '2020-03-29', 'no', 'yes'),
(22, '1dabd7990abbe29c5ea622d80e2d5879', '2', 5.5555555555556, 'Loan Interest', '2023-03-28', '1 ', '2020-03-29', 'no', 'yes'),
(23, '0a910b5525349488db6247f35cdcf6b0', '', 100, 'Member Registration Fee', '31st March, 2020', '1 ', '2020-03-31', 'no', 'yes'),
(24, '7d09348afdf7e6f40af8f474157ba2bf', '', 100, 'Member Registration Fee', '31st March, 2020', '1 ', '2020-03-31', 'no', 'yes'),
(25, '64c590c6fa6cab39ae56906f10353eac', '', 100, 'Member Registration Fee', '31st March, 2020', '1 ', '2020-03-31', 'no', 'yes'),
(26, 'c4c8ca9ca27ef145c27bc564e786aa1c', '', 100, 'Member Registration Fee', '31st March, 2020', '1 ', '2020-03-31', 'no', 'yes'),
(27, '1dabd7990abbe29c5ea622d80e2d5879', '', 100, 'Member Registration Fee', '31st March, 2020', '1 ', '2020-03-31', 'no', 'yes'),
(28, '440324a81d2b21260d1e46a746559250', '', 100, 'Member Registration Fee', '31st March, 2020', '1 ', '2020-03-31', 'no', 'yes'),
(29, '5d1d6e53185f74e23d30e8aff8ed0cb8', '', 100, 'Member Registration Fee', '31st March, 2020', '1 ', '2020-03-31', 'no', 'yes'),
(30, '0851bf0a73cfb1b3559a277f2f09c66f', '', 100, 'Member Registration Fee', '31st March, 2020', '1 ', '2020-03-31', 'no', 'yes'),
(31, '399b2b9804c57bf4fb2242f5dbdfd0be', '', 100, 'Member Registration Fee', '31st March, 2020', '1 ', '2020-03-31', 'no', 'yes'),
(32, '87ad20c24e4068d1cb47850ca6f6cc8e', '', 100, 'Member Registration Fee', '31st March, 2020', '1 ', '2020-03-31', 'no', 'yes'),
(33, '4ec6e239e5c086cae3d4181b650c8a9b', '', 100, 'Member Registration Fee', '31st March, 2020', '1 ', '2020-03-31', 'no', 'yes'),
(34, 'f3d68e142181453eaa051487fc35f2a9', '', 100, 'Member Registration Fee', '31st March, 2020', '1 ', '2020-03-31', 'no', 'yes'),
(35, 'aa9dd8a8f35b78858c9de02de82d36c4', '', 100, 'Member Registration Fee', '31st March, 2020', '1 ', '2020-03-31', 'no', 'yes'),
(36, 'edfa41f51b26268446eaf790c5eac7b4', '', 100, 'Member Registration Fee', '31st March, 2020', '1 ', '2020-03-31', 'no', 'yes'),
(37, '1dabd7990abbe29c5ea622d80e2d5879', '11', 12.5, 'Penalty For member contribution', '', '1 ', '2020-04-01', 'no', 'yes'),
(38, '1dabd7990abbe29c5ea622d80e2d5879', '11', 12.5, 'Penalty For member contribution', '01', '1 ', '2020-04-01', 'no', 'yes'),
(39, '1dabd7990abbe29c5ea622d80e2d5879', '11', 12.5, 'Penalty For member contribution', '02', '1 ', '2020-04-01', 'no', 'yes'),
(40, 'da64883f2825ba6478dce6a8c9ecbf8d', '', 100, 'Member Registration Fee', '1st April, 2020', '1 ', '2020-04-01', 'no', 'yes'),
(41, '87ad20c24e4068d1cb47850ca6f6cc8e', '', 100, 'Member Registration Fee', '1st April, 2020', '1 ', '2020-04-01', 'no', 'yes'),
(42, '7d09348afdf7e6f40af8f474157ba2bf', '', 0, '5% of Member Deactivated charge', '', '1 ', '2020-04-08', 'no', 'yes'),
(43, '0a910b5525349488db6247f35cdcf6b0', '', 0, '5% of Member Deactivated charge', '', '1 ', '2020-04-08', 'no', 'yes'),
(44, '0851bf0a73cfb1b3559a277f2f09c66f', '3', 6.6666666666667, 'Loan Interest', '2020-04-28', '1 ', '2020-04-09', 'no', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `company_share_dividend`
--

CREATE TABLE `company_share_dividend` (
  `id` int(11) NOT NULL,
  `year` varchar(50) NOT NULL,
  `member_id` varchar(50) NOT NULL,
  `amount` double NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `for_who` varchar(30) NOT NULL,
  `done_by` varchar(30) NOT NULL,
  `active` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_share_dividend`
--

INSERT INTO `company_share_dividend` (`id`, `year`, `member_id`, `amount`, `date_created`, `for_who`, `done_by`, `active`) VALUES
(1, '2020', 'O198909106598', 296.02, '2020-04-02', 'founders', '1', 'yes'),
(2, '2020', 'A199802203246', 119.89, '2020-04-02', 'founders', '1', 'yes'),
(3, '2020', 'A199905222020', 119.89, '2020-04-02', 'founders', '1', 'yes'),
(4, '2020', 'K199902028081', 121.22, '2020-04-02', 'founders', '1', 'yes'),
(5, '2020', 'K199902024754', 69.1, '2020-04-02', 'founders', '1', 'yes'),
(6, '2020', 'O197612219747', 222.81, '2020-04-02', 'founders', '1', 'yes'),
(7, '2020', 's202002252020', 39.36732268233, '2020-04-02', 'all', '1', 'yes'),
(8, '2020', 'a202002272020', 157.46929072932, '2020-04-02', 'all', '1', 'yes'),
(9, '2020', 'A199905222020', 295.25492011747, '2020-04-02', 'all', '1', 'yes'),
(10, '2020', 'A202002194324', 236.20393609398, '2020-04-02', 'all', '1', 'yes'),
(11, '2020', 'K199902023889', 255.88759743514, '2020-04-02', 'all', '1', 'yes'),
(12, '2020', 'K199902024776', 157.46929072932, '2020-04-02', 'all', '1', 'yes'),
(13, '2020', 'K199902028081', 137.78562938815, '2020-04-02', 'all', '1', 'yes'),
(14, '2020', 'K199902024754', 137.78562938815, '2020-04-02', 'all', '1', 'yes'),
(15, '2020', 'O197612219747', 157.46929072932, '2020-04-02', 'all', '1', 'yes'),
(16, '2020', 'A199802203246', 118.10196804699, '2020-04-02', 'all', '1', 'yes'),
(17, '2020', 'O198909106598', 541.30068688204, '2020-04-02', 'all', '1', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `company_share_dividend_list`
--

CREATE TABLE `company_share_dividend_list` (
  `id` int(11) NOT NULL,
  `year` varchar(20) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `done_by` varchar(30) NOT NULL,
  `active` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_share_dividend_list`
--

INSERT INTO `company_share_dividend_list` (`id`, `year`, `date_added`, `done_by`, `active`) VALUES
(1, '2020', '2020-04-01', '1', 'no'),
(2, '2020', '2020-04-02', '1', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `customer_id_encrypt` varchar(62) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `residencial_address` varchar(100) NOT NULL,
  `postal_address` varchar(100) NOT NULL,
  `place_of_work` varchar(200) NOT NULL,
  `home_town` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `image` varchar(500) NOT NULL,
  `next_of_kin_name` varchar(100) NOT NULL,
  `next_of_kin_mobile` varchar(20) NOT NULL,
  `next_of_kin_resi_address` varchar(50) NOT NULL,
  `has_loan` varchar(3) NOT NULL DEFAULT 'no',
  `staff` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `active` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_id`, `customer_id_encrypt`, `password`, `firstname`, `surname`, `residencial_address`, `postal_address`, `place_of_work`, `home_town`, `email`, `telephone`, `dob`, `gender`, `marital_status`, `image`, `next_of_kin_name`, `next_of_kin_mobile`, `next_of_kin_resi_address`, `has_loan`, `staff`, `date_created`, `active`) VALUES
(1, 'A199702204644', '6c6f64d61471a95e841773654c3d9a81', 'e807f1fcf82d132f9bb018ca6738a19f', 'Richard', 'Anane', 'Housing Kumasi', 'Box 202', 'Apple', 'Kumasi', 'richarf@gmail.com', '0245878785', '1997-02-20', 'Male', '', 'qENfV91Fb3U2sjB/DEPPRESS.jpg', '', '', '', 'no', '1', '2019-03-23', 'yes'),
(2, 'K199602209486', 'f6966091f86e91942b71f36cc7b5430d', 'e807f1fcf82d132f9bb018ca6738a19f', 'Jacintha miii', 'Kweritwri Dac', 'Bibiani 30 WES', 'Box 20024', 'GTUC ', 'Bibiani', 'j@gmail,com', '024878787', '1996-02-20', 'Female', 'Single', 'NDqevRzuUTEnrQ7/circgames.png', 'Dada ne Mama', '0244', 'KSI Asafo', 'no', '1', '2020-03-23', 'yes'),
(3, 'A199605202720', '14377b3e2369f8a03bd559eb92fa9001', '14377b3e2369f8a03bd559eb92fa9001', 'Victoria', 'Ania', 'AK - 2025- 255500', 'Post Box 2025', 'Ghana Health Sercvice', 'Goaso', '', '0245858585', '1996-05-20', 'Female', 'Married', '', '', '', '', 'yes', '1', '2020-04-02', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `customer_activities`
--

CREATE TABLE `customer_activities` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(65) NOT NULL,
  `activity_type` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `datecreated` varchar(50) NOT NULL,
  `added_by` varchar(50) NOT NULL,
  `active` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_activities`
--

INSERT INTO `customer_activities` (`id`, `customer_id`, `activity_type`, `description`, `datecreated`, `added_by`, `active`) VALUES
(1, 'A199702204644', 'CUstomer Added', 'Was added to the Customerslist', '29th February, 2020', '1', 'yes'),
(2, 'K199602209486', 'Customer Added', 'Was added to the Customers list', '29th February, 2020', '1', 'yes'),
(3, 'K199602209486', 'Customer infomation updated', 'Informations was updated', '29th February, 2020', '1', 'yes'),
(4, 'K199602209486', 'Customer infomation updated', 'Informations was updated', '29th February, 2020', '1', 'yes'),
(5, 'K199602209486', 'Customer infomation updated', 'Informations was updated', '29th February, 2020', '1', 'yes'),
(6, 'K199602209486', 'Customer infomation updated', 'Informations was updated', '29th February, 2020', '1', 'yes'),
(7, '', 'Loan Granted', 'A Loan of 500 cedis was granted', '1st March, 2020', '1', 'yes'),
(8, 'K199602209486', 'Loan Granted', 'A Loan of 500 cedis was granted', '1st March, 2020', '1', 'yes'),
(9, 'K199602209486', 'Loan Granted', 'A Loan of 500 cedis was granted', '1st March, 2020', '1', 'yes'),
(10, 'K199602209486', 'Loan Granted', 'A Loan of 500 cedis was granted', '1st March, 2020', '1', 'yes'),
(11, 'A199702204644', 'Loan Granted', 'A Loan of 1000 cedis was granted', '1st March, 2020', '1', 'yes'),
(12, 'f6966091f86e91942b71f36cc7b5430d', 'Loan Paid', ' A loan of  25 was paid', '5th March, 2020', '1', 'yes'),
(13, 'f6966091f86e91942b71f36cc7b5430d', 'Loan Paid', ' A loan of  100 was paid', '5th March, 2020', '1', 'yes'),
(14, 'f6966091f86e91942b71f36cc7b5430d', 'Loan Paid', ' A loan of  400 was paid', '17th March, 2020', '1', 'yes'),
(15, 'f6966091f86e91942b71f36cc7b5430d', 'Loan Issued', 'A Loan of 1000 cedis was granted', '22nd March, 2020', '1', 'yes'),
(16, 'f6966091f86e91942b71f36cc7b5430d', 'Loan Issued', 'A Loan of 1000 cedis was granted', '22nd March, 2020', '1', 'yes'),
(17, 'f6966091f86e91942b71f36cc7b5430d', 'Loan Issued', 'A Loan of 1000 cedis was granted', '22nd March, 2020', '1', 'yes'),
(18, 'f6966091f86e91942b71f36cc7b5430d', 'Loan Issued', 'A Loan of 1000 cedis was granted', '22nd March, 2020', '1', 'yes'),
(19, 'f6966091f86e91942b71f36cc7b5430d', 'Loan Issued', 'A Loan of 1000 cedis was granted', '22nd March, 2020', '1', 'yes'),
(20, 'f6966091f86e91942b71f36cc7b5430d', 'Loan Issued', 'A Loan of 1000 cedis was granted', '22nd March, 2020', '1', 'yes'),
(21, 'f6966091f86e91942b71f36cc7b5430d', 'Loan Issued', 'A Loan of 1000 cedis was granted', '23rd March, 2020', '1', 'yes'),
(22, 'f6966091f86e91942b71f36cc7b5430d', 'Loan Paid', ' A loan of  315 was paid', '23rd March, 2020', '1', 'yes'),
(23, 'f6966091f86e91942b71f36cc7b5430d', 'Loan Paid', ' A loan of  315 was paid', '23rd March, 2020', '1', 'yes'),
(24, 'K199602209486', 'Customer infomation updated', 'Informations was updated', '23rd March, 2020', '1', 'yes'),
(25, 'K199602209486', 'Customer infomation updated', 'Informations was updated', '23rd March, 2020', '1', 'yes'),
(26, 'K199602209486', 'Customer infomation updated', 'Informations was updated', '23rd March, 2020', '1', 'yes'),
(27, 'K199602209486', 'Customer infomation updated', 'Informations was updated', '23rd March, 2020', '1', 'yes'),
(28, 'K199602209486', 'Customer infomation updated', 'Informations was updated', '23rd March, 2020', '1', 'yes'),
(29, 'K199602209486', 'Customer infomation updated', 'Informations was updated', '23rd March, 2020', '1', 'yes'),
(30, 'K199602209486', 'Customer infomation updated', 'Informations was updated', '23rd March, 2020', '1', 'yes'),
(31, 'K199602209486', 'Customer infomation updated', 'Informations was updated', '23rd March, 2020', '1', 'yes'),
(32, 'K199602209486', 'Customer infomation updated', 'Informations was updated', '23rd March, 2020', '1', 'yes'),
(33, 'K199602209486', 'Customer infomation updated', 'Informations was updated', '23rd March, 2020', '1', 'yes'),
(34, 'K199602209486', 'Customer infomation updated', 'Informations was updated', '23rd March, 2020', '1', 'yes'),
(35, 'K199602209486', 'Customer infomation updated', 'Informations was updated', '23rd March, 2020', '1', 'yes'),
(36, 'f6966091f86e91942b71f36cc7b5430d', 'Loan Paid', ' A loan of  800 was paid', '28th March, 2020', '1', 'yes'),
(37, 'f6966091f86e91942b71f36cc7b5430d', 'Loan Paid', ' A loan of  800 was paid', '28th March, 2020', '1', 'yes'),
(38, 'f6966091f86e91942b71f36cc7b5430d', 'Loan Paid', ' A loan of  800 was paid', '28th March, 2020', '1', 'yes'),
(39, 'f6966091f86e91942b71f36cc7b5430d', 'Loan Paid', ' A loan of  800 was paid', '28th March, 2020', '1', 'yes'),
(40, 'f6966091f86e91942b71f36cc7b5430d', 'Loan Paid', ' A loan of  800 was paid', '28th March, 2020', '1', 'yes'),
(41, 'f6966091f86e91942b71f36cc7b5430d', 'Loan Paid', ' A loan of  800 was paid', '28th March, 2020', '1', 'yes'),
(42, 'f6966091f86e91942b71f36cc7b5430d', 'Loan Paid', ' A loan of  800 was paid', '28th March, 2020', '1', 'yes'),
(43, 'A199605202720', 'Customer Added', 'Was added to the Customers list', '2nd April, 2020', '1', 'yes'),
(44, 'A199605202720', 'Customer infomation updated', 'Informations was updated', '2nd April, 2020', '1', 'yes'),
(45, 'A199605202720', 'Customer infomation updated', 'Informations was updated', '2nd April, 2020', '1', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `customer_interest`
--

CREATE TABLE `customer_interest` (
  `id` int(11) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `amount_decimal` varchar(50) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `staff` varchar(10) NOT NULL,
  `active` varchar(3) DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_interest`
--

INSERT INTO `customer_interest` (`id`, `amount`, `amount_decimal`, `date_added`, `staff`, `active`) VALUES
(1, '5', '0.05', '2020-03-16 16:10:04', '1', 'no'),
(2, '5', '0.05', '2020-03-16 16:12:59', '1', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `employment_type`
--

CREATE TABLE `employment_type` (
  `id` int(11) NOT NULL,
  `type_id` varchar(20) NOT NULL,
  `type_name` varchar(100) NOT NULL,
  `active` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employment_type`
--

INSERT INTO `employment_type` (`id`, `type_id`, `type_name`, `active`) VALUES
(1, '225', 'Administator', 'yes'),
(2, '245', 'Staff', 'yes'),
(3, '025', 'Staff', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `loans_all`
--

CREATE TABLE `loans_all` (
  `id` int(11) NOT NULL,
  `person_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `amount_collected` varchar(50) NOT NULL,
  `interest_rate` varchar(50) NOT NULL,
  `total_interest_rate_amount` double NOT NULL,
  `interest_amount_paid` float NOT NULL,
  `total_amount_to_pay` varchar(50) NOT NULL,
  `amount_paid` int(50) NOT NULL,
  `balance` int(50) NOT NULL,
  `date_requested` varchar(50) NOT NULL,
  `date_issued` varchar(50) NOT NULL,
  `monthly_installment` double NOT NULL,
  `total_months_for_payment` varchar(50) NOT NULL,
  `months_left` varchar(50) NOT NULL,
  `date_of_completion` varchar(50) NOT NULL,
  `next_month_payment_date` varchar(50) NOT NULL,
  `next_month_payment_amount` int(50) NOT NULL,
  `had_penalty` text NOT NULL,
  `quit_loan` varchar(3) NOT NULL DEFAULT 'no',
  `finish_paying` varchar(3) NOT NULL DEFAULT 'no',
  `guarantor1` varchar(50) NOT NULL,
  `guarantor1_confirm` varchar(3) NOT NULL DEFAULT 'no',
  `guarantor2` varchar(50) NOT NULL,
  `guarantor2_confirm` varchar(3) NOT NULL DEFAULT 'no',
  `loan_status` varchar(50) NOT NULL DEFAULT 'pending',
  `issued_by` varchar(50) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `loan_added_by` varchar(50) NOT NULL,
  `active` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loans_all`
--

INSERT INTO `loans_all` (`id`, `person_id`, `status`, `amount_collected`, `interest_rate`, `total_interest_rate_amount`, `interest_amount_paid`, `total_amount_to_pay`, `amount_paid`, `balance`, `date_requested`, `date_issued`, `monthly_installment`, `total_months_for_payment`, `months_left`, `date_of_completion`, `next_month_payment_date`, `next_month_payment_amount`, `had_penalty`, `quit_loan`, `finish_paying`, `guarantor1`, `guarantor1_confirm`, `guarantor2`, `guarantor2_confirm`, `loan_status`, `issued_by`, `date_added`, `loan_added_by`, `active`) VALUES
(1, 'f6966091f86e91942b71f36cc7b5430d', 'Customer', '1000', '0.05', 100, 100, '1100', 1100, 0, '2020-03-23', '23rd March, 2020', 800, '2', '0', '2020-03-28', '2020-04-28', 800, '', 'yes', 'yes', 'A199802203246', 'yes', 'O198909106598', 'yes', 'issued', '1', '2020-03-23', '1', 'yes'),
(2, '1dabd7990abbe29c5ea622d80e2d5879', 'Member', '2000', '0.1', 200, 5.55556, '2200', 61, 2139, '2020-03-23', '28th March, 2020', 61.111111111111, '36', '35', '2023-03-28', '2020-04-29', 61, '', 'no', 'no', 'O197612219747', 'yes', 'A199802203246', 'yes', 'issued', '1', '2020-03-23', '1', 'yes'),
(3, '0851bf0a73cfb1b3559a277f2f09c66f', 'Member', '1600', '0.05', 80, 26.6667, '1680', 560, 1120, '2020-03-23', '23rd March, 2020', 140, '12', '8', '2021-03-23', '2020-05-09', 140, '', 'no', 'no', 'A199802203246', 'yes', 'O198909106598', 'yes', 'issued', '1', '2020-03-23', '1', 'yes'),
(4, '399b2b9804c57bf4fb2242f5dbdfd0be', 'Member', '1400', '0.05', 70, 5.83333, '1470', 123, 1348, '2020-04-29', '29th April, 2020', 122.5, '12', '11', '2021-004-29', '2020-05-29', 123, '', 'no', 'no', 'A199802203246', 'yes', 'O197612219747', 'yes', 'issued', '1', '2020-03-29', '1', 'yes'),
(5, '14377b3e2369f8a03bd559eb92fa9001', 'Customer', '3000', '0.05', 1800, 0, '4800', 0, 4800, '2020-04-08', '', 400, '12', '12', '', '', 0, '', 'no', 'no', 'A199905222020', 'no', 'K199902028081', 'no', 'pending', '', '2020-04-08', '1', 'yes'),
(6, 'da64883f2825ba6478dce6a8c9ecbf8d', 'Member', '2160', '0.05', 108, 0, '2268', 0, 2268, '2020-04-09', '', 453.6, '5', '5', '', '', 0, '', 'no', 'no', 'D199605256595', 'yes', 'A199905222020', 'no', 'pending', '', '2020-04-09', 'm199204012020', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `loans_pay`
--

CREATE TABLE `loans_pay` (
  `id` int(11) NOT NULL,
  `person_id` varchar(62) NOT NULL,
  `loan_id` varchar(50) NOT NULL,
  `loan_collected_date` varchar(50) NOT NULL,
  `amount_collected` varchar(50) NOT NULL,
  `amount_paid` varchar(50) NOT NULL,
  `balance_before` varchar(50) NOT NULL,
  `date_paid` varchar(50) NOT NULL,
  `receipt_no` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `staff` varchar(20) NOT NULL,
  `active` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loans_pay`
--

INSERT INTO `loans_pay` (`id`, `person_id`, `loan_id`, `loan_collected_date`, `amount_collected`, `amount_paid`, `balance_before`, `date_paid`, `receipt_no`, `date_created`, `staff`, `active`) VALUES
(1, 'f6966091f86e91942b71f36cc7b5430d', '1', '23rd March, 2020', '1000', '315', '1200', '23rd March, 2020', '0000001', '2020-03-23', '1', 'yes'),
(2, '0851bf0a73cfb1b3559a277f2f09c66f', '3', '23rd March, 2020', '1600', '140', '1680', '23rd March, 2020', '0000002', '2020-03-23', '1', 'yes'),
(3, '0851bf0a73cfb1b3559a277f2f09c66f', '3', '23rd March, 2020', '1600', '140', '1680', '23rd March, 2020', '0000003', '2020-03-23', '1', 'yes'),
(4, '0851bf0a73cfb1b3559a277f2f09c66f', '3', '23rd March, 2020', '1600', '140', '1540', '26th March, 2020', '0000004', '2020-03-26', '1', 'yes'),
(5, 'f6966091f86e91942b71f36cc7b5430d', '1', '23rd March, 2020', '1000', '800', '800', '28th March, 2020', '0000005', '2020-03-28', '1', 'yes'),
(6, 'f6966091f86e91942b71f36cc7b5430d', '1', '23rd March, 2020', '1000', '800', '800', '28th March, 2020', '0000006', '2020-03-28', '1', 'yes'),
(7, 'f6966091f86e91942b71f36cc7b5430d', '1', '23rd March, 2020', '1000', '800', '800', '28th March, 2020', '0000007', '2020-03-28', '1', 'yes'),
(8, 'f6966091f86e91942b71f36cc7b5430d', '1', '23rd March, 2020', '1000', '800', '800', '28th March, 2020', '0000008', '2020-03-28', '1', 'yes'),
(9, 'f6966091f86e91942b71f36cc7b5430d', '1', '23rd March, 2020', '1000', '800', '800', '28th March, 2020', '0000009', '2020-03-28', '1', 'yes'),
(10, 'f6966091f86e91942b71f36cc7b5430d', '1', '23rd March, 2020', '1000', '800', '800', '28th March, 2020', '0000010', '2020-03-28', '1', 'yes'),
(11, '0851bf0a73cfb1b3559a277f2f09c66f', '3', '23rd March, 2020', '1600', '140', '1400', '28th March, 2020', '0000011', '2020-03-28', '1', 'yes'),
(12, 'f6966091f86e91942b71f36cc7b5430d', '1', '23rd March, 2020', '1000', '800', '800', '28th March, 2020', '0000012', '2020-03-28', '1', 'yes'),
(13, '399b2b9804c57bf4fb2242f5dbdfd0be', '4', '29th April, 2020', '1400', '123', '1470', '29th April, 2020', '0000013', '2020-03-29', '1', 'yes'),
(14, '1dabd7990abbe29c5ea622d80e2d5879', '2', '28th March, 2020', '2000', '63', '2200', '29th March, 2020', '0000014', '2020-03-29', '1', 'yes'),
(15, '0851bf0a73cfb1b3559a277f2f09c66f', '3', '23rd March, 2020', '1600', '140', '1260', '9th April, 2020', '0000015', '2020-04-09', '1', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `loan_collects`
--

CREATE TABLE `loan_collects` (
  `id` int(11) NOT NULL,
  `person_id` varchar(50) NOT NULL,
  `loan_id` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `done_by` varchar(50) NOT NULL,
  `active` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan_collects`
--

INSERT INTO `loan_collects` (`id`, `person_id`, `loan_id`, `amount`, `date_added`, `done_by`, `active`) VALUES
(1, 'f6966091f86e91942b71f36cc7b5430d', '1', '250', '2020-03-23', '1', 'yes'),
(2, '0851bf0a73cfb1b3559a277f2f09c66f', '3', '133.33333333333', '2020-03-23', '1', 'yes'),
(3, '0851bf0a73cfb1b3559a277f2f09c66f', '3', '133.33333333333', '2020-03-23', '1', 'yes'),
(4, '0851bf0a73cfb1b3559a277f2f09c66f', '3', '133.33333333333', '2020-03-28', '1', 'yes'),
(5, 'f6966091f86e91942b71f36cc7b5430d', '1', '750', '2020-03-28', '1', 'yes'),
(6, 'f6966091f86e91942b71f36cc7b5430d', '1', '750', '2020-03-28', '1', 'yes'),
(7, 'f6966091f86e91942b71f36cc7b5430d', '1', '750', '2020-03-28', '1', 'yes'),
(8, 'f6966091f86e91942b71f36cc7b5430d', '1', '750', '2020-03-28', '1', 'yes'),
(9, 'f6966091f86e91942b71f36cc7b5430d', '1', '750', '2020-03-28', '1', 'yes'),
(10, 'f6966091f86e91942b71f36cc7b5430d', '1', '750', '2020-03-28', '1', 'yes'),
(11, '0851bf0a73cfb1b3559a277f2f09c66f', '3', '133.33333333333', '2020-03-28', '1', 'yes'),
(12, 'f6966091f86e91942b71f36cc7b5430d', '1', '750', '2020-03-29', '1', 'yes'),
(13, '399b2b9804c57bf4fb2242f5dbdfd0be', '4', '117.16666666667', '2020-03-29', '1', 'yes'),
(14, '1dabd7990abbe29c5ea622d80e2d5879', '2', '55.444444444444', '2020-03-29', '1', 'yes'),
(15, '0851bf0a73cfb1b3559a277f2f09c66f', '3', '133.33333333333', '2020-04-09', '1', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `member_id` varchar(50) NOT NULL,
  `member_id_encrypt` varchar(62) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `residencial_address` varchar(100) NOT NULL,
  `postal_address` varchar(100) NOT NULL,
  `place_of_work` varchar(200) NOT NULL,
  `home_town` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `contribution_amount` varchar(20) NOT NULL,
  `total_contribution_made` int(100) NOT NULL,
  `last_month_contributed` varchar(50) NOT NULL,
  `last_year_contributed` varchar(5) NOT NULL,
  `image` varchar(500) NOT NULL,
  `kin_1_name` varchar(100) NOT NULL,
  `kin_1_mobile` varchar(15) NOT NULL,
  `kin_1_percent` varchar(4) NOT NULL,
  `kin_2_name` varchar(100) NOT NULL,
  `kin_2_mobile` varchar(15) NOT NULL,
  `kin_2_percent` varchar(4) NOT NULL,
  `kin_3_name` varchar(100) NOT NULL,
  `kin_3_mobile` varchar(15) NOT NULL,
  `kin_3_percent` varchar(4) NOT NULL,
  `kin_4_name` varchar(100) NOT NULL,
  `kin_4_mobile` varchar(15) NOT NULL,
  `kin_4_percent` varchar(4) NOT NULL,
  `kin_5_name` varchar(100) NOT NULL,
  `kin_5_mobile` varchar(15) NOT NULL,
  `kin_5_percent` varchar(4) NOT NULL,
  `kin_6_name` varchar(100) NOT NULL,
  `kin_6_mobile` varchar(15) NOT NULL,
  `kin_6_percent` varchar(4) NOT NULL,
  `kin_7_name` varchar(100) NOT NULL,
  `kin_7_mobile` varchar(15) NOT NULL,
  `kin_7_percent` varchar(4) NOT NULL,
  `kin_8_name` varchar(100) NOT NULL,
  `kin_8_mobile` varchar(15) NOT NULL,
  `kin_8_percent` varchar(4) NOT NULL,
  `kin_9_name` varchar(100) NOT NULL,
  `kin_9_mobile` varchar(15) NOT NULL,
  `kin_9_percent` varchar(4) NOT NULL,
  `kin_10_name` varchar(100) NOT NULL,
  `kin_10_mobile` varchar(15) NOT NULL,
  `kin_10_percent` varchar(4) NOT NULL,
  `paid_reg_form` varchar(3) NOT NULL DEFAULT 'no',
  `has_loan` varchar(3) NOT NULL DEFAULT 'no',
  `staff` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `active` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `member_id`, `member_id_encrypt`, `password`, `firstname`, `surname`, `residencial_address`, `postal_address`, `place_of_work`, `home_town`, `email`, `telephone`, `dob`, `gender`, `marital_status`, `contribution_amount`, `total_contribution_made`, `last_month_contributed`, `last_year_contributed`, `image`, `kin_1_name`, `kin_1_mobile`, `kin_1_percent`, `kin_2_name`, `kin_2_mobile`, `kin_2_percent`, `kin_3_name`, `kin_3_mobile`, `kin_3_percent`, `kin_4_name`, `kin_4_mobile`, `kin_4_percent`, `kin_5_name`, `kin_5_mobile`, `kin_5_percent`, `kin_6_name`, `kin_6_mobile`, `kin_6_percent`, `kin_7_name`, `kin_7_mobile`, `kin_7_percent`, `kin_8_name`, `kin_8_mobile`, `kin_8_percent`, `kin_9_name`, `kin_9_mobile`, `kin_9_percent`, `kin_10_name`, `kin_10_mobile`, `kin_10_percent`, `paid_reg_form`, `has_loan`, `staff`, `date_created`, `active`) VALUES
(1, 's202002252020', '440324a81d2b21260d1e46a746559250', '', 'sdsd', 'sdsd', 'sd', 'sd', 'sd', 'sd', 'sd', '0156484512', '2020-02-25', 'Male', '', '100', 239, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'no', 'no', '', '2019-03-25', 'yes'),
(2, 'a202002272020', 'edfa41f51b26268446eaf790c5eac7b4', '', 'sadad', 'adadadad', 'sdsf', 'zcwerw', 'asdxccz', 'sfsfsfc', 'sf', '0254545', '2020-02-27', 'Female', 'Married', '200', 957, '01', '', '7ntYZVqRKTvfMPl/happiness is a progressive.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'yes', 'no', '', '2020-03-21', 'yes'),
(3, 'A199905222020', 'aa9dd8a8f35b78858c9de02de82d36c4', '', 'Dacosta', 'Agyei', 'Asafo B14/2', 'Box 110', 'Google', 'Kumasi', 'ohene@gmail.com', '0548878787', '1999-05-22', 'Male', 'Single', '500', 2035, '03', '', '5xIDbZSYAQRdLEG/DACOSTA.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'yes', 'no', '', '2020-03-23', 'yes'),
(4, 'A202002194324', 'f3d68e142181453eaa051487fc35f2a9', '', 'ssss', 'ASDFASDF', 'sfsf', 'ADCS', 'AD', 'sfsf', 'sf', '543', '2020-02-19', 'Male', 'Single', '600', 1436, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'yes', 'no', '', '2020-03-21', 'yes'),
(5, 'K199902023889', '4ec6e239e5c086cae3d4181b650c8a9b', '', 'Jonathan', 'Kwarteg', 'Kumasi Asafo', 'Accra 2023', 'Amazon', 'Accra', 'jona@gmail.com', '0525248787', '1999-02-02', 'Male', 'Married', '100', 1556, '03', '', 'cshAo39GZTevO7d/EVERYTHING IMAGE IS REAL.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'yes', 'no', '', '2020-03-23', 'yes'),
(6, 'K199902024776', '87ad20c24e4068d1cb47850ca6f6cc8e', '', 'Jonathan', 'Kwarteg', 'Kumasi Asafo', 'Jonathan', 'Amazon', 'Accra', 'jona@gmail.com', '0525248787', '1999-02-02', 'Male', 'Married', '100', 957, '03', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'yes', 'no', '', '2020-03-23', 'yes'),
(7, 'K199902028081', 'da64883f2825ba6478dce6a8c9ecbf8d', '', 'Jonathan', 'Kwarteg Kusi', 'Kumasi Asafo', 'Jonathan', 'Amazon', 'Accra', 'jona@gmail.com', '0525248787', '1999-02-02', 'Male', 'Married', '100', 1080, '03', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'yes', 'yes', '', '2020-03-23', 'yes'),
(8, 'K199902024754', '399b2b9804c57bf4fb2242f5dbdfd0be', '', 'Jona Boatengs', 'Kwarteg', 'Kumasi Asafo', 'Jona Boateng', 'Amazon', 'Accra', 'jona@gmail.com', '0525248787', '1999-02-02', 'Male', 'Married', '100', 976, '03', '', 'dPTZwfYuJc67ryl/QOUTE 1 - ENVIRONMENT.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'yes', 'yes', '', '2020-03-23', 'yes'),
(9, 'O197612219747', '0851bf0a73cfb1b3559a277f2f09c66f', '0851bf0a73cfb1b3559a277f2f09c66f', 'Michael', 'Owusu-Adjei', 'B13', 'GTUC', 'KGH', 'Kumasi', 'pattydabs@yahool.com', '0244207968', '1976-12-21', 'Male', 'Married', '200', 1403, '02', '', 'vgFpMiN2lof1ImQ/1.PNG', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'yes', 'yes', '1', '2020-03-23', 'yes'),
(10, 'A199802203246', '5d1d6e53185f74e23d30e8aff8ed0cb8', '5d1d6e53185f74e23d30e8aff8ed0cb8', 'Nicholas', 'Appiah', 'KSI', 'Box 202', 'GES', 'Kumasi', 'nico@gmail.com', '0548525878', '1998-02-20', 'Male', 'Married', '300', 958, '', '', 'J8CLt4GlzO9j6SA/banner_quick_loan_with_less_interest.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'yes', 'no', '1', '2020-03-21', 'yes'),
(11, 'O198909106598', '1dabd7990abbe29c5ea622d80e2d5879', '1dabd7990abbe29c5ea622d80e2d5879', 'Joseph', 'Ofosu', 'Kwahu', 'Joseph', 'Kwahu Hospital', 'Ada', 'ofosu@gmail.com', '0248878998', '1989-02-21', 'Male', 'Married', '250', 3883, '05', '2020', 'N6LA4PGlazpf5T3/circ2.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'yes', 'yes', '1', '2020-01-23', 'yes'),
(12, 'A198009273896', 'c4c8ca9ca27ef145c27bc564e786aa1c', 'c4c8ca9ca27ef145c27bc564e786aa1c', 'Patience', 'Ahema', 'AK-2025-969', 'Ghana', 'GES', 'Kumasi', 'ah@gmail.com', '0247690569', '1980-09-27', 'Female', 'Single', '200', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'yes', 'no', '1', '2020-01-31', 'yes'),
(13, 'N199102228051', '64c590c6fa6cab39ae56906f10353eac', '64c590c6fa6cab39ae56906f10353eac', 'Sampson', 'Nyamekye', 'AC-205-565', 'ACCRA', 'ADOM', 'Goaso', 'ny', '025487896', '1991-02-22', 'Male', 'Married', '600', 0, '', '', 'WLNYox6bFZuStgk/parallx (10).jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'yes', 'no', '1', '2020-01-31', 'yes'),
(14, 'G199205104893', '7d09348afdf7e6f40af8f474157ba2bf', '7d09348afdf7e6f40af8f474157ba2bf', 'Travisss', 'Green', 'AC-256-625', 'AK205', 'Honda', 'Italy', 'ta@gmai.com', '024578585', '1992-05-10', 'Male', 'Married', '1000', 0, '', '', 'wfDeIhZXROi6u8l/about-believe.jpg', 'Kwabena Agyei', '024585896', '30', 'Lilwayne Magix', '025252525', '40', 'Samuel Anin Yeboah', '024585858', '30', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'yes', 'no', '1', '2020-03-31', 'yes'),
(15, 'H198905202850', '0a910b5525349488db6247f35cdcf6b0', '0a910b5525349488db6247f35cdcf6b0', 'Beyonc', 'Hyira', 'USA-2025652', 'USAK', 'Musician', 'South Africa', 's@g.com', '0245878985', '1989-05-20', 'Female', 'Married', '300', 0, '', '', 'LnTahW5S6ZlCFV1/aboutBG.jpg', 'Nana Kwadwo Osei', '054878586', '90', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'yes', 'no', '1', '2020-03-31', 'yes'),
(16, 'D199605256595', 'a53346d82cd00e867cfd34f7cc42d089', 'a53346d82cd00e867cfd34f7cc42d089', 'Gbriel', 'Danyo', 'AK-8598-565', 'Box 2020', 'GES', 'Goaso', 'gabby@gmail.com', '0548785969', '1996-05-25', 'Male', 'Married', '400', 0, '', '', 'M6LQdSqZ4Ieo5zB/buisness-banner-at-mobiapp.jpg', 'Kwabena Agyei', '0548785785', '100', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'no', 'no', '1', '2020-04-09', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `members_activities`
--

CREATE TABLE `members_activities` (
  `id` int(11) NOT NULL,
  `member_id` varchar(65) NOT NULL,
  `activity_type` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `datecreated` varchar(50) NOT NULL,
  `added_by` varchar(50) NOT NULL,
  `active` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members_activities`
--

INSERT INTO `members_activities` (`id`, `member_id`, `activity_type`, `description`, `datecreated`, `added_by`, `active`) VALUES
(1, 's202002252020', 'Member Added', 'Was added to the Members list', '25th February, 2020', '1', 'yes'),
(2, 'a202002272020', 'Member Added', 'Was added to the Members list', '25th February, 2020', '1', 'yes'),
(3, 'A199905222020', 'Member Added', 'Was added to the Members list', '25th February, 2020', '1', 'yes'),
(4, 'A202002194324', 'Member Added', 'Was added to the Members list', '25th February, 2020', '1', 'yes'),
(5, 'K199902023889', 'Member Added', 'Was added to the Members list', '26th February, 2020', '1', 'yes'),
(6, 'K199902024776', 'Member Added', 'Was added to the Members list', '26th February, 2020', '1', 'yes'),
(7, 'K199902028081', 'Member Added', 'Was added to the Members list', '26th February, 2020', '1', 'yes'),
(8, 'K199902024754', 'Member Added', 'Was added to the Members list', '26th February, 2020', '1', 'yes'),
(9, '', 'Member infomation updated', 'Informations was updated', '26th February, 2020', '1', 'yes'),
(10, '', 'Member infomation updated', 'Informations was updated', '26th February, 2020', '1', 'yes'),
(11, 'K199902024754', 'Member infomation updated', 'Informations was updated', '26th February, 2020', '1', 'yes'),
(12, 'K199902024754', 'Member infomation updated', 'Informations was updated', '26th February, 2020', '1', 'yes'),
(13, 'K199902024754', 'Member infomation updated', 'Informations was updated', '26th February, 2020', '1', 'yes'),
(14, 'a202002272020', 'Monthly Contribution Paid', '785456  was Paid for the month of January2020', '28th February, 2020', '1', 'yes'),
(15, 'A199702204644', 'Member Added', 'Was added to the Members list', '29th February, 2020', '1', 'yes'),
(16, 'K199902028081', 'Member infomation updated', 'Informations was updated', '2nd March, 2020', '1', 'yes'),
(17, 'K199902028081', 'Monthly Contribution Paid', '100  was Paid for the month of February2020', '2nd March, 2020', '1', 'yes'),
(18, 'A199905222020', 'Monthly Contribution Paid', '500  was Paid for the month of January2020', '2nd March, 2020', '1', 'yes'),
(19, 'A199905222020', 'Monthly Contribution Paid', '500  was Paid for the month of February2020', '2nd March, 2020', '1', 'yes'),
(20, 'K199902024776', 'Monthly Contribution Paid', '100  was Paid for the month of January2020', '5th March, 2020', '1', 'yes'),
(21, '399b2b9804c57bf4fb2242f5dbdfd0be', 'Loan Paid', ' A loan of  20 was paid', '5th March, 2020', '1', 'yes'),
(22, 'O197612219747', 'Member Added', 'Was added to the Members list', '14th March, 2020', '1', 'yes'),
(23, 'O197612219747', 'Monthly Contribution Paid', '200  was Paid for the month of February2020', '14th March, 2020', '1', 'yes'),
(24, '0851bf0a73cfb1b3559a277f2f09c66f', 'Loan Paid', ' A loan of  100 was paid', '16th March, 2020', '1', 'yes'),
(25, 'K199902024776', 'Monthly Contribution Paid', '100  was Paid for the month of March2020', '16th March, 2020', '1', 'yes'),
(26, 'K199902023889', 'Monthly Contribution Paid', '100  was Paid for the month of January2020', '17th March, 2020', '1', 'yes'),
(27, '0851bf0a73cfb1b3559a277f2f09c66f', 'Loan Paid', ' A loan of  320 was paid', '17th March, 2020', '1', 'yes'),
(28, 'A199802203246', 'Member Added', 'Was added to the Members list', '19th March, 2020', '1', 'yes'),
(29, 'O198909106598', 'Member Added', 'Was added to the Members list', '19th March, 2020', '1', 'yes'),
(30, 'O198909106598', 'Monthly Contribution Paid', '200  was Paid for the month of January2020', '19th March, 2020', '1', 'yes'),
(31, 'O198909106598', 'Member infomation updated', 'Informations was updated', '20th March, 2020', '1', 'yes'),
(32, 'O198909106598', 'Member infomation updated', 'Informations was updated', '20th March, 2020', '1', 'yes'),
(33, 'O198909106598', 'Member infomation updated', 'Informations was updated', '20th March, 2020', '1', 'yes'),
(34, 'O198909106598', 'Member infomation updated', 'Informations was updated', '20th March, 2020', '1', 'yes'),
(35, 'O198909106598', 'Member infomation updated', 'Informations was updated', '20th March, 2020', '1', 'yes'),
(36, 'O198909106598', 'Member infomation updated', 'Informations was updated', '20th March, 2020', '1', 'yes'),
(37, '', 'Member Deactivated', 'Member was Deactivated from the System', '20th March, 2020', '1', 'yes'),
(38, '', 'Member Deactivated', 'Member was Deactivated from the System', '20th March, 2020', '1', 'yes'),
(39, '', 'Member Deactivated', 'Member was Deactivated from the System', '20th March, 2020', '1', 'yes'),
(40, '', 'Member Deactivated', 'Member was Deactivated from the System', '20th March, 2020', '1', 'yes'),
(41, '', 'Member Deactivated', 'Member was Deactivated from the System', '20th March, 2020', '1', 'yes'),
(42, '', 'Member Deactivated', 'Member was Deactivated from the System', '20th March, 2020', '1', 'yes'),
(43, '', 'Change Member Contribution Approvals', ' was Approved By Self', '', '11', 'yes'),
(44, '', 'Change Member Contribution Approvals', ' was Approved By Self', '', '11', 'yes'),
(45, '0851bf0a73cfb1b3559a277f2f09c66f', 'Loan Issued', 'A Loan of 1600 cedis was granted', '22nd March, 2020', '1', 'yes'),
(46, '0851bf0a73cfb1b3559a277f2f09c66f', 'Loan Issued', 'A Loan of 1600 cedis was granted', '22nd March, 2020', '1', 'yes'),
(47, '0851bf0a73cfb1b3559a277f2f09c66f', 'Loan Issued', 'A Loan of 1600 cedis was granted', '22nd March, 2020', '1', 'yes'),
(48, '0851bf0a73cfb1b3559a277f2f09c66f', 'Loan Issued', 'A Loan of 1600 cedis was granted', '23rd March, 2020', '1', 'yes'),
(49, '0851bf0a73cfb1b3559a277f2f09c66f', 'Loan Paid', ' A loan of  140 was paid', '23rd March, 2020', '1', 'yes'),
(50, '0851bf0a73cfb1b3559a277f2f09c66f', 'Loan Paid', ' A loan of  140 was paid', '23rd March, 2020', '1', 'yes'),
(51, 'A199905222020', 'Monthly Contribution Paid', '500  was Paid for the month of March2020', '23rd March, 2020', '1', 'yes'),
(52, 'K199902028081', 'Monthly Contribution Paid', '100  was Paid for the month of March2020', '23rd March, 2020', '1', 'yes'),
(53, 'K199902023889', 'Monthly Contribution Paid', '100  was Paid for the month of February2020', '23rd March, 2020', '1', 'yes'),
(54, 'K199902023889', 'Monthly Contribution Paid', '100  was Paid for the month of March2020', '23rd March, 2020', '1', 'yes'),
(55, 'O198909106598', 'Monthly Contribution Paid', '250  was Paid for the month of February2020', '23rd March, 2020', '1', 'yes'),
(56, '0851bf0a73cfb1b3559a277f2f09c66f', 'Loan Paid', ' A loan of  140 was paid', '26th March, 2020', '1', 'yes'),
(57, '1dabd7990abbe29c5ea622d80e2d5879', 'Loan Issued', 'A Loan of 2000 cedis was granted', '28th March, 2020', '1', 'yes'),
(58, '0851bf0a73cfb1b3559a277f2f09c66f', 'Loan Paid', ' A loan of  140 was paid', '28th March, 2020', '1', 'yes'),
(59, 'K199902024754', 'Monthly Contribution Paid', '100  was Paid for the month of February2020', '28th March, 2020', '1', 'yes'),
(60, 'K199902024754', 'Monthly Contribution Paid', '100  was Paid for the month of March2020', '28th March, 2020', '1', 'yes'),
(61, 'O198909106598', 'Monthly Contribution Paid', '250  was Paid for the month of March2020', '29th April, 2020', '1', 'yes'),
(62, '399b2b9804c57bf4fb2242f5dbdfd0be', 'Loan Issued', 'A Loan of 1400 cedis was granted', '29th April, 2020', '1', 'yes'),
(63, '399b2b9804c57bf4fb2242f5dbdfd0be', 'Loan Paid', ' A loan of  123 was paid', '29th April, 2020', '1', 'yes'),
(64, '1dabd7990abbe29c5ea622d80e2d5879', 'Loan Paid', ' A loan of  61 was paid', '29th March, 2020', '1', 'yes'),
(65, 'A198009273896', 'Member Added', 'Was added to the Members list', '31st March, 2020', '1', 'yes'),
(66, 'N199102228051', 'Member Added', 'Was added to the Members list', '31st March, 2020', '1', 'yes'),
(67, 'G199205104893', 'Member Added', 'Was added to the Members list', '31st March, 2020', '1', 'yes'),
(68, 'H198905202850', 'Member Added', 'Was added to the Members list', '31st March, 2020', '1', 'yes'),
(69, '', 'Member Rgistration Fee Paid', '100  was Paid as Member Rgistration Fee', '31st March, 2020', '1', 'yes'),
(70, '7d09348afdf7e6f40af8f474157ba2bf', 'Member Rgistration Fee Paid', '100  was Paid as Member Rgistration Fee', '31st March, 2020', '1', 'yes'),
(71, '64c590c6fa6cab39ae56906f10353eac', 'Member Rgistration Fee Paid', '100  was Paid as Member Rgistration Fee', '31st March, 2020', '1', 'yes'),
(72, 'c4c8ca9ca27ef145c27bc564e786aa1c', 'Member Rgistration Fee Paid', '100  was Paid as Member Rgistration Fee', '31st March, 2020', '1', 'yes'),
(73, '1dabd7990abbe29c5ea622d80e2d5879', 'Member Rgistration Fee Paid', '100  was Paid as Member Rgistration Fee', '31st March, 2020', '1', 'yes'),
(74, '440324a81d2b21260d1e46a746559250', 'Member Rgistration Fee Paid', '100  was Paid as Member Rgistration Fee', '31st March, 2020', '1', 'yes'),
(75, '5d1d6e53185f74e23d30e8aff8ed0cb8', 'Member Rgistration Fee Paid', '100  was Paid as Member Rgistration Fee', '31st March, 2020', '1', 'yes'),
(76, '0851bf0a73cfb1b3559a277f2f09c66f', 'Member Rgistration Fee Paid', '100  was Paid as Member Rgistration Fee', '31st March, 2020', '1', 'yes'),
(77, '399b2b9804c57bf4fb2242f5dbdfd0be', 'Member Rgistration Fee Paid', '100  was Paid as Member Rgistration Fee', '31st March, 2020', '1', 'yes'),
(78, '87ad20c24e4068d1cb47850ca6f6cc8e', 'Member Rgistration Fee Paid', '100  was Paid as Member Rgistration Fee', '31st March, 2020', '1', 'yes'),
(79, '4ec6e239e5c086cae3d4181b650c8a9b', 'Member Rgistration Fee Paid', '100  was Paid as Member Rgistration Fee', '31st March, 2020', '1', 'yes'),
(80, 'f3d68e142181453eaa051487fc35f2a9', 'Member Rgistration Fee Paid', '100  was Paid as Member Rgistration Fee', '31st March, 2020', '1', 'yes'),
(81, 'aa9dd8a8f35b78858c9de02de82d36c4', 'Member Rgistration Fee Paid', '100  was Paid as Member Rgistration Fee', '31st March, 2020', '1', 'yes'),
(82, 'edfa41f51b26268446eaf790c5eac7b4', 'Member Rgistration Fee Paid', '100  was Paid as Member Rgistration Fee', '31st March, 2020', '1', 'yes'),
(83, 'H198905202850', 'Member infomation updated', 'Informations was updated', '1st April, 2020', '1', 'yes'),
(84, 'H198905202850', 'Member infomation updated', 'Informations was updated', '1st April, 2020', '1', 'yes'),
(85, 'H198905202850', 'Member infomation updated', 'Informations was updated', '1st April, 2020', '1', 'yes'),
(86, 'H198905202850', 'Member infomation updated', 'Informations was updated', '1st April, 2020', '1', 'yes'),
(87, 'G199205104893', 'Member infomation updated', 'Informations was updated', '1st April, 2020', '1', 'yes'),
(88, 'G199205104893', 'Member infomation updated', 'Informations was updated', '1st April, 2020', '1', 'yes'),
(89, 'O198909106598', 'Monthly Contribution Paid', '250  was Paid for the month of 012020', '1st April, 2020', '1', 'yes'),
(90, 'O198909106598', 'Monthly Contribution Paid', '250  was Paid for the month of 022020', '1st April, 2020', '1', 'yes'),
(91, 'O198909106598', 'Monthly Contribution Paid', '250  was Paid for the month of 032020', '1st April, 2020', '1', 'yes'),
(92, 'O198909106598', 'Monthly Contribution Paid', '250  was Paid for the month of 042020', '1st April, 2020', '1', 'yes'),
(93, 'O198909106598', 'Monthly Contribution Paid', '250  was Paid for the month of 052020', '1st April, 2020', '1', 'yes'),
(94, 'da64883f2825ba6478dce6a8c9ecbf8d', 'Member Rgistration Fee Paid', '100  was Paid as Member Rgistration Fee', '1st April, 2020', '1', 'yes'),
(95, '399b2b9804c57bf4fb2242f5dbdfd0be', 'Member Rgistration Fee Paid', '100  was Paid as Member Rgistration Fee', '1st April, 2020', '1', 'yes'),
(96, 'da64883f2825ba6478dce6a8c9ecbf8d', 'Member Rgistration Fee Paid', '100  was Paid as Member Rgistration Fee', '1st April, 2020', '1', 'yes'),
(97, '87ad20c24e4068d1cb47850ca6f6cc8e', 'Member Rgistration Fee Paid', '100  was Paid as Member Rgistration Fee', '1st April, 2020', '1', 'yes'),
(98, '4ec6e239e5c086cae3d4181b650c8a9b', 'Member Rgistration Fee Paid', '100  was Paid as Member Rgistration Fee', '1st April, 2020', '1', 'yes'),
(99, 'f3d68e142181453eaa051487fc35f2a9', 'Member Rgistration Fee Paid', '100  was Paid as Member Rgistration Fee', '1st April, 2020', '1', 'yes'),
(100, 'aa9dd8a8f35b78858c9de02de82d36c4', 'Member Rgistration Fee Paid', '100  was Paid as Member Rgistration Fee', '1st April, 2020', '1', 'yes'),
(101, 'edfa41f51b26268446eaf790c5eac7b4', 'Member Rgistration Fee Paid', '100  was Paid as Member Rgistration Fee', '1st April, 2020', '1', 'yes'),
(102, 'O198909106598', 'Schedule Sharing og Dividend', 'An amount of 296.02 was credited to your member contribution due to schedule of 2020 dividend sharing ', '8th April, 2020', '1', 'yes'),
(103, 'A199802203246', 'Schedule Sharing og Dividend', 'An amount of 119.89 was credited to your member contribution due to schedule of 2020 dividend sharing ', '8th April, 2020', '1', 'yes'),
(104, 'A199905222020', 'Schedule Sharing og Dividend', 'An amount of 119.89 was credited to your member contribution due to schedule of 2020 dividend sharing ', '8th April, 2020', '1', 'yes'),
(105, 'K199902028081', 'Schedule Sharing og Dividend', 'An amount of 121.22 was credited to your member contribution due to schedule of 2020 dividend sharing ', '8th April, 2020', '1', 'yes'),
(106, 'K199902024754', 'Schedule Sharing og Dividend', 'An amount of 69.1 was credited to your member contribution due to schedule of 2020 dividend sharing ', '8th April, 2020', '1', 'yes'),
(107, 'O197612219747', 'Schedule Sharing og Dividend', 'An amount of 222.81 was credited to your member contribution due to schedule of 2020 dividend sharing ', '8th April, 2020', '1', 'yes'),
(108, 'O198909106598', 'Schedule Sharing og Dividend', 'An amount of 296.02 was credited to your member contribution due to schedule of 2020 dividend sharing ', '8th April, 2020', '1', 'yes'),
(109, 'A199802203246', 'Schedule Sharing og Dividend', 'An amount of 119.89 was credited to your member contribution due to schedule of 2020 dividend sharing ', '8th April, 2020', '1', 'yes'),
(110, 'A199905222020', 'Schedule Sharing og Dividend', 'An amount of 119.89 was credited to your member contribution due to schedule of 2020 dividend sharing ', '8th April, 2020', '1', 'yes'),
(111, 'K199902028081', 'Schedule Sharing og Dividend', 'An amount of 121.22 was credited to your member contribution due to schedule of 2020 dividend sharing ', '8th April, 2020', '1', 'yes'),
(112, 'K199902024754', 'Schedule Sharing og Dividend', 'An amount of 69.1 was credited to your member contribution due to schedule of 2020 dividend sharing ', '8th April, 2020', '1', 'yes'),
(113, 'O197612219747', 'Schedule Sharing og Dividend', 'An amount of 222.81 was credited to your member contribution due to schedule of 2020 dividend sharing ', '8th April, 2020', '1', 'yes'),
(114, 's202002252020', 'Schedule Sharing og Dividend', 'An amount of 39.36732268233 was credited to your member contribution due to schedule of 2020 dividend sharing ', '8th April, 2020', '1', 'yes'),
(115, 'a202002272020', 'Schedule Sharing og Dividend', 'An amount of 157.46929072932 was credited to your member contribution due to schedule of 2020 dividend sharing ', '8th April, 2020', '1', 'yes'),
(116, 'A199905222020', 'Schedule Sharing og Dividend', 'An amount of 295.25492011747 was credited to your member contribution due to schedule of 2020 dividend sharing ', '8th April, 2020', '1', 'yes'),
(117, 'A202002194324', 'Schedule Sharing og Dividend', 'An amount of 236.20393609398 was credited to your member contribution due to schedule of 2020 dividend sharing ', '8th April, 2020', '1', 'yes'),
(118, 'K199902023889', 'Schedule Sharing og Dividend', 'An amount of 255.88759743514 was credited to your member contribution due to schedule of 2020 dividend sharing ', '8th April, 2020', '1', 'yes'),
(119, 'K199902024776', 'Schedule Sharing og Dividend', 'An amount of 157.46929072932 was credited to your member contribution due to schedule of 2020 dividend sharing ', '8th April, 2020', '1', 'yes'),
(120, 'K199902028081', 'Schedule Sharing og Dividend', 'An amount of 137.78562938815 was credited to your member contribution due to schedule of 2020 dividend sharing ', '8th April, 2020', '1', 'yes'),
(121, 'K199902024754', 'Schedule Sharing og Dividend', 'An amount of 137.78562938815 was credited to your member contribution due to schedule of 2020 dividend sharing ', '8th April, 2020', '1', 'yes'),
(122, 'O197612219747', 'Schedule Sharing og Dividend', 'An amount of 157.46929072932 was credited to your member contribution due to schedule of 2020 dividend sharing ', '8th April, 2020', '1', 'yes'),
(123, 'A199802203246', 'Schedule Sharing og Dividend', 'An amount of 118.10196804699 was credited to your member contribution due to schedule of 2020 dividend sharing ', '8th April, 2020', '1', 'yes'),
(124, 'O198909106598', 'Schedule Sharing og Dividend', 'An amount of 541.30068688204 was credited to your member contribution due to schedule of 2020 dividend sharing ', '8th April, 2020', '1', 'yes'),
(125, 'H198905202850', 'Member infomation updated', 'Informations was updated', '8th April, 2020', '1', 'yes'),
(126, 'G199205104893', 'Member infomation updated', 'Informations was updated', '8th April, 2020', '1', 'yes'),
(127, '7d09348afdf7e6f40af8f474157ba2bf', 'Member infomation updated', 'Informations was updated', '8th April, 2020', '1', 'yes'),
(128, 'G199205104893', 'Member infomation updated', 'Informations was updated', '8th April, 2020', '1', 'yes'),
(129, 'G199205104893', 'Member infomation updated', 'Informations was updated', '8th April, 2020', '1', 'yes'),
(130, 'H198905202850', 'Member infomation updated', 'Informations was updated', '8th April, 2020', '1', 'yes'),
(131, 'H198905202850', 'Next of kin info was updated', 'Next of kin info was updated', '8th April, 2020', '1', 'yes'),
(132, 'H198905202850', 'Next of kin info was updated', 'Next of kin info was updated', '8th April, 2020', '1', 'yes'),
(133, 'H198905202850', 'Next of kin info was updated', 'Next of kin info was updated', '8th April, 2020', '1', 'yes'),
(134, 'H198905202850', 'Next of kin info was updated', 'Next of kin info was updated', '8th April, 2020', '1', 'yes'),
(135, 'G199205104893', 'Next of kin info was updated', 'Next of kin info was updated', '8th April, 2020', '1', 'yes'),
(136, 'G199205104893', 'Next of kin info was updated', 'Next of kin info was updated', '8th April, 2020', '1', 'yes'),
(137, 'G199205104893', 'Next of kin info was updated', 'Next of kin info was updated', '8th April, 2020', '1', 'yes'),
(138, '', 'Member Deactivated', 'Member was Deactivated from the System', '8th April, 2020', '1', 'yes'),
(139, '14', 'Member Deactivated', 'Member was Deactivated from the System', '8th April, 2020', '1', 'yes'),
(140, '15', 'Member Deactivated', 'Member was Deactivated from the System', '8th April, 2020', '1', 'yes'),
(141, '14', 'Member Deactivated', 'Member was Deactivated from the System', '8th April, 2020', '1', 'yes'),
(142, '13', 'Member Deactivated', 'Member was Deactivated from the System', '8th April, 2020', '1', 'yes'),
(143, '0851bf0a73cfb1b3559a277f2f09c66f', 'Loan Paid', ' A loan of  140 was paid', '9th April, 2020', '1', 'yes'),
(144, 'D199605256595', 'Member Added', 'Was added to the Members list', '9th April, 2020', '1', 'yes'),
(145, 'd199605256595', 'login', 'Login make suceesfully', 'April 9, 2020, 1:41 pm', '', 'yes'),
(146, 'm199204012020', 'login', 'Login make suceesfully', 'April 9, 2020, 2:25 pm', '', 'yes'),
(147, 'd199605256595', 'login', 'Login make suceesfully', 'April 9, 2020, 3:43 pm', '', 'yes'),
(148, 'd199605256595', 'login', 'Login make suceesfully', 'April 9, 2020, 3:53 pm', '', 'yes'),
(149, '', 'Change Member Contribution Approvals', ' was Approved By Self', '', 'd199605256595', 'yes'),
(150, '', 'Change Member Contribution Approvals', ' was Approved By Self', '', 'd199605256595', 'yes'),
(151, 'd199605256595', 'login', 'Login make suceesfully', 'April 9, 2020, 5:03 pm', '', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `members_contributions`
--

CREATE TABLE `members_contributions` (
  `id` int(11) NOT NULL,
  `member_id` varchar(50) NOT NULL,
  `member_id_encrypt` varchar(60) NOT NULL,
  `year` varchar(20) NOT NULL,
  `month` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `receipt_number` varchar(50) NOT NULL,
  `date_paid` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `done_by` varchar(50) NOT NULL,
  `active` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members_contributions`
--

INSERT INTO `members_contributions` (`id`, `member_id`, `member_id_encrypt`, `year`, `month`, `amount`, `receipt_number`, `date_paid`, `date_created`, `done_by`, `active`) VALUES
(1, 'K199902024754s', '399b2b9804c57bf4fb2242f5dbdfd0be', '2019', '12', '100', '0000000001', '2019-12-27', '2020-03-08', '1', 'yes'),
(2, 'K199902024754', '399b2b9804c57bf4fb2242f5dbdfd0be', '2020', '01', '100', '0000000002', '2020-01-27', '2020-02-27', '1', 'yes'),
(3, 'K199902024754', '399b2b9804c57bf4fb2242f5dbdfd0be', '2020', '01', '100', '0000000003', '2020-02-27', '2020-02-27', '1', 'yes'),
(4, 'a202002272020', 'edfa41f51b26268446eaf790c5eac7b4', '2020', 'January', '200', '0000004', '2020-02-28', '2020-03-17', '1', 'yes'),
(5, 'K199902028081', 'da64883f2825ba6478dce6a8c9ecbf8d', '2020', 'February', '100', '0000005', '2020-03-02', '2020-03-02', '1', 'yes'),
(6, 'A199905222020', 'aa9dd8a8f35b78858c9de02de82d36c4', '2020', 'January', '500', '0000006', '2020-03-02', '2020-03-02', '1', 'yes'),
(7, 'A199905222020', 'aa9dd8a8f35b78858c9de02de82d36c4', '2020', 'February', '500', '0000007', '2020-03-02', '2020-03-02', '1', 'yes'),
(8, 'K199902024776', '87ad20c24e4068d1cb47850ca6f6cc8e', '2020', 'January', '100', '0000008', '2020-03-05', '2020-03-05', '1', 'yes'),
(9, 'O197612219747', '0851bf0a73cfb1b3559a277f2f09c66f', '2020', 'February', '200', '0000009', '2020-03-14', '2020-03-14', '1', 'yes'),
(10, 'K199902024776', '87ad20c24e4068d1cb47850ca6f6cc8e', '2020', 'March', '100', '0000010', '2020-03-16', '2020-03-16', '1', 'yes'),
(11, 'K199902023889', '4ec6e239e5c086cae3d4181b650c8a9b', '2020', 'January', '100', '0000011', '2020-03-17', '2020-03-17', '1', 'yes'),
(12, 'O198909106598', '1dabd7990abbe29c5ea622d80e2d5879', '2020', 'January', '200', '0000012', '2020-03-19', '2020-03-19', '1', 'yes'),
(13, 'A199905222020', 'aa9dd8a8f35b78858c9de02de82d36c4', '2020', 'March', '525', '0000013', '2020-03-23', '2020-03-23', '1', 'yes'),
(14, 'K199902028081', 'da64883f2825ba6478dce6a8c9ecbf8d', '2020', 'March', '205', '0000014', '2020-03-23', '2020-03-23', '1', 'yes'),
(15, 'K199902023889', '4ec6e239e5c086cae3d4181b650c8a9b', '2020', 'February', '205', '0000015', '2020-03-23', '2020-03-23', '1', 'yes'),
(16, 'K199902023889', '4ec6e239e5c086cae3d4181b650c8a9b', '2020', 'March', '105', '0000016', '2020-03-23', '2020-03-23', '1', 'yes'),
(17, 'O198909106598', '1dabd7990abbe29c5ea622d80e2d5879', '2020', 'February', '262.5', '0000017', '2020-03-23', '2020-03-23', '1', 'yes'),
(18, 'K199902024754', '399b2b9804c57bf4fb2242f5dbdfd0be', '2020', 'February', '105', '0000018', '2020-03-28', '2020-03-29', '1', 'yes'),
(19, 'K199902024754', '399b2b9804c57bf4fb2242f5dbdfd0be', '2020', 'March', '105', '0000019', '2020-03-28', '2020-03-29', '1', 'no'),
(20, 'O198909106598', '1dabd7990abbe29c5ea622d80e2d5879', '2020', 'March', '262.5', '0000020', '2020-04-29', '2020-03-29', '1', 'yes'),
(21, 'O198909106598', '1dabd7990abbe29c5ea622d80e2d5879', '2020', '01', '262.5', '0000021', '2020-04-01', '2020-04-01', '1', 'yes'),
(22, 'O198909106598', '1dabd7990abbe29c5ea622d80e2d5879', '2020', '02', '262.5', '0000022', '2020-04-01', '2020-04-01', '1', 'yes'),
(23, 'O198909106598', '1dabd7990abbe29c5ea622d80e2d5879', '2020', '03', '262.5', '0000023', '2020-04-01', '2020-04-01', '1', 'yes'),
(24, 'O198909106598', '1dabd7990abbe29c5ea622d80e2d5879', '2020', '04', '250', '0000024', '2020-04-01', '2020-04-01', '1', 'yes'),
(25, 'O198909106598', '1dabd7990abbe29c5ea622d80e2d5879', '2020', '05', '250', '0000025', '2020-04-01', '2020-04-01', '1', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `members_deactivated`
--

CREATE TABLE `members_deactivated` (
  `id` int(11) NOT NULL,
  `member_id` varchar(50) NOT NULL,
  `reason` text NOT NULL,
  `date_added` varchar(50) NOT NULL,
  `done_by` varchar(20) NOT NULL,
  `active` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members_deactivated`
--

INSERT INTO `members_deactivated` (`id`, `member_id`, `reason`, `date_added`, `done_by`, `active`) VALUES
(1, 'N199102228051', 'Stop', '8th April, 2020', '1', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `member_contribution_history`
--

CREATE TABLE `member_contribution_history` (
  `id` int(11) NOT NULL,
  `member_id` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `confirm` varchar(3) NOT NULL DEFAULT 'no',
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `done_by` varchar(20) NOT NULL,
  `active` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_contribution_history`
--

INSERT INTO `member_contribution_history` (`id`, `member_id`, `amount`, `confirm`, `date_added`, `done_by`, `active`) VALUES
(1, 'O198909106598', '250', 'yes', '2020-03-20', '1', 'yes'),
(2, 'D199605256595', '400', 'yes', '2020-04-09', 'm199204012020', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `member_interest`
--

CREATE TABLE `member_interest` (
  `id` int(11) NOT NULL,
  `one_to_twelve_month` varchar(50) NOT NULL,
  `one_to_twelve_month_decimal` varchar(50) NOT NULL,
  `more_than_twelve_month` varchar(50) NOT NULL,
  `more_than_twelve_month_decimal` varchar(50) NOT NULL,
  `date_added` date NOT NULL,
  `staff` varchar(10) NOT NULL,
  `active` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_interest`
--

INSERT INTO `member_interest` (`id`, `one_to_twelve_month`, `one_to_twelve_month_decimal`, `more_than_twelve_month`, `more_than_twelve_month_decimal`, `date_added`, `staff`, `active`) VALUES
(1, '5', 'amountDecimalNormal', '10', '0.1', '2020-03-16', '1', 'no'),
(2, '5', '0.05', '10', '0.1', '2020-03-16', '1', 'no'),
(3, '5', '0.05', '10', '0.1', '2020-03-16', '1', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `payroll_members`
--

CREATE TABLE `payroll_members` (
  `id` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `member_id` varchar(50) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `active` varchar(3) DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payroll_members`
--

INSERT INTO `payroll_members` (`id`, `position`, `member_id`, `date_added`, `active`) VALUES
(1, '101', 'O198909106598', '2020-03-26', 'yes'),
(2, '102', 'A199802203246', '2020-03-26', 'yes'),
(3, '102', 'A199905222020', '2020-03-26', 'yes'),
(4, '103', 'K199902023889', '2020-03-26', 'no'),
(5, '103', 'K199902028081', '2020-03-26', 'yes'),
(6, '104', 'K199902024754', '2020-03-26', 'yes'),
(7, '105', 'O197612219747', '2020-03-26', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `payroll_positions`
--

CREATE TABLE `payroll_positions` (
  `id` int(11) NOT NULL,
  `pos_id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `active` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payroll_positions`
--

INSERT INTO `payroll_positions` (`id`, `pos_id`, `name`, `active`) VALUES
(1, '101', 'Founder', 'yes'),
(2, '102', 'Co-Founder', 'yes'),
(3, '103', 'Senior Staff', 'yes'),
(4, '104', 'Junior Staff', 'yes'),
(5, '105', 'Management', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `registration_fees`
--

CREATE TABLE `registration_fees` (
  `id` int(11) NOT NULL,
  `member_id` varchar(50) NOT NULL,
  `amount` varchar(5) NOT NULL,
  `receipt_number` varchar(30) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `done_by` varchar(50) NOT NULL,
  `active` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration_fees`
--

INSERT INTO `registration_fees` (`id`, `member_id`, `amount`, `receipt_number`, `date_created`, `done_by`, `active`) VALUES
(1, 'f3d68e142181453eaa051487fc35f2a9', '100', '0000001', '2020-04-01', '1', 'yes'),
(2, 'aa9dd8a8f35b78858c9de02de82d36c4', '100', '0000001', '2020-04-01', '1', 'yes'),
(3, 'edfa41f51b26268446eaf790c5eac7b4', '100', '0000003', '2020-04-01', '1', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_dividen`
--

CREATE TABLE `schedule_dividen` (
  `id` int(11) NOT NULL,
  `year` varchar(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `active` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule_dividen`
--

INSERT INTO `schedule_dividen` (`id`, `year`, `type`, `date_added`, `active`) VALUES
(1, '2020', 'founders', '2020-04-08', 'yes'),
(2, '2020', 'founders', '2020-04-08', 'yes'),
(3, '2020', 'founders', '2020-04-08', 'yes'),
(4, '2020', 'founders', '2020-04-08', 'yes'),
(5, '2020', 'founders', '2020-04-08', 'yes'),
(6, '2020', 'founders', '2020-04-08', 'yes'),
(7, '2020', 'all', '2020-04-08', 'yes'),
(8, '2020', 'all', '2020-04-08', 'yes'),
(9, '2020', 'all', '2020-04-08', 'yes'),
(10, '2020', 'all', '2020-04-08', 'yes'),
(11, '2020', 'all', '2020-04-08', 'yes'),
(12, '2020', 'all', '2020-04-08', 'yes'),
(13, '2020', 'all', '2020-04-08', 'yes'),
(14, '2020', 'all', '2020-04-08', 'yes'),
(15, '2020', 'all', '2020-04-08', 'yes'),
(16, '2020', 'all', '2020-04-08', 'yes'),
(17, '2020', 'all', '2020-04-08', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `school_info`
--

CREATE TABLE `school_info` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `slogan` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `region` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `website` varchar(200) NOT NULL,
  `letterhead` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `active` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_info`
--

INSERT INTO `school_info` (`id`, `name`, `slogan`, `email`, `mobile`, `location`, `region`, `country`, `website`, `letterhead`, `logo`, `active`) VALUES
(1, 'Daakye Welfare Fund', 'We are goo', 'welfaredaakye@gmail.com', '0203228660, 0244474865', 'Kwhu', 'Easten Region', 'Ghana', '', '1AmUwsFSik9LMYu/header.png', '1AmUwsFSik9LMYu/logo.png', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `staffID` varchar(50) NOT NULL,
  `encrypted_id` varchar(65) NOT NULL,
  `username` varchar(50) NOT NULL,
  `encrypted_password` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `employmentType` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `home_town` varchar(100) NOT NULL,
  `region` varchar(50) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `address` varchar(100) NOT NULL,
  `digitalAddress` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `staffPhoto` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `confirm` varchar(3) NOT NULL DEFAULT 'no',
  `active` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `staffID`, `encrypted_id`, `username`, `encrypted_password`, `password`, `firstName`, `lastName`, `employmentType`, `dob`, `mobile`, `email`, `marital_status`, `nationality`, `home_town`, `region`, `gender`, `address`, `digitalAddress`, `location`, `staffPhoto`, `date_added`, `confirm`, `active`) VALUES
(1, 'DWF00001', 'e807f1fcf82d132f9bb018ca6738a19f', 'nuku', 'e807f1fcf82d132f9bb018ca6738a19f', '1234567890', 'Nuku', 'Abiew Atta Kwadwo', '225', '2020-01-28', '0548878554', 'ohene@gmail.com', 'Married', 'Ghana', 'Volta', 'Upper East Region', 'Male', 'ADkI 2020', 'AK-2365-2020', 'Kumasi', '8RaDVNnHxzcymgw/bornsseptember.jpg', '2020-02-12 10:03:36', 'yes', 'yes'),
(2, 'A199706152020', 'e415238d0b96d45fccb19ff4a786875e', 'A199706152020', 'e415238d0b96d45fccb19ff4a786875e', 'A199706152020', 'Samuel', 'Anin Yeboah', '245', '1997-06-15', '', '', '', '', '', '', 'Male', '', '', '', '8RaDVNnHxzcymgw/bornsseptember.jpg', '2020-02-12 09:59:47', 'yes', 'yes'),
(3, 'S199504182020', '4d7ff9c5365856bb2beb37b39886a6e2', 'S199504182020', '4d7ff9c5365856bb2beb37b39886a6e2', 'S199504182020', 'Ras', 'Say', '245', '1995-04-18', '024787855', '', '', '', '', '', 'Male', '', '', '', '', '2020-03-17 09:02:29', 'no', 'yes'),
(4, 'M199204012020', '9c96421552c4976662e6a3662a872b87', 'M199204012020', '9c96421552c4976662e6a3662a872b87', 'M199204012020', 'KWabena', 'Moses', '225', '1992-04-01', '0548878554', 'ohene@gmail.com', '', 'Ghana', 'Goaso', 'Upper East Region', 'Male', 'AKUi', 'AK-5858-545', 'Asona', 'opJShjFMCEbgm4k/aboutBG.jpg', '2020-04-09 10:55:54', 'no', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `staff_activities`
--

CREATE TABLE `staff_activities` (
  `id` int(11) NOT NULL,
  `staff_id` varchar(65) NOT NULL,
  `activity_type` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `datecreated` varchar(50) NOT NULL,
  `active` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_activities`
--

INSERT INTO `staff_activities` (`id`, `staff_id`, `activity_type`, `description`, `datecreated`, `active`) VALUES
(1, 'DWF00001', 'Member Added', 's202002252020 Was added to the Members list By : 1', '25th February, 2020', 'yes'),
(2, 'DWF00001', 'Member Added', 'a202002272020 Was added to the Members list By : 1', '25th February, 2020', 'yes'),
(3, 'DWF00001', 'Member Added', 'A199905222020 Was added to the Members list By : 1', '25th February, 2020', 'yes'),
(4, 'DWF00001', 'Member Added', 'A202002194324 Was added to the Members list By : 1', '25th February, 2020', 'yes'),
(5, '1', 'login', 'Login make suceesfully', 'February 25, 2020, 11:31 pm', 'yes'),
(6, '1', 'login', 'Login make suceesfully', 'February 26, 2020, 7:15 am', 'yes'),
(7, 'DWF00001', 'Member Added', 'K199902023889 Was added to the Members list By : 1', '26th February, 2020', 'yes'),
(8, 'DWF00001', 'Member Added', 'K199902024776 Was added to the Members list By : 1', '26th February, 2020', 'yes'),
(9, 'DWF00001', 'Member Added', 'K199902028081 Was added to the Members list By : 1', '26th February, 2020', 'yes'),
(10, 'DWF00001', 'Member Added', 'K199902024754 Was added to the Members list By : 1', '26th February, 2020', 'yes'),
(11, 'DWF00001', 'Member infomation updated', ' info Was updated  By :  1', '26th February, 2020', 'yes'),
(12, 'DWF00001', 'Member infomation updated', ' info Was updated  By :  1', '26th February, 2020', 'yes'),
(13, 'DWF00001', 'Member infomation updated', 'K199902024754 info Was updated  By :  1', '26th February, 2020', 'yes'),
(14, 'DWF00001', 'Member infomation updated', 'K199902024754 info Was updated  By :  1', '26th February, 2020', 'yes'),
(15, 'DWF00001', 'Member infomation updated', 'K199902024754 info Was updated  By :  1', '26th February, 2020', 'yes'),
(16, '1', 'login', 'Login make suceesfully', 'February 26, 2020, 11:39 pm', 'yes'),
(17, '1', 'login', 'Login make suceesfully', 'February 26, 2020, 11:46 pm', 'yes'),
(18, '1', 'login', 'Login make suceesfully', 'February 27, 2020, 6:31 am', 'yes'),
(19, '1', 'login', 'Login make suceesfully', 'February 27, 2020, 10:20 pm', 'yes'),
(20, 'DWF00001', 'Monthly Contribution Paid', 'a202002272020 Monthly Contribution was Paid with amount of 785456 By : 1', '28th February, 2020', 'yes'),
(21, '1', 'login', 'Login make suceesfully', 'February 28, 2020, 8:34 am', 'yes'),
(22, '1', 'login', 'Login make suceesfully', 'February 28, 2020, 10:50 pm', 'yes'),
(23, 'DWF00001', 'Member Added', 'A199702204644 Was added to the Members list By : 1', '29th February, 2020', 'yes'),
(24, 'DWF00001', 'Customer Added', 'K199602209486 Was added to the Customers list By : 1', '29th February, 2020', 'yes'),
(25, 'DWF00001', 'Customer infomation updated', 'K199602209486 info Was updated  By :  1', '29th February, 2020', 'yes'),
(26, 'DWF00001', 'Customer infomation updated', 'K199602209486 info Was updated  By :  1', '29th February, 2020', 'yes'),
(27, 'DWF00001', 'Customer infomation updated', 'K199602209486 info Was updated  By :  1', '29th February, 2020', 'yes'),
(28, 'DWF00001', 'Customer infomation updated', 'K199602209486 info Was updated  By :  1', '29th February, 2020', 'yes'),
(29, '1', 'login', 'Login make suceesfully', 'February 29, 2020, 9:50 pm', 'yes'),
(30, '1', 'login', 'Login make suceesfully', 'March 1, 2020, 4:14 am', 'yes'),
(31, '1', 'login', 'Login make suceesfully', 'March 1, 2020, 9:52 am', 'yes'),
(32, '1', 'login', 'Login make suceesfully', 'March 1, 2020, 8:46 pm', 'yes'),
(33, 'DWF00001', 'Loan Granted', 'K199602209486 was given a loan of 500 by : 1', '1st March, 2020', 'yes'),
(34, 'DWF00001', 'Loan Granted', 'K199602209486 was given a loan of 500 by : 1', '1st March, 2020', 'yes'),
(35, 'DWF00001', 'Loan Granted', 'K199602209486 was given a loan of 500 by : 1', '1st March, 2020', 'yes'),
(36, 'DWF00001', 'Loan Granted', 'K199602209486 was given a loan of 500 by : 1', '1st March, 2020', 'yes'),
(37, 'DWF00001', 'Loan Granted', 'A199702204644 was given a loan of 1000 by : 1', '1st March, 2020', 'yes'),
(38, '1', 'login', 'Login make suceesfully', 'March 2, 2020, 7:12 am', 'yes'),
(39, 'DWF00001', 'Loan Granted', 'K199902024754 was given a loan of 400 by : 1', '2nd March, 2020', 'yes'),
(40, 'DWF00001', 'Member infomation updated', 'K199902028081 info Was updated  By :  1', '2nd March, 2020', 'yes'),
(41, 'DWF00001', 'Monthly Contribution Paid', 'K199902028081 Monthly Contribution was Paid with amount of 100 By : 1', '2nd March, 2020', 'yes'),
(42, 'DWF00001', 'Loan Granted', 'K199902028081 was given a loan of 200 by : 1', '2nd March, 2020', 'yes'),
(43, '1', 'login', 'Login make suceesfully', 'March 2, 2020, 4:16 pm', 'yes'),
(44, 'DWF00001', 'Monthly Contribution Paid', 'A199905222020 Monthly Contribution was Paid with amount of 500 By : 1', '2nd March, 2020', 'yes'),
(45, 'DWF00001', 'Monthly Contribution Paid', 'A199905222020 Monthly Contribution was Paid with amount of 500 By : 1', '2nd March, 2020', 'yes'),
(46, 'DWF00001', 'Loan Granted', 'A199905222020 was given a loan of 2000 by : 1', '2nd March, 2020', 'yes'),
(47, '1', 'login', 'Login make suceesfully', 'March 3, 2020, 1:29 pm', 'yes'),
(48, '1', 'login', 'Login make suceesfully', 'March 3, 2020, 1:31 pm', 'yes'),
(49, '1', 'login', 'Login make suceesfully', 'March 4, 2020, 12:19 pm', 'yes'),
(50, 'DWF00001', 'Monthly Contribution Paid', 'K199902024776 Monthly Contribution was Paid with amount of 100 By : 1', '5th March, 2020', 'yes'),
(51, 'DWF00001', 'Loan Granted', 'K199902024776 was given a loan of 200 by : 1', '5th March, 2020', 'yes'),
(52, 'DWF00001', 'Loan Paid', 'A loan of 25 was paid  By : 1', '5th March, 2020', 'yes'),
(53, 'DWF00001', 'Loan Paid', 'A loan of 100 was paid  By : 1', '5th March, 2020', 'yes'),
(54, 'DWF00001', 'Loan Paid', 'A loan of 20 was paid  By : 1', '5th March, 2020', 'yes'),
(55, '1', 'login', 'Login make suceesfully', 'March 6, 2020, 10:18 am', 'yes'),
(56, '1', 'login', 'Login make suceesfully', 'March 8, 2020, 10:34 pm', 'yes'),
(57, '1', 'login', 'Login make suceesfully', 'March 8, 2020, 10:34 pm', 'yes'),
(58, '1', 'login', 'Login make suceesfully', 'March 8, 2020, 10:36 pm', 'yes'),
(59, '1', 'login', 'Login make suceesfully', 'March 14, 2020, 12:55 pm', 'yes'),
(60, '1', 'login', 'Login make suceesfully', 'March 14, 2020, 12:57 pm', 'yes'),
(61, 'DWF00001', 'Member Added', 'O197612219747 Was added to the Members list By : 1', '14th March, 2020', 'yes'),
(62, 'DWF00001', 'Monthly Contribution Paid', 'O197612219747 Monthly Contribution was Paid with amount of 200 By : 1', '14th March, 2020', 'yes'),
(63, 'DWF00001', 'Loan Granted', 'O197612219747 was given a loan of 400 by : 1', '14th March, 2020', 'yes'),
(64, '1', 'login', 'Login make suceesfully', 'March 16, 2020, 5:14 am', 'yes'),
(65, '1', 'login', 'Login make suceesfully', 'March 16, 2020, 6:14 am', 'yes'),
(66, '1', 'login', 'Login make suceesfully', 'March 16, 2020, 6:19 am', 'yes'),
(67, '1', 'login', 'Login make suceesfully', 'March 16, 2020, 6:27 am', 'yes'),
(68, '1', 'login', 'Login make suceesfully', 'March 16, 2020, 6:27 am', 'yes'),
(69, '1', 'login', 'Login make suceesfully', 'March 16, 2020, 7:51 am', 'yes'),
(70, 'DWF00001', 'Loan Paid', 'A loan of 100 was paid  By : 1', '16th March, 2020', 'yes'),
(71, 'DWF00001', 'Monthly Contribution Paid', 'K199902024776 Monthly Contribution was Paid with amount of 100 By : 1', '16th March, 2020', 'yes'),
(72, '1', 'login', 'Login make suceesfully', 'March 16, 2020, 3:01 pm', 'yes'),
(73, '1', 'login', 'Login make suceesfully', 'March 16, 2020, 3:02 pm', 'yes'),
(74, '1', 'login', 'Login make suceesfully', 'March 16, 2020, 3:03 pm', 'yes'),
(75, '1', 'login', 'Login make suceesfully', 'March 16, 2020, 3:06 pm', 'yes'),
(76, 'DWF00001', 'Member Interest Rate Added', '10% Member Interest Rate was added By :  1', '16th March, 2020', 'yes'),
(77, 'DWF00001', 'Member Interest Rate Added', '0.05% and 0.1% Member Interest Rate was added By :  1', '16th March, 2020', 'yes'),
(78, 'DWF00001', 'Member Interest Rate Added', '0.05% and 0.1% Member Interest Rate was added By :  1', '16th March, 2020', 'yes'),
(79, 'DWF00001', 'Customer Interest Rate Added', '5% Customer Interest Rate was added By :  1', '16th March, 2020', 'yes'),
(80, 'DWF00001', 'Member Interest Rate Added', '0.05% and 0.1% Member Interest Rate was added By :  1', '16th March, 2020', 'yes'),
(81, 'DWF00001', 'Customer Interest Rate Added', '5% Customer Interest Rate was added By :  1', '16th March, 2020', 'yes'),
(82, 'DWF00001', 'Loan Paid', 'A loan of 400 was paid  By : 1', '17th March, 2020', 'yes'),
(83, 'DWF00001', 'Monthly Contribution Paid', 'K199902023889 Monthly Contribution was Paid with amount of 100 By : 1', '17th March, 2020', 'yes'),
(84, 'DWF00001', 'Loan Granted', 'K199902023889 was given a loan of 200 by : 1', '17th March, 2020', 'yes'),
(85, 'DWF00001', 'Loan Paid', 'A loan of 320 was paid  By : 1', '17th March, 2020', 'yes'),
(86, '1', 'login', 'Login make suceesfully', 'March 18, 2020, 10:50 am', 'yes'),
(87, '1', 'login', 'Login make suceesfully', 'March 18, 2020, 12:07 pm', 'yes'),
(88, '1', 'login', 'Login make suceesfully', 'March 18, 2020, 12:17 pm', 'yes'),
(89, '1', '', '', 'March 18, 2020, 12:20 pm', 'yes'),
(90, '1', '', '', 'March 18, 2020, 12:22 pm', 'yes'),
(91, '1', 'login', 'Login make suceesfully', 'March 18, 2020, 8:07 pm', 'yes'),
(92, '1', 'login', 'Login make suceesfully', 'March 19, 2020, 1:41 am', 'yes'),
(93, '1', 'login', 'Login make suceesfully', 'March 19, 2020, 12:00 pm', 'yes'),
(94, 'DWF00001', 'Member Added', 'A199802203246 Was added to the Members list By : 1', '19th March, 2020', 'yes'),
(95, '1', 'login', 'Login make suceesfully', 'March 19, 2020, 12:16 pm', 'yes'),
(96, '1', 'login', 'Login make suceesfully', 'March 19, 2020, 1:29 pm', 'yes'),
(97, 'DWF00001', 'Member Added', 'O198909106598 Was added to the Members list By : 1', '19th March, 2020', 'yes'),
(98, 'DWF00001', 'Monthly Contribution Paid', 'O198909106598 Monthly Contribution was Paid with amount of 200 By : 1', '19th March, 2020', 'yes'),
(99, '1', 'login', 'Login make suceesfully', 'March 19, 2020, 2:26 pm', 'yes'),
(100, 'DWF00001', 'Member infomation updated', 'O198909106598 info Was updated  By :  1', '20th March, 2020', 'yes'),
(101, 'DWF00001', 'Member infomation updated', 'O198909106598 info Was updated  By :  1', '20th March, 2020', 'yes'),
(102, 'DWF00001', 'Member infomation updated', 'O198909106598 info Was updated  By :  1', '20th March, 2020', 'yes'),
(103, 'DWF00001', 'Member infomation updated', 'O198909106598 info Was updated  By :  1', '20th March, 2020', 'yes'),
(104, 'DWF00001', 'Member infomation updated', 'O198909106598 info Was updated  By :  1', '20th March, 2020', 'yes'),
(105, 'DWF00001', 'Member infomation updated', 'O198909106598 info Was updated  By :  1', '20th March, 2020', 'yes'),
(106, 'DWF00001', 'Member Deactivated', ' The Deactivation was done  By :  1', '20th March, 2020', 'yes'),
(107, 'DWF00001', 'Member Deactivated', ' The Deactivation was done  By :  1', '20th March, 2020', 'yes'),
(108, 'DWF00001', 'Member Deactivated', ' The Deactivation was done  By :  1', '20th March, 2020', 'yes'),
(109, 'DWF00001', 'Member Deactivated', ' The Deactivation was done  By :  1', '20th March, 2020', 'yes'),
(110, 'DWF00001', 'Member Deactivated', ' The Deactivation was done  By :  1', '20th March, 2020', 'yes'),
(111, 'DWF00001', 'Member Deactivated', ' The Deactivation was done  By :  1', '20th March, 2020', 'yes'),
(112, '1', 'login', 'Login make suceesfully', 'March 20, 2020, 8:43 pm', 'yes'),
(113, '1', 'login', 'Login make suceesfully', 'March 21, 2020, 10:43 am', 'yes'),
(114, '1', 'login', 'Login make suceesfully', 'March 22, 2020, 1:52 pm', 'yes'),
(115, '', 'Loan Issued', 'A loan of 1000 was issued to f6966091f86e91942b71f36cc7b5430d by : 1', '22nd March, 2020', 'yes'),
(116, '1', 'Loan Issued', 'A loan of 1000 was issued to f6966091f86e91942b71f36cc7b5430d by : 1', '22nd March, 2020', 'yes'),
(117, '1', 'Loan Issued', 'A loan of 1000 was issued to f6966091f86e91942b71f36cc7b5430d by : 1', '22nd March, 2020', 'yes'),
(118, '1', 'Loan Issued', 'A loan of 1000 was issued to f6966091f86e91942b71f36cc7b5430d by : 1', '22nd March, 2020', 'yes'),
(119, '1', 'Loan Issued', 'A loan of 1600 was issued to 0851bf0a73cfb1b3559a277f2f09c66f by : 1', '22nd March, 2020', 'yes'),
(120, '1', 'Loan Issued', 'A loan of 1600 was issued to 0851bf0a73cfb1b3559a277f2f09c66f by : 1', '22nd March, 2020', 'yes'),
(121, '1', 'Loan Issued', 'A loan of 1000 was issued to f6966091f86e91942b71f36cc7b5430d by : 1', '22nd March, 2020', 'yes'),
(122, '1', 'Loan Issued', 'A loan of 1600 was issued to 0851bf0a73cfb1b3559a277f2f09c66f by : 1', '22nd March, 2020', 'yes'),
(123, '1', 'Loan Issued', 'A loan of 1000 was issued to f6966091f86e91942b71f36cc7b5430d by : 1', '22nd March, 2020', 'yes'),
(124, '1', 'Loan Issued', 'A loan of 1600 was issued to 0851bf0a73cfb1b3559a277f2f09c66f by : 1', '23rd March, 2020', 'yes'),
(125, '1', 'Loan Issued', 'A loan of 1000 was issued to f6966091f86e91942b71f36cc7b5430d by : 1', '23rd March, 2020', 'yes'),
(126, 'DWF00001', 'Loan Paid', 'A loan of 315 was paid  By : 1', '23rd March, 2020', 'yes'),
(127, 'DWF00001', 'Loan Paid', 'A loan of 315 was paid  By : 1', '23rd March, 2020', 'yes'),
(128, 'DWF00001', 'Loan Paid', 'A loan of 140 was paid  By : 1', '23rd March, 2020', 'yes'),
(129, 'DWF00001', 'Loan Paid', 'A loan of 140 was paid  By : 1', '23rd March, 2020', 'yes'),
(130, 'DWF00001', 'Monthly Contribution Paid', 'A199905222020 Monthly Contribution was Paid with amount of 500 By : 1', '23rd March, 2020', 'yes'),
(131, 'DWF00001', 'Monthly Contribution Paid', 'K199902028081 Monthly Contribution was Paid with amount of 100 By : 1', '23rd March, 2020', 'yes'),
(132, 'DWF00001', 'Monthly Contribution Paid', 'K199902023889 Monthly Contribution was Paid with amount of 100 By : 1', '23rd March, 2020', 'yes'),
(133, 'DWF00001', 'Monthly Contribution Paid', 'K199902023889 Monthly Contribution was Paid with amount of 100 By : 1', '23rd March, 2020', 'yes'),
(134, 'DWF00001', 'Monthly Contribution Paid', 'O198909106598 Monthly Contribution was Paid with amount of 250 By : 1', '23rd March, 2020', 'yes'),
(135, 'DWF00001', 'Customer infomation updated', 'K199602209486 info Was updated  By :  1', '23rd March, 2020', 'yes'),
(136, 'DWF00001', 'Customer infomation updated', 'K199602209486 info Was updated  By :  1', '23rd March, 2020', 'yes'),
(137, 'DWF00001', 'Customer infomation updated', 'K199602209486 info Was updated  By :  1', '23rd March, 2020', 'yes'),
(138, 'DWF00001', 'Customer infomation updated', 'K199602209486 info Was updated  By :  1', '23rd March, 2020', 'yes'),
(139, 'DWF00001', 'Customer infomation updated', 'K199602209486 info Was updated  By :  1', '23rd March, 2020', 'yes'),
(140, 'DWF00001', 'Customer infomation updated', 'K199602209486 info Was updated  By :  1', '23rd March, 2020', 'yes'),
(141, 'DWF00001', 'Customer infomation updated', 'K199602209486 info Was updated  By :  1', '23rd March, 2020', 'yes'),
(142, 'DWF00001', 'Customer infomation updated', 'K199602209486 info Was updated  By :  1', '23rd March, 2020', 'yes'),
(143, 'DWF00001', 'Customer infomation updated', 'K199602209486 info Was updated  By :  1', '23rd March, 2020', 'yes'),
(144, 'DWF00001', 'Customer infomation updated', 'K199602209486 info Was updated  By :  1', '23rd March, 2020', 'yes'),
(145, 'DWF00001', 'Customer infomation updated', 'K199602209486 info Was updated  By :  1', '23rd March, 2020', 'yes'),
(146, 'DWF00001', 'Customer infomation updated', 'K199602209486 info Was updated  By :  1', '23rd March, 2020', 'yes'),
(147, '1', 'login', 'Login make suceesfully', 'March 24, 2020, 8:20 am', 'yes'),
(148, 'DWF00001', 'Expenses had been  Added', 'Software Bought had been added to the Expenses By :  1', '24th March, 2020', 'yes'),
(149, '1', 'login', 'Login make suceesfully', 'March 24, 2020, 4:45 pm', 'yes'),
(150, 'DWF00001', 'Expenses had been  Added', 'Get Together  had been added to the Expenses By :  1', '24th March, 2020', 'yes'),
(151, 'DWF00001', 'Expenses had been  Added', 'TV Remote had been added to the Expenses By :  1', '24th March, 2020', 'yes'),
(152, 'DWF00001', 'Loan Paid', 'A loan of 140 was paid  By : 1', '26th March, 2020', 'yes'),
(153, '1', 'Loan Issued', 'A loan of 2000 was issued to 1dabd7990abbe29c5ea622d80e2d5879 by : 1', '28th March, 2020', 'yes'),
(154, 'DWF00001', 'Loan Paid', 'A loan of 800 was paid  By : 1', '28th March, 2020', 'yes'),
(155, 'DWF00001', 'Loan Paid', 'A loan of 800 was paid  By : 1', '28th March, 2020', 'yes'),
(156, 'DWF00001', 'Loan Paid', 'A loan of 800 was paid  By : 1', '28th March, 2020', 'yes'),
(157, 'DWF00001', 'Loan Paid', 'A loan of 800 was paid  By : 1', '28th March, 2020', 'yes'),
(158, 'DWF00001', 'Loan Paid', 'A loan of 800 was paid  By : 1', '28th March, 2020', 'yes'),
(159, 'DWF00001', 'Loan Paid', 'A loan of 800 was paid  By : 1', '28th March, 2020', 'yes'),
(160, 'DWF00001', 'Loan Paid', 'A loan of 140 was paid  By : 1', '28th March, 2020', 'yes'),
(161, 'DWF00001', 'Loan Paid', 'A loan of 800 was paid  By : 1', '28th March, 2020', 'yes'),
(162, 'DWF00001', 'Monthly Contribution Paid', 'K199902024754 Monthly Contribution was Paid with amount of 100 By : 1', '28th March, 2020', 'yes'),
(163, 'DWF00001', 'Monthly Contribution Paid', 'K199902024754 Monthly Contribution was Paid with amount of 100 By : 1', '28th March, 2020', 'yes'),
(164, '1', 'login', 'Login make suceesfully', 'March 29, 2020, 12:00 pm', 'yes'),
(165, 'DWF00001', 'Monthly Contribution Paid', 'O198909106598 Monthly Contribution was Paid with amount of 250 By : 1', '29th April, 2020', 'yes'),
(166, '1', 'Loan Issued', 'A loan of 1400 was issued to 399b2b9804c57bf4fb2242f5dbdfd0be by : 1', '29th April, 2020', 'yes'),
(167, 'DWF00001', 'Loan Paid', 'A loan of 123 was paid  By : 1', '29th April, 2020', 'yes'),
(168, 'DWF00001', 'Expenses had been  Added', 'Food for staff had been added to the Expenses By :  1', '29th April, 2020', 'yes'),
(169, 'DWF00001', 'Expenses had been  Added', 'Mask had been added to the Expenses By :  1', '29th March, 2020', 'yes'),
(170, 'DWF00001', 'Loan Paid', 'A loan of 61 was paid  By : 1', '29th March, 2020', 'yes'),
(171, '1', 'login', 'Login make suceesfully', 'March 30, 2020, 4:52 pm', 'yes'),
(172, 'DWF00001', 'Member Added', 'A198009273896 Was added to the Members list By : 1', '31st March, 2020', 'yes'),
(173, 'DWF00001', 'Member Added', 'N199102228051 Was added to the Members list By : 1', '31st March, 2020', 'yes'),
(174, 'DWF00001', 'Member Added', 'G199205104893 Was added to the Members list By : 1', '31st March, 2020', 'yes'),
(175, '1', 'login', 'Login make suceesfully', 'March 31, 2020, 1:02 pm', 'yes'),
(176, '1', 'login', 'Login make suceesfully', 'March 31, 2020, 1:04 pm', 'yes'),
(177, 'DWF00001', 'Member Added', 'H198905202850 Was added to the Members list By : 1', '31st March, 2020', 'yes'),
(178, 'DWF00001', 'Member Rgistration Fee Paid', '0a910b5525349488db6247f35cdcf6b0  - Member Registration Fee was Paid with amount of 100 By : 1', '31st March, 2020', 'yes'),
(179, 'DWF00001', 'Member Rgistration Fee Paid', '7d09348afdf7e6f40af8f474157ba2bf  - Member Registration Fee was Paid with amount of 100 By : 1', '31st March, 2020', 'yes'),
(180, 'DWF00001', 'Member Rgistration Fee Paid', '64c590c6fa6cab39ae56906f10353eac  - Member Registration Fee was Paid with amount of 100 By : 1', '31st March, 2020', 'yes'),
(181, 'DWF00001', 'Member Rgistration Fee Paid', 'c4c8ca9ca27ef145c27bc564e786aa1c  - Member Registration Fee was Paid with amount of 100 By : 1', '31st March, 2020', 'yes'),
(182, 'DWF00001', 'Member Rgistration Fee Paid', '1dabd7990abbe29c5ea622d80e2d5879  - Member Registration Fee was Paid with amount of 100 By : 1', '31st March, 2020', 'yes'),
(183, 'DWF00001', 'Member Rgistration Fee Paid', '440324a81d2b21260d1e46a746559250  - Member Registration Fee was Paid with amount of 100 By : 1', '31st March, 2020', 'yes'),
(184, 'DWF00001', 'Member Rgistration Fee Paid', '5d1d6e53185f74e23d30e8aff8ed0cb8  - Member Registration Fee was Paid with amount of 100 By : 1', '31st March, 2020', 'yes'),
(185, 'DWF00001', 'Member Rgistration Fee Paid', '0851bf0a73cfb1b3559a277f2f09c66f  - Member Registration Fee was Paid with amount of 100 By : 1', '31st March, 2020', 'yes'),
(186, 'DWF00001', 'Member Rgistration Fee Paid', '399b2b9804c57bf4fb2242f5dbdfd0be  - Member Registration Fee was Paid with amount of 100 By : 1', '31st March, 2020', 'yes'),
(187, 'DWF00001', 'Member Rgistration Fee Paid', '87ad20c24e4068d1cb47850ca6f6cc8e  - Member Registration Fee was Paid with amount of 100 By : 1', '31st March, 2020', 'yes'),
(188, 'DWF00001', 'Member Rgistration Fee Paid', '4ec6e239e5c086cae3d4181b650c8a9b  - Member Registration Fee was Paid with amount of 100 By : 1', '31st March, 2020', 'yes'),
(189, 'DWF00001', 'Member Rgistration Fee Paid', 'f3d68e142181453eaa051487fc35f2a9  - Member Registration Fee was Paid with amount of 100 By : 1', '31st March, 2020', 'yes'),
(190, 'DWF00001', 'Member Rgistration Fee Paid', 'aa9dd8a8f35b78858c9de02de82d36c4  - Member Registration Fee was Paid with amount of 100 By : 1', '31st March, 2020', 'yes'),
(191, 'DWF00001', 'Member Rgistration Fee Paid', 'edfa41f51b26268446eaf790c5eac7b4  - Member Registration Fee was Paid with amount of 100 By : 1', '31st March, 2020', 'yes'),
(192, 'DWF00001', 'Member infomation updated', 'H198905202850 info Was updated  By :  1', '1st April, 2020', 'yes'),
(193, 'DWF00001', 'Member infomation updated', 'H198905202850 info Was updated  By :  1', '1st April, 2020', 'yes'),
(194, 'DWF00001', 'Member infomation updated', 'H198905202850 info Was updated  By :  1', '1st April, 2020', 'yes'),
(195, 'DWF00001', 'Member infomation updated', 'H198905202850 info Was updated  By :  1', '1st April, 2020', 'yes'),
(196, 'DWF00001', 'Member infomation updated', 'G199205104893 info Was updated  By :  1', '1st April, 2020', 'yes'),
(197, 'DWF00001', 'Member infomation updated', 'G199205104893 info Was updated  By :  1', '1st April, 2020', 'yes'),
(198, 'DWF00001', 'Monthly Contribution Paid', 'O198909106598 Monthly Contribution was Paid with amount of 250 By : 1', '1st April, 2020', 'yes'),
(199, 'DWF00001', 'Monthly Contribution Paid', 'O198909106598 Monthly Contribution was Paid with amount of 250 By : 1', '1st April, 2020', 'yes'),
(200, 'DWF00001', 'Monthly Contribution Paid', 'O198909106598 Monthly Contribution was Paid with amount of 250 By : 1', '1st April, 2020', 'yes'),
(201, 'DWF00001', 'Monthly Contribution Paid', 'O198909106598 Monthly Contribution was Paid with amount of 250 By : 1', '1st April, 2020', 'yes'),
(202, 'DWF00001', 'Monthly Contribution Paid', 'O198909106598 Monthly Contribution was Paid with amount of 250 By : 1', '1st April, 2020', 'yes'),
(203, '1', 'login', 'Login make suceesfully', 'April 1, 2020, 6:33 pm', 'yes'),
(204, 'DWF00001', 'Member Rgistration Fee Paid', 'da64883f2825ba6478dce6a8c9ecbf8d  - Member Registration Fee was Paid with amount of 100 By : 1', '1st April, 2020', 'yes'),
(205, 'DWF00001', 'Member Rgistration Fee Paid', '399b2b9804c57bf4fb2242f5dbdfd0be  - Member Registration Fee was Paid with amount of 100 By : 1', '1st April, 2020', 'yes'),
(206, 'DWF00001', 'Member Rgistration Fee Paid', 'da64883f2825ba6478dce6a8c9ecbf8d  - Member Registration Fee was Paid with amount of 100 By : 1', '1st April, 2020', 'yes'),
(207, 'DWF00001', 'Member Rgistration Fee Paid', '87ad20c24e4068d1cb47850ca6f6cc8e  - Member Registration Fee was Paid with amount of 100 By : 1', '1st April, 2020', 'yes'),
(208, 'DWF00001', 'Member Rgistration Fee Paid', '4ec6e239e5c086cae3d4181b650c8a9b  - Member Registration Fee was Paid with amount of 100 By : 1', '1st April, 2020', 'yes'),
(209, 'DWF00001', 'Member Rgistration Fee Paid', 'f3d68e142181453eaa051487fc35f2a9  - Member Registration Fee was Paid with amount of 100 By : 1', '1st April, 2020', 'yes'),
(210, 'DWF00001', 'Member Rgistration Fee Paid', 'aa9dd8a8f35b78858c9de02de82d36c4  - Member Registration Fee was Paid with amount of 100 By : 1', '1st April, 2020', 'yes'),
(211, 'DWF00001', 'Member Rgistration Fee Paid', 'edfa41f51b26268446eaf790c5eac7b4  - Member Registration Fee was Paid with amount of 100 By : 1', '1st April, 2020', 'yes'),
(212, 'DWF00001', 'Expenses had been  Added', ' had been added to the Expenses By :  1', '1st April, 2020', 'yes'),
(213, 'DWF00001', 'Expenses had been  Added', ' had been added to the Expenses By :  1', '1st April, 2020', 'yes'),
(214, 'DWF00001', 'Customer Added', 'A199605202720 Was added to the Customers list By : 1', '2nd April, 2020', 'yes'),
(215, 'DWF00001', 'Customer infomation updated', 'A199605202720 info Was updated  By :  1', '2nd April, 2020', 'yes'),
(216, 'DWF00001', 'Customer infomation updated', 'A199605202720 info Was updated  By :  1', '2nd April, 2020', 'yes'),
(217, '1', 'login', 'Login make suceesfully', 'April 8, 2020, 8:33 am', 'yes'),
(218, '1', 'Schedule Sharing og Dividend', 'O198909106598 was credited with 296.02 for 2020 dividend : 1', '8th April, 2020', 'yes'),
(219, '1', 'Schedule Sharing og Dividend', 'A199802203246 was credited with 119.89 for 2020 dividend : 1', '8th April, 2020', 'yes'),
(220, '1', 'Schedule Sharing og Dividend', 'A199905222020 was credited with 119.89 for 2020 dividend : 1', '8th April, 2020', 'yes'),
(221, '1', 'Schedule Sharing og Dividend', 'K199902028081 was credited with 121.22 for 2020 dividend : 1', '8th April, 2020', 'yes'),
(222, '1', 'Schedule Sharing og Dividend', 'K199902024754 was credited with 69.1 for 2020 dividend : 1', '8th April, 2020', 'yes'),
(223, '1', 'Schedule Sharing og Dividend', 'O197612219747 was credited with 222.81 for 2020 dividend : 1', '8th April, 2020', 'yes'),
(224, '1', 'Schedule Sharing og Dividend', 'O198909106598 was credited with 296.02 for 2020 dividend : 1', '8th April, 2020', 'yes'),
(225, '1', 'Schedule Sharing og Dividend', 'A199802203246 was credited with 119.89 for 2020 dividend : 1', '8th April, 2020', 'yes'),
(226, '1', 'Schedule Sharing og Dividend', 'A199905222020 was credited with 119.89 for 2020 dividend : 1', '8th April, 2020', 'yes'),
(227, '1', 'Schedule Sharing og Dividend', 'K199902028081 was credited with 121.22 for 2020 dividend : 1', '8th April, 2020', 'yes'),
(228, '1', 'Schedule Sharing og Dividend', 'K199902024754 was credited with 69.1 for 2020 dividend : 1', '8th April, 2020', 'yes'),
(229, '1', 'Schedule Sharing og Dividend', 'O197612219747 was credited with 222.81 for 2020 dividend : 1', '8th April, 2020', 'yes'),
(230, '1', 'Schedule Sharing og Dividend', 's202002252020 was credited with 39.36732268233 for 2020 dividend : 1', '8th April, 2020', 'yes'),
(231, '1', 'Schedule Sharing og Dividend', 'a202002272020 was credited with 157.46929072932 for 2020 dividend : 1', '8th April, 2020', 'yes'),
(232, '1', 'Schedule Sharing og Dividend', 'A199905222020 was credited with 295.25492011747 for 2020 dividend : 1', '8th April, 2020', 'yes'),
(233, '1', 'Schedule Sharing og Dividend', 'A202002194324 was credited with 236.20393609398 for 2020 dividend : 1', '8th April, 2020', 'yes'),
(234, '1', 'Schedule Sharing og Dividend', 'K199902023889 was credited with 255.88759743514 for 2020 dividend : 1', '8th April, 2020', 'yes'),
(235, '1', 'Schedule Sharing og Dividend', 'K199902024776 was credited with 157.46929072932 for 2020 dividend : 1', '8th April, 2020', 'yes'),
(236, '1', 'Schedule Sharing og Dividend', 'K199902028081 was credited with 137.78562938815 for 2020 dividend : 1', '8th April, 2020', 'yes'),
(237, '1', 'Schedule Sharing og Dividend', 'K199902024754 was credited with 137.78562938815 for 2020 dividend : 1', '8th April, 2020', 'yes'),
(238, '1', 'Schedule Sharing og Dividend', 'O197612219747 was credited with 157.46929072932 for 2020 dividend : 1', '8th April, 2020', 'yes'),
(239, '1', 'Schedule Sharing og Dividend', 'A199802203246 was credited with 118.10196804699 for 2020 dividend : 1', '8th April, 2020', 'yes'),
(240, '1', 'Schedule Sharing og Dividend', 'O198909106598 was credited with 541.30068688204 for 2020 dividend : 1', '8th April, 2020', 'yes'),
(241, 'DWF00001', 'Member infomation updated', 'H198905202850 info Was updated  By :  1', '8th April, 2020', 'yes'),
(242, 'DWF00001', 'Member infomation updated', 'G199205104893 info Was updated  By :  1', '8th April, 2020', 'yes'),
(243, 'DWF00001', 'Member infomation updated', '7d09348afdf7e6f40af8f474157ba2bf info Was updated  By :  1', '8th April, 2020', 'yes'),
(244, 'DWF00001', 'Member infomation updated', 'G199205104893 info Was updated  By :  1', '8th April, 2020', 'yes'),
(245, 'DWF00001', 'Member infomation updated', 'G199205104893 info Was updated  By :  1', '8th April, 2020', 'yes'),
(246, 'DWF00001', 'Member infomation updated', 'H198905202850 info Was updated  By :  1', '8th April, 2020', 'yes'),
(247, 'DWF00001', 'Next of kin info was updated', 'H198905202850 info Was updated  By :  1', '8th April, 2020', 'yes'),
(248, 'DWF00001', 'Next of kin info was updated', 'H198905202850 info Was updated  By :  1', '8th April, 2020', 'yes'),
(249, 'DWF00001', 'Next of kin info was updated', 'H198905202850 info Was updated  By :  1', '8th April, 2020', 'yes'),
(250, 'DWF00001', 'Next of kin info was updated', 'H198905202850 info Was updated  By :  1', '8th April, 2020', 'yes'),
(251, 'DWF00001', 'Next of kin info was updated', 'G199205104893 info Was updated  By :  1', '8th April, 2020', 'yes'),
(252, 'DWF00001', 'Next of kin info was updated', 'G199205104893 info Was updated  By :  1', '8th April, 2020', 'yes'),
(253, 'DWF00001', 'Next of kin info was updated', 'G199205104893 info Was updated  By :  1', '8th April, 2020', 'yes'),
(254, 'DWF00001', 'Member Deactivated', ' The Deactivation was done  By :  1', '8th April, 2020', 'yes'),
(255, 'DWF00001', 'Member Deactivated', ' The Deactivation was done  By :  1', '8th April, 2020', 'yes'),
(256, 'DWF00001', 'Member Deactivated', ' The Deactivation was done  By :  1', '8th April, 2020', 'yes'),
(257, 'DWF00001', 'Member Deactivated', ' The Deactivation was done  By :  1', '8th April, 2020', 'yes'),
(258, 'DWF00001', 'Member Deactivated', ' The Deactivation was done  By :  1', '8th April, 2020', 'yes'),
(259, 'DWF00001', 'Loan Paid', 'A loan of 140 was paid  By : 1', '9th April, 2020', 'yes'),
(260, 'M199204012020', 'Staff Added', 'M199204012020 Was added to the staff list By : 1', '9th April, 2020', 'yes'),
(261, 'DWF00001', 'Member Added', 'D199605256595 Was added to the Members list By : 1', '9th April, 2020', 'yes'),
(262, 'm199204012020', 'login', 'Login make suceesfully', 'April 9, 2020, 1:37 pm', 'yes'),
(263, 'm199204012020', 'login', 'Login make suceesfully', 'April 9, 2020, 1:43 pm', 'yes'),
(264, 'm199204012020', 'login', 'Login make suceesfully', 'April 9, 2020, 2:26 pm', 'yes'),
(265, 'm199204012020', 'login', 'Login make suceesfully', 'April 9, 2020, 2:29 pm', 'yes'),
(266, 'm199204012020', 'login', 'Login make suceesfully', 'April 9, 2020, 2:30 pm', 'yes'),
(267, 'm199204012020', 'login', 'Login make suceesfully', 'April 9, 2020, 2:32 pm', 'yes'),
(268, 'm199204012020', 'login', 'Login make suceesfully', 'April 9, 2020, 2:33 pm', 'yes'),
(269, 'm199204012020', 'login', 'Login make suceesfully', 'April 9, 2020, 2:34 pm', 'yes'),
(270, 'm199204012020', 'login', 'Login make suceesfully', 'April 9, 2020, 2:35 pm', 'yes'),
(271, 'm199204012020', 'login', 'Login make suceesfully', 'April 9, 2020, 2:37 pm', 'yes'),
(272, 'm199204012020', 'login', 'Login make suceesfully', 'April 9, 2020, 3:52 pm', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `who_can_login_in`
--

CREATE TABLE `who_can_login_in` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `real_password` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `last_login` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'offline',
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `confirm` varchar(3) NOT NULL DEFAULT 'no',
  `done_by` varchar(50) NOT NULL,
  `active` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `who_can_login_in`
--

INSERT INTO `who_can_login_in` (`id`, `username`, `password`, `real_password`, `type`, `last_login`, `status`, `date_added`, `confirm`, `done_by`, `active`) VALUES
(1, 'M199204012020', '9c96421552c4976662e6a3662a872b87', 'M199204012020', '1', '2020-04-09 13:52:48', 'online', '2020-04-09 11:06:36', 'yes', '1', 'yes'),
(2, 'D199605256595', 'a53346d82cd00e867cfd34f7cc42d089', 'D199605256595', '2', '2020-04-09 15:03:43', 'online', '2020-04-09 11:01:45', 'yes', '1', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_bank_statement`
--
ALTER TABLE `company_bank_statement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_expenses`
--
ALTER TABLE `company_expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_returnship`
--
ALTER TABLE `company_returnship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_revenue`
--
ALTER TABLE `company_revenue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_share_dividend`
--
ALTER TABLE `company_share_dividend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_share_dividend_list`
--
ALTER TABLE `company_share_dividend_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_activities`
--
ALTER TABLE `customer_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_interest`
--
ALTER TABLE `customer_interest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employment_type`
--
ALTER TABLE `employment_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loans_all`
--
ALTER TABLE `loans_all`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loans_pay`
--
ALTER TABLE `loans_pay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_collects`
--
ALTER TABLE `loan_collects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members_activities`
--
ALTER TABLE `members_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members_contributions`
--
ALTER TABLE `members_contributions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members_deactivated`
--
ALTER TABLE `members_deactivated`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_contribution_history`
--
ALTER TABLE `member_contribution_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_interest`
--
ALTER TABLE `member_interest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payroll_members`
--
ALTER TABLE `payroll_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payroll_positions`
--
ALTER TABLE `payroll_positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_fees`
--
ALTER TABLE `registration_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_dividen`
--
ALTER TABLE `schedule_dividen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_info`
--
ALTER TABLE `school_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_activities`
--
ALTER TABLE `staff_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `who_can_login_in`
--
ALTER TABLE `who_can_login_in`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_bank_statement`
--
ALTER TABLE `company_bank_statement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_expenses`
--
ALTER TABLE `company_expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company_returnship`
--
ALTER TABLE `company_returnship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company_revenue`
--
ALTER TABLE `company_revenue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `company_share_dividend`
--
ALTER TABLE `company_share_dividend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `company_share_dividend_list`
--
ALTER TABLE `company_share_dividend_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_activities`
--
ALTER TABLE `customer_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `customer_interest`
--
ALTER TABLE `customer_interest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employment_type`
--
ALTER TABLE `employment_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loans_all`
--
ALTER TABLE `loans_all`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `loans_pay`
--
ALTER TABLE `loans_pay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `loan_collects`
--
ALTER TABLE `loan_collects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `members_activities`
--
ALTER TABLE `members_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `members_contributions`
--
ALTER TABLE `members_contributions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `members_deactivated`
--
ALTER TABLE `members_deactivated`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member_contribution_history`
--
ALTER TABLE `member_contribution_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member_interest`
--
ALTER TABLE `member_interest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payroll_members`
--
ALTER TABLE `payroll_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payroll_positions`
--
ALTER TABLE `payroll_positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration_fees`
--
ALTER TABLE `registration_fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schedule_dividen`
--
ALTER TABLE `schedule_dividen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `school_info`
--
ALTER TABLE `school_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff_activities`
--
ALTER TABLE `staff_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=273;

--
-- AUTO_INCREMENT for table `who_can_login_in`
--
ALTER TABLE `who_can_login_in`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
