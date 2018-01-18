<?php
//tipo basico de varaveis
$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;
////////////////////////////////////
//tipos compostos
$frutas = array('abacaxi', 'laranja','manga' );

//echo $frutas[2];

$nascimento = new datetime();

//var_dump($nascimento);
////////////////////////////
//tipos especiais
$arquivo = fopen("exemplo-03.php","r");

//var_dump($arquivo);
///////////////////////////////
//tipo nulo e vazio
$nulo = null;// não tem valor
$vazio = "";// o valor foi iniciado, ou seja ja ocupa espaço.


?>