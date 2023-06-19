<?php

class MinhaExcecao extends DomainException //como é uma excecao que eu criei e eu estou lançando, faz sentido eu falar que ela faz parte do meu domínio, ou seja, uma exceção que faça sentido para as nossas regras de negócio.
{
    public function exibeIgor()
    {
        echo "Igor";
    }
}

try {
    throw new MinhaExcecao();
} catch (MinhaExcecao $e) {
    $e->exibeIgor();
}