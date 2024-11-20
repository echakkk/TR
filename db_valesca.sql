-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Nov 20, 2024 at 05:11 AM
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
-- Database: `db_valesca`
--

-- --------------------------------------------------------

--
-- Table structure for table `brownies`
--

CREATE TABLE `brownies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brownies`
--

INSERT INTO `brownies` (`id`, `title`, `kategori`, `price`, `link`) VALUES
(1, 'Coklat Keju', 'brownies', 10000.00, 'Brownies1.Jpeg'),
(2, 'Brownies Kukus', 'brownies', 40000.00, 'Brownies2.Jpeg'),
(3, 'Moist', 'brownies', 40000.00, 'Brownies3.Jpeg'),
(4, 'Muffin', 'brownies', 6000.00, 'Brownies4.Jpeg'),
(5, 'Sinny', 'brownies', 20000.00, 'Brownies5.Jpeg'),
(6, 'Topping Coklat', 'brownies', 5000.00, 'Brownies6.Jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `cake`
--

CREATE TABLE `cake` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cake`
--

INSERT INTO `cake` (`id`, `title`, `kategori`, `price`, `link`) VALUES
(1, 'Bolu Gula Jawa Saos Caramel', 'cake', 25000.00, 'Cake1.Jpeg'),
(2, 'Bolu Pisang', 'cake', 22000.00, 'Cake2.Jpeg'),
(3, 'Bolu Sarang Semut', 'cake', 25000.00, 'Cake3.Jpeg'),
(4, 'Gulung Crumbel', 'cake', 25000.00, 'Cake4.Jpeg'),
(5, 'Gulung Keju', 'cake', 27000.00, 'Cake5.Jpeg'),
(6, 'Gulung Meses', 'cake', 25000.00, 'Cake6.Jpeg'),
(7, 'Gulung Rainbow', 'cake', 25000.00, 'Cake7.Jpeg'),
(8, 'Gulung Selai', 'cake', 25000.00, 'Cake8.Jpeg'),
(9, 'Sifon Keju', 'cake', 24000.00, 'Cake9.Jpeg'),
(10, 'Sokade', 'cake', 35000.00, 'Cake10.Jpeg'),
(11, 'Sponge Panda', 'cake', 24000.00, 'Cake11.Jpeg'),
(12, 'Zebra', 'cake', 33000.00, 'Cake12.Jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `dessert`
--

CREATE TABLE `dessert` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dessert`
--

INSERT INTO `dessert` (`id`, `title`, `kategori`, `price`, `link`) VALUES
(1, 'Brownies Lumer', 'dessert', 20000.00, 'Dessert1.Jpeg'),
(2, 'Milk Bun', 'dessert', 20000.00, 'Dessert2.Jpeg'),
(3, 'Mille Crepes', 'dessert', 15000.00, 'Dessert3.Jpeg'),
(4, 'Oreo', 'dessert', 20000.00, 'Dessert4.Jpeg'),
(5, 'Puding', 'dessert', 5000.00, 'Dessert5.Jpeg'),
(6, 'Red Velvet', 'dessert', 20000.00, 'Dessert6.Jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `pastry`
--

CREATE TABLE `pastry` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pastry`
--

INSERT INTO `pastry` (`id`, `title`, `kategori`, `price`, `link`) VALUES
(1, 'Bolen', 'pastry', 40000.00, 'Pastry1.Jpeg'),
(2, 'Croissant', 'pastry', 35000.00, 'Pastry2.Jpeg'),
(3, 'Cromboloni Coklat', 'pastry', 45000.00, 'Pastry3.Jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `pizza`
--

CREATE TABLE `pizza` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pizza`
--

INSERT INTO `pizza` (`id`, `title`, `kategori`, `price`, `link`) VALUES
(1, 'Pizza Mozzarella', 'pizza', 12000.00, 'Pizza.JPEG');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role_name`) VALUES
(1, 'admin'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `rotimanis`
--

CREATE TABLE `rotimanis` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rotimanis`
--

INSERT INTO `rotimanis` (`id`, `title`, `kategori`, `price`, `link`) VALUES
(1, '3 in 1 ayam', 'rotimanis', 7500.00, 'RotiManis1.Jpeg'),
(2, '3 in 1 selai', 'rotimanis', 5500.00, 'RotiManis2.Jpeg'),
(3, 'Ayam', 'rotimanis', 7500.00, 'RotiManis3.Jpeg'),
(4, 'Black White', 'rotimanis', 6000.00, 'RotiManis4.Jpeg'),
(5, 'Blueberry', 'rotimanis', 4000.00, 'RotiManis5.Jpeg'),
(6, 'Butter Keju', 'rotimanis', 6000.00, 'RotiManis6.Jpeg'),
(7, 'Butter Meses', 'rotimanis', 4500.00, 'RotiManis7.Jpeg'),
(8, 'Coklat', 'rotimanis', 3500.00, 'RotiManis8.Jpeg'),
(9, 'Daging', 'rotimanis', 9000.00, 'RotiManis9.Jpeg'),
(10, 'Donat', 'rotimanis', 4000.00, 'RotiManis10.Jpeg'),
(11, 'Durian', 'rotimanis', 4500.00, 'RotiManis11.Jpeg'),
(12, 'Kacang Ijo', 'rotimanis', 4000.00, 'RotiManis12.Jpeg'),
(13, 'Karakter Doraemon', 'rotimanis', 5000.00, 'RotiManis13.Jpeg'),
(14, 'Karakter Kumbang', 'rotimanis', 5000.00, 'RotiManis14.Jpeg'),
(15, 'Karakter Spiderman', 'rotimanis', 5000.00, 'RotiManis15.Jpeg'),
(16, 'Keju Slash', 'rotimanis', 6000.00, 'RotiManis16.Jpeg'),
(17, 'Keju Tabur', 'rotimanis', 6000.00, 'RotiManis17.Jpeg'),
(18, 'Kelapa', 'rotimanis', 4000.00, 'RotiManis18.Jpeg'),
(19, 'Meses', 'rotimanis', 3500.00, 'RotiManis19.Jpeg'),
(20, 'Mocha', 'rotimanis', 5000.00, 'RotiManis20.Jpeg'),
(21, 'Nanas', 'rotimanis', 4000.00, 'RotiManis21.Jpeg'),
(22, 'Pandan', 'rotimanis', 4500.00, 'RotiManis22.Jpeg'),
(23, 'Pisang Cokelat', 'rotimanis', 5500.00, 'RotiManis23.Jpeg'),
(24, 'Pisang Keju', 'rotimanis', 5500.00, 'RotiManis24.Jpeg'),
(25, 'Roll Abon Wijen Hitam Original', 'rotimanis', 7500.00, 'RotiManis25.Jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `rotimanisbox`
--

CREATE TABLE `rotimanisbox` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rotimanisbox`
--

INSERT INTO `rotimanisbox` (`id`, `title`, `kategori`, `price`, `link`) VALUES
(1, '3 Rasa', 'rotimanisbox', 14500.00, 'RotiManisBox1.Jpeg'),
(2, '5 Rasa', 'rotimanisbox', 17500.00, 'RotiManisBox2.Jpeg'),
(3, '7 Rasa', 'rotimanisbox', 20000.00, 'RotiManisBox3.Jpeg'),
(4, 'Cilik', 'rotimanisbox', 25000.00, 'RotiManisBox4.Jpeg'),
(5, 'Krumpul Gula', 'rotimanisbox', 12000.00, 'RotiManisBox5.Jpeg'),
(6, 'Krumpul Keju', 'rotimanisbox', 21000.00, 'RotiManisBox6.Jpeg'),
(7, 'Pisang Keju', 'rotimanisbox', 35000.00, 'RotiManisBox7.Jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `snack`
--

CREATE TABLE `snack` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `snack`
--

INSERT INTO `snack` (`id`, `title`, `kategori`, `price`, `link`) VALUES
(1, 'Arem Arem', 'snack', 3500.00, 'Snack1.Jpeg'),
(2, 'Bolu Kukus', 'snack', 5000.00, 'Snack2.Jpeg'),
(3, 'Dadar Gulung', 'snack', 3000.00, 'Snack3.Jpeg'),
(4, 'Klepon', 'snack', 3000.00, 'Snack4.Jpeg'),
(5, 'Kue Tok', 'snack', 3000.00, 'Snack5.Jpeg'),
(6, 'Lemper', 'snack', 3000.00, 'Snack6.Jpeg'),
(7, 'Mochi', 'snack', 3000.00, 'Snack7.Jpeg'),
(8, 'Pastel', 'snack', 3500.00, 'Snack8.Jpeg'),
(9, 'Pisang Coklat', 'snack', 3000.00, 'Snack9.Jpeg'),
(10, 'Semar Mendem', 'snack', 3000.00, 'Snack10.Jpeg'),
(11, 'Sosis Ayam', 'snack', 3000.00, 'Snack11.Jpeg'),
(12, 'Sus', 'snack', 4000.00, 'Snack12.Jpeg'),
(13, 'Tahu Bakso', 'snack', 4000.00, 'Snack13.Jpeg'),
(14, 'Wajik', 'snack', 3000.00, 'Snack14.Jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tart`
--

CREATE TABLE `tart` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tart`
--

INSERT INTO `tart` (`id`, `title`, `kategori`, `price`, `link`) VALUES
(1, 'Cup Cake Jumbo', 'tart', 50000.00, 'Tart1.Jpeg'),
(2, 'Cup Cake Mini', 'tart', 40000.00, 'Tart2.Jpeg'),
(3, 'Tart Black Forest UK 18', 'tart', 130000.00, 'Tart3.Jpeg'),
(4, 'Tart Black Forest UK 20', 'tart', 175000.00, 'Tart4.Jpeg'),
(5, 'Tart Karakter', 'tart', 150000.00, 'Tart5.Jpeg'),
(6, 'Tart Love', 'tart', 165000.00, 'Tart6.Jpeg'),
(7, 'Tart Meses', 'tart', 100000.00, 'Tart7.Jpeg'),
(8, 'Tart Red Velvet', 'tart', 55000.00, 'Tart8.Jpeg'),
(9, 'Tart Tema Anak 1', 'tart', 150000.00, 'Tart9.Jpeg'),
(10, 'Tart Tema Anak 2', 'tart', 150000.00, 'Tart10.Jpeg'),
(11, 'Tart UK 15', 'tart', 60000.00, 'Tart11.Jpeg'),
(12, 'Tart UK 15 Es Cream', 'tart', 60000.00, 'Tart12.Jpeg'),
(13, 'Tart UK 18 Warna', 'tart', 100000.00, 'Tart13.Jpeg'),
(14, 'Tart UK 18 Es Cream', 'tart', 110000.00, 'Tart14.Jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tawar`
--

CREATE TABLE `tawar` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tawar`
--

INSERT INTO `tawar` (`id`, `title`, `kategori`, `price`, `link`) VALUES
(1, 'Gandum', 'tawar', 17000.00, 'Tawar1.Jpeg'),
(2, 'Keju', 'tawar', 17000.00, 'Tawar2.Jpeg'),
(3, 'Original', 'tawar', 12000.00, 'Tawar3.Jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `id_role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `password_hash`, `id_role`) VALUES
(3, 'arvid', 'DEAN', '831c237928e6212bedaa4451a514ace3174562f6761f6a157a2fe5082b36e2fb', 2),
(4, 'admin', 'Arvid', 'ac9689e2272427085e35b9d3e3e8bed88cb3434828b43b86fc0596cad4c6e270', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brownies`
--
ALTER TABLE `brownies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cake`
--
ALTER TABLE `cake`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dessert`
--
ALTER TABLE `dessert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pastry`
--
ALTER TABLE `pastry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`),
  ADD UNIQUE KEY `role_name` (`role_name`);

--
-- Indexes for table `rotimanis`
--
ALTER TABLE `rotimanis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rotimanisbox`
--
ALTER TABLE `rotimanisbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snack`
--
ALTER TABLE `snack`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tart`
--
ALTER TABLE `tart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tawar`
--
ALTER TABLE `tawar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brownies`
--
ALTER TABLE `brownies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cake`
--
ALTER TABLE `cake`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `dessert`
--
ALTER TABLE `dessert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pastry`
--
ALTER TABLE `pastry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pizza`
--
ALTER TABLE `pizza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rotimanis`
--
ALTER TABLE `rotimanis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `rotimanisbox`
--
ALTER TABLE `rotimanisbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `snack`
--
ALTER TABLE `snack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tart`
--
ALTER TABLE `tart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tawar`
--
ALTER TABLE `tawar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
