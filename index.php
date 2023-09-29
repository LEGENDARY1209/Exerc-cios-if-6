<?php
    // Cria um array com valores inteiros de 10 a 100, com incremento de 10
    $numeros = range(10, 100, 10);

    // Loop para percorrer o array
    foreach ($numeros as $numero) {
        // Pula para a próxima execução se o valor for 30 ou 40
        if ($numero == 30 || $numero == 40) {
            continue;
        }

        // Imprime o valor atual
        echo $numero . "<br>";
    }
?>
