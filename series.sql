-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 06 2017 г., 10:44
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `series`
--

-- --------------------------------------------------------

--
-- Структура таблицы `episode`
--

CREATE TABLE `episode` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description_episode` text NOT NULL,
  `id_season` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `rating` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `episode`
--

INSERT INTO `episode` (`id`, `title`, `description_episode`, `id_season`, `image`, `rating`) VALUES
(9, 'Эпизод 1', '<p>Эпизод 1</p>\r\n', 10, 'Hydrangeas.jpg', 44),
(10, '1 Эпизод', '<p>1 Эпизод</p>\r\n', 11, 'Penguins.jpg', 22),
(11, 'укепеку', '<p>пнеуекн</p>\r\n', 11, 'Jellyfish.jpg', 55),
(12, 'Эпизод1', '<p>Эпизод1</p>\r\n', 12, 'Lighthouse.jpg', 22),
(13, 'Эпизод 2', '<p>Эпизод1</p>\r\n', 12, '', 22),
(15, '11', '<p>11</p>\r\n', 13, '', 11);

-- --------------------------------------------------------

--
-- Структура таблицы `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `filePath` varchar(400) NOT NULL,
  `itemId` int(11) DEFAULT NULL,
  `isMain` tinyint(1) DEFAULT NULL,
  `modelName` varchar(150) NOT NULL,
  `urlAlias` varchar(400) NOT NULL,
  `name` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `image`
--

INSERT INTO `image` (`id`, `filePath`, `itemId`, `isMain`, `modelName`, `urlAlias`, `name`) VALUES
(1, 'Series/Series1/18d9be.png', 1, 0, 'Series', 'a2ad23434e-2', ''),
(2, 'Series/Series1/54866a.jpg', 1, 1, 'Series', 'cc99364a08-1', ''),
(3, 'Series/Series19/46bc4d.jpg', 19, 1, 'Series', '7240129ae6-1', ''),
(4, 'Series/Series20/fa0db6.jpg', 20, 1, 'Series', '247e719fba-1', ''),
(5, 'Episodes/Episode8/6aa773.jpg', 8, 0, 'Episode', 'd4d8181462-2', ''),
(6, 'Episodes/Episode8/4ecbb4.png', 8, 1, 'Episode', '9d2c97aa5a-1', ''),
(7, 'Series/Series21/5bbce1.jpg', 21, 1, 'Series', '15aca24251-1', ''),
(8, 'Series/Series22/699f16.jpg', 22, 0, 'Series', '8ec238791c-2', ''),
(9, 'Series/Series22/6a4f82.jpg', 22, 1, 'Series', '54ef25dc8d-1', ''),
(10, 'Episodes/Episode9/bd76a3.jpg', 9, 0, 'Episode', 'f01d925e62-3', ''),
(11, 'Episodes/Episode10/a5bd4b.jpg', 10, 0, 'Episode', 'f97b6a9fa4-3', ''),
(12, 'Episodes/Episode10/1d5201.jpg', 10, 0, 'Episode', '93824d8360-2', ''),
(13, 'Episodes/Episode10/1a0ae2.jpg', 10, 1, 'Episode', 'a348cff686-1', ''),
(14, 'Episodes/Episode9/c11b2c.jpg', 9, 0, 'Episode', 'bd72f8fc9b-2', ''),
(15, 'Episodes/Episode9/425019.jpg', 9, 1, 'Episode', 'ca9e9686e9-1', ''),
(16, 'Episodes/Episode11/fbf7a7.jpg', 11, 0, 'Episode', '3a348cca60-2', ''),
(17, 'Episodes/Episode11/0a4ebd.jpg', 11, 1, 'Episode', '8fdbfe84be-1', ''),
(18, 'Episodes/Episode13/117209.jpg', 13, 1, 'Episode', '8663a7493c-1', ''),
(19, 'Episodes/Episode12/06092b.jpg', 12, 1, 'Episode', 'f176dd6ef5-1', '');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1483597837),
('m140622_111540_create_image_table', 1483597841),
('m140622_111545_add_name_to_image_table', 1483597841);

-- --------------------------------------------------------

--
-- Структура таблицы `season`
--

CREATE TABLE `season` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text_description` text NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `id_series` int(11) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `season`
--

INSERT INTO `season` (`id`, `title`, `text_description`, `start_date`, `end_date`, `id_series`, `keywords`, `description`) VALUES
(10, '1 Сезон', '<p>1 Сезон</p>\r\n', 'Июл 7, 2022', 'Июл 22, 2022', 22, 'ваып', 'павпавп'),
(11, '1 Сезон', '<p>1 Сезон</p>\r\n', 'Июл 1, 2022', 'Июл 22, 2022', 22, '1 Сезон', '1 Сезон'),
(12, 'Сезон 1', '<p>Сезон 1</p>\r\n', 'Июл 22, 2022', 'Июл 22, 2022', 21, 'Сезон 1', 'Сезон 1'),
(13, 'Сезон 2', '<p>Сезон 2</p>\r\n', 'Июл 1, 2022', 'Июл 5, 2022', 21, 'Сезон 2', 'Сезон 2'),
(14, 'Сезон 2', '<p>Сезон 2</p>\r\n', 'Июл 1, 2022', 'Июл 23, 2022', 21, 'Сезон 2', 'Сезон 2');

-- --------------------------------------------------------

--
-- Структура таблицы `series`
--

CREATE TABLE `series` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` varchar(100) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quality` varchar(10) NOT NULL,
  `directors` varchar(255) NOT NULL,
  `actors` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `series`
--

INSERT INTO `series` (`id`, `name`, `text`, `date`, `keywords`, `description`, `image`, `quality`, `directors`, `actors`) VALUES
(21, 'Ералаш', '<p><strong>Lorem Ipsum</strong><span style="color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px">&nbsp;- это текст-&quot;рыба&quot;, часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной &quot;рыбой&quot; для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов</span></p>\r\n', 'Июл 8, 2022', 'Ералаш', 'Ералаш', '', 'HD', 'Ералаш', 'Ералаш'),
(22, 'Кино', '<p><strong>Lorem Ipsum</strong><span style="color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px">&nbsp;- это текст-&quot;рыба&quot;, часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной &quot;рыбой&quot; для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов</span></p>\r\n', 'Июл 8, 2022', 'Кино', 'Кино', '', 'HD', 'Кино', 'Ералаш, Кино');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `season`
--
ALTER TABLE `season`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `episode`
--
ALTER TABLE `episode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT для таблицы `season`
--
ALTER TABLE `season`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблицы `series`
--
ALTER TABLE `series`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
