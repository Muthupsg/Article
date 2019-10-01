create database `article`;

use `article`;

CREATE TABLE `users` (
  `id` int(9) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,  
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB;

CREATE TABLE `articles` (
  `id` int(11) NOT NULL auto_increment,
  `genere` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `login_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  CONSTRAINT FK_products_1
  FOREIGN KEY (login_id) REFERENCES users(id)
  ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB;
