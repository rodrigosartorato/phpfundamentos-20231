<?php

require 'validation.php';
require 'validation2.php';

use Zend\Library\Validation;
use MeuProjeto\Validation as Validation2;

$val = new Validation;
$val2 = new Validation2;

$val->data();

var_dump($val, $val2);

