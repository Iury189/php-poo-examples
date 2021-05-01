<?php  
	
	require_once 'classe_veiculo.php';
	
	$modelo = "Tesla Model Y";
	$cor = "Vermelha";
	$ano = 2021;
	
	$carro = new Veiculo($modelo,$cor,$ano);
	$carro->Caracteristicas();
	$carro->Estepe();

?>
