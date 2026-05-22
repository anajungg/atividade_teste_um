CREATE DATABASE sistema_simples_ANA;

USE sistema_simples_ANA;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR (255) NOT NULL, 
    senha VARCHAR (255) NOT NULL
);

INSERT INTO usuarios (usuario,senha) VALUE ('admin','123');
