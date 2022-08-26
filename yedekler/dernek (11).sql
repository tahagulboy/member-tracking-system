-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 Ağu 2022, 08:19:39
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
-- Tablo için tablo yapısı `aidatlar`
--

CREATE TABLE `aidatlar` (
  `AidatID` int(11) NOT NULL,
  `AidatMiktarı` int(11) NOT NULL,
  `ÖdemeTarihi` date NOT NULL,
  `ÖdenmeDurumu` varchar(20) NOT NULL,
  `ÜyeID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `aidatlar`
--

INSERT INTO `aidatlar` (`AidatID`, `AidatMiktarı`, `ÖdemeTarihi`, `ÖdenmeDurumu`, `ÜyeID`) VALUES
(1, 600, '2022-09-30', 'Ödendi', 1),
(17, 5087, '0000-00-00', 'Ödenmedi', 35);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bağışlar`
--

CREATE TABLE `bağışlar` (
  `BağışID` int(11) NOT NULL,
  `BağışMiktarı` int(11) DEFAULT NULL,
  `BağışTarihi` date DEFAULT NULL,
  `ÜyeID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `bağışlar`
--

INSERT INTO `bağışlar` (`BağışID`, `BağışMiktarı`, `BağışTarihi`, `ÜyeID`) VALUES
(3, 5000, '2022-08-23', 35),
(4, 100000, '2022-08-23', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `borçlar`
--

CREATE TABLE `borçlar` (
  `BorçID` int(11) NOT NULL,
  `BorçMiktarı` int(11) NOT NULL,
  `ÖdemeTarihi` date NOT NULL,
  `ÖdenmeDurumu` varchar(50) NOT NULL,
  `BorçVeren` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `borçlar`
--

INSERT INTO `borçlar` (`BorçID`, `BorçMiktarı`, `ÖdemeTarihi`, `ÖdenmeDurumu`, `BorçVeren`) VALUES
(4, 20000, '2023-01-30', 'Ödendi', 'Örnek Kişisi'),
(5, 10000, '2023-10-10', 'Ödendi', 'Örnek Bankası'),
(8, 50000, '2022-08-23', 'Ödenmedi', 'Örnek Vakfı');

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
  `ÜyeTC` char(11) NOT NULL,
  `ÜyeAdı` varchar(50) NOT NULL,
  `ÜyeSoyadı` varchar(50) NOT NULL,
  `Eposta` varchar(100) DEFAULT NULL,
  `TelNo` char(11) DEFAULT NULL,
  `İl` varchar(30) DEFAULT NULL,
  `İlçe` varchar(30) DEFAULT NULL,
  `DoğumTarihi` date DEFAULT NULL,
  `KanGrubu` varchar(10) DEFAULT NULL,
  `Meslek` varchar(50) DEFAULT NULL,
  `Adres` varchar(255) DEFAULT NULL,
  `BabaAdı` varchar(100) DEFAULT NULL,
  `AnneAdı` varchar(100) DEFAULT NULL,
  `DoğumYeri` varchar(100) DEFAULT NULL,
  `Grubu` varchar(100) DEFAULT NULL,
  `Görevi` varchar(100) DEFAULT NULL,
  `Cinsiyet` varchar(10) DEFAULT NULL,
  `Boy` int(11) DEFAULT NULL,
  `Kilo` int(11) DEFAULT NULL,
  `MedeniHali` varchar(20) DEFAULT NULL,
  `AskerlikDurumu` varchar(250) DEFAULT NULL,
  `WebAdresi` varchar(200) DEFAULT NULL,
  `ÇalıştığıYer` varchar(250) DEFAULT NULL,
  `ÖğrenimDurumu` varchar(100) DEFAULT NULL,
  `SeriNo` varchar(9) DEFAULT NULL,
  `ÜyeŞifresi` varchar(255) DEFAULT NULL,
  `ÜyeKayıtTarihi` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `üyeler`
--

INSERT INTO `üyeler` (`ÜyeID`, `ÜyeTC`, `ÜyeAdı`, `ÜyeSoyadı`, `Eposta`, `TelNo`, `İl`, `İlçe`, `DoğumTarihi`, `KanGrubu`, `Meslek`, `Adres`, `BabaAdı`, `AnneAdı`, `DoğumYeri`, `Grubu`, `Görevi`, `Cinsiyet`, `Boy`, `Kilo`, `MedeniHali`, `AskerlikDurumu`, `WebAdresi`, `ÇalıştığıYer`, `ÖğrenimDurumu`, `SeriNo`, `ÜyeŞifresi`, `ÜyeKayıtTarihi`) VALUES
(1, '2132132132', 'Taha', 'Gülboy', 'taha@dernek.com', '05305505050', 'İstanbul', 'Eyüp', '2003-07-16', 'A+', '', 'lorem ipsum sk. daire no: 7', '', '', 'Bayrampaşa', 'Üyeler', 'Dernek Başkanı', 'Erkek', 180, 150, 'Bekar', 'Yapmadı', 'taha.com', 'test yazılım', 'Üniversite Mezunu', '32132121', '213213', '2022-08-25 15:46:00'),
(35, '20531322954', 'Ali', 'Rıza', 'aliriza@gmail.com', '05305505050', 'İstanbul', 'Etiler', '1995-02-16', 'A-', 'Pazarlamacı', 'Yendmds Mahallesi NDSFNSD Sokak no: 132', 'Mehmet', 'Ayşe', 'Zeytinburnu', 'Üyeler', 'Üye', 'Erkek', 183, 86, 'Evli', 'Yaptı', 'alirıza.net', 'test A.Ş.', 'Üniversite Mezunu', '83213DFGE', '2132132', '2022-08-25 14:25:00'),
(44, '32482984782', 'Deneme', 'Deneme', 'deneme@deneme.com', '05304046060', 'İstanbul', 'Esenler', '1995-02-20', '0+', 'Tesisatçı', 'Deneme Mahallesi, Deneme Sokak, No: 123', 'Deneme', 'Deneme', 'Gaziosmanpaşa', 'Üyeler', 'Üye', 'Erkek', 176, 70, 'Evli', 'Yaptı', 'deneme.com', 'Serbest', 'Lise Mezunu', '3MN4B32MN', '12345678', '2022-08-25 14:25:00'),
(48, '12345678909', 'Ahmet', 'Mumtaz', 'Ahmetmumta@xn--gmal-nza.com', '05435436978', 'Aydın', '', '2000-02-11', 'B-', '', '', 'Mumtaz', 'Engın', 'Trakya', 'NULL', 'NULL', 'Kadın', 192, 100, 'Dul', 'Yapmadı', '', '', 'Üniversite Mezunu', '0707', 'Cıkıtamuz', '2022-08-25 15:51:00');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `aidatlar`
--
ALTER TABLE `aidatlar`
  ADD PRIMARY KEY (`AidatID`),
  ADD KEY `ÜyeID` (`ÜyeID`);

--
-- Tablo için indeksler `bağışlar`
--
ALTER TABLE `bağışlar`
  ADD PRIMARY KEY (`BağışID`),
  ADD KEY `ÜyeID` (`ÜyeID`);

--
-- Tablo için indeksler `borçlar`
--
ALTER TABLE `borçlar`
  ADD PRIMARY KEY (`BorçID`);

--
-- Tablo için indeksler `üyeler`
--
ALTER TABLE `üyeler`
  ADD PRIMARY KEY (`ÜyeID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `aidatlar`
--
ALTER TABLE `aidatlar`
  MODIFY `AidatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Tablo için AUTO_INCREMENT değeri `bağışlar`
--
ALTER TABLE `bağışlar`
  MODIFY `BağışID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `borçlar`
--
ALTER TABLE `borçlar`
  MODIFY `BorçID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `üyeler`
--
ALTER TABLE `üyeler`
  MODIFY `ÜyeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `aidatlar`
--
ALTER TABLE `aidatlar`
  ADD CONSTRAINT `aidatlar_ibfk_1` FOREIGN KEY (`ÜyeID`) REFERENCES `üyeler` (`ÜyeID`);

--
-- Tablo kısıtlamaları `bağışlar`
--
ALTER TABLE `bağışlar`
  ADD CONSTRAINT `bağışlar_ibfk_1` FOREIGN KEY (`ÜyeID`) REFERENCES `üyeler` (`ÜyeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
