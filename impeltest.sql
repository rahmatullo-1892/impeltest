-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 27 2020 г., 10:57
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `impeltest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `leads_source`
--

CREATE TABLE `leads_source` (
  `id` int(11) NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `leads_source`
--

INSERT INTO `leads_source` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Влад', 1, '2020-08-26 17:42:21', '2020-08-26 17:38:17'),
(2, 'Илья', 0, '2020-08-26 08:00:16', '2020-08-27 03:57:35'),
(3, 'test', 1, '2020-08-26 08:28:04', '2020-08-26 17:38:57'),
(4, 'test', 0, '2020-08-26 08:28:13', '2020-08-26 08:28:13'),
(5, 'test', 0, '2020-08-26 08:28:15', '2020-08-26 08:28:15'),
(6, 'test', 0, '2020-08-26 08:28:34', '2020-08-26 08:28:34'),
(7, 'test', 0, '2020-08-26 08:28:37', '2020-08-26 08:28:37'),
(8, 'test', 0, '2020-08-26 08:28:43', '2020-08-26 08:28:43'),
(9, 'test', 0, '2020-08-26 08:30:08', '2020-08-26 08:30:08'),
(10, 'test', 0, '2020-08-26 08:30:17', '2020-08-26 08:30:17'),
(11, 'test', 0, '2020-08-26 08:30:22', '2020-08-26 08:30:22'),
(12, 'test', 0, '2020-08-26 08:35:39', '2020-08-26 08:35:39'),
(13, 'test', 0, '2020-08-26 08:37:03', '2020-08-26 08:37:03'),
(14, 'test', 0, '2020-08-26 08:37:04', '2020-08-26 08:37:04'),
(15, 'test', 0, '2020-08-26 08:37:36', '2020-08-26 08:37:36'),
(16, '11111111', 0, '2020-08-26 16:34:05', '2020-08-26 16:34:05'),
(17, 'цццццц', 0, '2020-08-26 17:33:52', '2020-08-26 17:33:52'),
(18, '22222222222', 0, '2020-08-26 17:34:02', '2020-08-26 17:34:02'),
(19, '333333333333', 0, '2020-08-26 17:34:06', '2020-08-26 17:34:06'),
(20, '4444444444', 0, '2020-08-26 17:34:10', '2020-08-26 17:34:10'),
(21, '5555555555', 0, '2020-08-26 17:34:15', '2020-08-26 17:34:15'),
(22, 'Мурманск', 0, '2020-08-26 18:08:06', '2020-08-26 18:08:06'),
(23, 'Рахматулло', 0, '2020-08-26 22:46:39', '2020-08-26 22:46:39'),
(24, '2222', 0, '2020-08-26 22:56:50', '2020-08-26 22:56:50'),
(25, 'ssssssss', 0, '2020-08-27 03:57:15', '2020-08-27 03:57:15');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `leads_source`
--
ALTER TABLE `leads_source`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `leads_source`
--
ALTER TABLE `leads_source`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
