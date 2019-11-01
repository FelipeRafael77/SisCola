<?php

session_start();

if(!isset($_SESSION['login'])){
	header('Location: telalogin.php');
	exit;
}

include 'multa.php';
$multa = new Multa();


if(!empty($_POST['data'])){

    $multa->setData($_POST['data']);
	$multa->setValor($_POST['valor']);
	$multa->setDevolucao($_POST['select_devolucao']);
    $multa->incluirMulta();
    header('Location: cadmulta.php');

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