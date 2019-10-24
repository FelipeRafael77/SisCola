<?php

session_start();

if(!isset($_SESSION['login'])){
	header('Location: telalogin.php');
	exit;
}

include 'historicocaixa.php';
$historicocaixa = new Historico_Caixa();


if(!empty($_POST['descricao'])){

    $historicocaixa->setDescricao($_POST['descricao']);
    $historicocaixa->incluirHistoricoCaixa();
    include 'cadhistoricocaixa.php';
	

//}else{
//	if(@$_GET['acao'] == 'excluir'){
//		if($usuario->deletaUsuario($_GET['id_usuario'])){
//			echo "<script>alert('Dado excluído com sucesso!');</script>";
//			header('Location: controllerdevolucao.php');
			
//		} else {
//			echo "<script>alert('Erro na exclusão!');</script>";
//			header('Location: controllerdevolucao.php');
//		}
         

	//}
}

?>