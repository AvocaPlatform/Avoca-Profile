/*
 Navicat Premium Data Transfer

 Source Server         : XAMPP_PHP7
 Source Server Type    : MySQL
 Source Server Version : 100128
 Source Host           : localhost:3306
 Source Schema         : avoca_profile

 Target Server Type    : MySQL
 Target Server Version : 100128
 File Encoding         : 65001

 Date: 25/12/2018 16:37:34
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for blogcats
-- ----------------------------
DROP TABLE IF EXISTS `blogcats`;
CREATE TABLE `blogcats`  (
  `id` int(11) NULL DEFAULT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `slug` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of blogcats
-- ----------------------------
INSERT INTO `blogcats` VALUES (1, 'My Life', 'my-life');
INSERT INTO `blogcats` VALUES (2, 'Knowledge', 'knowledge');

-- ----------------------------
-- Table structure for blogs
-- ----------------------------
DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs`  (
  `id` int(11) NULL DEFAULT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `slug` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `date_created` datetime(0) NULL DEFAULT NULL,
  `date_publish` datetime(0) NULL DEFAULT NULL,
  `category` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `summary` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `is_hot` int(11) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of blogs
-- ----------------------------
INSERT INTO `blogs` VALUES (1, '4.jpg', 'Image Upload for Summernote v0.8.1', 'image-upload-for-summernote-v0.8.1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '[\"1\",\"2\"]', 'Of course I have all js and css files. What i do wrong? If I click on image upload and go to the editor, the image is not in textarea.\r\n\r\nIf I delete sendFile function and onImageUpload: the image save on base64.', '<p style=\"margin-bottom: 1em; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; vertical-align: baseline; box-sizing: inherit; clear: both; color: rgb(36, 39, 41); letter-spacing: normal;\">Of course I have all js and css files. What i do wrong? If I click on image upload and go to the editor, the image is not in textarea.</p><p style=\"margin-bottom: 1em; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; vertical-align: baseline; box-sizing: inherit; clear: both; color: rgb(36, 39, 41); letter-spacing: normal;\">If I delete sendFile function and onImageUpload: the image save on base64.</p><p style=\"margin-bottom: 1em; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; vertical-align: baseline; box-sizing: inherit; clear: both; color: rgb(36, 39, 41); letter-spacing: normal;\">Of course I have all js and css files. What i do wrong? If I click on image upload and go to the editor, the image is not in textarea.</p><p style=\"margin-bottom: 1em; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; vertical-align: baseline; box-sizing: inherit; clear: both; color: rgb(36, 39, 41); letter-spacing: normal;\">If I delete sendFile function and onImageUpload: the image save on base64.</p><p style=\"margin-bottom: 1em; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; vertical-align: baseline; box-sizing: inherit; clear: both; color: rgb(36, 39, 41); letter-spacing: normal;\">Of course I have all js and css files. What i do wrong? If I click on image upload and go to the editor, the image is not in textarea.</p><p style=\"margin-bottom: 1em; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; vertical-align: baseline; box-sizing: inherit; clear: both; color: rgb(36, 39, 41); letter-spacing: normal;\">If I delete sendFile function and onImageUpload: the image save on base64.</p>', 0);
INSERT INTO `blogs` VALUES (2, '4.jpg', 'Image Upload for Summernote v0.8.1', 'image-upload-for-summernote-v0.8.1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '[\"1\"]', 'Of course I have all js and css files. What i do wrong? If I click on image upload and go to the editor, the image is not in textarea.\r\n\r\nIf I delete sendFile function and onImageUpload: the image save on base64.', '<p style=\"margin-bottom: 1em; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; vertical-align: baseline; box-sizing: inherit; clear: both; color: rgb(36, 39, 41); letter-spacing: normal;\">Of course I have all js and css files. What i do wrong? If I click on image upload and go to the editor, the image is not in textarea.</p><p style=\"margin-bottom: 1em; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; vertical-align: baseline; box-sizing: inherit; clear: both; color: rgb(36, 39, 41); letter-spacing: normal;\">If I delete sendFile function and onImageUpload: the image save on base64.</p><p style=\"margin-bottom: 1em; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; vertical-align: baseline; box-sizing: inherit; clear: both; color: rgb(36, 39, 41); letter-spacing: normal;\">Of course I have all js and css files. What i do wrong? If I click on image upload and go to the editor, the image is not in textarea.</p><p style=\"margin-bottom: 1em; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; vertical-align: baseline; box-sizing: inherit; clear: both; color: rgb(36, 39, 41); letter-spacing: normal;\">If I delete sendFile function and onImageUpload: the image save on base64.</p><p style=\"margin-bottom: 1em; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; vertical-align: baseline; box-sizing: inherit; clear: both; color: rgb(36, 39, 41); letter-spacing: normal;\">Of course I have all js and css files. What i do wrong? If I click on image upload and go to the editor, the image is not in textarea.</p><p style=\"margin-bottom: 1em; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; vertical-align: baseline; box-sizing: inherit; clear: both; color: rgb(36, 39, 41); letter-spacing: normal;\">If I delete sendFile function and onImageUpload: the image save on base64.</p>', 0);

-- ----------------------------
-- Table structure for experiences
-- ----------------------------
DROP TABLE IF EXISTS `experiences`;
CREATE TABLE `experiences`  (
  `id` int(11) NULL DEFAULT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `type` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `workat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `workat_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `workat_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `date_start` date NULL DEFAULT NULL,
  `date_end` date NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of experiences
-- ----------------------------
INSERT INTO `experiences` VALUES (1, 'Web Developer', 'Jobs', 'Neowiz Internet VietNam One Member Co.,Ltd', 'http://neowiz.com', 'Ho Chi Minh Cty', '2008-11-01', '2009-07-31', 'Develop depdepdep.vn website that a social network\r\nDevelop RPC chat via Action Script\r\nLanguage: PHP-MySQL, JS, CSS, HTML');
INSERT INTO `experiences` VALUES (2, 'Student', 'Educations', 'Ho Chi Minh City University of Science', 'https://www.hcmus.edu.vn/', 'Ho Chi Minh Cty', '2005-09-01', '2010-05-31', 'Studied in Math & Computer Science');
INSERT INTO `experiences` VALUES (3, 'Software Developer', 'Jobs', 'NTIS Co, Ltd', 'https://www.facebook.com/ntis.vn', 'Ho Chi Minh Cty', '2009-08-01', '2010-10-31', 'Built Book Store with Magento E-commerce\r\nBuilt CRM to customers\r\nFramework: Magento, Drupal, Joomla, SugarCRM, Vtiger CRM\r\nLanguage: PHP-MySQL, JS, CSS, HTML, Java\r\nLinux: Centos, Ubuntu');
INSERT INTO `experiences` VALUES (4, 'Senior Software Engineer, Digital Advertising Platform & Solution Management', 'Jobs', 'VNG Corporation', 'https://vng.com.vn', 'Ho Chi Minh Cty', '2010-11-01', '2015-05-01', 'Develop ZingDeal, a group-on site had 1 million users and 4k CCU, use Cake PHP framework\r\nDevelop Campaign Framework a framework with some feature for Ad Campaign, use CI PHP framework\r\nDevelop baihatyeuthich.vn campaign that music award site with 3k CCU for client is VTV\r\nDevelop CRM for sales had 200 users, use SugarCRM. Maintenance and integrate it with other system as: Oracle, Adtima Ad Server, Self Serving, ...\r\nDevelop Self Serving system that allow customers view ad reports real time\r\nFramework: SugarCRM, CI, Django\r\nLanguage: PHP-MySQL, JS, CSS, HTML, Python, Shell Script\r\nLinux: Centos, Ubuntu');
INSERT INTO `experiences` VALUES (5, 'CRM Expert & Co-Founder ', 'Jobs', 'YouAddOn', 'https://youaddon.com', 'Ho Chi Minh Cty', '2013-10-09', NULL, 'Develop modules, plug-ins for SugarCRM\r\nDevelop website https://youaddon.com that e-commerce site buy SugarCRM plugins\r\nOutsourcing\r\nFramework: SugarCRM, VtigerCRM, CI, Django, Wordpress\r\nLanguage: PHP-MySQL, JS, CSS, HTML, Python, Java\r\nLinux: Centos, Ubuntu');
INSERT INTO `experiences` VALUES (6, 'Senior Software Engineer', 'Jobs', 'Aboutknowledge - Hong Kong Limited', 'http://aboutknowledge.com/', 'Ho Chi Minh Cty', '2015-04-01', NULL, 'Custom CRM for HK clients\r\nOutsourcing for HK clients\r\nDevelop plugins for Sugar CRM CE, Suite CRM and SugarCRM ENT\r\nWorking with: Web App, Mobile App, Desktop App\r\nFramework: SugarCRM, Wordpress, CI, PhalconPHP\r\nLanguage: PHP-MySQL, JS, CSS, HTML, Java, React, React Native, Nginx\r\nLinux: Centos, Ubuntu');
INSERT INTO `experiences` VALUES (7, 'Ad Platform Manager', 'Jobs', 'BlueSeed Digital', '', '', '2015-06-01', '2017-05-31', 'Develop CRM for sale with 100 users, use SugarCRM ENT\r\nCollect raw data from 300 website clients with 15 million requests/day\r\nCrawler data from 300 website clients\r\nBuilt Data Manager Platform that store and analyst data. After integrate with Ad Server (Epom) - a big data platform\r\nFramework: Hadoop, Hive, Elasticsearch, Kibana, Fluentd, Spark, Nginx\r\nLanguage: Scala, Python, JS, PHP\r\nLinux: Centos, Ubuntu');
INSERT INTO `experiences` VALUES (8, 'Technical Manager', 'Jobs', 'UP5 TECH Co, Ltd', 'http://up5.vn/', 'Ho Chi Minh Cty', '2017-07-01', NULL, 'Custom CRM and Website for clients\r\nOutsourcing\r\nBuild Avoca Platform to provide services for small business\r\nBuild houze.vn that a Real Estate sites\r\nBuild marketing tool that integrate with social networking (Facebook Ads, Google Ads,...)\r\nFramework: Sugar CRM, Vtiger CRM, Meteor, React, React Native, Vue JS, Angular JS, Angular, Express JS\r\nLanguage: PHP-MySQL, JS, Mongodb, Python, Java \r\nLinux: Centos, Ubuntu');
INSERT INTO `experiences` VALUES (9, 'Blockchain Engineer', 'Jobs', 'The Myubi Foundation Limited', 'https://themyubifoundation.com/', 'Ho Chi Minh Cty', '2017-07-01', NULL, 'Built Myubi App (Android & iOS) that a Cryptocurrency wallet app allow users:\r\nBuilt API manage Crytocurrency from Ethereum system\r\nManage Crytocurrency\r\nSend/Receive Crytocurrency\r\nConvert Crytocurrency to currency\r\nFramework: Android SDK, iOS SDK, React Native, Express-Mongodb\r\nLanguage: Java, Swift, JS');
INSERT INTO `experiences` VALUES (10, 'Farmer', 'Jobs', 'Hana\'s Secret Garden', 'https://www.facebook.com/hanassecretgarden', 'Ben Tre', '2018-07-01', NULL, 'Land reclamation throught natural methods\r\nStart with the land of Ben Tre province\r\nExtended the model to Vung Tau and Dong Nai provinces');

-- ----------------------------
-- Table structure for pages
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages`  (
  `id` int(11) NULL DEFAULT NULL,
  `date_created` datetime(0) NULL DEFAULT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `slug` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `meta_keyword` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for portfoliocats
-- ----------------------------
DROP TABLE IF EXISTS `portfoliocats`;
CREATE TABLE `portfoliocats`  (
  `id` int(11) NULL DEFAULT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of portfoliocats
-- ----------------------------
INSERT INTO `portfoliocats` VALUES (1, 'PHP');
INSERT INTO `portfoliocats` VALUES (2, 'Java');
INSERT INTO `portfoliocats` VALUES (3, 'Python');
INSERT INTO `portfoliocats` VALUES (4, 'Mobile');
INSERT INTO `portfoliocats` VALUES (5, 'Javascript');
INSERT INTO `portfoliocats` VALUES (6, 'BlockChain');

-- ----------------------------
-- Table structure for portfolios
-- ----------------------------
DROP TABLE IF EXISTS `portfolios`;
CREATE TABLE `portfolios`  (
  `id` int(11) NULL DEFAULT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `source_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `category` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `times` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `date_start` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `date_end` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of portfolios
-- ----------------------------
INSERT INTO `portfolios` VALUES (1, 'HanaPlatform', '4.jpg', 'http://localhost:3000/admin/portfolios/create', 'http://localhost:3000/admin/portfolios/create', '[\"5\"]', '1 year', '', '', 'The below is the LDAP information. Please see if we can adjust the php code to the following setting, so we can deploy and test in Jim environment, and then if that is working we can start working on integrating this code to AVMP2');
INSERT INTO `portfolios` VALUES (2, 'Hana Profile', '4.jpg', 'http://localhost:3000/admin/portfolios/create', 'http://localhost:3000/admin/portfolios/create', '[\"1\",\"3\"]', '1 year', '', '', 'In case you need to handle a text-only multipart form, you should use the .none() method:');
INSERT INTO `portfolios` VALUES (3, 'Hana HRM', '4.jpg', 'http://localhost:3000/admin/portfolios/create', 'http://localhost:3000/admin/portfolios/create', '[\"1\",\"2\",\"3\",\"4\",\"5\"]', '1 year', '', '', 'originalname');
INSERT INTO `portfolios` VALUES (4, 'Avoca', '4.jpg', 'http://localhost:3000/admin/portfolios/create', 'http://localhost:3000/admin/portfolios/create', '[\"1\",\"5\"]', '1 year', '', '', 'originalname');
INSERT INTO `portfolios` VALUES (5, 'Design', '4.jpg', 'http://localhost:3000/admin/portfolios/create', 'http://localhost:3000/admin/portfolios/create', '[\"5\",\"6\"]', '1 year', '', '', 'file.originalname');

-- ----------------------------
-- Table structure for profile
-- ----------------------------
DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile`  (
  `id` int(11) NULL DEFAULT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `full_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `avatar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `cover` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `phone_alt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `email_alt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `social` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `summary` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `foot_message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of profile
-- ----------------------------
INSERT INTO `profile` VALUES (1, 'Jacky Tran', 'Tran Dinh Hung', 'jacky_avatar.jpg', 'jacky_cover.jpg', '+84 972014011 (0972014011)', '', 'tdhungit@gmail.com', 'hungtran@up5.vn', '[\"Developer\",\"CRM Expert\",\"Blockchain Engineer\",\"Farmer\"]', '[{\"social\":\"facebook\",\"link\":\"https://www.facebook.com/jackytran0101\"},{\"social\":\"linkedin\",\"link\":\"https://www.linkedin.com/in/jacky-tran-3b0a1018/\"},{\"social\":\"github\",\"link\":\"https://github.com/tdhungit\"}]', 'I am Jacky, a key role in the core development team at Myubi as Blockchain Engineer, I am also Co-founder and Technical Manager at UP5 Tech.', 'I was born and grew up in Ba Ria - Vung Tau province of VietNam.\r\nSince from 2005 - 2009 i leave hometown to Ho Chi Minh City and studied at Ho Chi Minh City University of Science.\r\nSince 2006 i began work part time some jobs and started full time at 2008. Therefrom, i worked for 5 companies with different projects.\r\nMost of my projects are about CRM with many industries. I have many experience about performance and big data, too.\r\nI want to work with community projects so i and Bill/Helen founded UP5 TECH company to get that wish. With UP5 we will do some open source projects provide business service for startup company.\r\nI like to read many books, i like books of Fukuoka and Kimura. These books provide knowledge to live with natural.', 'I have a degree in Computer Science and Mathematics and plays a key role in the core development team at Myubi as Blockchain Engineer. I am responsible for front-end and back-end development and IT infrastructure management at Myubi. An enthusiastic and active member of CIO and IT Leader groups in Vietnam, he is also Co-founder and Technical Manager at UP5 Tech.', '112 Dinh Tien Hoang, Dakao ward, District 1, Ho Chi Minh City, Vietnam');

-- ----------------------------
-- Table structure for settings
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings`  (
  `id` int(11) NULL DEFAULT NULL,
  `category` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES (1, 'system', 'title', 'Hana');
INSERT INTO `settings` VALUES (2, 'system', 'theme', 'avoca');
INSERT INTO `settings` VALUES (3, 'system', 'cover_color', '#333333');

-- ----------------------------
-- Table structure for skills
-- ----------------------------
DROP TABLE IF EXISTS `skills`;
CREATE TABLE `skills`  (
  `id` int(11) NULL DEFAULT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `icon` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `weight` int(11) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of skills
-- ----------------------------
INSERT INTO `skills` VALUES (1, 'PHP-MySQL', 'fab fa-php', 'with 10 years working PHP and MySQL, i believed i am PHP expert', 0);
INSERT INTO `skills` VALUES (2, 'NodeJS', 'fab fa-node', 'I like JS, i working with React, Angular, Vue and Express, Meteor for back-end', 0);
INSERT INTO `skills` VALUES (3, 'MongoDB', 'fas fa-database', 'I working with NodeJS so i choose Mongodb to do your database', 0);
INSERT INTO `skills` VALUES (4, 'BlockChain', 'fas fa-database', 'I am BlockChain Engineer too, i am core team for Myubi wallet project', 0);
INSERT INTO `skills` VALUES (5, 'High Performance', 'fas fa-shipping-fast', '5 years for VNG, worked with many high performance project', 0);
INSERT INTO `skills` VALUES (6, 'Big Data', 'fas fa-cloud', 'I Built systems that tracking and analytic user data for Ads Company', 0);
INSERT INTO `skills` VALUES (7, 'CRM', 'fas fa-users', 'Almost my project in 7 years is CRM system', 0);

-- ----------------------------
-- Table structure for sqlite_sequence
-- ----------------------------
DROP TABLE IF EXISTS `sqlite_sequence`;
CREATE TABLE `sqlite_sequence`  (
  `name` blob NULL,
  `seq` blob NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of sqlite_sequence
-- ----------------------------
INSERT INTO `sqlite_sequence` VALUES (0x706F7274666F6C696F63617473, 0x36);
INSERT INTO `sqlite_sequence` VALUES (0x626C6F6763617473, 0x32);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NULL DEFAULT NULL,
  `date_created` datetime(0) NULL DEFAULT NULL,
  `username` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `is_admin` int(11) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, '0000-00-00 00:00:00', 'jacky', '202cb962ac59075b964b07152d234b70', 1);

SET FOREIGN_KEY_CHECKS = 1;
