-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3325
-- Generation Time: Jun 13, 2024 at 03:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `clanak`
--

CREATE TABLE `clanak` (
  `id` int(11) NOT NULL,
  `kategorija` varchar(15) NOT NULL,
  `naslov_vijesti` varchar(100) NOT NULL,
  `kratki_sazetak_vijesti` text NOT NULL,
  `datum` datetime NOT NULL,
  `slika` text NOT NULL,
  `sadrzaj_vijesti` text DEFAULT NULL,
  `arhiva` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clanak`
--

INSERT INTO `clanak` (`id`, `kategorija`, `naslov_vijesti`, `kratki_sazetak_vijesti`, `datum`, `slika`, `sadrzaj_vijesti`, `arhiva`) VALUES
(1, 'Muški nogomet', 'Spektakularna Pobjeda Hrvatske Nad Italijom', 'U izvanrednoj utakmici kvalifikacija za Svjetsko prvenstvo, Hrvatska je ostvarila nevjerojatnu pobjedu nad Italijom, čime je osigurala važne bodove i zacementirala svoj put prema svjetskom natjecanju.', '2024-06-07 19:48:11', 'hrvatska_nogometna_reprezentacija.jpg', 'Utakmica je započela brzim tempom, s obje momčadi željnim postizanja gola. Hrvatska je pružila snažan otpor talijanskoj momčadi, čvrsto držeći svoju obranu i istovremeno tražeći prilike za napad. Uzbudljiv prvi gol stigao je u prvoj polovici utakmice, kada je Hrvatska izvela smjelu kontru i preciznim udarcem svladala talijanskog vratara.\r\n\r\nItalija je nastavila pritisak i tražila izjednačenje, ali hrvatska obrana je bila nepokolebljiva. Uz izvanredne obrambene akcije i hrabru igru, Hrvatska je uspjela zadržati prednost do kraja susreta.\r\n\r\nOva pobjeda donosi ogroman entuzijazam i samopouzdanje hrvatskim igračima i navijačima dok se bliži Svjetsko prvenstvo. Utakmica je također podsjetnik na snagu i talent hrvatskog nogometa, te na čari koje donosi međunarodno natjecanje.', 0),
(2, 'Muški nogomet', 'Mbappé U Realu: Transfer Stoljeća', 'Real Madrid je potvrdio najzvučniji transfer sezone, dovođenjem francuskog nogometnog wunderkinda Kyliana Mbappéa iz PSG-a. Ovaj transfer ne samo da će promijeniti dinamiku europskog nogometa, već će dodatno ojačati redove španjolskog velikana.', '2024-06-07 19:55:17', 'kylian_mbappe.jpg', 'U vijesti koja je potresla svjetski nogomet, Real Madrid je najavio transfer Kyliana Mbappéa iz Paris Saint-Germaina u svoje redove. Nakon dugog perioda spekulacija, konačno je potvrđeno da će jedan od najtalentiranijih nogometaša današnjice napustiti francuski klub i pridružiti se Kraljevskom klubu.\r\n\r\nTransfer, koji je iznosio rekordnih nekoliko desetaka milijuna eura, predstavlja ogroman korak za Real Madrid u njihovoj želji za obnovom i jačanjem momčadi. Mbappé, koji je već demonstrirao svoj nevjerojatan talent i sposobnost na najvećoj svjetskoj pozornici, donosi sa sobom ogroman potencijal za postizanje golova, stvaranje prilika i inspiriranje suigrača.\r\n\r\nOvaj potez također označava novu eru u europskom nogometu, gdje će Real Madrid s Mbappéom u svom sastavu biti još opasniji protivnik za sve svoje suparnike. Navijači su euforični zbog dolaska francuskog superstara, a klub se nada da će Mbappé biti ključni faktor u njihovoj potrazi za domaćim i međunarodnim trofejima u godinama koje dolaze.', 0),
(3, 'Ženski nogomet', 'Povijesna Pobjeda', 'Hrvatska ženska nogometna reprezentacija ostvarila je povijesni uspjeh osvajanjem prvog europskog zlata na UEFA Europskom prvenstvu, što je rezultat dugogodišnjeg rada i predanosti igračica i njihovog stručnog stožera.', '2024-06-07 20:00:27', 'hrvatska_zenska_nogometna_reprezentacija.jpg', 'U izvanrednoj kampanji na UEFA Europskom prvenstvu, hrvatske nogometašice su nadmašile očekivanja i osvojile naslov europskih prvaka. Put do finala bio je prepun izazova, ali hrabrost, vještina i timski duh doveo je Hrvatsku do vrha europskog ženskog nogometa.\r\n\r\nNa putu do finala, hrvatske su igračice pokazale nevjerojatnu snagu i karakter, svladavajući jaku konkurenciju s impresivnom igrom i odlučnošću. U finalnoj utakmici, protivnik nije imao odgovora na brze napade i precizne udarce hrvatskih reprezentativki, čime je osigurana povijesna pobjeda i osvajanje europskog zlata.\r\n\r\nOva pobjeda ne samo da slavi uspjeh hrvatskog ženskog nogometa, već također predstavlja važan korak prema većoj vidljivosti i podršci za ženski nogomet širom zemlje. Navijači su oduševljeni postignutim uspjehom, a hrvatske nogometašice postale su inspiracija za buduće generacije djevojaka koje sanjaju o tome da jednog dana nose dres svoje reprezentacije i osvoje europsko prvenstvo.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 1),
(4, 'Ženski nogomet', 'Povijesni Trenutak: Ženski Nogomet Stiže Na Olimpijske Igre', 'Olimpijski odbor donosi revolucionarnu odluku o uvrštavanju ženskog nogometa kao stalnog sporta na Olimpijskim igrama, otvarajući put za globalno priznanje i rast ženskog nogometa.', '2024-06-07 20:06:08', 'zenski_nogomet.jpg', 'U presedanskom potezu za svjetski sport, Olimpijski odbor je proglasio ženski nogomet stalnim sportom na Olimpijskim igrama, što predstavlja povijesnu promjenu za sport i priznanje rastuće važnosti i popularnosti ženskog nogometa. Ova odluka dolazi nakon godina borbe za jednakost spolova u sportu i ističe globalnu raznolikost i talent ženskih nogometašica diljem svijeta.\r\n\r\nUz muški nogomet već prisutan na Olimpijskim igrama, dodavanje ženskog nogometa kao stalnog sporta donosi veću vidljivost i prilike za žene da pokažu svoj talent na najvećoj svjetskoj sportskoj pozornici. Očekuje se da će ova odluka inspirirati nove generacije djevojaka da se uključe u sport i pruži poticaj za daljnji razvoj ženskog nogometa širom svijeta.\r\n\r\nOvo je pozitivan korak prema naprijed u borbi za ravnopravnost spolova u sportu i stvaranju inkluzivnijeg okruženja za sve sportaše. Kroz nadolazeće Olimpijske igre, ženski nogomet će dobiti globalno priznanje i podršku koja će pomoći u oblikovanju budućnosti sporta i društva.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 0),
(5, 'Ženski nogomet', 'Nevjerojatna Drama na Svjetskom Prvenstvu', 'U nevjerojatnoj utakmici na Svjetskom prvenstvu, hrvatske ženske nogometašice su oduševile svijet svladavši Brazil u dramatičnoj borbi koja ih je odvela do polufinala, pokazujući snagu, odlučnost i timski duh.', '2024-06-07 20:10:08', 'hrvatska_zenska_nogometna_reprezentacija_pobjeda.jpg', 'Hrvatska ženska nogometna reprezentacija ostvarila je senzacionalnu pobjedu nad Brazilom u četvrtfinalu Svjetskog prvenstva, pružajući izvanrednu igru koja će ostati zabilježena u povijesti sporta. Utakmica je bila ispunjena uzbuđenjem od početka do kraja, dok su obje ekipe jurile za mjesto u polufinalu.\r\n\r\nBrazil je pokazao svoju kvalitetu i agresivnost, ali hrvatske nogometašice nisu se dale obeshrabriti, pružajući snažan otpor i pokazujući izvanrednu tehniku i taktičku inteligenciju. Uz podršku strastvenih navijača s tribina, Hrvatska je uspjela stvoriti nekoliko ključnih prilika za gol, a odlučujući trenutak došao je u drugom poluvremenu kada je precizan udarac pronašao put u brazilsku mrežu.\r\n\r\nNakon tog gola, Brazil je pritisnuo snažno u potrazi za izjednačenjem, ali hrabra obrana i izvrsna igra vratarke osigurali su Hrvatskoj pobjedu i prolazak na polufinale. Ova pobjeda ne samo da slavi uspjeh hrvatskog ženskog nogometa, već također predstavlja inspiraciju za sve djevojke koje sanjaju o tome da jednog dana budu dio svjetskog nogometnog prvenstva.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 0),
(7, 'Muški nogomet', 'Nevjerojatan Povratak: Liverpool Svladava Manchester City', 'U nevjerojatnoj utakmici na Anfieldu, Liverpool je ostvario spektakularan povratak i svladao Manchester City rezultatom 3:2, osiguravajući važne bodove u borbi za naslov Premier lige.', '2024-06-07 22:43:07', 'liverpool.jpg', 'Liverpool je priredio senzacionalan povratak protiv Manchester Cityja u jednoj od najuzbudljivijih utakmica sezone Premier lige. Gosti su rano poveli s dva gola, koristeći slabosti Liverpoolove obrane. Međutim, atmosfera na Anfieldu postala je ključni faktor u drugom poluvremenu kada su domaćini započeli svoj nevjerojatan preokret.\r\n\r\nPrvi gol za Liverpool postigao je Mohamed Salah iz kaznenog udarca, što je vratilo nadu domaćoj momčadi. Nedugo zatim, Sadio Mane je izjednačio rezultatom 2:2 preciznim udarcem s ruba kaznenog prostora. Kulminacija drame dogodila se u sudačkoj nadoknadi kada je Roberto Firmino postigao pobjednički gol glavom nakon savršeno izvedenog kornera.\r\n\r\nOva pobjeda daje Liverpoolu prijeko potrebne bodove u utrci za naslov, dok Manchester City mora preispitati svoju taktiku i pripremu za sljedeće utakmice. Anfield je još jednom pokazao zašto je jedno od najstrašnijih gostujućih terena u svjetskom nogometu, pružajući nezaboravne trenutke navijačima.', 0),
(8, 'Muški nogomet', 'Hrvatska Dominacija: Vatreni Pobjedili Njemačku u Kvalifikacijama za Euro 2024', 'Hrvatska nogometna reprezentacija ostvarila je impresivnu pobjedu nad Njemačkom rezultatom 2:1 u ključnoj utakmici kvalifikacija za Euro 2024, potvrđujući svoju formu i ambicije za nadolazeće prvenstvo.', '2024-06-07 22:45:21', 'hrvatska_nogometna_reprezentacija_slavlje.jpg', 'U jednoj od najvažnijih utakmica kvalifikacijskog ciklusa za Euro 2024, Hrvatska nogometna reprezentacija pružila je fantastičnu predstavu protiv Njemačke i osvojila tri ključna boda. Utakmica je igrana pred prepunim stadionom u Zagrebu, gdje su navijači stvorili nevjerojatnu atmosferu koja je nosila domaće igrače.\r\n\r\nHrvatska je povela već u prvom poluvremenu golom Luke Modrića iz slobodnog udarca, koji je preciznim udarcem svladao njemačkog vratara. Njemačka je ubrzo izjednačila preko Tima Wernera, no Hrvatska nije odustajala i nastavila je s pritiskom.\r\n\r\nOdlučujući trenutak dogodio se u drugom poluvremenu kada je Ivan Perišić, nakon sjajne solo akcije, postigao pobjednički gol. Njemačka je pokušala izjednačiti, ali obrana Hrvatske, predvođena sjajnim Dominikom Livakovićem, izdržala je sve napade.\r\n\r\nOva pobjeda učvršćuje poziciju Hrvatske na vrhu kvalifikacijske skupine i povećava njihove šanse za direktan plasman na Euro 2024. Navijači su oduševljeni izvedbom svoje reprezentacije, koja je još jednom pokazala da može parirati najboljim ekipama svijeta.', 0),
(9, 'Ženski nogomet', 'Povijesni Uspjeh: ŽNK Osijek Osvojio Prvo Mjesto u Ligi Prvaka', 'Ženski nogometni klub Osijek ostvario je povijesni uspjeh osvajanjem Lige prvaka, pobijedivši Lyon u dramatičnom finalu rezultatom 3:2.', '2024-06-07 22:48:20', 'žnk_osijek.jpg', ' ŽNK Osijek ušao je u povijest hrvatskog sporta osvajanjem Lige prvaka u ženskom nogometu. U dramatičnom finalu, koje je odigrano pred više od 50,000 gledatelja, Osijek je pobijedio francuski Lyon, jedan od najjačih ženskih nogometnih klubova u svijetu, rezultatom 3:2.\r\n\r\nOsijek je odlično započeo utakmicu i poveo golom Ivane Jurić u prvom poluvremenu. Lyon je brzo odgovorio i izjednačio rezultat, ali Osijek je pokazao izvanrednu odlučnost. U drugom poluvremenu, kapetanica Ana Mandić postigla je drugi gol za Osijek, dok je Marina Petrović, u napetoj završnici, postigla treći i odlučujući gol.\r\n\r\nLyon je uspio smanjiti rezultat u posljednjim minutama, ali nije mogao spriječiti trijumf Osijeka. Ova pobjeda je ogroman uspjeh za ŽNK Osijek i značajan trenutak za hrvatski ženski nogomet. Navijači su slavili do kasno u noć, a igračice i stručni stožer su bili preplavljeni emocijama zbog ostvarenog uspjeha.\r\n\r\nOvaj povijesni trijumf dodatno će podići profil ženskog nogometa u Hrvatskoj i inspirirati mlade djevojke da se bave sportom i slijede svoje snove.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 0),
(10, 'Ženski nogomet', 'FC Barcelona Žene Dominantnom Igrama Pobjedile Atletico Madrid', 'Ženska ekipa FC Barcelone nastavila je svoju dominaciju u španjolskoj ligi uvjerljivom pobjedom nad Atletico Madridom rezultatom 4:1, učvršćujući svoju poziciju na vrhu tablice.', '2024-06-07 22:50:25', 'zenski_nogomet.jpg', 'FC Barcelona Žene još jednom su pokazale svoju superiornost na terenu, svladavši Atletico Madrid s impresivnih 4:1 u derbiju španjolske lige. Utakmica, koja se odigrala pred više od 20,000 gledatelja na Camp Nou, bila je još jedan dokaz zašto je Barcelona trenutno najbolja ekipa u Europi.\r\n\r\nBarcelona je kontrolirala igru od samog početka, stvarajući brojne prilike i držeći posjed lopte. Već u 15. minuti, kapetanica Alexia Putellas otvorila je rezultat preciznim udarcem izvan kaznenog prostora. Nedugo zatim, Caroline Graham Hansen povećala je vodstvo na 2:0 nakon sjajne solo akcije.\r\n\r\nAtletico Madrid je uspio smanjiti rezultat prije kraja prvog poluvremena, ali Barcelona je brzo odgovorila u drugom poluvremenu. Jennifer Hermoso postigla je treći gol za Barcelonu iz penala, dok je Lieke Martens zapečatila pobjedu četvrtim golom u završnici utakmice.\r\n\r\nOva pobjeda dodatno učvršćuje poziciju Barcelone na vrhu tablice, s jasnom ambicijom da obrane naslov prvakinja. Trener Lluís Cortés pohvalio je timsku igru i posvećenost igračica, ističući da su ovo bile jedne od najboljih izvedbi sezone.\r\n\r\nNavijači Barcelone su oduševljeni izvedbom svoje ekipe, koja ne samo da dominira u domaćoj ligi, već je i jedan od glavnih favorita za osvajanje Lige prvaka. Ova pobjeda nad Atleticom Madridom još jednom pokazuje da je FC Barcelona Žene trenutno na vrhuncu svoje moći i spremna za nove izazove.', 0),
(28, 'Muški nogomet', 'Modrić Oduševio', 'Hrvatska svladala Italiju.', '2024-06-13 01:23:28', 'luka_modric.jpeg', 'Hrvatska nogometna reprezentacija ostvarila je impresivnu pobjedu nad Italijom u polufinalu Lige Nacija. Kapetan Luka Modrić odigrao je ključnu ulogu, postigavši jedan gol i asistirao za drugi. Hrvatska je dominirala većim dijelom utakmice, a golove su još postigli Ivan Perišić i Andrej Kramarić. Ova pobjeda osigurava Hrvatskoj mjesto u finalu, gdje će se suočiti s Francuskom.\r\n\r\n', 0),
(29, 'Muški nogomet', 'Chelsea osvaja FA Cup', 'Chelsea osvojio FA Kup pobjedom nad Liverpoolom 2:1.', '2024-06-13 01:28:08', 'chelsea.jpg', 'U napetom finalu FA Kupa, Chelsea je uspio pobijediti Liverpool rezultatom 2:1. Golove za Chelsea postigli su Mason Mount i Kai Havertz, dok je jedini gol za Liverpool postigao Mohamed Salah. Ova pobjeda donosi Chelseaju prvi trofej u sezoni i podiže moral ekipe pred završnicu Premier lige i Lige prvaka.\r\n\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `korisnicko_ime` varchar(50) NOT NULL,
  `lozinka` varchar(225) NOT NULL,
  `ime` varchar(100) NOT NULL,
  `prezime` varchar(100) NOT NULL,
  `razina` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `korisnicko_ime`, `lozinka`, `ime`, `prezime`, `razina`) VALUES
(1, 'admin', '$2y$10$E4sHYcEzMZm9edOOi592kODsSbLZf1kEeTWXcBWhdJHxVV5A3WzL.', 'Pero', 'Perić', 1),
(2, 'Marijab', '$2y$10$k3jgOLpAAlpNln763K3l0uW2.m.YGixUpZAg6r17AgegEXejoCjdi', 'Marija', 'Baršić', 0),
(12, 'ana.horvat', '$2y$10$x7qZpfjfDJ03PjbHqS6pVuRHtZciKfIiFzyQG7dDSHVacy42bTVIu', 'Ana', 'Horvat', 0),
(13, 'marko123', '$2y$10$c1crwgMW7YF6Q5AGhjCNSeumEPVwKP/LN.9VoiCtD4VsSDP9Jk0fq', 'Marko', 'Vukić', 0),
(17, 'horvat.marko', '$2y$10$XldNaKf5vmyPfUA1OjodNeJMS7G515UW3Qcs1b9onE304H8giUGtW', 'Marko', 'Horvat', 0),
(18, 'horvat123', '$2y$10$7qZ2SgTJZGyTUmbWzia8JOCx/20FnOF3kXPFeDozU61wOE.KtYmRq', 'Marko', 'Horvat', 0),
(19, 'marko.horvat15', '$2y$10$ye.lzeMin34hpgr0NH8u1.2aDUpA1fF8TgU0X9WbSjqxGm48SMzUS', 'Marko', 'Horvat', 0),
(20, 'marko.horvat54', '$2y$10$ZT4P6xAKvZA59BDsOja6F.e4TVP.x/cg5j1J2BHHrymD6q4742HFy', 'Marko', 'Horvat', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clanak`
--
ALTER TABLE `clanak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `korisnicko_ime` (`korisnicko_ime`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clanak`
--
ALTER TABLE `clanak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
