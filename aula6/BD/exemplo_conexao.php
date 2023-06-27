<?php

class SQLiteConnection {
    private static $pdo;

    public static function connect($database) {
        try {
            self::$pdo = new PDO("sqlite:$database");
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage()); // alias para exit()
        }
    }

    public static function createTable() {
        $sql = "CREATE TABLE IF NOT EXISTS users (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            name TEXT,
            email TEXT
        )";

        self::$pdo->exec($sql);
    }

    public static function query($sql) {
        $stmt = self::$pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

// Utilizando os métodos estáticos
SQLiteConnection::connect('database.sqlite');
SQLiteConnection::createTable();

$results = SQLiteConnection::query("SELECT * FROM users");
foreach ($results as $row) {
    echo $row['name'] . "<br>";
}

