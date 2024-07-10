<?php

require_once 'converteMaiuscula.php';

class Teste2 {
	public function realizaTeste2() {
		$conversor = new ConversorString();
		$string = "Thalya";
		$stringMaiusculas = $conversor->paraMaiusculas($string);
		echo "Maiúscula: $stringMaiusculas <br>";
		$string = "Thalya";
		$stringMinusculas = $conversor->paraMinusculas($string);
		echo "Minúscula: $stringMinusculas";

	}
}

$teste = new Teste2();
$teste->realizaTeste2();

?>