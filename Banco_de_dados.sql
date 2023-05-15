CREATE TABLE pessoa (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT
);
CREATE TABLE projeto (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(250) NOT NULL,
    descricao VARCHAR(250) NOT NULL,
    data_inicial TIMESTAMP NOT NULL,
    data_fim TIMESTAMP NOT NULL
);
CREATE TABLE pessoa_projeto(
    id_pessoa INT NOT NULL,
    id_projeto INT NOT NULL,
    FOREIGN KEY (id_pessoa) REFERENCES pessoa(id),
    FOREIGN KEY (id_projeto) REFERENCES projeto(id)
);
CREATE TABLE diario (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT
);
CREATE TABLE horario_atendimento (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    data_ini TIMESTAMP NOT NULL,
    data_fim TIMESTAMP NOT NULL,
    horario_ini TIME NOT NULL,
    horario_fim TIME NOT NULL
);
CREATE TABLE diario_horario(
    id_diario INT NOT NULL,
    id_horario INT NOT NULL,
    FOREIGN KEY (id_diario) REFERENCES diario(id),
    FOREIGN KEY (id_horario) REFERENCES horario_atendimento(id)
);
CREATE TABLE projeto_horario(
    id_projeto INT NOT NULL,
    id_horario INT NOT NULL,
    FOREIGN KEY (id_projeto) REFERENCES projeto(id),
    FOREIGN KEY (id_horario) REFERENCES horario_atendimento(id)
);