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

function forcaSenha($senha){

$tamanho = strlen($senha) >= 8;
$maiscula = preg_match('/[A-Z]/', $senha);
$minuscula = preg_match('/[a-z]/', $senha);
$contarNumeros =  preg_match_all('/[0-9]/', $senha);
$contarCaracteresEsp = preg_match_all('/[@, #, $, &, *, °]/', $senha);

if($tamanho && $maiscula && $minuscula && $contarNumeros && $contarCaracteresEsp){
    return "Forte";
}elseif  ($tamanho || $maiscula || $minuscula || $contarNumeros || $contarCaracteresEsp){
    return "Medio";

}

return "Fraca";

$nivel = forcaSenha($senha);

echo "O nivel da senha é: " . $nivel;

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


$resultado  = forcaSenha($senha);

echo "<br><br> O nivel da senha é: " . $resultado;

}


analisarSenha();



?>