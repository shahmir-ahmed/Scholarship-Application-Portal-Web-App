-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2023 at 02:21 PM
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
-- Database: `scholarship-management-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Hershel Bode V', 'branson.rosenbaum@example.net', 'password', '2023-02-19 08:14:53', '2023-02-19 15:37:55'),
(2, 'Lulu Lehner', 'damian.hagenes@example.com', 'password', '2023-02-19 08:14:53', '2023-02-19 15:37:48'),
(3, 'Clementine Emmerich', 'preinger@example.org', 'password', '2023-02-19 08:14:53', '2023-02-19 15:08:31'),
(4, 'Mrs. Mara Conn', 'belle.bashirian@example.net', 'password', '2023-02-19 08:14:53', '2023-02-19 15:37:42'),
(5, 'Adriel Koss DVM', 'thompson.ethelyn@example.com', 'password', '2023-02-19 08:14:53', '2023-02-19 15:37:59');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_asset_monthly_incomes`
--

CREATE TABLE `applicant_asset_monthly_incomes` (
  `applicant_asset_monthly_incomes_id` int(11) NOT NULL,
  `applicant_asset_monthly_incomes_type` varchar(255) NOT NULL,
  `applicant_asset_monthly_incomes_to_father` varchar(255) NOT NULL,
  `applicant_asset_monthly_incomes_to_mother` varchar(255) NOT NULL,
  `applicant_asset_monthly_incomes_to_spouse` varchar(255) NOT NULL,
  `applicant_asset_monthly_incomes_to_self` varchar(255) NOT NULL,
  `applicant_asset_monthly_incomes_to_other` varchar(255) NOT NULL,
  `applicant_asset_monthly_incomes_user_id` int(10) UNSIGNED NOT NULL,
  `applicant_asset_monthly_incomes_scholarship_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicant_asset_monthly_incomes`
--

INSERT INTO `applicant_asset_monthly_incomes` (`applicant_asset_monthly_incomes_id`, `applicant_asset_monthly_incomes_type`, `applicant_asset_monthly_incomes_to_father`, `applicant_asset_monthly_incomes_to_mother`, `applicant_asset_monthly_incomes_to_spouse`, `applicant_asset_monthly_incomes_to_self`, `applicant_asset_monthly_incomes_to_other`, `applicant_asset_monthly_incomes_user_id`, `applicant_asset_monthly_incomes_scholarship_id`, `created_at`, `updated_at`) VALUES
(1, 'Bank Deposites', '345345', '67', '778', '9797', '98', 8, 7, '2023-05-21 04:52:31', '2023-05-21 04:52:31'),
(2, 'Share/Securities', '1', '2', '3', '4', '5', 8, 10, '2023-05-21 07:27:39', '2023-05-21 07:27:39');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_education_records`
--

CREATE TABLE `applicant_education_records` (
  `applicant_education_records_id` int(11) NOT NULL,
  `applicant_education_records_level_of_study` varchar(255) NOT NULL,
  `applicant_education_records_institution_name` varchar(255) NOT NULL,
  `applicant_education_records_per_month_fees` varchar(255) NOT NULL,
  `applicant_education_records_from_date` varchar(255) NOT NULL,
  `applicant_education_records_to_date` varchar(255) NOT NULL,
  `applicant_education_records_gpa_division` varchar(255) NOT NULL,
  `applicant_education_records_cgpa_percentage` varchar(255) NOT NULL,
  `applicant_education_records_user_id` int(10) UNSIGNED NOT NULL,
  `applicant_education_records_scholarship_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicant_education_records`
--

INSERT INTO `applicant_education_records` (`applicant_education_records_id`, `applicant_education_records_level_of_study`, `applicant_education_records_institution_name`, `applicant_education_records_per_month_fees`, `applicant_education_records_from_date`, `applicant_education_records_to_date`, `applicant_education_records_gpa_division`, `applicant_education_records_cgpa_percentage`, `applicant_education_records_user_id`, `applicant_education_records_scholarship_id`, `created_at`, `updated_at`) VALUES
(1, 'Secondary Education', 'Aut doloribus error ', '50000', '1996-11-11', '1983-08-02', '4.0', '3.7', 8, 7, '2023-05-21 05:23:40', '2023-05-21 05:23:40'),
(2, 'Bachelors', 'Sequi eaque aliquip ', '1', '2018-08-01', '2015-02-17', '4.0', '3.7', 8, 10, '2023-05-21 07:27:39', '2023-05-21 07:27:39'),
(3, 'Intermediate', 'Totam sint iure at ', '2', '1994-03-07', '1971-12-14', 'A', '76%', 8, 10, '2023-05-21 07:27:39', '2023-05-21 07:27:39'),
(4, 'Secondary Education', 'Porro qui aperiam do', '3', '2000-09-14', '2020-04-11', 'A1', '86%', 8, 10, '2023-05-21 07:27:39', '2023-05-21 07:27:39');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_employment_details`
--

CREATE TABLE `applicant_employment_details` (
  `applicant_employment_id` int(10) UNSIGNED NOT NULL,
  `applicant_employment_designation` varchar(255) NOT NULL,
  `applicant_employment_company_name` varchar(255) NOT NULL,
  `applicant_employment_gross_income` varchar(255) NOT NULL,
  `applicant_employment_monthly_income` varchar(255) NOT NULL,
  `applicant_employment_telephone_number` varchar(255) NOT NULL,
  `applicant_employment_email` varchar(255) NOT NULL,
  `applicant_employment_user_id` int(10) UNSIGNED NOT NULL,
  `applicant_employment_scholarship_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicant_employment_details`
--

INSERT INTO `applicant_employment_details` (`applicant_employment_id`, `applicant_employment_designation`, `applicant_employment_company_name`, `applicant_employment_gross_income`, `applicant_employment_monthly_income`, `applicant_employment_telephone_number`, `applicant_employment_email`, `applicant_employment_user_id`, `applicant_employment_scholarship_id`, `created_at`, `updated_at`) VALUES
(1, 'Junior', 'OINA', '4500', '3000', '051-1234567', 'email@yahoo.com', 8, 4, '2023-03-19 04:34:42', '2023-03-19 04:34:42'),
(2, 'Do ad quis illum ex', 'Excepturi labore aut', 'Quis non ex culpa om', 'Voluptate eos volup', 'Voluptatem sed id as', 'Earum voluptates qui', 8, 7, '2023-05-21 02:44:45', '2023-05-21 02:44:45');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_family_accomodation_expenditures`
--

CREATE TABLE `applicant_family_accomodation_expenditures` (
  `applicant_family_accomodation_expenditures_id` int(11) NOT NULL,
  `applicant_family_accomodation_expenditures_type` varchar(255) NOT NULL,
  `applicant_family_accomodation_expenditures_status` varchar(255) NOT NULL,
  `applicant_family_accomodation_expenditures_rent_payment_type` varchar(255) NOT NULL,
  `applicant_family_accomodation_expenditures_plot_size` varchar(255) NOT NULL,
  `applicant_family_accomodation_expenditures_address` varchar(255) NOT NULL,
  `applicant_family_accomodation_expenditures_total_bed_rooms` varchar(255) NOT NULL,
  `applicant_family_accomodation_expenditures_total_ACs` varchar(255) NOT NULL,
  `applicant_family_accomodation_expenditures_monthly_rent` varchar(255) NOT NULL,
  `applicant_family_accomodation_expenditures_annual_rent_expense` varchar(255) NOT NULL,
  `applicant_family_accomodation_expenditures_total_rent_expense` varchar(255) NOT NULL,
  `applicant_family_accomodation_expenditures_user_id` int(10) UNSIGNED NOT NULL,
  `applicant_family_accomodation_expenditures_scholarship_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicant_family_accomodation_expenditures`
--

INSERT INTO `applicant_family_accomodation_expenditures` (`applicant_family_accomodation_expenditures_id`, `applicant_family_accomodation_expenditures_type`, `applicant_family_accomodation_expenditures_status`, `applicant_family_accomodation_expenditures_rent_payment_type`, `applicant_family_accomodation_expenditures_plot_size`, `applicant_family_accomodation_expenditures_address`, `applicant_family_accomodation_expenditures_total_bed_rooms`, `applicant_family_accomodation_expenditures_total_ACs`, `applicant_family_accomodation_expenditures_monthly_rent`, `applicant_family_accomodation_expenditures_annual_rent_expense`, `applicant_family_accomodation_expenditures_total_rent_expense`, `applicant_family_accomodation_expenditures_user_id`, `applicant_family_accomodation_expenditures_scholarship_id`, `created_at`, `updated_at`) VALUES
(1, 'Town House', 'Self/Family Owned', 'Self', 'Incididunt ratione f', 'Rerum tempora eius q', '4-6', '0-0', 'Est qui enim ut maio', 'Nostrud deleniti ut ', 'Voluptatem reiciend', 8, 7, '2023-05-21 04:54:29', '2023-05-21 04:54:29'),
(2, 'Village House', 'Employee/Govt/Owned', 'Self', 'Amet voluptas sed n', 'Recusandae Ratione ', '1-2', '4-6', '1', '2', '3', 8, 10, '2023-05-21 07:27:39', '2023-05-21 07:27:39'),
(3, 'Town House', 'Bungalow', 'Self', 'Sunt dolore quis acc', 'Totam omnis dicta es', '1-2', '2-4', 'Eligendi dignissimos', 'Sit ab officia nostr', 'Dolor incidunt veli', 8, 1, '2023-05-24 15:01:26', '2023-05-24 15:01:26'),
(4, 'Town House', 'Bungalow', 'Other', 'Cupidatat quia qui q', 'Veniam eiusmod eaqu', '4-6', '2-4', 'Repellendus Dolor d', 'Quis quis corrupti ', 'Nulla et esse facil', 10, 1, '2023-05-28 13:52:39', '2023-05-28 13:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_family_members`
--

CREATE TABLE `applicant_family_members` (
  `applicant_family_members_id` int(10) UNSIGNED NOT NULL,
  `applicant_family_members_name` varchar(255) NOT NULL,
  `applicant_family_members_martial_status` varchar(255) NOT NULL,
  `applicant_family_members_relation` varchar(255) NOT NULL,
  `applicant_family_members_remarks` varchar(255) NOT NULL,
  `applicant_family_members_user_id` int(10) UNSIGNED NOT NULL,
  `applicant_family_members_scholarship_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicant_family_members`
--

INSERT INTO `applicant_family_members` (`applicant_family_members_id`, `applicant_family_members_name`, `applicant_family_members_martial_status`, `applicant_family_members_relation`, `applicant_family_members_remarks`, `applicant_family_members_user_id`, `applicant_family_members_scholarship_id`, `created_at`, `updated_at`) VALUES
(1, 'Cupiditate ut nulla ', 'Single', 'Eaque excepturi eos', 'Similique qui invent', 8, 7, '2023-05-21 02:12:11', '2023-05-21 02:12:11'),
(2, 'Neque ut ut et saepe', 'Married', 'Recusandae Ipsam ex', 'Magni voluptatem fa', 8, 7, '2023-05-21 02:12:11', '2023-05-21 02:12:11'),
(3, 'Voluptatem Molestia', 'Married', 'Alias mollit dolor b', 'Voluptas sit id om', 8, 7, '2023-05-21 04:03:43', '2023-05-21 04:03:43'),
(4, 'Voluptatem Molestia', 'Married', 'Alias mollit dolor b', 'Voluptas sit id om', 8, 7, '2023-05-21 04:04:21', '2023-05-21 04:04:21'),
(5, 'Optio enim qui null', 'Married', 'Alias ipsam lorem do', 'Est sequi dolores do', 8, 10, '2023-05-21 07:27:38', '2023-05-21 07:27:38'),
(6, 'Sunt facilis est occ', 'Single', 'Esse ad incidunt a', 'Eum accusantium cumq', 8, 10, '2023-05-21 07:27:38', '2023-05-21 07:27:38'),
(7, 'Sed dignissimos in o', 'Single', 'Cupidatat est volupt', 'Et est provident as', 8, 10, '2023-05-21 07:27:38', '2023-05-21 07:27:38'),
(8, 'Similique quis dolor', 'Single', 'Odit exercitationem ', 'Ut qui cillum quo sa', 10, 1, '2023-05-28 13:49:09', '2023-05-28 13:49:09'),
(9, 'Non culpa vel provi', 'Married', 'Natus debitis corrup', 'Aliqua Quibusdam in', 10, 1, '2023-05-28 13:52:39', '2023-05-28 13:52:39'),
(10, 'Temporibus veritatis', 'Married', 'Aut aliquam officia ', 'Doloribus dolores ve', 10, 1, '2023-05-28 13:52:39', '2023-05-28 13:52:39'),
(11, 'Minim amet aut labo', 'Single', 'Est aut saepe labori', 'Vitae et perferendis', 10, 1, '2023-05-28 13:52:39', '2023-05-28 13:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_family_member_currently_studying_details`
--

CREATE TABLE `applicant_family_member_currently_studying_details` (
  `applicant_family_member_currently_studying_detail_id` int(11) NOT NULL,
  `applicant_family_member_currently_studying_detail_name` varchar(255) NOT NULL,
  `applicant_family_member_currently_studying_detail_relation` varchar(255) NOT NULL,
  `applicant_family_member_currently_studying_detail_institution` varchar(255) NOT NULL,
  `applicant_family_member_currently_studying_detail_fpm` varchar(255) NOT NULL,
  `applicant_family_member_currently_studying_detail_user_id` int(10) UNSIGNED NOT NULL,
  `applicant_family_member_currently_studying_detail_scholarship_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicant_family_member_currently_studying_details`
--

INSERT INTO `applicant_family_member_currently_studying_details` (`applicant_family_member_currently_studying_detail_id`, `applicant_family_member_currently_studying_detail_name`, `applicant_family_member_currently_studying_detail_relation`, `applicant_family_member_currently_studying_detail_institution`, `applicant_family_member_currently_studying_detail_fpm`, `applicant_family_member_currently_studying_detail_user_id`, `applicant_family_member_currently_studying_detail_scholarship_id`, `created_at`, `updated_at`) VALUES
(1, 'Sunt omnis laudantiu', 'Qui consequuntur pra', 'Pariatur Iure autem', '45645', 8, 7, '2023-05-21 04:33:31', '2023-05-21 04:33:31'),
(2, 'In esse quis ex et a', 'Aut quasi pariatur ', 'Irure deserunt et do', '20000', 8, 10, '2023-05-21 07:27:38', '2023-05-21 07:27:38');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_family_member_earnings`
--

CREATE TABLE `applicant_family_member_earnings` (
  `applicant_family_member_earnings_id` int(10) UNSIGNED NOT NULL,
  `applicant_family_member_earnings_member_name` varchar(255) NOT NULL,
  `applicant_family_member_earnings_member_relation` varchar(255) NOT NULL,
  `applicant_family_member_earnings_member_occupation` varchar(255) NOT NULL,
  `applicant_family_member_earnings_member_organization` varchar(255) NOT NULL,
  `applicant_family_member_earnings_member_designation` varchar(255) NOT NULL,
  `applicant_family_member_earnings_member_monthly_income` varchar(255) NOT NULL,
  `applicant_family_member_earnings_member_remarks` varchar(255) NOT NULL,
  `applicant_family_member_earnings_user_id` int(10) UNSIGNED NOT NULL,
  `applicant_family_member_earnings_scholarship_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicant_family_member_earnings`
--

INSERT INTO `applicant_family_member_earnings` (`applicant_family_member_earnings_id`, `applicant_family_member_earnings_member_name`, `applicant_family_member_earnings_member_relation`, `applicant_family_member_earnings_member_occupation`, `applicant_family_member_earnings_member_organization`, `applicant_family_member_earnings_member_designation`, `applicant_family_member_earnings_member_monthly_income`, `applicant_family_member_earnings_member_remarks`, `applicant_family_member_earnings_user_id`, `applicant_family_member_earnings_scholarship_id`, `created_at`, `updated_at`) VALUES
(1, 'Assumenda quos est u', 'Harum dolor est ab ', 'Irure qui quo dolore', 'Quaerat sint pariat', 'Animi est numquam e', '545345', 'Sit Nam excepturi am', 8, 7, '2023-05-21 04:07:03', '2023-05-21 04:07:03'),
(2, 'Ut voluptatum corrup', 'Voluptatem qui velit', 'Rerum dolores natus ', 'Assumenda pariatur ', 'Amet quibusdam vel ', '3434', 'In veniam accusamus', 8, 7, '2023-05-21 04:07:03', '2023-05-21 04:07:03'),
(3, 'Assumenda quos est u', 'Harum dolor est ab ', 'Irure qui quo dolore', 'Quaerat sint pariat', 'Animi est numquam e', '545345', 'Sit Nam excepturi am', 8, 7, '2023-05-21 04:08:30', '2023-05-21 04:08:30'),
(4, 'Ut voluptatum corrup', 'Voluptatem qui velit', 'Rerum dolores natus ', 'Assumenda pariatur ', 'Amet quibusdam vel ', '3434', 'In veniam accusamus', 8, 7, '2023-05-21 04:08:30', '2023-05-21 04:08:30'),
(5, 'Dolor necessitatibus', 'Officiis omnis offic', 'Voluptatum mollit ma', 'Dolorum praesentium ', 'Distinctio Illum c', '70000', 'Tempor in officia se', 8, 10, '2023-05-21 07:27:38', '2023-05-21 07:27:38'),
(6, 'Veniam saepe evenie', 'Voluptatum reprehend', 'Odit quam et quia sa', 'Et rerum ipsam volup', 'Itaque est minim rec', '364682', 'Molestiae ab non hic', 10, 1, '2023-05-28 13:49:09', '2023-05-28 13:49:09');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_family_monthly_incomes`
--

CREATE TABLE `applicant_family_monthly_incomes` (
  `applicant_family_monthly_incomes_id` int(11) NOT NULL,
  `applicant_family_monthly_incomes_member_name` varchar(255) NOT NULL,
  `applicant_family_monthly_incomes_member_relation` varchar(255) NOT NULL,
  `applicant_family_monthly_incomes_member_monthly_asset_income` varchar(255) NOT NULL,
  `applicant_family_monthly_incomes_member_monthly_gross_income` varchar(255) NOT NULL,
  `applicant_family_monthly_incomes_member_monthly_net_income` varchar(255) NOT NULL,
  `applicant_family_monthly_incomes_user_id` int(10) UNSIGNED NOT NULL,
  `applicant_family_monthly_incomes_scholarship_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicant_family_monthly_incomes`
--

INSERT INTO `applicant_family_monthly_incomes` (`applicant_family_monthly_incomes_id`, `applicant_family_monthly_incomes_member_name`, `applicant_family_monthly_incomes_member_relation`, `applicant_family_monthly_incomes_member_monthly_asset_income`, `applicant_family_monthly_incomes_member_monthly_gross_income`, `applicant_family_monthly_incomes_member_monthly_net_income`, `applicant_family_monthly_incomes_user_id`, `applicant_family_monthly_incomes_scholarship_id`, `created_at`, `updated_at`) VALUES
(1, 'Ipsum minim et est i', 'Ut labore aliquip no', '345346', '343345', '345345', 8, 7, '2023-05-21 04:50:59', '2023-05-21 04:50:59'),
(2, 'Asperiores iste repr', 'Sunt sint alias quib', '345345', '54345', '45345', 8, 7, '2023-05-21 04:50:59', '2023-05-21 04:50:59'),
(3, 'Occaecat ut rem est ', 'Quos duis commodo qu', '50000', '50000', '50000', 8, 10, '2023-05-21 07:27:39', '2023-05-21 07:27:39');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_father_details`
--

CREATE TABLE `applicant_father_details` (
  `applicant_father_details_id` int(11) NOT NULL,
  `applicant_father_details_name` varchar(255) NOT NULL,
  `applicant_father_details_CNIC` varchar(255) NOT NULL,
  `applicant_father_details_vital_status` varchar(255) NOT NULL,
  `applicant_father_details_job_status` varchar(255) NOT NULL,
  `applicant_father_details_martial_status` varchar(255) NOT NULL,
  `applicant_father_details_mobile_number` varchar(255) NOT NULL,
  `applicant_father_details_occupation` varchar(255) NOT NULL,
  `applicant_father_details_company_name` varchar(255) NOT NULL,
  `applicant_father_details_NTS` varchar(255) NOT NULL,
  `applicant_father_details_designation_grade` varchar(255) NOT NULL,
  `applicant_father_details_monthly_income` varchar(255) NOT NULL,
  `applicant_father_details_gross_income` varchar(255) NOT NULL,
  `applicant_father_details_applicant_name` varchar(255) NOT NULL,
  `applicant_father_details_applicant_relation` varchar(255) NOT NULL,
  `applicant_father_details_applicant_occupation_designation` varchar(255) NOT NULL,
  `applicant_father_details_applicant_monthly_financial_support` varchar(255) NOT NULL,
  `applicant_father_details_user_id` int(10) UNSIGNED NOT NULL,
  `applicant_father_details_scholarship_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicant_father_details`
--

INSERT INTO `applicant_father_details` (`applicant_father_details_id`, `applicant_father_details_name`, `applicant_father_details_CNIC`, `applicant_father_details_vital_status`, `applicant_father_details_job_status`, `applicant_father_details_martial_status`, `applicant_father_details_mobile_number`, `applicant_father_details_occupation`, `applicant_father_details_company_name`, `applicant_father_details_NTS`, `applicant_father_details_designation_grade`, `applicant_father_details_monthly_income`, `applicant_father_details_gross_income`, `applicant_father_details_applicant_name`, `applicant_father_details_applicant_relation`, `applicant_father_details_applicant_occupation_designation`, `applicant_father_details_applicant_monthly_financial_support`, `applicant_father_details_user_id`, `applicant_father_details_scholarship_id`, `created_at`, `updated_at`) VALUES
(1, 'Dolorum error ut cup', '42301-6118039-5', 'Deceased', 'Alive', 'Single', '03213764358', 'Explicabo Culpa se', 'Cillum quos quaerat ', 'Pariatur Omnis et n', 'Sapiente est est qui', '786786', '89789', 'Corporis qui sequi a', 'Aut ex ut pariatur ', 'Laboriosam quo fuga', '57687', 8, 7, '2023-05-21 04:39:46', '2023-05-21 04:39:46'),
(2, 'Fuga Voluptatem Re', '42301-7454929-1', 'Deceased', 'Retired', 'Single', '03213764358', 'Tempor pariatur Rec', 'Nihil enim in cumque', 'Est suscipit eveniet', 'Ut cupiditate itaque', '32344', '34345345', 'Vel dolores dolore q', 'In est porro quae qu', 'Pariatur Quis incid', '234234234', 8, 7, '2023-05-21 04:44:53', '2023-05-21 04:44:53'),
(3, 'Sapiente mollit offi', '42301-6118039-5', 'Alive', 'Retired', 'Married', '03213764358', 'Laborum Rerum venia', 'Quia sequi voluptate', 'Nisi quae accusantiu', 'Maiores fugit moles', '70000', '70000', 'Impedit consequat ', 'Est quam ipsum est s', 'Fugiat debitis opti', '20000', 8, 10, '2023-05-21 07:27:39', '2023-05-21 07:27:39'),
(4, 'Amet vero lorem qui', 'Fugiat delectus ve', 'Deceased', 'Retired', 'Single', 'Et adipisci incidunt', 'Deserunt amet anim ', 'Veritatis quis facil', 'Omnis aliquid magni ', 'Itaque rerum laboris', 'Non enim reiciendis ', 'Proident ex debitis', 'Excepturi qui autem ', 'Proident accusamus ', 'Aute laboris consequ', 'Quia sed est nisi e', 8, 1, '2023-05-24 15:01:26', '2023-05-24 15:01:26'),
(6, 'Quo non exercitation', 'Distinctio Mollitia', 'Alive', 'Business Owner', 'Single', 'Nemo aperiam vero nu', 'Minim modi mollitia ', 'Officiis quia tempor', 'Quisquam minima eum ', 'Rerum non et ipsum i', 'Id sint unde nisi ', 'Beatae eum dolorem a', 'Quae numquam illum ', 'Aperiam anim ipsum ', 'In aute sapiente ani', 'Qui tenetur ipsam es', 10, 1, '2023-05-28 13:52:39', '2023-05-28 13:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_loans`
--

CREATE TABLE `applicant_loans` (
  `applicant_loans_id` int(11) NOT NULL,
  `applicant_loans_loan_one_reason` varchar(255) NOT NULL,
  `applicant_loans_loan_two_reason` varchar(255) NOT NULL,
  `applicant_loans_loan_three_reason` varchar(255) NOT NULL,
  `applicant_loans_user_id` int(10) UNSIGNED NOT NULL,
  `applicant_loans_scholarship_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicant_loans`
--

INSERT INTO `applicant_loans` (`applicant_loans_id`, `applicant_loans_loan_one_reason`, `applicant_loans_loan_two_reason`, `applicant_loans_loan_three_reason`, `applicant_loans_user_id`, `applicant_loans_scholarship_id`, `created_at`, `updated_at`) VALUES
(1, 's1', 's2', 's3', 8, 7, '2023-05-21 05:22:53', '2023-05-21 05:22:53'),
(2, 'Anim adipisci est q', 'Ipsum ab aliquid nat', 'Illo facere et sed a', 10, 1, '2023-05-28 13:52:39', '2023-05-28 13:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_other_accomodation_expenditures`
--

CREATE TABLE `applicant_other_accomodation_expenditures` (
  `applicant_other_accomodation_expenditures_id` int(11) NOT NULL,
  `applicant_other_accomodation_expenditures_telephone` varchar(255) NOT NULL,
  `applicant_other_accomodation_expenditures_electricity` varchar(255) NOT NULL,
  `applicant_other_accomodation_expenditures_gas` varchar(255) NOT NULL,
  `applicant_other_accomodation_expenditures_water` varchar(255) NOT NULL,
  `applicant_other_accomodation_expenditures_education` varchar(255) NOT NULL,
  `applicant_other_accomodation_expenditures_accomodation` varchar(255) NOT NULL,
  `applicant_other_accomodation_expenditures_utilities` varchar(255) NOT NULL,
  `applicant_other_accomodation_expenditures_medical` varchar(255) NOT NULL,
  `applicant_other_accomodation_expenditures_misc` varchar(255) NOT NULL,
  `applicant_other_accomodation_expenditures_user_id` int(10) UNSIGNED NOT NULL,
  `applicant_other_accomodation_expenditures_scholarship_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicant_other_accomodation_expenditures`
--

INSERT INTO `applicant_other_accomodation_expenditures` (`applicant_other_accomodation_expenditures_id`, `applicant_other_accomodation_expenditures_telephone`, `applicant_other_accomodation_expenditures_electricity`, `applicant_other_accomodation_expenditures_gas`, `applicant_other_accomodation_expenditures_water`, `applicant_other_accomodation_expenditures_education`, `applicant_other_accomodation_expenditures_accomodation`, `applicant_other_accomodation_expenditures_utilities`, `applicant_other_accomodation_expenditures_medical`, `applicant_other_accomodation_expenditures_misc`, `applicant_other_accomodation_expenditures_user_id`, `applicant_other_accomodation_expenditures_scholarship_id`, `created_at`, `updated_at`) VALUES
(7, '65675', '786', '87678', '78', '6786', '786', '786', '786', '786', 8, 7, '2023-05-21 05:18:20', '2023-05-21 05:18:20'),
(8, '1', '2', '3', '4', '5', '6', '7', '8', '9', 8, 10, '2023-05-21 07:27:39', '2023-05-21 07:27:39'),
(9, '+1 (737) 757-2162', 'Voluptatibus adipisi', 'Necessitatibus repre', 'Optio laboris corru', 'Dolorem vitae quo au', 'Sunt fugiat veniam', 'Error et odio cum ip', 'Quae nisi non ut ver', 'Duis laboriosam eni', 8, 1, '2023-05-24 15:01:26', '2023-05-24 15:01:26'),
(10, '+1 (798) 731-6129', 'Eiusmod voluptatibus', 'In magna iste maxime', 'Deserunt dolorum a a', 'Esse dolore dignissi', 'Rerum perferendis na', 'Mollit quo facere ex', 'Saepe sunt rerum ven', 'Ut ut rerum assumend', 10, 1, '2023-05-28 13:52:39', '2023-05-28 13:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_other_assets`
--

CREATE TABLE `applicant_other_assets` (
  `applicant_other_assets_id` int(11) NOT NULL,
  `applicant_other_assets_transport_type` varchar(255) NOT NULL,
  `applicant_other_assets_model_no` varchar(255) NOT NULL,
  `applicant_other_assets_engine_capacity` varchar(255) NOT NULL,
  `applicant_other_assets_reg_no` varchar(255) NOT NULL,
  `applicant_other_assets_ownership_period` varchar(255) NOT NULL,
  `applicant_other_assets_user_id` int(10) UNSIGNED NOT NULL,
  `applicant_other_assets_scholarship_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicant_other_assets`
--

INSERT INTO `applicant_other_assets` (`applicant_other_assets_id`, `applicant_other_assets_transport_type`, `applicant_other_assets_model_no`, `applicant_other_assets_engine_capacity`, `applicant_other_assets_reg_no`, `applicant_other_assets_ownership_period`, `applicant_other_assets_user_id`, `applicant_other_assets_scholarship_id`, `created_at`, `updated_at`) VALUES
(1, 'Motor', '2002', 'Reiciendis reprehend', 'AMG-510', 'Sed beatae mollitia ', 8, 7, '2023-05-21 05:20:38', '2023-05-21 05:20:38'),
(2, 'Car', '2002', 'Sed rerum provident', 'AMG-510', 'Quia alias unde amet', 8, 10, '2023-05-21 07:27:39', '2023-05-21 07:27:39'),
(3, 'Motor', '2014', 'Totam ea corrupti f', 'RIP-1196', 'Voluptatem non ipsum', 8, 10, '2023-05-21 07:27:39', '2023-05-21 07:27:39'),
(4, 'Motor', '2022', 'Distinctio Id excep', 'CBR-669', 'Amet aute est quod ', 8, 10, '2023-05-21 07:27:39', '2023-05-21 07:27:39');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_other_family_expenditures`
--

CREATE TABLE `applicant_other_family_expenditures` (
  `applicant_other_family_expenditures_id` int(11) NOT NULL,
  `applicant_other_family_expenditures_telephone` varchar(255) NOT NULL,
  `applicant_other_family_expenditures_electricity` varchar(255) NOT NULL,
  `applicant_other_family_expenditures_gas` varchar(255) NOT NULL,
  `applicant_other_family_expenditures_water` varchar(255) NOT NULL,
  `applicant_other_family_expenditures_education` varchar(255) NOT NULL,
  `applicant_other_family_expenditures_accomodation` varchar(255) NOT NULL,
  `applicant_other_family_expenditures_utilities` varchar(255) NOT NULL,
  `applicant_other_family_expenditures_medical` varchar(255) NOT NULL,
  `applicant_other_family_expenditures_misc` varchar(255) NOT NULL,
  `applicant_other_family_expenditures_user_id` int(10) UNSIGNED NOT NULL,
  `applicant_other_family_expenditures_scholarship_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_other_scholarships`
--

CREATE TABLE `applicant_other_scholarships` (
  `applicant_other_scholarships_id` int(11) NOT NULL,
  `applicant_other_scholarships_institution_name` varchar(255) NOT NULL,
  `applicant_other_scholarships_name` varchar(255) NOT NULL,
  `applicant_other_scholarships_total_amount` varchar(255) NOT NULL,
  `applicant_other_scholarships_total_period` varchar(255) NOT NULL,
  `applicant_other_scholarships_class_level_granted` varchar(255) NOT NULL,
  `applicant_other_scholarships_purpose` varchar(255) NOT NULL,
  `applicant_other_scholarships_user_id` int(10) UNSIGNED NOT NULL,
  `applicant_other_scholarships_scholarship_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicant_other_scholarships`
--

INSERT INTO `applicant_other_scholarships` (`applicant_other_scholarships_id`, `applicant_other_scholarships_institution_name`, `applicant_other_scholarships_name`, `applicant_other_scholarships_total_amount`, `applicant_other_scholarships_total_period`, `applicant_other_scholarships_class_level_granted`, `applicant_other_scholarships_purpose`, `applicant_other_scholarships_user_id`, `applicant_other_scholarships_scholarship_id`, `created_at`, `updated_at`) VALUES
(1, 'Aut quia esse eiusm', 'Voluptatem Quis sin', 'Amet quisquam quia ', 'Dolor corrupti qui ', 'Vel unde dolores sin', 'Cumque sunt tempora ', 8, 7, '2023-05-21 05:24:08', '2023-05-21 05:24:08'),
(2, 'Et ea molestiae pari', 'Nobis ea ipsum volu', '986876', '4', 'Sint dolorem nulla ', 'Ea ipsam deserunt qu', 10, 1, '2023-05-28 13:52:39', '2023-05-28 13:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_owned_plots`
--

CREATE TABLE `applicant_owned_plots` (
  `applicant_owned_plots_id` int(11) NOT NULL,
  `applicant_owned_plots_asset_type` varchar(255) NOT NULL,
  `applicant_owned_plots_quantity` varchar(255) NOT NULL,
  `applicant_owned_plots_size` varchar(255) NOT NULL,
  `applicant_owned_plots_location` varchar(255) NOT NULL,
  `applicant_owned_plots_cultivable_area` varchar(255) NOT NULL,
  `applicant_owned_plots_agricultural` varchar(255) NOT NULL,
  `applicant_owned_plots_user_id` int(10) UNSIGNED NOT NULL,
  `applicant_owned_plots_scholarship_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicant_owned_plots`
--

INSERT INTO `applicant_owned_plots` (`applicant_owned_plots_id`, `applicant_owned_plots_asset_type`, `applicant_owned_plots_quantity`, `applicant_owned_plots_size`, `applicant_owned_plots_location`, `applicant_owned_plots_cultivable_area`, `applicant_owned_plots_agricultural`, `applicant_owned_plots_user_id`, `applicant_owned_plots_scholarship_id`, `created_at`, `updated_at`) VALUES
(1, 'Agricultural', '5', 'Cum consequatur beat', 'Cupiditate temporibu', 'Velit quod hic illu', 'Voluptatem quisquam', 8, 7, '2023-05-21 05:21:40', '2023-05-21 05:21:40');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_personal_details`
--

CREATE TABLE `applicant_personal_details` (
  `applicant_personal_detail_id` int(10) UNSIGNED NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `applicant_age` varchar(255) NOT NULL,
  `applicant_gender` varchar(255) NOT NULL,
  `applicant_DOB` varchar(255) NOT NULL,
  `applicant_CNIC` varchar(255) NOT NULL,
  `applicant_martial_status` varchar(255) NOT NULL,
  `applicant_domicile` varchar(255) NOT NULL,
  `applicant_present_address` varchar(255) NOT NULL,
  `applicant_permanant_address` varchar(255) NOT NULL,
  `applicant_reg_no` varchar(255) NOT NULL,
  `applicant_degree` varchar(255) NOT NULL,
  `applicant_semester` varchar(255) NOT NULL,
  `applicant_university` varchar(255) NOT NULL,
  `applicant_CGPA` varchar(255) NOT NULL,
  `applicant_user_id` int(10) UNSIGNED NOT NULL,
  `applicant_scholarship_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicant_personal_details`
--

INSERT INTO `applicant_personal_details` (`applicant_personal_detail_id`, `applicant_name`, `applicant_age`, `applicant_gender`, `applicant_DOB`, `applicant_CNIC`, `applicant_martial_status`, `applicant_domicile`, `applicant_present_address`, `applicant_permanant_address`, `applicant_reg_no`, `applicant_degree`, `applicant_semester`, `applicant_university`, `applicant_CGPA`, `applicant_user_id`, `applicant_scholarship_id`, `created_at`, `updated_at`) VALUES
(1, 'Shahmir Ahmed', '20', 'Male', '2002-09-27', '42301-7454929-1', 'Male', 'Rawalpindi', 'H#6, St#2, Khalid Colony, Phase No.2, Chakri Road, Rawalpindi', 'H#6, St#2, Khalid Colony, Phase No.2, Chakri Road, Rawalpindi', '20-Arid-825', 'Computer Science', 'First Semester', 'PMAS UAAR', '3.7', 8, 4, '2023-03-19 03:58:29', '2023-03-19 03:58:29'),
(6, 'Ab proident in non ', 'Est consequuntur mai', 'Female', '2019-03-17', 'Modi assumenda neces', 'Female', 'Delectus veritatis ', 'Quis tempor explicab', 'Quas dolorem irure o', 'Iusto id laboriosam', 'Behaviour Science', 'Seventh Semester', 'Labore amet dolorib', 'Labore quaerat esse', 8, 7, '2023-05-21 04:04:21', '2023-05-21 04:04:21'),
(7, 'Rerum fuga Mollit p', '20', 'Female', '1997-08-03', '42301-7454929-1', 'Male', 'Ea provident quia p', 'Pariatur Dolor rati', 'Aut facilis praesent', 'Qui cum incididunt e', 'Behaviour Science', 'Third Semester', 'Magnam temporibus au', '3.7', 8, 10, '2023-05-21 07:27:38', '2023-05-21 07:27:38'),
(8, 'Cumque esse mollit ', 'Excepteur dolor ipsa', 'Male', '2016-02-12', 'Quia nemo non qui ve', 'Female', 'Ipsum consectetur ea', 'Id autem atque delec', 'Recusandae Incididu', 'Facilis facere lorem', 'Behaviour Science', 'Fourth Semester', 'Atque dignissimos au', 'Harum cupiditate nis', 8, 1, '2023-05-24 15:01:26', '2023-05-24 15:01:26'),
(10, 'Qui consequuntur off', 'Recusandae Ex nostr', 'Male', '2019-08-23', 'Laborum voluptatum v', 'Female', 'Quia officia earum s', 'In itaque et dolore ', 'Modi consequatur id', 'Molestias ex aut vit', 'Business Management System', 'Eight Semester', 'Aliquip molestiae la', 'Eum sit magni est q', 10, 1, '2023-05-28 13:52:39', '2023-05-28 13:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_siblings`
--

CREATE TABLE `applicant_siblings` (
  `applicant_siblings_id` int(11) NOT NULL,
  `applicant_siblings_name` varchar(255) NOT NULL,
  `applicant_siblings_relation` varchar(255) NOT NULL,
  `applicant_siblings_institution_name` varchar(255) NOT NULL,
  `applicant_siblings_fees_per_month` varchar(255) NOT NULL,
  `applicant_siblings_user_id` int(10) UNSIGNED NOT NULL,
  `applicant_siblings_scholarship_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_worth_assets`
--

CREATE TABLE `applicant_worth_assets` (
  `applicant_worth_assets_id` int(11) NOT NULL,
  `applicant_worth_assets_asset_title` varchar(255) NOT NULL,
  `applicant_worth_assets_to_father` varchar(255) NOT NULL,
  `applicant_worth_assets_to_mother` varchar(255) NOT NULL,
  `applicant_worth_assets_to_spouse` varchar(255) NOT NULL,
  `applicant_worth_assets_to_guardian` varchar(255) NOT NULL,
  `applicant_worth_assets_user_id` int(10) UNSIGNED NOT NULL,
  `applicant_worth_assets_scholarship_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicant_worth_assets`
--

INSERT INTO `applicant_worth_assets` (`applicant_worth_assets_id`, `applicant_worth_assets_asset_title`, `applicant_worth_assets_to_father`, `applicant_worth_assets_to_mother`, `applicant_worth_assets_to_spouse`, `applicant_worth_assets_to_guardian`, `applicant_worth_assets_user_id`, `applicant_worth_assets_scholarship_id`, `created_at`, `updated_at`) VALUES
(1, 'Stocks/Price', '1', '2', '3', '4', 8, 7, '2023-05-21 05:22:12', '2023-05-21 05:22:12');

-- --------------------------------------------------------

--
-- Table structure for table `applied_scholarships`
--

CREATE TABLE `applied_scholarships` (
  `applied_scholarships_id` int(11) UNSIGNED NOT NULL,
  `applied_scholarships_user_id` int(10) UNSIGNED NOT NULL,
  `applied_scholarships_scholarship_id` int(10) UNSIGNED NOT NULL,
  `applied_scholarships_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applied_scholarships`
--

INSERT INTO `applied_scholarships` (`applied_scholarships_id`, `applied_scholarships_user_id`, `applied_scholarships_scholarship_id`, `applied_scholarships_status`, `created_at`, `updated_at`) VALUES
(1, 8, 10, 'Verified', '2023-05-21 20:07:30', '2023-06-28 05:29:47'),
(2, 8, 7, 'Submitted', '2023-05-21 20:07:48', '2023-05-21 20:07:48'),
(3, 8, 1, 'Not Selected', '2023-05-24 15:01:26', '2023-06-26 13:43:09'),
(4, 10, 1, 'Scholarship granted', '2023-05-28 13:52:39', '2023-06-26 13:43:18');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(10) UNSIGNED NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_location` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `event_desc` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_location`, `event_date`, `event_time`, `event_desc`, `created_at`, `updated_at`) VALUES
(1, 'Scholarships Expo', 'PC Hotel Rawalpindi', '2023-03-01', '13:30:00', 'This is event description dummy text.', '2023-02-20 13:34:22', '2023-02-20 13:55:09'),
(2, 'Dummy name', 'Dummy location', '2023-02-24', '16:00:00', 'Dummy description.', '2023-02-20 13:55:46', '2023-02-20 13:55:46'),
(26, 'IT Expo 2023', 'PMAS UAAR UIIT', '2023-03-31', '00:24:00', 'Enjoying event!', '2023-03-19 11:21:46', '2023-03-19 11:21:46'),
(34, 'NaSCon \'23', 'FAST NU', '2023-03-19', '21:29:00', 'FAST NU EVENT IS GOING TO BE EXCITING!', '2023-03-19 17:28:33', '2023-03-19 17:28:33');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_02_18_134027_create_scholarships_table', 2),
(9, '2023_02_19_112403_create_admins_table', 3),
(11, '2023_02_19_134516_add_is_admin_field_to_users_table', 4),
(12, '2023_02_20_170432_create_events_table', 5),
(13, '2023_02_21_130017_create_news_table', 6),
(16, '2023_03_06_195003_create_subscriptions_table', 7),
(17, '2023_03_06_195323_create_applicant_personal_details_table', 8),
(23, '2023_03_12_200027_create_applicant_employment_table', 9),
(24, '2023_03_12_202241_create_applicant_family_members_details_table', 10),
(25, '2023_03_12_203254_create_applicant_family_member_earnings_table', 11),
(27, '2023_03_17_114642_create_applicant_father_details_table', 12),
(28, '2023_03_17_124230_create_applicant_family_monthly_incomes_table', 13),
(29, '2023_03_17_125050_create_applicant_asset_monthly_incomes_table', 14),
(33, '2023_03_17_125837_create_applicant_family_accomodation_expenditures_table', 15),
(34, '2023_03_17_132127_create_applicant_other_accomodation_expenditures_table', 16),
(35, '2023_03_18_132220_create_applicant_other_assets_table', 17),
(36, '2023_03_18_162942_create_applicant_owned_plots_table', 18),
(37, '2023_03_18_163622_create_applicant_worth_assets_table', 19),
(38, '2023_03_18_164224_create_applicant_loans_table', 20),
(39, '2023_03_18_164816_create_applicant_education_records_table', 21),
(40, '2023_03_18_165510_create_applicant_other_scholarships_table', 22),
(41, '2023_03_19_173256_create_applicant_siblings_table', 23),
(42, '2023_05_21_072132_create_applicant_family_member_currently_studyings_table', 24),
(43, '2023_05_21_191957_create_applied_scholarships_table', 25);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(10) UNSIGNED NOT NULL,
  `news_name` varchar(255) NOT NULL,
  `news_desc` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_name`, `news_desc`, `created_at`, `updated_at`) VALUES
(3, 'Dummy new', 'Dummy desc', '2023-03-05 14:41:47', '2023-03-05 14:41:47'),
(4, 'News 2', 'News description', '2023-03-05 14:42:07', '2023-03-05 14:42:07'),
(9, 'APS Scholarships coming soon!', 'Soon!', '2023-03-19 11:48:37', '2023-03-19 11:48:37'),
(10, 'New news', 'news descriptions', '2023-03-20 06:14:23', '2023-03-20 06:14:23');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('ahmed1212514@gmail.com', '$2y$10$8/GfHJovhSLLdHI3DWIqZeB6DTl402Hj2wQTXKi.tz5kS9RgU0sNy', '2023-05-21 13:32:50');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scholarships`
--

CREATE TABLE `scholarships` (
  `scholarship_id` int(10) UNSIGNED NOT NULL,
  `scholarship_name` varchar(255) NOT NULL,
  `scholarship_desc` longtext NOT NULL,
  `scholarship_eligibility_criteria` longtext NOT NULL,
  `scholarship_last_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scholarships`
--

INSERT INTO `scholarships` (`scholarship_id`, `scholarship_name`, `scholarship_desc`, `scholarship_eligibility_criteria`, `scholarship_last_date`, `created_at`, `updated_at`) VALUES
(1, 'Ehsas Scholarship 2023', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque odio mauris, consectetur nec posuere eget, mollis vel nisl. Praesent mattis sem tortor, ut viverra purus tincidunt non. Sed commodo iaculis sem, ac ultrices erat facilisis in. Fusce quis pellentesque velit. In rutrum ligula ligula, maximus ullamcorper enim hendrerit vel. Fusce porttitor turpis vel volutpat fringilla. Proin gravida venenatis risus eget aliquet. Fusce fringilla sodales luctus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam diam augue, molestie id viverra at, convallis vitae massa. Morbi dignissim tincidunt ligula a feugiat. Maecenas felis lacus, pretium vel purus eleifend, efficitur vulputate neque. Maecenas finibus molestie sem, eleifend vestibulum ex bibendum tempor. Nulla viverra lacinia turpis, at accumsan ligula semper sit amet. Praesent sodales ultrices nibh sit amet ullamcorper. Ut consequat nunc nec laoreet dictum.\r\n\r\nSed suscipit eleifend efficitur. Cras rutrum sem sit amet quam ullamcorper ultricies. Cras dictum augue eu elit feugiat, at hendrerit risus pellentesque. In ornare tempus dictum. Donec placerat nibh id metus bibendum, sed maximus sem mattis. Curabitur mollis malesuada pretium. Proin porttitor, risus non egestas dictum, augue elit ultricies est, in pellentesque massa dui vel turpis. Pellentesque orci sem, dictum eget justo non, eleifend elementum diam. Vivamus rutrum tincidunt sapien. Etiam dapibus bibendum ligula nec faucibus. Fusce cursus ex nec nisl sodales sodales. Proin in pretium dolor, in porta odio. In at libero eget sapien tincidunt dapibus. Sed eu sem eros. Donec eget purus nibh. Donec malesuada ligula quis turpis mattis, eget auctor dui finibus.', 'Suspendisse sapien mauris, mollis a neque sodales, vulputate scelerisque quam. Aenean et lorem mattis, eleifend nisl eu, semper leo. Cras volutpat, nisi sit amet consequat ornare, lectus mauris eleifend elit, quis sollicitudin massa metus mattis ante. Praesent egestas est id pellentesque rutrum. Fusce lectus libero, vehicula a sollicitudin et, lacinia at erat. Quisque ornare leo at sapien pellentesque ultrices. Praesent facilisis mauris at rutrum rutrum. Etiam non laoreet purus, et rutrum tortor. Vestibulum bibendum augue nec sem posuere, at tempus quam dapibus.\r\n\r\nMorbi interdum ante convallis erat convallis tincidunt. Integer tempus ornare sapien blandit semper. Donec sollicitudin sit amet turpis ornare pretium. Pellentesque nisl nunc, gravida et tempor non, porttitor ac justo. Fusce consectetur risus est, eu iaculis lectus facilisis nec. Curabitur quis lectus purus. Ut ante sapien, pretium ac velit in, molestie lobortis diam. Curabitur in tortor at orci commodo rutrum eu non urna. In pulvinar ante ac purus pulvinar convallis id et nibh. Donec sem enim, vehicula at enim id, feugiat rutrum risus. Proin vel maximus est.\r\n\r\nCurabitur at blandit tortor. Duis finibus elit ut pulvinar finibus. Morbi non nibh ut mi tempor semper. Suspendisse potenti. Integer cursus velit est, ut porttitor ante ultricies et. Vivamus a pretium neque, a vehicula nibh. Integer semper ipsum erat, eu fermentum libero aliquet nec. Donec iaculis metus non nunc pulvinar, non rhoncus nunc congue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin at vestibulum urna, sit amet efficitur nulla. Pellentesque eget imperdiet odio. Vestibulum consectetur pulvinar lectus, et dictum mi pretium at. Etiam pellentesque arcu at lacus fringilla, sit amet tristique ex iaculis.', '2023-07-19', '2023-02-18 11:39:29', '2023-05-24 14:59:21'),
(4, 'HEC Need Based Scholarship 2023', 'This is a need based scholarship from HEC for needy students.', 'The eligibility criteria is as following:\r\n1. Student of HEC recognized uni.', '2023-04-13', '2023-02-18 11:49:56', '2023-02-19 02:16:02'),
(6, 'PEEF 2023-24', 'This is a PEEF scholarship i.e. Punjab Educational Endowment Fund for needy students in the university of Punjab.', 'Eleigibility criteria:\r\n1.  One\r\n2.  Two\r\n3.  Three\r\n4. Four\r\n5. Five', '2023-08-17', '2023-03-05 13:00:42', '2023-05-27 08:17:44'),
(7, 'Dummy name', 'Dummy description', 'Dummy eligibility criteria', '2023-06-13', '2023-03-05 13:14:08', '2023-03-05 13:14:08'),
(8, 'HEC Need Based Scholarship 2024', 'desc', 'criteria', '2023-03-21', '2023-03-20 06:01:48', '2023-03-20 06:01:48'),
(10, 'HEC Need Based Scholarship 2024', 'Description is just description\r\nDescription is just description\r\nDescription is just description\r\nDescription is just description\r\nDescription is just description\r\nDescription is just description\r\nDescription is just description', 'Eligibility criteria is just Eligibility criteria is justEligibility criteria is justEligibility criteria is justEligibility criteria is justEligibility criteria is justEligibility criteria is justEligibility criteria is justEligibility criteria is justEligibility criteria is justEligibility criteria is justvEligibility criteria is justEligibility criteria is justvvEligibility criteria is justEligibility criteria is justEligibility criteria is just', '2023-05-31', '2023-04-27 12:37:29', '2023-04-27 12:37:29'),
(11, 'PEEF 2023-24', 'punjab education endowment fund 2023-2024', 'none', '2024-11-22', '2023-05-21 16:32:11', '2023-05-21 16:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `subscription_id` int(10) UNSIGNED NOT NULL,
  `subscription_user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`subscription_id`, `subscription_user_id`, `created_at`, `updated_at`) VALUES
(1, 8, '2023-03-11 16:22:18', '2023-03-11 16:22:18'),
(2, 10, '2023-03-19 17:27:18', '2023-03-19 17:27:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_image` longblob NOT NULL,
  `is_admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `user_image`, `is_admin`) VALUES
(1, 'Mallory Legros', 'bethel.vandervort@example.net', '2023-02-18 08:10:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cCTZK3tjfx9KDjuUekghmYjS1sbaQuHzsOJUq0OORTT7cQ6tQE23yyYAdvtn', '2023-02-18 08:10:20', '2023-02-18 08:10:20', '', NULL),
(2, 'Michele Abernathy', 'garrett81@example.net', '2023-02-18 08:10:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'O2CT4td9HAtP4ydM3vpeMkQolgx2CXo9rujwESf26w8GWmRuMWgSabwdWh0N', '2023-02-18 08:10:20', '2023-02-18 08:10:20', '', NULL),
(3, 'Jody Willms', 'tjohnston@example.net', '2023-02-18 08:10:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'eoquoHCFZP', '2023-02-18 08:10:20', '2023-02-18 08:10:20', '', NULL),
(4, 'Shea Schiller V', 'robin96@example.org', '2023-02-18 08:10:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'wqCi6e1NpO', '2023-02-18 08:10:20', '2023-02-18 08:10:20', '', NULL),
(5, 'Jerrold Ebert Jr.', 'marie65@example.com', '2023-02-18 08:10:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IVrMtzwwhn', '2023-02-18 08:10:20', '2023-02-18 08:10:20', '', NULL),
(6, 'Admin', 'admin@gmail.com', NULL, '$2y$10$yYkDKbCjoa767u7jGN9kNuLrAyS0jI2YbWGIFQuvbEFSB141ilUde', NULL, '2023-02-19 08:58:49', '2023-02-19 08:58:49', '', 1),
(7, 'User', 'user@gmail.com', NULL, '$2y$10$5FUmxkpLUyJ4N6htXJhob.JLBb/8F1nUrLVvqaU2w/kpAi8tFK3hq', NULL, '2023-02-19 08:58:49', '2023-02-19 08:58:49', '', 0);
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `user_image`, `is_admin`) VALUES
(8, 'Shahmir Ahmed', 'ahmed1212514@gmail.com', NULL, '$2y$10$5MDlORtAbBfJUreKwVNbyuI06/q9yCukYO8EYevdxRVaEvMW1zkLW', NULL, '2023-02-19 12:10:52', '2023-05-24 14:56:30', 0xffd8ffe000104a46494600010101006000600000ffe138824578696600004d4d002a000000080006000b000200000026000008620112000300000001000100000131000200000026000008880132000200000014000008ae8769000400000001000008c2ea1c00070000080c00000056000011461cea00000008000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000057696e646f77732050686f746f20456469746f722031302e302e31303031312e31363338340057696e646f77732050686f746f20456469746f722031302e302e31303031312e313633383400323032333a30343a30372031353a32343a333200000690030002000000140000111c900400020000001400001130929100020000000338330000929200020000000338330000a00100030000000100010000ea1c00070000080c00000910000000001cea000000080000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000323032333a30343a30372031353a31383a333900323032333a30343a30372031353a31383a33390000000006010300030000000100060000011a00050000000100001194011b0005000000010000119c0128000300000001000200000201000400000001000011a40202000400000001000026d50000000000000060000000010000006000000001ffd8ffdb004300080606070605080707070909080a0c140d0c0b0b0c1912130f141d1a1f1e1d1a1c1c20242e2720222c231c1c2837292c30313434341f27393d38323c2e333432ffdb0043010909090c0b0c180d0d1832211c213232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232ffc0001108010000ed03012100021101031101ffc4001f0000010501010101010100000000000000000102030405060708090a0bffc400b5100002010303020403050504040000017d01020300041105122131410613516107227114328191a1082342b1c11552d1f02433627282090a161718191a25262728292a3435363738393a434445464748494a535455565758595a636465666768696a737475767778797a838485868788898a92939495969798999aa2a3a4a5a6a7a8a9aab2b3b4b5b6b7b8b9bac2c3c4c5c6c7c8c9cad2d3d4d5d6d7d8d9dae1e2e3e4e5e6e7e8e9eaf1f2f3f4f5f6f7f8f9faffc4001f0100030101010101010101010000000000000102030405060708090a0bffc400b51100020102040403040705040400010277000102031104052131061241510761711322328108144291a1b1c109233352f0156272d10a162434e125f11718191a262728292a35363738393a434445464748494a535455565758595a636465666768696a737475767778797a82838485868788898a92939495969798999aa2a3a4a5a6a7a8a9aab2b3b4b5b6b7b8b9bac2c3c4c5c6c7c8c9cad2d3d4d5d6d7d8d9dae2e3e4e5e6e7e8e9eaf2f3f4f5f6f7f8f9faffda000c03010002110311003f00f09cd21accd028a0428e94b4c414629005250312941e680149e314da062e4d1400519a003349400b4abf7a87b0d6e6921e31ea29e5d54fcc78ac1abb3744f15ccfe5ed82d8b0fef53d4de93ff1ee473e950e28ab96a237c0716c0fd454891ea2727c91c67231d2b369203a8d3bc15abeafa23dc7923cc91944485828233d4ff4af4ab5bff13dbdbc708d12d88450a3fd240e83e95c35a4a5a1bc158f97bbd15ee9e685277a0070a5a041452013bd14c62528eb4001a4a0614b40099a2900514c05a7260b0cd27b0d6e682824027a0a7450876de7b1e9583373a1d35336640033bb1d2af25b06ee735cb293e6368c74274b439ceeed5d7784bc25fda52ade5d022ce33c03ff002d1bfc2b2a93b2294753d30409185445c20e8076a91a253ed5e5c9b6cdac91f1af7a0d7d59e40b450028a5a420a4a003bd253185028017b525030a28b805140051400b4e5eb4994b735130635c54b00f9473deb99b3a11d2e8d093a797f5720d6843112c463f1ae493d4da2b43a7f0c7875f57b8f32552b688df337f78fa0af4f8618ed6148a24091a0c2a8ed5c55e7d0d1217786e4738a71c715c8e4533e34a2beb4f205a2801d452105250007ad2531851de801db49200a7ac40a924fe1486482140a0b2b60fbd38d892018d830233c7f2a9b815de2642415208ea29954b500a298c5a55fbd498d6e6a8f9631524442c6324573347444d4d335a5b70b108cbaf3902ba4b4d4d647573a7dd18ff008b68c9ae6ab1b3358b3bab4f881a6d9dbc76f168f7d1468301768ab0df10637b59258747bd60a3197c019f4ae09d3d6ecd532aa7c4658ecd0b6913aca4fa8c63be2acffc2c3b57fb9a6de1c75c803150e8ae83b9f3551debe94f245a2810e145200a4a004ef4b4c1094aaa49a1944f90a980b96a8f273ed480bb6686495117ab1c6d6e735d3da7874aed69711b37223638ddedec6b0a92b151572f6a3a7d9c30451de59a8623a16db91fef024571ba869f0c4dbad9dca1eaae395fc7bd3a72068cbc7af14bdab742414e4fbe38a1ec0b72f66571c90a2a51180002c4e077ae791ba3b1f08e892eae238a08940dc7cc931f7573ebeb5ecfa6e9d169d6d1c101251176e08e09f5fad7958aaad4ac7752a7eedcbfe546df7914e7d5452f94be5940a31e98ae2751b669ca92223183796b118a33118d89f9467231565a284758d0ff00c0453751a44289f1e0a3f0afa93c7168a04283466900679a2800a2980aa0672dd053f7647a2d265580b71d47a522f2d81c1ed401d1f87ad49ba5f3d76c44e0b1e31ee0fad6d5f6a7332b2cd9b98c13b5d93903b608e95cb5356544a33dff009d6c638fed0723255d723f3ac39c96392b85ee29c5586579aca6684dc227ee87a741547f0ae88b25e814e8fef8a6f61adcd203815262b9d9d08f71f8676fe4f84adb75bb23c859cb91c382c706bb5031d335e1625dea347a34fe11e05381c64d732dc2453f3776b290e080b0961ef922af94e7a553bb2533e381457d69e28514085a29005140051400fce38f4a4624b73d28286e7a55ab6b56b8c95e003f7a81d8d5b1d4d7ecdf62bc672aad94707ee1ad9b6b57460f6d770a82bda40b91ee0e4573cd24ca511b35b5e5d3793e6ca57383e5b0c7e8055ad574b41a6dac51a832cadc93d4564e7ad8d630f74ce9af21d32c5b4f5559247cef247638c572932859980e306ba6999488e9f17fac15a3d898ee6aa8e2a40001cf6ae63aa28f78f025c5ac7e0dd3236b98432c5c832004726ba35beb491de34ba8b721c30de38e2bc4ad16ea3677464b94537b69183baee018eb990527f69d86d07edd6e73ff004d4565ecdad41c8e4b54f1549a2f8bddee2da492cbc85456419ea73906b6ad7c7ba05cc0b235e8858f54914822ba3d92e54ccee7cb5457d09e40b45001450014500145008776cd2753f5a0a36b47d065d45d46dea7a9af4bd1fe15e9f736c1a6be9d64239f2f02b831189e4763b69504e3734e2f837a36ecc97b78e4fbaff8568c1f097428707333b01c6f6ae678b7234f6291a70f80e082231c4ca887b2aff526b92f1d5aa6871f996b1ee318da091d33dea613bcd0daf74f2170f2b348c4e4f73eb552e81f314918256bd68338190549103e6a81dcd68f6256e5e8da77e300007ad4eb09232f21e9dab9e5a1d11d4f6ef0b781b4097c3fa7decb6f2bcb344b23033363245745ff0008ae8ccfbdac1188fef331af16b56f7da3b631d07b784742901074c8467b82694784b438d94ae9b0e474e0d42ab7560b166f343d36f62093db2b0e30013f85525f0768207fc780ff00be8d38d6b0289f2af7a5afa43c70a2800a2800a2800a2980e5ad4d36c229e40f21381d877acaa4b951b538dd9df68d0aa6d310c638c0af50d116416eb9c74e2bc3c4bd6e7af495a3637a218ea6ac28cf1bab083b99cc79c8538393dab0b57d06cf578655bb4dc1c60ff4aae7e592262ae7cfde24b18ec35b9ad2dd711a9daa0f35ceea69e5df3c59cf9785fd2bdda0eeae7055566ca74f846664edcd743d8c8d78c71c77a948f931ed5c927a9d74cfa2fc2c9b3c27a527a5b275fa56d0ec335f3d57e3676f42419a5c6472294511d442bd69854ff09e29751dcf8e68afae3c60a2800a5a004a5a0028a6343e352c428ea78ae96ca18e0554670bdc926b9eb6aac74d1d353a5d3f50d2ed9839bd1bc7518aedf46f17e980796d7281bdebcaaf49d8f421563b1d6c5ade9ef17982e63db8ce7349078a3492eca2f221819396e95cd1849741c92261e21d2a59020bb8f730ce73c53bedd6b392b05cc6e719c06cd44e12dc983573c43e205b0b1f17ef2a76380e3dfdebcfaf2432de4d231cee626bdec2ff000d338310ad3657a921ff005ca3deba5ec62b735e31f254873b5b839ae57b9d513e91d0028f0ee9e17b5ba0ebec2b4bcc8d6458cc8a1d864293c9af0674e4e6cece6562556563c30fce94938e3b75a95192e84f51aa4b67bd359d13867553e84d4f2bb8d33e3ac52815f5a78c149400b45001d696800038ad98f48864b575f9fed0392c4f1f4c54ce5ca6d461cc9956c6d986a291b8fba727e95a17b6af3333b482341c73594a5ef1ac55a265c8b0c6dc492381e8315243c48a159d09e9deaa493424b53b6f096837dafdc9b68af19171f3b72702a0f136872f87efa4b29ee5b00060cbd5c1ef5c375ed2c74a4ec60457cd6f208e2b99d47f0ab8dc2ba0d26df5b6916e6d2e7241c855241c7d0f6ad2b422a3762829731bfe2bd2752f11eb5a35a5bc79bb6b31bd9b80a72724fb715e77e24f0fcfe1fbf5866b886e0480912427209ce08eddeaf0b35648cabc1ddc8c4c53e1199940fad75b3996e6a27da2400245b40ee6acc16773717091f9c91ef60bb98f033f4ae79348df53d2ecfe18eb8218d4f894c7c7dc457207eb5af6ff000b2ede75925d7e46741853b0f1f8eeaf3ea6229decb737574b52dc7f0caf236ff9186e87af96a413f99ad2b7f87f0db2169f57d4e5279cf9e576fe558fb78ad86a457d37c1905e5bfda06b3ab052ed81e78e403f4abefe04d3e46cc97ba8be0704cf9a99548bdc7a9f2c528e95f42796145002d140828a063a2c6f5ddf743735d546db21b891803f311f8ff9358563af0db321b4224bf6942e0f9601ad06d324be6114719773d14739ae79cacee744637362d3e1c6ad711ab359c318ff00a6ad8aadabf816ef478e39aefc9dacdb46c350b109bb14e89da7c29b4105d4f9ea540aeef5df09e9bafc4cb776e8f20184908e4572ca4d4ee36ecec7296ff0fe5b09c2a69fa7dc460f0e46d61ffd7ad9d37c1f6b63279fe5792c4e7cb56c8a9af5db438c91721b7b58fc42f2301e77d95553e818e7fa5787fc52f2a1d721b3888dd12176c76dec4e2b6c04b9a689aff03381a9ad3fe3e5457acf63cf5b9d12f31e054d629fe9d6a09eb3a0ff00c78571cb5474c773e958d7e51f4ab31e57a0af9f6bde3a65b13ab13d6a2b975582462738535696a6496a657867e7f0fdbb8fe2cb0fccd6a37ca7835725a148f8c29c3a57d41e58a31dc50707bd002679a28101eb466818763ef5d2db4de7e9aac3e66077303df0306b2aaae8e9c3bb05ac80df30e81d0115daf85eea2b5be0d21db9e84570e216876d3d59ea76d7f09b5de1c6dc6739e2bcdbc4dae8d7f5436d68a648adb8273c1cf535c7422eedb3a19d27c3a85a29a491d71b8e057a2b3988b313919cd2aafdeb98545a932ce8ca0861c8f5aab72e1b3ce6b0ab34e36229c5a918b108e4d56e2e59f0b6d1ec6e7db27f422be69f13ea2daaf88afaec9c89256d9feee703f4af472d8eec9c5cba191bb8c6054d663372b5ea4b638a3b9d0aaaaa003bd5dd35376b1609d8dc47ff00a10ae193d0ea8ee7d2116dc0cfa7ad58e3671c5789bc8dd82b63fc6abde366d9d463953fcaad2d456d4ccf07c99f0ec1110c1e2cab02315b4467ae2aa4b412dcf8c29462be9cf2ba8a4d20ebcd201dc6391cd008f4a0069c668ef40c5cd6869b7896ccd1cc0985cf38ec6a64ae8d294accbcb340da8a0b73950b8cd6c4572d10046720571d58f43be9cba9b779e2792df464b48dcac928c3f3d1715cd5beaff6077688ee2c30d8aca14ac8d655353bef05f8c6ded15c5c29daec395fe1fad7a3693afc7af1ba16d13fd9633b04cdc090f7dbec3d6b96b41c5b2b496a47135cd9dd496ec4b47f7a33fd2acadd6e4270411eb5e735791aa8f5393f16eaeba1781aeee9664335fe76853c92c7afe0315f3c93cf2735f4181872d33cdc4caf2b0ca9ad8913647242920576bd51ceb73445f5ce0622c7be0d5eb39f506bb85ede3fde870c9c7f176eb5cb28ab1ba6ee7b3e8fff0009edcdb09ae5ace0e7fd5ce0293f966b6a24f17850247d3073d4b9ff000af2274e2a4ce9526d1605b788a5421f51b283278f2d771c7e22b3f50d03c40f1caf06bd33c8cc3cb8c054503be78a20e2b70b94dfc29e25920092ebfe5a9183e5818fc70066ab1f0878a230163f11a32fbee1fe35ab9444b53e73a51c935ef1e5074a771480290e4500252d03169706802c593ecb95cd6ec3216201e40ae6acbde3b28b762aea314af700825863a034fb7b196edd625b66666380aa7927da929248d629ca563abd17c15223c8b7da5df063829e5bfcbf8e2bb9b6bbd4f478515f4cba4b788050635ddc0f615c75e5ce76a828a1da4f89353d4f5b5b56b5610a92774a85180ad3d7f574d2b4ebab9ff9e68c47b9ed5c1ecff789206ed13e72bcd42e6f5bf7f348eaa4ed0cc485fa556afa38c5462923c6949b95c43562cc7eff00f0feb43d821b9b0841207fb58c56b59806fad7d04e9fcc571546ec7523e8e0c5a3403006d1522c6a074af15c9b6ce8b682aede40a700378f4a86efa92d03f4a61ff39a571a47c69f4a720eb8afad3c7148a4c73de8001d6971de80169463d2818629f8e2930019521876ad68ae31c631deb2a8ae755195917ac645794865dd9ad28d65b693cd850fcb820f71f4ae593b1d94fb9d7e89e2fbf8dd639c678cf20e6bd174dbd6d4a1591a365ff7862b8aac8ea6d3454d6a58acc9ba54559141cb639fcebc7bc75e257bc845aa3e15ce4afb556160e752ecc2bcad03cf5a8af6cf286f7ab565c5c0fa54cb62a3b9b09f787fbc2b6b4d88cba9daa8e4f9c981f88ae0aaac8ea5ba3e8843f2a9f6a9d781f5af1168d9d0c1b83c50a7322fe34a4c5d057e951935371c4f8d48e714f8fef357d79e30e34948069e0d3bb734c0334a0fb5002d3e931a10fd38ad07898db46f821f68cfbd44d9d14762ce8f7420bb0ce071d8d7aae81ab69d3451a4b144cd9eea2b86ba677506b63bbb0b6d19b6bac50161d0e0715a2ef6b0ae15946076ae19b3477b9c1ebcf3f88b524d2ac7eee73349d907bd798f8d3c313e9bacdd226e63180e149fbc8470c2bbb036d4e5c53d2c716d9e3d683d6bd138c43562d0ed91980ce074a52d8a8ee69477126e07ecb2638e7d3f4ad1b0d52e6dafa09a0b369264903a20c9248ed802b9a74d4b737bea7af59f8a3c577a9f68b7f0c9488819491f69cf3c8ce0fe95a29e21f15747f0bf4ffa6ea3f5cd792e8c62dd8eb5aa1efaef8ab231e1b43db1f6a4ff001a8a4f11f8a61cb9f0d2a8504bb19d481f539c0a4a9c592d8fb7f10789efa1f361d12d1d09e196e948fd0d588efbc54eb96d2ac14fa7da3ffaf512a68a47ccf22c4cecc131f4a7451a92c76fd2be85b3c4b8e312f714e8edd1ba019c7ad4f368171af1207c6dc71432285fba29a905c431ae4702858d7d29dc7724445381b6a72b1ed0db401dea5b60b729b1fb4dc456d0a81e648133f5ae8b5ab616ba93c43ee6d050f62318aa9c5f2dce9a0f5b194d00724a9c30f4ef52c379796cdf212304562d292b33aacd4ae8d8b3f166a36e02ee663f539aee344d4bc49e2183fd16cf6c7f70cf21c28ae2ad494753584db3bbd23478742d39903192e24399243d59cf4ae7fe2be9c2c8e89a8a28dabfe8d29f5046466b6cbd5eece5c5cb63c8bc45e192a5af74f4dd19f99e31fc3ee3dab9339cfbf7af40e64c4156ac7fd79f4e294b62e1b9bb0e4ae49e3d2b4f46731eb9a7b825585c200c3a8c9ae39b7667525a9f422021006258e3a9a7e38e95e2b93bb3b39742485409327a014dd5df1a25e0077110b7f2ad293d4c64b539df04a7fc53910ec5dbf9d747e581d3f4a750d11f23ec2548c1c0f5ef534498ddd07a66bdc96c78229e98c0fc29c9ea4e3f0a9e8039c1908e7903fa530a381caf7a68430ab67a714cf3157af35a2450c37047dda8de676001638c74ab8c0a43ac485d4ed1b3c2cc87ff001e15e85ac580d46d7e53b664e636fe95d0a1cd4d951972c8e3d5d92568e5529229c107d6afc415c7cca08af36a27167a3195d1d1f867c3316ab7824986db74393eadedf4af6ad3e38adad2386089638906155460015e4e2ea36f951d318251b97ac2d4df5e2dc303f6780929fedbf4cfd05733f199917c10ac4f2b77195fcebdbc152e5a478f899f34ec79f5a31fb3a9ce47a7d79ac8d5340b0bddd2f94ab2f5254edfcab564a39c9bc2bbe3f32cee7233f764edf8d554d1af6cdc9920dcb9182a7754c9e85c1ea5f8b8183f977abda57fc862c7affc7c47ff00a1571cfe16774773e8bc71eb4b8e2bc26f53aae491f5aada9b1fecabc2064f92dfcab4a4fde336b532fc131b2f86adf78c139e3f1ae80a64fa7e35b5515cf9171e84819a74473bb233cd7b4f63c315b6eee303f1a728f9703a9a43b0d9498e5209c63d2a3374c100ad2311d885a52cdd4d444f7ad922909455008a76ca8d9fbac0feb5ea56ee67b78dc7715db86578b467395999fa9685fda07cc8be4b851c1fef7d6a9d969f3433793770bc720c6558106bcdc753e477477e167ccec7aaf8722b48205551db8c57456a5f55befb2da6e16f11c4d30e848fe11efeb5e252a2ead6d4efc45450a67611c6b6f008e31b540e05795fc6f908f0e58c3bb01a7dd8cfa74afa451518d91e0f3734ae71968e446bfed015248c43741cd733dcd4ccb8436f2b941859392076351acadb570718a069d9dc70486e06258549fef01cd3ed34d4b6d4ad6ea29098a3995dd1873807b561521a33aa9d43d3bfe16269024110b2d4cc9fdd5b6cff005ab49e3082600c7a3eb2f9e805a1ff001af16ae1f959d919dc963f13c864083c3bad127a136e00fe756bfb4ef6e20911741be5ca11990a0edf5a50a566272d4c5d3756d6b4bb14b47f0d5dcbe5e72c8c39e6aeff00c251a88e0f85b531f956928dc373e6b19c638a9a08cb248c070ac3b57b1276478a3c5b3c8b2326dc20c9f5a8d55d80c3601f4154a250a6cf7104b9c9ef541f8620f6e39ade2ac8069a6e2aac30a0d00348e2bd3bc3c7cdd2629090176f2cc70057761a494598d545a1e2ed1348b8deb1bea3708788d3841ee49ebf8517be3a87c537eb0eaba41b3957022b8b6cb903d18771fcab8f17fbcd0df0f2e5773523d4b4ed10309aee4be910f105a2924fd4f6adfd13e2b595ac71a6a5a1dc5840c70b2478751cf71d6b8f0d4e3091b622ab9a3d334dd534fd62d56eac2ea2b8888e194f4fad7927c77b91bb49b253f393bc8fc6bba4f438e2b5394b5903c485782b80454b2371f8d733dcd4648a2552b9ebd0fa564e0a3321ce54e0d03057e4edc8f7ab31cc4007273435708bb1a367a9cb6eeb24523a38e854915d9e97e389976a5ec6255fefaf0d5c38aa4e4b43aa954ee76361ab5aea71ab5bcc09ce0a93823f0abeb919e4e6bc69394656675e8d11c858cb9c9e0546c5b3d4d1ccfa1ac52b1f26fafd2b73408e396d6ed641f2865246ec7635efd5f84f0919da7dc0fed06563943211827a8cd4861105cc9176472bfad7447628b2b17cca71f4acfb9d337cc591c2e7a8233577110cfa77936fbc3167ea4638c5679ca73dbb8c55263178c0ef49b49e80d005882d4c8ebb8ed04f26bd37c3df0d6f35ed1239e4d5ca588c88e155e841e735ad29742648c1f117806fb457915246755e858633f435c9c13cb6d300db863a8ce2a2b45ad471b1dde852c725b0b9902aece7206315d4c5e0ad47c41a47db5e58e03212224c1f9973c1ae7a29b9152d8dbd1be19dd787616bcd0f5eba8b54550595f1e4b9ee0ae3a579b78e356bed73c5d0b5e1884caa17644d955c71dfdebaa666872b370738603835612e564c0930befdab9ba9648ce11b3c018ce6b3a79d6e642c8b8006dc8ef4c6461768efd28cf1dc50244b1cbc679cd598ee197183dea5f9949972db55963864ba8242af137eed94fa57b46917c752d22cef4803cf8964207b8af171f4927cc8eea32ba2e633da9bb0579dccce84cf930ae0363f956ae8e7cad3f5091096654dc46de9f2b57d1c9dd1e2c4e6eda5f2e7527d6ba2bb20dcace3a488ac7eb8c1aec29922b65473f4e69848cb373c5488af3312ac4e4f6c5557b2531994ae3038fae455218cf2e313b8440109cafb524984e3005003e1196fc6bdabe1a6a8c6cae34eeac844a173c90dd7f5ab86e4b3a0f10dbaea76f25a30f99e2df11f4619af09f11e90605372a30140047a1cd75ca3cd0334f5363c13245782cace742237b9549246e8413d3f1e9f8d7d0516c1b9c00b0c4bb6303a607715c9878eacd2a19de20d75344f0acf7bd669c6c887a935f3a3b34be27f9f3b8264fd4f3fd69d47a847637071b87519ee6a0623d87b1ac4a1cafe626d0c7a600a68c4636f191c1a006c8c3675a6467ae4f38a0072b63a9a8eeeefc8b47907de1c2fd4f4a4334604f2f4d58ba304e40af4af09f89e387c31630369ba8ca6141117860dc87048eb9af3b1b0e689d98766f0f12f71a2eaff00f80dff00d7a43e261df46d5c7fdbafff005ebc974b53a4f9a641d4fad496f78b67a35fe00124c5635f500839fd2be8231b9e344c2cd6f24fe6e971c8412d1b6ce3d08aea68b62c138c73d6a6dffb9231c93408ad753b4725b6ec081f209c7f17ad5abb62b000474efef40cce46e723ae68b81819ef4ba805b37207bd76be1fd5e4d1b58b2be8fa6d31ba93f781ab5b89ec7abcdab5b5ec31cb2c6f6b7311cab11c1fc6bc97e25466de768d1815b8984802fa633fd4575dff0076ccadef2313c38e62da77ed653e60faaf23f5afa2adaed6fb48b4921e93c4ac3e840ae5a0f566933cf7e236a62e757b6d22221a2b3400804fdf3d7f2af2db197ed3ae5d4fd8310bf41c0a993bb29688e87771cd57b874450e4fb7350030609f978ef52c6f96dafd3ae6802b5ccb8936a92549ea6a501947e140c6e4e0649c552bb6f3ef2dedc73b0f98ff00d290cd9491b6e0b7cb5da7c3fba5bad2b55d2a76628c7cd8c03d8e727f315c9895ee9d1877a9e8fa3c31c361b6262c8188e589edef57d4647248c579727a1d68f92ee09c74f6154af30b84570e80ee040ea6bdba5b9e3c0a5deb634b264867b73d5d7e515d322ca492323904e0835a913e63ce738352161d71089ec9a220138cafb1a6c339bbd3a3ddf7d0946fa8ff00eb5080ae9c31a59c65334808213b641cd7428c5b4f8d9c93b1ba7a7bd303d8bc07ab47acf87a4b1bc01e7b68ca10dd5939c1af24f17bb4ba82404e76e48c9ec491fc80ae8e6fdd99fdab15aca38edd63ddcb1e4fa57a468de2e1a4f84374e31741de3b74ef8ce57f019fd2b9694acd9a491c4dede491acf792c81a528cfbf3d49e7f9d73fa0464c524847de6a686ce8b1f263d47355a50bd18647a1a422a889a29331b0dbfdd6edf4ab1bbe53c920f3d2802109ba5c9dc7b8ab3f3647ad004448c7278cf3c56769ee259e7b863f79b0a7dbb5228d112191bcb4e14f535dbfc3de7c512c2b8dbf616c0ff00812ff8d72e27e03a283b48f4ed24325bba95da7cd208e9deb517bd78f23b19f25ca07ee816032327f1359d7c556458d79209e6bdea478d02aaf35a9a636c994f506ba19a15750410ea32851f292187d0f3566d24e3da97402f19493919e3bd5488f917ae98fdddc6707d1a8112b2e24e98c76a575c8fe7480a438931ef5bf6a564b09e3c65826579e8473430353c2fe227d22fa0d415c952764d167ef21ebfe7daa9f89258e7d7a69a2198c2029f89354a5ee5856f7ae411b2a428d82cefc91e957537cb234d23317273b49c00076ae6d8b651d7e6ce9928240dcc14018a668f194b45c753ce2b68ec291a7b88e9f5a64986e68115ce43e39c7b50cd8daa31963ce2801fb4ab1e4fe14ec9d9d79a00a3a84de5d9bed3f337c83ea69608c25b469e52ee0002de949948d088054c6307d6ba0f086a51e9be256ba99d9156d5c0f949c9cf4e2b9ebabc4de97c47a85af8cb44b811b199c4cc394589db9ffbe69b73e36b2b493635ade93ea612b9fc0d78f35a9d67ce0d96600f52302b22e486b8720e541c0af76923c980d43f3d69da2701d3a83cad6ecb643ab906ea37fef46323f4a86d9f6f7a00d0593207bd3274f362217ef0e57eb4844d1bf9f0a4a072dd47a1ef4f60769078228028b021eb67469419b6374618349814a066b4b99222a708c63c7f8d683b466105d4f99b844addc2e33fd0d436558742eaa06d8dbe6e3d7f3a9823061856182475e41cd414676be462d6d8672cc5db3f90feb5a368bb6145e9c715aad8865a395e0f3513673d319a0442c700e6922cb317238070298131ea7914d625626c91d290d19533799796f0b37caa0c87f90ad043f306ea052632c2312783c9ea6bb6f86aab278c25000611d8b673d3ef0ae4c54b969b66f4be23d6cb327288a31d8d48a4b8dccab923b8af9e9576cec71d0f9536402d9e5998894b62341fa935ce49c3b6477e95f5548f229847f787a56bd90014eec8cf46ad99655d6722e63ce32231cfaf26a946d834017a39338e6ac6ee41cf4a042c398ee8ae42c72f2be81bd3f1a9e453d71d79cd202abe0f3dead695288ee57a7269302ceab0ff00a54ce990e0072bfde07bfe1500937c56fb88e4924679ec3fc6a5a2917a2899e32c5d78c7f173f8735a919536a08dbc9c631ce73598ce6af8fdabc42c072b100bf4f5ada8f200c74ad89ea48ac07ae09a1fa641ce2908a33be59554fdefc71538184c03c53014e39279a8ae9c08b1c734868cab56f3ef669b8dabf28fc2b523cbfd293196906dda3819aedfe17301e30bb5c019b4247fdf4b5c38e4dd07636a5b9ec18f5a780315f3515747636cf92aeb994fb7158974e24bb9597ee962462beca923c986c247ca9e2b62053e527a1190d5a32ca1abb6e994775400ff003aa2a6a9016a16ab4ac7ae78a422744f3e368b2437553e87b53d66f3e25246d7fbaebe8690114800539a4b560b3a9f7a406d6a87cb8edaec1e17e46c77ee3fad5658ade57531cc4290015ecb9c9eb52c68b5086f2df7852474c7a1ab6ad884336d0a80920ff9f6aceda9473fa58f3eea6b83905989fd6b763e30335b32090a823d0d472318a33ea78a00a510dee5b18f4ab6788f3bb140099207cb93ebc567ea73ed8b209e07a52ea5222d3e2096916ee4bfcc7f3ad35e063007ad27b8752642aa7939ad6f08eadfd8fe2db7bb99b642c4a4ac7fba78cff2fcab97131e6a6d1b53dcf645f18f8771b86b16e47b1269ff00f09af873fe8291ff00df2dfe15f3ca834ceb3e65b918673cf19ac0fe3cd7d5d33cb86c4f02ee2319cd6bda7098dc323a8356ca32f536df75267b7cbf90154c74aa404f155a573c0a4265bb56c9fad4974861b8593f826e188ecf48063938c1fcaa3878719a00d97cdce8b321fe01bbf2aceb1ce098c31200e01e9cd43291a51b313e696cb1ebfd297559d6df4d95c364b028a31d738e7f9d4a5a8caba4c063b3ce3e622b43254e6b464126770073c8eb552e37dc498c80a3a5003c4400c669ca1402063ad201ee5955b69fe13583ac3ed42a33938cd1d4a44da63b1846ee71c035a5b8f71c54b0ea588724f18a4b627ed6ec393b940fceb2a9b5cd69ee7bff0085c33e903ed088cc1c80768ce2b65a0889cf96a3f015e449ab9d96d4f942e70fe79e075feb5ced7bb48f2e1b16ac7fd70f4ad20a158638cd5b28c6bc6dd7121f57350ad343268cf35638340993db36d6e6b51e31736cd093cb743e87d6908cd56661b5f8914e1bea3bd2720fd28037b4d1e741244c7ef0208acf84189caa3a865c8e0f5150c68b70300d900e0f4e722a9ebd3332d9dbf5ddfbc38fae3fa1a98ee53356d1310285e9b78a95973eb56c8213ba30ca73cfe74ddcb9ebcd0028defd10ff00c0a9c15b3ce063d31cd000580562dcf15cd6a92ef651ea685b968bba6b2f92000738ad2524e074a9622ca1f2d18e390382696c5fc931cf28047980e0fd6b2a9b1ad3dcfa13c39ff20684e73b866b50b1cd7895373bba9f2acd6d37ef4b46df749e9ed5cc7f0fe35f4145dcf261b16ec4e24ce6b52e405b669471819ad1ee51cf4849eb483a552192255a9141b686553c925585262046c1eb5a36f3e3069082fa3e976bd0e12503f4350119f9bf0a00d3d364c38e692fd561bd70aa3e6f994f639e6a24342dab900a67b903dcd67ee17bac310498e21b573fe7d49a220cdd8385c6704559c82bcf6ef4d88acc3792db4b0ed93da9d850061704d003b6e7ebf5a6ed652780681a2bdc10b0b1e86b98be7ccca3d0511dcae86869473b8f5fe95aeac32bebde93116a35f307270bde98efe6cea8bc4718aca7b1ac373dcfc27add8af87ed11a7f9d631b82a3363f215b9fdb16279df27fdf97ff000af126af26769fffd900ffe131e8687474703a2f2f6e732e61646f62652e636f6d2f7861702f312e302f003c3f787061636b657420626567696e3d27efbbbf272069643d2757354d304d7043656869487a7265537a4e54637a6b633964273f3e0d0a3c783a786d706d65746120786d6c6e733a783d2261646f62653a6e733a6d6574612f223e3c7264663a52444620786d6c6e733a7264663d22687474703a2f2f7777772e77332e6f72672f313939392f30322f32322d7264662d73796e7461782d6e7323223e3c7264663a4465736372697074696f6e207264663a61626f75743d22757569643a66616635626464352d626133642d313164612d616433312d6433336437353138326631622220786d6c6e733a786d703d22687474703a2f2f6e732e61646f62652e636f6d2f7861702f312e302f223e3c786d703a43726561746f72546f6f6c3e57696e646f77732050686f746f20456469746f722031302e302e31303031312e31363338343c2f786d703a43726561746f72546f6f6c3e3c786d703a437265617465446174653e323032332d30342d30375431353a31383a33392e3832383c2f786d703a437265617465446174653e3c2f7264663a4465736372697074696f6e3e3c2f7264663a5244463e3c2f783a786d706d6574613e0d0a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020203c3f787061636b657420656e643d2777273f3effdb0043000302020302020303030304030304050805050404050a070706080c0a0c0c0b0a0b0b0d0e12100d0e110e0b0b1016101113141515150c0f171816141812141514ffdb00430103040405040509050509140d0b0d1414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414ffc00011080115010003012200021101031101ffc4001f0000010501010101010100000000000000000102030405060708090a0bffc400b5100002010303020403050504040000017d01020300041105122131410613516107227114328191a1082342b1c11552d1f02433627282090a161718191a25262728292a3435363738393a434445464748494a535455565758595a636465666768696a737475767778797a838485868788898a92939495969798999aa2a3a4a5a6a7a8a9aab2b3b4b5b6b7b8b9bac2c3c4c5c6c7c8c9cad2d3d4d5d6d7d8d9dae1e2e3e4e5e6e7e8e9eaf1f2f3f4f5f6f7f8f9faffc4001f0100030101010101010101010000000000000102030405060708090a0bffc400b51100020102040403040705040400010277000102031104052131061241510761711322328108144291a1b1c109233352f0156272d10a162434e125f11718191a262728292a35363738393a434445464748494a535455565758595a636465666768696a737475767778797a82838485868788898a92939495969798999aa2a3a4a5a6a7a8a9aab2b3b4b5b6b7b8b9bac2c3c4c5c6c7c8c9cad2d3d4d5d6d7d8d9dae2e3e4e5e6e7e8e9eaf2f3f4f5f6f7f8f9faffda000c03010002110311003f00fcc30d9a46a4070d4a79ae43a6e03b0c75a29076f6a43c77a02e3e3ceeeb4f2d4d4e0e69c453b12c5a36e7a0a07149c6ee948485dbd69bbbad3b38cd3282846a40d9e686a41c500491b7cc69cc4edc0fe74c8fa9a495723355629074ea68dedebc7d2938f4a2a463b767af5a2938a33b7b5002d1bcfb7e74d0d9ed473e83f2a0019e978a695cfb5397e940d0b56f4dff008fa8fd37554e2ae696a3ed4add0a9fcea67b1ad3f88eb2193a81cfcd9f7a95ae238db12bec4eb9ef54d15ffd631d8bd0607278a5d3f4dfb54a934a4b213f749af2a495eecf576b58d9b5f164f0db182cb4b96e39e64da587e829f1eadac4ac4ae91321effb973fd2bbdf05dbaffc23ec52306432ede323fad7416fa299b7309141fee815e74ebd252e5e53a6309c91e7363a96b31be468cee77746864c55ef3fc49713332e8ed18e30ab6ed86e7b0af4ab7d12e4b2ed230bd76f26baef01fc35d5bc71af41a5e923ccbb95be699471047d0b13edfad72d4af08aba457b195ec713f07fe1cf8b7e2878b1349874e923b785bceba9628f6b44a3b8248f9cf61e98afa73f67bf0e7c4df80b67afd8dbfc31bbd620d4b513751dc36a30432141c2e7e66eb8c9afa43e1dfc27d2fe18f86e3d374e5f325e1ae6e5954bdc3ff78920ff00faabafb7d3d24b72368dc4939c74273fe35f278bccb99ba6a3a1e9d3c3f22e63f9eaddf35389c536949cd7ec173e12e0bf7697ef522fdda753421cbda9f4c4e69f502614dfe2a7535a824377269ab4e0bd4d346338a68a425145148a42c6d4adf32d35386a73291818eb557286d153436924dbb0a7e519271c54f0e94d363f7d101d33bbbfa54f3580a408f4a0f357a6d0eee15dc2332c64e0327209f41ef54da365ce41057a8c51cc8060e2968a281a1bdf19a7af1de9bceecf6a70c76e698c5e2ae69bcdd4607f7aa9f15774b1beea25072493fcaa2a7c2cd69fc4765247f2fcbcf53fa55bd2a2610c4a4003ad5193f756a4672db73c75e455fb1cc76f10cf217fa578936ec7b11d4f57f86b62ede1d794a821a7603d88aeb2cadcf9cc9939ce3815c8fc3bf16e9ba6e950e9f79731431caecc59881b4fad7a369faa787dae10aeb3a7b17382c6601471dc9e95e0d6e68cb53d2a76b58d3f0b7866fbc4dae5b695a746d777f33011a6dfbbeae4f6039fcabee5f843f08f4ff857a218a11e7ea97243de5d639638fba0f602b80f81ff00f0ae7e1fe8ad78be34f0f5deb97815ae275d4223e50238453bb818c67d4e4f7af4f9be2f78223015bc67e1f8c6760ff89943d71d321abe6b195aa49f2451d908a3ab924465dabf2b7a7e1e94424346429ce3ad798699f1ebe1c6ade20bbb68bc6ba5f996c31fbd9c4684e39daed80df866b634cf8cde08d5ad27b8b3f15693e546ed1b992e5508da704e0e2bc39d2acb789b5d3563f0628fe2142fcdd29769dc2bf7eb9f9c8ab4b48b4b4d098e4e29f4c5cd3feb59f52429add69d9f9738a6f1d8e69806edb4c5fbc69cdd2917af5a0046eb471df8f4a5fc69f0dbb4f2048f93dcf5ab355a91a0cb75c56a43668b109a4915707037719a85638edc61325ff2a7bc81b018eec2f46e9596e313ed6d1ee0ae406f4e957eca62f198de147898e4f97f7c73d7a7e9595b4646e5dd9f43d2ba0f0ad8c7a96a10db999ed8cce1449d4a92701bdfdc7181cd673692bb03a1d0fc37a84e7c9b0dd7d6ec3ccf2147cc7b13b7d7e86bb9d37e09db78934f9ae2e2e56d6ea24f39648437cdcfdd720119fa915e93a6be85e17d162d36ea29f42d7963591ef2e20df6ecc384917041e460820f7e94378bbed1a6cf1de6916734923796faee91247e68c9e0efdcac1be99af165889b97ba747246c7ce1e2ff843ab78751eeeddedb54b11f334961279861e7055d7aa9cfb5704ca55b0410738f9b83d6bda7c49ad38b899d27f384798f73831cac99e8f80377e22bcd356b14b856b9f951158e1539624f6ff00ebd7ab46b732b32251ec73fcf5e71f4a7e3f0f6a56c96c29c1fee9fa527fbd5da9a68038abda2b2477c8ee405439639f6aa3c55ed2515ae002a08359cedca553bf31bd71ab2cdf2dbab4ae3852abcd5df32ea48c003c8f97924e4f4a8e24f2f6aafcaa0e70bc55bc9dc78e7ae1476e3fa9af2656e87ab1b9da7807e1edaead6b05d4935cdcdd4d23451c0aa30cfbb000eb935f707c2dfd907c2d0f87f4f93c4fa15d4d7f70aef2bc57861581401b1708064b67af6f7ac5fd86fe11d8cde01d37c657f18b9b99a5996d15d7290ed765ce3fbc483cf6afae21b7d9cb6e27839cfddc7a7e393f8d7c1e6b98ce355c20f63e9f0b838b8294b73c5dff00637f86771233269ba843c70ff6cc9271d492b9fd6b4341fd927e1e68b74f39d32e2ee429b54dc4f90bc75036e33f5cd7b1c683f8462a78e30ccb9eb5f332c7569bb5cecf6308f43c1750fd967e1b699a4ebba9dec3a9aadbc7b837da158818cf194e3278ff0038ab36bfb15fc3a68e295e3d49e4e24491a68c638e98118af5cf1a7950f8575cf30030cd6e63dbd7e6c0c0fccfe95be599a155e9f281f4e2b4fadd482dce5549499fcf6ad2b286a5551eb457ef173f37100db4bf8d1f8d1f85171317cb07bd3b18a4a5393d3a549221ce319a295bf5a4a0028a2940cd0027f1018eb56523daa115f66efbcca2a08ffd603da9eac777271ce79a0de3a215a41192a872ddcb75a4795b6e0907273d29926d0cc475ea6960b79ae8810c6cfce381c527dc7f13b0e5f315b7a8f973ce7b8f5fa57ad7c2cd2749d596ee7b65965d6ada3f3134f651b5c0ce4e73dc715c6786749686e1a6bbb7b9980036c902070a431f9593b8e29fe5dfdbeb4d3e9515c42e1cb2f931b831e4723a0e3dab92a4a134e2a46fec67d8f5cd53c613788ae51f508a6b65448a0f2ec64f9e250a063cb60430047bd579345b6d3dae2e62d7f5a11b1e7ecd6132360f0770c05cfbe697c3baf6b7aa58c50ea3e0b9b5e9b214c9b5d4b0cfa638af41d3fe156a3e2c96095bc1ade1483e6fdfc929d832380599339fc4d78b2a90a4f5674c70f39688f29d27c13278db509bec62f9123628ef7c3190072c4939fe75cfe85e1692f3c650e92d1ac81ee0439ed827039edc0cd7d69e17f87373e0fb0d467b685a65b6b470d29551b5caf4538e73d2bc3bc6061f861a3c62378c6b97aef3078cee68be70173f419a54315ed66d44e9ad87f6514d9e67f183c0769e15d5227d3668e6b778b7b2a1cb21c7435e70a063a62badbcbab8d56d6e1269099d97786ea480735ca6eddc918f6afa1a2db8ea79534afa095a7a1ae6e94fa1c56656b787769ba0a5b1cee39edcff00f5eaaa7c3a154be23a758ff4ab2b6fb978fba3939e838cff00314cf3a28c02eea01e7839a46d521c1450ce4afcb8ce09c1e381fd2bc8d753d98f2add9fa8bfb1e787ecb49f80be10bbb48e685af2cfcc9a2694b2f986424b01d0648e9ef5eed83ce437ae057c73fb3cfed05e27d17e1bf87bc3f67f093c41aba58c0b6d1dddba48a92f2487ff0055800e7d4d7b57fc2d8f1e47ab4ac3e176a77da7347098a385c2490cbd58348ca1581cfe95f99e3f0f525899cedd4fa9a55a0a9a47afc328f4e31906a65906ece1bf2af26b8f8a1f106163e4fc1bd49f6a96f9b5587afd155ab36dfe2d7c507b591cfc19ba4567c2efd542beef4da62cfe35e6fd466df3a29d68b3aff8d1ab59e93e09f36f6e7eca64d42d608989da0bbcaa307f2e7d2bd2e154921049e30086cf0c31d47a8af9d3e2c7c3df167c77f873a7db6a7a15d786b55b5d404eb0c056e808f0d92df3264e4291e98af29f08cffb427812f5534e5d5353b3552896faa5919a30b9c8c608c71ef5dd4b070a90bb7ef76391d477d0fcc9cf38c51f8d1b79ce69d5fb59f9d2138a3752d14030fc297f41467da8f7a090cfaf269295bad0178268012941c52eda36d0021385e3a8eb52f0c000327f954657e53838f5a9635c7cd43d0e882e6d05b7b77bab98e2552ccc70540e4fd3d6be81f843f096d6e2e21fed25daa5b7797dcf3d2b90f87b67043b2e5add1a4270b230c91eb8f4afa1fc0124179247192a9306c03b493ebd457cbe658d69384343e9b2ec1aba9c8fac3e0a784f44d2f4b8a2b5d26cd63c637796376727bf5af60b5d074c13652c6d55f3f33792bfe15e69f0a2c6286ce3cb12768042e781c9feb5eb962ab0aa8da58e3af5e2bf35a98aabed1a7267d5d5a708aba45ab7d26cbaf910eece49550bfc8547ff00086e8175334d3585abccc41dcf12b371ee4727eb57e09124655d996fcaaeb6c8941651c9ea056f1ad2b5db3ca9efa1e75f14bc3f69a7f836e20b0b350ad2abb471a8c9c9e4f4ec39afc9af8d5e05d6745f1e6ab0df457020572eb2ba900c647ca41f4c106bf65ef1229a4cb957524e558762318af973f6e4d2e16f85f23c102260f94cea837600ce09f4ed5e8e59987b3afc8fa99e230fed693f247e64c96205ce0708b13b6e53f7902e4fe95c4eddc49c77af4a8ec517c21e24d45c00c91456b112df759dc6ec7e0a3f2af373d8e3af35fa7e1f58dcf8ea8b9741bb6b43458527b899092098f0b8f5dc2a856b7870aade4848c9da307fe04b5d153489315efa3774dd0618e105c995c0c1ddc0adc8e14b7b773e52853c1cfa71f8e6a186356500f19efef56e7c345264f186ff00d07ffb1fd6bc2a9372763dea1057d4fd77f80b7527fc28df01b0766ce8d6d925892731af726bb98edc33062c491ee7d076cd71bf06e116df087c15080155347b55da38ff00966b5dc2aef0bc7d79afc7f17526f113d7a9f4d18a8c55912c30fc8a37b37007538fcba548d663cbc2a01fee8c63e94e4555c73b6a48d49dcdbc8e2b1a539a7ab3093d4acb185190bbfb8ddd8e298acd1c8497c1e98e83dbf4ab6fb3e5f5a824f2df746c3f1c53756519593295ba23f9eae29c307bd232d395473c57f429f9989b7d39a4a939ec3f5a6b2e7da801b4edbc01405cb629680108a51d08a3b814edbf9d0037b668f7c63d07049fc052bae547b569687a68d535382d89c23ee326d001d8aa58f3f81a4da49b2e9c5ce4a28cc27e53f97ff5ab5342d3db52d460b700e1882dc57a26b1e0bd3f57f0fc32d95843a65c43f2af9449f338ef9ea7deb13e1c68ef1f882732467fd190ee07b124815c73c442506e3d0f5961654aa28b3b2b5d534ad01d23ba7f2a18c745193f5aee343f8f9e10d223cae99309540026f30e0e0f5af2bf10786ede6f32fb54bb68b3fc29c9fa62b8dbefeccb76f32dece499074333f5fa5799f55a58857933d3fac55a2ed13ee3f00feda1e1fd26e92078e558581f99031239e86be89f08fed6de09d62d94b6a1e54b8c796e30ff005c66bf2563f255a2792d562493906172a7af43cd7b3fc0df86717c40f1958e8d6d732a49744e5f70dca063a1e6bc1c664d878de69b3d0a18eaf3d24933efdbafdb53c1967aa7d952595cab05caa64633c927b62afc7fb727802ee6b886c6e9ef6e21f94c0b8566e7ef0dd818f704d7cd7fb4c7ecb7a5fc17d0f4fd52c6f6ee7d3e76315e3b72cafb73c91dbad7c81a95d6970a8921b067457c3491dd31727d319c63e95cb86cae86222da9334ad567ba89fad1ff000d61f0f2e6350fa918ae30a5a3da3e5cfb9233591f1c0e9bf137e0df881b47bb8afd45a19d1e370dc2f55c7638afcdcf07f87ee7c73f6687fb4752b5b6e5d3ed1893628246e5e412010410338c77afaa3e0efc3df11fc3df0b78ca5b8ba92eb4ab8d0af3ca60d98f718c90f83d0f047b1ae3af9652c25555232d6e6b46a549c64a51d0f8875ebe997c2325995c5b35da30607a7fac383efd2b86ddf2f4c77eb5f62e91fb1937883e19d8f8a3c45e253e1e3abdc2da68fa7c56c653712302b1bc8430c0621b9c57c837b66f67753c120c49148c8dc77048c74f515fa2616ac2a46d17b1f2588a33a6d4a4ac995bae6b57c3b86ba70783f2e3d3ef0ff0acbdbb4135abe1f86492e256890c8e8542a9e01e4d75d4f859cd4fe23b7b75f950120b678a9a489a4b79941507072c58003ae793f4fd6b3a1d1f59bad925c4ab6cbd7835b7e1bf01c7ae78834cb4bcd4e4b78eeaf23b633471f9aeace428f94903aff3af126a31d64cf62352516ac8fd58f873f16bc0ebf0f7c3d07fc25fa0c5247a7c08c926a11295211410416c8e73d7d2b6352f8fbf0db47b9b0b6baf1ae8a66bc7f2e2fb3de24c3763b94276fe35f36e8fff0004d6f072c714777e26f103dc01f3ba2408b9fa143fcebd0742ff00827bfc3e86e21f3354d72e238c7fab33c68bd3a9da8335f9f6230f96aa9297b5bbbec7b4b115147de563da2dbe33780aeae9608fc61a1cb28ecb7f191f9e6b45be2478499e48c78a3475661defa2e3f1dd5e46dff04fbf87be6664bed6a7573923cf8d377fdf318aded0ff0061df84fa148b71278656fe651855be9de643f552769fc45717b2c145ddcdfc89fac26cee1fc77e1c37014788b4b53b4119bc8f079ff7aa4bef1f7866cade4b89bc45a59811496f2eea3623f00727f0af28ff008668f84dae7c4ebed24f82ace28ecf4e8a591619658d4b48ec3855600636e78eb9aedad3f655f851a7daac30782ec76e41dd2492bb37e25aa2786c27c4a6fe669ed657d8fc2b3edc5397bd37d29f18eb5fb89f9e06de7919fc68da3b11f9d3d71bbe64269edb1b201287b77a00857d734fe29adfbbc8ce69579507149898301b7a7228e7b9cd0d9d84e3f5a6eef6a10215bee9ae93c0f81ac303c3c96d2aa37a7c873fa6efceb9a3f30c55fd1ef8e9baa59dc13f2c526580eea7861f88cfe759d48f341a3ab0f2e5aa99ed17d7cfa4f876c98221926225556ea013b863f038fc2a0f080126a7ac5cc6813cf994156f61c8fccd2ea9791a5ad95e04f3ede1b74b77caf2a723691f5523f3a8fc2730fed4d560271b27debea4139feb5f3ae2e30923ec64e32926756bf0feefc5b749696566d7976c728a8bbb773cd7a77877f629f1dea56b1493d968fa62ff007af9be61f8006b67f67dd7acb45d719ae25fb3b37475ebd7d6bed8d07c4969269c8e9282aca186d39073fa8fcebe5f159856a2f9208f529e16135ccd1f007c46fd8ef5cf00e8136b3aa6a1a64d0c6ea196dc10793c000ad741fb20f8663d2fe2d69d296dc033e320630718c63a74aec3f694f8cd6de34f102783b4506f9ec4f9f3ac6ccc8643c63df14dfd98748961f8851dc496e638ad40055be5ea7fa5744ead6a943f7af5b02c3420db823ef3d73c2fa6788ad8daea56915f5a4c9b5e19d03a9f7c118ce2be7bf107ec7e747d626d4bc1b26916de736e7b0d4ec94a13ea8ebcafe46be92915c346ead9511e36d58d3f5886e2161e62fcb856e7a7f5af1a9626545d93b1e6394e2aeb53e79b5fd9da7f1035a8f14e89a01306196eac5dcba7fba76a907f1eb938aeafc4de07d3743f01eb3a7db2e216b09e33bf9620a1e09f4eb91df35eb5a85e2b427648bcf5c926bce7c7d7490e85a800db4cd1f90ad9c0dd21d883f3615e4633113755252b9e861652a9a4b4390f884da12fc28d375384a41a368f1a6ae3b7eeedd43ed1f8617ea6bf15757bafed0d4aeae8809f6895a5c0cf1b893f81afd47fdbc3c409f0cff665d3f40b79ff00d3b579d6c23556f9bc80c24931edf2a0fc6bf2c5db0dbbae3f527a9afd2f87e94a341d59fda3e7f34aa9c9525d08386c8cd74be08ff8fc972a0e369f4ee6b01e6f3140c283ec2ba4f02dbf9b7531fe0ca29fc49afa2afa53678d455e68f42653240083918f5adbf00daffc571e144258efd66c94af661e7ad657951c388d4e48ecbcd753f0c6d7ed1f15fc0f6e72aadad5a3723b7980f6fa57cd5592e46df63dba6bde3f5ca38ff78d8f94f5ad1b5dd1fcca319aad6aa9bbe6c74e9b81ad28da316e180dbdb9fad7e4ee9c5d47ca7af39689166dee242df330db524b226de5ba75e79e959d14de59e7e624e3e5e707de8bcbadb0ccdf29e0fddfa7ad747b3d8e574fded0f39f07de0d4be3af8e76818b7b1b088fb650be7ff1efd2bd2a48c2ab67236f4af18f00ea51e9ff00b4678dada72cb26a56762f6df292a4a5b8dca58700f7eb5ed322bc8d80ad8c73907fc9aec70f72c5ed2b1fce8f1819a7ae1b1c9cd454e8fef6075c66bf733e03a936e1b78c8fc699b8eecfaf5a036de0f34aaa19739e9430b92c6b1f008e08fbd9a68648f8073f8527f081e948ddf02801f26c65e2a2e07b51bb76474f6a4fc281a1ebd33d69dc3f047ae7f2a6a8f988e94e0b8c63ad05276773d27c1baf58ea9a4a697a8dd1b69e2052366fbb20ed93ed56f47b8817c51a8ad9c9be3d80020e73803273f85796f2181383f5fe9e95d27826f0c37d2ed6c49b78f7af36bd1f71c8f770d8be66a323dc6c3c40da7624572590648039e6bd8afbe3edc785be1dc56f67391a95f0f2503758d36f2e7dcfe95f3958df1b991158f38e71dfdab9cf1e5f6a4da8aee91d600815593938c57ce2c1c2b49731f46b14e9a763b4d13c683c27ac36a7bfce9d918390d966c9ea4fad7d09fb38fc78d2b4ff0014497da9b79764d01df2480b739eb802be38863b5bb8c032cb17cbf33ba631c75ce7a5769f0afc131eade284b73e3593c3b0c91330ba36c660cd923681b80edeb5d15f074a54da94ac6987ab5aa3f755d1fad1a5fc7af0dea5afe87a0e9d70fa8eada9c26e22b7817718e20326490ff02f607b9ed51f8c2e754f0cebd06ab6bba4b1ba6093c23f818f435f26fc23f12e87f0563fb39d4fedfa85cbfcfab4b0a869971f77e5762141e71c57aa78b3f6b0d234b86dad64f23c411dd438916c665695181c7ddeb9af86c661e57e586a7a11a7ece4a563dc97c4c1a748e57910b703d3a563f88eda5f156b9a369a811d63b83a83abb6030897e41f4f31938e7a567691aec5ac78634cd544135aa4f16e58e74db201c6323df35f1e7ed99fb4a6bde01f1a68165e0dd626d2f5386d256b9b8842b1db2b2e179079f93ad79d96e0278cc4fb25b8f13529e1e9b99c27fc1477e281f177c60b4f0cc12af91e1ab5f266119f916e1c2b3e0f7c0c0fc2be43760cbc71fa55bd5358bbd7b54b8d42fee65bcbbb87324b3cedb9e4627249354f6fcbc7a62bf6bc3d0585a51a4ba1f9e56adede6e637f0addf0dea27498e6b90864c4a836838e8339fd6b0bdbdf15d3783e146126e01977b641ef8515a54b723e61514dcae8dc8fc7cfb94a5a9550790ed9cffe3b5d1784fc6dabe97e26d2b53d334d135fd8dd25d5ba04690330604020727f3ef556c6de39ae2d91f69563fc2a07415e81e058bcbf1c785cc4e611fdaf6a0b2f1d664cf4c715f3f5e74e31d8f5e319732d4fb43e1afc66f8efe36d386a49f0e6c4d96f3b81492d9d88ebfeb5d715e8ba6fc40f8cb242c25f866a5f3953f6e8971f9c9cd7b04ef1b08d5221903ef119073d7afbd3e3b32d1fcd233f1c124f1fad7e6d5aa50954938c4f6573f2eacf38b7f107c5bbef3962f0869da636ccac97978ae0bfa615cd646b1e1ff8dda85c5b489e23f0ee970794c6e56df4df39b790785defcf4f5af638ed21590fcaacdd406e94f9630b1ee5f6fa5671c5469bbc6372753e53d1f40fda1efa396f11f4fb5bb67de9a85c69b1a5c8223d80a812608da0755ed505cfc3ff00da5adee26bc83c4f6578adf318deed936e474d8c028fc2bebc68d538518edd4fa74aa2b0a609201fc07a7af5cfe35d3fda516be02629cb567f3c8dc7bd3a15c4849e9b78a6b295f7a9ad49f3c81d0ad7ed87e7cc59231e9cd47b76e17200fad5a91475c2afeb516de9c03f8549233a0cd3cafca40e4d3645f94f5fc29e8c0ff0e29a019e4af3bbad288578e29f8eb9e94641ef4ca4c55853ad2ac6bb978cd3c0f945395be600f4a5d060d081daad69730b3be473c292ab91ee7ad45f29cf38a6b36dce39c73d3af53fd2b292e65a9d3464e334cf48d3afe3450aa7041ceefe95afa4c56bad5f37dafe63fc3cf1d2b8ad4835832cf17fa994061fec82335d17c3db98af35a8e3b97fdd63248ebd09c7e9fad785529f2fbc99f510a8db5168ececed61d0af9646c100ef0f18049c1e8707a7b57d49f0f7f686d07598ed6cb56d16daebcb0b1c6df6747505700633d3a76ac7f87bf07fc29e2dd3fcc6bd9e167c2ee50abc1ea3f2af51d0ff00629f0ede18668354bc8551b2b22e391d477af02b6214ae8fa6a327423e47af7873c4fe1ef1469fe4db5b5a8caed784a21cfa8db939fcab0bc53f007c0b79a69b88fc3ba758df23f9e26b4b58e3909c7738aeb7c1bf04749f01aeeb056965c0ccb310cd9ea7071c73517c4ef1143e1fd02e6eaea5f2e3850b10780c71d07ad7ced4a9539ac98fdac672ba3c8be207c53b2f0ee8bf673b4bdbc5e58400765eb5f983f177c6d3fc42f1f6abad4fd24936c6a7f8554fca3f9fe75f41fc6bb8f15f88bc3571e20b6b5c59ea176d6704aaa54c8aab96d83f8b033f937a57c98cbb5b6b21593f881eaa7b83e87b57dc647815420eabdd9f299b62fda4bd944857ef3668270b48bc1623b52f0ddebea8f9f117e6607debaaf06ed2b329fef31fcc01fd2b955f9580ef9aea3c23245142f24b2ac7b9cae18e30001fe35856f82c7450f88ed74b8c0bab6c0c28623afb57a178060693c71e18046146ab68c4753feb973fa0af38d36ead56f2326ee0f95c9dbe6af4c75eb5e8ff000a7c69a1683e3ef0d6a5ab6a56d069d0ea08d72e5c70991f37d013fa57cbe269cf95a8a6cf6a325ce8fd6d5c6f0067006393c7d6aedb93ce7eefa578d7fc34f7c31b5bc6b46f18585c47b15e3b881cc91ed39e0b28c0231deb7acff68ef867711809e32d3067f89e42abf8922bf33587ad194af17bf53da96a958f4892358cef00ee3492483c9e38e9fcebcf6ebf688f86d1aa13e30d348271b925c8fd055693f688f86891b39f1a698517aec94b9e0f6006694a855e9122fa6a7aac87e5271db3547eea9ae026fda73e17348b18f1a69a59b2b8cb718fc2a8b7ed29f0cd5847ff0009759976e9b63948fcc2d612c3d68ad622a6cfc48bdf0ecd0dd4888e8eaa33b94f068b5d1646b9033cece78ab8dcab3b86c91c2918ab3a6a379df30f9f6e4e4d7ef33aad2b9f9973328be8f237473d7b8e3f3a8d743924e847e2715d0347b95986d014f037e6921631b83952436e2b8cd62b10ec2e6661cda0bac3bb729e7b36692dfc3ecc402fb49e80f5e95d45ea45790bba9f2e5c8f954601eb9fe5542165dca4f27ae5baf2288579341ce628d0f19225edebed51ff00641da1b782338adc54f25998fcc09db8f4e2a300700e3693915b7b565f319d1e8a770f9fbd5e83c386493fd7607ae6ac6cf9578f97352a5e416f180cd839fc47352ea4f64176f6223e196590a99096c67ad516d145cea961a5c0fbaeefa78e050bce37385cfebfad5ad4fc44ad13a5aa9de460b91577e0c9497e2f7860ca825c4ece377f7846ccbf93007f0ae9c3d39d47691d11959a6751e2ad1e2b1d52ff004f111586d6e24802b760a481cfe15ccc314fa05c8b8b70cc99e55472338ebf97eb5eb1f1af439749d65bc4312b49617b84bbc0cf9730c00d8f438ae06de65766fe2572791fe79af36b425466e333eae8b85685d3d4edbc0ff1b27f0d98924ba936aa827d01ce0fe95f4af80ff6d048552096658e28f8fde1c03c7d2be393e1b86ec93180bb86300fbd20f0a5d34de5ac6c54f3b4724f3d17dfdabc4ad85a152f2bd8f429d6ad04a3b9fa59a4fed5da4eb9a7a16d42de2955be64dfc85e99e95cbc7717dfb4b78c7ec362f21f06d9ae750d457eecd82310a1ee79edd05717fb32fec6ba7dd592ebfe3b824b847506d74969880573f79f18fc8d7d9967a7691e09d04c363690697a55aa1631daa040001d063b9f947a9ce3b57c6d6746353d9517cd2676f34a31bc958e1be2c7c17b6f1cfc12f18787f4cb65824d16ca1bdd27cb5f9a2ba843ba053fed2fca7fdf3d6bf2dfc7bf0e478cbc329e33d02006665cdfd9c6304f182e3f2e463ae4d7ee0fc35d1e7b7f0d4726a5118eeb54733cf0c9d50303b63fc1702bf287c2b6a9e15f1f78dfc329f2da695afddd9c4a57a461d8a823d391c57ea981c3ca8e161cdb9f018bc42a9886a3b1f16aae378239efc74f5cfd29a715f527c54fd9eecbc44d26b3e1e912c35163fbcb561849db19257d33fcf35f3f6b7f0efc47a0bbadce9570ca9cb4902ef503d4e3a7e35db7254b439d55dcc4e79c574be17b38750b358e75de81998ae71dd47f5ae695b1214c1df8fbbdff002fa62badf07465614190a195f39ea3e7f4ebfc3fad615f485cedc3d9cd1d459f8634b6e62b531be7ef176e98e9d6bb1f85fe01d03c43f11fc37a5ead6b717ba45f5e2db5c41693b24a77291c30e7ae0e3dab26d17f7200ea060e2baef84b95f8abe0665dca575cb4c63b7ef0702bc0ad5671849dfa1ecd3a4a533f43bc27fb38fc34d0b478edadbc1d63244cabff001febf6894119e77bfcc393d8d6dc7f01fe1d2b6fff00842743076ed03ec8b8fc8f15dd795c9c74f7a7ae31cd7e693c6557295e47d1aa518c6c8e293e0b7812668e0ff843b4101cec0c34c849031d795ad4ff008671f86d78a566f05694aaa00d896b1a07e8724aa83dbd6ba9b351e746d8c15ff0ad4fb54abb54393db27e95543112e649b386b41dec8f957c07e1bd0a4f8fde2ef0db787f459744b1591eda33a5c198c871c6ed993c93d6bdbedfc01e1fb3984b6fe1dd1edcf5fdde9f164fe62bca7e1cc08bfb4e7c452198ac6a578e482ee87f99afa1a484aae31f778e3ad7a388bd9b45c39523f03923863dfbd9c96e3079c55bb228b37c8bbc85c10c2a25fde2ef23249cf3c53aca391a799be6e141e3bf35fa5bbf29f9513dc2b2e330855ce7e51496a59662467d4e452dc997d188071f7c0fc69d6c461988451d325f22b18ec572b64ad74cb18766c80d81ed8cff008d2c5f62ba6527706db9ce7daaa6a1756d1da471c6de64fbf2db7b71592d78d9c8902e17f84d7453a2e4b41a877362e16d6df712e59739033cf4accb8be8563022539f7359ed33fcdf37def5fa542cc7031d6bd0851515a9ac625892fa49304b1eb9c66a0672cdb89c8ce7f5a672cded47b574460916b4d86b1f989c9c7619ae83e19ea1fd9bf11bc3f393c8b9db9f4dc8cbff00b3573cddea5d2ae0d96b5a7dc0e0c772ad9fc6bbb0cbf7b12672b459f6dea96f6faa58cb6b731acd6932b24a87b8c751e86be72f18784aefc03aa614b3e9131c41311c276d8def9ef5f46f87d7fb4f4db79739ca727d6b56d3c0e3c5774347364751379fbb16c464b76c0f41fe735ee6639646b53725a3b1383c73a6ec7ce3a0ff00a560aaee38c8e3dba57d23fb3cfc309af35bb7d5f50b459fcb5cc11c832179fbd8f5a8be247ec8be20fd9fe3d3f53933a9681783fd7c28c7ec92123f76ff009f5e9f4af48f843e3eb7d3ede15122831aed6caf4c7afa1f6afc53358d4a37a715a9fa565f529d44aa367d37a0c4f636665ba7f2940ea4e000064e7dbfc2baaf04e8f1f8f2eedf519d7ccd02d9b7c0ac30b73283c31ff646381dfaf15c0e89e1bd6be285c58c328974df0afcb24f21ca497ed9cf95ed1f1c9ef8ec39afa334bb3874fd3e182dd55638d0044403e5ed8001f4abe1fc81b9fd66bfc8f173acd631bd2a44b71751c331cbb14fbe58f3c0079fc0015f8cda4f8806bff1abe27ea6398ae35c799533d99b8e7e82bf617c499b4f0feb1759d822b2b861cf4f908afc59f86738baf1978ce745f95af49c039e878afd2b1168c6c8f88a2efab3d9e66c2992270a09ddf4ae4bc556770d6a6fed61845c5bfcf22af2644f7073fa56f5b3892d76b723214fe55486df36456191ebeb5e3dcf42f6d0e175af0ff877c490c1717fa45bdd49281b8c80861f883e98ae7dbe13e8d6b281a5decda794e52371bd3afa939fcc9ae9f5ab1fecd9386c42edb979ee7b5575b94642c18e718c8eb4a51e7562e9d6749f31cede782f59d2e3dcd6ab3c18ff005d6ae1c1fc09ad4f83b19b9f8b5e0a450eaffdb96a369073c367a62b7f49d5442a84c8c0e3ab01d735bda75cd80d774fd6238e28f59b1996782f12350eae08e480003d3b8af2311856e9c92ea7bb87c741bd4fd2f687ccf988c7be46052345b7803f9f35f1469bf1b3e2c6afabc501f89361a6d948702e2f34452cad9e012aa7f338af6fd17c1bf17356d396e57e2ee9f346dd66b3d061940fc7b7e55f9b62f299e1df34a47d0d2c546a6c7b5db29f300c1c8eabdeac6d769ba65413fc85790c9f0afe25ed474f8d17518ddf36dd0adba56eda7c2ff126f55bcf8abafcc0e372c5696d183d3938427b7ad71d3c3a859b9a1ceabbdec737f0dfc369a4fed07f10ee8b34b34eb0cadf2f45700aae012782bd4815ed6ce19b1e599081d4e307dfad78b789ff0066d96f35abdd6ed7e23f8834fbbbb012696060aec00c283b4a838e7b77aa8df027c576ebfb9f8d3e284427215a346e3d3ad7a55251a8b9799129f36a91f900b1f40770e335b5e15d1e4d62e352d823c436c1c891b1fc4071eb599b0ee932b91b7f2aef7e09ff00c8c1a8c6e1b26d10a810f99cf9a3b7e5f9d7e8f5e5c949c9763f324ae73d67a7d9dd6acb6d7afe5c61033794c33ce3ae47bd50bdd256d752bbb59033985fe42c30483c83c7a839a3c57ab2ff00c2c8d5654fbab384da530728002318f5cfe55d4f8a1166b8d1af97e65bab4196db8dcd1920fe9b6bbe8535c89b5d11d16b18b0e931246e4c499c601031f9d6178b34f4b386da658d638d97070b8cf38aeeec2d0cd6a5769f957f3a7ea9a6dbde58f97709e6c58e17b8fa7a576c6d15642678ff00fbc1947a953fd2a36e1727a7723915e9563e09d32d6413496ece8a3715794e3e95c9789b451697ccf12030483708d33c7b75ada320461b47f28f7f4a6f0bc77a8e3cc32e3e6787a6579da7a73ed56fecd3b64089c8ce385aa6d0cab8ce79a4208c95e1d7047d413fe1579347b966505767b9ae8fc35a0d9b6a56a2ed44e8ee06dfe1e7e5e7db906ae954e49a626ae8fa3fc37f11fc35e11f03e957dae6a411ee2da3922b2b71e6dc3865dc3e51d3a8fbc475ef5cc6a9fb6178a2d9a5b7f06436be0e85c953aa144b9bc91403f21765c440e3a28fc6bea9fd9e3f633f855e2cf857a578aef2c25d4751d4a0325ca4b390b6d22b1574503b0604739e9c60715e5ffb447ec5ba6f8456eafb4c885969c5c2c53c32646e39c798b8e3eb5f415ab54c543dd670429c69bb9e11e1cfda0be21dbf88d6fd3e21dc6bb6b776eb1de597899a4b8b475e18c4f130236824e19706bdfe1f8cda5e9914577e15f035a49ab4d6ebe65e6a734cfa6c329e1bcab624961e996c0e9d38af88751d26f3c277c12550bb490ac00e42e38e95efbf017519351fb434e77040396c6dec40c63dc57c46321cb2f7e3a9ed53ad351b465a1ec56bf16be3df84efa7f1049f13841249e59834d8ec11ec4a03f2a7978f957000e00e9eb5ee9f047fe0a7da36a5756ba0fc57b2b7d035491d506b3a6ee92cd9c9c7cc3ac7f8e7eb5cff00c09f8276bf172df54f14f89fed51786866dad2c8bb46b2c884ee90739233c0f5f6af5ff87dfb1cfc2ef0b99e5d43c316be21bcbe97719356896678e3e30801185e3ae0715ebe0613f67791e7d66a523d87e3a7c48d2741fd9f7c5de28b4bfb7bab67d31d6da782557495a41b502904f5271ebc1e2bf1bfe0d4d3dbff0069dfc612459a7dd203c1619c66be9dfdb83c0fa4fc06f0f6b1e1bf0f6bba8c1a0ea6bfdabff08d09435adb4c0ed52a0f207cc38071939af99be17d80b5f0ddbcbe660cbf8743efeb4abbdc29c6c7af59dd41751b184ee4624b0e8579efe95099b6dc3f0586318f4ae67ed6d66c8e8e61b862377f74fd477ad5d3fc4105d379727c9331fbc47ca7db3ebed5e7475362dea1a78d5ac258b00cca0188e3ee9c7ebcf15c4c8f25aee12854963f95971fc40d743a97880e956ecea1a599588455fae466b9ec4f7589a7da6490e5cfa9279a7629ec36091bcb72ee18e7239f7ad14bf11c68bbc600ce73ef54a6416e4e19466a3126e122fcac71938fad3123aad37589231b37282782a0e07078aefbc19f11356f0c5d24fa5ea5358b7711b7cbf883c57905add49e58528b91d0f7eb57a2bc758c8e849e39fcbfafe55c188c352aead511d746b4a9fc2cfb77c09fb51413da98bc530881be5d97d680ed3cf3bd7b01eb5f4169d756ba859dbdf58cd1dcd9cd18922923e43a9ee0d7e5d784fc40fa86a1a9bab1105be6d636c7058afce7dc6ee3f0afb13f61ff0012dd6b9f0a753b3b8919974bd5a5b5b70cd9d91b22c817e837fe95f9c67194c70bfbda5b1f4d84c53acaccfa06f613346abd7279aa924276e0f3e8315a6cdba4273f2f6148d0f1923f435f25ed6cacd5cf621539558fc1f923dad32e597231c9aed3e0825bb78a2e638fcc7bb6b752c865d8a479ab80083d491d3b572378832cdf2fcc722af7827c51ff00087a788f52431a5ca69cd15bee40c3ce6915548f42339fc2bf67e49558b8f73f2ca6ddcf3abeba9bfb52e2e2427ce69d9ddb24e496e7f3cd7aa58de7f6cf80acdc11bacae0e1bd15976b0fcc2d78ef9843641c83d323ad7a07c33be3770ea3a4c837c53c323a28ea250018ff00f1ec57d159c62976b1d723abd32f23d8aace140e391ed53dcccaca3852cf83fad72163aced995a4050774e8738adf8750df7109c92aa7fad4f2f72192df498631e0e321700e7249e2b2e4b57babe31ec0561c23e3939271cfe35a71dc4d2ea52f92424b2ef1139ebe6638fcab1fe1dea335e7da21ba95db50b2764941eb22b313bbdfe72dfa7ad5a121979a741a2cd3c2218f74b6d2432b7bf980823d080bfad52b14792dc231c1418c8feb573c4d3b1bb6575f988e7deab593191805c80c396a5228a175366e3e61900f4cf15a9a1ae6e212060a3e463ea0ff4ac9d597cb93006483cd68e8371ba78bb6d6a6b6b89ab9fa37fb12f8e26bcd1759f089994dd69d32de5bc2dc6e82724b11eb890b7e75ecde3ab683c4178ba16a4a16cb5ab4fb39e30639431d8c3dc123eb5f017c2df88579f0cbe25787fc4762e91b35bb5aca926409519b18fc0853f81afb9752f88d65e2ed0445e25d26eb45beb760d05fa44cf1e48e1b701c8eff8d7b583a9b1c7563ae87e7b7c6cf862b67a7ddcb768b6d7da4c5289e36e30c0807f507f4ae23e036b9a85859f886c6d228374b6b24892cd2619595091b78ef83f957bf7edc31886cef356b6b859ff00e12086d09119f977336e63ff00904ffdf55f32fc2d45b5bd6133346b2c91c419472aa4e1bf0c573e6fc9ccb434c25f95dcfd9bf8692699a8f81fc209a43eff000fc1a65adcc45c72f98d59323d70d93ef5d7697ad5ba6bdac5d4cdfe8ba3c7be4918e01c0dd93f5c9af06fd94fc6506a5f0765b38db78d22fe7b10ddd941568f03d046ea07fbb4cfda77c727e1cfc0fbfb749923d6bc5371e40c82c440091230039c7dd02b58d48c70e990e379e87c35fb5ffc52bcf8a9a9788fc43232fd9a6b84b2b555c13e487c81f8eccf1e9583e0ab74ff00844f4e08a0318930393efeb5c57c69bb78ec7c3fa608c46b712b5d3288ca6547ca8482727f8bf3aef3c3a3c8d360450aa15157a77c74af1e726d5ceeb28e88d6bd9594641de09c70318c8eb596f7c90b024f9a99e411d3dc7bfbd5f79d46d0e0a819079f7eb58525f40b7ef680862a3711df19ac9126b854be853121df1fef09cf27da98d3ee60aa8ca49042edaa11e5b1207f9b385d9d71ef57acaee29a17177b9847bb1b0ed278a1815750995d549e0938e9ed4db2ff00552fca77631bbbd635cdd4936a0906e611b36578f6ad7f2e58559573efcd22ba8f8584782c188ee73516b1af0d1f47bdba65c7911798b938e73851f5ce0fe1ef51f4552dbc2e79e7deb9af1a5c7f684da5e889b99a799ae650dc7c8b8db9f626a3a9563d27e1ec4f67e17b25b81e6dc48be6b13c7def9893ef935f417ec7fe3df12f86e5f15685a0784d3c4ed24f15fb27dbd2d4c2190c61b0c0ee194ede95f38e9b33c51c68b2ed5030c179edd2bd2ff666f187fc22ff001eb499d99daceee26d3a6c315cb952c83aff00781ffbeabc4cce8c6ad192923d6c04ad347d99a3fc5ef1c6baa3ec3f0e2cee1f19f2e3f125bbb039c10405e30477abff00f09f7c4c6e0fc2c47007f06bf0923f4ab3f0ff00c31a1e97e34bcfb15bdbda5e4d2dd4b26d852393e623952a01c649af4ac1790123e46033d093c77afce6786a5bdb63e9afab47e10ead23f963e4c01f282c7af1581afaa5bd9c71c57497097023964daa415603ee91ec4b0fc2ba2d5232b6b6433e5b48ace4640eac71fa0cfe35cef8c238f4e530799ba63302a548c63fc9afd530bab3f36a3b9cbb37f17afe35d1f82f507d2f5ab6973e5ae76eeef9c820fe9fad7381b24803eb5b5a46e8e64707cc556c947e40fa57b9277475cb736bc6d0be97e299f0a63866733459e4056e40f7c1dc3fe03563c3f7c646505f273c0a97e255b453695a3ea1196ca936efcf4c90c9ff00a13fe55cb689785244233b81e2b25aa1d91e8f6cc7ed4194e4a12c18fa9ac6d5ae87863c69a6eb71aac76b743c8ba2a7e5ea158fe0307eb5a365a822db962e49feef7aa7af42358d16e2d24dc4361e356ea1a92dccfa967c516ecb753337de57d9cfafff00aab3acd8aa85c123a54da3df7f6c68b6fe72ff00a45a96b7b8c8ce5c7dd63e990314db35f9bd371e3e94a4333f5a8f0c08e3777a8f4790c57070486c71ef5a5a940248e41d401906b1ec589b9407d69ad80f5d9243378774bb99dd9cc52952bff3ccb290ac3d79edef5fa17fb17fc4883e257807fe11bd648b8d4f494fb2c91cc4334f6ec4847c67a8c60fd07ad7e765818ef3c1ba9a7ced710a09e20bfde421b1f966bb9f80df1a2f7e17f8b346f19dacf23d9a4cb06a362c5479d6ef83211c67aed23fdd23bf1ae1eb7b3a8bb1338f345b5b95ff006a2ba68efd74b56fdc9ba9da08cb1c222040aa3f191ebce7c2fa3c3a6e9ed3dc7fae90f971a83efdff000ef5e83fb4c5d69bab7c4e85f4d97ed1a488e7b9864c11ba3678cae7d0907a738c5713a2b44da5b6a13b61798e38c9f438fe78a8ccaa73cd241878da1a9f547ecaff001361f0beade254d436db787edf4f8ae44a70abe723b02464f248751ff01ae1fe307c529fe3278aaf75c3201a3420da595ab3f30c00fca48e082c4035e630df4dad416f6a93c96d616aadfb9551995d9b867ff640c8ad812346915b0802b06c4b334586e32c0803b63fa0ae35887282a46b182e6b9e41e3ed41fc49f15acadcb1952cd2285403b80c8dcdfa935ea7a4c3f2924638ce73df1d6bc73c2b136a1f102f6ec9c9170ed95071e83b76af60b5768e1547fe15186e99c0ae87b5887b972f1777cc4720637573fa869f6fa847e5c89961caca38607d8d6d7da8b6e47e411906b2eeadc73b5891fc43a54202969d1dc5a334724e92c24ed5940db267d08abf7130f2d5599be5f947cbdcfbd5086669b786c33e76ec3dc7f4a97cc336a115a4655405dd8cf3ed4d811595a9170cff00bc6901e3238ad702459063392b9248aa31f991b3319195b3db9c55992491610c5b2c0fad48d10ae1b08c7ef3ed236faf3eb5c5f866e135af166aba8b1df0c6c2185b07ee28c600f72335b7e28d58693a0de5cac9fbcf2caa153c89188553f8122b3fc39616d67e1db5865b0f3ae953ef6586d393cf079a5b6c6a8e91b56dac915a8dd237f1804007d6bb9f87aa34ef1778223464dd2f886cbcc6e739f397273ff02c571fa4411c4ae1d32cc3ef738adad36f7c9f107868fda162f2f55b690cac76ac78901dc4fa702bccc62e6a4d1df866e33563f4d6ceddedfe26366255335a394979cee32e4807b715dddbc9e72a3118dc4e06738e6bcdf45f8e5e0bd626bdb6bcf10e9b6d359cecb1dcc9790849109cfcbf306f6e455dd53e3bfc3ff0fc3113e28d3ee6311fcab69279ce481e899fd6bf34af4e51ba3eaf9b996a8fc5ebb904d832263117caadc67e5da001f53fa571de2cdebab3419cf92003ec4a827f22715e9167e1d9b56b0bfd4a292386cec1d72f37466247caa3dbae6bcb75893ccd5af1f7160d33e58f53f371fcabf53c1c55cfce2859951580651d3dfd6ba3d0ec5af25fdc60c9de3cf5e3ad7348cbbc6791dabacf0de16fa1dd208b8e24fc2bd691d32373c49325ef816e4a8c4b6d245290dd8862a3f46ae02c6430dd26d3f2fae6bd0fc5cac9e17d455d02c852355914fcae3cc15e610bfa647a6694568523bed36f731ed6c73dfbd5ff003fcdc90dcff0b7d05725a5de74c8e7eb5bd6771b94e4679cf1f4a4d10c2de61a5f8893712b6baa2f92ff00dd5938284fa7cc7f5f6ad665f2a42ac083821940fe20706b26f2d46a7a7dc5b49b95c8dd132f50c3a1fc89ad6d17539f58d345d3a0170a4dbcf91f764038fcd7073ef49886ea0aed6c594638c115ce2fee670d823f0ae86e323a336dc723dfb8fceb1ae220adb9493f8f4a903d23e1acd15f493d938005c23273c70548c571fe1dbe8f45bc96cee866184b5bca8c789003800673f303e9d6b5be1bdd2c5aa47e613963c37e39a5f1de9674fd6b55bc8123680cc925c0c64c6cd8d8ca3f2cd64fc8a8f6376792dafac56e6f6e0f9ba6c6042f93b6612337c8dee1c0fe5daabe9ab6762abe6de2ce88c6376652b1024ff3ce2b1bfb41aeb413228c99278a276453b70b97ebdb95073fed66b5b4f2d348d1803001deca9b8b1e7692ac40cfdee7dab9a6fb9b4528ad0d7fb57cc59279021292007e508bb89c8c67248eff00a54f75782d743bcd4ee2e55c5adac92a0200de70429e9d49db5ade16b74bcb74fb42195e3558da38595154649208ff003cd723f17750fecff02fd9a3e25bab84b72382428666238f4c0a54d734922ba1c9fc29b311c324cc033b91f375efef5eaf1ef58cbecdd1e319ae1fc0367f61d1558052587a75aeca198aa811b0539e879cd76bea72efa924ec8cbe840c7154a662c8718240e99e6b48636978c2e41c30cd67dc10bbd49d993b9430c83ed5280a37132c6a5df2abb7943eb8a7e94063ccd8c1e619000c76acd6692f2fc42a9c21cb8fc3a56c2b48ab1051f2a8c641aa1a24903aab9033c62993b94b199cc65595739f41eb4d663f3166c0cfddce6aa6b93797685019049210bf87a54148e4f5f67d56fb4ad25c2f96ecd752f6caae42e7f126baa57f9c293850f97319e33e95c359b2eabe2fba91373436f1ac20e7d393fad7656d200db63079183c71532dca37a3b8c32b15031c08f35d3f83ecd2f7c65e0cb7b84576baf10594662650d94328dca41e0823dab8fb38bcb8fcc6cbf3ce4640fa576bf0d762fc5ff874ce58b7f6d5a9c13d0f9cb8fcf3fa57958f93861e735d11dd87f8d1fa5cdf0a7c0b6ee4a782f47f358e4abe9f1377f52b9ad6b5d03c3d7162fa72786ec22b518dd6ff00675119fc0015d0c918918e3a1ef9e714b0daa29dc3af7afc36a6615aab6d3ea7d5ae4e5d4fc27f10332afd950b081371d80f0cc5b249fc368fc2bcfbc611a5bebd7088776e58e43e9b9a3566fd58d779aa2b4d7d200a32d205271c0e07f8d797ea3706eafa4909cef7e87b0ec3f2afe82c2c6d267e7941590b671ab3852db4f5e99aec3c32bbadd8c9c364aa961f78fb572566a4484aae71c62bb5f0bb1485e068f7c658373fc27d8d7a12d8dfa977c49267c23a84273b8796555bd7cc1d2bcc233f330ce70715e93e389235d03e472cc674c76c80ae71fcabcd154acce3d0e29c3619a76926d60335d05acc3ae335cac321dc2b76ca5e14134e4266dc337ca58285231ef57d58699a9417a0f97a75f6db6b9da784901f91f1ef8c563c7329cf3c74c5745636716a5a5cb6330dd1dc8d9bbb86fe1ffc7bbd41249a9b3799323280c1be6c0c7d7fc6b12ee1290f0083dead69d752c91324edbeea0636d704f7603e53f962a3d414345c161c67ea7d2a3a813785e530ea71b072003803ad77be3866b3d4b4ebff0027cd86f605b79d00f94ed7e777a12ac3e9b6bcdb47045d232e55979eb5e95e28235cf86f3b64cb3dabacea01e71828c3dbae7f0a896835b9ce4de1bbab386dadad6dbed7a7abc9345324b840b8548c30cf519c5743e1fbb961ba92d96f2e20b98d556462e7fbdcf7e83e6fceb8ef0eea17b2471c33bf9c91c4cbcba8030cac0e3d78aecbfb5375e24d16e2b82934b26dcbb484e00c63a7ad72cf57a9d11d8dad2af8c16f772acd36f63b4f93c90a48e4823b609fc2bcefe2d5d36a1e22d074a8e50fe442d2b60630cefc03ebf2ff003af46b326dd7cdb7473c81b70198e1b69e3d3e7ebed5e51231f127c51d4e74904fe54c2359318caa1c67dba53c3c756c89ec7a068b01b78615f2b66131b474ada587cc504e15c77acd8e4daa76b1201c6df4e2b42d6756c28f99f1d0d757531d866d7864231d4e4e3bfd2a9eb974b0c636b88dd46e62adcb5687db116195ae3e5083208ea07b571f7172fac6a0e810327dee0727d3f4a00b5a4db85732be4bca776ef4f6ad895594262320f66ed5421f3a150a91e3e5ce58673579bcc9962dcf8239dabc76a0049022a847460f9c8c75ae6bc6b7cb6abe6052a15093f3742075ae92e4dba452b153e628054e7d4e2bcd7e235c18ed644756dc5820e3a8c7d6a16e6b12d78234f93fb245c6424974ed21dc79c1635db59c71dbc65b7e73d38ae5bc27789a869b668bf22c0a178e0d75cd32ae42b80df5cfe9512dc7d4bf0abcc76b0f93fd93806addbf889bc2fe2ef0f6a88a19b4abb82f82938dc52457033dba63f1ace85bcd38672c07b62997d1a36ab690aa825f00c84738193fd2bcfc5479e9ca1dceca2ed247ec8693ad45ad69765a8da1125addc09711b8fe25750c08fc0d6b40a58676106be25fd9720d5be2068fa6e94df10fc55a308ecddadadace487c848a39366d1ba32781b4f24f24d7bfcdf00753d8d20f8a5e35739e365f44a0fe518fe55f8fd5c9e54eacbde3e979ae923f1ff54b711ea13faaca7186e3a9ff00e26bc836ee7c9e4fb57b1b49ff00131b8036bef930cd9e9927fc6bc7c7dd6270307b57edf85d5cbd4f86a3b1674b1fe92158e771aee6d617b0b8568b84ea73ce78ae234901af5013df8af467b7616eacbd31f7be82bb6a69a1b75307c7977f68b3b01c0dcd2b15031d1540fe66b81dc5a424f24d753e2dbc5b99ada31c7931fcdf52437f215ca47d79a71196e1ea0d6cdaaee507a8ac353cd6ce9bba6912353f331c01f8d39132d8b4b298f8238cf5cd763e1cbb0b83b864aed5ee7dbf5ae223bc47dc8e0aba9c30f43e95bda25ef932281f32f5dadd2a0835fc5d6b1e9ba95b6b1e5edb5ba02d2f42f0376328ff009e2b3ee9f716df8f43b7f3c8faf5aeaa05b7d5ed6e2cee00104d1346d9e9938c1fa82735c6471cba7dc4f6377f34f664445b1cba1e8ff962931a1f6b37d9e6461907a1af4ef08a8bfd1f50b35058dc40f10cf4c95247ea2bcb594c72b29ea0f5f6ec7f2af45f00ea296b3221cb82410a074e7827e9cfe7512d836390f0c431c2636bddcd031c4a8846e42c3e87a6315d769b208e43088d9a067dcaedb58608f97b7bfe9599ad5adc699e22bf5fb34221fb46e5541c32919009fa375f6a9349f2ae6e183c8b014629ba2cb0230401f864735c723a23b6a74f75aa7f62f86f50b8370cb25ada9db8c06c923e5cff00bdfcabcf7e13d896b77bc94366439ddddb2724fe757be24ea4b078464b0dcc2e6eaf220bc7deda1b70cfb109f9d5df87b6bfd9fa5a424123870b9e41ae8a49a81949dcec5e11b5ca8c1ce48fc2a934cd6b302060b1e18f1f9d6bc6a2e54f967ebeb556f238d6170eb2330e15586558fa1aaea6656d426171b60dac06371caff17a75aab6d8821c6320024281d09eb9fc69ab6f7321dc9163be5db383520b19e55c4b2b03d7f74319fa9a180f69cf380aa0ae173d47ad2c371b58234aa597e625549e31f4a516b04087303b1f590e69ea36db3044c20f98609ebf9d48d2bb1b7589ede57d8bb386ce08e01cd78ffc42b8134d1ae7efc84edcf4ef5e9fab4cf0e9ef8054b0c9f9ba9af1af144de66a90a96dc55771fc78a23ab378ab23b8f04c38d3d5bcb1b9be60d9aebd7688433050dec72d5c2781ae1a55300f3240a3071c576f020565208e7ab30ace5b90f735f4b0d230fdd9db9e0b7148f34775e23dd1329f297031d3ee9a921d90e64390ea3a8351595b269b6779a8ce31249911eeef9ae5a9f0d8eca5a34cfbc3f625d2e1b5d274f940533c362f212bce0cb2648cfb617f2afad19c46bf3019e81abe3dff00827fea125e7856fe29305ed9b606c64ed62582e3af7afb0268772fca7eb9afcd31d78559247d4e8d459f8bafe098e3d5140b9382573fbbebf301ebef5f3894c798327ef63f2268a2bf4fcbf691f054762ce8e7fd310919e6bd4741ff004ab55dff0077701b7f33fd28a2bd3a86fd4f2dd69fccbebb7c63748dc7a00d8c7e5c56447f7a8a2aa23278fe661dab534d9dad6f2de55fbcb37e633d28a2891322feb8aabe20d419176869776df4dc01fd33496970c18638e28a2a00eab4e9a43852e4a91d3f2ab1e358d3cbd3f510b8b8170d69211ff2d23639c1fa514504192abba0524e5b2413eb8240fd0574de0d989ba451f2fca4923bf6c514543034be21395d4b4cbb5f924b8b78e37d9c670ccb9fcb1f9563697208666755e1446817b728327f4a28ae496e6a6178d2e64d43c61a6da4ad986dc2c8abfed305763f8935e8ba7a8892365e07ca36f6a28aeae866cde57d9246aaaabb8e32074a86f663717090e4aa9e4907a91de8a2b310d5b72926e591b03aa9e734903f98d2123057a628a280268e34971bd777e3504d6a91c3b97825a8a29f42a2737e2cb865b32985caff001639eb5e35af4ad26ad32b1c850aa3f9e68a2952dce8e8765f0e58dc09b3c6ce7eb5dcc739da898e37e68a2896e67d4ddd2596660cebb803f773ef516b52bea5a843048db614e760e8714515c150eba5d0fa3ff64bf895a8f83b56d56c6c2ded9bed772885e752c17112b67008cfa75afb02dfe22789ee37933696361c7167273ff91a8a2bf39cc3fde647d3d3f811ffd9, NULL);
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `user_image`, `is_admin`) VALUES
(9, 'Shehryar Ahmed', 'shehryar17@gmail.com', NULL, '$2y$10$E4bwlJUN4hknDiFRLfyty.1ImD.tIPVmsZvBKT9V6mx7P6yO6pF0S', NULL, '2023-02-22 04:00:45', '2023-02-22 04:00:45', '', NULL),
(10, 'Shehryar Ahmed', 'shehryara17@gmail.com', NULL, '$2y$10$xY3MFrcoBasJDyyh7FdILOs8sTimmzxX8hFe2I75VkLSVJLEH0hkm', NULL, '2023-03-05 12:55:26', '2023-03-05 12:55:26', '', NULL),
(11, 'test user', 'test_user@gmail.com', NULL, '$2y$10$Tg5feqEd2Ls5NKx68E2KHe7eZYnOGw1VCfPmIyzAN3vNIRT6OmjLK', NULL, '2023-04-25 13:17:01', '2023-04-25 13:17:01', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `applicant_asset_monthly_incomes`
--
ALTER TABLE `applicant_asset_monthly_incomes`
  ADD PRIMARY KEY (`applicant_asset_monthly_incomes_id`),
  ADD KEY `applicant_asset_monthly_incomes_ibfk_1` (`applicant_asset_monthly_incomes_user_id`),
  ADD KEY `applicant_asset_monthly_incomes_scholarship_id` (`applicant_asset_monthly_incomes_scholarship_id`);

--
-- Indexes for table `applicant_education_records`
--
ALTER TABLE `applicant_education_records`
  ADD PRIMARY KEY (`applicant_education_records_id`),
  ADD KEY `applicant_education_records_user_id` (`applicant_education_records_user_id`),
  ADD KEY `applicant_education_records_scholarship_id` (`applicant_education_records_scholarship_id`);

--
-- Indexes for table `applicant_employment_details`
--
ALTER TABLE `applicant_employment_details`
  ADD PRIMARY KEY (`applicant_employment_id`),
  ADD KEY `applicant_employment_user_id` (`applicant_employment_user_id`),
  ADD KEY `applicant_employment_scholarship_id` (`applicant_employment_scholarship_id`);

--
-- Indexes for table `applicant_family_accomodation_expenditures`
--
ALTER TABLE `applicant_family_accomodation_expenditures`
  ADD PRIMARY KEY (`applicant_family_accomodation_expenditures_id`),
  ADD KEY `applicant_family_accomodation_expenditures_user_id` (`applicant_family_accomodation_expenditures_user_id`),
  ADD KEY `applicant_family_accomodation_expenditures_scholarship_id` (`applicant_family_accomodation_expenditures_scholarship_id`);

--
-- Indexes for table `applicant_family_members`
--
ALTER TABLE `applicant_family_members`
  ADD PRIMARY KEY (`applicant_family_members_id`),
  ADD KEY `fk_application_id` (`applicant_family_members_user_id`),
  ADD KEY `applicant_family_members_scholarship_id` (`applicant_family_members_scholarship_id`);

--
-- Indexes for table `applicant_family_member_currently_studying_details`
--
ALTER TABLE `applicant_family_member_currently_studying_details`
  ADD PRIMARY KEY (`applicant_family_member_currently_studying_detail_id`);

--
-- Indexes for table `applicant_family_member_earnings`
--
ALTER TABLE `applicant_family_member_earnings`
  ADD PRIMARY KEY (`applicant_family_member_earnings_id`),
  ADD KEY `applicant_family_member_earnings_ibfk_1` (`applicant_family_member_earnings_user_id`),
  ADD KEY `applicant_family_member_earnings_scholarship_id` (`applicant_family_member_earnings_scholarship_id`);

--
-- Indexes for table `applicant_family_monthly_incomes`
--
ALTER TABLE `applicant_family_monthly_incomes`
  ADD PRIMARY KEY (`applicant_family_monthly_incomes_id`),
  ADD KEY `applicant_family_monthly_incomes_ibfk_1` (`applicant_family_monthly_incomes_user_id`),
  ADD KEY `applicant_family_monthly_incomes_scholarship_id` (`applicant_family_monthly_incomes_scholarship_id`);

--
-- Indexes for table `applicant_father_details`
--
ALTER TABLE `applicant_father_details`
  ADD PRIMARY KEY (`applicant_father_details_id`),
  ADD KEY `applicant_father_details_ibfk_1` (`applicant_father_details_user_id`),
  ADD KEY `applicant_father_details_scholarship_id` (`applicant_father_details_scholarship_id`);

--
-- Indexes for table `applicant_loans`
--
ALTER TABLE `applicant_loans`
  ADD PRIMARY KEY (`applicant_loans_id`),
  ADD KEY `applicant_loans_user_id` (`applicant_loans_user_id`),
  ADD KEY `applicant_loans_scholarship_id` (`applicant_loans_scholarship_id`);

--
-- Indexes for table `applicant_other_accomodation_expenditures`
--
ALTER TABLE `applicant_other_accomodation_expenditures`
  ADD PRIMARY KEY (`applicant_other_accomodation_expenditures_id`),
  ADD KEY `applicant_other_accomodation_expenditures_application_id` (`applicant_other_accomodation_expenditures_user_id`),
  ADD KEY `applicant_other_accomodation_expenditures_scholarship_id` (`applicant_other_accomodation_expenditures_scholarship_id`);

--
-- Indexes for table `applicant_other_assets`
--
ALTER TABLE `applicant_other_assets`
  ADD PRIMARY KEY (`applicant_other_assets_id`),
  ADD KEY `applicant_other_assets_user_id` (`applicant_other_assets_user_id`),
  ADD KEY `applicant_other_assets_scholarship_id` (`applicant_other_assets_scholarship_id`);

--
-- Indexes for table `applicant_other_family_expenditures`
--
ALTER TABLE `applicant_other_family_expenditures`
  ADD PRIMARY KEY (`applicant_other_family_expenditures_id`),
  ADD KEY `applicant_other_family_expenditures_application_id` (`applicant_other_family_expenditures_user_id`),
  ADD KEY `applicant_other_family_expenditures_scholarship_id` (`applicant_other_family_expenditures_scholarship_id`);

--
-- Indexes for table `applicant_other_scholarships`
--
ALTER TABLE `applicant_other_scholarships`
  ADD PRIMARY KEY (`applicant_other_scholarships_id`),
  ADD KEY `applicant_other_scholarships_user_id` (`applicant_other_scholarships_user_id`),
  ADD KEY `applicant_other_scholarships_scholarship_id` (`applicant_other_scholarships_scholarship_id`);

--
-- Indexes for table `applicant_owned_plots`
--
ALTER TABLE `applicant_owned_plots`
  ADD PRIMARY KEY (`applicant_owned_plots_id`),
  ADD KEY `applicant_owned_plots_user_id` (`applicant_owned_plots_user_id`),
  ADD KEY `applicant_owned_plots_scholarship_id` (`applicant_owned_plots_scholarship_id`);

--
-- Indexes for table `applicant_personal_details`
--
ALTER TABLE `applicant_personal_details`
  ADD PRIMARY KEY (`applicant_personal_detail_id`),
  ADD KEY `fk_applicant_scholarship_id` (`applicant_scholarship_id`),
  ADD KEY `applicant_user_id` (`applicant_user_id`);

--
-- Indexes for table `applicant_siblings`
--
ALTER TABLE `applicant_siblings`
  ADD PRIMARY KEY (`applicant_siblings_id`),
  ADD KEY `applicant_siblings_user_id` (`applicant_siblings_user_id`),
  ADD KEY `applicant_siblings_scholarship_id` (`applicant_siblings_scholarship_id`);

--
-- Indexes for table `applicant_worth_assets`
--
ALTER TABLE `applicant_worth_assets`
  ADD PRIMARY KEY (`applicant_worth_assets_id`),
  ADD KEY `applicant_worth_assets_user_id` (`applicant_worth_assets_user_id`),
  ADD KEY `applicant_worth_assets_scholarship_id` (`applicant_worth_assets_scholarship_id`);

--
-- Indexes for table `applied_scholarships`
--
ALTER TABLE `applied_scholarships`
  ADD PRIMARY KEY (`applied_scholarships_id`),
  ADD KEY `applied_scholarships_user_id` (`applied_scholarships_user_id`),
  ADD KEY `applied_scholarships_scholarship_id` (`applied_scholarships_scholarship_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `scholarships`
--
ALTER TABLE `scholarships`
  ADD PRIMARY KEY (`scholarship_id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`subscription_id`),
  ADD KEY `subscription_user_id` (`subscription_user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `applicant_asset_monthly_incomes`
--
ALTER TABLE `applicant_asset_monthly_incomes`
  MODIFY `applicant_asset_monthly_incomes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `applicant_education_records`
--
ALTER TABLE `applicant_education_records`
  MODIFY `applicant_education_records_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `applicant_employment_details`
--
ALTER TABLE `applicant_employment_details`
  MODIFY `applicant_employment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `applicant_family_accomodation_expenditures`
--
ALTER TABLE `applicant_family_accomodation_expenditures`
  MODIFY `applicant_family_accomodation_expenditures_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `applicant_family_members`
--
ALTER TABLE `applicant_family_members`
  MODIFY `applicant_family_members_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `applicant_family_member_currently_studying_details`
--
ALTER TABLE `applicant_family_member_currently_studying_details`
  MODIFY `applicant_family_member_currently_studying_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `applicant_family_member_earnings`
--
ALTER TABLE `applicant_family_member_earnings`
  MODIFY `applicant_family_member_earnings_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `applicant_family_monthly_incomes`
--
ALTER TABLE `applicant_family_monthly_incomes`
  MODIFY `applicant_family_monthly_incomes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `applicant_father_details`
--
ALTER TABLE `applicant_father_details`
  MODIFY `applicant_father_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `applicant_loans`
--
ALTER TABLE `applicant_loans`
  MODIFY `applicant_loans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applicant_other_accomodation_expenditures`
--
ALTER TABLE `applicant_other_accomodation_expenditures`
  MODIFY `applicant_other_accomodation_expenditures_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `applicant_other_assets`
--
ALTER TABLE `applicant_other_assets`
  MODIFY `applicant_other_assets_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `applicant_other_family_expenditures`
--
ALTER TABLE `applicant_other_family_expenditures`
  MODIFY `applicant_other_family_expenditures_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicant_other_scholarships`
--
ALTER TABLE `applicant_other_scholarships`
  MODIFY `applicant_other_scholarships_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applicant_owned_plots`
--
ALTER TABLE `applicant_owned_plots`
  MODIFY `applicant_owned_plots_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applicant_personal_details`
--
ALTER TABLE `applicant_personal_details`
  MODIFY `applicant_personal_detail_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `applicant_siblings`
--
ALTER TABLE `applicant_siblings`
  MODIFY `applicant_siblings_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicant_worth_assets`
--
ALTER TABLE `applicant_worth_assets`
  MODIFY `applicant_worth_assets_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applied_scholarships`
--
ALTER TABLE `applied_scholarships`
  MODIFY `applied_scholarships_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scholarships`
--
ALTER TABLE `scholarships`
  MODIFY `scholarship_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `subscription_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicant_asset_monthly_incomes`
--
ALTER TABLE `applicant_asset_monthly_incomes`
  ADD CONSTRAINT `applicant_asset_monthly_incomes_ibfk_1` FOREIGN KEY (`applicant_asset_monthly_incomes_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applicant_asset_monthly_incomes_ibfk_2` FOREIGN KEY (`applicant_asset_monthly_incomes_scholarship_id`) REFERENCES `scholarships` (`scholarship_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applicant_education_records`
--
ALTER TABLE `applicant_education_records`
  ADD CONSTRAINT `applicant_education_records_ibfk_1` FOREIGN KEY (`applicant_education_records_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applicant_education_records_ibfk_2` FOREIGN KEY (`applicant_education_records_scholarship_id`) REFERENCES `scholarships` (`scholarship_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applicant_employment_details`
--
ALTER TABLE `applicant_employment_details`
  ADD CONSTRAINT `applicant_employment_details_ibfk_1` FOREIGN KEY (`applicant_employment_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applicant_employment_details_ibfk_2` FOREIGN KEY (`applicant_employment_scholarship_id`) REFERENCES `scholarships` (`scholarship_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applicant_family_accomodation_expenditures`
--
ALTER TABLE `applicant_family_accomodation_expenditures`
  ADD CONSTRAINT `applicant_family_accomodation_expenditures_ibfk_1` FOREIGN KEY (`applicant_family_accomodation_expenditures_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applicant_family_accomodation_expenditures_ibfk_2` FOREIGN KEY (`applicant_family_accomodation_expenditures_scholarship_id`) REFERENCES `scholarships` (`scholarship_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applicant_family_members`
--
ALTER TABLE `applicant_family_members`
  ADD CONSTRAINT `applicant_family_members_ibfk_1` FOREIGN KEY (`applicant_family_members_scholarship_id`) REFERENCES `scholarships` (`scholarship_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_application_id` FOREIGN KEY (`applicant_family_members_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applicant_family_member_earnings`
--
ALTER TABLE `applicant_family_member_earnings`
  ADD CONSTRAINT `applicant_family_member_earnings_ibfk_1` FOREIGN KEY (`applicant_family_member_earnings_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applicant_family_member_earnings_ibfk_2` FOREIGN KEY (`applicant_family_member_earnings_scholarship_id`) REFERENCES `scholarships` (`scholarship_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applicant_family_monthly_incomes`
--
ALTER TABLE `applicant_family_monthly_incomes`
  ADD CONSTRAINT `applicant_family_monthly_incomes_ibfk_1` FOREIGN KEY (`applicant_family_monthly_incomes_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applicant_family_monthly_incomes_ibfk_2` FOREIGN KEY (`applicant_family_monthly_incomes_scholarship_id`) REFERENCES `scholarships` (`scholarship_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applicant_father_details`
--
ALTER TABLE `applicant_father_details`
  ADD CONSTRAINT `applicant_father_details_ibfk_1` FOREIGN KEY (`applicant_father_details_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applicant_father_details_ibfk_2` FOREIGN KEY (`applicant_father_details_scholarship_id`) REFERENCES `scholarships` (`scholarship_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applicant_loans`
--
ALTER TABLE `applicant_loans`
  ADD CONSTRAINT `applicant_loans_ibfk_1` FOREIGN KEY (`applicant_loans_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applicant_loans_ibfk_2` FOREIGN KEY (`applicant_loans_scholarship_id`) REFERENCES `scholarships` (`scholarship_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applicant_other_accomodation_expenditures`
--
ALTER TABLE `applicant_other_accomodation_expenditures`
  ADD CONSTRAINT `applicant_other_accomodation_expenditures_ibfk_1` FOREIGN KEY (`applicant_other_accomodation_expenditures_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applicant_other_accomodation_expenditures_ibfk_2` FOREIGN KEY (`applicant_other_accomodation_expenditures_scholarship_id`) REFERENCES `scholarships` (`scholarship_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applicant_other_assets`
--
ALTER TABLE `applicant_other_assets`
  ADD CONSTRAINT `applicant_other_assets_ibfk_1` FOREIGN KEY (`applicant_other_assets_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applicant_other_assets_ibfk_2` FOREIGN KEY (`applicant_other_assets_scholarship_id`) REFERENCES `scholarships` (`scholarship_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applicant_other_family_expenditures`
--
ALTER TABLE `applicant_other_family_expenditures`
  ADD CONSTRAINT `applicant_other_family_expenditures_ibfk_1` FOREIGN KEY (`applicant_other_family_expenditures_scholarship_id`) REFERENCES `scholarships` (`scholarship_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applicant_other_scholarships`
--
ALTER TABLE `applicant_other_scholarships`
  ADD CONSTRAINT `applicant_other_scholarships_ibfk_1` FOREIGN KEY (`applicant_other_scholarships_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applicant_other_scholarships_ibfk_2` FOREIGN KEY (`applicant_other_scholarships_scholarship_id`) REFERENCES `scholarships` (`scholarship_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applicant_owned_plots`
--
ALTER TABLE `applicant_owned_plots`
  ADD CONSTRAINT `applicant_owned_plots_ibfk_1` FOREIGN KEY (`applicant_owned_plots_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applicant_owned_plots_ibfk_2` FOREIGN KEY (`applicant_owned_plots_scholarship_id`) REFERENCES `scholarships` (`scholarship_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applicant_personal_details`
--
ALTER TABLE `applicant_personal_details`
  ADD CONSTRAINT `applicant_personal_details_ibfk_1` FOREIGN KEY (`applicant_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_applicant_scholarship_id` FOREIGN KEY (`applicant_scholarship_id`) REFERENCES `scholarships` (`scholarship_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applicant_siblings`
--
ALTER TABLE `applicant_siblings`
  ADD CONSTRAINT `applicant_siblings_ibfk_1` FOREIGN KEY (`applicant_siblings_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applicant_siblings_ibfk_2` FOREIGN KEY (`applicant_siblings_scholarship_id`) REFERENCES `scholarships` (`scholarship_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applicant_worth_assets`
--
ALTER TABLE `applicant_worth_assets`
  ADD CONSTRAINT `applicant_worth_assets_ibfk_1` FOREIGN KEY (`applicant_worth_assets_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applicant_worth_assets_ibfk_2` FOREIGN KEY (`applicant_worth_assets_scholarship_id`) REFERENCES `scholarships` (`scholarship_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applied_scholarships`
--
ALTER TABLE `applied_scholarships`
  ADD CONSTRAINT `applied_scholarships_ibfk_1` FOREIGN KEY (`applied_scholarships_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applied_scholarships_ibfk_2` FOREIGN KEY (`applied_scholarships_scholarship_id`) REFERENCES `scholarships` (`scholarship_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD CONSTRAINT `subscriptions_ibfk_1` FOREIGN KEY (`subscription_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
