DROP DATABASE IF EXISTS TABIQUERA;
CREATE DATABASE IF NOT EXISTS TABIQUERA;
USE TABIQUERA;
CREATE TABLE USUARIOT 
(
	ID INT PRIMARY KEY AUTO_INCREMENT,
	NOMBRE VARCHAR(50) NOT NULL,
    APELLIDO VARCHAR(50) NOT NULL,
    NOMBRE_USUARIO VARCHAR(50) NOT NULL,
    CONTRASEÑA VARCHAR(100) NOT NULL
);

CREATE TABLE SEMANA
(
	ID INT PRIMARY KEY AUTO_INCREMENT,
    NO_BULTOS INT NOT NULL,
    NO_TABLAS INT NOT NULL,
    ID_USUARIOT INT NOT NULL,
    PAGO DECIMAL(4,2) NOT NULL,
    CONSTRAINT ID_USUARIOT FOREIGN KEY (ID_USUARIOT) REFERENCES USUARIOT(ID)
);

CREATE TABLE BLOQUE
(
    TIPO INT PRIMARY KEY,
    CANTIDAD INT NOT NULL,
    PRECIO DECIMAL(2,2) NOT NULL
);

insert into USUARIOT VALUE (null,'ADMIN','ADMIN','ADMIN','ADMIN');