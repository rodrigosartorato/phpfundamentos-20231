<?php

namespace App\Repositorio;

use App\Entidade\Curso as CursoEntidade;

class Curso extends RepositorioBase {
    public function todos(): array {
        $resultado = $this->select('cursos');
        $cursosObjectos = [];

        foreach($resultado as $curso) {
            $cursosObjectos[] = CursoEntidade::fromArray($curso);
        }

        return $cursosObjectos;
    }
}