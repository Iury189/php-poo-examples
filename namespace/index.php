<?php
	
	require_once 'model/aluno.php';
	require_once 'view/aluno.php';
	require_once 'controller/aluno.php';

	use model\Aluno as AlunoModel;
	use view\Aluno as AlunoView;
	use controller\Aluno as AlunoController;

	$aluno1 = new AlunoModel();
	$aluno1->Imprimir();

	$aluno2 = new AlunoView();
	$aluno2->Imprimir();

	$aluno3 = new AlunoController();
	$aluno3->Imprimir();

?>