<?php

class Clientes {

    //atributos
    public $nome;
    public $email;
    public $telefone;

    public function exibir(){
        echo '<b>Nome do cliente:</b> ' . $this->nome . '<br>';
        echo '<b>Email:</b> ' . $this->email . '<br>';
        echo '<b>Telefone:</b> ' . $this->telefone . '<br>';
        echo '<b>Pessoa:</b> ' . $this->getPessoa() . '<br>';
    }

    public function getPessoa(){
       return 'Pessoa Padrao';
    }

}