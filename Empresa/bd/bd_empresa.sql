SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE Cliente (
    Id_cliente INT(11) PRIMARY KEY NOT NULL,
    Nome VARCHAR(100) NOT NULL,
    Data_nasc DATE NOT NULL,
    ID_pais INT(11) FOREIGN KEY REFERENCES Pais(ID_Pais)NOT NULL,
);

INSERT INTO Cliente (ID_Cliente,Nome,Data_nasc,ID_Pais)
VALUES (1,'Euclides', '2001-09-07',111);

INSERT INTO Cliente (ID_Cliente,Nome,Data_nasc,ID_Pais) 
VALUES (2,'Katra', '2018-09-09',222);

INSERT INTO Cliente (ID_Cliente,Nome,Data_nasc,ID_Pais)
VALUES (3,'Orwell', '1984-01-01'333);

INSERT INTO Cliente (ID_Cliente,Nome,Data_nasc,ID_Pais)
VALUES (4,'Bismarkinho', '1914-07-28',444);

INSERT INTO Cliente (ID_Cliente,Nome,Data_nasc,ID_Pais)
VALUES (5,'Kenedi', '1963-11-23',555);

INSERT INTO Cliente (ID_Cliente,Nome,Data_nasc,ID_Pais)
VALUES (6,'Julio', '1968-07-30',666);
  
INSERT INTO Cliente (ID_Cliente,Nome,Data_nasc,ID_Pais)
VALUES (7,'Josue', '1930-08-25',777);

INSERT INTO Cliente (ID_Cliente,Nome,Data_nasc,ID_Pais)
VALUES (8,'Elizabechy', '2022-09-08',888);

INSERT INTO Cliente (ID_Cliente,Nome,Data_nasc,ID_Pais)
VALUES (9,'Juca', '1955-11-01',999);
  
INSERT INTO Cliente (ID_Cliente,Nome,Data_nasc,ID_Pais)
VALUES (10,'Cleitinho', '2000-12-25',100);ª


CREATE TABLE Pais (
 
    ID_Pais INT(11) PRIMARY KEY NOT NULL,
    Nome_Pais VARCHAR(100)NOT NULL

);

 INSERT INTO Pais (ID_Pais,Nome_Pais)
VALUES(111,'Brasil');

 INSERT INTO Pais (ID_Pais,Nome_Pais)
VALUES(222,'Paraguai');

 INSERT INTO Pais (ID_Pais,Nome_Pais)
VALUES(333,'Alemanha');

 INSERT INTO tbPais (ID_Pais,Nome_Pais)
VALUES(444,'Argentina');

 INSERT INTO Pais (ID_Pais,Nome_Pais)
VALUES(555,'Ira');

 INSERT INTO tbPais (ID_pais,Nome_Pais)
VALUES(666,'Siria');

 INSERT INTO tbPais (ID_Pais,Nome_Pais)
VALUES(777,'Italia');

 INSERT INTO Pais (ID_Pais,Nome_Pais)
VALUES(888,'Franca');

 INSERT INTO Pais (ID_Pais,Nome_Pais)
VALUES(999,'Portugal');

 INSERT INTO Pais (ID_Pais,Nome_Pais)
 VALUES(100,'Canada');
