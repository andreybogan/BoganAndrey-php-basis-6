-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 30 2018 г., 00:45
-- Версия сервера: 5.7.23
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `geek_lesson_6`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id_prod` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(128) NOT NULL,
  `text` text NOT NULL,
  `price` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id_prod`, `name`, `text`, `price`) VALUES
(1, 'Портмоне для документов', 'Отличный портмоне для мужчин. Стильный и практичный. Подойдёт для каждодневного использования. Имеет скрытые магнитные застежки.', 1500),
(2, 'Коробочка для денег \"Travel\"', 'Коробочка для денежного подарка \"Travel\" с открыткой.\r\nОтличная упаковка для денежного подарка!\r\nВас пригласили на свадьбу, день рождения, юбилей, и вы хотите красиво подарить денежные средства, на долгожданное путешествие.\r\nДанная коробочка отличная и оригинальная упаковка для вашего подарка!', 750),
(3, 'Органайзер для детских документов', 'Надоело искать документы по всему дому? Носите их в файлике с кнопочкой? В нужный момент перебираете кучу, чтобы найти свидетельство? Забудьте все эти проблемы! В этом органайзере все по местам.', 2300);

-- --------------------------------------------------------

--
-- Структура таблицы `catalog_img`
--

CREATE TABLE `catalog_img` (
  `id_img` tinyint(3) UNSIGNED NOT NULL,
  `id_prod` tinyint(3) UNSIGNED NOT NULL,
  `img` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `catalog_img`
--

INSERT INTO `catalog_img` (`id_img`, `id_prod`, `img`) VALUES
(1, 1, '1-1.jpg'),
(2, 1, '1-2.jpg'),
(3, 2, '2-1.jpg'),
(4, 2, '2-2.jpg'),
(5, 2, '2-3.jpg'),
(6, 3, '3-1.jpg'),
(7, 3, '3-2.jpg'),
(8, 3, '3-3.jpg'),
(9, 3, '3-4.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(128) NOT NULL,
  `text` text NOT NULL,
  `time` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `name`, `text`, `time`) VALUES
(5, 'Адрей', 'Клуб отличный! Все в порядке с организацией и работой фитнеса. Всегда есть стаканчики и вода в кулерах, горячая вода в душе.', 1538231339),
(6, 'Ольга ', 'В женской раздевалке жутко жарко и душно, скорее всего из-за постоянно открытой сауны и душевой. Просьба исправить ситуацию с замком в сауну, он давно вышел из строя.', 1538231469);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id_prod`);

--
-- Индексы таблицы `catalog_img`
--
ALTER TABLE `catalog_img`
  ADD PRIMARY KEY (`id_img`),
  ADD KEY `id_prod` (`id_prod`);

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id_prod` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `catalog_img`
--
ALTER TABLE `catalog_img`
  MODIFY `id_img` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
