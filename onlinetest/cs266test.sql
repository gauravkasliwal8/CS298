-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 08, 2011 at 08:03 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8
student_answers
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 student_answersSET NAMES utf8 */;

--
-- Database: `cs266test`
--student_info

-- --------------------------------------------------------

--
-- Table structure for table `changed_ip`
--

CREATE TABLE IF NOT EXISTS `changed_ip` (
  `name` text,
  `user_id` text,
  `previous_ip` text,
  `previous_mac` text,
  `new_ip` text,
  `new_mac` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `changed_ip`
--

INSERT INTO `changed_ip` (`name`, `user_id`, `previous_ip`, `previous_mac`, `new_ip`, `new_mac`) VALUES
('a', '1', '2', '3', '4', '5');

-- --------------------------------------------------------

--
-- Table structure for table `ip_accessed`
--

CREATE TABLE IF NOT EXISTS `ip_accessed` (
  `student_ip` text NOT NULL,
  `remote_ip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ip_accessed`
--

INSERT INTO `ip_accessed` (`student_ip`, `remote_ip`) VALUES
('10.0.1.6', '173.194.25.9'),
('10.0.1.6', '205.251.203.155'),
('10.0.1.6', '174.35.40.5'),
('10.0.1.6', '74.125.224.95'),
('10.0.1.6', '74.125.224.77'),
('10.0.1.6', '174.35.40.3'),
('10.0.1.6', '198.189.255.217'),
('10.0.1.6', '74.125.224.122'),
('10.0.1.6', '74.125.224.124'),
('10.0.1.6', '184.28.157.55'),
('10.0.1.20', '10.0.1.255'),
('10.0.1.15', '74.125.224.123'),
('10.0.1.6', '74.125.224.112'),
('10.0.1.15', '198.189.255.200'),
('10.0.1.6', '239.255.255.250'),
('10.0.1.16', '74.125.224.113'),
('10.0.1.7', '10.0.1.255'),
('10.0.1.19', '10.0.1.1'),
('10.0.1.19', '74.125.224.147'),
('10.0.1.9', '74.125.45.109'),
('10.0.1.9', '204.9.163.158'),
('10.0.1.9', '74.125.53.125'),
('10.0.1.4', '10.20.30.40'),
('10.0.1.22', '10.0.1.1'),
('10.0.1.15', '50.19.98.143'),
('10.0.1.18', '10.0.1.255'),
('10.0.1.20', '255.255.255.255'),
('10.0.1.19', '74.125.224.113'),
('10.0.1.8', '239.255.255.250'),
('10.0.1.9', '76.89.142.196'),
('10.0.1.9', '107.45.140.243'),
('10.0.1.9', '212.161.8.4'),
('10.0.1.15', '66.35.51.37'),
('10.0.1.15', '66.211.183.135'),
('10.0.1.15', '198.189.255.225'),
('10.0.1.15', '198.189.255.222'),
('10.0.1.15', '199.7.71.190'),
('10.0.1.6', '198.189.255.206'),
('10.0.1.14', '10.0.1.255'),
('10.0.1.9', '94.240.179.12'),
('10.0.1.9', '212.92.225.210'),
('10.0.1.6', '212.96.161.234'),
('10.0.1.6', '205.251.203.211'),
('10.0.1.14', '224.0.0.251'),
('10.0.1.14', '173.234.43.202'),
('10.0.1.6', '69.171.224.39'),
('10.0.1.15', '216.52.242.80'),
('10.0.1.6', '198.189.255.225'),
('10.0.1.11', '255.255.255.255'),
('10.0.1.16', '74.125.127.139'),
('10.0.1.15', '8.19.18.172'),
('10.0.1.10', '74.125.224.115'),
('10.0.1.12', '74.125.127.139'),
('10.0.1.18', '74.125.127.95'),
('10.0.1.10', '74.125.224.95'),
('10.0.1.15', '74.125.224.108'),
('10.0.1.15', '74.125.127.105'),
('10.0.1.6', '00:03:93:df:74:46'),
('10.0.1.15', '74.125.127.106'),
('10.0.1.10', '10.0.1.255'),
('10.0.1.15', '74.125.127.96'),
('10.0.1.18', '239.255.255.250'),
('10.0.1.13', '224.0.0.251'),
('10.0.1.6', '74.125.224.123'),
('10.0.1.6', '74.125.224.121'),
('10.0.1.6', '74.125.127.95'),
('10.0.1.6', '74.125.224.73'),
('10.0.1.6', '74.125.224.79'),
('10.0.1.6', '74.125.224.113'),
('10.0.1.6', '74.125.224.104'),
('10.0.1.6', '74.125.224.72'),
('10.0.1.6', '74.125.224.66'),
('10.0.1.20', '10.0.1.1'),
('10.0.1.20', '74.125.224.109'),
('10.0.1.17', '224.0.0.251'),
('10.0.1.17', '224.0.0.22'),
('10.0.1.21', '10.0.1.255'),
('10.0.1.10', 'ff:ff:ff:ff:ff:ff'),
('10.0.1.7', '239.255.255.250'),
('10.0.1.6', '173.223.232.66'),
('10.0.1.6', '10.0.1.255'),
('10.0.1.4', '10.0.1.255'),
('10.0.1.19', '198.189.255.200'),
('10.0.1.7', '69.167.127.68'),
('10.0.1.9', '10.0.1.1'),
('10.0.1.16', '00:03:93:df:74:46'),
('10.0.1.13', '10.0.1.6'),
('10.0.1.6', '10.0.1.13'),
('10.0.1.13', '10.0.1.255'),
('10.0.1.7', '69.167.127.74');

-- --------------------------------------------------------

--
-- Table structure for table `mac_accessed`
--

CREATE TABLE IF NOT EXISTS `mac_accessed` (
  `student_mac` text NOT NULL,
  `remote_mac` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mac_accessed`
--

INSERT INTO `mac_accessed` (`student_mac`, `remote_mac`) VALUES
('e0:b9:a5:28:46:10', '00:03:93:e8:de:e7'),
('00:21:6a:7a:21:14', '00:24:6c:bc:c4:f0');

-- --------------------------------------------------------

--
-- Table structure for table `student_answers`
--

CREATE TABLE IF NOT EXISTS `student_answers` (
  `studentid` text,
  `studentip` text,
  `studentmac` text,
  `answer` text NOT NULL,
  `method` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_answers`
--

INSERT INTO `student_answers` (`studentid`, `studentip`, `studentmac`, `answer`, `method`) VALUES
('121212', '', '127.0.0.1', '', ''),
('121212', '', '127.0.0.1', '', ''),
('1234', '00-24-d6-0b-49-96', '172.16.2.8', '', ''),
('12312', '00-18-f3-46-b0-11', '172.16.2.2', '', ''),
('12123', '78-e4-00-16-24-6b', '172.16.2.4', '', ''),
('11223344', '172.16.2.3', 'd0:df:9a:10:eb:af', 'Answers', 'I did it.'),
('121314', '10.0.1.105', 'd0:df:9a:10:eb:af', 'Ans', 'haha'),
('12312123', '10.0.1.4', '74:e5:0b:1a:a3:b2', 'Ans 1: Sumit Kumar\r\n\r\nAns 2: 42\r\n\r\nAns 3: Howies\r\n\r\nAns 4: HMM gone bad\r\n\r\nAns 5: Feds\r\n\r\nAns 6: Avocado\r\n\r\nAns 7: Silence of the lambs\r\n\r\nAns 8: Arteriosclerosis', 'hiyaiii'),
('005842252', '10.0.1.10', '00:22:41:f9:2b:ea', 'William F. Buckely\r\n2421', 'googled key phrase and did not open any webpage....have I been detected???'),
('007486180', '10.0.1.7', '00:26:c6:50:64:16', 'Ans 1: William F. Buckley Jr.\r\nAns 2: 2421', 'Ch'),
('007478003', '10.0.1.16', 'ac:81:12:8c:ee:34', '1.william frank buckley, jr\r\n2.2421', 'I just guessed it'),
('007472270', '10.0.1.18', 'c4:17:fe:13:f7:c7', 'Ans 1: William Frank Buckley Jr\r\nAns 2: 2421', 'Tried VPN\r\nWanted to try connecting to another network and then sending packets'),
('005842252', '10.0.1.10', '00:22:41:f9:2b:ea', 'William F. Buckely\r\n2421', 'google, webcawler'),
('005842252', '10.0.1.10', '00:22:41:f9:2b:ea', 'William F. Buckely\r\n2421', 'google, webcawler'),
('463233700', '10.0.1.4', '74:e5:0b:1a:a3:b2', 'Ans 1: Sumit\r\n\r\nAns 2: 42\r\n\r\nAns 3: Howies\r\n\r\nAns 4: HMM gone bad\r\n\r\nAns 5: Feds\r\n\r\nAns 6: Avocado\r\n\r\nAns 7: Silence of the lambs\r\n\r\nAns 8: Arteriosclerosis\r\n\r\nAns 9: 10 tons, Bermuda traingle.. Caught by Sumit Kumar\r\n\r\nAns 10: Bridged wireless adapter inside a VMWare Virtual Machine. So, it got a different IP, hence not caught.', 'Bridged wireless adapter inside a VMWare Virtual Machine. So, it got a different IP, hence not caught.'),
('007504328', '10.0.1.20', '08:11:96:3e:5b:70', 'Answer 2', 'I tried to connect from other network.\r\nI opened bluetooth connection with other students and shared a file.'),
('tarun', '10.0.1.13', '00:1c:b3:b3:76:14', '', 'tried using vpn'),
('007475026', '10.0.1.9', 'd8:a2:5e:99:06:e5', 'Ans1 \r\nAns4: hawaian fish', 'vpn and phone wifi logged on same network...'),
('W123456789', '10.0.1.21', '10:9a:dd:be:09:bb', 'Ans 1: William F Buckley\r\nAns 2:\r\nAns 3:\r\nAns 4:\r\nAns 5:\r\nAns 6:\r\nAns 7:\r\nAns 8:\r\nAns 9:\r\nAns 10:', 'No, I got detected................'),
('004215017', '10.0.1.14', '00:26:08:de:c2:88', 'Ans 1: William F. Buckley, Jr.\r\nAns 2: 2421.\r\nAns 3: Cyclones.\r\nAns 4: Reef tigerfish.\r\nAns 5: Roger Sherman, Elbridge Gerry.\r\nAns 6: Testicle.\r\nAns 7: Steamboat Bill Jr. \r\nAns 8: Hippopotomonstrosesquippedaliophobia.\r\nAns 9: 27 lb 4 oz, Caught by Robert Halley from Cresent City on 12/22/1976 at Smith River, Del Norte County, http://www.fishersnet.com/carecord.html.\r\nAns 10: I was never caught. The only technique I had to use was to connect to a VPN server before registering, then disconnected from it after registering and connected to a different VPN server.', 'The only technique I had to use was to connect to a VPN server before registering, then disconnected from it after registering and connected to a different VPN server.'),
('010101019', '10.0.1.17', '00:25:9c:b3:69:be', 'William F. Buckley, Jr.\r\n2454', 'I connected my laptop to two acces points:\r\n1 - another router, which proxied my connection to the final network\r\n2 - a 3g modem with yet another access point\r\nI thought I could switch between the two access points I could control and avoid detection, since I never connected from my primary laptop directly to the target "test" network.'),
('007032571', '10.0.1.15', '70:f1:a1:d3:a8:ee', '', 'tried to open proxy servers. in cs.sjsu.edu'),
('007505212', '10.0.1.8', 'e0:b9:a5:28:46:10', '10. Trying to change my IP but dont have tool to do it.', 'Trying to change my IP but dont have tool to do it.');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `studentid` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `mac_address` text NOT NULL,
  `ip_address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `name`, `studentid`, `email`, `password`, `mac_address`, `ip_address`) VALUES
(1, 'Amrapali', '007486180', 'amrapali.dhaware@gmail.com', 'amrapalics266', '00:26:c6:50:64:16', '10.0.1.7'),
(2, 'tarun', 'tarun', 'tarun@gmail.com', 'tarun', '00:1c:b3:b3:76:14', '10.0.1.13'),
(3, 'Kam Ho Ho', 'W123456789', 'bakim123@gmail.com', 'bakim123', '10:9a:dd:be:09:bb', '10.0.1.21'),
(4, 'singha', '007032571', 'itsiashu@gmail.com', 'itsiashu', '70:f1:a1:d3:a8:ee', '10.0.1.15'),
(5, 'Tanmayee Potluri', '007076043', 'tanmayee.4170@gmail.com', 'sjsu123sjsU!', '00:27:10:02:d3:78', '10.0.1.19'),
(6, 'pshola', '007504328', 'prasad.shola@gmail.com', 'prasad', '08:11:96:3e:5b:70', '10.0.1.20'),
(7, 'kelly', '007512713', 'kelly.p.chang@gmail.com', 'helloworld', '00:24:d6:57:66:1a', '10.0.1.6'),
(8, 'Shabana Kazi', '9974', 'shabanakazi22@gmail.com', 'abc123', '00:26:c6:81:99:f8', '10.0.1.22'),
(9, 'sudar', '463233700', 'sudar@sudar.sudar', 'temp1234', '74:e5:0b:1a:a3:b2', '10.0.1.4'),
(10, 'jaie', '007478003', 'jaiepatil@yahoo.co.in', 'virgo156', 'ac:81:12:8c:ee:34', '10.0.1.16'),
(11, 'yuheng', '007505212', 'focidek@gmail.com', '007505212', 'e0:b9:a5:28:46:10', '10.0.1.8'),
(12, 'Pran', '006531590', 'pran@gmail.com', 'test1234', '00:23:12:00:7a:1c', '10.0.1.11'),
(13, 'Dmitry Makovsky', '004215017', 'dima.makovsky@gmail.com', 'dmak', '00:26:08:de:c2:88', '10.0.1.14'),
(14, 'Avani', '007475026', 'avanikothari@gmail.com', 'avani123', 'd8:a2:5e:99:06:e5', '10.0.1.9'),
(15, 'Neha', '007472270', 'neharunwal@gmail.com', 'mnothere', 'c4:17:fe:13:f7:c7', '10.0.1.18'),
(16, 'Melesio', '005842252', 'melbot256@gmail.com', 'abc123', '00:22:41:f9:2b:ea', '10.0.1.10'),
(17, 'hs', '007300007', 'hardik.pict@gmail.com', 'hardik', '78:ca:39:b2:b9:c9', '10.0.1.12'),
(18, 'Mike Crawford', '8743298742', 'blah@blah.com', 'blah', '00:21:6a:7a:21:14', '10.0.1.23'),
(19, 'Michael Mohr', '010101019', 'akihana@gmail.com', 'tank', '00:25:9c:b3:69:be', '10.0.1.17');

-- --------------------------------------------------------

--
-- Table structure for table `student_ip_mac`
--

CREATE TABLE IF NOT EXISTS `student_ip_mac` (
  `studentid` text NOT NULL,
  `mac_address` text NOT NULL,
  `ip_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_ip_mac`
--

INSERT INTO `student_ip_mac` (`studentid`, `mac_address`, `ip_address`) VALUES
('007486180', '00:26:c6:50:64:16', '10.0.1.7'),
('tarun', '00:1c:b3:b3:76:14', '10.0.1.13'),
('W123456789', '10:9a:dd:be:09:bb', '10.0.1.21'),
('007032571', '70:f1:a1:d3:a8:ee', '10.0.1.15'),
('007076043', '00:27:10:02:d3:78', '10.0.1.19'),
('007504328', '08:11:96:3e:5b:70', '10.0.1.20'),
('007512713', '00:24:d6:57:66:1a', '10.0.1.6'),
('9974', '00:26:c6:81:99:f8', '10.0.1.22'),
('463233700', '74:e5:0b:1a:a3:b2', '10.0.1.4'),
('007478003', 'ac:81:12:8c:ee:34', '10.0.1.16'),
('007505212', 'e0:b9:a5:28:46:10', '10.0.1.8'),
('006531590', '00:23:12:00:7a:1c', '10.0.1.11'),
('004215017', '00:26:08:de:c2:88', '10.0.1.14'),
('007475026', 'd8:a2:5e:99:06:e5', '10.0.1.9'),
('007472270', 'c4:17:fe:13:f7:c7', '10.0.1.18'),
('005842252', '00:22:41:f9:2b:ea', '10.0.1.10'),
('007300007', '78:ca:39:b2:b9:c9', '10.0.1.12'),
('8743298742', '00:21:6a:7a:21:14', '10.0.1.23'),
('010101019', '00:25:9c:b3:69:be', '10.0.1.17'),
('010101019', '00:25:9c:b3:69:be', '10.0.1.17'),
('tarun', '00:1c:b3:b3:76:14', '10.0.1.13'),
('007475026', 'd8:a2:5e:99:06:e5', '10.0.1.9'),
('007512713', '00:24:d6:57:66:1a', '10.0.1.6'),
('007032571', '70:f1:a1:d3:a8:ee', '10.0.1.15'),
('007032571', '70:f1:a1:d3:a8:ee', '10.0.1.15');

-- --------------------------------------------------------

--
-- Table structure for table `wl_sites`
--

CREATE TABLE IF NOT EXISTS `wl_sites` (
  `ip` text CHARACTER SET utf8 NOT NULL,
  `url` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wl_sites`
--

INSERT INTO `wl_sites` (`ip`, `url`) VALUES
('130.65.10.101', 'sjsu.edu'),
('130.65.86.46', 'cs.sjsu.edu'),
('10.0.1.3', 'Server'),
('172.16.255.255', 'Bcast Server'),
('172.16.2.245', 'Router');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
