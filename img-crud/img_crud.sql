-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2024 at 01:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `images`
--

-- --------------------------------------------------------

--
-- Table structure for table `img_crud`
--

CREATE TABLE `img_crud` (
  `id` int(11) NOT NULL,
  `st_name` varchar(100) NOT NULL,
  `st_class` varchar(100) NOT NULL,
  `st_phone` varchar(20) NOT NULL,
  `st_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `img_crud`
--

INSERT INTO `img_crud` (`id`, `st_name`, `st_class`, `st_phone`, `st_image`) VALUES
(1, 'Shantanu Basak', 'b.tech', '909769656', 'shantanu.png'),
(2, 'dipak bag', 'tenth', '8976554326', 'dipak.jpg'),
(3, 'bimal hazra', 'b.com', '9090675455', 'bimal.png'),
(4, 'vik kumar', 'nine', '6780907899', 'vik.jpg'),
(5, 'nil saha', 'twelve', '908708080', 'nil.png'),
(6, 'ankan jha', 'b.pharm', '870879080', 'ankan.jpg'),
(7, 'gh sir', 'M.tech', '7895670658', 'gh.jpg'),
(8, 'malini roy', 'seventh', '6909848008', 'malini.jpg'),
(9, 'shrishti das', 'B.Tech', '9936538599', 'shristi.png'),
(10, 'Shubhra Sen', 'M.Pharm', '8979989609790790', 'shubhra.png'),
(11, 'disha goyel', 'b.a.', '8787895796', 'disha.jpg'),
(12, 'shree pal', 'eighth', '7867986967', 'shree.png'),
(13, 'harry paul', 'M.B.B.S.', '8796896689', 'harry.jpg'),
(14, 'dipti sharma', 'm.phil', '9078798768', 'dipti.png'),
(15, 'souvik sarkar', 'b.com', '7090675487', 'souvik.jpg'),
(16, 'dip mukherjee', 'B.Tech', '8998707790', 'dip.jpg'),
(17, 'akash das', 'm.a.', '9779087989', 'akash.jpg'),
(18, 'rohit patra', 'M.Tech', '8076798889', 'rohit.jpg'),
(19, 'shubham nath', 'p.h.d.', '7609076998', 'shubham.png'),
(20, 'shreya saha', 'b.com', '8990888089', 'shreya.jpg'),
(21, 'shubha dutta', 'b.tech', '9987980889', 'shubha.png'),
(22, 'mohan kumar', 'diploma', '9887998009', 'mohan.jpg'),
(23, 'shruti majumder', 'b.tech', '9798798800', 'shruti.jpg'),
(24, 'daniel charles', 'b.com', '8006989799', 'daniel.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img_crud`
--
ALTER TABLE `img_crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `img_crud`
--
ALTER TABLE `img_crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
