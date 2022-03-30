-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 30 2022 г., 12:48
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cinema`
--

-- --------------------------------------------------------

--
-- Структура таблицы `films`
--

CREATE TABLE `films` (
  `id` int NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `genre` int NOT NULL,
  `age` int NOT NULL,
  `descr` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `imgs` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` int NOT NULL,
  `daytime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`id`, `name`, `genre`, `age`, `descr`, `imgs`, `price`, `daytime`) VALUES
(3, 'Монстры на каникулах: Трансформания (2021)', 9, 6, 'Всё смешалось в отеле «Трансильвания»: таинственное изобретение Ван Хельсинга, «монстрифицирующий луч», ломается и случайно превращает Дракулу и его приятелей в людей, а Джонни – наоборот, в монстра. Лишенные своих способностей и привычного облика Драк с друзьями и Джонни, с неожиданным удовольствием раскрывающий свою монстрическую сущность, отправляются в кругосветное путешествие на поиски средства от трансформании. И, конечно, им не обойтись без помощи Мэвис, пока не стало слишком поздно и они не свели друг друга с ума.', 'images/flm/monstry.png', 300, '2022-03-01 11:30:00'),
(4, 'Цикада 3301: Квест для хакера', 8, 16, 'Этот квест «взорвал» даркнет в 2012 году. Пройти его могут лишь избранные — те, кто разгадают загадки, разбросанные по всему миру. Цель теста — найти людей с поистине высоким интеллектом. Авторы — анонимы под ником Цикада 3301 — могут быть кем угодно: от кибер-гиков до представителей спецслужб.', 'images/flm/cikada.jpg', 350, '2022-03-31 19:00:00'),
(5, 'Вечные', 6, 18, 'Вечные — представители расы генетически улучшенных суперлюдей, тайно живущих на Земле. Они появились на свет 5 миллионов лет назад в результате экспериментов могущественных целестиалов. Наделённые невероятными суперспособностями, на протяжении тысячелетий они скрывались от человеческой цивилизации, втайне защищая людей от монструозных девиантов. Однако, последние события и действия Таноса заставили их выйти на свет.', 'images/flm/vechn.jpg', 150, '2022-03-20 14:40:00'),
(6, 'Тихое место 2', 1, 16, 'Семья Эбботт продолжает бороться за жизнь в полной тишине. Вслед за смертельной угрозой, с которой они столкнулись в собственном доме, им предстоит познать ужасы внешнего мира. Они вынуждены отправиться в неизвестность, где быстро обнаруживают, что существа, охотящиеся на звук, – не единственные враги за пределами безопасной песчаной тропы.', 'images/flm/tih.jpg', 200, '2022-03-13 13:20:00'),
(7, 'Лунные приключения (2021)', 9, 6, 'Пока взрослые только мечтают покорять космос, дети уже во всю странствуют среди звезд! Юная девочка и ее старший брат отправляются в невероятное путешествие в другие миры. Оказавшись в стране, спрятанной в облаках, они знакомятся с чудесными обитателями волшебного замка и великолепной королевой Луны. По ее поручению дети отправляются еще дальше — на далекие планеты и в чужие миры. Герои забрались так далеко, но как им вернуться домой? Возможно, только лунная дорожка, указывающая направление к самому желанному в жизни любого человека, укажет им путь.', 'images/flm/moon.jpg', 250, '2022-03-16 17:25:00'),
(8, 'Герой (2021)', 5, 16, 'Осужденный за долги Рахим получает возможность на несколько дней выйти из тюрьмы, чтобы навестить близких. В это время его возлюбленная случайно находит сумку с золотыми монетами. Но вместо того, чтобы оплатить свой долг, Рахим решает вернуть сумку законному владельцу. Для прессы он герой, но в соцсетях сомневаются в искренности его поступка. Так ли правдива история на самом деле? И так ли благородны его намерения?', 'images/flm/hero.jpg', 300, '2022-03-17 22:00:00'),
(9, 'Падение луны(2022)', 7, 12, 'По неизвестной причине Луна вдруг сходит с орбиты и идёт на столкновение с Землёй, что провоцирует множественные катаклизмы.', 'images/flm/fallmoon.jpg', 150, '2022-03-03 13:00:00'),
(10, 'Злое', 1, 18, 'Жизнь Мэдисон превращается в настоящий кошмар, когда в своих снах она становится свидетельницей зверских убийств. Но что, если ночные видения — на самом деле жестокая реальность? Есть ли у Мэдисон шанс их предотвратить?', 'images/flm/evil.jpg', 300, '2022-03-16 20:30:00'),
(11, 'Круэлла', 7, 12, 'Лондон 70-х годов охвачен зарождающейся культурой панк-рока. Невероятно одаренная мошенница по имени Эстелла решает сделать себе имя в мире моды. Её лучшие друзья — парочка юных карманников, которые ценят страсть Эстеллы к приключениям и надеются вместе с ней отвоевать себе место под солнцем на улицах британской столицы. В один прекрасный день модное чутье Эстеллы привлекает внимание шикарной и пугающе высокомерной баронессы фон Хельман.', 'images/flm/cruella.jpg', 300, '2022-03-16 19:20:00');

-- --------------------------------------------------------

--
-- Структура таблицы `genre`
--

CREATE TABLE `genre` (
  `id_genre` int NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `genre`
--

INSERT INTO `genre` (`id_genre`, `name`) VALUES
(1, 'Ужасы'),
(2, 'Детективы'),
(3, 'Комедия'),
(4, 'Преступление'),
(5, 'Драма'),
(6, 'Фэнтэзи'),
(7, 'Боевик'),
(8, 'Триллер'),
(9, 'Мультфильм');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` tinyint NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Структура таблицы `tickets`
--

CREATE TABLE `tickets` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `id_film` int NOT NULL,
  `number_tickets` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `tickets`
--

INSERT INTO `tickets` (`id`, `id_user`, `id_film`, `number_tickets`) VALUES
(15, 1, 4, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `full_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `login` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `role` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`, `role`) VALUES
(1, 'Администратор', 'admin', 'a@a', '7694f4a66316e53c8cdd9d9954bd611d', 'uploads/kot', 1),
(2, 'Обычный пользователь', 'user', 'u@u', 'ee11cbb19052e40b07aac0ca060c23ee', 'uploads/1647454643kotik.jpg', 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genre` (`genre`);

--
-- Индексы таблицы `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`) USING BTREE,
  ADD KEY `id_film` (`id_film`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `films`
--
ALTER TABLE `films`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` tinyint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `films`
--
ALTER TABLE `films`
  ADD CONSTRAINT `films_ibfk_1` FOREIGN KEY (`genre`) REFERENCES `genre` (`id_genre`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `tickets_ibfk_2` FOREIGN KEY (`id_film`) REFERENCES `films` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
