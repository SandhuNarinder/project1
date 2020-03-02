-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2020 at 06:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore_creator`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinventory`
--

CREATE TABLE `bookinventory` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `author_name` varchar(50) NOT NULL,
  `book_description` varchar(800) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookinventory`
--

INSERT INTO `bookinventory` (`book_id`, `book_name`, `author_name`, `book_description`, `price`, `quantity`, `image`) VALUES
(1, 'All The Light We Cannot See', 'Anthony Doerr', 'All the Light We Cannot See is a war novel written by American author Anthony Doerr, published by Scribner on May 6, 2014. It won the 2015 Pulitzer Prize for Fiction and the 2015 Andrew Carnegie Medal for Excellence in Fiction', 75, 80, 'images/book1.jpg'),
(2, 'Before We Were Yours', 'Lisa Wingate', 'Consider yourself lucky if you have been born in a family that’s showered you with love and affection throughout most of your life. Most of the people aren’t so lucky.Both touching and hope-instilling, Lisa Wingate’s “Before We Were Yours” is about the least fortunate among them', 28, 45, 'images/book2.jpg'),
(3, 'Fight Of The Sparrow', 'Amy Belding Brown', 'In this amazingly written and deeply researched book, Amy Belding Brown delivers 17th-century Massachusetts to the reader with a prose that springs from the page and wraps you in wonder. Flight of the Sparrow showcases the author’s imagination bound by her dedication to historical fact.', 65, 50, 'images/book3.jpg'),
(4, 'Dragonfly', 'Leila Meacham', 'At the height of WWII, five idealistic young Americans receive a mysterious letter from the OSS, asking them if they are willing to fight for their country. The men and women from very different backgrounds.', 67, 78, 'images/book4.jpg'),
(5, 'The Fountains Of Silence', 'Ruta Sepetys', 'Sepetys\' novel, The Fountains of Silence, was released on October 1, 2019. It is set in Madrid during the dictatorship of Spain\'s Francisco Franco. The story explores the repercussions  of war and the complexities of the dictatorship in Spain.', 45, 75, 'images/book5.jpg'),
(6, 'American Princess', 'Stephanie Marie Thornton', 'American Princess follows \"Amanda, an Upper East Side socialite, who runs off to join a Renaissance Faire after her wedding goes awry. Amanda’s storybook wedding plans are dramatically derailed when she discovers her fiancé is cheating on her, just hours before they are to be wed. Outraged, Amanda reacts violently to the indiscretions and runs away from her own dream wedding in the countryside, only to find herself stranded in the middle of a Renaissance Faire with no phone and no way home.', 50, 80, 'images/book6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinventory`
--
ALTER TABLE `bookinventory`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinventory`
--
ALTER TABLE `bookinventory`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
