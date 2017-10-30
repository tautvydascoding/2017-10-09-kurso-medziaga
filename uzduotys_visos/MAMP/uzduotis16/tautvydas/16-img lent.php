

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





//
