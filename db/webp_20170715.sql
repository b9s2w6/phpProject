-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 20-06-27 00:38
-- 서버 버전: 8.0.19
-- PHP 버전: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `webp_20170715`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `board_20170715`
--

CREATE TABLE `board_20170715` (
  `num` int NOT NULL,
  `sports` char(15) NOT NULL,
  `level` char(15) NOT NULL,
  `people` char(10) NOT NULL,
  `writer` char(30) NOT NULL,
  `area` char(50) NOT NULL,
  `date` datetime NOT NULL,
  `d_area` char(30) DEFAULT NULL,
  `accept` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `members_20170715`
--

CREATE TABLE `members_20170715` (
  `name` char(15) NOT NULL,
  `email` char(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `waiting_20170715`
--

CREATE TABLE `waiting_20170715` (
  `w_num` int NOT NULL,
  `num` int NOT NULL,
  `email` char(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `accept` tinyint(1) NOT NULL,
  `phone` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `board_20170715`
--
ALTER TABLE `board_20170715`
  ADD PRIMARY KEY (`num`);

--
-- 테이블의 인덱스 `members_20170715`
--
ALTER TABLE `members_20170715`
  ADD PRIMARY KEY (`email`);

--
-- 테이블의 인덱스 `waiting_20170715`
--
ALTER TABLE `waiting_20170715`
  ADD PRIMARY KEY (`w_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `board_20170715`
--
ALTER TABLE `board_20170715`
  MODIFY `num` int NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `waiting_20170715`
--
ALTER TABLE `waiting_20170715`
  MODIFY `w_num` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
