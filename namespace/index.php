<?php
	
	require_once 'model/aluno.php';
	require_once 'view/aluno.php';
	require_once 'controller/aluno.php';

	use model\Aluno as AlunoModel;
	use view\Aluno as AlunoView;
	use controller\Aluno as AlunoController;

	$aluno1 = new AlunoModel();
	$aluno2 = new AlunoView();
	$aluno3 = new AlunoController();

	$aluno1->Imprimir();	
	$aluno2->Imprimir();
	$aluno3->Imprimir();

?>
