<?php

function contarLetrasMaiusculas($senha) {
    preg_match_all('/[A-Z]/', $senha, $matches);
    $quantidade = count($matches[0]);
    return $quantidade;

}

function contarLetrasMinusculas($senha) {
    preg_match_all('/[a-z]/', $senha, $matches);
    $quantidade = count($matches[0]);
    return $quantidade;

}

function contarNumeros($senha){
    preg_match_all('/[0-9]/', $senha, $matches);
    $quantidade = count($matches[0]);
    return $quantidade;

}

function contarCaracterEspecial($senha){
    preg_match_all('/[@, #, $, &, *, °]/', $senha, $matches);
    $quantidade = count($matches[0]);
    return $quantidade;

}

function tamanhoSenha($senha){
$tamanho = strlen($senha);
return $tamanho;

}




function analisarSenha() {

$senha = "gabe#2942AAa";

echo "A senha é: " . $senha;

$resultado = contarLetrasMaiusculas($senha);

echo "<br><br> A senha possui " . $resultado . " letra(s) maiscula(s)";

$resultado = contarLetrasMinusculas($senha);

echo "<br><br> A senha possui " . $resultado . " letra(s) minuscula(s)";

$resultado = contarNumeros($senha);

echo "<br><br> A senha possui " . $resultado . " Numeros";

$resultado = contarCaracterEspecial($senha);

echo "<br><br> A senha possui " . $resultado . " Caracteres Especiais";

$resultado = tamanhoSenha($senha);

echo "<br><br> O tamanho da senha é de: " . $resultado . " Caracteres";


}


analisarSenha();



?>