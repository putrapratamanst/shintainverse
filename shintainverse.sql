-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.40 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for shintainverse
CREATE DATABASE IF NOT EXISTS `shintainverse` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `shintainverse`;

-- Dumping structure for table shintainverse.company_overview
CREATE TABLE IF NOT EXISTS `company_overview` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `is_deleted` tinyint(1) DEFAULT '0',
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shintainverse.company_overview: ~1 rows (approximately)
INSERT INTO `company_overview` (`id`, `title`, `slug`, `description`, `image`, `is_active`, `is_deleted`, `meta_title`, `meta_description`, `meta_keywords`, `meta_image`, `created_at`) VALUES
	(1, 'Company overview', 'kksdkfsl-kdfkspojds', 'PT Shinta Inserve is a specialist in insurance brokerage and consulting services. We have been serving clients across a variety of industries since our inception in 1990, and have obtained a license from the Ministry of Finance of the Republic of Indonesia, which was ratified by Decree No.KEP.167/KM.13/1990.\r\n\r\nOur vision is to be a trusted leading insurance brokerage company, dedicated to providing the best insurance consultancy and solutions to appropriately protect our clients’ assets and financial future.\r\n\r\nOur Mission\r\nTo act professionally on behalf of our clients, to provide the best insurance solutions and services that have been tailored to their individual requirements and needs.\r\nTo be a professional company that is dedicated to client statisfaction by producing the best-quality results with excellent service.\r\nTo establish a warm, cooperative relationship with clients and partners on the way to creating a healthy, friendly business climate.\r\nTo manage our company effectively efficiently and competitively, and position it to contribute robustly to our industry.\r\nOur commitment\r\nOur clients are our most precious partners. We take responsibility to truly understand our client’s core business and values and building a lasting relationship with our clients.\r\nOur top concern is to provide our clients with 100% satisfactory service.\r\nWe capitalize on our good reputation and solid relations with leading insurers in the market, and to provide our clients with the widest insurance coverage at the most competitive premium price.\r\nWe deliver innovative insurance solutions through qualified professionals, who have a wide range of experience and expertise in insurance and risk management.\r\nBacked with outstanding claim negotiation skills and deep institutional knowledge, we provide clients with the best claim and settlement solutions.\r\nHow we work\r\nGathering data and information – Armed with statistical knowledge and technical expertise, we make fact-based prediction and analysis to anticipate and address the risk that your business may face.\r\nRisk assessment and management – We focus on creating the right strategy to assess, design, and implement the optimum framework to ensure our client’s risk is appropriately managed.\r\nRisk profiling and customized insurance protection – Based on concrete data and information, we assess and tailor the most effective framework that supports and protects your business.\r\nCommunicating and negotiating with insurance companies – Our financial experts help you analyze financial data and create a rock steady financial foundation that helps you to leverage and strengthen your position.\r\nPresenting the insurance program to the client – Our multidiscipline team of professionals works along side with you to assess the most specific and cost-effective insurance program that caters to your company’s needs and requirements.\r\nIssuing insurance documentation to secure the risk – We are dedicated to meet our words with coordination and competence to help you realize your vision.\r\nClaims handling and insurance consultancy during the insurance period – You can always count on us to provide professional consultation and personalized service. In times of crisis, we are ready to take over responsibility to accelerate claim process so your business can continue to run as usual.', NULL, 1, 0, 'asdfas', 'asdf', 'asdf', 'dsf', '2025-04-18 09:52:22');

-- Dumping structure for table shintainverse.migration
CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shintainverse.migration: ~7 rows (approximately)
INSERT INTO `migration` (`version`, `apply_time`) VALUES
	('m000000_000000_base', 1744994708),
	('m130524_201442_init', 1744994711),
	('m190124_110200_add_verification_token_column_to_user_table', 1744994711),
	('m250418_163132_company_overview_table', 1744994726),
	('m250418_163525_service_table', 1744994766),
	('m250418_164443_product_table', 1744994766),
	('m250418_165731_staff_table', 1744995553);

-- Dumping structure for table shintainverse.service
CREATE TABLE IF NOT EXISTS `service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `is_deleted` tinyint(1) DEFAULT '0',
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `summary` text COLLATE utf8mb4_unicode_ci,
  `coverage` text COLLATE utf8mb4_unicode_ci,
  `types` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shintainverse.service: ~6 rows (approximately)
INSERT INTO `service` (`id`, `title`, `slug`, `description`, `image`, `is_active`, `is_deleted`, `meta_title`, `meta_description`, `meta_keywords`, `meta_image`, `created_at`, `summary`, `coverage`, `types`) VALUES
	(1, 'Property Insurance', 'kalskfd-kkkd', 'Coverage of Property Insurance\r\nStandard protection against Fire and Perils (also known as Fire Only policy). Standard policy covers damage caused by short circuit, spontaneous combustion, explosion, lightning, aircraft damage, and smoke.\r\nAll Risk Protection. Comprehensive policy that offers coverage and protection from all risks or perils, unless the risks are excluded specifically in the policy. Extension of policy covers includes earthquake, strike, civil commotion, act of terrorism, and sabotage.\r\nProperty Insurance offers comprehensive and flexible protection plans that can be tailored to your property requirement. Whether it is for home, commercial premises, factory, plants, or warehouse, we can provide you with a full risk assessment and related insurance programs to protect your assets.\r\n\r\nTypes of property that can be insured\r\n\r\nResidential home, shop lot, office building, flats, apartment, cottage, villa, hotel, hospital, restaurant, café, store, kost, dll.', 'https://shintainserve.com/wp-content/uploads/2018/07/property-service-350x184.jpg', 1, 0, 'ksdlk', 'ksdkfl', 'klsdf', 'sdf', '2025-04-18 09:55:51', 'Property Insurance offers comprehensive and flexible protection plans that you can tailor to your property requirement. Whether it is for home, commercial premises, factory, plants, or warehouse, our team can provide you with a full risk assessment and related insurance programs to protect your assets against loss of or damage caused by perils and catastrophe.', '[\r\n  "Standard protection against Fire and Perils (also known as Fire Only policy). Standard policy covers damage caused by short circuit, spontaneous combustion, explosion, lightning, aircraft damage, and smoke.",\r\n  "All Risk Protection. Comprehensive policy that offers coverage and protection from all risks or perils, unless the risks are excluded specifically in the policy. Extension of policy covers includes earthquake, strike, civil commotion, act of terrorism, and sabotage."\r\n]', 'Residential home, shop lot, office building, flats, apartment, cottage, villa, hotel, hospital, restaurant, café, store, kost, dll.'),
	(2, 'Motor Vehicle Insurance', 'motor-vehicle-insurance', 'Coverage of Motor Vehicle Insurance\r\nComprehensive / All Risk covers partial or total loss damage sustained by the insured vehicle (unless the risks are excluded in the policy)\r\nTotal Loss Only (TLO) only covers total loss of the insured vehicle.\r\nMotor Vehicle Insurance covers total or partial loss of and/or damage of the insured vehicle. Policy can be extended to cover riot, civil commotion, terrorism, sabotage, etc.\r\n\r\nTypes of motor vehicle that can be insured\r\n\r\nCar, motorcycle, bus, truck, pick-up, double cabin, etc.', 'https://shintainserve.com/wp-content/uploads/2018/07/motor-vehicle.jpg', 1, 0, 'k', 'k', 'k', 'l\\', '2025-04-21 08:46:25', 'Motor Vehicle Insurance is essential to every vehicle owner. Our range of policy provides insurer with financial protection and third party liability in unexpected incidents. Easy claim and speedy service to help you get back on track.', '[\r\n    "Comprehensive / All Risk covers partial or total loss damage sustained by the insured vehicle (unless the risks are excluded in the policy)",\r\n    "Total Loss Only (TLO) only covers total loss of the insured vehicle."\r\n]', 'Car, motorcycle, bus, truck, pick-up, double cabin, etc.'),
	(3, 'Contractor All Risk', 'contractor-all-risk', 'Coverage of Contractor All Risk\r\nCovers risks associated with a construction site and construction project.\r\nIncludes accidents, natural calamities, malicious damage\r\nSimilar to Property All Risk insurance, this policy covers a property during its construction period, starting from ground up until the building is completed.\r\n\r\nTypes of Contractor All Risk that can be insured\r\n\r\nResidential, shop lot, office building, flats, apartment, cottage, villa, hotel, hospital, restaurant / café, store, boarding house (kost), dll.\r\n', 'https://shintainserve.com/wp-content/uploads/2018/11/contractor-all-risk.jpg', 1, 0, 'k', 'k', 'k', 'l\\', '2025-04-21 08:46:56', 'Contractors’ All Risk Insurance is a policy that covers all risks associated with a construction project. Our policy includes accidents caused by natural calamities and intentional damages. It also covers structural damages, building materials, and equipment materials.', '[\r\n  "Covers risks associated with a construction site and construction project.",\r\n  "Includes accidents, natural calamities, malicious damage."\r\n]\r\n', 'Residential, shop lot, office building, flats, apartment, cottage, villa, hotel, hospital, restaurant / café, store, boarding house (kost), dll.'),
	(4, 'Construction and Erection All Risk', 'construction-and-erection-all-risk', 'Coverage of Erection All Risk\r\nMaterial damage during machine installation\r\nLegal liability against third party\r\nConstruction and Erection All Risk policy covers protection against damage and financial loss that occur during the process of machine installation (unless the risks are excluded specifically in the policy).\r\n\r\nTypes of Contractor All Risk that can be insured\r\n\r\nPrinting machineries, factory machineries, etc.', 'https://shintainserve.com/wp-content/uploads/2018/11/erection-all-risk.jpg', 1, 0, 'k', 'k', 'k', 'l\\', '2025-04-21 08:47:34', 'Construction and Erection All Risk policy covers protection to building and equipment from the start of construction until the end. The policy is offered to any kind of construction projects such as residential, commercial, industrial buildings, and public infrastructures, such as roads, highways, ports, airports, and railways.', '[\r\n  "Material damage during machine installation",\r\n  "Legal liability against third party"\r\n]\r\n', 'Printing machineries, factory machineries, etc.'),
	(5, 'Heavy Equipment Insurance', 'heavy-equipment-insurance', 'Coverage of Heavy Equipment Insurance\r\nComprehensive Insurance – Cover partial loss or damage and/or total loss caused by all risk, unless the risks are excluded specifically in the policy.\r\nTotal Loss Only – Cover loss or damage if the value of loss equals or exceeds Actual Cash Value (ACV) of the heavy equipment at the time of the accident. Actual Cash Value is calculated from New Replacement Value (NRV) minus depreciation according to the age of the heavy equipment.\r\nHeavy Equipment Insurance provides all risk coverage for heavy equipment (unless the risks are excluded specifically in the policy) or total loss only.\r\n\r\nPolicy can be extended to cover natural disaster, theft, robbery, riot, strike, civil commotion, etc.\r\n\r\nHeavy equipment is hereby defined as heavy machineries operated mechanically by an operator and limited within the project sites only (not on public road).\r\n\r\nTypes of heavy equipment that can be insured\r\n\r\nTrucks, dozers, excavators, mobile crane, tower crane, gantry crane, shovel, forklift, dump truck, wheel loader, dozer shovel, back hoe loader, articulated vehicle, forwarder, aerial platform, heavy duty compaction, motor grader, hydraulic shovel, and others.', 'https://shintainserve.com/wp-content/uploads/2018/07/he-service-350x184.jpg', 1, 0, 'k', 'k', 'k', 'l\\', '2025-04-21 08:47:55', 'Heavy Equipment Insurances provides many options to protect owner and operators of heavy equipment with specialized insurance to meet the demand within the industry. The policy provides comprehensive coverage for damage, misuse, and theft, to heavy equipment such as trucks, dozers, excavators, loaders, forklift, cranes, and other equipment typically operated within the industry.', '[\r\n  "Comprehensive Insurance – Cover partial loss or damage and/or total loss caused by all risk, unless the risks are excluded specifically in the policy.",\r\n  "Total Loss Only – Cover loss or damage if the value of loss equals or exceeds Actual Cash Value (ACV) of the heavy equipment at the time of the accident. Actual Cash Value is calculated from New Replacement Value (NRV) minus depreciation according to the age of the heavy equipment."\r\n]\r\n', 'Trucks, dozers, excavators, mobile crane, tower crane, gantry crane, shovel, forklift, dump truck, wheel loader, dozer shovel, back hoe loader, articulated vehicle, forwarder, aerial platform, heavy duty compaction, motor grader, hydraulic shovel, and others.'),
	(6, 'Marine Cargo Insurance', 'marine-cargo-insurance', 'Coverage of Marine Cargo Insurance\r\nICC “A” policy covers All Risk, unless the risks are excluded specifically in the policy.\r\nICC “B” and ICC “C” policies offers more limited protection and only covers specific type of loss and damage.\r\nInsurance policy that covers comprehensive protection to your cargo and goods while being transported from place to place via land, sea, or air.\r\n\r\nTypes of marine cargo that can be insured\r\n\r\nFrozen food, beverage, heavy equipment, electronic equipment, consumer goods, etc.', 'https://shintainserve.com/wp-content/uploads/2018/07/cargo-service-350x184.jpg', 1, 0, 'k', 'k', 'k', 'l\\', '2025-04-21 08:48:16', 'Through Marine Cargo Insurance, we offer comprehensive solution to protect your cargo while being transported from place to place. The policy covers all risk of loss of or damage to your cargo while in transit. We provide free consultation with our risk and liability specialists to discuss the most suitable option of marine insurance products for your needs.', '[\r\n  "ICC “A” policy covers All Risk, unless the risks are excluded specifically in the policy.",\r\n  "ICC “B” and ICC “C” policies offers more limited protection and only covers specific type of loss and damage."\r\n]\r\n', 'Frozen food, beverage, heavy equipment, electronic equipment, consumer goods, etc.');

-- Dumping structure for table shintainverse.staff
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expertise` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `is_deleted` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shintainverse.staff: ~0 rows (approximately)

-- Dumping structure for table shintainverse.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` smallint NOT NULL DEFAULT '10',
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL,
  `verification_token` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Dumping data for table shintainverse.user: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
