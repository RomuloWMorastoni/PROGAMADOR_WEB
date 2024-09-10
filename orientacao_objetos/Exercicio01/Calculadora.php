<?php

class Calculadora {

    // Atributos
    public $valor1;
    public $valor2;

    //Métodos
    function Somar(){

        $resultado = $this->valor1 + $this->valor2;

        echo 'O resultado da soma é ' . $resultado .'.';

    }
    function Subtrair(){

        $resultado = $this->valor1 - $this->valor2;

        echo '<br>O resultado da subtração é ' . $resultado .'.';

    }
    function Multiplicar(){

        $resultado = $this->valor1 * $this->valor2;

        echo '<br>O resultado da multiplicação é ' . $resultado .'.';

    }
    function Dividir(){

        $resultado = $this->valor1 / $this->valor2;

        echo '<br>O resultado da divisão é ' . $resultado .'.';

    }

}