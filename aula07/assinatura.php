<?php
function area($largura, $altura){
    return $largura * $altura;
}

function multiplica($valor1, $valor2){
    return $valor1 * $valor2;
}

function algebra($a, $b, $c){
    return $a * $b + $c;
}

class Exemplo{
    function areaRetangulo($largura, $altura){
        return $largura * $altura;
    }

    function areaCirvulo($raio){
        $pi = 3.1415;
        return $pi * $raio * $raio;
    }
}

?>