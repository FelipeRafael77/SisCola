<?php

session_start();

if(!isset($_SESSION['login'])){
	header('Location: telalogin.php');
	exit;
}

include 'tipo.php';
$tipo = new Tipo();

if(!empty($_POST['descricao'])){

    $tipo->setDescricao($_POST['descricao']);
    $tipo->incluirTipo();
	include 'cadtipo.php';
	

//}else{
//	if(@$_GET['acao'] == 'excluir'){
//		if($usuario->deletaUsuario($_GET['id_usuario'])){
//			echo "<script>alert('Dado excluído com sucesso!');</script>";
//			header('Location: controllertipo.php');
			
//		} else {
//			echo "<script>alert('Erro na exclusão!');</script>";
//			header('Location: controllertipo.php');
//		}
         

	//}
}

?>