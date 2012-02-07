DROP TABLE IF EXISTS `y3klms_vidyav`.`y3klms_ci_sessions`;
CREATE TABLE IF NOT EXISTS `y3klms_vidyav`.`y3klms_ci_sessions`
(
`session_id` varchar(40) DEFAULT '0' NOT NULL,
`ip_address` varchar(16) DEFAULT '0' NOT NULL,
`user_agent` varchar(120) NOT NULL,
`last_activity` int(10) unsigned DEFAULT 0 NOT NULL,
`user_data` text NULL,
PRIMARY KEY (`session_id`),
KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS `y3klms_vidyav`.`y3klms_users`;
CREATE TABLE IF NOT EXISTS `y3klms_vidyav`.`y3klms_users` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(40) COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `password` varchar(100) COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `salt` varchar(6) COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `group_id` int(11) DEFAULT NULL,
  `ip_address` varchar(16) COLLATE utf8_general_ci DEFAULT NULL,
  `active` int(1) DEFAULT NULL,
  `activation_code` varchar(40) COLLATE utf8_general_ci DEFAULT NULL,
  `created_on` int(11) NOT NULL,
  `last_login` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_general_ci DEFAULT NULL,
  `forgotten_password_code` varchar(40) COLLATE utf8_general_ci DEFAULT NULL,
  `remember_code` varchar(40) COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS `y3klms_vidyav`.`y3klms_groups`;
CREATE TABLE IF NOT EXISTS `y3klms_vidyav`.`y3klms_groups`(
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_general_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO  `y3klms_vidyav`.`y3klms_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrators'),
(2, 'staff', 'Staff'),
(3, 'teacher', 'Teachers'),
(4, 'student', 'Students'),
(5, 'parent', 'Parents');

DROP TABLE IF EXISTS `y3klms_vidyav`.`y3klms_profiles`;
CREATE TABLE IF NOT EXISTS `y3klms_vidyav`.`y3klms_profiles` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `display_name` varchar(50) COLLATE utf8_general_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8_general_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_general_ci NOT NULL,
  `company` varchar(100) COLLATE utf8_general_ci DEFAULT NULL,
  `lang` varchar(2) COLLATE utf8_general_ci NOT NULL DEFAULT 'en',
  `bio` text COLLATE utf8_general_ci,
  `dob` int(11) DEFAULT NULL,
  `gender` set('m','f','') COLLATE utf8_general_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_general_ci DEFAULT NULL,
  `mobile` varchar(20) COLLATE utf8_general_ci DEFAULT NULL,
  `address_line1` varchar(255) COLLATE utf8_general_ci DEFAULT NULL,
  `address_line2` varchar(255) COLLATE utf8_general_ci DEFAULT NULL,
  `address_line3` varchar(255) COLLATE utf8_general_ci DEFAULT NULL,
  `postcode` varchar(20) COLLATE utf8_general_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_general_ci DEFAULT NULL,
  `updated_on` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ;
