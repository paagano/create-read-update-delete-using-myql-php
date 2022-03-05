DROP DATABASE IF EXISTS testDB;

CREATE DATABASE testDB;

USE testDB;


CREATE TABLE Customers (
  CustomerID INT(6) AUTO_INCREMENT PRIMARY KEY,
  FirstName VARCHAR(200) NOT NULL,
  LastName VARCHAR(200) NOT NULL,
  Email VARCHAR(200) NOT NULL
);


INSERT INTO customers 
(FirstName, LastName, Email) 
VALUES ('Jayson', 'Bourne', 'jayson@gmail.com'),
('Alicia','Keys','ally@gmail.com'),
('Dwayne', 'Johnson', 'dwayne@gmail.com'),
('Spencer','James', 'spencer@gmail.com'),
('Mariah','Carey', 'maria@gmail.com'),
('Alex', 'Johnson', 'alex@gmail.com'),
('Aisha','Mohammed', 'aisha.moha@gmail.com'),
("Maggi","Domney","mdomney0@wisdompets.com"),
("Javier","Dawks","jdawks1@red30design.com"),
("Aleen","Fasey","afasey2@kinetecoinc.com"),
("Taylor","Jenkins","tjenkins@rouxacademy.org"),
("Imogen","Kabsch","ikabsch@landonhotel.com"),
("Dunc","Winny","dwinny5@kinetecoinc.com"),
("Cammi","Kynett","ckynett6@orangevalleycaa.org"),
("Steffie","Kleis","skleis7@wisdompets.com"),
("Carilyn","Calver","ccalver8@samoca.org"),
("Barbara-anne","Sweet","bsweet9@samoca.org");

