<?php
ini_set('display_errors', '1');
$nome = "hcode";

$site = 'www.hacode.com.br';

$ano = 1990;

$salario = 5500.99;

$bloqueado = false;

//////////////////////////////////////////////////////////////

$frutas = array("abacaxi","laranja","manga","mamão","ameixa");

echo $frutas[3];
echo "<br/>";
$nascimento = new DateTime();

var_dump(%$nascimento);

///////////////////////////////////////////////////////////////

$arquivo = fopen("exemplo-02.php" , "r");

var_dump($arquivo);

?>
