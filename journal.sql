-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 05:33 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `journal`
--

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE `entries` (
  `username` varchar(20) NOT NULL,
  `personalEntry` varchar(500) NOT NULL,
  `workEntry` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`username`, `personalEntry`, `workEntry`, `date`) VALUES
('test2', 'These are my personal thoughts', 'This is my work entry', '2021-06-06'),
('Durran20', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla malesuada justo non orci lobortis tempor. Fusce aliquet erat ut nibh blandit, in accumsan eros venenatis. Curabitur id tempor tellus, quis commodo purus. Quisque facilisis, nunc sit amet blandit accumsan, turpis augue facilisis nibh, ut porta odio libero aliquet eros. Nunc vulputate arcu eget diam rutrum consequat. Vestibulum at efficitur enim. Nulla facilisi. Vivamus et aliquet odio, a bibendum nisl.', 'In quis ipsum diam. Curabitur ultricies risus ut dolor facilisis dignissim. Integer tristique laoreet placerat. Aliquam bibendum dui in est eleifend tempor quis eu risus. Nulla nisi justo, congue commodo efficitur non, blandit non mauris. Donec tempor arcu ac mauris volutpat, non euismod elit fringilla. Nullam pharetra velit nunc. Sed nibh nulla, molestie dictum purus eget, convallis cursus nibh.', '2021-06-06');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`fname`, `lname`, `username`, `password`, `email`, `phone`) VALUES
('Durran', 'Furtado', 'Durran20', '12345', 'hello@hello.com', '5555555555'),
('Test1f', 'Test2l', 'test1', '123', 'test1@test1.com', '9999999999'),
('Test2f', 'Test2l', 'test2', '123', 'hello@hello.com', '7777777777');

-- --------------------------------------------------------

--
-- Table structure for table `personalentry`
--

CREATE TABLE `personalentry` (
  `username` varchar(20) NOT NULL,
  `entry` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personalentry`
--

INSERT INTO `personalentry` (`username`, `entry`, `date`) VALUES
('Durran20', 'This is a personal entry.', '2021-06-06'),
('Durran20', 'Hey man, this is my second entry.', '2021-06-06'),
('test1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor semper tortor. Aliquam varius molestie quam ac volutpat. Donec tellus elit, luctus nec dignissim eu, ultricies sit amet odio. Proin viverra dolor non elit semper, vitae porttitor justo dignissim. Nam luctus rhoncus condimentum. Maecenas viverra fringilla ipsum eget feugiat. Suspendisse tristique maximus est, non pellentesque tortor fringilla quis. ', '2021-06-06'),
('test1', 'Curabitur sed ligula diam. Aliquam erat volutpat. Maecenas a pellentesque diam. Integer odio lorem, auctor sed dignissim et, interdum ac dolor. Donec quis nibh quam. Fusce quis bibendum odio, eu euismod elit. Ut imperdiet convallis nisl, fermentum tincidunt augue eleifend eget. Sed cursus dui at ligula blandit efficitur.', '2021-06-06'),
('test1', 'Fusce pellentesque commodo dolor, ac pellentesque mi lacinia sodales. Curabitur interdum metus imperdiet nisi euismod molestie. Phasellus lacinia arcu at sapien venenatis dignissim. Etiam vel metus pulvinar, eleifend nibh non, pulvinar tortor. Ut ultricies luctus pharetra. Maecenas pellentesque lacinia pharetra. Nullam vitae diam vitae odio venenatis egestas. Donec consectetur nibh sapien.', '2021-06-06'),
('test2', 'Hi! I am test2 and this is my first personal entry.', '2021-06-06'),
('Durran20', 'Hey this is my 3rd entry.', '2021-06-06');

-- --------------------------------------------------------

--
-- Table structure for table `workentry`
--

CREATE TABLE `workentry` (
  `username` varchar(20) NOT NULL,
  `entry` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workentry`
--

INSERT INTO `workentry` (`username`, `entry`, `date`) VALUES
('Durran20', 'This is a work entry', '2021-06-06'),
('test1', 'Curabitur sed ligula diam. Aliquam erat volutpat. Maecenas a pellentesque diam. Integer odio lorem, auctor sed dignissim et, interdum ac dolor. Donec quis nibh quam. Fusce quis bibendum odio, eu euismod elit. Ut imperdiet convallis nisl, fermentum tincidunt augue eleifend eget. Sed cursus dui at ligula blandit efficitur.', '2021-06-06'),
('test1', 'Fusce pellentesque commodo dolor, ac pellentesque mi lacinia sodales. Curabitur interdum metus imperdiet nisi euismod molestie. Phasellus lacinia arcu at sapien venenatis dignissim. Etiam vel metus pulvinar, eleifend nibh non, pulvinar tortor. Ut ultricies luctus pharetra. Maecenas pellentesque lacinia pharetra. Nullam vitae diam vitae odio venenatis egestas. Donec consectetur nibh sapien.', '2021-06-06'),
('Durran20', 'A lot of work to be done =(', '2021-06-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
