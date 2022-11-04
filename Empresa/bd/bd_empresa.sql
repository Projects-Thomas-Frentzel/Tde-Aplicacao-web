SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE Cliente (
    Id_cliente INT(11) PRIMARY KEY NOT NULL,
    Nome VARCHAR(100) NOT NULL,
    Data_nasc DATE NOT NULL,
    Nacionalidade VARCHAR(30) NOT NULL,
    Telefone CHAR(11) NOT NULL,
    ID_pais INT(11) FOREIGN KEY REFERENCES Pais(Id_pais)NOT NULL,
);

INSERT INTO Cliente (Id_cliente,Nome,Data_nasc,Nacionalidade,Telefone,ID_pais)
VALUES (1,'Euclides', '2001-09-07', 'Brasieliro', 11111111111,111);

INSERT INTO Cliente (Id_cliente,Nome,Data_nasc,Nacionalidade,Telefone,ID_pais) 
VALUES (2,'Katra', '2018-09-09','Paraguaio', 12018098894,222);

INSERT INTO Cliente (Id_cliente,Nome,Data_nasc,Nacionalidade,Telefone,ID_pais)
VALUES (3,'Orwell', '1984-01-01','Alemao', 93143212605,333);

INSERT INTO Cliente (Id_cliente,Nome,Data_nasc,Nacionalidade,Telefone,ID_pais)
VALUES (4,'Bismarkinho', '1914-07-28', 'Argentino', 9568979954,444);

INSERT INTO Cliente (Id_cliente,Nome,Data_nasc,Nacionalidade,Telefone,ID_pais)
VALUES (5,'Kenedi', '1963-11-23','Iraniano', 94329153814,555);

INSERT INTO Cliente (Id_cliente,Nome,Data_nasc,Nacionalidade,Telefone,ID_pais)
VALUES (6,'Julio', '1968-07-30','Sirio', 9354213198,666);
  
INSERT INTO Cliente (Id_cliente,Nome,Data_nasc,Nacionalidade,Telefone,ID_pais)
VALUES (7,'Josue', '1930-08-25','Italiano', 93011239125,777);

INSERT INTO Cliente (Id_cliente,Nome,Data_nasc,Nacionalidade,Telefone,ID_pais)
VALUES (8,'Elizabechy', '2022-09-08','Frances', 93235568902,888);

INSERT INTO Cliente (Id_cliente,Nome,Data_nasc,Nacionalidade,Telefone,ID_pais)
VALUES (9,'Juca', '1955-11-01','Portugues', 93124799123,999);
  
INSERT INTO Cliente (Id_cliente,Nome,Data_nasc,Nacionalidade,Telefone,ID_pais)
VALUES (10,'Cleitinho', '2000-12-25','Canadense', 99999999998,100);


CREATE TABLE Pais (
 
    ID_pais INT(11) PRIMARY KEY NOT NULL,
    nome_Pais VARCHAR(100)NOT NULL

);

 INSERT INTO Pais (ID_pais,nomePais)
VALUES(111,'Brasil');

 INSERT INTO Pais (ID_pais,nomePais)
VALUES(222,'Paraguai');

 INSERT INTO Pais (ID_pais,nomePais)
VALUES(333,'Alemanha');

 INSERT INTO tbPais (ID_pais,nomePais)
VALUES(444,'Argentina');

 INSERT INTO Pais (ID_pais,nomePais)
VALUES(555,'Ira');

 INSERT INTO tbPais (ID_pais,nomePais)
VALUES(666,'Siria');

 INSERT INTO tbPais (ID_pais,nomePais)
VALUES(777,'Italia');

 INSERT INTO Pais (ID_pais,nomePais)
VALUES(888,'Franca');

 INSERT INTO Pais (ID_pais,nomePais)
VALUES(999,'Portugal');

 INSERT INTO Pais (ID_pais,nomePais)
 VALUES(100,'Canada');
