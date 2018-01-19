<?php
////// Escopo de variavel

$nome = "Glaucio";
function teste() {

	global $nome;// serve para poder ir buscar uma variavel seja la onde ela estiver, mas a mesma nºao sera vista noutra função sem ela ser chamada como aqui.
	echo $nome;

}

function teste2() {

	$nome = "João";
	echo $nome." agora no teste2";

}

teste();
teste2();
?>	