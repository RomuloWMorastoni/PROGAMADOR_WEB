<?php

/*
01 - Crie um array em PHP com uma lista de 5 frutas(String)Utilizando o comando "FOREACH" em PHP, 
percorra o array e imprima os dados na tela.
*/ 

$aFrutas = array('Banana', 'Laranja', 'Maçã', 'Mamão', 'Melão');

foreach($aFrutas as $key => $value){
    echo '<li>Posição: ' . $key;
    echo ' - ' . $value;
}
