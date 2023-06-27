<?php

try {
    // Conectando com o SQLite
    $conexao = new PDO('sqlite:bancoPHP.db');
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $conexao->beginTransaction();

    $conexao->query("INSERT INTO users (name, email) VALUES ('Maria', 'angela@email.com')");
    $conexao->query("UPDATE userss SET name = 'Maria Silva' WHERE email='angela@email.com'");

    $conexao->commit();

    echo 'Usuário inserido com sucesso: ' . $conexao->lastInsertId();
    
} catch (\PDOException $e) {
    $conexao->rollBack();
    echo "Mensagem: {$e->getMessage()}";
    echo "<br>Código: {$e->getCode()}";
}

