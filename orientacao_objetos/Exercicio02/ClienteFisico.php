<?php

require_once('Clientes.php');
class ClienteFisico extends Clientes{

    //atributos
    public $cpf;

    function getPessoa(){
       return 'CPF: ' . $this->cpf . '<hr>' ;
    }

}