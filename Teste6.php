<?php

require_once 'raizquadrada.php';

class Teste6 {
    public function realizaTeste6() {
        $calculadora = new CalculadoraRaizQuadrada();
        $numero = 25;
        $resultadoObtido = $calculadora->calcular($numero);
        echo "Raiz quadrada de 25: $resultadoObtido <br>";

//Teste da exceção (erro).
        $calculadora = new CalculadoraRaizQuadrada();
        $numero = -25;
        $resultadoObtido = $calculadora->calcular($numero);
        echo "Raiz quadrada de 25: $resultadoObtido";
    }
}

$teste = new Teste6();
$teste->realizaTeste6();

?>