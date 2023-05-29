-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 30, 2023 alle 00:06
-- Versione del server: 10.4.28-MariaDB
-- Versione PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hw1`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `pappagalli`
--

CREATE TABLE `pappagalli` (
  `specie` varchar(100) NOT NULL,
  `genere` varchar(100) NOT NULL,
  `famiglia` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `descrizione` varchar(10000) NOT NULL,
  `regione` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `pappagalli`
--

INSERT INTO `pappagalli` (`specie`, `genere`, `famiglia`, `foto`, `descrizione`, `regione`) VALUES
('Amazona farinosa.', 'Amazona.', 'Psittacidae.', 'https://media.istockphoto.com/id/900972602/it/foto/pappagallo-seleno-meridionale.jpg?s=612x612&w=0&k=20&c=3K8qTK3gtlgH8GyUABCEKGf7aM_3fGimuEuJHeXFwfE=', 'Il pappagallo Amazona farinosa anche conosciuto con il nome comune di Amazzone farinosa è un pappagallo del genere Amazona appartenente alla famiglia dei Psittacidae. Il pappagallo Amazona farinosa è originario della zona Sudamerica ed è un pappagallo che da adulto può raggiungere una dimensione di 38 cm circa con una vita media di 50 anni circa.\r\nE’ la più dimensionata tra le amazzoni con i suoi 38 centimetri di taglia, presenta una livrea quasi interamente verde. la tonalità grigio-verde del piumaggio fa sembrare il pappagallo quasi “impolverato” o “infarinato”, aspetto questo che ha determinato il curioso nome scientifico “farinosa”. Sulle parti superiori del corpo, a partire dalla corona e dalla sommità del capo il verde è sfumato in azzurro, mentre sulle zone inferiori del corpo il verde si schiarisce fino a diventare quasi giallastro. Sulla corona non raramente si evidenziano sfumature gialle. Le ali sono verdi con le remiganti esterne con vessillo azzurro. Il sottoala è rossiccio. ', 'Sudamerica'),
('Anodorhynchus hyacinthinus', 'Anodorhynchus', 'Psittacidae', 'https://papagajo.it/wp-content/uploads/2018/01/papagajo-anodorhynchus-hyacinthinus.jpg', 'L\'ara giacinto (Anodorhynchus hyacinthinus Latham, 1790) è un pappagallo della famiglia Psittacidae, originario del Sudamerica centrale e orientale.\r\nÈ la più grande ara del mondo. In termini di lunghezza, invece, è più grande di qualunque altra specie di pappagallo.\r\n\r\nNonostante sia facilmente riconoscibile, può essere confusa con la più rara e piccola ara indaco (Anodorhynchus leari).\r\nLa sua popolarità tra gli animali da compagnia è una delle cause principali alla base del declino delle popolazioni selvatiche.', 'Sudamerica'),
('Ara ararauna.', 'Ara.', 'Psittacidae', 'https://www.animalidacompagnia.it/wp-content/uploads/2019/04/ara-ararauna.jpg', 'Il pappagallo Ara ararauna anche conosciuto con il nome comune di Ara gialla e blu è un pappagallo del genere Ara appartenente alla famiglia dei Psittacidae. Il pappagallo Ara ararauna è originario della zona Sudamerica ed è un pappagallo che da adulto può raggiungere una dimensione di 88 cm circa con una vita media di 70 anni circa. \r\nE’ un superbo uccello la cui lunghezza sfiora i 90 centrimetri, dalla livrea inconfondibile che giustifica il suo nome comune in italiano: “ara gialla e blu”. Presenta una testa piuttosto grande e massiccia, con fronte verde che sfuma in tonalità azzurre procedendo verso il vertice e la zona occipitale. Il becco è particolarmente sviluppato e robusto, di color nero. Le guance e le redini sono prive di piumaggio e con pelle bianca che evidenzia sottili striature nerastre che si infittiscono in corrispondenza della regione oculare. ', 'Sudamerica'),
('Ara militaris.', 'Ara.', 'Psittacidae.', 'https://papagajo.it/wp-content/uploads/2018/01/papagajo-ara-militaris.jpg', 'Il pappagallo Ara militaris anche conosciuto con il nome comune di Ara militare è un pappagallo del genere Ara appartenente alla famiglia dei Psittacidae. Il pappagallo Ara militaris è originario della zona Sudamerica ed è un pappagallo che da adulto può raggiungere una dimensione di 80 cm circa con una vita media di 60 anni circa. \r\nIl nome scientifico e quello comune descrivono perfettamente la colorazione base di questo pappagallo, che è un verde militare mimetico, più chiaro e tendente al giallastro nella zona addominale e nella parte inferiore delle penne timoniere. La fronte è rosso vivo, mentre la zona perioftalmica e le guance sono a pelle nuda, bianca e screziata di rosso. Le remiganti primarie sfumano nell’azzurro-blu. L’iride è scura, il becco e le zampe sono grigio scuro.', 'Sudamerica'),
('Aratinga solstitialis', 'Aratinga', 'Psittacidae', 'https://upload.wikimedia.org/wikipedia/commons/7/79/Aratinga_solstitialis_on_perch.jpg', 'Il pappagallo Aratinga solstitialis anche conosciuto con il nome comune di Conuro del sole è un pappagallo del genere Aratinga appartenente alla famiglia dei Psittacidae. Il pappagallo Aratinga solstitialis è originario della zona Sudamerica ed è un pappagallo che da adulto può raggiungere una dimensione di 30 cm circa con una vita media di 35 anni circa. Il piumaggio generale di base è appunto giallo dorato intenso, le copritrici primarie gialle, le secondarie sono verdi, le penne remiganti verdi sfumate di blu. Il becco è nero lucente, l’anello perioftalmico è bianco, le zampe bruno scuro, l’iride marrone.', 'Sudamerica'),
('Forpus coelestis', 'Forpus', 'Psittacidae', 'https://cdn.download.ams.birds.cornell.edu/api/v1/asset/392615541/640', 'Il pappagallo Forpus coelestis anche conosciuto con il nome comune di Pappagallino del Pacifico è un pappagallo del genere Forpus appartenente alla famiglia dei Psittacidae. Il pappagallo Forpus coelestis è originario della zona Sudamerica ed è un pappagallo che da adulto può raggiungere una dimensione di 12 cm circa con una vita media di 12 anni circa. Presenta una colorazione di base verde, tendente all’olivastro nelle parti superiori, con spalle remiganti, groppone e margine dell’ala blu. Fronte, guance, redini e gola sono verde acceso. Il capo e la zona occipitale sono di un azzurro-grigio che sfuma nel grigio-verde della nuca. Il margine dell’ala è di un azzurro cupo intenso con sfumature violacee, così come groppone e sopracoda. Petto, addome e sottocoda sono verde chiaro.', 'Sudamerica'),
('Melopsittacus undulatus.', 'Melopsittacus.', 'Psittaculidae', 'https://live.staticflickr.com/65535/51017706148_16be0cb5c4_b.jpg', 'Il pappagallo Melopsittacus undulatus anche conosciuto con il nome comune di Pappagallino ondulato è un pappagallo del genere Melopsittacus appartenente alla famiglia dei Psittaculidae. Il pappagallo Melopsittacus undulatus è originario della zona Pacifico ed è un pappagallo che da adulto può raggiungere una dimensione di 18 cm circa con una vita media di 10 anni circa. \r\nIl corpo, di struttura agile e leggera (35-40gr il peso medio), misura circa 18-20 cm inclusa la lunga coda. Il piumaggio, di colore verde nella forma ancestrale, ma che può presentarsi in svariate tinte e sfumature, dal giallo al blu, al bianco o in combinazione multipla di questi colori, presenta le tipiche ondulazioni sulla nuca e sulle ali e le tipiche macchie a goccia blu scuro (spot) ai lati della gola. Le zampe sono rosee o grigiastre, il becco si presenta marcatamente adunco e molto robusto e di colore che può variare dal grigio-giallo all’arancio a seconda della mutazione. ', 'Pacifico'),
('Myiopsitta monachus', 'Myiopsitta ', 'Psittacidae', 'https://www.ecoregistros.org/site/images/dataimages/2020/07/17/404195/Cotorra--Myiopsitta-monachus-.jpg', 'Il pappagallo Myiopsitta monachus anche conosciuto con il nome comune di Parrocchetto monaco è un pappagallo del genere Myiopsitta appartenente alla famiglia dei Psittacidae. Il pappagallo Myiopsitta monachus è originario della zona Sudamerica ed è un pappagallo che da adulto può raggiungere una dimensione di 28 cm circa con una vita media di 15 anni circa. Il parrocchetto monaco, detto anche pappagallo dal petto grigio, è un simpatico ed agile pappagallo di 28/30 cm di lunghezza che presenta una colorazione verde con la fronte, le guance ed il petto di un grigio sfumato, con timoniere e remiganti blu. Il dorso è verde vivo. Il becco è scuro, leggermente più largo alla base rispetto alla media dei pappagalli, le zampe si presentano grigie e l’occhio è marrone scuro.', 'Sudamerica'),
('Pionites leucogaster.', 'Pionites.', 'Psittacidae.', 'https://www.tuttopappagalli.it/wp-content/uploads/2021/01/caicco-ventre-bianco.jpg', 'Il pappagallo Pionites leucogaster anche conosciuto con il nome comune di Caicco ventre bianco è un pappagallo del genere Pionites appartenente alla famiglia dei Psittacidae. Il pappagallo Pionites leucogaster è originario della zona Sudamerica ed è un pappagallo che da adulto può raggiungere una dimensione di 23 cm circa con una vita media di 30 anni circa.\r\nQuesto pionites è comunemente chiamato “caicco ventre bianco” ma pure “caicco testa gialla”. E’ infatti caratterizzato da entrambi questi tratti molto appariscenti che lo rendono inconfondibile: la testa è interamente di un bellissimo giallo-oro, dalla tonalità più arancione sulla sommità e più limone nel sottogola. Il petto e l’addome sono completamente di un vistoso bianco candido. Le cosce, le ali, il dorso ed il groppone sono verde intenso, il sottocoda è nuovamente giallo. L’anello perioftalmico è leggermente rosato, l’iride è arancione scura, la zona perioftalmica è nuda color carne, le zampe sono grigie.', 'Sudamerica'),
('Pyrrhura griseipectus.', 'Pyrrhura.', 'Psittacidae', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Pyrrhura_griseipectus_-upper_body-8a-2c.jpg/330px-Pyrrhura_griseipectus_-upper_body-8a-2c.jp', 'Il pappagallo Pyrrhura leucotis anche conosciuto con il nome comune di Conuro dalle orecchie bianche è un pappagallo del genere Pyrrhura appartenente alla famiglia dei Psittacidae. Il pappagallo Pyrrhura leucotis è originario della zona Sudamerica ed è un pappagallo che da adulto può raggiungere una dimensione di 23 cm circa con una vita media di 20 anni circa. \r\nIl pyrrhura leucotis, come indica il nome, è caratterizzato dalla presenza di una macchia bianca nella zona auricolare. La colorazione base è il verde, e le somiglianze con la specie picta sono molte. La testa è bruno-rossiccia con sfumature azzurre sulla nuca, gola e sottogola presentano le caratteristiche scagliature tipiche dei pyrrhura, con piumaggio verde-azzurro bordato di bianco. Il petto è verde, l’addome dominato dallo scudo rosso mattone. Le spalle sono rosso brillante, le ali verdi bordate esternamente di azzurro. La coda è verde superiormente e rossiccia inferiormente.', 'Sudamerica'),
('Pyrrhura molinae', 'Pyrrhura', 'Psittacidae', 'https://upload.wikimedia.org/wikipedia/commons/7/76/Pyrrhura_molinae_-captive-perch-8a-1cp.jpg', 'Il pappagallo Pyrrhura molinae anche conosciuto con il nome comune di Conuro guance verdi è un pappagallo del genere Pyrrhura appartenente alla famiglia dei Psittacidae. Il pappagallo Pyrrhura molinae è originario della zona Sudamerica ed è un pappagallo che da adulto può raggiungere una dimensione di 25 cm circa con una vita media di 35 anni circa. Le guance, come recita il nome comune, verde brillante. Il petto è solcato da una colorazione a scaglie molto appariscente che varia tra il dorato ed il bruno, che sfuma inferiormente sull’addome a base verde ma abbondantemente chiazzato di rosso. ', 'Sudamerica');

-- --------------------------------------------------------

--
-- Struttura della tabella `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `commento` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `post`
--

INSERT INTO `post` (`id`, `username`, `commento`) VALUES
(8, 'irene29', 'ciao');

-- --------------------------------------------------------

--
-- Struttura della tabella `preferiti`
--

CREATE TABLE `preferiti` (
  `username` varchar(16) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `preferiti`
--

INSERT INTO `preferiti` (`username`, `foto`) VALUES
('irene29', 'https://cdn.download.ams.birds.cornell.edu/api/v1/asset/392615541/640'),
('irene29', 'https://papagajo.it/wp-content/uploads/2018/01/papagajo-anodorhynchus-hyacinthinus.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `immagine_profilo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `surname`, `immagine_profilo`) VALUES
(24, 'irene29', 'Metro2022', 'irenebevacqua29@gmail.com', 'irene', 'Bevacqua', '/xampp/htdocs/MHW1/conuri.jpg');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `pappagalli`
--
ALTER TABLE `pappagalli`
  ADD PRIMARY KEY (`specie`);

--
-- Indici per le tabelle `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `preferiti`
--
ALTER TABLE `preferiti`
  ADD PRIMARY KEY (`username`,`foto`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
