reate database Kgames

CREATE TABLE Usuario  (
  Codigo int(11) NOT NULL,
  Nombre varchar(255) NOT NULL,
  Apellido varchar(255) NOT NULL,
  Email varchar(255) NOT NULL,
  Activo boolean NOT NULL
);

ALTER TABLE Usuario
 ADD PRIMARY KEY (Codigo);
 
ALTER TABLE Usuario
 MODIFY Codigo INT(11) NOT NULL AUTO_INCREMENT;

CREATE TABLE Tema  (
  Codigo int(11) PRIMARY KEY AUTO_INCREMENT,
  Descripcion varchar(255) NOT NULL,
  Vigente boolean NOT NULL,
  CodUsuario int NOT NULL
)

ALTER TABLE Tema
ADD FOREIGN KEY R_1 (CodUsuario) REFERENCES Usuario (Codigo);

CREATE TABLE Juego  (
  Codigo int(11) PRIMARY KEY AUTO_INCREMENT,
  Titulo varchar(255) NOT NULL,
  Tipo int NOT NULL,
  Tiempo int NULL,
  CodTema int NOT NULL,
  Fecha datetime NOT NULL,
  palabra varchar(255) NULL,
  Privado boolean NOT NULL,
  Vigente boolean NOT NULL
);

ALTER TABLE Juego
ADD FOREIGN KEY R_3 (CodTema) REFERENCES Tema (Codigo);

INSERT INTO Usuario (Nombre, Apellido, Email, Activo) values ("Pedro", "Lopez", "pedrito@gmail.com", 1);

INSERT INTO Tema (Descripcion, Activo, CodUsuario) values ("Informática", 1, 2);
INSERT INTO Tema (Descripcion, Activo, CodUsuario) values ("Incas", 1, 2);
INSERT INTO Tema (Descripcion, Activo, CodUsuario) values ("Elementos químicos", 1, 2);
INSERT INTO Tema (Descripcion, Activo, CodUsuario) values ("Partes del cuerpo", 1, 2);