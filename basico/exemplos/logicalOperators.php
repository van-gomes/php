<?php

$a = true;
$b = true;

var_dump($a && $b);

//Retorna: bool(true)

$c = false;
$d = true;

var_dump($c || $d);

//Retorna: bool(true)

/** XOR ^, xor
 * Este operador lógico é conhecido como: OU Exclusivo, e vai retornar true se um dos operandos for verdadeiro, mas não ambos.
*/

$e = true;
$f = true;

var_dump($e ^ $f);

//Retorna: int(0) zero, ou seja, falso, pois ambos os operandos é verdadeiro;

$g = true;
$h = false;

var_dump($g ^ $h);

//Retorna: int(1), ou seja, true, pois apenas um dos operandos é verdadeiro;

$i = true;

var_dump(!$i;

//Retorna: bool(false), aqui negamos uma variável verdadeira e ela se tornou falsa.

?>