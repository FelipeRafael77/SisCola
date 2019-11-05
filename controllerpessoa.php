<?php

session_start();

if(!isset($_SESSION['login'])){
	header('Location: telalogin.php');
	exit;
}

include 'pessoa.php';
$pessoa = new Pessoa();


if(!empty($_POST['nome'])){

    $pessoa->setNome($_POST['nome']);
	$pessoa->setRg($_POST['rg']);
	$pessoa->setCpf($_POST['cpf']);
	$pessoa->setEndereco($_POST['endereco']);
	$pessoa->setTelefone($_POST['telefone']);
	$pessoa->setRegProf($_POST['regprof']);
	$pessoa->setMatAluno($_POST['mataluno']);
	$pessoa->setStatus($_POST['status']);
	$pessoa->setLogin($_POST['select_login']);
	$pessoa->setTipo($_POST['select_tipo']);
    $pessoa->incluirPessoa();
    header('Location: cadpessoa.php');

}else{
	if(@$_GET['acao'] == 'excluir'){
		if($pessoa->excluirPessoa($_GET['id'])){
			echo "<script>alert('Dado excluído com sucesso!');</script>";
			header('Location: listpessoas.php');
			
		} else {
			echo "<script>alert('Erro na exclusão!');</script>";
			header('Location: listpessoas.php');
	}
}
}
?>