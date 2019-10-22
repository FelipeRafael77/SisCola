<?php

session_start();

if(!isset($_SESSION['login'])){
	header('Location: telalogin.php');
	exit;
}

include 'devolucao.php';
$devolucao = new Devolucao();


if(!empty($_POST['dataDevolucao'])){

    $devolucao->setdataDevolucao($_POST['dataDevolucao']);
    $devolucao->incluirDevolucao();
	include 'caddevolucao.php';
	

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