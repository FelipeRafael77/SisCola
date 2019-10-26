<?php

session_start();

if(!isset($_SESSION['login'])){
	header('Location: telalogin.php');
	exit;
}

include 'fornecedores.php';
$fornecedores = new Fornecedores();

if(!empty($_POST['nomeFornecedor'])){



	$fornecedores->setNomeFornecedor($_POST['nomeFornecedor']);
	$fornecedores->setCnpjFornecedor($_POST['cnpjFornecedor']);
	$fornecedores->setEnderecoFornecedor($_POST['enderecoFornecedor']);
	$fornecedores->setTelefoneFornecedor($_POST['telefoneFornecedor']);
	$fornecedores->incluirFornecedor();
	include 'cadfornecedores.php';
	

//}else{
//	if(@$_GET['acao'] == 'excluir'){
//		if($usuario->deletaUsuario($_GET['id_usuario'])){
//			echo "<script>alert('Dado excluído com sucesso!');</script>";
//			header('Location: controllerfornecedores.php');
//			
//		} else {
//			echo "<script>alert('Erro na exclusão!');</script>";
//			header('Location: controllerfornecedores.php');
//		}
         

//	}
}

?>