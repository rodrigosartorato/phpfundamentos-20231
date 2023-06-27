<?php

namespace App\Uteis;

class Conexao extends \PDO {
    public function __construct(array $dados)  {

        $dsn = "sqlite:{$dados['banco-de-dados']}";
        $username = null;
        $password = null;
        $options = null;
        $options = [
            \PDO::ATTR_ERRMODE => $dados['modo-de-erro']
        ];
        parent::__construct($dsn, $username, $password, $options);

    }
}