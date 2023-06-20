<?php

error_reporting(E_ALL); //mostra todos os erros, inclusive notices
ini_set('display_errors', 1); //1 para on e 0 para off, no 0, ele não mostra os erros no display. Mas pro usuario final é bom deixar sempre desligado
ini_set('log_errors', 1); //deixa os logs para serem gravados
ini_set('error_log','caminho de onde quero salvar os logs'); //salva os logs gerados no "log_errors"

set_error_handler(function ($errno, $errstr, $errfile, $errline) { //essa função trata os erros que seriam jogados na tela. Com isso, podemos tratar cada erro no nosso sistema de forma mais dinamica ou transforma-los em exceções para um try catch
    switch ($errno) {
        case E_WARNING:
            ECHO "Aviso: Isso é perigoso \n";
            break;
        case E_NOTICE:
            echo "Melhor não fazer isso \n";
            break;
    }
});

echo $variavel;
echo @$array[12]; //o "@" serve como supressor de erros, ele esconde o erro e o código roda normalmente, PORÉM, não devemos utiliza-lo, devemos SEMPRE corrigir o erro


//Nesta aula, vimos bastante sobre erros e configurações relacionadas a eles.
//
//Como devemos deixar as configurações relacionadas a erro em nossos ambientes de desenvolvimento e produção?
//
//Alternativa correta
//Exibição de todos os tipos de erro em ambiente de desenvolvimento
//
//
//Alternativa correta! Nos ambientes de desenvolvimento, devemos ver todos os erros na tela, para que não deixemos que eles se acumulem e corrijamos o quanto antes.
//
//Alternativa correta
//Logs de erro habilitados e exibição dos erros desabilitada em produção
//
//
//Alternativa correta! Embora não possamos exibir os erros diretamente em produção, por motivos de segurança e usabilidade, é importante saber se há erros acontecendo,
// por isso devemos habilitar o log de erros em produção.