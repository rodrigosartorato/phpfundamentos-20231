<?php
require_once 'config.php';
require_once 'Employee.php';

// Obter ID do funcionário a ser excluído
$id = $_POST['id'];

// Instanciar objeto Employee
$employee = new Employee();

// Excluir funcionário
$employee->deleteEmployee($id);

header('Location: index.php');
?>
