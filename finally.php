<?php

function a(): int
{
    try {
        echo "Código ";
        throw new Exception('Exceção aqui');
        return 0;
    } catch (Throwable $e) {
        echo "Problema " . PHP_EOL;
        return 1;
    } finally { //o finally é útil quando temos um retorno tanto no try quanto no catch mas precisamos que algo a mais seja executado, pq primeiro ele vai executar o finally e depois ele vai dar o retorno.
        echo "Final da Função" . PHP_EOL;
    }
}

echo a();

//No último vídeo, vimos que o uso realmente necessário do finally é raro.
//Quando realmente precisamos da construção finally em nosso código?
//Resp.: Quando queremos executar um código mesmo após a instrução return, que pode estar no try ou no catch
//
//Alternativa correta! O bloco finally é executado mesmo que nos blocos try ou catch existam uma instrução que interrompa a execução do método, como return ou throws.



