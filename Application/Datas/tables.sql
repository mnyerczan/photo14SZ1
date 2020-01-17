CREATE TABLE `photos` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL default CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL default CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*
 * A parancs, amivel be lehet includolni a photoDatas.txt forrást.
 */
load data local infile
'/var/www/html/School/web-project-1/Application/Database/photosDatas.txt' into table `photos`
character set utf8
fields terminated by '\t'
optionally enclosed by '"'
lines terminated by "\n";