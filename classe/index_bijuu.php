<?php 

	require_once '../classe/classe_bijuu.php'; 

	$bijuu = array();

	$bijuu[0] = new Bijuu("Raposa","Nove caudas","Amarela");
	$bijuu[0]->Caracteristicas();

	echo "<br>";

	$bijuu[1] = new Bijuu("Gato","Duas caudas","Azul");
	$bijuu[1]->Caracteristicas();

?>