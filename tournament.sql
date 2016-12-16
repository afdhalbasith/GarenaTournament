CREATE DATABASE tournament;



CREATE TABLE IF NOT EXISTS `participant` (
  `id_participant` int(11) NOT NULL AUTO_INCREMENT,
  `teamname` varchar(15) NOT NULL,
  `name1` varchar(15) NOT NULL,
  `phone1` varchar(15) NOT NULL,
  `gender1` varchar(16) NOT NULL,
  `name2` varchar(15) NOT NULL,
  `phone2` varchar(15) NOT NULL,
  `gender2` varchar(16) NOT NULL,
  `username` varchar(15) NOT NULL,
  PRIMARY KEY (`id_participant`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;


CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;
