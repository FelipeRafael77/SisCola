<?php

session_start();

if(!isset($_SESSION['login'])){
	header('Location: telalogin.php');
	exit;
}

include 'itensemprestimo.php';
$itensemprestimo = new Itens_Emprestimo();


if(!empty($_POST['quantidade'])){

    $itensemprestimo->setQuantidade($_POST['quantidade']);
    $itensemprestimo->setUtensilios($_POST['idUtensilios']);
    $itensemprestimo->setEmprestimo($_POST['idEmprestimo']);
    $itensemprestimo->incluirItensEmprestimo();
	

//}else{
//	if(@$_GET['acao'] == 'excluir'){
//		if($usuario->deletaUsuario($_GET['id_usuario'])){
//			echo "<script>alert('Dado excluído com sucesso!');</script>";
//			header('Location: controllerdevolucao.php');
			
//		} else {
//			echo "<script>alert('Erro na exclusão!');</script>";
//			header('Location: controllerdevolucao.php');
//		}
         

	//}
}

?>