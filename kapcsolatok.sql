CREATE DATABASE `kapcsolatok`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE kapcsolatok;

CREATE TABLE uzenetek (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nev VARCHAR(100),
  email VARCHAR(100),
  uzenet TEXT,
  kuldesi_idő TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


