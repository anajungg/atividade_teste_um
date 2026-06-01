CREATE DATABASE sistema_simples_ANA;

USE sistema_simples_ANA;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR (255) NOT NULL, 
    senha VARCHAR (255) NOT NULL
);

INSERT INTO usuarios (usuario,senha) VALUE ('admin','123');

-- CREATE DATABASE- cria um banco de dados.
-- USE- seleciona qual banco será usado.
-- CREATE TABLE- cria uma tabela.
-- INT- tipo numérico inteiro.
-- AUTO_INCREMENT-  aumenta automaticamente o valor do ID.
-- PRIMARY KEY-  identifica cada registro de forma única.
-- VARCHAR(255)- armazena textos de até 255 caracteres.
-- NOT NULL- o campo é obrigatório.
-- INSERT INTO  insere dados na tabela.
