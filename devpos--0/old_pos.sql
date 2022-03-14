-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 08:53 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('1r0cvg18qvsb78dknlv75lg1c60fcj9h', '::1', 1607440565, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373434303536353b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('2ej9ogsf7fh54gf7caf4c9vd1rvq61rf', '::1', 1608061902, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383036313831323b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('2neej5gs40mu9isb3hocq9m3jeqpt79t', '::1', 1607442612, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373434323631323b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('2vm3c08stbflk51cie7on9kcpl6kfr5f', '::1', 1607630649, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373633303634393b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('3nltsc0n9375bftmcv0dlf29bhg1svq7', '::1', 1606935263, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363933353236333b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('4isrpmq8jdu7iv3kpjk6gdi008tggl4h', '::1', 1607719121, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373731393131343b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('53ad5u347a27ihfm7j2627nfv480rkam', '::1', 1607609907, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373630393831323b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('5gpc6tg4gpar3jp3s7hhlqieenlk0gia', '::1', 1606933822, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363933333832323b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('63v9spbbbgvauboegq066tu3r8kt4eec', '::1', 1606934167, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363933343136373b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('722530loq37hds89vjjnk1ch2114ligq', '::1', 1607973780, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373937333738303b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('7qreji6m31llqbv7abku007tdss59m6f', '::1', 1607018358, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373031383335383b),
('7v1708uimjge2dejabjtuumj46r7n5bm', '::1', 1607442074, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373434323037343b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('88nkvcemc1r5mu7nahtgckdt0tuvciki', '::1', 1606855047, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363835343830303b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('a7qtl3l2j934v4js33ucj5irkt7rs39f', '::1', 1607974128, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373937333738303b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('cmg3op851n12h10en26a9t0fd0l3vjvk', '::1', 1606933472, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363933333437323b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('ddu0f7vdsff963co1kf6rhc8h39jihgv', '::1', 1607540025, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373534303032353b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('dvj5fdshsbgh3vno0um273o46d44sb7i', '::1', 1607970431, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373937303433313b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('ebhr6nqmbq25r5opim954hergdj1a4p9', '::1', 1607543008, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373534323937353b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('equgle0ivaietg6h4cshsjpum6337dsr', '::1', 1607440254, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373434303235343b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('eubdggagpc27ln13jknlvh640fq9svun', '::1', 1606854800, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363835343830303b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('f7ntbm5dklfgp67q9go2i8k7hnq3bdsv', '::1', 1607449615, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373434393631353b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('g7p32ht7j3n16vd821jo1lhn4si969al', '127.0.0.1', 1607630193, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373633303139333b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('gijsicln6cn1niqdf1557lcmqqamolf7', '::1', 1606932811, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363933323831313b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('h31n2pda04moap9o66g2objrp7t9q30c', '::1', 1607973381, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373937333338313b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('h7g13de6qq1409qh76lcvq8jevf2ij96', '::1', 1607451440, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373435313434303b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('i0c357foaj0hhmhk9hglttflm66v6b1l', '::1', 1607540769, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373534303736393b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('i7g292ucf6onpg46lmsf5dn793cj8c4c', '::1', 1607450825, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373435303832353b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('ieo5fhp1la9l9ap9fg6sq9sld2jb6o7o', '::1', 1608061812, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383036313831323b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('ihu96kqapn1hoik4ar3pjrrphvivi8al', '::1', 1607630703, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373633303634393b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('kg10c55a8g0qk50j5njhmh2llga1qj14', '::1', 1607542975, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373534323937353b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('kibop433ft9ig3n34i40315ah16ta8g0', '::1', 1607439170, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373433393137303b),
('knb83c5hj55u7dk23nmpputmaa93c9h1', '::1', 1606335337, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363333353333373b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('kv38uddi2ljn8lpefr5pgav4eoq8qd47', '::1', 1607440876, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373434303837363b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('l0525ce4ge9fedj1so6vnnf6qcfi3sss', '::1', 1607452281, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373435323237393b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('m6g20fc67c02i7jrm6vct14kv07gt5fm', '::1', 1606935863, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363933353836333b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('ma1f5tkjdjr0h61bmsd3mmmfj7h4rinh', '::1', 1606849911, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363834393931313b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('miq2km8q97m4p1j4j9rj9aul5ntfpl32', '::1', 1606332009, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363333323030393b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('morj6fsjf2l564ts7hq07amro7fsb73i', '::1', 1606851824, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363835313832343b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('nh4uggfhiafotmrij61568v8tnqvmrb7', '::1', 1607019583, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373031383335383b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('nkudr5saaun4eohfqh9dr05to3v332gt', '::1', 1607542548, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373534323534383b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('o26fi286idnj8m0luio7l0kttalccqhq', '::1', 1607452279, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373435323237393b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('o7o51damp9i8002063dm0itr4knm8pl7', '::1', 1607968639, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373936383633393b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('pctmg40r239l2o68u720kc4oisdfkuim', '::1', 1606936249, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363933363137303b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('pgaokuckctkn8hn3k961r58761meequ7', '::1', 1607541883, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373534313838333b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('plmq1t2kadd4rjadbe25ufheg6il1npm', '::1', 1606744978, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363734343937333b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('qivh6f4rc09tiufff3hhn9o6dhst4bks', '::1', 1606936170, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363933363137303b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('qspb5mn42vc6grpm8onf4srlo9k380q9', '::1', 1606744972, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363734343937323b),
('r6evm3o3c63kn4vpui3ts044bvkntrgv', '::1', 1607449943, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373434393934333b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('sodn4dv41rf1upv39l3q4pg1bb8pco24', '::1', 1607450305, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373435303330353b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('sqpnbjk098q2i2m6mgang5d1fjqlvp4a', '::1', 1607439910, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373433393931303b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('uhltd0qk777dsn9qee25di6tirkb3b06', '::1', 1606335491, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363333353333373b69647c733a323a223134223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32333a226a61777761642e6e697373617240676d61696c2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b);

-- --------------------------------------------------------

--
-- Table structure for table `geopos_accounts`
--

CREATE TABLE `geopos_accounts` (
  `id` int(5) NOT NULL,
  `acn` varchar(35) NOT NULL,
  `holder` varchar(100) NOT NULL,
  `adate` datetime NOT NULL,
  `lastbal` decimal(16,2) DEFAULT 0.00,
  `code` varchar(30) DEFAULT NULL,
  `loc` int(4) DEFAULT NULL,
  `account_type` enum('Assets','Expenses','Income','Liabilities','Equity','Basic') NOT NULL DEFAULT 'Basic'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_accounts`
--

INSERT INTO `geopos_accounts` (`id`, `acn`, `holder`, `adate`, `lastbal`, `code`, `loc`, `account_type`) VALUES
(1, '123456', 'Sales Account', '2018-01-01 00:00:00', '2860158.78', 'Default Sales Account', 0, 'Basic');

-- --------------------------------------------------------

--
-- Table structure for table `geopos_attendance`
--

CREATE TABLE `geopos_attendance` (
  `id` int(11) NOT NULL,
  `emp` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `adate` date NOT NULL,
  `tfrom` time NOT NULL,
  `tto` time NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `actual_hours` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_attendance`
--

INSERT INTO `geopos_attendance` (`id`, `emp`, `created`, `adate`, `tfrom`, `tto`, `note`, `actual_hours`) VALUES
(1, 14, '2020-08-11 05:00:32', '2020-08-11', '10:00:25', '10:00:32', 'Self Attendance', 7),
(2, 14, '2020-09-13 11:31:16', '2020-09-13', '06:31:09', '06:31:16', 'Self Attendance', 7),
(3, 16, '2020-10-03 13:10:56', '2020-10-03', '08:10:22', '08:10:56', 'Self Attendance', 34),
(4, 14, '2020-11-05 01:11:27', '2020-11-04', '20:11:19', '20:11:27', 'Self Attendance', 8);

-- --------------------------------------------------------

--
-- Table structure for table `geopos_bank_ac`
--

CREATE TABLE `geopos_bank_ac` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `acn` varchar(50) NOT NULL,
  `code` varchar(50) DEFAULT NULL,
  `note` varchar(2000) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `enable` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_bank_ac`
--

INSERT INTO `geopos_bank_ac` (`id`, `name`, `bank`, `acn`, `code`, `note`, `address`, `branch`, `enable`) VALUES
(1, 'HABIB BANK', '', '23052497520948', '23423', 'HABIB BANK', 'SATELLITE TOWN', 'SATELLITE TOWN', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `geopos_config`
--

CREATE TABLE `geopos_config` (
  `id` int(11) NOT NULL,
  `type` int(3) NOT NULL,
  `val1` varchar(50) NOT NULL,
  `val2` varchar(200) NOT NULL,
  `val3` varchar(100) NOT NULL,
  `val4` varchar(100) NOT NULL,
  `rid` int(11) NOT NULL,
  `other` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_config`
--

INSERT INTO `geopos_config` (`id`, `type`, `val1`, `val2`, `val3`, `val4`, `rid`, `other`) VALUES
(1, 1, 'Black Copper BC-85AC', 'windows', 'USB', '0', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `geopos_currencies`
--

CREATE TABLE `geopos_currencies` (
  `id` int(4) NOT NULL,
  `code` varchar(3) CHARACTER SET latin1 DEFAULT NULL,
  `symbol` varchar(3) DEFAULT NULL,
  `rate` decimal(10,5) NOT NULL,
  `thous` char(1) CHARACTER SET latin1 DEFAULT NULL,
  `dpoint` char(1) CHARACTER SET latin1 NOT NULL,
  `decim` int(2) NOT NULL,
  `cpos` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `geopos_customers`
--

CREATE TABLE `geopos_customers` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `region` varchar(30) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `postbox` varchar(20) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `picture` varchar(100) NOT NULL DEFAULT 'example.png',
  `gid` int(5) NOT NULL DEFAULT 1,
  `company` varchar(100) DEFAULT NULL,
  `taxid` varchar(100) DEFAULT NULL,
  `name_s` varchar(100) DEFAULT NULL,
  `phone_s` varchar(100) DEFAULT NULL,
  `email_s` varchar(100) DEFAULT NULL,
  `address_s` varchar(100) DEFAULT NULL,
  `city_s` varchar(100) DEFAULT NULL,
  `region_s` varchar(100) DEFAULT NULL,
  `country_s` varchar(100) DEFAULT NULL,
  `postbox_s` varchar(100) DEFAULT NULL,
  `balance` decimal(16,2) DEFAULT 0.00,
  `loc` int(11) DEFAULT 0,
  `docid` varchar(255) DEFAULT NULL,
  `custom1` varchar(255) DEFAULT NULL,
  `discount_c` decimal(16,2) DEFAULT NULL,
  `reg_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_customers`
--

INSERT INTO `geopos_customers` (`id`, `name`, `phone`, `address`, `city`, `region`, `country`, `postbox`, `email`, `picture`, `gid`, `company`, `taxid`, `name_s`, `phone_s`, `email_s`, `address_s`, `city_s`, `region_s`, `country_s`, `postbox_s`, `balance`, `loc`, `docid`, `custom1`, `discount_c`, `reg_date`) VALUES
(1, 'Walk-in Client', '0987654321', NULL, NULL, NULL, NULL, NULL, 'example@example.com', 'example.png', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', 0, NULL, NULL, NULL, NULL),
(2, 'KoreLinks Technologies', '0514852343', 'Executive Apartments, Basement Allied Bank, A-Bloc', 'Rawalpindi', 'Punjab', 'Pakistan', '', 'korelinks@korelinks.com', 'example.png', 1, 'KoreLinks Technologies', '', '', '', '', '', '', '', '', '', '0.00', 0, '', '', NULL, '2020-08-19 03:13:51'),
(3, '', '', '', NULL, NULL, NULL, NULL, '', 'example.png', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', 0, '', '', NULL, '2020-08-22 11:47:15'),
(4, 'Mobin Akhtar', '12312312', '', NULL, NULL, NULL, NULL, 'admin@example.com', 'example.png', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', 0, '', '', NULL, '2020-10-03 13:20:23');

-- --------------------------------------------------------

--
-- Table structure for table `geopos_custom_data`
--

CREATE TABLE `geopos_custom_data` (
  `id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `module` int(3) NOT NULL,
  `data` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_custom_data`
--

INSERT INTO `geopos_custom_data` (`id`, `field_id`, `rid`, `module`, `data`) VALUES
(1, 1, 364955, 4, 'dsds'),
(3, 1, 364956, 4, 'jbhj'),
(4, 1, 364957, 4, 'dsds'),
(5, 1, 364958, 4, 'dsds');

-- --------------------------------------------------------

--
-- Table structure for table `geopos_custom_fields`
--

CREATE TABLE `geopos_custom_fields` (
  `id` int(11) NOT NULL,
  `f_module` int(3) NOT NULL,
  `f_type` varchar(30) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `placeholder` varchar(30) DEFAULT NULL,
  `value_data` text NOT NULL,
  `f_view` int(2) NOT NULL,
  `other` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_custom_fields`
--

INSERT INTO `geopos_custom_fields` (`id`, `f_module`, `f_type`, `name`, `placeholder`, `value_data`, `f_view`, `other`) VALUES
(1, 4, 'text', 'Supplier Name', 'Supplier', 'Supplier', 1, 'required');

-- --------------------------------------------------------

--
-- Table structure for table `geopos_cust_group`
--

CREATE TABLE `geopos_cust_group` (
  `id` int(10) NOT NULL,
  `title` varchar(60) DEFAULT NULL,
  `summary` varchar(250) DEFAULT NULL,
  `disc_rate` decimal(9,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_cust_group`
--

INSERT INTO `geopos_cust_group` (`id`, `title`, `summary`, `disc_rate`) VALUES
(1, 'Default Group', 'Default Group', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `geopos_documents`
--

CREATE TABLE `geopos_documents` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `filename` varchar(50) DEFAULT NULL,
  `cdate` date NOT NULL,
  `permission` int(1) DEFAULT NULL,
  `cid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `rid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `geopos_draft`
--

CREATE TABLE `geopos_draft` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `invoicedate` date NOT NULL,
  `invoiceduedate` date NOT NULL,
  `subtotal` decimal(16,2) DEFAULT 0.00,
  `shipping` decimal(16,2) DEFAULT 0.00,
  `ship_tax` decimal(16,2) DEFAULT NULL,
  `ship_tax_type` enum('incl','excl','off') DEFAULT 'off',
  `discount` decimal(16,2) DEFAULT 0.00,
  `tax` decimal(16,2) DEFAULT 0.00,
  `total` decimal(16,2) DEFAULT 0.00,
  `pmethod` varchar(14) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `status` enum('paid','due','canceled','partial') NOT NULL DEFAULT 'due',
  `csd` int(5) NOT NULL DEFAULT 0,
  `eid` int(4) NOT NULL,
  `pamnt` decimal(16,2) DEFAULT 0.00,
  `items` decimal(10,2) NOT NULL,
  `taxstatus` enum('yes','no','cgst','igst') NOT NULL DEFAULT 'yes',
  `discstatus` tinyint(1) NOT NULL,
  `format_discount` enum('%','flat','bflat','b_p') NOT NULL DEFAULT '%',
  `refer` varchar(20) DEFAULT NULL,
  `term` int(3) NOT NULL,
  `multi` int(4) DEFAULT NULL,
  `i_class` int(1) NOT NULL DEFAULT 0,
  `loc` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_draft`
--

INSERT INTO `geopos_draft` (`id`, `tid`, `invoicedate`, `invoiceduedate`, `subtotal`, `shipping`, `ship_tax`, `ship_tax_type`, `discount`, `tax`, `total`, `pmethod`, `notes`, `status`, `csd`, `eid`, `pamnt`, `items`, `taxstatus`, `discstatus`, `format_discount`, `refer`, `term`, `multi`, `i_class`, `loc`) VALUES
(1, 1019, '2020-11-09', '2020-11-09', '1514.76', '12.00', '0.00', 'incl', '51.00', '59.76', '1514.76', NULL, '', 'partial', 1, 14, '0.00', '1.00', 'yes', 1, 'flat', '', 1, NULL, 1, 0),
(2, 1020, '2020-11-25', '2020-11-25', '555.00', '0.00', '0.00', 'incl', '50.00', '55.00', '555.00', NULL, '', 'partial', 1, 14, '0.00', '55.00', 'yes', 1, 'flat', '', 1, NULL, 1, 0),
(5, 1020, '2020-12-08', '2020-12-08', '1206.00', '0.00', '0.00', 'incl', '4.00', '110.00', '1206.00', NULL, '', 'partial', 1, 14, '0.00', '1.00', 'yes', 1, 'flat', '', 1, NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `geopos_draft_items`
--

CREATE TABLE `geopos_draft_items` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT 0,
  `product` varchar(255) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `qty` decimal(10,2) NOT NULL DEFAULT 0.00,
  `price` decimal(16,2) NOT NULL DEFAULT 0.00,
  `tax` decimal(16,2) DEFAULT 0.00,
  `discount` decimal(16,2) DEFAULT 0.00,
  `subtotal` decimal(16,2) DEFAULT 0.00,
  `totaltax` decimal(16,2) DEFAULT 0.00,
  `totaldiscount` decimal(16,2) DEFAULT 0.00,
  `product_des` text DEFAULT NULL,
  `i_class` int(1) NOT NULL DEFAULT 0,
  `unit` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_draft_items`
--

INSERT INTO `geopos_draft_items` (`id`, `tid`, `pid`, `product`, `code`, `qty`, `price`, `tax`, `discount`, `subtotal`, `totaltax`, `totaldiscount`, `product_des`, `i_class`, `unit`) VALUES
(1, 1, 338156, 'Product B-ABC-2', 'ABC-2', '1.00', '1494.00', '4.00', '39.00', '1514.76', '59.76', '39.00', NULL, 1, ''),
(2, 2, 364955, 'Test SA-SAB', 'SAB', '55.00', '10.00', '10.00', '50.00', '555.00', '55.00', '50.00', NULL, 1, ''),
(3, 5, 364955, 'Test SA-SAB', 'SAB', '1.00', '100.00', '10.00', '2.00', '108.00', '10.00', '2.00', NULL, 1, ''),
(4, 5, 2, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '100.00', '2.00', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `geopos_employees`
--

CREATE TABLE `geopos_employees` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `region` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `postbox` varchar(20) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `phonealt` varchar(15) DEFAULT NULL,
  `picture` varchar(50) NOT NULL DEFAULT 'example.png',
  `sign` varchar(100) DEFAULT 'sign.png',
  `joindate` datetime NOT NULL DEFAULT current_timestamp(),
  `dept` int(11) DEFAULT NULL,
  `degis` int(11) DEFAULT NULL,
  `salary` decimal(16,2) DEFAULT 0.00,
  `clock` int(1) DEFAULT NULL,
  `clockin` int(11) DEFAULT NULL,
  `clockout` int(11) DEFAULT NULL,
  `c_rate` decimal(16,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_employees`
--

INSERT INTO `geopos_employees` (`id`, `username`, `name`, `address`, `city`, `region`, `country`, `postbox`, `phone`, `phonealt`, `picture`, `sign`, `joindate`, `dept`, `degis`, `salary`, `clock`, `clockin`, `clockout`, `c_rate`) VALUES
(14, 'admin', 'BusinessOwner', 'Test Street', 'Test City', 'Test Region', 'Test Country', '123456', '12345678', '0', 'example.png', 'sign.png', '2020-08-05 03:04:55', NULL, NULL, '0.00', 0, 0, 1604520687, NULL),
(15, 'saleman1', 'Saleman1', '', '', '', '', '', '', NULL, 'example.png', 'sign.png', '2020-09-20 11:15:48', 0, NULL, '10000.00', 1, 1600582645, 0, '10.00'),
(16, 'cashier444', 'cashier444', '', '', '', '', '', '', NULL, 'example.png', 'sign.png', '2020-10-03 13:07:35', 0, NULL, '0.00', 0, 0, 1601712656, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `geopos_events`
--

CREATE TABLE `geopos_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `color` varchar(7) NOT NULL DEFAULT '#3a87ad',
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `allDay` varchar(50) NOT NULL DEFAULT 'true',
  `rel` int(2) NOT NULL DEFAULT 0,
  `rid` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `geopos_gateways`
--

CREATE TABLE `geopos_gateways` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `enable` enum('Yes','No') NOT NULL,
  `key1` varchar(255) NOT NULL,
  `key2` varchar(255) DEFAULT NULL,
  `currency` varchar(3) NOT NULL DEFAULT 'USD',
  `dev_mode` enum('true','false') NOT NULL,
  `ord` int(5) NOT NULL,
  `surcharge` decimal(16,2) NOT NULL,
  `extra` varchar(40) NOT NULL DEFAULT 'none'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `geopos_gateways`
--

INSERT INTO `geopos_gateways` (`id`, `name`, `enable`, `key1`, `key2`, `currency`, `dev_mode`, `ord`, `surcharge`, `extra`) VALUES
(1, 'Stripe', 'Yes', 'sk_test_secratekey', 'stripe_public_key', 'USD', 'true', 1, '0.00', 'none'),
(2, 'Authorize.Net', 'Yes', 'TRANSACTIONKEY', 'LOGINID', 'AUD', 'true', 2, '0.00', 'none'),
(3, 'Pin Payments', 'Yes', 'TEST', 'none', 'AUD', 'true', 3, '0.00', 'none'),
(4, 'PayPal', 'Yes', 'MyPayPalClientId', 'MyPayPalSecret', 'USD', 'true', 4, '0.00', 'none'),
(5, 'SecurePay', 'Yes', 'ABC0001', 'abc123', 'AUD', 'true', 5, '0.00', 'none'),
(6, '2Checkout', 'Yes', 'Publishable Key', 'Private Key', 'USD', 'true', 6, '0.00', 'seller_id'),
(7, 'PayU Money', 'Yes', 'MERCHANT_KEY', 'MERCHANT_SALT', 'USD', 'true', 7, '0.00', 'none'),
(8, 'RazorPay', 'Yes', 'Key Id', 'Key Secret', 'INR', 'true', 8, '0.00', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `geopos_goals`
--

CREATE TABLE `geopos_goals` (
  `id` int(1) NOT NULL,
  `income` bigint(20) NOT NULL,
  `expense` bigint(20) NOT NULL,
  `sales` bigint(20) NOT NULL,
  `netincome` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_goals`
--

INSERT INTO `geopos_goals` (`id`, `income`, `expense`, `sales`, `netincome`) VALUES
(1, 999999, 999999, 999999, 999999);

-- --------------------------------------------------------

--
-- Table structure for table `geopos_hrm`
--

CREATE TABLE `geopos_hrm` (
  `id` int(11) NOT NULL,
  `typ` int(2) NOT NULL,
  `rid` int(11) NOT NULL,
  `val1` varchar(255) DEFAULT NULL,
  `val2` varchar(255) DEFAULT NULL,
  `val3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `geopos_invoices`
--

CREATE TABLE `geopos_invoices` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `invoicedate` date NOT NULL,
  `invoiceduedate` date NOT NULL,
  `subtotal` decimal(16,2) DEFAULT 0.00,
  `shipping` decimal(16,2) DEFAULT 0.00,
  `ship_tax` decimal(16,2) DEFAULT NULL,
  `ship_tax_type` enum('incl','excl','off') DEFAULT 'off',
  `discount` decimal(16,2) DEFAULT 0.00,
  `discount_rate` decimal(10,2) DEFAULT 0.00,
  `tax` decimal(16,2) DEFAULT 0.00,
  `total` decimal(16,2) DEFAULT 0.00,
  `pmethod` varchar(14) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `status` enum('paid','due','canceled','partial') NOT NULL DEFAULT 'due',
  `csd` int(5) NOT NULL DEFAULT 0,
  `eid` int(4) NOT NULL,
  `pamnt` decimal(16,2) DEFAULT 0.00,
  `items` decimal(10,2) NOT NULL,
  `taxstatus` enum('yes','no','incl','cgst','igst') NOT NULL DEFAULT 'yes',
  `discstatus` tinyint(1) NOT NULL,
  `format_discount` enum('%','flat','b_p','bflat') NOT NULL DEFAULT '%',
  `refer` varchar(20) DEFAULT NULL,
  `term` int(3) NOT NULL,
  `multi` int(4) DEFAULT NULL,
  `i_class` int(1) NOT NULL DEFAULT 0,
  `loc` int(4) NOT NULL,
  `r_time` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_invoices`
--

INSERT INTO `geopos_invoices` (`id`, `tid`, `invoicedate`, `invoiceduedate`, `subtotal`, `shipping`, `ship_tax`, `ship_tax_type`, `discount`, `discount_rate`, `tax`, `total`, `pmethod`, `notes`, `status`, `csd`, `eid`, `pamnt`, `items`, `taxstatus`, `discstatus`, `format_discount`, `refer`, `term`, `multi`, `i_class`, `loc`, `r_time`) VALUES
(1, 1001, '2020-12-14', '2020-12-14', '1211.00', '0.00', '0.00', 'incl', '4.00', '0.00', '25.00', '1211.00', 'Cash', '', 'paid', 1, 14, '1211.00', '2.00', 'yes', 1, 'flat', '', 1, NULL, 1, 0, NULL),
(6, 1002, '2020-12-14', '2020-12-14', '1142.00', '0.00', '0.00', 'incl', '5.00', '0.00', '94.00', '1142.00', 'Cash', '', 'paid', 1, 14, '1142.00', '1.00', 'yes', 1, 'flat', '', 1, NULL, 1, 0, NULL),
(7, 1003, '2020-12-15', '2020-12-15', '1206.00', '0.00', '0.00', 'incl', '2.00', '0.00', '10.00', '1206.00', 'Cash', '', 'paid', 1, 14, '1206.00', '1.00', 'yes', 1, 'flat', '', 1, NULL, 1, 0, NULL),
(8, 1004, '2020-12-15', '2020-12-15', '2877.40', '0.00', '0.00', 'incl', '4.00', '0.00', '140.40', '2877.40', 'Cash', '', 'paid', 1, 14, '2877.40', '5.00', 'yes', 1, 'flat', '', 1, NULL, 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `geopos_invoice_items`
--

CREATE TABLE `geopos_invoice_items` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT 0,
  `sid` int(11) NOT NULL,
  `product` varchar(255) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `qty` decimal(10,2) NOT NULL DEFAULT 0.00,
  `price` decimal(16,2) NOT NULL DEFAULT 0.00,
  `tax` decimal(16,2) DEFAULT 0.00,
  `discount` decimal(16,2) DEFAULT 0.00,
  `subtotal` decimal(16,2) DEFAULT 0.00,
  `totaltax` decimal(16,2) DEFAULT 0.00,
  `totaldiscount` decimal(16,2) DEFAULT 0.00,
  `product_des` text DEFAULT NULL,
  `i_class` int(1) NOT NULL DEFAULT 0,
  `unit` varchar(5) DEFAULT NULL,
  `serial` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_invoice_items`
--

INSERT INTO `geopos_invoice_items` (`id`, `tid`, `pid`, `sid`, `product`, `code`, `qty`, `price`, `tax`, `discount`, `subtotal`, `totaltax`, `totaldiscount`, `product_des`, `i_class`, `unit`, `serial`) VALUES
(1, 1, 4, 0, 'Service 2-67677', NULL, '1.00', '100.00', '15.00', '2.00', '113.00', '15.00', '2.00', 'Service 2-67677', 1, '', NULL),
(2, 1, 2, 0, 'Grooming-123', NULL, '1.00', '1000.00', '10.00', '2.00', '1098.00', '10.00', '2.00', 'Grooming-123', 1, '', NULL),
(3, 6, 0, 4, 'Service 2-67677', NULL, '1.00', '100.00', '15.00', '2.00', '113.00', '15.00', '2.00', 'Service 2-67677', 1, '', NULL),
(4, 6, 364958, 0, 'German Cat11-German', 'German', '1.00', '940.00', '10.00', '5.00', '1029.00', '94.00', '5.00', NULL, 1, '', ''),
(5, 7, 0, 2, 'Grooming-123', NULL, '1.00', '1000.00', '10.00', '2.00', '1098.00', '10.00', '2.00', 'Grooming-123', 1, '', NULL),
(6, 7, 364955, 0, 'Test SA-SAB', 'SAB', '1.00', '100.00', '10.00', '2.00', '108.00', '10.00', '2.00', NULL, 1, '', ''),
(7, 8, 0, 2, 'Grooming-123', NULL, '1.00', '1000.00', '10.00', '2.00', '1098.00', '10.00', '2.00', 'Grooming-123', 1, '', NULL),
(8, 8, 0, 4, 'Service 2-67677', NULL, '1.00', '100.00', '15.00', '2.00', '113.00', '15.00', '2.00', 'Service 2-67677', 1, '', NULL),
(9, 8, 364955, 0, 'Test SA-SAB', 'SAB', '2.00', '100.00', '10.00', '2.00', '218.00', '20.00', '2.00', NULL, 1, '', ''),
(10, 8, 364956, 0, 'Test SAB-SAB', 'SAB', '1.00', '700.00', '10.00', '0.00', '770.00', '70.00', '0.00', NULL, 1, '', ''),
(11, 8, 364957, 0, 'Test SAA-SAB2', 'SAB2', '2.00', '315.00', '8.00', '2.00', '678.40', '50.40', '2.00', NULL, 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `geopos_locations`
--

CREATE TABLE `geopos_locations` (
  `id` int(3) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `region` varchar(40) DEFAULT NULL,
  `country` varchar(40) DEFAULT NULL,
  `postbox` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `taxid` varchar(40) DEFAULT NULL,
  `logo` varchar(50) DEFAULT 'logo.png',
  `cur` int(4) NOT NULL,
  `ware` int(11) DEFAULT 0,
  `ext` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `geopos_log`
--

CREATE TABLE `geopos_log` (
  `id` int(11) NOT NULL,
  `note` mediumtext NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `user` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_log`
--

INSERT INTO `geopos_log` (`id`, `note`, `created`, `user`) VALUES
(1, '[Logged In] jawwad.nissar@gmail.com', '2020-08-05 03:05:54', ''),
(2, '[Logged In] jawwad.nissar@gmail.com', '2020-08-05 08:53:25', ''),
(3, '[Category Created] Laptops ID 2', '2020-08-05 08:57:59', 'admin'),
(4, '[Category Created] Dell ID 3', '2020-08-05 08:59:33', 'admin'),
(5, '[New Product] -Dell Latitude 1130  -Qty-10 ID 1', '2020-08-05 09:00:56', 'admin'),
(6, '[Update Product] -Dell Latitude 1130  -Qty-10 ID 1', '2020-08-05 09:02:49', 'admin'),
(7, '[Payment Invoice 1]  Transaction-1 - 300000 ', '2020-08-05 09:04:17', 'admin'),
(8, '[New Product] -Dell Latitude 12002  -Qty-5 ID 2', '2020-08-05 09:06:28', 'admin'),
(9, '[Payment Invoice 2]  Transaction-2 - 570000 ', '2020-08-05 09:07:01', 'admin'),
(10, '[Logged Out] admin', '2020-08-05 09:07:26', ''),
(11, '[Logged In] jawwad.nissar@gmail.com', '2020-08-06 01:32:00', ''),
(12, '[Logged Out] admin', '2020-08-06 01:36:15', ''),
(13, '[Logged In] jawwad.nissar@gmail.com', '2020-08-06 01:36:25', ''),
(14, '[Payment Invoice 3]  Transaction-3 - 570000 ', '2020-08-06 01:37:19', 'admin'),
(15, '[Payment Invoice 4]  Transaction-4 - 380000 ', '2020-08-06 01:37:26', 'admin'),
(16, '[Logged In] jawwad.nissar@gmail.com', '2020-08-06 09:52:22', ''),
(17, '[Payment Invoice 5]  Transaction-5 - 450000 ', '2020-08-06 09:54:19', 'admin'),
(18, '[Logged In] jawwad.nissar@gmail.com', '2020-08-11 02:12:38', ''),
(19, '[Logged In] jawwad.nissar@gmail.com', '2020-08-11 02:19:49', ''),
(20, '[Employee ClockIn]  Project ID 1', '2020-08-11 04:14:50', 'admin'),
(21, '[Logged In] jawwad.nissar@gmail.com', '2020-08-11 04:54:06', ''),
(22, '[Employee ClockIn]  ID 14', '2020-08-11 05:00:25', 'admin'),
(23, '[Employee ClockOut]  ID 14', '2020-08-11 05:00:32', 'admin'),
(24, '[Logged Out] admin', '2020-08-11 05:02:54', ''),
(25, '[Logged In] jawwad.nissar@gmail.com', '2020-08-11 05:08:10', ''),
(26, '[Logged In] Jawwad.nissar@gmail.com', '2020-08-11 05:12:37', ''),
(27, '[Logged In] Jawwad.nissar@gmail.com', '2020-08-12 07:10:32', ''),
(28, '[Logged In] jawwad.nissar@gmail.com', '2020-08-13 02:17:50', ''),
(29, '[Logged In] jawwad.nissar@gmail.com', '2020-08-15 04:54:16', ''),
(30, '[Logged In] jawwad.nissar@gmail.com', '2020-08-15 05:31:24', ''),
(31, '[Logged In] jawwad.nissar@gmail.com', '2020-08-16 02:22:54', ''),
(32, '[Logged In] Jawwad.nissar@gmail.com', '2020-08-16 07:50:53', ''),
(33, '[Logged In] jawwad.nissar@gmail.com', '2020-08-19 01:41:51', ''),
(34, '[Client Added] KoreLinks Technologies ID 2', '2020-08-19 03:13:51', 'admin'),
(35, '[Logged In] jawwad.nissar@gmail.com', '2020-08-19 23:42:25', ''),
(36, '[Update Product] -Dell Latitude 12002  -Qty-0 ID 2', '2020-08-19 23:46:56', 'admin'),
(37, '[Update Product] -Dell Latitude 12002  -Qty-0 ID 2', '2020-08-19 23:51:52', 'admin'),
(38, '[New Product] -Dell Latitude 12002  -Qty-0 ID 2', '2020-08-19 23:51:52', 'admin'),
(39, '[New Product] -Dell Latitude 12002  -Qty-0 ID 2', '2020-08-19 23:51:52', 'admin'),
(40, '[Logged In] jawwad.nissar@gmail.com', '2020-08-21 00:30:55', ''),
(41, '[Logged In] jawwad.nissar@gmail.com', '2020-08-22 06:25:17', ''),
(42, '[Logged In] jawwad.nissar@gmail.com', '2020-08-22 11:40:00', ''),
(43, '[Payment Invoice 8]  Transaction-7 - 190000 ', '2020-08-22 11:44:03', 'admin'),
(44, '[Client Added]  ID 3', '2020-08-22 11:47:15', 'admin'),
(45, '[Logged In] jawwad.nissar@gmail.com', '2020-08-24 08:04:07', ''),
(46, '[Logged In] jawwad.nissar@gmail.com', '2020-08-25 01:01:37', ''),
(47, '[Logged In] jawwad.nissar@gmail.com', '2020-08-25 01:10:13', ''),
(48, '[Logged In] jawwad.nissar@gmail.com', '2020-08-25 03:09:49', ''),
(49, '[Logged In] jawwad.nissar@gmail.com', '2020-08-25 08:48:27', ''),
(50, '[Logged In] jawwad.nissar@gmail.com', '2020-09-05 14:34:22', ''),
(51, '[Logged Out] ', '2020-09-05 15:06:15', ''),
(52, '[Logged In] jawwad.nissar@gmail.com', '2020-09-05 15:06:18', ''),
(53, '[Logged In] jawwad.nissar@gmail.com', '2020-09-05 21:51:14', ''),
(54, '[Logged In] jawwad.nissar@gmail.com', '2020-09-06 08:14:36', ''),
(55, '[Logged In] jawwad.nissar@gmail.com', '2020-09-07 12:29:34', ''),
(56, '[Logged In] jawwad.nissar@gmail.com', '2020-09-07 14:56:08', ''),
(57, '[Payment Invoice 9]  Transaction-8 - 190000 ', '2020-09-07 14:57:15', 'admin'),
(58, '[Logged In] jawwad.nissar@gmail.com', '2020-09-08 12:01:09', ''),
(59, '[Category Created] Lubricants ID 4', '2020-09-08 12:01:28', 'admin'),
(60, '[Category Created] Lubricants ID 5', '2020-09-08 12:13:12', 'admin'),
(61, '[Category Created] Lubricants ID 6', '2020-09-08 14:01:21', 'admin'),
(62, '[Category Created] ZIC ID 7', '2020-09-08 14:01:56', 'admin'),
(63, '[Logged In] jawwad.nissar@gmail.com', '2020-09-11 19:29:56', ''),
(64, '[New Product] -ZIC 3L 20-40W  -Qty-5 ID 5', '2020-09-11 19:53:23', 'admin'),
(65, '[Payment Invoice 11]  Transaction-9 - 2100 ', '2020-09-11 19:56:01', 'admin'),
(66, '[Logged In] jawwad.nissar@gmail.com', '2020-09-12 09:38:45', ''),
(67, '[Payment Invoice 12]  Transaction-10 - 4200 ', '2020-09-12 09:40:20', 'admin'),
(68, '[Update Product] -ZIC 3L 20-40W  -Qty-7 ID 5', '2020-09-12 09:42:56', 'admin'),
(69, '[Update Product] -ZIC 3L 20-40W  -Qty-7 ID 5', '2020-09-12 09:47:00', 'admin'),
(70, '[Logged In] jawwad.nissar@gmail.com', '2020-09-12 19:37:18', ''),
(71, '[Payment Invoice 13]  Transaction-11 - 1000 ', '2020-09-12 19:43:52', 'admin'),
(72, '[Payment Invoice 14]  Transaction-12 - 190000 ', '2020-09-12 20:00:05', 'admin'),
(73, '[Logged In] jawwad.nissar@gmail.com', '2020-09-13 11:14:16', ''),
(74, '[Employee ClockIn]  ID 14', '2020-09-13 11:31:09', 'admin'),
(75, '[Employee ClockOut]  ID 14', '2020-09-13 11:31:16', 'admin'),
(76, '[Logged In] jawwad.nissar@gmail.com', '2020-09-19 19:39:53', ''),
(77, '[Logged In] jawwad.nissar@gmail.com', '2020-09-20 11:13:53', ''),
(78, '[Logged Out] admin', '2020-09-20 11:15:54', ''),
(79, '[Logged In] jawwad.nissar@gmail.com', '2020-09-20 11:16:20', ''),
(80, '[Logged Out] admin', '2020-09-20 11:16:54', ''),
(81, '[Logged In] sales@admin.com', '2020-09-20 11:17:12', ''),
(82, '[Employee ClockIn]  ID 15', '2020-09-20 11:17:25', 'saleman1'),
(83, '[Payment Invoice 15]  Transaction-13 - 4990 ', '2020-09-20 11:17:57', 'saleman1'),
(84, '[Logged In] jawwad.nissar@gmail.com', '2020-09-20 11:21:44', ''),
(85, '[Logged In] sales@admin.com', '2020-09-20 15:08:38', ''),
(86, '[Payment Invoice 16]  Transaction-14 - 2490 ', '2020-09-20 15:09:27', 'saleman1'),
(87, '[Logged In] jawwad.nissar@gmail.com', '2020-09-29 19:39:10', ''),
(88, '[Payment Invoice 17]  Transaction-15 - 342490 ', '2020-09-29 19:39:36', 'admin'),
(89, '[Logged In] jawwad.nissar@gmail.com', '2020-09-30 09:44:30', ''),
(90, '[Category Created] Dell111 ID 8', '2020-09-30 09:44:58', 'admin'),
(91, '[Category Created] sub cat of Dell111 ID 9', '2020-09-30 09:45:58', 'admin'),
(92, '[Logged In] jawwad.nissar@gmail.com', '2020-10-03 12:44:03', ''),
(93, '[Logged Out] admin', '2020-10-03 13:07:41', ''),
(94, '[Logged In] cashier444@admin.com', '2020-10-03 13:07:55', ''),
(95, '[Employee ClockIn]  ID 16', '2020-10-03 13:10:22', 'cashier444'),
(96, '[Payment Invoice 18]  Transaction-16 - 190000 ', '2020-10-03 13:10:43', 'cashier444'),
(97, '[Employee ClockOut]  ID 16', '2020-10-03 13:10:56', 'cashier444'),
(98, '[Logged Out] cashier444', '2020-10-03 13:14:17', ''),
(99, '[Logged In] jawwad.nissar@gmail.com', '2020-10-03 13:14:22', ''),
(100, '[Client Added] Mobin Akhtar ID 4', '2020-10-03 13:20:23', 'admin'),
(101, '[Payment Invoice 19]  Transaction-17 - 1000 ', '2020-10-03 13:20:46', 'admin'),
(102, '[Logged In] jawwad.nissar@gmail.com', '2020-10-04 12:47:49', ''),
(103, '[Logged In] jawwad.nissar@gmail.com', '2020-10-05 21:24:16', ''),
(104, '[Logged In] jawwad.nissar@gmail.com', '2020-10-06 22:23:27', ''),
(105, '[Update Product] -Tetra Pond MediFin 1000ml  -Qty-280 ID 8', '2020-10-06 22:27:01', 'admin'),
(106, '[Logged In] jawwad.nissar@gmail.com', '2020-10-12 21:33:09', ''),
(107, '[Logged In] jawwad.nissar@gmail.com', '2020-10-13 08:39:26', ''),
(108, '[Logged Out] admin', '2020-10-13 14:49:06', ''),
(109, '[Logged In] jawwad.nissar@gmail.com', '2020-10-13 14:49:15', ''),
(110, '[Logged In] jawwad.nissar@gmail.com', '2020-10-15 11:38:34', ''),
(111, '[Logged In] jawwad.nissar@gmail.com', '2020-10-15 14:43:03', ''),
(112, '[Logged In] jawwad.nissar@gmail.com', '2020-10-22 15:40:06', ''),
(113, '[Logged Out] admin', '2020-10-22 15:41:17', ''),
(114, '[Logged In] jawwad.nissar@gmail.com', '2020-10-22 15:41:37', ''),
(115, '[Payment Invoice 20]  Transaction-18 - 401.66 ', '2020-10-22 15:47:15', 'admin'),
(116, '[Logged In] jawwad.nissar@gmail.com', '2020-10-25 12:40:54', ''),
(117, '[Logged Out] admin', '2020-10-25 12:47:19', ''),
(118, '[Logged In] jawwad.nissar@gmail.com', '2020-10-25 13:08:42', ''),
(119, '[Logged In] jawwad.nissar@gmail.com', '2020-10-30 12:06:53', ''),
(120, '[Payment Invoice 21]  Transaction-19 - 124 ', '2020-10-30 12:09:17', 'admin'),
(121, '[Logged In] jawwad.nissar@gmail.com', '2020-10-31 14:38:15', ''),
(122, '[Payment Invoice 22]  Transaction-20 - 78 ', '2020-10-31 14:41:14', 'admin'),
(123, '[Logged In] jawwad.nissar@gmail.com', '2020-10-31 16:56:06', ''),
(124, '[Logged In] jawwad.nissar@gmail.com', '2020-11-02 07:18:40', ''),
(125, '[Logged Out] admin', '2020-11-02 07:18:46', ''),
(126, '[Logged In] jawwad.nissar@gmail.com', '2020-11-02 07:19:12', ''),
(127, '[Logged In] jawwad.nissar@gmail.com', '2020-11-02 10:58:34', ''),
(128, '[Logged In] jawwad.nissar@gmail.com', '2020-11-02 22:56:12', ''),
(129, '[Logged In] jawwad.nissar@gmail.com', '2020-11-02 23:04:27', ''),
(130, '[Logged In] jawwad.nissar@gmail.com', '2020-11-03 22:37:44', ''),
(131, '[New Product] -Test SA  -Qty-100 ID 364955', '2020-11-03 23:18:56', 'admin'),
(132, '[New Product] -Test SA  -Qty-1000 ID 364956', '2020-11-03 23:39:47', 'admin'),
(133, '[Update Product] -Test SA  -Qty-1000 ID 364956', '2020-11-03 23:55:06', 'admin'),
(134, '[Logged In] jawwad.nissar@gmail.com', '2020-11-04 22:30:27', ''),
(135, '[Employee ClockIn]  ID 14', '2020-11-05 01:11:20', 'admin'),
(136, '[Employee ClockOut]  ID 14', '2020-11-05 01:11:27', 'admin'),
(137, '[Logged In] jawwad.nissar@gmail.com', '2020-11-07 20:14:07', ''),
(138, '[Logged In] jawwad.nissar@gmail.com', '2020-11-08 01:05:29', ''),
(139, '[Logged In] jawwad.nissar@gmail.com', '2020-11-08 21:22:00', ''),
(140, '[Logged In] jawwad.nissar@gmail.com', '2020-11-09 20:04:06', ''),
(141, '[Payment Invoice 23]  Transaction-21 - 26699.2 ', '2020-11-09 20:09:56', 'admin'),
(142, '[Payment Invoice 24]  Transaction-22 - 1514.76 ', '2020-11-09 20:10:29', 'admin'),
(143, '[Payment Invoice 27]  Transaction-23 - 1514.76 ', '2020-11-09 20:15:44', 'admin'),
(144, '[Logged In] jawwad.nissar@gmail.com', '2020-11-10 00:06:59', ''),
(145, '[Logged In] jawwad.nissar@gmail.com', '2020-11-10 21:06:04', ''),
(146, '[Logged In] jawwad.nissar@gmail.com', '2020-11-14 11:31:18', ''),
(147, '[Logged In] jawwad.nissar@gmail.com', '2020-11-14 22:34:12', ''),
(148, '[Update Service] -test22222 ID 0', '2020-11-14 22:53:42', 'admin'),
(149, '[Update Service] -test2 ID 0', '2020-11-14 22:54:45', 'admin'),
(150, '[Update Service] -test ID 0', '2020-11-14 22:56:47', 'admin'),
(151, '[Update Service] -test1 ID 0', '2020-11-14 23:36:35', 'admin'),
(152, '[Update Service] -test1 ID 0', '2020-11-15 00:01:22', 'admin'),
(153, '[Update Service] -test1 ID 0', '2020-11-15 00:02:07', 'admin'),
(154, '[Category Created] test2 ID 0', '2020-11-15 00:44:00', 'admin'),
(155, '[Logged In] jawwad.nissar@gmail.com', '2020-11-15 14:45:42', ''),
(156, '[Category Created] Service ID 3', '2020-11-15 14:46:19', 'admin'),
(157, '[Category Edited] Service111 ID 3', '2020-11-15 14:59:41', 'admin'),
(158, '[Logged In] jawwad.nissar@gmail.com', '2020-11-15 20:08:23', ''),
(159, '[Logged In] jawwad.nissar@gmail.com', '2020-11-17 23:09:24', ''),
(160, '[Logged In] jawwad.nissar@gmail.com', '2020-11-20 22:29:16', ''),
(161, '[Logged In] jawwad.nissar@gmail.com', '2020-11-21 20:12:49', ''),
(162, '[New Product] -Test SAA  -Qty-1000 ID 364957', '2020-11-21 20:55:18', 'admin'),
(163, '[Logged In] jawwad.nissar@gmail.com', '2020-11-25 21:58:24', ''),
(164, '[Logged In] jawwad.nissar@gmail.com', '2020-11-26 00:14:07', ''),
(165, '[Category Created] Cats ID 10', '2020-11-26 00:14:59', 'admin'),
(166, '[Category Created] German Cats ID 11', '2020-11-26 00:15:14', 'admin'),
(167, '[New Product] -German Cat11  -Qty-100 ID 364958', '2020-11-26 00:17:09', 'admin'),
(168, '[Logged In] jawwad.nissar@gmail.com', '2020-11-30 08:02:55', ''),
(169, '[Logged In] jawwad.nissar@gmail.com', '2020-12-02 00:03:38', ''),
(170, '[Logged In] jawwad.nissar@gmail.com', '2020-12-02 22:54:25', ''),
(171, '[Logged In] jawwad.nissar@gmail.com', '2020-12-03 22:59:23', ''),
(172, '[Logged In] jawwad.nissar@gmail.com', '2020-12-08 19:52:53', ''),
(173, '[Logged In] jawwad.nissar@gmail.com', '2020-12-09 23:16:37', ''),
(174, '[Payment Invoice 28]  Transaction-24 - 1319 ', '2020-12-10 00:06:04', 'admin'),
(175, '[Payment Invoice 29]  Transaction-25 - 1736 ', '2020-12-10 00:10:03', 'admin'),
(176, '[Payment Invoice 30]  Transaction-26 - 221 ', '2020-12-10 00:25:03', 'admin'),
(177, '[Payment Invoice 32]  Transaction-27 - 1319 ', '2020-12-10 00:43:20', 'admin'),
(178, '[Logged In] jawwad.nissar@gmail.com', '2020-12-10 19:16:55', ''),
(179, '[Payment Invoice 33]  Transaction-28 - 1844 ', '2020-12-10 19:17:34', 'admin'),
(180, '[Payment Invoice 34]  Transaction-29 - 746 ', '2020-12-10 19:18:24', 'admin'),
(181, '[Logged In] jawwad.nissar@gmail.com', '2020-12-11 00:05:57', ''),
(182, '[Payment Invoice 35]  Transaction-30 - 108 ', '2020-12-11 00:07:04', 'admin'),
(183, '[Payment Invoice 36]  Transaction-31 - 1211 ', '2020-12-11 01:05:00', 'admin'),
(184, '[Logged In] jawwad.nissar@gmail.com', '2020-12-12 01:38:37', ''),
(185, '[Logged In] jawwad.nissar@gmail.com', '2020-12-14 22:47:53', ''),
(186, '[Payment Invoice 1]  Transaction-32 - 1211 ', '2020-12-14 22:58:28', 'admin'),
(187, '[Payment Invoice 2]  Transaction-33 - 2045 ', '2020-12-14 23:02:05', 'admin'),
(188, '[Payment Invoice 3]  Transaction-34 - 1206 ', '2020-12-14 23:27:46', 'admin'),
(189, '[Payment Invoice 4]  Transaction-35 - 1430.8 ', '2020-12-14 23:28:14', 'admin'),
(190, '[Payment Invoice 5]  Transaction-36 - 1206 ', '2020-12-14 23:28:29', 'admin'),
(191, '[Payment Invoice 6]  Transaction-37 - 1142 ', '2020-12-15 00:16:50', 'admin'),
(192, '[Logged In] jawwad.nissar@gmail.com', '2020-12-16 00:42:51', ''),
(193, '[Payment Invoice 7]  Transaction-38 - 1206 ', '2020-12-16 00:45:57', 'admin'),
(194, '[Payment Invoice 8]  Transaction-39 - 2877.4 ', '2020-12-16 00:51:38', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `geopos_login_attempts`
--

CREATE TABLE `geopos_login_attempts` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(39) DEFAULT '0',
  `timestamp` datetime DEFAULT NULL,
  `login_attempts` tinyint(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `geopos_login_attempts`
--

INSERT INTO `geopos_login_attempts` (`id`, `ip_address`, `timestamp`, `login_attempts`) VALUES
(11, '37.111.137.209', '2020-08-11 10:49:31', 1),
(18, '119.158.109.200', '2020-08-18 06:45:15', 1),
(20, '::1', '2020-11-02 08:04:39', 2),
(24, '::1', '2020-11-03 18:10:17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `geopos_metadata`
--

CREATE TABLE `geopos_metadata` (
  `id` int(11) NOT NULL,
  `type` int(3) NOT NULL,
  `rid` int(11) NOT NULL,
  `col1` varchar(255) DEFAULT NULL,
  `col2` varchar(255) DEFAULT NULL,
  `d_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `geopos_metadata`
--

INSERT INTO `geopos_metadata` (`id`, `type`, `rid`, `col1`, `col2`, `d_date`) VALUES
(1, 9, 1, '60000', NULL, '2020-08-05'),
(2, 9, 2, '180000', NULL, '2020-08-05'),
(3, 9, 3, '0', NULL, '2020-08-06'),
(4, 9, 4, '120000', NULL, '2020-08-06'),
(5, 9, 5, '90000', NULL, '2020-08-06'),
(6, 9, 6, '111', NULL, '2020-08-11'),
(7, 9, 7, '333', NULL, '2020-08-11'),
(8, 9, 1, '60000', NULL, '2020-08-16'),
(9, 9, 8, '60000', NULL, '2020-08-22'),
(10, 9, 9, '0', NULL, '2020-08-25'),
(11, 9, 9, '60000', NULL, '2020-09-07'),
(12, 9, 10, '60000', NULL, '2020-09-11'),
(13, 9, 11, '200', NULL, '2020-09-11'),
(14, 1, 11, '153945manu.gif', NULL, '0000-00-00'),
(15, 9, 12, '400', NULL, '2020-09-12'),
(16, 9, 13, '1000', NULL, '2020-09-12'),
(17, 9, 14, '60000', NULL, '2020-09-12'),
(18, 9, 15, '1000', NULL, '2020-09-20'),
(19, 9, 16, '500', NULL, '2020-09-20'),
(20, 9, 17, '90500', NULL, '2020-09-29'),
(21, 9, 18, '60000', NULL, '2020-10-03'),
(22, 9, 19, '500', NULL, '2020-10-03'),
(23, 9, 20, '284', NULL, '2020-10-22'),
(24, 9, 21, '92.5', NULL, '2020-10-30'),
(25, 9, 22, '-16227', NULL, '2020-10-31'),
(26, 9, 23, '17282', NULL, '2020-11-09'),
(27, 9, 24, '1485', NULL, '2020-11-09'),
(28, 9, 25, '10', NULL, '2020-11-09'),
(29, 9, 26, '0', NULL, '2020-11-09'),
(30, 9, 1, '300000', NULL, '2020-11-09'),
(31, 9, 27, '1485', NULL, '2020-11-09'),
(32, 9, 2, '570000', NULL, '2020-11-25'),
(33, 9, 4, '380000', NULL, '2020-12-08'),
(34, 9, 5, '450000', NULL, '2020-12-08'),
(35, 9, 6, '111', NULL, '2020-12-08'),
(36, 9, 28, '10', NULL, '2020-12-09'),
(37, 9, 29, '390', NULL, '2020-12-09'),
(38, 9, 30, '0', NULL, '2020-12-09'),
(39, 9, 32, '0', NULL, '2020-12-09'),
(40, 9, 33, '0', NULL, '2020-12-10'),
(41, 9, 34, '400', NULL, '2020-12-10'),
(42, 9, 35, '10', NULL, '2020-12-10'),
(43, 9, 36, '1100', NULL, '2020-12-10'),
(44, 9, 1, '1100', NULL, '2020-12-14'),
(45, 9, 2, '0', NULL, '2020-12-14'),
(46, 9, 3, '0', NULL, '2020-12-14'),
(47, 9, 4, '0', NULL, '2020-12-14'),
(48, 9, 5, '0', NULL, '2020-12-14'),
(49, 9, 6, '540', NULL, '2020-12-14'),
(50, 9, 7, '1010', NULL, '2020-12-15'),
(51, 9, 8, '1908', NULL, '2020-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `geopos_milestones`
--

CREATE TABLE `geopos_milestones` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `exp` text NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `geopos_movers`
--

CREATE TABLE `geopos_movers` (
  `id` int(11) NOT NULL,
  `d_type` int(3) NOT NULL,
  `rid1` int(11) NOT NULL,
  `rid2` int(11) NOT NULL,
  `rid3` int(11) NOT NULL,
  `d_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `note` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_movers`
--

INSERT INTO `geopos_movers` (`id`, `d_type`, `rid1`, `rid2`, `rid3`, `d_time`, `note`) VALUES
(2, 1, 2, 5, 0, '2020-08-05 14:06:28', 'Stock Initialized'),
(4, 1, 4, 13, 0, '2020-08-20 04:51:52', 'Stock Initialized'),
(5, 1, 5, 5, 0, '2020-09-11 14:53:23', 'Stock Initialized'),
(6, 1, 364955, 100, 0, '2020-11-03 18:18:56', 'Stock Initialized'),
(7, 1, 364956, 1000, 0, '2020-11-03 18:39:47', 'Stock Initialized'),
(8, 1, 364957, 1000, 0, '2020-11-21 15:55:18', 'Stock Initialized'),
(9, 1, 364958, 100, 0, '2020-11-25 19:17:09', 'Stock Initialized');

-- --------------------------------------------------------

--
-- Table structure for table `geopos_notes`
--

CREATE TABLE `geopos_notes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `cdate` date NOT NULL,
  `last_edit` datetime NOT NULL DEFAULT current_timestamp(),
  `cid` int(11) NOT NULL DEFAULT 0,
  `fid` int(11) NOT NULL DEFAULT 0,
  `rid` int(11) NOT NULL DEFAULT 0,
  `ntype` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `geopos_pms`
--

CREATE TABLE `geopos_pms` (
  `id` int(11) UNSIGNED NOT NULL,
  `sender_id` int(11) UNSIGNED NOT NULL,
  `receiver_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text DEFAULT NULL,
  `date_sent` datetime DEFAULT NULL,
  `date_read` datetime DEFAULT NULL,
  `pm_deleted_sender` int(1) NOT NULL,
  `pm_deleted_receiver` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `geopos_premissions`
--

CREATE TABLE `geopos_premissions` (
  `id` int(11) NOT NULL,
  `module` enum('Sales','Stock','Crm','Project','Accounts','Miscellaneous','Employees','Assign Project','Customer Profile','Reports','Delete') NOT NULL,
  `r_1` int(1) NOT NULL,
  `r_2` int(1) NOT NULL,
  `r_3` int(1) NOT NULL,
  `r_4` int(1) NOT NULL,
  `r_5` int(1) NOT NULL,
  `r_6` int(1) NOT NULL,
  `r_7` int(1) NOT NULL,
  `r_8` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `geopos_premissions`
--

INSERT INTO `geopos_premissions` (`id`, `module`, `r_1`, `r_2`, `r_3`, `r_4`, `r_5`, `r_6`, `r_7`, `r_8`) VALUES
(1, 'Sales', 0, 1, 1, 1, 1, 0, 0, 0),
(2, 'Stock', 1, 0, 1, 1, 1, 0, 0, 0),
(3, 'Crm', 0, 0, 1, 1, 1, 0, 0, 0),
(4, 'Project', 0, 0, 0, 1, 1, 1, 0, 0),
(5, 'Accounts', 0, 0, 0, 1, 1, 0, 0, 0),
(6, 'Miscellaneous', 0, 0, 0, 1, 1, 0, 0, 0),
(7, 'Assign Project', 0, 1, 0, 0, 1, 0, 0, 0),
(8, 'Customer Profile', 0, 0, 0, 0, 1, 0, 0, 0),
(9, 'Employees', 0, 0, 0, 0, 1, 0, 0, 0),
(10, 'Reports', 0, 0, 0, 1, 1, 0, 0, 0),
(11, 'Delete', 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `geopos_products`
--

CREATE TABLE `geopos_products` (
  `pid` int(11) NOT NULL,
  `pcat` int(3) NOT NULL DEFAULT 1,
  `warehouse` int(11) NOT NULL DEFAULT 1,
  `product_name` varchar(80) NOT NULL,
  `product_code` varchar(30) DEFAULT NULL,
  `product_price` decimal(16,2) DEFAULT 0.00,
  `fproduct_price` decimal(16,2) DEFAULT 0.00,
  `taxrate` decimal(16,2) DEFAULT 0.00,
  `disrate` decimal(16,2) DEFAULT 0.00,
  `qty` decimal(10,2) NOT NULL,
  `product_des` text DEFAULT NULL,
  `alert` int(11) DEFAULT NULL,
  `unit` varchar(4) DEFAULT NULL,
  `image` varchar(120) DEFAULT 'default.png',
  `barcode` varchar(16) DEFAULT NULL,
  `merge` int(2) NOT NULL,
  `sub` int(11) NOT NULL,
  `vb` int(11) NOT NULL,
  `expiry` date DEFAULT NULL,
  `code_type` varchar(8) DEFAULT 'EAN13',
  `sub_id` int(11) DEFAULT 0,
  `b_id` int(11) DEFAULT 0,
  `daily_feed` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_products`
--

INSERT INTO `geopos_products` (`pid`, `pcat`, `warehouse`, `product_name`, `product_code`, `product_price`, `fproduct_price`, `taxrate`, `disrate`, `qty`, `product_des`, `alert`, `unit`, `image`, `barcode`, `merge`, `sub`, `vb`, `expiry`, `code_type`, `sub_id`, `b_id`, `daily_feed`, `created_at`) VALUES
(364955, 2, 1, 'Test SA', 'SAB', '100.00', '90.00', '10.00', '2.00', '95.00', ',jbcfjkc', 10, '', 'default.png', '330817987127', 0, 0, 0, NULL, 'EAN13', 3, 0, 0, '2020-11-20 18:13:32'),
(364956, 2, 1, 'Test SAB', 'SAB', '200.00', '190.00', '10.00', '0.00', '996.00', 'kgjmgjkg', 100, '', 'default.png', '293967759777', 0, 0, 0, NULL, '  EAN13', 3, NULL, 20, '2020-11-20 18:13:32'),
(364957, 2, 1, 'Test SAA', 'SAB2', '200.00', '176.00', '8.00', '2.00', '998.00', 'tet', 50, '', 'default.png', '867711794922', 0, 0, 0, NULL, 'EAN13', 3, 0, 5, '2020-11-21 20:55:18'),
(364958, 10, 1, 'German Cat11', 'German', '580.00', '500.00', '10.00', '5.00', '99.00', '', 10, '', 'default.png', '351788843093', 0, 0, 0, '2021-04-21', 'EAN13', 11, 0, 20, '2020-11-26 00:17:09');

-- --------------------------------------------------------

--
-- Table structure for table `geopos_product_cat`
--

CREATE TABLE `geopos_product_cat` (
  `id` int(3) NOT NULL,
  `title` varchar(100) NOT NULL,
  `extra` varchar(255) DEFAULT NULL,
  `c_type` int(2) DEFAULT 0,
  `rel_id` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_product_cat`
--

INSERT INTO `geopos_product_cat` (`id`, `title`, `extra`, `c_type`, `rel_id`) VALUES
(2, 'Laptops', 'Laptops', 0, 0),
(5, 'Lubricants', 'Total 20-40 W 4 Litre', 1, 4),
(6, 'Lubricants', 'Lubricants', 0, 0),
(7, 'ZIC', 'ZIC', 1, 6),
(8, 'Dell111', 'Dell 1111', 0, 0),
(9, 'sub cat of Dell111', 'sub cat of Dell111', 1, 8),
(10, 'Cats', 'test cats', 0, 0),
(11, 'German Cats', 'test cats', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `geopos_product_serials`
--

CREATE TABLE `geopos_product_serials` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `serial` varchar(200) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `geopos_product_serials`
--

INSERT INTO `geopos_product_serials` (`id`, `product_id`, `serial`, `status`) VALUES
(2, 2, '111', 0);

-- --------------------------------------------------------

--
-- Table structure for table `geopos_projects`
--

CREATE TABLE `geopos_projects` (
  `id` int(11) NOT NULL,
  `p_id` varchar(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` enum('Waiting','Pending','Terminated','Finished','Progress') NOT NULL DEFAULT 'Pending',
  `priority` enum('Low','Medium','High','Urgent') NOT NULL DEFAULT 'Medium',
  `progress` int(3) NOT NULL,
  `cid` int(11) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `phase` varchar(255) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `worth` decimal(16,2) NOT NULL DEFAULT 0.00,
  `ptype` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_projects`
--

INSERT INTO `geopos_projects` (`id`, `p_id`, `name`, `status`, `priority`, `progress`, `cid`, `sdate`, `edate`, `tag`, `phase`, `note`, `worth`, `ptype`) VALUES
(1, '', 'Test Project', 'Progress', 'Medium', 0, 0, '2020-08-11', '2020-09-10', 'tags', 'A', '', '0.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `geopos_project_meta`
--

CREATE TABLE `geopos_project_meta` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `meta_key` int(11) NOT NULL,
  `meta_data` varchar(200) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `key3` varchar(20) DEFAULT NULL,
  `key4` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_project_meta`
--

INSERT INTO `geopos_project_meta` (`id`, `pid`, `meta_key`, `meta_data`, `value`, `key3`, `key4`) VALUES
(1, 1, 12, NULL, '[Project Created]  @2020-08-11 09:14:02', NULL, 0),
(2, 1, 2, 'true', 'true', NULL, 0),
(3, 1, 19, '14', NULL, NULL, 0),
(4, 1, 29, '14', '1597137290', '1', 0),
(5, 1, 11, '7', '0', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `geopos_promo`
--

CREATE TABLE `geopos_promo` (
  `id` int(11) NOT NULL,
  `code` varchar(15) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `valid` date NOT NULL,
  `active` int(1) NOT NULL,
  `note` varchar(100) NOT NULL,
  `reflect` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `location` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_promo`
--

INSERT INTO `geopos_promo` (`id`, `code`, `amount`, `valid`, `active`, `note`, `reflect`, `qty`, `available`, `location`) VALUES
(1, 'RPCLY', '0.00', '2020-08-11', 0, '', 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `geopos_purchase`
--

CREATE TABLE `geopos_purchase` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `invoicedate` date NOT NULL,
  `invoiceduedate` date NOT NULL,
  `subtotal` decimal(16,2) DEFAULT 0.00,
  `shipping` decimal(16,2) DEFAULT 0.00,
  `ship_tax` decimal(16,2) DEFAULT NULL,
  `ship_tax_type` enum('incl','excl','off') DEFAULT 'off',
  `discount` decimal(16,2) DEFAULT 0.00,
  `tax` decimal(16,2) DEFAULT 0.00,
  `total` decimal(16,2) DEFAULT 0.00,
  `pmethod` varchar(14) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `status` enum('paid','due','canceled','partial') DEFAULT 'due',
  `csd` int(5) NOT NULL DEFAULT 0,
  `eid` int(4) NOT NULL,
  `pamnt` decimal(16,2) DEFAULT 0.00,
  `items` decimal(10,2) NOT NULL,
  `taxstatus` enum('yes','no','incl','cgst','igst') DEFAULT 'yes',
  `discstatus` tinyint(1) NOT NULL,
  `format_discount` enum('%','flat','b_p','bflat') DEFAULT NULL,
  `refer` varchar(20) DEFAULT NULL,
  `term` int(3) NOT NULL,
  `loc` int(4) NOT NULL,
  `multi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_purchase`
--

INSERT INTO `geopos_purchase` (`id`, `tid`, `invoicedate`, `invoiceduedate`, `subtotal`, `shipping`, `ship_tax`, `ship_tax_type`, `discount`, `tax`, `total`, `pmethod`, `notes`, `status`, `csd`, `eid`, `pamnt`, `items`, `taxstatus`, `discstatus`, `format_discount`, `refer`, `term`, `loc`, `multi`) VALUES
(1, 1001, '2020-09-11', '2020-09-11', '9500.00', '0.00', '0.00', 'incl', '0.00', '0.00', '9500.00', NULL, '', 'due', 1, 14, '0.00', '5.00', 'yes', 1, '%', '', 1, 0, NULL),
(2, 1002, '2020-11-04', '2020-11-04', '97.00', '0.00', '0.00', 'incl', '2.00', '9.00', '97.00', NULL, '', 'due', 1, 14, '0.00', '1.00', 'yes', 1, 'flat', '', 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `geopos_purchase_items`
--

CREATE TABLE `geopos_purchase_items` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `product` varchar(255) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `qty` decimal(10,2) NOT NULL,
  `price` decimal(16,2) DEFAULT 0.00,
  `tax` decimal(16,2) DEFAULT 0.00,
  `discount` decimal(16,2) DEFAULT 0.00,
  `subtotal` decimal(16,2) DEFAULT 0.00,
  `totaltax` decimal(16,2) DEFAULT 0.00,
  `totaldiscount` decimal(16,2) DEFAULT 0.00,
  `product_des` text DEFAULT NULL,
  `unit` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_purchase_items`
--

INSERT INTO `geopos_purchase_items` (`id`, `tid`, `pid`, `product`, `code`, `qty`, `price`, `tax`, `discount`, `subtotal`, `totaltax`, `totaldiscount`, `product_des`, `unit`) VALUES
(1, 1, 5, 'ZIC 3L 20-40W', '', '5.00', '1900.00', '0.00', '0.00', '9500.00', '0.00', '0.00', '', ''),
(2, 2, 364955, 'Test SAaa', 'SAB', '1.00', '90.00', '10.00', '2.00', '97.00', '9.00', '2.00', ',jbcfjkc', '');

-- --------------------------------------------------------

--
-- Table structure for table `geopos_quotes`
--

CREATE TABLE `geopos_quotes` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `invoicedate` date NOT NULL,
  `invoiceduedate` date NOT NULL,
  `subtotal` decimal(16,2) DEFAULT 0.00,
  `shipping` decimal(16,2) DEFAULT 0.00,
  `ship_tax` decimal(16,2) DEFAULT NULL,
  `ship_tax_type` enum('incl','excl','off') DEFAULT 'off',
  `discount` decimal(16,2) DEFAULT 0.00,
  `tax` decimal(16,2) DEFAULT 0.00,
  `total` decimal(16,2) DEFAULT 0.00,
  `pmethod` varchar(14) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `status` enum('pending','accepted','rejected','customer_approved') DEFAULT 'pending',
  `csd` int(5) NOT NULL DEFAULT 0,
  `eid` int(4) NOT NULL,
  `pamnt` decimal(16,2) NOT NULL,
  `items` decimal(10,2) NOT NULL,
  `taxstatus` enum('yes','no','incl','cgst','igst') DEFAULT 'yes',
  `discstatus` tinyint(1) NOT NULL,
  `format_discount` enum('%','flat','b_p','bflat') DEFAULT '%',
  `refer` varchar(20) DEFAULT NULL,
  `term` int(3) NOT NULL,
  `proposal` text DEFAULT NULL,
  `multi` int(4) DEFAULT NULL,
  `loc` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_quotes`
--

INSERT INTO `geopos_quotes` (`id`, `tid`, `invoicedate`, `invoiceduedate`, `subtotal`, `shipping`, `ship_tax`, `ship_tax_type`, `discount`, `tax`, `total`, `pmethod`, `notes`, `status`, `csd`, `eid`, `pamnt`, `items`, `taxstatus`, `discstatus`, `format_discount`, `refer`, `term`, `proposal`, `multi`, `loc`) VALUES
(1, 1001, '2020-08-11', '2020-07-12', '111.00', '0.00', '0.00', 'incl', '0.00', '0.00', '111.00', NULL, '', 'accepted', 1, 14, '0.00', '1.00', 'yes', 1, '%', '', 1, '', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `geopos_quotes_items`
--

CREATE TABLE `geopos_quotes_items` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `product` varchar(255) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `qty` decimal(16,2) NOT NULL,
  `price` decimal(16,2) DEFAULT 0.00,
  `tax` decimal(16,2) DEFAULT 0.00,
  `discount` decimal(16,2) DEFAULT 0.00,
  `subtotal` decimal(16,2) DEFAULT 0.00,
  `totaltax` decimal(16,2) DEFAULT 0.00,
  `totaldiscount` decimal(16,2) DEFAULT 0.00,
  `product_des` text DEFAULT NULL,
  `unit` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_quotes_items`
--

INSERT INTO `geopos_quotes_items` (`id`, `tid`, `pid`, `product`, `code`, `qty`, `price`, `tax`, `discount`, `subtotal`, `totaltax`, `totaldiscount`, `product_des`, `unit`) VALUES
(1, 1, 0, 'yyy', '', '1.00', '111.00', '0.00', '0.00', '111.00', '0.00', '0.00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `geopos_register`
--

CREATE TABLE `geopos_register` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `o_date` datetime NOT NULL,
  `c_date` datetime NOT NULL,
  `cash` decimal(16,2) NOT NULL,
  `card` decimal(16,2) NOT NULL,
  `bank` decimal(16,2) NOT NULL,
  `cheque` decimal(16,2) NOT NULL,
  `r_change` decimal(16,2) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_register`
--

INSERT INTO `geopos_register` (`id`, `uid`, `o_date`, `c_date`, `cash`, `card`, `bank`, `cheque`, `r_change`, `active`) VALUES
(1, 14, '2020-08-05 14:03:41', '0000-00-00 00:00:00', '2662678.78', '0.00', '0.00', '0.00', '700.00', 1),
(2, 15, '2020-09-20 06:17:35', '2020-09-20 06:25:35', '4990.00', '0.00', '0.00', '0.00', '0.00', 0),
(3, 15, '2020-09-20 10:08:46', '0000-00-00 00:00:00', '2490.00', '0.00', '0.00', '0.00', '0.00', 1),
(4, 16, '2020-10-03 08:08:09', '0000-00-00 00:00:00', '190000.00', '0.00', '0.00', '0.00', '0.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `geopos_reports`
--

CREATE TABLE `geopos_reports` (
  `id` int(11) NOT NULL,
  `month` varchar(10) DEFAULT NULL,
  `year` int(4) NOT NULL,
  `invoices` int(11) NOT NULL,
  `sales` decimal(16,2) DEFAULT 0.00,
  `items` decimal(10,2) NOT NULL,
  `income` decimal(16,2) DEFAULT 0.00,
  `expense` decimal(16,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `geopos_restkeys`
--

CREATE TABLE `geopos_restkeys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) DEFAULT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `geopos_services`
--

CREATE TABLE `geopos_services` (
  `pid` int(11) NOT NULL,
  `pcat` int(3) NOT NULL DEFAULT 1,
  `warehouse` int(11) NOT NULL DEFAULT 1,
  `service_name` varchar(80) NOT NULL,
  `service_code` varchar(30) DEFAULT NULL,
  `service_price` decimal(16,2) DEFAULT 0.00,
  `taxrate` decimal(16,2) DEFAULT 0.00,
  `disrate` decimal(16,2) DEFAULT 0.00,
  `service_des` text DEFAULT NULL,
  `image` varchar(120) DEFAULT 'default.png',
  `barcode` varchar(16) DEFAULT NULL,
  `sub` int(11) NOT NULL,
  `expiry` date DEFAULT NULL,
  `code_type` varchar(8) DEFAULT 'EAN13',
  `sub_id` int(11) DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_services`
--

INSERT INTO `geopos_services` (`pid`, `pcat`, `warehouse`, `service_name`, `service_code`, `service_price`, `taxrate`, `disrate`, `service_des`, `image`, `barcode`, `sub`, `expiry`, `code_type`, `sub_id`, `created_at`) VALUES
(2, 3, 0, 'Grooming', '123', '1000.00', '10.00', '2.00', 'description', 'default.png', '495530018891', 0, NULL, 'EAN13', 0, '2020-11-21 20:41:21'),
(4, 2, 0, 'Service 2', '67677', '100.00', '15.00', '2.00', 'testing', 'default.png', '660766855946', 0, NULL, 'EAN13', 0, '2020-12-09 23:18:01');

-- --------------------------------------------------------

--
-- Table structure for table `geopos_service_cat`
--

CREATE TABLE `geopos_service_cat` (
  `id` int(3) NOT NULL,
  `title` varchar(100) NOT NULL,
  `extra` varchar(255) DEFAULT NULL,
  `c_type` int(2) DEFAULT 0,
  `rel_id` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_service_cat`
--

INSERT INTO `geopos_service_cat` (`id`, `title`, `extra`, `c_type`, `rel_id`) VALUES
(2, 'test2', 'testing', 0, 0),
(3, 'Service111', 'this is test services111', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `geopos_smtp`
--

CREATE TABLE `geopos_smtp` (
  `id` int(11) NOT NULL,
  `host` varchar(100) NOT NULL,
  `port` int(11) NOT NULL,
  `auth` enum('true','false') NOT NULL,
  `auth_type` enum('none','tls','ssl') NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `sender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_smtp`
--

INSERT INTO `geopos_smtp` (`id`, `host`, `port`, `auth`, `auth_type`, `username`, `password`, `sender`) VALUES
(1, 'smtp.com', 587, 'true', 'none', 'support@example.com', '123456', 'support@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `geopos_stock_r`
--

CREATE TABLE `geopos_stock_r` (
  `id` int(11) NOT NULL,
  `tid` int(8) NOT NULL,
  `invoicedate` date NOT NULL,
  `invoiceduedate` date NOT NULL,
  `subtotal` decimal(16,2) DEFAULT 0.00,
  `shipping` decimal(16,2) DEFAULT 0.00,
  `ship_tax` decimal(16,2) DEFAULT NULL,
  `ship_tax_type` enum('incl','excl','off') DEFAULT 'off',
  `discount` decimal(16,2) DEFAULT 0.00,
  `tax` decimal(16,2) DEFAULT 0.00,
  `total` decimal(16,2) DEFAULT 0.00,
  `pmethod` varchar(14) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `status` enum('pending','accepted','rejected','partial','canceled') DEFAULT 'pending',
  `csd` int(5) NOT NULL DEFAULT 0,
  `eid` int(4) NOT NULL,
  `pamnt` decimal(16,2) DEFAULT 0.00,
  `items` decimal(10,0) NOT NULL,
  `taxstatus` enum('yes','no','incl','cgst','igst') DEFAULT 'yes',
  `discstatus` tinyint(1) NOT NULL,
  `format_discount` enum('%','flat','bflat','b_p') DEFAULT NULL,
  `refer` varchar(20) DEFAULT NULL,
  `term` int(3) NOT NULL,
  `loc` int(4) NOT NULL,
  `i_class` int(1) NOT NULL DEFAULT 0,
  `multi` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `geopos_stock_r_items`
--

CREATE TABLE `geopos_stock_r_items` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `product` varchar(255) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `qty` decimal(10,2) NOT NULL,
  `price` decimal(16,2) DEFAULT 0.00,
  `tax` decimal(16,2) DEFAULT 0.00,
  `discount` decimal(16,2) DEFAULT 0.00,
  `subtotal` decimal(16,2) DEFAULT 0.00,
  `totaltax` decimal(16,2) DEFAULT 0.00,
  `totaldiscount` decimal(16,2) DEFAULT 0.00,
  `product_des` text DEFAULT NULL,
  `unit` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `geopos_supplier`
--

CREATE TABLE `geopos_supplier` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `region` varchar(30) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `postbox` varchar(20) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `picture` varchar(100) NOT NULL DEFAULT 'example.png',
  `gid` int(5) NOT NULL DEFAULT 1,
  `company` varchar(100) DEFAULT NULL,
  `taxid` varchar(100) DEFAULT NULL,
  `loc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_supplier`
--

INSERT INTO `geopos_supplier` (`id`, `name`, `phone`, `address`, `city`, `region`, `country`, `postbox`, `email`, `picture`, `gid`, `company`, `taxid`, `loc`) VALUES
(1, 'Jamal Brothers', '12312312', '', '', '', '', '', 'admin@example.com', 'example.png', 1, NULL, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `geopos_system`
--

CREATE TABLE `geopos_system` (
  `id` int(1) NOT NULL,
  `cname` char(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(30) NOT NULL,
  `region` varchar(40) NOT NULL,
  `country` varchar(30) NOT NULL,
  `postbox` varchar(15) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `taxid` varchar(20) NOT NULL,
  `tax` int(11) NOT NULL,
  `currency` varchar(4) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `currency_format` int(1) NOT NULL,
  `prefix` varchar(5) NOT NULL,
  `dformat` int(1) NOT NULL,
  `zone` varchar(25) NOT NULL,
  `logo` varchar(30) NOT NULL,
  `lang` varchar(20) DEFAULT 'english',
  `foundation` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_system`
--

INSERT INTO `geopos_system` (`id`, `cname`, `address`, `city`, `region`, `country`, `postbox`, `phone`, `email`, `taxid`, `tax`, `currency`, `currency_format`, `prefix`, `dformat`, `zone`, `logo`, `lang`, `foundation`) VALUES
(1, 'ABC Company', '412 Example South Street,', 'Los Angeles', 'FL', 'USA', '123', '410-987-89-60', 'support@ultimatekode.com', '23442', -1, 'SAR', 0, 'SRN', 1, 'Etc/Greenwich', '1597824941101799317.png', 'english', '2020-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `geopos_terms`
--

CREATE TABLE `geopos_terms` (
  `id` int(4) NOT NULL,
  `title` varchar(100) NOT NULL,
  `type` int(1) NOT NULL,
  `terms` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_terms`
--

INSERT INTO `geopos_terms` (`id`, `title`, `type`, `terms`) VALUES
(1, 'Payment On Receipt', 0, '<p>1. 10% discount if payment received within ten days otherwise payment 30 days\n            after invoice date<br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `geopos_tickets`
--

CREATE TABLE `geopos_tickets` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `cid` int(11) NOT NULL,
  `status` enum('Solved','Processing','Waiting') NOT NULL,
  `section` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `geopos_tickets_th`
--

CREATE TABLE `geopos_tickets_th` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `cid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `cdate` datetime NOT NULL,
  `attach` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `geopos_todolist`
--

CREATE TABLE `geopos_todolist` (
  `id` int(11) NOT NULL,
  `tdate` date NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `status` enum('Due','Done','Progress') NOT NULL DEFAULT 'Due',
  `start` date NOT NULL,
  `duedate` date NOT NULL,
  `description` text DEFAULT NULL,
  `eid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `related` int(11) NOT NULL,
  `priority` enum('Low','Medium','High','Urgent') NOT NULL,
  `rid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `geopos_transactions`
--

CREATE TABLE `geopos_transactions` (
  `id` int(11) NOT NULL,
  `acid` int(11) NOT NULL,
  `account` varchar(200) NOT NULL,
  `type` enum('Income','Expense','Transfer') NOT NULL,
  `cat` varchar(200) NOT NULL,
  `debit` decimal(16,2) DEFAULT 0.00,
  `credit` decimal(16,2) DEFAULT 0.00,
  `payer` varchar(200) DEFAULT NULL,
  `payerid` int(11) NOT NULL DEFAULT 0,
  `method` varchar(200) DEFAULT NULL,
  `date` date NOT NULL,
  `tid` int(11) NOT NULL DEFAULT 0,
  `eid` int(11) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `ext` int(1) DEFAULT 0,
  `loc` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_transactions`
--

INSERT INTO `geopos_transactions` (`id`, `acid`, `account`, `type`, `cat`, `debit`, `credit`, `payer`, `payerid`, `method`, `date`, `tid`, `eid`, `note`, `ext`, `loc`) VALUES
(1, 1, 'Sales Account', 'Income', 'Sales', '0.00', '300000.00', 'Walk-in Client', 1, 'Cash', '2020-08-05', 1, 14, '#1001-Cash', 0, 0),
(2, 1, 'Sales Account', 'Income', 'Sales', '0.00', '570000.00', 'Walk-in Client', 1, 'Cash', '2020-08-05', 2, 14, '#1002-Cash', 0, 0),
(4, 1, 'Sales Account', 'Income', 'Sales', '0.00', '380000.00', 'Walk-in Client', 1, 'Cash', '2020-08-06', 4, 14, '#1003-Cash', 0, 0),
(5, 1, 'Sales Account', 'Income', 'Sales', '0.00', '450000.00', 'Walk-in Client', 1, 'Cash', '2020-08-06', 5, 14, '#1004-Cash', 0, 0),
(6, 1, 'Sales Account', 'Expense', 'Coupon', '0.00', '0.00', 'Coupon-RPCLY', 0, 'Transfer', '2020-08-11', 0, 14, 'Coupon Qty-1', 0, 0),
(7, 1, 'Sales Account', 'Income', 'Sales', '0.00', '190000.00', 'Walk-in Client', 1, 'Cash', '2020-08-22', 8, 14, '#1005-Cash', 0, 0),
(8, 1, 'Sales Account', 'Income', 'Sales', '0.00', '190000.00', 'Walk-in Client', 1, 'Cash', '2020-09-07', 9, 14, '#1006-Cash', 0, 0),
(9, 1, 'Sales Account', 'Income', 'Sales', '0.00', '2100.00', 'Walk-in Client', 1, 'Cash', '2020-09-11', 11, 14, '#1007-Cash', 0, 0),
(10, 1, 'Sales Account', 'Income', 'Sales', '0.00', '4200.00', 'Walk-in Client', 1, 'Cash', '2020-09-12', 12, 14, '#1008-Cash', 0, 0),
(11, 1, 'Sales Account', 'Income', 'Sales', '0.00', '1000.00', 'Walk-in Client', 1, 'Cash', '2020-09-12', 13, 14, '#1009-Cash', 0, 0),
(12, 1, 'Sales Account', 'Income', 'Sales', '0.00', '190000.00', 'Walk-in Client', 1, 'Cash', '2020-09-12', 14, 14, '#1010-Cash', 0, 0),
(13, 1, 'Sales Account', 'Income', 'Sales', '0.00', '4990.00', 'Walk-in Client', 1, 'Cash', '2020-09-20', 15, 14, '#1011-Cash', 0, 0),
(14, 1, 'Sales Account', 'Income', 'Sales', '0.00', '2490.00', 'Walk-in Client', 1, 'Cash', '2020-09-20', 16, 14, '#1012-Cash', 0, 0),
(15, 1, 'Sales Account', 'Income', 'Sales', '0.00', '342490.00', 'Walk-in Client', 1, 'Cash', '2020-09-29', 17, 14, '#1013-Cash', 0, 0),
(16, 1, 'Sales Account', 'Income', 'Sales', '0.00', '190000.00', 'Walk-in Client', 1, 'Cash', '2020-10-03', 18, 16, '#1014-Cash', 0, 0),
(17, 1, 'Sales Account', 'Income', 'Sales', '0.00', '1000.00', 'Mobin Akhtar', 4, 'Cash', '2020-10-03', 19, 14, '#1014-Cash', 0, 0),
(18, 1, 'Sales Account', 'Income', 'Sales', '0.00', '401.66', 'Walk-in Client', 1, 'Cash', '2020-10-22', 20, 14, '#1015-Cash', 0, 0),
(19, 1, 'Sales Account', 'Income', 'Sales', '0.00', '124.00', 'Walk-in Client', 1, 'Cash', '2020-10-30', 21, 14, '#1016-Cash', 0, 0),
(20, 1, 'Sales Account', 'Income', 'Sales', '0.00', '78.00', 'Walk-in Client', 1, 'Cash', '2020-10-31', 22, 14, '#1017-Cash', 0, 0),
(21, 1, 'Sales Account', 'Income', 'Sales', '0.00', '26699.20', 'Walk-in Client', 1, 'Cash', '2020-11-09', 23, 16, '#1018-Cash', 0, 0),
(22, 1, 'Sales Account', 'Income', 'Sales', '0.00', '1514.76', 'Walk-in Client', 1, 'Cash', '2020-11-09', 24, 16, '#1018-Cash', 0, 0),
(23, 1, 'Sales Account', 'Income', 'Sales', '0.00', '1514.76', 'Walk-in Client', 1, 'Cash', '2020-11-09', 27, 14, '#1019-Cash', 0, 0),
(24, 1, 'Sales Account', 'Income', 'Sales', '0.00', '1319.00', 'Walk-in Client', 1, 'Cash', '2020-12-09', 28, 14, '#1020-Cash', 0, 0),
(25, 1, 'Sales Account', 'Income', 'Sales', '0.00', '1736.00', 'Walk-in Client', 1, 'Cash', '2020-12-09', 29, 14, '#1021-Cash', 0, 0),
(29, 1, 'Sales Account', 'Income', 'Sales', '0.00', '746.00', 'Walk-in Client', 1, 'Cash', '2020-12-10', 34, 14, '#1022-Cash', 0, 0),
(30, 1, 'Sales Account', 'Income', 'Sales', '0.00', '108.00', 'Walk-in Client', 1, 'Cash', '2020-12-10', 35, 14, '#1023-Cash', 0, 0),
(31, 1, 'Sales Account', 'Income', 'Sales', '0.00', '1211.00', 'Walk-in Client', 1, 'Cash', '2020-12-10', 36, 14, '#1024-Cash', 0, 0),
(32, 1, 'Sales Account', 'Income', 'Sales', '0.00', '1211.00', 'Walk-in Client', 1, 'Cash', '2020-12-14', 1, 14, '#1001-Cash', 0, 0),
(37, 1, 'Sales Account', 'Income', 'Sales', '0.00', '1142.00', 'Walk-in Client', 1, 'Cash', '2020-12-14', 6, 14, '#1002-Cash', 0, 0),
(38, 1, 'Sales Account', 'Income', 'Sales', '0.00', '1206.00', 'Walk-in Client', 1, 'Cash', '2020-12-15', 7, 14, '#1003-Cash', 0, 0),
(39, 1, 'Sales Account', 'Income', 'Sales', '0.00', '2877.40', 'Walk-in Client', 1, 'Cash', '2020-12-15', 8, 14, '#1004-Cash', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `geopos_trans_cat`
--

CREATE TABLE `geopos_trans_cat` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_trans_cat`
--

INSERT INTO `geopos_trans_cat` (`id`, `name`) VALUES
(1, 'Income'),
(2, 'Expenses'),
(3, 'Other'),
(4, 'Transportation');

-- --------------------------------------------------------

--
-- Table structure for table `geopos_units`
--

CREATE TABLE `geopos_units` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `code` varchar(5) NOT NULL,
  `type` int(1) NOT NULL,
  `sub` int(1) NOT NULL,
  `rid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_units`
--

INSERT INTO `geopos_units` (`id`, `name`, `code`, `type`, `sub`, `rid`) VALUES
(1, 'Black ', '', 0, 0, 0),
(2, 'Black Small', '', 2, 0, 1),
(3, 'Brown', '', 1, 0, 0),
(4, 'Brown Small', '', 2, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `geopos_users`
--

CREATE TABLE `geopos_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `banned` tinyint(1) DEFAULT 0,
  `last_login` datetime DEFAULT NULL,
  `last_activity` datetime DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `forgot_exp` text DEFAULT NULL,
  `remember_time` datetime DEFAULT NULL,
  `remember_exp` text DEFAULT NULL,
  `verification_code` text DEFAULT NULL,
  `totp_secret` varchar(16) DEFAULT NULL,
  `ip_address` text DEFAULT NULL,
  `roleid` int(1) NOT NULL,
  `picture` varchar(50) DEFAULT NULL,
  `loc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_users`
--

INSERT INTO `geopos_users` (`id`, `email`, `pass`, `username`, `banned`, `last_login`, `last_activity`, `date_created`, `forgot_exp`, `remember_time`, `remember_exp`, `verification_code`, `totp_secret`, `ip_address`, `roleid`, `picture`, `loc`) VALUES
(14, 'jawwad.nissar@gmail.com', '2a74b4a28f00408c278c6620a81f507dd1a74a7e0237eab83c4a967665968f48', 'admin', 0, '2020-12-15 19:42:51', '2020-12-15 19:42:51', '2020-08-05 03:04:53', NULL, '2020-08-28 00:00:00', 'E3J746Bnt5eFqGDi', '', NULL, '::1', 5, 'example.png', 0),
(15, 'sales@admin.com', 'e8d3033f22d171fcd95dc6f6f9c455c64cf75931eba8bb8d996b3871033b6975', 'saleman1', 0, '2020-09-20 10:08:38', '2020-09-20 10:08:38', '2020-09-20 06:15:48', NULL, NULL, NULL, NULL, NULL, '::1', 2, 'example.png', 0),
(16, 'cashier444@admin.com', '8c04f0d45d99fb3c09f7c82165b9672b53145f042c0d27a0067b25103c26408f', 'cashier444', 0, '2020-10-03 08:07:55', '2020-10-03 08:07:55', '2020-10-03 08:07:35', NULL, NULL, NULL, NULL, NULL, '::1', 2, 'example.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `geopos_warehouse`
--

CREATE TABLE `geopos_warehouse` (
  `id` int(3) NOT NULL,
  `title` varchar(100) NOT NULL,
  `extra` varchar(255) DEFAULT NULL,
  `loc` int(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geopos_warehouse`
--

INSERT INTO `geopos_warehouse` (`id`, `title`, `extra`, `loc`) VALUES
(1, 'Main WareHouse', 'The Main WareHouse', 0);

-- --------------------------------------------------------

--
-- Table structure for table `univarsal_api`
--

CREATE TABLE `univarsal_api` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `key1` varchar(255) DEFAULT NULL,
  `key2` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `method` varchar(10) DEFAULT NULL,
  `other` text DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `univarsal_api`
--

INSERT INTO `univarsal_api` (`id`, `name`, `key1`, `key2`, `url`, `method`, `other`, `active`) VALUES
(1, 'Goo.gl URL Shortner', 'yourkey', '0', '0', '0', '0', 0),
(2, 'Twilio SMS API', 'ac', 'key', '+11234567', '0', '0', 1),
(3, 'Company Support', '1', '1', 'support@gmail.com', NULL, '<p>Your footer</p>', 1),
(4, 'Currency', '.', ',', '2', 'l', '', 0),
(5, 'Exchange', 'key1v', 'key2', 'USD', NULL, NULL, 0),
(6, 'New Invoice Notification', '[{Company}] Invoice #{BillNumber} Generated', NULL, NULL, NULL, '<p>Dear\n            Client,\r\n</p><p>We are contacting you in regard to a payment received for invoice # {BillNumber} that has\n            been created on your account. You may find the invoice with below link.\r\n\r\nView\n            Invoice\r\n{URL}\r\n\r\nWe look forward to conducting future business with you.\r\n\r\nKind\n            Regards,\r\nTeam\r\n{CompanyDetails}</p>', NULL),
(7, 'Invoice Payment Reminder', '[{Company}] Invoice #{BillNumber} Payment Reminder', NULL, NULL, NULL, '<p>Dear\n            Client,</p><p>We are contacting you in regard to a payment reminder of invoice # {BillNumber} that has been\n            created on your account. You may find the invoice with below link. Please pay the balance of {Amount} due by\n            {DueDate}.</p><p>\r\n\r\n<b>View Invoice</b></p><p><span style=\"font-size: 1rem;\">{URL}\r\n</span></p><p>\n            <span style=\"font-size: 1rem;\">\r\nWe look forward to conducting future business with you.</span></p><p>\n            <span style=\"font-size: 1rem;\">\r\n\r\nKind Regards,\r\n</span></p><p><span style=\"font-size: 1rem;\">\r\nTeam\r\n</span>\n        </p><p><span style=\"font-size: 1rem;\">\r\n{CompanyDetails}</span></p>', NULL),
(8, 'Invoice Refund Proceeded', '{Company} Invoice #{BillNumber} Refund Proceeded', NULL, NULL, NULL, '<p>Dear\n            Client,</p><p>\r\nWe are contacting you in regard to a refund request processed for invoice # {BillNumber}\n            that has been created on your account. You may find the invoice with below link. Please pay the balance of\n            {Amount} by {DueDate}.\r\n</p><p>\r\nView Invoice\r\n</p><p>{URL}\r\n</p><p>\r\nWe look forward to\n            conducting future business with you.\r\n</p><p>\r\nKind Regards,\r\n</p><p>\n            \r\nTeam\r\n\r\n{CompanyDetails}</p>', NULL),
(9, 'Invoice payment Received', '{Company} Payment Received for Invoice #{BillNumber}', NULL, NULL, NULL, '<p>\n            Dear Client,\r\n</p><p>We are contacting you in regard to a payment received for invoice # {BillNumber} that\n            has been created on your account. You can find the invoice with below link.\r\n</p><p>\r\nView Invoice</p>\n        <p>\r\n{URL}\r\n</p><p>\r\nWe look forward to conducting future business with you.\r\n</p><p>\r\nKind\n            Regards,\r\n</p><p>\r\nTeam\r\n</p><p>\r\n{CompanyDetails}</p>', NULL),
(10, 'Invoice Overdue Notice', '{Company} Invoice #{BillNumber} Generated for you', NULL, NULL, NULL, '<p>Dear\n            Client,</p><p>\r\nWe are contacting you in regard to an Overdue Notice for invoice # {BillNumber} that has\n            been created on your account. You may find the invoice with below link.\r\nPlease pay the balance of\n            {Amount} due by {DueDate}.\r\n</p><p>View Invoice\r\n</p><p>{URL}\r\n</p><p>\r\nWe look forward to\n            conducting future business with you.\r\n</p><p>\r\nKind Regards,\r\n</p><p>\r\nTeam</p><p>\n            \r\n\r\n{CompanyDetails}</p>', NULL),
(11, 'Quote Proposal', '{Company} Quote #{BillNumber} Generated for you', NULL, NULL, NULL, '<p>Dear Client,</p>\n        <p>\r\nWe are contacting you in regard to a new quote # {BillNumber} that has been created on your account. You\n            may find the quote with below link.\r\n</p><p>\r\nView Invoice\r\n</p><p>{URL}\r\n</p><p>\r\nWe look forward\n            to conducting future business with you.</p><p>\r\n\r\nKind Regards,</p><p>\r\n\r\nTeam</p><p>\n            \r\n\r\n{CompanyDetails}</p>', NULL),
(12, 'Purchase Order Request', '{Company} Purchase Order #{BillNumber} Requested', NULL, NULL, NULL, '<p>Dear\n            Client,\r\n</p><p>We are contacting you in regard to a new purchase # {BillNumber} that has been requested\n            on your account. You may find the order with below link. </p><p>\r\n\r\nView Invoice\r\n</p><p>{URL}</p><p>\n            \r\n\r\nWe look forward to conducting future business with you.</p><p>\r\n\r\nKind Regards,\r\n</p><p>\n            \r\nTeam</p><p>\r\n\r\n{CompanyDetails}</p>', NULL),
(13, 'Stock Return Mail', '{Company} New purchase return # {BillNumber}', NULL, NULL, NULL, 'Dear Client,\r\n\r\nWe are contacting you in regard to a new purchase return # {BillNumber} that has been requested on your account. You may find the order with below link.\r\n\r\nView Invoice\r\n\r\n{URL}\r\n\r\nWe look forward to conducting future business with you.\r\n\r\nKind Regards,\r\n\r\nTeam\r\n\r\n{CompanyDetails}', NULL),
(14, 'Customer Registration', '{Company}  Customer Registration - {NAME}', NULL, NULL, NULL, 'Dear Customer,\r\nThank You for registration, please confirm the registration by the following URL {REG_URL}\r\nRegards', NULL),
(15, ' Customer Password Reset', '{Company}  Customer Password Reset- {NAME}', NULL, NULL, NULL, 'Dear Customer,\r\nPlease reset the password by the following URL {RESET_URL}\r\nRegards', NULL),
(16, 'Customer Registration by Employee', '{Company}  Customer Registration - {NAME}', '0', '0', '0', 'Dear Customer,\r\nThank You for registration.\r\nLogin URL: {URL}\r\nLogin Email: {EMAIL}\r\nPassword: {PASSWORD}\r\n\r\nRegards\r\n{CompanyDetails}', 0),
(30, 'New Invoice Notification', NULL, NULL, NULL, NULL, 'Dear Customer, new invoice  # {BillNumber} generated. {URL} Regards', NULL),
(31, 'Invoice Payment Reminder', NULL, NULL, NULL, NULL, 'Dear Customer, Please make payment of invoice  # {BillNumber}. {URL} Regards', NULL),
(32, 'Invoice Refund Proceeded', NULL, NULL, NULL, NULL, 'Dear Customer, Refund generated of invoice # {BillNumber}. {URL} Regards', NULL),
(33, 'Invoice payment Received', NULL, NULL, NULL, NULL, 'Dear Customer, Payment received of invoice # {BillNumber}. {URL} Regards', NULL),
(34, 'Invoice Overdue Notice', NULL, NULL, NULL, NULL, 'Dear Customer, Dear Customer,Payment is overdue of invoice # {BillNumber}. {URL} Regards', NULL),
(35, 'Quote Proposal', NULL, NULL, NULL, NULL, 'Dear Customer, Dear Customer, a quote created for you # {BillNumber}. {URL} Regards', NULL),
(36, 'Purchase Order Request', NULL, NULL, NULL, NULL, 'Dear Customer, Dear, a purchased order for you # {BillNumber}. {URL} Regards', NULL),
(51, 'QT#', 'PO#', 'SUB#', 'SR#', 'TRN#', 'SRN#', 1),
(52, 'ThermalPrint', '0', NULL, NULL, NULL, 'POS#', 0),
(53, 'ConfPort', 'Public Key', '0', 'Private Key', NULL, NULL, 1),
(54, 'online_payment', '1', 'USD', '1', '1', NULL, 1),
(55, 'CronJob', '99293768', 'rec_email', 'email', 'rec_due', 'recemail', NULL),
(56, 'Auto Email SMS', 'email', 'sms', NULL, NULL, NULL, NULL),
(60, 'Warehouse', '1', NULL, NULL, NULL, NULL, NULL),
(61, 'Discount & Shipping', 'flat', '0.00', 'incl', NULL, 'Flat Discount After TAX', 0),
(62, 'AutoAttendance', '1', '0', '0', '0', '0', NULL),
(63, 'Zero Stock Billing', '1', '0', '0', '0', '0', 0),
(64, 'FrontEndSection', '0', '0', '0', '0', NULL, 0),
(65, 'Dual Entry', '0', '1', '0', '0', '0', 0),
(66, 'Email Alert', '0', '0', 'sample@email.com', '0', '0', 0),
(67, 'billing_settings', '0', '0', NULL, NULL, NULL, NULL),
(69, 'pos_settings', '1', '0', '0', '0', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `var_key` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `is_deleted` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `lang` varchar(25) NOT NULL DEFAULT 'english',
  `code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `user_id`, `var_key`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`, `cid`, `lang`, `code`) VALUES
(1, '1', NULL, 'active', '0', 'Walk-in Client', '$2y$10$TKfTVltchv/jxZIouy8i8O7rSzVvtdx4Y5wNRodK5RNyTBJkEoIAW', 'example@example.com', NULL, 'Member', 1, 'english', NULL),
(2, '1', NULL, 'active', '0', 'KoreLinks Technologies', '$2y$10$ncKYSQu8scg1pRPy3JKjHeuLzvOg272O6JAw1Ne74L8B1zaUS2c7G', 'korelinks@korelinks.com', NULL, 'Member', 2, 'english', NULL),
(3, '1', NULL, 'active', '0', '', '$2y$10$gRGky21e77E1AjRRK7BzR.7e0fCFxQ2NLRepKxsDoEWfULT2/rjD.', '', NULL, 'Member', 3, '', NULL),
(4, '1', NULL, 'active', '0', 'Mobin Akhtar', '$2y$10$X.HutMi/AEqcY.STOqgAcu.vKoEtbZyzAECEjEw3WlHRctUmx1mla', 'admin@example.com', NULL, 'Member', 4, '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `geopos_accounts`
--
ALTER TABLE `geopos_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `acn` (`acn`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `geopos_attendance`
--
ALTER TABLE `geopos_attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp` (`emp`);

--
-- Indexes for table `geopos_bank_ac`
--
ALTER TABLE `geopos_bank_ac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_config`
--
ALTER TABLE `geopos_config`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `geopos_currencies`
--
ALTER TABLE `geopos_currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_customers`
--
ALTER TABLE `geopos_customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gid` (`gid`);

--
-- Indexes for table `geopos_custom_data`
--
ALTER TABLE `geopos_custom_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fid` (`field_id`,`rid`);

--
-- Indexes for table `geopos_custom_fields`
--
ALTER TABLE `geopos_custom_fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `f_module` (`f_module`);

--
-- Indexes for table `geopos_cust_group`
--
ALTER TABLE `geopos_cust_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_documents`
--
ALTER TABLE `geopos_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_draft`
--
ALTER TABLE `geopos_draft`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eid` (`eid`),
  ADD KEY `csd` (`csd`),
  ADD KEY `invoice` (`tid`) USING BTREE,
  ADD KEY `i_class` (`i_class`),
  ADD KEY `loc` (`loc`);

--
-- Indexes for table `geopos_draft_items`
--
ALTER TABLE `geopos_draft_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice` (`tid`),
  ADD KEY `i_class` (`i_class`);

--
-- Indexes for table `geopos_employees`
--
ALTER TABLE `geopos_employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_events`
--
ALTER TABLE `geopos_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rel` (`rel`),
  ADD KEY `rid` (`rid`);

--
-- Indexes for table `geopos_gateways`
--
ALTER TABLE `geopos_gateways`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_hrm`
--
ALTER TABLE `geopos_hrm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_invoices`
--
ALTER TABLE `geopos_invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eid` (`eid`),
  ADD KEY `csd` (`csd`),
  ADD KEY `invoice` (`tid`) USING BTREE,
  ADD KEY `i_class` (`i_class`),
  ADD KEY `loc` (`loc`);

--
-- Indexes for table `geopos_invoice_items`
--
ALTER TABLE `geopos_invoice_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice` (`tid`),
  ADD KEY `i_class` (`i_class`);

--
-- Indexes for table `geopos_locations`
--
ALTER TABLE `geopos_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_log`
--
ALTER TABLE `geopos_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_login_attempts`
--
ALTER TABLE `geopos_login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_metadata`
--
ALTER TABLE `geopos_metadata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`),
  ADD KEY `rid` (`rid`);

--
-- Indexes for table `geopos_milestones`
--
ALTER TABLE `geopos_milestones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_movers`
--
ALTER TABLE `geopos_movers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `d_type` (`d_type`,`rid1`,`rid2`,`rid3`);

--
-- Indexes for table `geopos_notes`
--
ALTER TABLE `geopos_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_pms`
--
ALTER TABLE `geopos_pms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `full_index` (`id`,`sender_id`,`receiver_id`,`date_read`);

--
-- Indexes for table `geopos_premissions`
--
ALTER TABLE `geopos_premissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_products`
--
ALTER TABLE `geopos_products`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `pcat` (`pcat`),
  ADD KEY `warehouse` (`warehouse`);

--
-- Indexes for table `geopos_product_cat`
--
ALTER TABLE `geopos_product_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_product_serials`
--
ALTER TABLE `geopos_product_serials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_projects`
--
ALTER TABLE `geopos_projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `geopos_project_meta`
--
ALTER TABLE `geopos_project_meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pid` (`pid`),
  ADD KEY `meta_key` (`meta_key`),
  ADD KEY `key3` (`key3`);

--
-- Indexes for table `geopos_promo`
--
ALTER TABLE `geopos_promo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code_2` (`code`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `geopos_purchase`
--
ALTER TABLE `geopos_purchase`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `invoice` (`tid`),
  ADD KEY `eid` (`eid`),
  ADD KEY `csd` (`csd`);

--
-- Indexes for table `geopos_purchase_items`
--
ALTER TABLE `geopos_purchase_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice` (`tid`);

--
-- Indexes for table `geopos_quotes`
--
ALTER TABLE `geopos_quotes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `invoice` (`tid`),
  ADD KEY `eid` (`eid`),
  ADD KEY `csd` (`csd`);

--
-- Indexes for table `geopos_quotes_items`
--
ALTER TABLE `geopos_quotes_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice` (`tid`);

--
-- Indexes for table `geopos_register`
--
ALTER TABLE `geopos_register`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`),
  ADD KEY `active` (`active`);

--
-- Indexes for table `geopos_reports`
--
ALTER TABLE `geopos_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_restkeys`
--
ALTER TABLE `geopos_restkeys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_services`
--
ALTER TABLE `geopos_services`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `geopos_service_cat`
--
ALTER TABLE `geopos_service_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_smtp`
--
ALTER TABLE `geopos_smtp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_stock_r`
--
ALTER TABLE `geopos_stock_r`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `invoice` (`tid`),
  ADD KEY `eid` (`eid`),
  ADD KEY `csd` (`csd`);

--
-- Indexes for table `geopos_stock_r_items`
--
ALTER TABLE `geopos_stock_r_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice` (`tid`) KEY_BLOCK_SIZE=1024 USING BTREE;

--
-- Indexes for table `geopos_supplier`
--
ALTER TABLE `geopos_supplier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gid` (`gid`);

--
-- Indexes for table `geopos_system`
--
ALTER TABLE `geopos_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_terms`
--
ALTER TABLE `geopos_terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_tickets`
--
ALTER TABLE `geopos_tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_tickets_th`
--
ALTER TABLE `geopos_tickets_th`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tid` (`tid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `eid` (`eid`);

--
-- Indexes for table `geopos_todolist`
--
ALTER TABLE `geopos_todolist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_transactions`
--
ALTER TABLE `geopos_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loc` (`loc`),
  ADD KEY `acid` (`acid`),
  ADD KEY `eid` (`eid`),
  ADD KEY `tid` (`tid`);

--
-- Indexes for table `geopos_trans_cat`
--
ALTER TABLE `geopos_trans_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_units`
--
ALTER TABLE `geopos_units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_users`
--
ALTER TABLE `geopos_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `geopos_warehouse`
--
ALTER TABLE `geopos_warehouse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `univarsal_api`
--
ALTER TABLE `univarsal_api`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`),
  ADD KEY `code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `geopos_accounts`
--
ALTER TABLE `geopos_accounts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `geopos_attendance`
--
ALTER TABLE `geopos_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `geopos_bank_ac`
--
ALTER TABLE `geopos_bank_ac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `geopos_config`
--
ALTER TABLE `geopos_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `geopos_currencies`
--
ALTER TABLE `geopos_currencies`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_customers`
--
ALTER TABLE `geopos_customers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `geopos_custom_data`
--
ALTER TABLE `geopos_custom_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `geopos_custom_fields`
--
ALTER TABLE `geopos_custom_fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `geopos_cust_group`
--
ALTER TABLE `geopos_cust_group`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `geopos_documents`
--
ALTER TABLE `geopos_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_draft`
--
ALTER TABLE `geopos_draft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `geopos_draft_items`
--
ALTER TABLE `geopos_draft_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `geopos_employees`
--
ALTER TABLE `geopos_employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `geopos_events`
--
ALTER TABLE `geopos_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_gateways`
--
ALTER TABLE `geopos_gateways`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `geopos_hrm`
--
ALTER TABLE `geopos_hrm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_invoices`
--
ALTER TABLE `geopos_invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `geopos_invoice_items`
--
ALTER TABLE `geopos_invoice_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `geopos_locations`
--
ALTER TABLE `geopos_locations`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_log`
--
ALTER TABLE `geopos_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT for table `geopos_login_attempts`
--
ALTER TABLE `geopos_login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `geopos_metadata`
--
ALTER TABLE `geopos_metadata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `geopos_milestones`
--
ALTER TABLE `geopos_milestones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_movers`
--
ALTER TABLE `geopos_movers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `geopos_notes`
--
ALTER TABLE `geopos_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_pms`
--
ALTER TABLE `geopos_pms`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_premissions`
--
ALTER TABLE `geopos_premissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `geopos_products`
--
ALTER TABLE `geopos_products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=364959;

--
-- AUTO_INCREMENT for table `geopos_product_cat`
--
ALTER TABLE `geopos_product_cat`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `geopos_product_serials`
--
ALTER TABLE `geopos_product_serials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `geopos_projects`
--
ALTER TABLE `geopos_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `geopos_project_meta`
--
ALTER TABLE `geopos_project_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `geopos_promo`
--
ALTER TABLE `geopos_promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `geopos_purchase`
--
ALTER TABLE `geopos_purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `geopos_purchase_items`
--
ALTER TABLE `geopos_purchase_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `geopos_quotes`
--
ALTER TABLE `geopos_quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `geopos_quotes_items`
--
ALTER TABLE `geopos_quotes_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `geopos_register`
--
ALTER TABLE `geopos_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `geopos_reports`
--
ALTER TABLE `geopos_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_restkeys`
--
ALTER TABLE `geopos_restkeys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_services`
--
ALTER TABLE `geopos_services`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `geopos_service_cat`
--
ALTER TABLE `geopos_service_cat`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `geopos_stock_r`
--
ALTER TABLE `geopos_stock_r`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_stock_r_items`
--
ALTER TABLE `geopos_stock_r_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_supplier`
--
ALTER TABLE `geopos_supplier`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `geopos_terms`
--
ALTER TABLE `geopos_terms`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `geopos_tickets`
--
ALTER TABLE `geopos_tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_tickets_th`
--
ALTER TABLE `geopos_tickets_th`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_todolist`
--
ALTER TABLE `geopos_todolist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_transactions`
--
ALTER TABLE `geopos_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `geopos_trans_cat`
--
ALTER TABLE `geopos_trans_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `geopos_units`
--
ALTER TABLE `geopos_units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `geopos_users`
--
ALTER TABLE `geopos_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `geopos_warehouse`
--
ALTER TABLE `geopos_warehouse`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `univarsal_api`
--
ALTER TABLE `univarsal_api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
