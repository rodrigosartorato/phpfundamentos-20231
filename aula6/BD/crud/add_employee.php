<?php
require_once 'config.php';
require_once 'Employee.php';

// Obter dados do formulário
$name = $_POST['name'];
$email = $_POST['email'];

// Instanciar objeto Employee
$employee = new Employee();

// Adicionar funcionário
$employee->addEmployee($name, $email);

header('Location: index.php');
?>
