<?php

class SQLiteConnection {
    private static $pdo;

    public static function connect($database) {
        try {
            self::$pdo = new PDO("sqlite:$database");
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
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

    public static function insertDemo() {
        $sql = "INSERT INTO users (name, email) values ('Fulando de tal', 'fdetal@com.com.br')";
        return self::$pdo->exec($sql);        
    }
}

