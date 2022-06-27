-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2022-03-25 02:41:44
-- サーバのバージョン： 10.4.22-MariaDB
-- PHP のバージョン: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `osimen_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `osimen_name`
--

CREATE TABLE `osimen_name` (
  `osimen_id` int(11) NOT NULL,
  `osimen_name` text NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `osimen_name`
--

INSERT INTO `osimen_name` (`osimen_id`, `osimen_name`, `created_at`) VALUES
(1, '山田　太郎', '2022-03-25'),
(2, '田中　宏樹', '2022-03-25'),
(3, '菅田　将暉', '2022-03-25'),
(4, '鈴木　亮平', '2022-03-25'),
(5, '山﨑　賢人', '2022-03-25'),
(6, '吉沢　亮', '2022-03-25');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `osimen_name`
--
ALTER TABLE `osimen_name`
  ADD PRIMARY KEY (`osimen_id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `osimen_name`
--
ALTER TABLE `osimen_name`
  MODIFY `osimen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
