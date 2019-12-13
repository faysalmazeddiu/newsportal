SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

DROP DATABASE IF EXISTS `bdnews`;
CREATE DATABASE `bdnews` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bdnews`;

CREATE TABLE `bdnews_admins` (
  `admin_id` int(11) NOT NULL auto_increment,
  `username` varchar(16) default NULL,
  `password` varchar(16) default NULL,
  `group_id` int(11) default NULL,
  `firstname` varchar(16) default NULL,
  `lastname` varchar(16) default NULL,
  `email` varchar(255) default NULL,
  `status` enum('active','inactive') NOT NULL default 'active',
  PRIMARY KEY  (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `bdnews_ads` (
  `ad_id` int(11) NOT NULL auto_increment,
  `adspace_id` int(11) default NULL,
  `company_id` int(11) default NULL,
  `ts` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `image_file` varchar(100) default NULL,
  `image_click_url` varchar(200) default NULL,
  `status` enum('active','inactive') NOT NULL default 'active',
  `notes` text,
  PRIMARY KEY  (`ad_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `bdnews_adspaces` (
  `adspace_id` int(11) NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  `subscription_fees` decimal(15,4) default NULL,
  `description` text,
  PRIMARY KEY  (`adspace_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `bdnews_ajker_ukti` (
  `id` int(11) NOT NULL auto_increment,
  `ts` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `content` text,
  `by_whom` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
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
  `id` int(11) NOT NULL auto_increment,
  `ts` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `content` text,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `bdnews_categories` (
  `category_id` int(11) NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  `bangla_name` varchar(50) default NULL,
  `type` enum('TYPE1','TYPE2','TYPE3','TYPE4','NONE') NOT NULL default 'NONE',
  `description` text,
  PRIMARY KEY  (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `bdnews_comments` (
  `id` int(11) NOT NULL auto_increment,
  `news_id` int(11) default NULL,
  `content` text,
  `status` enum('accept','reject') NOT NULL default 'reject',
  `ts` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `name` varchar(16) default NULL,
  `email` varchar(255) default NULL,
  `trace_id` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `bdnews_companies` (
  `company_id` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `address_line1` varchar(255) default NULL,
  `address_line2` varchar(255) default NULL,
  `city` varchar(50) default NULL,
  `state` varchar(50) default NULL,
  `country` varchar(50) NOT NULL default 'Bangladesh',
  `postalcode` varchar(15) default NULL,
  `phone1` varchar(50) default NULL,
  `phone2` varchar(50) default NULL,
  `email` varchar(255) default NULL,
  `website` varchar(50) default NULL,
  `description` text,
  PRIMARY KEY  (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `bdnews_grids` (
  `grid_id` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `display_name` varchar(255) default NULL,
  PRIMARY KEY  (`grid_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `bdnews_group_grid` (
  `group_id` int(11) default NULL,
  `grid_id` int(11) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `bdnews_groups` (
  `group_id` int(11) NOT NULL auto_increment,
  `name` varchar(16) default NULL,
  `description` text,
  PRIMARY KEY  (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `bdnews_news` (
  `news_id` int(11) NOT NULL auto_increment,
  `ts` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `shironam` varchar(255) default NULL,
  `image_file` varchar(100) default NULL,
  `image_click_url` varchar(200) default NULL,
  `content` text,
  `content_html` text,
  `reporter` varchar(255) default NULL,
  `hits` int(11) NOT NULL default '0',
  `trace_id` int(11) default NULL,
  PRIMARY KEY  (`news_id`),
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
  `news_id` int(11) default NULL,
  `category_id` int(11) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `bdnews_prayer` (
  `id` int(11) NOT NULL auto_increment,
  `ts` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `fajr` varchar(50) default NULL,
  `zohr` varchar(50) default NULL,
  `asar` varchar(50) default NULL,
  `magrib` varchar(50) default NULL,
  `esha` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
DROP TRIGGER IF EXISTS `trig_prayer_insert`;
DELIMITER //
CREATE TRIGGER `trig_prayer_insert` BEFORE INSERT ON `bdnews_prayer`
 FOR EACH ROW BEGIN
IF NEW.ts='0000-00-00 00:00:00' THEN
        SET NEW.ts = CURRENT_TIMESTAMP;
        END IF;
END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `trig_prayer_update`;
DELIMITER //
CREATE TRIGGER `trig_prayer_update` BEFORE UPDATE ON `bdnews_prayer`
 FOR EACH ROW BEGIN
IF NEW.ts='0000-00-00 00:00:00' THEN
        SET NEW.ts = CURRENT_TIMESTAMP;
        END IF;
END
//
DELIMITER ;

CREATE TABLE `bdnews_rashifal` (
  `id` int(11) NOT NULL auto_increment,
  `ts` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
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
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
DROP TRIGGER IF EXISTS `trig_rashifal_insert`;
DELIMITER //
CREATE TRIGGER `trig_rashifal_insert` BEFORE INSERT ON `bdnews_rashifal`
 FOR EACH ROW BEGIN
IF NEW.ts='0000-00-00 00:00:00' THEN
        SET NEW.ts = CURRENT_TIMESTAMP;
        END IF;
END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `trig_rashifal_update`;
DELIMITER //
CREATE TRIGGER `trig_rashifal_update` BEFORE UPDATE ON `bdnews_rashifal`
 FOR EACH ROW BEGIN
IF NEW.ts='0000-00-00 00:00:00' THEN
        SET NEW.ts = CURRENT_TIMESTAMP;
        END IF;
END
//
DELIMITER ;

CREATE TABLE `bdnews_slider_pics` (
  `id` int(11) NOT NULL auto_increment,
  `ts` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `image_file` varchar(100) default NULL,
  `caption` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
DROP TRIGGER IF EXISTS `trig_slider_pics_insert`;
DELIMITER //
CREATE TRIGGER `trig_slider_pics_insert` BEFORE INSERT ON `bdnews_slider_pics`
 FOR EACH ROW BEGIN
IF NEW.ts='0000-00-00 00:00:00' THEN
        SET NEW.ts = CURRENT_TIMESTAMP;
        END IF;
END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `trig_slider_pics_update`;
DELIMITER //
CREATE TRIGGER `trig_slider_pics_update` BEFORE UPDATE ON `bdnews_slider_pics`
 FOR EACH ROW BEGIN
IF NEW.ts='0000-00-00 00:00:00' THEN
        SET NEW.ts = CURRENT_TIMESTAMP;
        END IF;
END
//
DELIMITER ;

CREATE TABLE `bdnews_traces` (
  `id` int(11) NOT NULL auto_increment,
  `unique_id` varchar(255) default NULL,
  `created_on` datetime default NULL,
  `created_by` int(11) default NULL,
  `ip_address` varchar(255) default NULL,
  `modified_on` datetime default NULL,
  `modified_by` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `bdnews_users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `email` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `bdnews_votes` (
  `vote_id` int(11) NOT NULL auto_increment,
  `ts` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `topic` text,
  `yes` int(11) NOT NULL default '0',
  `no` int(11) NOT NULL default '0',
  `none` int(11) NOT NULL default '0',
  PRIMARY KEY  (`vote_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
DROP TRIGGER IF EXISTS `trig_votes_insert`;
DELIMITER //
CREATE TRIGGER `trig_votes_insert` BEFORE INSERT ON `bdnews_votes`
 FOR EACH ROW BEGIN
IF NEW.ts='0000-00-00 00:00:00' THEN
        SET NEW.ts = CURRENT_TIMESTAMP;
        END IF;
END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `trig_votes_update`;
DELIMITER //
CREATE TRIGGER `trig_votes_update` BEFORE UPDATE ON `bdnews_votes`
 FOR EACH ROW BEGIN
IF NEW.ts='0000-00-00 00:00:00' THEN
        SET NEW.ts = CURRENT_TIMESTAMP;
        END IF;
END
//
DELIMITER ;

CREATE TABLE `bdnews_vs` (
  `id` int(11) NOT NULL auto_increment,
  `ts` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `image_file` varchar(100) default NULL,
  `image_click_url` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
DROP TRIGGER IF EXISTS `trig_vs_insert`;
DELIMITER //
CREATE TRIGGER `trig_vs_insert` BEFORE INSERT ON `bdnews_vs`
 FOR EACH ROW BEGIN
IF NEW.ts='0000-00-00 00:00:00' THEN
        SET NEW.ts = CURRENT_TIMESTAMP;
        END IF;
END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `trig_vs_update`;
DELIMITER //
CREATE TRIGGER `trig_vs_update` BEFORE UPDATE ON `bdnews_vs`
 FOR EACH ROW BEGIN
IF NEW.ts='0000-00-00 00:00:00' THEN
        SET NEW.ts = CURRENT_TIMESTAMP;
        END IF;
END
//
DELIMITER ;

CREATE TABLE `comments` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `comment` text NOT NULL,
  `id_post` int(11) NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
