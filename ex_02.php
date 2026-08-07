<?php

function contarCaracteres($texto){
    preg_match_all('/[A-Za-z]/', $texto, $matches);
    $quantidade = count($matches[0]);
    return $quantidade;
}

function contarPalavras($texto){
   $quantidade = str_word_count($texto);
    return $quantidade;

}


function contarFrases($texto){
    
    $frases = explode('.', $texto);

    $frases = array_filter(array_map('trim', $frases));

    $totalFrases = count($frases);

    return $totalFrases;
}

function palavraLonga($texto){

    $palavras = explode(" ", $texto);
    $longa = '';

    foreach ($palavras as $palavra){
        if (strlen($palavra) > strlen($longa)){
             $longa = $palavra;
        }
    }
    return $longa;

}

function palavraCurta($texto){

    $palavras = explode(" ", $texto);

    if (empty($palavras[0])) return ''; //Verifica se ta totalmente vazio.
    
    $curta = $palavras[0]; // é para nao dar erro na primeira palavra.

    foreach ($palavras as $palavra){
        if (strlen($palavra) < strlen($curta)){
             $curta = $palavra;
        }
    }
    return $curta;

}

function palavrasRep($texto){
    $palavras = explode (" ", $texto); 

    $conta = array_count_values($palavras);
    
    return $conta;

}

function formatarTexto($texto){
    $arrumar = ucwords($texto);
    return $arrumar;
}




function processarTexto(){

$texto = "Arrascaeta e craque. O flamengo e selecao. E também o vini junior vai voltar. Arrascaeta e craque. O flamengo e selecao. E também o vini junior vai voltar. Arrascaeta e craque. O flamengo e selecao. E também o vini junior vai voltar";

echo "O texto é: " . $texto;

$resultado = contarCaracteres($texto);

echo "<br><br> O texto possui:  " . $resultado . " Caracteres";

$resultado = contarPalavras($texto);

echo "<br><br> O texto possui:  " . $resultado . " Palavras";

$resultado = contarFrases($texto);

echo "<br><br> O texto possui:  " . $resultado . " Frases";


$resultado = palavraLonga($texto);

echo "<br><br> A palavra mais longa é:  " . $resultado;

$resultado = palavraCurta($texto);

echo "<br><br> A palavra mais curta é:  " . $resultado;

$resultado = palavrasRep($texto);

 $totalRepetidas = 0;

    foreach ($resultado as $palavra => $quantidade){
        if($quantidade > 1) {
            $totalRepetidas++;
        }
    }
    echo "<br><br> A quantidade de palavras repetidas é: " . $totalRepetidas;

    arsort($resultado);
    $cincoFrequentes = array_slice($resultado, 0, 5, true);

    echo "<br><br> As 5 palavras que mais se repetem são: <br><br>";
    foreach ($cincoFrequentes as $palavra => $quantidade){
     echo "-- \"$palavra\" aparece $quantidade vezes<br>";

    }


   $resultado = formatarTexto($texto);

   echo "<br><br> Texto arrumado conforme pedido na atividade com a primeira letra sendo maiscula: <br><br>" . $resultado;


}





processarTexto();

?>