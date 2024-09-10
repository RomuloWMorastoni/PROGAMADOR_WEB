<?php

require_once('Calculadora.php');

$oCalculadora01 = new Calculadora();

$oCalculadora01->valor1 = 5;
$oCalculadora01->valor2 = 5;
$oCalculadora01->Somar();
$oCalculadora01->Subtrair();
$oCalculadora01->Multiplicar();
$oCalculadora01->Dividir();