<?php 

	require_once '../abstract/classe_veiculo.php';
	require_once '../abstract/extend_carro.php';
	require_once '../abstract/extend_moto.php';  

	$carro = new Carro("BMW","Vermelha","2020");
	$carro->Caracteristicas();
	$carro->Andar();

	echo"<br>";

	$moto = new Moto("Harley","Vermelha","2019");
	$moto->Caracteristicas();
	$moto->Andar();

?>