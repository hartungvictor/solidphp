<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\AluraMais;
use Alura\Solid\Model\Curso;

class Assistidor
{

    public function assisteCurso(Pontuavel $conteudo)
    {
        $conteudo->assistir();
    }

    
}
