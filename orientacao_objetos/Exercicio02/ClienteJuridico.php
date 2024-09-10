<?php

require_once('Clientes.php');
class ClienteJuridico extends Clientes{

    //atributos
    public $cnpj;

    function getPessoa(){
        return 'CNPJ: ' . $this->cnpj . '<hr>' ;
    }

}