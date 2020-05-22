-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 01:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bayshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `ads_id` int(11) NOT NULL,
  `ads_name` varchar(250) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `unique_name` varchar(250) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `ads_size` varchar(250) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `ads_type` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `ads_url` mediumtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ads_image_url` longtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `ads_code` longtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `enable` int(1) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`ads_id`, `ads_name`, `unique_name`, `ads_size`, `ads_type`, `ads_url`, `ads_image_url`, `ads_code`, `enable`) VALUES
(1, 'Home Page Header', 'home_header', '728x90', 'code', '#', '', '', 0),
(2, 'Product Page Header', 'product_header', '728x90', 'code', '#', '', '', 0),
(3, 'category Page Header', 'category_header', '728x90', 'code', '#', '', '', 0),
(4, 'Country Page Header', 'country_header', '728x90', 'code', '#', '', '', 0),
(5, 'Release Page Header', 'release_header', '728x90', 'code', '#', '', '', 0),
(6, 'TV-series Page Header', 'tv_header', '728x90', 'code', '#', '', '', 0),
(7, 'Type Page Header', 'type_header', '728x90', 'code', '#', '', '', 0),
(8, 'Blog Page Header', 'blog_header', '728x90', 'code', '#', '', '', 0),
(9, 'Sidebar', 'sidebar', '300x600', 'code', '#', '', '', 0),
(12, 'Player Bottom', 'player_bottom', '728x90', 'code', '#', '', '', 0),
(10, 'Player Top', 'player_top', '728x90', 'code', '#', '', '', 0),
(11, 'Billboard(For product,Landing page & watch page)', 'billboard', '970x250', 'code', '#', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(37) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `parentid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `parentid`) VALUES
(1, 'Electronics', 'electronics', NULL),
(2, 'computers', 'computers', 1),
(3, 'laptops', 'laptops', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('6utum6da85p3in8fo8rf4qul0h23ebhp', '127.0.0.1', 1586615393, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363631353339333b6c6f67696e5f7374617475737c733a313a2231223b757365725f69647c733a313a2232223b6e616d657c733a31353a2272756d626969686120737761696275223b61646d696e5f69735f6c6f67696e7c733a313a2231223b6c6f67696e5f747970657c733a353a2261646d696e223b),
('knmbphcfks8bfue7p5o4869f07fp636j', '127.0.0.1', 1586615728, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363631353732383b6c6f67696e5f7374617475737c733a313a2231223b757365725f69647c733a313a2232223b6e616d657c733a31353a2272756d626969686120737761696275223b61646d696e5f69735f6c6f67696e7c733a313a2231223b6c6f67696e5f747970657c733a353a2261646d696e223b),
('9pa7rt1t36lb1irpd7mk7ur2gpr7hdsn', '127.0.0.1', 1586616077, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363631363037373b6c6f67696e5f7374617475737c733a313a2231223b757365725f69647c733a313a2232223b6e616d657c733a31353a2272756d626969686120737761696275223b61646d696e5f69735f6c6f67696e7c733a313a2231223b6c6f67696e5f747970657c733a353a2261646d696e223b),
('lpt5jj8dl27bsf021l5jq7ai5l8jtchr', '127.0.0.1', 1586624356, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363632343335363b6c6f67696e5f7374617475737c733a313a2231223b757365725f69647c733a313a2232223b6e616d657c733a31353a2272756d626969686120737761696275223b61646d696e5f69735f6c6f67696e7c733a313a2231223b6c6f67696e5f747970657c733a353a2261646d696e223b),
('8r5qa1qb0n9psjace3381khgg6pv7hfc', '127.0.0.1', 1586624411, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363632343335363b6c6f67696e5f7374617475737c733a313a2231223b757365725f69647c733a313a2232223b6e616d657c733a31353a2272756d626969686120737761696275223b61646d696e5f69735f6c6f67696e7c733a313a2231223b6c6f67696e5f747970657c733a353a2261646d696e223b);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comments_id` int(20) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_id` int(20) NOT NULL,
  `comment_type` int(5) NOT NULL DEFAULT 1,
  `replay_for` int(10) DEFAULT 0,
  `comment` mediumtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `comment_at` datetime DEFAULT NULL,
  `publication` int(5) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `name` varchar(52) NOT NULL,
  `topLevelDomain` varchar(3) DEFAULT NULL,
  `alpha2Code` varchar(2) NOT NULL,
  `alpha3Code` varchar(3) NOT NULL,
  `callingCodes` varchar(5) DEFAULT NULL,
  `capital` varchar(19) DEFAULT NULL,
  `nativeName` varchar(58) NOT NULL,
  `currency_code` varchar(6) DEFAULT NULL,
  `currency_name` varchar(39) NOT NULL,
  `currency_symbol` varchar(4) DEFAULT NULL,
  `flag` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`name`, `topLevelDomain`, `alpha2Code`, `alpha3Code`, `callingCodes`, `capital`, `nativeName`, `currency_code`, `currency_name`, `currency_symbol`, `flag`) VALUES
('Afghanistan', '.af', 'AF', 'AFG', '93', 'Kabul', 'افغانستان', 'AFN', 'Afghan afghani', '؋', 'afg.svg'),
('Åland Islands', '.ax', 'AX', 'ALA', '358', 'Mariehamn', 'Åland', 'EUR', 'Euro', '€', 'ala.svg'),
('Albania', '.al', 'AL', 'ALB', '355', 'Tirana', 'Shqipëria', 'ALL', 'Albanian lek', 'L', 'alb.svg'),
('Algeria', '.dz', 'DZ', 'DZA', '213', 'Algiers', 'الجزائر', 'DZD', 'Algerian dinar', 'د.ج', 'dza.svg'),
('American Samoa', '.as', 'AS', 'ASM', '1684', 'Pago Pago', 'American Samoa', 'USD', 'United State Dollar', '$', 'asm.svg'),
('Andorra', '.ad', 'AD', 'AND', '376', 'Andorra la Vella', 'Andorra', 'EUR', 'Euro', '€', 'and.svg'),
('Angola', '.ao', 'AO', 'AGO', '244', 'Luanda', 'Angola', 'AOA', 'Angolan kwanza', 'Kz', 'ago.svg'),
('Anguilla', '.ai', 'AI', 'AIA', '1264', 'The Valley', 'Anguilla', 'XCD', 'East Caribbean dollar', '$', 'aia.svg'),
('Antarctica', '.aq', 'AQ', 'ATA', '672', NULL, 'Antarctica', 'AUD', 'Australian dollar', '$', 'ata.svg'),
('Antigua and Barbuda', '.ag', 'AG', 'ATG', '1268', 'Saint John\'s', 'Antigua and Barbuda', 'XCD', 'East Caribbean dollar', '$', 'atg.svg'),
('Argentina', '.ar', 'AR', 'ARG', '54', 'Buenos Aires', 'Argentina', 'ARS', 'Argentine peso', '$', 'arg.svg'),
('Armenia', '.am', 'AM', 'ARM', '374', 'Yerevan', 'Հայաստան', 'AMD', 'Armenian dram', NULL, 'arm.svg'),
('Aruba', '.aw', 'AW', 'ABW', '297', 'Oranjestad', 'Aruba', 'AWG', 'Aruban florin', 'ƒ', 'abw.svg'),
('Australia', '.au', 'AU', 'AUS', '61', 'Canberra', 'Australia', 'AUD', 'Australian dollar', '$', 'aus.svg'),
('Austria', '.at', 'AT', 'AUT', '43', 'Vienna', 'Österreich', 'EUR', 'Euro', '€', 'aut.svg'),
('Azerbaijan', '.az', 'AZ', 'AZE', '994', 'Baku', 'Azərbaycan', 'AZN', 'Azerbaijani manat', NULL, 'aze.svg'),
('Bahamas', '.bs', 'BS', 'BHS', '1242', 'Nassau', 'Bahamas', 'BSD', 'Bahamian dollar', '$', 'bhs.svg'),
('Bahrain', '.bh', 'BH', 'BHR', '973', 'Manama', '‏البحرين', 'BHD', 'Bahraini dinar', '.د.ب', 'bhr.svg'),
('Bangladesh', '.bd', 'BD', 'BGD', '880', 'Dhaka', 'Bangladesh', 'BDT', 'Bangladeshi taka', '৳', 'bgd.svg'),
('Barbados', '.bb', 'BB', 'BRB', '1246', 'Bridgetown', 'Barbados', 'BBD', 'Barbadian dollar', '$', 'brb.svg'),
('Belarus', '.by', 'BY', 'BLR', '375', 'Minsk', 'Белару́сь', 'BYN', 'New Belarusian ruble', 'Br', 'blr.svg'),
('Belgium', '.be', 'BE', 'BEL', '32', 'Brussels', 'België', 'EUR', 'Euro', '€', 'bel.svg'),
('Belize', '.bz', 'BZ', 'BLZ', '501', 'Belmopan', 'Belize', 'BZD', 'Belize dollar', '$', 'blz.svg'),
('Benin', '.bj', 'BJ', 'BEN', '229', 'Porto-Novo', 'Bénin', 'XOF', 'West African CFA franc', 'Fr', 'ben.svg'),
('Bermuda', '.bm', 'BM', 'BMU', '1441', 'Hamilton', 'Bermuda', 'BMD', 'Bermudian dollar', '$', 'bmu.svg'),
('Bhutan', '.bt', 'BT', 'BTN', '975', 'Thimphu', 'ʼbrug-yul', 'BTN', 'Bhutanese ngultrum', 'Nu.', 'btn.svg'),
('Bolivia (Plurinational State of)', '.bo', 'BO', 'BOL', '591', 'Sucre', 'Bolivia', 'BOB', 'Bolivian boliviano', 'Bs.', 'bol.svg'),
('Bonaire, Sint Eustatius and Saba', '.an', 'BQ', 'BES', '5997', 'Kralendijk', 'Bonaire', 'USD', 'United States dollar', '$', 'bes.svg'),
('Bosnia and Herzegovina', '.ba', 'BA', 'BIH', '387', 'Sarajevo', 'Bosna i Hercegovina', 'BAM', 'Bosnia and Herzegovina convertible mark', NULL, 'bih.svg'),
('Botswana', '.bw', 'BW', 'BWA', '267', 'Gaborone', 'Botswana', 'BWP', 'Botswana pula', 'P', 'bwa.svg'),
('Bouvet Island', '.bv', 'BV', 'BVT', NULL, NULL, 'Bouvetøya', 'NOK', 'Norwegian krone', 'kr', 'bvt.svg'),
('Brazil', '.br', 'BR', 'BRA', '55', 'Brasília', 'Brasil', 'BRL', 'Brazilian real', 'R$', 'bra.svg'),
('British Indian Ocean Territory', '.io', 'IO', 'IOT', '246', 'Diego Garcia', 'British Indian Ocean Territory', 'USD', 'United States dollar', '$', 'iot.svg'),
('Brunei Darussalam', '.bn', 'BN', 'BRN', '673', 'Bandar Seri Begawan', 'Negara Brunei Darussalam', 'BND', 'Brunei dollar', '$', 'brn.svg'),
('Bulgaria', '.bg', 'BG', 'BGR', '359', 'Sofia', 'България', 'BGN', 'Bulgarian lev', 'лв', 'bgr.svg'),
('Burkina Faso', '.bf', 'BF', 'BFA', '226', 'Ouagadougou', 'Burkina Faso', 'XOF', 'West African CFA franc', 'Fr', 'bfa.svg'),
('Burundi', '.bi', 'BI', 'BDI', '257', 'Bujumbura', 'Burundi', 'BIF', 'Burundian franc', 'Fr', 'bdi.svg'),
('Cabo Verde', '.cv', 'CV', 'CPV', '238', 'Praia', 'Cabo Verde', 'CVE', 'Cape Verdean escudo', 'Esc', 'cpv.svg'),
('Cambodia', '.kh', 'KH', 'KHM', '855', 'Phnom Penh', 'Kâmpŭchéa', 'KHR', 'Cambodian riel', '៛', 'khm.svg'),
('Cameroon', '.cm', 'CM', 'CMR', '237', 'Yaoundé', 'Cameroon', 'XAF', 'Central African CFA franc', 'Fr', 'cmr.svg'),
('Canada', '.ca', 'CA', 'CAN', '1', 'Ottawa', 'Canada', 'CAD', 'Canadian dollar', '$', 'can.svg'),
('Cayman Islands', '.ky', 'KY', 'CYM', '1345', 'George Town', 'Cayman Islands', 'KYD', 'Cayman Islands dollar', '$', 'cym.svg'),
('Central African Republic', '.cf', 'CF', 'CAF', '236', 'Bangui', 'Ködörösêse tî Bêafrîka', 'XAF', 'Central African CFA franc', 'Fr', 'caf.svg'),
('Chad', '.td', 'TD', 'TCD', '235', 'N\'Djamena', 'Tchad', 'XAF', 'Central African CFA franc', 'Fr', 'tcd.svg'),
('Chile', '.cl', 'CL', 'CHL', '56', 'Santiago', 'Chile', 'CLP', 'Chilean peso', '$', 'chl.svg'),
('China', '.cn', 'CN', 'CHN', '86', 'Beijing', '中国', 'CNY', 'Chinese yuan', '¥', 'chn.svg'),
('Christmas Island', '.cx', 'CX', 'CXR', '61', 'Flying Fish Cove', 'Christmas Island', 'AUD', 'Australian dollar', '$', 'cxr.svg'),
('Cocos (Keeling) Islands', '.cc', 'CC', 'CCK', '61', 'West Island', 'Cocos (Keeling) Islands', 'AUD', 'Australian dollar', '$', 'cck.svg'),
('Colombia', '.co', 'CO', 'COL', '57', 'Bogotá', 'Colombia', 'COP', 'Colombian peso', '$', 'col.svg'),
('Comoros', '.km', 'KM', 'COM', '269', 'Moroni', 'Komori', 'KMF', 'Comorian franc', 'Fr', 'com.svg'),
('Congo', '.cg', 'CG', 'COG', '242', 'Brazzaville', 'République du Congo', 'XAF', 'Central African CFA franc', 'Fr', 'cog.svg'),
('Congo (Democratic Republic of the)', '.cd', 'CD', 'COD', '243', 'Kinshasa', 'République démocratique du Congo', 'CDF', 'Congolese franc', 'Fr', 'cod.svg'),
('Cook Islands', '.ck', 'CK', 'COK', '682', 'Avarua', 'Cook Islands', 'NZD', 'New Zealand dollar', '$', 'cok.svg'),
('Costa Rica', '.cr', 'CR', 'CRI', '506', 'San José', 'Costa Rica', 'CRC', 'Costa Rican colón', '₡', 'cri.svg'),
('Côte d\'Ivoire', '.ci', 'CI', 'CIV', '225', 'Yamoussoukro', 'Côte d\'Ivoire', 'XOF', 'West African CFA franc', 'Fr', 'civ.svg'),
('Croatia', '.hr', 'HR', 'HRV', '385', 'Zagreb', 'Hrvatska', 'HRK', 'Croatian kuna', 'kn', 'hrv.svg'),
('Cuba', '.cu', 'CU', 'CUB', '53', 'Havana', 'Cuba', 'CUC', 'Cuban convertible peso', '$', 'cub.svg'),
('Curaçao', '.cw', 'CW', 'CUW', '599', 'Willemstad', 'Curaçao', 'ANG', 'Netherlands Antillean guilder', 'ƒ', 'cuw.svg'),
('Cyprus', '.cy', 'CY', 'CYP', '357', 'Nicosia', 'Κύπρος', 'EUR', 'Euro', '€', 'cyp.svg'),
('Czech Republic', '.cz', 'CZ', 'CZE', '420', 'Prague', 'Česká republika', 'CZK', 'Czech koruna', 'Kč', 'cze.svg'),
('Denmark', '.dk', 'DK', 'DNK', '45', 'Copenhagen', 'Danmark', 'DKK', 'Danish krone', 'kr', 'dnk.svg'),
('Djibouti', '.dj', 'DJ', 'DJI', '253', 'Djibouti', 'Djibouti', 'DJF', 'Djiboutian franc', 'Fr', 'dji.svg'),
('Dominica', '.dm', 'DM', 'DMA', '1767', 'Roseau', 'Dominica', 'XCD', 'East Caribbean dollar', '$', 'dma.svg'),
('Dominican Republic', '.do', 'DO', 'DOM', '1809', 'Santo Domingo', 'República Dominicana', 'DOP', 'Dominican peso', '$', 'dom.svg'),
('Ecuador', '.ec', 'EC', 'ECU', '593', 'Quito', 'Ecuador', 'USD', 'United States dollar', '$', 'ecu.svg'),
('Egypt', '.eg', 'EG', 'EGY', '20', 'Cairo', 'مصر‎', 'EGP', 'Egyptian pound', '£', 'egy.svg'),
('El Salvador', '.sv', 'SV', 'SLV', '503', 'San Salvador', 'El Salvador', 'USD', 'United States dollar', '$', 'slv.svg'),
('Equatorial Guinea', '.gq', 'GQ', 'GNQ', '240', 'Malabo', 'Guinea Ecuatorial', 'XAF', 'Central African CFA franc', 'Fr', 'gnq.svg'),
('Eritrea', '.er', 'ER', 'ERI', '291', 'Asmara', 'ኤርትራ', 'ERN', 'Eritrean nakfa', 'Nfk', 'eri.svg'),
('Estonia', '.ee', 'EE', 'EST', '372', 'Tallinn', 'Eesti', 'EUR', 'Euro', '€', 'est.svg'),
('Ethiopia', '.et', 'ET', 'ETH', '251', 'Addis Ababa', 'ኢትዮጵያ', 'ETB', 'Ethiopian birr', 'Br', 'eth.svg'),
('Falkland Islands (Malvinas)', '.fk', 'FK', 'FLK', '500', 'Stanley', 'Falkland Islands', 'FKP', 'Falkland Islands pound', '£', 'flk.svg'),
('Faroe Islands', '.fo', 'FO', 'FRO', '298', 'Tórshavn', 'Føroyar', 'DKK', 'Danish krone', 'kr', 'fro.svg'),
('Fiji', '.fj', 'FJ', 'FJI', '679', 'Suva', 'Fiji', 'FJD', 'Fijian dollar', '$', 'fji.svg'),
('Finland', '.fi', 'FI', 'FIN', '358', 'Helsinki', 'Suomi', 'EUR', 'Euro', '€', 'fin.svg'),
('France', '.fr', 'FR', 'FRA', '33', 'Paris', 'France', 'EUR', 'Euro', '€', 'fra.svg'),
('French Guiana', '.gf', 'GF', 'GUF', '594', 'Cayenne', 'Guyane française', 'EUR', 'Euro', '€', 'guf.svg'),
('French Polynesia', '.pf', 'PF', 'PYF', '689', 'Papeetē', 'Polynésie française', 'XPF', 'CFP franc', 'Fr', 'pyf.svg'),
('French Southern Territories', '.tf', 'TF', 'ATF', NULL, 'Port-aux-Français', 'Territoire des Terres australes et antarctiques françaises', 'EUR', 'Euro', '€', 'atf.svg'),
('Gabon', '.ga', 'GA', 'GAB', '241', 'Libreville', 'Gabon', 'XAF', 'Central African CFA franc', 'Fr', 'gab.svg'),
('Gambia', '.gm', 'GM', 'GMB', '220', 'Banjul', 'Gambia', 'GMD', 'Gambian dalasi', 'D', 'gmb.svg'),
('Georgia', '.ge', 'GE', 'GEO', '995', 'Tbilisi', 'საქართველო', 'GEL', 'Georgian Lari', 'ლ', 'geo.svg'),
('Germany', '.de', 'DE', 'DEU', '49', 'Berlin', 'Deutschland', 'EUR', 'Euro', '€', 'deu.svg'),
('Ghana', '.gh', 'GH', 'GHA', '233', 'Accra', 'Ghana', 'GHS', 'Ghanaian cedi', '₵', 'gha.svg'),
('Gibraltar', '.gi', 'GI', 'GIB', '350', 'Gibraltar', 'Gibraltar', 'GIP', 'Gibraltar pound', '£', 'gib.svg'),
('Greece', '.gr', 'GR', 'GRC', '30', 'Athens', 'Ελλάδα', 'EUR', 'Euro', '€', 'grc.svg'),
('Greenland', '.gl', 'GL', 'GRL', '299', 'Nuuk', 'Kalaallit Nunaat', 'DKK', 'Danish krone', 'kr', 'grl.svg'),
('Grenada', '.gd', 'GD', 'GRD', '1473', 'St. George\'s', 'Grenada', 'XCD', 'East Caribbean dollar', '$', 'grd.svg'),
('Guadeloupe', '.gp', 'GP', 'GLP', '590', 'Basse-Terre', 'Guadeloupe', 'EUR', 'Euro', '€', 'glp.svg'),
('Guam', '.gu', 'GU', 'GUM', '1671', 'Hagåtña', 'Guam', 'USD', 'United States dollar', '$', 'gum.svg'),
('Guatemala', '.gt', 'GT', 'GTM', '502', 'Guatemala City', 'Guatemala', 'GTQ', 'Guatemalan quetzal', 'Q', 'gtm.svg'),
('Guernsey', '.gg', 'GG', 'GGY', '44', 'St. Peter Port', 'Guernsey', 'GBP', 'British pound', '£', 'ggy.svg'),
('Guinea', '.gn', 'GN', 'GIN', '224', 'Conakry', 'Guinée', 'GNF', 'Guinean franc', 'Fr', 'gin.svg'),
('Guinea-Bissau', '.gw', 'GW', 'GNB', '245', 'Bissau', 'Guiné-Bissau', 'XOF', 'West African CFA franc', 'Fr', 'gnb.svg'),
('Guyana', '.gy', 'GY', 'GUY', '592', 'Georgetown', 'Guyana', 'GYD', 'Guyanese dollar', '$', 'guy.svg'),
('Haiti', '.ht', 'HT', 'HTI', '509', 'Port-au-Prince', 'Haïti', 'HTG', 'Haitian gourde', 'G', 'hti.svg'),
('Heard Island and McDonald Islands', '.hm', 'HM', 'HMD', NULL, NULL, 'Heard Island and McDonald Islands', 'AUD', 'Australian dollar', '$', 'hmd.svg'),
('Holy See', '.va', 'VA', 'VAT', '379', 'Rome', 'Sancta Sedes', 'EUR', 'Euro', '€', 'vat.svg'),
('Honduras', '.hn', 'HN', 'HND', '504', 'Tegucigalpa', 'Honduras', 'HNL', 'Honduran lempira', 'L', 'hnd.svg'),
('Hong Kong', '.hk', 'HK', 'HKG', '852', 'City of Victoria', '香港', 'HKD', 'Hong Kong dollar', '$', 'hkg.svg'),
('Hungary', '.hu', 'HU', 'HUN', '36', 'Budapest', 'Magyarország', 'HUF', 'Hungarian forint', 'Ft', 'hun.svg'),
('Iceland', '.is', 'IS', 'ISL', '354', 'Reykjavík', 'Ísland', 'ISK', 'Icelandic króna', 'kr', 'isl.svg'),
('India', '.in', 'IN', 'IND', '91', 'New Delhi', 'भारत', 'INR', 'Indian rupee', '₹', 'ind.svg'),
('Indonesia', '.id', 'ID', 'IDN', '62', 'Jakarta', 'Indonesia', 'IDR', 'Indonesian rupiah', 'Rp', 'idn.svg'),
('Iran (Islamic Republic of)', '.ir', 'IR', 'IRN', '98', 'Tehran', 'ایران', 'IRR', 'Iranian rial', '﷼', 'irn.svg'),
('Iraq', '.iq', 'IQ', 'IRQ', '964', 'Baghdad', 'العراق', 'IQD', 'Iraqi dinar', 'ع.د', 'irq.svg'),
('Ireland', '.ie', 'IE', 'IRL', '353', 'Dublin', 'Éire', 'EUR', 'Euro', '€', 'irl.svg'),
('Isle of Man', '.im', 'IM', 'IMN', '44', 'Douglas', 'Isle of Man', 'GBP', 'British pound', '£', 'imn.svg'),
('Israel', '.il', 'IL', 'ISR', '972', 'Jerusalem', 'יִשְׂרָאֵל', 'ILS', 'Israeli new shekel', '₪', 'isr.svg'),
('Italy', '.it', 'IT', 'ITA', '39', 'Rome', 'Italia', 'EUR', 'Euro', '€', 'ita.svg'),
('Jamaica', '.jm', 'JM', 'JAM', '1876', 'Kingston', 'Jamaica', 'JMD', 'Jamaican dollar', '$', 'jam.svg'),
('Japan', '.jp', 'JP', 'JPN', '81', 'Tokyo', '日本', 'JPY', 'Japanese yen', '¥', 'jpn.svg'),
('Jersey', '.je', 'JE', 'JEY', '44', 'Saint Helier', 'Jersey', 'GBP', 'British pound', '£', 'jey.svg'),
('Jordan', '.jo', 'JO', 'JOR', '962', 'Amman', 'الأردن', 'JOD', 'Jordanian dinar', 'د.ا', 'jor.svg'),
('Kazakhstan', '.kz', 'KZ', 'KAZ', '76', 'Astana', 'Қазақстан', 'KZT', 'Kazakhstani tenge', NULL, 'kaz.svg'),
('Kenya', '.ke', 'KE', 'KEN', '254', 'Nairobi', 'Kenya', 'KES', 'Kenyan shilling', 'Sh', 'ken.svg'),
('Kiribati', '.ki', 'KI', 'KIR', '686', 'South Tarawa', 'Kiribati', 'AUD', 'Australian dollar', '$', 'kir.svg'),
('Korea (Democratic People\'s Republic of)', '.kp', 'KP', 'PRK', '850', 'Pyongyang', '북한', 'KPW', 'North Korean won', '₩', 'prk.svg'),
('Korea (Republic of)', '.kr', 'KR', 'KOR', '82', 'Seoul', '대한민국', 'KRW', 'South Korean won', '₩', 'kor.svg'),
('Kuwait', '.kw', 'KW', 'KWT', '965', 'Kuwait City', 'الكويت', 'KWD', 'Kuwaiti dinar', 'د.ك', 'kwt.svg'),
('Kyrgyzstan', '.kg', 'KG', 'KGZ', '996', 'Bishkek', 'Кыргызстан', 'KGS', 'Kyrgyzstani som', 'с', 'kgz.svg'),
('Lao People\'s Democratic Republic', '.la', 'LA', 'LAO', '856', 'Vientiane', 'ສປປລາວ', 'LAK', 'Lao kip', '₭', 'lao.svg'),
('Latvia', '.lv', 'LV', 'LVA', '371', 'Riga', 'Latvija', 'EUR', 'Euro', '€', 'lva.svg'),
('Lebanon', '.lb', 'LB', 'LBN', '961', 'Beirut', 'لبنان', 'LBP', 'Lebanese pound', 'ل.ل', 'lbn.svg'),
('Lesotho', '.ls', 'LS', 'LSO', '266', 'Maseru', 'Lesotho', 'LSL', 'Lesotho loti', 'L', 'lso.svg'),
('Liberia', '.lr', 'LR', 'LBR', '231', 'Monrovia', 'Liberia', 'LRD', 'Liberian dollar', '$', 'lbr.svg'),
('Libya', '.ly', 'LY', 'LBY', '218', 'Tripoli', '‏ليبيا', 'LYD', 'Libyan dinar', 'ل.د', 'lby.svg'),
('Liechtenstein', '.li', 'LI', 'LIE', '423', 'Vaduz', 'Liechtenstein', 'CHF', 'Swiss franc', 'Fr', 'lie.svg'),
('Lithuania', '.lt', 'LT', 'LTU', '370', 'Vilnius', 'Lietuva', 'EUR', 'Euro', '€', 'ltu.svg'),
('Luxembourg', '.lu', 'LU', 'LUX', '352', 'Luxembourg', 'Luxembourg', 'EUR', 'Euro', '€', 'lux.svg'),
('Macao', '.mo', 'MO', 'MAC', '853', NULL, '澳門', 'MOP', 'Macanese pataca', 'P', 'mac.svg'),
('Macedonia (the former Yugoslav Republic of)', '.mk', 'MK', 'MKD', '389', 'Skopje', 'Македонија', 'MKD', 'Macedonian denar', 'ден', 'mkd.svg'),
('Madagascar', '.mg', 'MG', 'MDG', '261', 'Antananarivo', 'Madagasikara', 'MGA', 'Malagasy ariary', 'Ar', 'mdg.svg'),
('Malawi', '.mw', 'MW', 'MWI', '265', 'Lilongwe', 'Malawi', 'MWK', 'Malawian kwacha', 'MK', 'mwi.svg'),
('Malaysia', '.my', 'MY', 'MYS', '60', 'Kuala Lumpur', 'Malaysia', 'MYR', 'Malaysian ringgit', 'RM', 'mys.svg'),
('Maldives', '.mv', 'MV', 'MDV', '960', 'Malé', 'Maldives', 'MVR', 'Maldivian rufiyaa', '.ރ', 'mdv.svg'),
('Mali', '.ml', 'ML', 'MLI', '223', 'Bamako', 'Mali', 'XOF', 'West African CFA franc', 'Fr', 'mli.svg'),
('Malta', '.mt', 'MT', 'MLT', '356', 'Valletta', 'Malta', 'EUR', 'Euro', '€', 'mlt.svg'),
('Marshall Islands', '.mh', 'MH', 'MHL', '692', 'Majuro', 'M̧ajeļ', 'USD', 'United States dollar', '$', 'mhl.svg'),
('Martinique', '.mq', 'MQ', 'MTQ', '596', 'Fort-de-France', 'Martinique', 'EUR', 'Euro', '€', 'mtq.svg'),
('Mauritania', '.mr', 'MR', 'MRT', '222', 'Nouakchott', 'موريتانيا', 'MRO', 'Mauritanian ouguiya', 'UM', 'mrt.svg'),
('Mauritius', '.mu', 'MU', 'MUS', '230', 'Port Louis', 'Maurice', 'MUR', 'Mauritian rupee', '₨', 'mus.svg'),
('Mayotte', '.yt', 'YT', 'MYT', '262', 'Mamoudzou', 'Mayotte', 'EUR', 'Euro', '€', 'myt.svg'),
('Mexico', '.mx', 'MX', 'MEX', '52', 'Mexico City', 'México', 'MXN', 'Mexican peso', '$', 'mex.svg'),
('Micronesia (Federated States of)', '.fm', 'FM', 'FSM', '691', 'Palikir', 'Micronesia', NULL, '[D]', '$', 'fsm.svg'),
('Moldova (Republic of)', '.md', 'MD', 'MDA', '373', 'Chișinău', 'Moldova', 'MDL', 'Moldovan leu', 'L', 'mda.svg'),
('Monaco', '.mc', 'MC', 'MCO', '377', 'Monaco', 'Monaco', 'EUR', 'Euro', '€', 'mco.svg'),
('Mongolia', '.mn', 'MN', 'MNG', '976', 'Ulan Bator', 'Монгол улс', 'MNT', 'Mongolian tögrög', '₮', 'mng.svg'),
('Montenegro', '.me', 'ME', 'MNE', '382', 'Podgorica', 'Црна Гора', 'EUR', 'Euro', '€', 'mne.svg'),
('Montserrat', '.ms', 'MS', 'MSR', '1664', 'Plymouth', 'Montserrat', 'XCD', 'East Caribbean dollar', '$', 'msr.svg'),
('Morocco', '.ma', 'MA', 'MAR', '212', 'Rabat', 'المغرب', 'MAD', 'Moroccan dirham', 'د.م.', 'mar.svg'),
('Mozambique', '.mz', 'MZ', 'MOZ', '258', 'Maputo', 'Moçambique', 'MZN', 'Mozambican metical', 'MT', 'moz.svg'),
('Myanmar', '.mm', 'MM', 'MMR', '95', 'Naypyidaw', 'Myanma', 'MMK', 'Burmese kyat', 'Ks', 'mmr.svg'),
('Namibia', '.na', 'NA', 'NAM', '264', 'Windhoek', 'Namibia', 'NAD', 'Namibian dollar', '$', 'nam.svg'),
('Nauru', '.nr', 'NR', 'NRU', '674', 'Yaren', 'Nauru', 'AUD', 'Australian dollar', '$', 'nru.svg'),
('Nepal', '.np', 'NP', 'NPL', '977', 'Kathmandu', 'नेपाल', 'NPR', 'Nepalese rupee', '₨', 'npl.svg'),
('Netherlands', '.nl', 'NL', 'NLD', '31', 'Amsterdam', 'Nederland', 'EUR', 'Euro', '€', 'nld.svg'),
('New Caledonia', '.nc', 'NC', 'NCL', '687', 'Nouméa', 'Nouvelle-Calédonie', 'XPF', 'CFP franc', 'Fr', 'ncl.svg'),
('New Zealand', '.nz', 'NZ', 'NZL', '64', 'Wellington', 'New Zealand', 'NZD', 'New Zealand dollar', '$', 'nzl.svg'),
('Nicaragua', '.ni', 'NI', 'NIC', '505', 'Managua', 'Nicaragua', 'NIO', 'Nicaraguan córdoba', 'C$', 'nic.svg'),
('Niger', '.ne', 'NE', 'NER', '227', 'Niamey', 'Niger', 'XOF', 'West African CFA franc', 'Fr', 'ner.svg'),
('Nigeria', '.ng', 'NG', 'NGA', '234', 'Abuja', 'Nigeria', 'NGN', 'Nigerian naira', '₦', 'nga.svg'),
('Niue', '.nu', 'NU', 'NIU', '683', 'Alofi', 'Niuē', 'NZD', 'New Zealand dollar', '$', 'niu.svg'),
('Norfolk Island', '.nf', 'NF', 'NFK', '672', 'Kingston', 'Norfolk Island', 'AUD', 'Australian dollar', '$', 'nfk.svg'),
('Northern Mariana Islands', '.mp', 'MP', 'MNP', '1670', 'Saipan', 'Northern Mariana Islands', 'USD', 'United States dollar', '$', 'mnp.svg'),
('Norway', '.no', 'NO', 'NOR', '47', 'Oslo', 'Norge', 'NOK', 'Norwegian krone', 'kr', 'nor.svg'),
('Oman', '.om', 'OM', 'OMN', '968', 'Muscat', 'عمان', 'OMR', 'Omani rial', 'ر.ع.', 'omn.svg'),
('Pakistan', '.pk', 'PK', 'PAK', '92', 'Islamabad', 'Pakistan', 'PKR', 'Pakistani rupee', '₨', 'pak.svg'),
('Palau', '.pw', 'PW', 'PLW', '680', 'Ngerulmud', 'Palau', '(none)', '[E]', '$', 'plw.svg'),
('Palestine, State of', '.ps', 'PS', 'PSE', '970', 'Ramallah', 'فلسطين', 'ILS', 'Israeli new sheqel', '₪', 'pse.svg'),
('Panama', '.pa', 'PA', 'PAN', '507', 'Panama City', 'Panamá', 'PAB', 'Panamanian balboa', 'B/.', 'pan.svg'),
('Papua New Guinea', '.pg', 'PG', 'PNG', '675', 'Port Moresby', 'Papua Niugini', 'PGK', 'Papua New Guinean kina', 'K', 'png.svg'),
('Paraguay', '.py', 'PY', 'PRY', '595', 'Asunción', 'Paraguay', 'PYG', 'Paraguayan guaraní', '₲', 'pry.svg'),
('Peru', '.pe', 'PE', 'PER', '51', 'Lima', 'Perú', 'PEN', 'Peruvian sol', 'S/.', 'per.svg'),
('Philippines', '.ph', 'PH', 'PHL', '63', 'Manila', 'Pilipinas', 'PHP', 'Philippine peso', '₱', 'phl.svg'),
('Pitcairn', '.pn', 'PN', 'PCN', '64', 'Adamstown', 'Pitcairn Islands', 'NZD', 'New Zealand dollar', '$', 'pcn.svg'),
('Poland', '.pl', 'PL', 'POL', '48', 'Warsaw', 'Polska', 'PLN', 'Polish złoty', 'zł', 'pol.svg'),
('Portugal', '.pt', 'PT', 'PRT', '351', 'Lisbon', 'Portugal', 'EUR', 'Euro', '€', 'prt.svg'),
('Puerto Rico', '.pr', 'PR', 'PRI', '1787', 'San Juan', 'Puerto Rico', 'USD', 'United States dollar', '$', 'pri.svg'),
('Qatar', '.qa', 'QA', 'QAT', '974', 'Doha', 'قطر', 'QAR', 'Qatari riyal', 'ر.ق', 'qat.svg'),
('Republic of Kosovo', NULL, 'XK', 'KOS', '383', 'Pristina', 'Republika e Kosovës', 'EUR', 'Euro', '€', 'kos.svg'),
('Réunion', '.re', 'RE', 'REU', '262', 'Saint-Denis', 'La Réunion', 'EUR', 'Euro', '€', 'reu.svg'),
('Romania', '.ro', 'RO', 'ROU', '40', 'Bucharest', 'România', 'RON', 'Romanian leu', 'lei', 'rou.svg'),
('Russian Federation', '.ru', 'RU', 'RUS', '7', 'Moscow', 'Россия', 'RUB', 'Russian ruble', '₽', 'rus.svg'),
('Rwanda', '.rw', 'RW', 'RWA', '250', 'Kigali', 'Rwanda', 'RWF', 'Rwandan franc', 'Fr', 'rwa.svg'),
('Saint Barthélemy', '.bl', 'BL', 'BLM', '590', 'Gustavia', 'Saint-Barthélemy', 'EUR', 'Euro', '€', 'blm.svg'),
('Saint Helena, Ascension and Tristan da Cunha', '.sh', 'SH', 'SHN', '290', 'Jamestown', 'Saint Helena', 'SHP', 'Saint Helena pound', '£', 'shn.svg'),
('Saint Kitts and Nevis', '.kn', 'KN', 'KNA', '1869', 'Basseterre', 'Saint Kitts and Nevis', 'XCD', 'East Caribbean dollar', '$', 'kna.svg'),
('Saint Lucia', '.lc', 'LC', 'LCA', '1758', 'Castries', 'Saint Lucia', 'XCD', 'East Caribbean dollar', '$', 'lca.svg'),
('Saint Martin (French part)', '.mf', 'MF', 'MAF', '590', 'Marigot', 'Saint-Martin', 'EUR', 'Euro', '€', 'maf.svg'),
('Saint Pierre and Miquelon', '.pm', 'PM', 'SPM', '508', 'Saint-Pierre', 'Saint-Pierre-et-Miquelon', 'EUR', 'Euro', '€', 'spm.svg'),
('Saint Vincent and the Grenadines', '.vc', 'VC', 'VCT', '1784', 'Kingstown', 'Saint Vincent and the Grenadines', 'XCD', 'East Caribbean dollar', '$', 'vct.svg'),
('Samoa', '.ws', 'WS', 'WSM', '685', 'Apia', 'Samoa', 'WST', 'Samoan tālā', 'T', 'wsm.svg'),
('San Marino', '.sm', 'SM', 'SMR', '378', 'City of San Marino', 'San Marino', 'EUR', 'Euro', '€', 'smr.svg'),
('Sao Tome and Principe', '.st', 'ST', 'STP', '239', 'São Tomé', 'São Tomé e Príncipe', 'STD', 'São Tomé and Príncipe dobra', 'Db', 'stp.svg'),
('Saudi Arabia', '.sa', 'SA', 'SAU', '966', 'Riyadh', 'العربية السعودية', 'SAR', 'Saudi riyal', 'ر.س', 'sau.svg'),
('Senegal', '.sn', 'SN', 'SEN', '221', 'Dakar', 'Sénégal', 'XOF', 'West African CFA franc', 'Fr', 'sen.svg'),
('Serbia', '.rs', 'RS', 'SRB', '381', 'Belgrade', 'Србија', 'RSD', 'Serbian dinar', 'дин.', 'srb.svg'),
('Seychelles', '.sc', 'SC', 'SYC', '248', 'Victoria', 'Seychelles', 'SCR', 'Seychellois rupee', '₨', 'syc.svg'),
('Sierra Leone', '.sl', 'SL', 'SLE', '232', 'Freetown', 'Sierra Leone', 'SLL', 'Sierra Leonean leone', 'Le', 'sle.svg'),
('Singapore', '.sg', 'SG', 'SGP', '65', 'Singapore', 'Singapore', 'BND', 'Brunei dollar', '$', 'sgp.svg'),
('Sint Maarten (Dutch part)', '.sx', 'SX', 'SXM', '1721', 'Philipsburg', 'Sint Maarten', 'ANG', 'Netherlands Antillean guilder', 'ƒ', 'sxm.svg'),
('Slovakia', '.sk', 'SK', 'SVK', '421', 'Bratislava', 'Slovensko', 'EUR', 'Euro', '€', 'svk.svg'),
('Slovenia', '.si', 'SI', 'SVN', '386', 'Ljubljana', 'Slovenija', 'EUR', 'Euro', '€', 'svn.svg'),
('Solomon Islands', '.sb', 'SB', 'SLB', '677', 'Honiara', 'Solomon Islands', 'SBD', 'Solomon Islands dollar', '$', 'slb.svg'),
('Somalia', '.so', 'SO', 'SOM', '252', 'Mogadishu', 'Soomaaliya', 'SOS', 'Somali shilling', 'Sh', 'som.svg'),
('South Africa', '.za', 'ZA', 'ZAF', '27', 'Pretoria', 'South Africa', 'ZAR', 'South African rand', 'R', 'zaf.svg'),
('South Georgia and the South Sandwich Islands', '.gs', 'GS', 'SGS', '500', 'King Edward Point', 'South Georgia', 'GBP', 'British pound', '£', 'sgs.svg'),
('South Sudan', '.ss', 'SS', 'SSD', '211', 'Juba', 'South Sudan', 'SSP', 'South Sudanese pound', '£', 'ssd.svg'),
('Spain', '.es', 'ES', 'ESP', '34', 'Madrid', 'España', 'EUR', 'Euro', '€', 'esp.svg'),
('Sri Lanka', '.lk', 'LK', 'LKA', '94', 'Colombo', 'śrī laṃkāva', 'LKR', 'Sri Lankan rupee', 'Rs', 'lka.svg'),
('Sudan', '.sd', 'SD', 'SDN', '249', 'Khartoum', 'السودان', 'SDG', 'Sudanese pound', 'ج.س.', 'sdn.svg'),
('Suriname', '.sr', 'SR', 'SUR', '597', 'Paramaribo', 'Suriname', 'SRD', 'Surinamese dollar', '$', 'sur.svg'),
('Svalbard and Jan Mayen', '.sj', 'SJ', 'SJM', '4779', 'Longyearbyen', 'Svalbard og Jan Mayen', 'NOK', 'Norwegian krone', 'kr', 'sjm.svg'),
('Swaziland', '.sz', 'SZ', 'SWZ', '268', 'Lobamba', 'Swaziland', 'SZL', 'Swazi lilangeni', 'L', 'swz.svg'),
('Sweden', '.se', 'SE', 'SWE', '46', 'Stockholm', 'Sverige', 'SEK', 'Swedish krona', 'kr', 'swe.svg'),
('Switzerland', '.ch', 'CH', 'CHE', '41', 'Bern', 'Schweiz', 'CHF', 'Swiss franc', 'Fr', 'che.svg'),
('Syrian Arab Republic', '.sy', 'SY', 'SYR', '963', 'Damascus', 'سوريا', 'SYP', 'Syrian pound', '£', 'syr.svg'),
('Taiwan', '.tw', 'TW', 'TWN', '886', 'Taipei', '臺灣', 'TWD', 'New Taiwan dollar', '$', 'twn.svg'),
('Tajikistan', '.tj', 'TJ', 'TJK', '992', 'Dushanbe', 'Тоҷикистон', 'TJS', 'Tajikistani somoni', 'ЅМ', 'tjk.svg'),
('Tanzania, United Republic of', '.tz', 'TZ', 'TZA', '255', 'Dodoma', 'Tanzania', 'TZS', 'Tanzanian shilling', 'Sh', 'tza.svg'),
('Thailand', '.th', 'TH', 'THA', '66', 'Bangkok', 'ประเทศไทย', 'THB', 'Thai baht', '฿', 'tha.svg'),
('Timor-Leste', '.tl', 'TL', 'TLS', '670', 'Dili', 'Timor-Leste', 'USD', 'United States dollar', '$', 'tls.svg'),
('Togo', '.tg', 'TG', 'TGO', '228', 'Lomé', 'Togo', 'XOF', 'West African CFA franc', 'Fr', 'tgo.svg'),
('Tokelau', '.tk', 'TK', 'TKL', '690', 'Fakaofo', 'Tokelau', 'NZD', 'New Zealand dollar', '$', 'tkl.svg'),
('Tonga', '.to', 'TO', 'TON', '676', 'Nuku\'alofa', 'Tonga', 'TOP', 'Tongan paʻanga', 'T$', 'ton.svg'),
('Trinidad and Tobago', '.tt', 'TT', 'TTO', '1868', 'Port of Spain', 'Trinidad and Tobago', 'TTD', 'Trinidad and Tobago dollar', '$', 'tto.svg'),
('Tunisia', '.tn', 'TN', 'TUN', '216', 'Tunis', 'تونس', 'TND', 'Tunisian dinar', 'د.ت', 'tun.svg'),
('Turkey', '.tr', 'TR', 'TUR', '90', 'Ankara', 'Türkiye', 'TRY', 'Turkish lira', NULL, 'tur.svg'),
('Turkmenistan', '.tm', 'TM', 'TKM', '993', 'Ashgabat', 'Türkmenistan', 'TMT', 'Turkmenistan manat', 'm', 'tkm.svg'),
('Turks and Caicos Islands', '.tc', 'TC', 'TCA', '1649', 'Cockburn Town', 'Turks and Caicos Islands', 'USD', 'United States dollar', '$', 'tca.svg'),
('Tuvalu', '.tv', 'TV', 'TUV', '688', 'Funafuti', 'Tuvalu', 'AUD', 'Australian dollar', '$', 'tuv.svg'),
('Uganda', '.ug', 'UG', 'UGA', '256', 'Kampala', 'Uganda', 'UGX', 'Ugandan shilling', 'Sh', 'uga.svg'),
('Ukraine', '.ua', 'UA', 'UKR', '380', 'Kiev', 'Україна', 'UAH', 'Ukrainian hryvnia', '₴', 'ukr.svg'),
('United Arab Emirates', '.ae', 'AE', 'ARE', '971', 'Abu Dhabi', 'دولة الإمارات العربية المتحدة', 'AED', 'United Arab Emirates dirham', 'د.إ', 'are.svg'),
('United Kingdom of Great Britain and Northern Ireland', '.uk', 'GB', 'GBR', '44', 'London', 'United Kingdom', 'GBP', 'British pound', '£', 'gbr.svg'),
('United States Minor Outlying Islands', '.us', 'UM', 'UMI', NULL, NULL, 'United States Minor Outlying Islands', 'USD', 'United States Dollar', '$', 'umi.svg'),
('United States of America', '.us', 'US', 'USA', '1', 'Washington, D.C.', 'United States', 'USD', 'United States dollar', '$', 'usa.svg'),
('Uruguay', '.uy', 'UY', 'URY', '598', 'Montevideo', 'Uruguay', 'UYU', 'Uruguayan peso', '$', 'ury.svg'),
('Uzbekistan', '.uz', 'UZ', 'UZB', '998', 'Tashkent', 'O‘zbekiston', 'UZS', 'Uzbekistani so\'m', NULL, 'uzb.svg'),
('Vanuatu', '.vu', 'VU', 'VUT', '678', 'Port Vila', 'Vanuatu', 'VUV', 'Vanuatu vatu', 'Vt', 'vut.svg'),
('Venezuela (Bolivarian Republic of)', '.ve', 'VE', 'VEN', '58', 'Caracas', 'Venezuela', 'VEF', 'Venezuelan bolívar', 'Bs F', 'ven.svg'),
('Viet Nam', '.vn', 'VN', 'VNM', '84', 'Hanoi', 'Việt Nam', 'VND', 'Vietnamese đồng', '₫', 'vnm.svg'),
('Virgin Islands (British)', '.vg', 'VG', 'VGB', '1284', 'Road Town', 'British Virgin Islands', NULL, '[D]', '$', 'vgb.svg'),
('Virgin Islands (U.S.)', '.vi', 'VI', 'VIR', '1 340', 'Charlotte Amalie', 'Virgin Islands of the United States', 'USD', 'United States dollar', '$', 'vir.svg'),
('Wallis and Futuna', '.wf', 'WF', 'WLF', '681', 'Mata-Utu', 'Wallis et Futuna', 'XPF', 'CFP franc', 'Fr', 'wlf.svg'),
('Western Sahara', '.eh', 'EH', 'ESH', '212', 'El Aaiún', 'الصحراء الغربية', 'MAD', 'Moroccan dirham', 'د.م.', 'esh.svg'),
('Yemen', '.ye', 'YE', 'YEM', '967', 'Sana\'a', 'اليَمَن', 'YER', 'Yemeni rial', '﷼', 'yem.svg'),
('Zambia', '.zm', 'ZM', 'ZMB', '260', 'Lusaka', 'Zambia', 'ZMW', 'Zambian kwacha', 'ZK', 'zmb.svg'),
('Zimbabwe', '.zw', 'ZW', 'ZWE', '263', 'Harare', 'Zimbabwe', 'BWP', 'Botswana pula', 'P', 'zwe.svg');

-- --------------------------------------------------------

--
-- Table structure for table `cron`
--

CREATE TABLE `cron` (
  `cron_id` int(11) NOT NULL,
  `type` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `action` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `image_url` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `save_to` varchar(250) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `products_id` int(250) DEFAULT NULL,
  `admin_email_from` varchar(250) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `admin_email` varchar(250) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email_to` varchar(250) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email_sub` varchar(250) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `value` varchar(10) NOT NULL,
  `base` varchar(10) DEFAULT 'EURO',
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `value`, `base`, `updated_at`) VALUES
(841, 'AED', '3.99084', 'EURO', NULL),
(842, 'AFN', '82.796877', 'EURO', NULL),
(843, 'ALL', '124.681889', 'EURO', NULL),
(844, 'AMD', '524.281347', 'EURO', NULL),
(845, 'ANG', '1.950716', 'EURO', NULL),
(846, 'AOA', '614.754264', 'EURO', NULL),
(847, 'ARS', '71.692353', 'EURO', NULL),
(848, 'AUD', '1.705434', 'EURO', NULL),
(849, 'AWG', '1.955788', 'EURO', NULL),
(850, 'AZN', '1.820668', 'EURO', NULL),
(851, 'BAM', '1.956549', 'EURO', NULL),
(852, 'BBD', '2.194306', 'EURO', NULL),
(853, 'BDT', '92.314306', 'EURO', NULL),
(854, 'BGN', '1.955337', 'EURO', NULL),
(855, 'BHD', '0.410301', 'EURO', NULL),
(856, 'BIF', '2073.13561', 'EURO', NULL),
(857, 'BMD', '1.086549', 'EURO', NULL),
(858, 'BND', '1.545868', 'EURO', NULL),
(859, 'BOB', '7.493152', 'EURO', NULL),
(860, 'BRL', '5.753269', 'EURO', NULL),
(861, 'BSD', '1.086799', 'EURO', NULL),
(862, 'BTC', '0.000153', 'EURO', NULL),
(863, 'BTN', '83.217066', 'EURO', NULL),
(864, 'BWP', '13.301785', 'EURO', NULL),
(865, 'BYN', '2.655675', 'EURO', NULL),
(866, 'BYR', '21296.3616', 'EURO', NULL),
(867, 'BZD', '2.190605', 'EURO', NULL),
(868, 'CAD', '1.530334', 'EURO', NULL),
(869, 'CDF', '1866.69105', 'EURO', NULL),
(870, 'CHF', '1.05166', 'EURO', NULL),
(871, 'CLF', '0.033711', 'EURO', NULL),
(872, 'CLP', '930.086297', 'EURO', NULL),
(873, 'CNY', '7.685382', 'EURO', NULL),
(874, 'COP', '4321.97708', 'EURO', NULL),
(875, 'CRC', '610.814336', 'EURO', NULL),
(876, 'CUC', '1.086549', 'EURO', NULL),
(877, 'CUP', '28.79355', 'EURO', NULL),
(878, 'CVE', '110.55599', 'EURO', NULL),
(879, 'CZK', '27.37454', 'EURO', NULL),
(880, 'DJF', '193.101343', 'EURO', NULL),
(881, 'DKK', '7.457937', 'EURO', NULL),
(882, 'DOP', '59.1626', 'EURO', NULL),
(883, 'DZD', '139.078401', 'EURO', NULL),
(884, 'EGP', '17.115214', 'EURO', NULL),
(885, 'ERN', '16.297937', 'EURO', NULL),
(886, 'ETB', '36.138487', 'EURO', NULL),
(887, 'EUR', '1', 'EURO', NULL),
(888, 'FJD', '2.468095', 'EURO', NULL),
(889, 'FKP', '0.874056', 'EURO', NULL),
(890, 'GBP', '0.873836', 'EURO', NULL),
(891, 'GEL', '3.411456', 'EURO', NULL),
(892, 'GGP', '0.874056', 'EURO', NULL),
(893, 'GHS', '6.280009', 'EURO', NULL),
(894, 'GIP', '0.874056', 'EURO', NULL),
(895, 'GMD', '55.446216', 'EURO', NULL),
(896, 'GNF', '10267.8882', 'EURO', NULL),
(897, 'GTQ', '8.378877', 'EURO', NULL),
(898, 'GYD', '227.373506', 'EURO', NULL),
(899, 'HKD', '8.421201', 'EURO', NULL),
(900, 'HNL', '27.065835', 'EURO', NULL),
(901, 'HRK', '7.550872', 'EURO', NULL),
(902, 'HTG', '105.209633', 'EURO', NULL),
(903, 'HUF', '354.546404', 'EURO', NULL),
(904, 'IDR', '16862.6982', 'EURO', NULL),
(905, 'ILS', '3.877622', 'EURO', NULL),
(906, 'IMP', '0.874056', 'EURO', NULL),
(907, 'INR', '83.278537', 'EURO', NULL),
(908, 'IQD', '1292.99338', 'EURO', NULL),
(909, 'IRR', '45749.1489', 'EURO', NULL),
(910, 'ISK', '156.85399', 'EURO', NULL),
(911, 'JEP', '0.874056', 'EURO', NULL),
(912, 'JMD', '151.471633', 'EURO', NULL),
(913, 'JOD', '0.770384', 'EURO', NULL),
(914, 'JPY', '117.047402', 'EURO', NULL),
(915, 'KES', '116.032712', 'EURO', NULL),
(916, 'KGS', '86.419002', 'EURO', NULL),
(917, 'KHR', '4409.21590', 'EURO', NULL),
(918, 'KMF', '492.043897', 'EURO', NULL),
(919, 'KPW', '977.9402', 'EURO', NULL),
(920, 'KRW', '1324.34016', 'EURO', NULL),
(921, 'KWD', '0.338732', 'EURO', NULL),
(922, 'KYD', '0.905633', 'EURO', NULL),
(923, 'KZT', '465.270882', 'EURO', NULL),
(924, 'LAK', '9746.34503', 'EURO', NULL),
(925, 'LBP', '1643.94900', 'EURO', NULL),
(926, 'LKR', '209.200235', 'EURO', NULL),
(927, 'LRD', '215.136495', 'EURO', NULL),
(928, 'LSL', '20.459378', 'EURO', NULL),
(929, 'LTL', '3.208297', 'EURO', NULL),
(930, 'LVL', '0.657243', 'EURO', NULL),
(931, 'LYD', '1.537474', 'EURO', NULL),
(932, 'MAD', '11.088226', 'EURO', NULL),
(933, 'MDL', '19.135828', 'EURO', NULL),
(934, 'MGA', '4074.55878', 'EURO', NULL),
(935, 'MKD', '61.637638', 'EURO', NULL),
(936, 'MMK', '1543.19119', 'EURO', NULL),
(937, 'MNT', '3025.31875', 'EURO', NULL),
(938, 'MOP', '8.675686', 'EURO', NULL),
(939, 'MRO', '387.898049', 'EURO', NULL),
(940, 'MUR', '43.41055', 'EURO', NULL),
(941, 'MVR', '16.754659', 'EURO', NULL),
(942, 'MWK', '798.613169', 'EURO', NULL),
(943, 'MXN', '26.015023', 'EURO', NULL),
(944, 'MYR', '4.753114', 'EURO', NULL),
(945, 'MZN', '73.151944', 'EURO', NULL),
(946, 'NAD', '20.459823', 'EURO', NULL),
(947, 'NGN', '419.947276', 'EURO', NULL),
(948, 'NIO', '37.350107', 'EURO', NULL),
(949, 'NOK', '11.261619', 'EURO', NULL),
(950, 'NPR', '133.146896', 'EURO', NULL),
(951, 'NZD', '1.793459', 'EURO', NULL),
(952, 'OMR', '0.418432', 'EURO', NULL),
(953, 'PAB', '1.086699', 'EURO', NULL),
(954, 'PEN', '3.701325', 'EURO', NULL),
(955, 'PGK', '3.732308', 'EURO', NULL),
(956, 'PHP', '55.132044', 'EURO', NULL),
(957, 'PKR', '181.073503', 'EURO', NULL),
(958, 'PLN', '4.525411', 'EURO', NULL),
(959, 'PYG', '7043.78706', 'EURO', NULL),
(960, 'QAR', '3.956109', 'EURO', NULL),
(961, 'RON', '4.836124', 'EURO', NULL),
(962, 'RSD', '117.489009', 'EURO', NULL),
(963, 'RUB', '80.91368', 'EURO', NULL),
(964, 'RWF', '1018.63974', 'EURO', NULL),
(965, 'SAR', '4.077646', 'EURO', NULL),
(966, 'SBD', '9.022597', 'EURO', NULL),
(967, 'SCR', '18.961446', 'EURO', NULL),
(968, 'SDG', '60.085428', 'EURO', NULL),
(969, 'SEK', '10.874574', 'EURO', NULL),
(970, 'SGD', '1.544828', 'EURO', NULL),
(971, 'SHP', '0.874056', 'EURO', NULL),
(972, 'SLL', '10544.9590', 'EURO', NULL),
(973, 'SOS', '630.198205', 'EURO', NULL),
(974, 'SRD', '8.103497', 'EURO', NULL),
(975, 'STD', '23959.9130', 'EURO', NULL),
(976, 'SVC', '9.508492', 'EURO', NULL),
(977, 'SYP', '557.836128', 'EURO', NULL),
(978, 'SZL', '20.459745', 'EURO', NULL),
(979, 'THB', '35.307944', 'EURO', NULL),
(980, 'TJS', '11.13649', 'EURO', NULL),
(981, 'TMT', '3.813787', 'EURO', NULL),
(982, 'TND', '3.149898', 'EURO', NULL),
(983, 'TOP', '2.526933', 'EURO', NULL),
(984, 'TRY', '7.547447', 'EURO', NULL),
(985, 'TTD', '7.342896', 'EURO', NULL),
(986, 'TWD', '32.60136', 'EURO', NULL),
(987, 'TZS', '2514.75359', 'EURO', NULL),
(988, 'UAH', '29.425808', 'EURO', NULL),
(989, 'UGX', '4097.10478', 'EURO', NULL),
(990, 'USD', '1.086549', 'EURO', NULL),
(991, 'UYU', '47.301373', 'EURO', NULL),
(992, 'UZS', '11006.7418', 'EURO', NULL),
(993, 'VEF', '10.851912', 'EURO', NULL),
(994, 'VND', '25485.3603', 'EURO', NULL),
(995, 'VUV', '131.088053', 'EURO', NULL),
(996, 'WST', '2.996822', 'EURO', NULL),
(997, 'XAF', '656.198002', 'EURO', NULL),
(998, 'XAG', '0.071039', 'EURO', NULL),
(999, 'XAU', '0.000643', 'EURO', NULL),
(1000, 'XCD', '2.936453', 'EURO', NULL),
(1001, 'XDR', '0.797493', 'EURO', NULL),
(1002, 'XOF', '657.906734', 'EURO', NULL),
(1003, 'XPF', '119.792255', 'EURO', NULL),
(1004, 'YER', '272.017381', 'EURO', NULL),
(1005, 'ZAR', '20.389077', 'EURO', NULL),
(1006, 'ZMK', '9780.24108', 'EURO', NULL),
(1007, 'ZMW', '20.132094', 'EURO', NULL),
(1008, 'ZWL', '349.8688', 'EURO', NULL),
(1009, 'AED', '3.993507', 'EURO', NULL),
(1010, 'AFN', '82.391915', 'EURO', NULL),
(1011, 'ALL', '124.764863', 'EURO', NULL),
(1012, 'AMD', '524.63167', 'EURO', NULL),
(1013, 'ANG', '1.95202', 'EURO', NULL),
(1014, 'AOA', '608.873897', 'EURO', NULL),
(1015, 'ARS', '71.731673', 'EURO', NULL),
(1016, 'AUD', '1.703564', 'EURO', NULL),
(1017, 'AWG', '1.957095', 'EURO', NULL),
(1018, 'AZN', '1.781425', 'EURO', NULL),
(1019, 'BAM', '1.957856', 'EURO', NULL),
(1020, 'BBD', '2.195772', 'EURO', NULL),
(1021, 'BDT', '92.375994', 'EURO', NULL),
(1022, 'BGN', '1.956675', 'EURO', NULL),
(1023, 'BHD', '0.410453', 'EURO', NULL),
(1024, 'BIF', '2076.69552', 'EURO', NULL),
(1025, 'BMD', '1.087275', 'EURO', NULL),
(1026, 'BND', '1.546901', 'EURO', NULL),
(1027, 'BOB', '7.498159', 'EURO', NULL),
(1028, 'BRL', '5.758969', 'EURO', NULL),
(1029, 'BSD', '1.087525', 'EURO', NULL),
(1030, 'BTC', '0.000153', 'EURO', NULL),
(1031, 'BTN', '83.272674', 'EURO', NULL),
(1032, 'BWP', '13.310673', 'EURO', NULL),
(1033, 'BYN', '2.65745', 'EURO', NULL),
(1034, 'BYR', '21310.5927', 'EURO', NULL),
(1035, 'BZD', '2.192068', 'EURO', NULL),
(1036, 'CAD', '1.529062', 'EURO', NULL),
(1037, 'CDF', '1867.93836', 'EURO', NULL),
(1038, 'CHF', '1.051623', 'EURO', NULL),
(1039, 'CLF', '0.033801', 'EURO', NULL),
(1040, 'CLP', '932.556319', 'EURO', NULL),
(1041, 'CNY', '7.690731', 'EURO', NULL),
(1042, 'COP', '4315.67773', 'EURO', NULL),
(1043, 'CRC', '611.222507', 'EURO', NULL),
(1044, 'CUC', '1.087275', 'EURO', NULL),
(1045, 'CUP', '28.812791', 'EURO', NULL),
(1046, 'CVE', '110.630082', 'EURO', NULL),
(1047, 'CZK', '27.441764', 'EURO', NULL),
(1048, 'DJF', '193.230356', 'EURO', NULL),
(1049, 'DKK', '7.457827', 'EURO', NULL),
(1050, 'DOP', '59.202077', 'EURO', NULL),
(1051, 'DZD', '139.236648', 'EURO', NULL),
(1052, 'EGP', '17.125127', 'EURO', NULL),
(1053, 'ERN', '16.30929', 'EURO', NULL),
(1054, 'ETB', '36.162606', 'EURO', NULL),
(1055, 'EUR', '1', 'EURO', NULL),
(1056, 'FJD', '2.469747', 'EURO', NULL),
(1057, 'FKP', '0.872773', 'EURO', NULL),
(1058, 'GBP', '0.872946', 'EURO', NULL),
(1059, 'GEL', '3.414047', 'EURO', NULL),
(1060, 'GGP', '0.872773', 'EURO', NULL),
(1061, 'GHS', '6.284574', 'EURO', NULL),
(1062, 'GIP', '0.872773', 'EURO', NULL),
(1063, 'GMD', '55.483866', 'EURO', NULL),
(1064, 'GNF', '10274.7502', 'EURO', NULL),
(1065, 'GTQ', '8.384477', 'EURO', NULL),
(1066, 'GYD', '227.525447', 'EURO', NULL),
(1067, 'HKD', '8.426715', 'EURO', NULL),
(1068, 'HNL', '27.083857', 'EURO', NULL),
(1069, 'HRK', '7.551668', 'EURO', NULL),
(1070, 'HTG', '105.279939', 'EURO', NULL),
(1071, 'HUF', '352.875688', 'EURO', NULL),
(1072, 'IDR', '16880.0009', 'EURO', NULL),
(1073, 'ILS', '3.861352', 'EURO', NULL),
(1074, 'IMP', '0.872773', 'EURO', NULL),
(1075, 'INR', '83.268986', 'EURO', NULL),
(1076, 'IQD', '1293.85741', 'EURO', NULL),
(1077, 'IRR', '45779.7197', 'EURO', NULL),
(1078, 'ISK', '156.886152', 'EURO', NULL),
(1079, 'JEP', '0.872773', 'EURO', NULL),
(1080, 'JMD', '151.572852', 'EURO', NULL),
(1081, 'JOD', '0.770832', 'EURO', NULL),
(1082, 'JPY', '117.109337', 'EURO', NULL),
(1083, 'KES', '116.109876', 'EURO', NULL),
(1084, 'KGS', '86.476753', 'EURO', NULL),
(1085, 'KHR', '4412.16265', 'EURO', NULL),
(1086, 'KMF', '492.372104', 'EURO', NULL),
(1087, 'KPW', '978.594838', 'EURO', NULL),
(1088, 'KRW', '1323.01812', 'EURO', NULL),
(1089, 'KWD', '0.338682', 'EURO', NULL),
(1090, 'KYD', '0.906238', 'EURO', NULL),
(1091, 'KZT', '465.581795', 'EURO', NULL),
(1092, 'LAK', '9752.85805', 'EURO', NULL),
(1093, 'LBP', '1645.04714', 'EURO', NULL),
(1094, 'LKR', '209.340031', 'EURO', NULL),
(1095, 'LRD', '215.280199', 'EURO', NULL),
(1096, 'LSL', '20.473351', 'EURO', NULL),
(1097, 'LTL', '3.210441', 'EURO', NULL),
(1098, 'LVL', '0.657682', 'EURO', NULL),
(1099, 'LYD', '1.538523', 'EURO', NULL),
(1100, 'MAD', '11.095635', 'EURO', NULL),
(1101, 'MDL', '19.148616', 'EURO', NULL),
(1102, 'MGA', '4077.28193', 'EURO', NULL),
(1103, 'MKD', '61.678827', 'EURO', NULL),
(1104, 'MMK', '1544.22241', 'EURO', NULL),
(1105, 'MNT', '3026.58955', 'EURO', NULL),
(1106, 'MOP', '8.681483', 'EURO', NULL),
(1107, 'MRO', '388.157259', 'EURO', NULL),
(1108, 'MUR', '43.435012', 'EURO', NULL),
(1109, 'MVR', '16.765575', 'EURO', NULL),
(1110, 'MWK', '799.147542', 'EURO', NULL),
(1111, 'MXN', '26.077153', 'EURO', NULL),
(1112, 'MYR', '4.756283', 'EURO', NULL),
(1113, 'MZN', '73.200828', 'EURO', NULL),
(1114, 'NAD', '20.473084', 'EURO', NULL),
(1115, 'NGN', '420.231193', 'EURO', NULL),
(1116, 'NIO', '37.375149', 'EURO', NULL),
(1117, 'NOK', '11.279545', 'EURO', NULL),
(1118, 'NPR', '133.235871', 'EURO', NULL),
(1119, 'NZD', '1.791341', 'EURO', NULL),
(1120, 'OMR', '0.41885', 'EURO', NULL),
(1121, 'PAB', '1.087425', 'EURO', NULL),
(1122, 'PEN', '3.703803', 'EURO', NULL),
(1123, 'PGK', '3.734771', 'EURO', NULL),
(1124, 'PHP', '55.187916', 'EURO', NULL),
(1125, 'PKR', '181.194555', 'EURO', NULL),
(1126, 'PLN', '4.520836', 'EURO', NULL),
(1127, 'PYG', '7048.49400', 'EURO', NULL),
(1128, 'QAR', '3.958787', 'EURO', NULL),
(1129, 'RON', '4.837829', 'EURO', NULL),
(1130, 'RSD', '117.567577', 'EURO', NULL),
(1131, 'RUB', '81.15715', 'EURO', NULL),
(1132, 'RWF', '1019.32044', 'EURO', NULL),
(1133, 'SAR', '4.080221', 'EURO', NULL),
(1134, 'SBD', '9.028626', 'EURO', NULL),
(1135, 'SCR', '18.971473', 'EURO', NULL),
(1136, 'SDG', '60.13404', 'EURO', NULL),
(1137, 'SEK', '10.884896', 'EURO', NULL),
(1138, 'SGD', '1.54349', 'EURO', NULL),
(1139, 'SHP', '0.872773', 'EURO', NULL),
(1140, 'SLL', '10552.0050', 'EURO', NULL),
(1141, 'SOS', '630.619763', 'EURO', NULL),
(1142, 'SRD', '8.108915', 'EURO', NULL),
(1143, 'STD', '23975.9239', 'EURO', NULL),
(1144, 'SVC', '9.514846', 'EURO', NULL),
(1145, 'SYP', '557.843015', 'EURO', NULL),
(1146, 'SZL', '20.473306', 'EURO', NULL),
(1147, 'THB', '35.314551', 'EURO', NULL),
(1148, 'TJS', '11.143932', 'EURO', NULL),
(1149, 'TMT', '3.816336', 'EURO', NULL),
(1150, 'TND', '3.151979', 'EURO', NULL),
(1151, 'TOP', '2.528621', 'EURO', NULL),
(1152, 'TRY', '7.554059', 'EURO', NULL),
(1153, 'TTD', '7.347803', 'EURO', NULL),
(1154, 'TWD', '32.628579', 'EURO', NULL),
(1155, 'TZS', '2516.43406', 'EURO', NULL),
(1156, 'UAH', '29.445471', 'EURO', NULL),
(1157, 'UGX', '4099.84263', 'EURO', NULL),
(1158, 'USD', '1.087275', 'EURO', NULL),
(1159, 'UYU', '47.332982', 'EURO', NULL),
(1160, 'UZS', '11014.0973', 'EURO', NULL),
(1161, 'VEF', '10.859155', 'EURO', NULL),
(1162, 'VND', '25488.4475', 'EURO', NULL),
(1163, 'VUV', '131.474309', 'EURO', NULL),
(1164, 'WST', '2.993222', 'EURO', NULL),
(1165, 'XAF', '656.636501', 'EURO', NULL),
(1166, 'XAG', '0.070869', 'EURO', NULL),
(1167, 'XAU', '0.000642', 'EURO', NULL),
(1168, 'XCD', '2.938415', 'EURO', NULL),
(1169, 'XDR', '0.798026', 'EURO', NULL),
(1170, 'XOF', '658.343686', 'EURO', NULL),
(1171, 'XPF', '119.872171', 'EURO', NULL),
(1172, 'YER', '272.199321', 'EURO', NULL),
(1173, 'ZAR', '20.423974', 'EURO', NULL),
(1174, 'ZMK', '9786.78576', 'EURO', NULL),
(1175, 'ZMW', '20.145547', 'EURO', NULL),
(1176, 'ZWL', '350.102597', 'EURO', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `label` varchar(250) COLLATE utf8mb4_unicode_520_ci DEFAULT 'System',
  `key` varchar(40) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` mediumtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `label`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 'Default', 'deafult_api_key', 1, 0, 0, NULL, 1582700749);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `method` varchar(6) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `params` mediumtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `api_key` varchar(40) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `time` int(11) NOT NULL,
  `rtime` float DEFAULT NULL,
  `authorized` varchar(1) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `response_code` smallint(3) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `receiver_id`, `message`, `created_at`) VALUES
(1, 1, 0, 'ffcffcfcf', '2020-04-23 09:52:29'),
(2, 1, 0, 'gogo', '2020-04-23 10:21:52'),
(3, 1, 0, 'hellos.com', '2020-04-23 10:22:36'),
(4, 1, 0, 'sdsdsdsd', '2020-04-23 10:23:54'),
(5, 1, 0, 'sccssccs', '2020-04-23 10:24:39'),
(6, 1, 0, 'scsssccscs', '2020-04-23 10:25:08'),
(7, 1, 0, 'hellos', '2020-04-23 10:47:20'),
(8, 1, 0, 'hellllo', '2020-04-23 10:50:41'),
(9, 1, 0, 'what are you doing', '2020-04-23 10:51:09'),
(10, 1, 0, 'where', '2020-04-23 10:53:50'),
(11, 1, 0, 'hiiy', '2020-04-23 10:54:12'),
(12, 1, 0, 'xdxdxd', '2020-04-23 12:28:32'),
(13, 1, 0, ' c c cc', '2020-04-23 12:30:09'),
(14, 2, 0, 'where are you', '2020-04-23 16:32:59'),
(15, 2, 0, 'xccxcxcxxcc', '2020-04-23 16:36:10'),
(16, 2, 0, 'ededdede', '2020-04-23 16:40:57'),
(17, 2, 0, 'eefefef', '2020-04-23 16:41:51'),
(18, 2, 0, 'hellos', '2020-04-23 16:43:06'),
(19, 2, 0, 'hello world', '2020-04-23 16:44:01'),
(20, 2, 0, 'rfee', '2020-04-23 16:45:19'),
(21, 2, 0, 'wddwdwddw', '2020-04-23 16:46:53'),
(22, 2, 0, 'where are you', '2020-04-23 16:48:29'),
(23, 2, 0, 'jhjhjhjhh', '2020-04-23 17:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `slug` mediumtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `location_nav` int(11) NOT NULL DEFAULT 1,
  `focus_keyword` mediumtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `content`, `location_nav`, `focus_keyword`, `meta_description`, `status`, `created_at`) VALUES
(2, 'axxaax', 'axxaax', '<p><br></p>xxax', 1, 'xaaxxa', 'xxaxa', 1, '2020-04-20 12:17:53'),
(3, 'hello', 'hello', '<p><br></p>fddfdf', 1, 'dffdfd', 'dfdffdfd', 1, '2020-04-20 12:18:23'),
(4, 'hello', 'hello', '<p><br></p>fddfdf', 1, 'dffdfd', 'dfdffdfd', 1, '2020-04-20 12:18:43'),
(5, 'wawawawawa', 'wawawawawa', 'aaa<p><br></p>', 1, 'aaa', 'aaa', 1, '2020-04-20 12:35:03'),
(6, 'sshello', 'sshello', '<p><br></p>fddfdf', 1, 'dffdfd', 'dfdffdfd', 0, '2020-04-20 12:55:58');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `plan_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `day` int(50) DEFAULT 0,
  `screens` longtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `price` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`plan_id`, `name`, `day`, `screens`, `price`, `status`) VALUES
(1, 'Basic', 7, NULL, '5', 1),
(2, 'Professional ', 30, NULL, '10', 1),
(3, 'Ultra', 90, NULL, '20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `slug` mediumtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `focus_keyword` mediumtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `category_id` varchar(250) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `user_id` int(20) DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `focus_keyword`, `meta_description`, `category_id`, `content`, `user_id`, `created_at`, `status`) VALUES
(1, 'heloo', 'heloo', '', '', '1', '<p><br></p>', 1, NULL, 1),
(2, 'heloo', 'heloo', '', '', '1', '<p><br></p>', 1, NULL, 1);
INSERT INTO `posts` (`id`, `title`, `slug`, `focus_keyword`, `meta_description`, `category_id`, `content`, `user_id`, `created_at`, `status`) VALUES
(3, 'hello', 'hello', '', '', '1', '<p><img style=\"width: 78px;\" src=\"data:image/png;base64,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\" data-filename=\"Screen Shot 2020-04-09 at 17.47.14.png\"><img style=\"width: 190px;\" src=\"data:image/png;base64,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\" data-filename=\"Screen Shot 2020-02-04 at 09.48.30.png\"><br></p>', 1, NULL, 1);
INSERT INTO `posts` (`id`, `title`, `slug`, `focus_keyword`, `meta_description`, `category_id`, `content`, `user_id`, `created_at`, `status`) VALUES
(4, NULL, '', '', '', '1', NULL, 1, NULL, 1),
(5, 'test', 'test', '', '', '1', '<p><img style=\"width: 164px; height: 164px;\" src=\"data:image/png;base64,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\" data-filename=\"download.png\"><br></p><p><br></p><table class=\"table table-bordered\"><tbody><tr><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr></tbody></table><p><br></p>', 1, NULL, 1),
(22, 'xcdsdsds', 'xcdsdsds', NULL, NULL, NULL, NULL, 1, NULL, 1),
(23, 'sds twtwtw tzttstastas', 'sds-twtwtw-tzttstastas', 'xxxx', 'xxxx', '28', NULL, 26, NULL, NULL),
(7, 'ccc', 'ccc', 'cc', 'ccc', NULL, '<p><br></p>cccccc', 1, NULL, NULL),
(8, 'cccddddd', 'cccddddd', 'ddd', 'ddddd', NULL, '<p><br></p>ddd', 1, NULL, NULL),
(24, 'sds twtwtw tzttstastas', 'sds-twtwtw-tzttstastas', 'xxxx', 'xxxx', '28', NULL, 26, NULL, 1),
(12, 'ffff', 'ffff', 'ffff', 'ffffffff', '1', '<p><br></p>ffffff', 1, NULL, NULL),
(13, 'dddddd', 'dddddd', 'dddddd', 'ddddddd', '1', '<p><br></p>dddd', 1, NULL, 1),
(14, 'hellmjs jkdsjksdkjhsdh', 'hellmjs-jkdsjksdkjhsdh', 'jdjdjdjjd', 'jdhdhdhdhd', '1', 'dkjdsjksdjkdsjksdjksdjk', 1, NULL, 0),
(15, 'final test ', 'final-test-', 'hello', 'worlsd', '1', '<p><br></p>hhdhdhdhhdhdhdhdhd', 1, NULL, 0),
(25, 'sds twtwtw tzttstastas', 'sds-twtwtw-tzttstastas', 'xxxx', 'xxxx', '28', NULL, 26, NULL, 1),
(27, 'wise wise wiser wisest', 'wise-wise-wiser-wisest', '', '', '32', '', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` int(11) NOT NULL,
  `name` mediumtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `slug` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT current_timestamp(6),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `name`, `slug`, `created_at`, `status`) VALUES
(1, 'one', 'one', '2020-04-10 16:44:12.932627', 1),
(2, 'hello', 'hello', '2020-04-17 18:48:49.816311', 1),
(3, 'hellos', 'hellos', '2020-04-17 18:50:03.820215', 1),
(4, 'cddccd', 'cddccd', '2020-04-17 19:24:19.669692', 0),
(5, 'ggg', 'ggg', '2020-04-17 19:45:33.178037', 0),
(6, 'gggggg', 'gggggg', '2020-04-17 19:47:29.798683', 0),
(7, 'mmm', 'mmm', '2020-04-17 20:01:21.145742', 0),
(21, 'fgfgggfgfgfgffgf', 'fgfgggfgfgfgffgf', '2020-04-18 03:50:13.678745', 1),
(11, 'sss', 'sss', '2020-04-17 20:29:09.895147', 0),
(12, 'gggg', 'gggg', '2020-04-17 20:41:49.894900', 0),
(13, 'ccc', 'ccc', '2020-04-17 21:05:11.447423', 0),
(14, 'dddd', 'dddd', '2020-04-17 21:06:46.477725', 1),
(15, 'DDD', 'DDD', '2020-04-17 21:13:23.743805', 0),
(16, 'dddddddd', 'dddddddd', '2020-04-17 21:15:28.792884', 0),
(19, 'dddd', 'dddd', '2020-04-18 03:18:41.826095', 1),
(20, 'dfdfdfdf', 'dfdfdfdf', '2020-04-18 03:44:33.509046', 1),
(22, 'ffgf', 'ffgf', '2020-04-18 03:52:35.973503', 1),
(23, 'ffgf', 'ffgf', '2020-04-18 03:53:46.796660', 1),
(24, 'ttrrtrtrt', 'ttrrtrtrt', '2020-04-18 03:54:37.119946', 1),
(25, 'dffdfdfd', 'dffdfdfd', '2020-04-18 03:55:28.739585', 1),
(26, 'ffffddf', 'ffffddf', '2020-04-18 03:55:50.218868', 1),
(27, 'fddffffdfd', 'fddffffdfd', '2020-04-18 03:56:05.098302', 1),
(28, 'gffgfggfgf', 'gffgfggfgf', '2020-04-18 03:56:21.948958', 1),
(29, 'dfgffgfggf', 'dfgffgfggf', '2020-04-18 03:57:42.330772', 1),
(30, 'kkk', 'kkk', '2020-04-18 04:00:26.082505', 1),
(32, 'kkkk', 'kkkk', '2020-04-18 04:01:27.152903', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `post_comments_id` int(20) NOT NULL,
  `user_id` int(10) NOT NULL,
  `post_id` int(20) NOT NULL,
  `comment_type` int(5) NOT NULL DEFAULT 1,
  `replay_for` int(10) DEFAULT 0,
  `comment` mediumtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `comment_at` datetime DEFAULT NULL,
  `publication` int(5) DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `sku` varchar(12) DEFAULT NULL,
  `title` varchar(140) DEFAULT NULL,
  `slug` varchar(140) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `sale_price` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `ratings` decimal(3,1) DEFAULT NULL,
  `vendor_id` bit(1) NOT NULL,
  `category_id` bit(1) NOT NULL,
  `available_quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `title`, `slug`, `price`, `sale_price`, `discount`, `views`, `ratings`, `vendor_id`, `category_id`, `available_quantity`) VALUES
(1, 'SDL730883102', 'Intex LED-3216 80 cm (32) HD Ready (HDR) LED Television', 'intex-led-3216-80-cm-(32)-hd-ready-(hdr)-led-television', 23999, 12490, 48, 6, '3.9', b'1', b'1', 23999),
(2, 'SDL638477211', 'Campus Sutra Black Cotton Quilted & Bomber Jacket', 'campus-sutra-black-cotton-quilted-&-bomber-jacket', 1999, 680, 66, 2, '3.8', b'1', b'1', 1999),
(3, 'SDL921382269', 'OPEN-BOX YU Yureka Plus Cyanogen - 16 GB Grey', 'open-box-yu-yureka-plus-cyanogen---16-gb-grey', 6490, 6399, 1, 12, '3.3', b'1', b'1', 6490),
(4, 'SDL092510367', 'Lenovo M0520 2.0 Computer Speaker - Red', 'lenovo-m0520-2.0-computer-speaker---red', 899, 679, 24, 13, '3.8', b'1', b'1', 899),
(5, 'SDL837914446', 'Titan Leather Black Men Regular Wallet', 'titan-leather-black-men-regular-wallet', 1099, 994, 10, 62, '4.3', b'1', b'1', 1099),
(6, 'SDL466773337', 'Veet Full Body Waxing Kit for Dry Skin -Pack of 1', 'veet-full-body-waxing-kit-for-dry-skin--pack-of-1', 170, 152, 11, 8, '4.0', b'1', b'1', 170),
(7, '1220794', 'Lakme Perfect Radiance Intense Whitening Golden Medium 03 Compact, 8 g', 'lakme-perfect-radiance-intense-whitening-golden-medium-03-compact,-8-g', 180, 153, 15, 93, '3.9', b'1', b'1', 180),
(8, 'SDL815452992', 'Tokyo Talkies Polyester Dresses', 'tokyo-talkies-polyester-dresses', 1449, 544, 62, 1, '2.6', b'1', b'1', 1449),
(9, 'SDL646366940', 'Open box InFocus M370i (8GB-White)', 'open-box-infocus-m370i-(8gb-white)', 5199, 5099, 2, 0, '3.8', b'1', b'1', 5199),
(10, 'SDL999145129', 'Marc 3 Ltr Solitaire Instant Geyser - Ivory', 'marc-3-ltr-solitaire-instant-geyser---ivory', 3610, 1849, 49, 13, '3.5', b'1', b'1', 3610),
(11, '1721342', 'Orient Fabri Joy Dry Iron White (1000 Watts)', 'orient-fabri-joy-dry-iron-white-(1000-watts)', 699, 499, 29, 102, '4.2', b'1', b'1', 699),
(12, 'SDL049294041', 'Dolphin XL Leatherette Bean Bag Cover Black & Royal Blue', 'dolphin-xl-leatherette-bean-bag-cover-black-&-royal-blue', 1199, 595, 50, 0, '5.0', b'1', b'1', 1199),
(13, 'SDL711730510', 'Wajbee Blue Slim Faded', 'wajbee-blue-slim-faded', 1499, 360, 76, 153, '3.4', b'1', b'1', 1499),
(14, 'SDL282352124', 'HP Black Laptop Bags', 'hp-black-laptop-bags', 1108, 535, 52, 273, '3.7', b'1', b'1', 1108),
(15, 'SDL753269052', 'Butterflies Red Shoulder Bag', 'butterflies-red-shoulder-bag', 2199, 999, 55, 176, '3.9', b'1', b'1', 2199),
(16, 'SDL814331436', 'Status Red Rug Polyester Printed', 'status-red-rug-polyester-printed', 4999, 999, 80, 24, '4.0', b'1', b'1', 4999),
(17, 'SDL235888477', 'The Power of Your Subconscious Mind', 'the-power-of-your-subconscious-mind', 199, 92, 54, 3, '4.2', b'1', b'1', 199),
(18, 'SDL553144961', 'Goldmedal i-Strip LED Spike Guard with Surge Protector and 6-outlet International Sockets', 'goldmedal-i-strip-led-spike-guard-with-surge-protector-and-6-outlet-international-sockets', 649, 555, 14, 21, '4.4', b'1', b'1', 649),
(19, 'SDL509689093', 'Refurbished Xiaomi Mi4i (16 GB) (White)', 'refurbished-xiaomi-mi4i-(16-gb)-(white)', 9499, 9499, 0, 1, '3.0', b'1', b'1', 9499),
(20, 'SDL401111367', 'Bayer Contour TS Blood Glucose- 50 Test Strips', 'bayer-contour-ts-blood-glucose--50-test-strips', 1400, 899, 36, 140, '4.4', b'1', b'1', 1400),
(21, 'SDL022011360', 'Intex 301 N FMU 4.1 Speaker System', 'intex-301-n-fmu-4.1-speaker-system', 3499, 1699, 51, 80, '3.7', b'1', b'1', 3499),
(22, 'SDL678685750', 'Sony Usb 2.1 Amp Ac Adaptor Cp-ad2 With Micro Usb Cable', 'sony-usb-2.1-amp-ac-adaptor-cp-ad2-with-micro-usb-cable', 990, 609, 38, 150, '4.3', b'1', b'1', 990),
(23, 'SDL185074905', 'Everything Imported Plastic Toothpaste Dispensers', 'everything-imported-plastic-toothpaste-dispensers', 499, 207, 59, 488, '3.1', b'1', b'1', 499),
(24, 'SDL774739577', 'Fogg Brown Leather Analog Watch for Men', 'fogg-brown-leather-analog-watch-for-men', 1199, 349, 71, 8, '3.8', b'1', b'1', 1199),
(25, 'SDL396245637', 'Forever Living Aloe Vera Gel 1 Pc', 'forever-living-aloe-vera-gel-1-pc', 1203, 845, 30, 86, '4.1', b'1', b'1', 1203),
(26, 'SDL854292628', 'Blaupunkt Car Mobile Chargers - Black', 'blaupunkt-car-mobile-chargers---black', 799, 429, 46, 5, '4.4', b'1', b'1', 799),
(27, 'SDL945923589', 'Autofy O2 Desert Storm - Open Face Helmet Brown M', 'autofy-o2-desert-storm---open-face-helmet-brown-m', 999, 629, 37, 0, '0.0', b'1', b'1', 999),
(28, 'SDL646205677', 'Aurion 18 Kg Dumbbell Set With Accessories', 'aurion-18-kg-dumbbell-set-with-accessories', 3499, 1195, 66, 36, '3.6', b'1', b'1', 3499),
(29, 'SDL134366646', 'Dukes Truffel Gift Pack 360gm', 'dukes-truffel-gift-pack-360gm-', 599, 459, 23, 0, '5.0', b'1', b'1', 599),
(30, 'SDL152517745', 'JBN Creation Cream Silk Angrakha Style Indo Western with Maroon Jodhpuri Breeches', 'jbn-creation-cream-silk-angrakha-style-indo-western-with-maroon-jodhpuri-breeches', 1199, 389, 68, 46, '3.7', b'1', b'1', 1199),
(31, '1236773', 'Prestige Popular 3 Ltr Aluminium  Outer Lid Pressure Cooker', 'prestige-popular-3-ltr-aluminium--outer-lid-pressure-cooker', 1140, 839, 26, 158, '4.1', b'1', b'1', 1140),
(32, 'SDL861113363', 'I Kall K12 (64 MB) Blue', 'i-kall-k12-(64-mb)-blue', 599, 569, 5, 5, '3.2', b'1', b'1', 599),
(33, 'SDL536597006', 'Abaco Pomace Olive Oil 1Ltr- Buy 1 Get 1 free', 'abaco-pomace-olive-oil-1ltr--buy-1-get-1-free', 1900, 899, 53, 13, '4.1', b'1', b'1', 1900),
(34, 'SDL594316169', 'CVT 3200 80 cm (32) HD Ready LED TV', 'cvt-3200-80-cm-(32)-hd-ready-led-tv', 12000, 11490, 4, 1, '3.9', b'1', b'1', 12000),
(35, 'SDL424143561', 'Belkin 1m High Speed Hdmi Cable With Ethernet', 'belkin-1m-high-speed-hdmi-cable-with-ethernet', 799, 649, 19, 16, '4.6', b'1', b'1', 799),
(36, 'SDL586637112', 'Fastrack P223BU2 Sunglasses', 'fastrack-p223bu2-sunglasses', 850, 670, 21, 58, '4.1', b'1', b'1', 850),
(37, 'SDL542834865', 'Philips BG1025-15 Body Groomer Black', 'philips-bg1025-15-body-groomer-black', 1495, 1070, 28, 269, '4.0', b'1', b'1', 1495),
(38, 'SDL446190652', 'Highlander Navy Casuals Slim Fit Shirt', 'highlander-navy-casuals-slim-fit-shirt', 999, 549, 45, 8, '4.0', b'1', b'1', 999),
(39, 'SDL077346192', 'Verdioz White Embroidery Poly Cotton Mosquito Net with free 3 saviours', 'verdioz-white-embroidery-poly-cotton-mosquito-net-with-free-3-saviours', 2199, 999, 55, 25, '3.8', b'1', b'1', 2199),
(40, 'SDL188105812', 'Zakk VR Virtual Reality 3D Glass for All Android & iOS Smartphones with Bluetooth Remote', 'zakk-vr-virtual-reality-3d-glass-for-all-android-&-ios-smartphones-with-bluetooth-remote', 4999, 808, 84, 8, '3.3', b'1', b'1', 4999),
(41, 'SDL691291518', 'Digisol 300 Mbps Wireless Router (DG-HR3400)Wireless Routers Without Modem', 'digisol-300-mbps-wireless-router-(dg-hr3400)wireless-routers-without-modem', 1499, 842, 44, 790, '4.3', b'1', b'1', 1499),
(42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'1', b'1', NULL),
(43, 'SDL193075434', 'Sandisk Cruzer Blade SDCZ50-016G-I35 16GB USB 2.0 Utility Pendrive - Pack of 2', 'sandisk-cruzer-blade-sdcz50-016g-i35-16gb-usb-2.0-utility-pendrive---pack-of-2', 778, 689, 11, 825, '4.2', b'1', b'1', 778),
(44, 'SDL087767982', 'Relish Multicolour Leather Round Analog Watch', 'relish-multicolour-leather-round-analog-watch', 699, 289, 59, 8, '4.0', b'1', b'1', 699),
(45, 'SDL709309011', 'Envent Musique-4.1 Speaker System with 20W RMS', 'envent-musique-4.1-speaker-system-with-20w-rms', 3999, 1699, 58, 10, '3.4', b'1', b'1', 3999),
(46, 'SDL907014199', 'Eco Alpine Jumbo Bucket and Heavy Rod Mop with 1 Free Refill Inside (Blue)', 'eco-alpine-jumbo-bucket-and-heavy-rod-mop-with-1-free-refill-inside-(blue)', 2599, 915, 65, 4, '4.0', b'1', b'1', 2599),
(47, 'SDL947785518', 'Rock Hard Multi Color Cotton T-Shirt', 'rock-hard-multi-color-cotton-t-shirt', 799, 299, 63, 3, '3.8', b'1', b'1', 799),
(48, 'SDL243047695', 'Maybelline Colossal 12H Black Kajal 0.35 gm Pack Of 2', 'maybelline-colossal-12h-black-kajal-0.35-gm-pack-of-2', 400, 269, 33, 105, '3.8', b'1', b'1', 400),
(49, 'SDL033507246', 'Brilliant 6 Pcs Non Stick Cookware Set Metallic Red', 'brilliant-6-pcs-non-stick-cookware-set-metallic-red', 2999, 1149, 62, 1, '3.4', b'1', b'1', 2999),
(50, 'SDL134959386', 'Magikware Pink Fruit & Vegetable Juicer', 'magikware-pink-fruit-&-vegetable-juicer', 999, 295, 70, 46, '3.6', b'1', b'1', 999),
(51, 'SDL409109426', 'Skullcandy JIB In-Ear W/Pill Mic S2DUL-J846 Blue Black', 'skullcandy-jib-in-ear-w/pill-mic-s2dul-j846-blue-black', 999, 599, 40, 6, '3.9', b'1', b'1', 999),
(52, '1094817', 'Yonex GR 303 Badminton Racket- Assorted', 'yonex-gr-303-badminton-racket--assorted', 570, 399, 30, 58, '4.0', b'1', b'1', 570),
(53, 'SDL253900881', 'Cello Elegant Casserole Set 3 Pcs', 'cello-elegant-casserole-set-3-pcs-', 999, 560, 44, 49, '4.0', b'1', b'1', 999),
(54, 'SDL631656512', 'boAt Bassheads 600 White & Blue On Ear Wired Headphones With Mic White', 'boat-bassheads-600-white-&-blue-on-ear-wired-headphones-with-mic-white', 1999, 639, 68, 12, '4.1', b'1', b'1', 1999),
(55, 'SDL020254813', 'THE LEGEND OF LAKSHMI PRASAD', 'the-legend-of-lakshmi-prasad', 299, 155, 48, 4, '4.2', b'1', b'1', 299),
(56, 'SDL546985085', 'POND\'S Men Energy Charge Face Wash 100 g', 'pond\'s-men-energy-charge-face-wash-100-g', 170, 153, 10, 13, '4.2', b'1', b'1', 170),
(57, 'SDL250739576', 'F&D F313U 2.1 Desktop Speakers (USB powered) - Black', 'f&d-f313u-2.1-desktop-speakers-(usb-powered)---black', 1990, 999, 50, 316, '3.8', b'1', b'1', 1990),
(58, 'SDL456870757', 'StickersKart flowers & trees PVC Wall Stickers', 'stickerskart-flowers-&-trees-pvc-wall-stickers', 449, 149, 67, 21, '4.1', b'1', b'1', 449),
(59, 'SDL016303853', 'Buildskill 13 mm 650W Impact Drill Machine Kit with Reversible Function + 105 Accessories', 'buildskill-13-mm-650w-impact-drill-machine-kit-with-reversible-function-+-105-accessories', 2999, 1190, 60, 4, '3.4', b'1', b'1', 2999),
(60, 'SDL422349377', 'John Players Grey Sweatshirt', 'john-players-grey-sweatshirt', 1799, 1530, 15, 0, '2.0', b'1', b'1', 1799),
(61, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'1', b'1', NULL),
(62, 'SDL216804529', 'Dabur Shilajit Gold Pack Of 2 X 20 Capsules', 'dabur-shilajit-gold-pack-of-2-x-20-capsules', 780, 587, 25, 28, '3.9', b'1', b'1', 780),
(63, 'SDL461624527', 'VLCC Henna 100gm (Buy 1 Get 1)', 'vlcc-henna-100gm-(buy-1-get-1)', 99, 64, 35, 436, '4.0', b'1', b'1', 99),
(64, 'SDL194305755', 'Nike Gray Daily Slippers', 'nike-gray-daily-slippers', 1395, 1255, 10, 1, '3.8', b'1', b'1', 1395),
(65, '1207811', 'Omron Nebulizer (NE - C801)', 'omron-nebulizer-(ne---c801)', 2950, 1691, 43, 7, '3.9', b'1', b'1', 2950),
(66, 'SDL070282037', 'Lakme Youth Infinity Skin Firming Day Creme 50 G', 'lakme-youth-infinity-skin-firming-day-creme-50-g', 725, 652, 10, 35, '4.1', b'1', b'1', 725),
(67, 'SDL267473865', 'Parker Silver Roller Ball Pen', 'parker-silver-roller-ball-pen', 575, 499, 13, 0, '4.5', b'1', b'1', 575),
(68, 'SDL902025613', 'Brown Boots for Kids', 'brown-boots-for-kids', 1596, 299, 81, 26, '3.7', b'1', b'1', 1596),
(69, 'SDL188135754', 'Muscle Pharm Mass gainer 6 lb Chocolate', 'muscle-pharm-mass-gainer-6-lb-chocolate', 3750, 2499, 33, 0, '0.0', b'1', b'1', 3750),
(70, 'SDL790564753', 'Eternal Multi Color Georgette Dresses', 'eternal-multi-color-georgette-dresses', 2299, 949, 59, 0, '0.0', b'1', b'1', 2299),
(71, 'SDL973947022', 'Crazeis Analog Wrist Watch', 'crazeis-analog-wrist-watch', 1499, 169, 89, 7, '3.3', b'1', b'1', 1499),
(72, 'SDL784711342', 'Lavie Brown Faux Leather Box Clutch', 'lavie-brown-faux-leather-box-clutch', 2460, 1129, 54, 0, '3.7', b'1', b'1', 2460),
(73, 'SDL235888477', 'The Power of Your Subconscious Mind', 'the-power-of-your-subconscious-mind', 199, 92, 54, 3, '4.2', b'1', b'1', 199),
(74, 'SDL367579058', 'Kataria Jewellers The Trinetta BIS Hallmarked Gold and Real Certified Diamonds Designer Ring', 'kataria-jewellers-the-trinetta-bis-hallmarked-gold-and-real-certified-diamonds-designer-ring', 9374, 4999, 47, 0, '4.5', b'1', b'1', 9374),
(75, 'SDL235521667', 'Sukkhi Alloy Gold Plated Kundan Necklace Set', 'sukkhi-alloy-gold-plated-kundan-necklace-set', 1845, 299, 84, 267, '3.2', b'1', b'1', 1845),
(76, 'SDL207509046', 'Rock Micro Usb Flat Data Cable', 'rock-micro-usb-flat-data-cable', 299, 249, 17, 3, '4.0', b'1', b'1', 299),
(77, 'SDL588108570', 'Philips AT 610 Shaver - Black', 'philips-at-610-shaver---black', 2295, 1470, 36, 299, '3.9', b'1', b'1', 2295),
(78, 'SDL206831663', 'Orpat 1200 air flora CeilingFan brown', 'orpat-1200-air-flora-ceilingfan-brown', 1210, 1049, 13, 83, '4.0', b'1', b'1', 1210),
(79, 'SDL158378278', 'Kesar Sarees Grey Saree', 'kesar-sarees-grey-saree', 2150, 499, 77, 149, '3.3', b'1', b'1', 2150),
(80, 'SDL900571578', 'Allen A-909 Wireless Mouse Black', 'allen-a-909-wireless-mouse-black', 550, 249, 55, 98, '3.6', b'1', b'1', 550),
(81, 'SDL624459869', 'Generic Assorted Colors Selfie Stick with Auxillary Cable', 'generic-assorted-colors-selfie-stick-with-auxillary-cable', 999, 119, 88, 36, '3.8', b'1', b'1', 999),
(82, 'SDL328637599', 'House Of Marley SMILE JAMICA EM-JE041 SB In Ear Wired Earphones With Mic Signature Black', 'house-of-marley-smile-jamica-em-je041-sb-in-ear-wired-earphones-with-mic-signature-black', 1990, 975, 51, 0, '4.0', b'1', b'1', 1990),
(83, 'SDL953285268', 'Micromax Bolt S301 (4GB, Black)-(Without Charger&Earphone)', 'micromax-bolt-s301-(4gb,-black)-(without-charger&earphone)', 2999, 2051, 32, 167, '3.0', b'1', b'1', 2999),
(84, 'SDL491332242', 'Karbonn K41 32 MB White Silver', 'karbonn-k41-32-mb-white-silver', 1590, 1004, 37, 0, '0.0', b'1', b'1', 1590),
(85, 'SDL438177093', 'DishTV HD Connection with Recorder-TamilPack (1 Month Family-Sport and Full-on HD with 300 Movie Points) with Lifetime Warranty (worth 1000)', 'dishtv-hd-connection-with-recorder-tamilpack-(1-month-family-sport-and-full-on-hd-with-300-movie-points)-with-lifetime-warranty-(worth-1000)', 2490, 1289, 48, 2, '4.2', b'1', b'1', 2490),
(86, 'SDL499803305', 'Plaza Quartz Motion-Anchor And Steering Design Pendulum Wall Clock', 'plaza-quartz-motion-anchor-and-steering-design-pendulum-wall-clock', 999, 499, 50, 59, '3.3', b'1', b'1', 999),
(87, 'SDL883746761', 'Maharaja Whiteline 25 Litres Classico Super Water Heater White & Blue', 'maharaja-whiteline-25-litres-classico-super-water-heater-white-&-blue', 8299, 5046, 39, 6, '3.9', b'1', b'1', 8299),
(88, 'SDL095277916', 'Quick Heal Antivirus Latest Version ( 2 / 1 ) DVD', 'quick-heal-antivirus-latest-version-(-2-/-1-)-dvd', 1099, 458, 58, 96, '4.2', b'1', b'1', 1099),
(89, 'SDL584818331', 'Himalaya Baby Shampoo 400 Ml', 'himalaya-baby-shampoo-400-ml', 280, 199, 29, 24, '4.2', b'1', b'1', 280),
(90, 'SDL947282266', 'U.S. Polo Assn. Multi Color Casual High Ankle Length - 3 Pair Socks', 'u.s.-polo-assn.-multi-color-casual-high-ankle-length---3-pair-socks', 429, 290, 32, 0, '3.7', b'1', b'1', 429),
(91, 'SDL082660618', 'Red Tape RTR0652 Brown Formal Shoes', 'red-tape-rtr0652-brown-formal-shoes', 3795, 1708, 55, 0, '3.4', b'1', b'1', 3795),
(92, 'SDL634877183', 'Campus Sutra Blue Hooded Sweatshirt', 'campus-sutra-blue-hooded-sweatshirt', 1999, 799, 60, 0, '0.0', b'1', b'1', 1999),
(93, 'SDL695208966', 'Dabur Shilajit 30 Capsules', 'dabur-shilajit-30-capsules', 195, 117, 40, 27, '3.6', b'1', b'1', 195),
(94, 'SDL062304542', 'Nova NHT 1045 W Beard Trimmer White', 'nova-nht-1045-w-beard-trimmer-white', 995, 299, 70, 1568, '3.7', b'1', b'1', 995),
(95, 'SDL291880390', 'KC Silver Stainless Steel Dustbin', 'kc-silver-stainless-steel-dustbin', 599, 299, 50, 40, '3.6', b'1', b'1', 599),
(96, 'SDL916344332', 'Motorola FW200L Fixed Wireless GSM Landline Phone - Black', 'motorola-fw200l-fixed-wireless-gsm-landline-phone---black', 2490, 1949, 22, 48, '4.0', b'1', b'1', 2490),
(97, 'SDL088819455', 'Omron HEM-7113 BP Monitor', 'omron-hem-7113-bp-monitor', 2500, 1170, 53, 28, '4.1', b'1', b'1', 2500),
(98, 'SDL119643053', 'STRIKE ORDEM 5', 'strike-ordem-5', 1999, 399, 80, 0, '3.6', b'1', b'1', 1999),
(99, 'SDL618928289', 'Domex Original Toilet Cleaner Expert 1 l', 'domex-original-toilet-cleaner-expert-1-l', 129, 116, 10, 50, '4.2', b'1', b'1', 129),
(100, 'SDL131535487', 'One Touch Select Glucose Monitor with 50 Test Strips Combo', 'one-touch-select-glucose-monitor-with-50-test-strips-combo', 2385, 1299, 46, 72, '4.3', b'1', b'1', 2385),
(101, 'SDL754807928', 'Scrazy Frozen Sister Anna Elsa Doll - Set of 2', 'scrazy-frozen-sister-anna-elsa-doll---set-of-2', 899, 280, 69, 13, '3.5', b'1', b'1', 899),
(102, 'SDL827782677', 'ZAAP AQUA Waterproof/Shockproof Bluetooth Wireless Speaker with Built-In Microphone | IP67 Rugged Design for Shower/Outdoor', 'zaap-aqua-waterproof/shockproof-bluetooth-wireless-speaker-with-built-in-microphone-|-ip67-rugged-design-for-shower/outdoor', 2000, 1449, 28, 26, '4.7', b'1', b'1', 2000),
(103, 'SDL864907076', 'Smiles Creation Lighting Drum Keyboard  Musical Toy', 'smiles-creation-lighting-drum-keyboard--musical-toy', 799, 333, 58, 5, '4.4', b'1', b'1', 799),
(104, 'SDL205597603', 'Altedo Silver Analog Watch', 'altedo-silver-analog-watch', 2099, 449, 79, 8, '4.0', b'1', b'1', 2099),
(105, 'SDL494396796', 'Miss Chase Maroon Cotton Mini Skater Dresses For Women Sleeveless Round Neck Casual Wear', 'miss-chase-maroon-cotton-mini-skater-dresses-for-women-sleeveless-round-neck-casual-wear', 999, 499, 50, 3, '3.8', b'1', b'1', 999),
(106, 'SDL136363943', 'Puma Black Leather Wallet', 'puma-black-leather-wallet', 1299, 399, 69, 669, '3.8', b'1', b'1', 1299),
(107, 'SDL947666908', 'GMI cream Pure Crepe Round Neck Printed Kurti', 'gmi-cream-pure-crepe-round-neck-printed-kurti', 1299, 310, 76, 32, '3.4', b'1', b'1', 1299),
(108, 'SDL246016332', 'Radheshyam Enterprise Blue Net Circular Semi Stitched Lehenga', 'radheshyam-enterprise-blue-net-circular-semi-stitched-lehenga', 999, 498, 50, 2, '3.9', b'1', b'1', 999),
(109, 'SDL131910219', 'Routeen Black Slim Solid', 'routeen-black-slim-solid', 1299, 338, 74, 1, '3.1', b'1', b'1', 1299),
(110, 'SDL992124230', 'Nike Dart 11 Msl Navy Sport Shoes', 'nike-dart-11-msl-navy-sport-shoes', 4195, 3689, 12, 0, '4.7', b'1', b'1', 4195),
(111, 'SDL076095465', 'Skmei Black Trendy Casual Quartz Watch', 'skmei-black-trendy-casual-quartz-watch', 2999, 535, 82, 89, '4.0', b'1', b'1', 2999),
(112, 'SDL523124510', 'Lucent\'s  General Knowledge Paperback (English) 6th Edition', 'lucent\'s--general-knowledge-paperback-(english)-6th-edition', 180, 132, 27, 131, '4.2', b'1', b'1', 180),
(113, 'SDL770225076', 'IRIS 12 KG Dumbell', 'iris-12-kg-dumbell', 2400, 829, 65, 13, '3.1', b'1', b'1', 2400),
(114, '1803120', 'Roger & Moris White Board (2 x 1.5 feet)', 'roger-&-moris-white-board-(2-x-1.5-feet)', 899, 326, 64, 117, '3.7', b'1', b'1', 899),
(115, 'SDL535327662', 'Shilpihandicrafts Off White Necklace Set of 2', 'shilpihandicrafts-off-white-necklace-set-of-2', 1200, 245, 80, 4, '3.6', b'1', b'1', 1200),
(116, 'SDL438213936', 'Shree Ganesh Red Cotton Dress Material', 'shree-ganesh-red-cotton-dress-material', 1299, 499, 62, 20, '3.8', b'1', b'1', 1299),
(117, 'SDL182448723', 'Double Down (Diary of a Wimpy Kid book 11)', 'double-down-(diary-of-a-wimpy-kid-book-11)-', 399, 222, 44, 3, '4.3', b'1', b'1', 399),
(118, 'SDL779721993', 'ADS Compact Powder A8030-2', 'ads-compact-powder-a8030-2', 593, 219, 63, 10, '3.5', b'1', b'1', 593);

-- --------------------------------------------------------

--
-- Table structure for table `product_files`
--

CREATE TABLE `product_files` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `url` varchar(104) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_files`
--

INSERT INTO `product_files` (`id`, `product_id`, `url`) VALUES
(1, 1, 'https://n4.sdlcdn.com/imgs/b/u/9/Intex-LED-3216-81-cm-SDL730883102-1-7a980.jpg'),
(2, 2, 'https://n4.sdlcdn.com/imgs/c/g/a/Campus-Sutra-Black-Cotton-Quilted-SDL638477211-1-306e1.jpg'),
(3, 3, 'https://n4.sdlcdn.com/imgs/d/g/a/SDL921382269_1-2fe4d.jpg'),
(4, 4, 'https://n4.sdlcdn.com/imgs/a/k/3/Lenovo-2-0-Speaker-M0521-SDL092510367-1-e972a.jpg'),
(5, 5, 'https://n4.sdlcdn.com/imgs/a/n/e/Titan-Leather-Black-Men-Regular-SDL837914446-1-3471c.jpg'),
(6, 6, 'https://n4.sdlcdn.com/imgs/a/g/5/SDL466773337_1391415453_image1-6da2b.jpg'),
(7, 7, 'https://n4.sdlcdn.com/imgs/b/x/c/Lakme-Perfect-Radiance-Intense-Whitening-1220794-1-00e8e.jpg'),
(8, 8, 'https://n4.sdlcdn.com/imgs/c/0/v/Tokyo-Talkies-Maroon-Polyester-Dresses-SDL747193321-1-36ece.jpg'),
(9, 9, 'https://n4.sdlcdn.com/imgs/c/4/6/UNBOXED_InFocus_M370i_8GB_White_SDL646366940_1_09d6d-9dab1.jpg'),
(10, 10, 'https://n4.sdlcdn.com/imgs/b/6/r/Marc-3-Instant-Water-Heater-SDL999145129-1-0a986.jpg'),
(11, 11, 'https://n4.sdlcdn.com/imgs/c/7/8/orient_dry_iron_1_excl-9d478.jpg'),
(12, 12, 'https://n4.sdlcdn.com/imgs/a/x/q/XL-Leatherette-Bean-Bag-Cover-SDL049294041-1-39706.jpg'),
(13, 13, 'https://n4.sdlcdn.com/imgs/b/w/y/Wajbee-Blue-Slim-Fit-Jeans-SDL711730510-1-9b248.JPG'),
(14, 14, 'https://n4.sdlcdn.com/imgs/b/6/c/Bags_opt_1_-34246.jpg'),
(15, 15, 'https://n4.sdlcdn.com/imgs/b/s/7/SDL753269052_1-fe8b2.jpg'),
(16, 16, 'https://n4.sdlcdn.com/imgs/c/k/4/Status-Red-Geometriacl-Taba-Rug-SDL814331436-1-547ce.jpg'),
(17, 17, 'https://n4.sdlcdn.com/imgs/b/g/8/The-Power-of-Your-Subconscious-SDL235888477-1-980c7.jpg'),
(18, 18, 'https://n4.sdlcdn.com/imgs/c/f/s/Gold-Medal-4-6-Extension-SDL553144961-4-e6a2f.jpg'),
(19, 19, 'https://n4.sdlcdn.com/imgs/b/f/8/Refurbished-Xiaomi-Mi4i-16-GB-SDL509689093-1-28ee9.jpg'),
(20, 20, 'https://n4.sdlcdn.com/imgs/a/7/b/Bayer-Contour-TS-Blood-Glucose-SDL401111367-1-9d4b1.jpg'),
(21, 21, 'https://n4.sdlcdn.com/imgs/a/2/j/IntexIT-301-OS-4-1-SDL022011360-1-6e09b.jpg'),
(22, 22, 'https://n4.sdlcdn.com/imgs/a/t/v/Sony-Usb-2-1-Amp-SDL678685750-1-19f00.jpg'),
(23, 23, 'https://n4.sdlcdn.com/imgs/a/h/f/Everything-Imported-White-Toothpaste-Dispenser-SDL185074905-1-0db2b.jpg'),
(24, 24, 'https://n4.sdlcdn.com/imgs/b/x/g/Fogg-Brown-Leather-Analog-Watch-SDL774739577-1-0966c.jpg'),
(25, 25, 'https://n4.sdlcdn.com/imgs/a/m/3/Forever-Living-Aloe-Vera-Gel-SDL396245637-1-63f7b.jpg'),
(26, 26, 'https://n4.sdlcdn.com/imgs/c/9/i/Blaupunkt-Fast-Car-Charger-SDL854292628-4-0d24d.jpg'),
(27, 27, 'https://n4.sdlcdn.com/imgs/d/8/p/Untitled_1_1_-741c3.jpg'),
(28, 28, 'https://n4.sdlcdn.com/imgs/a/5/x/Aurion-18-Kg-Dumbbell-Set-SDL646205677-1-e9ca7.jpg'),
(29, 29, 'https://n4.sdlcdn.com/imgs/c/n/j/Dukes-Dukes-Milk-Biscuits-360-SDL134366646-1-b8e1a.jpg'),
(30, 30, 'https://n4.sdlcdn.com/imgs/b/y/8/Jbn-Creation-Cream-Angrakha-Style-SDL152483805-1-0900a.jpg'),
(31, 31, 'https://n4.sdlcdn.com/imgs/a/1/9/Prestige-3-Ltrs-Popular-Aluminium-1236773-1-46221.jpg'),
(32, 32, 'https://n4.sdlcdn.com/imgs/b/6/o/I-Kall-K12-4GB-and-SDL861113363-1-b24aa.jpg'),
(33, 33, 'https://n4.sdlcdn.com/imgs/d/p/f/ABACOOlivePomaceOil1LtPet_BOGOOffer-9160e.JPG'),
(34, 34, 'https://n4.sdlcdn.com/imgs/c/m/m/cvt_32_1inch-ad28f.jpg'),
(35, 35, 'https://n4.sdlcdn.com/imgs/a/l/x/Belkin-F3y021qe1m-1m-High-Speed-SDL424143561-1-c657f.jpg'),
(36, 36, 'https://n4.sdlcdn.com/imgs/a/j/2/Fastrack-P223BU2-Sunglasses-SDL586637112-1-b7a11.jpg'),
(37, 37, 'https://n4.sdlcdn.com/imgs/a/t/5/Philips-Body-Groomer-Black-SDL542834865-1-e3315.jpg'),
(38, 38, 'https://n4.sdlcdn.com/imgs/c/x/d/Highlander-Navy-Casuals-Slim-Fit-SDL431893792-1-cc2c8.jpg'),
(39, 39, 'https://n4.sdlcdn.com/imgs/b/x/6/MOSQUITONET_EMBROIDERY_BLUE__4_-36d99.jpg'),
(40, 40, 'https://n4.sdlcdn.com/imgs/b/8/l/Zakk-Other-Active-3D-Glasses-SDL188105812-1-e998f.jpg'),
(41, 41, 'https://n4.sdlcdn.com/imgs/b/3/g/SDL691291518_4-d0ee5.jpg'),
(42, 42, NULL),
(43, 43, 'https://n4.sdlcdn.com/imgs/b/g/g/Sandisk-Cruzer-Blade-16gb-Pen-SDL193075434-1-06983.jpg'),
(44, 44, 'https://n4.sdlcdn.com/imgs/a/8/z/Relish-Multicolour-Leather-Round-Analog-SDL087767982-1-56884.jpg'),
(45, 45, 'https://n4.sdlcdn.com/imgs/b/2/m/SDL709309011_1-8c987.jpg'),
(46, 46, 'https://n4.sdlcdn.com/imgs/b/t/d/Eco-Alpine-Jumbo-Bucket-and-SDL907014199-6-11eea.jpg'),
(47, 47, 'https://n4.sdlcdn.com/imgs/b/e/q/Rock-Hard-Orange-and-Black-SDL945726464-1-44dcb.jpg'),
(48, 48, 'https://n4.sdlcdn.com/imgs/a/k/w/Maybelline-Colossal-Kajal-6H-Black-SDL243047695-1-fdd98.jpg'),
(49, 49, 'https://n4.sdlcdn.com/imgs/b/h/o/Brilliant-Aluminium-Cookware-Set-6-SDL033507246-1-497ba.jpg'),
(50, 50, 'https://n4.sdlcdn.com/imgs/c/v/k/IMG_20160916_WA0003-6273b.jpg'),
(51, 51, 'https://n4.sdlcdn.com/imgs/b/2/m/Skullcandy-S2DUL-J846-In-Ear-SDL409109426-1-bca80.jpg'),
(52, 52, 'https://n4.sdlcdn.com/imgs/a/b/t/282_ESG_YON_newa_M_1_2x-862a5.jpg'),
(53, 53, 'https://n4.sdlcdn.com/imgs/b/m/t/Cello-Elegant-Casseroles-Set-3-SDL253900881-1-e0134.jpg'),
(54, 54, 'https://n4.sdlcdn.com/imgs/c/q/s/Boat-Bassheads-600-White-Blue-SDL631656512-1-3fb92.jpg'),
(55, 55, 'https://n4.sdlcdn.com/imgs/c/9/f/THE-LEGEND-OF-LAKSHMI-PRASAD-SDL020254813-1-4c4aa.jpg'),
(56, 56, 'https://n4.sdlcdn.com/imgs/c/t/g/30045495-0d803.jpg'),
(57, 57, 'https://n4.sdlcdn.com/imgs/a/7/g/F-D-F313U-Elegant-2-SDL250739576-1-d66bc.jpg'),
(58, 58, 'https://n4.sdlcdn.com/imgs/a/y/a/Aquire-Pvc-Wall-Stickers-SDL456870757-1-142a7.jpg'),
(59, 59, 'https://n4.sdlcdn.com/imgs/d/7/8/Buildskill-BED2050-650W-13mm-Corded-SDL016303853-3-30c19.jpg'),
(60, 60, 'https://n4.sdlcdn.com/imgs/d/h/o/John-Players-Grey-Sweatshirt-SDL327705737-1-a8bb0.jpg'),
(61, 61, NULL),
(62, 62, 'https://n4.sdlcdn.com/imgs/b/z/g/1-2c30e.jpg'),
(63, 63, 'https://n4.sdlcdn.com/imgs/b/s/q/SDL461624527_1-d8a7c.jpg'),
(64, 64, 'https://n4.sdlcdn.com/imgs/c/p/x/Nike-Gray-Daily-SDL291743119-1-6e1b8.jpg'),
(65, 65, 'https://n4.sdlcdn.com/imgs/a/a/z/NEBULIZERS_NE_C801_M_1_2x_New-3d05d.jpg'),
(66, 66, 'https://n4.sdlcdn.com/imgs/d/t/3/Lakme-Youth-Infinity-Skin-Firming-SDL070282037-1-00a1e.jpg'),
(67, 67, 'https://n4.sdlcdn.com/imgs/c/v/3/Parker-Silver-Roller-Ball-Pen-SDL267473865-1-a3262.jpg'),
(68, 68, 'https://n4.sdlcdn.com/imgs/b/7/6/Trilokani-Brown-Boots-SDL902025613-1-8a877.jpg'),
(69, 69, 'https://n4.sdlcdn.com/imgs/d/p/b/Muscle-Pharm-Mass-gainer-1-SDL188135754-1-83055.jpg'),
(70, 70, 'https://n4.sdlcdn.com/imgs/c/u/m/Eternal-Multi-Color-Georgette-Dresses-SDL747863298-1-fbe09.jpg'),
(71, 71, 'https://n4.sdlcdn.com/imgs/d/1/p/Crazeis-Analog-Wrist-Watch-For-SDL973947022-1-51b3a.jpg'),
(72, 72, 'https://n4.sdlcdn.com/imgs/c/5/7/Lavie-Brown-Faux-Leather-Box-SDL784711342-1-8acc6.jpg'),
(73, 73, 'https://n4.sdlcdn.com/imgs/b/g/8/The-Power-of-Your-Subconscious-SDL235888477-1-980c7.jpg'),
(74, 74, 'https://n4.sdlcdn.com/imgs/a/3/h/Kataria-Jewellers-14Kt-Gold-Diamonds-SDL280836861-1-08606.jpg'),
(75, 75, 'https://n4.sdlcdn.com/imgs/b/u/9/Sukkhi-Gold-Plated-Four-Strings-SDL235521667-1-2b1c9.jpg'),
(76, 76, 'https://n4.sdlcdn.com/imgs/a/t/5/Rock-Micro-Usb-Flat-Data-SDL207509046-1-839e4.jpg'),
(77, 77, 'https://n4.sdlcdn.com/imgs/b/s/7/SDL588108570_1-ab355.jpg'),
(78, 78, 'https://n4.sdlcdn.com/imgs/b/y/b/Orpat-48-Inches-Air-Flora-SDL206831663-1-f9f5c.jpg'),
(79, 79, 'https://n4.sdlcdn.com/imgs/a/3/i/Riytham-Fashion-Gray-Cotton-Saree-SDL158378278-1-fb201.jpg'),
(80, 80, 'https://n4.sdlcdn.com/imgs/c/l/p/allen_a_909_original_imae-9e8eb.jpeg'),
(81, 81, 'https://n4.sdlcdn.com/imgs/c/g/w/Generic-Assorted-Colors-Selfie-Stick-SDL624459869-1-0a758.jpg'),
(82, 82, 'https://n4.sdlcdn.com/imgs/c/f/x/House-Of-Marley-SMILE-JAMICA-SDL328637599-1-f2062.jpg'),
(83, 83, 'https://n4.sdlcdn.com/imgs/a/4/p/Micromax-S301-4GB-Black-SDL953285268-1-96dbd.jpg'),
(84, 84, 'https://n4.sdlcdn.com/imgs/d/2/3/Karbonn-K41-32-MB-White-SDL491332242-1-db43e.jpg'),
(85, 85, 'https://n4.sdlcdn.com/imgs/d/5/h/1-3dcee.jpg'),
(86, 86, 'https://n4.sdlcdn.com/imgs/d/x/g/Motion-Red-Anchor-And-Steering-SDL499803305-1-b6283.jpg'),
(87, 87, 'https://n4.sdlcdn.com/imgs/b/7/0/SDL883746761-0184f.jpg'),
(88, 88, 'https://n4.sdlcdn.com/imgs/a/z/w/Quick-Heal-Antivirus-2015-SDL095277916-1-41781.jpg'),
(89, 89, 'https://n4.sdlcdn.com/imgs/d/c/s/SDL584818331-c07c1.jpg'),
(90, 90, 'https://n4.sdlcdn.com/imgs/c/v/i/U-S-Polo-Assn-Multi-SDL947282266-1-3aa87.jpg'),
(91, 91, 'https://n4.sdlcdn.com/imgs/b/z/o/Red-Tape-Brown-Formal-Shoes-SDL395947474-1-cbd75.jpg'),
(92, 92, 'https://n4.sdlcdn.com/imgs/c/7/r/Campus-Sutra-Blue-Hooded-Sweatshirt-SDL634877183-1-c65dd.jpg'),
(93, 93, 'https://n4.sdlcdn.com/imgs/a/6/e/Shilajit30Cap_3DPack-51a34.jpg'),
(94, 94, 'https://n4.sdlcdn.com/imgs/b/t/g/SDL062304542_M_1_2x-d6650.jpg'),
(95, 95, 'https://n4.sdlcdn.com/imgs/a/n/n/Kc-Stainless-Steel-Dustbin-Round-SDL291880390-1-f62af.jpg'),
(96, 96, 'https://n4.sdlcdn.com/imgs/b/m/h/Motorola-FW200L-Fixed-Wireless-GSM-SDL916344332-1-b161f.jpg'),
(97, 97, 'https://n4.sdlcdn.com/imgs/a/0/w/Omron-HEM-7113-BP-Monitor-SDL088819455-1-2808b.jpg'),
(98, 98, 'https://n4.sdlcdn.com/imgs/c/l/m/ACE-STRIKE-ORDEM-5-SDL119643053-1-0c44b.jpg'),
(99, 99, 'https://n4.sdlcdn.com/imgs/d/0/z/Domex-Original-Toilet-Cleaner-Expert-SDL618928289-1-d128f.jpg'),
(100, 100, 'https://n4.sdlcdn.com/imgs/c/6/5/One-Touch-Select-Glucose-Monitor-SDL131535487-1-f06b1.jpeg'),
(101, 101, 'https://n4.sdlcdn.com/imgs/e/c/6/SDL754807928_2__9b83f-65be2.JPG'),
(102, 102, 'https://n4.sdlcdn.com/imgs/b/v/u/1-af9d2.jpg'),
(103, 103, 'https://n4.sdlcdn.com/imgs/d/0/0/Smiles-Creation-Lighting-Drum-Keyboard-SDL864907076-1-447ef.jpg'),
(104, 104, 'https://n4.sdlcdn.com/imgs/a/2/v/ALTEDO-Silver-Analog-Wrist-Watch-SDL205597603-1-5b53b.jpg'),
(105, 105, 'https://n4.sdlcdn.com/imgs/a/p/5/Miss-Chase-Whole-Wide-Whirl-SDL459040860-1-6a87f.jpg'),
(106, 106, 'https://n4.sdlcdn.com/imgs/a/l/l/Puma-Black-Leather-Wallet-SDL136363943-1-70836.jpg'),
(107, 107, 'https://n4.sdlcdn.com/imgs/a/t/q/Gmi-White-Pure-Crepe-Round-SDL473946834-1-a5db6.jpg'),
(108, 108, 'https://n4.sdlcdn.com/imgs/c/3/y/Radheshyam-Enterprise-Blue-Net-Circular-SDL246016332-1-c8f05.JPG'),
(109, 109, 'https://n4.sdlcdn.com/imgs/c/v/d/Routeen-Black-Slim-Solid-SDL061936099-1-305cf.jpg'),
(110, 110, 'https://n4.sdlcdn.com/imgs/a/7/j/Nike-Dart-11-Msl-Navy-SDL991486272-1-34bf1.jpg'),
(111, 111, 'https://n4.sdlcdn.com/imgs/a/u/k/Skmei-Gray-Imported-Trendy-Casual-SDL076095465-1-042ff.jpg'),
(112, 112, 'https://n4.sdlcdn.com/imgs/b/f/t/General-Knowledge-6-E-Pb-SDL523124510-1-c864f.jpg'),
(113, 113, 'https://n4.sdlcdn.com/imgs/a/l/6/IRIS-12-KG-Dumbell-SDL770225076-1-1fa16.jpg'),
(114, 114, 'https://n4.sdlcdn.com/imgs/d/3/n/Roger-Moris-White-Board-Small-1803120-1-07a31.JPG'),
(115, 115, 'https://n4.sdlcdn.com/imgs/c/v/z/Shilpihandicrafts-Off-White-Necklace-Set-SDL535327662-1-217c3.jpg'),
(116, 116, 'https://n4.sdlcdn.com/imgs/a/q/f/Cotton-Printed-Suits-SDL438213936-1-ac65e.jpg'),
(117, 117, 'https://n4.sdlcdn.com/imgs/b/y/1/Diary-of-a-Wimpy-Kid-SDL182448723-1-d827c.jpg'),
(118, 118, 'https://n4.sdlcdn.com/imgs/a/o/u/Ads-Compact-Powder-A8030-2-SDL779721993-1-bd8ea.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `quality`
--

CREATE TABLE `quality` (
  `quality_id` int(10) NOT NULL,
  `quality` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `status` int(5) DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `quality`
--

INSERT INTO `quality` (`quality_id`, `quality`, `description`, `status`) VALUES
(1, '4K', 'High Defination', 1),
(2, 'HD', 'Sandard Defination', 1),
(3, 'SD', 'Ultra High Defination', 1),
(4, 'CAM', 'Web Camera Video', 1),
(7, 'LQ', 'Low Quality', 1),
(8, 'DVD', 'Digital Video Device', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  `ip` varchar(250) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `rating` int(5) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rest_logins`
--

CREATE TABLE `rest_logins` (
  `id` int(11) NOT NULL,
  `username` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `rest_logins`
--

INSERT INTO `rest_logins` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'rest_user_password', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `slug` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`) VALUES
(1, 'admin', 'admin'),
(2, 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `value` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`) VALUES
(44, 'fabook_login', 'on'),
(45, 'facebook_app_secrete', 'hhhhhhhhhhbaba'),
(46, 'facebook_graph_version', 'v7.2'),
(47, 'status', 'on'),
(48, 'google_app_name', 'doolbay'),
(49, 'facebook_app_id', '7d998jerjskds83'),
(50, 'google_client_id', 'hhh838934bnbdshjsdkak'),
(51, 'google_client_secrete', 'ewyuwebwenbwejhhjsd'),
(52, 'google_redirect_url', 'doolbay.com'),
(53, 'facebook_link', 'https://facebook.com/doolbay'),
(54, 'category_id', '1'),
(55, 'slider_layout', 'Select slider layout'),
(56, 'slide_interval', '3000'),
(57, 'slider_Erasing', '1'),
(58, 'slider_duration', '800'),
(59, 'instagram_link', 'https://instagram.com/doolbay'),
(60, 'twitter_link', 'https://twitter.com/doolbay'),
(61, 'linkedin_link', 'https://linkedin.com/doolbay'),
(62, 'site_seo_title', 'doolbay'),
(63, 'site_keywords', 'shopping,script,online'),
(64, 'posts_seo_title', 'doolbay blog');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `description` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `product_link` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `image_link` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `action_type` varchar(250) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `btn_text` varchar(250) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `action_id` int(50) DEFAULT NULL,
  `action_url` mediumtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `order` int(50) NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `subscription_id` int(50) NOT NULL,
  `plan_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `price_amount` double NOT NULL,
  `paid_amount` float NOT NULL,
  `currency` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT 'USD',
  `timestamp_from` int(50) NOT NULL,
  `timestamp_to` int(50) NOT NULL,
  `payment_method` mediumtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `transaction_id` mediumtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `payment_info` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `payment_timestamp` int(50) NOT NULL,
  `recurring` int(10) NOT NULL DEFAULT 1,
  `status` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `location` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `slug` varchar(250) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `location`, `status`, `slug`) VALUES
(18, 'premium', 1, 1, 'premium'),
(24, 'featured', 1, 1, 'featured');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(9) UNSIGNED NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `company` varchar(100) NOT NULL,
  `telephone` varchar(100) DEFAULT NULL,
  `verified` int(1) NOT NULL,
  `auth_keys` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) NOT NULL,
  `last_login` datetime NOT NULL,
  `join_date` datetime NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `role`, `company`, `telephone`, `verified`, `auth_keys`, `avatar`, `last_login`, `join_date`, `slug`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@doolbay.com', '9d9e4f399a585fda43a9750ebfd1e00d', 1, 'Ziemann, Schultz and Flatley', '+79(0)9583078456', 0, NULL, '', '1981-08-12 00:42:11', '1971-06-01 04:24:09', ''),
(2, 'Alana', 'Crona', 'pouros.adrien', 'twaelchi@example.org', 'b5b14746153bd7bfb3abdb67359bb4ffa43518d7', 0, 'Kozey Inc', '(868)268-7773x02606', 0, NULL, '', '1979-12-25 13:53:55', '1996-08-15 21:53:45', ''),
(3, 'Roselyn', 'Koelpin', 'dach.karolann', 'pollich.agnes@example.org', 'b32695a76d86fb12c33d2aa5638b6e55c329c293', 0, 'Spencer-Nienow', '029.529.3202x153', 0, NULL, '', '1974-01-11 17:35:32', '1970-05-23 10:33:09', ''),
(4, 'Deven', 'Gutkowski', 'little.albina', 'senger.gilbert@example.org', '63b54697ea2a2f7014f9e0d3ef4f0c10d868b06f', 0, 'Hansen-Dickens', '790-945-7073x55475', 0, NULL, '', '1998-05-12 11:23:49', '2011-02-13 23:17:08', ''),
(5, 'Pearl', 'Doyle', 'hd\'amore', 'antonia62@example.org', '90f00e6e43b077a04cbccfa46878bc18043f7965', 0, 'Schmeler Ltd', '523-297-0256x73597', 0, NULL, '', '1977-09-23 17:50:40', '1993-08-16 14:41:58', ''),
(6, 'Aglae', 'Deckow', 'antonia20', 'norris89@example.org', 'b278b0d6fc1697b2aac446449849ea7b998cf83e', 0, 'Keeling LLC', '(175)003-6686', 0, NULL, '', '2004-10-24 10:39:27', '1977-08-23 03:21:45', ''),
(7, 'Destiney', 'Yost', 'justus.bosco', 'alta.hauck@example.net', 'c7f4d741294e0eb47fbe7d653a910fed10921c5f', 0, 'Walsh-Hartmann', '+24(3)9361854814', 0, NULL, '', '1981-06-09 01:20:19', '1998-02-20 10:48:39', ''),
(8, 'Cyrus', 'Blick', 'dbahringer', 'itorphy@example.net', '7fa10f9fad06518fa04aad777f04a23ad41cef8b', 0, 'Christiansen-Kohler', '954.294.0820', 0, NULL, '', '2012-06-10 05:25:24', '1996-07-06 15:42:29', ''),
(9, 'Reuben', 'Hyatt', 'savion.bauch', 'waldo80@example.net', '81e4f310a50e3235afb8a2ed3a2e6195c2b0393b', 0, 'Prohaska-Botsford', '811-607-6122x28820', 0, NULL, '', '1975-01-20 14:00:14', '1979-04-17 00:15:27', ''),
(10, 'Aisha', 'Vandervort', 'schamberger.frederique', 'fvon@example.net', '10f1acbc0c7727360d2cf762a2a6120765570e36', 0, 'Conroy PLC', '(791)064-3198', 0, NULL, '', '2001-10-30 12:46:37', '2018-12-26 16:48:42', ''),
(11, 'Giovanna', 'Heidenreich', 'hnicolas', 'zgottlieb@example.com', '7bef343941b56cda83c6d2721c85e9b3415cc91e', 0, 'Marks, Schuppe and Dietrich', '1-367-922-0493x024', 0, NULL, '', '2012-10-18 21:27:35', '1998-09-14 21:30:31', ''),
(12, 'Leland', 'Goldner', 'pacocha.amya', 'ssenger@example.com', 'e222c453adb40e0bee38e500480624fc78370506', 0, 'Parisian, Quigley and Gulgowski', '1-885-402-2747x58841', 0, NULL, '', '2018-12-30 15:50:21', '2001-07-13 06:37:08', ''),
(13, 'Pietro', 'Buckridge', 'bgibson', 'sauer.fermin@example.com', 'ed45bfcaacaeaf60fd6534b3767d015a20683ef4', 0, 'Bode-Zemlak', '05505814782', 0, NULL, '', '1973-06-27 13:40:51', '1979-11-08 16:07:20', ''),
(14, 'Tyreek', 'Purdy', 'kreiger.solon', 'champlin.thelma@example.net', '0c0d895ca70e42f89ee61a20bfa2ce63f4e1a6ad', 0, 'Daugherty-Kunze', '(109)344-7324x3841', 0, NULL, '', '1972-05-27 01:27:02', '1997-05-04 17:38:33', ''),
(15, 'Julien', 'Lowe', 'deckow.gordon', 'schuppe.ari@example.org', '9bc145ed9c3fd9e46e72512247236d10bb41baee', 0, 'Tromp-Purdy', '(612)561-0113', 0, NULL, '', '1991-02-08 18:57:21', '1997-04-05 08:04:23', ''),
(16, 'America', 'Bergstrom', 'kwyman', 'ewatsica@example.org', '91f99999e46a7335ba599e14beaec20777abda84', 0, 'Baumbach Group', '667-929-6060x352', 0, NULL, '', '1987-08-25 03:05:05', '1973-06-10 19:53:04', ''),
(17, 'Ardith', 'Blick', 'ernesto74', 'qdickinson@example.org', '2f24893d3333f2e478dc599a5206bd9165ce9456', 0, 'Gerlach Ltd', '227.200.6395x6719', 0, NULL, '', '1985-01-31 06:36:21', '1972-06-28 16:19:37', ''),
(18, 'Garry', 'Schaefer', 'haylee.upton', 'rodolfo90@example.org', 'b4c9ca4e9d6968caac88be6ab6da43590806115c', 0, 'Altenwerth Group', '228-084-6653', 0, NULL, '', '2020-01-11 23:39:04', '1974-07-20 22:36:48', ''),
(19, 'Zachariah', 'Cassin', 'eliza24', 'zmoen@example.net', '35d6e5337e84dcb2efe748042064dc3275e100af', 0, 'Ruecker, Bahringer and Simonis', '1-581-737-6910x44101', 0, NULL, '', '2011-01-27 09:30:56', '1991-07-12 16:23:33', ''),
(20, 'Roy', 'Rolfson', 'clair19', 'catharine.ankunding@example.org', '41897cce1af274e073ac4fbf8ed2011e719aa795', 0, 'Sipes, Kassulke and Von', '1-411-904-4203', 0, NULL, '', '1974-08-17 13:05:07', '1993-11-14 14:07:57', ''),
(21, 'Dulce', 'Green', 'marks.natalia', 'yweber@example.net', '75683906e4cb5c83875c69bef29ac3ddfa98310c', 0, 'Hermiston Group', '(322)849-5453x3784', 0, NULL, '', '1992-05-01 13:26:44', '2015-04-24 01:51:25', ''),
(22, 'Brenna', 'Leffler', 'moen.henriette', 'daisha.gislason@example.net', '8dd02123f4603ac42875441938c857e1266cee8a', 0, 'Beier, Watsica and Fahey', '(013)833-5668', 0, NULL, '', '1987-02-26 07:19:23', '1999-09-19 18:06:49', ''),
(23, 'Karina', 'Upton', 'fern.sauer', 'wkshlerin@example.com', 'bad02d5e4728004da6d00b0534ba9b9e4369400d', 0, 'Schinner Inc', '(938)545-8943x9729', 0, NULL, '', '2016-03-06 06:36:13', '1971-12-02 08:41:59', ''),
(24, 'Christop', 'Keeling', 'witting.rupert', 'candida56@example.org', '1d0cf9bbfc0cb528d98b9a924574b402a4324a1c', 0, 'Hoppe, Satterfield and Hickle', '776-660-8326x214', 0, NULL, '', '2005-09-29 05:34:14', '2000-04-12 11:03:40', ''),
(25, 'Rhiannon', 'Heaney', 'shickle', 'serena.hirthe@example.org', 'd3ce9e211debf1d77e4d06f5076de3fbfa60864d', 0, 'Grimes, Padberg and Hermiston', '(379)514-5809', 0, NULL, '', '2015-04-13 01:47:22', '2005-07-21 21:33:02', ''),
(26, 'Maudie', 'D\'Amore', 'white.justen', 'irving93@example.com', 'dad99b1006caed41bb815a276b35670fd1e82eb3', 0, 'Cronin LLC', '00798494352', 0, NULL, '', '1971-09-16 20:09:32', '1977-12-22 21:07:37', ''),
(27, 'Pearline', 'Kunze', 'uglover', 'ima.klein@example.com', '5fa17d7c015a6130e8ff0c850ad89947d926b19e', 0, 'King, Stehr and Ullrich', '+39(9)5580296096', 0, NULL, '', '2009-01-06 22:27:08', '1997-01-04 08:42:39', ''),
(28, 'Erica', 'Heidenreich', 'wuckert.tyrel', 'rhoda.mckenzie@example.org', '5ad3c477c52c63603823a049322109e5a22cd0fb', 0, 'Lehner, Romaguera and Smitham', '+53(2)8444156893', 0, NULL, '', '1998-05-04 04:50:00', '1994-05-22 13:15:41', ''),
(29, 'Asia', 'Cummings', 'lisa.koch', 'brant33@example.org', 'e653436113ecfed380abd3190e914ac94ddc503a', 0, 'Barrows Ltd', '906.820.1038x6722', 0, NULL, '', '2005-02-28 14:38:55', '1991-05-30 11:25:58', ''),
(30, 'Dorthy', 'Wiza', 'purdy.hudson', 'glenna16@example.net', 'fe16746acfe525d198633919e18ee3646f1eeaca', 0, 'Krajcik, Thompson and Huels', '1-444-511-1313', 0, NULL, '', '1974-08-02 14:17:47', '1976-12-30 03:14:42', ''),
(31, 'Fredrick', 'Kuhic', 'torp.concepcion', 'tina70@example.net', 'c8460d2c53a1aa212828019352c37c791de35823', 0, 'Williamson, Fahey and Considine', '400.435.8876x715', 0, NULL, '', '1979-09-10 04:54:51', '2003-09-05 23:11:35', ''),
(32, 'Luella', 'Cruickshank', 'larkin.tia', 'brandon01@example.net', '5a125492f90b8be2afe42a093cd70e15ba44c22a', 0, 'Sporer and Sons', '1-672-105-3248', 0, NULL, '', '2019-12-12 13:14:28', '1995-04-29 23:12:46', ''),
(33, 'Wilhelmine', 'Orn', 'ecruickshank', 'leannon.phoebe@example.net', '5335ef15961c9a199872a9285a35482afffd6963', 0, 'Jacobs, Olson and Langworth', '872.400.3629x510', 0, NULL, '', '1982-11-15 11:33:38', '1976-12-06 06:49:53', ''),
(34, 'Adella', 'Grady', 'esmeralda80', 'kaden.witting@example.org', 'a0faa68d19e2a267c8f72c0a49a1cb67dbd0549e', 0, 'Weber, Collins and McCullough', '(794)757-8603x2666', 0, NULL, '', '1981-07-21 04:51:48', '1998-02-12 14:26:22', ''),
(35, 'Jake', 'Connelly', 'millie.nikolaus', 'hillary12@example.net', '604854ca5e1ac9c845439dca2a6fc24942790078', 0, 'Borer, Torp and Smith', '176-508-0341x8334', 0, NULL, '', '1993-05-07 19:35:26', '2003-12-06 20:58:51', ''),
(36, 'Nasir', 'Purdy', 'joanie11', 'borer.alysson@example.org', 'ae31c8ba2bbd99a5a88c286c548cb922dded2cce', 0, 'Legros, Mueller and Herzog', '1-031-482-1100x97839', 0, NULL, '', '1989-08-27 02:22:39', '1979-02-18 00:32:59', ''),
(37, 'Brenden', 'McDermott', 'vconnelly', 'vlynch@example.com', '220698e5a90e323fb4f94a20f79f2f9502b8fa89', 0, 'Halvorson, Kreiger and Yundt', '(648)509-6304x582', 0, NULL, '', '2002-10-28 17:42:16', '2019-04-07 02:29:08', ''),
(38, 'Ariane', 'Hagenes', 'flo74', 'zetta07@example.org', 'b4e0ca39e172a54a852d9ee8e2b1b685bb6d6fd1', 0, 'Hackett and Sons', '048.299.3576', 0, NULL, '', '1988-05-29 05:48:30', '2020-04-20 13:31:44', ''),
(39, 'Crystel', 'Beer', 'miller.jamel', 'ludwig95@example.org', '442d47d8d9c126340a0daad505731c118caeb201', 0, 'Walter, Heller and O\'Conner', '521-270-7305x8244', 0, NULL, '', '1979-01-05 12:13:40', '1981-08-29 02:11:22', ''),
(40, 'Lizzie', 'Kris', 'zbecker', 'morissette.nina@example.com', 'd9e48695c2a0055457ef91f483874896e057245f', 0, 'Cassin, Skiles and Schiller', '753-891-9637x48553', 0, NULL, '', '1984-07-04 19:14:14', '1985-06-10 03:44:00', ''),
(41, 'Trever', 'Murray', 'osinski.kaelyn', 'qwalker@example.org', 'b4941ad75ba8968718ed0e2a01e5402b0b0ebccb', 0, 'Hackett-Skiles', '(599)763-6678x9005', 0, NULL, '', '1978-06-26 05:06:35', '1982-08-13 11:32:36', ''),
(42, 'Dasia', 'Cole', 'qbalistreri', 'terrance67@example.org', '2e4c8d5218b6085809004b7c499373c5bf1dd93a', 0, 'O\'Kon LLC', '1-602-001-8473x1608', 0, NULL, '', '1997-02-08 19:12:18', '2003-09-18 08:46:59', ''),
(43, 'Sienna', 'Moen', 'bud.senger', 'margaretta87@example.net', '7a84a19bbddda7a4bc0450ca6f84c303d108d41c', 0, 'Halvorson-Kovacek', '1-622-079-0292x78656', 0, NULL, '', '1977-06-12 13:24:07', '1997-11-06 23:54:32', ''),
(44, 'Orlando', 'Rutherford', 'hoppe.dejuan', 'pat.sawayn@example.org', 'cb77c190de2f1a477be0e0135e714768d782f6ef', 0, 'Schmitt Inc', '052-343-3493', 0, NULL, '', '1996-08-23 02:58:15', '1978-04-15 19:22:50', ''),
(45, 'Cornell', 'Mante', 'krystal34', 'mertz.gregorio@example.org', 'cd8f40301cfd3416f22ec05f3d7d56d90b426df9', 0, 'Bergnaum Group', '191-972-2311', 0, NULL, '', '1972-11-06 02:02:07', '1994-07-21 19:44:07', ''),
(46, 'Coy', 'Kulas', 'aufderhar.ryleigh', 'lockman.lyric@example.org', '9d205fa0744d3d5d436086d323c6f677b95facbd', 0, 'Jaskolski-Schroeder', '03195391508', 0, NULL, '', '1998-06-06 09:05:59', '1978-06-07 09:39:22', ''),
(47, 'Ceasar', 'Tillman', 'ankunding.lisette', 'berge.claudia@example.com', '9851344585a1c48aa5f8bd6be4cc79a3fa0d08b8', 0, 'Oberbrunner-Dach', '(032)596-7272x683', 0, NULL, '', '1998-05-07 21:00:04', '2007-03-07 14:16:33', ''),
(48, 'Armando', 'Will', 'ucollins', 'langworth.pierre@example.com', '17e82ae767becdf1284eb0627020d50539dae18f', 0, 'DuBuque and Sons', '06156110428', 0, NULL, '', '1990-08-14 07:49:49', '2010-08-03 10:31:15', ''),
(49, 'Tyrell', 'Will', 'gaylord82', 'frances35@example.com', '0720f261c8318192b9286b63e0e273ab25f77a3d', 0, 'VonRueden, Donnelly and Effertz', '(652)587-2279x2522', 0, NULL, '', '1972-06-27 19:37:08', '1980-11-02 16:08:43', ''),
(50, 'Loma', 'Schaefer', 'gutkowski.barton', 'clemens51@example.com', '4384aef1df5689ca9415988071aecd9adf7c2791', 0, 'Robel-Herzog', '+57(0)4883271617', 0, NULL, '', '1984-04-11 00:57:10', '1981-07-05 22:14:39', '');

-- --------------------------------------------------------

--
-- Table structure for table `wish_list`
--

CREATE TABLE `wish_list` (
  `wish_list_id` int(11) NOT NULL,
  `wish_list_type` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `products_id` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`ads_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parentid_fk` (`parentid`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_files`
--
ALTER TABLE `product_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `parentid_fk` FOREIGN KEY (`parentid`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
