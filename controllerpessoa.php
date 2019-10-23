<?php

session_start();

if(!isset($_SESSION['login'])){
	header('Location: telalogin.php');
	exit;
}

include 'pessoa.php';
$pessoa = new Pessoa();

var_dump($_POST);
if(!empty($_POST['nome'])){
//var_dump($_POST);
	echo "controller";
    $pessoa->setNome($_POST['nome']);
	$pessoa->setRg($_POST['rg']);
	$pessoa->setCpf($_POST['cpf']);
	$pessoa->setEndereco($_POST['endereco']);
	$pessoa->setTelefone($_POST['telefone']);
	$pessoa->setRegProf($_POST['regprof']);
	$pessoa->setMatAluno($_POST['mataluno']);
	$pessoa->setStatus($_POST['status']);
	$pessoa->setLogin($_POST['login']);
	$pessoa->setTipo($_POST['tipo']);
    $pessoa->incluirPessoa();

//}else{
//	if(@$_GET['acao'] == 'excluir'){
//		if($usuario->deletaUsuario($_GET['id_usuario'])){
//			echo "<script>alert('Dado excluído com sucesso!');</script>";
//			header('Location: controllerpessoa.php');
			
//		} else {
//			echo "<script>alert('Erro na exclusão!');</script>";
//			header('Location: controllerpessoa.php');
//		}
         

	//}
}

?>