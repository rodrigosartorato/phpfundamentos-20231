/* Cria tabela users em SQLite */
CREATE TABLE IF NOT EXISTS users (
   id INTEGER PRIMARY KEY AUTOINCREMENT,
   name TEXT,
   email TEXT
);        

/* Cria tabela users em MS SQLServer */
CREATE TABLE users (
   id INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
   name VARCHAR(255),
   email VARCHAR(255)
);


/* Cria tabela users em MySQL */
CREATE TABLE IF NOT EXISTS users (
   id INT AUTO_INCREMENT PRIMARY KEY,
   name VARCHAR(255) NOT NULL,
   email VARCHAR(255)
);

/* Inserindo dados na tabela */
INSERT INTO users (name, email) values ('Maria', 'maria@email.com');
INSERT INTO users (name, email) values ('João', 'joao@email.com');
INSERT INTO users (name, email) values ('Pedro', 'pedro@email.com');