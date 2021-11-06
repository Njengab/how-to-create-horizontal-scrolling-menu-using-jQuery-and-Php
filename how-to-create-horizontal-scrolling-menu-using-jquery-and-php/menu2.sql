-- phpMyAdmin SQL Dump
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
-- Database: `menu2`
-- Table structure for table `menu_items`
CREATE Database`menu2`;
USE menu2;
CREATE TABLE `menu_items` (
  `item_id` int(11) NOT NULL,
  `table_data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Dumping data for table `menu_items`
INSERT INTO `menu_items` (`item_id`, `table_data`) VALUES
(0, 'home'),
(1, 'about'),
(2, 'contact'),
(3, 'Info'),
(4, 'services '),
(5, 'Help'),
(6, 'countries'),
(7, 'Cities'),
(8, 'jobs'),
(9, 'calendar '),
(10, 'feed'),
(11, 'dashboard '),
(12, 'login'),
(13, 'clients'),
(15, 'support '),
(16, 'donate ');
-- Indexes for table `menu_items`
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`item_id`);
-- AUTO_INCREMENT for table `menu_items`
ALTER TABLE `menu_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;
