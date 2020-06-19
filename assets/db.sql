-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2020 at 05:15 PM
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
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `contact_names` varchar(100) NOT NULL,
  `address_line_1` varchar(200) NOT NULL,
  `address_line_2` varchar(200) NOT NULL,
  `admin_area_1` varchar(200) NOT NULL,
  `admin_area_2` varchar(200) NOT NULL,
  `postal_code` varchar(100) NOT NULL,
  `country_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `user_id`, `order_id`, `contact_names`, `address_line_1`, `address_line_2`, `admin_area_1`, `admin_area_2`, `postal_code`, `country_code`) VALUES
(1, 1, 0, 'John Doe', '123 Townsend St', 'Floor 6', 'CA', 'San Francisco', '94107', 'US'),
(2, 1, 0, 'John Doe', '123 Townsend St', 'Floor 6', 'CA', 'San Francisco', '94107', 'US'),
(3, 1, 0, 'John Doe', '123 Townsend St', 'Floor 6', 'CA', 'San Francisco', '94107', 'US'),
(4, 1, 0, 'John Doe', '123 Townsend St', 'Floor 6', 'CA', 'San Francisco', '94107', 'US'),
(5, 1, 0, 'John Doe', '123 Townsend St', 'Floor 6', 'CA', 'San Francisco', '94107', 'US'),
(6, 1, 0, 'John Doe', '123 Townsend St', 'Floor 6', 'CA', 'San Francisco', '94107', 'US'),
(7, 1, 0, 'John Doe', '123 Townsend St', 'Floor 6', 'CA', 'San Francisco', '94107', 'US'),
(8, 1, 0, 'John Doe', '123 Townsend St', 'Floor 6', 'CA', 'San Francisco', '94107', 'US'),
(9, 1, 0, 'John Doe', '123 Townsend St', 'Floor 6', 'CA', 'San Francisco', '94107', 'US'),
(10, 1, 0, 'John Doe', '123 Townsend St', 'Floor 6', 'CA', 'San Francisco', '94107', 'US'),
(11, 1, 0, 'John Doe', '123 Townsend St', 'Floor 6', 'CA', 'San Francisco', '94107', 'US'),
(12, 1, 0, 'John Doe', '123 Townsend St', 'Floor 6', 'CA', 'San Francisco', '94107', 'US'),
(13, 1, 0, 'John Doe', '123 Townsend St', 'Floor 6', 'CA', 'San Francisco', '94107', 'US'),
(14, 1, 0, 'John Doe', '123 Townsend St', 'Floor 6', 'CA', 'San Francisco', '94107', 'US'),
(15, 1, 0, 'John Doe', '123 Townsend St', 'Floor 6', 'CA', 'San Francisco', '94107', 'US'),
(16, 1, 0, 'John Doe', '123 Townsend St', 'Floor 6', 'CA', 'San Francisco', '94107', 'US'),
(17, 1, 0, 'John Doe', '123 Townsend St', 'Floor 6', 'CA', 'San Francisco', '94107', 'US'),
(18, 1, 0, 'John Doe', '123 Townsend St', 'Floor 6', 'CA', 'San Francisco', '94107', 'US'),
(19, 1, 0, 'John Doe', '123 Townsend St', 'Floor 6', 'CA', 'San Francisco', '94107', 'US'),
(20, 1, 0, 'John Doe', '123 Townsend St', 'Floor 6', 'CA', 'San Francisco', '94107', 'US'),
(21, 1, 0, 'John Doe', '123 Townsend St', 'Floor 6', 'CA', 'San Francisco', '94107', 'US'),
(22, 1, 0, 'John Doe', '123 Townsend St', 'Floor 6', 'CA', 'San Francisco', '94107', 'US'),
(23, 1, 0, 'John Doe', '123 Townsend St', 'Floor 6', 'CA', 'San Francisco', '94107', 'US'),
(24, 1, 0, 'John Doe', '123 Townsend St', 'Floor 6', 'CA', 'San Francisco', '94107', 'US');

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
  `name` varchar(22) NOT NULL,
  `slug` varchar(23) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `parent_id`, `vendor_id`) VALUES
(1, 'Electronics', 'electronics', NULL, 1),
(2, 'Supermarket', 'Supermarket', NULL, 2),
(21, 'Television & Video', 'television-&-video', 1, 1),
(22, 'Electronics', 'electronics', 1, 1),
(25, 'Home Audio', 'home-audio', 1, 1),
(135, 'vehicles', 'vehicles', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `location` varchar(200) DEFAULT NULL,
  `about_desription` varchar(500) DEFAULT NULL,
  `company_banner` varchar(250) DEFAULT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `company_video` varchar(250) DEFAULT NULL,
  `total_employees` varchar(50) DEFAULT NULL,
  `revenue` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `vendor_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `content`, `location_nav`, `focus_keyword`, `meta_description`, `status`, `vendor_id`, `created_at`) VALUES
(2, 'axxaax', 'axxaax', '<p><br></p>xxax', 1, 'xaaxxa', 'xxaxa', 1, NULL, '2020-04-20 12:17:53'),
(3, 'hello', 'hello', '<p><br></p>fddfdf', 1, 'dffdfd', 'dfdffdfd', 1, NULL, '2020-04-20 12:18:23'),
(4, 'hello', 'hello', '<p><br></p>fddfdf', 1, 'dffdfd', 'dfdffdfd', 1, NULL, '2020-04-20 12:18:43'),
(5, 'wawawawawa', 'wawawawawa', 'aaa<p><br></p>', 1, 'aaa', 'aaa', 1, 2, '2020-04-20 12:35:03'),
(6, 'sshello', 'sshello', '<p><br></p>fddfdf', 1, 'dffdfd', 'dfdffdfd', 0, 2, '2020-04-20 12:55:58');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `txn_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `currency_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `payer_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_method` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  `created_at` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `txn_id`, `currency_code`, `payer_email`, `payment_method`, `payment_status`, `amount`, `address_id`, `created_at`, `updated_at`) VALUES
(7, 1, '9HL389832D146283G', 'USD', 'rswaib@gmail.com', 'paypal', 'COMPLETED', 220, 2, '2020-06-13T04:54:54Z', '2020-06-13T04:54:54Z'),
(8, 1, '9J215817BJ2293623', 'USD', 'rswaib@gmail.com', 'paypal', 'COMPLETED', 220, 10, '2020-06-13T05:19:04Z', '2020-06-13T05:19:04Z'),
(9, 1, '1M026763NL8144902', 'USD', 'rswaib@gmail.com', 'paypal', 'COMPLETED', 220, 11, '2020-06-13T07:44:34Z', '2020-06-13T07:44:34Z'),
(10, 1, '6CX25330A5280173A', 'USD', 'rswaib@gmail.com', 'paypal', 'COMPLETED', 220, 12, '2020-06-13T07:49:11Z', '2020-06-13T07:49:11Z'),
(11, 1, '5MK90584P3331515F', 'USD', 'rswaib@gmail.com', 'paypal', 'COMPLETED', 220, 13, '2020-06-13T07:57:59Z', '2020-06-13T07:57:59Z'),
(12, 1, '7FF43784YL645194P', 'USD', 'rswaib@gmail.com', 'paypal', 'COMPLETED', 220, 14, '2020-06-13T08:29:25Z', '2020-06-13T08:29:25Z'),
(13, 1, '1908135676436114T', 'USD', 'rswaib@gmail.com', 'paypal', 'COMPLETED', 220, 15, '2020-06-13T08:38:01Z', '2020-06-13T08:38:01Z'),
(14, 1, '3CK218274P224913V', 'USD', 'rswaib@gmail.com', 'paypal', 'COMPLETED', 220, 16, '2020-06-13T08:39:04Z', '2020-06-13T08:39:04Z'),
(15, 1, '1S419307NR677354F', 'USD', 'rswaib@gmail.com', 'paypal', 'COMPLETED', 220, 17, '2020-06-13T09:34:03Z', '2020-06-13T09:34:03Z'),
(16, 1, '45G04222S08418410', 'USD', 'rswaib@gmail.com', 'paypal', 'COMPLETED', 220, 18, '2020-06-13T09:35:46Z', '2020-06-13T09:35:46Z'),
(17, 1, '93B70260EE107264B', 'USD', 'rswaib@gmail.com', 'paypal', 'COMPLETED', 220, 19, '2020-06-13T11:12:03Z', '2020-06-13T11:12:03Z'),
(18, 1, '84D55213E0421811E', 'USD', 'rswaib@gmail.com', 'paypal', 'COMPLETED', 220, 20, '2020-06-13T11:14:19Z', '2020-06-13T11:14:19Z'),
(19, 1, '5DG050639F297623P', 'USD', 'rswaib@gmail.com', 'paypal', 'COMPLETED', 220, 21, '2020-06-13T11:22:12Z', '2020-06-13T11:22:12Z'),
(20, 1, '9U973926EL6489542', 'USD', 'rswaib@gmail.com', 'paypal', 'COMPLETED', 220, 22, '2020-06-13T11:27:38Z', '2020-06-13T11:27:38Z'),
(21, 1, '9BH07572J46285312', 'USD', 'rswaib@gmail.com', 'paypal', 'COMPLETED', 220, 23, '2020-06-13T11:37:25Z', '2020-06-13T11:37:25Z'),
(22, 1, '8CT17284540642926', 'USD', 'rswaib@gmail.com', 'paypal', 'COMPLETED', 220, 24, '2020-06-13T11:41:06Z', '2020-06-13T11:41:06Z');

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
  `category_id` bit(1) NOT NULL,
  `available_quantity` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `title`, `slug`, `price`, `sale_price`, `discount`, `views`, `ratings`, `category_id`, `available_quantity`, `vendor_id`) VALUES
(1, 'SDL730883102', 'Intex LED-3216 80 cm (32) HD Ready (HDR) LED Television', 'intex-led-3216-80-cm-(32)-hd-ready-(hdr)-led-television', 23999, 12490, 48, 6, '3.9', b'1', 23999, 2),
(2, 'SDL638477211', 'Campus Sutra Black Cotton Quilted & Bomber Jacket', 'campus-sutra-black-cotton-quilted-&-bomber-jacket', 1999, 680, 66, 2, '3.8', b'1', 1999, 3),
(3, 'SDL921382269', 'OPEN-BOX YU Yureka Plus Cyanogen - 16 GB Grey', 'open-box-yu-yureka-plus-cyanogen---16-gb-grey', 6490, 6399, 1, 12, '3.3', b'1', 6490, 2),
(4, 'SDL092510367', 'Lenovo M0520 2.0 Computer Speaker - Red', 'lenovo-m0520-2.0-computer-speaker---red', 899, 679, 24, 13, '3.8', b'1', 899, 2),
(5, 'SDL837914446', 'Titan Leather Black Men Regular Wallet', 'titan-leather-black-men-regular-wallet', 1099, 994, 10, 62, '4.3', b'1', 1099, 3),
(6, 'SDL466773337', 'Veet Full Body Waxing Kit for Dry Skin -Pack of 1', 'veet-full-body-waxing-kit-for-dry-skin--pack-of-1', 170, 152, 11, 8, '4.0', b'1', 170, 2),
(7, '1220794', 'Lakme Perfect Radiance Intense Whitening Golden Medium 03 Compact, 8 g', 'lakme-perfect-radiance-intense-whitening-golden-medium-03-compact,-8-g', 180, 153, 15, 93, '3.9', b'1', 180, 3),
(8, 'SDL815452992', 'Tokyo Talkies Polyester Dresses', 'tokyo-talkies-polyester-dresses', 1449, 544, 62, 1, '2.6', b'1', 1449, 2),
(9, 'SDL646366940', 'Open box InFocus M370i (8GB-White)', 'open-box-infocus-m370i-(8gb-white)', 5199, 5099, 2, 0, '3.8', b'1', 5199, 3),
(10, 'SDL999145129', 'Marc 3 Ltr Solitaire Instant Geyser - Ivory', 'marc-3-ltr-solitaire-instant-geyser---ivory', 3610, 1849, 49, 13, '3.5', b'1', 0, 2),
(11, '1721342', 'Orient Fabri Joy Dry Iron White (1000 Watts)', 'orient-fabri-joy-dry-iron-white-(1000-watts)', 699, 499, 29, 0, '4.2', b'1', 0, 2),
(12, 'SDL049294041', 'Dolphin XL Leatherette Bean Bag Cover Black & Royal Blue', 'dolphin-xl-leatherette-bean-bag-cover-black-&-royal-blue', 1199, 595, 50, 0, '5.0', b'1', 1199, NULL),
(13, 'SDL711730510', 'Wajbee Blue Slim Faded', 'wajbee-blue-slim-faded', 1499, 360, 76, 153, '3.4', b'1', 1499, NULL),
(14, 'SDL282352124', 'HP Black Laptop Bags', 'hp-black-laptop-bags', 1108, 535, 52, 273, '3.7', b'1', 1108, NULL),
(15, 'SDL753269052', 'Butterflies Red Shoulder Bag', 'butterflies-red-shoulder-bag', 2199, 999, 55, 176, '3.9', b'1', 2199, NULL),
(16, 'SDL814331436', 'Status Red Rug Polyester Printed', 'status-red-rug-polyester-printed', 4999, 999, 80, 24, '4.0', b'1', 4999, NULL),
(17, 'SDL235888477', 'The Power of Your Subconscious Mind', 'the-power-of-your-subconscious-mind', 199, 92, 54, 3, '4.2', b'1', 199, NULL),
(18, 'SDL553144961', 'Goldmedal i-Strip LED Spike Guard with Surge Protector and 6-outlet International Sockets', 'goldmedal-i-strip-led-spike-guard-with-surge-protector-and-6-outlet-international-sockets', 649, 555, 14, 21, '4.4', b'1', 649, NULL),
(19, 'SDL509689093', 'Refurbished Xiaomi Mi4i (16 GB) (White)', 'refurbished-xiaomi-mi4i-(16-gb)-(white)', 9499, 9499, 0, 1, '3.0', b'1', 9499, NULL),
(20, 'SDL401111367', 'Bayer Contour TS Blood Glucose- 50 Test Strips', 'bayer-contour-ts-blood-glucose--50-test-strips', 1400, 899, 36, 140, '4.4', b'1', 1400, NULL),
(21, 'SDL022011360', 'Intex 301 N FMU 4.1 Speaker System', 'intex-301-n-fmu-4.1-speaker-system', 3499, 1699, 51, 80, '3.7', b'1', 3499, NULL),
(22, 'SDL678685750', 'Sony Usb 2.1 Amp Ac Adaptor Cp-ad2 With Micro Usb Cable', 'sony-usb-2.1-amp-ac-adaptor-cp-ad2-with-micro-usb-cable', 990, 609, 38, 150, '4.3', b'1', 990, NULL),
(23, 'SDL185074905', 'Everything Imported Plastic Toothpaste Dispensers', 'everything-imported-plastic-toothpaste-dispensers', 499, 207, 59, 488, '3.1', b'1', 499, NULL),
(24, 'SDL774739577', 'Fogg Brown Leather Analog Watch for Men', 'fogg-brown-leather-analog-watch-for-men', 1199, 349, 71, 8, '3.8', b'1', 1199, NULL),
(25, 'SDL396245637', 'Forever Living Aloe Vera Gel 1 Pc', 'forever-living-aloe-vera-gel-1-pc', 1203, 845, 30, 86, '4.1', b'1', 1203, NULL),
(26, 'SDL854292628', 'Blaupunkt Car Mobile Chargers - Black', 'blaupunkt-car-mobile-chargers---black', 799, 429, 46, 5, '4.4', b'1', 799, NULL),
(27, 'SDL945923589', 'Autofy O2 Desert Storm - Open Face Helmet Brown M', 'autofy-o2-desert-storm---open-face-helmet-brown-m', 999, 629, 37, 0, '0.0', b'1', 999, NULL),
(28, 'SDL646205677', 'Aurion 18 Kg Dumbbell Set With Accessories', 'aurion-18-kg-dumbbell-set-with-accessories', 3499, 1195, 66, 36, '3.6', b'1', 3499, NULL),
(29, 'SDL134366646', 'Dukes Truffel Gift Pack 360gm', 'dukes-truffel-gift-pack-360gm-', 599, 459, 23, 0, '5.0', b'1', 599, NULL),
(30, 'SDL152517745', 'JBN Creation Cream Silk Angrakha Style Indo Western with Maroon Jodhpuri Breeches', 'jbn-creation-cream-silk-angrakha-style-indo-western-with-maroon-jodhpuri-breeches', 1199, 389, 68, 46, '3.7', b'1', 1199, NULL),
(31, '1236773', 'Prestige Popular 3 Ltr Aluminium  Outer Lid Pressure Cooker', 'prestige-popular-3-ltr-aluminium--outer-lid-pressure-cooker', 1140, 839, 26, 158, '4.1', b'1', 1140, NULL),
(32, 'SDL861113363', 'I Kall K12 (64 MB) Blue', 'i-kall-k12-(64-mb)-blue', 599, 569, 5, 5, '3.2', b'1', 599, NULL),
(33, 'SDL536597006', 'Abaco Pomace Olive Oil 1Ltr- Buy 1 Get 1 free', 'abaco-pomace-olive-oil-1ltr--buy-1-get-1-free', 1900, 899, 53, 13, '4.1', b'1', 1900, NULL),
(34, 'SDL594316169', 'CVT 3200 80 cm (32) HD Ready LED TV', 'cvt-3200-80-cm-(32)-hd-ready-led-tv', 12000, 11490, 4, 1, '3.9', b'1', 12000, NULL),
(35, 'SDL424143561', 'Belkin 1m High Speed Hdmi Cable With Ethernet', 'belkin-1m-high-speed-hdmi-cable-with-ethernet', 799, 649, 19, 16, '4.6', b'1', 799, NULL),
(36, 'SDL586637112', 'Fastrack P223BU2 Sunglasses', 'fastrack-p223bu2-sunglasses', 850, 670, 21, 58, '4.1', b'1', 850, NULL),
(37, 'SDL542834865', 'Philips BG1025-15 Body Groomer Black', 'philips-bg1025-15-body-groomer-black', 1495, 1070, 28, 269, '4.0', b'1', 1495, NULL),
(38, 'SDL446190652', 'Highlander Navy Casuals Slim Fit Shirt', 'highlander-navy-casuals-slim-fit-shirt', 999, 549, 45, 8, '4.0', b'1', 999, NULL),
(39, 'SDL077346192', 'Verdioz White Embroidery Poly Cotton Mosquito Net with free 3 saviours', 'verdioz-white-embroidery-poly-cotton-mosquito-net-with-free-3-saviours', 2199, 999, 55, 25, '3.8', b'1', 2199, NULL),
(40, 'SDL188105812', 'Zakk VR Virtual Reality 3D Glass for All Android & iOS Smartphones with Bluetooth Remote', 'zakk-vr-virtual-reality-3d-glass-for-all-android-&-ios-smartphones-with-bluetooth-remote', 4999, 808, 84, 8, '3.3', b'1', 4999, NULL),
(41, 'SDL691291518', 'Digisol 300 Mbps Wireless Router (DG-HR3400)Wireless Routers Without Modem', 'digisol-300-mbps-wireless-router-(dg-hr3400)wireless-routers-without-modem', 1499, 842, 44, 790, '4.3', b'1', 1499, NULL),
(42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'1', NULL, NULL),
(43, 'SDL193075434', 'Sandisk Cruzer Blade SDCZ50-016G-I35 16GB USB 2.0 Utility Pendrive - Pack of 2', 'sandisk-cruzer-blade-sdcz50-016g-i35-16gb-usb-2.0-utility-pendrive---pack-of-2', 778, 689, 11, 825, '4.2', b'1', 778, NULL),
(44, 'SDL087767982', 'Relish Multicolour Leather Round Analog Watch', 'relish-multicolour-leather-round-analog-watch', 699, 289, 59, 8, '4.0', b'1', 699, NULL),
(45, 'SDL709309011', 'Envent Musique-4.1 Speaker System with 20W RMS', 'envent-musique-4.1-speaker-system-with-20w-rms', 3999, 1699, 58, 10, '3.4', b'1', 3999, NULL),
(46, 'SDL907014199', 'Eco Alpine Jumbo Bucket and Heavy Rod Mop with 1 Free Refill Inside (Blue)', 'eco-alpine-jumbo-bucket-and-heavy-rod-mop-with-1-free-refill-inside-(blue)', 2599, 915, 65, 4, '4.0', b'1', 2599, NULL),
(47, 'SDL947785518', 'Rock Hard Multi Color Cotton T-Shirt', 'rock-hard-multi-color-cotton-t-shirt', 799, 299, 63, 3, '3.8', b'1', 799, NULL),
(48, 'SDL243047695', 'Maybelline Colossal 12H Black Kajal 0.35 gm Pack Of 2', 'maybelline-colossal-12h-black-kajal-0.35-gm-pack-of-2', 400, 269, 33, 105, '3.8', b'1', 400, NULL),
(49, 'SDL033507246', 'Brilliant 6 Pcs Non Stick Cookware Set Metallic Red', 'brilliant-6-pcs-non-stick-cookware-set-metallic-red', 2999, 1149, 62, 1, '3.4', b'1', 2999, NULL),
(50, 'SDL134959386', 'Magikware Pink Fruit & Vegetable Juicer', 'magikware-pink-fruit-&-vegetable-juicer', 999, 295, 70, 46, '3.6', b'1', 999, NULL),
(51, 'SDL409109426', 'Skullcandy JIB In-Ear W/Pill Mic S2DUL-J846 Blue Black', 'skullcandy-jib-in-ear-w/pill-mic-s2dul-j846-blue-black', 999, 599, 40, 6, '3.9', b'1', 999, NULL),
(52, '1094817', 'Yonex GR 303 Badminton Racket- Assorted', 'yonex-gr-303-badminton-racket--assorted', 570, 399, 30, 58, '4.0', b'1', 570, NULL),
(53, 'SDL253900881', 'Cello Elegant Casserole Set 3 Pcs', 'cello-elegant-casserole-set-3-pcs-', 999, 560, 44, 49, '4.0', b'1', 999, NULL),
(54, 'SDL631656512', 'boAt Bassheads 600 White & Blue On Ear Wired Headphones With Mic White', 'boat-bassheads-600-white-&-blue-on-ear-wired-headphones-with-mic-white', 1999, 639, 68, 12, '4.1', b'1', 1999, NULL),
(55, 'SDL020254813', 'THE LEGEND OF LAKSHMI PRASAD', 'the-legend-of-lakshmi-prasad', 299, 155, 48, 4, '4.2', b'1', 299, NULL),
(56, 'SDL546985085', 'POND\'S Men Energy Charge Face Wash 100 g', 'pond\'s-men-energy-charge-face-wash-100-g', 170, 153, 10, 13, '4.2', b'1', 170, NULL),
(57, 'SDL250739576', 'F&D F313U 2.1 Desktop Speakers (USB powered) - Black', 'f&d-f313u-2.1-desktop-speakers-(usb-powered)---black', 1990, 999, 50, 316, '3.8', b'1', 1990, NULL),
(58, 'SDL456870757', 'StickersKart flowers & trees PVC Wall Stickers', 'stickerskart-flowers-&-trees-pvc-wall-stickers', 449, 149, 67, 21, '4.1', b'1', 449, NULL),
(59, 'SDL016303853', 'Buildskill 13 mm 650W Impact Drill Machine Kit with Reversible Function + 105 Accessories', 'buildskill-13-mm-650w-impact-drill-machine-kit-with-reversible-function-+-105-accessories', 2999, 1190, 60, 4, '3.4', b'1', 2999, NULL),
(60, 'SDL422349377', 'John Players Grey Sweatshirt', 'john-players-grey-sweatshirt', 1799, 1530, 15, 0, '2.0', b'1', 1799, NULL),
(61, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'1', NULL, NULL),
(62, 'SDL216804529', 'Dabur Shilajit Gold Pack Of 2 X 20 Capsules', 'dabur-shilajit-gold-pack-of-2-x-20-capsules', 780, 587, 25, 28, '3.9', b'1', 780, NULL),
(63, 'SDL461624527', 'VLCC Henna 100gm (Buy 1 Get 1)', 'vlcc-henna-100gm-(buy-1-get-1)', 99, 64, 35, 436, '4.0', b'1', 99, NULL),
(64, 'SDL194305755', 'Nike Gray Daily Slippers', 'nike-gray-daily-slippers', 1395, 1255, 10, 1, '3.8', b'1', 1395, NULL),
(65, '1207811', 'Omron Nebulizer (NE - C801)', 'omron-nebulizer-(ne---c801)', 2950, 1691, 43, 7, '3.9', b'1', 2950, NULL),
(66, 'SDL070282037', 'Lakme Youth Infinity Skin Firming Day Creme 50 G', 'lakme-youth-infinity-skin-firming-day-creme-50-g', 725, 652, 10, 35, '4.1', b'1', 725, NULL),
(67, 'SDL267473865', 'Parker Silver Roller Ball Pen', 'parker-silver-roller-ball-pen', 575, 499, 13, 0, '4.5', b'1', 575, NULL),
(68, 'SDL902025613', 'Brown Boots for Kids', 'brown-boots-for-kids', 1596, 299, 81, 26, '3.7', b'1', 1596, NULL),
(69, 'SDL188135754', 'Muscle Pharm Mass gainer 6 lb Chocolate', 'muscle-pharm-mass-gainer-6-lb-chocolate', 3750, 2499, 33, 0, '0.0', b'1', 3750, NULL),
(70, 'SDL790564753', 'Eternal Multi Color Georgette Dresses', 'eternal-multi-color-georgette-dresses', 2299, 949, 59, 0, '0.0', b'1', 2299, NULL),
(71, 'SDL973947022', 'Crazeis Analog Wrist Watch', 'crazeis-analog-wrist-watch', 1499, 169, 89, 7, '3.3', b'1', 1499, NULL),
(72, 'SDL784711342', 'Lavie Brown Faux Leather Box Clutch', 'lavie-brown-faux-leather-box-clutch', 2460, 1129, 54, 0, '3.7', b'1', 2460, NULL),
(73, 'SDL235888477', 'The Power of Your Subconscious Mind', 'the-power-of-your-subconscious-mind', 199, 92, 54, 3, '4.2', b'1', 199, NULL),
(74, 'SDL367579058', 'Kataria Jewellers The Trinetta BIS Hallmarked Gold and Real Certified Diamonds Designer Ring', 'kataria-jewellers-the-trinetta-bis-hallmarked-gold-and-real-certified-diamonds-designer-ring', 9374, 4999, 47, 0, '4.5', b'1', 9374, NULL),
(75, 'SDL235521667', 'Sukkhi Alloy Gold Plated Kundan Necklace Set', 'sukkhi-alloy-gold-plated-kundan-necklace-set', 1845, 299, 84, 267, '3.2', b'1', 1845, NULL),
(76, 'SDL207509046', 'Rock Micro Usb Flat Data Cable', 'rock-micro-usb-flat-data-cable', 299, 249, 17, 3, '4.0', b'1', 299, NULL),
(77, 'SDL588108570', 'Philips AT 610 Shaver - Black', 'philips-at-610-shaver---black', 2295, 1470, 36, 299, '3.9', b'1', 2295, NULL),
(78, 'SDL206831663', 'Orpat 1200 air flora CeilingFan brown', 'orpat-1200-air-flora-ceilingfan-brown', 1210, 1049, 13, 83, '4.0', b'1', 1210, NULL),
(79, 'SDL158378278', 'Kesar Sarees Grey Saree', 'kesar-sarees-grey-saree', 2150, 499, 77, 149, '3.3', b'1', 2150, NULL),
(80, 'SDL900571578', 'Allen A-909 Wireless Mouse Black', 'allen-a-909-wireless-mouse-black', 550, 249, 55, 98, '3.6', b'1', 550, NULL),
(81, 'SDL624459869', 'Generic Assorted Colors Selfie Stick with Auxillary Cable', 'generic-assorted-colors-selfie-stick-with-auxillary-cable', 999, 119, 88, 36, '3.8', b'1', 999, NULL),
(82, 'SDL328637599', 'House Of Marley SMILE JAMICA EM-JE041 SB In Ear Wired Earphones With Mic Signature Black', 'house-of-marley-smile-jamica-em-je041-sb-in-ear-wired-earphones-with-mic-signature-black', 1990, 975, 51, 0, '4.0', b'1', 1990, NULL),
(83, 'SDL953285268', 'Micromax Bolt S301 (4GB, Black)-(Without Charger&Earphone)', 'micromax-bolt-s301-(4gb,-black)-(without-charger&earphone)', 2999, 2051, 32, 167, '3.0', b'1', 2999, NULL),
(84, 'SDL491332242', 'Karbonn K41 32 MB White Silver', 'karbonn-k41-32-mb-white-silver', 1590, 1004, 37, 0, '0.0', b'1', 1590, NULL),
(85, 'SDL438177093', 'DishTV HD Connection with Recorder-TamilPack (1 Month Family-Sport and Full-on HD with 300 Movie Points) with Lifetime Warranty (worth 1000)', 'dishtv-hd-connection-with-recorder-tamilpack-(1-month-family-sport-and-full-on-hd-with-300-movie-points)-with-lifetime-warranty-(worth-1000)', 2490, 1289, 48, 2, '4.2', b'1', 2490, NULL),
(86, 'SDL499803305', 'Plaza Quartz Motion-Anchor And Steering Design Pendulum Wall Clock', 'plaza-quartz-motion-anchor-and-steering-design-pendulum-wall-clock', 999, 499, 50, 59, '3.3', b'1', 999, NULL),
(87, 'SDL883746761', 'Maharaja Whiteline 25 Litres Classico Super Water Heater White & Blue', 'maharaja-whiteline-25-litres-classico-super-water-heater-white-&-blue', 8299, 5046, 39, 6, '3.9', b'1', 8299, NULL),
(88, 'SDL095277916', 'Quick Heal Antivirus Latest Version ( 2 / 1 ) DVD', 'quick-heal-antivirus-latest-version-(-2-/-1-)-dvd', 1099, 458, 58, 96, '4.2', b'1', 1099, NULL),
(89, 'SDL584818331', 'Himalaya Baby Shampoo 400 Ml', 'himalaya-baby-shampoo-400-ml', 280, 199, 29, 24, '4.2', b'1', 280, NULL),
(90, 'SDL947282266', 'U.S. Polo Assn. Multi Color Casual High Ankle Length - 3 Pair Socks', 'u.s.-polo-assn.-multi-color-casual-high-ankle-length---3-pair-socks', 429, 290, 32, 0, '3.7', b'1', 429, NULL),
(91, 'SDL082660618', 'Red Tape RTR0652 Brown Formal Shoes', 'red-tape-rtr0652-brown-formal-shoes', 3795, 1708, 55, 0, '3.4', b'1', 3795, NULL),
(92, 'SDL634877183', 'Campus Sutra Blue Hooded Sweatshirt', 'campus-sutra-blue-hooded-sweatshirt', 1999, 799, 60, 0, '0.0', b'1', 1999, NULL),
(93, 'SDL695208966', 'Dabur Shilajit 30 Capsules', 'dabur-shilajit-30-capsules', 195, 117, 40, 27, '3.6', b'1', 195, NULL),
(94, 'SDL062304542', 'Nova NHT 1045 W Beard Trimmer White', 'nova-nht-1045-w-beard-trimmer-white', 995, 299, 70, 1568, '3.7', b'1', 995, NULL),
(95, 'SDL291880390', 'KC Silver Stainless Steel Dustbin', 'kc-silver-stainless-steel-dustbin', 599, 299, 50, 40, '3.6', b'1', 599, NULL),
(96, 'SDL916344332', 'Motorola FW200L Fixed Wireless GSM Landline Phone - Black', 'motorola-fw200l-fixed-wireless-gsm-landline-phone---black', 2490, 1949, 22, 48, '4.0', b'1', 2490, NULL),
(97, 'SDL088819455', 'Omron HEM-7113 BP Monitor', 'omron-hem-7113-bp-monitor', 2500, 1170, 53, 28, '4.1', b'1', 2500, NULL),
(98, 'SDL119643053', 'STRIKE ORDEM 5', 'strike-ordem-5', 1999, 399, 80, 0, '3.6', b'1', 1999, NULL),
(99, 'SDL618928289', 'Domex Original Toilet Cleaner Expert 1 l', 'domex-original-toilet-cleaner-expert-1-l', 129, 116, 10, 50, '4.2', b'1', 129, NULL),
(100, 'SDL131535487', 'One Touch Select Glucose Monitor with 50 Test Strips Combo', 'one-touch-select-glucose-monitor-with-50-test-strips-combo', 2385, 1299, 46, 72, '4.3', b'1', 2385, NULL),
(101, 'SDL754807928', 'Scrazy Frozen Sister Anna Elsa Doll - Set of 2', 'scrazy-frozen-sister-anna-elsa-doll---set-of-2', 899, 280, 69, 13, '3.5', b'1', 899, NULL),
(102, 'SDL827782677', 'ZAAP AQUA Waterproof/Shockproof Bluetooth Wireless Speaker with Built-In Microphone | IP67 Rugged Design for Shower/Outdoor', 'zaap-aqua-waterproof/shockproof-bluetooth-wireless-speaker-with-built-in-microphone-|-ip67-rugged-design-for-shower/outdoor', 2000, 1449, 28, 26, '4.7', b'1', 2000, NULL),
(103, 'SDL864907076', 'Smiles Creation Lighting Drum Keyboard  Musical Toy', 'smiles-creation-lighting-drum-keyboard--musical-toy', 799, 333, 58, 5, '4.4', b'1', 799, NULL),
(104, 'SDL205597603', 'Altedo Silver Analog Watch', 'altedo-silver-analog-watch', 2099, 449, 79, 8, '4.0', b'1', 2099, NULL),
(105, 'SDL494396796', 'Miss Chase Maroon Cotton Mini Skater Dresses For Women Sleeveless Round Neck Casual Wear', 'miss-chase-maroon-cotton-mini-skater-dresses-for-women-sleeveless-round-neck-casual-wear', 999, 499, 50, 3, '3.8', b'1', 999, NULL),
(106, 'SDL136363943', 'Puma Black Leather Wallet', 'puma-black-leather-wallet', 1299, 399, 69, 669, '3.8', b'1', 1299, NULL),
(107, 'SDL947666908', 'GMI cream Pure Crepe Round Neck Printed Kurti', 'gmi-cream-pure-crepe-round-neck-printed-kurti', 1299, 310, 76, 32, '3.4', b'1', 1299, NULL),
(108, 'SDL246016332', 'Radheshyam Enterprise Blue Net Circular Semi Stitched Lehenga', 'radheshyam-enterprise-blue-net-circular-semi-stitched-lehenga', 999, 498, 50, 2, '3.9', b'1', 999, NULL),
(109, 'SDL131910219', 'Routeen Black Slim Solid', 'routeen-black-slim-solid', 1299, 338, 74, 1, '3.1', b'1', 1299, NULL),
(110, 'SDL992124230', 'Nike Dart 11 Msl Navy Sport Shoes', 'nike-dart-11-msl-navy-sport-shoes', 4195, 3689, 12, 0, '4.7', b'1', 4195, NULL),
(111, 'SDL076095465', 'Skmei Black Trendy Casual Quartz Watch', 'skmei-black-trendy-casual-quartz-watch', 2999, 535, 82, 89, '4.0', b'1', 2999, NULL),
(112, 'SDL523124510', 'Lucent\'s  General Knowledge Paperback (English) 6th Edition', 'lucent\'s--general-knowledge-paperback-(english)-6th-edition', 180, 132, 27, 131, '4.2', b'1', 180, NULL),
(113, 'SDL770225076', 'IRIS 12 KG Dumbell', 'iris-12-kg-dumbell', 2400, 829, 65, 13, '3.1', b'1', 2400, NULL),
(114, '1803120', 'Roger & Moris White Board (2 x 1.5 feet)', 'roger-&-moris-white-board-(2-x-1.5-feet)', 899, 326, 64, 117, '3.7', b'1', 899, NULL),
(115, 'SDL535327662', 'Shilpihandicrafts Off White Necklace Set of 2', 'shilpihandicrafts-off-white-necklace-set-of-2', 1200, 245, 80, 4, '3.6', b'1', 1200, NULL),
(116, 'SDL438213936', 'Shree Ganesh Red Cotton Dress Material', 'shree-ganesh-red-cotton-dress-material', 1299, 499, 62, 20, '3.8', b'1', 1299, NULL),
(117, 'SDL182448723', 'Double Down (Diary of a Wimpy Kid book 11)', 'double-down-(diary-of-a-wimpy-kid-book-11)-', 399, 222, 44, 3, '4.3', b'1', 399, NULL),
(118, 'SDL779721993', 'ADS Compact Powder A8030-2', 'ads-compact-powder-a8030-2', 593, 219, 63, 10, '3.5', b'1', 593, NULL);

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
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  `feedback` varchar(250) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `rating` int(5) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

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
(64, 'posts_seo_title', 'doolbay blog'),
(65, 'site_name', 'Doolbay');

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
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `slug` varchar(250) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `slug`, `image`) VALUES
(18, 'premium', 'premium', ''),
(24, 'featured', 'featured', '');

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
(2, 'John', 'Doe', 'doe', 'doe@example.org', '9d9e4f399a585fda43a9750ebfd1e00d', 2, 'Kozey Inc', '(868)268-7773x02606', 0, NULL, '', '1979-12-25 13:53:55', '1996-08-15 21:53:45', ''),
(3, 'Roselyn', 'Koelpin', 'dach.karolann', 'pollich.agnes@example.org', 'b32695a76d86fb12c33d2aa5638b6e55c329c293', 2, 'Spencer-Nienow', '029.529.3202x153', 0, NULL, '', '1974-01-11 17:35:32', '1970-05-23 10:33:09', ''),
(4, 'Deven', 'Gutkowski', 'little.albina', 'senger.gilbert@example.org', '63b54697ea2a2f7014f9e0d3ef4f0c10d868b06f', 2, 'Hansen-Dickens', '790-945-7073x55475', 0, NULL, '', '1998-05-12 11:23:49', '2011-02-13 23:17:08', ''),
(5, 'Pearl', 'Doyle', 'hd\'amore', 'antonia62@example.org', '90f00e6e43b077a04cbccfa46878bc18043f7965', 2, 'Schmeler Ltd', '523-297-0256x73597', 0, NULL, '', '1977-09-23 17:50:40', '1993-08-16 14:41:58', ''),
(6, 'Aglae', 'Deckow', 'antonia20', 'norris89@example.org', 'b278b0d6fc1697b2aac446449849ea7b998cf83e', 2, 'Keeling LLC', '(175)003-6686', 0, NULL, '', '2004-10-24 10:39:27', '1977-08-23 03:21:45', ''),
(7, 'Destiney', 'Yost', 'justus.bosco', 'alta.hauck@example.net', 'c7f4d741294e0eb47fbe7d653a910fed10921c5f', 2, 'Walsh-Hartmann', '+24(3)9361854814', 0, NULL, '', '1981-06-09 01:20:19', '1998-02-20 10:48:39', ''),
(8, 'Cyrus', 'Blick', 'dbahringer', 'itorphy@example.net', '7fa10f9fad06518fa04aad777f04a23ad41cef8b', 2, 'Christiansen-Kohler', '954.294.0820', 0, NULL, '', '2012-06-10 05:25:24', '1996-07-06 15:42:29', ''),
(9, 'Reuben', 'Hyatt', 'savion.bauch', 'waldo80@example.net', '81e4f310a50e3235afb8a2ed3a2e6195c2b0393b', 2, 'Prohaska-Botsford', '811-607-6122x28820', 0, NULL, '', '1975-01-20 14:00:14', '1979-04-17 00:15:27', ''),
(10, 'Aisha', 'Vandervort', 'schamberger.frederique', 'fvon@example.net', '10f1acbc0c7727360d2cf762a2a6120765570e36', 2, 'Conroy PLC', '(791)064-3198', 0, NULL, '', '2001-10-30 12:46:37', '2018-12-26 16:48:42', ''),
(11, 'Giovanna', 'Heidenreich', 'hnicolas', 'zgottlieb@example.com', '7bef343941b56cda83c6d2721c85e9b3415cc91e', 2, 'Marks, Schuppe and Dietrich', '1-367-922-0493x024', 0, NULL, '', '2012-10-18 21:27:35', '1998-09-14 21:30:31', ''),
(12, 'Leland', 'Goldner', 'pacocha.amya', 'ssenger@example.com', 'e222c453adb40e0bee38e500480624fc78370506', 2, 'Parisian, Quigley and Gulgowski', '1-885-402-2747x58841', 0, NULL, '', '2018-12-30 15:50:21', '2001-07-13 06:37:08', ''),
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
(50, 'Loma', 'Schaefer', 'gutkowski.barton', 'clemens51@example.com', '4384aef1df5689ca9415988071aecd9adf7c2791', 0, 'Robel-Herzog', '+57(0)4883271617', 0, NULL, '', '1984-04-11 00:57:10', '1981-07-05 22:14:39', ''),
(51, '', '', 'doe', 'doe@gmail.com', '9d9e4f399a585fda43a9750ebfd1e00d', 0, '', NULL, 0, '4b0a48c3c0a19a4d4ba9a0cd3b6147b4', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'doe');

-- --------------------------------------------------------

--
-- Table structure for table `wish_list`
--

CREATE TABLE `wish_list` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `products_id` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD UNIQUE KEY `id` (`id`);

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
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `wish_list`
--
ALTER TABLE `wish_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
