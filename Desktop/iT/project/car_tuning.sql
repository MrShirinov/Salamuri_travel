    -- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 28 2023 г., 09:55
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `car_tuning`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `car_class` varchar(255) NOT NULL,
  `cost_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `car_class`, `cost_id`) VALUES
(1, 'MINI COOPER, FIAT 500', '1 КЛАСС', 1),
(2, 'BMW 3, MERCEDES', '2 КЛАСС', 2),
(3, 'BMW 7, MERCEDES S', '4 КЛАСС', 3),
(4, 'BMW X3,X4, MERCEDES GL', '5 КЛАСС', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `prices`
--

CREATE TABLE `prices` (
  `price_id` int(11) NOT NULL,
  `tape_name` varchar(255) NOT NULL,
  `tape_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `prices`
--

INSERT INTO `prices` (`price_id`, `tape_name`, `tape_price`) VALUES
(1, 'Пленка SPECTROLL', 53000),
(2, 'Пленка HEXIS', 64000),
(3, 'Пленка SUNTEK', 69000),
(4, 'Пленка LLUMAR', 72000);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` text NOT NULL DEFAULT 'img/icons/user.svg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `login`, `email`, `password`, `avatar`) VALUES
(7, 'Роман', 'Семенов', 'rom', 'rom@mail.ru', '1234568', 'img/rom_1682534833_ben-den-engelsen-YUu9UAcOKZ4-unsplash.jpg'),
(8, 'Марсель', 'Панков', 'nik', 'nik@mail.ru', '456789879', 'img/nik_1682534971_ayo-ogunseinde-sibVwORYqs0-unsplash.jpg'),
(9, 'Равана', 'Ширинова', 'Rava', 'actandcome@mail.ru', '123131', 'img/Rava_1682535544_artem-beliaikin-j5almO1E8rU-unsplash.jpg'),
(10, 'Иван', 'Иванов', 'iva', 'ivan@gmail.com', '564654564', 'img/iva_1682539565_foto-sushi-6anudmpILw4-unsplash.jpg'),
(11, 'Сергей', 'Шишляков', 'Sergo', 'sr@mail.ru', '123131213', 'img/Sergo_1682538533_christian-buehner-DItYlc26zVI-unsplash.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `cost_id` (`cost_id`);

--
-- Индексы таблицы `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`price_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `prices`
--
ALTER TABLE `prices`
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`cost_id`) REFERENCES `prices` (`price_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
