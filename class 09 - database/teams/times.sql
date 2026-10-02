CREATE TABLE times (
    id INTEGER NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    cidade VARCHAR(50) NOT NULL,
    CONSTRAINT pk_times PRIMARY KEY (id)
);

INSERT INTO times (nome, cidade) VALUES ('Santos', 'Santos');
INSERT INTO times (nome, cidade) VALUES ('Botafogo', 'Rio de Janeiro');