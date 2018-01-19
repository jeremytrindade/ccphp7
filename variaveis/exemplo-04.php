<?php
///////////////variaveis predefinidas

//$nome = (int)$_GET["a"];
//para isto funcionar, é preciso meter o URI ou seja ?a=1


//var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"];// serve para ver ip do utilizador.
//o $_SERVER serve para ir buscar informação do ambiente e do servidor, o ambiente o utilizador.
echo $ip;
echo "<br>";
$ap = $_SERVER["SCRIPT_NAME"];
echo $ap;
?>	