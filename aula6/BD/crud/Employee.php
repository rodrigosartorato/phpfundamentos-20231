<?php
class Employee {
    private $db;

    public function __construct() {
        global $db;
        require_once 'config.php';
        $this->db = $db;
    }

    public function getAllEmployees() {
        $query = "CREATE TABLE IF NOT EXISTS employees (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            name TEXT,
            email TEXT
        );";
        $this->db->exec($query);
        
        $query = "SELECT * FROM employees";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function addEmployee($name, $email) {
        $query = "INSERT INTO employees (name, email) VALUES (:name, :email)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
    }

    public function updateEmployee($id, $name, $email) {
        $query = "UPDATE employees SET name = :name, email = :email WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function deleteEmployee($id) {
        $query = "DELETE FROM employees WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
?>
