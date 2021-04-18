<?php 

	require_once '../heranca/classe_veiculo.php';
	require_once '../heranca/extend_carro.php';
	require_once '../heranca/extend_moto.php'; 

	$carro = new Carro("BMW","Vermelha","2020");
	$carro->Andar();
	$carro->Parar();
	$carro->Parabrisa();

	echo"<br>";

	$moto = new Moto("Harley","Vermelha","2019");
	$moto->Andar();
	$moto->Parar();
	$moto->DarGrau();

?>