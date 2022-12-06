-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2022 年 12 月 06 日 04:19
-- サーバのバージョン： 10.4.27-MariaDB
-- PHP のバージョン: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `F01_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `F01_un_table`
--

CREATE TABLE `F01_un_table` (
  `date` date NOT NULL,
  `weight` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `F01_un_table`
--

INSERT INTO `F01_un_table` (`date`, `weight`) VALUES
('2022-11-20', 1350),
('2022-11-21', 1358),
('2022-11-22', 1338),
('2022-11-23', 1323),
('2022-11-24', 1335),
('2022-11-25', 1340),
('2022-11-26', 1338),
('2022-11-27', 1358),
('2022-11-28', 1340),
('2022-11-29', 1355),
('2022-11-30', 1360),
('2022-12-01', 1500);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
