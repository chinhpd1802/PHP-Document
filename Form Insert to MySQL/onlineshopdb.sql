CREATE DATABASE onlineshopdb;

USE onlineshopdb;

CREATE TABLE `user`
(
    userid  mediumint(6) unsigned not null AUTO_INCREMENT PRIMARY KEY,
    first_name varchar(30) not null,
    last_name varchar(30) not null,
    email varchar(40) not null,
    passwords varchar(70) not null,
    registration_date datetime not null,
    user_level tinyint(1) not null
    ) ENGINE = INNODB DEFAULT charset = utf8;
INSERT into  `user`( userid, first_name, last_name, email, passwords, registration_date, user_level)
VALUES (1, 'A', 'Nguyen Van', 'a@123', '123434', '2019-09-20', 1);