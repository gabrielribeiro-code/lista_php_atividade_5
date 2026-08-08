<?php

function contarConsultas($consultas){
    $totalConsultas = count($consultas);
    return $totalConsultas;
}

function contarPacientes($consultas){

$pacientes = [];

foreach ($consultas as $consulta){
$nome = $consulta["paciente"];

$pacientes[$nome] = true;
return count($pacientes);

}

function contarEspecial($consultas){
$especialidades = [];

foreach ($consultas as $consulta){

$especialidade = $consulta["especialidade"];

if(isset($especialidades[$especialidade])){
    $especialidades[$especialidade]++;

}else{
    $especialidades[$especialidade] = 1;
}
}
return $especialidades;

}
}



function ordenacaoHorario($consultas) {

usort($consultas, function($a, $b){
return strcmp($a["horario"], $b["horario"]);

});
return $consultas;
}


function pAtendimento($consultas){

$ordenadas = ordenacaoHorario($consultas);

return  $ordenadas[0];

}

function uAtendimento($consultas){

$ordenadas = ordenacaoHorario($consultas);

$ultimo = count($ordenadas) -1;

return $ordenadas[$ultimo];

}


function pesqPaciente($consultas, $nome){

$resultado = [];

foreach ($consultas as $consulta){
if(strtolower($consulta["paciente"]) == strtolower($nome)) {
    $resultado[] = $consulta;
        }
    }
return $resultado;

}
function orgHorarios($consultas){

$horarios = [];
$duplicados = [];

foreach ($consultas as $consulta){

$horario = $consulta["horario"];

if(isset($horarios[$horario])){
    $duplicados[] = $horario;
}else{
    $horarios[$horario] = true;
        }
    }
 return $duplicados;
}






function organizarAgenda(){

$consultas = [
    "paciente 1" => [
        "nome" => "Bruno",
        "especialidade" => "Odontologia",
        "horario" => "15:00",
        "data" => "02/10/2025"
    ],

     "paciente 2" => [
        "nome" => "Davi",
        "especialidade" => "Psicologa",
        "horario" => "14:00",
        "data" => "06/08/2024"
    ],

     "paciente 3" => [
        "nome" => "Andre",
        "especialidade" => "Consulta geral",
        "horario" => "10:00",
        "data" => "02/02/2020"
    ],

    "paciente 3" => [
        "nome" => "Andre",
        "especialidade" => "Consulta geral",
        "horario" => "10:00",
        "data" => "02/02/2020"
    ],

];

$resultado = contarConsultas($consultas);

echo "O total de consultas é: " . $resultado;

$resultado = contarPacientes($consultas);

echo "O total de pacientes diferentes é: " . $resultado;

$resultado = contarEspecial($consultas);

echo "O total de especialidades é: " . $resultado;

}

?>