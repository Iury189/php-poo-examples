<?php 

	require_once '../interface/interface.php';
	require_once '../interface/implements_sistema.php';

	$sistema = new Sistema();
	$sistema->Create();
	$sistema->Read();
	$sistema->Update();
	$sistema->Delete();

?>