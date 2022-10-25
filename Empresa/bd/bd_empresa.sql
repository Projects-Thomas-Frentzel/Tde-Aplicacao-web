SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE Cliente (
    Id_cliente INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Nome VARCHAR(100) NOT NULL,
    Data_nasc DEFAULT NOT NULL,
    Nacionalidade VARCHAR(30) NOT NULL,
    Telefone CHAR(11) NOT NULL,
    ID_pais INT(11) FOREIGN KEY REFERENCES Pais(Id_pais)NOT NULL,
    Foto mediumblob DEFAULT NULL
    UNIQUE (Id_cliente, ID_pais)
);

INSERT INTO Cliente (Id_Cliente, Nome,Data_nasc,Nacionalidade,Telefone,ID_pais,Foto)
VALUES (10101564321,'Euclides', '2001-09-07', 'Brasieliro', 11111111111,22121233232);

INSERT INTO Cliente (Id_Cliente,Nome,Data_nasc,Nacionalidade,Telefone,ID_pais,Foto) 
VALUES (10101010018,'Katra', '2018-09-09','Paraguaio', 12018098894,22123434343);

INSERT INTO Cliente (Id_Cliente,noNome,Data_nasc,Nacionalidade,Telefone,ID_pais,Foto)
VALUES (28757345939,'Orwell', '1984-01-01','Alemao', 93143212605,23212312231);

INSERT INTO Cliente (Id_Cliente,Nome,Data_nasc,Nacionalidade,Telefone,ID_pais,Foto)
VALUES (73567373247,'Bismarkinho', '1914-07-28', 'Argentino', 9568979954,12213121323);

INSERT INTO Cliente (Id_Cliente,Nome,Data_nasc,Nacionalidade,Telefone,ID_pais,Foto)
VALUES (86200601218,'Kenedi', '1963-11-23','Iraniano', 94329153814,21212112212);

INSERT INTO Cliente (Id_Cliente,Nome,Data_nasc,Nacionalidade,Telefone,ID_pais,Foto)
VALUES (29634601228,'Julio', '1968-07-30','Sirio', 9354213198,27873282378,27873282378);
  
INSERT INTO Cliente (Id_Cliente,Nome,Data_nasc,Nacionalidade,Telefone,ID_pais,Foto)
VALUES (34538940217,'Josue', '1930-08-25','Italiano', 93011239125,21221222332);

INSERT INTO Cliente (Id_Cliente,Nome,Data_nasc,Nacionalidade,Telefone,ID_pais,Foto)
VALUES (85672083137,'Elizabechy', '2022-09-08','Frances', 93235568902,26726762173);

INSERT INTO Cliente (Id_Cliente,Nome,Data_nasc,Nacionalidade,Telefone,ID_pais,Foto)
VALUES (75483929996,'Juca', '1955-11-01','Portugues', 93124799123,21212233933);
  
INSERT INTO Cliente (Id_Cliente,Nome,Data_nasc,Nacionalidade,Telefone,ID_pais,Foto)
VALUES (88888444435,'Cleitinho', '2000-12-25','Canadense', 99999999998,23232323232);


CREATE TABLE Pais (
 
    ID_pais INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome_Pais VARCHAR(100)NOT NULL,
    UNIQUE (ID_pais)

);

 INSERT INTO Pais (ID_pais,nomePais)
VALUES(22121233232,'Brasil');

 INSERT INTO Pais (ID_pais,nomePais)
VALUES(22123434343,'Paraguai');

 INSERT INTO Pais (ID_pais,nomePais)
VALUES(23212312231,'Alemanha');

 INSERT INTO tbPais (ID_pais,nomePais)
VALUES(12213121323,'Argentina');

 INSERT INTO Pais (ID_pais,nomePais)
VALUES(21212112212,'Ira');

 INSERT INTO tbPais (ID_pais,nomePais)
VALUES(27873282378,'Siria');

 INSERT INTO tbPais (ID_pais,nomePais)
VALUES(21221222332,'Italia');

 INSERT INTO Pais (ID_pais,nomePais)
VALUES(26726762173,'Franca');

 INSERT INTO Pais (ID_pais,nomePais)
VALUES(21212233933,'Portugal');

 INSERT INTO Pais (ID_pais,nomePais)
VALUES(23232323232,'Canada');
