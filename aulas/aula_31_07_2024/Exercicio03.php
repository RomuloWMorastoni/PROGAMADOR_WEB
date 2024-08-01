<?php

/*
03 - Crie uma função que retorne um objeto do tipo "stdClass()".
O objeto deverá ser um objeto de nome "$oPessoa" e deverá conter os seguintes atributos:
codigo
nome
idade
estado
cidade
endereco
numero
telefone
Após isso, mostre na tela os dados do objeto, descrevendo cada um deles.
*/ 

function getPessoa (){
    $oPessoa = new stdClass();
    $oPessoa->codigo = 1;
    $oPessoa->nome = 'Rômulo';
    $oPessoa->idade = 28;
    $oPessoa->estado = 'SC';
    $oPessoa->cidade = 'Rio do Sul';
    $oPessoa->endereco = 'R. Wenceslau Borini';
    $oPessoa->numero = 123;
    $oPessoa->telefone = "47999999999";

    return $oPessoa;
}

echo json_encode(getPessoa());