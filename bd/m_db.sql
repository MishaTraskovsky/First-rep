-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Окт 14 2019 г., 07:08
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `m_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users_cards`
--

CREATE TABLE `users_cards` (
  `id` int(11) NOT NULL,
  `level` varchar(11) NOT NULL,
  `user_type` enum('user','admin','','') NOT NULL,
  `image` varchar(11) NOT NULL,
  `nickname` text NOT NULL,
  `rating` int(11) NOT NULL,
  `description` text NOT NULL,
  `id_parent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users_log`
--

CREATE TABLE `users_log` (
  `id_user` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `info` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `users_person_data`
--

CREATE TABLE `users_person_data` (
  `id` int(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `phone_token` varchar(255) NOT NULL,
  `phone_token_data` varchar(255) NOT NULL,
  `doc_photo` text NOT NULL,
  `surname` text NOT NULL,
  `name` text NOT NULL,
  `patronymic` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` enum('male','female','','') NOT NULL,
  `other_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users_cards`
--
ALTER TABLE `users_cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_parent` (`id_parent`);

--
-- Индексы таблицы `users_log`
--
ALTER TABLE `users_log`
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `users_person_data`
--
ALTER TABLE `users_person_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `phone_2` (`phone`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users_cards`
--
ALTER TABLE `users_cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users_person_data`
--
ALTER TABLE `users_person_data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `users_cards`
--
ALTER TABLE `users_cards`
  ADD CONSTRAINT `users_cards_ibfk_1` FOREIGN KEY (`id_parent`) REFERENCES `users_cards` (`id`);

--
-- Ограничения внешнего ключа таблицы `users_log`
--
ALTER TABLE `users_log`
  ADD CONSTRAINT `users_log_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users_person_data` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
