<?php

session_start();

if(!isset($_SESSION['login'])){
	header('Location: telalogin.php');
	exit;
}

include 'emprestimo.php';
$emprestimo = new Emprestimo();


if(!empty($_POST['tipoEmprestimo'])){

    $emprestimo->setTipoEmprestimo($_POST['tipoEmprestimo']);
	$emprestimo->setDataEmprestimo($_POST['dataEmprestimo']);
	$emprestimo->setPrazo($_POST['prazo']);
	$emprestimo->setPessoa($_POST['pessoa']);
    $emprestimo->incluirEmprestimo();
	include 'cademprestimo.php';
	

//}else{
//	if(@$_GET['acao'] == 'excluir'){
//		if($usuario->deletaUsuario($_GET['id_usuario'])){
//			echo "<script>alert('Dado excluído com sucesso!');</script>";
//			header('Location: controlleremprestimo.php');
			
//		} else {
//			echo "<script>alert('Erro na exclusão!');</script>";
//			header('Location: controlleremprestimo.php');
//		}
         

	//}
}

?>