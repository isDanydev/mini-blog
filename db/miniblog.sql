CREATE DATABASE  IF NOT EXISTS `miniblog`

USE `miniblog`;

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `comment`, `created_at`, `is_deleted`) VALUES
(40, NULL, 1, 'fsdf sdfsdfd', '2024-09-19 02:09:45', 0),
(56, 1, 2, '¡Increíble análisis! La batalla final en Naruto Shippuden es épica.', '2024-09-17 15:44:29', 0),
(57, 1, 3, 'Totalmente de acuerdo. Naruto y Sasuke son impresionantes.', '2024-09-17 15:44:29', 0),
(58, 2, 4, 'Me encantó la prueba de héroes, realmente muestra el crecimiento de los personajes.', '2024-09-17 15:44:29', 0),
(59, 2, 5, 'Sí, la prueba de héroes es una de las partes más emocionantes.', '2024-09-17 15:44:29', 0),
(60, 3, 1, 'One Piece siempre me fascina. La búsqueda del One Piece es legendaria.', '2024-09-17 15:44:29', 0),
(61, 4, 2, 'Attack on Titan tiene una narrativa tan intensa. Los muros son una metáfora increíble.', '2024-09-17 15:44:29', 0),
(62, 4, 3, 'Totalmente cierto. La lucha por sobrevivir es muy real.', '2024-09-17 15:44:29', 0),
(63, 5, 4, 'Death Note es un juego mental impresionante. L y Light son geniales.', '2024-09-17 15:44:29', 0),
(64, 6, 5, 'Las batallas de los Saiyajin en Dragon Ball Z son inolvidables.', '2024-09-17 15:44:29', 0),
(65, 6, 1, '¡Sí! Dragon Ball Z marcó un antes y un después en el anime de acción.', '2024-09-17 15:44:29', 0),
(66, 7, 2, 'La búsqueda de la piedra filosofal en Fullmetal Alchemist es fascinante.', '2024-09-17 15:44:29', 0),
(67, 8, 3, 'Sword Art Online me atrapó desde el primer episodio. El mundo virtual es impresionante.', '2024-09-17 15:44:29', 0),
(68, 8, 4, 'Sí, el mundo virtual en Sword Art Online es muy innovador.', '2024-09-17 15:44:29', 0),
(69, 9, 5, 'Cowboy Bebop tiene una música y un estilo únicos. Me encanta.', '2024-09-17 15:44:29', 0),
(70, 10, 1, 'Neon Genesis Evangelion es tan profundo y enigmático. Los ángeles son fascinantes.', '2024-09-17 15:44:29', 0),
(71, 11, 2, 'One Punch Man es una parodia genial de los superhéroes.', '2024-09-17 15:44:29', 0),
(72, 12, 3, 'Bleach tiene una excelente trama de Shinigami y combates.', '2024-09-17 15:44:29', 0),
(73, 13, 4, 'Tokyo Ghoul es oscuro pero muy atrapante. La lucha entre humanos y ghouls es brutal.', '2024-09-17 15:44:29', 0),
(74, 14, 5, 'Las batallas en Demon Slayer son espectaculares.', '2024-09-17 15:44:29', 0),
(75, 15, 1, 'Deku está evolucionando muy bien en My Hero Academia.', '2024-09-17 15:44:29', 0),
(76, 16, 2, 'Hunter x Hunter tiene uno de los mejores exámenes de cazador.', '2024-09-17 15:44:29', 0),
(77, 17, 3, 'Fairy Tail es un anime muy divertido con una buena magia.', '2024-09-17 15:44:29', 0),
(78, 18, 4, 'Los grimoires en Black Clover tienen poderes únicos.', '2024-09-17 15:44:29', 0),
(79, 19, 5, 'Naruto es la serie que comenzó todo para mí. La historia del ninja es épica.', '2024-09-17 15:44:29', 0),
(80, 20, 1, 'Attack on Titan revela muchos secretos oscuros sobre los titanes.', '2024-09-17 15:44:29', 0),
(81, 21, 2, 'Dragon Ball Super trae nuevas amenazas que son realmente emocionantes.', '2024-09-17 15:44:29', 0),
(82, 22, 3, 'Re:Zero tiene un ciclo de muerte muy interesante y bien ejecutado.', '2024-09-17 15:44:29', 0),
(83, 23, 4, 'Made in Abyss es una aventura maravillosa llena de misterio.', '2024-09-17 15:44:29', 0),
(84, 24, 5, 'JoJo’s Bizarre Adventure siempre sorprende con sus habilidades extravagantes.', '2024-09-17 15:44:29', 0),
(85, 25, 1, 'The Promised Neverland es emocionante y lleno de giros inesperados.', '2024-09-17 15:44:29', 0),
(86, 26, 2, 'Violet Evergarden tiene una trama emocional muy profunda.', '2024-09-17 15:44:29', 0),
(87, 27, 3, 'Mob Psycho 100 muestra un gran desarrollo en el personaje de Mob.', '2024-09-17 15:44:29', 0),
(88, 28, 4, 'Hellsing ofrece una excelente caza de vampiros con acción intensa.', '2024-09-17 15:44:29', 0),
(89, 29, 5, 'Parasyte tiene una historia de invasión alienígena realmente única.', '2024-09-17 15:44:29', 0),
(90, 30, 1, 'Kakegurui es emocionante con todas esas apuestas y juegos mentales.', '2024-09-17 15:44:29', 0),
(91, 31, 2, 'Angel Beats! ofrece una perspectiva interesante sobre la vida después de la muerte.', '2024-09-17 15:44:29', 0),
(92, 32, 3, 'Toradora! tiene relaciones complejas y auténticas entre sus personajes.', '2024-09-17 15:44:29', 0),
(93, 33, 4, 'Gintama es una excelente parodia que no deja de sorprender.', '2024-09-17 15:44:29', 0),
(94, 34, 5, 'Soul Eater es muy entretenido con sus batallas contra los seres oscuros.', '2024-09-17 15:44:29', 0),
(95, 35, 1, 'Yuri!!! on ICE muestra la belleza y complejidad del patinaje artístico.', '2024-09-17 15:44:29', 0),
(96, 36, 2, 'Akira ofrece una visión distópica impresionante del futuro.', '2024-09-17 15:44:29', 0),
(97, 37, 3, 'Fate/Stay Night es genial con su guerra del Santo Grial.', '2024-09-17 15:44:29', 0),
(98, 38, 4, 'Magi tiene una aventura mágica fascinante que me encantó.', '2024-09-17 15:44:29', 0),
(99, 39, 5, 'No Game No Life es muy original en su enfoque sobre los juegos y estrategias.', '2024-09-17 15:44:29', 0),
(100, 40, 1, 'Kill la Kill es intensa y llena de acción con una fuerte crítica social.', '2024-09-17 15:44:29', 0),
(101, 40, 1, 'Es increible este anime y sera mejor aca se cambio', '2024-09-19 02:16:45', 0),
(102, 40, 1, 'Como estas ty ', '2024-09-19 06:25:34', 0);

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `posts` (`id`, `title`, `content`, `user_id`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, 'Naruto Shippuden: La batalla final', 'Una profunda mirada a la batalla final en Naruto Shippuden, donde Naruto y Sasuke se enfrentan.', 1, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(2, 'My Hero Academia: La prueba de héroes', 'Un análisis de la prueba de héroes en My Hero Academia y sus implicaciones para los personajes.', 2, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(3, 'One Piece: La búsqueda del One Piece', 'Explorando la travesía épica de Luffy y su tripulación en busca del One Piece.', 3, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(4, 'Attack on Titan: El muro y la humanidad', 'Una reflexión sobre la dinámica entre los muros y la humanidad en Attack on Titan.', 4, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(5, 'Death Note: El juego de la mente', 'Examinando el ingenioso juego de mentes entre Light Yagami y L.', 5, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(6, 'Dragon Ball Z: Los Saiyajin en batalla', 'Una revisión de las épicas batallas de los Saiyajin en Dragon Ball Z.', 1, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(7, 'Fullmetal Alchemist: La búsqueda de la piedra filosofal', 'El viaje de los hermanos Elric en busca de la piedra filosofal en Fullmetal Alchemist.', 2, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(8, 'Sword Art Online: El mundo virtual', 'Un análisis del impacto del mundo virtual en Sword Art Online.', 3, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(9, 'Cowboy Bebop: Cazadores de recompensas', 'Una exploración de los personajes y aventuras en Cowboy Bebop.', 4, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(10, 'Neon Genesis Evangelion: El misterio de los ángeles', 'Profundizando en la trama y los misterios de los ángeles en Neon Genesis Evangelion.', 5, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(11, 'One Punch Man: El héroe más poderoso', 'Revisando la comedia y acción en One Punch Man.', 1, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(12, 'Bleach: La vida de un Shinigami', 'Explorando la vida y responsabilidades de los Shinigami en Bleach.', 2, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(13, 'Tokyo Ghoul: La lucha entre humanos y ghouls', 'Analizando la tensión entre humanos y ghouls en Tokyo Ghoul.', 3, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(14, 'Demon Slayer: La lucha contra los demonios', 'Un vistazo a las intensas batallas en Demon Slayer.', 4, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(15, 'My Hero Academia: El camino de Deku', 'Un análisis del crecimiento y desarrollo de Deku en My Hero Academia.', 5, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(16, 'Hunter x Hunter: El examen de cazador', 'Explorando el desafiante examen de cazador en Hunter x Hunter.', 1, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(17, 'Fairy Tail: La magia de los gremios', 'Un análisis de los diferentes gremios y su magia en Fairy Tail.', 2, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(18, 'Black Clover: El poder de los grimoires', 'Examinando el impacto de los grimoires en Black Clover.', 3, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(19, 'Naruto: El origen del ninja', 'Una mirada al origen y desarrollo del ninja en Naruto.', 4, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(20, 'Attack on Titan: La verdad detrás de los titanes', 'Revelando los secretos de los titanes en Attack on Titan.', 5, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(21, 'Dragon Ball Super: Nuevas amenazas', 'Un análisis de las nuevas amenazas en Dragon Ball Super.', 1, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(22, 'Re:Zero: El ciclo de la muerte', 'Explorando el ciclo de la muerte y renacimiento en Re:Zero.', 2, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(23, 'Made in Abyss: La aventura al abismo', 'Un vistazo a las aventuras y misterios en Made in Abyss.', 3, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(24, 'JoJo\'s Bizarre Adventure: Las habilidades de los JoJo', 'Analizando las habilidades únicas de los personajes en JoJo\'s Bizarre Adventure.', 4, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(25, 'The Promised Neverland: La fuga de los niños', 'Un análisis de la fuga de los niños en The Promised Neverland.', 5, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(26, 'Violet Evergarden: La búsqueda de la humanidad', 'Revisando el viaje emocional de Violet en Violet Evergarden.', 1, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(27, 'Mob Psycho 100: El crecimiento de Mob', 'Explorando el crecimiento y desarrollo del personaje principal en Mob Psycho 100.', 2, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(28, 'Hellsing: La caza de vampiros', 'Un análisis de la caza de vampiros en Hellsing.', 3, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(29, 'Parasyte: La invasión alienígena', 'Revisando la invasión alienígena en Parasyte.', 4, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(30, 'Kakegurui: El juego de apuestas', 'Explorando el mundo de las apuestas en Kakegurui.', 5, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(31, 'Angel Beats!: La vida después de la muerte', 'Un análisis de la vida después de la muerte en Angel Beats!.', 1, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(32, 'Toradora!: Relaciones complicadas', 'Explorando las complicadas relaciones en Toradora!.', 2, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(33, 'Gintama: La parodia de la historia', 'Un vistazo a cómo Gintama parodia la historia y la cultura.', 3, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(34, 'Soul Eater: La lucha contra los seres oscuros', 'Analizando las batallas contra los seres oscuros en Soul Eater.', 4, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(35, 'Yuri!!! on ICE: La competencia de patinaje', 'Revisando la competencia de patinaje en Yuri!!! on ICE.', 5, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(36, 'Akira: La distopía futurista', 'Explorando la distopía futurista en Akira.', 1, '2024-09-17 15:42:54', '2024-09-18 21:22:21', 0),
(37, 'Fate/Stay Night: La guerra del Santo Grial', 'Un análisis de la guerra del Santo Grial en Fate/Stay Night.', 2, '2024-09-17 15:42:54', '2024-09-18 22:57:43', 0),
(38, 'Magi: The Labyrinth of Magic: La aventura mágica', 'Revisando la aventura mágica en Magi.', 3, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(39, 'No Game No Life: Juegos y estrategia', 'Analizando los juegos y estrategias en No Game No Life.', 4, '2024-09-17 15:42:54', '2024-09-17 15:42:54', 0),
(40, 'Kill la Kill: La lucha contra la opresión', 'Explorando la lucha contra la opresión en Kill la Kill.', 5, '2024-09-17 15:42:54', '2024-09-18 22:57:55', 0),
(43, 'La Historia de Nico Robin', 'Nico Robin, conocida como \"la niña que sabe la historia\", es un personaje central en \"One Piece\". Desde pequeña, Robin fue perseguida por su habilidad para leer los Poneglyphs, antiguos monumentos que contienen secretos sobre el pasado. Tras la trágica destrucción de su hogar en Ohara, se unió a varios grupos y eventualmente se convirtió en miembro de los Sombrero de Paja. Su búsqueda por descubrir la verdad sobre el siglo vacío y su conexión con los misterios del mundo la hacen una figura fascinante y compleja en la saga. A través de sus aventuras, Robin demuestra su valentía y determinación para proteger a sus amigos y encontrar su lugar en el mundo.', 1, '2024-09-18 22:04:24', '2024-09-19 13:42:46', 0);

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`id`, `username`, `password_hash`, `created_at`, `is_deleted`) VALUES
(1, 'leonard', '9386492', '2024-09-17 15:42:13', 0),
(2, 'taylor15', '5152386', '2024-09-17 15:42:13', 0),
(3, 'elon', 'abc123', '2024-09-17 15:42:13', 0),
(4, 'serena', 'abc12345', '2024-09-17 15:42:13', 0),
(5, 'steve', 'dante515', '2024-09-17 15:42:13', 0);


ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);


ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;


ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

