-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2019 at 06:40 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expensetracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `expenseId` int(11) NOT NULL,
  `fromUser` text NOT NULL,
  `expenseAmount` text NOT NULL,
  `expenseCategory` text NOT NULL,
  `expenseNote` longtext NOT NULL,
  `expenseDate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`expenseId`, `fromUser`, `expenseAmount`, `expenseCategory`, `expenseNote`, `expenseDate`) VALUES
(2, '2', '123456', 'Other Expenses', '', '19-04-2019'),
(3, '2', '456', 'Other Expenses', 'fga', '19-04-2019'),
(4, '2', '345', 'Other Expenses', '', '19-04-2019'),
(5, '2', '55555', 'Other Expenses', '', '19-04-2019'),
(6, '2', '5367', 'Other Expenses', '', '19-04-2019'),
(7, '2', '3456', 'Other Expenses', '', '19-04-2019'),
(8, '2', '3456', 'Other Expenses', '', '19-04-2019'),
(9, '3', '2', 'Other Expenses', 'q', '20-04-2019'),
(10, '3', '23', 'Other Expenses', 'q', '20-04-2019'),
(11, '3', '456', 'Other Expenses', 'rt', '20-04-2019'),
(12, '3', '3456', 'Other Expenses', 'gfj', '20-04-2019'),
(13, '3', '3457', 'Other Expenses', 'erjg', '20-04-2019'),
(14, '3', '574567', 'Other Expenses', 'ghmghk', '20-04-2019'),
(15, '3', '456468', 'Other Expenses', 'ghjfghj', '20-04-2019'),
(16, '3', '4564586', 'Other Expenses', 'dfgjdj', '20-04-2019'),
(17, '3', '4563456', 'Other Expenses', 'dfg', '20-04-2019'),
(18, '3', '456', 'Professional Services', 'Usman', '02-04-2019'),
(19, '7', '7', 'Personal', 'Sutta', '27-08-2019'),
(20, '7', '12', 'Personal', 'Sutta', '27-08-2019'),
(21, '7', '12', 'Advertising', 'ABC', '27-08-2019');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userFirstName` text NOT NULL,
  `userLastName` text NOT NULL,
  `userEmail` text NOT NULL,
  `userPassword` text NOT NULL,
  `userPhone` text NOT NULL,
  `userDOB` text NOT NULL,
  `userGender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userFirstName`, `userLastName`, `userEmail`, `userPassword`, `userPhone`, `userDOB`, `userGender`) VALUES
(1, 'Ananth', 'Hegde', 'ananth.dayakar123@gmail.com', '$2y$10$H54EvamT.8zGNaetC9iBM.9t2xJ7v3hiU3f6Q/jw.SyyLHA9tyCfm', '8277394032', '05-09-1998', 'Male'),
(2, 'Usman', 'Gani', 'usman@gmail.com', '$2y$10$edi3CxgevfAUBmPifINVpuj3DtL89w4COpLgTWzWwo2PjHxaKwVCy', '123456789', '19-04-2019', 'Male'),
(3, 'Usman', 'Gani', 'usman@test.com', '$2y$10$r8GCfOqVwVH5UBBA8tUCQemTLQ5mzfhRrSEw/vaPMS8QU/RXmQ26m', '8088611415', '31-05-2000', 'Male'),
(4, 'Test', 'server', 'a@a', '$2y$10$c1XByXGkH5ZyRkMN949NhOPjmNnWRebymAqIFvmbAzgytadeEPXY2', '9', '20-04-2019', 'Other'),
(5, ' u', 'u', 'u@u', '$2y$10$1.MO3pCwAPYQXafDPxBN/.EZGWnYIC92H96ozLJSt9O7WEpUBSPMS', '9', '01-05-2019', 'Male'),
(6, 'q', 'q', 'q@q', '$2y$10$bpAMnGsrFioR5RZe9AuTpevit1eD8HoNccj7FF8ECf/rtd4o/aZ2W', 'q', '31-05-2019', 'Male'),
(7, 'Vishnu', 'AS', 'vishnu@gmail.com', '$2y$10$Q7o0GSpnTIyZ8UByENvOauCV9kvbG3tbP6DQQwLbUHjTk124tVzUS', '9481389457', '02-03-2000', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expenseId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expenseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
