<?php
////// Conhecendo os operadores spaceship

$a = NULL;
$b = NULL;
$c = 10;


echo $a ?? $b ?? $c;

$b = 8;

echo $a ?? $b ?? $c;

// serve para mostrar o primeiro valor que nºao é nulo, dai neste momento ele mostrar apenas o 8 e ja não mostrar o 10.




?>	