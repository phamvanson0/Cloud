-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2024 at 03:50 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloud`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Cat_ID` varchar(10) NOT NULL,
  `Cat_Name` varchar(30) NOT NULL,
  `Cat_Des` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cat_ID`, `Cat_Name`, `Cat_Des`) VALUES
('1', 'LEGO', 'LEGO is a line of plastic construction toys featuring interlocking bricks, minifigures, and various accessories. They can be assembled into different shapes such as vehicles, buildings, and more. LEGO comes in various themes and is beloved by both children and adults for its creativity and problem-solving capabilities.'),
('10', 'Remote Control &amp; Electroni', 'Encompasses toys such as remote-controlled cars, drones, robots, and other electronic entertainment devices.'),
('2', 'Barbie Doll', ' Barbie is a popular fashion doll made by Mattel, Inc., introduced in 1959. Loved by children and collectors, Barbie comes with various accessories and outfits, inspiring imaginative play and creativity.'),
('3', 'Action Figures &amp; Playsets', 'Includes collections of action figures from movies, comics, or video games, along with accompanying playsets for creating interactive battles and adventures.'),
('4', 'Dolls &amp; Accessories', 'Encompasses various types of dolls from character dolls to historical dolls, along with accessories like clothing, toys, and household items.'),
('5', 'Educational Toys', 'Toys designed to help children learn and develop skills, from problem-solving to building scientific and mathematical knowledge.'),
('6', 'Building Blocks &amp; Construc', 'Toys that allow children to practice building, creativity, and logic skills through assembling and constructing with blocks and parts.'),
('7', 'Outdoor Play Equipment', 'Includes toys such as bicycles, skateboards, slides, seesaws, and other outdoor play equipment that promote physical activity and health.'),
('8', 'Arts &amp; Crafts Supplies', 'Includes products like colored pencils, watercolors, paper, and other materials for children to express their creativity and artistic abilities.'),
('9', 'Board Games &amp; Puzzles', 'Various games such as chess, checkers, sudoku, and other puzzle games that develop logical thinking and strategic skills.');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` varchar(10) NOT NULL,
  `Product_Name` varchar(60) NOT NULL,
  `Price` bigint(20) NOT NULL,
  `oldPrice` decimal(12,2) NOT NULL,
  `SmallDesc` varchar(1000) NOT NULL,
  `DetailDesc` text NOT NULL,
  `ProDate` datetime NOT NULL,
  `Pro_qty` int(11) NOT NULL,
  `Pro_image` varchar(200) NOT NULL,
  `Cat_ID` varchar(10) NOT NULL,
  `StaName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Product_Name`, `Price`, `oldPrice`, `SmallDesc`, `DetailDesc`, `ProDate`, `Pro_qty`, `Pro_image`, `Cat_ID`, `StaName`) VALUES
('1', '3D Mentail', 1920000, '0.00', ' LEGO is a renowned building toy brand, allowing players to creatively construct structures and models using interlocking plastic bricks.', '<p>\r\n	LEGO is a beloved brand of construction toys known for its interlocking bricks that allow endless creativity. With sets catering to all ages and interests, LEGO fosters imagination, problem-solving, and fun for builders worldwide.</p>\r\n', '2024-03-30 08:47:52', 10, '3DMetail.png', '1', 'Pham Van Son'),
('2', 'MP-44 Optimus Prime Convoy 3.0 ', 2950000, '0.00', 'Leader of the Autobots', '<p>\r\n	The greatest leader of the Autobots and the greatest hero to every child who has seen him. Produced by Takara Tomy</p>\r\n', '2024-03-30 08:48:10', 10, 'MP-44 Optimus Prime Convoy 3.0 Takara Tomy.png', '1', 'Pham Van Son'),
('3', 'OmegaSupremeWFC', 2500000, '0.00', 'Omega Supreme (WFC) is a formidable and iconic character in the War for Cybertron series. With immense strength and superior combat abilities, Omega Supreme stands as a symbol of authority and power on the battlefield.', '<p>\r\n	Omega Supreme is a towering figure in the War for Cybertron series, renowned for his immense strength and unwavering resolve. As a loyal defender of Cybertron, Omega Supreme stands as a beacon of hope against the Decepticon threat. With his formidable arsenal and indomitable spirit, he is a force to be reckoned with on the battlefield, inspiring awe and admiration among allies and enemies alike.</p>\r\n', '2024-03-30 07:51:22', 5, 'OmegaSupremeWFC.jpg', '1', 'Pham Van Son'),
('4', 'Pagani Utopia', 30000000, '0.00', 'Hypercar fans can enjoy countless play possibilities with this Pagani Utopia model with driver minifigure.', '<p>\r\n	<span style=\"color: rgb(0, 0, 0); font-family: &quot;Cera Pro&quot;, sans-serif; font-size: 18px;\">Kids aged 9+ can play out action-packed adventures with this brick-built hypercar that includes a driver minifigure.</span></p>\r\n', '2024-03-30 17:42:28', 5, 'pagani.png', '1', 'Pham Van Son');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `StaName` varchar(30) NOT NULL,
  `gender` int(11) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `StaDate` int(11) NOT NULL,
  `StaMonth` int(11) NOT NULL,
  `StaYear` int(11) NOT NULL,
  `SSN` varchar(10) NOT NULL,
  `ActiveCode` varchar(100) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Username`, `Password`, `StaName`, `gender`, `Address`, `telephone`, `email`, `StaDate`, `StaMonth`, `StaYear`, `SSN`, `ActiveCode`, `state`) VALUES
('son', '1885e46b0ec4e787fad11754c7319b50', 'phamvanson', 0, 'Ben Tre', '+84 969662527', 'son@gmail', 29, 4, 2002, '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `Sto_ID` varchar(10) NOT NULL,
  `Sto_Name` varchar(60) NOT NULL,
  `Sto_Address` varchar(1000) NOT NULL,
  `Product_Name` varchar(60) NOT NULL,
  `Pro_qty` int(11) NOT NULL,
  `StaName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`Sto_ID`, `Sto_Name`, `Sto_Address`, `Product_Name`, `Pro_qty`, `StaName`) VALUES
('1', 'Pham Van Son', 'Ben Tre City', '', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `Su_ID` varchar(10) NOT NULL,
  `Su_Name` varchar(30) NOT NULL,
  `Su_Address` varchar(1000) NOT NULL,
  `Su_Des` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`Su_ID`, `Su_Name`, `Su_Address`, `Su_Des`) VALUES
('01', 'MYKINHDOM', '33-35 Street D4, Him Lam New Urban Area, Tan Hung Ward, District 7, City. Ho Chi Minh', 'Largest domestic and foreign supplier'),
('2', 'SkyNext ', '429 Ho Thi Huong, TP Long Khanh, Dong Nai', 'The unit specializes in providing solution packages, comprehensive consulting, design and construction of children&#039;s play area projects.'),
('3', 'LEGO', 'Canada', 'LEGO System A/S, DK-7190 Billund, Denmark. Must be 18 years or older to purchase online. LEGO and the LEGO logo are trademarks of the LEGO Group'),
('4', 'Happy Intellect Toys Joint Sto', 'Lot A2, Duong Dinh Nghe Street, High-Tech Zone, District 9, Ho Chi Minh City', 'Happy Intellect Toys JSC specializes in producing and distributing intelligent toys, skill-building toys, and educational toys. Their commitment lies in providing both enjoyable and educational experiences for children, aiding in the enhancement of logical, creative, and social skills.'),
('5', 'Joyful Playthings Vietnam Co.,', '25 Tran Hung Dao Street, Ward 3, Vung Tau City', 'Joyful Playthings Vietnam Co., Ltd is known for its wide array of toys catering to different age groups and interests. They offer toys ranging from traditional playthings to modern interactive gadgets, with an emphasis on providing joy and entertainment while nurturing children&#039;s growth and development.'),
('6', 'Smart Minds Toys Trading Compa', '56 Le Loi Street, Da Nang City', 'Smart Minds Toys Trading Company specializes in supplying educational toys and games that promote cognitive development, problem-solving skills, and creativity in children. Their products are carefully curated to align with educational goals while ensuring fun and engaging experiences for young learners.'),
('7', 'Wonderful World Toy Store', '18 Nguyen Hue Street, Hanoi', 'Wonderful World Toy Store offers a diverse selection of high-quality toys sourced from both local and international manufacturers. From classic toys to the latest trends, they aim to provide customers with a magical shopping experience while catering to the diverse needs and preferences of children and families.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Cat_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `Cat_ID` (`Cat_ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`Sto_ID`),
  ADD KEY `Product_Name` (`Product_Name`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`Su_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
