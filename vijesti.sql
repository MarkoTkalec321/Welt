-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 10:19 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weltnews`
--

-- --------------------------------------------------------

--
-- Table structure for table `vijesti`
--

CREATE TABLE `vijesti` (
  `id` int(11) NOT NULL,
  `datum` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_croatian_ci NOT NULL,
  `naslov` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `sazetak` text CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `tekst` text CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `slika` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `kategorija` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `arhiva` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `vijesti`
--

INSERT INTO `vijesti` (`id`, `datum`, `naslov`, `sazetak`, `tekst`, `slika`, `kategorija`, `arhiva`) VALUES
(8, '01.06.2021.', 'Liječnik iznenađen brojem zaraženih igrača u bundesligi', 'Prema izvješću koje je u subotu kasno navečer objavila radio postaja Deutschlandfunk, u 18 klubova najvišeg nogometnog razreda u Njemačkoj prošle se sezone koronavirusom zarazilo 69 igrača, što predstavlja oko 13% svih nogometaša u Bundesligi. To je nešto veći prosjek u usporedbi s postotkom zaraženih u općoj populaciji u Njemačkoj.\"Uspoređujući s brojem igrača u Bundesligi, to je relativno visok postotak zaraženih. To se jednostavno mora reći\", izjavio je Bloch.', 'Prema podacima Njemačke nogometne lige (DFL) u prošloj je sezoni zabilježeno 217 slučajeva zaraze koronavirusom u prvoj i drugog ligi, a tim su brojem obuhvaćeni igrači, treneri i ostalo osoblje vezano za rad s momčadim.\r\n\r\n\"U dva je slučaja bila potrebna hospitalizacija igrača, ali u oba su slučaja nogometaši nakon nekoliko dana pušteni na kućnu njegu\", izjavio je liječnik njemačke nogometne reprezentacije Tim Meyer koji je ujedno i voditelj radne skupine za sportsku medicinu u profesionalnom nogometu.\r\n\r\nMeyer je istaknuo da je malo vjerojatno kako je bilo koji slučaj zaraze koronavirusom mogao ostati nezabilježen, zbog velikog broja i učestalosti testiranja.', 'bundesliga.jpg', 'sport', 0),
(10, '01.06.2021.', 'arhivirana vijest - sport', 'Neki sadrzaj vijesti.', 'Ova vijest se ne bi trebala prikazivati na stranici.', 'sport.jpg', 'sport', 1),
(11, '01.06.2021.', 'arhivirana vijest hrana', 'Random opis.', 'Jos random opisa.', 'food.jpg', 'hrana', 1),
(12, '01.06.2021.', 'Zdrava hrana za zdravo tijelo', 'Svakim se danom povećava broj raznih vrsta prehrambenih proizvoda koji svojom atraktivnom ambalažom privlače pozornost potrošača da ih kupe i konzumiraju.Također se svakodnevno otvara sve više restorana brze hrane koji nude svoje proizvode po prihvatljivim cijenama. Poznato je da je Republika Hrvatska veliki uvoznik hrane odnosno raznih prehrambenih proizvoda. Svima se pri ulasku u zemlju provjerava', 'Razgovor s doc. dr. sc. Jasnom Bošnir, dipl. ing., voditeljicom Odjela za higijenu prehrane, i Dariom Lasićem, dipl. ing., nutricionistom, voditeljem Odsjeka za kemijsko ispitivanje namirnica i predmeta opće uporabe pri Zavodu za javno zdravstvo grada Zagreba. \r\n\r\nGotovo svakodnevne teme naših razgovora su što jedemo, koliko jedemo, kada jedemo itd. Koja su glavna načela ispravne i zdrave prehrane?\r\n\r\nSvakim se danom povećava broj raznih vrsta prehrambenih proizvoda koji svojom atraktivnom ambalažom privlače pozornost potrošača da ih kupe i konzumiraju. Također se svakodnevno otvara sve više restorana brze hrane koji nude svoje proizvode po prihvatljivim cijenama. Poznato je da je Republika Hrvatska veliki uvoznik hrane odnosno raznih prehrambenih proizvoda. Svima se pri ulasku u zemlju provjerava zdravstvena ispravnost u ovlaštenim laboratorijima i samo ona hrana za koju se utvrdi da udovoljava propisanim uvjetima može se dalje pripremati i konzumirati.\r\n\r\nZdrava je prehrana ona kada je sva hrana koja se u toku dana unosi u organizam tako kombinirana da organizam dobije sve što mu je potrebno za normalno funkcioniranje. Zato se zdravom prehranom smatra ona prehrana kojom se u organizam unosi optimalna količina bjelančevina, masti, ugljikohidrata, vitamina, minerala i vode. Stoga je važno napomenuti da hamburgeri, pizze, hot-dog i slične vrste hrane nisu ?nezdrave? te se mogu konzumirati, ali se mora voditi računa o tome da se ne konzumiraju prečesto te da se kombiniraju s drugim vrstama namirnica kojima će se postići optimalan dnevni unos nutritivnih sastojaka nužnih organizmu.', 'spageti.jpg', 'hrana', 0),
(13, '01.06.2021.', 'Što to zapravo čini zdravu prehranu?', 'Što je zapravo zdrava i uravnotežena prehrana?Naime, zdravu, uravnoteženu prehranu brojni stručnjaci nazivaju čak i zasebnim lifestyleom, a pravilna prehrana mora sadržavati nekoliko skupine hrane, jer nijedna grupa zasebno ne može pružiti sve što je nužno za zdravlje organizma. Ključni dio zdrave prehrane je uravnotežena prehrana koja uključuje konzumiranje različitih vrsta hrane u pravim količinama.', 'Zdrava prehrana podrazumijeva konzumiranje ispravne količine namirnica iz svih skupina hrane. No zdrava prehrana vrlo često se pogrešno zamjenjuje nekom od brojnih dijeta i režima za mršavljenje, koji osim tzv. zdrave prehrane obećavaju i gubitak kilograma, no takva uvjerenja su u pravilu posve pogrešna.\r\n\r\nSavjeti koje nude brojne dijete su različiti, a mnogi predlažu izbacivanje određene vrste hrane iz prehrane. Međutim, pitanje koje se neminovno postavlja je koliko su takve dijete uopće zdrave. Neke dijete tako brane unos masnoća, no tako se pak organizmu ukidaju osim loših masnoća i one zdrave koje štite srce i poboljšavaju sveukupno zdravlje. Mnoge dijete pak preporučuju strogo brojanje kalorija i njihovo kontroliranje. Međutim, nisu sve kalorije iste. Važna je vrsta kalorija, vrijeme u kojem ih uzimamo i njihova kvaliteta.\r\n\r\nBez obzira koliko određena dijeta bila popularna, a brojni celebrityji se zaklinjali u njenu učinkovitost, činjenica je da je po pitanju zdravlja broj jedan zdrava, uravnotežena prehrana koja uključuje sve namirnice. Za one koji pak žele skinuti koji kilogram viška, najbolji savjeti su nepreskakanje obroka, smanjene količine hrane po obroku, raspoređivanje hrane u više manjih obroka te, naravno, te redovito vježbanje.', 'banana.jpg', 'hrana', 0),
(14, '02.06.2021.', 'Vatreni', 'Sada je sredinom prvog poluvremena Ivan Perišić ispalio loptu poput šampanjskog čepa u kut armenskog vratara i tako obilježio ulazak u ?klub 100? hrvatske reprezentacije, činilo se da bi okupljanje ?vatrenih? moglo proći u znaku partyja. Dalićeva momčad iz prekida je slomila otpor.Domagoj Vida bio je bitno staloženiji i sigurniji od ostatka obrane, a Perišić se u ekstenziji Interove šampionske sezone najavio golom.', 'Ali ništa od porcije i golgeterskog partyja, pokazat će se ubrzo nakon što su Perišić, Rebić i Pašalić zapucali kolosalne prilike. Kako to u nogometu često biva, preživjevši neveru autsajder je dignuo glavu i na koncu čak stigao do gola za foršpane. Wbeymar Angulo zove se Kolumbijac s armenskom putovnicom koji je nakon kontranapada sa dvadesetak metara ispalio projektil u Livakovićeve rašlje za konačnih 1-1.\r\n\r\nZlatko Dalić isprobavao je u Velikoj Gorici dvije formacije, a mi smo tu predstavu uokvirili u tri vinjete. Prva je razlog za alarm, jer neposredno uoči Perišićeva gola s terena je odšepao Josip Brekalo. Nismo ga uočili prije nego što je zatražio ozljedu, ali eventualna ozljeda definitivno bi značila hendikepr jer Wolsfburgov dinamitni krilni napadač se afirmirao u ovom društvu i Daliću bi koristio barem kao džoker s klupe.\r\n\r\nU drugoj sličici, očito je da su senatori od prvog dana čvrsto prihvatili uzde momčadi u svoje ruke. Luka Modrić odigrao je poluvrijeme na razini koju glance cijelu sezonu, Domagoj Vida bio je bitno staloženiji i sigurniji od ostatka obrane, a Perišić se u ekstenziji Interove šampionske sezone najavio golom.', 'vatreni.jpg', 'sport', 0),
(17, '02.06.2021.', 'Engleska', 'Inače, Southgate je, izvještavali su mediji prije objave popisa, najviše upitnika imao na desnom boku. Čak četvorica igrača, Kyle Walker, Reece James, Kieran Tripier i Trent Alexander-Arnold na toj poziciji. Nagađalo se da bi Alexander-Arnold mogao otpasti, međutim, sva četvorica su se našla na popisu. Što bi Zlatko Dalić dao za takvu konkurenciju na toj poziciji! Možda su ta četiri desna beka i najveće iznenađenje na popisu, međutim, na jednom od ranijih obraćanja medijima, Southgate je to ovako objasnio', '- Znam da ljudi gledaju njih i vide desne bekove i misle da sam ja opsjednut desnim bekovima. Ali ja u njima vidim četiri sjajna igrača, koji mogu igrati na više pozicija, oni su svestrani - rekao je Southgate, koji ima neke svoje, druge probleme.\r\n\r\nBrine ga hoće li priče o transferu odnijeti koncentraciju Harryju Kaneu, ipak, misli da neće, da će Kane biti najbolji kad bude najpotrebnije.\r\n\r\nNo, priznao je Southgate u The Sunu da mu nije lako izabrati tih 26, da je pod velikim pritiskom i da je prije nekoliko godina, upravo zbog toga, razmišljao kako nikad neće biti engleski izbornik.', 'eng.jpg', 'sport', 0),
(18, '02.06.2021.', 'Raznolikost i umjerenost prehrane', 'Još su drevni Egipćani 1500 god. prije Krista znali da hrana može utjecati na bolesti i ozljede, a iz Hipokratovih djela saznajemo da su liječnici iz njegova razdoblja  poznavali utjecaj hrane na naše zdravlje. Prema Hipokratovom učenju, koje se poklapa s vjerovanjem starih Egipćana, probava ima važnu ulogu u održavanju zdravlja te je  hrana bolesnoj osobi važnija od samog lijeka. Poznata je i njegova izjava ?Neka tvoja hrana bude tvoj lijek, a tvoj lijek neka bude tvoja hrana? koja nam upravo o tome  govori. Današnji svjetski stručnjaci za prehranu i zdravlje se također slažu sa Hipokratovom tvrdnjom te naglašavaju da je hrana najznačajniji lijek 21. stoljeća.', 'Unosom  hrane svakodnevno utječemo na naše zdravlje, međutim koliko o tome razmišljamo? Danas, nažalost, zbog ubrzanog načina života,  malo ili nimalo. Slobodnog vremena sve je manje, a jesti zdravo je sve veći izazov.\r\n\r\nSve što putem hrane unosimo u organizam, gradi nas i mijenja, a o tome što smo unijeli ovisi naša snaga, naše zdravlje i naš život, još jedna Hipokratova izjava koja bi nas trebala potaknuti da biramo one namirnice koje na štite i koje pozitivno djeluju na naše zdravlje.\r\n\r\nTreba jesti raznoliku hranu jer samo tako možemo osigurati sve potrebne tvari, a i spriječiti preveliki unos nepoželjnih tvari. Idealno bi bilo rasporediti dnevni unos na 3 glavna obroka i 2 međuobroka. Mlijeko i mliječne proizvode potrebno je svakodnevno uvrstiti u jelovnik, kao i namirnice iz skupine meso i riba, perad, jaja, mahunarke, orašasti plodovi i sjemenke.', 'sauces.jfif', 'hrana', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vijesti`
--
ALTER TABLE `vijesti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vijesti`
--
ALTER TABLE `vijesti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
