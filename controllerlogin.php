<?php

// session_start();

// if(!isset($_SESSION['login'])){
// 	header('Location: telalogin.php');
// 	exit;
// }

include 'login.php';
$login = new Login();

if(!empty($_POST['login'])){

	$login->setLogin($_POST['login']);
	$login->setSenha(base64_encode($_POST['senha']));
	$login->incluirLogin();
	header("Location: telalogin.php");
}
echo "<script>alert('Problema para incluir usuário!');</script>";
header("Location: telalogin.php");

//}else{
//	if(@$_GET['acao'] == 'excluir'){
//		if($usuario->deletaUsuario($_GET['id_usuario'])){
//			echo "<script>alert('Dado excluído com sucesso!');</script>";
//			header('Location: controllerfornecedores.php');
			
//		} else {
//			echo "<script>alert('Erro na exclusão!');</script>";
//			header('Location: controllerfornecedores.php');
//		}
         

	//}


?>