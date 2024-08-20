<?php

$arquivo_json = 'usuario.json';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $codigo = $_post['codigo'];
    $nome = $_post['nome'];
    $email = $_post['email'];
}