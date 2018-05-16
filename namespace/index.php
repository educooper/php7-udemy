<?php

require_once("config.php");

$cad = new Cadastro();

$cad->setNome("Djalma Sildeaux");

$cad->setEmail("djalma@hcode.com");

$cad->setSenha("123456");


echo $cad;

 ?>
