CREATE DATABASE ics104811;

CREATE TABLE users(
    id int AUTO_INCREMENT PRIMARY KEY,
    first_name varchar(32) NOT NULL,
    last_name varchar(32),
    user_city varchar(32)
 );
