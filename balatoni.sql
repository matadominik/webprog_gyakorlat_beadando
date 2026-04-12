-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2026. Ápr 12. 16:25
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `balatoni`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `hajo`
--

CREATE TABLE `hajo` (
  `az` int(11) NOT NULL,
  `nev` text NOT NULL,
  `tipus` text NOT NULL,
  `tulaz` int(11) DEFAULT NULL,
  `uzemel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `hajo`
--

INSERT INTO `hajo` (`az`, `nev`, `tipus`, `tulaz`, `uzemel`) VALUES
(1, 'Baross Gábor', 'komp', 1, -1),
(2, 'Akali', 'személyhajó', 1, -1),
(3, '101-Z toló-önjáró uszály', 'önjáró uszály', 2, -1),
(4, 'Almádi', 'személyhajó', 1, -1),
(5, 'Aqua Pannonia ', 'személyhajó', 1, -1),
(6, 'Arács', 'személyhajó', 1, -1),
(7, 'Badacsony', 'személyhajó', 1, -1),
(8, 'Balaton', 'személyhajó', 3, -1),
(9, 'Brutus', 'kisgéphajó', NULL, -1),
(10, 'Calypso', 'kisgéphajó', 1, -1),
(11, 'Csiga-Biga', 'kisgéphajó', 4, -1),
(12, 'Csobánc', 'személyhajó', 1, -1),
(13, 'Csongor', 'személyhajó', 1, -1),
(14, 'Echo', 'szolgálati hajó', 2, -1),
(15, 'Ederics', 'személyhajó', 1, -1),
(16, 'Érd', 'szolgálati hajó', 5, -1),
(17, 'Fonyód', 'személyhajó', 1, -1),
(18, 'Füred', 'személyhajó', 1, -1),
(19, 'Györök', 'személyhajó', 1, -1),
(20, 'Hableány', 'személyhajó', 6, -1),
(21, 'Helka', 'személyhajó', 1, -1),
(22, 'Hévíz', 'személyhajó', 1, -1),
(23, 'Izsó', 'szolgálati hajó', 2, -1),
(24, 'Jégmadár', 'szolgálati hajó', 2, -1),
(25, 'Jókai', 'személyhajó', 3, -1),
(26, 'Kelén', 'személyhajó', 1, -1),
(27, 'Keszthely', 'személyhajó', 1, -1),
(28, 'Kisfaludy Sándor', 'komp', 1, -1),
(29, 'Klára', 'személyhajó', 3, -1),
(30, 'Koloska', 'kisgéphajó', NULL, -1),
(31, 'Kossuth Lajos', 'komp', 1, -1),
(32, 'Lelle', 'személyhajó', 1, -1),
(33, 'Scharnebeck ', 'szolgálati hajó', 7, -1),
(34, 'Révfülöp', 'személyhajó', 1, -1),
(35, 'Sió', 'szolgálati hajó', 1, -1),
(36, 'Siófok', 'személyhajó', 1, -1),
(37, 'St Benedek', 'személyhajó', 4, -1),
(38, 'Szántód', 'személyhajó', 1, -1),
(39, 'Széchenyi István', 'komp', 1, -1),
(40, 'Szent Miklós', 'személyhajó', 1, -1),
(41, 'Szikra', 'szolgálati hajó', 8, -1),
(42, 'Tátika', 'személyhajó', 9, -1),
(43, 'Thetis', 'kisgéphajó', 10, -1),
(44, 'Tünde', 'személyhajó', 1, -1),
(45, 'Tündér', 'kisgéphajó', 11, -1),
(46, 'VI-736-Z önjáró tankuszály', 'önjáró uszály', 8, -1),
(47, 'Vízvédelem', 'szolgálati hajó', 8, -1),
(48, 'Z-424 önjáró uszály', 'önjáró uszály', 1, -1),
(49, 'Z-426 önjáró uszály', 'önjáró uszály', 1, -1),
(50, 'Zánka', 'személyhajó', 9, -1),
(51, 'Juditta', 'vitorlás', 10, -1),
(52, 'Katamarán', 'vitorlás', 9, -1),
(53, 'Nemere II.', 'vitorlás', NULL, -1),
(54, 'Öszöd', 'vitorlás', 12, -1),
(55, 'Phoenix', 'vitorlás', 13, -1),
(56, 'Sirocco', 'vitorlás', NULL, -1),
(57, 'Sissy hercegnő', 'vitorlás', 6, -1),
(58, 'Szaturnusz', 'vitorlás', 1, -1),
(59, 'Talizmán', 'vitorlás', 14, -1),
(60, 'Róza', 'vitorlás', 3, -1),
(61, 'Balatonboglár', 'halászhajó', 15, -1),
(62, 'Vonyarc', 'halászhajó', 15, -1),
(63, 'Busa', 'halászhajó', 15, -1),
(64, 'Angolna', 'halászhajó', 15, -1),
(65, '102-Z bárka ', 'uszály', 2, -1),
(66, '442 uszály', 'uszály', 1, -1),
(67, '443 uszály', 'uszály', 1, -1),
(68, '463 uszály', 'uszály', 1, -1),
(69, '465 uszály', 'uszály', 1, -1),
(70, 'Óriás 469 uszály', 'uszály', 2, -1),
(71, '103 uszály', 'uszály', 5, -1),
(72, '107 uszály', 'uszály', NULL, -1),
(73, 'Óriás uszály', 'uszály', 2, -1),
(74, '51 uszály', 'uszály', 1, -1),
(75, 'Góliát', 'uszály', 2, -1),
(76, 'Épvízkör 3', 'uszály', 5, -1),
(77, 'Épvízkör 4', 'uszály', 5, -1),
(78, '211 elevátor ', 'úszó munkagép', 1, -1),
(79, '254 strandhomokozó ', 'úszó munkagép', 1, -1),
(80, '50-II úszódaru ', 'úszó munkagép', 1, -1),
(81, 'Szerhajó', 'úszó munkagép', 1, -1),
(82, 'Radzeer', 'kisgéphajó', NULL, 0),
(83, 'Beloiannisz', 'személyhajó', 1, 0),
(84, 'Gulács', 'személyhajó', 1, 0),
(85, 'Bakony', 'személyhajó', 1, 0),
(86, 'Szárszó', 'személyhajó', 1, 0),
(87, 'Tihany II', 'személyhajó', 1, 0),
(88, 'Földvár', 'személyhajó', 1, 0),
(89, 'Csopak', 'személyhajó', 1, 0),
(90, 'Dörgicse', 'személyhajó', 1, 0),
(91, 'Szemes', 'személyhajó', 1, 0),
(92, 'Kenese', 'személyhajó', 16, 0),
(93, 'Balaton II.', 'személyhajó', 7, 0);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tort`
--

CREATE TABLE `tort` (
  `az` int(11) NOT NULL,
  `hajoaz` int(11) NOT NULL,
  `nev` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `tort`
--

INSERT INTO `tort` (`az`, `hajoaz`, `nev`) VALUES
(1, 23, 'Hajógyár'),
(2, 41, 'FK 316'),
(3, 14, 'Busa'),
(4, 87, 'Morgó'),
(5, 29, 'Mainau'),
(6, 40, 'Balaton I.'),
(7, 56, 'Big Boy'),
(8, 93, 'Prága'),
(9, 28, 'Komp II'),
(10, 85, 'Ercsi'),
(11, 2, 'Megyer'),
(12, 35, 'FK 314'),
(13, 37, 'Biológia'),
(14, 15, 'Horány'),
(15, 24, 'Óbuda'),
(16, 40, 'Kaptan Sevket Iyidere'),
(17, 50, 'Szabadság'),
(18, 84, 'Szentendre'),
(19, 85, 'LI'),
(20, 39, 'Komp IV'),
(21, 84, 'LV'),
(22, 90, 'Dunakeszi'),
(23, 42, 'Szent Miklós'),
(24, 55, 'Galyatető'),
(25, 75, 'Épvízkör 1'),
(26, 41, 'Széchenyi'),
(27, 92, 'Veránka III'),
(28, 31, 'Komp III'),
(29, 15, 'Zebegény'),
(30, 62, 'BHV I.'),
(31, 54, 'Yacht I.'),
(32, 83, 'Balaton');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tulajdonos`
--

CREATE TABLE `tulajdonos` (
  `az` int(11) NOT NULL,
  `nev` text NOT NULL,
  `varos` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `tulajdonos`
--

INSERT INTO `tulajdonos` (`az`, `nev`, `varos`) VALUES
(1, 'Balatoni Hajózási Zrt.', 'Siófok'),
(2, 'Óriás-Line Kft.', 'Siófok'),
(3, '3Hajózási Kft.', 'Balatonfüred'),
(4, 'Egyéni vállalkozó', 'Siófok'),
(5, 'Aqua-Sió Vízépítő Kft.', 'Siófok'),
(6, 'Balatoni Sétahajózási Kft.', 'Keszthely'),
(7, 'Vízirendőrség', 'Siófok'),
(8, 'Közép-dunántúli Környezetvédelmi és Vízügyi Igazgatóság', 'Siófok'),
(9, 'Zánkai GyIC Közhasznú Kft.', 'Zánka'),
(10, 'Pelsoline Hajózási Kft.', 'Gyenesdiás'),
(11, 'Úszóstég Kft.', 'Balatonalmádi'),
(12, 'Nautika Hajózási Kft.', 'Balatonfüred'),
(13, 'Yachtparty Hajózási Kft.', 'Balatonboglár'),
(14, 'T Flotta Hajózási és Idegenforgalmi Szolgáltató Kft.', 'Siófok'),
(15, 'Balatoni Halászati Zrt.', 'Siófok'),
(16, 'Magyar Honvédség Üdülője', 'Balatonkenese');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `hajo`
--
ALTER TABLE `hajo`
  ADD PRIMARY KEY (`az`),
  ADD KEY `fk_hajo_tulajdonos` (`tulaz`);

--
-- A tábla indexei `tort`
--
ALTER TABLE `tort`
  ADD PRIMARY KEY (`az`),
  ADD KEY `fk_tort_hajo` (`hajoaz`);

--
-- A tábla indexei `tulajdonos`
--
ALTER TABLE `tulajdonos`
  ADD PRIMARY KEY (`az`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `tort`
--
ALTER TABLE `tort`
  MODIFY `az` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `hajo`
--
ALTER TABLE `hajo`
  ADD CONSTRAINT `fk_hajo_tulajdonos` FOREIGN KEY (`tulaz`) REFERENCES `tulajdonos` (`az`);

--
-- Megkötések a táblához `tort`
--
ALTER TABLE `tort`
  ADD CONSTRAINT `fk_tort_hajo` FOREIGN KEY (`hajoaz`) REFERENCES `hajo` (`az`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
