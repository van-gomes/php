<?php

// União +

$array1 = [0 => 'PHPBA', '1' => 'PHPSP', 2 => 'PHPSE'];
$array2 = [3 => 'he4rtdevs'];

print_r($array1 + $array2);

/**
Retorna:

Array
(
    [0] => PHPBA
    [1] => PHPSP
    [2] => PHPSE
    [3] => he4rtdevs
)
**/

// Igualdade ==

$array3 = [0 => 1];
$array4 = [0 => 1];

echo $array3 == $array4;

//Retorna: 1, significa que os valores dos arrays são iguais

// Diferença != ou <>

$array5 = [0 => 1];
$array6 = [0 => 2];

echo $array5 != $array6;

//Retorna: 1, significa que os valores dos arrays são diferentes

/** Idêntico === 
 * Verifica se valores dos arrays são iguais e do mesmo tipo. */

$array7 = [0 => 1];
$array8 = [0 => 1];

echo $array7 === $array8;

//Retorna: 1, significa que os valores dos arrays são iguais e do mesmo tipo (número inteiro)

// Não idêntico !==

$array9 = [0 => 1];
$array = [0 => '1'];

echo $array9 !== $array;

//Retorna: 1, significa que os valores dos arrays não são iguais e/ou não são do mesmo tipo (número inteiro)

/** Notas 
 * No PHP, o índice de um array começa a partir de zero 0;
 * Um retorno zero significa falso;
 * Arrays e matrizes são a mesma coisa;
 * A função print_r() é muito útil para testar arrays; */

?>