-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017 年 6 月 15 日 17:57
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
(5, '最高の休息法', 'https://images-na.ssl-images-amazon.com/images/I/51%2BzmxiQfmL._SX346_BO1,204,203,200_.jpg', '白ワイン飲みながら読みました！!!\r\n', '2017-06-07 08:37:20'),
(6, 'エッセンシャル思考', 'https://images-na.ssl-images-amazon.com/images/I/51eOOVlZgqL._SX344_BO1,204,203,200_.jpg', '難しいです・・。', '2017-06-07 08:38:26'),
(7, '謙虚なコンサルティング', 'https://images-na.ssl-images-amazon.com/images/I/51E9mijLMqL._SX338_BO1,204,203,200_.jpg', '読みたいです！', '2017-06-09 13:12:15'),
(9, 'リクルートの　すごい構“創”力　アイデアを事業に仕上げる9メソッド', 'https://images-fe.ssl-images-amazon.com/images/I/51j7Thv3wiL.jpg', 'ドカン参加の方にオススメされたので、読んだら報告する！', '2017-06-13 08:10:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
