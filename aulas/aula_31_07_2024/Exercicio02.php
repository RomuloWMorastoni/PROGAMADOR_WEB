<?php

/*
02 - Crie uma função que retorna um array em PHP com uma lista de 5 nomes(String)
Após isso, utilizando o comando "FOREACH" em PHP, chame a função utilizando a palavra reservada "list";
Mostre os dados retornados na tela.
*/ 

function getNomePessoa (){
    return array('Bruna', 'Hélton', 'Rômulo', 'Phâmela', 'Gelvázio');
}

$aListaPessoa = getNomePessoa();

foreach($aListaPessoa as $posicao => $pessoa){
    echo '<li>Posição: ' . $posicao;
    echo ' - ' . $pessoa;

}