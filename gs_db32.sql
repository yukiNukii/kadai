-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017 年 6 月 10 日 10:58
-- サーバのバージョン： 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gs_db32`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_an_table`
--

CREATE TABLE `gs_an_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `naiyou` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_an_table`
--

INSERT INTO `gs_an_table` (`id`, `name`, `email`, `naiyou`, `indate`) VALUES
(1, 'NUKIIYUKI', 'y@gmail.com', 'value=\"test1\"', '2017-06-03 15:34:08'),
(3, 'hama', 'hh@gmail.com', 'test1', '2017-06-03 15:37:52'),
(5, 'murata', 'mm@gmail.com', 'test1', '2017-06-03 15:38:38'),
(7, '抜井', 'yy@gmail.com', 'test', '2017-06-03 16:26:45'),
(8, 'yamashita', 'yamashtia@test.com', 'yamsahita', '2017-06-03 16:27:31'),
(9, 'YukiNukii', 'yuki@test.com', 'kyouhaphpの更新です', '2017-06-10 14:46:46');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `book_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `book_url` text COLLATE utf8_unicode_ci NOT NULL,
  `book_text` text COLLATE utf8_unicode_ci NOT NULL,
  `book_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `book_name`, `book_url`, `book_text`, `book_date`) VALUES
(1, 'ピクト図解', 'https://images-fe.ssl-images-amazon.com/images/I/4122Ohr9uzL.jpg', 'もう一度読もう！', '2017-06-04 18:28:51'),
(2, '逆説のスタートアップ思考', 'https://images-na.ssl-images-amazon.com/images/I/41f6SJzdJgL._SX311_BO1,204,203,200_.jpg', '読みました', '2017-06-04 18:31:23'),
(3, 'ZERO to ONE', 'https://images-na.ssl-images-amazon.com/images/I/41aXtS8PLML._SX347_BO1,204,203,200_.jpg', '読みました！', '2017-06-06 21:30:10'),
(4, 'ライフシフト', 'https://images-na.ssl-images-amazon.com/images/I/51e6mV1O20L._SX346_BO1,204,203,200_.jpg', '読んだ！', '2017-06-07 08:36:22'),
(5, '最高の休息法', 'https://images-na.ssl-images-amazon.com/images/I/51%2BzmxiQfmL._SX346_BO1,204,203,200_.jpg', '白ワイン飲みながら読みました！', '2017-06-07 08:37:20'),
(6, 'エッセンシャル思考', 'https://images-na.ssl-images-amazon.com/images/I/51eOOVlZgqL._SX344_BO1,204,203,200_.jpg', '難しいです・・。', '2017-06-07 08:38:26'),
(7, '謙虚なコンサルティング', 'https://images-na.ssl-images-amazon.com/images/I/51E9mijLMqL._SX338_BO1,204,203,200_.jpg', '読みたいです！', '2017-06-09 13:12:15'),
(8, 'iii', 'http;;ooo', 'aaaa', '2017-06-10 14:06:27');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_user_table`
--

CREATE TABLE `gs_user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_an_table`
--
ALTER TABLE `gs_an_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_an_table`
--
ALTER TABLE `gs_an_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
