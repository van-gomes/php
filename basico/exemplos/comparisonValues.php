<?php

var_dump(1 == 1); //true
var_dump('1' == 1); //true
var_dump('1'!= 1); //false => != testa se o valor é diferente

var_dump('1' === 1); //false => verifica se o valor e o tipo são idênticos
var_dump('3' === '3'); //true
var_dump('1' !== 1); //true

var_dump(10 > 20); //false
var_dump(10 < 20); //true
var_dump(10 <= 20); //true
var_dump(10 >= 20); //false
var_dump(20 == 20); //true

/**
 * Notas
 * O PHP tenta converter os valores na comparação de igual duplo ==, e diferente !=;
 * Por isso que a string '123'' é igual == ao número 123 e o retorno é true, mas não é idêntica ===;
 * Na comparação de idênticos === o PHP não tenta converter os valores;
 * Por isso, quando você tenta comparar se a string '123' é idêntica === ao número 123, o retorno é
 * false, ou seja, diferente.
*/

?>