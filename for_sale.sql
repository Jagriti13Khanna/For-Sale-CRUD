-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2022 at 12:23 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jkhanna1_job_posting`
--

-- --------------------------------------------------------

--
-- Table structure for table `for_sale`
--

CREATE TABLE `for_sale` (
  `ad_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `ad` text NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_yn` char(1) NOT NULL DEFAULT 'N',
  `item_sold_yn` char(1) NOT NULL DEFAULT 'N',
  `u_id` int(11) NOT NULL,
  `image_name` varchar(80) NOT NULL,
  `price` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `for_sale`
--

INSERT INTO `for_sale` (`ad_id`, `title`, `ad`, `date_posted`, `deleted_yn`, `item_sold_yn`, `u_id`, `image_name`, `price`) VALUES
(16, 'Butterfly', 'butterfly, (superfamily Papilionoidea), any of numerous species of insects belonging to multiple families. Butterflies, along with the moths and the skippers, make up the insect order Lepidoptera. Butterflies are nearly worldwide in their distribution.', '2021-11-30 04:43:41', 'N', 'N', 3, 'image_61a5abfda397b.jpg', 5.00),
(17, 'Horse', 'Horses and humans have an ancient relationship. Asian nomads probably domesticated the first horses some 4,000 years ago, and the animals remained essential to many human societies until the advent of the engine. Horses still hold a place of honor in many cultures, often linked to heroic exploits in war.', '2021-11-30 04:52:13', 'N', 'N', 3, 'image_61a5adfd5562a.jpg', 123.00),
(19, 'Bear', 'Bears are carnivoran mammals of the family Ursidae. They are classified as caniforms, or doglike carnivorans. Although only eight species of bears are extant, they are widespread, appearing in a wide variety of habitats throughout the Northern Hemisphere and partially in the Southern Hemisphere. Bears are found on the continents of North America, South America, Europe, and Asia. Common characteristics of modern bears include large bodies with stocky legs, long snouts, small rounded ears, shaggy hair, plantigrade paws with five nonretractile claws, and short tails.', '2021-11-30 04:57:19', 'N', 'N', 3, 'image_61a5af2f11b5c.jpg', 450.00),
(20, 'Bird', 'Birds are a group of warm-blooded vertebrates constituting the class Aves /ËˆeÉªviËz/, characterised by feathers, toothless beaked jaws, the laying of hard-shelled eggs, a high metabolic rate, a four-chambered heart, and a strong yet lightweight skeleton. Birds live worldwide and range in size from the 5.5 cm (2.2 in) bee hummingbird to the 2.8 m (9 ft 2 in) ostrich. There are about ten thousand living species, more than half of which are passerine, or \\&#34;perching\\&#34; birds. Birds have wings whose development varies according to species; the only known groups without wings are the extinct moa and elephant birds. Wings, which evolved from forelimbs, gave birds the ability to fly, although further evolution has led to the loss of flight in some birds, including ratites, penguins, and diverse endemic island species. The digestive and respiratory systems of birds are also uniquely adapted for flight. Some bird species of aquatic environments, particularly seabirds and some waterbirds, have further evolved for swimming.', '2021-12-09 07:19:38', 'N', 'Y', 3, 'image_61a5b16e32f97.jpg', 100.00),
(21, 'Dog', 'The dog or domestic dog, (Canis familiaris[4][5] or Canis lupus familiaris[5]) is a domesticated descendant of the wolf which is characterized by an upturning tail. The dog derived from an ancient, extinct wolf,[6][7] and the modern grey wolf is the dog\\&#39;s nearest living relative.[8] The dog was the first species to be domesticated,[9][8] by hunterâ€“gatherers over 15,000 years ago,[7] before the development of agriculture.[1]', '2021-11-30 05:09:19', 'N', 'N', 3, 'image_61a5b1fedf59a.jpg', 220.99),
(22, 'Elk', 'The elk (Cervus canadensis), also known as the wapiti, is one of the largest species within the deer family, Cervidae, and one of the largest terrestrial mammals in its native range of North America, Central and East Asia. It is often confused with the larger Alces alces, which is called moose in North America, but called elk in British English, and related names in other European languages (German Elch, Swedish Ã¤lg, French Ã©lan). The name \\&#34;wapiti\\&#34; is used in Europe for Cervus canadensis. It originates from the Shawnee and Cree word waapiti, meaning \\&#39;white rump\\&#39;.', '2021-11-30 05:13:33', 'N', 'N', 3, 'image_61a5b2fd607e4.jpg', 800.87),
(23, 'Goats', 'The goat is a member of the animal family Bovidae and the subfamily Caprinae, meaning it is closely related to the sheep. There are over 300 distinct breeds of goat. It is one of the oldest domesticated species of animal, according to archaeological evidence that its earliest domestication occurred in Iran at 10,000 calibrated calendar years ago.', '2021-11-30 05:16:44', 'N', 'N', 3, 'image_61a5b3bc03eb5.jpg', 189.83),
(24, 'Landscape painting', 'The term comes from the Dutch word landschap, the name given to paintings of the countryside. Geographers have borrowed the word from artists. Although landscape paintings have existed since ancient Roman times (landscape frescoes are present in the ruins of Pompeii), they were reborn during the Renaissance in Northern Europe. Painters ignored people or scenes in landscape art, and made the land itself the subject of paintings. Famous Dutch landscape painters include Jacob van Ruisdael and Vincent van Gogh.', '2021-11-30 05:30:40', 'N', 'N', 21, 'image_61a5b6ffc232e.jpg', 350.45),
(25, 'Technology', 'The simplest form of technology is the development and use of basic tools. The prehistoric invention of shaped stone tools followed by the discovery of how to control fire increased sources of food. The later Neolithic Revolution extended this, and quadrupled the sustenance available from a territory. The invention of the wheel helped humans to travel in and control their environment.\\r\\n\\r\\nDevelopments in historic times, including the printing press, the telephone, and the Internet, have lessened physical barriers to communication and allowed humans to interact freely on a global scale.', '2021-11-30 05:33:11', 'N', 'N', 21, 'image_61a5b7975c2f3.jpg', 859.90),
(26, 'Wall Design', 'When it comes to small-space decorating, the common advice is to go all-white on the walls to reflect the most light and make the space feel bigger. This theory made sense to me when I first heard it, and is a great way to brighten a room, but after painting my fatherâ€™s entryway grey, Iâ€™ve begun to appreciate the value of darker walls in small rooms. While white is an easy and versatile base, the way that light interacts with white can be very static â€” there are no subtleties in its hue because it reflects all the colors at once. This is where the dynamic color of a dark shade gets interesting: as the light in a room changes throughout the day, so does a dark wall color. Even black can have cool or warm undertones.', '2021-11-30 05:35:44', 'N', 'N', 21, 'image_61a5b82f91085.jpg', 58.85),
(27, 'Fashion', 'Fashion is a form of self-expression and autonomy at a particular period and place and in a specific context, of clothing, footwear, lifestyle, accessories, makeup, hairstyle, and body posture.[1] The term implies a look defined by the fashion industry as that which is trending. Everything that is considered fashion is available and popularized by the fashion system (industry and media).', '2021-11-30 05:37:14', 'N', 'N', 21, 'image_61a5b88a16965.jpg', 545.89),
(28, 'Friends', 'Friends is an American television sitcom created by David Crane and Marta Kauffman, which aired on NBC from September 22, 1994, to May 6, 2004, lasting ten seasons.[1] With an ensemble cast starring Jennifer Aniston, Courteney Cox, Lisa Kudrow, Matt LeBlanc, Matthew Perry and David Schwimmer, the show revolves around six friends in their 20s and 30s who live in Manhattan, New York City. The series was produced by Bright/Kauffman/Crane Productions, in association with Warner Bros. Television. The original executive producers were Kevin S. Bright, Kauffman, and Crane.', '2021-11-30 05:38:11', 'N', 'N', 21, 'image_61a5b8c2970fa.jpg', 1500.99),
(29, 'Friends', 'Friends is an American television sitcom created by David Crane and Marta Kauffman, which aired on NBC from September 22, 1994, to May 6, 2004, lasting ten seasons.[1] With an ensemble cast starring Jennifer Aniston, Courteney Cox, Lisa Kudrow, Matt LeBlanc, Matthew Perry and David Schwimmer, the show revolves around six friends in their 20s and 30s who live in Manhattan, New York City. The series was produced by Bright/Kauffman/Crane Productions, in association with Warner Bros. Television. The original executive producers were Kevin S. Bright, Kauffman, and Crane.', '2021-11-30 06:14:09', 'N', 'N', 21, 'image_61a5c131597ef.jpg', 1500.99),
(40, 'edit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate deserunt ducimus nam assumenda rerum! Facere ducimus mollitia illo asperiores! Ea debitis eos reprehenderit! Error deserunt sit delectus laudantium soluta exercitationem', '2021-12-05 20:04:41', 'N', 'Y', 18, 'image_61ad1b22e24f1.jpg', 3.00),
(41, 'webp', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate deserunt ducimus nam assumenda rerum! Facere ducimus mollitia illo asperiores! Ea debitis eos reprehenderit! Error deserunt sit delectus laudantium soluta exercitationem', '2021-12-05 19:59:27', 'N', 'N', 18, 'image_61ad1a1f9f689.webp', 52.26),
(42, 'png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate deserunt ducimus nam assumenda rerum! Facere ducimus mollitia illo asperiores! Ea debitis eos reprehenderit! Error deserunt sit delectus laudantium soluta exercitationem', '2021-12-05 20:05:09', 'N', 'Y', 18, 'image_61ad1a2baeee0.png', 54.00),
(43, 'happy', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate deserunt ducimus nam assumenda rerum! Facere ducimus mollitia illo asperiores! Ea debitis eos reprehenderit! Error deserunt sit delectus laudantium soluta exercitationem', '2021-12-05 20:06:17', 'N', 'N', 18, 'image_61ad1bb9ed576.jpg', 5.00),
(44, 'Fashion', 'hen it comes to small-space decorating, the common advice is to go all-white on the walls to ref...', '2021-12-09 05:02:05', 'N', 'N', 3, 'image_61b18dcd7d661.jpg', 34.00),
(45, 'dfg', 'dfdfdfdfdfdasdsadsdsdsd', '2022-03-21 05:26:18', 'N', 'N', 22, 'image_62380c7aa457c.png', 45.00),
(46, 'dfg', 'dfdfdfdfdfdasdsadsdsdsd', '2022-03-21 05:28:55', 'N', 'N', 22, 'image_62380d171959a.png', 45.00),
(47, 'fvbcbdbfc', 'cdfbgbfgggggggggggggggg', '2022-03-21 05:30:27', 'N', 'N', 22, 'image_62380d73d45f5.jpg', 3.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `for_sale`
--
ALTER TABLE `for_sale`
  ADD PRIMARY KEY (`ad_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `for_sale`
--
ALTER TABLE `for_sale`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
