-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 06, 2017 at 12:31 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinyl_shop`
--
CREATE DATABASE IF NOT EXISTS `vinyl_shop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vinyl_shop`;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(6) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` mediumtext,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `date`) VALUES
(1, 'Review: St. Vincent Bites Back on Pop-Indebted \'Masseduction\'', '\"The void is back and unblinking,\" Annie Clark sings with icy vulnerability above a tendril of a synth note that floats in waves beneath Masseduction?s opening song \"Hang on Me.\" On Clark?s fifth studio album as St. Vincent, the virtuosic indie-rock singer and guitarist dives further into the void, obliterating herself with sex, drugs and power. This album, a partnership with top pop whisperer Jack Antonoff, is a masterpiece of confrontational intimacy, and Clark lays herself bare as only a woman who has seen her life suddenly become tabloid fodder can.\nClark is no stranger to evoking the visceral. Her twisty, distorted 2014 self-titled LP was a tight, colorful leap forward, much showier than her intimate 2011 breakthrough, Strange Mercy. St. Vincent was released around the time the deeply private Clark began a high-profile relationship with super model and tabloid fixture Cara Delevingne. \n Clark bites back at the gawkers and curious lurkers, even baiting them with a clandestine feature from Delevingne under the name \"Kid Monkey\" who sings \"Pills to wake/Pills to sleep/Pills, pills, pills every day of the week\" like she?s taunting on a playground. Later, Clark teases listeners with the cheekily titled \"Young Lover,\" a brutal bass-bumper where she relays a tale of said young lover being found in a bathtub after overdosing on - drum roll, please - pills. \n It is the most direct Clark has ever been with her lyricism, savagely cutting to the core of her feelings and her own mythology. On \"New York,\" one of the year?s finest singles, she thrives in simplicity, pining for the loss of \"the only motherfucker in the city who\" could handle her. In \"Los Ageless,\" she finds herself lost in Hollywood?s labyrinth of \"sunset superstars\" and \"lost sages\" she finds at the bar above a menacing, gothic New Wave beat, losing all sense of her East Coast nostalgia. \n Clark?s more tender moments cut through some of the album?s carnal darkness. The sweet piano ballad \"Happy Birthday, Johnny\" feels almost inappropriate to listen to, like you?re intruding on a private conversation between Clark and the troubled subject, \"wherever you are,\" as she sings. On \"Slow Disco,\" a mess of strings coalesce with one of her more understated vocal performances, as she offers a slow dance with a ghost. \n Clark?s campy expedition through the void ends on a delicate goodbye. It?s a Rocky Horror Picture Show \"Rose Tint My World\"/\"Don?t Dream It, Be It\" medley of an exit. Clark embodies both theatrical tragedy and hope, jumping into the pool with her demons and saviors for \"Smoking Section,\" a quietly heartbreaking tune that dares you to jump in with her. \"And sometimes I go to the edge of my roof/And I think I?ll jump just to punish you,\" she dejectedly sings in the deepest part of her register. Here she is again, a \"casualty hanging on from the balcony\" as she self-describes in \"Sugarboy,\" knowingly dangling her pain for the hungry audience. \"It?s not the end,\" she repeats ad infinitum at the song?s own end. Surely, it?s only the beginning of the story Clark is willing to tell.', '2017-11-04 11:48:53'),
(2, 'Review: Marilyn Manson Gets Back to His Shock-Rock Roots', 'Two years after releasing the surprisingly mature goth-metal offering The Pale Emperor, Marilyn Manson has returned to straight-ahead shock. \"I write songs to fight and to fuck to,\" he sings on \"Je$u$ Cri$i$,\" from his 10th LP, over spiky, electro-hard-rock riffs that occasionally recall his glammy Mechanical Animals period. That old black magic often sounds forced, but he makes up for it with a few more melancholy tracks, the best of which, \"Saturnalia,\" is an eight-minute ode to orgiastic revelry that feels like a long-lost descendant of Bauhaus? \"Bela Lugosi?s Dead.\"', '2017-11-04 11:58:29'),
(3, 'Paul McCartney Narrates Short Film on Climate Change, Animal Agriculture', 'Paul McCartney narrates a new short film about the devastating impact of animal agriculture on climate change, One Day a Week. The film is a collaboration between the McCartney family?s Meat Free Monday campaign and French director Yann Arthus-Bertrand?s Hope Production. It arrives ahead of the United Nations? upcoming Climate Change Conference.One Day At a Time also features appearances from Emma Stone, Woody Harrelson and McCartney?s daughters Mary and Stella. The short also features an unreleased McCartney song, \"Botswana,\" as well as selections from his 1997 classical album, Standing Stone.\nIn the film, McCartney discusses the massive amounts of greenhouse gasses animal agriculture produces and the increasingly unsustainable amounts of water, land and energy it requires. These problems, the musician adds, aren?t landlocked either, with industrialized fishing wreaking havoc on marine ecosystems. \n \"There?s a simple but significant way to help protect the planet and all its inhabitants,\" McCartney says. \"And it starts with just one day a week. One day without eating animal products can have a huge impact in helping maintain that delicate balance that sustains us all.\" \n Towards the end of the video, Stone, Harrison and Stella and Mary McCartney offer several remarkable facts about animal agriculture. Among the most shocking is the rate at which rainforests are cut down to make room for animal grazing, as well as the amount of water - 2,350 liters - it takes to produce one beef burger. \n McCartney and his daughters launched Meat Free Monday in 2009 with the goal of inspiring people to change their diets as a way to combat climate change.', '2017-11-04 12:04:14'),
(4, 'Review: Liam Gallagher Sticks to Oasis\' Brawny Britpop and Beatle-esque Melodies on Solo Debut', 'It may be the closest Liam Gallagher has come to apology. \"In my defense all my intentions were good,\" the ex-Oasis singer asserts on his solo debut, in a song that shares its title with Buffalo Springfield?s \"For What It?s Worth.\" \"But I am a dreamer by design,\" Gallagher adds, as good a description of kamikaze stardom as anything he sang in Oasis, from his brother Noel?s songbook. Eight years after that band?s messy breakup, Liam puts his signature voice on the line in a mostly original set of strut and reflection that sticks to Oasis? template - brawny Britpop, Beatle-esque ballads - and often invigorates it.\nLike his brother, Liam openly quotes his inspirations: \"She?s so purple haze\" (the suitably dreamy \"When I?m in Need\"); \"Angels, gimme shelter/Cause I?m about to fall\" (the harder, thumping \"You Better Run\"). There are fresh twists on the classicism too: the slashing-riff charge and falling-vocal chorus in \"Greedy Soul\"; Gallagher?s scouring bray swimming through the acid-folk \"Chinatown.\" As You Were lacks one Oasis specialty - straight-up helter skelter. But if the album is a few steps shy of his old band?s best, it has Gallagher writing like he means it and singing like his dream isn?t over.', '2017-11-04 12:08:37'),
(5, 'Review: Synth Experimentalist Kaitlyn Aurelia Smith Gorgeously Maps the Life Cycle', 'Pastoral synthesizer landscapist Kaitlyn Aurelia Smith broke out last year with Ears, an acclaimed set of Terry Riley-esque gurgles and flutters, using noise to evoke nature. On her sixth LP, The Kid, a concept album about the human life cycle, she paints an even lusher world using cosmic swoops, squelches and lots of her highly processed vocals. Sounds don?t align with the rhythms, and Smith?s voice is awash in alien echoes. But as challenging as this avant-garde music is, it?s also warm, absorbing and gorgeous.', '2017-11-04 12:12:24');

-- --------------------------------------------------------

--
-- Table structure for table `article_img`
--

DROP TABLE IF EXISTS `article_img`;
CREATE TABLE `article_img` (
  `id` int(6) NOT NULL,
  `article_id` varchar(255) DEFAULT NULL,
  `src` varchar(200) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article_img`
--

INSERT INTO `article_img` (`id`, `article_id`, `src`, `title`) VALUES
(1, '1', 'st-vincent-review.jpg', 'St. Vincent\'s fifth album is \'Masseduction.\''),
(2, '2', 'marilyn-manson-press.jpg', NULL),
(3, '3', 'paul4.jpg', NULL),
(4, '4', 'photo-cred-rankin-extralarge.png', 'Liam Gallagher\'s solo debut is \'As You Were.\''),
(5, '5', 'Kaitlyn_Aurelia_Smith.jpg', 'Kaitlyn Aurelia Smith\'s sixth album is \'The Kid.\'');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(6) NOT NULL,
  `album_id` int(6) DEFAULT NULL,
  `src` varchar(200) DEFAULT NULL,
  `src2` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `album_id`, `src`, `src2`) VALUES
(1, 1, 'Kendrick_Lamar-Good-kid.jpg', 'Kendrick_Lamar-Good-kid2.jpg'),
(2, 2, 'Macklemore_Gemini.jpg', 'Macklemore_Gemini2.jpg'),
(3, 3, 'Wu_Tang-Saga_Continues.jpg', 'Wu_Tang-Saga_Continues2.jpg'),
(4, 4, 'Anberlin-Lowborn.jpg', NULL),
(5, 5, 'tame_Impala_Currents.jpg', 'tame_Impala_Currents2.jpg'),
(6, 6, 'Kings_Of_Leon-Walls.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tracks`
--

DROP TABLE IF EXISTS `tracks`;
CREATE TABLE `tracks` (
  `id` int(6) NOT NULL,
  `track` varchar(150) DEFAULT NULL,
  `name_id` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tracks`
--

INSERT INTO `tracks` (`id`, `track`, `name_id`) VALUES
(1, 'Sherane a.k.a Master Splinter\'s Daughter', 1),
(2, 'Bitch, Don\'t Kill My Vibe', 1),
(3, 'Backseat Freestyle', 1),
(4, 'The Art of Peer Pressure', 1),
(5, 'Money Trees', 1),
(6, 'Poetic Justice', 1),
(7, 'Good Kid', 1),
(8, 'm.A.A.d city', 1),
(9, 'Swimming Pools (Drank)', 1),
(10, 'Sing About Me, I\'m Dying of Thirst', 1),
(11, 'Real', 1),
(12, 'Compton', 1),
(13, 'Ain\'t Gonna Die Tonight', 2),
(14, 'Glorious', 2),
(15, 'Marmalade', 2),
(16, 'Willy Wonka', 2),
(17, 'Intentions', 2),
(18, 'Good Old Days', 2),
(19, 'Levitate', 2),
(20, 'Firebreather', 2),
(21, 'How to Play the Flute', 2),
(22, 'Ten Million', 2),
(23, 'Over It', 2),
(24, 'Zara', 2),
(25, 'Corner Store', 2),
(26, 'Miracle', 2),
(27, 'Church', 2),
(28, 'Excavate', 2),
(29, 'The Saga Continues Intro', 3),
(30, 'Lesson Learn\'d', 3),
(31, 'Fast And Furious', 3),
(32, 'Famous Fighters (Skit)', 3),
(33, 'If Time is Money (Fly Navigation)', 3),
(34, 'Frozen', 3),
(35, 'Berto And The Fiend', 3),
(36, 'Pearl Harbor', 3),
(37, 'People Say', 3),
(38, 'Family (Skit', 3),
(39, 'Why Why Why', 3),
(40, 'G\'d Up', 3),
(42, 'Saga (Skit)', 3),
(43, 'Hood Go Bang!', 3),
(44, 'My Only One', 3),
(45, 'Message', 3),
(46, 'The Saga Continues Outro', 3),
(48, 'We Are Destroyer', 4),
(49, 'Armageddon', 4),
(50, 'Stranger Ways', 4),
(51, 'Velvet Covered Brick', 4),
(52, 'Atonement', 4),
(53, 'Birds of Prey', 4),
(54, 'Dissenter', 4),
(55, 'Losing It All', 4),
(56, 'Hearing Voices', 4),
(59, 'Harbinger', 4),
(60, 'Let It Happen', 5),
(61, 'Nangs', 5),
(62, 'The Moment', 5),
(63, 'Yes I\'m Changing', 5),
(64, 'Eventually', 5),
(65, 'Gossip', 5),
(66, 'The Less I Know the Better', 5),
(67, 'Past Life', 5),
(68, 'Disciples', 5),
(69, 'Cause I\'m a Man', 5),
(70, 'Reality in Motion', 5),
(71, 'Love/Paranoia', 5),
(72, 'New Person, Same Old Mistake', 5),
(73, 'Waste a Moment', 6),
(74, 'Reverend', 6),
(75, 'Around the World', 6),
(76, 'Find Me', 6),
(77, 'Over', 6),
(78, 'Muchacho', 6),
(79, 'Conversation Piece', 6),
(80, 'Eyes on You', 6),
(81, 'Wild', 6),
(82, 'WALLS', 6);

-- --------------------------------------------------------

--
-- Table structure for table `vinyls`
--

DROP TABLE IF EXISTS `vinyls`;
CREATE TABLE `vinyls` (
  `id` int(6) NOT NULL,
  `artist` varchar(150) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `year` int(6) DEFAULT NULL,
  `genre` varchar(60) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vinyls`
--

INSERT INTO `vinyls` (`id`, `artist`, `name`, `year`, `genre`, `price`) VALUES
(1, 'Kendrick Lamar', 'Good Kid', 2012, 'Hip-Hop', '111'),
(2, 'Macklemore', 'Gemini', 2017, 'Hip-Hop', '112'),
(3, 'Wu-Tang Clan', 'Saga Continues', 2017, 'Hip-Hop', '123'),
(4, 'Anberlin', 'Lowborn', 2014, 'Rock', '144'),
(5, 'Tame Impala', 'Currents', 2015, 'Pop', '144'),
(6, 'Kings of Leon', 'Walls', 2016, 'Rock', '200');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_img`
--
ALTER TABLE `article_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracks`
--
ALTER TABLE `tracks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vinyls`
--
ALTER TABLE `vinyls`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `article_img`
--
ALTER TABLE `article_img`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tracks`
--
ALTER TABLE `tracks`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `vinyls`
--
ALTER TABLE `vinyls`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
