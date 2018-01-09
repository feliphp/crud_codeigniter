-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 04, 2018 at 05:05 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `prueba`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `rol` int(5) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `password`, `rol`, `status`) VALUES
(1, 'felipe', 'feex5@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 1),
(2, 'Jose', 'pru2@hotmail.com', '', 1, 1),
(7, 'prueba 1', 'pru@hotmail.com', '123', 1, 1),
(11, 'Felipe', 'felsul@hotmail.com', '123', 1, 1),
(12, 'Daniel Carrada', 'rdcarrada@abcdigital.mx', '123456', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
