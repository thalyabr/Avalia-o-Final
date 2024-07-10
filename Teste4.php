<?php
 require_once 'gerarAleatorio.php';

 class Teste4 {
 	public function realizaTeste4() {
 		$gerador = new GeradorNumeroAleatorio();
 		$min = 1;
 		$max = 50;
 		$numeroAleatorio = $gerador->gerar($min, $max);
 		echo "Número aleatório entre $min e $max: $numeroAleatorio <br>";

//Teste da exceção (erro).
 		$min = 51;
 		$max = 50;
 		$numeroAleatorio = $gerador->gerar($min, $max);
 		echo "Número aleatório entre $min e $max: $numeroAleatorio";
 	}
 }

 $teste = new Teste4();
$teste->realizaTeste4();

 ?>