CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `conteudo` text NOT NULL,
  `usuario_id` int(11) NOT NULL,
   `deletado` tinyint(1) NOT NULL DEFAULT 2,
  PRIMARY KEY (`id`),
  KEY `fk_usuarioId` (`usuario_id`),
  CONSTRAINT `fk_usuarioId` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;