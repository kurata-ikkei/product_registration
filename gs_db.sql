-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2021 at 10:11 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `gs_user_table`
--

CREATE TABLE `gs_user_table` (
  `id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `role_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gs_user_table`
--

INSERT INTO `gs_user_table` (`id`, `name`, `lid`, `lpw`, `role_flg`, `life_flg`) VALUES
(1, 'ikkeiKURATA', 'ikkei', '1234', 0, 0),
(2, 'tanaka', 'tnk', '0000', 1, 0),
(3, '山田', 'yamada', '0000', 2, 0),
(4, 'sato', 'sato', '0000', 1, 0),
(5, 'suzuki', 'suzuki', '0000', 0, 0),
(7, 'hogehoge', 'hoge', 'hoge', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `item_no` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `season` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `item_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `item_price` int(11) NOT NULL,
  `memo` text COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `item_no`, `year`, `season`, `genre`, `gender`, `category`, `item_name`, `item_price`, `memo`, `created_date`, `update_data`) VALUES
(1, 'na-y01sj01', '2021', 'all season', 'business', 'mens', 'jacket', 'テーラードジャケット', 25000, 'test', '2021-06-19 10:48:23', '2021-06-19 10:48:23'),
(2, 'nb-x01sj01', '2021', 'all season', 'business', 'wemens', 'jacket', 'ダブルブレストジャケット', 20000, 'test', '2021-06-19 12:30:50', '2021-06-19 12:30:50'),
(3, 'nb-y01sh02', '2021', 'spring', 'athletic', 'mens', 'shirt', 'ニットカラーポロシャツ（L/S）', 13000, 'test', '2021-06-19 12:35:25', '2021-06-19 12:35:25'),
(4, 'na-x01sh01', '2021', 'all season', 'athletic', 'wemens', 'shirt', 'バックスリットシャツ', 12000, 'test', '2021-06-19 12:38:16', '2021-06-19 12:38:16'),
(5, 'na-x01sa01', '2021', 'all season', 'athletic', 'wemens', 'one-piece', 'サイドジッパーワンピース', 11000, 'test2222', '2021-06-19 16:31:15', '2021-06-26 22:11:56'),
(6, 'na-y01sp03', '2021', 'all season', 'athletic', 'mens', 'pants', 'スリムジョガーパンツ', 13000, 'test', '2021-06-19 16:33:03', '2021-06-19 16:33:03'),
(7, 'na-y01st01', '2021', 'all season', 'athletic', 'mens', 'Tshirt', 'ストレッチTシャツ', 7800, 'スポーツ用', '2021-06-20 15:16:28', '2021-06-20 15:16:28'),
(8, 'nb-x01sh02', '2021', 'all season', 'business', 'wemens', 'shirt', 'ノーカラーサイドスリットシャツ', 12000, '売価変更（2021/6/26）', '2021-06-20 20:51:30', '2021-06-26 22:12:54'),
(9, 'nb-x01sp01', '2021', 'all season', 'business', 'wemens', 'pants', 'フロントスリットパンツ', 15000, '', '2021-06-20 20:52:28', '2021-06-20 20:52:28'),
(10, 'na-x01sl01', '2021', 'all season', 'athletic', 'wemens', 'leggins', 'メッシュスイッチレギンス', 11000, '', '2021-06-20 20:53:14', '2021-06-20 20:53:14'),
(11, 'na-y01sc02', '2021', 'spring', 'athletic', 'mens', 'coat-outer', 'ロングフードコート', 26000, '', '2021-06-20 20:54:08', '2021-06-20 20:54:08'),
(12, 'na-x01sl02', '2021', 'all season', 'athletic', 'wemens', 'leggins', 'ポケットレギンス', 12000, 'おばちゃん買ったw', '2021-06-21 11:47:03', '2021-06-21 11:47:03'),
(13, 'nb-y01sh04', '2021', 'summer', 'business', 'mens', 'shirt', 'ポケットシャツ（S／S）', 12000, '', '2021-06-26 20:03:11', '2021-06-26 20:03:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
