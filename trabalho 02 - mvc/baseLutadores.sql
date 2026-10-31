CREATE TABLE categoria (
    id int AUTO_INCREMENT NOT NULL,
    cat varchar(50) NOT NULL
);

INSERT INTO categoria (cat) VALUES ("Peso-Mosca");
INSERT INTO categoria (cat) VALUES ("Peso-Leve");
INSERT INTO categoria (cat) VALUES ("Peso-Meio Pesado");
INSERT INTO categoria (cat) VALUES ("Peso-Pesado");

CREATE TABLE genero (
    id int AUTO_INCREMENT NOT NULL,
    gen varchar(10) NOT NULL
);

INSERT INTO genero (gen) VALUES ("Masculino");
INSERT INTO genero (gen) VALUES ("Feminino");

CREATE TABLE lutador (
    id int AUTO_INCREMENT NOT NULL,
    nome varchar(100) NOT NULL,
    apelido varchar(100) NOT NULL,
    titulo varchar(1) NOT NULL,
    id_genero int NOT NULL,
    id_cat int NOT NULL
);