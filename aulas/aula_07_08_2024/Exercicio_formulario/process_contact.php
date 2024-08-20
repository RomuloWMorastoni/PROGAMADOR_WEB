<?php


echo 'ola';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    
    echo "<h1>Dados Recebidos</h1>";
    echo "<p><strong>Nome:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Senha:</strong> $password</p>";
    
} else {
    echo "<p>Por favor, envie o formulário.</p>";
}