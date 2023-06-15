<?php
//stack ou call stack, significa pilha -> a primeira a entrar é a ultima a sair

//Nos dois primeiros vídeos, nós entendemos o que é e como funciona a pilha de execução do PHP.
//Para que o PHP utiliza uma pilha para representar a execução dos códigos?

//Resp.: Para organizar a execução das funções e métodos
//
//
//Alternativa correta! A pilha da Zend Engine (interpretador do PHP) armazena as funções e os métodos que estão sendo executados.
// Além do bloco de código, na pilha ficam guardadas as variáveis e as referências referentes ao bloco. Assim, o PHP organiza a execução
// e sabe exatamente qual método está sendo executado, que é sempre o código no topo da pilha.
// O PHP também sabe quais outros métodos ainda precisam ser executados, que são justamente os que estão abaixo.


function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;

    try { //ele não vai parar a execução do programa mais, sóv ai lançar a mensagem que esta no catch
        funcao2();
    } catch (RuntimeException | DivisionByZeroError $erroOuExcecao) { //chama-se multi catch, um try catch que resolve diversos erros ao mesmo tempo
        echo $erroOuExcecao->getMessage() . PHP_EOL; // o get Message é um método que vem das calsses das excessões
        echo $erroOuExcecao->getLine(); //pega a linha do erro
        echo $erroOuExcecao->getTraceAsString(); //pega a pilha da execução
    }
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    $divisao = intdiv(5,0); //função que divide e considera todos os valroes passados como inteiros.
    $arrayFixo = new SplFixedArray(2); //cria um array de tamanho fixo
    $arrayFixo[3] = 'Valor';
    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
