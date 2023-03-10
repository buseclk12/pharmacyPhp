-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:8889
-- Üretim Zamanı: 01 Oca 2023, 17:33:14
-- Sunucu sürümü: 5.7.34
-- PHP Sürümü: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `pharmacy`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilac`
--

CREATE TABLE `ilac` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL,
  `price` int(11) NOT NULL,
  `old_price` int(11) NOT NULL,
  `description` varchar(350) NOT NULL,
  `new` int(11) NOT NULL,
  `sale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ilac`
--

INSERT INTO `ilac` (`id`, `name`, `image`, `price`, `old_price`, `description`, `new`, `sale`) VALUES
(1, 'Arveles', 'arveles.png', 20, 30, 'Arveles is used to treat pain, fever and inflammation.', 1, 0),
(2, 'Pharmaton', 'pharmaton.png', 30, 25, 'During temporary periods of exhaustion, the daily intake of vitamins and minerals (and Ginseng G115) from one capsule of Pharmaton Capsules has been clinically proven to provide relief from tiredness and lack of vitality.', 0, 1),
(3, 'Augmentin', 'augmentin.png', 50, 55, 'Augmentin is commonly used in adults and children to treat infections of the urinary tract, respiratory tract, ear, sinuses, and skin. ', 1, 0),
(4, 'Apranax', 'apranax.png', 25, 20, 'It reduces swelling, inflammation and pain, and is used for the relief of mild to moderately severe pain accompanied by inflammation.', 0, 1),
(5, 'Majezik', 'med5.png', 25, 20, 'Majezik exhibits antiinflammatory, analgesic, and antipyretic activities.', 1, 0),
(6, 'Amoklavin', 'amoklavin.png', 15, 10, 'It\'s used in adults and children to treat: middle ear and sinus infections. throat or lung respiratory tract infections. urinary tract infections', 1, 0),
(7, 'Supradyn', 'Supradyn.jpeg', 10, 15, 'Supradyn Multivitamin Tablets help in building a strong immune system, aiding proper blood circulation level in your body and in controlling the greying of hair, anaemia, upset stomach and infections.', 0, 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ilac`
--
ALTER TABLE `ilac`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
