<?php

require_once 'primo.php';

class Teste5 {
	public function realizaTeste5() {
		$verificador = new VerificadorNumeroPrimo();
		$numero1 = 15;
		if ($verificador->ehPrimo($numero1)) {
			echo "$numero1 é primo.<br>";
} else {
    echo "$numero1 não é primo.";
}

	}
}

$teste = new Teste5();
$teste->realizaTeste5();

?>