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
    
    if (empty($palavras[0])) return '';
    
    $curta = $palavras[0];

    foreach ($palavras as $palavra){
        if (strlen($palavra) < strlen($curta)){
             $curta = $palavra;
        }
    }
    return $curta;

}




function processarTexto(){

$texto = "Arrascaeta e craque. O flamengo e selecao. E também o vini junior vai voltar";

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


}

processarTexto();

?>