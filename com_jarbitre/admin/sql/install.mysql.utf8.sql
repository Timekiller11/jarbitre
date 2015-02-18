DROP TABLE IF EXISTS `#__jarbitre`;
DROP TABLE IF EXISTS `#__jarbitre_questions`;

CREATE TABLE `#__jarbitre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `asset_id` INT(10) NOT NULL DEFAULT '0',
  `usernames` varchar(25) NOT NULL,
  `catid` int(11) NOT NULL DEFAULT '0',
  `params` TEXT NOT NULL DEFAULT '',
   PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

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
 
INSERT INTO `#__jarbitre` (`usernames`) VALUES
	('Real Name'),
	('Initials'),
	('Nickname');


INSERT INTO `#__jarbitre_questions` (`question`, `A`, `B`, `C`, `D`) VALUES
	('Question 1', 'Bonne réponse', 'B', 'C', 'D'),
	('Question 2', 'Bonne réponse', 'B', 'C', 'D'),
	('Question 4', 'Bonne réponse', 'B', 'C', 'D'),
	('Question 5', 'Bonne réponse', 'B', 'C', 'D'),
	('Question 6', 'Bonne réponse', 'B', 'C', 'D'),
	('Question 7', 'Bonne réponse', 'B', 'C', 'D');