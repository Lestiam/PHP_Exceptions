<?php

namespace Alura\Banco\Modelo\Conta;

class SaldoInsuficienteException extends \DomainException
{
    public function __construct(float $valorSaque, float $saldoAtual) //não preciso usar os parametros da classe mãe, aqui eu passo os parametros que eu quiser
    {
        $mensagem = "Você tentou sacar $valorSaque, mas tem apenas $saldoAtual em conta.";
        parent::__construct($mensagem); //só preciso passar os parametros da mensagem, os outros dois tem valores padrões
    }
}