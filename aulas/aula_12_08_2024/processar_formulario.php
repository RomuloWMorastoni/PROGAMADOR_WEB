<?php

$arquivo_json = 'usuario.json';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $codigo = $_post['codigo'];
    $nome = $_post['nome'];
    $email = $_post['email'];
    $senha = $_post['senha'];

    $usuario = [
        'codigo' => $codigo,
        'nome' => $nome,
        'email' => $email,
        'senha' => $senha
    ];

    if(file_exists($arquivo_json))
}