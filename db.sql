CREATE TABLE `haris`.`posts` 
( 
    `post_id` INT NOT NULL AUTO_INCREMENT ,
    `post_title` VARCHAR(255) NOT NULL ,
    `post_category` VARCHAR(255) NOT NULL , 
    `post_tags` VARCHAR(255) NOT NULL , 
    `post_details` TEXT NOT NULL , 
    `post_picture` VARCHAR(255) NOT NULL , 
    `post_date` date NOT NULL , 
    PRIMARY KEY (`post_id`)
) 
    ENGINE = InnoDB;