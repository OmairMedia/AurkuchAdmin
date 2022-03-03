-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2019 at 05:13 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soluction_property`
--

-- --------------------------------------------------------

--
-- Table structure for table `e_adds`
--

CREATE TABLE `e_adds` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `from_date` varchar(200) NOT NULL,
  `to_date` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `diraction` varchar(100) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_adds`
--

INSERT INTO `e_adds` (`id`, `name`, `from_date`, `to_date`, `image`, `diraction`, `link`) VALUES
(1, 'GULBERG ISLAMABAD', '2018-06-20', '2018-06-28', '1529497485448garden_city_new_booking.jpg', 'bottom_left', ''),
(2, 'GULBERG ISLAMABAD', '2018-06-23', '2018-06-30', '152949750260450x100_Rose_Garden_Phase_8.jpg', 'bottom_right', 'nmcgnxcghhx'),
(3, 'Bahria Garden City New Booking', '2018-08-03', '2018-09-07', '1529497154956garden_city_new_booking.jpg', 'top', 'https://www.advice.pk/About_us.php');

-- --------------------------------------------------------

--
-- Table structure for table `e_admin`
--

CREATE TABLE `e_admin` (
  `userid` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(44) NOT NULL,
  `status` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(15) NOT NULL,
  `duties` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `e_admin`
--

INSERT INTO `e_admin` (`userid`, `name`, `username`, `password`, `status`, `email`, `role`, `duties`, `image`, `createdon`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Active', 'zahidnashi@hotmail.com', 'Admin', 'Add,Edit,Del', '1529735867800advice_logo.png', '2011-12-27 01:52:22');

-- --------------------------------------------------------

--
-- Table structure for table `e_careers`
--

CREATE TABLE `e_careers` (
  `id` int(5) NOT NULL,
  `title` varchar(200) NOT NULL,
  `type` enum('full','part') NOT NULL,
  `exp` int(11) NOT NULL,
  `displayorder` smallint(5) NOT NULL DEFAULT '0',
  `details` text,
  `posteddate` varchar(256) DEFAULT NULL,
  `duedate` varchar(256) NOT NULL,
  `display` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `e_careers`
--

INSERT INTO `e_careers` (`id`, `title`, `type`, `exp`, `displayorder`, `details`, `posteddate`, `duedate`, `display`) VALUES
(1, 'ndkcndckndck', 'full', 2, 2, '<p>sbjdbjsbjd</p>', '19-10-2017', '23-05-2017', 'yes'),
(14, 'Seo Expert', 'full', 1, 1, '<p>Falcon Express (Pvt.) Ltd now have started visa assistance services and tour packages for Singapore, Malaysia &amp; Thailand or click the appropriate link on our website. For More information and details please contact (051) 111 786 280 or Mobile 0304 1117860.</p>', '08-05-2017', '23-06-2017', 'yes'),
(19, 'Web Designer', '', 0, 4, '<p>Waqas Hakeem</p>', '2017-05-08', '', 'yes'),
(20, 'Php Intern', '', 0, 3, '<p>Qaisar</p>', '08-05-2017', '', 'yes'),
(21, 'Project Manager', 'part', 8, 5, '<p>Project Manager</p>', '08-05-2017', '29-06-2017', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `e_category`
--

CREATE TABLE `e_category` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `pagetitle` varchar(250) NOT NULL,
  `keywords` varchar(250) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `discription` varchar(250) NOT NULL,
  `displayorder` int(50) NOT NULL,
  `details` text NOT NULL,
  `display` enum('yes','no') NOT NULL,
  `parent_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `map` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_category`
--

INSERT INTO `e_category` (`id`, `name`, `slug`, `pagetitle`, `keywords`, `heading`, `discription`, `displayorder`, `details`, `display`, `parent_id`, `image`, `map`) VALUES
(6, 'Phase 1 to 7', 'Phase-1-to-7', '  Phase 1 to 7', 'Phase 1 to 7', 'Phase 1 to 7', 'Phase 1 to 7', 1, '<p style=\"text-align: justify;\"><strong>Bahria Town Phase 1 - 7 Islamabad&nbsp;</strong><br />\r\nBahria Town Phase1 to 7 Islamabad Pakistan<br />\r\nBahria Town Phase 1-7 Includes many plots various size. Being the earliest projects, Phase 1 to 7 have benefited from all the following developments of bahria with every new idea in landscaping, every new monument design and creation of possibilities with the import of most modern machinery phase 1 to 7 have been value added with Awe - Inspiring Landscape Island ,Pagodas, Village Scenes and thoughtful monuments.People are enjoying a truly luxurious in phase 1 to 7. School, Mosques, Mini Golf Club course, mini forumula one racing track, horse.Rinding club, opera theatre makes these phases the ideal residential socities.Project of phase 1 to 7 received a great response form the market by both the residents and investors. Many more houses are under construction and most memeber are eager to shift to their new houses.<br />\r\nProject Type: Master Planned Community Development.<br />\r\nAvailable: Residential plots in various sizes.<br />\r\nProject Status: Completed &amp; delivered. Many families already living there and with the new leisure and commercial centers many more houses are under construction.<br />\r\nPlot size: 250, 500 Sq. Yards<br />\r\n<strong>Facilities:</strong><br />\r\nCommercial Area: Heralds Super Store, Standard Chartered Bank, KASB Bank,Mezan Bank ,zoo</p>\r\n<ul>\r\n	<li style=\"text-align: justify;\">Parks</li>\r\n	<li style=\"text-align: justify;\">School</li>\r\n	<li style=\"text-align: justify;\">Mosques</li>\r\n	<li style=\"text-align: justify;\">Mini Golf Course</li>\r\n	<li style=\"text-align: justify;\">Mini Formula One racing Track</li>\r\n	<li style=\"text-align: justify;\">Horse Riding Club</li>\r\n	<li style=\"text-align: justify;\">Opera Theatre</li>\r\n</ul>\r\n', 'yes', 2, '1532705171840122571529496011.jpg', '153270500642download.jpg'),
(7, 'Phase 8', 'Phase-8', '   Phase 8', 'Phase 8', 'Phase 8', 'Phase 8', 2, '<p><strong>Bahria Town Phase 8 Rawalpindi Pakistan</strong><br />\r\nBAHRIA TOWN PHASE 8 INCLUDES RESIDENTIAL AND COMMERCIAL PLOTS OF VARIOUS SIZES.BAHRIA TOWN HAS INTEGRATED THE MAIN ROAD NETWORK OF PHASE 8 WITH THE MAIN ROAD PROJECTIONS OF DHA PHASES 1 TO 3,MASTER PLANNING AT ITS VERY PEAK.AN EXCLUSIVE EXPRESS WAY CONNECTS THE MASTER PLANNED COMMUNITIES TO THE G.T.ROAD IN 5 MINUTES.THIS ACCESS IS PROVIDED QUICK ACCESS TO THE RESIDENTS OF DHA,AND DOWN TOWN OF RAWALPINDI.EXISTING WATER WAYS AND PARKS ENHANCES THE HOUSING ENVIRONMENT.ADJACENT TO PHASE 8 ,AN INTERNATIONAL STANDARD 18 HOLE GOLF COURSE IS SITUATED.<br />\r\nAvailable:Residential plots in various sizes<br />\r\nPlot size: 5, 7, 10 &amp; 20 Marla<br />\r\n<strong>Facilities:</strong></p>\r\n<ul>\r\n	<li>160 Main Boulevard designed on the pattern of Champs Elyees with high rise</li>\r\n	<li>Mixed use Commercial buildings</li>\r\n	<li>State of the art Urban, planning and Engineering design</li>\r\n	<li>Fully carpeted 160&rsquo;, 120&rsquo;, 80&rsquo;, 60&rsquo; and 50&rsquo; wide road network</li>\r\n	<li>Footpath along all Main Boulevard and internal roads</li>\r\n	<li>Underground electrification system with grid station.</li>\r\n	<li>Sewage system with sewage treatment plants.</li>\r\n	<li>Independent storm water drainage system.</li>\r\n	<li>24 Hours water supply system with overhead water reservoirs.</li>\r\n	<li>Most modern and state of the art security system with companies own security guard.</li>\r\n	<li>Cable TV and Internet services.</li>\r\n	<li>International standard community facilities including primary, secondary Schools, colleges, university, library, sports complex, club house, hospitals and the Mini Golf Course.</li>\r\n	<li>Extensive plantations and horticulture works in green belts and along road sides.</li>\r\n	<li>Gardens, green areas, play areas in each block.</li>\r\n	<li>Grand Jamia mosque and spacious sector mosques.</li>\r\n	<li>Commercial areas planned on international standards with ample parking facility.</li>\r\n	<li>Beautiful lakes for rowing and boating.</li>\r\n	<li>Police Station, Post Office, Fire Station, Bus Terminal and Telephone Exchange.</li>\r\n	<li>Lifetime maintenance by Bahria Town Pvt. Limited.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 'yes', 2, '1532705200385414561526722860.jpg', '1532705029847download.jpg'),
(9, 'Bahria Orchard', 'Bahria-Orchard', '   Bahria Orchard', 'Bahria Orchard', 'BAHRIA ORCHARD RAWALPINDI', 'Bahria Orchard', 3, '<p style=\"text-align: justify;\">In Bahria orchard all residential and commercial plots are now available in resale only. size of Residential plots are 5 Marla ( 25x45feet ) , 8 Marla (30 x 60),10 Marla (35 x 70 feet Marla and 1 Kanal (50x90). In commercial area of bahria orchard, sizes of plots are 5 marla (30x40 ) and 8 marla (40x45 ).Prices of plots are very reasonable So, it is a Best investment opportunity in bahria Town . It is adjacent to Phase 8 sector F4,10 km away from Main GT road. Availability : Residential plots categories are 5 Marla 125 yards 8 Marla) and 10 Marla 250 yards) . Facilities . Park , commercial , school , Masjad Development work is already started and you can physically visit the location before you book your plot in Bahria Orchard Numbers of Plots size 5 marla are 2500. Total numbers of 8 marla plots are120 plots. and Total plots in kanal category are 365 plots . Total plots in Bahria orchard are 2800 plots. project completion 2 years</p>', 'yes', 2, '1532705086163122571529496011.jpg', '1532704972247download.jpg'),
(10, 'Phase 8 Extention', 'Phase-8-Extention', '   Phase 8 Extention', 'Phase 8 Extention', 'Bahria Phase 8 Extention Rawalpindi', 'Phase 8 Extention', 4, '<p style=\"text-align: justify;\"><strong>Bahria Town Phase 8 Extention Rawalpindi</strong><br />\r\nPhase 8 extension is a good project for investment in bahria town.it is situated near Awami villa sector 3,.This project is divided into 6 sectors.In future Ring Road will connect Rawalpindi to phase 8 extension .Residential plot sizes in phase 8 extension are 5,8,10 marla and 1 kanalplots are available on cash only.In future All facilities like parks,hospitals ,Golf course,hosipal etc .will be available here.Road size is minimum 40 feet wide and maximum 110 feet wide.<br />\r\nIt&#39;s never too late to get the best. Phase-8 Extension, now offers you to be the part of the most modern community in Rawalpindi.&nbsp;<br />\r\nLocation: Adjacent to Phase-8 Block N and in close promixity to fully developed residential communities of Bahria Awami villas sector 3 and Adyala Rawat Road..</p>', 'yes', 2, '1532705255835122571529496011.jpg', '1532705016634download.jpg'),
(11, 'Bahria Rose Garden', 'Bahria-Rose-Garden', '  Bahria Rose Garden', 'Bahria Rose Garden', 'Bahria Town Phase 8 Rawalpindi Rose Garden', 'Bahria Rose Garden', 5, '<p style=\"text-align: justify;\">Bahria Rose Garden is newly announced Project by Bahria Town management . Bahria Rose Garden is located in Phase 8 Bahria Town Rawalpindi and near to Awami apartment sector 3. Bahria Rose Garden Plot sizes available are 5 marla coming approx 30 x 40.Height location of Bahria Rose Garden is key feature of the project. Plots are available only on cash plan package. Total Plots in Bahria Rose Garden Bahria Town are 250-300 plots are available on site map. Rose Garden City Bahria Town is possession and developed project where you can built your dream house straight away.Bahria Rose Garden is very good project for short term investment with good returns on investment or building for home.Bahria Rose Garden is 7 Km away from Main GT Road (Grand Trunk Road). For more details and booking please contact us.</p>', 'yes', 2, '1532705144734122571529496011.jpg', '1532704983152download.jpg'),
(12, 'Intellectual Village', 'Intellectual Village', '  Intellectual Village', 'Intellectual Village', 'Bahria Town Phase 8 Rawalpindi Rose Garden', 'Intellectual Village', 6, '<p style=\"text-align: justify;\">Bahria Rose Garden is newly announced Project by Bahria Town management . Bahria Rose Garden is located in Phase 8 Bahria Town Rawalpindi and near to Awami apartment sector 3. Bahria Rose Garden Plot sizes available are 5 marla coming approx 30 x 40.Height location of Bahria Rose Garden is key feature of the project. Plots are available only on cash plan package. Total Plots in Bahria Rose Garden Bahria Town are 250-300 plots are available on site map. Rose Garden City Bahria Town is possession and developed project where you can built your dream house straight away.Bahria Rose Garden is very good project for short term investment with good returns on investment or building for home.Bahria Rose Garden is 7 Km away from Main GT Road (Grand Trunk Road). For more details and booking please contact us.</p>', 'yes', 2, '1532705330309122571529496011.jpg', '1532704993210download.jpg'),
(13, 'Bahria Town Commercial', 'Bahria-Town-Commercial', ' Bahria Town Commercial', 'Bahria Town Commercial', 'Bahria Commercial', 'Bahria Town Commercial', 7, '<p>Project: Attraction:Most Luxurious Planned Development.<br />\r\nProject Type: Exclusive community of 2 , 5, 8, 10 Marla commercial plots.</p><p><strong>Project Features:</strong></p>\r\n<ul>\r\n	<li>5 Star Hotel &amp; Spa</li>\r\n	<li>Restaurants</li>\r\n	<li>Parks &amp; Zoo</li>\r\n	<li>CineGold Plex Cinema</li>\r\n	<li>Commercial Areas</li>\r\n	<li>International Standard School &amp; Hospital</li>\r\n	<li>Great Jamiah Mosque</li>\r\n	<li>100 feet wide roads, landscaped with Green Belts &amp; Footpaths</li>\r\n	<li>Complete Gated Community</li>\r\n	<li>Underground Provision of Electricity, Gas &amp; Water</li>\r\n</ul>\r\n', 'yes', 2, '1532705567297122571529496011.jpg', '1532705567460download.jpg'),
(14, 'Bahria Greens', 'Bahria-Greens', 'Bahria Greens', 'Bahria Greens', 'Bahria Greens (Overseas Enclave) Rawalpindi', 'Bahria Greens', 8, '<p style=\"text-align: justify;\"><strong>BAHRIA TOWN OVERSEAS ENCLAVE (BAHRIA GREENS) RAWALPINDI</strong><br />\r\n<strong>Vision of a splendid Life style Own your dream house in Rawalpindi/Islamabad</strong><br />\r\nBahria Town presents a new innovation in life style residential plots &lsquo;Bahria Greens&rsquo;. International standard 5, 10 marla and 1 Kanal residential plots. Linked with DHA Islamabad Phase 1. Expressway (120 feet wide) runs at its the north connecting it to GT Road and other master planned communities of Bahria Town.<br />\r\nPlots ready for immediate possession<br />\r\nFacility to choose from master plan<br />\r\n<strong>Notable Features:</strong></p>\r\n<ul>\r\n	<li style=\"text-align: justify;\">Linked with GT Road through Express Way</li>\r\n	<li style=\"text-align: justify;\">Fully functional School, Mosque and Hospital</li>\r\n	<li style=\"text-align: justify;\">Best infrastructure with Bahria Towns state of the art life style facilities</li>\r\n	<li style=\"text-align: justify;\">24/7 Security and Maintenance</li>\r\n	<li style=\"text-align: justify;\">Commercial Areas</li>\r\n	<li style=\"text-align: justify;\">Underground electricity, phone and gas connection</li>\r\n	<li style=\"text-align: justify;\">Community center, Gym and Cricket stadium</li>\r\n</ul>\r\n', 'yes', 2, '1532705949682122571529496011.jpg', '1532705949651download.jpg'),
(15, 'Safari Valley', 'Safari-Valley', 'Safari Valley', 'Safari Valley', 'Bahria Town Safari Valley Rawalpindi', 'Safari Valley', 9, '<p style=\"text-align: justify;\"><strong>Bahria Town Safari Valley Rawalpindi</strong><br />\r\nSafari valley Bahria Town Rawalpindi 5 to 7 marla residential plots for sale in Umer block, Usman block, Ali block, Abu Bakar Rafi and Khalid block. The streets are 30 to 40 feet wide and the main roads are 65, 70, 80, 100 to 160 feet wide. These blocks contain Commercial hub, Mosque, School, Public places and community centers. The whole valley is surrounded by greenery and eye catching sights. So don&rsquo;t be late plots are being sold on first come first serve bases. Ideal location which starts from phase 8 and joins with the GT Road passing through overseas enclave and express way. Safari valley is located at 5 KM distance from GT Road and Islamabad International airport is 15 minutes&rsquo; drive away from Safari Valley. Safari contains more than ten thousand plots, where the development is prevailing rapidly. So come and join in this new lifestyle, we are always here to guide you.<br />\r\n<strong>Facilities:</strong></p>\r\n<ul>\r\n	<li style=\"text-align: justify;\">Mosques</li>\r\n	<li style=\"text-align: justify;\">Parks</li>\r\n	<li style=\"text-align: justify;\">Bus Terminal</li>\r\n	<li style=\"text-align: justify;\">Commercial Areas</li>\r\n	<li style=\"text-align: justify;\">Commercial Hub</li>\r\n	<li style=\"text-align: justify;\">Shopping malls with ample parking</li>\r\n	<li style=\"text-align: justify;\">Central mosque</li>\r\n	<li style=\"text-align: justify;\">Clubs</li>\r\n	<li style=\"text-align: justify;\">Hospitals</li>\r\n</ul>\r\n', 'yes', 2, '1532706232739122571529496011.jpg', '1532706232958download.jpg'),
(16, 'Bahria hamlets', 'Bahria-hamlets', '  Bahria hamlets', 'Bahria hamlets', 'Bahria hamlets', 'Bahria hamlets', 10, '<p style=\"text-align: justify;\"><br />\r\nThe Bahria Hamlet is just 25 minutes from Islamabad International Airport ,Ideally located on Japan Road adiacent to Bahria Garden city zone 9 Islamabad,Safari valley Umer and Khalid block , Phase8 block P Bahria Hamlets Size of Plots Are 10 Marla (250 Sq Yard) 20 Marla (500 Sq Yard) Street Size 50 Ft Wide. Residential Area 60 % ,Commercial 20 % Park &amp;Green Area 20 %. Easy Access Through Safari Vallay Umer Block Also Approach Through Japan Road Phase 8 . Limited Plots Are Available Plot on Cash Price Only And Ready To Live. Price are Very Reasonable And Gold Time For Investment Form Short Time and Build Your Home In Height View Community .2 Km Distance From Begum Akhtar Rurksana Memorial Hospital Same Distance of Dr .A.Q Khan Science School And Collage<br />\r\n<strong>Facilities:</strong></p><p style=\"text-align: justify;\">State of the art Urban, planning and Engineering design<br />\r\nFully carpeted , 80&rsquo;, 60&rsquo; and 50&rsquo; wide road network Footpath along all Main Boulevard and internal roads<br />\r\nUnderground electrification system with grid station<br />\r\nSewage system with sewage treatment plants<br />\r\nIndependent storm water drainage system<br />\r\n24 Hours water supply system with overhead water reservoirs<br />\r\nMost modern and state of the art security system with companies own security guard<br />\r\nInternational standard community facilities including primary, secondary Schools, colleges<br />\r\nExtensive plantations and horticulture works in green belts and along road sides<br />\r\nGardens, green areas, play areas.,Jamia mosque Commercial areas planned on international standards with ample parking facility</p>\r\n<ul>\r\n	<li style=\"text-align: justify;\">Beautiful lakes for rowing and boating</li>\r\n	<li style=\"text-align: justify;\">Police Station, Post Office, Fire Station, Bus Terminal and Telephone Exchange Lifetime maintenance by Bahria Town Pvt. Limited</li>\r\n</ul>\r\n', 'yes', 2, '1532706444392122571529496011.jpg', '1532706445593download.jpg'),
(17, 'Garden City', 'Garden-City', 'Garden City', 'Garden City', 'Bahria Garden City', 'Garden City', 11, '<p><strong>A BAHRIA GARDEN CITY ISLAMABAD</strong><br />\r\nBahria Town presents Bahria Garden City Phase-V a world class Gated Community located at Islamabad best location. 5,8,10 Marlas and 1 Kanal Limited Developed Residential Plots, ready for immediate possession. Development work 100% completed, buy your plot today and start construction of your house.<br />\r\nAvailable:Residential &amp; Commercial plots in various sizes</p><p><strong>Features:</strong></p>\r\n<ul>\r\n	<li>Located at GT road adjacent to DHA phase 2</li>\r\n	<li>Linked with 150 ft. wide road from 3 sides</li>\r\n	<li>Underground electricity, telephone and gas connection</li>\r\n	<li>Commercial Areas</li>\r\n	<li>USGA standard 18 hole Golf Course</li>\r\n	<li>Natural Lakes</li>\r\n	<li>Community Center, Gym and Cricket stadium</li>\r\n	<li>Fully functional School, Mosque and Hospital</li>\r\n	<li>International standard Medical Hospital and College</li>\r\n	<li>24/7 Security and Maintenance</li>\r\n	<li>Uninterrupted Power Supply</li>\r\n</ul>\r\n', 'yes', 2, '1532706770972122571529496011.jpg', '1532706770811download.jpg'),
(18, 'GOLF CITY', 'GOLF-CITY', 'GOLF CITY', 'GOLF CITY', 'Bahria Golf City Murree Express way', 'GOLF CITY', 12, '<p style=\"text-align: justify;\">Golf course resort housing project over the lush green hills of Islamabad. 15 minutes from Diplomatic Enclave, on the new Murree Express Highway Bahria Golf City brings standard golf course with Sheraton Resort, first internationally branded golf resort in Pakistan. New Switzerland is building in Murree express way Islamabad, Pakistan.<br />\r\nLocation: Main Murree Express Highway.</p><p style=\"text-align: justify;\"><strong>Key feature:</strong></p>\r\n<ul>\r\n	<li style=\"text-align: justify;\">Introducing Pakistan&#39;s first golf course resort community 18 Holes USGA Standard Golf Course</li>\r\n	<li style=\"text-align: justify;\">Sheraton 5 star hotel</li>\r\n	<li style=\"text-align: justify;\">Sheraton Golf &amp; Country Club</li>\r\n	<li style=\"text-align: justify;\">Most luxurious planned Development</li>\r\n	<li style=\"text-align: justify;\">International standard Schools</li>\r\n	<li style=\"text-align: justify;\">International standard level Hospital</li>\r\n	<li style=\"text-align: justify;\">Cine Gold Plex Cinema</li>\r\n	<li style=\"text-align: justify;\">100 and 80 feet wide roads</li>\r\n	<li style=\"text-align: justify;\">Complete gated community</li>\r\n	<li style=\"text-align: justify;\">Foolproof 24 hours security with 0% crime rate</li>\r\n	<li style=\"text-align: justify;\">Underground provision of Electricity, Gas and water</li>\r\n	<li style=\"text-align: justify;\">24 hours Electricity supply</li>\r\n</ul>\r\n', 'yes', 2, '153270690791122571529496011.jpg', '1532706908217download.jpg'),
(19, 'Bahria Heights', 'Bahria-Heights', 'Bahria Heights', 'Bahria Heights', 'Bahria Heights', 'Bahria Heights', 13, '<p><br />\r\n<strong>Key feature:</strong></p>\r\n<ul>\r\n	<li>24/7 Security &amp; Maintenance</li>\r\n	<li>Car Parking</li>\r\n	<li>Well Maintained Entrance Foyer &amp; Lobbies</li>\r\n	<li>Vehicle drop off points</li>\r\n	<li>Membership Opportunity At Recreational Facilities And Safari Club</li>\r\n	<li>Concierge Facility At The Reception Lobby Of Each Building</li>\r\n	<li>24 Hour Maintenance</li>\r\n	<li>Household Waste removal</li>\r\n	<li>Common Area Cleaning</li>\r\n	<li>Common Area Landscaping</li>\r\n	<li>Maximum Utilization Of Interior Space</li>\r\n	<li>Central Heating And Cooling System</li>\r\n	<li>on the 210 ft wide Bahria Expressway safari valley phase 8 Rawalpindi.</li>\r\n</ul>\r\n', 'yes', 2, '1532707042547414561526722860.jpg', '1532707042990download.jpg'),
(20, 'Bahria Enclave', 'Bahria-Enclave', 'Bahria Enclave', 'Bahria Enclave', 'Bahria Enclave Islamabad', 'Bahria Enclave', 14, '<p><strong>Project Type:</strong>Exclusive community of 5, 8, 10 Marla &amp; 1, 2, 4 Kanal residential plots &amp; 4, 8 Marla commercial plots.<br />\r\nBahria Enclave Islamabad Possession Started for first Phase<br />\r\nDevelopment done by Bahria Town in a record time of 1 and a half year<br />\r\nMain Approach Road Opened for people - Connecting Bahria Enclave from Kuri Road through Jinnah Avenue<br />\r\nDevelopment work for other phases are in full pace<br />\r\nConstruction at full velocity of School, Mosque, Hospital, Commercial Mall, Restaurant, Park &amp; Zoo<br />\r\n11 Marla Villas are under construction and model villa open for visit<br />\r\nNext phase possessions to be announced shortly<br />\r\n<strong>Location:</strong><br />\r\nConvenient access from Kashmir Highway, Lehtarar Road &amp; Islamabad Highway<br />\r\nLocated near Chak Shahzad, near the Park Road &amp; the Kuri Road<br />\r\n<strong>Features</strong></p>\r\n<ul>\r\n	<li>5 Star Hotel &amp; Spa</li>\r\n	<li>Restaurants</li>\r\n	<li>Parks &amp; Zoo</li>\r\n	<li>CineGold Plex Cinema</li>\r\n	<li>Commercial Areas</li>\r\n	<li>International Standard School &amp; Hospital</li>\r\n	<li>Great Jamiah Mosque</li>\r\n	<li>100 feet wide roads, landscaped with Green Belts &amp; Footpaths</li>\r\n	<li>Complete Gated Community</li>\r\n	<li>Underground Provision of Electricity, Gas &amp; Water</li>\r\n</ul>\r\n', 'yes', 2, '1532707232602122571529496011.jpg', '1532707233164414561526722860.jpg'),
(21, 'Bahria Home Cash', 'Bahria-Home-Cash', 'Bahria Home Cash', 'Bahria Home Cash', 'Bahria House Ready to living', 'Bahria Home Cash', 15, '<p style=\"text-align: justify;\">Houses are not built everyday here comes yet another revolutionary step of Advice Associates for less earning class Ranging from 5 marla, 8 marla, 10 marla and 20 marla double story houses on 12 to 24 months easy installments. We guarantee durability and fixity. This is a golden opportunity for investors. There is currently no housing society in Pakistan that can compete Bahria Town&rsquo;s credibility in providing full proof security and international living standards. Bahria helps fulfill your luxurious lifestyle and dream home ambitions. It also guarantee&rsquo;s to protect your investment. After a record sale of 8 marla residential plots in Bahria&rsquo;s phase 8 and Bahria enclave Advice Associates is now taking an initiative of constructing for you Bahria&rsquo;s approved international standard houses with approved Bahria town architecture, elegant front elevation, beautiful kitchen, imported tiles, sanitary bathrooms, eye catching entries, matching color scheme paint, aluminum windows, spacious drawing rooms and green belt garage and also the installment plan is decided by you. Advice associates meets all the architectural and material standards of bahria town which bahria town demands and keeps check and balance of it at every stage and issues the approval certificate after the house is built, the issuance of this certificate guarantee&rsquo;s our quality. So join us and start building your house and take advantage of this amazing opportunity to save your time and investment. Constructing your house is no longer difficult, thanks to advice associates standing right there to help you out with building your mega home. Take our humble advice and get your dream home from Advice Associates.</p><p style=\"text-align: justify;\"><strong>Facilities:</strong></p>\r\n<ul>\r\n	<li style=\"text-align: justify;\">Commercial Area: Heralds Super Store, Standard Chartered Bank, KASB Bank,Mezan Bank ,zoo</li>\r\n	<li style=\"text-align: justify;\">Parks</li>\r\n	<li style=\"text-align: justify;\">School</li>\r\n	<li style=\"text-align: justify;\">Mosques</li>\r\n	<li style=\"text-align: justify;\">Mini Golf Course</li>\r\n	<li style=\"text-align: justify;\">Mini Formula One racing Track</li>\r\n	<li style=\"text-align: justify;\">Horse Riding Club</li>\r\n	<li style=\"text-align: justify;\">Opera Theatre</li>\r\n	<li style=\"text-align: justify;\">Shared Facilities:</li>\r\n	<li style=\"text-align: justify;\">Safari Club</li>\r\n	<li style=\"text-align: justify;\">Rukhsana Akhter Hospital</li>\r\n	<li style=\"text-align: justify;\">Dr. A.Q Khan School</li>\r\n	<li style=\"text-align: justify;\">Grid Station</li>\r\n	<li style=\"text-align: justify;\">Mini Golf Course</li>\r\n	<li style=\"text-align: justify;\">Cinema</li>\r\n</ul>\r\n', 'yes', 4, '153293175258122571529496011.jpg', '153293175333download.jpg'),
(22, 'Bahria House Installments', 'Bahria-House-Installments', 'Bahria House Installments', 'Bahria House Installments', 'Bahria House Installments', 'Bahria House Installments', 18, '<p style=\"text-align: justify;\">Bahria Town and Advice associates along with Modernization and Quality are heading towards Advancement. There is absolutely no doubt that with the current advancement in today&rsquo;s era, it has become difficult and rather impossible to live a hectic free lifestyle, and as such you always need a special service to help you achieve your dream home goals. We at advice associates is doing our assignment right in the real estate industry and the more reasons why our clients keep coming back to avail our services. Due to the trust they have, they specially requested that we launch construction services, after a very high demand from both the national and international clients we finally decided to listen to our customers, and in a very special way we launched our construction services. As we have set the standards so high, we hired the best of the best as our engineering wing, they can construct houses as well as sky high buildings. On board with us are highly skilled and experienced labors, masons, electricians, sanitary workers, flooring teams, interior coloring to achieve our quality goals just to maintain the best quality of services as we have always delivered. We are working to make a statement and advice associates won the banner as the most trustable and reliable organization. Our team will complete projects in time and of course in quality, maintaining Bahria town&rsquo;s global standards. Our special engineers will personally supervise the flooring, underground water service, electricity and all other work with daily updates about progress of the work to client via whats app, email and phone call. We would make you feel just as if your home is been constructed right under your lenses.</p>', 'yes', 4, '1532931938530122571529496011.jpg', '153293193857download.jpg'),
(23, 'Bahria / Safari Homes', 'Bahria-Safari-Homes', 'Bahria / Safari Homes', 'Bahria / Safari Homes', 'Bahria / Safari Homes Rawalpindi ', 'Bahria / Safari Homes', 0, '<p><strong>BAHRIA SAFARI HOME RAWALPINDI PAKISTAN<br />\r\nProject Type:</strong>Turkian housing solution<br />\r\n<strong>Location:</strong></p><p>Carefully planned and strategically located besides DHA Phase 1 and at a few minutes distance from GT Rawalpindi, Bahria/ Safari Homes, is nestled amidst the picturesque setting of Safari Valley. Japan Road connecting Bahria Homes to the GT Road runs north east of the project. At a few minutes drive from GT Road, Rawalpindi and located besides DHA Phase 1.</p><p><strong>Key Features</strong><br />\r\nSeismic proof homes, Built in collaboration with AREAA, leading Turkish construction companyBahria/ Safari Homes are available in two different sizes of 125 and 200 Sq. yards to suit the requirements of both small and large families. The villa is lavishly furnished with ceramic tiles, imported fixtures and fitted kitchen with designer cabinetry. Add to this, the villa is fully air conditioned for your convenience. These villas have also been benefited from the advanced architectural designs and technologies catering to seismic safety requirements.</p><p>All shopping and grocery services are conveniently located within a short stroll&rsquo;s distance away from your home. This makes household management a non-issue especially for single young professionals &amp; working mothers. Bahria Homes also provides a host of amenities and facilities to ensure that all your day-to-day needs are well taken care of without you ever having to consider them.</p><p>High quality finishes</p>\r\n<ul>\r\n	<li>Kitchen fitted with designer cabinetry</li>\r\n	<li>Built-in wardrobes in all bedrooms made for simple and elegant storage solutions</li>\r\n	<li>En-Suite bathroom in master bedroom</li>\r\n	<li>Balconies and terraces</li>\r\n	<li>Contemporary design</li>\r\n</ul>\r\n\r\n<p><strong>Shared Facilities:</strong></p>\r\n\r\n<ul>\r\n	<li>Safari Club</li>\r\n	<li>Cinma</li>\r\n	<li>18 Hole Golf Course</li>\r\n	<li>Country Club</li>\r\n	<li>Community Club</li>\r\n</ul>\r\n', 'yes', 4, '1532932237258122571529496011.jpg', '1532932237808download.jpg'),
(24, 'Awami Villas', 'Awami-Villas', 'Awami Villas', 'Awami Villas', 'Bahria Town Awami Villas Rawalpindi', 'Awami Villas', 19, '<p style=\"text-align: justify;\">Awami villas 5 Marla 2 Beds Houses ,European style, single storey house is available for sale in Bahria Town islamabad. It has 2 bedrooms, kitchen, lawn, garage, with all utilities and facilities. It is best opportunity for investment or residential purpose. Phase-8 Bahria Town Rawalpindi Premium Villas Community At 6 KM from GT Road Rawalpindi,it is located at a strategic.<br />\r\nLocation: on the 210 ft wide Bahria Expressway safari valley phse8 Rawalpindi.</p>', 'yes', 4, '1532932606166122571529496011.jpg', '1532932606675download.jpg'),
(25, 'Gulberg Islamabad', 'Gulberg-Islamabad', 'Gulberg Islamabad', 'Gulberg Islamabad', 'Gulberg Islamabad', 'Gulberg Islamabad', 20, '<p style=\"text-align: justify;\">Gulberg Islamabad is a project of Intelligence Bureau Employee&#39;s Cooperative Housing Society society (IBECHS) There are many housing societies in Rawalpindi and Islamabad, But the beautiful location of GulbergIslamabad is as beautiful as Islamabad . It is just 15 minutes drive from gulberg to other parts of Islamabad ,and 10 minutes drive towards airport and 5 minutes drive to G.T road .Gulberg green and Gulberg residential were a beautiful dreams that becomes now a reality. In Gulberg knowledge village there are many schools, colleges and universities which are under constructions.5 star hotels ,shopping malls are also under construction Gulberg Islamabad is a place, where yours dreams become true.The project was launched in 2005 and in 2009 its NOC from CDA was approved with Ref# &ldquo;CDA/PLW-HS(127)/2009/257&rdquo;. The MOU with IESCO and SNGPL were also duly signed. Development work on the project started in 2009</p>', 'yes', 5, '1532932809258slider_1.jpg', '153293280929download.jpg'),
(26, 'DHA Valley', 'DHA Valley', 'DHA Valley', 'DHA Valley', 'DHA Valley Islamabad', 'DHA Valley', 21, '<p style=\"text-align: justify;\">DHA VALLEY PLOTS, HOUSE&nbsp;<br />\r\nThere are 5 &amp; 8 Marla Residential Plot.D.H.A valley Contain On 20 Block Which Are on Different Location .It,s Joint Venture Of Bahria Town &amp; D.H.A . D.H.A Valley provides inimitable lifestyle with free &amp; secure environment surrounded by the beauty of nature and providing exclusive amenities of international standards. DHA Islamabad combines quality, excellence and International standards to give luxury of living for Overseas Pakistanis. DHA Valley Overseas Block, exclusive residential plots of 5 &amp; 8 Marla are located at prime location<br />\r\nPioneers in the art of master-planned communities DHA Islamabad have designed the beautiful landscaped 5 Marla single and 8 Marla double story house, located adjacent to DHA Phase II Extension, and in close proximity to Islamabad International Airport. At DHA Islamabad there is feeling of comfort and societal security encompassed within gated boundaries of community that is vibrant and secure in every sense of the living needs. DHA Homes are the coveted new address that offers you the incredible opportunity to live the lifestyle you&rsquo;ve dreamed about for so many years. Each home comes with high quality fixtures and finishes.&nbsp;</p><p>&nbsp;</p>', 'yes', 5, '1532933012448122571529496011.jpg', '1532933012950download.jpg'),
(27, 'Deffence Villas', 'Deffence-Villas', 'Deffence Villas', 'Deffence Villas', 'Deffence Villas', 'Deffence Villas', 22, '<p style=\"text-align: justify;\"><strong>DEFENCE VILLAS ISLAMABAD&nbsp;</strong><br />\r\nDefence Villas is a new beginning in residential community. Proposed stylish villas are the continuity of DHA signature &lsquo;DHA Homes&rsquo; concept in DHA Lahore. The residents of Defence Villas will have access to a world of international services, which are exclusive to DHA residents Defence Villas where every day dawn&rsquo;s with promises is a relaxing and special journey into the ultimate residential lifestyle. A coveted new domain that offers you the incredible opportunity to live the lifestyle you&rsquo;ve dreamed about for so many years. Each villa comes with imported fixtures and high class finishes. Defence Villas are designed to meet requirements of both small and large family sizes. Just 3 minute drive from GT Road Rawalpindi (near Toyota Rawal Motors) and access from Islamabad Highway, Defence Villas Phase 1, Sector-F is located on 210 ft wide Expressway. Its prime location makes it placed right opposite to the fully occupied Defence Housing Authority Sector E of Phase-1. Defence Villas is a completely secured gated community where amenities of life will be extended with international standards under a unique development plan along the picturesque bank of Soan River.</p><p style=\"text-align: justify;\"><strong>Facilities:</strong></p>\r\n<ul>\r\n	<li style=\"text-align: justify;\">Commercial Area: Heralds Super Store, Standard Chartered Bank, KASB Bank,Mezan Bank ,zoo</li>\r\n	<li style=\"text-align: justify;\">Parks</li>\r\n	<li style=\"text-align: justify;\">School</li>\r\n	<li style=\"text-align: justify;\">Mosques</li>\r\n</ul>\r\n\r\n<p style=\"text-align: justify;\"><strong>Shared Facilities:</strong></p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\">Safari Club</li>\r\n	<li style=\"text-align: justify;\">Rukhsana Akhter Hospital</li>\r\n	<li style=\"text-align: justify;\">Dr. A.Q Khan School</li>\r\n	<li style=\"text-align: justify;\">Grid Station</li>\r\n	<li style=\"text-align: justify;\">Golf Course</li>\r\n</ul>\r\n', 'yes', 5, '1532933180423122571529496011.jpg', '1532933180449download.jpg'),
(28, 'Bahria Town Karachi', 'Bahria-Town-Karachi', 'Bahria Town Karachi', 'Bahria Town Karachi', 'Bahria Town Karachi', 'Bahria Town Karachi', 23, '<p style=\"text-align: justify;\"><strong>Master-Planned Community with World-Class Infrastructure and Facilities</strong><br />\r\n<strong>Project Attraction:</strong> Bahria Town signature facilities and modern infrastructure&nbsp;<br />\r\n<strong>Residential plots: </strong>125,250,500,1000 and 2000 Sq. Yards<br />\r\n<strong>Commercial plots:</strong> 125,200 and 250 Sq yards<br />\r\n<strong>Bahria Homes:</strong> 125 and 200 Sq yards<br />\r\n<strong>Bahria Apartments: </strong>2,3 &amp;4-bed<br />\r\nIdeal Location | Unbelievable Prices<br />\r\n25 minutes from Jinnah International Airport, Connected through MalirCantt via 6 lane expressway<br />\r\n9Km from Super-Highway toll plaza<br />\r\n20 minutes from City Centre via metro bus<br />\r\n<strong>Project Features:</strong></p>\r\n<ul>\r\n	<li style=\"text-align: justify;\">Master-planned gated community</li>\r\n	<li style=\"text-align: justify;\">Advanced security &amp; rescue services</li>\r\n	<li style=\"text-align: justify;\">Pakistan&rsquo;s largest shopping mall</li>\r\n	<li style=\"text-align: justify;\">5-star international hotel &amp; USGA standard golf course</li>\r\n	<li style=\"text-align: justify;\">Commercial areas</li>\r\n	<li style=\"text-align: justify;\">Gold-Class cinemas</li>\r\n	<li style=\"text-align: justify;\">State-of-the-art sports facilities</li>\r\n	<li style=\"text-align: justify;\">World-class school, college and International University</li>\r\n	<li style=\"text-align: justify;\">International standard hospital</li>\r\n	<li style=\"text-align: justify;\">International theme park, play-land and water-rides</li>\r\n	<li style=\"text-align: justify;\">Jamiah mosque</li>\r\n	<li style=\"text-align: justify;\">landscaped parks</li>\r\n	<li style=\"text-align: justify;\">Community sports club &amp; zoo</li>\r\n	<li style=\"text-align: justify;\">International standard construction &amp; infrastructure</li>\r\n	<li style=\"text-align: justify;\">Grid station &amp; telephone-exchange</li>\r\n	<li style=\"text-align: justify;\">Transport system from Bahria Town to City Centre</li>\r\n	<li style=\"text-align: justify;\">100 % backup power (No Load-shedding)ty Features</li>\r\n</ul>\r\n', 'yes', 6, '1532933402142122571529496011.jpg', '1532933403808download.jpg'),
(29, 'Safari Apartments', 'Safari-Apartments', ' Safari Apartments', 'Safari Apartments', 'Safari Apartments', 'Safari Apartments', 26, '<p style=\"text-align: justify;\"><strong>Location: </strong>Bahria Town Phase ( 1 ) Isb<br />\r\nMinimum Covered Area : 2600 Sqft<br />\r\nMaximum Covered Area : 3300 Sqft<br />\r\n3 Bed , Bath , Amercian kitchen ,Tv Lounge&nbsp;</p><p style=\"text-align: justify;\"><strong>Bahria Town Apartments Facilities::</strong></p>\r\n<ul>\r\n	<li style=\"text-align: justify;\">24/7 Security &amp; Maintenance</li>\r\n	<li style=\"text-align: justify;\">Car Parking</li>\r\n	<li style=\"text-align: justify;\">Well Maintained Entrance Foyer &amp; Lobbies</li>\r\n	<li style=\"text-align: justify;\">Vehicle drop off points</li>\r\n	<li style=\"text-align: justify;\">Membership Opportunity At Recreational Facilities And Safari Club</li>\r\n	<li style=\"text-align: justify;\">Concierge Facility At The Reception Lobby Of Each Building</li>\r\n	<li style=\"text-align: justify;\">24 Hour Maintenance</li>\r\n	<li style=\"text-align: justify;\">Household Waste removal</li>\r\n	<li style=\"text-align: justify;\">Common Area Cleaning</li>\r\n	<li style=\"text-align: justify;\">Common Area Landscaping</li>\r\n	<li style=\"text-align: justify;\">Maximum Utilization Of Interior Space</li>\r\n	<li style=\"text-align: justify;\">Central Heating And Cooling System</li>\r\n</ul>\r\n', 'yes', 7, '1532933923383122571529496011.jpg', '1532933924150download.jpg'),
(30, 'Awami Apartments', 'Awami-Apartments', 'Awami Apartments', 'Awami Apartments', 'Awami Apartments', 'Awami Apartments', 27, '<p style=\"text-align: justify;\">Awami villas 5 Marla 2 Beds Houses ,European style, single storey house is available for sale in Bahria Town islamabad. It has 2 bedrooms, kitchen, lawn, garage, with all utilities and facilities. It is best opportunity for investment or residential purpose. Phase-8 Bahria Town Rawalpindi Premium Villas Community At 6 KM from GT Road Rawalpindi,it is located at a strategic.<br />\r\nLocation: on the 210 ft wide Bahria Expressway safari valley phse8 Rawalpindi.</p>', 'yes', 7, '1532934045206122571529496011.jpg', '1532934045654download.jpg'),
(31, 'City Housing', 'City-Housing', ' City Housing', 'City Housing', 'City Housing', 'City Housing', 28, '<p><strong>Visit Link:</strong></p><p>http://www.cityhousing.pk/</p><p>&nbsp;</p>', 'yes', 8, '153293427940122571529496011.jpg', '1532934279496download.jpg'),
(32, 'FDA City', 'FDA-City', 'FDA City', 'FDA City', 'FDA City', 'FDA City', 30, '<p><strong>Visit Link:</strong></p><p>https://www.fdacity.pk/prices_fda.php</p>', 'yes', 8, '1532934693262122571529496011.jpg', '1532934693298download.jpg'),
(33, 'Wapda City', 'Wapda-City', 'Wapda City', 'Wapda City', 'Wapda City', 'Wapda City', 31, '<p><strong>Visit Link:</strong></p><p>https://www.wapdacity.pk/</p>', 'yes', 8, '1532934926502122571529496011.jpg', '1532934926477download.jpg'),
(34, 'Faisalabad Property', 'Faisalabad-Property', 'Faisalabad Property', 'Faisalabad Property', 'Faisalabad Property', 'Faisalabad Property', 32, '<p><strong>Visit Link:</strong></p><p>http://faisalabadproperty.com/</p>', 'yes', 8, '1532935062654122571529496011.jpg', '1532935062404download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `e_feedback`
--

CREATE TABLE `e_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `last` varchar(250) NOT NULL,
  `bill` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_feedback`
--

INSERT INTO `e_feedback` (`id`, `name`, `email`, `subject`, `message`, `last`, `bill`, `city`) VALUES
(38, 'ali', 'kayani_brother@yahoo.com', 'ali', 'ksdjkjdsv', 'ali', '', ''),
(37, 'ali', 'kayani_brother@yahoo.com', 'ali', 'ksdjkjdsv', 'ali', '', ''),
(39, 'ali', 'kayani_brother@yahoo.com', 'ali', 'ksdjkjdsv', 'ali', '', ''),
(40, 'ali', 'kayani_brother@yahoo.com', 'ali', 'ksdjkjdsv', 'ali', '', ''),
(41, 'ali', 'kayani_brother@yahoo.com', 'ali', 'ksdjkjdsv', 'ali', '', ''),
(42, 'ali', 'kayani_brother@yahoo.com', 'ali', 'ksdjkjdsv', 'ali', '', ''),
(43, 'ali', 'kayani_brother@yahoo.com', 'ali', 'ksdjkjdsv', 'ali', '', ''),
(44, 'ali', 'kayani_brother@yahoo.com', 'ali', 'ksdjkjdsv', 'ali', '', ''),
(45, 'kjkg', 'kayani_brother@yahoo.com', 'jfk', 'jkfjhfjj', 'kgkgk', '', ''),
(46, 'kjkg', 'kayani_brother@yahoo.com', 'jfk', 'jkfjhfjj', 'kgkgk', '', ''),
(47, 'kjkg', 'kayani_brother@yahoo.com', 'jfk', 'jkfjhfjj', 'kgkgk', '', ''),
(48, 'kjkg', 'kayani_brother@yahoo.com', 'jfk', 'jkfjhfjj', 'kgkgk', '', ''),
(49, 'kjkg', 'kayani_brother@yahoo.com', 'jfk', 'jkfjhfjj', 'kgkgk', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `e_gallery`
--

CREATE TABLE `e_gallery` (
  `id` int(50) NOT NULL,
  `title` varchar(250) NOT NULL,
  `category` varchar(256) NOT NULL,
  `detail` varchar(256) NOT NULL,
  `type` enum('image','video') NOT NULL,
  `date` varchar(256) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `e_gallery`
--

INSERT INTO `e_gallery` (`id`, `title`, `category`, `detail`, `type`, `date`, `image`) VALUES
(24, 'Medows_villas_Bahria', '', '', 'image', '', '1529836954184Medows_villas_Bahria.JPG'),
(25, 'safari_valley1', '', '', 'image', '', '1529837014257safari_valley1.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `e_item`
--

CREATE TABLE `e_item` (
  `id` int(11) NOT NULL,
  `block` varchar(100) NOT NULL,
  `street` varchar(200) NOT NULL,
  `plote_no` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `plote_size` varchar(200) NOT NULL,
  `plote_type` varchar(300) NOT NULL,
  `feature` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `name_person` varchar(80) NOT NULL,
  `image` varchar(300) NOT NULL,
  `date` varchar(50) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `phase_id` int(200) NOT NULL,
  `price` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `e_item`
--

INSERT INTO `e_item` (`id`, `block`, `street`, `plote_no`, `type`, `plote_size`, `plote_type`, `feature`, `phone`, `name_person`, `image`, `date`, `cat_id`, `phase_id`, `price`) VALUES
(17, 'A', '46', '790', 'General Plot', '10 Marla', '', '<p>Along ACE Academy Ideal Location Near Commercial &amp; Park</p>', '03215454249', 'Muhammad Kamran Rana', '153294209599292.jpg', '2018-07-28', 6, 8, 11000000),
(18, '', '61', '1846', 'General Plot', '10 Marla', '', '<p>Posh Area Good Location Almost Fully Constructed Houses</p>', '03215454249', 'Muhammad Kamran Rana', '15329465019975.jpg', '2018-07-10', 6, 9, 95000000),
(19, '', '65', '2054', 'General Plot', '10 Marla', '', '<p>Solid Land Walking Distance To Park &amp; Commercial Posh Area</p>', '03215454249', 'Muhammad Kamran Rana', '153294848994758.jpg', '2018-07-11', 6, 9, 11200000),
(20, '', 'Road A', '325', 'Boulevard/Corner', '1 Kanal', '', '<p>Boulevard &amp; Corner Walking Distance To Arena Commercial &amp; Civic Center</p>', '03215454249', 'Muhammad Kamran Rana', '153294874262885.jpg', '2018-07-10', 6, 10, 21500000),
(21, '', '26', '1069', 'General Plot', '10 Marla', '', '<p>Behind Main Boulevard Road A Walking Distance To Arena 3,D Cinema</p>', '03215454249', 'Muhammad Kamran Rana', '153294960353193.jpg', '2018-07-07', 6, 10, 11500000),
(22, '', '30/32', '1229', 'Corner', '26 Marla', '', '<p>Corner 6 Marla Exra Land Paid Rare Opportunity Huge Front Of Plot</p>', '03215454249', 'Muhammad Kamran Rana', '153295031730560.jpg', '2018-07-10', 6, 10, 24500000),
(23, '', '5a', '56', 'General Plot', '1 Kanal', '', '<p>Front &amp; Back Open, Along Main Bahria Avenue Walking distance To Commercial</p>', '03215454249', 'Muhammad Kamran Rana', '153295075223076.jpg', '2018-07-10', 6, 11, 16500000),
(24, '', '61', '	10', 'General Plot', '1 Kanal', '', '<p>Back Open, Along Bahria Avenue Solid Land, Walking Distance To Commercial &amp; Park</p>', '03215454249', 'Muhammad Kamran Rana', '153295089180138.jpg', '2018-07-26', 6, 11, 18700000),
(25, '', 'Road B-6', '1693', 'General Plot', '1 Kanal', '', '<p>65 x 70 Ideal Front Of This Plot Solid Land Height Location</p>', '03215454249', 'Muhammad Kamran Rana', '153295122098954.jpg', '2018-07-18', 6, 12, 9500000),
(26, '', '15/22', '294', 'Corner', '10 Marla', '', '<p>Corner Height Solid Land, Rare Option Good Opportunity Near Masjid</p>', '03215454249', 'Muhammad Kamran Rana', '153295151327701.jpg', '2018-07-17', 6, 12, 11500000),
(27, '', '22', '386', 'General Plot', '10 Marla', '', '<p>Height Location, Near Masjid Walking Distance To Park, Commercial</p>', '03215454249', 'Muhammad Kamran Rana', '153295194914149.jpg', '2018-07-17', 6, 12, 10000000),
(28, '', '35/1	', '1594', 'General Plot', '10 Marla', '', '<p>Solid Land, Construction Going Very Fast Walking Distance to Park</p>', '03215454249', 'Muhammad Kamran Rana', '153295211145959.jpg', '2018-07-16', 6, 12, 6500000),
(29, '', '54	', '1130', 'General Plot', '10 Marla', '', '<p>Solid Land Height Location, Kanal facing Walking Distance To Park</p>', '03215454249', 'Muhammad Kamran Rana', '153295229298782.jpg', '2018-07-07', 6, 12, 8400000),
(30, 'F-2', '26', '1062', 'General Plot', '10 Marla', '', '<p>Semi Dovelpment,Good And Save Invesment,Beautiful Loctsion.</p>', '03345454247', 'Mian Muhammad Awais', '153295251012019.jpg', '2018-07-19', 7, 13, 3300000),
(31, 'L', 'B/V', '55*	', 'Boulevard', '5 Marla', '', '<p>Back Open to Main Boulevard,Prime Location,Near to Park,Masjid &amp; Commercial</p>', '03315454663', 'Mir Salman', '153295299877679.jpg', '2018-07-18', 7, 13, 2800000),
(32, 'L', '28', '374*	', 'Corner Park Face', '5 Marla', '', '<p>St,28 Prime Location,Corner,Park Face,Extra Land Plot</p>', '03315454663', 'Mir Salman', '153295324482448.jpg', '2018-07-14', 7, 13, 2800000),
(33, 'M', '33	', '924', 'General Plot', '5 Marla', '', '<p>St,33 Prime Location,Open File,Near to Park &amp; Commercial</p>', '03315454663', 'Mir Salman', '153295348787434.jpg', '2018-07-14', 7, 13, 2800000),
(34, 'A-1', '14', '16,17', 'General Plot', '10 Marla', '', '<p>St,14 Prime Location,Front Open,Height Location,Open Transfer</p>', '03315454663', 'Mir Salman', '153295368233721.jpg', '2018-07-16', 7, 14, 4600000),
(35, 'B', '15', '243	', 'General Plot', '10 Marla', '', '<p>St,15 Prime Location,Level Plot,Solid Land,Near to Commercial</p>', '03315454663', 'Mir Salman', '153295393216808.jpg', '2018-07-19', 7, 14, 6000000),
(36, 'C', '4', '744', 'General Plot', '10 Marla', '', '<p>St,4 Prime Location,Map Possession Paid,Near to Masjid &amp; Commercial</p>', '03315454663', 'Mir Salman', '153295417811233.jpg', '2018-07-11', 7, 14, 6500000),
(37, 'B', '17', '388', 'General Plot', '10 Marla', '', '<p>St,17 Prime Location,Level Plot,Solid Land,Near to Commercial &amp; Masjid</p>', '03315454663', 'Mir Salman', '153295460394267.jpg', '2018-07-30', 7, 14, 6600000),
(38, 'B', '17', '349', 'General Plot', '10 Marla', '', '<p>St,17 Prime Location,Back Open,Near to Commercial &amp; Masjid</p>', '03315454663', 'Mir Salman', '153295525684859.jpg', '2018-07-30', 7, 14, 6800000),
(40, 'C', '9', '883', 'General Plot', '10 Marla', '', '<p>St,9 Prime Location,Level Plot,Solid Land,Near to Main Boulevard &amp; Masjid</p>', '03315454663', 'Mir Salman', '153295546112770.jpg', '2018-07-30', 7, 14, 6800000),
(41, 'C', '44', '1115', 'General Plot', '10 Marla', '', '<p>St,44 Good Location,Level Plot,Near to Commercial &amp; Roots School</p>', '03315454663', 'Mir Salman', '153295620351206.jpg', '2018-07-19', 7, 14, 4600000),
(42, 'E', '17	', '681', 'General Plot', '10 Marla', '', '<p>St,17 Prime Location,Level Plot,Solid Land,Near to Main Road &amp; Commercial</p>', '03315454663', 'Mir Salman', '153295647060956.jpg', '2018-07-17', 7, 14, 5200000),
(43, 'E', '35', '1174,1175', 'General Plot', '10 Marla', '', '<p>St,35 Good Location,Near to Park,Masjid &amp; Commercial,Each Plot Price</p>', '03315454663', 'Mir Salman', '153295668848966.jpg', '2018-07-11', 7, 14, 4500000),
(44, 'F-1', 'Lane 4', '7', 'General Plot', '10 Marla', '', '<p>Lane 4 Plot,Good Location,Level Plot,Near to Boulevard &amp; Commercial</p>', '03315454663', 'Mir Salman', '153295682760689.jpg', '2018-07-19', 7, 14, 4200000),
(45, 'F-1', '11', '270', 'General Plot', '10 Marla', '', '<p>St,11 Prime Location,Level Plot Solid Land,Urgent Sale,Good Opportunity</p>', '03315454663', 'Mir Salman', '153295780673062.jpg', '2018-07-19', 7, 14, 5000000),
(46, 'F-1', '20', '541', 'General Plot', '10 Marla', '', '<p>St,20 Good Location,Near to Park &amp; Boulevard</p>', '03315454663', 'Mir Salman', '153301795120826.jpg', '2018-07-17', 7, 14, 4000000),
(47, 'F-2', 'M/B', '26M/B', 'Boulevard', '10 Marla', '', '<p>Main Bouleward Good Location,Level Plot,Near To Park&amp;Main Expressway</p>', '03325556046', 'Hayat Khan', '153301818250406.jpg', '2018-07-17', 7, 13, 5700000),
(48, 'F-2', 'M/B', '26', 'Boulevard', '10 Marla', '', '<p>St, Main Bouleward Good Location,Level Plot,Near To Park&amp;Main Expressway</p>', '03325556046', 'Hayat Khan', '153302112760632.jpg', '2018-07-17', 7, 14, 5700000),
(49, 'F-2', '1', '34', 'General Plot', '10 Marla', '', '<p>St,1 Good Location,Level Plot,Near To Park&amp;Main Expressway</p>', '03315454670', 'Hayat Khan', '153302153229564.jpg', '2018-07-20', 7, 14, 4600000),
(50, 'F-2', '1', '69', 'Boulevard/Corner', '10 Marla', '', '<p>Good Location,Level Plot,Near To Main Expressway Park &amp; Masjid</p>', '03315454670', 'Hayat Khan', '153302171683101.jpg', '2018-07-20', 7, 13, 4800000),
(51, 'F-2', '12', '330', 'General Plot', '10 Marla', '', '<p>Prime Location,Level Plot,Near to Express Way,Park,Masjid &amp; Commercial</p>', '03315454670', 'Hayat Khan', '153302183254001.jpg', '2018-07-27', 7, 14, 4600000),
(52, 'F-3', 'B/V', '578', 'Boulevard', '10 Marla', '', '<p>Level Plot Good Location Bouleward PLot Near to Commerical &amp; Masjid</p>', '03315454670', 'Hayat Khan', '153302198741692.jpg', '2018-07-21', 7, 14, 4500000),
(53, 'F-2', '1', '69', 'General Plot', '10 Marla', '', '<p>Good Location,Level Plot,Near To Main Expressway Park &amp; Masjid</p>', '03315454670', 'Hayat Khan', '153302225458417.jpg', '2018-07-20', 7, 14, 4800000),
(54, 'F-3', '5', '192', 'General Plot', '10 Marla', '', '<p>Level Plot,Near To Main Expressway Park &amp; Masjid</p>', '03315454670', 'Hayat Khan', '153302251813851.jpg', '2018-07-23', 7, 14, 4400000),
(55, 'F-3', '16', '730', 'General Plot', '10 Marla', '', '<p>Possession Comming Soon,Level Land,Near To Masjid,Commercial,Park,Easy Approach To Express Way.</p>', '03345454247', ' Mian Muhammad Awais', '15330226736351.jpg', '2018-07-17', 7, 14, 3500000),
(56, 'F-3', '27', '1017F', 'General Plot', '10 Marla', '', '<p>Possession Comming Soon,Level Land,Near To Masjid,Commercial,Park,Easy Approach To Express Way.</p>', '03345454247', 'Mian Muhammad Awais', '153302318779239.jpg', '2018-07-17', 7, 13, 3500000),
(57, 'F3', '1', '46', 'General Plot', '10 Marla', '', '<p>Prime Location,Level Plot,Near to Express Way,Park,Masjid &amp; Commercial</p>', '03315454670', 'Hayat Khan', '153302332562245.jpg', '2018-07-30', 7, 13, 5000000),
(58, 'F3', '1', '46', 'General Plot', '10 Marla', '', '<p>Prime Location,Level Plot,Near to Express Way,Park,Masjid &amp; Commercial</p>', '03315454670', 'Hayat Khan', '153302348598545.jpg', '2018-07-30', 7, 14, 5000000),
(59, 'F3', '10', '278', 'General Plot', '10 Marla', '', '<p>Good Location PLot Near to Commerical &amp; Masjid</p>', '03315454670', 'Hayat Khan', '153302358381359.jpg', '2018-07-28', 7, 14, 4600000),
(60, 'G', '7', '186', 'Boulevard', '10 Marla', '', '<p>Near To Masjid,Commerical,Park,Possission Area,Back Open.Bouleverd,Hight Locstion,Possission Paid.</p>', '03345454247', 'Mian Muhammad Awais', '153302367238867.jpg', '2018-07-17', 7, 14, 5000000),
(61, 'G', '11', '314', 'General Plot', '10 Marla', '', '<p>Level Plot,Near To Park&amp;Masjid</p>', '03315454670', 'Hayat Khan', '153302382281339.jpg', '2018-07-19', 7, 14, 4000000),
(62, 'g', '26', '832', 'General Plot', '10 Marla', '', '<p>Level Plot,Near To Masjid,Commerical,Park,Possission Area,Back Open.</p>', '03345454247', 'Mian Muhammad Awais', '153302395557036.jpg', '2018-07-17', 7, 14, 3700000),
(63, 'H', 'B/V', '231', 'Boulevard', '10 Marla', '', '<p>Main Boulevard,Prime Location,Level plot,Walking Distance to Roots School</p>', '03315454663', 'Mir Salman', '153302411790856.jpg', '2018-07-20', 7, 14, 5800000),
(64, 'H', 'B/V', '850', 'Boulevard', '10 Marla', '', '<p>Main Boulevard,Prime Location,Level plot,Walking Distance to Roots School</p>', '03315454670', 'Hayat Khan', '153302424794326.jpg', '2018-07-30', 7, 14, 5500000),
(65, 'H', '17', '393', 'General Plot', '10 Marla', '', '<p>Good Location,Level Plot,Near To Commerical And Roots School</p>', '03315454670', 'Hayat Khan', '153302440743592.jpg', '2018-07-27', 7, 14, 5000000),
(66, 'H', '26', '261', 'General Plot', '10 Marla', '', '<p>St,26 Prime Location,Back Open,Level Plot,Near to Roots School</p>', '03315454663', 'Mir Salman', '153302456257264.jpg', '2018-07-20', 7, 14, 5000000),
(67, 'I', '5', '49', 'General Plot', '10 Marla', '', '<p>Possession Area, Near To Roots School &amp; Bouleward</p>', '03325556046', 'Hayat Khan', '153302468137396.jpg', '2018-07-17', 7, 14, 5100000),
(68, 'I', '21', '973,974', 'General Plot', '10 Marla', '', '<p>St,21 Prime Location,Pair Plot,Near to Park,Masjid &amp; Commercia</p>', '03315454663', 'Mir Salman', '153302478631984.jpg', '2018-07-17', 7, 14, 4600000),
(69, 'I', '21', '973-974', 'General Plot', '10 Marla', '', '<p>Beautifully Locution,Near to Park,Masjid,Mian Road,Possission Area,Roots School,Zoo.</p>', '03345454247', 'Mian Muhammad Awais', '153302498536134.jpg', '2018-07-20', 7, 14, 4600000),
(70, 'I', '21', '1078', 'Park Face', '10 Marla', '', '<p>Good Location 3 Marla Extra Land ,Park Face Plot Near to Commerical</p>', '03315454670', 'Hayat Khan', '153302516666314.jpg', '2018-07-26', 7, 14, 6000000),
(71, 'k', '50	', '1090', 'General Plot', '10 Marla', '', '<p>Development has Started,Possession Will Be Given with in 1.5 Years</p>', '03315454670', 'Hayat Khan', '153302692931577.jpg', '2018-07-19', 7, 14, 2800000),
(72, 'L', 'B/V', '1020', 'B/v', '10 Marla', '', '<p>Bouleward Plot Level Plot Near to Roots School</p>', '03315454670', 'Hayat Khan', '15330271913103.jpg', '2018-07-19', 7, 14, 4300000),
(73, 'L', '5', '1352*', 'Park Face', '10 Marla', '', '<p>Back Open Plot, Park Face Plot Near to Masjid &amp;Commerical</p>', '03325556046', 'Hayat Khan', '153302735857669.jpg', '2018-07-18', 7, 14, 3900000),
(74, 'L', '11', '454', 'General Plot', '10 Marla', '', '<p>St,11 Prime Location,Back Open,Level Plot,Solid Land,Near to Boulevard</p>', '03315454663', 'Mir Salman', '153302757885171.jpg', '2018-07-12', 7, 14, 4600000),
(75, 'L', '35', '1399', 'General Plot', '10 Marla', '', '<p>Level Plot,Near To Park&amp;Commerical</p>', '03315454663', 'Mir Salman', '153302800565313.jpg', '2018-07-12', 7, 14, 4000000),
(76, 'L', '35G', '1559', 'General Plot', '0', '', '<p>Good Location,Level Plot,Near To Park&amp;Masjid</p>', '03315454670', 'Hayat Khan', '153302809742634.jpg', '2018-07-23', 7, 14, 3500000),
(77, 'L', '59', '2019*', 'General Plot', '10 Marla', '', '<p>Good Location Back Open Plot Near To park &amp; Commerical</p>', '03315454670', 'Hayat Khan', '153302822126296.jpg', '2018-07-21', 7, 14, 4200000),
(78, 'A', '5', '716', 'Corner', '20 Marla', '', '<p>St,5 Prime Location,Corner Plot with Extra Land,Near to Commercial</p>', '03315454663', 'Hayat Khan', '153303483478872.jpg', '2018-07-17', 7, 15, 12500000),
(79, 'A', '	13a', '1378', 'General Plot', '20 Marla', '', '<p>St,13 Map Possession Paid,Height Location,Back Open,Back to New Bahria Head Office</p>', '03315454663', 'Mir Salman', '153303499840608.jpg', '2018-07-17', 7, 15, 10500000),
(80, 'A', '19', '212', 'General Plot', '20 Marla', '', '<p>Possission Area,Level Plot,Near To Masjid,Commerical.</p>', '03345454247', 'Mian Muhammad Awais', '153303523184750.jpg', '2018-07-20', 7, 15, 7200000),
(81, 'A-1', 'B/V', '23', 'Boulevard', '20 Marla', '', '<p>Main Boulevard,Prime &amp; Height Location,Double Entrance,Level &amp; Solid Land</p>', '03315454663', 'Mir Salman', '153303534875443.jpg', '2018-07-16', 7, 15, 9200000),
(82, 'A-1', 'Lane 1', '15', 'Park Face', '20 Marla', '', '<p>Lane 1,Prime Location,Back &amp; Front Open,Park Facing Plot,Near to Commercial</p>', '03315454663', 'Mir Salman', '153303547462572.jpg', '2018-07-21', 7, 15, 9300000),
(83, 'A-1', '19', '3', 'General Plot', '20 Marla', '', '<p>St,19 Prime Location,Front Open,Height Location,Near to Boulevard</p>', '03315454663', 'Mir Salman', '15330356506055.jpg', '2018-07-16', 7, 15, 8800000),
(84, 'B', '6', '23', 'General Plot', '20 Marla', '', '<p>Possission Area,Solid Land,Prime Loctsion,Near To New Head Office,Back Open.</p>', '03345454247', 'Mian Muhammad Awais', '153303585458205.jpg', '2018-07-20', 7, 13, 9500000),
(85, 'B', '6', '23', 'General Plot', '10 Marla', '', '<p>Possission Area,Solid Land,Prime Loctsion,Near To New Head Office,Back Open.</p>', '03345454247', 'Mian Muhammad Awais', '153303632524564.jpg', '2018-07-20', 7, 15, 9500000),
(86, 'F-4', '13', '288	', 'Boulevard', '20 Marla', '', '<p>St,13 Back Open to Boulevard,Near to Park,Masjid &amp; Commercial</p>', '03315454663', 'Mir Salman', '153303644988559.jpg', '2018-07-17', 7, 15, 5200000),
(87, 'F-5', '7', '122', 'General Plot', '20 Marla', '', '<p>St,7 Good Location,Walking Distance to Park &amp; Masjid</p>', '03315454663', 'Mir Salman', '153303701596760.jpg', '2018-07-21', 7, 15, 4000000),
(88, 'F-5', '16', '266', 'General Plot', '10 Marla', '', '<p>Dovelpment Work Start,Near To Masjid,Commerical,Park,School.</p>', '03345454247', 'Mian Muhammad Awais', '153303718482352.jpg', '2018-07-20', 7, 15, 4000000),
(89, 'P', '17', '184*,185*', 'General Plot', '20 Marla', '', '<p>St,17 Prime Location,Back Open,Pair Plot,Each Plot Price</p>', '03315454663', 'Mir Salman', '153303733156122.jpg', '2018-07-12', 7, 15, 6500000),
(90, '', '37', '1132', 'General Plot', '5 Marla', '', '<p>Genral</p>', '03315454662', 'SYED RIZWAN', '153303811375947.jpg', '2018-07-18', 9, 16, 1700000),
(91, '', '40', '1331', 'General Plot', '5 Marla', '', '<p>Level Plot,Near To Park&amp;Commerical</p>', '03315454670', 'Hayat Khan', '153303825390356.jpg', '2018-07-30', 9, 16, 1700000),
(92, '', '44', '1441', 'General Plot', '5 Marla', '', '<p>Sami Develop near Park and masjid Back Boulevard</p>', ' +92324 54 54 247', 'Dilawar javed ', '153303837589014.jpg', '2018-07-14', 9, 16, 1625000),
(93, '', '44', '1451', 'General Plot', '5 Marla', '', '<p>Near Prak And Masjid</p>', '03315454662', 'SYED RIZWAN', '153303847984420.jpg', '2018-07-27', 9, 16, 1625000),
(94, '', 'Road 1', '2007', 'Boulevard', '5 Marla', '', '<p>Boulevard paid open Tranfer Facing 10 Marla plots</p>', '+92324 54 54 247', 'Dilawar javed ', '153303873631752.jpg', '2018-07-14', 9, 16, 1900000),
(95, '', '102', '2279', 'General Plot', '20 Marla', '', '<p>Sami Develop Possession after 6 month Price location</p>', '+92324 54 54 247', 'Dilawar javed ', '15330391345873.jpg', '2018-07-31', 9, 16, 1700000),
(96, '', '105', '2429', 'General Plot', '5 Marla', '', '<p>Sami Develop Possession after 6 month Prime location</p>', '+92324 54 54 247', 'Dilawar javed ', '153303925966756.jpg', '2018-07-18', 9, 16, 1750000),
(97, '', '113', '2619', 'General Plot', '5 Marla', '', '<p>Near Park and Commercial Height Location</p>', '+92324 54 54 247', 'Dilawar javed ', '153303937256229.jpg', '2018-07-30', 9, 16, 1725000),
(98, '', '115', '2708', 'General Plot', '5 Marla', '', '<p>Near Prak And Masjid</p>', '03315454662', 'SYED RIZWAN', '153303952533275.jpg', '2018-07-23', 9, 16, 1725000),
(99, '', '37a', '7', 'General Plot', '5 Marla', '', '<p>genral</p>', '03315454662', 'SYED RIZWAN', '153303972134046.jpg', '2018-07-18', 9, 16, 1775000),
(100, '', '11', '507', 'General Plot', '8 Marla', '', '<p>non Develop Near park and masjid</p>', '+92324 54 54 247', 'Dilawar javed ', '153303982799414.jpg', '2018-07-27', 9, 17, 2400000),
(101, '', '3', '10', 'General Plot', '10 Marla', '', '<p>Near Prak And Masjid</p>', '03315454662', 'SYED RIZWAN', '15330400775809.jpg', '2018-07-28', 9, 18, 2825000),
(102, '', '23', '1265', 'General Plot', '10 Marla', '', '<p>Sami Develop Possession after 6 month Price location Near F-2</p>', '+92324 54 54 247', 'Dilawar javed ', '153304021352425.jpg', '2018-07-18', 9, 18, 3150000),
(103, '', '6', '166', 'General Plot', '10 Marla', '', '<p>Develop Area Possession area Sun Face</p>', '+92324 54 54 247', 'Dilawar javed ', '153304035273025.jpg', '2018-07-18', 9, 18, 3050000),
(104, '', '10', '200', 'General Plot', '10 Marla', '', '<p>genral</p>', '03315454662', 'SYED RIZWAN', '15330405103056.jpg', '2018-07-18', 9, 18, 2950000),
(105, '', 'Road 03', '446', 'Boulevard', '10 Marla', '', '<p>near F-2 and Sector P Height locatin</p>', '+92324 54 54 247', 'Dilawar javed ', '153304081097852.jpg', '2018-07-18', 9, 18, 3300000),
(106, '', '9', '475', 'General Plot', '10 Marla', '', '<p>Back open Valley View Front street</p>', '+92324 54 54 247', 'Dilawar javed ', '153304091092741.jpg', '2018-07-18', 9, 18, 3100000),
(107, '', '2-A', '21 T', 'General Plot', '20 Marla', '', '<p>Possession area Near Phase 8 F-4</p>', '+92324 54 54 247', 'Dilawar javed ', '153304105490971.jpg', '2018-07-27', 9, 19, 5500000),
(108, '', '19-A', '369A', 'General Plot', '20 Marla', '', '<p>non Develop Near park and masjid</p>', '+92324 54 54 247', 'Dilawar javed ', '153304129932790.jpg', '2018-07-27', 9, 19, 4400000),
(109, '', '33', '61', 'General Plot', '5 Marla', '', '<p>genral</p>', '03315454662', 'SYED RIZWAN', '15330415981769.jpg', '2018-07-17', 10, 20, 1200000),
(110, '', 'mr17', '2', 'Boulevard', '10 Marla', '', '<p>Bulvard</p>', '03315454662', 'SYED RIZWAN', '153304173081155.jpg', '2018-07-17', 10, 21, 1950000),
(111, '', 'M.R 19', '24', 'Boulevard + Park Face', '10 Marla', '', '<p>Near Ring Road non develop Prime Location</p>', '+92324 54 54 247', 'Dilawar javed ', '153304205272008.jpg', '2018-07-31', 10, 21, 1950000),
(112, '', 'Boulevard', '404', 'General Plot', '5 Marla', '', '<p>Boulevard</p>', '03225454249', ' Adnan Tariq', '153311382096279.jpg', '2018-08-23', 11, 22, 2150000),
(113, '', 'Boulevard', '927', 'Boulevard', '5 Marla', '', '<p>Height location &amp; Boulevard</p>', '03225454249', 'Adnan Tariq', '153311491145820.jpg', '2018-07-23', 11, 22, 2150000),
(114, '', 'M.R 1', '923', 'Boulevard/Corner', '5 Marla', '', '<p>Corner Boulevard Paid Height Location</p>', '+92324 54 54 247', 'Dilawar javed ', '153311507119560.jpg', '2018-07-31', 11, 22, 2450000),
(115, '', '9', '332', 'General Plot', '5 Marla', '', '<p>Possession Near Park &amp; Boulevard</p>', '03225454249', 'Adnan Tariq', '153311519088789.jpg', '2018-07-23', 11, 22, 1900000),
(116, '', '40', '740', 'General Plot', '5 Marla', '', '<p>Height location Near Boulevard</p>', '03225454249', 'Adnan Tariq', '153311529442081.jpg', '2018-07-23', 11, 22, 1900000),
(117, '', '', '42', 'Boulevard', '5 Marla', '', '<p>Front Open Main Boulevard, Oppsite To Bahria Hospital Phase 8</p>', '03215454249', 'Muhammad Kamran Rana', '153311594138224.jpg', '2018-06-09', 13, 23, 14000000),
(118, '', '', '10,11', 'General Plot', '5 Marla', '', '<p>Back Open Behind Shaheen Chemist Ideal Location &amp; Opposite To DHA 1 Bridge Each Pair</p>', '03215454249', 'Muhammad Kamran Rana', '153311778979574.jpg', '2018-06-09', 13, 24, 29000000),
(119, '', '', '9', 'General Plot', '9 Marla', '', '<p>Back Open Behind Shaheen Chemist Ideal Location &amp; Opposite To DHA 1 Bridge</p>', '03215454249', 'Muhammad Kamran Rana', '153312018730767.jpg', '2018-06-09', 13, 24, 29000000),
(120, '', '', '4', 'Boulevard', '5 Marla', '', '<p>Opposite To AQ Science School, Gold Investment For Ever Rare Option</p>', '03215454249', 'Muhammad Kamran Rana', '153312031247299.jpg', '2018-07-03', 13, 25, 20000000),
(121, '', '', '25', 'Boulevard', '8 Marla', '', '<p>Main Expressway Front &amp; Back Open Ideal Location For Long Investment</p>', '03215454249', 'Muhammad Kamran Rana', '15331204865252.jpg', '2018-05-30', 13, 26, 19000000),
(122, '', '', '77', 'Boulevard', '8 Marla', '', '<p>Main Expressway Front &amp; Back Open Ideal Location For Long Investment</p>', '03215454249', 'Muhammad Kamran Rana', '153312058217180.jpg', '2018-06-30', 13, 26, 25000000),
(123, '', '', '100', 'Boulevard', '8 Marla', '', '<p>Main Expressway Front &amp; Back Open Ideal Location For Long Investment</p>', '03215454249', 'Muhammad Kamran Rana', '153312069035634.jpg', '2018-06-30', 13, 26, 24000000),
(124, '', '', '4', 'Boulevard', '5 Marla', '', '<p>Near To Phase 8 Hospital Main Boulevard Huge Space For Parking</p>', '03215454249', 'Muhammad Kamran Rana', '153312080379390.jpg', '2018-06-04', 13, 27, 17000000),
(125, '', '', '102', 'Boulevard', '5 Marla', '', '<p>Front Open Beautiful View Stadium &amp; Fuel Station Main Hub</p>', '03215454249', 'Muhammad Kamran Rana', '153312090922318.jpg', '2018-06-04', 13, 27, 14500000),
(126, '', '', '176', 'General Plot', '5 Marla', '', '<p>Height Location Front &amp; Back Open, Posh Area Walking Distance To Head Office</p>', '03215454249', 'Muhammad Kamran Rana', '153312104339426.jpg', '2018-07-03', 13, 27, 15000000),
(127, '', '', '70', 'Boulevard', '5 Marla', '', '<p>Boulevard Behind McDonalds, KFC, Green Valley &amp; River Hills Apartments</p>', '03215454249', 'Muhammad Kamran Rana', '153312115988033.jpg', '2018-07-05', 13, 29, 37000000),
(128, '', '', '97a', 'Park Face', '5 Marla', '', '<p>60 x 30 Good Dimensions For Constraction &amp; Possession Charges Paid Ideal Location</p>', '03215454249', 'Muhammad Kamran Rana', '153312136276974.jpg', '2018-06-04', 13, 28, 37000000),
(129, '', '', '14', 'Boulevard', '5 Marla', '', '<p>Front Open Beautiful View Main Expressway Near To New Main Bahria Head Office</p>', '03215454249', 'Muhammad Kamran Rana', '153312147421191.jpg', '2018-07-03', 13, 30, 30000000),
(130, '', '', '20', 'General Plot', '5 Marla', '', '<p>Commercial Are Surrounded By Houses Construction Going Very Fast</p>', '03215454249', 'Muhammad Kamran Rana', '15331216001679.jpg', '2018-07-03', 13, 30, 11500000),
(131, '', '', '13', 'General Plot', '13 Marla', '', '<p>Road A Prime Location,Front Back Open,1st D,Near to Park,Masjid &amp; Commercial</p>', '03015454249', 'Habib Elahi', '153312173838546.jpg', '2018-07-02', 13, 31, 12000000),
(132, '', '', '6', 'Boulevard', '5 Marla', '', '<p>Front &amp; Back Open 2nd To Corner Solid Land, Ideal &amp; Famous Chowk Opposite Deffence Villas</p>', '03215454249', 'Muhammad Kamran Rana', '153312187133014.jpg', '2018-06-02', 13, 32, 13000000),
(133, '', '', '14-H', 'Boulevard', '5 Marla', '', '<p>Back Open Main Boulevard, Height Location Sheataan Chowk</p>', '03215454249', 'Muhammad Kamran Rana', '153312199666346.jpg', '2018-07-11', 13, 32, 16500000),
(134, '', '', '16', 'Boulevard', '6 Marla', '', '<p>( 35 x 40 ) 3, Side Open Extra Land &amp; Possession Charges Paid</p>', '03215454249', 'Muhammad Kamran Rana', '153312266461736.jpg', '2018-06-01', 13, 32, 23000000),
(135, '', '', '413', 'General Plot', '5 Marla', '', '<p>Back Open Possession Plot 1 Km From Main GT Road New Cutting</p>', '03215454249', 'Muhammad Kamran Rana', '153312275970380.jpg', '2018-06-09', 13, 33, 9800000),
(136, '', '', '221,222', 'Boulevard', '7 marla', '', '<p>Front &amp; Back Open Behind Kallisto Restaurant &amp; 5 Star Hotel Rare Option Pair Plots</p>', '03215454249', 'Muhammad Kamran Rana', '153312288127591.jpg', '2018-06-04', 13, 34, 36000000),
(137, '', '', '66', 'Boulevard', '8 Marla', '', '<p>Adjacent Burger King, McDonald &amp; Green Valley Classy Commercial</p>', '03215454249', 'Muhammad Kamran Rana', '153312327388407.jpg', '2018-06-04', 13, 34, 77500000),
(138, '', '', '166', 'Boulevard', '8 Marla', '', '<p>Height Location Adjacent Askari Bank Good Opportunity For Rental Income</p>', '03215454249', 'Muhammad Kamran Rana', '153312360491819.jpg', '2018-06-04', 13, 34, 72500000),
(139, '', '', '223	', 'Boulevard', '8 Marla', '', '<p>Extra Land Paid, Front &amp; Back Open Opposite To Kallisto Ideal Location Huge Front</p>', '03215454249', 'Muhammad Kamran Rana', '153312373428076.jpg', '2018-06-04', 13, 23, 47000000),
(140, '', '', '1', 'Corner', '1', '', '<p>Corner 2,Side Open Height Location Solid Land Good Investment For Long Time</p>', '03215454249', 'Muhammad Kamran Rana', '153312386724093.jpg', '2018-05-30', 13, 35, 3300000),
(141, '', '', '2', 'General Plot', '2', '', '<p>Back Open To Park, Solid Land Posh Area Contraction Going Very Fast</p>', '03215454249', 'Muhammad Kamran Rana', '153312416792210.jpg', '2018-07-03', 13, 36, 3500000),
(142, '', '37', '691D,E', 'General Plot', '5 Marla', '', '<p>Genaral</p>', '03315454663', 'Mir Salman', '153312450667089.jpg', '2018-07-30', 14, 37, 4000000),
(143, '', '10', '129', 'Corner', '10 Marla', '', '', '03325454249', 'Muhmmad Waqas', '153312462989642.jpg', '2018-07-17', 14, 38, 8000000),
(144, '', '15', '205', 'General Plot', '10 Marla', '', '', '03325454249', 'Muhmmad Waqas', '153312527533964.jpg', '2018-07-17', 14, 38, 7100000),
(145, '', '12', '298', 'Corner', '10 Marla', '', '', '03315454663', 'Mir Salman', '153312547554602.jpg', '2018-07-17', 14, 38, 8500000),
(146, '', 'B/V', '490', 'Boulevard', '10 Marla', '', '', '03315454663', 'Mir Salman', '153312560340522.jpg', '2018-07-17', 14, 38, 7500000),
(147, '', '20a', '741', 'General Plot', '7 marla', '', '', '03325454249', 'Muhmmad Waqas', '153312572735607.jpg', '2018-07-31', 14, 38, 8550000),
(148, '', '26', '933', 'General Plot', '10 Marla', '', '', '03325454249', 'Muhmmad Waqas', '153312603762635.jpg', '2018-07-31', 14, 38, 7300000),
(149, '', '27a', '972', 'General Plot', '10 Marla', '', '', '03315454663', 'Mir Salman', '1533126248409.jpg', '2018-07-30', 14, 38, 7000000),
(150, '', '27a', '972', 'General Plot', '10 Marla', '', '<p>St,27a Back Open Green Land Near to Boulevard &amp; Statue of Liberty</p>', '03325454249', 'Muhmmad Waqas', '153312647442645.jpg', '2018-07-31', 14, 38, 7300000),
(151, '', '7', '1380', 'General Plot', '10 Marla', '', '<p>St,7 Prime Location,Near to Masjid,Commercial &amp; Statue of Liberty</p>', '03315454663', 'Mir Salman', '153312664476423.jpg', '2018-07-17', 14, 38, 7200000),
(152, '', '10', '1577,1578', 'General Plot', '10 Marla', '', '<p>St,10 Prime Location,Level Plot,Height Location,Pair Plot</p>', '03315454663', 'Mir Salman', '153312686278579.jpg', '2018-07-20', 14, 38, 7300000),
(153, '', '12', '1256,1257', '0', '10 Marla', '', '<p>St,12 Prime Location,Pair Plot,Near to Park,Masjid &amp; Commercial</p>', '03315454663', 'Mir Salman', '153312699874490.jpg', '2018-07-20', 14, 38, 7300000),
(154, '', '17', '565', 'General Plot', '10 Marla', '', '<p>St,17 Near to Commercial +Boulevard Laval Height And Laval Plot</p>', '03325454249', 'Muhmmad Waqas', '153312713445856.jpg', '2018-07-27', 14, 39, 13500000),
(155, '', '17a', '578	', 'General Plot', '20 Marla', '', '<p>St,17a Prime Location,Back Open,Double Entrance,Height Location</p>', '03315454663', 'Mir Salman', '153312725836418.jpg', '2018-07-16', 14, 39, 13500000),
(156, '', '27', '212', 'General Plot', '20 Marla', '', '<p>St,27 Back open Near to M.R.Rode Near to Commercial</p>', '03325454249', 'Muhmmad Waqas', '153312749087749.jpg', '2018-07-17', 14, 39, 12500000),
(157, '', '', '244d', 'General Plot', '7 marla', '', '<p>St,11 Good Location,Back Open,Near to Hospital &amp; Commercial</p>', '03315454663', 'Mir Salman', '153312826092122.jpg', '2018-07-16', 15, 40, 4500000),
(158, '', '', '270', 'General Plot', '7 marla', '', '<p>St,13 Near to Hub Commercial Laval Plot</p>', '03325454249', 'Muhmmad Waqas', '153312838959590.jpg', '2018-07-20', 15, 40, 4500000),
(159, '', '', '349', 'General Plot', '7 marla', '', '<p>St,14 Good Location,Near to Playground,Commercial &amp; Filtration Plant</p>', '03315454663', 'Mir Salman', '153312942522564.jpg', '2018-07-21', 15, 40, 3900000),
(160, '', '', '574', 'General Plot', '7 marla', '', '<p>St,22 Prime Location,Back to Boulevard,Near to Hospital &amp; Commercial</p>', '03315454663', 'Mir Salman', '15331297921668.jpg', '2018-07-19', 15, 40, 5000000),
(161, '', '', '826', 'General Plot', '7 marla', '', '<p>St, Boulevard Laval Plot Near to Park Commercial</p>', '03325454249', 'Muhmmad Waqas', '153313045692967.jpg', '2018-07-20', 15, 40, 4800000),
(163, '', '', '863', 'General Plot', '7 marla', '', '<p>St,24 Good Location,Level Plot,Near To Park&amp;Commerical</p>', '03315454670', 'Hayat Khan', '153313068513797.jpg', '2018-07-26', 15, 40, 5000000),
(164, '', '', '966', 'General Plot', '7 marla', '', '<p>St,42 Near to Park And Boulevard Laval Plot</p>', '03325454249', 'Muhmmad Waqas', '153313095936307.jpg', '2018-07-20', 15, 40, 4550000),
(165, '', '', '1964', 'Boulevard', '7 marla', '', '<p>Road E Boulevard,Prime Location,Near to Playground and Masjid</p>', '03315454663', 'Mir Salman', '153313108278314.jpg', '2018-07-19', 15, 40, 5200000),
(166, '', '', '2192,2193', 'General Plot', '7 marla', '', '<p>St,60 Pair Plot,Level &amp; Solid Land,Near to Masjid &amp; Commercial</p>', '03315454663', 'Mir Salman', '153313122283309.jpg', '2018-07-20', 15, 40, 4600000),
(167, '', '', '2699', 'General Plot', '7 marla', '', '<p>St,65 Prime Location,Back to Boulevard,Near to Park &amp; Commercia</p>', '03315454663', 'Mir Salman', '153313133626331.jpg', '2018-07-20', 15, 40, 5300000),
(168, '', '', '1295', 'General Plot', '5 Marla', '', '<p>St,44 Good Location,Near to Boulevard,Park &amp; Commercial</p>', '03315454663', 'Mir Salman', '153313170248955.jpg', '2018-07-30', 15, 41, 3000000),
(169, '', '', '1530', 'General Plot', '7 marla', '', '<p>St,58 Near to Park +Boulevard Laval Plot</p>', '03325454249', 'Muhmmad Waqas', '153313196973228.jpg', '2018-07-17', 15, 41, 3200000),
(170, '', '', '173', 'General Plot', '7 marla', '', '<p>St,5 Good Location,Back Open,Extra Land Paid,Map Possession Paid</p>', '03315454663', 'Mir Salman', '15331321539502.jpg', '2018-07-21', 15, 42, 4700000),
(171, '', '', '249', 'General Plot', '7 marla', '', '<p>St,05 Back open Near to Park Commercial And Japan Rode</p>', '03325454249', 'Muhmmad Waqas', '15331322613750.jpg', '2018-07-21', 15, 42, 3500000),
(172, '', '', '774', 'General Plot', '10 Marla', '', '<p>Good Location,Level Plot,Near To Park&amp;Commerical</p>', '03315454670', 'Hayat Khan', '153319207316950.jpg', '2018-07-28', 15, 43, 6800000),
(173, '', '', '375', 'General Plot', '5 Marla', '', '<p>St,16 Back Open Green Land Height and Laval Plot</p>', '03325454249', 'Muhmmad Waqas', '153319223936972.jpg', '2018-07-21', 15, 43, 2700000),
(174, '', '1761', '30,31', '0', '7 marla', '', '<p>St,25 Map Possession Paid,Level Plot,Solid Land,Near to Hospital &amp; Commercial</p>', '03315454663', 'Mir Salman', '15331924449761.jpg', '2018-07-17', 15, 44, 3400000),
(175, '', '', '1761', 'General Plot', '7 marla', '', '<p>Lane,2 Height Location Possession Area, Near to Park And Commerical</p>', '03325556046', 'Hayat Khan', '153319260398742.jpg', '2018-07-18', 15, 44, 3400000),
(176, '', '', '636', 'General Plot', '7 marla', '', '<p>St,42 Prime Location,Map Possession Paid,Near to Masjid &amp; Commercial</p>', '03315454663', 'Mir Salman', '153319277986108.jpg', '2018-07-21', 15, 44, 4300000),
(177, '', '', '642', 'Boulevard', '7 marla', '', '<p>Zaid Bin Haris Road,Prime Location,Level Plot,Walking Distance to Masjid</p>', '03315454663', 'Mir Salman', '153319292056852.jpg', '2018-08-17', 15, 44, 4800000),
(178, '', '', '1202', 'Corner', '7 marla', '', '<p>St,74 Prime Location,Corner Plot,Extra Land Paid,Near to park</p>', '03315454663', 'Mir Salman', '153319312559100.jpg', '2018-07-16', 15, 44, 4600000),
(179, '', '', '1209', 'General Plot', '7 marla', '', '<p>St,75 Map+ Possession Paid Near to Park Commercial Laval Plot</p>', '03325454249', 'Muhmmad Waqas', '153319323131431.jpg', '2018-07-27', 15, 44, 3700000),
(180, '', '', '1236', 'Corner', '7 marla', '', '<p>St,75 Prime Location,Corner Plot,Map Possession Paid,Extra Land Paid</p>', '03315454663', 'Mir Salman', '153319334821055.jpg', '2018-07-30', 15, 44, 4400000),
(181, '', '', '1463', 'General Plot', '7 marla', '', '<p>St,07 Near to park + Lack Laval Plot</p>', '03325454249', 'Muhmmad Waqas', '153319350973047.jpg', '2018-07-17', 15, 40, 3800000),
(182, '', '', '1565', 'Boulevard', '7 marla', '', '<p>St, Boulevard Near to Masjad Commercial And Bahria height 6 Laval Plot</p>', '03325454249', 'Muhmmad Waqas', '153319360394739.jpg', '2018-07-17', 15, 44, 4600000),
(183, '', '', '84', 'General Plot', '7 marla', '', '<p>St,2 Prime Location,Level Plot,Near to Hub Commercial &amp; Hospital</p>', '03315454663', 'Mir Salman', '153319397935434.jpg', '2018-08-01', 15, 45, 4200000),
(184, '', '', '542', 'General Plot', '7 marla', '', '<p>St,15 Near to Park + Masjad And Hub Commercial</p>', '03325454249', 'Muhmmad Waqas', '153319412266963.jpg', '2018-07-17', 15, 45, 3400000),
(185, '', '', '936', 'General Plot', '7 marla', '', '<p>St,25 Good Location,Possession Paid,Near to Playground &amp; Commercial</p>', '03315454663', 'Mir Salman', '153319420979489.jpg', '2018-08-01', 15, 45, 3600000),
(186, '', '', '1242', 'General Plot', '7 marla', '', '<p>St,32 Prime Location,Near to Boulevard,Walking Distance to Playground</p>', '03315454663', 'Mir Salman', '153319430395753.jpg', '2018-08-01', 15, 45, 4100000),
(187, '', '', '1582', 'General Plot', '7 marla', '', '<p>St,45 Prime Location,Level Plot,Solid Land,Near to Boulevard</p>', '03315454663', 'Mir Salman', '153319444674371.jpg', '2018-08-01', 15, 45, 4200000),
(188, '', '', '73', 'General Plot', '22 Marla', '', '<p>St,11 Near to Park Commercial Laval plot</p>', '03325454249', 'Muhmmad Waqas', '153319475915591.jpg', '2018-07-27', 15, 46, 9200000),
(189, '', '11-B', '26', 'Park Face', '10 Marla', '', '<p>Back Open Height Location Ready For Possession<br />\r\nNear DHA Phase 3 and Japan road</p>', '+92324 54 54 247', 'Dilawar javed ', '153319520915453.jpg', '2018-05-31', 16, 47, 4900000),
(190, '', '13', '10', 'General Plot', '1 Kanal', '', '<p>Possession area extra land Near Park and Masjid</p>', '+92324 54 54 247', 'Dilawar javed ', '153319533024.jpg', '2018-06-28', 20, 53, 8700000),
(191, '', '10', '23,24', 'General Plot', '20 Marla', '', '<p>Possession area extra land Near Park and Masjid</p>', '+92324 54 54 247', 'Dilawar javed ', '15331955329235.jpg', '2018-06-27', 16, 48, 8700000),
(192, '', '6', '13', 'General Plot', '20 Marla', '', '<p>extra land Height view sami develop</p>', '+92324 54 54 247', 'Dilawar javed ', '153319578413625.jpg', '2018-04-16', 16, 48, 9000000),
(193, '', '2', 'on Damand', 'General Plot', '20 Marla', '', '<p>Height location Near Park and masjid</p>', '+92324 54 54 247', 'Dilawar javed ', '153319597294448.jpg', '2018-04-16', 16, 49, 16000000),
(194, '', '29/1', '21', 'General Plot', '5 Marla', '', '<p>Possession Area near to School and park</p>', '03330666676', 'Muhammad Zubair', '153319658525721.jpg', '2018-07-26', 20, 50, 6500000),
(195, '', '6B', '4	', 'Park Face', '5 Marla', '', '<p>Park face Near To BOULEVARD and Commercial</p>', ' 03330666676', ' Muhammad Zubair', '153319670839393.jpg', '2018-07-21', 20, 50, 5200000),
(196, '', '10', '13', 'General Plot', '5 Marla', '', '<p>Possession Area Near to Head office and CINEPAX</p>', ' 03330666676', 'Muhammad Zubair', '153319686130703.jpg', '2018-07-20', 20, 50, 5000000),
(197, '', '26', '12', 'General Plot', '5 Marla', '', '<p>Development Start</p>', '03330666676', 'Muhammad Zubair', '153319724141642.jpg', '2018-07-19', 20, 50, 3100000),
(198, '', '15D', '7', 'General Plot', '5 Marla', '', '<p>Near To Possession</p>', '03330666676', 'Muhammad Zubair', '153319775043080.jpg', '2018-07-20', 20, 50, 4500000),
(199, '', '16', '12', 'Park Face', '5 Marla', '', '<p>Development Start near to zoo and Hospital</p>', '03330666676', 'Muhammad Zubair', '153319787866760.jpg', '2018-07-28', 20, 50, 3600000),
(200, '', 'Road 2', '183', 'Boulevard', '8 Marla', '', '<p>BOULEVARD paid</p>', '03330666676', 'Muhammad Zubair', '153319811734373.jpg', '2018-07-14', 20, 51, 5000000),
(201, '', '1', '4', 'General Plot', '8 Marla', '', '<p>Possession Area Near to Head office and CINEPAX</p>', '03330666676', 'Muhammad Zubair', '15331983667234.jpg', '2018-07-27', 20, 51, 7500000),
(202, '', '41B', '5', 'General Plot', '8 Marla', '', '<p>Development Start</p>', '03330666676', 'Muhammad Zubair', '15331987406290.jpg', '2018-08-02', 20, 51, 5300000),
(203, '', '14', '15A', 'General Plot', '10 Marla', '', '<p>Possession Area Near to commercial and park face</p>', '03330666676', 'Muhammad Zubair', '153319940085648.jpg', '2018-07-16', 20, 52, 11500000),
(204, '', '23	', '73J	', 'General Plot', '10 Marla', '', '<p>Map+ Possession + Paid<br />\r\n&nbsp;</p>', '03330666676', 'Muhammad Zubair', '15331995787227.jpg', '2018-07-19', 20, 52, 11500000),
(205, '', '13	', '25', 'General Plot', '20 Marla', '', '<p>Possession Area near to School and park<br />\r\n&nbsp;</p>', '03330666676', 'Muhammad Zubair', '153319976567713.jpg', '2018-07-27', 20, 52, 8500000),
(206, '', 'Road 4', '22', 'Boulevard', '10 Marla', '', '<p>BOULEVARD paid<br />\r\n&nbsp;</p>', '03330666676', 'Muhammad Zubair', '153320018178855.jpg', '2018-07-26', 20, 52, 9000000),
(207, '', 'Road 6/1	', '21F', 'Boulevard', '10 Marla', '', '<p>Near To Possession<br />\r\n&nbsp;</p>', '03330666676', 'Muhammad Zubair', '153320056769624.jpg', '2018-07-26', 20, 50, 7500000),
(208, '', 'Road 6/1	', '21F	', 'Boulevard', '10 Marla', '', '<p>Near To Possession<br />\r\n&nbsp;</p>', '03330666676', 'Muhammad Zubair', '153320080998632.jpg', '2018-07-26', 20, 52, 7500000),
(209, '', '8', '22', '0', '10 Marla', '', '<p>Near To Possession<br />\r\n&nbsp;</p>', '03330666676', 'Muhammad Zubair', '153320148816045.jpg', '2018-07-14', 20, 52, 9500000),
(210, '', '6', '37', 'General Plot', '10 Marla', '', '<p>Extra land plot<br />\r\n&nbsp;</p>', '03330666676', 'Muhammad Zubair', '153320181739915.jpg', '2018-08-01', 20, 52, 7500000),
(211, '', 'Road 1	', '21', 'Boulevard', '10 Marla', '', '<p>Near To Possession And Near to City Centere<br />\r\n&nbsp;</p>', '03330666676', 'Muhammad Zubair', '153320201892015.jpg', '2018-07-26', 20, 52, 8500000),
(212, '', '7', '14', 'General Plot', '10 Marla', '', '<p>Development Start new to City Centere<br />\r\n&nbsp;</p>', '03330666676', 'Muhammad Zubair', '15332021766298.jpg', '2018-08-02', 20, 52, 6000000),
(213, '', 'Road 1/1', '8', 'Boulevard', '20 Marla', '', '<p>b/w+ Possession paid</p>', '03330666676', 'Muhammad Zubair', '153320229396563.jpg', '2018-07-27', 20, 53, 17500000),
(214, '', '14', '14', 'General Plot', '20 Marla', '', '<p>Near To Possession Near To BOULEVARD and Commercial<br />\r\n&nbsp;</p>', '03330666676', 'Muhammad Zubair', '153320250510034.jpg', '2018-07-17', 20, 53, 17800000),
(215, '', '18', '11', 'General Plot', '20 Marla', '', '<p>Possession Area near to zoo and Hospital<br />\r\n&nbsp;</p>', '03330666676', 'Muhammad Zubair', '153320285687425.jpg', '2018-07-19', 20, 53, 16500000),
(216, '', '1', '189', 'General Plot', '20 Marla', '', '<p>Development Start<br />\r\n&nbsp;</p>', '03330666676', 'Muhammad Zubair', '153320303871101.jpg', '2018-07-27', 20, 53, 11500000),
(217, '', '3', '10', 'General Plot', '20 Marla', '', '<p>Near To Possession AND Near to Chairman Villa<br />\r\n&nbsp;</p>', '03330666676', 'Muhammad Zubair', '153320320796739.jpg', '2018-08-02', 20, 53, 14500000),
(218, '', 'HILL TOP	', '24', 'Boulevard', '40 Marla', '', '<p>Hill top Road near to zoo and Hospital<br />\r\n&nbsp;</p>', '03330666676', 'Muhammad Zubair', '1533203569168.jpg', '2018-07-16', 20, 54, 35000000);

-- --------------------------------------------------------

--
-- Table structure for table `e_members`
--

CREATE TABLE `e_members` (
  `member_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `details` varchar(5000) NOT NULL,
  `display` varchar(5) NOT NULL,
  `displayorder` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_members`
--

INSERT INTO `e_members` (`member_id`, `name`, `city`, `details`, `display`, `displayorder`, `image`, `email`, `address`, `phone`) VALUES
(7, 'Client3', 'islamabad', '<p>we play the best</p>\r\n', 'yes', 3, '149621661314912977161.png', 'saimaabdullah75@yahoo.com', 'Head office: F& N property solutions Ltd,39 Heathfield Road, Croydon, CR01EZ', '051-8482494');

-- --------------------------------------------------------

--
-- Table structure for table `e_menu`
--

CREATE TABLE `e_menu` (
  `menuid` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `heading` varchar(10000) NOT NULL,
  `keywords` varchar(500) NOT NULL,
  `discription` varchar(1000) NOT NULL,
  `details` varchar(5000) NOT NULL,
  `display` varchar(5) NOT NULL,
  `displayorder` int(11) NOT NULL DEFAULT '10',
  `image` varchar(250) NOT NULL,
  `pagetitle` varchar(500) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sub` varchar(5) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_menu`
--

INSERT INTO `e_menu` (`menuid`, `name`, `slug`, `heading`, `keywords`, `discription`, `details`, `display`, `displayorder`, `image`, `pagetitle`, `parent_id`, `level`, `sub`, `position`) VALUES
(34, 'Trainings', 'Trainings', 'Trainings', '', '', '<p>Trainings</p>', 'yes', 4, '', 'Trainings', 0, 0, '', 'navigation,footer'),
(36, 'Contact us', 'Contact', 'Contact', '', '', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'yes', 8, '1529663551204314561526722860.jpg', 'Contact', 0, 0, '', 'navigation'),
(40, 'home', 'home', 'wellcome', 'kayani', 'kayani', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'yes', 1, '1526559111217slider-image-4.jpg', 'home', 0, 0, '', 'navigation,footer'),
(41, 'Bahria Town Projects', 'Bahra', '', '', '', '<p>hi</p>', 'yes', 2, '', 'Bahra', 0, 0, '', 'navigation'),
(42, 'About Us', 'About', 'About US', 'kvjkjvj', 'jchjfjcj', '<p>About US</p>', 'yes', 7, '1529670682375314561526722860.jpg', 'About', 0, 0, '', 'navigation'),
(43, 'Gallery', 'gallery', '', '', '', '', 'yes', 10, '1530280825488images_(1).jpg', 'Galley', 0, 0, '', 'navigation,footer'),
(45, 'Maps', 'Maps', 'Maps', '', '', '<p>hi</p>', 'yes', 7, '1533558830882153293175333download.jpg', 'Maps', 0, 0, '', 'navigation');

-- --------------------------------------------------------

--
-- Table structure for table `e_packeg`
--

CREATE TABLE `e_packeg` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_packeg`
--

INSERT INTO `e_packeg` (`id`, `name`, `parent_id`) VALUES
(2, 'Bahria Town Islamabad', 41),
(4, 'Bahria Town Islamabad Houses', 41),
(5, 'Islamabad Projects', 41),
(6, 'Bahria Town Karachi', 41),
(7, 'Bahria Town Apartments', 41),
(8, 'Faisalabad Projects', 41);

-- --------------------------------------------------------

--
-- Table structure for table `e_phase`
--

CREATE TABLE `e_phase` (
  `id` int(200) NOT NULL,
  `phase_name` varchar(100) NOT NULL,
  `cat_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_phase`
--

INSERT INTO `e_phase` (`id`, `phase_name`, `cat_id`) VALUES
(8, 'Bahria Town Phase 2 Plot For Sale', 6),
(9, 'Bahria Town Phase 3 Plot For Sale', 6),
(10, 'Bahria Town Phase 4 Plot For Sale', 6),
(11, 'Bahria Town Phase 6 Plot For Sale', 6),
(12, 'Bahria Town Phase 7 Plot For Sale', 6),
(13, 'Plot size 5 Marla 125 Sq yard', 7),
(14, 'Plot size 10 Marla 250 Sq yard', 7),
(15, 'Plot size 20 Marla 500 Sq yard', 7),
(16, 'Plot size. 5 Marla .125 Sq yard', 9),
(17, 'Plot size.8 Marla .200 Sq yard', 9),
(18, 'Plot size. 10 Marla .250 Sq yard', 9),
(19, 'Plot size. 20 Marla .500 Sq yard', 9),
(20, 'Plot size 5 Marla 125 Sq yard', 10),
(21, 'Plot size 10 Marla 250 Sq yard', 10),
(22, 'Plot Size 5 Marla Dimention 30*40 fit ( 125 Sq yards )', 11),
(23, 'Abu Bakar Commercial', 13),
(24, 'Acantilado Commercial', 13),
(25, 'Ali Block Commercial', 13),
(26, 'E Commercial', 13),
(27, 'Hub Commercial', 13),
(28, 'Liner Commercial', 13),
(29, 'Mini Extension 2', 13),
(30, 'Overseas Commercials', 13),
(31, 'Phase 7 Commercial', 13),
(32, 'Rafi Commercial', 13),
(33, 'River View Commercial', 13),
(34, 'Spring Commercial', 13),
(35, 'Umer Block Commercial', 13),
(36, 'Usman Block Commercial', 13),
(37, 'Plot Size 5 Marla Dimention 25 * 50 fit', 14),
(38, 'Plot Size 10 Marla Dimention 35 * 70 fit', 14),
(39, 'Plot Size 20 Marla Dimention 50 * 90 fit', 14),
(40, 'Abubakar Block', 15),
(41, 'Ali Block', 15),
(42, 'Khalid Block', 15),
(43, 'Rafi Block', 15),
(44, 'Umer Block', 15),
(45, 'Usman Block', 15),
(46, 'Usman D Block', 15),
(47, 'Plot size 10 Marla 250 Sq yard', 16),
(48, 'Plot size 1-Kanal 500 Sq yard', 16),
(49, 'Plot size 2 Kanal 1000 Sq yard', 16),
(50, 'Plot Size 5 Marla', 20),
(51, 'Plot Size 8 Marla', 20),
(52, 'Plot Size 10 Marla', 20),
(53, 'Plot Size 20 Marla', 20),
(54, 'Plot Size 40 Marla', 20);

-- --------------------------------------------------------

--
-- Table structure for table `e_plote`
--

CREATE TABLE `e_plote` (
  `id` int(100) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `block` varchar(200) NOT NULL,
  `street` varchar(500) NOT NULL,
  `plote_no` varchar(200) NOT NULL,
  `price` int(200) NOT NULL,
  `detail` text NOT NULL,
  `plote_size` varchar(200) NOT NULL,
  `plote_type` varchar(200) NOT NULL,
  `feature` varchar(500) NOT NULL,
  `date` varchar(200) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `e_plot_size`
--

CREATE TABLE `e_plot_size` (
  `id` int(200) NOT NULL,
  `name` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_plot_size`
--

INSERT INTO `e_plot_size` (`id`, `name`) VALUES
(7, '10 Marla'),
(8, '1 Kanal'),
(9, '26 Marla'),
(10, '5 Marla'),
(11, '20 Marla'),
(12, '8 Marla'),
(13, '9 Marla'),
(14, '6 Marla'),
(15, '7 marla'),
(16, '13 Marla'),
(17, '1'),
(18, '2'),
(19, '22 Marla'),
(20, '40 Marla');

-- --------------------------------------------------------

--
-- Table structure for table `e_plot_type`
--

CREATE TABLE `e_plot_type` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_plot_type`
--

INSERT INTO `e_plot_type` (`id`, `name`) VALUES
(1, 'Residential Plot'),
(2, 'Commercial Plot'),
(3, 'Houses For Sale'),
(4, 'General Plot'),
(5, 'Boulevard/Corner'),
(6, 'Corner'),
(7, 'Boulevard'),
(8, 'Corner Park Face'),
(9, 'Park Face'),
(10, 'B/v'),
(12, 'Boulevard + Park Face'),
(13, '1');

-- --------------------------------------------------------

--
-- Table structure for table `e_products`
--

CREATE TABLE `e_products` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `pagetitle` varchar(250) NOT NULL,
  `keywords` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `displayorder` int(50) NOT NULL,
  `details` varchar(250) NOT NULL,
  `display` enum('yes','no') NOT NULL,
  `position` varchar(50) NOT NULL,
  `image` varchar(250) NOT NULL,
  `cat_id` int(250) NOT NULL,
  `sub_cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_products`
--

INSERT INTO `e_products` (`id`, `name`, `slug`, `pagetitle`, `keywords`, `description`, `price`, `displayorder`, `details`, `display`, `position`, `image`, `cat_id`, `sub_cat_id`) VALUES
(1, 'Almond-GB01', 'Kagzi-Almond', 'Almond', 'Almond', 'Almond', '880', 1, '<p>1kg Pack,Almonds are one of the world&rsquo;s most nutritious and versatile nuts, renowned for their many health benefits and culinary uses.</p>\r\n', 'yes', 'feature,shop', '1496815917single-product-1.jpg', 13, 0),
(2, 'PINE NUTS', 'pine-nuts', 'PINE NUTS', 'Dry-Fruits', 'Dry-Fruits', '2880', 2, '<p>Pine nuts are the edible seeds of pines. About 20 species of pine produce seeds large enough to be worth harvesting; in other pines the seeds are also edible, but are too small to be of notable value as a human food.</p>\r\n', 'yes', 'feature', '1496815966product1.jpg', 13, 0),
(3, 'Raisin', 'EXCLUSIVE-STYLE', 'Raisin', 'Dry-Fruits', 'Dry-Fruits', '550', 1, '<p>A raisin is a dried grape. Raisins are produced in many regions of the world and may be eaten raw or used in cooking, baking, and brewing.</p>\r\n', 'yes', 'feature,shop', '1496815981product2.jpg', 13, 0),
(4, 'Dry Mulberry-GB14', 'Good Quality Dry Mulberry', 'Dry Mulberry', 'Dry-Fruits', 'Dry-Fruits', '750', 4, '<p>Our dried mulberries have a naturally sweet flavor with no added sugar. They provide unusually high levels of protein and iron for a fruit, and are also a rich source of vitamin C, fiber, calcium, and antioxidants. All-natural dried white mulberri', 'yes', 'feature', '1497361513mulberry.jpg', 13, 0),
(5, 'Walnut', 'Good Quality Walnut', 'Walnut', 'Dry-Fruits', 'Dry-Fruits', '700', 5, '<p>These nuts are rich in oil, and are widely eaten both fresh and in cookery. Walnuts go really well in cakes, with the two most popular being the Date and walnut cakes and the banana and walnut cake.</p>\r\n', 'yes', 'feature,shop', '1497361730walnuts.png', 13, 0),
(7, 'Apricot Oil-08', 'Pure Apricot Oil', 'Apricot Oil', 'Dry-Fruits', 'Dry-Fruits', '2500', 5, '<p>Rich in essential fatty acids like oleic and linoleic acid, apricot kernel oil is high in vitamin A.Since it easily penetrates the skin,it is good oil for prematurely aged,dry or irritated skin.The excellent softening and moisturizing properties</', 'yes', 'feature,shop', '1497360778appoil.jpg', 7, 0),
(8, 'Apricot Kernel-06', 'Apricot Seed', 'Apricot Kernel', 'Dry-Fruits', 'Dry-Fruits', '1050', 2, '<p>1kg Pack . An apricot kernel is the seed of an apricot. It is known for containing amygdalin, a poisonous compound. Together with the related synthetic compound laetrile, amygdalin has been marketed as an alternative cancer treatment.</p>\r\n', 'yes', 'feature,shop', '1497361880apricotseed1.jpg', 13, 0),
(9, 'Pure Honey', 'Home-Made-Honey', 'Pure Honey', 'Honey', 'Home-made-Honey', '1500', 10, '<p>Honey is certainly an old product that has won over the hearts of many in the natural healing niche. Honey is the way to go not just to replace sugar, but to add nutrition and wellness to your life. At its basic makeup, 300gram pure homemade honey', 'yes', 'feature,shop', '1497361313honey.jpg', 7, 0),
(10, 'Dry Apricot-GB13', 'Natural Taste', 'Dry Apricot', 'Dry-Fruits', 'Dry-Fruits', '880', 5, '<p>1 kg pack,Dried apricots are a type of traditional dried fruit. When treated with sulfur dioxide, the color is vivid orange. Organic fruit not treated with sulfur vapor is darker in color and has a coarser texture.</p>\r\n', 'yes', 'feature,shop', '1496921472cart-1.jpg', 13, 0),
(11, 'Almond Oil GB03', 'Pure-Almond-Oil', 'Almond Oil', 'Dry-Fruits', 'Dry-Fruits', '2500', 6, '<p>It can be used to gently dislodge debris from deep within skin pores and follicles, and also may help prevent future acne because of its vitamin A content. You can even create a natural facial scrub using fine sugar mixed with sweet almond oil,</p', 'yes', 'feature,shop', '1497360393almondoil1.jpg', 7, 0),
(12, 'Walnut Oil', 'Pure Walnut Oil', 'Walnut Oil', 'Dry-Fruits', 'Dry-Fruits', '2800', 6, '<pre>\r\nWalnut Oil Benefits For Skin,Cholesterol,Fighting Wrinkles,Remedy For Infection,Helps Treat Psoriasis,Great Antioxidant,Walnut Oil Benefits For Hair,Helps Fight Hair Loss,Fights Dandruff,Reduces Risk Of Cardiovascular Diseases,Boosts Blood Ves', 'yes', 'feature,shop', '1497360499walnutoil.jpg', 7, 0),
(13, 'Salajeet', 'NATURAL-SALAJEET', 'Salajeet', 'Dry-Fruits', 'Dry-Fruits', '900', 7, '<ul>\r\n	<li>Best For Men Power</li>\r\n	<li>Best for Backbone&nbsp;</li>\r\n	<li>Best for Knees Pain</li>\r\n	<li>Best for Skin Treatment</li>\r\n	<li>Best For Pimples&nbsp;</li>\r\n	<li>Best to Burn Fats</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1518270970bukak.JPG', 7, 0),
(14, 'Ladies Hand Made Cap GB304', 'Ladies-Hand-Made-Cap', 'Ladies-Hand-Made-Cap', 'Ladies-Hand-Made-Cap', 'Ladies-Hand-Made-Cap', '4000', 13, '<ul>\r\n	<li>Local hand made full stiched cap,its also avaible in different colors.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1497371133LocalLadiesHandMadeCap001.jpg', 12, 0),
(15, 'Hand Made Ladies Woolen Shawl GB23', 'Hand-Made-Ladies-Woolen-Shawl', 'Hand-Made-Ladies-Woolen-Shawl', 'Hand-Made-Ladies-Woolen-Shawl', 'Hand-Made-Ladies-Woolen-Shawl', '4000', 8, '<ul>\r\n	<li>Pure Local woolen Ladies Shawl available in different colors. and different design,s</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1497371217LocalLadiesHandMadeShawl001.jpg', 12, 0),
(16, 'Gents Local Cap With Shaati GB19', 'Gents-Local-Cap-With-Shaati', 'Gents-Local-Cap-With-Shaati', 'Gents-Local-Cap-With-Shaati', 'Gents-Local-Cap-With-Shaati', '2000', 8, '<ul>\r\n	<li>Gents Local Cap available in different Colors with Shaati.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1497371377GentsLocalCap003.jpg', 12, 0),
(17, 'Gents Woolen Shawl GB20', 'Gents-Woolen-Shawl', 'Gents-Woolen-Shawl', 'Gents-Woolen-Shawl', 'Gents-Woolen-Shawl', '4000', 12, '<ul>\r\n	<li>Gents Woolen Hand made Shawl are available in different colors</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1497371512GentsWoolenShawl001.jpg', 12, 0),
(18, 'Female Hand Made Pouch GB305', 'Female-Hand-Made-Pouch', 'Female-Hand-Made-Pouch', 'Female-Hand-Made-Pouch', 'Female-Hand-Made-Pouch', '1800', 10, '<ul>\r\n	<li>Ladies Pure handmade pouches available in different color,s and design,s</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1497371606LocalLadiesHandMadeWallet001.jpg', 12, 0),
(19, 'Gents Local Cap GB18', 'Gents-Local-Cap', 'Gents-Local-Cap', 'Gents-Local-Cap', 'Gents-Local-Cap', '1000', 10, '<ul>\r\n	<li>Local Gents cap available in different colors.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1497371318GentsLocalCap002.jpg', 12, 0),
(20, 'Local Handmade Bags', 'Handmade-Bags7', 'Local Handmade Bags', '', '', '1800', 1, '<p>local Handmade small bags are available in different colors and designs</p>\r\n', 'yes', 'feature,shop', '1497371690LocalLadiesHandMadeWallet.jpg', 12, 0),
(21, 'Local Handmade Gents Wallet', 'Gents Wallet', 'Local Handmade Gents Wallet', '', '', '1500', 10, '<p>Local handmade Gents Wallets are available in different colors and designs</p>\r\n', 'yes', 'feature,shop', '1497372032GentsLocalWallet.jpg', 12, 0),
(22, 'Local Handmade Sceneries', 'Sceneries', 'Local Handmade Sceneries', 'Local Handmade Sceneries', 'Local Handmade Sceneries', '15500', 1, '<p>Local Handmade&nbsp;Sceneries for wall decoration available with in size 48x24</p>\r\n', 'yes', 'feature,shop', '1497372595Scenery001-1.jpg', 12, 0),
(28, 'Local Handmade Ladies Cap', 'Ladies Cap', 'Local Handmade Ladies Cap', '', '', '3200', 1, '<p>Ladies pure handmade local cap</p>\r\n', 'yes', 'feature,shop', '1497370996LocalLadiesHandMadecap.jpg', 12, 0),
(36, 'Local Handmade Sceneries', 'Sceneries', 'Local Handmade Sceneries', 'Local Handmade Sceneries', 'Local Handmade Sceneries', '3800', 1, '<p>Local Handmade Stiched&nbsp;Sceneries are available for Wall Decoration with in size 48x24</p>\r\n', 'yes', 'feature,shop', '1497374840Scenery006-1.jpg', 12, 0),
(37, 'Local Handmade Pack of 3 Sceneries', 'Pack of 3 Sceneries', 'Local Handmade Pack of 3 Sceneries', 'Local Handmade Pack of 3 Sceneries', 'Local Handmade Pack of 3 Sceneries', '4800', 1, '<p>Local Handmade&nbsp;Sceneries pack of 3 are available in different sizes and designs</p>\r\n', 'yes', 'feature,shop', '1497374965SceneryPackOf3.jpg', 12, 0),
(38, 'Local Handmade Sceneries', 'Sceneries', 'Local Handmade Sceneries', 'Local Handmade Sceneries', 'Local Handmade Sceneries', '3500', 1, '<p>Local Handmade&nbsp;Sceneries for wall decoration with in size of 36x12</p>\r\n', 'yes', 'feature,shop', '1497375059Scenery005-1.jpg', 12, 0),
(39, 'Local Handmade Sceneries', 'Coushans', 'Coushans', 'Coushans', 'Coushans', '1200', 1, '<p>Local Handmade Coushans are available in different sizes and designs</p>\r\n', 'yes', 'feature,shop', '1497376257Coushion001-1.jpg', 12, 0),
(40, 'Local Handmade Sceneries', 'Coushans', '', '', '', '1200', 1, '<p>Local Handmade Coushans are available in different sizes and designs</p>\r\n', 'yes', 'feature,shop', '1497376320Coushion002-1.jpg', 12, 0),
(41, 'Local Handmade Sceneries', 'Sceneries', 'Local Handmade Sceneries', 'Local Handmade Sceneries', 'Local Handmade Sceneries', '3000', 1, '<p>Local Handmade Sceneries are available in different sizes and designs</p>\r\n', 'yes', 'feature,shop', '1497376414Scenery008-1.jpg', 12, 0),
(42, 'Local Handmade Sceneries', 'Sceneries', 'Local Handmade Sceneries', 'Local Handmade Sceneries', 'Local Handmade Sceneries', '15000', 1, '<p>Local Handmade Sceneries are available in different sizes and designs for Wall decoration 48x24</p>\r\n', 'yes', 'feature,shop', '1497376474Scenery007-1.jpg', 12, 0),
(43, 'Local Handmade Sceneries', 'Sceneries', '', '', '', '4000', 1, '<p>Local Handmade Sceneries are available in different sizes and designs for Wall decoration 40x20</p>\r\n', 'yes', 'feature,shop', '1497376576Scenery009-1.jpg', 12, 0),
(49, 'Local Handmade Ladies Cap', 'Ladies Cap', '', '', '', '4200', 1, '<p>Ladies handmade cap ,&nbsp;</p>\r\n', 'yes', 'feature,shop', '1497425186Jewelerly001-6.jpg', 0, 0),
(50, 'Stones Jewellery', 'Real Stone Jewellery', '', '', '', '1200', 1, '<p>Real stone jewellery available in organe color</p>\r\n', 'yes', '', '1497425268Jewelerly001-7.jpg', 0, 0),
(51, 'Antique Stone Locket GB04', 'Antique-stone-Locket', 'Antique-stone-Locket', 'Antique-stone-Locket', 'Antique-stone-Locket', '1500', 5, '<p>Antique Design Stones Locket available in Orange color and also available in different colors&nbsp;</p>\r\n', 'yes', 'feature,shop', '1497427067Jewelerly001-8.jpg', 9, 0),
(52, 'Antique Stone Locket GB09', 'Antique-Stone-Locket', 'Antique-Stone-Locket', 'Antique-Stone-Locket', 'Antique-Stone-Locket', '2200', 5, '<p>Antique Locket with Blue Lapaz Orignal Stone Beads Handmade Locket</p>\r\n', 'yes', 'feature,shop', '1497427288Jewelerly001-9.jpg', 9, 0),
(53, 'Real Stones Jewellery', 'Antique and Stone Locket', '', '', '', '2800', 1, '<p>Real Antique Locket in Oval Shape with Feroza Stone Beads</p>\r\n', 'yes', '', '1497427481Jewelerly001-10.jpg', 9, 0),
(54, 'Antique and Stone Locket GB10', 'Antique-Stone-Locket', 'Antique-Stone-Locket', 'Antique-Stone-Locket', 'Antique-Stone-Locket', '2800', 5, '<p>Antique Design Locket with Feroza and Garnet Pure Stone Beads inside</p>\r\n', 'yes', 'feature,shop', '1497427586Jewelerly001-11.jpg', 9, 0),
(55, 'Antique Stone Locket GB05', 'Antique-Stone-Locket', 'Antique-Stone-Locket', 'Antique-Stone-Locket', 'Antique-Stone-Locket', '3200', 5, '<p>Antique and Feroza Stone Beads Locket Pure Quality available.</p>\r\n', 'yes', 'feature,shop', '1497427897Jewelerly001-12.jpg', 9, 0),
(57, 'Antique Stone Locket GB06', 'Antique-Stone-Locket', 'Antique-Stone-Locket', 'Antique-Stone-Locket', 'Antique-Stone-Locket', '900', 5, '<p>An true&nbsp;<strong>antique</strong>&nbsp;(Latin: antiquus; &quot;old&quot;, &quot;ancient&quot;) is an item perceived as having value because of its aesthetic or historical significance and at least 100 years old, although today the term is ofte', 'yes', 'feature,shop', '15155763691 (28).jpg', 9, 0),
(94, 'Real Stones Jewellery', '', '', '', '', '1200', 1, '<p>Real Handmade Stone Jewellery with Real Stone</p>\r\n', 'yes', '', '15152280921 (21).jpg', 9, 0),
(96, 'Ladies Hand Made Pouch GB306', 'Ladies-Hand-Made-Pouch', 'Ladies-Hand-Made-Pouch', 'Ladies-Hand-Made-Pouch', 'Ladies-Hand-Made-Pouch', '800', 12, '<ul>\r\n	<li>Ladies Pure handmade pouches available in different color,s and design,s</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15155782001 (9).jpg', 12, 0),
(97, 'Ladies Hand Made Bag GB303', 'Ladies-Hand-Made-Bag', 'Ladies-Hand-Made-Bag', 'Ladies-Hand-Made-Bag', 'Ladies-Hand-Made-Bag', '800', 12, '<ul>\r\n	<li>Ladies hand made bag,s are making in Gilgit Baltistan.</li>\r\n	<li>Ladies hand made bag,s are availabel are different color,s.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15155777191 (6).jpg', 12, 0),
(98, 'Ladies Woolen Shawl GB307', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', '2500', 15, '<ul>\r\n	<li>Ladies Woolen Shawl Made in Gilgit Baltistan.&nbsp;</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15155765371 (11).jpg', 16, 0),
(102, 'Women Net Border Shawls', 'Women-Net-Border-Shawls', 'Women-Net-Border-Shawls', 'Women-Net-Border-Shawls', 'Women-Net-Border-Shawls', '2800', 10, '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:227px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"height:32px; width:227px\">From gilgit baltistan Women Net Border Shawls</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'yes', 'feature,shop', '15155686121 (53).jpg', 16, 0),
(103, 'Ring', 'AntiqueandStone ', 'RING', 'RING', 'Silver  with Real Stone', '3500', 10, '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:221px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"height:32px; width:221px\">Fromgilgitbaltistan real stoneRing</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'yes', 'feature', '15155692781 (47).jpg', 9, 0),
(104, 'Ladies Hand Made Bag GB301', 'Ladies-Hand-Made-Bag', 'Ladies-Hand-Made-Bag', 'Ladies-Hand-Made-Bag', 'Ladies-Hand-Made-Bag', '1500', 10, '<ul>\r\n	<li>&nbsp;Hand Embroidery LadiesHand Made Bag.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15155697031 (3).jpg', 12, 0),
(106, 'Silver-gold-jewelry-set', 'Silver-gold-jewelry-set', 'jewelry-set', 'GB05', 'SILVER GOLD', '4500', 10, '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:192px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"height:40px; width:192px\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; its Repersent Gilgit Baltistan caltural</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'yes', 'feature', '15155703661 (33).jpg', 9, 0),
(107, 'Ladies Hand Clutch GB302', 'Ladies-Hand-Clutch', 'Ladies-Hand-Clutch', 'Ladies-Hand-Clutch', 'Ladies-Hand-Clutch', '800', 10, '<ul>\r\n	<li>&nbsp;Ladies hand clutch,s are available in different&nbsp;colors and design,s</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15155706831 (1).jpg', 12, 0),
(108, 'woman pashmina shawls', 'woman-pashmina-shawls', 'woman-pashmina-shawls', 'woman-pashmina-shawls', 'woman-pashmina-shawls', '2200', 10, '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:223px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"width: 223px; height: 32px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hand Embroidery-on pashmina shawls</td', 'yes', 'feature', '15155751421 (4).jpg', 0, 0),
(110, ' Antique Stone Necklace GB', ' Antique-Stone-Necklace', ' Antique-Stone-Necklace', ' Antique-Stone-Necklace', ' Antique-Stone-Necklace ', '900', 10, '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:192px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"height:34px; width:192px\">\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;&nbsp;&nbsp;Antique-Real Stone Necklace&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td s', 'yes', 'feature,shop', '15155757621 (20).jpg', 9, 0),
(111, 'stone-Ring', 'stone-Ring', 'stone-Ring', 'stone-Ring', 'stone cuted', '600', 10, '', 'yes', 'feature', '15155758961 (49).jpg', 9, 0),
(112, 'Real stone Earrings', 'Real stone Earrings', 'Real stone Earrings', 'Real stone Earrings', 'stone cuted', '600', 10, '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:192px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"height:26px; width:192px\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; cuted stone Earrings</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'yes', 'feature', '15155760301 (40).jpg', 9, 0),
(113, 'Real stone Ruby Bracelet', 'Real stone Ruby Bracelet', 'Real stone Ruby Bracelet', 'Real stone Ruby Bracelet', 'stone cuted', '4000', 10, '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:192px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"height:36px; width:192px\">Real stone Ruby Bracelet, Stone Origin Hunza Gilgit. A perfect match with your Horoscope</td>\r\n		</tr>\r\n	</tbody>\r\n</tab', 'yes', 'feature,shop', '15155762891 (38).jpg', 9, 0),
(114, 'Silver locket with Real Stone', 'Silver locket with Real Stone', 'Silver  locket with Real Stone', 'Silver  locket  with Real Stone', 'stone cuted', '800', 10, '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:192px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"height:37px; width:192px\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Gems cuted stone locket</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'yes', 'feature', '15155768511 (35).jpg', 9, 0),
(115, 'stone Bracelet', 'stone Bracelet', 'stone Bracelet', 'stone Bracelet', 'stone cuted', '600', 10, '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:201px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"width: 201px; height: 29px;\">real cuted stone-Bracelet</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'yes', 'feature', '15155770561 (42).jpg', 9, 0),
(116, 'Real Stones Earrings in white colors ', 'Real Stones Earrings in white colors ', 'Real Stones Earrings in white colors ', 'Real Stones Earrings in white colors ', 'stone cuted', '600', 10, '<p>cuted stone Earrings white colors</p>\r\n', 'yes', 'feature', '15155772931 (41).jpg', 9, 0),
(124, 'Almond GB 02', 'Almond', 'Almond', 'Almond', 'Almond', '1499', 6, '<p>Finest Quality Almond 1kg, from Gilgit-Baltistan</p>\r\n', 'yes', 'feature,shop', '1515585700almond.jpg', 13, 0),
(125, 'Figs-GB16', 'Dry-Fruits', 'Dry-Fruits', 'Dry-Fruits', 'Dry-Fruits', '1399', 6, '<p>FIG, Angeer 1kg, Dry-Fruit Fig from Gilgit-Baltistan</p>\r\n', 'yes', 'feature,shop', '1515585801Figs.jpg', 13, 0),
(126, 'Dry-Apricot-GB15', 'Dry-Fruits', 'Dry-Fruits', 'Dry-Fruits', 'Dry-Fruits', '550', 6, '<p>Dry-Appricot from Gilgit-Baltistan</p>\r\n', 'yes', 'feature,shop', '1515585987Dry-Fruit-Apricot.jpg', 13, 0),
(127, 'woolen-shawls', 'woolen-shawls', 'woolen-shawls', 'woolen-shawls', 'woolen-shawls', '1500', 6, '<p>woolen-shawls in different prints</p>\r\n', 'yes', 'feature,shop', '1515586541GB42 (1).jpg', 10, 0),
(128, 'Ladies-Hand-Made-Pouches', 'Ladies-Hand-Made-Pouches', 'Ladies-Hand-Made-Pouches', 'Ladies-Hand-Made-Pouches', 'Ladies-Hand-Made-Pouches', '1200', 6, '<p>Ladies-Hand-Made-Pouches from Gilgit-Baltistan</p>\r\n', 'yes', 'feature,shop', '15156459951 (1).jpg', 12, 0),
(129, 'Ladies-Hand-Made-Bag', 'Ladies-Hand-Made-Bag6', 'Ladies-Hand-Made-Bag', 'Ladies-Hand-Made-Bag', 'Ladies-Hand-Made-Bag', '1500', 6, '<p>Ladies-Hand-Made-Bag from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '15156460781 (2).jpg', 12, 0),
(130, 'Hand Made Bag GB22', 'Hand-Made-Bag3', 'Hand Made Bag', 'Hand Made Bag', 'Hand Made Bag', '800', 15, '<ul>\r\n	<li>Hand Made Bag</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15156461581 (3).jpg', 12, 0),
(131, 'Ladies-Hand-Made-Pouches', 'Ladies-HandMade-Pouch1', 'Ladies-Hand-Made-Pouch', 'Ladies-Hand-Made-Pouch', 'Ladies-Hand-Made-Pouch', '1200', 10, '<p>Ladies-Hand-Made-Pouch from Gilgit-Baltistan</p>\r\n', 'yes', 'feature,shop', '15156462331 (6).jpg', 12, 0),
(132, 'Ladies-Hand-Made-Pouch', 'Ladies-HandMade-Pouch', 'Ladies-Hand-Made-Pouch', 'Ladies-Hand-Made-Pouch', 'Ladies-Hand-Made-Pouch', '1200', 6, '<p>Ladies-Hand-Made-Pouch</p>\r\n', 'yes', 'feature,shop', '15156463601 (8).jpg', 12, 0),
(133, 'Ladies-Hand-Made-Pouch', 'Ladies-Hand-Made-Pouches', 'Ladies-Hand-Made-Pouch', 'Ladies-Hand-Made-Pouch', 'Ladies-Hand-Made-Pouch', '1200', 10, '<p>Ladies-Hand-Made-Pouch made by Gilgit Baltistan Community</p>\r\n', 'yes', 'feature,shop', '15156464731 (9).jpg', 12, 0),
(135, 'Real-Stone-Feroza-Locket', 'Real-Stone-Feroza-Locket', 'Real-Stone-Feroza-Locket', 'Real-Stone-Feroza-Locket', 'Real-Stone-Feroza-Locket', '1200', 6, '<p>Real-Stone-Feroza-Locket , Stone Origin Gilgit-Baltistan.</p>\r\n', 'yes', 'feature,shop', '15156470631 (26).jpg', 9, 0),
(136, ' Blue Lapiz Ear Rings GB274', ' Blue Lapiz Ear Rings', ' Blue Lapiz Ear Rings', ' Blue Lapiz Ear Rings', ' Blue Lapiz Ear Rings', '900', 5, '<ul>\r\n	<li>Real-Stone-BlueLapiz-Ear-Rings, A Perfect Match for You Horoscope, Stone Origin Gilgit Baltistan</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15156472911 (19).jpg', 9, 0),
(137, 'Real-Stone-Haqeeq-Locket', 'Real-Stone-Haqeeq-Locket', 'Real-Stone-Haqeeq-Locket', 'Real-Stone-Haqeeq-Locket', 'Real-Stone-Haqeeq-Locket', '1200', 2, '<p>Real-Stone-Haqeeq-Locket, in Different Color, Best for your Horoscope</p>\r\n', 'yes', 'feature,shop', '15156474221 (25).jpg', 9, 0),
(138, 'Real-Stone-BlueLapiz-Locket', 'Real-Stone-BlueLapiz-Locket', 'Real-Stone-BlueLapiz-Locket', 'Real-Stone-BlueLapiz-Locket', 'Real-Stone-BlueLapiz-Locket', '1200', 2, '<p>Real-Stone-BlueLapiz-Locket , Best for Horoscope, Stone Origin Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '15156475131 (24).jpg', 9, 0),
(139, 'Real-Stone-Haqeeq-Locket', 'Real-Stone-Haqeeq-Locket', 'Real-Stone-Haqeeq-Locket', 'Real-Stone-Haqeeq-Locket', 'Real-Stone-Haqeeq-Locket', '1200', 4, '<p>Real Stone Yellow Haqeeq-Locket, Best for Your Horoscope, Stone Origin Gilgit-Baltistan</p>\r\n', 'yes', 'feature,shop', '15156476611 (27).jpg', 9, 0),
(140, 'Tourmaline-Real-Stone', 'Tourmaline-Real-Stone', 'Tourmaline-Real-Stone', 'Tourmaline-Real-Stone', 'Tourmaline-Real-Stone', '4500', 2, '<p>Tourmaline-Real-Stone-Tourmaline-Locket in Different Colors</p>\r\n', 'yes', 'feature,shop', '15156479881 (34).jpg', 9, 0),
(141, 'Real-Stone-Jewelry', 'Real-Stone-Jewelry', 'Real-Stone-Jewelry', 'Real-Stone-Jewelry', 'Real-Stone-Jewelry', '900', 2, '<p>Real-Stone-Jewelry from Gilgit-Baltistan</p>\r\n', 'yes', 'feature,shop', '15156481391 (36).jpg', 9, 0),
(142, 'Real-stone-Bracelet', 'Real-stone-Bracelet', 'Real-stone-Bracelet', 'Real-stone-Bracelet', 'Real-stone-Bracelet', '1200', 2, '<p>Real Multi Color stones Bracelet Haqeeq, Rubby,Aqua,Tourmaline,Best for Horoscope.</p>\r\n', 'yes', 'feature,shop', '15156483021 (39).jpg', 9, 0),
(143, 'Gents Local Coat GB21', 'Gents-Local-Coat', 'Gents-Local-Coat', 'Gents-Local-Coat', 'Gents-Local-Coat', '7000', 5, '<ul>\r\n	<li>Gents Coat Made by Local Pattu Staff Woolen Gilgit Baltistan</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', 'yes', 'feature,shop', '1516774842IHEL6445.JPG', 12, 0),
(144, 'Gents Local Coat GB24', 'Gents-Local-Coat', 'Gents-Local-Coat', 'Gents-Local-Coat', 'Gents-Local-Coat', '6500', 5, '<ul>\r\n	<li>Woolen Gents Coat Made by Local Pattu Stuff,&nbsp; Gilgit-Baltistan</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1516774903INTD0662.JPG', 12, 0),
(145, 'Dry-Mulberry-(shah-toot)GB16', 'Dry-Mulberry-(shah-toot)', 'Dry-Mulberry-(shah-toot)', 'Dry-Mulberry-(shah-toot)', 'Dry-Mulberry-(shah-toot)', '1200', 5, '<p>Dry-Mulberry-(shah-toot) 500gram from Gilgit-Baltistan</p>\r\n', 'yes', 'feature,shop', '1516873492shah toot.jpg', 13, 0),
(147, 'Tiger Eye stone ', 'Tiger Eye stone ', 'Tiger Eye stone ', 'Tiger Eye stone ', 'Tiger Eye stone ', '2200', 10, '<p>Tiger Eye stone&nbsp; its perfect match your Horoscope</p>\r\n', 'yes', 'feature,shop', '1516968900IMG_20180126_150850.jpg', 17, 0),
(148, 'Moon stone ', 'Moon-Stone ', 'Moon-Stone ', 'Moon-Stone ', 'Moon-Stone ', '1500', 1, '<p>Moon stone&nbsp; Real Stone cuted&nbsp;</p>\r\n', 'yes', 'feature,shop', '1516969219IMG_20180126_151018.jpg', 17, 0),
(149, 'Star pairs stone', 'Star-Pairs-Stone', 'Star-Pairs-Stone', 'Star-Pairs-Stone', 'Star-Pairs-Stone', '2000', 10, '<p>Perfect match with your star. Origin of Stone is Himaliyas, Self Collected</p>\r\n', 'yes', 'feature,shop', '1517027638IMG_20180126_151117.jpg', 17, 0),
(150, 'Magnet stone', 'Magnet stone', 'Magnet stone', 'Magnet stone', 'Magnet stone', '1450', 1, '<p>Perfect match with your star from Gilgit-Baltistan</p>\r\n', 'yes', 'feature,shop', '1517027749IMG_20180126_151158.jpg', 17, 0),
(152, 'Moon star pink stone', 'Moon-Star-Pink-Stone', 'Moon-Star-Pink-Stone', 'Moon-Star-Pink-Stone', 'Moon-Star-Pink-Stone', '1500', 1, '<p>Perfect match with your star from Gilgit-Baltistan</p>\r\n', 'yes', 'feature,shop', '1517027923IMG_20180126_151302.jpg', 17, 0),
(153, 'Zercon Stone GB', 'Zercon-Stone', 'Zercon-Stone', 'Zercon-Stone', 'Zercon-Stone', '2200', 5, '<p>Zarkon Real Stone, Perfect match with your star from Gilgit-Baltistan.</p>\r\n', 'yes', 'feature,shop', '1517028046IMG_20180126_151423.jpg', 17, 0),
(158, 'Lapis Stone Bracelet GB273', 'Lapis-Stone-Bracelet', 'Lapis-Stone-Bracelet', 'Lapis-Stone-Bracelet', 'Lapis-Stone-Bracelet', '4500', 9, '<ul>\r\n	<li>Perfect match on your personlty&nbsp;</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517029541IMG_20180126_152043.jpg', 9, 0),
(159, 'Tourmaline-Stone  Bracelet  ', 'Tourmaline-Stone- Bracelet', 'Tourmaline-Stone- Bracelet', 'Tourmaline-Stone- Bracelet', 'Tourmaline-Stone- Bracelet', '4500', 1, '<p>Perfect match on your personlty&nbsp;</p>\r\n', 'yes', 'feature,shop', '1517029716IMG_20180126_152103.jpg', 9, 0),
(160, 'Garnet Bracelet GB17', 'Garnet-Bracelet-GB17', 'Garnet-Bracelet-GB17', 'Garnet-Bracelet-GB17', 'Garnet-Bracelet-GB17', '1100', 1, '<p>Perfect match on your personlty&nbsp;</p>\r\n', 'yes', 'feature,shop', '1517029898IMG_20180126_152232.jpg', 9, 0),
(161, 'Stone-Bracelet', 'Stone-Bracelet', 'Stone-Bracelet', 'Stone-Bracelet', 'Stone-Bracelet', '4500', 5, 'Stone-Bracelet , perfect match on your personality, made by Gilgit-Baltistan Real Stone', 'yes', 'feature,shop', '1517030076IMG_20180126_152643.jpg', 9, 0),
(164, 'Black Pearl Necklace GB12', 'Black-Pearl-Necklace', 'Black-Pearl-Necklace', 'Black-Pearl-Necklace', 'Black-Pearl-Necklace', '1500', 10, '<p>Black Pearl Necklace from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '1517050278GB (63).JPG', 9, 0),
(166, 'Agate Locket GB64', 'Agate-Locket', 'Agate-Locket', 'Agate-Locket', 'Agate-Locket', '1200', 10, '<p><strong>Agate</strong>&nbsp;is one of the oldest healing&nbsp;<strong>stones</strong>&nbsp;on Earth and is used as a protective&nbsp;<strong>stone.</strong>Though different types of agates are powerfully associated to one chakra than another, they', 'yes', 'feature,shop', '1517202716GB (64).JPG', 9, 0),
(167, 'Baru Tourmaline Necklace GB65', 'Baru-Tourmaline-Necklace', 'Baru-Tourmaline-Necklace', 'Baru-Tourmaline-Necklace', 'Baru-Tourmaline-Necklace', '2200', 10, '<p>Tourmaline is the most colorful of all gemstones. It occurs in all colors, but pink, red, green, blue and multicolored are its most well-known gem colors. Scientifically, tourmaline is not a single mineral, but a group of minerals related in their', 'yes', 'feature,shop', '1517203051GB (65).JPG', 9, 0),
(168, 'Max-stone-Multi-color-GB-66', 'Max-stone-Multi-color-GB-66', 'Max-stone-Multi-color-GB-66', 'Max-stone-Multi-color-GB-66', 'Max-stone-Multi-color-GB-66', '1200', 10, '<p>perfec match</p>\r\n', 'yes', 'feature,shop', '1517203355GB (66).JPG', 9, 0),
(169, 'Tiger-eye-stone-GB-67', 'Tiger-eye-stone-GB-67', 'Tiger-eye-stone-GB-67', 'Tiger-eye-stone-GB-67', 'Tiger-eye-stone-GB-67', '1200', 10, '<p>perfec match</p>\r\n', 'yes', 'feature,shop', '1517203506GB (67).JPG', 9, 0),
(170, 'Red-jade-stone-GB-68', 'Red-jade-stone-GB-68', 'Red-jade-stone-GB-68', 'Red-jade-stone-GB-68', 'Red-jade-stone-GB-68', '1200', 10, '<p>perfec match</p>\r\n', 'yes', 'feature,shop', '1517203619GB (68).JPG', 9, 0),
(171, 'Gray Agate Stone GB69', 'Gray-Agate-Stone', 'Gray-Agate-Stone', 'Gray-Agate-Stone', 'Gray-Agate-Stone', '1200', 10, '<ul>\r\n	<li>perfec match on your personalty</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517203777GB (69).JPG', 9, 0),
(172, 'Green Jade Stone GB70', 'Green Jade Stone', 'Green Jade Stone', 'Green Jade Stone', 'Green Jade Stone', '1200', 10, '<ul>\r\n	<li>perfec match on your personalty.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517203878GB (70).JPG', 9, 0),
(173, 'Matatis-stone-GB-71', 'Matatis-stone-GB-71', 'Matatis-stone-GB-71', 'Matatis-stone-GB-71', 'Matatis-stone-GB-71', '1200', 10, '<p>perfec match on your personalty</p>\r\n', 'yes', 'feature,shop', '1517204022GB (71).JPG', 9, 0),
(174, 'Sun-star-stone-GB-72', 'Sun-star-stone-GB-72', 'Sun-star-stone-GB-72', 'Sun-star-stone-GB-72', 'Sun-star-stone-GB-72', '1200', 10, '<p>perfec match on your personalty</p>\r\n', 'yes', 'feature,shop', '1517204182GB (72).JPG', 9, 0),
(175, 'Gray Agate Stone GB73', 'Gray Agate Stone', 'Gray Agate Stone', 'Gray Agate Stone', 'Gray Agate Stone', '1200', 10, '<ul>\r\n	<li>perfec match on your personalty</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517204295GB (73).JPG', 9, 0),
(176, 'Maz-stone-multi-colour-GB-74', 'Maz-stone-multi-colour-GB-74', 'Maz-stone-multi-colour-GB-74', 'Maz-stone-multi-colour-GB-74', 'Maz-stone-multi-colour-GB-74', '1200', 10, '<p>perfec match on your personalty</p>\r\n', 'yes', 'feature,shop', '1517204479GB (74).JPG', 9, 0),
(177, 'Turquoise Stone locket GB75', 'Turquoise-stone-GB75', 'Turquoise-stone-GB75', 'Turquoise-stone-GB-75', 'Turquoise-stone-GB-75', '1200', 10, '<p>perfec match on your personalty</p>\r\n', 'yes', 'feature,shop', '1517204633GB (75).JPG', 9, 0),
(178, 'Moon-stone-GB-76', 'Moon-stone-GB-76', 'Moon-stone-GB-76', 'Moon-stone-GB-76', 'Moon-stone-GB-76', '1200', 10, '<p>perfec match on your personalty</p>\r\n', 'yes', 'feature,shop', '1517204695GB (76).JPG', 9, 0),
(179, 'Aqeeq Stone GB77', 'Aqeeq Stone', 'Aqeeq Stone', 'Aqeeq Stone', 'Aqeeq Stone', '1200', 10, 'TheÂ strong benefit strong>Â ofÂ strong Aqeeq strongÂ is that it creates joy in the heart, is good for eyesight and it helps illuminate sadness and anger.It absorbs the rays of the sun and passes these onto the body', 'yes', 'feature,shop', '1517213070eqqq.jpg', 17, 0),
(180, 'Aqeeq Stone GB78', 'Aqeeq-stone', 'Aqeeq-stone', 'Aqeeq-stone', 'Aqeeq-stone', '1200', 10, '<p>100% pure aqeeq stone which is a perfect match to your horoscope.</p>\r\n', 'yes', 'feature,shop', '1517213178qqq.jpg', 17, 0),
(181, 'Feroza stone GB79', 'Feroza-stone', 'Feroza-stone', 'Feroza-stone', 'Feroza-stone', '1200', 10, '<ul>\r\n	<li>Pure&nbsp;Feroza which is a perfect match to your horoscope.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517213480download.jpg', 17, 0),
(184, 'Tiger-eye-stone-Bracelet-GB-81', 'Tiger-eye-stone-Bracelet-GB-81', 'Tiger-eye-stone-Bracelet-GB-81', 'Tiger-eye-stone-Bracelet-GB-81', 'Tiger-eye-stone-Bracelet-GB-81', '600', 10, '<p>Real stone bracelet from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '1517224252GB-83.JPG', 9, 0),
(185, 'Lopis-stone-Bracelet-GB-82', 'Lapis-stone-Bracelet-GB-82', 'Lapis-stone-Bracelet-GB-82', 'Lapis-stone-Bracelet-GB-82', 'Lopis-stone-Bracelet-GB-82', '600', 10, '<p>Real stone bracelet from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '1517224496GB-86.JPG', 9, 0),
(186, 'Real-stone-Bracelet-GB-83', 'Real-stone-Bracelet-GB-83', 'Real-stone-Bracelet-GB-83', 'Real-stone-Bracelet-GB-83', 'Real-stone-Bracelet-GB-83', '600', 10, '<p>Real stone bracelet from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '1517224616GB-85.JPG', 9, 0),
(187, 'Amethyst Stone Necklace GB84', 'Amethyst-Stone-Necklace', 'Amethyst-Stone-Necklace', 'Amethyst-Stone-Necklace', 'Amethyst-Stone-Necklace', '600', 10, '<p>Real stone bracelet from Gilgit Baltistan and&nbsp;It&#39;s rough and I&#39;d love to see a better one if someone has the skills and inclination to make one.</p>\r\n', 'yes', 'feature,shop', '1517224824GB-84.JPG', 9, 0),
(188, 'Gray Agate Bracelet GB85', 'Gray-Agate-Bracelet', 'Gray-Agate-Bracelet', 'Gray-Agate-Bracelet', 'Gray-Agate-Bracelet', '600', 10, '<p>Real stone bracelet from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '1517225028GB-87.JPG', 9, 0),
(189, 'Real-stone-Bracelet-GB-86', 'Real-stone-Bracelet-GB-86', 'Real-stone-Bracelet-GB-86', 'Real-stone-Bracelet-GB-86', 'Real-stone-Bracelet-GB-86', '1200', 10, '<p>Real stone bracelet from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '1517225156GB-83.JPG', 9, 0),
(190, 'Antique Stone Jewellery GB87', 'Antique-Stone-Jewellery', 'Antique-Stone-Jewellery', 'Antique-Stone-Jewellery', 'Antique-Stone-Jewellery', '1000', 10, '<p>Real stone Necklace from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '1517225628GB-88.JPG', 9, 0),
(191, 'Antique Stone Jewellery GB88', 'Antique-Stone-Jewellery', 'Antique-Stone-Jewellery', 'Antique-Stone-Jewellery', 'Antique-Stone-Jewellery', '1100', 10, '<p>Real stone Ear ring from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '1517225895GB-80.JPG', 9, 0),
(192, 'Antique Stone Jewellery GB89', 'Antique Stone Jewellery', 'Antique Stone Jewellery', 'Antique Stone Jewellery', 'Antique Stone Jewellery', '1100', 10, '<p>Real stone Ear ring from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '1517225988GB-91.JPG', 9, 0),
(193, 'Antique Stone Jewellery GB90', 'Antique-Stone-Jewellery', 'Antique-Stone-Jewellery', 'Antique-Stone-Jewellery', 'Antique-Stone-Jewellery', '9000', 10, '<p>Real stone Ear ring from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '1517226074GB-78.JPG', 9, 0),
(194, 'Antique Stone Jewellery GB91', 'Antique Stone Jewellery', 'Antique Stone Jewellery', 'Antique Stone Jewellery', 'Antique Stone Jewellery', '5000', 5, '<p>Real stone Ear ring from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '1517226199GB-92.JPG', 9, 0),
(195, 'Antique Stone Jewellery GB92', 'Antique Stone Jewellery', 'Antique Stone Jewellery', 'Antique Stone Jewellery', 'Antique Stone Jewellery', '5000', 11, '<p>Real stone Ear ring from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '1517226281GB-81.JPG', 9, 0),
(196, 'Antique Stone Jewellery GB93', 'Antique-Stone-Jewellery', 'Antique-Stone-Jewellery', 'Antique-Stone-Jewellery', 'Antique-Stone-Jewellery', '3200', 8, '<p>Real stone Ear ring from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '1517226384GB-79.JPG', 9, 0),
(197, 'Antique Stone Jewellery GB93', 'Antique-Stone-Jewellery', 'Antique-Stone-Jewellery', 'Antique-Stone-Jewellery', 'Antique-Stone-Jewellery', '3200', 15, '<p>Real stone Ear ring from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '1517226388GB-79.JPG', 9, 0),
(198, 'Antique Stone Jewellery GB94', 'Antique-Stone-Jewellery', 'Antique-Stone-Jewellery', 'Antique-Stone-Jewellery', 'Antique-Stone-Jewellery', '3500', 10, '<p>Real stone Ear ring from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '1517226499GB-90.JPG', 9, 0),
(199, 'Antique Stone Jewellery GB95', 'Antique-Stone-Jewellery', 'Antique-Stone-Jewellery', 'Antique-Stone-Jewellery', 'Antique-Stone-Jewellery', '2500', 10, '<p>Real stone Ear ring from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '1517226567GB-89.JPG', 9, 0),
(200, 'Ladies-Woolen-Shawls-GB-95', 'Ladies-Woolen-Shawls-GB-95', 'Ladies-Woolen-Shawls-GB-95', 'Ladies-Woolen-Shawls-GB-95', 'Ladies-Woolen-Shawls-GB-95', '2900', 5, '<p>Ladies-Woolen-Shawls Emb, Local Hand made from Gilgit-Baltistan GB-95</p>\r\n', 'yes', 'feature,shop', '1517307572GB-95.JPG', 16, 0),
(201, 'Ladies Woolen Shawls GB96', 'Ladies Woolen Shawls', 'Ladies Woolen Shawls', 'Ladies Woolen Shawls', 'Ladies Woolen Shawls', '4300', 5, '<ul>\r\n	<li>Ladies-Woolen Shawls pure woolen Emb from Gilgit Baltistan.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517307646GB-96.JPG', 16, 0),
(202, 'Ladies-Woolen-Shawls-GB-97', 'Ladies-Woolen-Shawls-GB-97', 'Ladies-Woolen-Shawls-GB-97', 'Ladies-Woolen-Shawls-GB-97', 'Ladies-Woolen-Shawls-GB-97', '3000', 5, '<p>Ladies-Woolen-Shawls , pure woolen, from Gilgit Baltistan GB-97</p>\r\n', 'yes', 'feature,shop', '1517307742GB-97.JPG', 16, 0),
(203, 'Ladies-Woolen-Shawls-GB-98', 'Ladies-Woolen-Shawls-GB-98', 'Ladies-Woolen-Shawls-GB-98', 'Ladies-Woolen-Shawls-GB-98', 'Ladies-Woolen-Shawls-GB-98', '5000', 10, '<p>Pure Woolen&nbsp;Ladies-Woolen-Shawls, from Gilgit-Baltistan GB-98</p>\r\n', 'yes', 'feature,shop', '1517307799GB-98.JPG', 16, 0),
(204, 'Ladies-Woolen-Shawls-GB-99', 'Ladies-Woolen-Shawls-GB-99', 'Ladies-Woolen-Shawls-GB-99', 'Ladies-Woolen-Shawls-GB-99', 'Ladies-Woolen-Shawls-GB-99', '3200', 10, '<p>Pure Woolen&nbsp;Ladies-Woolen-Shawls-GB-99 from Gilgit-Baltistan</p>\r\n', 'yes', 'feature,shop', '1517307846GB-99.JPG', 16, 0),
(205, 'Ladies Woolen Shawl GB100', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', '3200', 10, '<ul>\r\n	<li>Pure Woolen&nbsp;Ladies Shawls from Gilgit-Baltistan.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517307895GB-100.JPG', 16, 0),
(206, 'Ladies Woolen Shawl GB101', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', '3200', 10, '<ul>\r\n	<li>Pure Woolen&nbsp;Ladies Shawls from Gilgit Baltistan.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517307962GB-101.JPG', 16, 0),
(207, 'Ladies Woolen Shawl GB102', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', '3800', 10, '<ul>\r\n	<li>Pure woolen ladies shawls from Gilgit Baltistan.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517308044GB-102.JPG', 16, 0),
(208, 'Ladies Woolen Shawl GB103', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', '3800', 10, '<ul>\r\n	<li>Pure woolen hand made ladies shawls from Gilgit Baltistan.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517308106GB-103.JPG', 16, 0),
(209, 'Ladies Woolen Shawl GB104', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', '3500', 10, '<ul>\r\n	<li>Pure woolen hand made ladies woolen shawls from Gilgit Baltistan.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517308154GB-104.JPG', 16, 0),
(210, 'Ladies Woolen Shawl GB105', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', '5200', 10, '<ul>\r\n	<li>Pure woolen hand made ladies woolen shawls from Gilgit Baltistan.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517308221GB-105.JPG', 16, 0),
(211, 'Ladies Woolen Shawl GB106', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', '5300', 10, '<ul>\r\n	<li>Pure hand made woolen ladies shawls from Gilgit Baltistan</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517308310GB-106.JPG', 16, 0),
(212, 'Ladies Woolen Shawl GB107', 'Ladies Woolen Shawl', 'Ladies Woolen Shawl', 'Ladies Woolen Shawl', 'Ladies Woolen Shawl', '5200', 10, '<ul>\r\n	<li>Pure Woolen Handmade from Gilgit Baltistan.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517308453GB-107.JPG', 16, 0),
(213, 'Ladies Woolen Shawl GB108', 'Ladies Woolen Shawl', 'Ladies Woolen Shawl', 'Ladies Woolen Shawl', 'Ladies Woolen Shawl', '3200', 10, '<ul>\r\n	<li>Pure Woolen Handemade from Gilgit Baltistan.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517308508GB-108.JPG', 16, 0),
(214, 'Ladies Woolen Shawl GB109', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', '5200', 10, '<ul>\r\n	<li>Pure Woolen Handemade from Gilgit Baltistan</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517308571GB-109.JPG', 16, 0),
(215, 'Ladies Woolen Shawl GB110', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', '2800', 10, '<ul>\r\n	<li>Pure Woolen Handmade Shawl from Gilgit Baltistan</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517308622GB-110.JPG', 16, 0),
(216, 'Ladies Woolen Shawl GB111', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', '4800', 10, '<ul>\r\n	<li>Pure Handmade Ladies Woolen Shawls from Gilgit Baltistan.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517308675GB-111.JPG', 16, 0),
(217, 'Ladies Woolen Shawl GB112', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', '4800', 10, '<ul>\r\n	<li>Pure Handmade Woolen Shawls from Gilgit Baltistan</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517308726GB-112.JPG', 16, 0),
(218, 'Ladies Woolen Shawl  GB113', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', '4800', 10, '<p>Pure Handmade Ladies Woolen Shawl from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '1517308776GB-113.JPG', 16, 0),
(219, 'Ladies-Woolen-Shawls-GB-114', 'Ladies-Woolen-Shawls-GB-114', 'Ladies-Woolen-Shawls-GB-114', 'Ladies-Woolen-Shawls-GB-114', 'Ladies-Woolen-Shawls-GB-114', '4800', 10, '<p>Pure Handmade&nbsp;Ladies-Woolen-Shawls-GB-114 from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '1517308834GB-114.JPG', 16, 0),
(220, 'Ladies-Woolen-Shawls-GB-115', 'Ladies-Woolen-Shawls-GB-115', 'Ladies-Woolen-Shawls-GB-115', 'Ladies-Woolen-Shawls-GB-115', 'Ladies-Woolen-Shawls-GB-115', '4800', 10, '<p>Pure Handmade&nbsp;Ladies-Woolen-Shawls-GB-115 from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '1517309193GB-115.JPG', 16, 0),
(221, 'Real Aquamarine Stone GB-115', 'Real-Aquamarine-Stone-GB-115', 'Real-Aquamarine-Stone-GB-115', 'Real-Aquamarine-Stone-GB-115', 'Real-Aquamarine-Stone-GB-115', '2200', 10, '<p>Real-Aquamarine-Stone-GB-115 for Ring, From Gilgit-Baltistan</p>\r\n', 'yes', 'feature,shop', '1517309651GB-115.jpg', 17, 0),
(222, 'Real Feroza Stone GB116', 'Real-Feroza-Stone-GB116', 'Real-Feroza-Stone-GB116', 'Real-Feroza-Stone-GB116', 'Real-Feroza-Stone-GB116', '1600', 10, '<p>Hussaini Real-Feroza-Stone-GB116 from Gilgit-Baltistan, Perfect Match for Your Horoscope</p>\r\n', 'yes', 'feature,shop', '1517310291feroza 116.jpg', 17, 0),
(223, 'Ladies-Woolen-Shawls-GB-117', 'Ladies-Woolen-Shawls-GB-117', 'Ladies-Woolen-Shawls-GB-117', 'Ladies-Woolen-Shawls-GB-117', 'Ladies-Woolen-Shawls-GB-117', '2000', 10, '<p>Pure Woolen&nbsp;Ladies-Woolen-Shawls-GB-117 from Gilgit-Baltistan</p>\r\n', 'yes', 'feature,shop', '1517313446GB-117.JPG', 16, 0),
(224, 'Ladies-Woolen-Shawls-GB-118', 'Ladies-Woolen-Shawls-GB-118', 'Ladies-Woolen-Shawls-GB-118', 'Ladies-Woolen-Shawls-GB-118', 'Ladies-Woolen-Shawls-GB-118', '1800', 10, '<p>Pure Handmade&nbsp;Ladies-Woolen-Shawls-GB-118 from Gilgit-Baltistan</p>\r\n', 'yes', 'feature,shop', '1517313499GB-118.JPG', 16, 0),
(225, 'Ladies-Woolen-Shawls-GB-119', 'Ladies-Woolen-Shawls-GB-119', 'Ladies-Woolen-Shawls-GB-119', 'Ladies-Woolen-Shawls-GB-119', 'Ladies-Woolen-Shawls-GB-119', '1800', 10, '<p>Pure Handmade&nbsp;Ladies-Woolen-Shawls-GB-119 from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '1517313549GB-119.JPG', 16, 0),
(226, 'Ladies-Woolen-Shawls-GB-120', 'Ladies-Woolen-Shawls-GB-120', 'Ladies-Woolen-Shawls-GB-120', 'Ladies-Woolen-Shawls-GB-120', 'Ladies-Woolen-Shawls-GB-120', '1900', 10, '<p>Pure Handmade&nbsp;Ladies-Woolen-Shawls-GB-120 From Gilgit-Baltistan</p>\r\n', 'yes', 'feature,shop', '1517313601GB-120.JPG', 16, 0),
(227, 'Ladies-Woolen-Shawls-GB-121', 'Ladies-Woolen-Shawls-GB-121', 'Ladies-Woolen-Shawls-GB-121', 'Ladies-Woolen-Shawls-GB-121', 'Ladies-Woolen-Shawls-GB-121', '1600', 10, '<p>Pure Handmade&nbsp;Ladies-Woolen-Shawls-GB-121 from Gilgit-Baltistan</p>\r\n', 'yes', 'feature,shop', '1517313660GB-121.JPG', 16, 0),
(228, 'Ladies-Woolen-Shawls-GB-122', 'Ladies-Woolen-Shawls-GB-122', 'Ladies-Woolen-Shawls-GB-122', 'Ladies-Woolen-Shawls-GB-122', 'Ladies-Woolen-Shawls-GB-122', '1700', 10, '<p>Pure Handmade&nbsp;Ladies-Woolen-Shawls-GB-122 from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '1517313717GB-122.JPG', 16, 0),
(229, 'Ladies-Woolen-Shawls-GB-123', 'Ladies-Woolen-Shawls-GB-123', 'Ladies-Woolen-Shawls-GB-123', 'Ladies-Woolen-Shawls-GB-123', 'Ladies-Woolen-Shawls-GB-123', '1800', 10, '<p>Pure Handmade&nbsp;Ladies-Woolen-Shawls-GB-123 from Gilgit-Baltistan</p>\r\n', 'yes', 'feature,shop', '1517313772GB-123.JPG', 16, 0),
(230, 'Ladies-Woolen-Shawls-GB-124', 'Ladies-Woolen-Shawls-GB-124', 'Ladies-Woolen-Shawls-GB-124', 'Ladies-Woolen-Shawls-GB-124', 'Ladies-Woolen-Shawls-GB-124', '1600', 10, '<p>Pure Handmade&nbsp;Ladies-Woolen-Shawls-GB-124 from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '1517313840GB-124.JPG', 16, 0),
(231, 'Ladies-Woolen-Shawls-GB-125', 'Ladies-Woolen-Shawls-GB-125', 'Ladies-Woolen-Shawls-GB-125', 'Ladies-Woolen-Shawls-GB-125', 'Ladies-Woolen-Shawls-GB-125', '2500', 10, '<p>Pure Handmade&nbsp;Ladies-Woolen-Shawls-GB-125 from Gilgit-Baltistan</p>\r\n', 'yes', 'feature,shop', '1517313888GB-125.JPG', 16, 0),
(232, 'Ladies-Woolen-Shawls-GB-126', 'Ladies-Woolen-Shawls-GB-126', 'Ladies-Woolen-Shawls-GB-126', 'Ladies-Woolen-Shawls-GB-126', 'Ladies-Woolen-Shawls-GB-126', '1900', 10, '<p>Pure Handmade&nbsp;Ladies-Woolen-Shawls-GB-126 from Gilgit-Baltistan</p>\r\n', 'yes', 'feature,shop', '1517313943GB-126.JPG', 16, 0),
(233, 'Ladies-Woolen-Shawls-GB-127', 'Ladies-Woolen-Shawls-GB-127', 'Ladies-Woolen-Shawls-GB-127', 'Ladies-Woolen-Shawls-GB-127', 'Ladies-Woolen-Shawls-GB-127', '2300', 10, '<p>Pure Handmade&nbsp;Ladies-Woolen-Shawls-GB-127 From Gilgit-Baltistan</p>\r\n', 'yes', 'feature,shop', '1517313998GB-127.JPG', 16, 0),
(234, 'Ladies-Woolen-Shawls-GB-128', 'Ladies-Woolen-Shawls-GB-128', 'Ladies-Woolen-Shawls-GB-128', 'Ladies-Woolen-Shawls-GB-128', 'Ladies-Woolen-Shawls-GB-128', '2000', 10, '<p>Pure Handmade&nbsp;Ladies-Woolen-Shawls-GB-128 From Gilgit-Baltistan</p>\r\n', 'yes', 'feature,shop', '1517314053GB-128.JPG', 16, 0),
(235, 'Ladies-Woolen-Shawls-GB-129', 'Ladies-Woolen-Shawls-GB-129', 'Ladies-Woolen-Shawls-GB-129', 'Ladies-Woolen-Shawls-GB-129', 'Ladies-Woolen-Shawls-GB-129', '1900', 10, '<p>Pure Handmade&nbsp;Ladies-Woolen-Shawls-GB-129 From Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '1517314099GB-129.JPG', 16, 0),
(236, 'Ladies Woolen Shawl GB130', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', 'Ladies-Woolen-Shawl', '1800', 10, '<ul>\r\n	<li>Pure Handmade&nbsp;Ladies Woolen Shawls from Gilgit Baltistan.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517314155GB-130.JPG', 16, 0),
(237, 'Tourmaline stone GB 131', 'Tourmaline-stone-GB-131', 'Tourmaline-stone-GB-131', 'Tourmaline-stone-GB-131', 'Tourmaline-stone-GB-131', '2200', 10, '<ul>\r\n	<li>Tourmaline also has many positive attributes in the spiritual realm . It also creates a commitment towards the completion of one&rsquo;s goals and is said to protect the wearer against dangers.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517372966tourmaline_gemstone_brown_pink_vintage_faceted_oval_6_56_cts_fgs117_800bd58f.jpg', 17, 0),
(238, 'Emerald stone GB132', 'Emerald-stone', 'Emerald-stone', 'Emerald-stone', 'Emerald-stone', '2200', 10, '<p>Pure stone from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '1517373894images.jpg', 17, 0),
(239, 'Hand Made shawl GB-132', 'Hand Made shawl', 'Hand Made shawl', 'Hand Made shawl', 'Hand Made shawl', '2000', 10, '<ul>\r\n	<li>Pure hand made from Gilgit Biltistan</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517388801GB_132.JPG', 16, 0),
(240, 'Female Hand Made Shawl GB133', 'Female-Hand-Made-Shawl', 'Female-Hand-Made-Shawl', 'Female-Hand-Made-Shawl', 'Female-Hand-Made-Shawl', '2000', 10, '<ul>\r\n	<li>Pure hand made Shawl from Gilgit Biltistan.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517388863GB_133.JPG', 12, 0),
(241, 'Ladies Hand Made Shawl GB135', 'Ladies-Hand-Made-Shawl', 'Ladies-Hand-Made-Shawl', 'Ladies-Hand-Made-Shawl', 'Ladies-Hand-Made-Shawl', '2200', 10, '<ul>\r\n	<li>Pure hand made from Gilgit Biltistan</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517389000GB_134.JPG', 16, 0),
(242, 'Female Shawl   GB136', 'Female-Shawl', 'Female-Shawl', 'Female-Shawl', 'Female-Shawl', '2200', 10, '<ul>\r\n	<li>Pure hand made from Gilgit Biltistan.It is ideal for semi formal gatherings&nbsp;</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517389046GB_135.JPG', 16, 0),
(243, 'Ladies Hand Made Shawl GB137', 'Ladies-Hand-Made-Shawl ', 'Ladies-Hand-Made-Shawl ', 'Ladies-Hand-Made-Shawl ', 'Ladies-Hand-Made-Shawl ', '2200', 10, '<ul>\r\n	<li>Pure hand made from Gilgit Biltistan</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517389073GB_136.JPG', 16, 0),
(244, 'Hand Made Shawl GB-138', 'Hand-Made-Shawl', 'Hand-Made-Shawl', 'Hand-Made-Shawl', 'Hand-Made-Shawl', '3000', 10, '<ul>\r\n	<li>Pure hand made shawl from Gilgit Biltistan</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517389201GB_138.JPG', 16, 0),
(245, 'Female Hand Made Shawl GB.139', 'Hand-Made-Shawl', 'Hand-Made-Shawl', 'Hand-Made-Shawl', 'Hand-Made-Shawl', '2800', 10, '<ul>\r\n	<li>Pure hand made from Gilgit Biltistan</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517389254GB_139.JPG', 16, 0),
(246, 'Female Hand Made Shawl GB-140', 'Female-Hand-Made-Shawl', 'Female-Hand-Made-Shawl', 'Female-Hand-Made-Shawl', 'Female-Hand-Made-Shawl', '3000', 10, '<ul>\r\n	<li>Pure hand made from Gilgit Biltistan</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517389289GB_140.JPG', 16, 0),
(247, 'Female Hand Made Shawl   GB141', 'Hand-Made-Shawl', 'Hand-Made-Shawl', 'Hand-Made-Shawl', 'Hand-Made-Shawl', '4800', 10, '<ul>\r\n	<li>Pure hand made shawl from Gilgit Biltistan</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517389349GB_141.JPG', 16, 0),
(248, 'Ladies Hand Made Shawl GB142', 'Ladies-Hand-Made-Shawl', 'Ladies-Hand-Made-Shawl', 'Ladies-Hand-Made-Shawl', 'Ladies-Hand-Made-Shawl', '4500', 10, '<ul>\r\n	<li>Pure hand made from Gilgit Biltistan</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517389422GB_142.JPG', 16, 0),
(249, 'Hand Made Shawl GB 143', 'Hand-Made-Shawl', 'Hand-Made-Shawl', 'Hand-Made-Shawl', 'Hand-Made-Shawl', '5000', 10, '<ul>\r\n	<li>Pure hand made shawl from Gilgit Biltistan</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517389452GB-143.JPG', 16, 0),
(250, 'Hand Made Shawl GB 144', 'Hand-Made-Shawl', 'Hand-Made-Shawl', 'Hand-Made-Shawl', 'Hand-Made-Shawl', '5500', 10, '<ul>\r\n	<li>Pure hand made shawl from Gilgit Biltistan</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517389488GB-144.JPG', 16, 0);
INSERT INTO `e_products` (`id`, `name`, `slug`, `pagetitle`, `keywords`, `description`, `price`, `displayorder`, `details`, `display`, `position`, `image`, `cat_id`, `sub_cat_id`) VALUES
(251, 'Hand Made Shawl GB 145', 'Hand-Made-Shawl', 'Hand-Made-Shawl', 'Hand-Made-Shawl', 'Hand-Made-Shawl', '4500', 10, '<ul>\r\n	<li>Pure hand made shawl from Gilgit Biltistan</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517389522GB-145.JPG', 16, 0),
(252, 'Ladies Hand Made Shawl GB.146', 'Hand-Made-Shawl', 'Hand-Made-Shawl', 'Hand-Made-Shawl', 'Hand-Made-Shawl', '2600', 10, '<ul>\r\n	<li>Pure hand made shawl from Gilgit Biltistan</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517389560GB-146.JPG', 16, 0),
(253, 'Hand Made Shawl GB-147', 'Hand-Made-Shawl', 'Hand-Made-Shawl', 'Hand-Made-Shawl', 'Hand-Made-Shawl', '3600', 10, '<ul>\r\n	<li>Pure hand made shawl from Gilgit Biltistan</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517389587GB-147.JPG', 16, 0),
(254, 'Female Hand Made Shawl GB 148', 'Hand-Made-Shawl', 'Hand-Made-Shawl', 'Hand-Made-Shawl', 'Hand-Made-Shawl', '4200', 10, '<ul>\r\n	<li>Pure hand made shawl from Gilgit Biltistan.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517389618GB-148.JPG', 16, 0),
(255, 'Hand Made Shirt  GB149', 'Hand-Made-Shirt', 'Hand-Made-Shirt', 'Hand-Made-Shirt', 'Hand-Made-Shirt', '2600', 10, '<ul>\r\n	<li>Pure Hand Made Shirt&nbsp;From Gilgit Biltistan.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517389724GB-149.JPG', 12, 0),
(256, 'Hand Made shart GB150', 'Hand Made shart', 'Hand Made shart', 'Hand Made shart', 'Hand Made shart', '2600', 10, '<ul>\r\n	<li>Pure hand made from Gilgit Biltistan</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517389751GB-150.JPG', 16, 0),
(257, 'Real Ruby Stones Watch GB281', 'Real-Ruby-Stones-Watch', 'Real-Ruby-Stones-Watch', 'Real-Ruby-Stones-Watch', 'Real-Ruby-Stones-Watch', '49000', 5, '<ul>\r\n	<li>Real Stone Ruby,Nelam,Feroza and Silver Gold Watch made by Local Community Gilgit-Baltistan</li>\r\n	<li>Combinations of deffrent stones</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', 'yes', 'feature,shop', '1518066719GB281.jpeg', 9, 0),
(258, 'Tiger Eye Stone Locket GB200', 'Tiger-Eye-Stone', 'Tiger-Eye-Stone', 'Tiger-Eye-Stone', 'Tiger-Eye-Stone', '1200', 5, '<p>The&nbsp;<strong>tiger eye&nbsp;</strong>is the largest cat species most recognizable for their pattern of dark vertical stripes on reddish-orange fur with a lighter.</p>\r\n', 'yes', 'feature,shop', '15175692341 (52).jpeg', 9, 0),
(259, 'Haqiq stone locket Black GB201', 'Haqiq-stone-locket-Black', 'Haqiq-stone-locket-Black', 'Haqiq-stone-locket-Black', 'Haqiq-stone-locket-Black', '1200', 5, '<p>Sulemani Haqiq Stone is the most recommended Sulemani Haqiq Stone to be worn as a ring or pendent.Sulemani Haqiq Stone is considered as Holy Stone and it provides you the intution of the future and provides you protection agains the bad dreams.Thi', 'yes', 'feature,shop', '15175697801 (51).jpeg', 9, 0),
(260, 'Feroza Necklace jewllery GB203', 'Feroza-Necklace-jewllery', 'Feroza-Necklace-jewllery', 'Feroza-Necklace-jewllery', 'Feroza-Necklace-jewllery', '1200', 5, '<p>special&nbsp;<strong>stones</strong>&nbsp;like Aqeeq and&nbsp;<strong>Feroza</strong>. Just as some special people exhort Allah at all times, there are some special types of Aqeeq and&nbsp;<strong>Feroza</strong>&nbsp;which exhort.</p>\r\n', 'yes', 'feature,shop', '15175703681 (50).jpeg', 9, 0),
(261, 'Morganite necklace GB204', 'Morganite-necklace', 'Morganite necklace', 'Morganite necklace', 'Morganite necklace', '1200', 5, '<p>Morganite is the pink to orange-pink variety of beryl, a mineral that includes emerald and aquamarine.</p>\r\n', 'yes', 'feature,shop', '15175719201 (49).jpeg', 9, 0),
(262, 'Sang-e-Sitara locket GB204 ', 'Sang-e-Sitara locket', 'Sang-e-Sitara locket', 'Sang-e-Sitara locket', 'Sang-e-Sitara locket', '900', 5, '<p>Brown Sang -e- Sitara (Goldstone) is a stone of leadership, strongly evoking this quality in those who wear it. It is said to dispel fear and stress, to increase vitality, to encourage independence and originality, to warm the spirit and to bring ', 'yes', 'feature,shop', '15175746671 (48).jpeg', 9, 0),
(263, 'Sang-e-Sitara locket per peace GB204 ', 'Sang-e-Sitara-locket', 'Sang-e-Sitara-locket', 'Sang-e-Sitara-locket', 'Sang-e-Sitara-locket', '900', 5, '<p>Brown Sang-e-Sitara (Goldstone) is a stone of leadership, strongly evoking this quality in those who wear it is said to dispel fear and stress to increase vitality to encourage independence and originality to warm the spirit and to bring good fort', 'yes', 'feature,shop', '15175750431 (47).jpeg', 9, 0),
(264, 'Feroza Necklace GB206', 'Feroza Necklace ', 'Feroza Necklace ', 'Feroza Necklace ', 'Feroza Necklace ', '1200', 5, '<p>The Physical Healing Powers of&nbsp;<strong>Turquoise&nbsp;</strong>As a healing<strong>stone</strong>&nbsp;<strong>Turquoise</strong>&nbsp;is among the crystal healing master<strong>stones</strong>. According to followers of the New Age, the heal', 'yes', 'feature,shop', '15175773881 (46).jpeg', 9, 0),
(265, 'Malachite necklace GB207', 'Malachite necklace', 'Malachite necklace', 'Malachite necklace', 'Malachite necklace', '900', 5, '<p>It clears and activates all Chakras and is especially helpful in the stimulation of the Heart and Throat Chakras. An extremely powerful metaphysical&nbsp;<strong>stone.</strong>&nbsp;<strong>Malachite</strong>&nbsp;is often called the &ldquo;<stro', 'yes', 'feature,shop', '15175778301 (45).jpeg', 9, 0),
(266, 'Pearl Moti locket GB208', 'Pearl-Moti-locket', 'Pearl-Moti-locket', 'Pearl-Moti-locket', 'Pearl-Moti-locket', '900', 5, '<p>&nbsp;<strong>jewelry</strong>&nbsp;has become a fashion statement and something that every woman adores. In the olden days, gold was not used as a fashion trend. Gold ornaments were looked at because of its significance rather than a manifestatio', 'yes', 'feature,shop', '15175806961 (44).jpeg', 9, 0),
(267, 'Marjan coral stone locket GB209', 'Marjan-coral-ston- locket', 'Marjan-coral-ston- locket', 'Marjan-coral-ston- locket', 'Marjan-coral-ston- locket', '1200', 5, '<p>Precious&nbsp;<strong>coral</strong>&nbsp;or&nbsp;<strong>red coral</strong>&nbsp;is the common name given to Corallium rubrum and several related species of marjan&nbsp;<strong>coral</strong>. The distinguishing characteristic of precious<strong>', 'yes', 'feature,shop', '15175809871 (43).jpeg', 9, 0),
(268, 'Aqeeq Antique Locket GB210', 'Aqeeq-Antique-Locket', 'Aqeeq-Antique-Locket', 'Aqeeq-Antique-Locket', 'Aqeeq-Antique-Locket', '1200', 5, '<p>&nbsp;Aqeeq stones are one of the most widely used gemstones in jewelries and men&rsquo;s accessories. In this post we will answer questions like why people prefer to wear aqeeq stone rings, what are aqeeq rings, where to buy sterling silver aqeeq', 'yes', 'feature,shop', '15175812791 (42).jpeg', 9, 0),
(269, 'White Marjen Necklace GB211', 'White-Marjen-Necklace', 'White-Marjen-Necklace', 'White-Marjen-Necklace', 'White-Marjen-Necklace', '1000', 5, '<p>Perfect match your personality</p>\r\n', 'yes', 'feature,shop', '15176345791 (39).jpeg', 9, 0),
(270, 'Feroza Bracelet GB212', '`Feroza-Bracelet', '`Feroza-Bracelet', '`Feroza-Bracelet', '`Feroza-Bracelet', '900', 6, '<p><strong>Feroza stone</strong>&nbsp;is one of the rarest and most valued gems in the history People have been using&nbsp;<strong>Firoza stone</strong>&nbsp;as an ornament and a decorative item for thousands of year.</p>\r\n', 'yes', 'feature,shop', '15176363101 (38).jpeg', 9, 0),
(271, 'Sepe Moti Bracelet GB213', 'Sepe-Moti-Bracelet', 'Sepe-Moti-Bracelet', 'Sepe-Moti-Bracelet', 'Sepe-Moti-Bracelet', '700', 8, '<p>Sepe moti bracelet is available in differnt color,s&nbsp;</p>\r\n', 'yes', 'feature,shop', '15176370121 (37).jpeg', 9, 0),
(272, 'Aqeeq Bracelet GB214', 'Aqeeq-Bracelet', 'Aqeeq-Bracelet', 'Aqeeq-Bracelet', 'Aqeeq-Bracelet', '1100', 7, '<ul>\r\n	<li><strong>Aqeeq</strong>&nbsp;stone have some&nbsp;<strong>benefits</strong>&nbsp;for mental and physical health of human being</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15176372861 (36).jpeg', 9, 0),
(273, 'Sulemani Aqeeq Bracelet GB215', 'Sulemani-Aqeeq-Bracelet', 'Sulemani-Aqeeq-Bracelet', 'Sulemani-Aqeeq-Bracelet', 'Sulemani-Aqeeq-Bracelet', '1100', 9, '<p>The benefit of Aqeeq is that it creates joy in the heart, is good for eyesight and it helps illuminate sadness and anger. It is also revered in other religious and has been in use from the time of Hazrat Adam ( a.s.). It absorbs the rays of the su', 'yes', 'feature,shop', '15176378731 (35).jpeg', 9, 0),
(274, 'Lapis Bracelet GB216', 'Lapis-Bracelet', 'Lapis-Bracelet', 'Lapis-Bracelet', 'Lapis-Bracelet', '1100', 9, '<p>Introduction to the Meaning and Uses of&nbsp;<strong>Lapis</strong>&nbsp;Lazuli.<strong>Lapis</strong>&nbsp;Lazuli is one of the most sought after stones in use since man&#39;s history began. Its deep celestial blue remains the symbol of royalty a', 'yes', 'feature,shop', '15176383741 (34).jpeg', 9, 0),
(275, 'Sang-e-Sitara Bracelet GB216', 'Sang-e-Sitara-Bracelet', 'Sang-e-Sitara-Bracelet', 'Sang-e-Sitara-Bracelet', 'Sang-e-Sitara-Bracelet', '900', 6, '<p><strong>Sang-e-Sitara</strong> is called (Goldstone)&nbsp;Sang-e-Sitara&nbsp; is a stone of leadership, strongly evoking this quality in those who wear it. It is said to dispel fear and stress, to increase vitality, to encourage independence and o', 'yes', 'feature,shop', '15176390681 (33).jpeg', 9, 0),
(276, 'Aqeeq Bracelet Pink GB218', 'Aqeeq-Bracelet-Pink ', 'Aqeeq-Bracelet-Pink', 'Aqeeq-Bracelet-Pink', 'Aqeeq-Bracelet-Pink', '900', 9, '<p>Aqeeq is a rarely found ornamental stone. It is popular for its artistic designs on it but also for being one of the most valuable natural stones.The value of aqeeq stones is decided depending on the color and shape of the gemstone.</p>\r\n', 'yes', 'feature,shop', '15176395231 (32).jpeg', 9, 0),
(277, 'Malachite Bracelet GB219', 'Malachite-Bracelet', 'Malachite-Bracelet', 'Malachite-Bracelet', 'Malachite-Bracelet', '800', 5, '<p>Wearing a&nbsp;<strong>Malachite bracelet</strong>&nbsp;is extremely healing.&nbsp;<strong>Malachite</strong>&nbsp;is a powerful crystal. It amplifies both positive and negative energies.It grounds spiritual energies onto the planet.<strong>Malach', 'yes', 'feature,shop', '15176401261 (31).jpeg', 9, 0),
(278, 'Aqeeq Bracelet Red GB220', 'Aqeeq-Bracelet-Red ', 'Aqeeq-Bracelet-Red ', 'Aqeeq-Bracelet-Red ', 'Aqeeq-Bracelet-Red ', '900', 8, '<p>Aqeeq stone bracelet are one of the best seller bracelet worldwide due to benefits of Aqeeq bracelet.This special gemstone also known as Agate in English and&nbsp;Ø¹Ù‚ÙŠÙ‚ Ù†Ø¨Ø§Øª in arabic language.</p>\r\n', 'yes', 'feature,shop', '15176409081 (30).jpeg', 9, 0),
(279, 'Rose Quartz GB221', 'Rose-Quartz', 'Rose-Quartz', 'Rose-Quartz', 'Rose-Quartz', '850', 8, '<p>The fair and lovely Rose Quartz with its gentle pink essence is a stone of the heart a Crystal of Unconditional Love.It carries a soft feminine energy of compassion and peace tenderness and healing nourishment and comfort It speaks directly to the', 'yes', 'feature,shop', '15176412771 (29).jpeg', 9, 0),
(280, 'Lapis Stone Bracelet GB222', 'Lapis-Stone-Bracelet', 'Lapis-Stone-Bracelet', 'Lapis-Stone-Bracelet', 'Lapis-Stone-Bracelet', '1450', 3, '<ul>\r\n	<li><strong>Lapis</strong>&nbsp;Lazuli is one of the most sought after stones in use since man&#39;s history began. Its deep celestial blue remains the symbol of royalty and honor gods and power spirit and vision. It is a universal symbol of w', 'yes', 'feature,shop', '15176416091 (28).jpeg', 9, 0),
(281, 'Feroza Bracelet GB223', 'Feroza-Bracelet', 'Feroza-Bracelet', 'Feroza-Bracelet', 'Feroza-Bracelet', '1200', 9, '<p>Feroza stone is one of the rarest and most valued gems in the history. People have been using Feroza stone as an ornament and a decorative item for thousands of year,s The blue-to-green hue of the stone serves as a source of great fascination for ', 'yes', 'feature,shop', '15176419251 (27).jpeg', 9, 0),
(282, 'Aqeeq Bracelet Black GB224', 'Aqeeq-Bracelet-Black ', 'Aqeeq-Bracelet-Black ', 'Aqeeq-Bracelet-Black ', 'Aqeeq-Bracelet-Black ', '1200', 5, '<ul>\r\n	<li>This&nbsp;<strong>aqeeq</strong>&nbsp;stone is in many types and colors, red, white, yellow,&nbsp;<strong>black</strong>, zard etc. But very best is black color gem which is also known as&nbsp;<strong>aqeeq</strong>&nbsp;then comes the 2nd', 'yes', 'feature,shop', '15176428451 (26).jpeg', 9, 0),
(283, 'Traditional Female Cape GB225', 'Traditional-Female-Cape-GB225', 'Traditional-Female-Cape', 'Traditional-Female-Cape', 'Traditional-Female-Cape', '2200', 5, '<p>A perfect match your personality</p>\r\n', 'yes', 'feature,shop', '15176447001 (25).jpeg', 12, 0),
(284, 'Traditional Female Cape GB227', 'Traditional-Female-Cape-GB227', 'Traditional-Female-Cape ', 'Traditional-Female-Cape ', 'Traditional-Female-Cape ', '950', 4, '<p>Perfect match for female&nbsp;</p>\r\n', 'yes', 'feature,shop', '15176453931 (23).jpeg', 12, 0),
(285, 'Traditional Female Cape GB228', 'Traditional-Female-Cape-GB228', 'Traditional-Female-Cape', 'Traditional-Female-Cape', 'Traditional-Female-Cape', '2300', 9, '<p>Perfect match for female</p>\r\n', 'yes', 'feature,shop', '15176456761 (22).jpeg', 12, 0),
(286, 'Ladies Woolan Shawl GB229', 'Ladies-Woolan-Shawl', 'Ladies-Woolan-Shawl', 'Ladies-Woolan-Shawl', 'Ladies-Woolan-Shawl', '2300', 6, '<ul>\r\n	<li>We are a leading Manufacturer of&nbsp;<strong>Ladies Woolen Shawl&nbsp;</strong>Handmade&nbsp;<strong>Woolen Shawl</strong>&nbsp;from Gilgit Baltistan.<strong>Ladies Woolen Shawl,s.</strong>Available In Different&nbsp;Color,s</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15176513621 (21).jpeg', 16, 0),
(287, 'Ladies Woolan Shawl GB230', 'Ladies-Woolan-Shawl', 'Ladies-Woolan-Shawl', 'Ladies-Woolan-Shawl', 'Ladies-Woolan-Shawl', '2300', 6, '<ul>\r\n	<li>We are a leading Manufacturer of&nbsp;<strong>Ladies Woolen Shawl&nbsp;</strong>Handmade&nbsp;<strong>Woolen Shawl</strong>&nbsp;from Gilgit Baltistan.<strong>Ladies Woolen Shawl,s.</strong>Available In Different&nbsp;Color,s</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15176514571 (20).jpeg', 16, 0),
(288, 'Ladies Woolan Hand Baig GB231', 'Ladies-Woolan-Hand-Baig', 'Ladies-Woolan-Hand-Baig', 'Ladies-Woolan-Hand-Baig', 'Ladies-Woolan-Hand-Baig', '1600', 8, '<ul>\r\n	<li>\r\n	<h3>Ladies Woolan Hand Baig known for its attractive look</h3>\r\n	</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15176538781 (72).jpeg', 12, 0),
(301, 'Ladies Cape Shawl GB233', 'Ladies-Cape-Shawl', 'Ladies-Cape-Shawl', 'Ladies-Cape-Shawl', 'Ladies-Cape-Shawl', '2300', 5, '<p>Pure Woolen Hand Made Ladies Emb Cape Shawl From Gilgit Baltistan.</p>\r\n', 'yes', 'feature,shop', '151765682220180123_153759 (1).jpg', 16, 0),
(304, 'Tourmaline Stone GB235', 'Tourmaline-Stone', 'Tourmaline-Stone', 'Tourmaline-Stone', 'Tourmaline-Stone', '1800', 7, '<ul>\r\n	<li>Tourmaline also has many positive attributes in the spiritual realm . It also creates a commitment towards the completion of one&rsquo;s goals and is said to protect the wearer against dangers.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15178171661 (19).jpeg', 17, 0),
(305, 'Tiger Eye Stone GB236', 'Tiger-Eye-Stone', 'Tiger-Eye-Stone', 'Tiger-Eye-Stone', 'Tiger-Eye-Stone', '1500', 9, '<ul>\r\n	<li>Tigers Eye Stone is a crystal with lovely bands of yellow-golden color through it. This is a powerful stone that helps you to release fear and anxiety and aids harmony and balance.9</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15178175771 (18).jpeg', 17, 0),
(306, 'Aqeeq Stone GB237', 'Aqeeq-Stone', 'Aqeeq-Stone', 'Aqeeq-Stone', 'Aqeeq-Stone', '2200', 5, '<ul>\r\n	<li>&nbsp;Aqeeq Stone perfect match your personality and Aqeeq stone benefits are mentioned in Islam and their effect depend upon date of birth directly.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15178180651 (17).jpeg', 17, 0),
(307, 'Malachite Stone GB238', 'Malachite-Stone', 'Malachite-Stone', 'Malachite-Stone', 'Malachite-Stone', '1500', 8, '<ul>\r\n	<li>Malachite has been used to success in busines.It is a stone of balance in relationships.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15178186161 (16).jpeg', 17, 0),
(308, 'Lapis Stone GB239', 'Lapis-Stone', 'Lapis-Stone', 'Lapis-Stone', 'Lapis-Stone', '1900', 9, '<ul>\r\n	<li>&nbsp; Lapis lazuli is a good protection stone because of all the protective energies that it holds. But it&rsquo;s also a manifestation stone because it can help you make your dreams a reality.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15178188921 (15).jpeg', 17, 0),
(309, 'Feroza Stone GB240', 'Feroza-Stone', 'Feroza-Stone', 'Feroza-Stone', 'Feroza-Stone', '1600', 9, '<ul>\r\n	<li>It gives status and respect in society.</li>\r\n	<li>Enhances mind and communication.</li>\r\n	<li>Offers you innovative power of mind.</li>\r\n	<li>Improves self-esteem and confidence.</li>\r\n	<li>Protect from evil spirit.</li>\r\n	<li>It contains', 'yes', 'feature,shop', '15178196131 (14).jpeg', 17, 0),
(310, 'Feroza Stone GB241', 'Feroza-Stone', 'Feroza-Stone', 'Feroza-Stone', 'Feroza-Stone', '2000', 7, '<ul>\r\n	<li>&nbsp;Turquoise is considered a pure stone. Hence, it saves the wearer from mishaps and violence while also reducing mental stress.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15178202081 (13).jpeg', 17, 0),
(311, 'Moon Stone GB242', 'Moon-Stone', 'Moon-Stone', 'Moon-Stone', 'Moon-Stone', '1400', 7, '<ul>\r\n	<li>&nbsp; Moonstone is a stone of inner growth and strength. Moonstone has been used in jewelry for millennia, including ancient civilizations.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15178206631 (12).jpeg', 17, 0),
(312, 'Moon Stone GB243', 'Moon-Stone', 'Moon-Stone', 'Moon-Stone', 'Moon-Stone', '1400', 8, '<ul>\r\n	<li>Moonstone is a master healer for women it brings soothing healing calm energy and helps regain back your power and inner balance.It is the stone of the mother moon deep healing waters and sacred feminine energies.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15178258621 (11).jpeg', 17, 0),
(313, 'Aqeeq Stone GB244', 'Aqeeq-Stone', 'Aqeeq-Stone', 'Aqeeq-Stone', 'Aqeeq-Stone', '1500', 6, '<ul>\r\n	<li>Â  Aqeeq stones are one of the most widely used gemstones in JewelleryÂ and menâ€™s accessories.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15178265131 (10).jpeg', 17, 0),
(315, 'Tiger Eye Stone GB246', 'Tiger-Eye-Stone', 'Tiger-Eye-Stone', 'Tiger-Eye-Stone', 'Tiger-Eye-Stone', '1500', 5, '<ul>\r\n	<li>&nbsp;Tigers Eye Stone is a crystal with lovely bands of yellow-golden color through it.This is a powerful stone that helps you to release fear and anxiety and aids harmony and balance.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15178276941 (8).jpeg', 17, 0),
(316, 'Marjan Stone Necklace GB210', 'Marjan Stone Necklace', 'Marjan- Stone- Necklace', 'Marjan- Stone- Necklace', 'Marjan- Stone- Necklace', '900', 10, '<p>Pure Handmade from gilgit baltistan</p>\r\n', 'yes', 'feature,shop', '1517827772GB211.jpeg', 9, 0),
(317, 'Malachite Stone Necklace GB212', 'Malachite- Stone- Necklace', 'Malachite- Stone- Necklace', 'Malachite -Stone- Necklace', 'Malachite- Stone -Necklace', '1200', 10, '<p>Pure Handmade from gilgit baltistan</p>\r\n', 'yes', 'feature,shop', '1517828129GB212.jpeg', 9, 0),
(318, 'Marjan Stone GB247', 'Marjan-Stone', 'Marjan-Stone', 'Marjan-Stone', 'Marjan-Stone', '2500', 6, '<ul>\r\n	<li>Marjan stone which is called&nbsp;<strong>Coral Stone</strong>&nbsp;which is usually found in one color only.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15178283611 (7).jpeg', 17, 0),
(320, 'Aquamarine Stone GB248', 'Aquamarine-Stone', 'Aquamarine-Stone', 'Aquamarine-Stone', 'Aquamarine-Stone', '8000', 6, '<ul>\r\n	<li>&nbsp;Aquamarine carries the powers to balance stabilize and regulate the mental emotional and physical aspect of its user.The powers of this semi precious gemstone impact the areas of financial conditions relationships and the overall</li', 'yes', 'feature,shop', '15178290271 (6).jpeg', 17, 0),
(321, 'Aqeeq Stone GB245', 'Aqeeq-Stone ', 'Aqeeq-Stone ', 'Aqeeq-Stone ', 'Aqeeq-Stone ', '1500', 8, '<ul>\r\n	<li>Aqeeq is a rarely found ornamental stone. It is popular for its artistic designs on it but also for being one of the most valuable natural stone The value of aqeeq stone is decided depending on the color and shape of the Aqeeq stone.</li>\r', 'yes', 'feature,shop', '15178302891 (9).jpeg', 17, 0),
(322, 'Tourmaline Stone GB249', 'Tourmaline-Stone', 'Tourmaline-Stone', 'Tourmaline-Stone', 'Tourmaline-Stone', '3500', 7, '<ul>\r\n	<li>Tourmaline also has many positive attributes in the spiritual realm . It also creates a commitment towards the completion of one&rsquo;s goals and is said to protect the wearer against dangers.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15178311811 (5).jpeg', 17, 0),
(323, 'Opal Stone GB250', 'Opal-Stone', 'Opal-Stone', 'Opal-Stone', 'Opal-Stone', '3500', 5, '<ul>\r\n	<li>&nbsp;Opal is a delicate stone with fine but vibrant energies. It&rsquo;s a stone that will enhance your cosmic consciousness and strengthen your mystical and psychical visions.There are Five color,s and different varieties of this stone.&', 'yes', 'feature,shop', '15178315931 (4).jpeg', 17, 0),
(324, 'Ruby Stone GB251', 'Ruby-Stone', 'Ruby-Stone', 'Ruby-Stone', 'Ruby-Stone', '2500', 5, '<ul>\r\n	<li>&nbsp;<strong>Benefits Of Ruby Stone.</strong></li>\r\n	<li>This stone is very good for success in higher competitive exams.</li>\r\n	<li>In women,&nbsp;it raises zeal and supremacy.</li>\r\n	<li>Ruby&nbsp;intensifies all emotions</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15178328651 (3).jpeg', 17, 0),
(325, 'Sapphire Stone GB252', 'Sapphire-Stone', 'Sapphire-Stone', 'Sapphire-Stone', 'Sapphire-Stone', '2000', 8, '<ul>\r\n	<li>The sapphire is the birth stone for the month of September and the most important attribute of the sapphire was said to be the protection against sorcery</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15178336471 (2).jpeg', 17, 0),
(326, 'Emerald Stone GB253', 'Emerald-Stone', 'Emerald-Stone', 'Emerald-Stone', 'Emerald-Stone', '2000', 10, '<ul>\r\n	<li>&nbsp;&quot;Emerald&quot; should be used when chromium is the cause of the green color and that stones colored by vanadium should be called &quot;green bery&quot;</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15178339091 (1).jpeg', 17, 0),
(327, 'Rutile Bracelet GB254', 'Rutile-Bracelet', 'Rutile-Bracelet', 'Rutile-Bracelet', 'Rutile-Bracelet', '3500', 10, '<ul>\r\n	<li>The biggest and most historically significant use of Rutile quartz has been as a stone that promotes psychic power.</li>\r\n	<li>Rutile is powerful for improving awareness of the world.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15178910481 (89).jpeg', 9, 0),
(328, 'Aqeeq stone Bracelet GB255', 'Aqeeq- stone- Bracelet', 'Aqeeq- stone- Bracelet', 'Aqeeq- stone- Bracelet', 'Aqeeq- stone- Bracelet', '1200', 10, '<p><strong>Benefits</strong>&nbsp;of Wearing&nbsp;<em>Aqeeq Stone</em>. Wearing&nbsp;<em>Aqeeq</em>&nbsp;Rings are creates joy in the heart and is good for the eye sight and it also helps eliminate depression, sadness and high tension anger. This&nbs', 'yes', 'feature,shop', '15178913531 (90).jpeg', 9, 0),
(329, 'Wooden Spoon,s GB256', 'Wooden-Spoon,s', 'Wooden-Spoon,s', 'Wooden-Spoon,s', 'Wooden-Spoon,s', '1800', 7, '<ul>\r\n	<li>\r\n	<p><strong>Advantages of a Wood Spoon,s</strong></p>\r\n	</li>\r\n	<li>\r\n	<p>Wood is a natural renewable resource so if you like to cook in the most environmentally responsible way wooden spoons should be your tool of choice</p>\r\n	</li>\r\n	<', 'yes', 'feature,shop', '15178918101 (58).jpeg', 12, 0),
(330, 'Ladies Hand Bag GB257', 'Ladies-Hand-Bag', 'Ladies-Hand-Bag', 'Ladies-Hand-Bag', 'Ladies-Hand-Bag', '1800', 6, '<ul>\r\n	<li>\r\n	<h3>Ladies Woolan Hand Baig known for its attractive look.</h3>\r\n	</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517895078GEDC4697.JPG', 12, 0),
(331, 'Ladies Hand Bag GB258', 'Ladies-Hand-Bag1', 'Ladies-Hand-Bag', 'Ladies-Hand-Bag', 'Ladies-Hand-Bag', '1800', 5, '<ul>\r\n	<li>\r\n	<h3>Ladies Woolan Hand Baig known for its attractive look.</h3>\r\n	</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517895587GB  258   .JPG', 12, 0),
(332, 'Ladies Hand Bag GB259', 'Ladies-Hand-Bag2', 'Ladies-Hand-Bag ', 'Ladies-Hand-Bag ', 'Ladies-Hand-Bag ', '1800', 4, '<ul>\r\n	<li>\r\n	<h3>Ladies Woolan Hand Baig known for its attractive look.</h3>\r\n	</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517902170GB   259    .JPG', 12, 0),
(333, 'Ladies Pouch GB260', 'Ladies-Pouch', 'Ladies-Pouch', 'Ladies-Pouch', 'Ladies-Pouch', '1800', 7, '<ul>\r\n	<li><strong>&nbsp;</strong>Ladies Hand Pouch&nbsp;Stylish Vivid colors Easy to carry.&nbsp;</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517902818GB  260   .JPG', 12, 0),
(334, 'Ladies Pouch GB261', 'Ladies-Pouch', 'Ladies-Pouch', 'Ladies-Pouch', 'Ladies-Pouch', '1800', 7, '<ul>\r\n	<li>&nbsp; Ladies Hand Pouch Stylish Vivid colors Easy to carry.and available different colors and Design,s</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517903355GB  261   .JPG', 12, 0),
(335, 'Ladies Pouch GB262', 'Ladies-Pouch', 'Ladies-Pouch', 'Ladies-Pouch', 'Ladies-Pouch', '1800', 6, '<ul>\r\n	<li>&nbsp; Ladies Hand Pouch Stylish Vivid colors Easy to carry.and available different colors and Design,s</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517903478GB     262.JPG', 12, 0),
(336, ' Velvet Bed sheet GB263 ', ' Velvet-Bed-sheet', ' Velvet-Bed-sheet', ' Velvet-Bed-sheet', ' Velvet-Bed-sheet', '18000', 5, '<ul>\r\n	<li>&nbsp;Velvet is incredibly smooth and feels great on skin.</li>\r\n	<li>&nbsp;Velvet is a naturally hypoallergenic fabric and resists dust, fungus, mold and many other allergens.</li>\r\n	<li>&nbsp;Velvet is the longest lasting natural fabric.', 'yes', 'feature,shop', '1518087481GB     263    .JPG', 12, 0),
(337, 'Apricot (Kilawo) GB264', 'Apricot (Kilawo) GB', 'Apricot (Kilawo) GB', 'Apricot (Kilawo) GB', 'Apricot (Kilawo) GB', '1800', 10, '<p>Apricot kornel (kilwo) pure dry fruit from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '1517909116images (1).jpg', 13, 0),
(338, 'Walnut (Kilawo) GB265', 'Walnut- (Kilawo-)', 'Walnut- (Kilawo)', 'Walnut- (Kilawo)', 'Walnut- (Kilawo)', '1800', 10, '<p>Walnut&nbsp;kornel (kilwo) pure dry fruit from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '15182498161.jpg', 13, 0),
(339, 'Dry Amluk GB266', 'Dry Amluk', 'Dry Amluk', 'Dry Amluk', 'Dry Amluk', '1500', 10, '<p>Dry Amluk &nbsp;pure dry fruit from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '1517909812download.jpg', 13, 0),
(340, 'Dry Amluk Black GB267', 'Dry- Amluk Black', 'Dry- Amluk Black', 'Dry- Amluk-Black', 'Dry Amluk-Black', '1500', 10, '<p>Dry Amluk &nbsp;pure dry fruit from Gilgit Baltistan</p>\r\n', 'yes', 'feature,shop', '15179099852c2a5cc21ca455fe.jpg', 13, 0),
(341, 'Quartz Stone Bracelet GB268', 'Quartz-Stone-Bracelet', 'Quartz-Stone-Bracelet', 'Quartz-Stone-Bracelet', 'Quartz-Stone-Bracelet', '2500', 6, '<ul>\r\n	<li>Quotes Stone Bracelet 100% Pure.</li>\r\n	<li>In women it raises zeal and supremacy.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15179809291 (91).jpeg', 9, 0),
(342, 'Peridot Stone GB269', 'Peridot-Stone', 'Peridot-Stone', 'Peridot-Stone', 'Peridot-Stone', '2200', 9, '<p>Peridot is the birthstone for the month of August.Peridot has been long considered to be an aid to friendship and supposedly frees the mind of envious thoughts and&nbsp;It is also supposed to protect the wearer from the evil eye.</p>\r\n', 'yes', 'feature,shop', '1517981699GEDC4708.JPG', 17, 0),
(343, 'Black Opal Stone GB270', 'Black-Opal-Stone', 'Black-Opal-Stone', 'Black-Opal-Stone', 'Black-Opal-Stone', '6500', 9, '<ul>\r\n	<li>Opal is the birthstone for the month of October.</li>\r\n	<li>Black Opal gives a power to foresee a future and brings a&nbsp; &nbsp; &nbsp; &nbsp;good future.</li>\r\n	<li>Ancient Romans associated opal with hope and good luck.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517983464GEDC4711.JPG', 17, 0),
(344, 'Portal Stone GB271', 'Portal-Stone', 'Portal-Stone', 'Portal-Stone', 'Portal-Stone', '1500', 6, '<ul>\r\n	<li>&nbsp;Portal Stone also has many positive attributes in the spiritual realm.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517987434GEDC4712.JPG', 17, 0),
(345, 'Amethyst Stone GB272', 'Amethyst-Stone', 'Amethyst-Stone', 'Amethyst-Stone', 'Amethyst-Stone', '1500', 7, '<ul>\r\n	<li>Amethyst is the purple variety of the mineral Quartz and&nbsp;&nbsp;Amethyst Stone also contains other gemstones such as Rose Quartz and Smoky Quartz.</li>\r\n	<li>Amethyst has been thought to have many attributes throughout history and all ', 'yes', 'feature,shop', '1517988727GEDC4717.JPG', 17, 0),
(346, 'Blue Topaz Stone GB275', 'Blue-Topaz-Stone', 'Blue-Topaz-Stone', 'Blue-Topaz-Stone', 'Blue-Topaz-Stone', '3500', 7, '<ul>\r\n	<li>&nbsp; Blue Topaz is a very pretty stone.</li>\r\n	<li>Blue Topaz is a stone of peacefulness calming to the emotions and ideal for meditation and connecting with spiritual beings.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517990972GEDC4718.JPG', 17, 0),
(347, 'Opal Real Stone GB276', 'Opal-Real-Stone', 'Opal-Real-Stone', 'Opal-Real-Stone', 'Opal-Real-Stone', '3500', 7, '<ul>\r\n	<li>&nbsp;Opal is the birthstone for the month of October.</li>\r\n	<li>Opal stone are among the visually most attractive gemstone.</li>\r\n	<li>Opal is a stone of protection, faithfulness and loyalty.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517992325GEDC4719.JPG', 17, 0),
(348, 'Golden Topaz Stone GB277', 'Golden-Topaz-Stone', 'Golden-Topaz-Stone', 'Golden-Topaz-Stone', 'Golden-Topaz-Stone', '1200', 8, '<ul>\r\n	<li>Topaz is the birthstone for the month of December.</li>\r\n	<li>&nbsp;Topaz is a stone of love and good fortune and is highly&nbsp; &nbsp; &nbsp; &nbsp;effective for bringing successful attainment of goals.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517997699GEDC4721.JPG', 17, 0),
(349, 'Garnet Stone GB278', 'Garnet-Stone', 'Garnet-Stone', 'Garnet-Stone', 'Garnet-Stone', '1200', 9, '<ul>\r\n	<li>Garnet is the birthstone for January.</li>\r\n	<li>The energies of Garnet can boost your chances of success when it comes to your business dealings and business opportunities.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1517998491GEDC4723.JPG', 17, 0),
(352, 'White Pearl Ring,s GB280', 'White-Pearl-Ring,s', 'White-Pearl-Ring,s', 'White-Pearl-Ring,s', 'White-Pearl-Ring,s', '800', 8, '<ul>\r\n	<li>Pearl is used to remove the evil effects of moon and in turn it strengthens the mind force and increases the good sleep.</li>\r\n	<li>It inspires love and faith between the two partners.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1518065012GEDC4726.JPG', 9, 0),
(353, 'Sillver Ring,s GB283', 'Sillver-Ring,s ', 'Sillver-Ring,s ', 'Sillver-Ring,s ', 'Sillver-Ring,s ', '800', 5, '<ul>\r\n	<li>&nbsp;As a metal, silver has significant health benefits that have been used across cultures for centuries.</li>\r\n	<li>Silver is an important element for balancing other elements in our body.</li>\r\n	<li>Sliver ring,s are availabel in diffe', 'yes', 'feature,shop', '1518066059GEDC4727.JPG', 9, 0),
(354, 'Ladies Woolen Hand Bag GB284', 'Ladies-Woolen-Hand-Bag', 'Ladies-Woolen-Hand-Bag', 'Ladies-Woolen-Hand-Bag', 'Ladies-Woolen-Hand-Bag', '2500', 8, '<ul>\r\n	<li>\r\n	<h3>Ladies Woolan Hand Baig known for its attractive look.</h3>\r\n	</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1518068660GB      284      .jpeg', 12, 0),
(355, 'Ladies Hand Clutch GB285', 'Ladies-Hand-Clutch', 'Ladies-Hand-Clutch', 'Ladies-Hand-Clutch', 'Ladies-Hand-Clutch', '1500', 6, '<ul>\r\n	<li>Ladies hand clutch are making in Gilgit Baltistan.</li>\r\n	<li>Ladies hand clutch,s are available in different size,s and&nbsp;different colors.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15180707441 (85).jpeg', 12, 0),
(356, 'Female Hand Clutch GB286', 'Female-Hand-Clutch', 'Female-Hand-Clutch', 'Female-Hand-Clutch', 'Female-Hand-Clutch', '2200', 8, '<ul>\r\n	<li>Ladies hand clutch are making in Gilgit Baltistan.</li>\r\n	<li>Ladies hand clutch,s are available in different size,s and&nbsp;different colors.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15180721271 (84).jpeg', 12, 0),
(357, 'Male Wallet GB287 ', 'Male-Wallet', 'Male-Wallet', 'Male-Wallet', 'Male-Wallet', '2200', 8, '<ul>\r\n	<li>Male wallet,s are making Gilgit Baltistan.</li>\r\n	<li>Male wallet are&nbsp;available in different color,s and different desings.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15180727281 (86).jpeg', 12, 0),
(358, 'Ladies jewellery pouch GB288', 'Ladies-jewellery-pouch', 'Ladies-jewellery-pouch', 'Ladies-jewellery-pouch', 'Ladies-jewellery-pouch', '1500', 8, '<ul>\r\n	<li>Ladies jewellery pouch,s are made in gilgit baltistan.</li>\r\n	<li>&nbsp;Ladies jewellery pouch,s are available in different color,s and designs.</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '15180763041 (79).jpeg', 12, 0),
(359, 'Valvet Hand Made Bed sheet GB289', 'Valvet-Hand-Made-Bed-sheet', 'Valvet-Hand-Made-Bed-sheet', 'Valvet-Hand-Made-Bed-sheet', 'Valvet-Hand-Made-Bed-sheet', '18000', 10, '<ul>\r\n	<li>Velvet is incredibly smooth and feels great on skin.</li>\r\n	<li>&nbsp;Velvet is a naturally hypoallergenic fabric and resists dust, fungus, mold and many other allergens.</li>\r\n	<li>&nbsp;Velvet is the longest lasting natural fabric.</li>\r', 'yes', 'feature,shop', '1518087834GB     289    .JPG', 12, 0),
(360, 'Hand Made Bed sheet Valvet  GB290', 'Hand-Made-Bed-sheet-Valvet', 'Hand-Made-Bed-sheet-Valvet', 'Hand-Made-Bed-sheet-Valvet', 'Hand-Made-Bed-sheet-Valvet', '18000', 10, '<ul>\r\n	<li>.Velvet is a naturally hypoallergenic fabric and resists dust fungus mold and many other allergens.</li>\r\n	<li>Velvet Bed sheet,s are available in different color,s and different design,s</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1518088216GB    290    .JPG', 12, 0),
(361, 'Dry kiwi GB291', 'Dry kiwi GB291', 'Dry- kiwi- GB291', 'Dry- kiwi- GB291', 'Dry- kiw-i GB291', '900', 10, '<p>Sweet, juicy&nbsp;<strong>kiwi</strong>&nbsp;may not always be practical for long-term storage or eating on the go, so consider&nbsp;<strong>dried kiwi</strong>&nbsp;fruit as an alternative with many&nbsp;<strong>benefits</strong>. This dehydrated', 'yes', 'feature,shop', '1518090317GB290.jpg', 13, 0),
(362, 'Dry Garma GB292', 'Dry Garma GB292', 'Dry Garma GB292', 'Dry Garma GB292', 'Dry Garma GB292', '900', 10, '<h3 style=\"font-style: normal;\"><strong>1. Great Source of Vitamin A and Beta-Carotene.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&', 'yes', 'feature,shop', '1518152109GB292.jpg', 13, 0),
(363, 'Dry Cherry GB293', 'Dry Cherry GB293', 'Dry- Cherry- GB293', 'Dry- Cherry- GB293', 'Dry- Cherry -GB293', '900', 10, '<ul>\r\n	<li>Antioxidant Protection. Cherries contain powerful antioxidants like anthocyanins and cyanidin.</li>\r\n	<li>Cancer-Preventive Compounds.</li>\r\n	<li>Reduce Inflammation and Your Risk of Gout.</li>\r\n	<li>Support Healthy Sleep (Melatonin) .</li', 'yes', 'feature,shop', '1518152461GB293.jpg', 13, 0),
(364, 'Dry Pears GB294', 'Dry -Pears- GB294', 'Dry- Pears -GB294', 'Dry- Pears- GB294', 'Dry- Pears- GB294', '900', 10, '<p>&nbsp;Prevents Heart Diseases. One of the best&nbsp;<em>benefits</em>&nbsp;of pears include the presence of fiber, which reduces the cholesterol in the body and thereby protects us from heart diseases. Daily intake of fiber rich food like pears ca', 'yes', 'feature,shop', '1518152710GB294.jpg', 13, 0),
(365, 'Dry Pine Apple GB295', 'Dry- Pine Apple- GB295', 'Dry- Pine Apple- GB295', 'Dry- Pine Apple- GB295', 'Dry- Pine Apple- GB295', '900', 10, '<p>&nbsp;Nutritional Value of&nbsp;<em>Pineapple</em>.&nbsp;<em>Pineapples</em>&nbsp;are a storehouse of several health&nbsp;<em>benefits</em>&nbsp;due to its wealth of nutrients, vitamins, and minerals, including potassium, copper, manganese, calciu', 'yes', 'feature,shop', '1518152933GB295.jpg', 13, 0),
(366, 'Dry Walnut kernel GB296', 'Dry- Walnut kernel -GB296', 'Dry- Walnut kernel- GB296', 'Dry -Walnut kerne-l GB296', 'Dry- Walnut kernel GB296', '1400', 10, '<p><strong>Benefits</strong>&nbsp;of&nbsp;<em>walnuts</em>&nbsp;include an improvement in metabolism, and bone health, and control of diabetes.&nbsp;<em>Walnut</em>&nbsp;also aids in weight management, and helps as a mood booster.</p>\r\n', 'yes', 'feature,shop', '1518153510GB296.jpg', 13, 0),
(367, 'Dry Raisin GB297', 'Dry  Raisin  GB297', 'Dry  Raisin  GB297', 'Dry  Raisin  GB297', 'Dry  Raisin  GB297', '800', 10, '<p>The health&nbsp;<em>benefits</em>&nbsp;of&nbsp;<em>raisins</em>&nbsp;include treating constipation, acidosis, anemia, fever, . They have also been known for aiding in a healthy weight gain, as well as for their positive impac</p>\r\n', 'yes', 'feature,shop', '1518153752GB297.jpg', 13, 0),
(368, 'Dry Banana  GB298', 'Dry- Banana- GB298', 'Dry- Banana- GB298', 'Dry -Banana- GB298', 'Dry-Banana -GB298', '900', 10, '<p><strong>Banana</strong>&nbsp;Health&nbsp;<em>Benefits</em>. Potassium. Potassium is an essential mineral which maintains proper heart function and regulates your blood pressure. Increased Energy. Improved Digestion. Cure for Ulcers &amp; Heartburn', 'yes', 'feature,shop', '1518154000GB298.jpg', 13, 0),
(369, 'Beans (Bukak) GB299', 'Beans-Bukak-GB299', 'Beans (Bukak) GB299', 'Beans (Bukak) GB299', 'Beans (Bukak) GB299', '550', 10, '<ul>\r\n	<li>1 kg pack</li>\r\n	<li>Effective for kidney stone patients.</li>\r\n	<li>Gestro patients.</li>\r\n	<li>Cancer patients.</li>\r\n	<li>Anti-Oxident</li>\r\n	<li>Free-Colistrol</li>\r\n	<li>Good for High Blood Pressure Patients</li>\r\n</ul>\r\n', 'yes', 'feature,shop', '1518154692GEDC4684.JPG', 7, 0),
(370, 'Beans Black (Bukak) GB300', 'Beans-Bukak-GB300', 'Beans- (Bukak)- GB300', 'Beans- (Bukak)- GB300', 'Beans -(Bukak)- GB300', '350', 10, '<ul>\r\n	<li>Effective for kidney stone patients.</li>\r\n	<li>Gestro patients.</li>\r\n	<li>Cancer patients.</li>\r\n	<li>Anti-Oxident Anti <a href=\"http://www.heart.org/HEARTORG/Conditions/Cholesterol/Cholesterol_UCM_001089_SubHomePage.jsp\">Cholesterol</a>', 'yes', 'feature,shop', '1518154877GB300.JPG', 7, 0),
(375, 'Blue-Topaz GB 310', 'Blue-Topaz', 'Blue-Topaz', 'Blue-Topaz', 'Blue-Topaz', '4500', 10, '<p>Real Blue Topaz Gem Stone Origin Gilgit.Rs.900 Per caret</p>\r\n', 'yes', 'feature,shop', '15182538471 (1).jpg', 17, 0),
(377, 'Blue Topaz GB311', 'Blue-Topaz-GB311', 'Blue-Topaz', 'Blue-Topaz', 'Blue-Topaz', '4500', 10, '<p>Blue Topaz Real Gem Stone , Origin Gilgit, Rs 900 Per Caret</p>\r\n', 'yes', 'feature,shop', '15182541691 (2).jpg', 17, 0),
(379, 'London Topaz GB 312', 'London-Blue-Topaz', 'Blue-Topaz', 'Blue-Topaz', 'Blue-Topaz', '4500', 10, '<p>London Blue Topaz Heated Gem Stone , Origin Gilgit, Rs 900 Per Caret</p>\r\n', 'yes', 'feature,shop', '15182545111 (3).jpg', 17, 0),
(381, 'Tourmaline Green GB313', 'Tourmaline-Green-GB313', 'Tourmaline-Green', 'Tourmaline-Green', 'Tourmaline-Green', '1250', 10, '<p>Turmaline Green Gem Stone , Origin Gilgit, Rs 250 Per Caret</p>\r\n', 'yes', 'feature,shop', '15182547761 (7).jpg', 17, 0),
(382, 'London Topaz  GB314', 'London-Topaz-GB314', 'London Topaz  ', 'London Topaz  ', 'London Topaz', '4500', 10, '<p>London Blue Heated Gem Stone , Origin Gilgit, Rs 900 Per Caret. Standard Size For a ring is 5 Caret.</p>\r\n', 'yes', 'feature,shop', '15182550081 (4).jpg', 17, 0),
(383, 'Nafride Jade  GB315', 'Nafride-Jade- GB315', 'Nafride- Jade', 'Nafride- Jade', 'Nafride- Jade', '1250', 10, '<p>Nafride jade Gem Stone , Origin Gilgit, Rs 250 Per Caret. Standard Size For a ring is 5 Caret.</p>\r\n', 'yes', 'feature,shop', '15182556041 (41).jpg', 17, 0),
(384, 'Star Ruby GB316', 'Star-Ruby-GB316', 'Star-Ruby', 'Star-Ruby', 'Star-Ruby', '1250', 10, '<p>Star Ruby Gem Stone , Origin Gilgit, Rs 250 Per Caret. Standard Size For a ring is 5 Caret.</p>\r\n', 'yes', 'feature,shop', '15182558671 (13).jpg', 17, 0),
(385, 'Star Sapphire GB317', 'Star-Sapphire-GB317', 'Star-Sapphire ', 'Star-Sapphire ', 'Star-Sapphire ', '1250', 10, '<p>Star Sapphire Gem Stone , Origin Gilgit, Rs 250 Per Caret. Standard Size For a ring is 5 Caret.</p>\r\n', 'yes', 'feature,shop', '15182561721 (14).jpg', 17, 0),
(386, 'Green Tourmaline GB318', 'Green-Tourmaline', 'Green-Tourmaline', 'Green-Tourmaline', 'Green-Tourmaline', '2000', 12, '<p>Green Tourmaline real stone origin Gilgit Rs-400 per crait standard size 5 crait.</p>\r\n', 'yes', 'feature,shop', '15182595181 (17).jpg', 17, 0),
(387, 'Star Ruby Stone GB319', 'Star-Ruby-Stone', 'Star-Ruby-Stone', 'Star-Ruby-Stone', 'Star-Ruby-Stone', '1200', 11, '<p>Star Ruby&nbsp;real stone origin Gilgit Rs-240 per crait standard size 5 crait.</p>\r\n', 'yes', 'feature,shop', '15182599541 (31).jpg', 17, 0),
(388, 'Peridot Real Stone GB320', 'Peridot-Real-Stone', 'Peridot-Real-Stone', 'Peridot-Real-Stone', 'Peridot-Real-Stone', '2550', 11, '<p>&nbsp; Peridot real stone origin Gilgit Rs-510 per crait standard size 5 crait.</p>\r\n', 'yes', 'feature,shop', '15182602431 (22).jpg', 17, 0),
(389, 'Ruby Real Stone GB321', 'Ruby-Real-Stone', 'Ruby-Real-Stone', 'Ruby-Real-Stone', 'Ruby-Real-Stone', '3000', 11, '<p>Ruby real stone origin Gilgit Rs-600 per crait standard size 5 crait.</p>\r\n', 'yes', 'feature,shop', '15182604851 (25).jpg', 17, 0),
(390, ' Green Tourmaline Real GB322', ' Green-Tourmaline-Real', ' Green-Tourmaline-Real', ' Green-Tourmaline-Real', ' Green-Tourmaline-Real', '8500', 11, '<p>Green Tourmaline real stone origin Gilgit Rs-1700 per crait standard size 5 crait.</p>\r\n', 'yes', 'feature,shop', '15182611731 (18).jpg', 17, 0),
(391, 'Pista GB001', 'Pista-GB-001', 'Pista 001', 'Pista 001', 'pista', '1670', 10, '<p>Finest Quality Pista Dry Fruit, Per kg price RS 1670,</p>\r\n', 'yes', 'feature,shop', '1518261801pista-600x401.jpg', 13, 0),
(392, 'Comadic Stone GB323', 'Comadic-Stone', 'Comadic-Stone', 'Comadic-Stone', 'Comadic-Stone', '5250', 12, '<p>&nbsp; Comadic real stone origin Gilgit Rs-1050 per crait standard size 5 crait.</p>\r\n', 'yes', 'feature,shop', '15182620701 (27).jpg', 17, 0),
(393, 'Blue Sapphire Stone GB324', 'Blue-Sapphire-Stone', 'Blue-Sapphire-Stone', 'Blue-Sapphire-Stone', 'Blue-Sapphire-Stone', '13500', 12, '<p>&nbsp;Blue Sapphire real stone origin Gilgit Rs-2700 per crait standard size 5 crait.</p>\r\n', 'yes', 'feature,shop', '1518262533blue-Sapphire.jpg', 17, 0),
(394, 'Real Ruby Stone GB325', 'Real-Ruby-Stone', 'Real-Ruby-Stone', 'Real-Ruby-Stone', 'Real-Ruby-Stone', '21000', 11, '<p>Real Ruby Stone origin Gilgit Rs-4200 per crait standard size 5 crait.</p>\r\n', 'yes', 'feature,shop', '15182635931 (33).jpg', 17, 0),
(395, 'Rotail Stone GB326', 'Rotail-Stone', 'Rotail-Stone', 'Rotail-Stone', 'Rotail-Stone', '1500', 11, '<p>Rotail&nbsp;real stone origin Gilgit Rs-300 per crait standard size 5 crait.</p>\r\n', 'yes', 'feature,shop', '15182638001 (34).jpg', 17, 0),
(396, 'Marjan Real Stone GB327', 'Marjan-Real-Stone', 'Marjan-Real-Stone', 'Marjan-Real-Stone', 'Marjan-Real-Stone', '2750', 13, '<p>Marjan Real Stone origin Gilgit Rs-550 per crait standard size 5 crait.</p>\r\n', 'yes', 'feature,shop', '15182640011 (37).jpg', 17, 0),
(397, 'Amethyst Real Stone GB328', 'Amethyst-Real-Stone', 'Amethyst-Real-Stone', 'Amethyst-Real-Stone', 'Amethyst-Real-Stone', '1000', 11, '<p>Amethyst&nbsp;real stone origin Gilgit Rs-200 per crait standard size 5 crait.</p>\r\n', 'yes', 'feature,shop', '1518264448GB  328.jpg', 17, 0),
(398, 'Malachite Real Stone GB329', 'Malachite-Real-Stone', 'Malachite-Real-Stone', 'Malachite-Real-Stone', 'Malachite-Real-Stone', '1000', 11, '<p>Malachite real stone origin Gilgit Rs-200 per crait standard size 5 carat.</p>\r\n', 'yes', 'feature,shop', '15182648791 (46).jpg', 17, 0),
(399, 'Hadeed Cheeni Stone GB330', 'Hadeed-Cheeni-Stone', 'Hadeed-Cheeni-Stone', 'Hadeed-Cheeni-Stone', 'Hadeed-Cheeni-Stone', '1000', 11, '<p>Hadeed Cheeni real stone origin Gilgit Rs-200 per crait standard size 5 crait.</p>\r\n', 'yes', 'feature,shop', '1518265411GB  330.jpg', 17, 0),
(400, 'Zard Aqeeq GB331', 'Zard-Aqeeq', 'Zard-Aqeeq', 'Zard-Aqeeq', 'Zard-Aqeeq', '1600', 11, '<p>Zard Aqeeq real stone origin Gilgit Rs 1600 per peace.</p>\r\n', 'yes', 'feature,shop', '1518265936GB   331.jpg', 17, 0),
(401, 'Zeher Mohra GB332', 'Zeher-Mohra-Pendant', 'Zeher-Mohra', 'Zeher-Mohra', 'Zeher-Mohra', '700', 12, '<p>Zeher Mohra real stone Pendat origin Gilgit Rs-700/Piece.Available in different colors</p>\r\n', 'yes', 'feature,shop', '15182664781 (52).jpg', 9, 0),
(402, ' Aqeeq Pendant GB333', 'Aqeeq-Stone-Pendant', 'Aqeeq-Pendant', 'Aqeeq-Pendant', 'Aqeeq-Pendant', '1600', 11, '<p>Natural Cut Real Stone Aqeeq Pendant, origin Gilgit Rs-1600/Piece</p>\r\n', 'yes', 'feature,shop', '15182668901 (54).jpg', 9, 0),
(404, 'Real Aqeeq Pendant GB335', 'Real-Aqeeq-Pendant', 'Real-Aqeeq-Pendant', 'Real-Aqeeq-Pendant', 'Real-Aqeeq-Pendant', '1600', 11, '<p>&nbsp;Aqeeq Pendant real stone origin Gilgit Rs-1600 per piece,Natural cut,Available in different colors</p>\r\n', 'yes', 'feature,shop', '15182680811 (56).jpg', 9, 0),
(405, 'Aqeeq Real Pendant GB336', 'Aqeeq-Real-Pendant', 'Aqeeq-Real-Pendant', 'Aqeeq-Real-Pendant', 'Aqeeq-Real-Pendant', '1600', 13, '<p>Natural Cut Real Stone Pendant Rs 1600/Piece.</p>\r\n', 'yes', 'feature,shop', '15182682211 (57).jpg', 9, 0),
(406, 'Aqeeq Stone Pendant GB337', 'Aqeeq-Stone-Pendant', 'Aqeeq-Stone-Pendant', 'Aqeeq-Stone-Pendant', 'Aqeeq-Stone-Pendant', '1600', 8, '<p>Natural Cut , Real Stone Pendant Rs 1600/Piece. Available in different color,s</p>\r\n', 'yes', 'feature,shop', '15182684061 (58).jpg', 9, 0),
(407, 'Aqeeq Pendant Stone GB338', 'Aqeeq-Pendant-Stone', 'Aqeeq-Pendant-Stone', 'Aqeeq-Pendant-Stone', 'Aqeeq-Pendant-Stone', '1600', 12, '<p>Natural Cut Real Stone Pendant. Rs 1600/Piece.Also Available in different color,s</p>\r\n', 'yes', 'feature,shop', '15182685821 (59).jpg', 9, 0),
(408, 'Real Aqeeq Pendant Stone GB339', 'Real-Aqeeq-Pendant-Stone', 'Real-Aqeeq-Pendant-Stone', 'Real-Aqeeq-Pendant-Stone', 'Real-Aqeeq-Pendant-Stone', '1600', 10, '<p>Aqeeq Pendant real stone origin Gilgit Rs-1600 per piece,natural cut,available in different colors</p>\r\n', 'yes', 'feature,shop', '15182691871 (60).jpg', 9, 0),
(409, 'Aqeeq Pendant Real GB334', 'Aqeeq-Pendant-Real', 'Aqeeq-Pendant-Real', 'Aqeeq-Pendant-Real', 'Aqeeq-Pendant-Real', '1600', 10, '<p>Natural Cut Real Stone Pendant Rs 1600/Piece.</p>\r\n', 'yes', 'feature,shop', '15182695631 (61).jpg', 9, 0),
(410, 'Artificial Stone Bracelet GB340', 'Artificial-Stone-Bracelet', 'Artificial-Stone-Bracelet', 'Artificial-Stone-Bracelet', 'Artificial-Stone-Bracelet', '999', 10, '<p>Artificial Stone Bracelet available in different colors</p>\r\n', 'yes', 'feature,shop', '15182699471 (62).jpg', 9, 0),
(411, 'Natural Stone Pendant GB341', 'Natural-Stone-Pendant', 'Natural-Stone-Pendant', 'Natural-Stone-Pendant', 'Natural-Stone-Pendant', '1200', 10, '<p>Natural Stone Pendant are available in different colors,different design.</p>\r\n', 'yes', 'feature,shop', '15182701891 (63).jpg', 9, 0),
(412, 'Aqeeq Pendant GB342', 'Aqeeq-Pendant-GB342', 'Aqeeq-Pendant', 'Aqeeq-Pendant', 'Aqeeq-Pendant', '1800', 10, '<p>Aqeeq Pendant real stone origin Gilgit Rs-1800 per piece,natural cut,available in different colors</p>\r\n', 'yes', 'feature,shop', '15182704401 (64).jpg', 9, 0),
(413, 'Sang-E-Sitara Pendant GB343', 'Sang-E-Sitara-Pendant', 'Sang-E-Sitara-Pendant', 'Sang-E-Sitara-Pendant', 'Sang-E-Sitara-Pendant', '1800', 10, '<p>Sang-E-Sitara Pendant real stone origin Gilgit Rs-1800 per piece,natural cut,available in different colors</p>\r\n', 'yes', 'feature,shop', '15182707261 (65).jpg', 9, 0),
(414, 'Malachite Pendant GB344', 'Malachite-Pendant-GB344', 'Malachite-Pendant', 'Malachite-Pendant', 'Malachite-Pendant', '1800', 12, '<p>Malachite Pendant real stone origin Gilgit Rs-1800 per piece,available in different colors.</p>\r\n', 'yes', 'feature,shop', '15182710101 (66).jpg', 9, 0),
(415, 'Tiger Eye Pendant GB345', 'Tiger-Eye-Pendant', 'Tiger-Eye-Pendant', 'Tiger-Eye-Pendant', 'Tiger-Eye-Pendant', '1800', 12, '<p>Tiger Eye Pendant real stone origin Gilgit Rs-1800 per piece,available in different colors</p>\r\n', 'yes', 'feature,shop', '15182711491 (67).jpg', 9, 0),
(416, 'Feroza Pendant GB346', 'Feroza-Pendant-GB346', 'Feroza-Pendant-GB346', 'Feroza-Pendant-GB346', 'Feroza-Pendant-GB346', '1800', 12, '<p>Feroza Pendant real stone origin Gilgit Rs-1800 per piece,available in different size</p>\r\n', 'yes', 'feature,shop', '15182713271 (68).jpg', 9, 0),
(417, 'Lapis Stone Pendent GB347', 'Lapis-Stone-Pendent', 'Lapis-Stone-Pendent', 'Lapis-Stone-Pendent', 'Lapis-Stone-Pendent', '1800', 13, '<p>Lapis Stone Pendant real stone origin Gilgit Rs-1800 per piece.</p>\r\n', 'yes', 'feature,shop', '15182714961 (69).jpg', 9, 0),
(418, 'Feroza Stone Pendant GB348', 'Feroza-Stone-Pendant', 'Feroza-Stone-Pendant', 'Feroza-Stone-Pendant', 'Feroza-Stone-Pendant', '1800', 12, '<p>&nbsp;Feroza Pendant real stone origin Gilgit Rs-1800 per piece,available in different design.</p>\r\n', 'yes', 'feature,shop', '15182717511 (70).jpg', 9, 0),
(420, 'Thorny Shrubs Zereshk (Ø²Ø±Ø´Ú©)', 'Thorny-Shrubs-Zereshk-Ø²Ø±Ø´Ú©', 'Thorny-Shrubs-Zereshk', 'Thorny-Shrubs-Zereshk', 'Thorny-Shrubs-Zereshk', '4800', 10, '<p>The berries are edible and rich in&nbsp;<a href=\"https://en.wikipedia.org/wiki/Vitamin_C\">vitamin C</a>,<strong>Reduce DNA Damage, Which Help Protect Against Ageing and Cancer,rotect Cholesterol in The Blood From Becoming Damaged,Lower Blood Press', 'yes', 'feature,shop', '1518272220zarish.jpeg', 7, 0),
(421, 'Hand Made Embroidery ', 'Hand-Made-Embroidery', 'Hand-Made-Embroidery', 'Hand-Made-Embroidery', 'Hand-Made-Embroidery', '16000', 5, '<p>Local Hand Made Full Embroidery Sceneries for Wall Decoration, Pack of three ,Made by local community Hunza.</p>\r\n', 'yes', 'feature,shop', '1518282120GEDC4688.JPG', 12, 0);
INSERT INTO `e_products` (`id`, `name`, `slug`, `pagetitle`, `keywords`, `description`, `price`, `displayorder`, `details`, `display`, `position`, `image`, `cat_id`, `sub_cat_id`) VALUES
(422, 'Local Hand Made Embroidery', 'Local-Hand-Made-Embroidery', 'Local Hand Made Embroidery', 'Local Hand Made Embroidery', 'Handicraft', '9000', 10, '<p>Pack of Two Wall Decoration&nbsp;Local Hand Made Embroidery Sceneries, Made in Hunza.</p>\r\n', 'yes', 'feature,shop', '1518282659GEDC4690.JPG', 12, 0),
(423, 'Hand Made Embroidery', 'Hand-Made-Embroidery', 'Hand-Made-Embroidery', 'Hand-Made-Embroidery', 'Hand-Made-Embroidery', '6000', 3, '<p>Local Hand Made Full Embroidery Sceneries for Your Wall Decoration, Pack to Two, Made in Hunza.</p>\r\n', 'yes', 'feature,shop', '1518282895GEDC4692.JPG', 12, 0),
(424, 'Rotail Real Stone GB349', 'Rotail-Real-Stone', 'Rotail-Real-Stone', 'Rotail-Real-Stone', 'Rotail-Real-Stone', '1650', 12, '<p>Rotail&nbsp;real stone origin Gilgit Rs-330 per crait standard size 5 crait.</p>\r\n', 'yes', 'feature,shop', '15184117261 (50).jpg', 17, 0),
(425, 'Tiger Eye Stone Pendant  GB350', 'Tiger-Eye-Stone-Pendant', 'Tiger-Eye-Stone-Pendant', 'Tiger-Eye-Stone-Pendant', 'Tiger-Eye-Stone-Pendant', '2000', 12, '<p>Tiger Eye Pendant real stone origin Gilgit Rs-2000 per piece,available in different colors</p>\r\n', 'yes', 'feature,shop', '1518412479GB 350.jpg', 9, 0),
(426, 'Sang-E-Sitara Stone Pendant GB351', 'Sang-E-Sitara Stone Pendant', 'Sang-E-Sitara Stone Pendant', 'Sang-E-Sitara Stone Pendant', 'Sang-E-Sitara Stone Pendant', '2000', 12, '<p>Sang-E-Sitara Pendant real stone origin Gilgit Rs-2000 per piece.</p>\r\n', 'yes', 'feature,shop', '15184127711 (72).jpg', 9, 0),
(427, 'Aqeeq Pendant Stone GB352', 'Aqeeq-Pendant-Stone', 'Aqeeq-Pendant-Stone', 'Aqeeq-Pendant-Stone', 'Aqeeq-Pendant-Stone', '1800', 12, '<p>Natural Cut,Real Stone Pendant Rs 1800/Piece. Available in different color,s</p>\r\n', 'yes', 'feature,shop', '15184134191 (75).jpg', 17, 0),
(428, 'Aqeeq Pendant Real Stone GB353', 'Aqeeq-Pendant-Real-Stone', 'Aqeeq-Pendant-Real-Stone', 'Aqeeq-Pendant-Real-Stone', 'Aqeeq-Pendant-Real-Stone', '1800', 12, '<p>Natural Cut Real Stone Pendant. Rs 1600/Piece.Also Available in different color,s</p>\r\n', 'yes', 'feature,shop', '15184136311 (77).jpg', 17, 0),
(429, 'Artificial Jewellery GB354', 'Artificial-Jewellery-GB-354', 'Artificial-Jewellery', 'Artificial-Jewellery', 'Artificial-Jewellery', '1800', 12, '<p>&nbsp;Artificial Jewellery are available in different colors,different design.</p>\r\n', 'yes', 'feature,shop', '15184146271 (79).jpg', 9, 0),
(430, 'testing product ', 'testing-product', 'testing', 'kdfka', 'kdkasdf', '23423', 1, '<p>asdfasfd</p>\r\n', 'yes', 'feature', '', 9, 0),
(431, 'testing product ', 'testing-product', 'testing', 'kdfka', 'kdkasdf', '23423', 1, '<p>asdfasfd</p>\r\n', 'yes', 'feature', '', 9, 22),
(432, 'testing product', 'asdfs', 'sfgs', 'sdfg', 'sdfgs', '12000', 1, '<p>adfadsf</p>\r\n', 'yes', 'feature,shop', '', 9, 22),
(434, 'tesfasdf', 'asdfasdasdfa', 'asdfas', 'asdfas', 'dksfka', '3423', 2, '<p>fasdfas</p>\r\n', 'yes', 'feature', '15191302771559447_718370268174837_342076144_o.png', 9, 24),
(435, 'samsung mobiile', 'samsung', 'sumg', 'samnds', 'sugm', '234234', 2, '<p>asdfsad</p>\r\n', 'yes', 'feature', '151913367820171223_124122.jpg', 26, 27);

-- --------------------------------------------------------

--
-- Table structure for table `e_roles`
--

CREATE TABLE `e_roles` (
  `id` int(250) NOT NULL,
  `name` varchar(500) NOT NULL,
  `duties` varchar(500) NOT NULL,
  `image` varchar(250) NOT NULL,
  `displayorder` int(11) NOT NULL,
  `display` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_roles`
--

INSERT INTO `e_roles` (`id`, `name`, `duties`, `image`, `displayorder`, `display`) VALUES
(4, 'Admin', 'Add Edit Delete', '1500458856BDM.jpg2_.jpg', 1, 'yes'),
(7, 'Publisher', 'Add Edit ', '', 2, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `e_services`
--

CREATE TABLE `e_services` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `ptcl` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `lastname` varchar(300) NOT NULL,
  `date` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_services`
--

INSERT INTO `e_services` (`id`, `name`, `phone`, `ptcl`, `address`, `message`, `lastname`, `date`, `status`) VALUES
(19, 'Farman Wali', '0334-3749360', '02136601064', 'Behind Peetal Gali Bumbia Sanitary New Golimar No 1 Gulbahar No 1 Karachi', 'Gilgiti Shena Topi with Shanti Achi Wali', 'Noor Khan', '', 'pending'),
(20, 'Imtiaz Hussain', 'ghulam', 'nill', 'murtaza abad minawar', 'hh', '03142760607', '', 'pending'),
(21, 'Imtiaz Hussain', 'ghulam', 'nill', 'murtaza abad minawar', 'hh', '03142760607', '', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `e_settings`
--

CREATE TABLE `e_settings` (
  `id` int(50) NOT NULL,
  `siteName` varchar(111) NOT NULL,
  `city` varchar(111) NOT NULL,
  `email` varchar(250) NOT NULL,
  `email2` varchar(250) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `phone2` text NOT NULL,
  `mobile` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `about` varchar(500) NOT NULL,
  `image` varchar(250) NOT NULL,
  `icon` varchar(256) NOT NULL,
  `image2` varchar(250) NOT NULL,
  `fb` varchar(256) NOT NULL,
  `googleplus` varchar(1000) NOT NULL,
  `linkedin` varchar(1000) NOT NULL,
  `twitter` varchar(256) NOT NULL,
  `vimeo` varchar(256) NOT NULL,
  `pintrest` varchar(500) NOT NULL,
  `youtube` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_settings`
--

INSERT INTO `e_settings` (`id`, `siteName`, `city`, `email`, `email2`, `phone`, `phone2`, `mobile`, `address`, `about`, `image`, `icon`, `image2`, `fb`, `googleplus`, `linkedin`, `twitter`, `vimeo`, `pintrest`, `youtube`) VALUES
(10, 'Retails Cosult', 'Islamabad', 'admin@gilgitbazar.com', 'info@gilgitbazar.com', '05811451617', '<iframe src=\"https://www.google.com/maps/embed?pb\" width=\"800\" height=\"600\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '', 'Office # 01, First Floor, Rana Market Cinema Bazar Near Col,Hassan Market Gigit\r\n', 'We are providing Finest Dry Fruits, Original Gem Stones Jewelry For Men & Women , Local Handmade Accessories at your Door Step ,FREE Delivery Nationwide (CASH ON DELIVERY)', '1528721728473advice_logo.png', '152948375883advice_logo.png', '1496823814logo.png', 'https://www.facebook.com', 'https://plus.google.com/collections2', 'https://www.linkedin.com', 'https://twitter.com', 'https://www.vimeo.com', 'https://www.pinterest.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `e_slider`
--

CREATE TABLE `e_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `details` varchar(5000) NOT NULL,
  `display` varchar(5) NOT NULL,
  `displayorder` int(11) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_slider`
--

INSERT INTO `e_slider` (`id`, `title`, `details`, `display`, `displayorder`, `image`) VALUES
(17, '', '', 'yes', 0, '152872188159314561526722860.jpg'),
(16, 'test2', '', 'yes', 2, '1526554416960slider-image-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `e_testimonials`
--

CREATE TABLE `e_testimonials` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `pagetitle` varchar(250) NOT NULL,
  `slug` varchar(1000) NOT NULL,
  `keywords` varchar(1000) NOT NULL,
  `details` varchar(5000) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `display` varchar(5) NOT NULL,
  `displayorder` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_testimonials`
--

INSERT INTO `e_testimonials` (`id`, `title`, `pagetitle`, `slug`, `keywords`, `details`, `image`, `display`, `displayorder`) VALUES
(2, '-Zahid Manzoor', '-Zahid Manzoor', '-Zahid Manzoor', '-Zahid Manzoor', '<p>Appreciate the effort to buy the Gilgit traditional products and Fruit using this web portal. keep it up.</p>\r\n', '1498048156IMAG1245.jpg', 'yes', 2);

-- --------------------------------------------------------

--
-- Table structure for table `e_user`
--

CREATE TABLE `e_user` (
  `userid` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `number` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `type` varchar(33) NOT NULL,
  `image` varchar(111) DEFAULT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'active',
  `oauth_provider` varchar(111) NOT NULL,
  `oauth_uid` varchar(111) NOT NULL,
  `link` varchar(111) NOT NULL,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `e_adds`
--
ALTER TABLE `e_adds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_admin`
--
ALTER TABLE `e_admin`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `username` (`username`),
  ADD KEY `password` (`password`),
  ADD KEY `status` (`status`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `e_careers`
--
ALTER TABLE `e_careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_category`
--
ALTER TABLE `e_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_feedback`
--
ALTER TABLE `e_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_gallery`
--
ALTER TABLE `e_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_item`
--
ALTER TABLE `e_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_members`
--
ALTER TABLE `e_members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `e_menu`
--
ALTER TABLE `e_menu`
  ADD PRIMARY KEY (`menuid`);

--
-- Indexes for table `e_packeg`
--
ALTER TABLE `e_packeg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_phase`
--
ALTER TABLE `e_phase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_plote`
--
ALTER TABLE `e_plote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_plot_size`
--
ALTER TABLE `e_plot_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_plot_type`
--
ALTER TABLE `e_plot_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_products`
--
ALTER TABLE `e_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_roles`
--
ALTER TABLE `e_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_services`
--
ALTER TABLE `e_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_settings`
--
ALTER TABLE `e_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_slider`
--
ALTER TABLE `e_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_testimonials`
--
ALTER TABLE `e_testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_user`
--
ALTER TABLE `e_user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `e_adds`
--
ALTER TABLE `e_adds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `e_admin`
--
ALTER TABLE `e_admin`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `e_careers`
--
ALTER TABLE `e_careers`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `e_category`
--
ALTER TABLE `e_category`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `e_feedback`
--
ALTER TABLE `e_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `e_gallery`
--
ALTER TABLE `e_gallery`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `e_item`
--
ALTER TABLE `e_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT for table `e_members`
--
ALTER TABLE `e_members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `e_menu`
--
ALTER TABLE `e_menu`
  MODIFY `menuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `e_packeg`
--
ALTER TABLE `e_packeg`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `e_phase`
--
ALTER TABLE `e_phase`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `e_plote`
--
ALTER TABLE `e_plote`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `e_plot_size`
--
ALTER TABLE `e_plot_size`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `e_plot_type`
--
ALTER TABLE `e_plot_type`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `e_products`
--
ALTER TABLE `e_products`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=436;

--
-- AUTO_INCREMENT for table `e_roles`
--
ALTER TABLE `e_roles`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `e_services`
--
ALTER TABLE `e_services`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `e_settings`
--
ALTER TABLE `e_settings`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `e_slider`
--
ALTER TABLE `e_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `e_testimonials`
--
ALTER TABLE `e_testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `e_user`
--
ALTER TABLE `e_user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
