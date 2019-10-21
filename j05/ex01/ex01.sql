USE db_ratin;
CREATE TABLE `ft_table` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `login` varchar(30) NOT NULL DEFAULT 'toto',
 `group` enum('staff','student','other','') NOT NULL,
 `creation_date` date NOT NULL,
 PRIMARY KEY (`id`)
)
