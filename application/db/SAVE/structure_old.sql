SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

DROP DATABASE `bdnews`;
CREATE DATABASE `bdnews` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bdnews`;

CREATE TABLE `bdnews_admins` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) DEFAULT NULL,
  `password` varchar(16) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `firstname` varchar(16) DEFAULT NULL,
  `lastname` varchar(16) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `bdnews_ads` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `adspace_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `image_file_location` varchar(100) DEFAULT NULL,
  `click_url` varchar(200) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`ad_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `bdnews_adspaces` (
  `adspace_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `subscription_fees` decimal(15,4) DEFAULT NULL,
  PRIMARY KEY (`adspace_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `bdnews_ajker_ukti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content` text,
  `by_whom` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
DROP TRIGGER IF EXISTS `trig_ajker_ukti_insert`;
DELIMITER //
CREATE TRIGGER `trig_ajker_ukti_insert` BEFORE INSERT ON `bdnews_ajker_ukti`
 FOR EACH ROW BEGIN
IF NEW.ts='0000-00-00 00:00:00' THEN
        SET NEW.ts = CURRENT_TIMESTAMP;
        END IF;
END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `trig_ajker_ukti_update`;
DELIMITER //
CREATE TRIGGER `trig_ajker_ukti_update` BEFORE UPDATE ON `bdnews_ajker_ukti`
 FOR EACH ROW BEGIN
IF NEW.ts='0000-00-00 00:00:00' THEN
        SET NEW.ts = CURRENT_TIMESTAMP;
        END IF;
END
//
DELIMITER ;

CREATE TABLE `bdnews_alochito_kotha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `bdnews_categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `bangla_name` varchar(50) DEFAULT NULL,
  `description` text,
  `type` enum('TYPE1','TYPE2','TYPE3','TYPE4','NONE') NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `bdnews_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` int(11) DEFAULT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(16) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `content` text,
  `status` enum('accept','reject') NOT NULL DEFAULT 'accept',
  `trace_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `bdnews_companies` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `address_line1` varchar(255) DEFAULT NULL,
  `address_line2` varchar(255) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) NOT NULL DEFAULT 'Bangladesh',
  `postalcode` varchar(15) DEFAULT NULL,
  `phone1` varchar(50) DEFAULT NULL,
  `phone2` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `bdnews_grids` (
  `grid_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`grid_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `bdnews_group_grid` (
  `group_id` int(11) DEFAULT NULL,
  `grid_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `bdnews_groups` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `bdnews_news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `shironam` varchar(255) DEFAULT NULL,
  `image_url` varchar(100) DEFAULT NULL,
  `click_url` varchar(200) DEFAULT NULL,
  `content` text,
  `content_html` text,
  `reporter` varchar(255) DEFAULT NULL,
  `hits` int(11) NOT NULL DEFAULT '0',
  `trace_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`news_id`),
  UNIQUE KEY `shironam` (`shironam`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
DROP TRIGGER IF EXISTS `trig_news_insert`;
DELIMITER //
CREATE TRIGGER `trig_news_insert` BEFORE INSERT ON `bdnews_news`
 FOR EACH ROW BEGIN
IF NEW.ts='0000-00-00 00:00:00' THEN
        SET NEW.ts = CURRENT_TIMESTAMP;
        END IF;
END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `trig_news_update`;
DELIMITER //
CREATE TRIGGER `trig_news_update` BEFORE UPDATE ON `bdnews_news`
 FOR EACH ROW BEGIN
IF NEW.ts='0000-00-00 00:00:00' THEN
        SET NEW.ts = CURRENT_TIMESTAMP;
        END IF;
END
//
DELIMITER ;

CREATE TABLE `bdnews_news_category` (
  `news_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `bdnews_slider_pics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `image_url` varchar(100) DEFAULT NULL,
  `caption` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `bdnews_traces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(255) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `bdnews_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `bdnews_vote_topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `topic` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
DROP TRIGGER IF EXISTS `trig_vote_topics_insert`;
DELIMITER //
CREATE TRIGGER `trig_vote_topics_insert` BEFORE INSERT ON `bdnews_vote_topics`
 FOR EACH ROW BEGIN
IF NEW.ts='0000-00-00 00:00:00' THEN
        SET NEW.ts = CURRENT_TIMESTAMP;
        END IF;
END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `trig_vote_topics_update`;
DELIMITER //
CREATE TRIGGER `trig_vote_topics_update` BEFORE UPDATE ON `bdnews_vote_topics`
 FOR EACH ROW BEGIN
IF NEW.ts='0000-00-00 00:00:00' THEN
        SET NEW.ts = CURRENT_TIMESTAMP;
        END IF;
END
//
DELIMITER ;

CREATE TABLE `bdnews_votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `topic_id` int(11) DEFAULT NULL,
  `vote` enum('Yes','No','Neither') DEFAULT NULL,
  `trace_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `benews_rashifal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mesh` text,
  `brisho` text,
  `mithun` text,
  `korkot` text,
  `shingho` text,
  `konna` text,
  `tula` text,
  `bristchik` text,
  `dhonu` text,
  `mokor` text,
  `kumbho` text,
  `meen` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `comment` text NOT NULL,
  `id_post` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `poller` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pollerTitle` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `poller_option` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pollerID` int(11) DEFAULT NULL,
  `optionText` varchar(255) DEFAULT NULL,
  `pollerOrder` int(11) DEFAULT NULL,
  `defaultChecked` char(1) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `poller_vote` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `optionID` int(11) DEFAULT NULL,
  `ipAddress` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
