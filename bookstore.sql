-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 15, 2016 at 10:47 PM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `author_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `author_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`author_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `fname`, `lname`, `author_title`) VALUES
('1', 'Ivan', 'Uy', 'Artisan'),
('2', 'ivan2', 'uy2', 'dev'),
('3', 'ivan2', 'uy2', 'web dev');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `book_isbn` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `book_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `book_author` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `book_publisher` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `book_publisher_year` smallint(6) NOT NULL,
  `book_genre` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`book_isbn`),
  KEY `books_book_author_foreign` (`book_author`),
  KEY `books_book_publisher_foreign` (`book_publisher`),
  KEY `books_book_genre_foreign` (`book_genre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_isbn`, `book_title`, `book_author`, `book_publisher`, `book_publisher_year`, `book_genre`) VALUES
('20161408', 'Introduction to Laravel 5.2', '1', '1', 2016, '1'),
('2016158', 'Advance Laravel 5.2', '1', '1', 2016, '1');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE IF NOT EXISTS `genres` (
  `genre_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `genre_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`genre_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`genre_id`, `genre_name`) VALUES
('1', 'technology'),
('2', 'programming'),
('3', 'big data');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_08_14_151623_create_genres_table', 1),
('2016_08_14_151638_create_publishers_table', 1),
('2016_08_14_151652_create_authors_table', 1),
('2016_08_14_151703_create_books_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE IF NOT EXISTS `publishers` (
  `publisher_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `publisher_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`publisher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`publisher_id`, `publisher_name`) VALUES
('1', 'ivan inc.'),
('2', 'ivan2'),
('3', 'ivan3');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_book_genre_foreign` FOREIGN KEY (`book_genre`) REFERENCES `genres` (`genre_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `books_book_author_foreign` FOREIGN KEY (`book_author`) REFERENCES `authors` (`author_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `books_book_publisher_foreign` FOREIGN KEY (`book_publisher`) REFERENCES `publishers` (`publisher_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
