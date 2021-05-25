CREATE DATABASE bd_caes;


CREATE TABLE tb_cadastrocaes(
    id INT(11),
    nome VARCHAR(50),
    raca VARCHAR(50),
    idade_anos INT(11),
    idade_meses INT(11),
    sexo CHAR(50),
    nome_dono VARCHAR (50),
    hora_cadastro TIME,
    data_cadastro DATE,
    telefone VARCHAR(20),
    e-mail VARCHAR(100),
    cliente VARCHAR(3),
    observacoes TEXT
);