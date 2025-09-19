-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2025 at 05:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tora_corporation`
--

-- --------------------------------------------------------

--
-- Table structure for table `conversation`
--

CREATE TABLE `conversation` (
  `msg_id` int(11) NOT NULL,
  `sender_unique_id` varchar(50) NOT NULL,
  `receiver_unique_id` varchar(50) NOT NULL,
  `message` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_sent` varchar(200) NOT NULL,
  `og_title` varchar(255) NOT NULL,
  `og_description` text NOT NULL,
  `og_image` varchar(255) NOT NULL,
  `read_mark` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conversation`
--

INSERT INTO `conversation` (`msg_id`, `sender_unique_id`, `receiver_unique_id`, `message`, `image_sent`, `og_title`, `og_description`, `og_image`, `read_mark`) VALUES
(103, '95204', '77018', 'Dis moi plus sur ça https://toracorporation.com/lunettes-715042', '', 'Lunettes • Note: 4.5 ⭐', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, adipisci mollitia aliquam nemo v...', 'https://www.toracorporation.com/uploaded-images/715042_converted_0.jpg', '0'),
(104, '77018', '95204', 'Dis moi plus sur ça https://toracorporation.com/techno-421429', '', 'Techno • Note: 0 ⭐', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, adipisci mollitia aliquam nemo v...', 'https://www.toracorporation.com/uploaded-images/421429_converted_0.jpg', '0'),
(105, '77018', '95204', 'Hey', '', '', '', '', '0'),
(106, '77018', '95204', 'Hello bro', '', '', '', '', '0'),
(107, '95204', '77018', 'how are you?', '', '', '', '', '0'),
(108, '95204', '77018', 'I would like to ask you a question 🙋', '', '', '', '', '0'),
(109, '77018', '26928', 'Dis moi plus sur ça https://toracorporation.com/peruque-hq-662938', '', 'Peruque HQ • Note: 1.5 ⭐', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, adipisci mollitia aliquam nemo v...', 'https://www.toracorporation.com/uploaded-images/662938_converted_0.jpg', '1'),
(110, '95204', '77018', 'are you still there?', '', '', '', '', '0'),
(111, '77018', '95204', 'yes bro I am here', '', '', '', '', '0'),
(112, '77018', '26928', 'Hey', '', '', '', '', '1'),
(113, '95204', '77018', 'good let\'s talk then', '', '', '', '', '0'),
(114, '77018', '95204', 'hey let\'s talk. are you still there?', '', '', '', '', '0'),
(115, '95204', '77018', 'yeah', '', '', '', '', '0'),
(116, '77018', '95204', 'yeah man see this picture', '<img src=\"./uploaded_sent_images/sent_image_437280.jpeg\" alt=\"\" style=\"margin-bottom:5px;\">', '', '', '', '0'),
(117, '77018', '95204', 'and read this message', '', '', '', '', '0'),
(118, '77018', '95204', 'hey', '', '', '', '', '0'),
(119, '77018', '95204', 'and this link as well: https://amtech-co.com', '', 'Amtech technology', 'Commercial & Industrial', 'https://www.amtech-co.com/assets/logo/amtech-icon.jpeg', '0'),
(120, '77018', '95204', 'ok You will read once you\'re ready', '', '', '', '', '0'),
(121, '77018', '95204', 'hello', '', '', '', '', '0'),
(122, '77018', '95204', 'ok got you 🧒', '', '', '', '', '0'),
(123, '77018', '95204', '...', '', '', '', '', '0'),
(124, '77018', '95204', 'hey', '', '', '', '', '0'),
(125, '77018', '95204', 'bro?', '', '', '', '', '0'),
(126, '95204', '77018', 'Bro I\'m sorry for what heppened', '', '', '', '', '0'),
(127, '95204', '77018', 'hey', '', '', '', '', '0'),
(128, '77018', '95204', 'Yo man what\'s up?', '', '', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `imagess`
--

CREATE TABLE `imagess` (
  `id` int(11) NOT NULL,
  `product_unique_id` varchar(100) NOT NULL,
  `seo_link` varchar(100) NOT NULL,
  `image_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `imagess`
--

INSERT INTO `imagess` (`id`, `product_unique_id`, `seo_link`, `image_link`) VALUES
(88, '421429', 'techno-421429', 'uploaded-images/421429_converted_0.jpg'),
(89, '421429', 'techno-421429', 'uploaded-images/421429_converted_1.jpg'),
(90, '421429', 'techno-421429', 'uploaded-images/421429_converted_2.jpg'),
(91, '421429', 'techno-421429', 'uploaded-images/421429_converted_3.jpg'),
(92, '75736', 'lenovo-t480s-75736', 'uploaded-images/75736_converted_0.jpg'),
(93, '75736', 'lenovo-t480s-75736', 'uploaded-images/75736_converted_1.jpg'),
(94, '75736', 'lenovo-t480s-75736', 'uploaded-images/75736_converted_2.jpg'),
(95, '75736', 'lenovo-t480s-75736', 'uploaded-images/75736_converted_3.jpg'),
(100, '427057', 'imprimente-3d-427057', 'uploaded-images/427057_converted_0.jpg'),
(101, '427057', 'imprimente-3d-427057', 'uploaded-images/427057_converted_1.jpg'),
(102, '427057', 'imprimente-3d-427057', 'uploaded-images/427057_converted_2.jpg'),
(103, '427057', 'imprimente-3d-427057', 'uploaded-images/427057_converted_3.jpg'),
(104, '810583', 'chat-810583', 'uploaded-images/810583_converted_0.jpg'),
(105, '810583', 'chat-810583', 'uploaded-images/810583_converted_1.jpg'),
(106, '810583', 'chat-810583', 'uploaded-images/810583_converted_2.jpg'),
(110, '591512', 'poule-591512', 'uploaded-images/591512_converted_0.jpg'),
(112, '522708', 'airforce-nike-522708', 'uploaded-images/522708_converted_0.jpg'),
(113, '522708', 'airforce-nike-522708', 'uploaded-images/522708_converted_1.jpg'),
(114, '522708', 'airforce-nike-522708', 'uploaded-images/522708_converted_2.jpg'),
(115, '522708', 'airforce-nike-522708', 'uploaded-images/522708_converted_3.jpg'),
(116, '171937', 'jodan-old-nike-171937', 'uploaded-images/171937_converted_0.jpg'),
(117, '171937', 'jodan-old-nike-171937', 'uploaded-images/171937_converted_1.jpg'),
(118, '171937', 'jodan-old-nike-171937', 'uploaded-images/171937_converted_2.jpg'),
(158, '399539', '-399539', 'uploaded-images/399539_converted_0.jpg'),
(159, '862854', 'chemise-feminine-862854', 'uploaded-images/862854_converted_0.jpg'),
(160, '845474', 'airpods-845474', 'uploaded-images/845474_converted_0.jpg'),
(162, '902115', 'chemise-pour-homme-haute-qualite-902115', 'uploaded-images/902115_converted_0.jpg'),
(163, '570080', 'chemise-feminine-570080', 'uploaded-images/570080_converted_0.jpg'),
(164, '149456', 'lunettes-149456', 'uploaded-images/149456_converted_0.jpg'),
(165, '715042', 'lunettes-715042', 'uploaded-images/715042_converted_0.jpg'),
(166, '199899', 'peruque-199899', 'uploaded-images/199899_converted_0.jpg'),
(185, '662938', 'peruque-hq-662938', 'uploaded-images/662938_converted_0.jpg'),
(186, '662938', 'peruque-hq-662938', 'uploaded-images/662938_converted_1.jpg'),
(187, '955676', 'cheveux-artificiel-955676', 'uploaded-images/955676_converted_0.jpg'),
(190, '529974', 'groupe-electrogene-529974', 'uploaded-images/529974_converted_0.jpg'),
(191, '739888', 'peruque-739888', 'uploaded-images/739888_converted_0.jpg'),
(192, '364491', 'peroquet-364491', 'uploaded-images/364491_converted_0.jpg'),
(193, '847286', 'complet-pour-enfant-847286', 'uploaded-images/847286_converted_0.jpg'),
(194, '847286', 'complet-pour-enfant-847286', 'uploaded-images/847286_converted_1.jpg'),
(195, '847286', 'complet-pour-enfant-847286', 'uploaded-images/847286_converted_2.jpg'),
(196, '104696', 'pantalon-pour-homme-104696', 'uploaded-images/104696_converted_0.jpg'),
(197, '104696', 'pantalon-pour-homme-104696', 'uploaded-images/104696_converted_1.jpg'),
(198, '104696', 'pantalon-pour-homme-104696', 'uploaded-images/104696_converted_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `marque`
--

CREATE TABLE `marque` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `sous-categorie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marque`
--

INSERT INTO `marque` (`id`, `nom`, `sous-categorie`) VALUES
(1, 'samsung', 'telephone-portable'),
(2, 'apple', 'telephone-portable'),
(3, 'google', 'telephone-portable'),
(4, 'tecno', 'telephone-portable'),
(5, 'sony', 'telephone-portable'),
(7, 'huawei', 'telephone-portable'),
(8, 'itel', 'telephone-portable'),
(9, 'infinix', 'telephone-portable'),
(10, 'oppo', 'telephone-portable'),
(11, 'motorola', 'telephone-portable'),
(13, 'autres', 'telephone-portable'),
(15, 'apple', 'tablettes'),
(16, 'huawei', 'tablettes'),
(17, 'samsung', 'tablettes'),
(18, 'lenovo', 'tablettes'),
(19, 'microsoft', 'tablettes'),
(20, 'amazon', 'tablettes'),
(21, 'xiaomi', 'tablettes'),
(23, 'modio', 'tablettes'),
(24, 'autres', 'tablettes'),
(25, 'apple', 'ordinateurs-et-pc'),
(26, 'lenovo', 'hp'),
(27, 'asus', 'ordinateurs-et-pc'),
(28, 'toshiba', 'ordinateurs-et-pc'),
(29, 'dell', 'ordinateurs-et-pc'),
(30, 'acer', 'ordinateurs-et-pc'),
(31, 'microsoft', 'ordinateurs-et-pc'),
(33, 'samsung', 'ordinateurs-et-pc'),
(34, 'autres', 'ordinateurs-et-pc'),
(35, 'lg', 'equipement-tv-et-dvd'),
(36, 'hisense', 'equipement-tv-et-dvd'),
(37, 'samsung', 'equipement-tv-et-dvd'),
(38, 'sony', 'equipement-tv-et-dvd'),
(39, 'sharp', 'equipement-tv-et-dvd'),
(41, 'panasonic', 'equipement-tv-et-dvd'),
(42, 'autres', 'equipement-tv-et-dvd'),
(43, 'apple', 'equipement-audio-et-musique'),
(44, 'sony', 'equipement-audio-et-musique'),
(45, 'jbl', 'equipement-audio-et-musique'),
(46, 'anker', 'equipement-audio-et-musique'),
(47, 'sonos', 'equipement-audio-et-musique'),
(48, 'yamaha', 'equipement-audio-et-musique'),
(49, 'samsung', 'equipement-audio-et-musique'),
(50, 'araimo', 'equipement-audio-et-musique'),
(52, 'autres', 'equipement-audio-et-musique'),
(53, 'sony', 'camera-photo-et-video'),
(54, 'canon', 'camera-photo-et-video'),
(55, 'nikon', 'camera-photo-et-video'),
(56, 'panasonic', 'camera-photo-et-video'),
(57, 'olympus', 'camera-photo-et-video'),
(58, 'leica', 'camera-photo-et-video'),
(59, 'pentax', 'camera-photo-et-video'),
(60, 'autres', 'camera-photo-et-video'),
(61, 'hp', 'imprimente-et-scanner'),
(62, 'epson', 'imprimente-et-scanner'),
(63, 'canon', 'imprimente-et-scanner'),
(65, 'lexmark', 'imprimente-et-scanner'),
(66, 'kyocera', 'imprimente-et-scanner'),
(67, 'autres', 'imprimente-et-scanner'),
(68, 'hp', 'moniteurs-dordinateur'),
(69, 'apple', 'moniteurs-dordinateur'),
(70, 'dell', 'moniteurs-dordinateur'),
(71, 'lg', 'moniteurs-dordinateur'),
(72, 'acer', 'moniteurs-dordinateur'),
(73, 'asus', 'moniteurs-dordinateur'),
(74, 'autres', 'moniteurs-dordinateur'),
(75, 'dahua', 'securite-et-surveillance'),
(76, 'hikvision', 'securite-et-surveillance'),
(77, 'axis', 'securite-et-surveillance'),
(78, 'Lorex', 'securite-et-surveillance'),
(79, 'reolink', 'securite-et-surveillance'),
(80, 'arlo', 'securite-et-surveillance'),
(81, 'uniview', 'securite-et-surveillance'),
(82, 'nest', 'securite-et-surveillance'),
(83, 'autres', 'securite-et-surveillance'),
(84, 'louis-vuitton', 'sacs'),
(85, 'gucci', 'sacs'),
(86, 'chanel', 'sacs'),
(87, 'prada', 'sacs'),
(88, 'hermes', 'sacs'),
(89, 'autres', 'sacs'),
(90, 'louis-vuitton', 'vetements'),
(91, 'gucci', 'vetements'),
(92, 'chanel', 'vetements'),
(93, 'prada', 'vetements'),
(94, 'nike', 'vetements'),
(95, 'supreme', 'vetements'),
(96, 'adidas', 'vetements'),
(98, 'nike', 'chaussures'),
(99, 'adidas', 'chaussures'),
(100, 'gucci', 'chaussures'),
(101, 'prada', 'chaussures'),
(102, 'reebok', 'chaussures'),
(103, 'balenciaga', 'chaussures'),
(104, 'autres', 'chaussures'),
(105, 'rolex', 'montres'),
(106, 'casio', 'montres'),
(107, 'patek-philippe', 'montres'),
(108, 'cartier', 'montres'),
(109, 'hublot', 'montres'),
(110, 'audemars-pigue', 'montres'),
(111, 'franck-muller', 'montres'),
(113, 'michael-kors', 'montres'),
(114, 'versace', 'montres'),
(115, 'autres', 'montres'),
(116, 'versace', 'vetements'),
(117, 'autres', 'vetements'),
(118, 'mercedes-benz', 'voitures'),
(119, 'bmw', 'voitures'),
(120, 'rolls-royce', 'voitures'),
(121, 'ferrari', 'voitures'),
(122, 'lamborghini', 'voitures'),
(123, 'aston-martin', 'voitures'),
(124, 'toyota', 'voitures'),
(125, 'nissan', 'voitures'),
(126, 'ford', 'voitures'),
(127, 'tesla', 'voitures'),
(128, 'mazda', 'voitures'),
(129, 'autres', 'voitures'),
(130, 'mercedes-benz', 'bus-et-microbus'),
(131, 'scania', 'bus-et-microbus'),
(132, 'volvo', 'bus-et-microbus'),
(133, 'man', 'bus-et-microbus'),
(134, 'fuso', 'bus-et-microbus'),
(135, 'tata', 'bus-et-microbus'),
(136, 'autres', 'bus-et-microbus'),
(137, 'mercedes-benz', 'camions-et-remorquers'),
(138, 'fuso', 'camions-et-remorquers'),
(139, 'scania', 'camions-et-remorquers'),
(140, 'man', 'camions-et-remorquers'),
(141, 'volvo', 'camions-et-remorquers'),
(142, 'isuzu', 'camions-et-remorquers'),
(143, 'toyota', 'camions-et-remorquers'),
(144, 'daihatsu', 'camions-et-remorquers'),
(145, 'kamaz', 'camions-et-remorquers'),
(146, 'actros', 'camions-et-remorquers'),
(147, 'autres', 'camions-et-remorquers'),
(148, 'honda', 'moto-et-scooter'),
(149, 'yamaha', 'moto-et-scooter'),
(150, 'suzuki', 'moto-et-scooter'),
(151, 'bajaj', 'moto-et-scooter'),
(152, 'tvs', 'moto-et-scooter'),
(153, 'hero', 'moto-et-scooter'),
(154, 'haojue', 'moto-et-scooter'),
(155, 'autres', 'moto-et-scooter'),
(156, 'toyota', 'pieces-et-accesoire-du-vehicule'),
(157, 'nissan', 'pieces-et-accesoire-du-vehicule'),
(158, 'bmw', 'pieces-et-accesoire-du-vehicule'),
(159, 'mercedes-benz', 'pieces-et-accesoire-du-vehicule'),
(160, 'fuso', 'pieces-et-accesoire-du-vehicule'),
(161, 'daihatsu', 'pieces-et-accesoire-du-vehicule'),
(162, 'autres', 'pieces-et-accesoire-du-vehicule');

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(100) NOT NULL,
  `titre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_number` varchar(100) NOT NULL,
  `sous_categorie` varchar(100) NOT NULL,
  `prix` varchar(100) NOT NULL,
  `nom_de_vues` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `etat` varchar(100) NOT NULL,
  `duree` timestamp NOT NULL DEFAULT current_timestamp(),
  `description` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivary` varchar(100) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `currency` varchar(20) NOT NULL,
  `promotion` varchar(100) NOT NULL,
  `seo_link` varchar(1000) NOT NULL,
  `user_unique_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id`, `unique_id`, `titre`, `stock_number`, `sous_categorie`, `prix`, `nom_de_vues`, `location`, `etat`, `duree`, `description`, `delivary`, `categorie`, `currency`, `promotion`, `seo_link`, `user_unique_id`) VALUES
(36, '421429', 'Techno', '2300', 'telephone-portable', '120', '8', 'Goma', 'Nouveau', '2025-06-24 20:03:32', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, adipisci mollitia aliquam nemo voluptas perferendis earum? Quod aspernatur nostrum incidunt quo perferendis cumque aperiam, sint provident facilis quos, earum tenetur?', 'Goma', 'telephone_tablettes', 'USD', 'disabled', 'techno-421429', '95204'),
(37, '75736', 'Lenovo T480s', '5600', 'ordinateurs-et-pc', '350', '4', 'Goma', 'Nouveau', '2025-06-24 20:06:11', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, adipisci mollitia aliquam nemo voluptas perferendis earum? Quod aspernatur nostrum incidunt quo perferendis cumque aperiam, sint provident facilis quos, earum tenetur?', 'Toute l&#039;Afrique', 'electronique', 'USD', 'disabled', 'lenovo-t480s-75736', '95204'),
(39, '427057', 'Imprimente 3D', '350', 'equipements-dimpression', '850', '9', 'Goma', 'Nouveau', '2025-06-24 20:18:07', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, adipisci mollitia aliquam nemo voluptas perferendis earum? Quod aspernatur nostrum incidunt quo perferendis cumque aperiam, sint provident facilis quos, earum tenetur?', 'Toute l&#039;Afrique', 'equipements', 'USD', 'disabled', 'imprimente-3d-427057', '77018'),
(40, '810583', 'chat', '30', 'chats-et-chatons', '5', '15', 'Goma', 'Occasion – Comme neuf', '2025-06-24 20:37:00', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, adipisci mollitia aliquam nemo voluptas perferendis earum? Quod aspernatur nostrum incidunt quo perferendis cumque aperiam, sint provident facilis quos, earum tenetur?', 'Goma', 'animaux', 'USD', 'disabled', 'chat-810583', '77018'),
(42, '591512', 'Poule', '200', 'betails-et-volaille', '15', '3', 'Bukavu', 'Nouveau', '2025-06-25 15:31:56', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, adipisci mollitia aliquam nemo voluptas perferendis earum? Quod aspernatur nostrum incidunt quo perferendis cumque aperiam, sint provident facilis quos, earum tenetur?', 'Est RDC', 'agriculture_alimentation', 'USD', 'disabled', 'poule-591512', '77018'),
(44, '522708', 'AirForce (Nike)', '5700', 'chaussures', '10', '1280', 'Goma', 'Nouveau', '2025-06-25 16:03:01', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, adipisci mollitia aliquam nemo voluptas perferendis earum? Quod aspernatur nostrum incidunt quo perferendis cumque aperiam, sint provident facilis quos, earum tenetur?', 'Est Afrique', 'mode_habillement', 'USD', 'Enabled', 'airforce-nike-522708', '77018'),
(45, '171937', 'Jodan Old (Nike)', '5700', 'chaussures', '10', '8', 'Goma', 'Nouveau', '2025-06-25 19:01:11', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, adipisci mollitia aliquam nemo voluptas perferendis earum? Quod aspernatur nostrum incidunt quo perferendis cumque aperiam, sint provident facilis quos, earum tenetur?', 'Toute la RDC', 'mode_habillement', 'USD', 'disabled', 'jodan-old-nike-171937', '77018'),
(65, '399539', 'Haut talon', '200', 'chaussures', '25', '216', 'Goma', 'Nouveau', '2025-06-26 12:52:56', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, adipisci mollitia aliquam nemo voluptas perferendis earum? Quod aspernatur nostrum incidunt quo perferendis cumque aperiam, sint provident facilis quos, earum tenetur?', 'Toute la RDC', 'mode_habillement', 'USD', 'Enabled', '-399539', '77018'),
(66, '862854', 'chemise feminine', '200', 'vetements', '10', '10', 'Goma', 'Nouveau', '2025-06-26 12:58:42', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, adipisci mollitia aliquam nemo voluptas perferendis earum? Quod aspernatur nostrum incidunt quo perferendis cumque aperiam, sint provident facilis quos, earum tenetur?', 'Est RDC', 'mode_habillement', 'USD', 'disabled', 'chemise-feminine-862854', '77018'),
(67, '845474', 'AirPods', '1', 'montre-intelligente-et-traqueurs', '4', '2', 'Goma', 'Occasion – Bon état', '2025-06-26 13:01:09', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, adipisci mollitia aliquam nemo voluptas perferendis earum? Quod aspernatur nostrum incidunt quo perferendis cumque aperiam, sint provident facilis quos, earum tenetur?', 'Goma', 'telephone_tablettes', 'USD', 'disabled', 'airpods-845474', '77018'),
(69, '902115', 'Chemise pour Homme', '1000', 'vetements', '15', '13', 'Goma', 'Nouveau', '2025-06-26 13:14:45', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, adipisci mollitia aliquam nemo voluptas perferendis earum? Quod aspernatur nostrum incidunt quo perferendis cumque aperiam, sint provident facilis quos, earum tenetur?', 'Toute la RDC', 'mode_habillement', 'USD', 'disabled', 'chemise-pour-homme-haute-qualite-902115', '95204'),
(70, '570080', 'chemise feminine', '50', 'vetements', '2', '2', 'Goma', 'Occasion – Comme neuf', '2025-06-26 16:37:06', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, adipisci mollitia aliquam nemo voluptas perferendis earum? Quod aspernatur nostrum incidunt quo perferendis cumque aperiam, sint provident facilis quos, earum tenetur?', 'Goma', 'mode_habillement', 'USD', 'disabled', 'chemise-feminine-570080', '77018'),
(71, '149456', 'Lunettes', '1700', 'vetements-et-accesoires', '35', '3', 'Goma', 'Nouveau', '2025-06-26 18:58:27', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, adipisci mollitia aliquam nemo voluptas perferendis earum? Quod aspernatur nostrum incidunt quo perferendis cumque aperiam, sint provident facilis quos, earum tenetur?', 'Toute la RDC', 'mode_habillement', 'USD', 'disabled', 'lunettes-149456', '77018'),
(72, '715042', 'Lunettes', '1700', 'vetements-et-accesoires', '80', '109', 'Goma', 'Nouveau', '2025-06-26 19:01:02', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, adipisci mollitia aliquam nemo voluptas perferendis earum? Quod aspernatur nostrum incidunt quo perferendis cumque aperiam, sint provident facilis quos, earum tenetur?', 'Est Afrique', 'mode_habillement', 'USD', 'Enabled', 'lunettes-715042', '77018'),
(73, '199899', 'Peruque', '1700', 'beaute-de-cheveux', '25', '11', 'Goma', 'Nouveau', '2025-06-26 20:35:01', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, adipisci mollitia aliquam nemo voluptas perferendis earum? Quod aspernatur nostrum incidunt quo perferendis cumque aperiam, sint provident facilis quos, earum tenetur?', 'Goma-Bukavu', 'sante_beaute', 'USD', 'disabled', 'peruque-199899', '26928'),
(83, '662938', 'Peruque HQ', '2345', 'beaute-de-cheveux', '85', '46', 'Kampala', 'Occasion – Usé', '2025-06-26 22:44:01', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, adipisci mollitia aliquam nemo voluptas perferendis earum? Quod aspernatur nostrum incidunt quo perferendis cumque aperiam, sint provident facilis quos, earum tenetur?', 'Toute l&#039;Afrique', 'sante_beaute', 'USD', 'Enabled', 'peruque-hq-662938', '26928'),
(84, '955676', 'Cheveux artificiel', '45', 'beaute-de-cheveux', '20', '5', 'Goma', 'Nouveau', '2025-06-26 23:25:28', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, adipisci mollitia aliquam nemo voluptas perferendis earum? Quod aspernatur nostrum incidunt quo perferendis cumque aperiam, sint provident facilis quos, earum tenetur?', 'Est RDC', 'sante_beaute', 'USD', 'disabled', 'cheveux-artificiel-955676', '26928'),
(86, '529974', 'Groupe électrogene', '52', 'equipements-d&#039;electricite', '400', '2', 'Goma', 'Nouveau', '2025-07-18 08:00:51', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit error dicta illo corrupti commodi dolor quisquam perspiciatis modi quia voluptatum? Illo totam quis quibusdam temporibus voluptate. Placeat provident id molestias?', 'Goma-Bukavu', 'equipements', 'USD', 'disabled', 'groupe-electrogene-529974', '77018'),
(87, '739888', 'Peruque', '2300', 'beaute-de-cheveux', '25', '24', 'Goma', 'Nouveau', '2025-07-24 15:55:35', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores voluptas tempora odio, id voluptates nisi. Totam non consequatur sunt quasi possimus. Aliquam amet corporis dicta reiciendis similique, doloribus enim architecto.', 'Est RDC', 'sante_beaute', 'USD', 'disabled', 'peruque-739888', '77018'),
(88, '364491', 'peroquet', '20', 'oiseaux', '25', '2', 'Goma', 'Occasion – Bon état', '2025-07-28 10:57:27', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam adipisci neque nihil commodi odio in maiores illo libero quae nisi, iure tempora pariatur, expedita ratione maxime iusto culpa explicabo magni!', 'Goma-Bukavu', 'animaux', 'USD', 'disabled', 'peroquet-364491', '77018'),
(89, '847286', 'Complet pour enfant', '2000', 'vetement-pour-enfant', '25', '2', 'goma', 'Occasion – Usé', '2025-08-02 18:26:02', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio earum ipsam soluta unde id dolores quibusdam debitis impedit tempora doloribus nulla autem optio quam nemo, suscipit laborum totam corporis ipsa.', 'Est Afrique', 'bebe_enfants', 'USD', 'disabled', 'complet-pour-enfant-847286', '77018'),
(90, '104696', 'Pantalon pour Homme', '512', 'vetements', '15', '6', 'Kinshasa', 'Nouveau', '2025-08-02 20:02:52', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam tenetur, sapiente ullam obcaecati omnis, alias debitis quod veritatis repudiandae dolore animi vel at? Iure rem nostrum, quisquam provident labore optio!', 'Toute la RDC', 'mode_habillement', 'USD', 'disabled', 'pantalon-pour-homme-104696', '77018');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `user_unique_id` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_number` varchar(100) NOT NULL,
  `ratings` varchar(10) NOT NULL,
  `comment` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_image` varchar(1000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `product_seo_link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `user_unique_id`, `user_name`, `user_number`, `ratings`, `comment`, `user_image`, `time`, `product_seo_link`) VALUES
(1, '95204', 'Audrey Mulan', '0972936793', '5', 'Bon produit vraiment!', './', '2025-06-26 14:27:27', '-399539'),
(2, '95204', 'Audrey Mulan', '0972936793', '4', 'Jolie chose!', './', '2025-06-26 14:30:19', '-399539'),
(3, '95204', 'Audrey Mulan', '0972936793', '5', 'Bon', './', '2025-06-26 14:32:20', '-399539'),
(4, '95204', 'Audrey Mulan', '0972936793', '5', 'Bonne chose vraiment😋! ', './', '2025-06-26 14:35:36', '-399539'),
(5, '95204', 'Audrey Mulan', '0972936793', '3', 'J&#039;aime le produit mais il ya à ameliorer 👐 ', './', '2025-06-26 15:35:21', '-399539'),
(6, '95204', 'Audrey Mulan', '0972936793', '3', 'bien', './', '2025-06-26 15:48:28', 'chemise-pour-homme-haute-qualite-902115'),
(7, '95204', 'Audrey Mulan', '0972936793', '2', 'pas mal', './', '2025-06-26 16:16:50', 'airforce-nike-522708'),
(8, '95204', 'Audrey Mulan', '0972936793', '1', 'bon çava', './', '2025-06-26 16:17:06', 'airforce-nike-522708'),
(9, '95204', 'Audrey Mulan', '0972936793', '3', 'bon soulier', './', '2025-06-26 16:17:56', 'chausure-pour-femme-235720'),
(10, '95204', 'Audrey Mulan', '0972936793', '2', 'j&#039;aime ça!', './', '2025-06-26 16:18:25', 'chausure-pour-femme-235720'),
(11, '77018', 'audrey milan', '9777777777', '5', 'J&#039;aime vraiment cette chemise. c&#039;est cool 😎 ', './', '2025-06-26 16:25:26', 'chemise-feminine-862854'),
(12, '77018', 'audrey milan', '9777777777', '5', 'très bon produit 😊 ', './', '2025-06-26 18:03:38', 'airforce-nike-522708'),
(13, '77018', 'audrey milan', '9777777777', '4', 'Très bon produit vraiment', './', '2025-06-26 19:02:26', 'lunettes-715042'),
(14, '77018', 'audrey milan', '9777777777', '5', 'J&#039;apprecie ça', './', '2025-06-26 19:02:45', 'lunettes-715042'),
(15, '77018', 'audrey milan', '9777777777', '4', 'très bien. j&#039;aime 😍 ', './', '2025-06-26 19:03:10', 'lunettes-715042'),
(16, '77018', 'audrey milan', '9777777777', '5', 'magnifique', './', '2025-06-26 19:03:42', 'lunettes-715042'),
(17, '77018', 'audrey milan', '9777777777', '5', 'Bonne chose. 👏 ', './', '2025-06-26 19:04:37', 'lunettes-715042'),
(18, '77018', 'audrey milan', '9777777777', '5', 'Bonne qualité. c&#039;est original. 👍 ', './', '2025-06-26 19:08:53', 'lunettes-715042'),
(19, '77018', 'audrey milan', '9777777777', '5', 'Bonne marchandise', './', '2025-06-26 19:10:47', 'lunettes-715042'),
(20, '77018', 'audrey milan', '9777777777', '5', '🎉 J&#039;aime trop. c&#039;est top!', './', '2025-06-26 19:12:16', 'lunettes-715042'),
(21, '77018', 'audrey milan', '9777777777', '4', 'C&#039;est top bon 😋 ', './', '2025-06-26 19:13:01', 'lunettes-715042'),
(22, '77018', 'audrey milan', '9777777777', '3', 'C&#039;est cool 😎 ', './', '2025-06-26 19:15:47', '-399539'),
(23, '77018', 'audrey milan', '9777777777', '3', 'Bien!', './', '2025-06-26 19:16:14', '-399539'),
(24, '77018', 'audrey milan', '9777777777', '3', 'J&#039;aime quand-même ', './', '2025-06-26 19:16:41', '-399539'),
(25, '77018', 'audrey milan', '9777777777', '2', 'Pas trop vraiment', './', '2025-06-26 19:17:06', '-399539'),
(26, '26928', 'Audrey Mirindi', '243977776716', '4', 'C&#039;est bon 😋 ', './', '2025-06-26 20:35:50', 'peruque-199899'),
(27, '26928', 'Audrey Mirindi', '243977776716', '3', 'C&#039;est Cool 😎 🎉 ', './', '2025-06-26 20:36:18', 'peruque-199899'),
(28, '26928', 'Audrey Mirindi', '243977776716', '2', 'moyennement bien', './', '2025-06-26 23:08:19', 'peruque-hq-662938'),
(29, '26928', 'Audrey Mirindi', '243977776716', '1', 'pas du tout satisfiat 😌 ', './', '2025-06-26 23:08:41', 'peruque-hq-662938'),
(30, '26928', 'Audrey Mirindi', '243977776716', '3', 'Bon produit! 😋 ', './', '2025-07-02 18:03:31', 'chat-810583'),
(31, '77018', 'audrey milan', '243977776716', '4', 'Bon produit. je l&#039;aime 😍 ', './', '2025-07-03 09:07:58', 'imprimente-3d-427057'),
(32, '77018', 'audrey milan', '243977776716', '2', 'Pas trop meilleur!', './', '2025-07-10 11:20:46', 'chat-810583'),
(33, '77018', 'audrey milan', '243977776716', '1', 'Je n&#039;aime pas du tout 😡 ', './', '2025-07-10 11:22:18', 'chat-810583'),
(34, '77018', 'audrey milan', '243977776716', '3', 'J&#039;aime un peu', './', '2025-07-10 11:24:15', 'chat-810583'),
(35, '77018', 'audrey milan', '243977776716', '4', 'Bon 😋 ', './', '2025-07-10 12:30:44', 'audrey-757484'),
(36, '77018', 'audrey milan', '243977776716', '4', 'C&#039;est vraiment j&#039;iniale!🎊 ', './', '2025-07-28 19:47:38', 'airforce-nike-522708'),
(37, '77018', 'audrey milan', '243977776716', '2', 'Bon ça peut aller 😎 ', './', '2025-07-28 19:50:31', 'airforce-nike-522708'),
(38, '77018', 'audrey milan', '243977776716', '1', 'ça ne va même pas!', './', '2025-07-28 19:51:21', 'airforce-nike-522708'),
(39, '77018', 'audrey milan', '243977776716', '3', 'Bon produit!', './', '2025-08-08 21:22:18', 'airforce-nike-522708');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `id` int(11) NOT NULL,
  `user_unique_id` varchar(100) NOT NULL,
  `user_phone` varchar(100) NOT NULL,
  `contact_phone` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_image` varchar(1000) NOT NULL,
  `user_category` varchar(100) NOT NULL,
  `invitation_code` varchar(100) NOT NULL,
  `trial` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`id`, `user_unique_id`, `user_phone`, `contact_phone`, `user_email`, `user_name`, `user_password`, `user_image`, `user_category`, `invitation_code`, `trial`) VALUES
(9, '95204', '243972936793', '243972936793', 'mulan@amtech-co.com', 'Audrey Mulan', '$2y$10$75wurbUmGw2w4yyBDUopFu320forlbAlMba5FS2GUbV5PCMhJjw0u', './', 'vendeur', '0', 'free'),
(16, '77018', '243977776716', '243977776716', 'milan@amtech-co.com', 'audrey milan', '$2y$10$xV3pMOMjksXP1pn8pd9LxeYQopZTNn8TV6ifuHeRlRJP7vTUfKNlm', './', 'vendeur', '0', 'pro'),
(19, '63763', '243972936793', '243972936793', 'aurelie@amtech-co.com', 'aurelie ng', '$2y$10$ypvWp0HEr5CxBazgjixy1.szX.PDld7.//ni7AXLHD5OwyOaF/NlK', './', 'acheteur', '0', 'free'),
(20, '26928', '243977776716', '243977776716', 'audrey@amtech-co.com', 'Audrey Mirindi', '$2y$10$pTLSr7fkKdWTMmM1J4kZfeVph00rbMYNTZoZV8EL/NUH3XVl3k4jG', './', 'vendeur', '0', 'free'),
(21, '60634', '0972936793', '', 'johndoe@gmail.com', 'John doe', '$2y$10$qlD36bSmkMoaByvS4Eom6edKAKVDexfDD58x3Ky/jPa70Dp9jsouO', './', 'acheteur', '0', 'free'),
(22, '95390', '0972936793', '0972936793', 'contact@amtech-co.com', 'Audrey Mirindi', '$2y$10$CAFZeT84ozjSnXZyKaMGr.Jrnky1nz0l4OoH1VGDyqVD2l50RCpGW', './', 'acheteur', '0', 'free');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conversation`
--
ALTER TABLE `conversation`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `imagess`
--
ALTER TABLE `imagess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conversation`
--
ALTER TABLE `conversation`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `imagess`
--
ALTER TABLE `imagess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `marque`
--
ALTER TABLE `marque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
