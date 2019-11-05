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
	header('Location: caddevolucao.php');
	

}else{
	if(@$_GET['acao'] == 'excluir'){
		if($devolucao->excluirDevolucao($_GET['id'])){
			echo "<script>alert('Dado excluído com sucesso!');</script>";
			header('Location: listdevolucao.php');
			
		} else {
			echo "<script>alert('Erro na exclusão!');</script>";
			header('Location: listdevolucao.php');
		}
         

	}
}

?>