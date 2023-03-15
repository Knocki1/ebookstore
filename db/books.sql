-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 04:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstoreuser`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `title` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `downloadLink` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`title`, `genre`, `thumbnail`, `downloadLink`) VALUES
('Code: The Hidden Language of Computer Hardware and Software', 'technology', './thumbnails/book1.jpg', './books/book1.pdf'),
('Algorithms to Live By: The Computer Science of Human Decisions', 'computerscience', './thumbnails/book2.jpg', './books/book2.pdf'),
('Structure and Interpretation of Computer Programs, 2nd Edition', 'computerscience', './thumbnails/book3.jpg', './books/book3.pdf'),
('Algorithms, 4th Edition', 'computerscience', './thumbnails/book4.jpg', './books/book4.pdf'),
('Clean Code: A Handbook of Agile Software Craftsmanship', 'softwaredevelopment', './thumbnails/book5.jpg', './books/book5.pdf'),
('Code Complete: A Practical Handbook of Software Construction, 2nd Edition', 'softwaredevelopment', './thumbnails/book6.jpg', './books/book6.pdf'),
('The Second Machine Age: Work, Progress, and Prosperity in a Time of Brilliant Technologies', 'technology', './thumbnails/book7.jpg', './books/book7.epub'),
('The Self Taught Computer Scientist', 'computerscience', './thumbnails/book8.jpg', './books/book8.pdf'),
('Superintelligence: Paths, Dangers, Strategies', 'technology', './thumbnails/book9.jpg', './books/book9.pdf'),
('C Programming Language, 2nd Edition', 'programming', './thumbnails/book10.jpg', './books/book10.djvu'),
('The Mythical Man-Month: Essays on Software Engineering', 'softwaredevelopment', './thumbnails/book11.jpg', './books/book11.pdf'),
('C Programming Absolute Beginner’s Guide, 3rd Edition', 'programming', './thumbnails/book13.jpg', './books/book13.pdf'),
('Computer Science Principles: The Foundational Concepts of Computer Science', 'computerscience', './thumbnails/book14.jpg', './books/book14.pdf'),
('Cracking the Coding Interview: 189 Programming Questions and Solutions', 'programming', './thumbnails/book15.jpg', './books/book15.pdf'),
('Data Structures and Algorithms with Scala', 'programming', './thumbnails/book16.jpg', './books/book16.pdf'),
('Effective Java, 2nd Edition', 'programming', './thumbnails/book19.jpg', './books/book19.pdf'),
('Introduction to Algorithms, 3rd Edition', 'programming', './thumbnails/book20.jpg', './books/book20.pdf'),
('book34', 'computerscience', 'dfkjkjvb', 'JKBVDFNVFJ'),
('new book to show', 'programming', 'hhvhjvj', 'jkbbjbkbj');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
