<?php
require_once 'config.php';
require_once 'Employee.php';

// Obter dados do formulário
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

// Instanciar objeto Employee
$employee = new Employee();

// Atualizar funcionário
$employee->updateEmployee($id, $name, $email);

header('Location: index.php');
?>
