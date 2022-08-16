-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 16 Ağu 2022, 15:34:58
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `dernek`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yönetim`
--

CREATE TABLE `yönetim` (
  `DernekAdı` varchar(255) DEFAULT NULL,
  `KullanıcıAdı` char(5) DEFAULT NULL,
  `Şifre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `yönetim`
--

INSERT INTO `yönetim` (`DernekAdı`, `KullanıcıAdı`, `Şifre`) VALUES
('Dernek', 'Admin', '123456');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `üyeler`
--

CREATE TABLE `üyeler` (
  `ÜyeID` int(11) NOT NULL,
  `TC` char(11) NOT NULL,
  `ÜyeAdı` varchar(255) NOT NULL,
  `ÜyeSoyadı` varchar(255) NOT NULL,
  `Ünvanı` varchar(255) DEFAULT NULL,
  `Eposta` varchar(255) DEFAULT NULL,
  `TelNo` int(11) DEFAULT NULL,
  `İl` varchar(255) DEFAULT NULL,
  `İlçe` varchar(255) DEFAULT NULL,
  `Cinsiyet` char(5) DEFAULT NULL,
  `DoğumTarihi` date DEFAULT NULL,
  `DoğumYeri` varchar(255) DEFAULT NULL,
  `KanGrubu` varchar(255) DEFAULT NULL,
  `KayıtTarihi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `üyeler`
--

INSERT INTO `üyeler` (`ÜyeID`, `TC`, `ÜyeAdı`, `ÜyeSoyadı`, `Ünvanı`, `Eposta`, `TelNo`, `İl`, `İlçe`, `Cinsiyet`, `DoğumTarihi`, `DoğumYeri`, `KanGrubu`, `KayıtTarihi`) VALUES
(1, '19273465322', 'Taha', 'Gülboy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `üyeler`
--
ALTER TABLE `üyeler`
  ADD PRIMARY KEY (`ÜyeID`,`TC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
