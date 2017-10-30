

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



//
