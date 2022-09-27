-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for avi
CREATE DATABASE IF NOT EXISTS `avi` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `avi`;

-- Dumping structure for table avi.about_mes
CREATE TABLE IF NOT EXISTS `about_mes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `versity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graduation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `skil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table avi.about_mes: ~0 rows (approximately)
/*!40000 ALTER TABLE `about_mes` DISABLE KEYS */;
INSERT INTO `about_mes` (`id`, `name`, `email`, `phone`, `versity`, `designation`, `graduation`, `address`, `description`, `skil`, `image`) VALUES
	(1, 'অরুণাভ মল্লিক অভি', 'avi@gmail.com', '01631925841', 'MIT', 'Software developer', 'MS.c', 'Bangladesh,Dhaka', '<p><img alt="" src="http://bdfunhouse.files.wordpress.com/2010/05/bros.jpg?w=570&amp;h=399" style="height:300px; width:500px" />আমি অরুণাভ মল্লিক অভি ,পেশায় এখন সফটওয়্যার ডেভেলপের । বর্তমানে আমি এন্ড্রোইড প্লাটফর্মে কাজ করছি । খুব ছোটবেলা থেকে কমিক্স এর প্রতি আমার একটা ভালোবাসা ছিল আর সেই কারণেই আমি বাংলা ভাষাবাসীদের জন্য প্রথম এই সাইটটি তৈরী করি যাতে কমিক্সের প্রতি মানুষের আরো অগ্রহ বাড়ে&nbsp;<img alt="" src="http://bdfunhouse.files.wordpress.com/2010/05/bcl.jpg" style="float:right; height:200px; width:200px" /></p>', 'Software Engineer', 'image/about-me/about-image_32911-g.jpg');
/*!40000 ALTER TABLE `about_mes` ENABLE KEYS */;

-- Dumping structure for table avi.app_names
CREATE TABLE IF NOT EXISTS `app_names` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `app_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table avi.app_names: ~0 rows (approximately)
/*!40000 ALTER TABLE `app_names` DISABLE KEYS */;
INSERT INTO `app_names` (`id`, `app_name`, `created_at`, `updated_at`) VALUES
	(1, NULL, NULL, NULL);
/*!40000 ALTER TABLE `app_names` ENABLE KEYS */;

-- Dumping structure for table avi.blogs
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table avi.blogs: ~2 rows (approximately)
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` (`id`, `page_id`, `type`, `description`, `image`, `title`, `count`, `status`, `created_at`, `updated_at`) VALUES
	(1, NULL, 'Motive', '<p>Many blogs provide commentary on a particular subject or topic, ranging from&nbsp;<a href="https://en.wikipedia.org/wiki/Philosophy">philosophy</a>,&nbsp;<a href="https://en.wikipedia.org/wiki/Religion">religion</a>, and&nbsp;<a href="https://en.wikipedia.org/wiki/Art">arts</a>&nbsp;to&nbsp;<a href="https://en.wikipedia.org/wiki/Science">science</a>,&nbsp;<a href="https://en.wikipedia.org/wiki/Politics">politics</a>, and&nbsp;<a href="https://en.wikipedia.org/wiki/Sport">sports</a>. Others function as more personal&nbsp;<a href="https://en.wikipedia.org/wiki/Online_diary">online diaries</a>&nbsp;or&nbsp;<a href="https://en.wikipedia.org/wiki/Online_advertising">online brand advertising</a>&nbsp;of a particular individual or company. A typical blog combines text,&nbsp;<a href="https://en.wikipedia.org/wiki/Digital_image">digital images</a>, and&nbsp;<a href="https://en.wikipedia.org/wiki/Hyperlink">links</a>&nbsp;to other blogs, web pages, and other media related to its topic. The ability of readers to leave publicly viewable comments, and interact with other commenters, is an important contribution to the popularity of many blogs. However, blog owners or authors often&nbsp;<a href="https://en.wikipedia.org/wiki/Internet_forum#Moderators">moderate</a>&nbsp;and&nbsp;<a href="https://en.wikipedia.org/wiki/Wordfilter">filter</a>&nbsp;online comments to remove&nbsp;<a href="https://en.wikipedia.org/wiki/Hate_speech">hate speech</a>&nbsp;or other offensive content. Most blogs are primarily textual, although some focus on art (<em><a href="https://en.wikipedia.org/wiki/Art_blog">art blogs</a></em>), photographs (<em><a href="https://en.wikipedia.org/wiki/Photoblog">photoblogs</a></em>), videos (<em><a href="https://en.wikipedia.org/wiki/Video_blog">video blogs</a></em>&nbsp;or &quot;<em>vlogs</em>&quot;), music (<em><a href="https://en.wikipedia.org/wiki/MP3_blog">MP3 blogs</a></em>), and audio (<em><a href="https://en.wikipedia.org/wiki/Podcast">podcasts</a></em>). In education, blogs can be used as instructional resources; these are referred to as&nbsp;<em><a href="https://en.wikipedia.org/wiki/Edublog">edublogs</a></em>.&nbsp;<a href="https://en.wikipedia.org/wiki/Microblogging">Microblogging</a>&nbsp;is another type of blogging, featuring very short posts.</p>', 'image/blog/blog796241-g.jpg', 'Success', 1, 1, '2022-02-22 09:23:47', '2022-02-22 09:45:30'),
	(2, NULL, 'Strong', '<p>Many blogs provide commentary on a particular subject or topic, ranging from&nbsp;<a href="https://en.wikipedia.org/wiki/Philosophy">philosophy</a>,&nbsp;<a href="https://en.wikipedia.org/wiki/Religion">religion</a>, and&nbsp;<a href="https://en.wikipedia.org/wiki/Art">arts</a>&nbsp;to&nbsp;<a href="https://en.wikipedia.org/wiki/Science">science</a>,&nbsp;<a href="https://en.wikipedia.org/wiki/Politics">politics</a>, and&nbsp;<a href="https://en.wikipedia.org/wiki/Sport">sports</a>. Others function as more personal&nbsp;<a href="https://en.wikipedia.org/wiki/Online_diary">online diaries</a>&nbsp;or&nbsp;<a href="https://en.wikipedia.org/wiki/Online_advertising">online brand advertising</a>&nbsp;of a particular individual or company. A typical blog combines text,&nbsp;<a href="https://en.wikipedia.org/wiki/Digital_image">digital images</a>, and&nbsp;<a href="https://en.wikipedia.org/wiki/Hyperlink">links</a>&nbsp;to other blogs, web pages, and other media related to its topic. The ability of readers to leave publicly viewable comments, and interact with other commenters, is an important contribution to the popularity of many blogs. However, blog owners or authors often&nbsp;<a href="https://en.wikipedia.org/wiki/Internet_forum#Moderators">moderate</a>&nbsp;and&nbsp;<a href="https://en.wikipedia.org/wiki/Wordfilter">filter</a>&nbsp;online comments to remove&nbsp;<a href="https://en.wikipedia.org/wiki/Hate_speech">hate speech</a>&nbsp;or other offensive content. Most blogs are primarily textual, although some focus on art (<em><a href="https://en.wikipedia.org/wiki/Art_blog">art blogs</a></em>), photographs (<em><a href="https://en.wikipedia.org/wiki/Photoblog">photoblogs</a></em>), videos (<em><a href="https://en.wikipedia.org/wiki/Video_blog">video blogs</a></em>&nbsp;or &quot;<em>vlogs</em>&quot;), music (<em><a href="https://en.wikipedia.org/wiki/MP3_blog">MP3 blogs</a></em>), and audio (<em><a href="https://en.wikipedia.org/wiki/Podcast">podcasts</a></em>). In education, blogs can be used as instructional resources; these are referred to as&nbsp;<em><a href="https://en.wikipedia.org/wiki/Edublog">edublogs</a></em>.&nbsp;<a href="https://en.wikipedia.org/wiki/Microblogging">Microblogging</a>&nbsp;is another type of blogging, featuring very short posts.</p>', 'image/blog/blog970053-g.jpg', 'Life is hard', 3, 1, '2022-02-22 09:24:39', '2022-02-23 03:33:18'),
	(3, NULL, 'Love', '<p>Many blogs provide commentary on a particular subject or topic, ranging from&nbsp;<a href="https://en.wikipedia.org/wiki/Philosophy">philosophy</a>,&nbsp;<a href="https://en.wikipedia.org/wiki/Religion">religion</a>, and&nbsp;<a href="https://en.wikipedia.org/wiki/Art">arts</a>&nbsp;to&nbsp;<a href="https://en.wikipedia.org/wiki/Science">science</a>,&nbsp;<a href="https://en.wikipedia.org/wiki/Politics">politics</a>, and&nbsp;<a href="https://en.wikipedia.org/wiki/Sport">sports</a>. Others function as more personal&nbsp;<a href="https://en.wikipedia.org/wiki/Online_diary">online diaries</a>&nbsp;or&nbsp;<a href="https://en.wikipedia.org/wiki/Online_advertising">online brand advertising</a>&nbsp;of a particular individual or company. A typical blog combines text,&nbsp;<a href="https://en.wikipedia.org/wiki/Digital_image">digital images</a>, and&nbsp;<a href="https://en.wikipedia.org/wiki/Hyperlink">links</a>&nbsp;to other blogs, web pages, and other media related to its topic. The ability of readers to leave publicly viewable comments, and interact with other commenters, is an important contribution to the popularity of many blogs. However, blog owners or authors often&nbsp;<a href="https://en.wikipedia.org/wiki/Internet_forum#Moderators">moderate</a>&nbsp;and&nbsp;<a href="https://en.wikipedia.org/wiki/Wordfilter">filter</a>&nbsp;online comments to remove&nbsp;<a href="https://en.wikipedia.org/wiki/Hate_speech">hate speech</a>&nbsp;or other offensive content. Most blogs are primarily textual, although some focus on art (<em><a href="https://en.wikipedia.org/wiki/Art_blog">art blogs</a></em>), photographs (<em><a href="https://en.wikipedia.org/wiki/Photoblog">photoblogs</a></em>), videos (<em><a href="https://en.wikipedia.org/wiki/Video_blog">video blogs</a></em>&nbsp;or &quot;<em>vlogs</em>&quot;), music (<em><a href="https://en.wikipedia.org/wiki/MP3_blog">MP3 blogs</a></em>), and audio (<em><a href="https://en.wikipedia.org/wiki/Podcast">podcasts</a></em>). In education, blogs can be used as instructional resources; these are referred to as&nbsp;<em><a href="https://en.wikipedia.org/wiki/Edublog">edublogs</a></em>.&nbsp;<a href="https://en.wikipedia.org/wiki/Microblogging">Microblogging</a>&nbsp;is another type of blogging, featuring very short posts.</p>', 'image/blog/blog77618-g.jpg', 'Come to home', 0, 1, '2022-02-22 09:25:22', '2022-02-22 09:27:03');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;

-- Dumping structure for table avi.comics
CREATE TABLE IF NOT EXISTS `comics` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comics_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comics_category_id` int(11) DEFAULT NULL,
  `comics_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comics_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visitor` int(11) DEFAULT NULL,
  `comics_description` longtext COLLATE utf8mb4_unicode_ci,
  `image` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `comics_comics_title_unique` (`comics_title`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table avi.comics: ~2 rows (approximately)
/*!40000 ALTER TABLE `comics` DISABLE KEYS */;
INSERT INTO `comics` (`id`, `comics_title`, `comics_category_id`, `comics_link`, `comics_author`, `visitor`, `comics_description`, `image`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'নন্টে ফন্টে', 1, 'https://bn.wikipedia.org/wiki/%E0%A6%A8%E0%A6%A8%E0%A7%8D%E0%A6%9F%E0%A7%87_%E0%A6%AB%E0%A6%A8%E0%A7%8D%E0%A6%9F%E0%A7%87', 'কিশোর ভারতী', NULL, '<p>নন্টে ও ফন্টে সমবয়সী সহপাঠী দুই বন্ধু, তারা&nbsp;<a href="https://bn.wikipedia.org/wiki/%E0%A6%AA%E0%A6%B6%E0%A7%8D%E0%A6%9A%E0%A6%BF%E0%A6%AE%E0%A6%AC%E0%A6%99%E0%A7%8D%E0%A6%97">পশ্চিম বাংলার</a>&nbsp;কোনো অজানা মফস্বল শহরের একটি বোর্ডিং স্কুলে থেকে লেখাপড়া করে। তাদের এই বোর্ডিং স্কুলের জীবনের ছোটখাটো বিভিন্ন মজার মজার ঘটনা নিয়েই এই কমিক। তাদের সাথে একই বোর্ডিংয়ে থাকে কেল্টু নামের পাজী ধরনের একটু বেশি বয়সের এক দুষ্টু ছাত্র, &quot;কেল্টুদা&quot; নামে যাকে বোর্ডিংয়ের বাকি ছাত্ররা সম্বোধন করে থাকে। অধিকাংশ গল্পের বিষয়বস্তু কেল্টুর সাথে নন্টে-ফন্টের রেষারেষি, যার পরিসমাপ্তি ঘটে কেল্টুর উচিত সাজার মাধ্যমে</p>', '["comoices_WWSn9UsgXN.jpg","comoices_ldJsaHalFB.jpg","comoices_qfi5eF7PaC.jpg","comoices_cVh5qbgJN1.jpg"]', '1', '2022-02-22 09:10:50', '2022-03-07 10:24:34'),
	(2, 'বাঁটুল দ্য গ্রেট', 2, 'https://bn.wikipedia.org/wiki/%E0%A6%AC%E0%A6%BE%E0%A6%81%E0%A6%9F%E0%A7%81%E0%A6%B2_%E0%A6%A6%E0%A7%8D%E0%A6%AF_%E0%A6%97%E0%A7%8D%E0%A6%B0%E0%A7%87%E0%A6%9F', 'শুকতারা', NULL, '<p>বাঁটুল দি গ্রেট প্রচন্ড শক্তিশালী এক মানুষ। বাঁটুলের গায়ে গুলি লেগে গুলি ছিটকে যায়। মাথায় বিরাট হাতুড়ি মারলে তার মনে হয় মাথায় একফোঁটা জল পড়ল। কিন্তু তার পোশাক আশাক মোটেও সুপারহীরোর মত নয়। গোলাপী বা কমলা স্যান্ডো গেঞ্জী আর কালো হাফপ্যান্ট তার একমাত্র পোশাক। বাঁটুল সবসময়ে খালি পায়েই থাকে। কারণ জুতো পরলেই নাকি ছিঁড়ে যায়। তার আছে দুই স্যাঙাত যাদের নাম বিচ্ছু ও বাচ্ছু, কখনো কখনো তাদের নাম গজা ও ভজা বলেও বর্ণিত হয়েছে। তারা সবসময়েই ব্যস্ত থাকে কিভাবে বাঁটুলকে জব্দ করবে, কিন্তু শেষে তারাই জব্দ হয়। বাঁটুলের প্রতিবেশী হলেন বটব্যাল বাবু ও তার চাকর। স্থানীয় পুলিশ আধিকারিকের সঙ্গেও বাঁটুলের বন্ধুত্ব। বাঁটুলের আরেক অনুগত স্যাঙাত আছে যার নাম&nbsp;<strong>লম্বকর্ণ</strong>। লম্বকর্ণের শ্রবণশক্তি প্রখর। বাঁটুলের পোষা কুকুরের নাম&nbsp;<strong>ভেদো</strong>&nbsp;আর পোষা&nbsp;<a href="https://bn.wikipedia.org/wiki/%E0%A6%89%E0%A6%9F%E0%A6%AA%E0%A6%BE%E0%A6%96%E0%A6%BF">উটপাখির</a>&nbsp;নাম&nbsp;<strong>উটো</strong>। মাঝে মাঝেই সমসাময়িক বাস্তব ঘটনায় বাঁটুলকে জড়িয়ে পড়তে দেখা যায়। বাঁটুলকে দেখা গেছে অলিম্পিকে ভারতের জন্য সোনার মেডেল জিততে। বাঁটুল বেড়াতে ভালবাসে। একবার মিশর বেড়াতে গিয়ে সে একটি যান্ত্রিক&nbsp;<a href="https://bn.wikipedia.org/w/index.php?title=%E0%A6%B8%E0%A7%8D%E0%A6%AB%E0%A6%BF%E0%A6%82%E0%A6%B8&amp;action=edit&amp;redlink=1">স্ফিংসকে</a>&nbsp;জব্দ করেছিল। বাঁটুল সৎ ও দেশপ্রেমিক। সে অতীত গল্পগুলিতে বাংলাদেশ মুক্তিযুদ্ধে সাহায্য করে মুক্তিযোদ্ধাদের ও পাক বাহিনীকে সংহার করেছে। বাঁটুলের প্রচন্ড শক্তি মাঝে মাঝেই তার প্রতিবেশীদের সমস্যার কারণ হয়।</p>', '["comoices_XkCrQCpofF.jpg","comoices_TGaq4gruhJ.jpg","comoices_dgJsFVgNFn.jpg","comoices_NfHi5szin1.jpg"]', '1', '2022-02-22 09:15:24', '2022-02-23 08:35:36'),
	(3, 'ঠাকুরমার ঝুলি', 3, 'https://bn.wikipedia.org/wiki/%E0%A6%A8%E0%A6%A8%E0%A7%8D%E0%A6%9F%E0%A7%87_%E0%A6%AB%E0%A6%A8%E0%A7%8D%E0%A6%9F%E0%A7%87', 'ভট্টাচার্য এন্ড সন্স', NULL, '<p><em><strong>ঠাকুরমার ঝুলি</strong></em>&nbsp;বাংলা শিশুসাহিত্যের একটি জনপ্রিয়&nbsp;<a href="https://bn.wikipedia.org/wiki/%E0%A6%B0%E0%A7%82%E0%A6%AA%E0%A6%95%E0%A6%A5%E0%A6%BE">রূপকথার</a>&nbsp;সংকলন। এই গ্রন্থের সংকলক&nbsp;<a href="https://bn.wikipedia.org/wiki/%E0%A6%A6%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BF%E0%A6%A3%E0%A6%BE%E0%A6%B0%E0%A6%9E%E0%A7%8D%E0%A6%9C%E0%A6%A8_%E0%A6%AE%E0%A6%BF%E0%A6%A4%E0%A7%8D%E0%A6%B0_%E0%A6%AE%E0%A6%9C%E0%A7%81%E0%A6%AE%E0%A6%A6%E0%A6%BE%E0%A6%B0">দক্ষিণারঞ্জন মিত্র মজুমদার</a>।<a href="https://bn.wikipedia.org/wiki/%E0%A6%A0%E0%A6%BE%E0%A6%95%E0%A7%81%E0%A6%B0%E0%A6%AE%E0%A6%BE%E0%A6%B0_%E0%A6%9D%E0%A7%81%E0%A6%B2%E0%A6%BF#cite_note-1">[১]</a>&nbsp;দক্ষিণারঞ্জন মিত্র মজুমদার রূপকথার গল্পগুলো সংগ্রহ করেছিলেন তৎকালীন বৃহত্তর&nbsp;<a href="https://bn.wikipedia.org/wiki/%E0%A6%AE%E0%A6%AF%E0%A6%BC%E0%A6%AE%E0%A6%A8%E0%A6%B8%E0%A6%BF%E0%A6%82%E0%A6%B9_%E0%A6%9C%E0%A7%87%E0%A6%B2%E0%A6%BE">ময়মনসিংহ জেলার</a>&nbsp;বিভিন্ন গ্রামাঞ্চল থেকে। তবে সংগৃহীত হলেও দক্ষিণারঞ্জণের লেখনীর গুণে গল্পগুলো হয়ে উঠে শিশু মনোরঞ্জক। ৮৪ টি চিত্র সংবলিত ঠাকুরমার ঝুলির চিত্র অঙ্কন করেছেন গ্রন্থকার স্বয়ং।<a href="https://bn.wikipedia.org/wiki/%E0%A6%A0%E0%A6%BE%E0%A6%95%E0%A7%81%E0%A6%B0%E0%A6%AE%E0%A6%BE%E0%A6%B0_%E0%A6%9D%E0%A7%81%E0%A6%B2%E0%A6%BF#cite_note-2">[২]</a>&nbsp;গ্রন্থটি প্রথম প্রকাশিত হয় ১৯০৬ খ্রিষ্টাব্দে কলকাতার &#39;<a href="https://bn.wikipedia.org/w/index.php?title=%E0%A6%AD%E0%A6%9F%E0%A7%8D%E0%A6%9F%E0%A6%BE%E0%A6%9A%E0%A6%BE%E0%A6%B0%E0%A7%8D%E0%A6%AF_%E0%A6%8F%E0%A6%A8%E0%A7%8D%E0%A6%A1_%E0%A6%B8%E0%A6%A8%E0%A7%8D%E0%A6%B8&amp;action=edit&amp;redlink=1">ভট্টাচার্য এন্ড সন্স</a>&#39; প্রকাশনা সংস্থা হতে।&nbsp;<a href="https://bn.wikipedia.org/wiki/%E0%A6%B0%E0%A6%AC%E0%A7%80%E0%A6%A8%E0%A7%8D%E0%A6%A6%E0%A7%8D%E0%A6%B0%E0%A6%A8%E0%A6%BE%E0%A6%A5_%E0%A6%A0%E0%A6%BE%E0%A6%95%E0%A7%81%E0%A6%B0">রবীন্দ্রনাথ ঠাকুর</a>&nbsp;এই বইয়ের ভূমিকা লিখেছিলেন। এরপর থেকে এর শত শত সংস্করণ প্রকাশিত হয়েছে। রিনা প্রীতিশ নন্দী কর্তৃক অনূদিত এর একটি ইংরেজি সংস্করণও বের হয়েছে</p>', '["comoices_QScrtutwVy.jpg","comoices_jwXZwXUblM.jpg","comoices_JuRXbnQTfY.jpg","comoices_FapzuXPjH0.jpg"]', '1', '2022-02-22 09:20:26', '2022-03-07 10:25:05');
/*!40000 ALTER TABLE `comics` ENABLE KEYS */;

-- Dumping structure for table avi.comics_categories
CREATE TABLE IF NOT EXISTS `comics_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comics_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table avi.comics_categories: ~4 rows (approximately)
/*!40000 ALTER TABLE `comics_categories` DISABLE KEYS */;
INSERT INTO `comics_categories` (`id`, `comics_category`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'গল্প', '1', '2022-02-22 09:06:30', '2022-02-22 09:06:30'),
	(2, 'জোকস', '1', '2022-02-22 09:06:48', '2022-02-22 09:06:48'),
	(3, 'ভয়', '1', '2022-02-22 09:07:10', '2022-02-22 09:07:10'),
	(4, 'হাসির', '1', '2022-02-22 09:07:28', '2022-02-22 09:07:28'),
	(5, 'রূপকথা', '1', '2022-02-22 09:07:54', '2022-02-22 09:07:54');
/*!40000 ALTER TABLE `comics_categories` ENABLE KEYS */;

-- Dumping structure for table avi.counts
CREATE TABLE IF NOT EXISTS `counts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `count` int(11) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table avi.counts: ~0 rows (approximately)
/*!40000 ALTER TABLE `counts` DISABLE KEYS */;
/*!40000 ALTER TABLE `counts` ENABLE KEYS */;

-- Dumping structure for table avi.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table avi.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table avi.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table avi.migrations: ~12 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(13, '2014_10_12_000000_create_users_table', 1),
	(14, '2014_10_12_100000_create_password_resets_table', 1),
	(15, '2019_08_19_000000_create_failed_jobs_table', 1),
	(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(17, '2022_01_05_113350_create_sliders_table', 1),
	(18, '2022_01_12_072527_create_about_mes_table', 1),
	(19, '2022_01_14_043543_create_counts_table', 1),
	(20, '2022_01_20_031540_create_blogs_table', 1),
	(21, '2022_02_02_055619_create_comics_table', 1),
	(22, '2022_02_08_112614_create_comics_categories_table', 1),
	(23, '2022_02_10_112303_create_profiles_table', 1),
	(24, '2022_02_15_043824_create_app_names_table', 1),
	(25, '2022_02_23_040649_create_subscribers_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table avi.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table avi.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table avi.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table avi.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table avi.profiles
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table avi.profiles: ~0 rows (approximately)
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` (`id`, `name`, `email`, `image`, `password`, `created_at`, `updated_at`) VALUES
	(1, NULL, NULL, '1', NULL, NULL, NULL);
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;

-- Dumping structure for table avi.sliders
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table avi.sliders: ~0 rows (approximately)
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` (`id`, `name`, `designation_one`, `designation_two`, `designation_three`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'বাংলায় মজার জোকস', 'নন্টে-ফন্টে', 'ঠাকুরমার ঝুলি', 'ভূতের গল্প', 'image/protfolio/profile_663523-g.jpg', '2022-02-22 08:25:19', '2022-02-22 08:38:01');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;

-- Dumping structure for table avi.subscribers
CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `subscriber_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscriber_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table avi.subscribers: ~1 rows (approximately)
/*!40000 ALTER TABLE `subscribers` DISABLE KEYS */;
INSERT INTO `subscribers` (`id`, `subscriber_name`, `subscriber_email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
	(12, 'Yeasin Hossain', 'm.yeasinhossain@yahoo.com', 'dsfdsfdf', 'dsfdsfdsfdsfdsf', '2022-02-23 07:17:10', '2022-02-23 07:17:10');
/*!40000 ALTER TABLE `subscribers` ENABLE KEYS */;

-- Dumping structure for table avi.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table avi.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Avi', 'admin@gmail.com', 'image/profile/947303-g.jpg', NULL, '$2y$10$1d3WIrEHAsCHB6q0pKP2V.ObXcWkAAzVhdvPVPdyna9MnqY/dLRIO', NULL, '2022-02-22 08:05:50', '2022-02-23 03:48:25');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
