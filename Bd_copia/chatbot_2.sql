-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2024 at 07:51 AM
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
-- Database: `chatbot`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, '1', 'De lunes a viernes\r\n\r\n    Mañana 09:00 - 12:30\r\n    Tarde 14:30 - 21:00\r\nHorarios especiales\r\nFeriados \r\n    Tarde 14:30 - 18:30\r\n'),
(2, '2', 'Direccion Av. Buenos Aires Nro 1102 al lado del Mercado Hinojosa, puedes ver la Ubicacion exacta en un mapa visitando el siguiente enlace www.'),
(3, '3', 'Ofrecemos los siguientes tratamientos\r\n-Diagnostico y Prevencion\r\n-Ortodoncia\r\n-Implantes\r\n-Odonto Pediatria\r\n-Estetica dental\r\n-Periodoncia\r\n-Protesis\r\n-Caries'),
(4, '4', 'PROMOCIÓN REGRESO A CLASES\r\n PACK PREVENTIVO Regreso a clases\r\n\r\nIncluye:\r\n- Evaluación preventiva\r\n- Limpieza profunda (profilaxis dental)\r\n- aplicación flúor gel\r\n- Curación pequeña'),
(5, '5', 'Recomendaciones para pacientes\r\nseleccione el tipo de tratamiento\r\n1)Extraccion\r\n2)protesis\r\n3)tratamiento de consucto\r\n4)limpieza de caries\r\n5)ortodoncia'),
(6, '6', 'Agende su cita de Diagnostico y Prevencion totalmente Gratis en el siguiente enlace'),
(7, '7', 'Atencion de Emergencia porfavor haga clic en el siguiente enlace para comunicarse con uno de nuestros especialistas de forma inemdiata');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
