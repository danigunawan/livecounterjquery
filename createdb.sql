CREATE DATABASE test_counter;

use test_counter;

CREATE TABLE counter (
	currentvalue int (30) NOT NULL
);

INSERT INTO counter (currentvalue) VALUES (0);

CREATE TABLE users (
	id int (30) NOT NULL AUTO_INCREMENT,
    name varchar(30) NOT NULL,
    PRIMARY KEY (id)

);

INSERT INTO users (name) VALUES ('Joe Strummer');
INSERT INTO users (name) VALUES ('Joey Ramone');