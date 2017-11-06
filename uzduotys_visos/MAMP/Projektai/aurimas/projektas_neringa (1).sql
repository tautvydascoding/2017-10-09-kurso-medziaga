-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 06, 2017 at 12:38 PM
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
-- Database: `projektas_neringa`
--
CREATE DATABASE IF NOT EXISTS `projektas_neringa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projektas_neringa`;

-- --------------------------------------------------------

--
-- Table structure for table `istorijos`
--

DROP TABLE IF EXISTS `istorijos`;
CREATE TABLE IF NOT EXISTS `istorijos` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `photo` varchar(25) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `comment` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `istorijos`
--

INSERT INTO `istorijos` (`id`, `photo`, `name`, `comment`) VALUES
(1, 'svyturys.jpg', 'Juozas', 'Madam, an hour before the word sun\r\nPeer\'d forth the golden window of the east, A troubled mind drave me to walk abroad; Where, under the grove of more That westward root from the city side, So early walking did I see your son: Towards him I made, but he was ware of me And stole into the covert of the wood: I, measuring his affections by my own, That most are busied when hey\'re most alone, Pursued my humour not pursuing his, And gladly shunn\'d who gladly fled from me.\r\n\r\n'),
(2, 'linas1.jpg', 'Jonas', 'Here were the servants of your adversary, And yours, close fighting ere I did approach: I drew to part them: in the instant came The fiery Tybalt, with his sword prepared, Which, as he breathed defiance to my ears, He swung about his head and cut the winds, Who nothing hurt withal hiss\'d him in scorn:\r\nWhile we were interchanging thrusts and blows, Came more and more and fought on part and part, Till the prince came, who parted either part.'),
(3, 'namas2.jpg', 'Petras', 'Well, in that hit you miss: shell not be hit With Cupids arrow; she hath Dians wit\r\nAnd, in strong proof of chastity well armd, From loves weak childish bow she lives unharmd. She will not stay the siege of loving terms, Nor bide the encounter of assailing eyes, Nor ope her lap to saint-seducing gold: O, she is rich in beauty, only poor, That when she dies with beauty dies her store.'),
(4, 'preila.jpg', 'Ona', 'Both by myself and many other friends: But he, his own affections counsellor,\r\nIs to himself I will not say how true\r\nBut to himself so secret and so close,\r\nSo far from sounding and discovery, As is the bud bits with an envious worm,\r\nEre he can spread his sweet leaves to the air, Or dedicate his beauty to the sun. Could we but learn from whence his sorrows grow. We would as willingly give cure as know.'),
(5, 'miesteliai2.jpg', 'Kryzmantas', 'Alas, that love, whose view is muffled still, Should, without eyes, see athways to his will! Where shall we dine? O me! What fray was here? Yet tell me not, for I have heard it all. Heres much to do with hate, but more with love. Why, hen, O brawling love! O loving hate! O any thing, of nothing first create! O heavy lightness! serious vanity! Mis-shapen chaos of well-seeming forms! Feather of lead, bright smoke, cold fire, sick health!'),
(6, 'ruslan1.jpg', 'Kazys', 'Why, such is loves tran. Griefs of mine own lie heavy in my breast, Which thou wilt prop, to have it prest With more of thine this love that thou hast shown Doth add more grief to too much of mine own. Love is a smoke raised with the fume of sighs Being purged, a fire sparkling in lovers eyes\r\nBeing vexd a sea nourishd with lovers tears What is it else? a madness most discreet A choking gall and a preserving sweet. Farewell, my coz.'),
(7, 'ruslan2.jpg', 'Bronius', 'Well, in that hit you miss: shell not be hit With Cupids arrow; she hath Dians wit\r\nAnd, in strong proof of chastity well armd, From loves weak childish bow she lives unharmd. She will not stay the siege of loving terms, Nor bide the encounter of assailing eyes, Nor ope her lap to saint-seducing gold: O, she is rich in beauty, only poor, That when she dies with beauty dies her store.'),
(8, 'ruslan3.jpg', 'Zose', 'She hath, and in that sparing makes huge waste, For beauty starved with her severity Cuts beauty off from all posterity. She is too fair, too wise, wisely too fair, To merit bliss by making me despair: She hath forsworn to love, and in that vow Do I live dead that live to tell it now.');

-- --------------------------------------------------------

--
-- Table structure for table `lankytoju_komentarai`
--

DROP TABLE IF EXISTS `lankytoju_komentarai`;
CREATE TABLE IF NOT EXISTS `lankytoju_komentarai` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `theme` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `comment` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lankytoju_komentarai`
--

INSERT INTO `lankytoju_komentarai` (`id`, `name`, `theme`, `email`, `comment`) VALUES
(7, 'tastsa', 'testevicius', 'teateiviuc@gmail.com', 'testuoju va ir va kaip');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
