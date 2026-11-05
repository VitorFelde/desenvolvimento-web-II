CREATE TABLE categoria (
    id int AUTO_INCREMENT NOT NULL,
    cat varchar(50) NOT NULL,
    CONSTRAINT categ PRIMARY KEY (id)
);


INSERT INTO categoria (cat) VALUES ("Peso-Mosca");
INSERT INTO categoria (cat) VALUES ("Peso-Leve");
INSERT INTO categoria (cat) VALUES ("Peso-Meio Pesado");
INSERT INTO categoria (cat) VALUES ("Peso-Pesado");

CREATE TABLE estilo (
    id int AUTO_INCREMENT NOT NULL,
    est varchar(50) NOT NULL,
    CONSTRAINT gene PRIMARY KEY (id)
);

INSERT INTO estilo (est) VALUES ("Jiu-Jitsu");
INSERT INTO estilo (est) VALUES ("Kickboxing");
INSERT INTO estilo (est) VALUES ("Wrestling");
INSERT INTO estilo (est) VALUES ("Muay-Thai");
INSERT INTO estilo (est) VALUES ("Judo");

CREATE TABLE lutador (
    id int AUTO_INCREMENT NOT NULL,
    nome varchar(100) NOT NULL,
    apelido varchar(100) NOT NULL,
    titulo varchar(1) NOT NULL,
    id_estilo int NOT NULL,
    id_categoria int NOT NULL,
    CONSTRAINT lutad PRIMARY KEY (id)
);