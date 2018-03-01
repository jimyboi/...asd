-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2018 at 06:35 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `whng`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE IF NOT EXISTS `calendar` (
`calendar_id` int(11) NOT NULL,
  `calendar_title` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `time_start` varchar(255) NOT NULL,
  `time_end` varchar(255) NOT NULL,
  `calendar_description` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`calendar_id`, `calendar_title`, `venue`, `date_start`, `date_end`, `time_start`, `time_end`, `calendar_description`, `date_created`) VALUES
(1, 'whng - admin', 'malabon', '2018-02-21', '2018-07-20', '11:30 AM', '11:45 AM', 'i want to be\r\n a jol\r\nl\r\nadjlkasjd;asjbd', '2018-01-31 16:15:06'),
(2, 'jm', 'asdjhasdh', '2018-01-26', '2018-02-15', '04:15 PM', '01:15 PM', 'dasdasdasdasdasdasdasdasdasdkljasdlkawsdjalksdaksjdlk;asjdlkasldkjaskljdaskdjas;lkdjaslkdjalksjdlaksjdas;lkdja;lskdjasl;dkjal;sdkjals;kdja;lskdjal;skjda;lskjdal;skdjal;skjdaslkd;jas;lkdjal;ksjd;alksjdl;akjsdoqweiquwewqiepoqeqoiuepoiquweqoiuweoqiuweqweqw[eu[pqwue[qwueqwe[iuqweoqiweiqwueoiqwequwepiquweiuqwieqwupeqiweqwueiopqw', '2018-01-31 16:16:49'),
(3, 'WHNG - Admin', 'Malabon', '0000-00-00', '0000-00-00', '65556', '566565', 'askdhausdasdasj', '2018-01-31 17:01:08'),
(4, 'mukong', 'calamsi', '2018-02-08', '2018-02-22', '01:00 PM', '11:00 AM', 'wasakal', '2018-02-01 11:14:08'),
(5, 'fdsgdgsd', 'fgdsfgdfg', '2018-02-06', '2018-02-23', '04:00 PM', '08:00 AM', 'jhjkhjkhjkhjk', '2018-02-01 12:08:46'),
(6, 'erhfsdhfjkshdflshdkfoshd', '12346554684654654', '2018-02-05', '2018-02-20', '11:00 AM', '11:00 AM', '123123', '2018-02-02 11:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `email_sent`
--

CREATE TABLE IF NOT EXISTS `email_sent` (
`email_sent_id` int(11) NOT NULL,
  `sent_to` varchar(255) NOT NULL,
  `sent_date` date NOT NULL DEFAULT '0000-00-00',
  `status` enum('Success','Failed') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
`images_id` int(11) NOT NULL,
  `image_file` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE IF NOT EXISTS `information` (
`information_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `social_id` int(11) DEFAULT NULL,
  `images_id` int(11) DEFAULT NULL,
  `contact_name` varchar(255) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `member_category` varchar(255) NOT NULL,
  `st_address` varchar(255) NOT NULL,
  `suite_no` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `cellphone` varchar(255) NOT NULL,
  `fax_number` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `company_description` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`information_id`, `user_id`, `social_id`, `images_id`, `contact_name`, `business_name`, `member_category`, `st_address`, `suite_no`, `city`, `state`, `zip_code`, `telephone`, `cellphone`, `fax_number`, `email_address`, `website`, `company_description`, `date_created`) VALUES
(1, 1, 1, NULL, 'jm', 'jm', 'jm', 'jm', 'jm', 'jm', 'jm', 'jm', 'jm', 'jm', 'jm', 'jm', 'jm', 'jm', '2018-01-31 14:39:27'),
(2, 2, 2, NULL, 'jm', 'jm', 'jm', 'jm', 'jm', 'jm', 'jm', 'jm', 'jm', 'jm', 'jm', 'jm', 'jm', 'jm', '2018-01-31 14:40:23'),
(4, 4, 4, NULL, 'jade nikko morales pogi', 'asdasd', 'asdasd', 'asdasdasd', 'asdasda', 'sdasd', 'asdasd', 'asdas', 'dasdas', 'dasd', 'asdasd', 'asdasd', 'asd', 'asdasd', '2018-02-01 10:36:15');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_category` varchar(255) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `suite_no` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip_code` int(5) NOT NULL,
  `google_map` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `cell` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
`members_id` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `login_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_category`, `business_name`, `contact_name`, `street_address`, `suite_no`, `city`, `state`, `zip_code`, `google_map`, `tel`, `cell`, `fax`, `email`, `website`, `description`, `members_id`, `date_created`, `login_id`) VALUES
('jm', 'jm1', 'jm2', 'jm3', 'jm4', 'jm5', 'jm6', 7777, 'jm8', 'jm9', 'jm10', 'jm11', 'jm12', 'jm13', 'jmjmjmjm', 26, '2018-01-29', 3);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE IF NOT EXISTS `social` (
`social_id` int(11) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `google_plus` varchar(255) NOT NULL,
  `pinterest` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`social_id`, `twitter`, `facebook`, `google_plus`, `pinterest`, `date_created`) VALUES
(1, '', '', '', '', '2018-01-31 14:39:27'),
(2, '', '', '', '', '2018-01-31 14:40:23'),
(3, '', '', '', '', '2018-02-01 10:14:21'),
(4, '', '', '', '', '2018-02-01 10:36:15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `user_type` enum('0','1','2') NOT NULL DEFAULT '2',
  `date_created` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `status`, `user_type`, `date_created`) VALUES
(1, 'jm', 'a55ddf12272f08b07c8c3f1e153f05801c50e01c57a8f71de9f8c5bf2dfde924ae403f95dbead31522f0073608a8853a160b2781c2288b28a02093ee096a4b10', 'active', '2', '2018-01-31 14:39:27'),
(2, 'jm', 'a55ddf12272f08b07c8c3f1e153f05801c50e01c57a8f71de9f8c5bf2dfde924ae403f95dbead31522f0073608a8853a160b2781c2288b28a02093ee096a4b10', 'active', '2', '2018-01-31 14:40:23'),
(3, 'asdasdasd', 'df4a396484d2f76787931088be58717ee0ad17f06e507999cf4fd60099ce7ecf9552bef9c214132add80bbfdd553b6bfee4c86e1e3b3f338316a7e86b0d96f32', 'active', '2', '2018-02-01 10:14:21'),
(4, '1123', '16644d1fc88dc43f8b9e2b0e23c2409309065b6afb1cfc63248f50957bd67d04540d7de7c4b074c97389d756a5e101d89c2047a30ef2939e821e2bee4fb63bd0', 'active', '2', '2018-02-01 10:36:15');

-- --------------------------------------------------------

--
-- Table structure for table `userdata_session`
--

CREATE TABLE IF NOT EXISTS `userdata_session` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(255) NOT NULL DEFAULT '0',
  `user_agent` varchar(255) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata_session`
--

INSERT INTO `userdata_session` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('65b32c20a3a734b94557d820b5db7c34', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516699201, ''),
('cace289cb94524e3ee2bf33b82cd2398', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516760673, ''),
('6b91f44bca7377f8fdaeacfc6c678d87', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobil', 1516760791, ''),
('58fcb9b1db03cf0199f1ab3f3e6dc9d2', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516764470, ''),
('0f548c1e05a59756dded64c95657d296', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516773577, ''),
('0dac97c9f8d49d66c0b9a59300d0e178', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobil', 1516773586, ''),
('f2126a7ed34d5a6eab0d3a3cc3c3eb80', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1517284699, ''),
('3b2d069f834a3f22d1586f09dbd37205', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobil', 1517284684, ''),
('8f930310f01f6a4c414df73be80051c9', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1517284566, ''),
('6acdaf3419af5e072938e3a301b2f2e9', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobil', 1517284432, ''),
('0399f47be168bb765873579131b7299b', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1517284404, ''),
('822358f58f3b26d89992b638e00b3261', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobil', 1517284201, ''),
('8f633270d7819169be8186c58fbc4820', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1517282737, ''),
('0b942845a17db7132f05d4894d9bc982', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobil', 1517281760, ''),
('c61403d50b312e7e6c208c04d2bedc72', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1517281714, ''),
('693fd5d34e8274b477254a09df212e8b', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobil', 1517281437, ''),
('fff5d45f2b285611d1b1e8eb051dc4a4', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1517281371, ''),
('833781a4c150b1aa4dd403bb5364a4ab', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1517280085, 'a:1:{s:9:"user_data";s:0:"";}'),
('f9e22d8e8b2780a9c7aa6e0fb7034ce7', '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_3 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) CriOS/56.0.2924.75 Mobil', 1517278961, ''),
('849d41872923f5001fc8fd3846301c81', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516332325, ''),
('beb0be396f82680b3fe7996e9ccbd9ea', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516352814, ''),
('dbe142eda144b6f9892476d309b5cea3', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516355901, ''),
('e061a0a3e8a7e448677bee32ffc8c8d1', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516690003, ''),
('6144d402071b1bb0f952e7c8e44123f4', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobil', 1516764530, ''),
('a6b968eb79635ac1d511d6cb35d7e06d', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516781674, ''),
('db8a364de63e8bea47d172817831c65d', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobil', 1516782511, ''),
('e5b02d54e605f72c978974aa3f322c40', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516783316, ''),
('0da37b573a0f1f12f809482596863ad1', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516851177, ''),
('80bbe8ac0659eaaa0fae7f61b33fc415', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516854239, ''),
('ac4dd968f1f0ff3f440c28def3bcfd7c', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516854602, ''),
('65ed6ce08714eab5ca209e52f9cc56ce', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516854615, ''),
('9fc0e1f707e317f5dce968649812117c', '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_3 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) CriOS/56.0.2924.75 Mobil', 1516854707, ''),
('93d76a5a23863e51644e76eef43b80b3', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516858327, ''),
('51158daadcbc6f2b22b5c5207baabbc6', '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_3 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) CriOS/56.0.2924.75 Mobil', 1516858414, ''),
('b11db2999e652db2ab5b70f2863784b3', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516872401, ''),
('ea650e3621a92bb6c21deba69d14816b', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516876125, ''),
('19fb2a4afd3eea12cf8180365cdb3d28', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516877532, ''),
('4afeb9bdfc9ad1b8991656b172ecf23b', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516930260, ''),
('6c9704e1e9f89c805538bdc412f91a17', '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobi', 1516931041, ''),
('fd122ded2209e7f91e9d0dcc6420e16d', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516931410, ''),
('255487debe1fc53aab581714efb634e8', '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobi', 1516931640, ''),
('f7e21a05bc2c4c82fd66796f37c64a91', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516931851, ''),
('6605c7229ce7432ddbd2939edb54da8a', '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobi', 1516931909, ''),
('acd00cb0ff66f579c06a3bcd2602cc14', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516932045, ''),
('265f1aed79f26ab2d4051048dce235c7', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobil', 1516932839, ''),
('426526052b4daf3edc7b093df63761c1', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516932870, ''),
('e8ecc0b872b30098900b9069bc0edf08', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobil', 1516933319, ''),
('a4e083d74a5597665fc8d69168f88948', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516933490, ''),
('ac8f436618b6174772f0b6905e8fd62f', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobil', 1516933735, ''),
('bf43eaa3bab18c3943a9600d25343206', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516933759, ''),
('8248e180630e01b0eea1fa8dd596e696', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobil', 1516933773, ''),
('b00743453969eebac7c5f2d9ba2d2b28', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516933957, ''),
('81f9d963c1923808ca659eba4eb2de1c', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobil', 1516934071, ''),
('ea9b0f144a6e5ab02ec8ae8d4b72ccfe', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516934262, ''),
('83e546f7da8b6cc654548f2a81dbfe76', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobil', 1516934457, ''),
('c0fd960afd4b4ba8ca4e6c37f2cd5829', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516935584, ''),
('94f8cb9555ca2d8f7bbdaa6b0a52efde', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobil', 1516935636, ''),
('74fae6de7dc25c0509e0a8227f61c844', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516935683, ''),
('9d173a9eab8d9d1d378e9f60014a5d1f', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobil', 1516936378, ''),
('4257cec0e9363fd876b13be165fb49b6', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516936557, ''),
('b24df4d72360896e3b570b910b4884dc', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobil', 1516936717, ''),
('ed4e840b9f8c28f62ee0ba79eb94ed6c', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516936969, ''),
('dee49dbf64cc96a543c7b25ef39e3b59', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobil', 1516939361, ''),
('5cb5e8e3630fc99fe620fe83fec0dc79', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516939378, ''),
('cd5687defa12c014f6226ac308bc7723', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobil', 1516944632, ''),
('4ce94571263b6b1930dbf284155b16db', '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_3 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) CriOS/56.0.2924.75 Mobil', 1516945088, ''),
('5c93aab5f972019f82ac0df58d52b937', '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_3 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) CriOS/56.0.2924.75 Mobil', 1516945088, ''),
('487d0029785fc9b6105b083d5ef441f7', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516946824, ''),
('38fda2db873bdb434ce0a514b35e2d74', '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_3 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) CriOS/56.0.2924.75 Mobil', 1516948042, ''),
('ea577bf89df30ca4ed16dabc6c45b7a9', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516948545, ''),
('1995801acf1baa2ae8e63ce98ef131ba', '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_3 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) CriOS/56.0.2924.75 Mobil', 1516948558, ''),
('75060bdf44e931fa02ca788327cb385b', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516949273, ''),
('596366b18741fde32ba79032edc2941e', '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_3 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) CriOS/56.0.2924.75 Mobil', 1516949529, ''),
('f0aeac3f6f2a71c79f5fe72669bc0587', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516950992, ''),
('6849517500ab721c8300ed5f3356eb22', '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_3 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) CriOS/56.0.2924.75 Mobil', 1516951218, 'a:1:{s:9:"user_data";s:0:"";}'),
('7245c90331adc8e1edc05928ddbe9126', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516951616, ''),
('9ac0b1e9b9f5977117ce700b1657d267', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516952029, ''),
('dcccbf5c21857b91c1e30dc3782b6f4a', '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_3 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) CriOS/56.0.2924.75 Mobil', 1516952257, ''),
('f55bc8b245dff75a76135ff793667275', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516952337, ''),
('6e16bcf195277780727a1bfa09a300cc', '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_3 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) CriOS/56.0.2924.75 Mobil', 1516953260, ''),
('6c902615ebb9d95a7504a73ca9c7181e', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516956776, ''),
('cb3a6a460aba8c0adb6e6d0fa99383c2', '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_3 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) CriOS/56.0.2924.75 Mobil', 1516956780, ''),
('cb51ce154a004e50c333a345ed3d7a78', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1516963902, 'a:1:{s:9:"user_data";s:0:"";}'),
('88bdec5e390043ab5ad0417cd42a51cb', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1517278665, 'a:1:{s:9:"user_data";s:0:"";}'),
('fae664b46a9775dc3a2dd5a8b8033270', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobil', 1517284702, ''),
('ac421234d2b33917d3c23e10b1b7c502', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobil', 1517284705, ''),
('307f00cb31d435f1a1d2e267cbcffdd6', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1517284801, ''),
('7509b3a3406b058784430346af587e75', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobil', 1517284804, ''),
('9146bacedcc4e0099281741184cb2c4d', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1517285794, ''),
('ce0cea3d817bdb7daf2e105f4dff75da', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobil', 1517285812, ''),
('7cb73163b284fb25bfc9ba532e7c88c1', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1517296863, ''),
('8e98aaa4f2c978d32ac6770296da5977', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1517299771, ''),
('a5b65987c747201ae2c3745d3956b9e3', '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_3 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) CriOS/56.0.2924.75 Mobil', 1517300056, ''),
('562b5ca3d8434e344be71278455c45c8', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 1517301302, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
 ADD PRIMARY KEY (`calendar_id`);

--
-- Indexes for table `email_sent`
--
ALTER TABLE `email_sent`
 ADD PRIMARY KEY (`email_sent_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`images_id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
 ADD PRIMARY KEY (`information_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`members_id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
 ADD PRIMARY KEY (`social_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `userdata_session`
--
ALTER TABLE `userdata_session`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
MODIFY `calendar_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `email_sent`
--
ALTER TABLE `email_sent`
MODIFY `email_sent_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
MODIFY `images_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
MODIFY `information_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
MODIFY `members_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
