-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Окт 22 2017 г., 22:48
-- Версия сервера: 10.1.26-MariaDB
-- Версия PHP: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Northern Lights Route`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Activities`
--

CREATE TABLE `Activities` (
  `Activity_ID` int(8) NOT NULL,
  `Activity_name` varchar(50) NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `Score` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `Audio`
--

CREATE TABLE `Audio` (
  `Audio_ID` int(8) NOT NULL,
  `Audio_name` varchar(20) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Municipality_ID` int(8) NOT NULL,
  `User_ID` int(8) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `Companies`
--

CREATE TABLE `Companies` (
  `Company_ID` int(8) NOT NULL,
  `Company_name` varchar(50) NOT NULL,
  `Company_offer` varchar(500) NOT NULL,
  `Activity_ID` int(8) NOT NULL,
  `Company_owner_ID` int(8) NOT NULL,
  `Company_address` varchar(50) NOT NULL,
  `Municipality_ID` int(8) NOT NULL,
  `Company_website` varchar(100) NOT NULL,
  `Company_facebookpage` varchar(100) NOT NULL,
  `Company_picture` varchar(100) NOT NULL,
  `Additional_info` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `Company_Owners`
--

CREATE TABLE `Company_Owners` (
  `Company_Owner_ID` int(8) NOT NULL,
  `Owner_Firstname` varchar(50) NOT NULL,
  `Owner_Lastname` varchar(50) NOT NULL,
  `Owner_Number` varchar(50) NOT NULL,
  `Owner_Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `Interesting_places_to_do`
--

CREATE TABLE `Interesting_places_to_do` (
  `Place_ID` int(8) NOT NULL,
  `Place_Name` varchar(50) NOT NULL,
  `Municipality_ID` int(8) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `Score` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `Interesting_things_to_do`
--

CREATE TABLE `Interesting_things_to_do` (
  `Thing_ID` int(8) NOT NULL,
  `Thing_name` varchar(50) NOT NULL,
  `Municipality_ID` int(8) NOT NULL,
  `Adress` varchar(150) NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `Score` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `Municipality`
--

CREATE TABLE `Municipality` (
  `Municipality_ID` int(8) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Zipcode` varchar(50) NOT NULL,
  `Municipality_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `Mystery_game`
--

CREATE TABLE `Mystery_game` (
  `Game_ID` int(8) NOT NULL,
  `User_ID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `Mystery_game_QA`
--

CREATE TABLE `Mystery_game_QA` (
  `Game_ID` int(8) NOT NULL,
  `Question` varchar(500) NOT NULL,
  `Points` varchar(3) NOT NULL,
  `Answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `Picture`
--

CREATE TABLE `Picture` (
  `Picture_ID` int(8) NOT NULL,
  `Picture_name` varchar(20) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Municipality_ID` int(8) NOT NULL,
  `User_ID` int(8) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE `Users` (
  `User_ID` int(8) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Picture` varchar(100) DEFAULT NULL,
  `Score` varchar(3) NOT NULL,
  `Login` varchar(12) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`User_ID`, `Firstname`, `Lastname`, `Date_of_birth`, `Country`, `Email`, `Picture`, `Score`, `Login`, `Password`) VALUES
(1, 'Alena', 'Karpenko', '1997-10-08', 'Russia', 'alena.karpenko@edu.lapinamk.fi', NULL, '', 'admin', 'BIT16');

-- --------------------------------------------------------

--
-- Структура таблицы `User_activities`
--

CREATE TABLE `User_activities` (
  `User_ID` int(8) NOT NULL,
  `Company_ID` int(8) NOT NULL,
  `Activity_ID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `User_places`
--

CREATE TABLE `User_places` (
  `User_ID` int(8) NOT NULL,
  `Place_ID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `User_things`
--

CREATE TABLE `User_things` (
  `User_ID` int(8) NOT NULL,
  `Thing_ID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `Video`
--

CREATE TABLE `Video` (
  `Video_ID` int(8) NOT NULL,
  `Video_name` varchar(20) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Municipality_ID` int(8) NOT NULL,
  `User_ID` int(8) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Activities`
--
ALTER TABLE `Activities`
  ADD PRIMARY KEY (`Activity_ID`);

--
-- Индексы таблицы `Audio`
--
ALTER TABLE `Audio`
  ADD PRIMARY KEY (`Audio_ID`),
  ADD KEY `Municipality_ID` (`Municipality_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Индексы таблицы `Companies`
--
ALTER TABLE `Companies`
  ADD PRIMARY KEY (`Company_ID`),
  ADD KEY `Activity_ID` (`Activity_ID`),
  ADD KEY `Company_owner_ID` (`Company_owner_ID`),
  ADD KEY `Municipality_ID` (`Municipality_ID`);

--
-- Индексы таблицы `Company_Owners`
--
ALTER TABLE `Company_Owners`
  ADD PRIMARY KEY (`Company_Owner_ID`);

--
-- Индексы таблицы `Interesting_places_to_do`
--
ALTER TABLE `Interesting_places_to_do`
  ADD PRIMARY KEY (`Place_ID`),
  ADD KEY `Municipality_ID` (`Municipality_ID`);

--
-- Индексы таблицы `Interesting_things_to_do`
--
ALTER TABLE `Interesting_things_to_do`
  ADD PRIMARY KEY (`Thing_ID`),
  ADD KEY `Municipality_ID` (`Municipality_ID`);

--
-- Индексы таблицы `Municipality`
--
ALTER TABLE `Municipality`
  ADD PRIMARY KEY (`Municipality_ID`);

--
-- Индексы таблицы `Mystery_game`
--
ALTER TABLE `Mystery_game`
  ADD KEY `Game_ID` (`Game_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Индексы таблицы `Mystery_game_QA`
--
ALTER TABLE `Mystery_game_QA`
  ADD PRIMARY KEY (`Game_ID`);

--
-- Индексы таблицы `Picture`
--
ALTER TABLE `Picture`
  ADD PRIMARY KEY (`Picture_ID`),
  ADD KEY `Municipality_ID` (`Municipality_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Индексы таблицы `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`User_ID`);

--
-- Индексы таблицы `User_activities`
--
ALTER TABLE `User_activities`
  ADD KEY `Activity_ID` (`Activity_ID`),
  ADD KEY `Company_ID` (`Company_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Индексы таблицы `User_places`
--
ALTER TABLE `User_places`
  ADD KEY `Place_ID` (`Place_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Индексы таблицы `User_things`
--
ALTER TABLE `User_things`
  ADD KEY `Thing_ID` (`Thing_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Индексы таблицы `Video`
--
ALTER TABLE `Video`
  ADD PRIMARY KEY (`Video_ID`),
  ADD KEY `Municipality_ID` (`Municipality_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Audio`
--
ALTER TABLE `Audio`
  ADD CONSTRAINT `audio_ibfk_1` FOREIGN KEY (`Municipality_ID`) REFERENCES `Municipality` (`Municipality_ID`),
  ADD CONSTRAINT `audio_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `Users` (`User_ID`);

--
-- Ограничения внешнего ключа таблицы `Companies`
--
ALTER TABLE `Companies`
  ADD CONSTRAINT `companies_ibfk_1` FOREIGN KEY (`Activity_ID`) REFERENCES `Activities` (`Activity_ID`),
  ADD CONSTRAINT `companies_ibfk_2` FOREIGN KEY (`Company_owner_ID`) REFERENCES `Company_Owners` (`Company_Owner_ID`),
  ADD CONSTRAINT `companies_ibfk_3` FOREIGN KEY (`Municipality_ID`) REFERENCES `Municipality` (`Municipality_ID`);

--
-- Ограничения внешнего ключа таблицы `Interesting_places_to_do`
--
ALTER TABLE `Interesting_places_to_do`
  ADD CONSTRAINT `interesting_places_to_do_ibfk_1` FOREIGN KEY (`Municipality_ID`) REFERENCES `Municipality` (`Municipality_ID`);

--
-- Ограничения внешнего ключа таблицы `Interesting_things_to_do`
--
ALTER TABLE `Interesting_things_to_do`
  ADD CONSTRAINT `interesting_things_to_do_ibfk_1` FOREIGN KEY (`Municipality_ID`) REFERENCES `Municipality` (`Municipality_ID`);

--
-- Ограничения внешнего ключа таблицы `Mystery_game`
--
ALTER TABLE `Mystery_game`
  ADD CONSTRAINT `mystery_game_ibfk_1` FOREIGN KEY (`Game_ID`) REFERENCES `Mystery_game_QA` (`Game_ID`),
  ADD CONSTRAINT `mystery_game_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `Users` (`User_ID`);

--
-- Ограничения внешнего ключа таблицы `Picture`
--
ALTER TABLE `Picture`
  ADD CONSTRAINT `picture_ibfk_1` FOREIGN KEY (`Municipality_ID`) REFERENCES `Municipality` (`Municipality_ID`),
  ADD CONSTRAINT `picture_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `Users` (`User_ID`);

--
-- Ограничения внешнего ключа таблицы `User_activities`
--
ALTER TABLE `User_activities`
  ADD CONSTRAINT `user_activities_ibfk_1` FOREIGN KEY (`Activity_ID`) REFERENCES `Activities` (`Activity_ID`),
  ADD CONSTRAINT `user_activities_ibfk_2` FOREIGN KEY (`Company_ID`) REFERENCES `Companies` (`Company_ID`),
  ADD CONSTRAINT `user_activities_ibfk_3` FOREIGN KEY (`User_ID`) REFERENCES `Users` (`User_ID`);

--
-- Ограничения внешнего ключа таблицы `User_places`
--
ALTER TABLE `User_places`
  ADD CONSTRAINT `user_places_ibfk_1` FOREIGN KEY (`Place_ID`) REFERENCES `Interesting_places_to_do` (`Place_ID`),
  ADD CONSTRAINT `user_places_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `Users` (`User_ID`);

--
-- Ограничения внешнего ключа таблицы `User_things`
--
ALTER TABLE `User_things`
  ADD CONSTRAINT `user_things_ibfk_1` FOREIGN KEY (`Thing_ID`) REFERENCES `Interesting_things_to_do` (`Thing_ID`),
  ADD CONSTRAINT `user_things_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `Users` (`User_ID`);

--
-- Ограничения внешнего ключа таблицы `Video`
--
ALTER TABLE `Video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`Municipality_ID`) REFERENCES `Municipality` (`Municipality_ID`),
  ADD CONSTRAINT `video_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `Users` (`User_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
