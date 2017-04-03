
CREATE TABLE `tags` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL UNIQUE,
	PRIMARY KEY (`id`)
);

CREATE TABLE users
(
  id INT unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
  username VARCHAR(50),
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255),
  role VARCHAR(20),
  created DATETIME,
  modified DATETIME
);



CREATE TABLE `users_tags` (
	`id` int NOT NULL AUTO_INCREMENT,
	`user_id` int NOT NULL,
	`tag_id` int NOT NULL,
	`metatag` varchar(255),
	`level` int(1),
	`community_id` INT,
	PRIMARY KEY (`id`)
);

CREATE TABLE `communities` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	`story` TEXT,
	PRIMARY KEY (`id`)
);
