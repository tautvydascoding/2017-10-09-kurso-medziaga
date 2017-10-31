

use hospital10;

CREATE TABLE images (
   id INT(6) AUTO_INCREMENT PRIMARY KEY,
   name varchar(25),
   patient_id INT(6)
   );

SHOW tables;


INSERT INTO images  VALUES('', 'foto1.jpg', 1);
INSERT INTO images  VALUES('', '2.jpg', 2);
INSERT INTO images  VALUES('', '33.gif', 1);

SELECT * FROM images;

INSERT INTO doctors VALUES (5, "Pietkus", "Leo");
INSERT INTO doctors VALUES (6, "Markas", "Mantis");
SELECT * FROM doctors;

INSERT INTO patients VALUES (7, "Rokas", "Juodas", 1);
INSERT INTO patients VALUES (8, "Tim", "Raudonas", 5);
INSERT INTO patients VALUES (9, "Tom", "Baltas", 6);



CREATE DATABASE `savaite4`;
use savaite4;
CREATE TABLE `users` (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(25),
    pass VARCHAR(255),
    email VARCHAR(70),
    rights VARCHAR(25)
);
// pasitikrinti
show tables;
CREATE TABLE articles (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    content TEXT,
    date DATE,
    user_id INT(6)
);


INSERT INTO articles VALUES (
'',
 "Ona isejo is darbo ir jos ",
 "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
 NOW(),
 2
 );

 UPDATE articles SET date=NOW()  WHERE id=1 ;

 INSERT INTO users VALUES (
    '',
    'tom',
    'dragon',
    "tom@gmail.com",
    'admin'
 );
 INSERT INTO users VALUES (
    '',
    'barbara',
    'love',
    "bbbb@gmail.com",
    'moderator'
 );
 INSERT INTO users VALUES (
    '',
    'Jurgis',
    'slaptazodis',
    "as@gmail.com",
    'subscriber'
 );



//
