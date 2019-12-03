CREATE TABLE `user` (
    `user_id` INT NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(225) NOT NULL,
    `password` VARCHAR(225) NOT NULL,
    PRIMARY KEY(`user_id`));
    
CREATE TABLE `journal_entries` (
    `user_id` INT NOT NULL,
    `entry_no` INT NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(225) NOT NULL,
    `content` VARCHAR(1500) NOT NULL,   
    PRIMARY KEY(`user_id`, `entry_no`),
    FOREIGN KEY(`user_id`) REFERENCES `user`(`user_id`));