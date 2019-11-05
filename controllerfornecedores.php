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
	header('Location: cadfornecedores.php');
	

}else{
	if(@$_GET['acao'] == 'excluir'){
		if($fornecedores->excluirFornecedor($_GET['id'])){
			echo "<script>alert('Dado excluído com sucesso!');</script>";
			header('Location: listfornecedores.php');
			
		} else {
			echo "<script>alert('Erro na exclusão!');</script>";
			header('Location: listfornecedores.php');
	}
         

  }
}

?>