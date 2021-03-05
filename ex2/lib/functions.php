<?php

function get_pets()
{
    $petsJson = file_get_contents('data/pets.json');
    $pets = json_decode($petsJson, true);

    return $pets;
}

function save_pets($petsToSave)
{
    $json = json_encode($petsToSave, JSON_PRETTY_PRINT);
    file_put_contents('data/pets.json', $json);
}

function validCpfHelper($array, $peso) 
{
    $soma = 0;

    for($i = 0; $i < strlen($array); $i++) {
        $soma+= $array[$i] * $peso;
        $peso--;
    }
    return $soma;
}

function isValidCpf($cpf)
{
    if(strlen($cpf) != 11){
        echo "CPF Inválido";
        return false;
    }

    $currentCPF = substr($cpf, 0, 9);
    echo $currentCPF . PHP_EOL;
    $digit1 = 11 - (validCpfHelper($currentCPF, 10) % 11);
    if($digit1 > 9) {
        $digit1 = 0;
    }

    $currentCPF = $currentCPF . $digit1;

    $digit2 = 11 - (validCpfHelper($currentCPF, 11) % 11);
    if($digit2 > 9) { // resto da divisão é igual a 0 ou 1
        $digit2 = 0;
    }

    if($digit1 == $cpf[9] && $digit2 == $cpf[10]){
        echo "CPF Válido";
        return true;
    } else {
        echo "CPF Inválido";
        return false;
    }

    return false;
}