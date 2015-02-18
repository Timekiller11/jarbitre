
CREATE TABLE `#__jarbitre_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `asset_id` INT(10) NOT NULL DEFAULT '0',
  `question` varchar(255) NOT NULL DEFAULT '',
  `A` varchar(255) NOT NULL DEFAULT '',
  `B` varchar(255) NOT NULL DEFAULT '',
  `C` varchar(255) NOT NULL DEFAULT '',
  `D` varchar(255) NOT NULL DEFAULT '',
  `catid` int(11) NOT NULL DEFAULT '0',
  `params` TEXT NOT NULL DEFAULT '',
   PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;