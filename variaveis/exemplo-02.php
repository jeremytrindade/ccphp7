<?php
/*
$anoNascimento = 1990;

$nomeCompleto = "";



//$1nome não funciona

 //$this e outras varaveis predefinidas também não podem/devem ser usadas
*/
$nome1 = "João";

$sobrenome = "Rangel";

// $nomeCompleto = $nome . $sobrenome; se fizesse assim o resultado da concatenação seria colado, ou seja JoãoRangel e para meter o espaço é assim:

$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;


exit;//serve para não executar nada daqui para baixo

echo $nome1;

echo "<br>";

unset($nome1);
if (isset($nome1)){ //verificar se o valor foi definido
	echo "$nome1";
}



?>