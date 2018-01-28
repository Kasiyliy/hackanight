-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 28 2018 г., 03:55
-- Версия сервера: 5.5.57-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `agenda`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', '12345678'),
(2, 'Admin2', 'admin2@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Структура таблицы `Courses`
--

CREATE TABLE IF NOT EXISTS `Courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `specialty_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `Courses`
--

INSERT INTO `Courses` (`id`, `title`, `specialty_id`) VALUES
(12, '2', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `Groups`
--

CREATE TABLE IF NOT EXISTS `Groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `stream_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `Groups`
--

INSERT INTO `Groups` (`id`, `title`, `stream_id`) VALUES
(1, 'IS-1503k', 2),
(5, 'IS 1504k', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `Rank`
--

CREATE TABLE IF NOT EXISTS `Rank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `max_student` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `Rank`
--

INSERT INTO `Rank` (`id`, `title`, `max_student`) VALUES
(1, 'Senior Lector', 80),
(2, 'Lector', 20);

-- --------------------------------------------------------

--
-- Структура таблицы `Rooms`
--

CREATE TABLE IF NOT EXISTS `Rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `Rooms`
--

INSERT INTO `Rooms` (`id`, `title`, `type`) VALUES
(6, '901', 'practice'),
(7, '902', 'lecture'),
(8, '903', 'lecture');

-- --------------------------------------------------------

--
-- Структура таблицы `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `week` int(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `group_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `room` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10954 ;

--
-- Дамп данных таблицы `schedule`
--

INSERT INTO `schedule` (`id`, `week`, `start_time`, `end_time`, `group_id`, `teacher_id`, `subject`, `room`, `type`) VALUES
(10953, 1, '10:00:00', '10:50:00', 3, 2, 7, 7, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `specialty`
--

CREATE TABLE IF NOT EXISTS `specialty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `specialty`
--

INSERT INTO `specialty` (`id`, `title`) VALUES
(1, 'Information Systems');

-- --------------------------------------------------------

--
-- Структура таблицы `Streams`
--

CREATE TABLE IF NOT EXISTS `Streams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `Streams`
--

INSERT INTO `Streams` (`id`, `title`, `course_id`) VALUES
(4, '2-stream', 12);

-- --------------------------------------------------------

--
-- Структура таблицы `Subject`
--

CREATE TABLE IF NOT EXISTS `Subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `credit` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `Subject`
--

INSERT INTO `Subject` (`id`, `title`, `credit`, `time`) VALUES
(7, 'Phylosphy', 3, 48),
(8, 'Web technology', 3, 48),
(9, 'English', 2, 3),
(10, 'Information Security and Data Protection', 3, 4),
(11, 'Perfromance Data Structure and Alghorithms', 4, 4),
(12, 'Physical Training', 4, 4),
(13, 'Architecture and Design', 4, 4),
(14, 'Computational Mathematics', 4, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `SubjectType`
--

CREATE TABLE IF NOT EXISTS `SubjectType` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Дамп данных таблицы `SubjectType`
--

INSERT INTO `SubjectType` (`id`, `title`, `subject_id`, `teacher_id`) VALUES
(6, 'lecture', 7, 1),
(7, 'lecture', 7, 10),
(8, 'lecture', 7, 10),
(9, 'lecture', 8, 1),
(10, 'practice', 8, 1),
(11, 'lecture', 8, 1),
(12, 'laboratory', 10, 7),
(13, 'lecture', 7, 8),
(14, 'lecture', 7, 8),
(15, 'lecture', 10, 0),
(16, 'practice', 10, 0),
(17, 'laboratory', 10, 0),
(18, 'lecture', 11, 0),
(19, 'practice', 11, 0),
(20, 'laboratory', 11, 0),
(21, 'practice', 12, 0),
(22, 'lecture', 13, 0),
(23, 'practice', 13, 0),
(24, 'lecture', 7, 5),
(25, 'laboratory', 14, 4),
(26, 'practice', 14, 3),
(27, 'laboratory', 14, 1),
(28, 'practice', 12, 3),
(29, 'laboratory', 8, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `Teachers`
--

CREATE TABLE IF NOT EXISTS `Teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `rank_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `Teachers`
--

INSERT INTO `Teachers` (`id`, `name`, `surname`, `rank_id`) VALUES
(1, 'Sholpan', 'Maulenovna', 1),
(3, 'Ivan', 'Filko', 1),
(4, 'Ayan', 'Nurbolar', 2),
(5, 'Karliga', 'Bokenovna', 1),
(6, 'Karlygash', 'Mukhitova', 1),
(7, 'Damir', 'Asanbaev', 2),
(8, 'Koken', 'Zharkinbek', 2),
(9, 'Dinara', 'Izturagnova', 1),
(10, 'Dinara', 'Izturagnova', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `time`
--

CREATE TABLE IF NOT EXISTS `time` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Дамп данных таблицы `time`
--

INSERT INTO `time` (`id`, `start_time`, `end_time`) VALUES
(1, '08:00:00', '08:50:00'),
(2, '09:00:00', '09:50:00'),
(10, '10:00:00', '10:50:00'),
(11, '11:00:00', '11:50:00'),
(12, '12:10:00', '13:00:00'),
(13, '13:10:00', '14:00:00'),
(14, '14:10:00', '15:00:00'),
(15, '15:10:00', '16:00:00'),
(16, '16:10:00', '17:00:00'),
(17, '17:20:00', '18:10:00');

-- --------------------------------------------------------

--
-- Структура таблицы `weeks`
--

CREATE TABLE IF NOT EXISTS `weeks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `weeks`
--

INSERT INTO `weeks` (`id`, `title`) VALUES
(1, 'Monday'),
(2, 'Tuesday'),
(3, 'Wednesday'),
(4, 'Thursday'),
(5, 'Friday'),
(6, 'Saturday');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
