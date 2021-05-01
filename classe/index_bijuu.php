<?php 

	require_once '../classe/classe_bijuu.php'; 

	$bijuu = array();

	$raca = "Raposa";
	$tipo = "Nove caudas";
	$cor = "Amarela";

	$bijuu[0] = new Bijuu($raca,$tipo,$cor);
	$bijuu[0]->Caracteristicas();

	echo "<br>";

	$raca = "Gato";
	$tipo = "Duas caudas";
	$cor = "Azul";

	$bijuu[1] = new Bijuu($raca,$tipo,$cor);
	$bijuu[1]->Caracteristicas();

?>
