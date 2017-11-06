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
-- Database: `produktai`
--
CREATE DATABASE IF NOT EXISTS `produktai` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `produktai`;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(6) NOT NULL,
  `title` varchar(255) COLLATE utf8_lithuanian_ci DEFAULT NULL,
  `content` text COLLATE utf8_lithuanian_ci,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `date`) VALUES
(1, 'Medus', '<p><strong>Medaus rūšys</strong></p>\r\n            <p><em><strong>Liepų medus</strong></em> – šviesiai geltonas, malonaus liepų žiedų kvapo. Vartojamas gydyti peršalimo ligoms (sloga, angina, faringitas, laringitas, bronchitas), kepenų bei inkstų ligoms, pūliuojančioms žaizdoms gydyti.</p>\r\n            <p><em><strong>Aviečių medus</strong></em> – šviesios spalvos, malonaus, bet stiproko kvapo. Vartojamas gydyti peršalimo ligoms.</p>\r\n            <p><em><strong>Kiaulpienių medus</strong></em> – aukso spalvos, kartoko skonio, labai kvapnus. Rekomenduojamas nuo skausmo, kvėpavimo takų uždegimo, padidintam skrandžio sulčių rūgštingumui mažinti.</p>\r\n            <p><em><strong>Rapsų medus</strong></em> – baltas arba šviesiai gelsvas, silpno malonaus kvapo, truputį kartoko skonio. Vartojamas padidintam skrandžio sulčių rūgštingumui mažinti, kepenų ligoms gydyti.</p>\r\n            <p><em><strong>Dobilų medus</strong></em> – šviesiai gelsvas, beveik baltas, švelnaus malonaus skonio. Vartojamas sumažinto skrandžio sulčių rūgštingumui didinti, kepenų ligoms gydyti.</p>\r\n            <p><em><strong>Viržių medus</strong></em> – tamsiai geltonas su rusvu atspalviu, stipraus, panašaus į viržių žiedų kvapą, kartoko skonio. Vartojamas inkstų, šlapimo pūslės, prostatos ligoms gydyti.</p>\r\n            <p><em><strong>Grikių medus</strong></em> – tamsus, rausvas arba beveik rudas, aštraus skonio bei kvapo. Jis turi daugiau geležies ir baltymų, todėl vartojamas nuo mažakraujystės, švelnina vaikų brendimo metu atsirandančius augimo skausmus, ramina nervų sistemą, stiprina organizmą.</p>\r\n            <p><em><strong>Pievų medus</strong></em> yra poliflorinis, t.y. surinktas iš daugelio augalų žiedų, malonaus skonio, geltonas arba gelsvai rusvos spalvos. Jame yra daug aromatinių medžiagų, nemažai B grupės ir C vitaminų. Jis vertingas nusilpusiems ir peršalimo ligoms gydyti.</p>\r\n            <p><em><strong>Lipčiaus medus</strong></em>, surinktas iš amarų išskyrų, skiriasi nuo žiedų medaus. Jame daugiau dekstrinų, mineralinių medžiagų, sacharozės, mažiau invertuoto cukraus, negu nektaro meduje. Ypač daug lipčiuje yra šarminių metalų – kalio ir natrio druskų.<br/>\r\n              Kadangi lipčiaus meduje mažiau vandens ir daugiau baltymų, dekstrinų, jis 2-3 kartus tirštesnis už žiedų medų. Bičiųžiemos maistui lipčiaus medus netinka, o žmogui jis labai naudingas.</p>\r\n              <p>Sveikatai stiprinti reikia naudoti tik natūralų kokybišką medų. Patartina suvartoti 50 -100 g medaus per parą ,šį kiekį suvalgant per 3 -4 kartus.Geriausia medų ištirpinti šiltame virintame vandenyje, tuomet organizmas lengviau jį įsisavina.</p>\r\n', '2017-11-02'),
(2, 'Korys su medumi', '<p><strong>Medus su koriu</strong></p>\r\n            <p>Sirgdami sloga, sinusitu, sinusų uždegimu, 4–6 kartus per dieną čiulpkite medų su koriu. Sunkiai susirgę – net 20 kartų per dieną. Korį reikia čiulpti ir kramtyti. Kai medų iščiulpiame, korį reikia išspjauti. Medus su koriais puikiai tinka aterosklerozės profilaktikai – kramtykite po arbatinį šaukštelį kartą ar du per dieną apie du mėnesius.</p>\r\n            <p>Medų reikėtų valgyti kamuojant nemigai, raumenų traukuliams naktimis, pablogėjus atminčiai. Jei dirbate įtemptą protinį darbą, jei esate vyresnio amžiaus žmogus ir pabudęs naktį nebegalite užmigti, suvalgykite 1–3 arbatinius šaukštelius (ar net valgomuosius šaukštus) medaus, užgerkite šiltu vandeniu ar šiltu pienu. Medus nervų sistemą ramina, bet neslopina.</p>\r\n\r\n', '2017-11-02'),
(3, 'Bičių duonelė', '<p><strong>Bičių duonelė</strong>– žiedadulkės bičių suneštos iš įvairiausių augalų sudėtos į korio akutę ir subrandintos.</p>\r\n            <p>Bitės neša į avilius ir meta į korių akeles. Aviliuose jaunesnės bitės priekiniais žandais žiedadulkių rutulėlius sutrupina ir galvomis gerai suspaudžia. Taip bitės dirba, kol žiedadulkėmis užlipdo du trečdalius akutės tūrio. Į tą pačią akutę dėdamos įvairių augalų žiedadulkes, bitės jų nerūšiuoja. Kai akutės pripildomos, bitės jų viršų užpila medumi, užlipdo vašku – tokį mišinį palieka subręsti.\r\n            </p>\r\n            <p>Veikiant įvairiems mikroorganizmams, fermentams, esant didelei drėgmei ir šilumai (34–36 °C), maždaug per dvi savaites iš mišinio susiformuoja bičių duonelė. Bitėms tai – pagrindinis baltymų, riebalų, angliavandenių, mikroelementų ir vitaminų šaltinis.</p>\r\n            <p>Duonele maitinami bičių perai, kuriems augant reikia labai daug baltyminės medžiagos. Daug duonelės bitės vartoja pieneliui, vaškui gaminti, tranams maitinti, nes ir jie be baltyminio maisto greitai nusilpsta, o tokius tranus bitės išmeta lauk.</p>\r\n            <p>Nustatyta, kad bičių šeima per metus suvartoja apie 30–40 kg duonelės.</p>\r\n            <p>Bičių duonelės privalumai.<br>Dažnai kyla klausimas, koks produktas vertingesnis: žiedadulkės ar bičių duonelė? Kai kuriomis savybėmis bičių duonelė lenkia žiedadulkes. Pastarųjų metų tyrimais nustatyta, kad bičių duonelę lengviau įsisavina žmogaus organizmas. Šio konservuoto bičių produkto savybės laikui bėgant mažai kinta ir bičių duonelę galima ilgiau vartoti negu žiedadulkes. Biocheminiu požiūriu bičių duonelė, skirtingai negu žiedadulkės, turi mažiau baltymų (tik apie 20 proc.), žymiai daugiau angliavandenių (24-34 proc.) ir iki 1,5 proc. lipidų. Savo kaloringumu bičių duonelė prilygsta augalinės kilmės maisto produktams – miltams, ryžiams, žirniams. Iš daugelio mineralinių medžiagų bičių duonelėje daugiausia yra geležies, kobalto, fosforo ir kalcio. Aminorūgštys sudaro apie 15 proc. bičių duonelės sausųjų medžiagų. Bičių duonelės vitaminų sudėtis yra analogiška žiedadulkėms, tačiau bičių duonelėje yra didesnis vitamino K kiekis ir žymiai mažesnis vitamino E kiekis.\r\n            <br>Bičių duonelės biologiškai aktyvių medžiagų kiekis irgi skiriasi nuo žiedadulkių, nes bičių duonelėje gausu tokių fermentų kaip sacharazė, amilazė, katalazė, aminotransferazė ir adenozintrifosfatazė. Be to bičių duonelėje yra organinių rūgščių, kai kurių hormonų, pigmentų, o taip pat medžiagų, pasižyminčių antibiotinėmis savybėmis. Visuma tokių svarbių organizmo gyvybiniams procesams medžiagų ir sąlygoja ryškų biosti-muliuojantį bičių duonelės poveikį.\r\n            <br>Pastarųjų metų tyrimai parodė, kad bičių duonelė, skirtingai nuo medikamentų, neturi nepageidaujamo ar toksinio poveikio. Joje esantis mažas vitamino E ir estrogenų kiekis suteikia galimybę ją profilaktiškai vartoti įvairaus amžiaus žmonėms ir net vaikams. Alergijos atvejai bičių duonelei labai reti.\r\n            <br>Bičių duonelė rekomenduojama asmenims, sergantiems mažakraujyste, hepatitu, cukriniu diabetu, virškinamojo trakto, ypač žarnyno (fermentiniai kolitai, enterokolitai, lėtiniai vidurių užkietėjimai) ligomis. K.Valiukienės ir bendraautorių atlikti tyrimai parodė, kad bičių duonelė gerina pagyvenusio amžiaus žmonių sveikatą, mažina cholesterolio kiekį kraujyje. Neseniai atlikti tyrimai įrodė, kad bičių duonelė sergantiems vyresnio amžiaus asmenims cukriniu diabetu ne tik sumažino cholesterolio kiekį kraujyje, bet ir sustiprino šių ligonių imuninę sistemą.\r\n            <br>Bičių duonelę profilaktiškai rekomenduojama vartoti po 10-15 g per dieną, o gydymo tikslais – po 20-30 g per dieną.\r\n            </p>', '2017-11-02'),
(4, 'Pikis', '<p><strong>Istoriniai duomenys</strong></p>\r\n            <p>Jau žiloje senovėje žmonės žinojo, kad bičių pikis gydo žaizdas, mažina skausmą ir tinimą, šalina blogą kvapą. Pirmieji bičių pikį gydymui pradėjo vartoti bitininkai, kurie pastebėjo, kad avilyje arba drevėje, kur gyvena bičių šeima, yra labai švaru. <br>Liaudies medicinoje bičių pikis dažniausiai vartojamas kaip išorinis, gana retai – kaip vidinis vaistas. Juo gydydavo votis, kitas pūlingas žaizdas, karpas, nuospaudas, nudegimus. Bičių pikiu aplipdyta drobe apvyniodavo skaudamus sąnarius. Nuo to skausmai sumažėdavo ar visai išnykdavo. Bičių pikiu taip pat gydydavo skrandžio opą, plaučių tuberkuliozę, tulžies pūslės ligas, paradantozę. Bičių pikis vartotas ne tik liaudies medicinoje, bet ir kitiems tikslams. Pavyzdžiui, Egipte pikį su medumi vartodavo mirusiems balzamuoti, pikio sakus – smuiko lakui, sodininkystėje – sodo tepalui gaminti.<br>Vašku, nektaru ir žiedadulkėmis, užklijuoja avilio plyšius, kad į jį nepatektų pašaliniai gyviai, pritvirtina korius. Jei vis dėlto tokie gyviai į avilį patenka, bitės juos sugelia ir apklijuoja pikiu -užbalzamuoja. Pikis bičių šeimai padeda avilyje išsaugoti švarą, apsaugo bičių šeimą nuo nuolat gresiančios išorinės infekcijos. Kai saulės spinduliai įšildo avilį, esantis avilyje bičių pikis išskiria lakiąsias eterines medžiagas, kurioms būdingos anti-mikrobinės savybės, todėl jos gerai dezinfekuoja avilį. Tai padeda bitėms apsisaugoti nuo invazinių ligų, o bitynui suteikia tam tikrą mikroklimatą.\r\n            </p>\r\n            <p><strong>Bičių pikio sudėtis</strong></p>\r\n            <p>Bičių pikis yra tamsiai pilka arba rusva tampri masė, turinti stiprų, bet malonų aromatą. 15 laipsnių temperatūroje pikis tampa tampriu ir kietu, o pašildytas iki 30 laipsnių – minkštu ir lipniu. Pikis blogai tirpsta karštame vandenyje, bet gerai spirite ir eteryje.\r\n            <br>Cheminiu požiūriu bičių pikis yra labai sudėtingas junginys. Jį sudaro įvairios aromatinės medžiagos (apie 55 proc.), vaškas (apie 30 proc.), eterinis aliejus (apie 10 proc.) ir žiedadulkės (apie 5 proc.). Nustatyta, kad daugiausia pikyje yra flavanoidų (apie 25 proc.). Tai sudėtingi eteriai, terpenai (bisabololas, pferostilbenas, fenolino trigliceroidai), organinės rūgštys (benzoinė, vanilinė ir kitos), vanilino ir izovanilino aldehidai, betulenas, betulenolas ir t.t. Pikyje taip pat yra daug įvairių mineralinių medžiagų: mangano, cinko, vario, nikelio, kobalto, kalcio, kalio, fosforo, sieros, natrio, geležies, magnio. Jų kiekiai nedideli ir būna į nuo pėdsakų iki 11,6 mkg/100 g. Vitaminų pikyje yra nedaug: Bp B2, B6, C, E, A, nikotininė ir pantoteno rūgštys. Pikyje yra nuo 8 iki 17 aminorūgščių. Iš jų svarbiausios – serinas, gliukolis, alaninas, triptofanas, leicinas, lizinas, histidinas, metioninas, valinas. Be to, pikyje yra sudėtingų riebalinių rūgščių, įvairių angliavandenilių, daug inhibitorių, antimikrobinių ir kitų biologiškai aktyvių medžiagų.\r\n            </p>\r\n            <p><strong>Ar bičių pikis nekenksmingas?</strong></p>\r\n            <p>Prieš kurį laiką mūsų respublikos populiarioje literatūroje buvo pareikšta mintis, kad bičių pikis – tai derva, turinti kancerogeninių savybių ir gali sukelti vėžį. Tačiau mokslinė literatūra šių minčių nepatvirtino. A.Derevič (Rumunija) atliko kruopščius eksperimentinius tyrimus su žiurkėmis. Joms buvo injekuotas bičių pikio tirpalas, ir po 6 mėn. morfologiškai ištirti jų vidaus organai. Nepastebėta jokių pakitimų, iš kurių būtų galima spręsti apie pikio kancerogeniškumą. Taip pat literatūroje nėra duomenų apie švino ir kitų sunkiųjų metalų kaupimąsi pikyje. S.Popravka, B.Ochotskis ir kiti mokslininkai, atlikę cheminius pikio tyrimus, švino arba visai nerado, arba rado jo tik nežymius pėdsakus. Tačiau bitininkams reikia laikytis atsargumo. Jau anksčiau buvo minėta, kad bitynai turi būti kuo mažiau užterštoje aplinkoje, neleistina laikyti juos arti asfaltuotų kelių ar magistralių.\r\n            <br>Aišku, bičių pikio teigiamų savybių nereikia pervertinti. Gydantis pikio preparatais, reikia laikytis gydytojo apiterapeuto nustatytų dozių (ypač vaikams). Bičių pikio kaip vidinio vaisto arba aerozolio nepatartina ruošti namų sąlygomis. Tiek išoriniam, tiek vidiniam vartojimui pikį ir jo preparatus gali skirti tik gydytojai.\r\n            </p>\r\n            <p><strong>Kada negalima vartoti bičių pikio?</strong></p>\r\n            <p>Nors mūsų turimomis žiniomis bičių pikio kenksmingumo nenustatyta, tačiau pastebėta, kad kai kurie žmonės yra jam jautrūs arba alergiški. Jį turi atsargiai vartoti sergantieji bronchine astma, egzema ar kitomis alerginėmis ligomis. Pastebėjus nuo bičių pikio alergines reakcijas, jo vartojimą reikia nutraukti.</p>\r\n            <p><strong>Bičių pikio ir jo preparatų laikymo sąlygos</strong></p>\r\n            <p>Surinktas bičių pikis, turi būti laikomas tamsioje, vėsioje gerai vėdinamoje patalpoje, plastmasiniuose maišeliuose. Spiritiniai ir aliejiniai pikio preparatai ir jų mišiniai su medumi turi būti sufasuoti į tamsius stiklo sandariai uždarytus indus. Tokiomis sąlygomis jie išlaiko optimalų savo aktyvumą iki dviejų metų.</p>\r\n\r\n', '2017-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `dbimages`
--

DROP TABLE IF EXISTS `dbimages`;
CREATE TABLE `dbimages` (
  `id` int(6) NOT NULL,
  `title` varchar(25) COLLATE utf8_lithuanian_ci DEFAULT NULL,
  `name` varchar(25) COLLATE utf8_lithuanian_ci DEFAULT NULL,
  `description` text COLLATE utf8_lithuanian_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `dbimages`
--

INSERT INTO `dbimages` (`id`, `title`, `name`, `description`) VALUES
(4, 'Palyginimas', 'compare.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(6) NOT NULL,
  `name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`) VALUES
(1, 'f1.png'),
(2, 'f2.png'),
(3, 'f3.png');

-- --------------------------------------------------------

--
-- Table structure for table `zinute`
--

DROP TABLE IF EXISTS `zinute`;
CREATE TABLE `zinute` (
  `id` int(6) NOT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zinute`
--

INSERT INTO `zinute` (`id`, `message`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dbimages`
--
ALTER TABLE `dbimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zinute`
--
ALTER TABLE `zinute`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dbimages`
--
ALTER TABLE `dbimages`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `zinute`
--
ALTER TABLE `zinute`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
