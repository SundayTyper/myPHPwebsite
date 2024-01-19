CREATE TABLE `php-app`.`passwords` (`user` VARCHAR(25) NOT NULL , `password` VARCHAR(255) NOT NULL , `time_visited` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ) ENGINE = InnoDB;


INSERT INTO `passwords` (`user`, `password_hash`, `time_visited`) VALUES ('Durin', '$2y$10$/VUrkKp14OSZ7u56UPIZGOObjVyLNQwD2bpbrGbvRHJBZb8S1xHDy', DATE('2014-01-01 12:23:55'));