-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 06 2019 г., 11:42
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sergey_tue_17`
--

-- --------------------------------------------------------

--
-- Структура таблицы `gamestore`
--

CREATE TABLE `gamestore` (
  `name` varchar(355) NOT NULL,
  `img` varchar(355) NOT NULL,
  `price` varchar(355) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gamestore`
--

INSERT INTO `gamestore` (`name`, `img`, `price`, `id`) VALUES
('Jast Cause 7', 'images/1.jpg', '29994', 1),
('Far Cry: New Dawn', 'images/2.jpg', '1849р', 5),
('Red ded dedemption', 'images/5.jpg', '1250', 7);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `gamestore`
--
ALTER TABLE `gamestore`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `gamestore`
--
ALTER TABLE `gamestore`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
