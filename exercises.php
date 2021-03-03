<?php
function media(...$number)
{
    $sum = 0;
    foreach ($number as $num) {
        $sum += $num;
    }
    return $sum / count($number);
}
echo media(5, 3, 2, 1, 16, 92) . PHP_EOL;

function celsiusToFarenheit($celsius)
{
    return ($celsius * 1.8 + 32);
}
echo celsiusToFarenheit(100) . PHP_EOL;

function metersToCentimeters($meters)
{
    return $meters * 100;
}
echo metersToCentimeters(0.53) . PHP_EOL;

function printBiggerSmaller(...$numbers) 
{
    echo max($numbers) . " / " . min($numbers);
}
echo printBiggerSmaller(5, 3, 1, 0, -62, 165, 164, 6, -1, -99) . PHP_EOL;

function week_day($number) 
{
    $week = array("Domingo", "Segunda", "Terça", "Quarta",
     "Quinta", "Sexta", "Sabado");
    if ($number > 0 && $number < 8) {
        echo $week[($number-1)];
    } else {
        echo "Valor inválido";
    }
}
echo week_day(7) . PHP_EOL;

function isTriangle($l1, $l2, $l3)
{
    if ($l1 == 0 || $l2 == 0 || $l3 == 0) {
        echo "Não pode ser um triangulo";
        return;    
    }

    if (($l1 + $l2 > $l3) || ($l2 + $l3 > $l1) || ($l1 + $l3 > $l2)) {
        if ($l1 == $l2 && $l2 == $l3) {
            echo "Os lados formam um triângulo Equilátero";
        } else if ($l1 == $l2 || $l1 == $l3 || $l2 == $l3) {
            echo "Os lados formam um triângulo Isósceles";
        } else {
            echo "Os lados formam um triângulo Escaleno";
        }
    } else {
        echo "Não pode ser um triangulo";
    }
}
isTriangle(0, 0, 0) . PHP_EOL;
echo "Teste";
