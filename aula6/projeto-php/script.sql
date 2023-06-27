CREATE TABLE IF NOT EXISTS cursos(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    versao_ferramenta VARCHARACTER(30),
    nome VARCHARACTER(100),
    carga_horaria INTEGER,
    status INTEGER
);

INSERT INTO cursos (nome, versao_ferramenta, carga_horaria, status) VALUES
('Curso de PHP Fundamentos', '8.2', 16, 1),
('Curso de Java Fundamentos', '19', 30, 1),
('Curso de C# Fundamentos', '8', 20, 1),
('Curso de JS Fundamentos', 'ECMA-262', 16, 1)