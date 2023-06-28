-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 06:56 PM
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
(1, 'Junior', 'OINA', '4500', '3000', '051-1234567', 'email@yahoo.com', 8, 4, '2023-03-19 04:34:42', '2023-03-19 04:34:42');

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
(1, 'Shahmir Ahmed', '20', 'Male', '2002-09-27', '42301-7454929-1', 'Male', 'Rawalpindi', 'H#6, St#2, Khalid Colony, Phase No.2, Chakri Road, Rawalpindi', 'H#6, St#2, Khalid Colony, Phase No.2, Chakri Road, Rawalpindi', '20-Arid-825', 'Computer Science', 'First Semester', 'PMAS UAAR', '3.7', 8, 4, '2023-03-19 03:58:29', '2023-03-19 03:58:29');

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
(41, '2023_03_19_173256_create_applicant_siblings_table', 23);

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
(1, 'Ehsas Scholarship 2023', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque odio mauris, consectetur nec posuere eget, mollis vel nisl. Praesent mattis sem tortor, ut viverra purus tincidunt non. Sed commodo iaculis sem, ac ultrices erat facilisis in. Fusce quis pellentesque velit. In rutrum ligula ligula, maximus ullamcorper enim hendrerit vel. Fusce porttitor turpis vel volutpat fringilla. Proin gravida venenatis risus eget aliquet. Fusce fringilla sodales luctus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam diam augue, molestie id viverra at, convallis vitae massa. Morbi dignissim tincidunt ligula a feugiat. Maecenas felis lacus, pretium vel purus eleifend, efficitur vulputate neque. Maecenas finibus molestie sem, eleifend vestibulum ex bibendum tempor. Nulla viverra lacinia turpis, at accumsan ligula semper sit amet. Praesent sodales ultrices nibh sit amet ullamcorper. Ut consequat nunc nec laoreet dictum.\r\n\r\nSed suscipit eleifend efficitur. Cras rutrum sem sit amet quam ullamcorper ultricies. Cras dictum augue eu elit feugiat, at hendrerit risus pellentesque. In ornare tempus dictum. Donec placerat nibh id metus bibendum, sed maximus sem mattis. Curabitur mollis malesuada pretium. Proin porttitor, risus non egestas dictum, augue elit ultricies est, in pellentesque massa dui vel turpis. Pellentesque orci sem, dictum eget justo non, eleifend elementum diam. Vivamus rutrum tincidunt sapien. Etiam dapibus bibendum ligula nec faucibus. Fusce cursus ex nec nisl sodales sodales. Proin in pretium dolor, in porta odio. In at libero eget sapien tincidunt dapibus. Sed eu sem eros. Donec eget purus nibh. Donec malesuada ligula quis turpis mattis, eget auctor dui finibus.', 'Suspendisse sapien mauris, mollis a neque sodales, vulputate scelerisque quam. Aenean et lorem mattis, eleifend nisl eu, semper leo. Cras volutpat, nisi sit amet consequat ornare, lectus mauris eleifend elit, quis sollicitudin massa metus mattis ante. Praesent egestas est id pellentesque rutrum. Fusce lectus libero, vehicula a sollicitudin et, lacinia at erat. Quisque ornare leo at sapien pellentesque ultrices. Praesent facilisis mauris at rutrum rutrum. Etiam non laoreet purus, et rutrum tortor. Vestibulum bibendum augue nec sem posuere, at tempus quam dapibus.\r\n\r\nMorbi interdum ante convallis erat convallis tincidunt. Integer tempus ornare sapien blandit semper. Donec sollicitudin sit amet turpis ornare pretium. Pellentesque nisl nunc, gravida et tempor non, porttitor ac justo. Fusce consectetur risus est, eu iaculis lectus facilisis nec. Curabitur quis lectus purus. Ut ante sapien, pretium ac velit in, molestie lobortis diam. Curabitur in tortor at orci commodo rutrum eu non urna. In pulvinar ante ac purus pulvinar convallis id et nibh. Donec sem enim, vehicula at enim id, feugiat rutrum risus. Proin vel maximus est.\r\n\r\nCurabitur at blandit tortor. Duis finibus elit ut pulvinar finibus. Morbi non nibh ut mi tempor semper. Suspendisse potenti. Integer cursus velit est, ut porttitor ante ultricies et. Vivamus a pretium neque, a vehicula nibh. Integer semper ipsum erat, eu fermentum libero aliquet nec. Donec iaculis metus non nunc pulvinar, non rhoncus nunc congue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin at vestibulum urna, sit amet efficitur nulla. Pellentesque eget imperdiet odio. Vestibulum consectetur pulvinar lectus, et dictum mi pretium at. Etiam pellentesque arcu at lacus fringilla, sit amet tristique ex iaculis.', '2023-03-23', '2023-02-18 11:39:29', '2023-02-18 11:39:29'),
(4, 'HEC Need Based Scholarship 2023', 'This is a need based scholarship from HEC for needy students.', 'The eligibility criteria is as following:\r\n1. Student of HEC recognized uni.', '2023-04-13', '2023-02-18 11:49:56', '2023-02-19 02:16:02'),
(6, 'PEEF 2023-24', 'This is a PEEF scholarship i.e. Punjab Educational Endowment Fund for needy students in the university of Punjab.', 'Eleigibility criteria:\r\n1.  One\r\n2.  Two\r\n3.  Three\r\n4. Four\r\n5. Five', '2023-05-16', '2023-03-05 13:00:42', '2023-04-17 01:31:52'),
(7, 'Dummy name', 'Dummy description', 'Dummy eligibility criteria', '2023-06-13', '2023-03-05 13:14:08', '2023-03-05 13:14:08'),
(8, 'HEC Need Based Scholarship 2024', 'desc', 'criteria', '2023-03-21', '2023-03-20 06:01:48', '2023-03-20 06:01:48');

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
  `is_admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Mallory Legros', 'bethel.vandervort@example.net', '2023-02-18 08:10:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cCTZK3tjfx9KDjuUekghmYjS1sbaQuHzsOJUq0OORTT7cQ6tQE23yyYAdvtn', '2023-02-18 08:10:20', '2023-02-18 08:10:20', NULL),
(2, 'Michele Abernathy', 'garrett81@example.net', '2023-02-18 08:10:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'O2CT4td9HAtP4ydM3vpeMkQolgx2CXo9rujwESf26w8GWmRuMWgSabwdWh0N', '2023-02-18 08:10:20', '2023-02-18 08:10:20', NULL),
(3, 'Jody Willms', 'tjohnston@example.net', '2023-02-18 08:10:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'eoquoHCFZP', '2023-02-18 08:10:20', '2023-02-18 08:10:20', NULL),
(4, 'Shea Schiller V', 'robin96@example.org', '2023-02-18 08:10:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'wqCi6e1NpO', '2023-02-18 08:10:20', '2023-02-18 08:10:20', NULL),
(5, 'Jerrold Ebert Jr.', 'marie65@example.com', '2023-02-18 08:10:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IVrMtzwwhn', '2023-02-18 08:10:20', '2023-02-18 08:10:20', NULL),
(6, 'Admin', 'admin@gmail.com', NULL, '$2y$10$yYkDKbCjoa767u7jGN9kNuLrAyS0jI2YbWGIFQuvbEFSB141ilUde', NULL, '2023-02-19 08:58:49', '2023-02-19 08:58:49', 1),
(7, 'User', 'user@gmail.com', NULL, '$2y$10$5FUmxkpLUyJ4N6htXJhob.JLBb/8F1nUrLVvqaU2w/kpAi8tFK3hq', NULL, '2023-02-19 08:58:49', '2023-02-19 08:58:49', 0),
(8, 'Shahmir Ahmed', 'ahmed1212514@gmail.com', NULL, '$2y$10$5MDlORtAbBfJUreKwVNbyuI06/q9yCukYO8EYevdxRVaEvMW1zkLW', NULL, '2023-02-19 12:10:52', '2023-02-19 12:10:52', NULL),
(9, 'Shehryar Ahmed', 'shehryar17@gmail.com', NULL, '$2y$10$E4bwlJUN4hknDiFRLfyty.1ImD.tIPVmsZvBKT9V6mx7P6yO6pF0S', NULL, '2023-02-22 04:00:45', '2023-02-22 04:00:45', NULL),
(10, 'Shehryar Ahmed', 'shehryara17@gmail.com', NULL, '$2y$10$xY3MFrcoBasJDyyh7FdILOs8sTimmzxX8hFe2I75VkLSVJLEH0hkm', NULL, '2023-03-05 12:55:26', '2023-03-05 12:55:26', NULL);

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
  ADD KEY `applicant_asset_monthly_incomes_ibfk_1` (`applicant_asset_monthly_incomes_user_id`),
  ADD KEY `applicant_asset_monthly_incomes_scholarship_id` (`applicant_asset_monthly_incomes_scholarship_id`);

--
-- Indexes for table `applicant_education_records`
--
ALTER TABLE `applicant_education_records`
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
  ADD KEY `applicant_family_monthly_incomes_ibfk_1` (`applicant_family_monthly_incomes_user_id`),
  ADD KEY `applicant_family_monthly_incomes_scholarship_id` (`applicant_family_monthly_incomes_scholarship_id`);

--
-- Indexes for table `applicant_father_details`
--
ALTER TABLE `applicant_father_details`
  ADD KEY `applicant_father_details_ibfk_1` (`applicant_father_details_user_id`),
  ADD KEY `applicant_father_details_scholarship_id` (`applicant_father_details_scholarship_id`);

--
-- Indexes for table `applicant_loans`
--
ALTER TABLE `applicant_loans`
  ADD KEY `applicant_loans_user_id` (`applicant_loans_user_id`),
  ADD KEY `applicant_loans_scholarship_id` (`applicant_loans_scholarship_id`);

--
-- Indexes for table `applicant_other_accomodation_expenditures`
--
ALTER TABLE `applicant_other_accomodation_expenditures`
  ADD KEY `applicant_other_accomodation_expenditures_application_id` (`applicant_other_accomodation_expenditures_user_id`),
  ADD KEY `applicant_other_accomodation_expenditures_scholarship_id` (`applicant_other_accomodation_expenditures_scholarship_id`);

--
-- Indexes for table `applicant_other_assets`
--
ALTER TABLE `applicant_other_assets`
  ADD KEY `applicant_other_assets_user_id` (`applicant_other_assets_user_id`),
  ADD KEY `applicant_other_assets_scholarship_id` (`applicant_other_assets_scholarship_id`);

--
-- Indexes for table `applicant_other_family_expenditures`
--
ALTER TABLE `applicant_other_family_expenditures`
  ADD KEY `applicant_other_family_expenditures_application_id` (`applicant_other_family_expenditures_user_id`),
  ADD KEY `applicant_other_family_expenditures_scholarship_id` (`applicant_other_family_expenditures_scholarship_id`);

--
-- Indexes for table `applicant_other_scholarships`
--
ALTER TABLE `applicant_other_scholarships`
  ADD KEY `applicant_other_scholarships_user_id` (`applicant_other_scholarships_user_id`),
  ADD KEY `applicant_other_scholarships_scholarship_id` (`applicant_other_scholarships_scholarship_id`);

--
-- Indexes for table `applicant_owned_plots`
--
ALTER TABLE `applicant_owned_plots`
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
  ADD KEY `applicant_siblings_user_id` (`applicant_siblings_user_id`),
  ADD KEY `applicant_siblings_scholarship_id` (`applicant_siblings_scholarship_id`);

--
-- Indexes for table `applicant_worth_assets`
--
ALTER TABLE `applicant_worth_assets`
  ADD KEY `applicant_worth_assets_user_id` (`applicant_worth_assets_user_id`),
  ADD KEY `applicant_worth_assets_scholarship_id` (`applicant_worth_assets_scholarship_id`);

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
-- AUTO_INCREMENT for table `applicant_employment_details`
--
ALTER TABLE `applicant_employment_details`
  MODIFY `applicant_employment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applicant_family_members`
--
ALTER TABLE `applicant_family_members`
  MODIFY `applicant_family_members_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicant_family_member_earnings`
--
ALTER TABLE `applicant_family_member_earnings`
  MODIFY `applicant_family_member_earnings_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicant_personal_details`
--
ALTER TABLE `applicant_personal_details`
  MODIFY `applicant_personal_detail_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
  MODIFY `scholarship_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `subscription_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  ADD CONSTRAINT `applicant_other_accomodation_expenditures_ibfk_1` FOREIGN KEY (`applicant_other_accomodation_expenditures_user_id`) REFERENCES `applicant_personal_details` (`applicant_personal_detail_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applicant_other_accomodation_expenditures_ibfk_2` FOREIGN KEY (`applicant_other_accomodation_expenditures_scholarship_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD CONSTRAINT `subscriptions_ibfk_1` FOREIGN KEY (`subscription_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
