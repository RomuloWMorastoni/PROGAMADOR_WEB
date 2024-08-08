<?php

/*
04 - Crie um arquivo PHP de nome "calculadora.php", utilize o metodo auxiliar "formataNumFloat()", 
fazendo "require_once()" do arquivo Utils.php.
Neste arquivo crie 4 funcoes que recebam como parametro 3 valores:
$numero1
$numero2
$operacao
Deve ter uma função de nome "calcular()" para somar,dividir,subtrair,multiplicar.
Ao final, deve chamar esta função, passando 2 numeros e a operação, e deve mostrar o resultado.
Pode passar os valores fixos, mas deve mostrar o resultado correto.Deve fazer todas as operações, somar, 
dividir, subtrair,multiplicar.
*/ 

require_once("Utils.php");

function calculadora ($numero1, $numero2, $operacao){

    $resultado = 'Inválido!';
    
    $num1 = formataNumFloat($numero1);
    $num2 = formataNumFloat($numero2);

    if ($operacao == 'somar'){
        $resultado = $num1 + $num2;

    } else if ($operacao == 'subtrair'){
        $resultado = $num1 - $num2;

    } else if ($operacao == 'divisao'){
        $resultado = $num1 / $num2;

    } else if ($operacao == 'multiplicar'){
        $resultado = $num1 * $num2;

    }
    
    return $resultado;

}

echo calculadora("1,164", "2,684715", 'multiplicar');
// echo ('O resultado da operação ' . $operacao . 'é: ');