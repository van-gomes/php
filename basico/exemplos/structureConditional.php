<?php

	$idade = 17;

	if ($idade >= 18) {
	    echo "Você é maior de idade";
	} else {
	    echo "Você é menor de idade";
	}

	// Result: "Você é menor de idade"

	$userDaniel = "danielhe4rt";
	$passDaniel = "secret123";

	$userCaio = "caioarruda";
	$passCaio = "caiozin123";

	if ($userDaniel == "danielhe4rt" && $passDaniel == "secret123") {
	    echo "Olá danielhe4rt, seja bem vindo";
	} else if ($userCaio == "caiozin" && $passCaio == "321321") {
	    echo "Olá caiozin, seja bem vindo";
	} else {
	    echo "Credenciais incorretas";
	}

	// Result: "Olá danielhe4rt, seja bem vindo"

?>