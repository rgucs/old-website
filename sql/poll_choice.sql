CREATE TABLE `poll_choice` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `poll_id` int(11) unsigned NOT NULL,
  `choice` text NOT NULL,
  `image` char(24) DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `fk_poll_choice` (`poll_id`),
  CONSTRAINT `fk_poll_choice` FOREIGN KEY (`poll_id`) REFERENCES `poll` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
