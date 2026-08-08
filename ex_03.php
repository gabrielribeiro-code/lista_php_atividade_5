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

}
return count($pacientes);
}



function especialidades(){

}

function pesqPaciente(){

}
function orgHorarios(){


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

];

$resultado = contarConsultas($consultas);

echo "O total de consultas é: " . $resultado;

$resultado = contarPacientes($consultas);

echo "O total de pacientes diferentes é: " . $resultado;

}

?>