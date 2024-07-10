<?php

require_once 'calcularArea.php';

class Teste1 {
	public function realizaTeste1() {
		$calculadora = new CalculadoraArea();
		$ladoQuadrado = 5;
		$areaQuadrado = $calculadora->areaQuadrado($ladoQuadrado);
		echo "Área do quadrado com lado $ladoQuadrado: $areaQuadrado <br>";
		$larguraRetangulo = 4;
		$alturaRetangulo = 6;
		$areaRetangulo = $calculadora->areaRetangulo($larguraRetangulo, $alturaRetangulo);
		echo "Área do retângulo com largura $larguraRetangulo e altura $alturaRetangulo: $areaRetangulo <br>";
		$raioCirculo = 3;
		$areaCirculo = $calculadora->areaCirculo($raioCirculo);
		echo "Área do círculo com raio $raioCirculo: $areaCirculo";
	}
}

$teste = new Teste1();
$teste->realizaTeste1();

?>