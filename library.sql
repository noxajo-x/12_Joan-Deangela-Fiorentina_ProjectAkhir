-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2025 at 02:20 PM
-- Server version: 8.0.43
-- PHP Version: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `author` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `cover` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `year` year NOT NULL,
  `genre` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `synopsis` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `title`, `author`, `cover`, `year`, `genre`, `synopsis`) VALUES
(1, 'Midnight Library', 'Matt Haig', 'https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/items/9786020649320_the_midnight_library_cov.jpg', '2020', 'Fantasy', 'When Nora Seed finds herself in the Midnight Library, she has a chance to make things right. Up until now, her life has been full of misery and regret. She feels she has let everyone down, including herself. But things are about to change.\r\n\r\nThe books in the Midnight Library enable Nora to live as if she had done things differently. With the help of an old friend, she can now undo every one of her regrets as she tries to work out her perfect life. But things aren\'t always what she imagined they\'d be, and soon her choices place the library and herself in extreme danger.\r\n\r\nBefore time runs out, she must answer the ultimate question: what is the best way to live?'),
(4, 'Six Crimson Cranes', 'Elizabeth Lim', 'https://www.hachette.co.uk/wp-content/uploads/2023/11/hbg-title-9781399735766-17.jpg', '2021', 'Fantasy, Romance', 'A princess in exile, a shapeshifting dragon, six enchanted cranes, and an unspeakable curse....\r\n\r\nDrawing from fairy tales and East Asian folklore, this original fantasy from the author of Spin the Dawn is perfect for fans of Shadow and Bone.\r\n\r\n\"A dazzling fairytale full of breathtaking storytelling.\" (Stephanie Garber, New York Times best-selling author of Caraval)\r\n\r\nShiori\'anma, the only princess of Kiata, has a secret. Forbidden magic runs through her veins. Normally she conceals it well, but on the morning of her betrothal ceremony, Shiori loses control. At first, her mistake seems like a stroke of luck, forestalling the wedding she never wanted. But it also catches the attention of Raikama, her stepmother.\r\n\r\nA sorceress in her own right, Raikama banishes the young princess, turning her brothers into cranes. She warns Shiori that she must speak of it to no one: for with every word that escapes her lips, one of her brothers will die.\r\n\r\nPenniless, voiceless, and alone, Shiori searches for her brothers, and uncovers a dark conspiracy to seize the throne. Only Shiori can set the kingdom to rights, but to do so she must place her trust in a paper bird, a mercurial dragon, and the very boy she fought so hard not to marry. And she must embrace the magic she\'s been taught all her life to forswear - no matter what the cost.'),
(5, 'Wings Of Starlight', 'Allison Saft', 'https://m.media-amazon.com/images/I/81-KLOJ2RtL._AC_UF1000,1000_QL80_.jpg', '2025', 'Fantasy, Romance', 'It’s been centuries since a warm-season fairy in Pixie Hollow has crossed into the Winter Woods, and while most fear the legends of monsters lurking in the frozen lands, Clarion, can’t help being intrigued by Winter’s stoic beauty. But under the watchful eyes of the current monarch and the court\'s seasonal ministers, Clarion has little time to dwell on daydreams while the days to her coronation dwindle away.\r\n\r\nThat is, until reports of a monster crossing from Winter into Spring make their way to the palace. Clarion sees defeating this threat as an opportunity to prove that she is worthy of her new role. But instead of finding a monster at the edge of Winter, she finds Milori, a young guardian of the Winter Woods. Together, they form an unlikely bond as they race to save their lands.\r\n\r\nBut as their alliance warms to something more, they will discover there is a reason a warm-season fairy and a winter fairy must not be together. And the cost could be just as deadly as the monsters that prowl the Winter Woods.'),
(6, 'Frieren: Beyond Journey\'s End Manga', 'YAMADA Kanehito', 'https://upload.wikimedia.org/wikipedia/en/thumb/6/60/Frieren_Beyond_Journey%27s_End.jpg/250px-Frieren_Beyond_Journey%27s_End.jpg', '2020', 'Action, Magic, Fantasy, Adventure', 'Frieren is a member of the hero’s party that defeated the demon king. Both a magician and an elf, those are the things that separates her from the other members. Being able to live longer than others, her feelings are...'),
(7, 'Death On The Nile', 'Agatha Cristie', 'https://upload.wikimedia.org/wikipedia/en/9/96/Death_on_the_Nile_First_Edition_Cover_1937.jpg', '1937', 'Mystery, Thriller, Horror', 'In Death on the Nile, Hercule Poirot\'s vacation cruise down the Nile is interrupted by the murder of a beautiful, wealthy heiress, Linnet Doyle. The investigation takes place on the luxury steamer, where Poirot must untangle a web of relationships, jealousy, and betrayal among the diverse passengers, many of whom have a motive to kill her. The story unfolds as a classic murder mystery with plenty of suspects and twists until Poirot uncovers the shocking truth behind the crime. ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `age` int NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `age`, `email`) VALUES
(1, 'joan', 'jo', '$2y$10$anXQeLpNxz7ib26A1KBhWOzKV1Wb7f9dPSSB.rkz/q4VBPtvW1nTm', 12, 'lala@gmail.com'),
(2, 'sya', 'syayur', '$2y$10$JWeNBqgUg0YO6/2ogSF8VO1YDl8xT7voB5GNdM0ZTXcZTIAuvYnDO', 17, 'syasya@gmail.com'),
(3, 'qwertyu', 'wertyu', '$2y$10$zbdlYDLxLGuE//5gx.tzN.gAUOvoKifTccHReRBj8YTAgR0IUpWlO', 12, 'sdf@ggg'),
(5, 'joan', 'lol', '$2y$10$NrvUbwiDPzefDa6X4EUftOyon1J5TzsWK1//xPWYBEe9MDdaG8IIy', 17, 'joan@gmail.com'),
(6, 'Asep', 'Asep123', '$2y$10$JwXOly0jO2k5pluPi7S.ZuEd8ZOAltKYCtDGlevlOtaV/XxMhlWt.', 21, 's130224015@student.ubaya.ac.id'),
(7, 'Safiro', 'Firosa', '$2y$10$wnF6brKeTVLeraqF0taHAOv.zKa3nswxYeCOIR.4YVRW0df7zi1v.', 17, 'sifaro@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
