-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2023 at 05:25 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apmc`
--

-- --------------------------------------------------------

--
-- Table structure for table `catg`
--

CREATE TABLE `catg` (
  `cid` int(11) NOT NULL,
  `cnm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catg`
--

INSERT INTO `catg` (`cid`, `cnm`) VALUES
(1, 'Pumpkin'),
(2, 'Grain'),
(3, 'Oilseeds');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uid` int(11) NOT NULL,
  `unm` varchar(20) NOT NULL,
  `pwd` varchar(8) NOT NULL,
  `rep` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `unm`, `pwd`, `rep`) VALUES
(4, 'APMC', 'apmc123', 'apmc123');

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

CREATE TABLE `pro` (
  `pid` int(11) NOT NULL,
  `pnm` varchar(20) NOT NULL,
  `des` varchar(500) NOT NULL,
  `cat` varchar(10) NOT NULL,
  `pri` int(5) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pro`
--

INSERT INTO `pro` (`pid`, `pnm`, `des`, `cat`, `pri`, `img`) VALUES
(1, 'wheat', 'Type: Ghav Tukada<br>\r\nContact: 7836542389<br>\r\nCity: Babara,Amreli-365601', 'grain', 550, 'w1.jpg'),
(2, 'indian pea', 'Type : Desi Chana<br>\r\nContact : 2345628791<br>\r\nCity :Amodra,Una-362560', 'pumpkin', 1100, 'cd1.jpg'),
(3, 'mung', 'Type: Desi Mag<br>\r\nContact: 7850450243<br>\r\nCity: Chalala,Amreli-368551', 'pumpkin', 1500, 'dm1.jpg'),
(4, 'millet', 'Type : Desi Bajaro<br>\r\nContact : 9621457820<br>\r\nCity : Anjar,Kodinar-352104', 'grain', 540, 'db1.jpg'),
(5, 'black gram', 'Type : Desi Adad<br>\r\nContact : 9763251485<br>\r\nCity : Sanali,Amreli-365601', 'pumpkin', 650, 'ab1.jpg'),
(6, 'peanut', 'Type : G - 20No.<br>\r\nContact : 955842105<br>\r\nCity : Dhari,Amreli-365602', 'oilseed', 1100, 'gm1.jpeg'),
(7, 'sesame', 'Type : Safed<br>\r\nContact : 9548751262<br>\r\nCity : Dolasa,Una-365921', 'oilseed', 2670, 's1.jpeg'),
(8, 'soybean', 'Type : JS - 335<br>\r\nContact : 9856231478<br>\r\nCity : Lathi,Amreli-365601', 'oilseed', 1750, 'js1.jpeg'),
(9, 'corn', 'Type : GM - 6<br>\r\nContact : 9394028791<br>\r\nCity :Amodra,Una-362560', 'oilseed', 350, 'gm61.jpeg'),
(10, 'wheat', 'Type: Ghav Tukada<br>\r\nContact:8980609665<br>\r\nCity: Babara,Amreli-365601', 'grain', 545, 'wt2.jpeg'),
(11, 'wheat', 'Type: Ghav Tukada<br>\r\nContact: 8547961256<br>\r\nCity: Khambha,Amreli-365601', 'grain', 615, 'wt3.jpg'),
(12, 'wheat', 'Type: Lokavan<br>\r\nContact: 5647895263<br>\r\nCity: Dhari,Amreli-365601', 'grain', 575, 'wl1.jpg'),
(13, 'wheat', 'Type: Bansi<br>\r\nContact: 2563897415<br>\r\nCity: Fatsar,Una-362560', 'grain', 581, 'wb1.png'),
(14, 'wheat', 'Type: Bhaliya<br>\r\nContact:8140020689<br>\r\nCity: Itavaya,Una-365682', 'grain', 545, 'wbh1.jpg'),
(15, 'wheat', 'Type: Lokavan<br>\r\nContact: 9737462610<br>\r\nCity: Sanali,Amreli-365214', 'grain', 650, 'wl2.jpg'),
(16, 'wheat', 'Type: Bhaliya<br>\r\nContact:9558421568<br>\r\nCity: Anida,Amreli-365241', 'grain', 615, 'wbh2.jpg'),
(17, 'wheat', 'Type: Bansi<br>\r\nContact: 6352639821<br>\r\nCity: Vavdi,Babara-352412', 'grain', 635, 'wb2.jpg'),
(18, 'indian pea', 'Type : Kabuli Chana<br>\r\nContact : 6355471587<br>\r\nCity :Zinzri,Talala-366560', 'pumpkin', 1150, 'ck1.jpg'),
(19, 'indian pea', 'Type : Mosami Chana<br>\r\nContact : 8980601551<br>\r\nCity :Dervana,Surat-364589', 'pumpkin', 1148, 'cm1.jpg'),
(20, 'indian pea', 'Type : Desi Chana<br>\r\nContact : 2345688791<br>\r\nCity :Vadala,Una-362560', 'pumpkin', 1200, 'cd2.jpeg'),
(21, 'indian pea', 'Type : Mosami Chana<br>\r\nContact : 9845656231<br>\r\nCity :Pajod,Kodinar-362654', 'pumpkin', 1148, 'cm2.jpg'),
(22, 'indian pea', 'Type : Mosami Chana<br>\r\nContact : 9845656231<br>\r\nCity :Bhamodra,Amreli-365602', 'pumpkin', 1190, 'cm3.jpg'),
(23, 'indian pea', 'Type : Desi Chana<br>\r\nContact : 9948989231<br>\r\nCity :Ravni,Kodinar-362654', 'pumpkin', 1110, 'cd3.jpeg'),
(24, 'indian pea', 'Type : Kabuli Chana<br>\r\nContact : 9848956411<br>\r\nCity :Intala,Bhuj-365654', 'pumpkin', 1200, 'ck2.jpg'),
(25, 'indian pea', 'Type : Kabuli Chana<br>\r\nContact : 9878956231<br>\r\nCity :Khapat,Kodinar-362654', 'grain', 1050, 'ck3.jpg'),
(26, 'mung', 'Type: Chinai Mag<br>\r\nContact:9800450243<br>\r\nCity: Dhari,Amreli-368551', 'pumpkin', 1850, 'cim1.jpeg'),
(27, 'mung', 'Type: Desi Mag<br>\r\nContact: 9624161824<br>\r\nCity: Lathi,Amreli-368551', 'pumpkin', 1840, 'dm2.jpg'),
(28, 'mung', 'Type: Desi Mag<br>\r\nContact: 9862050243<br>\r\nCity: Amodra,Una-362560', 'pumpkin', 1900, 'dm3.jpg'),
(29, 'mung', 'Type: Desi Mag<br>\r\nContact: 9558421568<br>\r\nCity: Tori,Babara-368551', 'pumpkin', 1870, 'dm4.jpeg'),
(30, 'mung', 'Type: Desi Mag<br>\r\nContact: 7814004243<br>\r\nCity: Vadala,Aatkot-364589', 'pumpkin', 1875, 'dm5.jpg'),
(31, 'mung', 'Type: Chinai Mag<br>\r\nContact: 955847689<br>\r\nCity:Tori,Una-368551', 'pumpkin', 1845, 'cim2.jpg'),
(32, 'mung', 'Type : Chinai Mag<br>\r\nContact : 89562314<br>\r\nCity : Kariya,Amreli-368551', 'pumpkin', 1890, 'cim3.jpg'),
(33, 'mung', 'Type: Chinai Mag<br>\r\nContact: 7954821625<br>\r\nCity: Chalala,Amreli-368551', 'pumpkin', 1900, 'cim4.jpg'),
(34, 'millet', 'Type : Nandi Bajaro<br>\r\nContact : 9747856912<br>\r\nCity : Dolasa,Kodinar-352104', 'grain', 500, 'nb1.jpeg'),
(35, 'millet', 'Type : Desi Bajaro<br>\r\nContact : 8596457512<br>\r\nCity : Dhari,Amreli-365601', 'grain', 545, 'db2.jpg'),
(36, 'millet', 'Type : Desi Bajaro<br>\r\nContact : 1236547820<br>\r\nCity : Vavadi,Kodinar-352104', 'grain', 515, 'db3.jpg'),
(37, 'millet', 'Type : Desi Bajaro<br>\r\nContact : 9656897420<br>\r\nCity : Amodra,Una-362560', 'grain', 514, 'db4.jpeg'),
(38, 'millet', 'Type : Nandi Bajaro<br>\r\nContact : 9737999777<br>\r\nCity : Lathi,Amreli-365601', 'grain', 545, 'nb2.jpeg'),
(39, 'millet', 'Type : Nandi Bajaro<br>\r\nContact : 9621457820<br>\r\nCity : Chalala,Amreli-365601', 'grain', 520, 'nb3.jpeg'),
(40, 'millet', 'Type : Nandi Bajaro<br>\r\nContact : 9838999888<br>\r\nCity : Varudi,Talala-355614', 'grain', 528, 'nb4.jpeg'),
(41, 'millet', 'Type : Nandi Bajaro<br>\r\nContact : 9621457894<br>\r\nCity : Anjar,Kodinar-352104', 'grain', 550, 'nb5.jpeg'),
(42, 'black gram', 'Type : Chamki Adad<br>\r\nContact : 8653251485<br>\r\nCity : Sanvav,Una-362560', 'pumpkin', 650, 'ac1.jpeg'),
(43, 'black gram', 'Type : Adadi<br>\r\nContact : 9763251485<br>\r\nCity : Sanali,Amreli-365601', 'pumpkin', 651, 'aa1.jpg'),
(44, 'black gram', 'Type : Desi Adad<br>\r\nContact : 96241589<br>\r\nCity : Dhari,Amreli-365601', 'pumpkin', 645, 'ab2.jpeg'),
(45, 'black gram', 'Type : Desi Adad<br>\r\nContact : 9856222454<br>\r\nCity : Talala,Gir-365410', 'pumpkin', 610, 'ab3.jpeg'),
(46, 'black gram', 'Type : Chamki Adad<br>\r\nContact : 8980609669<br>\r\nCity : Amreli,Amreli-365601', 'pumpkin', 685, 'ac2.jpeg'),
(47, 'black gram', 'Type : Chamki Adad<br>\r\nContact : 807505645<br>\r\nCity : Chital,Amreli-365601', 'pumpkin', 675, 'ac3.jpeg'),
(48, 'black gram', 'Type :  Adadi<br>\r\nContact : 9878456921<br>\r\nCity : Fatsar,Una-362541', 'pumpkin', 689, 'aa2.jpeg'),
(49, 'black gram', 'Type : Adadi<br>\r\nContact : 9875251485<br>\r\nCity : Sanali,Amreli-365601', 'pumpkin', 700, 'aa3.jpeg'),
(50, 'peanut ', 'Type : G - 20No.<br>\r\nContact : 5698741235<br>\r\nCity : Jithudi,Amreli-365602', 'oilseed', 1150, 'gm2.jpeg'),
(51, 'peanut ', 'Type : 39 No.<br>\r\nContact : 6996852415<br>\r\nCity : Naredi,Talala-364512', 'oilseed', 1000, 'n391.jpeg'),
(52, 'peanut ', 'Type : Mathdi<br>\r\nContact : 955842105<br>\r\nCity : Pipali,Khambha-368952', 'oilseed', 1050, 'm1.jpeg'),
(53, 'peanut ', 'Type : B.T.<br>\r\nContact : 9865321475<br>\r\nCity : Anida,Rajkot-365214', 'oilseed', 1175, 'bt1.jpeg'),
(54, 'peanut ', 'Type : G - 20No.<br>\r\nContact : 5623144578<br>\r\nCity : Chalala,Amreli-365602', 'oilseed', 1075, 'gm3.jpeg'),
(55, 'peanut ', 'Type : 39 No.<br>\r\nContact : 564142105<br>\r\nCity : LathiAmreli-365602', 'oilseed', 1005, 'n392.jpeg'),
(56, 'peanut ', 'Type : Mathdi<br>\r\nContact : 9735444222<br>\r\nCity : Amodra,Una-362560', 'oilseed', 1200, 'm2.jpeg'),
(57, 'peanut ', 'Type : B.T.<br>\r\nContact : 8140020634<br>\r\nCity : Kolda,Rajkot-365601', 'oilseed', 1152, 'bt2.jpeg'),
(58, 'sesame ', 'Type : Kala<br>\r\nContact : 92122232<br>\r\nCity : Fatsar,Una-365921', 'oilseed', 2400, 'k1.jpeg'),
(59, 'sesame ', 'Type : Safed<br>\r\nContact : 4578963214<br>\r\nCity : Vavadi,Rajkot-358821', 'oilseed', 2541, 's2.jpeg'),
(60, 'sesame ', 'Type : Safed<br>\r\nContact : 7896541235<br>\r\nCity : Anjar,Una-365921', 'oilseed', 2845, 's3.jpeg'),
(61, 'sesame ', 'Type : Safed<br>\r\nContact : 5645852565<br>\r\nCity : Jithudi,Amreli-365601', 'oilseed', 2500, 's4.jpeg'),
(62, 'sesame ', 'Type : Kala<br>\r\nContact : 854571265<br>\r\nCity : Tori,Rajkot-365985', 'oilseed', 2800, 'k2.jpeg'),
(63, 'sesame ', 'Type : Kala<br>\r\nContact : 7896543122<br>\r\nCity : Una,Una-365260', 'oilseed', 3000, 'k3.jpg'),
(64, 'sesame ', 'Type : Kala<br>\r\nContact : 56897412<br>\r\nCity : Dolasa,Una-365921', 'oilseed', 2560, 'k4.jpg'),
(65, 'sesame ', 'Type : Safed<br>\r\nContact : 8956231475<br>\r\nCity : Itvaya,Una-362560', 'oilseed', 2569, 's5.jpg'),
(66, 'soybean ', 'Type : NRC - 37<br>\r\nContact : 8952634178<br>\r\nCity : Chital,Amreli-365601', 'oilseed', 1760, 'nr1.jpeg'),
(67, 'soybean ', 'Type : NCR - 37<br>\r\nContact : 7539514886<br>\r\nCity :Kariya,Amreli-365602', 'oilseed', 1755, 'nr2.jpeg'),
(68, 'soybean ', 'Type : JS - 335<br>\r\nContact : 865941258<br>\r\nCity : Varudi,Amreli-362541', 'oilseed', 1735, 'js2.jpg'),
(69, 'soybean ', 'Type : JS - 335<br>\r\nContact : 9995552323<br>\r\nCity : Amodra,Una-365260', 'oilseed', 1745, 'js3.jpeg'),
(70, 'soybean ', 'Type : JS - 335<br>\r\nContact : 856941251<br>\r\nCity : Lathi,Amreli-365601', 'oilseed', 1720, 'js4.jpeg'),
(71, 'soybean ', 'Type : NRC - 37<br>\r\nContact : 9624161824<br>\r\nCity : Anida,Rajkot-365891', 'oilseed', 1756, 'nr3.jpeg'),
(72, 'soybean ', 'Type : NCR - 37<br>\r\nContact : 5623147896<br>\r\nCity : Kariya,Talala-365914', 'oilseed', 1758, 'nr4.jpeg'),
(73, 'soybean ', 'Type : NCR - 37<br>\r\nContact : 23121415684<br>\r\nCity : Lathi,Amreli-365601', 'oilseed', 1754, 'nr5.jpeg'),
(74, 'corn', 'Type : GM - 6<br>\r\nContact : 9137458936<br>\r\nCity :Bhamodra,Amreli-365601', 'oilseed', 300, 'gm62.jpeg'),
(75, 'corn', 'Type : Narmada Moti<br>\r\nContact : 9394028791<br>\r\nCity :Chital,Amreli-365201', 'oilseed', 250, 'nm1.jpg'),
(76, 'corn', 'Type : GM - 6<br>\r\nContact : 9558421567<br>\r\nCity : Lathi,Amreli-365601', 'oilseed', 275, 'gm63.jpeg'),
(77, 'corn', 'Type : GM - 6<br>\r\nContact : 8980609669<br>\r\nCity :Dhari,Amreli-365210', 'oilseed', 285, 'gm64.jpeg'),
(78, 'corn', 'Type : Narmada Moti<br>\r\nContact : 456321789<br>\r\nCity :Chalala,Amreli-365214', 'oilseed', 350, 'nm2.jpeg'),
(79, 'corn', 'Type : Narmada Moti<br>\r\nContact : 8980609669<br>\r\nCity :Amodra,Una-362560', 'oilseed', 385, 'nm3.jpeg'),
(80, 'corn', 'Type : Narmada Moti<br>\r\nContact : 8140020365<br>\r\nCity :Itavya,Una-362560', 'oilseed', 395, 'nm4.jpeg'),
(81, 'corn', 'Type : Narmada Moti<br>\r\nContact : 9737999333<br>\r\nCity : Fatsar,Una-362560', 'oilseed', 398, 'nm5.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catg`
--
ALTER TABLE `catg`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `pro`
--
ALTER TABLE `pro`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catg`
--
ALTER TABLE `catg`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pro`
--
ALTER TABLE `pro`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
