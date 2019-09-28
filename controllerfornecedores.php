<?php

session_start();
if(!isset($_SESSION['login'])){
	header('Location: login.php');
	exit;
}

include 'fornecedores.php';
$fornecedores = new Fornecedores();

if(!empty($_POST['login'])){



	$usuario->setLogin($_POST['login']);
	$usuario->setSenha($_POST['senha']);
	$usuario->insereUsuario();
	include 'cadfornecedores.php';
	

}else{
	if(@$_GET['acao'] == 'excluir'){
		if($usuario->deletaUsuario($_GET['id_usuario'])){
			echo "<script>alert('Dado excluído com sucesso!');</script>";
			header('Location: controllerfornecedores.php');
			
		} else {
			echo "<script>alert('Erro na exclusão!');</script>";
			header('Location: controllerfornecedores.php');
		}
         

	}
}

?>