<?php

session_start();
if(!isset($_SESSION['login'])){
	header('Location: telalogin.php');
	exit;
}

include 'utensilios.php';
$utensilios = new Utensilios();

if(!empty($_POST['nomeUtensilio'])){



	$utensilios->setNomeUtensilio($_POST['nomeUtensilio']);
	$utensilios->setEspecificacao($_POST['especificacao']);
	$utensilios->setQuantidade($_POST['quantidade']);
	$utensilios->setTelefone($_POST['telefone']);
	$utensilios->incluirUtensilio();
	include 'cadutensilios.php';
	

//}else{
//	if(@$_GET['acao'] == 'excluir'){
//		if($usuario->deletaUsuario($_GET['id_usuario'])){
//			echo "<script>alert('Dado excluído com sucesso!');</script>";
//			header('Location: controllerutensilios.php');
//			
//		} else {
//			echo "<script>alert('Erro na exclusão!');</script>";
//			header('Location: controllerutensilios.php');
//		}
         

//	}
}

?>