<?php

require_once('ClienteFisico.php');
require_once('ClienteJuridico.php');

$oCliente1 = new ClienteFisico();

$oCliente1->nome = 'Aluno da Silva';
$oCliente1->email = 'email.dasilva@email.com';
$oCliente1->telefone = '(47) 9999-9999';
$oCliente1->cpf = '123.456.789-12';
$oCliente1->exibir();

$oCliente2 = new ClienteJuridico();

$oCliente2->nome = 'Elto';
$oCliente2->email = 'email.elto@email.com';
$oCliente2->telefone = '(47) 9999-9999';
$oCliente2->cnpj = '12.345.678/0001-91';
$oCliente2->exibir();

$oClientes = new Clientes();
$oClientes->nome = 'Gelvazio';
$oClientes->email = 'email.elto@email.com';
$oClientes->telefone = '(47) 9999-9999';
$oClientes->exibir();