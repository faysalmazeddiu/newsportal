-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 06, 2016 at 09:39 PM
-- Server version: 5.6.23-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `protidin_24`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `content_id` int(9) NOT NULL AUTO_INCREMENT,
  `admin_id` int(9) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  `content_headline` varchar(100) NOT NULL,
  `content_shortdetails` varchar(5000) NOT NULL,
  `content_longdetails` varchar(5000) NOT NULL,
  `reporter` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `date_add` datetime NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `admin_id`, `category_name`, `content_headline`, `content_shortdetails`, `content_longdetails`, `reporter`, `image`, `publication_status`, `date_add`) VALUES
(1, 1, 'home_headline_main', '<p>\r\n কথা বলা মানেই মায়া বাড়ানো</p>\r\n', 'কথা বলা মানেই মায়া বাড়ানো কথা বলা মানেই মায়া বাড়ানো কথা বলা মানেই মায়া বাড়ানো ', '<p>\r\n কথা বলা মানেই মায়া বাড়ানোকথা বলা মানেই মায়া বাড়ানো কথা বলা মানেই মায়া বাড়ানো কথা বলা মানেই মায়া বাড়ানো কথা বলা মানেই মায়া বাড়ানো</p>\r\n', 'roy', 'images/news_images/21.jpg', 1, '2014-01-31 09:01:51'),
(3, 1, 'home_headline_main', '<p>\r\n কথা বলা মানেই কথা বলা মানেই</p>\r\n', 'কথা বলা মানেই কথা বলা মানেই কথা বলা মানেই কথা বলা মানেই কথা বলা মানেই ', '<p>\r\n কথা বলা মানেই কথা বলা মানেই কথা বলা মানেই কথা বলা মানেই কথা বলা মানেই কথা বলা মানেই</p>\r\n', 'roy', 'images/news_images/17.JPG', 1, '2014-01-31 09:01:47'),
(4, 1, 'home_headline_main', '<p>\r\n দেশের রাজনৈতিক পরিস্থিতিতে</p>\r\n', 'দেশের রাজনৈতিক পরিস্থিতিতে vদেশের রাজনৈতিক পরিস্থিতিতে  দেশের রাজনৈতিক পরিস্থিতিতে ', '<p>\r\n দেশের রাজনৈতিক পরিস্থিতিতে দেশের রাজনৈতিক পরিস্থিতিতে দেশের রাজনৈতিক পরিস্থিতিতে</p>\r\n', 'roy', 'images/news_images/11.JPG', 1, '2014-01-31 10:01:53'),
(5, 1, 'home_headline_main', '<p>\r\n দেশের রাজনৈতিক</p>\r\n', 'দেশের রাজনৈতিক পরিস্থিতিতে দেশের রাজনৈতিক পরিস্থিতিতে ', '<p>\r\n দেশের রাজনৈতিক পরিস্থিতিতে দেশের রাজনৈতিক পরিস্থিতিতে</p>\r\n', 'roy', 'images/news_images/16.JPG', 1, '2014-01-31 10:01:47'),
(8, 1, 'home_headline_main', '<p>\r\n royyyyy</p>\r\n', 'dfdfd', '<p>\r\n dfdfd</p>\r\n', 'roy', 'images/news_images/13.JPG', 1, '0000-00-00 00:00:00'),
(9, 1, 'home_headline_main', '<p>\r\n THIS IS ISS</p>\r\n', 'roy', '<p>\r\n roy</p>\r\n', 'roy', 'images/news_images/9.JPG', 1, '2014-01-31 10:28:30'),
(10, 1, 'home_headline_main', '<p>\r\n CURRENT</p>\r\n', 'CURRENTCURRENT', '<p>\r\n CURRENTCURRENTCURRENT</p>\r\n', 'roy', 'images/news_images/22.JPG', 1, '2014-01-31 10:30:42'),
(11, 1, 'home_headline_main', '<p>\r\n CXCXCX</p>\r\n', 'GDHGDHGDHGHDG', '<p>\r\n dfbdfgmjbsdfgbsdfgj</p>\r\n', 'roy', 'images/news_images/61.jpg', 1, '2014-01-31 10:33:52'),
(13, 1, 'home_headline_main', '<p>\r\n	<span style="font-size:14px;">দুই নেত্রীর সংলাপে বসার বিকল্প নেই</span></p>\r\n', 'আজ শনিবার গুলশানের রাজনৈতিক কার্যালয়ে এক মতবিনিময় অনুষ্ঠানে খালেদা জিয়া এই মন্তব্য করেন। কাজী জাফর আহমদের নেতৃত্বাধীন জাতীয় পার্টির বিএনপির', 'আজ শনিবার গুলশানের রাজনৈতিক কার্যালয়ে এক মতবিনিময় অনুষ্ঠানে খালেদা জিয়া এই মন্তব্য করেন। কাজী জাফর আহমদের নেতৃত্বাধীন জাতীয় পার্টির বিএনপির আজ শনিবার গুলশানের রাজনৈতিক কার্যালয়ে এক মতবিনিময় অনুষ্ঠানে খালেদা জিয়া এই মন্তব্য করেন। কাজী জাফর আহমদের নেতৃত্বাধীন জাতীয় পার্টির বিএনপির\r\n', 'roy', 'images/news_images/251.jpg', 1, '2014-01-31 13:03:00'),
(14, 1, 'home_headline_sub', '<p>\r\n	<span style="font-size:12px;">দুই নেত্রীর সংলাপে বসার বিকল্প নেই</span></p>\r\n', 'দুই নেত্রীর সংলাপে বসার বিকল্প নেইদুই নেত্রীর সংলাপে বসার বিকল্প নেই', 'দুই নেত্রীর সংলাপে বসার বিকল্প নেইদুই নেত্রীর সংলাপে বসার বিকল্প নেইদুই নেত্রীর সংলাপে বসার বিকল্প নেইদুই নেত্রীর সংলাপে বসার বিকল্প নেইদুই নেত্রীর সংলাপে বসার বিকল্প নেই', 'roy', 'images/news_images/211.jpg', 1, '2014-01-31 13:03:29'),
(15, 1, 'home_headline_sub', '<p>\r\n	<span style="font-size:16px;">দুই নেত্রীর সংলাপে বসার বিকল্প নেই</span></p>\r\n', 'দুই নেত্রীর সংলাপে বসার বিকল্প নেইদুই নেত্রীর সংলাপে বসার বিকল্প নেই', 'দুই নেত্রীর সংলাপে বসার বিকল্প নেইদুই নেত্রীর সংলাপে বসার বিকল্প নেইদুই নেত্রীর সংলাপে বসার বিকল্প নেইদুই নেত্রীর সংলাপে বসার বিকল্প নেই', 'roy', 'images/news_images/15.JPG', 1, '2014-01-31 14:18:28'),
(16, 1, 'home_headline_sub', '<p>\r\n	দুই নেত্রীর সংলাপে বসার বিকল্প নেই</p>\r\n', 'দুই নেত্রীর সংলাপে বসার বিকল্প নেইদুই নেত্রীর সংলাপে বসার বিকল্প নেইদুই নেত্রীর সংলাপে বসার বিকল্প নেই', 'দুই নেত্রীর সংলাপে বসার বিকল্প নেইদুই নেত্রীর সংলাপে বসার বিকল্প নেইদুই নেত্রীর সংলাপে বসার বিকল্প নেইদুই নেত্রীর সংলাপে বসার বিকল্প নেই', 'dd', 'images/news_images/5.JPG', 1, '2014-01-31 14:19:28'),
(17, 1, 'home_headline_sub', '<p>\r\n	আলোকিত তারকার অশ্রুসিক্ত বিদায</p>\r\n', 'fffff', '<p>\r\n ffffffff</p>\r\n', 'roy', 'images/news_images/14.jpg', 1, '2014-01-31 14:20:03'),
(18, 1, 'home_headline_left', '<p>\r\n	<strong><span>শিগগিরই নকল ওষুধের বিরুদ্ধে অভিযান</span></strong></p>\r\n', 'জাতীয় সংসদের স্পিকার শিরীন শারমিন চৌধুরী বলেছেন, সংসদীয় গণতন্ত্রের কেন্দ্রবিন্দু জাতীয় সংসদ। দশম জাতীয় সংসদ গণতন্ত্রের অভিযাত্রায় এক নতুন অধ্যায়', '<p>\r\n <span>জাতীয় সংসদের স্পিকার শিরীন শারমিন চৌধুরী বলেছেন, সংসদীয় গণতন্ত্রের কেন্দ্রবিন্দু জাতীয় সংসদ। দশম জাতীয় সংসদ গণতন্ত্রের অভিযাত্রায় এক নতুন অধ্যায় যুক্ত করেছে<span>জাতীয় সংসদের স্পিকার শিরীন শারমিন চৌধুরী বলেছেন, সংসদীয় গণতন্ত্রের কেন্দ্রবিন্দু জাতীয় সংসদ। দশম জাতীয় সংসদ গণতন্ত্রের অভিযাত্রায় এক নতুন অধ্যায় যুক্ত করেছে<span>জাতীয় সংসদের স্পিকার শিরীন শারমিন চৌধুরী বলেছেন, সংসদীয় গণতন্ত্রের কেন্দ্রবিন্দু জাতীয় সংসদ। দশম জাতীয় সংসদ গণতন্ত্রের অভিযাত্রায় এক নতুন অধ্যায় যুক্ত করেছে</span></span></span></p>\r\n', 'roy', 'images/news_images/52b6ac0cd0e6a-speaker-harun-sharmin.jpg', 1, '2014-01-31 15:35:52'),
(20, 1, 'home_headline_sub', '<p>\r\n <em>বিরোধী দলের নেতা</em></p>\r\n', 'বিরোধী দলের নেতাবিরোধী দলের নেতাবিরোধী দলের নেতাবিরোধী দলের নেতাবিরোধী দলের নেতা', '<p>\r\n বিরোধী দলের নেতাবিরোধী দলের নেতাবিরোধী দলের নেতাবিরোধী দলের নেতা</p>\r\n', 'roy', 'images/news_images/photo1.jpg', 1, '2014-01-31 15:49:59'),
(21, 1, 'home_headline_sub', '<p>\r\n বিরোধী দলের নেতাবিরোধী দলের নেতা</p>\r\n', 'বিরোধী দলের নেতাবিরোধী দলের নেতাবিরোধী দলের নেতাবিরোধী দলের নেতা', '<p>\r\n বিরোধী দলের নেতাবিরোধী দলের নেতাবিরোধী দলের নেতাবিরোধী দলের নেতাবিরোধী দলের নেতা</p>\r\n', 'roy', 'images/news_images/photo2.jpg', 1, '2014-01-31 15:50:28'),
(22, 1, 'home_headline_main', '<p>\r\n	বিরোধী দলের নেতা</p>\r\n', 'বিরোধী দলের নেতাবিরোধী দলের নেতাবিরোধী দলের নেতা', '<p>\r\n বিরোধী দলের নেতাবিরোধী দলের নেতাবিরোধী দলের নেতাবিরোধী দলের নেতাবিরোধী দলের নেতাবিরোধী দলের নেতা</p>\r\n', 'roy', 'images/news_images/photo3.jpg', 1, '2014-01-31 15:52:58'),
(26, 1, 'home_headline_left', '<p>\r\n	আজ শনিবার গুলশানের</p>\r\n', 'আজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানের', '<p>\r\n আজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানের</p>\r\n', 'roy', 'images/news_images/52b6ac0cd0e6a-speaker-harun-sharmin3.jpg', 1, '2014-01-31 20:48:52'),
(27, 1, 'home_headline_left', '<p>\r\n	গুলশানের রাজনৈতিক কার্যালয়ে</p>\r\n', 'আজ শনিবার গুলশানের রাজনৈতিক কার্যালয়ে এক মতবিনিময় অনুষ্ঠানে খালেদা জিয়া এই মন্তব্য করেন। কাজী জাফর আহমদের নেতৃত্বাধীন জাতীয় পার্টির বিএনপির', 'আজ শনিবার গুলশানের রাজনৈতিক কার্যালয়ে এক মতবিনিময় অনুষ্ঠানে খালেদা জিয়া এই মন্তব্য করেন। কাজী জাফর আহমদের নেতৃত্বাধীন জাতীয় পার্টির বিএনপিরআজ শনিবার গুলশানের রাজনৈতিক কার্যালয়ে এক মতবিনিময় অনুষ্ঠানে খালেদা জিয়া এই মন্তব্য করেন। কাজী জাফর আহমদের নেতৃত্বাধীন জাতীয় পার্টির বিএনপির\r\n', 'roy', 'images/news_images/photo5.jpg', 1, '2014-01-31 21:45:27'),
(28, 1, 'home_headline_left', '<p>\r\n	নেতৃত্বাধীন জাতীয় পার্টির বিএনপির</p>\r\n', 'আজ শনিবার গুলআজ শনিবার গুলশানের আজ শনিবার গুলশানের রাজনৈতিক কার্যালয়ে এক মতবিনিময় অনুষ্ঠানে খালেদা জিয়া এই মন্তব্য করেন। কাজী জাফর আহমদের নেতৃত্ব', '<p>\r\n আজ শনিবার গুলশানের রাজনৈতিক কার্যালয়ে এক মতবিনিময় অনুষ্ঠানে খালেদা জিয়া এই মন্তব্য করেন। কাজী জাফর আহমদের নেতৃত্বাধীন জাতীয় পার্টির বিএনপিরআজ শনিবার গুলশানের রাজনৈতিক কার্যালয়ে এক মতবিনিময় অনুষ্ঠানে খালেদা জিয়া এই মন্তব্য করেন। কাজী জাফর আহমদের নেতৃত্বাধীন জাতীয় পার্টির বিএনপিরআজ শনিবার গুলশানের রাজনৈতিক কার্যালয়ে এক মতবিনিময় অনুষ্ঠানে খালেদা জিয়া এই মন্তব্য করেন। কাজী জাফর আহমদের নেতৃত্বাধীন জাতীয় পার্টির বিএনপির</p>\r\n', 'roy', 'images/news_images/Penguins.jpg', 1, '2014-01-31 21:47:18'),
(29, 1, 'home_headline_sub', '<p>\r\n দুই নেত্রীর সংলাপে বসার বিকল্প নেই</p>\r\n', 'দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই ', '<p>\r\n দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই</p>\r\n', 'roy', 'images/news_images/Koala.jpg', 1, '2014-01-31 21:49:23'),
(30, 1, 'home_headline_sub', '<p>\r\n দুই নেত্রীর সংলাপেদুই নেত্রীর সংলাপে বসার বিকল্প নেই</p>\r\n', 'দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই ', '<p>\r\n দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই</p>\r\n', 'dd', 'images/news_images/Tulips.jpg', 1, '2014-01-31 21:51:29'),
(34, 1, 'home_headline_sub2', '<p>\r\n দুই দুই নেত্রীর সংলাপে দুই নেত্রীর সংলাপে</p>\r\n', 'দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই ', '<p>\r\n দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই</p>\r\n', 'roy', 'images/news_images/Jellyfish.jpg', 1, '2014-01-31 21:56:18'),
(36, 1, 'home_headline_sub', '<p>\r\n	কথা বলা মানেই মায়া বাড়ানো</p>\r\n', 'কথা বলা মানেই মায়া বাড়ানোকথা বলা মানেই মায়া বাড়ানোকথা বলা মানেই মায়া বাড়ানোকথা বলা মানেই মায়া বাড়ানোকথা বলা মানেই মায়া বাড়ানো', '<p>\r\n কথা বলা মানেই মায়া বাড়ানোকথা বলা মানেই মায়া বাড়ানোকথা বলা মানেই মায়া বাড়ানো</p>\r\n', 'roy', 'images/news_images/Desert.jpg', 0, '2014-02-01 05:14:32'),
(38, 1, 'home_headline_right', '<p>\r\n আজ শনিবার গুলশানের</p>\r\n', 'আজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানের আজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানের', '<p>\r\n আজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানের</p>\r\n', 'roy', 'images/news_images/Lighthouse1.jpg', 1, '2014-02-01 06:12:41'),
(39, 1, 'home_headline_right', '<p>\r\n শনিবার গুলশানেরআজ শনিবার</p>\r\n', 'আজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানের', '<p>\r\n আজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানের</p>\r\n', 'roy', 'images/news_images/Hydrangeas1.jpg', 1, '2014-02-01 06:13:15'),
(41, 1, 'home_headline_right', '<p>\r\n গুলশানের আজ শনিবার গুলশানের</p>\r\n', 'গুলশানেরআজ শনিবার গুলশানের আজ শনিবার গুলশানেরআজ শনিবার গুলশানের আজ শনিবার গুলশানেরআজ শনিবারআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানের', '<p>\r\n আজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানের</p>\r\n', 'dd', 'images/news_images/6.jpg', 1, '2014-02-01 14:20:18'),
(43, 1, 'home_headline_right', '<p>\r\n আজ শনিবার গুলশানের শনিবার গুলশানের</p>\r\n', 'আজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআ', '<p>\r\n আজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানেরআজ শনিবার গুলশানের</p>\r\n', 'roy', 'images/news_images/9.JPG', 1, '2014-02-01 14:22:58'),
(44, 1, 'home_headline_main', '<p>\n দুই নেত্রীর সংলাপে বসার বিকল্প নেই</p>\n', 'দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই ন', '<p>\n দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই</p>\n', 'roy', 'images/news_images/25.jpg', 1, '2014-02-01 09:37:56'),
(47, 1, 'home_headline_main', '<p>\n দুই নেত্রীর সংলাপে বসার বিকল্প নেই</p>\n', 'দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই ন', '<p>\n দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই</p>\n', 'roy', 'images/news_images/251.jpg', 1, '2014-02-01 09:41:08'),
(48, 1, 'home_headline_main', '<p>\n দুই নেত্রীর সংলাপে বসার বিকল্প নেই</p>\n', 'দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই ন', '<p>\n দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই দুই নেত্রীর সংলাপে বসার বিকল্প নেই</p>\n', 'roy', 'images/news_images/252.jpg', 1, '2014-02-01 09:41:17'),
(49, 1, 'Select Category...', '<h3>\n <span>১০ ট্রাক অস্ত্র আটকের ঘটনা</span></h3>\n', '১০ ট্রাক অস্ত্র আটকের ঘটনায় করা দুটি মামলার মধ্যে একটিতে ফাঁসির দণ্ডাদেশ পাওয়া সাবেক শিল্পমন্ত্রী ও জামায়াতের আমির মতিউর রহমান নিজামী এবং সাবেক স', '<p>\n ১০ ট্রাক অস্ত্র আটকের ঘটনায় করা দুটি মামলার মধ্যে একটিতে ফাঁসির দণ্ডাদেশ পাওয়া সাবেক শিল্পমন্ত্রী ও জামায়াতের আমির মতিউর রহমান নিজামী এবং সাবেক স১০ ট্রাক অস্ত্র আটকের ঘটনায় করা দুটি মামলার মধ্যে একটিতে ফাঁসির দণ্ডাদেশ পাওয়া সাবেক শিল্পমন্ত্রী ও জামায়াতের আমির মতিউর রহমান নিজামী এবং সাবেক স১০ ট্রাক অস্ত্র আটকের ঘটনায় করা দুটি মামলার মধ্যে একটিতে ফাঁসির দণ্ডাদেশ পাওয়া সাবেক শিল্পমন্ত্রী ও জামায়াতের আমির মতিউর রহমান নিজামী এবং সাবেক স</p>\n', 'roy', 'images/news_images/241.jpg', 1, '2014-02-01 09:48:18'),
(50, 1, 'home_headline_main', '<p>\n ইজতেমায় যৌতুকবিহীন বিয়ে অনুষ্ঠিত</p>\n', ' বিশ্ব ইজতেমার দ্বিতীয় পর্বে ১৩১ জোড়া বর-কনের যৌতুকবিহীন বিয়ে অনুষ্ঠিত হয়েছে। শনিবার বাদআসর ইজতেমা ময়দানের মূল মঞ্চের পাশে এ বিয়ে অনুষ্ঠিত হয়।', '<div id="stcpDiv"  justify;">\n <p>\n  বিশ্ব ইজতেমার দ্বিতীয় পর্বে ১৩১ জোড়া বর-কনের যৌতুকবিহীন বিয়ে অনুষ্ঠিত হয়েছে। শনিবার বাদআসর ইজতেমা ময়দানের মূল মঞ্চের পাশে এ বিয়ে অনুষ্ঠিত হয়।</p>\n <p>\n  বিয়ে পড়ান ভারতের মাওলানা জোবায়রুল হাসান। এর আগে ইজতেমার প্রথম পর্বে ১০৭ জোড়া বর-কনের যৌতুকবিহীন বিয়ে অনুষ্ঠিত হয়। এ নিয়ে এ বছর ইজতেমায় মোট ২৩৮ জোড়া বর-কনের যৌতুকবিহনী বিয়ে অনুষ্ঠিত হল।</p>\n <p>\n  তাবলীগ জামাতের মুরুব্বী ও ইজতেমা আয়োজক কমিটির সদস্য মাওলানা আবু জাফর বিষয়টি নিশ্চিত করেছেন।</p>\n <p>\n  বিশ্ব ইজতেমায় প্রতিবছর যৌতুকবিহীন এ বিয়ের আয়োজন করা হয়।</p>\n</div>\n', 'সারওয়ার আলম, ইজতেমার ময়দান থেকে :', 'images/news_images/ijtema_2nd_day.jpg', 1, '2014-02-01 10:57:13'),
(51, 1, 'home_headline_sub', '<p>\n সোনালী ব্যাংকের ১৬ কোটি টাকা লুট</p>\n<p>\n সোহেলের স্ত্রী টাকাসহ আটক</p>\n', 'কিশোরগঞ্জের সোনালী ব্যাংক থেকে প্রায় ১৬ কোটি টাকা লুটকারী হাবিবুর রহমান ওরফে সোহেলের স্ত্রী মহিমাকে দুই লাখ ৫০ হাজার টাকাসহ আটক করেছে ঢাকা মহানগর', '<div id="stcpDiv">\n <p>\n  কিশোরগঞ্জের সোনালী ব্যাংক থেকে প্রায় ১৬ কোটি টাকা লুটকারী হাবিবুর রহমান ওরফে সোহেলের স্ত্রী মহিমাকে দুই লাখ ৫০ হাজার টাকাসহ আটক করেছে ঢাকা মহানগর গোয়েন্দা পুলিশ।</p>\n <p>\n  শনিবার বিকেলে রাজধানীর যাত্রাবাড়ী এলাকা থেকে তাকে আটক করা হয়েছে বলে গোয়েন্দা পুলিশের একটি সূত্র নিশ্চিত করেছে।</p>\n <p>\n  সূত্র জানায়, গোয়েন্দা পুলিশের একটি দল গোপন সংবাদের ভিত্তিতে শনিবার বিকেলে যাত্রাবাড়ী এলাকায় অভিযান চালিয়ে মহিমাকে আটক করে। এ সময় তার কাছ থেকে আড়াই লাখ টাকা উদ্ধার করা হয়।</p>\n <p>\n  পুলিশের একটি সূত্র জানায়, কিশোরগঞ্জের পাকুন্দিয়ার চিলাকারা এলাকার হেলাল উদ্দিনের মেয়ে মহিমা বেগমকে ২০০৮ সালে বিয়ে করেন সোহেল রানা।</p>\n <p>\n  কিশোরগঞ্জ মডেল থানার ভারপ্রাপ্ত কর্মকর্তা (ওসি) ও মামলার তদন্তকারী কর্মকর্তা (আইও) আবদুল মালেক জানান, টাকা দিয়ে স্ত্রীর সঙ্গে সম্পর্কচ্ছেদ করার পরিকল্পনা করেছিলেন সোহেল। শুক্রবার রাতে সোহেল রানার দেওয়া তথ্যের ভিত্তিতে শনিবার পুলিশ ঢাকায় আসে। বিকেলে ঢাকার জুরাইন এলাকার একটি বাসা থেকে টাকাসহ তার স্ত্রীকে আটক করা হয়।</p>\n <p>\n  মামলার তদন্তকারী কর্মকর্তা আবদুল মালেক জানান, সোহেল রানার দেওয়া তথ্যমতে, দুই লাখ ৫০ হাজার টাকা বিকেলে উদ্ধার করা হয়েছে। সেই সঙ্গে তার স্ত্রী মহিমাকেও গ্রেপ্তার করা হয়েছে। তিনি আরও জানান, সোহেল অত্যন্ত ধূর্ত প্রকৃতির। জিজ্ঞাসাবাদে তিনি কোনো তর্ক না করেই সবকিছু বলে দেন। তার কথার কিছু অংশের সত্যতা পাওয়া গেছে। তিনি আরও কিছু গুরুত্বপূর্ণ তথ্য দিয়েছেন। তদন্তের স্বার্থে সবকিছু বলা সম্ভব হচ্ছে না।</p>\n <p>\n  উল্লেখ্য, কিশোরগঞ্জে সোনালী ব্যাংকের প্রধান শাখায় সুড়ঙ্গ খুঁড়ে চোরের দল ব্যাংকের স্ট্রং রুমের ভল্টে ঢুকে ১৬ কোটি ৪০ লাখ টাকা লুটে নিয়ে যায়। কর্মকর্তা-কর্মচারীরা গত রবিবার ব্যাংকে গিয়ে অর্থ লুটের ঘটনাটি বুঝতে পারে। গত মঙ্গলবার ঢাকার শ্যামপুরের নিলয় ভবনের ছয়তলার একটি ফ্ল্যাট থেকে পাঁচ বস্তা টাকাসহ সোহেল রানা, তার সহযোগী ও ছোট ভাই ইদ্রিস মুন্সিকে গ্রেপ্তার করে।</p>\n</div>\n', 'নিজস্ব প্রতিবেদক, ঢাকা', 'images/news_images/Sohel-Rana-Sonali-Bank-16-0.jpg', 1, '2014-02-01 11:05:06'),
(52, 1, 'home_headline_main', '<p>\n আন্দোলনের মুখে রাবিতে বর্ধিত ফি স্থগিত</p>\n', 'রাজশাহী বিশ্ববিদ্যালয়ের সব ধরনের বর্ধিত ফি স্থগিত করেছে বিশ্ববিদ্যালয় প্রশাসন। শনিবার বেলা ১টায় সিনেট ভবনে এক সংবাদ সম্মেলনের মাধ্যমে এ তথ্য জানা', '<div id="stcpDiv"  justify;">\n <p>\n  রাজশাহী বিশ্ববিদ্যালয়ের সব ধরনের বর্ধিত ফি স্থগিত করেছে বিশ্ববিদ্যালয় প্রশাসন। শনিবার বেলা ১টায় সিনেট ভবনে এক সংবাদ সম্মেলনের মাধ্যমে এ তথ্য জানান উপাচার্য প্রফেসর ড. মিজান উদ্দিন।</p>\n <p>\n  তিনি বলেন, বিশ্ববিদ্যালয় কর্তৃপক্ষ ২৩ ও ২৪ ডিসেম্বর সিন্ডিকেটের ৪৫০তম সভায় শিক্ষার্থীদের ভর্তি, হল এবং পরীক্ষা সংক্রান্ত ৪২টি খাতের মধ্যে কতিপয় খাতে ফি বৃদ্ধির সিদ্ধান্ত গ্রহণ করা হয়। বিশ্ববিদ্যালয় ব্যয় নির্বাহে এর প্রয়োজন ছিল। তবে বর্ধিত ফির বেশির ভাগই ২০১৩-১৪ শিক্ষাবর্ষে ভর্তিকৃত শিক্ষার্থীদের জন প্রযোজ্য।</p>\n <p>\n  শিক্ষার্থীদের ভর্তি ফি এবং মাসিক ফি অধিকাংশ ক্ষেত্রে বৃদ্ধি করা হয়নি। কিন্তু কয়েকদিন ধরে সাধারণ শিক্ষার্থীদের ভুল তথ্য দিয়ে আন্দোলনের নামে ক্যাম্পাসে এক নৈরাজ্যকর পরিস্থিতি তৈরি করা হচ্ছে।</p>\n <p>\n  আমরা চাই না শিক্ষক-শিক্ষার্থীদের মাঝে যে নিবিড় বন্ধন রয়েছে, তা নষ্ট হয়ে যাক। তাই সার্বিক দিক বিবেচনা করে সব ধরনের বর্ধিত ফি বাস্তবায়ন স্থগিত করছি। এ সময় তিনি সব শিক্ষার্থীকে ক্লাসে ফিরে যাওয়ার আহ্বান জানান।</p>\n <p>\n  সান্ধ্য কোর্সের ব্যাপারে তিনি বলেন, বিশ্ববিদ্যালয়ে সান্ধ্য কোর্স চালুর বিষয়টি সম্পূর্ণ একাডেমিক। তবে সান্ধ্যকালীন কোর্স চালু থাকবে বলেও জানান তিনি।</p>\n <p>\n  সংবাদ সম্মেলনে আরও উপস্থিত ছিলেন রাবির উপ-উপাচার্য প্রফেসর ড. সরওয়ার জাহান সজল, কোষাধ্যক্ষ প্রফেসর ড. সায়েন উদ্দীন, জনসংযোগ প্রশাসক প্রফেসর ড. ইলিয়াছ হোসেন, ছাত্র উপদেষ্টা প্রফেসর ড. সাদেকুল আরেফিন মাতিন, প্রক্টর প্রফেসর ড. তারিকুল হাসান প্রমুখ।</p>\n <p>\n  এ ব্যাপারে ছাত্র আন্দোলনের অন্যতম নেতা ও নৃ-বিজ্ঞান বিভাগের শিক্ষার্থী আয়াতুল্লাহ খমেনীর সঙ্গে যোগাযোগ করা হলে তিনি বলেন, প্রশাসন আমাদের যৌক্তিক দাবিকে অযৌক্তিক বলে দাবি করছে। আমাদের দাবি সম্পূর্ণভাবে মানা না হলে ছাত্র-ধর্মঘট অব্যাহত থাকবে।</p>\n</div>\n', 'রাবি সংবাদদাতা ', 'images/news_images/ru-strick.jpg', 1, '2014-02-01 11:13:57'),
(53, 1, 'home_headline_left', '<p>\n নিজামী-বাবর কাশিমপুরে, রহিম-রেজ্জাকুল ঢাকায়</p>\n', 'জামায়াতের আমির মতিউর রহমান নিজামী ও সাবেক স্বরাষ্ট্র প্রতিমন্ত্রী লুৎফুজ্জামান বাবরসহ চার জনকে চট্টগ্রাম কারাগার থেকে গাজীপুরের কাশিমপুর কারাগারে', '<p  justify;">\n জামায়াতের আমির মতিউর রহমান নিজামী ও সাবেক স্বরাষ্ট্র প্রতিমন্ত্রী লুৎফুজ্জামান বাবরসহ চার জনকে চট্টগ্রাম কারাগার থেকে গাজীপুরের কাশিমপুর কারাগারে আনা হয়েছে।</p>\n<p  justify;">\n সন্ধ্যা সাড়ে ছয়টার দিকে, দশ ট্রাক অস্ত্র মামলায় ফাঁসির দণ্ডপ্রাপ্ত আসামী মতিউর রহমান নিজামীকে কাশিমপুর কারাগারের হাইসিকিউরিটি ইউনিট এবং লুৎফুজ্জামান বাবরকে ইউনিট-১ রাখা হয়েছে। এছাড়া এনএসআইয়ের সাবেক মহাপরিচালক আব্দুর রহিম এবং ডিজিএফআইয়ের সাবেক মহাপরিচালক রেজ্জাকুল হায়দার চৌধুরীকে ঢাকা কেন্দ্রীয় কারাগারে রাখা হয়েছে।</p>\n<p  justify;">\n চট্টগ্রাম কেন্দ্রীয় কারা কর্তৃপক্ষ জানায়, এ চার জন ২১শে আগস্ট গ্রেনেড হামলা মামলার আসামী হওয়ায়, চৌঠা ফেব্রুয়ারি শুনানীতে অংশ নিতে তাদের ঢাকায় আনা হয়েছে।</p>\n', 'নিউজরুম ডেস্ক', 'images/news_images/Nijami-at-Kisghimpur.jpg', 1, '2014-02-01 11:17:41');
INSERT INTO `content` (`content_id`, `admin_id`, `category_name`, `content_headline`, `content_shortdetails`, `content_longdetails`, `reporter`, `image`, `publication_status`, `date_add`) VALUES
(54, 1, 'home_headline_right', '<p>\n দ্বিতীয় পর্বের নির্বাচন</p>\n<p>\n রোববার ১১৭ উপজেলায় মনোনয়নপত্র দাখিলের শেষদিন</p>\n', 'ঘোষিত তফসিল অনুযায়ী দ্বিতীয় দফায় ১১৭ উপজেলায় মনোনয়নপত্র দাখিলের শেষদিন রবিবার।সংশ্লিষ্ট উপজেলা রিটার্নিং অফিসারদের কাছে মনোনয়নপত্র দাখিল করতে হবে', '<p  justify;">\n ঘোষিত তফসিল অনুযায়ী দ্বিতীয় দফায় ১১৭ উপজেলায় মনোনয়নপত্র দাখিলের শেষদিন রবিবার। সংশ্লিষ্ট উপজেলা রিটার্নিং অফিসারদের কাছে মনোনয়নপত্র দাখিল করতে হবে। ৪ ফেব্রুয়ারি মনোনয়নপত্র যাচাই-বাছাই ও ১১ ফেব্রুয়ারি মনোনয়নপত্র প্রত্যাহারের শেষ দিন। ঘোষিত তফসিল অনুযায়ী আগামী ২৭ ফেব্রুয়ারি নির্ধারিত ওই সকল উপজেলায় ভোটগ্রহণ অনুষ্ঠিত হবে।</p>\n<div id="stcpDiv"  justify;">\n <p>\n  সারাদেশে ৪৮৭ উপজেলায় পর্যায়ক্রমে ছয় দফায় এই নির্বাচন করা হবে।</p>\n <p>\n  ঘোষিত তফসিল অনুযায়ী যে ১১৭ উপজেলা নির্বাচনে অংশগ্রহকারী প্রার্থীদের রবিবার মনোনয়নপত্র দাখিল করতে হবে সেগুলো হল- পঞ্চগড় জেলার তেঁতুলিয়া; ঠাকুরগাঁও জেলার বালিয়াডাংগি ও রাণীশংকাইল; দিনাজপুর জেলার ঘোড়াঘাট, চিরিরিরবন্দর, বিরামপুর ও বীরগঞ্জ; নীলফামারী জেলার কিশোরগঞ্জ; লালমনিরহাট জেলার পাটগ্রাম, সদর ও হাতীবান্দা; রংপুর জেলার বদরগঞ্জ; কুড়িগ্রাম জেলার নাগেশ্বরী, রাজারহাট ও রাজিবপুর; গাইবান্ধা জেলার পলাশবাড়ী; জয়পুরহাট জেলার ক্ষেতলাল, কালাই ও সদর; বগুড়া জেলার কাহালু, শিবগঞ্জ, আদমদিঘী ও শাজাহানপুর; চাঁপাইনবাবগঞ্জ জেলার গোমস্তাপুর; নওগাঁ জেলার আত্রাই, নিয়ামতপুর, পত্নীতলা, বদলগাছী, সদও ও সাপাহার; রাজশাহী জেলার বাঘা; নাটোর জেলার বাগাতিপাড়া, গুরুদাসপুর, লালপুর ও সদর; সিরাজগঞ্জ জেলার তাড়াশ; পাবনা জেলার চাটমোহর ও ভাংগুড়া; মেহেরপুর জেলার গাংনী ও মুজিবনগ কুষ্টিয়া জেলার কুমারখালী, খোকসা, ও মিরপুর; যশোর জেলার চৌগাছা, ঝিকরগাছা, বাঘারপাড়া ও শার্শা; মাগুরা জেলার মোহাম্মদপুর ও শালিখা; বাগেরহাট জেলার কচুয়া ও ফকিরহাট; খুলনা জেলার ডুমুরিয়া; সাতক্ষীরা জেলার শ্যামনগর; ভোলা জেলার চরফ্যাশন ও বোরহানউদ্দিন; বরিশাল জেলার সদর; পিরোজপুর জেলার কাউখালী ও নাজিরপুর; টাঙ্গাইল জেলার সখিপুর; জামালপুর জেলার ইসলামপুর, বকশিগঞ্জ ও মেলান্দহ; শেরপুর জেলার ঝিনাইগাতি; ময়মনসিংহ জেলার ঈশ্বরগঞ্জ, ভালুকা ও সদর; নেত্রকোণা জেলার কলমাকান্দা, খালিয়াজুরী, পূর্বধলা ও বারহাট্টা; মানিকগঞ্জ জেলার সদর ও হরিরামপুর; মুন্সীগঞ্জ জেলার শ্রীনগর ও সদর; ঢাকা জেলার কেরানীগঞ্জ ও সাভার; নরসিংদী জেলার শিবপুর; ফরিদপুর জেলার নগরকান্দা, বোয়ালমারী ও সালথা; গোপালগঞ্জ জেলার কোটালীপাড়া ও সদর; মাদারীপুর জেলার রাজৈর ও শিবচর; সুনামগঞ্জ জেলার দিরাই ও সদর; সিলেট জেলার বালাগঞ্জ; হবিগঞ্জ জেলার চুনারুঘাট; ব্রাহ্মণবাড়ীয়া জেলার সরাইল; কুমিল্লা জেলার দেবীদ্বার, মনোহরগঞ্জ ও লাকসাম; চাদপুর জেলার ফরিদগঞ্জ, মতলব (উ:), মতলব (দ:) ও সদর; ফেনী জেলার হাইমচর, পরশুরাম ও সদর; নোয়াখালী জেলার কবিরহাট, কোম্পানীগঞ্জ, চাটখিল, সদর ও সোনাইমুড়ী; চট্টগ্রাম জেলার পটিয়া ও লোহাগড়া; কক্সবাজার জেলার মহেশখালী, চকরিয়া ও পেকুয়া; খাগড়াছড়ি জেলার লক্ষ্মীছড়ি; রাঙ্গামাটি জেলার কাপ্তাই ও ননিয়ারচর; বান্দরবান জেলার থানচি, রুমা, রোয়াংছড়ি ও লামা।</p>\n <p>\n  এ নির্বাচনে সংশ্লিষ্ট জেলার অতিরিক্ত জেলা প্রশাসক রিটার্নিং অফিসার ও উপজেলা নির্বাহী কর্মকর্তা সহকারী রিটার্নিং অফিসারের দায়িত্ব পালন করবেন।</p>\n</div>\n', 'নিজস্ব প্রতিবেদক', 'images/news_images/Upazila-Election.jpg', 1, '2014-02-01 11:23:35'),
(55, 1, 'home_headline_main', '<p>\n অমর একুশে গ্রন্থমেলার উদ্বোধন করলেন প্রধানমন্ত্রী</p>\n', 'মূল পরিকল্পনা মতো শহীদ মিনার এলাকা বাড়ানোসহ রাজধানীতে সাংস্কৃতিক বলয় গড়ে তোলার পরিকল্পনার কথা জানালেন প্রধানমন্ত্রী শেখ হাসিনা। বাংলা একাডেমি প্র', '<div id="stcpDiv"  justify;">\n <p>\n  মূল পরিকল্পনা মতো শহীদ মিনার এলাকা বাড়ানোসহ রাজধানীতে সাংস্কৃতিক বলয় গড়ে তোলার পরিকল্পনার কথা জানালেন প্রধানমন্ত্রী শেখ হাসিনা। বাংলা একাডেমি প্রাঙ্গণে অমর একুশে গ্রন্থমেলার উদ্বোধনী অনুষ্ঠানে তিনি এ কথা জানান। এসময় বাংলা ভাষা ও সংস্কৃতির চর্চা বাড়িয়ে আরো বেশি মানসম্পন্ন বই প্রকাশের তাগিদ দেন প্রধানমন্ত্রী।</p>\n <p>\n  দ্রোহের দীপাবলী জ্বেলে বছর ঘুরে আবার শুরু হলো অমর একুশে গ্রন্থমেলা। বাঙালীর প্রাণের এ উৎসব উদ্বোধন করেন প্রধানমন্ত্রী শেখ হাসিনা। এবারই প্রথমবারের মতো, প্রধানমন্ত্রীর পরামর্শে মেলার পরিধি বেড়েছে সোহরাওয়ার্দী উদ্যান পর্যন্ত। যেখানে ৭ই মার্চের ভাষণ দিয়েছিলেন বঙ্গবন্ধু। সে প্রসঙ্গ টেনে শেখ হাসিনা আশা করেন, এ সম্প্রসারণ বইমেলার আবেদনকে আরোও বাড়িয়ে তুলবে।</p>\n <p>\n  এর আগে সাহিত্যের নানা ক্ষেত্রে অবদানের জন্য বাংলা একাডেমি পুরস্কার প্রাপ্তদের সম্মাননা স্মারক তুলে দেন প্রধানমন্ত্রী। পাশাপাশি একাডেমির ফেলো হিসেবে বিশেষ সম্মাননাপত্র ও ক্রেস্ট তুলে দেন মূকাভিনয় শিল্পী পার্থ প্রতিম মজুমদারকে।</p>\n <p>\n  বাংলা একাডেমির পক্ষ থেকে প্রধানমন্ত্রীকে উপহার দেওয়া হয় বাংলা ভাষা উৎপত্তি ও বিবর্তন নিয়ে তিন খণ্ডে প্রকাশিত বিবর্তনমূলক অভিধান। এসময় শিল্প-সাহিত্যের বিকাশে সরকারের পরিকল্পনা কথা জানান প্রধানমন্ত্রী।</p>\n <p>\n  বাংলা ভাষার শ্রেষ্ঠ সাহিত্যকর্মগুলো অনুবাদ করে, ই-বুকের মাধ্যমে বিশ্বসভায় উপস্থাপনের আহ্বান জানান প্রধানমন্ত্রী। এছাড়া, জাতীয় গ্রন্থনীতি প্রণয়নের কাজ চলছে বলেও জানান তিনি।</p>\n <p>\n  উদ্বোধনের পর নিরাপত্তা বলয় শিথিল হলে, মেলার প্রথম দিনেই লেখক পাঠক ও প্রকাশকদের আড্ডায় মুখরিত হয়ে ওঠে মেলা প্রাঙ্গণ।</p>\n</div>\n', 'নিজস্ব প্রতিবেদক', 'images/news_images/Book-Fair.jpg', 1, '2014-02-01 11:52:12'),
(56, 1, 'home_headline_sub', '<p>\n এক মতবিনিময় অনুষ্ঠানে খালেদা জিয়া</p>\n', 'এক মতবিনিময় অনুষ্ঠানে খালেদা জিয়াএক মতবিনিময় অনুষ্ঠানে খালেদা জিয়াএক মতবিনিময় অনুষ্ঠানে খালেদা জিয়াএক মতবিনিময় অনুষ্ঠানে খালেদা জিয়াএক মতবিনিময় অ', '<p>\n এক মতবিনিময় অনুষ্ঠানে খালেদা জিয়াএক মতবিনিময় অনুষ্ঠানে খালেদা জিয়াএক মতবিনিময় অনুষ্ঠানে খালেদা জিয়াএক মতবিনিময় অনুষ্ঠানে খালেদা জিয়াএক মতবিনিময় অনুষ্ঠানে খালেদা জিয়াএক মতবিনিময় অনুষ্ঠানে খালেদা জিয়াএক মতবিনিময় অনুষ্ঠানে খালেদা জিয়াএক মতবিনিময় অনুষ্ঠানে খালেদা জিয়াএক মতবিনিময় অনুষ্ঠানে খালেদা জিয়াএক মতবিনিময় অনুষ্ঠানে খালেদা জিয়াএক মতবিনিময় অনুষ্ঠানে খালেদা জিয়াএক মতবিনিময় অনুষ্ঠানে খালেদা জিয়াএক মতবিনিময় অনুষ্ঠানে খালেদা জিয়াএক মতবিনিময় অনুষ্ঠানে খালেদা জিয়াএক মতবিনিময় অনুষ্ঠানে খালেদা জিয়াএক মতবিনিময় অনুষ্ঠানে খালেদা জিয়াএক মতবিনিময় অনুষ্ঠানে খালেদা জিয়াএক মতবিনিময় অনুষ্ঠানে খালেদা জিয়া</p>\n', 'roy', 'images/news_images/61.jpg', 1, '2014-02-02 02:20:38'),
(57, 1, 'home_headline_main', '<h1 class="name post-title entry-title" itemprop="name">\n	ভারতে নাশকতাই লক্ষ্য ছিল খালেদা সরকারের : ', 'নিউজরুম ডেস্ক : প্রতিবেশী দেশ ভারতে নাশকতা চালানোর উদ্দেশ্যে জঙ্গিদের সঙ্গে যোগসাজসে লিপ্ত ছিল বাংলাদেশের খালেদা জিয়ার সরকারের একটা প্রভাবশালী', ' দশ বছর আগে এপ্রিলের প্রথম দিনে চট্টগ্রামে শিল্প মন্ত্রকের জেটিতে দু’জাহাজ বোঝাই অস্ত্র ১০টি ট্রাকে বোঝাই করার সময়ে ধরা পড়ে যায়। বিচারক রহমান তাঁর রায়ে বলেছেন, প্রতিরক্ষা গোয়েন্দা বিভাগ (ডিজিএফআই)-এর ডিজি সাদিক হাসান রুমি প্রধানমন্ত্রী খালেদা জিয়াকে অস্ত্র আটকের বিষয়টি জানালেও তিনি নীরব থাকেন। ডিজিএফআই-এর প্রধান রুমি আদালতে হলফনামা দিয়ে এই তথ্য জানিয়েছেন। শিল্প দফতরের জেটিতে খালাস হওয়ার সময়ে যে এই অস্ত্র ধরা পড়েছে, তৎকালীন শিল্পমন্ত্রী জামাতের শীর্ষ নেতা মতিউর রহমান নিজামিকে সেই কথা জানিয়েছিলেন দফতরের সচিব শোয়েব আহমদ। আদালতকে দেওয়া সাক্ষ্যে তিনিও জানিয়েছেন, মন্ত্রী তাঁকে কোনও পদক্ষেপ করতে বারণ করেছিলেন। অস্ত্র চোরাচালানের এই বিষয়টি সরকারের সব মহলের জ্ঞাতসারে হয়েছে বলেও সচিবকে জানিয়েছিলেন মন্ত্রী নিজামি।</p>\n<p  justify;">\n রায়ে বিচারক মন্তব্য করেছেন, আলফার জন্য এই বিপুল অস্ত্র চোরাচালানের ঘটনায় প্রধানমন্ত্রী খালেদা জিয়ার রাজনৈতিক অফিস ‘হাওয়া ভবন’-এরও যোগাযোগ ছিল। খালেদা-পুত্র তারেক রহমান এই দফতরের দায়িত্বে ছিলেন। সামরিক গোয়েন্দা বিভাগ ‘ডিজিএফআই’ ছাড়া গুপ্তচর সংস্থা ‘এনএসআই’-এর তৎকালীন কর্মাকর্তারা এই মামলায় যে সাক্ষ্য দিয়েছেন, তা থেকেই বিষয়টি স্পষ্ট হয়েছে। পাকিস্তানি গুপ্তচর সংস্থা আইএসআই-এর পাঠানো অর্থ কী ভাবে বাংলাদেশের গুপ্তচর বিভাগের কর্তাদের হাতে আসত, তা-ও প্রকাশ্যে এসেছে।</p>\n<p  justify;">\n সরকার ও গোয়েন্দা-গুপ্তচর বিভাগের কর্তাদের সঙ্গে উত্তর-পূর্ব ভারতের জঙ্গি সংগঠন আলফার যে নিবিড় যোগাযোগ ছিল, সে কথাও বলেছেন বিচারক। ওই রায়ে বলা হয়েছে, ডিজিএফআই ও এনএসআই-এর বিভিন্ন কর্তা আদালতে দাঁড়িয়েই আলফার সঙ্গে তাঁদের যোগাযোগের কথা স্বীকার করেছেন। এমনকী আলফার টাকায় সস্ত্রীক দুবাই বেড়িয়ে আসার কথাও স্বীকার করেছেন এনএসআই-র তখনকার ডিজি ব্রিগেডিয়ার জেনারেল আব্দুর রহিম।</p>\n<p  justify;">\n রায়ে বলা হয়েছে, সম্ভবত বিশ্বের আর কোনও মামলায় এ ভাবে দেশের গোয়েন্দা ও গুপ্তচর বিভাগের কর্তারা প্রকাশ্যে এসে আদালতে সাক্ষ্য দেননি। সে হিসেবে এই মামলা নতুন নজির গড়েছে। গোয়েন্দা ও গুপ্তচর বিভাগের কর্তারা আদালতে অত্যন্ত স্পষ্ট ভাবে জানিয়েছেন, সরকারের দায়িত্বশীল মন্ত্রীরাই গোটা ঘটনার মাথা। কর্মচারী হিসেবে বাকিরা তাঁদের দায়িত্বটুকুই পালন করেছেন শুধু। রায়ে বলা হয়েছে, দেশ পরিচালনায় ঘোষিত নীতির বাইরে সরকার যে অন্য একটি নীতিও মেনে চলত, এই মামলায় তা স্পষ্ট হয়েছে। বিচারকের মতে এই প্রবণতা যেমন অনৈতিক, তেমনই জাতীয় ও আঞ্চলিক নিরাপত্তার পক্ষেও চরম বিপজ্জনক। প্রতিবেশী দেশে নাশকতা চালানো কখনও কোনও সরকারের নীতি হতে পারে না।</p>\n" rows="10" cols="110"><p  justify;">\n <strong>নিউজরুম ডেস্ক :</strong> প্রতিবেশী দেশ ভারতে নাশকতা চালানোর উদ্দেশ্যে জঙ্গিদের সঙ্গে যোগসাজসে লিপ্ত ছিল বাংলাদেশের খালেদা জিয়ার সরকারের একটা প্রভাবশালী অংশ। চট্টগ্রামে ১০ ট্রাক অস্ত্র মামলার রায়ে বিচারক এস এম মজিবুর রহমান এই ভাষাতেই আগের বিএনপি ও জামাতে ইসলামির জোট সরকারকে অভিযুক্ত করেছে। ৩০ জানুয়ারি এই রায়ে খালেদা জিয়ার দুই মন্ত্রী ও আলফার কমান্ডার পরেশ বরুয়া-সহ ১৪ জনের মৃত্যুদণ্ড ঘোষণা করেন বিচারক রহমান। ৩৯৪ পাতার পূর্ণাঙ্গ এই রায়টি প্রকাশের পর আজ সুপ্রিম কোর্টে জমা পড়েছে।</p>\n<p  justify;">\n দশ বছর আগে এপ্রিলের প্রথম দিনে চট্টগ্রামে শিল্প মন্ত্রকের জেটিতে দু’জাহাজ বোঝাই অস্ত্র ১০টি ট্রাকে বোঝাই করার সময়ে ধরা পড়ে যায়। বিচারক রহমান তাঁর রায়ে বলেছেন, প্রতিরক্ষা গোয়েন্দা বিভাগ (ডিজিএফআই)-এর ডিজি সাদিক হাসান রুমি প্রধানমন্ত্রী খালেদা জিয়াকে অস্ত্র আটকের বিষয়টি জানালেও তিনি নীরব থাকেন। ডিজিএফআই-এর প্রধান রুমি আদালতে হলফনামা দিয়ে এই তথ্য জানিয়েছেন। শিল্প দফতরের জেটিতে খালাস হওয়ার সময়ে যে এই অস্ত্র ধরা পড়েছে, তৎকালীন শিল্পমন্ত্রী জামাতের শীর্ষ নেতা মতিউর রহমান নিজামিকে সেই কথা জানিয়েছিলেন দফতরের সচিব শোয়েব আহমদ। আদালতকে দেওয়া সাক্ষ্যে তিনিও জানিয়েছেন, মন্ত্রী তাঁকে কোনও পদক্ষেপ করতে বারণ করেছিলেন। অস্ত্র চোরাচালানের এই বিষয়টি সরকারের সব মহলের জ্ঞাতসারে হয়েছে বলেও সচিবকে জানিয়েছিলেন মন্ত্রী নিজামি।</p>\n<p  justify;">\n রায়ে বিচারক মন্তব্য করেছেন, আলফার জন্য এই বিপুল অস্ত্র চোরাচালানের ঘটনায় প্রধানমন্ত্রী খালেদা জিয়ার রাজনৈতিক অফিস ‘হাওয়া ভবন’-এরও যোগাযোগ ছিল। খালেদা-পুত্র তারেক রহমান এই দফতরের দায়িত্বে ছিলেন। সামরিক গোয়েন্দা বিভাগ ‘ডিজিএফআই’ ছাড়া গুপ্তচর সংস্থা ‘এনএসআই’-এর তৎকালীন কর্মাকর্তারা এই মামলায় যে সাক্ষ্য দিয়েছেন, তা থেকেই বিষয়টি স্পষ্ট হয়েছে। পাকিস্তানি গুপ্তচর সংস্থা আইএসআই-এর পাঠানো অর্থ কী ভাবে বাংলাদেশের গুপ্তচর বিভাগের কর্তাদের হাতে আসত, তা-ও প্রকাশ্যে এসেছে।</p>\n<p  justify;">\n সরকার ও গোয়েন্দা-গুপ্তচর বিভাগের কর্তাদের সঙ্গে উত্তর-পূর্ব ভারতের জঙ্গি সংগঠন আলফার যে নিবিড় যোগাযোগ ছিল, সে কথাও বলেছেন বিচারক। ওই রায়ে বলা হয়েছে, ডিজিএফআই ও এনএসআই-এর বিভিন্ন কর্তা আদালতে দাঁড়িয়েই আলফার সঙ্গে তাঁদের যোগাযোগের কথা স্বীকার করেছেন। এমনকী আলফার টাকায় সস্ত্রীক দুবাই বেড়িয়ে আসার কথাও স্বীকার করেছেন এনএসআই-র তখনকার ডিজি ব্রিগেডিয়ার জেনারেল আব্দুর রহিম।</p>\n<p  justify;">\n রায়ে বল" rows="10" cols="110"> <strong>নিউজরুম ডেস্ক :</strong> প্রতিবেশী দেশ ভারতে নাশকতা চালানোর উদ্দেশ্যে জঙ্গিদের সঙ্গে যোগসাজসে লিপ্ত ছিল বাংলাদেশের খালেদা জিয়ার সরকারের একটা প্রভাবশালী অংশ। চট্টগ্রামে ১০ ট্রাক অস্ত্র মামলার রায়ে বিচারক এস এম মজিবুর রহমান এই ভাষাতেই আগের বিএনপি ও জামাতে ইসলামির জোট সরকারকে অভিযুক্ত করেছে। ৩০ জানুয়ারি এই রায়ে খালেদা জিয়ার দুই মন্ত্রী ও আলফার কমান্ডার পরেশ বরুয়া-সহ ১৪ জনের মৃত্যুদণ্ড ঘোষণা করেন বিচারক রহমান। ৩৯৪ পাতার পূর্ণাঙ্গ এই রায়টি প্রকাশের পর আজ সুপ্রিম কোর্টে জমা পড়ে', 'প্রতিদিন প্রতিবেদন', 'images/news_images/anandabazar1.jpg', 1, '2014-02-07 11:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(2) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(200) NOT NULL,
  `admin_email_address` varchar(2000) NOT NULL,
  `username` varchar(30) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email_address`, `username`, `admin_password`, `status`) VALUES
(1, 'Roy', 'royshubha04@gmail.com', 'admin', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advertise`
--

CREATE TABLE IF NOT EXISTS `tbl_advertise` (
  `advertise_id` int(9) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(30) NOT NULL,
  `subcategory_name` varchar(30) NOT NULL,
  `image` blob,
  `link` varchar(100) NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `admin_id` int(9) NOT NULL,
  `date_add` datetime NOT NULL,
  PRIMARY KEY (`advertise_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_advertise`
--

INSERT INTO `tbl_advertise` (`advertise_id`, `category_name`, `subcategory_name`, `image`, `link`, `publication_status`, `admin_id`, `date_add`) VALUES
(1, 'home header advertise', 'Robi', 0x696d616765732f6164766572746973655f696d6167652f67703131312e676966, 'www.gramxeenphone.com', 1, 1, '2014-01-07 23:01:44'),
(2, 'home body advertise1', 'Select Sub Category...', 0x696d616765732f6164766572746973655f696d6167652f436f6f6c2d46616365626f6f6b2d54696d656c696e652d436f7665722d32312e6a7067, 'www.robi.bd.com', 1, 1, '2014-01-07 23:01:03'),
(3, 'home body advertise2', 'Airtel', 0x696d616765732f6164766572746973655f696d6167652f7373322e6a7067, 'www.google.com', 1, 1, '2014-01-07 23:01:15'),
(4, 'home body advertise3', 'Facebook', 0x696d616765732f6164766572746973655f696d6167652f77765f686f6d655f626b676e645f70686f746f312e6a7067, 'facebook.com', 1, 1, '2014-01-07 23:01:26'),
(5, 'home body advertise4', 'Robi', 0x696d616765732f6164766572746973655f696d6167652f6770352e676966, 'www.robi.bd.com', 1, 1, '2014-01-07 23:01:40'),
(6, 'home body advertise5', 'Grameen Phone', 0x696d616765732f6164766572746973655f696d6167652f726f626932312e676966, 'www.robi.bd.com', 1, 1, '2014-01-07 23:01:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advertise_category`
--

CREATE TABLE IF NOT EXISTS `tbl_advertise_category` (
  `category_id` int(9) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(30) NOT NULL,
  `category_description` text NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_advertise_category`
--

INSERT INTO `tbl_advertise_category` (`category_id`, `category_name`, `category_description`) VALUES
(2, 'home header advertise', 'home header advcertise display here\r\n...size= width-450 // height- 80'),
(5, 'home body advertise1', 'home body advertise01 \r\nsize==width- 239 // height- 89'),
(6, 'home body advertise2', 'home body advertise2 \r\n size==width- 594 // height- 64'),
(7, 'home body advertise3', 'home body advertise3\r\nsize==width- 260// height- 250'),
(8, 'home body advertise4', 'home body advertise4\r\nsize==width- 260// height- 100'),
(9, 'home body advertise5', 'home body advertis5 .....s\r\n...size--width: "260"...height: "180"');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advertise_subcategory`
--

CREATE TABLE IF NOT EXISTS `tbl_advertise_subcategory` (
  `subcategory_id` int(9) NOT NULL AUTO_INCREMENT,
  `subcategory_name` varchar(30) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  `subcategory_description` varchar(100) NOT NULL,
  PRIMARY KEY (`subcategory_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_advertise_subcategory`
--

INSERT INTO `tbl_advertise_subcategory` (`subcategory_id`, `subcategory_name`, `category_name`, `subcategory_description`) VALUES
(1, 'Robi', 'home head adv1', 'Robi advertise in home heading'),
(2, 'Grameen Phone', 'home head adv1', 'Grameen Phone advertise display here'),
(3, 'Airtel', 'home sidebar right1', 'Airtel advertise in home sidebar right 1 display'),
(5, 'Bd', 'home sidebar right1', 'ssx'),
(6, 'Facebook', 'home header advcertise ', 'facebok');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `category_id` int(3) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `category_description` text NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`) VALUES
(1, 'home_headline_main', 'Main head line news published here'),
(2, 'home_headline_sub', 'under home headline sub news published here'),
(3, 'home_headline_left', 'spo'),
(4, 'home_headline_sub2', 'mmmm'),
(5, 'home_headline_right', 'home headline under right side newsss');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logo`
--

CREATE TABLE IF NOT EXISTS `tbl_logo` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `image` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_logo`
--

INSERT INTO `tbl_logo` (`id`, `image`) VALUES
(1, 0x696d616765732f6c6f676f2f6c6f676f312e676966);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE IF NOT EXISTS `tbl_subcategory` (
  `sub_categoryid` int(9) NOT NULL AUTO_INCREMENT,
  `sub_categoryname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sub_categorydescription` varchar(150) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`sub_categoryid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
