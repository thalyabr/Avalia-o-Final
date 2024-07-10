<?php

require_once 'fatorial.php';

class Teste3 {
	public function realizaTeste3 () {
        $calculadora = new CalculadoraFatorial();
        $numero = 5;
        $resultado = $calculadora->calcular($numero);
        echo "Fatorial de $numero: $resultado <br>";

//Teste da exceção (erro).
        $numero = -5;
        $resultado = $calculadora->calcular($numero);
        echo "Fatorial de $numero: $resultado";
	}
}

$teste = new Teste3();
$teste->realizaTeste3();

?>